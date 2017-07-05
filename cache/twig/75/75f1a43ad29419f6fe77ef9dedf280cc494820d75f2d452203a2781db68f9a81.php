<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_headline */
class __TwigTemplate_993884e00f92bc80aeb6d13203f06ff5cbd99e06a3ffb112f32531a677aa1fb2 extends Twig_Template
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
  <img class=\"img-responsive center hrule-bottom twenty-five-opacity\" src=\"/user/images/hrule-dark@2x.png\" alt=\"hrule@2x\" width=\"340\" height=\"1\">

            <div class=\"text-center tagline\">
    <h4>Over the course of several decades we’ve invested over \$1.5 billion in consumer companies, making us uniquely qualified to grow companies on a global scale.</h4>
  </div>

        </div>
  </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/02.portfolio/_headline";
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
  <img class=\"img-responsive center hrule-bottom twenty-five-opacity\" src=\"/user/images/hrule-dark@2x.png\" alt=\"hrule@2x\" width=\"340\" height=\"1\">

            <div class=\"text-center tagline\">
    <h4>Over the course of several decades we’ve invested over \$1.5 billion in consumer companies, making us uniquely qualified to grow companies on a global scale.</h4>
  </div>

        </div>
  </div>
  </div>
", "@Page:/var/www/html/user/pages/02.portfolio/_headline", "");
    }
}
