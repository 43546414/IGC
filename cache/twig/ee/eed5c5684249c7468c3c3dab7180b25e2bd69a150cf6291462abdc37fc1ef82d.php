<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_companies/price-com */
class __TwigTemplate_45ee025914a1e74bfb0f024400f68e0b75830e4dc2f2a07a8457c0b9958bd08e extends Twig_Template
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
<p>Multi-platform technology that allows user to scan thousands of retailers for the best price in a seamless online shopping experience.</p>
<p><a href=\"https://www.price.com/\">price.com</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/02.portfolio/_companies/price-com";
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
<p>Multi-platform technology that allows user to scan thousands of retailers for the best price in a seamless online shopping experience.</p>
<p><a href=\"https://www.price.com/\">price.com</a></p>", "@Page:/var/www/html/user/pages/02.portfolio/_companies/price-com", "");
    }
}
