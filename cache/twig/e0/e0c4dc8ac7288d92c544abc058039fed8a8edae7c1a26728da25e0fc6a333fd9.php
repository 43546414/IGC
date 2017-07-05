<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_companies/jaanuu */
class __TwigTemplate_e39dbe397cfc03fc46423df27cda451ce09b2a94543f5680781b15aadd4f631e extends Twig_Template
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
        echo "<h5>Jaanuu</h5>
<p>Contemporary runway-inspired antimicrobial medical apparel for women.  </p>
<p><a href=\"https://www.jaanuu.com/\">jaanuu.com</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/02.portfolio/_companies/jaanuu";
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
        return new Twig_Source("<h5>Jaanuu</h5>
<p>Contemporary runway-inspired antimicrobial medical apparel for women.  </p>
<p><a href=\"https://www.jaanuu.com/\">jaanuu.com</a></p>", "@Page:/var/www/html/user/pages/02.portfolio/_companies/jaanuu", "");
    }
}
