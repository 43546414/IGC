<?php

/* terms.html.twig */
class __TwigTemplate_b9f4edc72c8c21f4e1396439bde7bfa78eaf2a0492cf3375959b67d5c01b5ead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "terms.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<!-- Contact
================================================== -->
<div class=\"container terms\">
  <div class=\"row\">
    <div class=\"col-lg-8 col-lg-offset-2 terms\">
      ";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "terms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
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
<!-- Contact
================================================== -->
<div class=\"container terms\">
  <div class=\"row\">
    <div class=\"col-lg-8 col-lg-offset-2 terms\">
      {{ page.content }}
    </div>
  </div>
</div>
{% endblock %}
", "terms.html.twig", "/var/www/html/user/themes/igc/templates/terms.html.twig");
    }
}
