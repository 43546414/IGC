<?php

/* contactus.html.twig */
class __TwigTemplate_0db584f4b71c278319492b65deffde8a3e54d8b66f039df388435f96e0fda76a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "contactus.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"contact\">
  <div class=\"contact-content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <img src=\"";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/ico-phone.png");
        echo "\" alt=\"ico-phone@2x\" width=\"30\" height=\"30\">
          <p>(415) 659-1550</p>
        </div>
        <div class=\"col-sm-4\">
          <img src=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/ico-map.png");
        echo "\" alt=\"ico-loc@2x\" width=\"30\" height=\"30\">
          <p><a href=\"https://maps.google.com/maps?q=555+California+St+%234925,+San+Francisco,+San+Francisco+County,+California+94109&hl=en&geocode=FT-rQAId30e0-A&hnear=555+California+St+%234925,+San+Francisco,+California+94109&t=m&z=17\" target=\"_blank\" >555 California St Suite 4925 <br> San Francisco, CA 94104</a></p>
        </div>
        <div class=\"col-sm-4\">
          <img src=\"";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/ico-mail.png");
        echo "\" alt=\"ico-mail@2x\" width=\"30\" height=\"30\">
          <p><a href=\"mailto:info@innovationglobal.com\">info@innovationglobal.com</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "contactus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  45 => 13,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
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

{% block content %}
<div class=\"contact\">
  <div class=\"contact-content\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-4\">
          <img src=\"{{ url('theme://images/ico-phone.png') }}\" alt=\"ico-phone@2x\" width=\"30\" height=\"30\">
          <p>(415) 659-1550</p>
        </div>
        <div class=\"col-sm-4\">
          <img src=\"{{ url('theme://images/ico-map.png') }}\" alt=\"ico-loc@2x\" width=\"30\" height=\"30\">
          <p><a href=\"https://maps.google.com/maps?q=555+California+St+%234925,+San+Francisco,+San+Francisco+County,+California+94109&hl=en&geocode=FT-rQAId30e0-A&hnear=555+California+St+%234925,+San+Francisco,+California+94109&t=m&z=17\" target=\"_blank\" >555 California St Suite 4925 <br> San Francisco, CA 94104</a></p>
        </div>
        <div class=\"col-sm-4\">
          <img src=\"{{ url('theme://images/ico-mail.png') }}\" alt=\"ico-mail@2x\" width=\"30\" height=\"30\">
          <p><a href=\"mailto:info@innovationglobal.com\">info@innovationglobal.com</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "contactus.html.twig", "/Users/bzhang/repo/html/user/themes/igc/templates/contactus.html.twig");
    }
}
