<?php

/* config.html.twig */
class __TwigTemplate_766b8daa96c91ef36b0837cbade9433101f5dad29afc9d20857f2a60d17e8e81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "config.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content_top' => array($this, 'block_content_top'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["config_slug"] = $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "basename", array());
        // line 4
        $context["isInfo"] = ((isset($context["config_slug"]) ? $context["config_slug"] : null) == "info");
        // line 6
        $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION") . ": ") . $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, (isset($context["config_slug"]) ? $context["config_slug"] : null)))));
        // line 8
        if ( !(isset($context["isInfo"]) ? $context["isInfo"] : null)) {
            // line 9
            $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("config/" . (isset($context["config_slug"]) ? $context["config_slug"] : null))), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
        // line 14
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 21
    public function block_titlebar($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "</a>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
        echo "</button>
    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, (isset($context["config_slug"]) ? $context["config_slug"] : null)))), "html", null, true);
        echo "</h1>
";
    }

    // line 29
    public function block_content_top($context, array $blocks = array())
    {
        // line 30
        echo "
    <div class=\"alert notice\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
        echo ": <b>";
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "file", array()), "filename", array()), array((isset($context["base_path"]) ? $context["base_path"] : null) => "")), "html", null, true);
        echo "</b></div>
    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">

            ";
        // line 35
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.configuration_system", 1 => "admin.super"))) {
            // line 36
            echo "            <a ";
            if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "system")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
            echo "/config/system\">
                <span>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 40
        echo "
            ";
        // line 41
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.configuration_site", 1 => "admin.super"))) {
            // line 42
            echo "            <a ";
            if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "site")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
            echo "/config/site\">
                <span>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 46
        echo "
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "configurations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
            // line 48
            echo "                ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => ("admin.configuration_" . $context["configuration"]), 1 => "admin.super"))) {
                // line 49
                echo "                    ";
                $context["current_blueprints"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("config/" . $context["configuration"])), "method"), "blueprints", array()), "toArray", array(), "method");
                // line 50
                echo "                    ";
                if ((((($context["configuration"] != "system") && ($context["configuration"] != "site")) &&  !$this->getAttribute($this->getAttribute((isset($context["current_blueprints"]) ? $context["current_blueprints"] : null), "form", array()), "hidden", array())) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["current_blueprints"]) ? $context["current_blueprints"] : null), "form", array()), "fields", array())))) {
                    // line 51
                    echo "                        <a ";
                    if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == $context["configuration"])) {
                        echo "class=\"active\"";
                    }
                    echo " href=\"";
                    echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                    echo "/config/";
                    echo twig_escape_filter($this->env, $context["configuration"], "html", null, true);
                    echo "\">
                            <span>";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("human", $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($context["configuration"])), "html", null, true);
                    echo "</span>
                        </a>
                    ";
                }
                // line 55
                echo "                ";
            }
            // line 56
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
            ";
        // line 58
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.configuration_info", 1 => "admin.super"))) {
            // line 59
            echo "            <a ";
            if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "info")) {
                echo "class=\"active\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
            echo "/config/info\">
                <span>";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INFO"), "html", null, true);
            echo "</span>
            </a>
            ";
        }
        // line 63
        echo "
        </div>
    </div>
";
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => ("admin.configuration_" . (isset($context["config_slug"]) ? $context["config_slug"] : null)), 1 => "admin.super"))) {
            // line 70
            echo "        ";
            if ((isset($context["isInfo"]) ? $context["isInfo"] : null)) {
                // line 71
                echo "            <div id=\"phpinfo\">
                ";
                // line 72
                echo $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "phpinfo", array());
                echo "
            </div>
        ";
            } else {
                // line 75
                echo "            ";
                $this->loadTemplate("partials/blueprints.html.twig", "config.html.twig", 75)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blueprints", array()), "data" => (isset($context["data"]) ? $context["data"] : null))));
                // line 76
                echo "        ";
            }
            // line 77
            echo "    ";
        }
        // line 78
        echo "    ";
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "config.html.twig", 78)->display($context);
    }

    public function getTemplateName()
    {
        return "config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 78,  237 => 77,  234 => 76,  231 => 75,  225 => 72,  222 => 71,  219 => 70,  216 => 69,  213 => 68,  206 => 63,  200 => 60,  191 => 59,  189 => 58,  186 => 57,  180 => 56,  177 => 55,  171 => 52,  160 => 51,  157 => 50,  154 => 49,  151 => 48,  147 => 47,  144 => 46,  138 => 43,  129 => 42,  127 => 41,  124 => 40,  118 => 37,  109 => 36,  107 => 35,  98 => 31,  95 => 30,  92 => 29,  84 => 26,  79 => 24,  73 => 23,  70 => 22,  67 => 21,  60 => 18,  57 => 17,  50 => 14,  47 => 13,  44 => 12,  40 => 1,  37 => 9,  35 => 8,  33 => 6,  31 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% set config_slug = uri.basename %}
{% set isInfo = (config_slug == 'info') %}

{% set title = \"PLUGIN_ADMIN.CONFIGURATION\"|tu ~ \": \" ~ (\"PLUGIN_ADMIN.\" ~ config_slug|upper)|tu %}

{% if not isInfo %}
    {% set data = admin.data('config/' ~ config_slug) %}
{% endif %}

{% block stylesheets %}
    {% do assets.addCss(theme_url ~ '/css/codemirror/codemirror.css') %}
    {{ parent() }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% block titlebar %}
    <div class=\"button-bar\">
        <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> {{ \"PLUGIN_ADMIN.CONFIGURATION\"|tu }} - {{ (\"PLUGIN_ADMIN.\" ~ config_slug|upper)|tu }}</h1>
{% endblock %}

{% block content_top %}

    <div class=\"alert notice\">{{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ data.file.filename|replace({(base_path):''}) }}</b></div>
    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">

            {% if authorize(['admin.configuration_system', 'admin.super']) %}
            <a {% if config_slug == 'system' %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/system\">
                <span>{{ \"PLUGIN_ADMIN.SYSTEM\"|tu }}</span>
            </a>
            {% endif %}

            {% if authorize(['admin.configuration_site', 'admin.super']) %}
            <a {% if config_slug == 'site' %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/site\">
                <span>{{ \"PLUGIN_ADMIN.SITE\"|tu }}</span>
            </a>
            {% endif %}

            {% for configuration in admin.configurations %}
                {% if authorize(['admin.configuration_' ~ configuration, 'admin.super']) %}
                    {% set current_blueprints = admin.data('config/' ~ configuration).blueprints.toArray() %}
                    {% if configuration != 'system' and configuration != 'site' and not current_blueprints.form.hidden and current_blueprints.form.fields is not empty %}
                        <a {% if config_slug == configuration %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/{{configuration}}\">
                            <span>{{ configuration|tu|humanize }}</span>
                        </a>
                    {% endif %}
                {% endif %}
            {% endfor %}

            {% if authorize(['admin.configuration_info', 'admin.super']) %}
            <a {% if config_slug == 'info' %}class=\"active\"{% endif %} href=\"{{ base_url_relative }}/config/info\">
                <span>{{ \"PLUGIN_ADMIN.INFO\"|tu }}</span>
            </a>
            {% endif %}

        </div>
    </div>
{% endblock %}

{% block content %}
    {% if authorize(['admin.configuration_' ~ config_slug, 'admin.super']) %}
        {% if isInfo %}
            <div id=\"phpinfo\">
                {{ admin.phpinfo|raw }}
            </div>
        {% else %}
            {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}
        {% endif %}
    {% endif %}
    {% include 'partials/modal-changes-detected.html.twig' %}
{% endblock %}

", "config.html.twig", "/var/www/html/user/plugins/admin/themes/grav/templates/config.html.twig");
    }
}
