<?php

/* modular/financial-section-header.html.twig */
class __TwigTemplate_95e708afa812a4e390b3a5c563cd0de8ad10dee90f74e2e634cff8ae4ad287c8 extends Twig_Template
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
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "  <div class=\"row\">
  <div class=\"col-lg-8 col-lg-offset-2 heading text-center\">
    ";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    ";
        // line 5
        $this->loadTemplate("partials/h-divider.html.twig", "modular/financial-section-header.html.twig", 5)->display($context);
        // line 6
        echo "  </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "modular/financial-section-header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  34 => 5,  30 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block content %}
  <div class=\"row\">
  <div class=\"col-lg-8 col-lg-offset-2 heading text-center\">
    {{ page.content }}
    {% include 'partials/h-divider.html.twig' %}
  </div>
  </div>
{% endblock %}
", "modular/financial-section-header.html.twig", "/Users/bzhang/repo/html/user/themes/igc/templates/modular/financial-section-header.html.twig");
    }
}
