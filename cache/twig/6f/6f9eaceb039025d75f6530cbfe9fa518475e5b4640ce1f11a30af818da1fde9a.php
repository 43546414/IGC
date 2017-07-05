<?php

/* @Page:/Users/bzhang/repo/html/user/pages/01.home/_portfolio/_portfolio-content */
class __TwigTemplate_80485f6e62df98e85d83a0b9118551ca0d3110e2aae3ea7bce4e2f00e9a9f30b extends Twig_Template
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
        echo "  <div class=\"text-center tagline\">
    <h2>We have looked at over 150 concepts, diligenced over 25, and invested in 11 companies thus far.</h2>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/bzhang/repo/html/user/pages/01.home/_portfolio/_portfolio-content";
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
        return new Twig_Source("  <div class=\"text-center tagline\">
    <h2>We have looked at over 150 concepts, diligenced over 25, and invested in 11 companies thus far.</h2>
  </div>
", "@Page:/Users/bzhang/repo/html/user/pages/01.home/_portfolio/_portfolio-content", "");
    }
}
