<?php

/* @Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/marine-layer */
class __TwigTemplate_48c7ead39c576c14514cdaadbe1e3c37dfae8f2952ac5cdd69b711f4a36c6527 extends Twig_Template
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
        echo "<h5>Marine Layer</h5>
<p>The softest California inspired apparel you will find for women and men.</p>
<p><a href=\"https://www.marinelayer.com/\">marinelayer.com</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/marine-layer";
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
        return new Twig_Source("<h5>Marine Layer</h5>
<p>The softest California inspired apparel you will find for women and men.</p>
<p><a href=\"https://www.marinelayer.com/\">marinelayer.com</a></p>", "@Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/marine-layer", "");
    }
}
