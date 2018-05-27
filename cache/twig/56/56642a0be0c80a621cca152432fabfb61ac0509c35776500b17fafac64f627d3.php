<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_30deba3e27681a96cf3c0a0813f06a2ff907576c5bb389a61bbbe676ee017b4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"sidebar\">
  <!-- Intro -->
  <section id=\"intro\" role=\"banner\">
    <a href=\"";
        // line 4
        echo ($context["base_url_absolute"] ?? null);
        echo "\" class=\"logo\"><img src=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/logo.jpg\" alt=\"";
        echo twig_upper_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()));
        echo "\" /></a>
    <header>
      <h2>";
        // line 6
        echo twig_upper_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()));
        echo "</h2>
      <p>Trying to Increase Productivity Through Creativity &amp; High Levels of Userability</a></p>
    </header>
  </section>
  <section role=\"complementary\">
    <div class=\"mini-posts\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "hits", 1 => "desc"), "method"), "slice", array(0 => 0, 1 => 2), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 13
            echo "      ";
            $context["bannerimage"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
            // line 14
            echo "      ";
            if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "author", array())) {
                // line 15
                echo "      ";
                $context["pauthor"] = $this->getAttribute($this->getAttribute($context["p"], "header", array()), "author", array());
                // line 16
                echo "      ";
            } else {
                // line 17
                echo "      ";
                $context["pauthor"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "taxonomy", array()), "author", array()), 0, array(), "array");
                // line 18
                echo "      ";
            }
            // line 19
            echo "      ";
            if (($context["pauthor"] ?? null)) {
                // line 20
                echo "      ";
                $context["pavatar"] = twig_lower_filter($this->env, twig_replace_filter($this->getAttribute($context["p"], "author", array()), " ", "-"));
                // line 21
                echo "      ";
            }
            // line 22
            echo "      <!-- Mini Post -->
      <article class=\"mini-post\">
        <header>
          <h3><a href=\"";
            // line 25
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a></h3>
          <time class=\"published\" datetime=\"";
            // line 26
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "Y-m-d");
            echo "\">";
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "M j, Y");
            echo "</time>
          ";
            // line 27
            if (($context["pauthor"] ?? null)) {
                // line 28
                echo "          <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\" class=\"author\"><img src=\"";
                echo ($context["theme_url"] ?? null);
                echo "/images/";
                echo ($context["pavatar"] ?? null);
                echo ".jpg\" alt=\"";
                echo ($context["pauthor"] ?? null);
                echo "\" /></a>
          ";
            }
            // line 30
            echo "        </header>
        <a href=\"";
            // line 31
            echo $this->getAttribute($context["p"], "url", array());
            echo "\" class=\"image\">";
            echo $this->getAttribute($this->getAttribute(($context["bannerimage"] ?? null), "cropZoom", array(0 => 350, 1 => 175), "method"), "quality", array(0 => 60), "method");
            echo "</a>                                       
      </article>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>
  </section>
  ";
        // line 36
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 37
            echo "  ";
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 37)->display($context);
            // line 38
            echo "  ";
        }
        // line 39
        echo "  ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 40
            echo "  ";
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 40)->display($context);
            // line 41
            echo "  ";
        }
        // line 42
        echo "  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 43
            echo "  <section role=\"complementary\">
    <ul class=\"posts\">
      ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "random"), "method"), "slice", array(0 => 0, 1 => 1), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 46
                echo "      ";
                $context["bannerimage"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
                // line 47
                echo "      <li>
        <article>
          <header>
            <h3><a href=\"";
                // line 50
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["p"], "title", array());
                echo "</a></h3>
            <time class=\"published\" datetime=\"";
                // line 51
                echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "Y-m-d");
                echo "\">";
                echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "M j, Y");
                echo "</time>
          </header>
          <a href=\"";
                // line 53
                echo $this->getAttribute($context["p"], "url", array());
                echo "\" class=\"image\">";
                echo $this->getAttribute($this->getAttribute(($context["bannerimage"] ?? null), "cropZoom", array(0 => 64, 1 => 64), "method"), "quality", array(0 => 60), "method");
                echo "</a>
        </article>
      </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "    </ul>
  </section>
  ";
        }
        // line 60
        echo "  ";
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "  <section class=\"blurb\" role=\"complementary\">
    <h2>About</h2>
    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
    <ul class=\"actions\">
      <li><a href=\"#\" class=\"button\">Learn More</a></li>
    </ul>
  </section>
  <!-- Footer -->
  <section id=\"footer\" role=\"contentinfo\">
    <ul class=\"icons\">
      <li><a href=\"https://twitter.com/jamesE986\" class=\"fa-twitter\"><span class=\"label\">Twitter</span></a></li>
      <li><a href=\"https://github.com/jamese986\" class=\"fa-github\"><span class=\"label\">Instagram</span></a></li>
      <li><a href=\"https://www.linkedin.com/in/jamese986/\" class=\"fa-linkedin\"><span class=\"label\">Instagram</span></a></li>
      <li><a href=\"https://www.behance.net/jamese986\" class=\"fa-behance\"><span class=\"label\">Instagram</span></a></li>
      <li><a href=\"https://www.instagram.com/jamese986/\" class=\"fa-instagram\"><span class=\"label\">Instagram</span></a></li>
      <li><a href=\"https://www.facebook.com/Jamese986Dev/\" class=\"fa-facebook\"><span class=\"label\">Facebook</span></a></li>
      ";
        // line 77
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 78
            echo "      <li><a href=\"";
            echo ($context["feed_url"] ?? null);
            echo ".rss\" class=\"fa-rss\"><span class=\"label\">RSS</span></a></li>
      ";
        }
        // line 80
        echo "      <li><a href=\"mailto:james.english.developer@gmail.com\" class=\"fa-envelope\"><span class=\"label\">Email</span></a></li>
    </ul>
    <p class=\"copyright\">&copy; ";
        // line 82
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " ";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
        echo ".</p>
  </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 82,  222 => 80,  216 => 78,  214 => 77,  196 => 61,  189 => 60,  184 => 57,  172 => 53,  165 => 51,  159 => 50,  154 => 47,  151 => 46,  147 => 45,  143 => 43,  140 => 42,  137 => 41,  134 => 40,  131 => 39,  128 => 38,  125 => 37,  123 => 36,  119 => 34,  108 => 31,  105 => 30,  93 => 28,  91 => 27,  85 => 26,  79 => 25,  74 => 22,  71 => 21,  68 => 20,  65 => 19,  62 => 18,  59 => 17,  56 => 16,  53 => 15,  50 => 14,  47 => 13,  43 => 12,  34 => 6,  25 => 4,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"sidebar\">
  <!-- Intro -->
  <section id=\"intro\" role=\"banner\">
    <a href=\"{{ base_url_absolute }}\" class=\"logo\"><img src=\"{{ theme_url }}/images/logo.jpg\" alt=\"{{ site.title|upper }}\" /></a>
    <header>
      <h2>{{ site.title|upper }}</h2>
      <p>Trying to Increase Productivity Through Creativity &amp; High Levels of Userability</a></p>
    </header>
  </section>
  <section role=\"complementary\">
    <div class=\"mini-posts\">
      {% for p in page.find('/blog').children.order('hits', 'desc').slice(0, 2) %}
      {% set bannerimage = p.media.images|first %}
      {% if p.header.author %}
      {% set pauthor =  p.header.author %}
      {% else %}
      {% set pauthor =  p.header.taxonomy.author[0] %}
      {% endif %}
      {% if pauthor %}
      {% set pavatar = p.author|replace(' ', '-')|lower %}
      {% endif %}
      <!-- Mini Post -->
      <article class=\"mini-post\">
        <header>
          <h3><a href=\"{{p.url}}\">{{ p.title }}</a></h3>
          <time class=\"published\" datetime=\"{{p.date|date(\"Y-m-d\")}}\">{{ p.date|date(\"M j, Y\")}}</time>
          {% if pauthor %}
          <a href=\"{{ page.url }}\" class=\"author\"><img src=\"{{ theme_url }}/images/{{pavatar}}.jpg\" alt=\"{{ pauthor }}\" /></a>
          {% endif %}
        </header>
        <a href=\"{{p.url}}\" class=\"image\">{{ bannerimage.cropZoom(350,175).quality(60) }}</a>                                       
      </article>
      {% endfor %}
    </div>
  </section>
  {% if config.plugins.archives.enabled %}
  {% include 'partials/archives.html.twig' %}
  {% endif %}
  {% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
  {% include 'partials/relatedpages.html.twig' %}
  {% endif %}
  {% if config.plugins.random.enabled %}
  <section role=\"complementary\">
    <ul class=\"posts\">
      {% for p in page.find('/blog').children.order('random').slice(0, 1) %}
      {% set bannerimage = p.media.images|first %}
      <li>
        <article>
          <header>
            <h3><a href=\"{{p.url}}\">{{ p.title }}</a></h3>
            <time class=\"published\" datetime=\"{{p.date|date(\"Y-m-d\")}}\">{{ p.date|date(\"M j, Y\")}}</time>
          </header>
          <a href=\"{{p.url}}\" class=\"image\">{{ bannerimage.cropZoom(64,64).quality(60) }}</a>
        </article>
      </li>
      {% endfor %}
    </ul>
  </section>
  {% endif %}
  {% block footer %}
  <section class=\"blurb\" role=\"complementary\">
    <h2>About</h2>
    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
    <ul class=\"actions\">
      <li><a href=\"#\" class=\"button\">Learn More</a></li>
    </ul>
  </section>
  <!-- Footer -->
  <section id=\"footer\" role=\"contentinfo\">
    <ul class=\"icons\">
      <li><a href=\"https://twitter.com/jamesE986\" class=\"fa-twitter\"><span class=\"label\">Twitter</span></a></li>
      <li><a href=\"https://github.com/jamese986\" class=\"fa-github\"><span class=\"label\">Instagram</span></a></li>
      <li><a href=\"https://www.linkedin.com/in/jamese986/\" class=\"fa-linkedin\"><span class=\"label\">Instagram</span></a></li>
      <li><a href=\"https://www.behance.net/jamese986\" class=\"fa-behance\"><span class=\"label\">Instagram</span></a></li>
      <li><a href=\"https://www.instagram.com/jamese986/\" class=\"fa-instagram\"><span class=\"label\">Instagram</span></a></li>
      <li><a href=\"https://www.facebook.com/Jamese986Dev/\" class=\"fa-facebook\"><span class=\"label\">Facebook</span></a></li>
      {% if config.plugins.feed.enabled %}
      <li><a href=\"{{ feed_url }}.rss\" class=\"fa-rss\"><span class=\"label\">RSS</span></a></li>
      {% endif %}
      <li><a href=\"mailto:james.english.developer@gmail.com\" class=\"fa-envelope\"><span class=\"label\">Email</span></a></li>
    </ul>
    <p class=\"copyright\">&copy; {{ \"now\"|date(\"Y\") }} {{ site.author.name }}.</p>
  </section>
</section>
{% endblock %}
", "partials/sidebar.html.twig", "/home/grav/www/html/user/themes/future/templates/partials/sidebar.html.twig");
    }
}
