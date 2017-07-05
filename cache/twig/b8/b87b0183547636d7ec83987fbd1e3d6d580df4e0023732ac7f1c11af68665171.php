<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_companies/raw-green-organics */
class __TwigTemplate_0a71a2893f30859d622028edfc404b3364c4012c12425a4889e09ea7fccb192b extends Twig_Template
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
        echo "<h5>Raw Green Organics</h5>
<p>Inspiring healthy living by providing the best in organic superfoods, smoothies and supplements.</p>
<p><a href=\"https://rawgreen.com/\">rawgreen.com</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/02.portfolio/_companies/raw-green-organics";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h5>Raw Green Organics</h5>
<p>Inspiring healthy living by providing the best in organic superfoods, smoothies and supplements.</p>
<p><a href=\"https://rawgreen.com/\">rawgreen.com</a></p>", "@Page:/var/www/html/user/pages/02.portfolio/_companies/raw-green-organics", "");
    }
}
