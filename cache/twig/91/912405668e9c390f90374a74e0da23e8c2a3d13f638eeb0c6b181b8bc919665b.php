<?php

/* partials/home-portfolio-logo-item.html.twig */
class __TwigTemplate_5da9537cbfa33c80605bc90efb39160564aa357e8468427c1407dd9711d1c461 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["company_logo"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 2
        if (twig_test_empty((isset($context["company_logo"]) ? $context["company_logo"] : null))) {
            // line 3
            echo "  ";
            $context["company_logo"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "files", array()));
        }
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"col-sm-gutter col-sm-4 col-xs-6\">
    <div class=\"portfolio-image\">";
        // line 8
        echo $this->getAttribute((isset($context["company_logo"]) ? $context["company_logo"] : null), "html", array());
        echo "</div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "partials/home-portfolio-logo-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  31 => 6,  28 => 5,  24 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set company_logo = page.media.images|first %}
{% if company_logo is empty %}
  {% set company_logo = page.media.files|first %}
{% endif %}

{% block content %}
  <div class=\"col-sm-gutter col-sm-4 col-xs-6\">
    <div class=\"portfolio-image\">{{ company_logo.html }}</div>
  </div>
{% endblock %}
", "partials/home-portfolio-logo-item.html.twig", "/var/www/html/user/themes/igc/templates/partials/home-portfolio-logo-item.html.twig");
    }
}
