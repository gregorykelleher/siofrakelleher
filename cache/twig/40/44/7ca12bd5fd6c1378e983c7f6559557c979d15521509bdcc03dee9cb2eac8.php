<?php

/* plugins/simple_contact/form.html.twig */
class __TwigTemplate_40447ca12bd5fd6c1378e983c7f6559557c979d15521509bdcc03dee9cb2eac8 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"well well-sm\">
                <form class=\"form-horizontal\" action=\"";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array());
        echo "\" method=\"post\" id=\"simple_contact\">
                    <fieldset>
                        <legend class=\"text-center\">";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</legend>

                        ";
        // line 10
        echo "                        <div id=\"simple_contact-messages\"></div>

                        <!-- Name input-->
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\" for=\"name\">";
        // line 14
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["simple_contact"]) ? $context["simple_contact"] : null), "fields", array()), "name", array()), "label", array());
        echo "</label>
                            <div class=\"col-md-9\">
                                <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"";
        // line 16
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["simple_contact"]) ? $context["simple_contact"] : null), "fields", array()), "name", array()), "placeholder", array());
        echo "\" class=\"form-control\" />
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\" for=\"email\">";
        // line 22
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["simple_contact"]) ? $context["simple_contact"] : null), "fields", array()), "email", array()), "label", array());
        echo "</label>
                            <div class=\"col-md-9\">
                                <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"";
        // line 24
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["simple_contact"]) ? $context["simple_contact"] : null), "fields", array()), "email", array()), "placeholder", array());
        echo "\" class=\"form-control\" />
                            </div>
                        </div>

                        <!-- Message body -->
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\" for=\"message\">";
        // line 30
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["simple_contact"]) ? $context["simple_contact"] : null), "fields", array()), "message", array()), "label", array());
        echo "</label>
                            <div class=\"col-md-9\">
                                <textarea class=\"form-control\" id=\"message\" name=\"message\" placeholder=\"";
        // line 32
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["simple_contact"]) ? $context["simple_contact"] : null), "fields", array()), "message", array()), "placeholder", array());
        echo "\" rows=\"5\"></textarea>
                            </div>
                        </div>

                        <!-- Antispam input-->
                        <div class=\"form-group antispam-div\">
                            <label class=\"col-md-3 control-label\" for=\"antispam\">";
        // line 38
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["simple_contact"]) ? $context["simple_contact"] : null), "fields", array()), "antispam", array()), "label", array());
        echo "</label>
                            <div class=\"col-md-9\">
                                <input id=\"antispam\" name=\"antispam\" type=\"text\" placeholder=\"";
        // line 40
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["simple_contact"]) ? $context["simple_contact"] : null), "fields", array()), "antispam", array()), "placeholder", array());
        echo "\" class=\"form-control\" />
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class=\"form-group\">
                            <div class=\"col-md-12 text-right\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">";
        // line 47
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["simple_contact"]) ? $context["simple_contact"] : null), "fields", array()), "submit", array()), "label", array());
        echo "</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "plugins/simple_contact/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 47,  88 => 40,  83 => 38,  74 => 32,  69 => 30,  60 => 24,  55 => 22,  46 => 16,  41 => 14,  35 => 10,  30 => 7,  25 => 5,  19 => 1,);
    }
}
