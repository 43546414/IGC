<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_previous-companies */
class __TwigTemplate_a1ab6fec5ee180bdb501ba93dd43ed1546546d3b1ef3ba7d944c2bd997de229e extends Twig_Template
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
        echo "  <div class=\"container previous-list\">
  <div class=\"row\">
    <div class=\"content-wrapper content-section col-lg-8 col-lg-offset-2 dark-text\">
    <div class=\"heading text-center\"><h2>Previous</h2></div>
    <img class=\"img-responsive center hrule-bottom twenty-five-opacity\" src=\"/user/images/hrule-dark@2x.png\" alt=\"hrule@2x\" width=\"340\" height=\"1\">

          
  <div class=\"previous\">
    <div class=\"previous-logo\"><img src=\"/user/pages/02.portfolio/_previous-companies/theory/thumbnail.png\" /></div>
  </div>
        </div>
  </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/02.portfolio/_previous-companies";
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
        return new Twig_Source("  <div class=\"container previous-list\">
  <div class=\"row\">
    <div class=\"content-wrapper content-section col-lg-8 col-lg-offset-2 dark-text\">
    <div class=\"heading text-center\"><h2>Previous</h2></div>
    <img class=\"img-responsive center hrule-bottom twenty-five-opacity\" src=\"/user/images/hrule-dark@2x.png\" alt=\"hrule@2x\" width=\"340\" height=\"1\">

          
  <div class=\"previous\">
    <div class=\"previous-logo\"><img src=\"/user/pages/02.portfolio/_previous-companies/theory/thumbnail.png\" /></div>
  </div>
        </div>
  </div>
  </div>
", "@Page:/var/www/html/user/pages/02.portfolio/_previous-companies", "");
    }
}
