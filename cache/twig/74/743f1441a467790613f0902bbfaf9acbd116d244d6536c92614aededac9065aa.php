<?php

/* @Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/buck-mason */
class __TwigTemplate_7c984e12c37c6b5a4a8f833a9045dccd717d22e0982ea9e1e2e109e4f9dcb70e extends Twig_Template
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
        return "@Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/buck-mason";
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
<p><a href=\"http://www.buckmason.com\">buckmason.com</a></p>", "@Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/buck-mason", "");
    }
}
