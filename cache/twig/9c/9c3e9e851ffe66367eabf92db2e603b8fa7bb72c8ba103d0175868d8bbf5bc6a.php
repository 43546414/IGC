<?php

/* partials/h-divider.html.twig */
class __TwigTemplate_598d9706e84880c33c60a2e7d4106644442f01a62b3dfe8eaa31081b95d35410 extends Twig_Template
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
", "partials/h-divider.html.twig", "/Users/bzhang/repo/html/user/themes/igc/templates/partials/h-divider.html.twig");
    }
}
