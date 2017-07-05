<?php

/* modular/home-portfolio-button.html.twig */
class __TwigTemplate_9a6e372263ddb3e1beacb6593c9fc7374afa7c14309af625522709f9ff610914 extends Twig_Template
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
        echo "  <div class=\"";
        echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu", array())), "method");
        echo "\">
    <a class=\"igc-button\">";
        // line 5
        echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()));
        echo "</a>
  </div>
";
    }

    // line 1
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), array(" " => "-"));
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
        return "modular/home-portfolio-button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 1,  34 => 5,  29 => 4,  23 => 3,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro pageLinkName(text) %}{{ text|lower|replace({' ':'-'}) }}{% endmacro %}

{% block content %}
  <div class=\"{{ _self.pageLinkName(page.menu) }}\">
    <a class=\"igc-button\">{{ page.content|striptags }}</a>
  </div>
{% endblock %}
", "modular/home-portfolio-button.html.twig", "/Users/bzhang/repo/html/user/themes/igc/templates/modular/home-portfolio-button.html.twig");
    }
}
