<?php

/* @Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/try */
class __TwigTemplate_d5b5f5eabde83353d44d5552caf7d935dc83248b40068070cd6f8996a36eb0b3 extends Twig_Template
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
        echo "<h5>Try</h5>
<p>Try clothes from your favorite online stores with just the click of a button.  </p>
<p><a href=\"https://try.com/\">try.com</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/try";
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
        return new Twig_Source("<h5>Try</h5>
<p>Try clothes from your favorite online stores with just the click of a button.  </p>
<p><a href=\"https://try.com/\">try.com</a></p>", "@Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/try", "");
    }
}
