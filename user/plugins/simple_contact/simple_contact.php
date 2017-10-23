<?php namespace Grav\Plugin;

use Grav\Common\Page\Page;
use Grav\Common\Plugin;

class Simple_ContactPlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigTemplatePaths'   => ['onTwigTemplatePaths', 0],
            'onTwigSiteVariables'   => ['onTwigSiteVariables', 0],
            'onPageInitialized'     => ['onPageInitialized', 0]
        ]);
    }

    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    public function onTwigSiteVariables()
    {
        if ($this->grav['config']->get('plugins.simple_contact.enabled')) {
            $this->grav['assets']
                ->add('plugin://simple_contact/assets/css/plugins/simple_contact/style.css')
                ->add('plugin://simple_contact/assets/js/plugins/simple_contact/script.js');
        }
    }

    public function onPageInitialized()
    {
        $this->mergePluginConfig($this->grav['page']);

        $config = $this->grav['config'];

        $options = $config->get('plugins.simple_contact');

        if ($options['enabled']) {
            $page   = $this->grav['page'];
            $twig   = $this->grav['twig'];
            $uri    = $this->grav['uri'];

            if (false === $uri->param('send')) {
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    if (false === $this->validateFormData()) {
                        $this->grav->redirect($page->slug() . '/send:error');
                    } else {
                        if (false === $this->sendEmail()) {
                            $this->grav->redirect($page->slug() . '/send:fail');
                        } else {
                            $this->grav->redirect($page->slug() . '/send:success');
                        }
                    }
                } else {
                    $old_content = $page->content();

                    $template = 'plugins/simple_contact/form.html.twig';
                    $data = [
                        'simple_contact' => $options,
                        'page' => $page
                    ];

                    $page->content($old_content . $twig->twig()->render($template, $data));
                }
            } else {
                switch ($uri->param('send')) {
                    case 'success':
                        $page->content($options['messages']['success']);
                    break;

                    case 'error':
                        $page->content($options['messages']['error']);
                    break;

                    case 'fail':
                        $page->content($options['messages']['fail']);
                    break;

                    default:
                    break;
                }
            }
        }
    }

    protected function validateFormData()
    {
        $form_data = $this->filterFormData($_POST);

        $name     = $form_data['name'];
        $email    = $form_data['email'];
        $message  = $form_data['message'];

        $antispam = $form_data['antispam'];

        return (empty($name) or empty($message) or empty($email) or $antispam) ? false : true;
    }

    protected function filterFormData($form)
    {
        $defaults = [
            'name'      => '',
            'email'     => '',
            'message'   => '',
            'antispam'  => ''
        ];

        $data = array_merge($defaults, $form);

        return [
            'name'      => $data['name'],
            'email'     => filter_var($data['email'], FILTER_SANITIZE_EMAIL),
            'message'   => $data['message'],
            'antispam'  => $data['antispam']
        ];
    }

    protected function sendEmail()
    {
        $form   = $this->filterFormData($_POST);
        $options = $this->grav['config']->get('plugins.simple_contact');

        $recipient  = $options['recipient'];
        $subject    = $options['subject'];

        $email_content = "Name: {$form['name']}\n";
        $email_content .= "Email: {$form['email']}\n\n";
        $email_content .= "Message:\n{$form['message']}\n";

        $email_headers = "From: {$form['name']} <{$form['email']}>";

        return (mail($recipient, $subject, $email_content, $email_headers)) ? true : false;
    }

    private function mergePluginConfig( Page $page )
    {
        $defaults = (array) $this->grav['config']->get('plugins.simple_contact');

        if (isset($page->header()->simple_contact)) {
            if (is_array($page->header()->simple_contact)) {
                $this->grav['config']->set('plugins.simple_contact', array_replace_recursive($defaults, $page->header()->simple_contact));
            } else {
                $this->grav['config']->set('plugins.simple_contact.enabled', $page->header()->simple_contact);
            }
        } else {
            $this->grav['config']->set('plugins.simple_contact.enabled', false);
        }
    }
}
