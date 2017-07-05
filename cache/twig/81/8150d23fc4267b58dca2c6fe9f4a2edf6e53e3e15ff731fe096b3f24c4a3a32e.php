<?php

/* @Page:/Users/bzhang/repo/html/user/pages/02.companies/_headline */
class __TwigTemplate_b5a1de24ebcf80a06a67d8ba967129ae3739f3dbf63319728843a0d3c2ab22f2 extends Twig_Template
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
        echo "  <div class=\"container\">
  <div class=\"row\">
    <div class=\"content-wrapper content-section col-lg-8 col-lg-offset-2 dark-text\">
            <div class=\"heading text-center\"><h2>Current Portfolio</h2></div>
    <div class=\"h-divider \"></div>

            <div class=\"text-center tagline\">
    <h4>With decades of experience and having invested in over \$1 Billion of consumer companies, we’re uniquely qualified to grow companies on a global scale</h4>
  </div>

        </div>
  </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/bzhang/repo/html/user/pages/02.companies/_headline";
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
        return new Twig_Source("  <div class=\"container\">
  <div class=\"row\">
    <div class=\"content-wrapper content-section col-lg-8 col-lg-offset-2 dark-text\">
            <div class=\"heading text-center\"><h2>Current Portfolio</h2></div>
    <div class=\"h-divider \"></div>

            <div class=\"text-center tagline\">
    <h4>With decades of experience and having invested in over \$1 Billion of consumer companies, we’re uniquely qualified to grow companies on a global scale</h4>
  </div>

        </div>
  </div>
  </div>
", "@Page:/Users/bzhang/repo/html/user/pages/02.companies/_headline", "");
    }
}
