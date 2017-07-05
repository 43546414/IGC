<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_companies/buck-mason */
class __TwigTemplate_ce3cb1262db55a24839389795c6f4cd0ba6c362631a1c630c8bc2812e0143fa5 extends Twig_Template
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
        echo "<h5>Buck Mason</h5>
<p>Simple and timeless apparel for the modern American man.</p>
<p><a href=\"http://www.buckmason.com\">buckmason.com</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/02.portfolio/_companies/buck-mason";
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
        return new Twig_Source("<h5>Buck Mason</h5>
<p>Simple and timeless apparel for the modern American man.</p>
<p><a href=\"http://www.buckmason.com\">buckmason.com</a></p>", "@Page:/var/www/html/user/pages/02.portfolio/_companies/buck-mason", "");
    }
}
