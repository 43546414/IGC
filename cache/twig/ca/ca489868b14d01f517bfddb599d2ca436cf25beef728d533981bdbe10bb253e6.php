<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_companies/marine-layer */
class __TwigTemplate_14ecdce2e6d2e2bfa6dfd63847adfeb55185d607ae03a2279124a1cd24f89878 extends Twig_Template
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
<p>Luxury LA beauty clinics that deliver the highest quality cosmetic injectable treatment.</p>
<p><a href=\"https://www.marinelayer.com/\">marinelayer.com</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/02.portfolio/_companies/marine-layer";
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
<p>Luxury LA beauty clinics that deliver the highest quality cosmetic injectable treatment.</p>
<p><a href=\"https://www.marinelayer.com/\">marinelayer.com</a></p>", "@Page:/var/www/html/user/pages/02.portfolio/_companies/marine-layer", "");
    }
}
