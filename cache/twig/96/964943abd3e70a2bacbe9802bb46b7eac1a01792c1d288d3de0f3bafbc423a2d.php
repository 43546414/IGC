<?php

/* modular/home-section.html.twig */
class __TwigTemplate_336763aa5022d64ceeda7a723ff54c2ce99b2761af439d3bb3de4163326abada extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"section-";
        echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu", array())), "method");
        echo "\">
    <div class=\"container\">
    <div class=\"row\">
      <div class=\"content-wrapper content-section col-lg-8 col-lg-offset-2 dark-text\">
      ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 9
            echo "        ";
            echo $this->getAttribute($context["content"], "content", array());
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </div>
    </div>
    </div>
  </div>
";
    }

    // line 1
    public function getpageLinkName($__text__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modular/home-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 1,  50 => 11,  41 => 9,  37 => 8,  29 => 4,  23 => 3,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}

{% block content %}
  <div class=\"section-{{ _self.pageLinkName(page.menu) }}\">
    <div class=\"container\">
    <div class=\"row\">
      <div class=\"content-wrapper content-section col-lg-8 col-lg-offset-2 dark-text\">
      {% for content in page.collection() %}
        {{ content.content }}
      {% endfor %}
      </div>
    </div>
    </div>
  </div>
{% endblock %}
", "modular/home-section.html.twig", "/var/www/html/user/themes/igc/templates/modular/home-section.html.twig");
    }
}
