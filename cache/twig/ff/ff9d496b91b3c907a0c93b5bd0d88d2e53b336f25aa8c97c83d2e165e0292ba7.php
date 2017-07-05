<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_companies/snobswap */
class __TwigTemplate_a7777f5b79122511ee98fc6560293d69d744ed5635468b0f109a294aa2f410b5 extends Twig_Template
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
        echo "<h5>SnobSwap</h5>
<p>Online marketplace offering new and used luxury brands from the top consignment boutiques in the US.</p>
<p><a href=\"https://snobswap.com/\">snobswap.com</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/02.portfolio/_companies/snobswap";
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
        return new Twig_Source("<h5>SnobSwap</h5>
<p>Online marketplace offering new and used luxury brands from the top consignment boutiques in the US.</p>
<p><a href=\"https://snobswap.com/\">snobswap.com</a></p>", "@Page:/var/www/html/user/pages/02.portfolio/_companies/snobswap", "");
    }
}
