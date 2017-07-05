<?php

/* @Page:/var/www/html/user/pages/03.financial-disclosure/_main/_main-header */
class __TwigTemplate_53ead3a9274c51fda29eb6450029d48a424c54ebd8ac5c07ef36044cc6107e22 extends Twig_Template
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
        echo "  <div class=\"row\">
  <div class=\"col-lg-8 col-lg-offset-2 heading text-center\">
    <h2>Financial Disclosure</h2>
      <div class=\"h-divider \"></div>
  </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/03.financial-disclosure/_main/_main-header";
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
        return new Twig_Source("  <div class=\"row\">
  <div class=\"col-lg-8 col-lg-offset-2 heading text-center\">
    <h2>Financial Disclosure</h2>
      <div class=\"h-divider \"></div>
  </div>
  </div>
", "@Page:/var/www/html/user/pages/03.financial-disclosure/_main/_main-header", "");
    }
}
