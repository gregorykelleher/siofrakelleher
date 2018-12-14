<?php

/* partials/article.html.twig */
class __TwigTemplate_538a74e3099cdcd4dd7b8ea971f13cd10e1c783ddfc00b516d31e4744a16dd82 extends Twig_Template
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
        echo "<article class=\"summer-index-post post row\">
    <div class=\"small-12 medium-3 large-2 columns datetime\">
        <span class=\"summer-post-meta\">
            <time datetime=\"";
        // line 4
        echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "header", array()), "date", array()), $this->getAttribute(($context["site"] ?? null), "date_long", array()));
        echo "\">
                <span class=\"day\">
                    ";
        // line 6
        echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "header", array()), "date", array()), "d");
        echo "
                </span>
                <span class=\"month-year\">
                    ";
        // line 9
        echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "header", array()), "date", array()), "M Y");
        echo "
                </span>
            </time>
        </span>
    </div>
    <div class=\"small-12 medium-9 large-10 columns\">
        <header class=\"summer-post-header\">
            ";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "header", array()), "link", array())) {
            // line 17
            echo "               <h3 class=\"summer-post-title\"><a href=\"";
            echo $this->getAttribute(($context["post"] ?? null), "url", array());
            echo "\" rel=\"bookmark\" title=\"";
            echo $this->getAttribute(($context["post"] ?? null), "title", array());
            echo "\" itemprop=\"url\"><i class=\"fa fa-angle-double-right\"></i></a> <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute(($context["post"] ?? null), "title", array());
            echo "</a></h3>
            ";
        } else {
            // line 19
            echo "             <h3 class=\"summer-post-title\"><a href=\"";
            echo $this->getAttribute(($context["post"] ?? null), "url", array());
            echo "\" itemprop=\"url\">";
            echo $this->getAttribute(($context["post"] ?? null), "title", array());
            echo "</a></h3>
            ";
        }
        // line 21
        echo "        </header>
        <section class=\"summer-post-excerpt\">
           <p>";
        // line 23
        echo \Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["post"] ?? null), "content", array())), 40);
        echo "</p>
       </section>
       
       <div class=\"summer-index-post-tags\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["post"] ?? null), "taxonomy", array()), "tag", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo "<span class=\"post-tag-";
            echo $context["tag"];
            echo "\"><a href=\"";
            echo $this->getAttribute(($context["home"] ?? null), "url", array());
            echo "/tag";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
            echo $context["tag"];
            echo "\">";
            echo $context["tag"];
            echo "</a></span>";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo " ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
        
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "partials/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 28,  78 => 27,  71 => 23,  67 => 21,  59 => 19,  47 => 17,  45 => 16,  35 => 9,  29 => 6,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article class=\"summer-index-post post row\">
    <div class=\"small-12 medium-3 large-2 columns datetime\">
        <span class=\"summer-post-meta\">
            <time datetime=\"{{ post.header.date | date(site.date_long) }}\">
                <span class=\"day\">
                    {{ post.header.date | date(\"d\") }}
                </span>
                <span class=\"month-year\">
                    {{ post.header.date | date(\"M Y\") }}
                </span>
            </time>
        </span>
    </div>
    <div class=\"small-12 medium-9 large-10 columns\">
        <header class=\"summer-post-header\">
            {% if post.header.link %}
               <h3 class=\"summer-post-title\"><a href=\"{{ post.url }}\" rel=\"bookmark\" title=\"{{ post.title }}\" itemprop=\"url\"><i class=\"fa fa-angle-double-right\"></i></a> <a href=\"{{ post.header.link }}\">{{ post.title }}</a></h3>
            {% else %}
             <h3 class=\"summer-post-title\"><a href=\"{{ post.url }}\" itemprop=\"url\">{{ post.title }}</a></h3>
            {% endif %}
        </header>
        <section class=\"summer-post-excerpt\">
           <p>{{ post.content | striptags | truncate(40) }}</p>
       </section>
       
       <div class=\"summer-index-post-tags\">
        {% for tag in post.taxonomy.tag %}<span class=\"post-tag-{{tag}}\"><a href=\"{{ home.url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a></span>{%if not loop.last %} {% endif %}{% endfor %}
        </div>
        
    </div>
</article>
", "partials/article.html.twig", "/Users/gregory/Documents/sites/siofrakelleher.com/user/themes/notepad/templates/partials/article.html.twig");
    }
}
