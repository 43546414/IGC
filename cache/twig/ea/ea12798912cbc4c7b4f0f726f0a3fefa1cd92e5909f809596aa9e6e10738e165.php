<?php

/* @Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/snobswap */
class __TwigTemplate_f16f84f57c8a61448949869bbef516e6466bd61034474e1aac2feda8b757aa86 extends Twig_Template
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
        return "@Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/snobswap";
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
<p><a href=\"https://snobswap.com/\">snobswap.com</a></p>", "@Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/snobswap", "");
    }
}
