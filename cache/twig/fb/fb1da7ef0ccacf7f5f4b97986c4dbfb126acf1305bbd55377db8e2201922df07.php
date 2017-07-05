<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_headline */
class __TwigTemplate_329af155cf4b65960199ff9f13d8210ecaaa7d174f75c44e60ea8c861cbbbcf6 extends Twig_Template
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
    <div class=\"h-divider \"></div>

            <div class=\"text-center tagline\">
    <h4>Over the course of several decades we’ve invested over \$1.5 billion in consumer companies, making us uniquely qualified to grow companies on a global scale.</h4>
  </div>

        </div>
  </div>
  </div>
", "@Page:/var/www/html/user/pages/02.portfolio/_headline", "");
    }
}
