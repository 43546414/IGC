<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_headline/01._header */
class __TwigTemplate_f18561ccaaf9c67734a90a7242196a26cc490ef3059888a55b7da9474b1c7baa extends Twig_Template
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
        echo "  <div class=\"heading text-center\"><h2>Current Portfolios</h2></div>
  <img class=\"img-responsive center hrule-bottom twenty-five-opacity\" src=\"/user/images/hrule-dark@2x.png\" alt=\"hrule@2x\" width=\"340\" height=\"1\">
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
        return new Twig_Source("  <div class=\"heading text-center\"><h2>Current Portfolios</h2></div>
  <img class=\"img-responsive center hrule-bottom twenty-five-opacity\" src=\"/user/images/hrule-dark@2x.png\" alt=\"hrule@2x\" width=\"340\" height=\"1\">
", "@Page:/var/www/html/user/pages/02.portfolio/_headline/01._header", "");
    }
}
