<?php

/* @Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/raw-green-organics */
class __TwigTemplate_7b4673a616445fe7a7d8c2b9d3ef08f8cb749b42ad41c1a9ac360eb7890fc3b3 extends Twig_Template
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
        echo "<h5>Raw Green Organics</h5>
<p>Inspiring healthy living by providing the best in organic superfoods, smoothies and supplements.</p>
<p><a href=\"https://rawgreen.com/\">rawgreen.com</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/raw-green-organics";
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
        return new Twig_Source("<h5>Raw Green Organics</h5>
<p>Inspiring healthy living by providing the best in organic superfoods, smoothies and supplements.</p>
<p><a href=\"https://rawgreen.com/\">rawgreen.com</a></p>", "@Page:/Users/bzhang/repo/html/user/pages/02.companies/_companies/raw-green-organics", "");
    }
}
