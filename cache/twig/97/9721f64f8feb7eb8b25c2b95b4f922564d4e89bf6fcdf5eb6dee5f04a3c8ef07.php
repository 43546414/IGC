<?php

/* modular/section-content.html.twig */
class __TwigTemplate_f994cdca57fbf739b97209efaec1176c2a5f6dd41df5cb31b7cacdd6c370c8a9 extends Twig_Template
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
        echo "  <div class=\"text-center tagline\">
    ";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "modular/section-content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  20 => 1,);
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
  <div class=\"text-center tagline\">
    {{ page.content }}
  </div>
{% endblock %}
", "modular/section-content.html.twig", "/var/www/html/user/themes/igc/templates/modular/section-content.html.twig");
    }
}
