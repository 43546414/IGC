<?php

/* modular/financial-disclosure-table.html.twig */
class __TwigTemplate_86630db4db14cb1472ed203f20d10254160b57cf620a6734ce1d2257dbf5c5c5 extends Twig_Template
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
        echo "  <div class=\"financial-disclosure-table-container row\">
  <div class=\"financial-disclosure-table col-xs-12\">
    <div class=\"financial-table-title-wrapper row\">
    <div class=\"financial-table-title-row col-md-8 col-md-offset-2\">
      <div class=\"financial-table-title-col general-partner-name\">ジェネラル・パートナー名</div>
      <div class=\"financial-table-title-col fund-name\">ファンド名</div>
      <div class=\"financial-table-title-col attachment\">別紙様式第二十号の二</div>
    </div>
    </div>
    <div class=\"financial-table-body-wrapper row\">
    <div class=\"financial-table-body col-md-8 col-md-offset-2\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 14
            echo "      <div class=\"financial-table-body-row\">
      ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, strip_tags($this->getAttribute($context["row"], "content", array()), "<a>"), "|"));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 16
                echo "        <div class=\"financial-table-body-col\">";
                echo $context["column"];
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
    </div>
  </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "modular/financial-disclosure-table.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  59 => 18,  50 => 16,  46 => 15,  43 => 14,  39 => 13,  26 => 2,  20 => 1,);
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
  <div class=\"financial-disclosure-table-container row\">
  <div class=\"financial-disclosure-table col-xs-12\">
    <div class=\"financial-table-title-wrapper row\">
    <div class=\"financial-table-title-row col-md-8 col-md-offset-2\">
      <div class=\"financial-table-title-col general-partner-name\">ジェネラル・パートナー名</div>
      <div class=\"financial-table-title-col fund-name\">ファンド名</div>
      <div class=\"financial-table-title-col attachment\">別紙様式第二十号の二</div>
    </div>
    </div>
    <div class=\"financial-table-body-wrapper row\">
    <div class=\"financial-table-body col-md-8 col-md-offset-2\">
    {% for row in page.collection() %}
      <div class=\"financial-table-body-row\">
      {% for column in row.content|striptags('<a>')|split('|') %}
        <div class=\"financial-table-body-col\">{{ column }}</div>
      {% endfor %}
      </div>
    {% endfor %}
    </div>
    </div>
  </div>
  </div>
{% endblock %}
", "modular/financial-disclosure-table.html.twig", "/Users/bzhang/repo/html/user/themes/igc/templates/modular/financial-disclosure-table.html.twig");
    }
}
