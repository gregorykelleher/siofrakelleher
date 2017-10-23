<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

class CachebusterPlugin extends Plugin
{
    public static function getSubscribedEvents() {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
        ];
    }

    /**
     * Activate plugin if path matches to the configured one.
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }
        /** @var Uri $uri */
        $uri = $this->grav['uri'];
        $route = $this->config->get('plugins.cachebuster.route');

        if ($route && $route == $uri->path()) {
            \Grav\Common\Cache::clearCache('all');
            echo('Your cache has been cleared.');
            exit();
        }
    }
}
