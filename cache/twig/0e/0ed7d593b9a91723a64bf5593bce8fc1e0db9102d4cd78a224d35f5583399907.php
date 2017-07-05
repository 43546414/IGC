<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_companies/kjaer-weis */
class __TwigTemplate_a4d873fde8a1e386f3f336ed05210980565fce4bd347fe1b828dcfb5c4b17c21 extends Twig_Template
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
        echo "<h5>Kjaer Weis</h5>
<p>Luxury organic makeup made from pure and natural ingredients that blend health and beauty in equal parts.</p>
<p><a href=\"https://kjaerweis.com/\">kjaerweis.com</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/02.portfolio/_companies/kjaer-weis";
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
        return new Twig_Source("<h5>Kjaer Weis</h5>
<p>Luxury organic makeup made from pure and natural ingredients that blend health and beauty in equal parts.</p>
<p><a href=\"https://kjaerweis.com/\">kjaerweis.com</a></p>", "@Page:/var/www/html/user/pages/02.portfolio/_companies/kjaer-weis", "");
    }
}
