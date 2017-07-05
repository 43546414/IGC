<?php

/* modular/banner.html.twig */
class __TwigTemplate_0a0ca969765d106e5e76df98a14465dd9cbd1c1e62d16ca07b81bd81e389cf7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["banner_image"] = null;
        // line 2
        $context["show_ind"] = rand(0, (count($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())) - 1));
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 4
            echo "  ";
            if (($this->getAttribute($context["loop"], "index0", array()) == (isset($context["show_ind"]) ? $context["show_ind"] : null))) {
                // line 5
                echo "\t  ";
                $context["banner_image"] = $context["image"];
                // line 6
                echo "  ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<div class=\"banner\" style=\"background-image: url('";
        // line 9
        echo $this->getAttribute((isset($context["banner_image"]) ? $context["banner_image"] : null), "url", array());
        echo "')\">
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  61 => 8,  46 => 6,  43 => 5,  40 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set banner_image = null %}
{% set show_ind = rand(0, count(page.media.images) - 1) %}
{% for image in page.media.images %}
  {% if loop.index0 == show_ind %}
\t  {% set banner_image = image %}
  {% endif %}
{% endfor %}

<div class=\"banner\" style=\"background-image: url('{{ banner_image.url }}')\">
</div>
", "modular/banner.html.twig", "/Users/bzhang/repo/html/user/themes/igc/templates/modular/banner.html.twig");
    }
}
