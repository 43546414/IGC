<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_companies/alchemy-43 */
class __TwigTemplate_b4ada788c2d93f68015cce470eff6abbefccbd9dd733dd4cc10261a04505d4ef extends Twig_Template
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
        echo "<h5>Alchemy 43</h5>
<p>High-end beauty clinics that deliver the highest quality cosmetic injectable treatments.</p>
<p><a href=\"http://www.alchemy43.com\">alchemy43.com</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/02.portfolio/_companies/alchemy-43";
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
        return new Twig_Source("<h5>Alchemy 43</h5>
<p>High-end beauty clinics that deliver the highest quality cosmetic injectable treatments.</p>
<p><a href=\"http://www.alchemy43.com\">alchemy43.com</a></p>", "@Page:/var/www/html/user/pages/02.portfolio/_companies/alchemy-43", "");
    }
}
