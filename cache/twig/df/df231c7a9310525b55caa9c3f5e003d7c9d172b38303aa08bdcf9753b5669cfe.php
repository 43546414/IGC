<?php

/* @Page:/var/www/html/user/pages/01.home */
class __TwigTemplate_08ac0af133ae307f133f6dc84bd3793c980facbeb8967084a451b002532141ad extends Twig_Template
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
        echo "Test Test";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/01.home";
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
        return new Twig_Source("Test Test", "@Page:/var/www/html/user/pages/01.home", "");
    }
}
