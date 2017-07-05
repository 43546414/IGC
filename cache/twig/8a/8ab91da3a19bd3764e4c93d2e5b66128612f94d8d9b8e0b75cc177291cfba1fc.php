<?php

/* modular/financial-section.html.twig */
class __TwigTemplate_2079a280e0a6eaf1ae12db89f65d399b46495eaaac0aba55634e61717486aaa2 extends Twig_Template
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
        echo "  <div class=\"content-section dark-text\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 4
            echo "    ";
            echo $this->getAttribute($context["content"], "content", array());
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "modular/financial-section.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  33 => 4,  29 => 3,  26 => 2,  20 => 1,);
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
  <div class=\"content-section dark-text\">
  {% for content in page.collection() %}
    {{ content.content }}
  {% endfor %}
  </div>
{% endblock %}
", "modular/financial-section.html.twig", "/Users/bzhang/repo/html/user/themes/igc/templates/modular/financial-section.html.twig");
    }
}
