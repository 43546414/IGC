<?php

/* @Page:/var/www/html/user/pages/02.portfolio/_companies/try */
class __TwigTemplate_6b2a006765ab7b5cc89d5fe18f70147dd7ab6735224468cf334b5fb7060e600f extends Twig_Template
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
        return "@Page:/var/www/html/user/pages/02.portfolio/_companies/try";
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
<p><a href=\"https://try.com/\">try.com</a></p>", "@Page:/var/www/html/user/pages/02.portfolio/_companies/try", "");
    }
}
