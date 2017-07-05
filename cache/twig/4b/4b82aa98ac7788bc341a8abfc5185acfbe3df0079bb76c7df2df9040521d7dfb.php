<?php

/* @Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/price-com */
class __TwigTemplate_2cf2cadf00a120267c428c807d49e50cc1b396637090ef4df12e2064cdc272ee extends Twig_Template
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
        echo "<h5>Price.com</h5>
<p>Multi-platform technology that allows users to scan thousands of retailers for the best price in a seamless online shopping experience.</p>
<p><a href=\"https://www.price.com/\">price.com</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/price-com";
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
        return new Twig_Source("<h5>Price.com</h5>
<p>Multi-platform technology that allows users to scan thousands of retailers for the best price in a seamless online shopping experience.</p>
<p><a href=\"https://www.price.com/\">price.com</a></p>", "@Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/price-com", "");
    }
}
