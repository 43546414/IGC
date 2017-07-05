<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_banner */
class __TwigTemplate_d78a1992b2452c698eef3493052ab0e27685965f3d810857efb48703bc57d0c4 extends Twig_Template
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
        echo "  \t    
<div class=\"banner\" style=\"background-image: url('/user/pages/02.portfolio/_banner/portfolio_hero_1.jpg')\">
</div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/02.portfolio/_banner";
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
        return new Twig_Source("  \t    
<div class=\"banner\" style=\"background-image: url('/user/pages/02.portfolio/_banner/portfolio_hero_1.jpg')\">
</div>
", "@Page:/var/www/html/user/pages/02.portfolio/_banner", "");
    }
}
