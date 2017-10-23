<?php

/* page.html.twig */
class __TwigTemplate_70cb8d26a449def7fe033b0d656382d8daf019ae819a1110d413286d87c9ee8b extends Twig_Template
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
        $this->loadTemplate("page.html.twig", "page.html.twig", 1, "110506854")->display($context);
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* page.html.twig */
class __TwigTemplate_70cb8d26a449def7fe033b0d656382d8daf019ae819a1110d413286d87c9ee8b_110506854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "page.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<body class=\"post-template page\" itemscope itemtype=\"http://schema.org/WebPage\">
";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <main id=\"summer-page-container\" class=\"summer-page-container\" role=\"main\">
        <header class=\"summer-page-header\">
            <div class=\"summer-page-menu-header\">
                <a class=\"summer-blog-logo\" href=\"";
        // line 11
        echo (isset($context["basebase_url_absolute_url"]) ? $context["basebase_url_absolute_url"] : null);
        echo "\">
                    <img src=\"";
        // line 12
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array());
        echo "\" alt=\"Blog Logo\" /></a>
                </a>

                ";
        // line 15
        $this->loadTemplate("partials/navigation.html.twig", "page.html.twig", 15)->display($context);
        // line 16
        echo "            </div>
            <div class=\"summer-page-title row\">
                <div class=\"small-12 columns\">
                    <h1>";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
                </div>
            </div>
        </header>
        <article class=\"summer-page-content\">
            <div>";
        // line 24
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</div>
            <div>";
        // line 25
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "</div>
        </article>
        <div class=\"cf\"></div>
        ";
        // line 28
        $this->loadTemplate("partials/footer.html.twig", "page.html.twig", 28)->display($context);
        // line 29
        echo "    </main>
";
    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  120 => 29,  118 => 28,  112 => 25,  108 => 24,  100 => 19,  95 => 16,  93 => 15,  86 => 12,  82 => 11,  77 => 8,  74 => 7,  69 => 5,  64 => 3,  61 => 2,  19 => 1,);
    }
}
