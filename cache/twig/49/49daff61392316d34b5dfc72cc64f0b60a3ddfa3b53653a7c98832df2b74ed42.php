<?php

/* modular/section-header.html.twig */
class __TwigTemplate_fe780a8eb8d146b71b2bb8480715ded7b6a7a8d4830d3051a501de740c52fd15 extends Twig_Template
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
        echo "  <div class=\"heading text-center\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "</div>
  ";
        // line 3
        $this->loadTemplate("partials/h-divider.html.twig", "modular/section-header.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "modular/section-header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  26 => 2,  20 => 1,);
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
  <div class=\"heading text-center\">{{ page.content }}</div>
  {% include 'partials/h-divider.html.twig' %}
{% endblock %}
", "modular/section-header.html.twig", "/Users/bzhang/repo/html/user/themes/igc/templates/modular/section-header.html.twig");
    }
}
