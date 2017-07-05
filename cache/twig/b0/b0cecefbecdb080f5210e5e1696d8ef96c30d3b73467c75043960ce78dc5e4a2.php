<?php

/* @Page:/Users/bzhang/repo/html/user/pages/03.fsa-disclosures/_main/_main-header */
class __TwigTemplate_705800cef5f70ef6fe2fdf07941fd74de49ea66a9f9579803007cbfa3f6753f3 extends Twig_Template
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
        return "@Page:/Users/bzhang/repo/html/user/pages/03.fsa-disclosures/_main/_main-header";
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
", "@Page:/Users/bzhang/repo/html/user/pages/03.fsa-disclosures/_main/_main-header", "");
    }
}
