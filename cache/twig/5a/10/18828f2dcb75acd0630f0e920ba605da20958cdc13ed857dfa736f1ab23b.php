<?php

/* partials/footer.html.twig */
class __TwigTemplate_5a1018828f2dcb75acd0630f0e920ba605da20958cdc13ed857dfa736f1ab23b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer class=\"summer-site-footer\">
    <div class=\"copyright\">
         <section><a href=\"";
        // line 3
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array());
        echo "\">&copy; ";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "name", array());
        echo "</a></section>
         <section>Proudly published with <a class=\"icon-ghost\" href=\"https://jekyllrb.com/\">Grav</a></section>
    </div>
    <div class=\"social-icons\">
        
        ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "twitter", array())) {
            // line 9
            echo "        <a href=\"http://twitter.com/";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "twitter", array());
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-twitter fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 16
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "google_plus", array())) {
            // line 17
            echo "        <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "google_plus", array());
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-google-plus fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 24
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "instagram", array())) {
            // line 25
            echo "        <a href=\"http://instagram.com/";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "instagram", array());
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-instagram fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 32
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "github", array())) {
            // line 33
            echo "        <a href=\"http://github.com/";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "github", array());
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-github fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 40
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "facebook", array())) {
            // line 41
            echo "        <a href=\"http://facebook.com/";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "facebook", array());
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-facebook fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 48
        echo "    </div>
    
    <div class=\"cf\"></div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 48,  91 => 41,  88 => 40,  77 => 33,  74 => 32,  63 => 25,  60 => 24,  49 => 17,  46 => 16,  35 => 9,  33 => 8,  23 => 3,  19 => 1,);
    }
}
