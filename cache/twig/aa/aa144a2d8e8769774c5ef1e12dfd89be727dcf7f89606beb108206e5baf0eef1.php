<?php

/* default.html.twig */
class __TwigTemplate_c215450be1bea31d2806069fa825d570d47fec7cc42f9753286dd721f18c2be7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<article class=\"box post post-excerpt\">
  <header>
  \t<div class=\"title\">
    <h2>";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h2>\t
\t</div>
    <div class=\"meta\">
    <time class=\"published\" datetime=\"";
        // line 9
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "Y-m-d");
        echo "\">";
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "M j, Y");
        echo "</time>                              
    </div>
    </header>

        ";
        // line 13
        if (($context["big_header"] ?? null)) {
            // line 14
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropResize", array(0 => 1038, 1 => 437), "method"), "html", array(0 => $this->getAttribute(($context["page"] ?? null), "title", array()), 1 => $this->getAttribute(($context["page"] ?? null), "title", array()), 2 => "image featured"), "method");
            echo "
        ";
        } else {
            // line 16
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropZoom", array(0 => 1038, 1 => 437), "method"), "html", array(0 => $this->getAttribute(($context["page"] ?? null), "title", array()), 1 => $this->getAttribute(($context["page"] ?? null), "title", array()), 2 => "image featured"), "method");
            echo "
        ";
        }
        // line 18
        echo "   ";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  59 => 16,  53 => 14,  51 => 13,  42 => 9,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% block content %}
<article class=\"box post post-excerpt\">
  <header>
  \t<div class=\"title\">
    <h2>{{ page.header.title }}</h2>\t
\t</div>
    <div class=\"meta\">
    <time class=\"published\" datetime=\"{{page.date|date(\"Y-m-d\")}}\">{{ page.date|date(\"M j, Y\")}}</time>                              
    </div>
    </header>

        {% if big_header %}
            {{ page.media.images|first.cropResize(1038,437).html(page.title, page.title, 'image featured') }}
        {% else %}
            {{ page.media.images|first.cropZoom(1038,437).html(page.title, page.title, 'image featured') }}
        {% endif %}
   {{ page.content}}
</article>
{% endblock %}
", "default.html.twig", "/home/grav/www/html/user/themes/future/templates/default.html.twig");
    }
}
