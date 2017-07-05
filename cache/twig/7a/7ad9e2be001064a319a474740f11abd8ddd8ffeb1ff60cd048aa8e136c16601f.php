<?php

/* partials/h-divider.html.twig */
class __TwigTemplate_46679f77704053cee49ec05dc1953442e121b0553b9fe5cf0a02d33743337d01 extends Twig_Template
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
        echo "  <div class=\"h-divider ";
        echo (((isset($context["inverse"]) ? $context["inverse"] : null)) ? ("h-divider-inverse") : (""));
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "partials/h-divider.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
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
  <div class=\"h-divider {{inverse ? 'h-divider-inverse' : ''}}\"></div>
{% endblock %}
", "partials/h-divider.html.twig", "/var/www/html/user/themes/igc/templates/partials/h-divider.html.twig");
    }
}
