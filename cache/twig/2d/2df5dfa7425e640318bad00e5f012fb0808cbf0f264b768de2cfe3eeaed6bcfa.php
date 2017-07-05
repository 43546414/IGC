<?php

/* @Page:/var/www/html/user/pages/01.home/_portfolio/_portfolio-link */
class __TwigTemplate_d5e5d564cefb4c956bd9d6d19789d6f21ad2a540b9ff1e583ff2db4bb3a9c95a extends Twig_Template
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
        echo "
  <div class=\"portfolio-link\">
    <a class=\"igc-button\">Our Porfolio</a>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/01.home/_portfolio/_portfolio-link";
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
        return new Twig_Source("
  <div class=\"portfolio-link\">
    <a class=\"igc-button\">Our Porfolio</a>
  </div>
", "@Page:/var/www/html/user/pages/01.home/_portfolio/_portfolio-link", "");
    }
}
