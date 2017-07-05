<?php

/* partials/base.html.twig */
class __TwigTemplate_76a76ab743a26d05865cdf7764ab2bc2f083a5792bbb0ff3902e3f85627a4d42 extends Twig_Template
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
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "</head>
<body class=\"";
        // line 37
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">

";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('footer', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('bottom', $context, $blocks);
        // line 133
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Innovation Global Capital partners with exceptional entrepreneurs to build innovative global companies that change the world.\">
\t\t<meta name=\"author\" content=\"Innovation Global Capital\">
    ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "
    <!--link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" /-->
    <!--link rel=\"canonical\" href=\"";
        // line 16
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" /-->

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "//cloud.typography.com/7078452/619302/css/fonts.css", 1 => 100), "method");
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.min.css", 1 => 99), "method");
        // line 21
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/igc.css", 1 => 98), "method");
        // line 22
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => (("theme://css/" . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array(), "method")) . ".css"), 1 => 97), "method");
        // line 23
        echo "    ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js", 1 => 100), "method");
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.js", 1 => 99), "method");
        // line 32
        echo "    ";
    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        // line 40
        echo "  <!-- Navigation
  ================================================== -->
  <div class=\"section-one-header\">
    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 51
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/IGC_Horizontal.svg");
        echo "\" alt=\"IGC Logo\" width=\"180\"></a>
        </div>
        <div class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#firm\">The Firm</a></li>
<!--          <li><a href=\"#leadership\">Leadership</a></li> -->
            <li><a href=\"#investment\">Investment Strategy</a></li>
            <li><a href=\"portfolio.html\">Portfolio</a></li>
<!--          <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Press <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"http://www.cbsnews.com/8301-3445_162-57590575/the-fast-rise-of-japanese-retailer-uniqlo/\" target=\"_blank\">CBS <span class=\"glyphicon glyphicon-new-window\"></span></a></li>
                <li><a href=\"http://www.sfgate.com/business/article/Uniqlo-opens-S-F-store-3919489.php#photo-3541690\" target=\"_blank\">Sanfrancisco Chronicle <span class=\"glyphicon glyphicon-new-window\"></span></a></li>
                <li><a href=\"http://www.wired.com/business/2012/08/upending-fashion-steve-jobs-style-10-questions-with-uniqlos-yasunobu-kyogoku/\" target=\"_blank\">Wired <span class=\"glyphicon glyphicon-new-window\"></span></a></li>
                <li><a href=\"http://www.washingtonpost.com/posttv/business/kyogoku-says-uniqlo-focused-on-quality-to-boost-sales/2011/07/13/gIQAwbcrCI_video.html\" target=\"_blank\">Bloomberg TV <span class=\"glyphicon glyphicon-new-window\"></span></a></li>
                <li><a href=\"http://video.cnbc.com/gallery/?video=3000045132\" target=\"_blank\">CNBC <span class=\"glyphicon glyphicon-new-window\"></span></a></li>
              </ul>
            </li>
-->
            <li><a href=\"contact.html\">Contact Us</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
";
    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        // line 79
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "        </div>
    </section>
";
    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
    }

    // line 86
    public function block_footer($context, array $blocks = array())
    {
        // line 87
        echo "<!-- Footer
================================================== -->
<a class=\"anchor\" id=\"contact\"></a>
<div class=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <div class=\"footer-logo\">
          <a href=\"index.html\"><img src=\"";
        // line 95
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/IGC_Horizontal.svg");
        echo "\" alt=\"IGC Logo\" width=\"180\"></a>
        </div>
      </div>
      <div class=\"col-sm-6\">
        <div class=\"press\">
          <ul>
            <li>For general inquiries:<br><a href=\"mailto:info@innovationglobal.com\">info@innovationglobal.com</a></li>
            <li>For proposals:<br><a href=\"mailto:proposals@innovationglobal.com\">proposals@innovationglobal.com</a></li>
            <li>For press inquiries:<br><a href=\"mailto:press@innovationglobal.com\">press@innovationglobal.com</a></li>
          </ul>
        </div>
        <div class=\"addy\">
          <address>
            Innovation Global Capital<br>
            555 California St Suite 4925 <br>
            San Francisco, CA 94104 <br>
            Tel   (415) 659-1550 <br>
            Fax  (415) 659-1950 <br>
          </address>
        </div>
      </div>
    </div><!-- /row -->
    <div class=\"row\">
      <div class=\"col-sm-12 copyright\">
        <div class=\"sponsor\">
          <div class=\"sponsor-text\">Proud Sponsor Of</div>
          <img src=\"";
        // line 121
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/SFB.png");
        echo "\" alt=\"proud sponsor of San Francisco Ballet\">
        </div>
        <p>&copy; 2017 Innovation Global Capital, LLC  |  <a class=\"alta\" href=\"terms.html\">Terms of Use</a></p>
      </div>
    </div>
  </div>
</div><!-- footer -->
";
    }

    // line 130
    public function block_bottom($context, array $blocks = array())
    {
        // line 131
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
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
        return array (  277 => 131,  274 => 130,  262 => 121,  233 => 95,  223 => 87,  220 => 86,  215 => 81,  209 => 82,  207 => 81,  203 => 79,  200 => 78,  170 => 51,  157 => 40,  154 => 39,  150 => 32,  147 => 31,  144 => 27,  141 => 26,  137 => 23,  134 => 22,  131 => 21,  128 => 20,  125 => 19,  122 => 18,  114 => 33,  112 => 26,  106 => 24,  104 => 18,  99 => 16,  95 => 15,  92 => 14,  90 => 13,  77 => 7,  74 => 6,  71 => 5,  64 => 133,  62 => 130,  59 => 129,  57 => 86,  54 => 85,  52 => 78,  49 => 77,  47 => 39,  42 => 37,  39 => 36,  37 => 5,  32 => 3,  29 => 2,  27 => 1,);
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
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Innovation Global Capital partners with exceptional entrepreneurs to build innovative global companies that change the world.\">
\t\t<meta name=\"author\" content=\"Innovation Global Capital\">
    {% include 'partials/metadata.html.twig' %}

    <!--link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" /-->
    <!--link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" /-->

    {% block stylesheets %}
        {% do assets.addCss('//cloud.typography.com/7078452/619302/css/fonts.css', 100) %}
        {% do assets.addCss('theme://css/bootstrap.min.css', 99) %}
        {% do assets.addCss('theme://css/igc.css', 98) %}
        {% do assets.addCss('theme://css/' ~ page.slug() ~ '.css', 97) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs(
          'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',
          100
        )%}
        {% do assets.addJs('theme://js/bootstrap.js', 99) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body class=\"{{ page.header.body_classes }}\">

{% block header %}
  <!-- Navigation
  ================================================== -->
  <div class=\"section-one-header\">
    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"index.html\"><img src=\"{{ url('theme://images/IGC_Horizontal.svg') }}\" alt=\"IGC Logo\" width=\"180\"></a>
        </div>
        <div class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#firm\">The Firm</a></li>
<!--          <li><a href=\"#leadership\">Leadership</a></li> -->
            <li><a href=\"#investment\">Investment Strategy</a></li>
            <li><a href=\"portfolio.html\">Portfolio</a></li>
<!--          <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Press <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"http://www.cbsnews.com/8301-3445_162-57590575/the-fast-rise-of-japanese-retailer-uniqlo/\" target=\"_blank\">CBS <span class=\"glyphicon glyphicon-new-window\"></span></a></li>
                <li><a href=\"http://www.sfgate.com/business/article/Uniqlo-opens-S-F-store-3919489.php#photo-3541690\" target=\"_blank\">Sanfrancisco Chronicle <span class=\"glyphicon glyphicon-new-window\"></span></a></li>
                <li><a href=\"http://www.wired.com/business/2012/08/upending-fashion-steve-jobs-style-10-questions-with-uniqlos-yasunobu-kyogoku/\" target=\"_blank\">Wired <span class=\"glyphicon glyphicon-new-window\"></span></a></li>
                <li><a href=\"http://www.washingtonpost.com/posttv/business/kyogoku-says-uniqlo-focused-on-quality-to-boost-sales/2011/07/13/gIQAwbcrCI_video.html\" target=\"_blank\">Bloomberg TV <span class=\"glyphicon glyphicon-new-window\"></span></a></li>
                <li><a href=\"http://video.cnbc.com/gallery/?video=3000045132\" target=\"_blank\">CNBC <span class=\"glyphicon glyphicon-new-window\"></span></a></li>
              </ul>
            </li>
-->
            <li><a href=\"contact.html\">Contact Us</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
{% endblock %}

{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}

{% block footer %}
<!-- Footer
================================================== -->
<a class=\"anchor\" id=\"contact\"></a>
<div class=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <div class=\"footer-logo\">
          <a href=\"index.html\"><img src=\"{{ url('theme://images/IGC_Horizontal.svg') }}\" alt=\"IGC Logo\" width=\"180\"></a>
        </div>
      </div>
      <div class=\"col-sm-6\">
        <div class=\"press\">
          <ul>
            <li>For general inquiries:<br><a href=\"mailto:info@innovationglobal.com\">info@innovationglobal.com</a></li>
            <li>For proposals:<br><a href=\"mailto:proposals@innovationglobal.com\">proposals@innovationglobal.com</a></li>
            <li>For press inquiries:<br><a href=\"mailto:press@innovationglobal.com\">press@innovationglobal.com</a></li>
          </ul>
        </div>
        <div class=\"addy\">
          <address>
            Innovation Global Capital<br>
            555 California St Suite 4925 <br>
            San Francisco, CA 94104 <br>
            Tel   (415) 659-1550 <br>
            Fax  (415) 659-1950 <br>
          </address>
        </div>
      </div>
    </div><!-- /row -->
    <div class=\"row\">
      <div class=\"col-sm-12 copyright\">
        <div class=\"sponsor\">
          <div class=\"sponsor-text\">Proud Sponsor Of</div>
          <img src=\"{{ url('theme://images/SFB.png') }}\" alt=\"proud sponsor of San Francisco Ballet\">
        </div>
        <p>&copy; 2017 Innovation Global Capital, LLC  |  <a class=\"alta\" href=\"terms.html\">Terms of Use</a></p>
      </div>
    </div>
  </div>
</div><!-- footer -->
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/var/www/html/user/themes/igc/templates/partials/base.html.twig");
    }
}
