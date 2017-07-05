<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_companies/bow-and-drape */
class __TwigTemplate_4feffef15c44303631edc8c0ccce323ac76f4740151b0a463ddc76642dadf4ae extends Twig_Template
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
        echo "<h5>BOW &amp; DRAPE</h5>
<p>Cheeky, irreverent custom designed fashion brand known for punny sweatshirts, tees and accessories.</p>
<p><a href=\"http://bowanddrape.com\">bowanddrape.com</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/02.portfolio/_companies/bow-and-drape";
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
        return new Twig_Source("<h5>BOW &amp; DRAPE</h5>
<p>Cheeky, irreverent custom designed fashion brand known for punny sweatshirts, tees and accessories.</p>
<p><a href=\"http://bowanddrape.com\">bowanddrape.com</a></p>", "@Page:/var/www/html/user/pages/02.portfolio/_companies/bow-and-drape", "");
    }
}
