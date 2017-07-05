<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_headline/01._header */
class __TwigTemplate_0c8e3b054e1b966007da25f17639e3652304319418bb939809be859685ded2a3 extends Twig_Template
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
        echo "  <div class=\"heading text-center\"><h2>Current Portfolio</h2></div>
    <div class=\"h-divider \"></div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/02.portfolio/_headline/01._header";
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
        return new Twig_Source("  <div class=\"heading text-center\"><h2>Current Portfolio</h2></div>
    <div class=\"h-divider \"></div>
", "@Page:/var/www/html/user/pages/02.portfolio/_headline/01._header", "");
    }
}
