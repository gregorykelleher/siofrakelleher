<?php

/* partials/pagination.html.twig */
class __TwigTemplate_f51c6ca280e507b23c596d700b0e68ad2db1f0a7fe4501f0c5abe975a00ca4d6 extends Twig_Template
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
        echo "<nav class=\"pagination\" role=\"navigation\">
    ";
        // line 2
        if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", array())) {
            // line 3
            echo "        <a class=\"older-posts\" href=\"";
            echo ($context["base_url"] ?? null);
            echo $this->getAttribute(($context["pagination"] ?? null), "params", array());
            echo $this->getAttribute(($context["pagination"] ?? null), "nextUrl", array());
            echo "\">&larr; Older posts</a>
    ";
        }
        // line 5
        echo "    <span class=\"page-number\">Page ";
        echo $this->getAttribute(($context["uri"] ?? null), "currentPage", array());
        echo " of ";
        echo twig_length_filter($this->env, ($context["pagination"] ?? null));
        echo "</span>
    ";
        // line 6
        if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", array())) {
            // line 7
            echo "        <a class=\"newer-posts\" href=\"";
            echo ($context["base_url"] ?? null);
            echo $this->getAttribute(($context["pagination"] ?? null), "params", array());
            echo $this->getAttribute(($context["pagination"] ?? null), "prevUrl", array());
            echo "\">Newer posts &rarr;</a>
    ";
        }
        // line 9
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  41 => 7,  39 => 6,  32 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"pagination\" role=\"navigation\">
    {% if pagination.hasNext %}
        <a class=\"older-posts\" href=\"{{ base_url }}{{ pagination.params }}{{ pagination.nextUrl }}\">&larr; Older posts</a>
    {% endif %}
    <span class=\"page-number\">Page {{ uri.currentPage }} of {{ pagination|length }}</span>
    {% if pagination.hasPrev %}
        <a class=\"newer-posts\" href=\"{{ base_url }}{{ pagination.params }}{{ pagination.prevUrl }}\">Newer posts &rarr;</a>
    {% endif %}
</nav>
", "partials/pagination.html.twig", "/Users/gregory/Documents/sites/siofrakelleher.com/user/themes/notepad/templates/partials/pagination.html.twig");
    }
}
