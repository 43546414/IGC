<?php

/* modular/financial-section-content.html.twig */
class __TwigTemplate_baf91f74a0bbefe6a31a1ae38fd5d1748d22d5d112a5792bfc82fd1a03709bc8 extends Twig_Template
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
  <div class=\"col-lg-8 col-lg-offset-2 tagline text-center\">
    ";
        // line 4
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
  </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "modular/financial-section-content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 2,  20 => 1,);
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
  <div class=\"col-lg-8 col-lg-offset-2 tagline text-center\">
    {{ page.content }}
  </div>
  </div>
{% endblock %}
", "modular/financial-section-content.html.twig", "/Users/bzhang/repo/html/user/themes/igc/templates/modular/financial-section-content.html.twig");
    }
}
