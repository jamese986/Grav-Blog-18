<?php

/* partials/base.html.twig */
class __TwigTemplate_cb1541852db4e936798965af83099850691263fc34f6f9c41954380a582155cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"";
        // line 6
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\"> <!--<![endif]-->
<head>
    ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 49
        echo "</head>

<body>
    <div id=\"wrapper\">
\t\t\t";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 73
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "        ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 85
        echo "
    </div>

";
        // line 88
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 89
            echo "<script type=\"text/javascript\">
\$(document).ready(function(\$){
    var input = \$('[data-search-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input') + '";
            // line 96
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
            echo "' + input.val();
        }
    });
});
</script>
";
        }
        // line 102
        echo "
    ";
        // line 103
        $this->displayBlock('bottom', $context, $blocks);
        // line 106
        echo "</body>
</html>
";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 10
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
        ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
        <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

        <!--[if lte IE 8]><script src=\"";
        // line 29
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/js/ie/html5shiv.js");
        echo "\"></script><![endif]-->

        ";
        // line 31
        if ($this->getAttribute(($context["site"] ?? null), "calendar", array())) {
            // line 32
            echo "           <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
       ";
        }
        // line 34
        echo "
       <!--[if lte IE 8]><script src=\"";
        // line 35
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/js/ie/respond.min.js");
        echo "\"></script><![endif]-->
       <!--[if lte IE 8]><script src=\"";
        // line 36
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/css/ie8.css");
        echo "\"></script><![endif]-->

       ";
        // line 38
        if ($this->getAttribute(($context["site"] ?? null), "calendar", array())) {
            // line 39
            echo "        <script type=\"text/javascript\">
        \$(function() {
            \$( \"#datepicker\" ).datepicker({
                hideIfNoPrevNext: true
            });
        });
        </script>
    ";
        }
        // line 47
        echo "
    ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/css/main.css"), "method");
        // line 18
        echo "        ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 23
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/skel.min.js"), "method");
        // line 24
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/util.js"), "method");
        // line 25
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/main.js"), "method");
        // line 26
        echo "        ";
    }

    // line 53
    public function block_header($context, array $blocks = array())
    {
        // line 54
        echo "            <header id=\"header\" role=\"banner\">
              <h1><a href=\"";
        // line 55
        echo $this->getAttribute(($context["site"] ?? null), "url", array());
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</a></h1>
                  ";
        // line 56
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "                  <nav class=\"main\">
                            <ul>
                                ";
        // line 59
        $this->displayBlock('header_extra', $context, $blocks);
        // line 60
        echo "                                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 61
            echo "                                ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 61)->display($context);
            // line 62
            echo "                                ";
        }
        // line 63
        echo "                                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 64
            echo "                                ";
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/base.html.twig", 64)->display($context);
            // line 65
            echo "                                ";
        }
        // line 66
        echo "                                <li class=\"menu\">
                                    <a class=\"fa-bars\" href=\"#menu\">Menu</a>
                                </li>
                            </ul>
                        </nav>
            </header>
        ";
    }

    // line 59
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo "
            <div id=\"content\">
                <div class=\"inner\" role=\"main\">
                    ";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "                </div>
            </div>
        ";
    }

    // line 77
    public function block_content($context, array $blocks = array())
    {
        // line 78
        echo "                    ";
    }

    // line 82
    public function block_sidebar($context, array $blocks = array())
    {
        // line 83
        echo "            ";
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 83)->display($context);
        // line 84
        echo "        ";
    }

    // line 103
    public function block_bottom($context, array $blocks = array())
    {
        // line 104
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 104,  301 => 103,  297 => 84,  294 => 83,  291 => 82,  287 => 78,  284 => 77,  278 => 79,  276 => 77,  271 => 74,  268 => 73,  263 => 59,  253 => 66,  250 => 65,  247 => 64,  244 => 63,  241 => 62,  238 => 61,  235 => 60,  233 => 59,  229 => 57,  227 => 56,  221 => 55,  218 => 54,  215 => 53,  211 => 26,  208 => 25,  205 => 24,  202 => 23,  199 => 22,  196 => 21,  192 => 18,  189 => 17,  186 => 16,  181 => 47,  171 => 39,  169 => 38,  164 => 36,  160 => 35,  157 => 34,  153 => 32,  151 => 31,  146 => 29,  140 => 27,  138 => 21,  132 => 19,  130 => 16,  125 => 14,  121 => 13,  118 => 12,  116 => 11,  108 => 10,  105 => 9,  102 => 8,  96 => 106,  94 => 103,  91 => 102,  82 => 96,  73 => 89,  71 => 88,  66 => 85,  63 => 82,  60 => 73,  58 => 53,  52 => 49,  50 => 8,  45 => 6,  41 => 5,  37 => 4,  33 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\"> <!--<![endif]-->
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
        <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

        {% block stylesheets %}
            {% do assets.addCss('theme://assets/css/main.css') %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://assets/js/skel.min.js') %}
            {% do assets.addJs('theme://assets/js/util.js') %}
            {% do assets.addJs('theme://assets/js/main.js') %}
        {% endblock %}
        {{ assets.js() }}

        <!--[if lte IE 8]><script src=\"{{ url('theme://assets/js/ie/html5shiv.js') }}\"></script><![endif]-->

        {% if site.calendar %}
           <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
       {% endif %}

       <!--[if lte IE 8]><script src=\"{{ url('theme://assets/js/ie/respond.min.js') }}\"></script><![endif]-->
       <!--[if lte IE 8]><script src=\"{{ url('theme://assets/css/ie8.css') }}\"></script><![endif]-->

       {% if site.calendar %}
        <script type=\"text/javascript\">
        \$(function() {
            \$( \"#datepicker\" ).datepicker({
                hideIfNoPrevNext: true
            });
        });
        </script>
    {% endif %}

    {% endblock head%}
</head>

<body>
    <div id=\"wrapper\">
\t\t\t{% block header %}
            <header id=\"header\" role=\"banner\">
              <h1><a href=\"{{ site.url }}\">{{ site.title }}</a></h1>
                  {% include 'partials/navigation.html.twig' %}
                  <nav class=\"main\">
                            <ul>
                                {% block header_extra %}{% endblock %}
                                {% if config.plugins.langswitcher.enabled %}
                                {% include 'partials/langswitcher.html.twig' %}
                                {% endif %}
                                {% if config.plugins.simplesearch.enabled %}
                                {% include 'partials/simplesearch_searchbox.html.twig' %}
                                {% endif %}
                                <li class=\"menu\">
                                    <a class=\"fa-bars\" href=\"#menu\">Menu</a>
                                </li>
                            </ul>
                        </nav>
            </header>
        {% endblock %}
        {% block body %}

            <div id=\"content\">
                <div class=\"inner\" role=\"main\">
                    {% block content %}
                    {% endblock %}
                </div>
            </div>
        {% endblock %}
        {% block sidebar %}
            {% include 'partials/sidebar.html.twig' %}
        {% endblock %}

    </div>

{% if config.plugins.simplesearch.enabled %}
<script type=\"text/javascript\">
\$(document).ready(function(\$){
    var input = \$('[data-search-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input') + '{{ config.system.param_sep }}' + input.val();
        }
    });
});
</script>
{% endif %}

    {% block bottom %}
        {{ assets.js('bottom') }}
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "/home/grav/www/html/user/themes/future/templates/partials/base.html.twig");
    }
}
