<?php

/* partials/blueprints-raw.html.twig */
class __TwigTemplate_022570c96207b17b4fa15f0f41da968090c8a42e3a866a2c5ad044eb07e8c8f6 extends Twig_Template
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
        $context["form_id"] = (((isset($context["form_id"]) ? $context["form_id"] : null)) ? ((isset($context["form_id"]) ? $context["form_id"] : null)) : ("blueprints"));
        // line 2
        $context["scope"] = (((isset($context["scope"]) ? $context["scope"] : null)) ? ((isset($context["scope"]) ? $context["scope"] : null)) : ("data."));
        // line 3
        echo "
<form id=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["form_id"]) ? $context["form_id"] : null), "html", null, true);
        echo "\" method=\"post\" data-grav-form=\"";
        echo twig_escape_filter($this->env, (isset($context["form_id"]) ? $context["form_id"] : null), "html", null, true);
        echo "\" data-grav-keepalive=\"true\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "fields", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 6
            echo "        ";
            if ($this->getAttribute($context["field"], "type", array())) {
                // line 7
                echo "            ";
                $context["value"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 8
                echo "
            <div class=\"block block-";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                echo "\">
                ";
                // line 10
                $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "partials/blueprints-raw.html.twig", 10)->display($context);
                // line 11
                echo "            </div>
        ";
            }
            // line 13
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    ";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "

</form>
";
    }

    public function getTemplateName()
    {
        return "partials/blueprints-raw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  82 => 14,  68 => 13,  64 => 11,  62 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  32 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set form_id = form_id ? form_id : 'blueprints' %}
{% set scope = scope ?: 'data.' %}

<form id=\"{{ form_id }}\" method=\"post\" data-grav-form=\"{{ form_id }}\" data-grav-keepalive=\"true\">
    {% for field in blueprints.fields %}
        {% if field.type %}
            {% set value = data.value(field.name) %}

            <div class=\"block block-{{ field.type }}\">
                {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
            </div>
        {% endif %}
    {% endfor %}

    {{ nonce_field('admin-form', 'admin-nonce')|raw }}

</form>
", "partials/blueprints-raw.html.twig", "/var/www/html/user/plugins/admin/themes/grav/templates/partials/blueprints-raw.html.twig");
    }
}
