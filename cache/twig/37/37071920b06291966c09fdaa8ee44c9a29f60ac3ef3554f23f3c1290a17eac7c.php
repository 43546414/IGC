<?php

/* modular/previous.html.twig */
class __TwigTemplate_32f29d80ad45d66a15c5a7731bd3b7f1cc17cc3b27bcaa86738f086b8f54965c extends Twig_Template
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
        echo "  <div class=\"container previous-list\">
  <div class=\"row\">
    <div class=\"content-wrapper content-section col-lg-8 col-lg-offset-2 dark-text\">
      <div class=\"heading text-center\">";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "</div>
      ";
        // line 6
        $this->loadTemplate("partials/h-divider.html.twig", "modular/previous.html.twig", 6)->display($context);
        // line 7
        echo "      <div class=\"row previous-logo-list\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["previous_item"]) {
            // line 9
            echo "          ";
            $this->loadTemplate("partials/previous-item.html.twig", "modular/previous.html.twig", 9)->display(array_merge($context, array("page" => $context["previous_item"])));
            // line 10
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['previous_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </div>
    </div>
  </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "modular/previous.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  60 => 10,  57 => 9,  40 => 8,  37 => 7,  35 => 6,  31 => 5,  26 => 2,  20 => 1,);
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
  <div class=\"container previous-list\">
  <div class=\"row\">
    <div class=\"content-wrapper content-section col-lg-8 col-lg-offset-2 dark-text\">
      <div class=\"heading text-center\">{{ page.content }}</div>
      {% include 'partials/h-divider.html.twig' %}
      <div class=\"row previous-logo-list\">
        {% for previous_item in page.collection() %}
          {% include 'partials/previous-item.html.twig' with {'page': previous_item} %}
        {% endfor %}
      </div>
    </div>
  </div>
  </div>
{% endblock %}
", "modular/previous.html.twig", "/Users/bzhang/repo/html/user/themes/igc/templates/modular/previous.html.twig");
    }
}
