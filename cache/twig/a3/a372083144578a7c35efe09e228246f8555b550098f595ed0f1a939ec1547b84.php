<?php

/* @Page:/var/www/html/user/pages/03.financial-disclosure/_main/_table */
class __TwigTemplate_5ccd1f873fc823938ce725180c5152db6b8d286651ac7de07afb09fd9a4e7f9a extends Twig_Template
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
        echo "  <div class=\"financial-disclosure-table-container row\">
  <div class=\"financial-disclosure-table col-xs-12\">
    <div class=\"financial-table-title-wrapper row\">
    <div class=\"financial-table-title-row col-md-8 col-md-offset-2\">
      <div class=\"financial-table-title-col general-partner-name\">ジェネラル・パートナー名</div>
      <div class=\"financial-table-title-col fund-name\">ファンド名</div>
      <div class=\"financial-table-title-col attachment\">別紙様式第二十号の二</div>
    </div>
    </div>
    <div class=\"financial-table-body-wrapper row\">
    <div class=\"financial-table-body col-md-8 col-md-offset-2\">
          <div class=\"financial-table-body-row\">
              <div class=\"financial-table-body-col\">Innovation Globe Capital Partners, Inc </div>
              <div class=\"financial-table-body-col\"> Innovation Globe Capital I Feeder, LP </div>
              <div class=\"financial-table-body-col\"> <a href=\"/financial-disclosure/_main/_table/record-1/IGC_HP_FSA_Update16.pdf\">PDF(102k)</a></div>
            </div>
        </div>
    </div>
  </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/user/pages/03.financial-disclosure/_main/_table";
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
        return new Twig_Source("  <div class=\"financial-disclosure-table-container row\">
  <div class=\"financial-disclosure-table col-xs-12\">
    <div class=\"financial-table-title-wrapper row\">
    <div class=\"financial-table-title-row col-md-8 col-md-offset-2\">
      <div class=\"financial-table-title-col general-partner-name\">ジェネラル・パートナー名</div>
      <div class=\"financial-table-title-col fund-name\">ファンド名</div>
      <div class=\"financial-table-title-col attachment\">別紙様式第二十号の二</div>
    </div>
    </div>
    <div class=\"financial-table-body-wrapper row\">
    <div class=\"financial-table-body col-md-8 col-md-offset-2\">
          <div class=\"financial-table-body-row\">
              <div class=\"financial-table-body-col\">Innovation Globe Capital Partners, Inc </div>
              <div class=\"financial-table-body-col\"> Innovation Globe Capital I Feeder, LP </div>
              <div class=\"financial-table-body-col\"> <a href=\"/financial-disclosure/_main/_table/record-1/IGC_HP_FSA_Update16.pdf\">PDF(102k)</a></div>
            </div>
        </div>
    </div>
  </div>
  </div>
", "@Page:/var/www/html/user/pages/03.financial-disclosure/_main/_table", "");
    }
}
