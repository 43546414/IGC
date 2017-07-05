<?php

/* index.html.twig */
class __TwigTemplate_973dd34f3270ad485f805588f9cfa08c29c3748fdc04ece717f33ed1cb07ea0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<!-- Section One
================================================== -->
<div class=\"fill section-one-bg\">
  <div id=\"myCarousel\" class=\"carousel slide\" data-random=\"true\" data-ride=\"carousel\" data-interval=\"0\">
    <div class=\"carousel-inner\">
      <div class=\"item\">
        <div class=\"fill\" style=\"background-image:url('";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://bg-section1-1.jpg");
        echo "');\">
        </div>
      </div>
      <div class=\"item\">
        <div class=\"fill\" style=\"background-image:url('";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://bg-section1-2.jpg");
        echo "');\">
        </div>
      </div>
      <div class=\"item\">
        <div class=\"fill\" style=\"background-image:url('";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://bg-section1-3.jpg");
        echo "');\">
        </div>
      </div>
    </div><!-- carousel-inner -->
  </div><!-- carousel slide -->
</div><!-- container fill -->

<div class=\"container section-one-container\">
  <div class=\"row\">
    <div class=\"col-lg-8 col-lg-offset-2 section-one-content\">
       <h1 class=\"tagline text-center\">Innovation Global Capital partners with exceptional entrepreneurs to build innovative global companies that change the world.</h1>
    </div>
  </div>
</div><!-- section-one-header -->

<!-- Section Two
================================================== -->
<a class=\"anchor\" id=\"firm\"></a>
<div class=\"section-two-header\">
<div class=\"container\">
<div class=\"row\">
  <div class=\"col-lg-8 col-lg-offset-2 section-two-content dark-text\">
    <h2 class=\"heading text-center\">The Firm</h2>
    ";
        // line 41
        $this->loadTemplate("partials/h-divider.html.twig", "index.html.twig", 41)->display($context);
        // line 42
        echo "    <h2 class=\"text-center tagline\">We think like entrepreneurs<br>because we are entrepreneurs.</h2>
    <div class=\"twocolumn dark-text\">
      <p>Innovation Global Capital partners with visionary entrepreneurs in the development of strategies, branding, organizations, and operations throughout the progressive stages of growth. Our focus is on long-term value creation, growth and profitability — not quarterly capitalism.</p>
      <p>We have built businesses. We understand the critical role of product, merchandising, branding and digital, having consumer sector experience across three continents. We partner with leaders who are passionate about the customer.</p>
      <p>In select circumstances, Innovation Global Capital will invest in innovative concepts and exciting partners that fulfill our investment criteria. We also have access to substantial pools of capital via relationships with high net worth families, institutional, and strategic investors for co-invest opportunities.</p>
      <p>Our unique combination of executive experience and investment capital can significantly accelerate the growth of our partners.</p>
      <p>Having met with hundreds of entrepreneurs worldwide, a universally reoccurring theme emerged. Most entrepreneurs are looking for trusted partners with executive management experience, yet paradoxically much investment capital comes from financiers with limited real world experience. Innovation Global Capital was founded to fill this void.</p>
      <p>We have experienced the unabashed joys of entrepreneurial success, and the unique challenges of creating and building brands. We support the visionary passion of the entrepreneur yet understand the practical operational realities. We guide the critical path to market leadership.</p>
      <p>We are entrepreneurs.</p>
    </div>
  </div>
</div>
</div>
</div>

 <!-- Section Three
================================================== -->
<!--
<a class=\"anchor\" id=\"leadership\"></a>
<div class=\"section-three-header\">
<div class=\"container\">
<div class=\"row\">
 <div class=\"col-lg-7 col-md-7 section-three-content\">
   <h2 class=\"text-center\">Yasunobu Kyogoku, Founder</h2>
   <img class=\"img-responsive center hrule-bottom\" src=\"";
        // line 66
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://hrule@2x.png");
        echo "\" alt=\"hrule@2x\" width=\"340\" height=\"30\">
   <p class=\"lead\">Mr Kyogoku has extensive investing and executive experience spanning three continents. He has served as Chief Investment Officer of Fast Retailing and Chief Operating Officer of Uniqlo USA. He is a current or former Board Member of ModCloth, Theory, Helmut Lang, Comptoir des Cotonniers, Princesse tam.tam and other global brands.</p>
   <div class=\"twocolumn light-text\">
     <p>He has worked with two exceptional billionaire entrepreneurs &mdash; Messrs Tadashi Yanai and Minoru Mori &mdash; in his varied career.</p>
     <p>As the Chief Investment Officer of Fast Retailing, a \$36 Billion company, Mr Kyogoku purchased over \$1.3 Billion worth of branded fashion companies in the US, Europe and Asia. His investments created significant shareholder value during his involvement with the companies, and became the largest affordable luxury apparel group in the world. As COO of Uniqlo USA, Mr Kyogoku played a pivotal role in developing the brand from a single New York store into a national phenomenon.</p>
     <p>At Mori Building, Mr Kyogoku helped create one of Japan&rsquo;s first Real Estate Investment Trusts, eventually listing in a \$750 million IPO that today is worth nearly \$2 Billion. He began his career at the management consultancy Bain &amp; Company developing strategies for global technology, internet and consumer product corporations.</p>
     <p>Mr Kyogoku is a Trustee of the San Francisco Zoological Society (SF Zoo), and a Council Member of the Asiatic Society of Japan.</p>
     <p>Mr Kyogoku attended graduate schools at both Oxford University and Tokyo University after graduating from Columbia University.</p>
     <p>He has appeared frequently on television and in print, including CNBC, CBS, Fox Business, Bloomberg, Financial Times, New York Times, Wall Street Journal, and local TV affiliates of ABC, NBC, CBS, and Fox.</p>
   </div>
 </div>
</div>
</div>
</div>
-->

<!-- Section Four
================================================== -->
<div id=\"investmentStrategySlides\" class=\"section-four\">
<a class=\"anchor\" id=\"investment\"></a>
<div class=\"section-four-header\">
 <div class=\"container\">
   <div class=\"row\">
     <div class=\"col-sm-8 col-sm-offset-2 section-four-content\">
        <h2 class=\"heading text-center\">Investment Strategy</h2>
        ";
        // line 91
        $this->loadTemplate("partials/h-divider.html.twig", "index.html.twig", 91)->display($context);
        // line 92
        echo "        <h2 class=\"text-center tagline\">Innovation targets investment opportunities at the intersection of the digital and real worlds. We favor consumer concepts with global potential.</h2>
     </div>
   </div>
   <div class=\"row investment-content\">
     <div class=\"col-sm-8 col-sm-offset-2 section-four-content\">
       <div class=\"col-md-4 dark-text section-four-text investment-col\">
         <div class=\"investment-col-icon\">
          <img src=\"";
        // line 99
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://Fashion_Icon.svg");
        echo "\" alt=\"fashion and beauty\" width=\"78\" height=\"80\">
         </div>
         <h5 class=\"investment-col-title\">Fashion & Beauty</h5>
         <p class=\"lead\">Venture and growth opportunities in the fashion, apparel, accessories, and beauty sectors, especially consumer focused concepts that utilize digital & social commerce.</p>
       </div>
       <div class=\"col-md-4 dark-text section-four-text investment-col\">
         <div class=\"investment-col-icon\">
          <img src=\"";
        // line 106
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://Technology_Icon.svg");
        echo "\" alt=\"consumer technology\" width=\"78\" height=\"80\">
         </div>
         <h5 class=\"investment-col-title\">Consumer Technology</h5>
         <p class=\"lead\">Harnessing the rapid growth in ubiquitous technology and mobility to create innovative digital services, applications, communities and distribution models that directly empower and engage consumers worldwide.</p>
       </div>
       <div class=\"col-md-4 dark-text section-four-text investment-col\">
         <div class=\"investment-col-icon\">
          <img src=\"";
        // line 113
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://Food_Icon.svg");
        echo "\" alt=\"natural food and beverage\" width=\"78\" height=\"80\">
         </div>
         <h5 class=\"investment-col-title\">Natural Food & Beverage</h5>
         <p class=\"lead\">Targeting emerging organic food and beverage brands to address the global population needs for healthy lifestyle alternatives.</p>
       </div>
     </div>
   </div><!-- row -->
 </div><!-- container -->
</div><!-- header -->
</div><!-- section -->

<!-- Section Five
================================================== -->
<a class=\"anchor\" id=\"expertise\"></a>
<div class=\"section-five-header\">
<div class=\"container\">
<div class=\"row\">
 <div class=\"col-lg-8 col-lg-offset-2 section-five-content\">
   <h2 class=\"heading text-center\">Expertise</h2>
   ";
        // line 132
        $this->loadTemplate("partials/h-divider.html.twig", "index.html.twig", 132)->display(array_merge($context, array("inverse" => true)));
        // line 133
        echo "   <h2 class=\"tagline text-center\">The brands of the future must successfully navigate the merging of the physical and digital domains, guided by those with experience in both.</h2>
   <div class=\"col-sm-4 col-sm-offset-2 center\">
     <div class=\"expertiseItem\">
       <img src=\"";
        // line 136
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://ico-growth@2x.png");
        echo "\" alt=\"ico-growth@2x\" width=\"17\" height=\"22\">
       <h5>Growth Strategy</h5>
     </div>
     <div class=\"expertiseItem\">
       <img src=\"";
        // line 140
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://ico-global@2x.png");
        echo "\" alt=\"ico-global@2x\" width=\"21\" height=\"21\">
       <h5>Global Expansion</h5>
     </div>
     <div class=\"expertiseItem\">
       <img src=\"";
        // line 144
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://ico-digital@2x.png");
        echo "\" alt=\"ico-digital@2x\" width=\"20\" height=\"20\">
       <h5>Digital Strategy</h5>
     </div>
   </div><!-- col -->
   <div class=\"col-sm-4 center\">
     <div class=\"expertiseItem\">
       <img src=\"";
        // line 150
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://ico-brand@2x.png");
        echo "\" alt=\"ico-brand@2x\" width=\"19\" height=\"19\">
       <h5>Brand Development</h5>
     </div>
     <div class=\"expertiseItem\">
       <img src=\"";
        // line 154
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://ico-marketing@2x.png");
        echo "\" alt=\"ico-marketing@2x\" width=\"19\" height=\"19\">
       <h5>Marketing &amp; Communications</h5>
     </div>
     <div class=\"expertiseItem\">
       <img src=\"";
        // line 158
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://ico-consumers@2x.png");
        echo "\" alt=\"ico-consumers@2x\" width=\"25\" height=\"14\">
       <h5>Consumer Insight</h5>
     </div>
   </div><!-- col -->
   <div class=\"col-sm-4 center\">
     <div class=\"expertiseItem\">
       <img src=\"";
        // line 164
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://ico-management@2x.png");
        echo "\" alt=\"ico-management@2x\" width=\"18\" height=\"22\">
       <h5>Management &amp; Organization</h5>
     </div>
     <div class=\"expertiseItem\">
       <img src=\"";
        // line 168
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://ico-strategic@2x.png");
        echo "\" alt=\"ico-strategic@2x\" width=\"31\" height=\"20\">
       <h5>Strategic Alliances<br>&amp; Partnerships</h5>
     </div>
     <div class=\"expertiseItem\">
       <img src=\"";
        // line 172
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://ico-retail@2x.png");
        echo "\" alt=\"ico-retail@2x\" width=\"22\" height=\"16\">
       <h5>Retail Strategy</h5>
     </div>
   </div>
 </div>
</div>
</div>
</div>

<!-- Section Six CMS sections starting with Portfolio
================================================== -->
";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 184
            echo "  ";
            echo $this->getAttribute($context["module"], "content", array());
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "
<!-- Section Seven
================================================== -->

<div id=\"principlesSlides\" class=\"carousel slide section-seven-header\" data-interval=\"false\">
<a class=\"anchor\" id=\"philosophy\"></a>
<!-- Slide 1 -->
<div class=\"carousel-inner\">

<div class=\"item active philosophy\">
 <div class=\"container\">
     <div class=\"row\">
       <div class=\"col-sm-8 col-sm-offset-2\">
         <h2 class=\"heading text-center\">Philosophy</h2>
         ";
        // line 200
        $this->loadTemplate("partials/h-divider.html.twig", "index.html.twig", 200)->display(array_merge($context, array("inverse" => true)));
        // line 201
        echo "         <h2 class=\"text-center hidden-sm hidden-xs\">We strive for long-term shared success based upon our core principles.</h2>
       </div>
       <div class=\"col-md-12\">
         <div class=\"col-md-2 col-md-offset-1 principles\">
           <h4>Excellence</h4>
           <p>Perpetually<br>strive for global excellence.</p>
         </div>
         <div class=\"col-md-2 principles\">
           <h4>Innovation</h4>
           <p>Continually innovate for competitive advantage.</p>
         </div>
         <div class=\"col-md-2 principles\">
           <h4>Integrity</h4>
           <p>Value Integrity  and Trust foremost.</p>
         </div>
         <div class=\"col-md-2 principles\">
           <h4>Partnership</h4>
           <p>Form win-win partnerships.</p>
         </div>
         <div class=\"col-md-2 principles principles-last\">
           <h4>Social Responsibility</h4>
           <p>Contribute to a better society.</p>
         </div>
       </div>
     </div>
     <!-- Controls -->
     <a class=\"right carousel-control visible-sm visible-xs\" href=\"#principlesSlides\" data-slide=\"next\">
       <span class=\"icon-next\"></span>
     </a>
     <a class=\"igc-button-inverse igc-button buttons-philosophy hidden-sm hidden-xs btn btn-large btn-primary\" href=\"#principlesSlides\" data-slide=\"next\">OUR WORLDVIEW <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
 </div>
</div><!-- item -->

<div class=\"item innovation\">
 <div class=\"container\">
   <div class=\"row\">
     <div class=\"col-sm-8 col-sm-offset-2\">
       <h2 class=\"heading light-text text-center\">Philosophy</h2>
       ";
        // line 239
        $this->loadTemplate("partials/h-divider.html.twig", "index.html.twig", 239)->display(array_merge($context, array("inverse" => true)));
        // line 240
        echo "       <h2 class=\"text-center hidden-xs\">The company name Innovation Global Capital reflects our worldview.</h2>
       <h4 class=\"two-column-title\">INNOVATION</h4>
       <div class=\"twocolumn light-text\">
         <p>We only work with the most innovative entrepreneurs and companies.</p>
         <p>Innovation is the only competitive advantage when information is democratic and immediate. In an era where industry disruption can begin in a dorm room, companies must continually innovate to compete in the global marketplace. Equally, an innovative concept or brand can aggressively expand and pioneer a new market. We believe that innovation cannot be a one-off event – it requires a relentless and continual commitment.</p>
       </div>
       <div class=\"col-sm-1 innovation-buttons prev-btn hidden-sm hidden-xs\">
         <a class=\"igc-button-inverse igc-button btn btn-large btn-primary\" href=\"#principlesSlides\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span> PHILOSOPHY</a>
       </div>
       <div class=\"col-sm-1 col-sm-offset-9 innovation-buttons hidden-sm hidden-xs\">
         <a class=\"igc-button-inverse igc-button btn btn-large btn-primary\" href=\"#principlesSlides\" data-slide=\"next\">GLOBAL <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
       </div>
       <!-- Indicators -->
       <ol class=\"carousel-indicators visible-md visible-lg\">
         <li data-target=\"#principlesSlides\" data-slide-to=\"0\"></li>
         <li data-target=\"#principlesSlides\" data-slide-to=\"1\" class=\"active\"></li>
         <li data-target=\"#principlesSlides\" data-slide-to=\"2\"></li>
         <li data-target=\"#principlesSlides\" data-slide-to=\"3\"></li>
       </ol>
     </div>
     <!-- Controls -->
     <a class=\"left carousel-control visible-sm visible-xs\" href=\"#principlesSlides\" data-slide=\"prev\">
       <span class=\"icon-prev\"></span>
     </a>
     <a class=\"right carousel-control visible-sm visible-xs\" href=\"#principlesSlides\" data-slide=\"next\">
       <span class=\"icon-next\"></span>
     </a>
   </div><!-- row -->
 </div><!-- container -->
</div><!-- item -->
<div class=\"item global\">
 <div class=\"container\">
   <div class=\"row\">
     <div class=\"col-sm-8 col-sm-offset-2\">
       <h2 class=\"heading light-text text-center\">Philosophy</h2>
       ";
        // line 275
        $this->loadTemplate("partials/h-divider.html.twig", "index.html.twig", 275)->display(array_merge($context, array("inverse" => true)));
        // line 276
        echo "       <h2 class=\"text-center hidden-xs\">The company name Innovation Global Capital reflects our worldview.</h2>
       <h4 class=\"two-column-title\">GLOBAL</h4>
       <div class=\"twocolumn light-text\">
         <p>We firmly believe only global concepts and companies will survive and dominate in the 21st century. Consumers, markets, trends and information have become globalized. Entrepreneurs can no longer succeed simply by building a parochial domestic company. Whereas global opportunities were often considered only years after a company was founded, now most great ideas are globally scalable. With the right global relationships and knowledge, there are significant first mover advantages for the innovative. Globalization is an oft used word, but the world truly is Global.</p>
       </div>
       <div class=\"col-sm-1 global-buttons prev-btn hidden-sm hidden-xs\">
         <a class=\"igc-button-inverse igc-button btn btn-large btn-primary\" href=\"#principlesSlides\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span> INNOVATION</a>
       </div>
       <div class=\"col-sm-1 col-sm-offset-9 global-buttons hidden-sm hidden-xs\">
         <a class=\"igc-button-inverse igc-button btn btn-large btn-primary\" href=\"#principlesSlides\" data-slide=\"next\">CAPITAL <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
       </div>
       <!-- Indicators -->
       <ol class=\"carousel-indicators visible-md visible-lg\">
         <li data-target=\"#principlesSlides\" data-slide-to=\"0\"></li>
         <li data-target=\"#principlesSlides\" data-slide-to=\"1\"></li>
         <li class=\"activeSlide\"></li>
         <li data-target=\"#principlesSlides\" data-slide-to=\"3\"></li>
       </ol>
     </div>
     <!-- Controls -->
     <a class=\"left carousel-control visible-sm visible-xs\" href=\"#principlesSlides\" data-slide=\"prev\">
       <span class=\"icon-prev\"></span>
     </a>
     <a class=\"right carousel-control visible-sm visible-xs\" href=\"#principlesSlides\" data-slide=\"next\">
       <span class=\"icon-next\"></span>
     </a>
   </div><!-- row -->
 </div><!-- container -->
</div><!-- item -->
<div class=\"item capital\">
 <div class=\"container\">
   <div class=\"row\">
     <div class=\"col-sm-8 col-sm-offset-2\">
       <h2 class=\"heading light-text text-center\">Philosophy</h2>
       ";
        // line 310
        $this->loadTemplate("partials/h-divider.html.twig", "index.html.twig", 310)->display(array_merge($context, array("inverse" => true)));
        // line 311
        echo "       <h2 class=\"text-center hidden-xs\">The company name Innovation Global Capital reflects our worldview.</h2>
       <h4 class=\"two-column-title\">CAPITAL</h4>
       <div class=\"twocolumn light-text\">
         <p>It is a given that capital is essential to growth. Innovation Global Capital, however, is different.</p>
         <p>We believe capital must be combined with experience, that creativity must coexist with rationality.</p>
         <p>We integrate both the passionate emotions of brands and the profit imperative of business.</p>
         <p><br></p>
         <p>Our approach to investing is to partner with visionary entrepreneurs who are driven to change the world.</p>
         <p>We provide capital and executive experience to propel growth and profitability, working together to create long term value as trusted confidant and partner.</p>
         <p>We think like entrepreneurs because we are entrepreneurs.</p>
       </div>
       <div class=\"col-sm-1 col-sm-offset-5 capital-buttons prev-btn hidden-sm hidden-xs\">
         <a class=\"igc-button-inverse igc-button btn btn-large btn-primary\" href=\"#principlesSlides\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span> GLOBAL</a>
       </div>
     </div>
     <!-- Controls -->
     <a class=\"left carousel-control visible-sm visible-xs\" href=\"#principlesSlides\" data-slide=\"prev\">
       <span class=\"icon-prev\"></span>
     </a>
   </div><!-- row -->
 </div><!-- container -->
</div><!-- item -->
</div>
</div>

<!-- Section Eight
================================================== -->
<div class=\"fill section-eight-header\">
 <div id=\"section-eight-carousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3500\">
   <div class=\"carousel-inner\">
     <div class=\"active item\">
       <div class=\"fill\" style=\"background-image:url('";
        // line 342
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://bg-section8-1.png");
        echo "');\">
       </div>
     </div>
     <div class=\"item\">
       <div class=\"fill\" style=\"background-image:url('";
        // line 346
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://bg-section8-2.png");
        echo "');\">
       </div>
     </div>
     <div class=\"item\">
       <div class=\"fill\" style=\"background-image:url('";
        // line 350
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://bg-section8-3.png");
        echo "');\">
       </div>
     </div>
   </div>
 </div><!-- carousel-inner -->
</div><!-- carousel slide -->
</div><!-- container fill -->
<div class=\"container section-eight-content\">
 <div class=\"row\">
   <div class=\"col-lg-8 col-lg-offset-2 section-one-content\">
     <h2 class=\"tagline text-center\">Entrepreneurship is built upon faith and passion. The entrepreneur will face naysayers along the journey. Yet the successful entrepreneur sees through the fog of uncertainty to <i>create the future.</i></h2>
   </div>
 </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 350,  459 => 346,  452 => 342,  419 => 311,  417 => 310,  381 => 276,  379 => 275,  342 => 240,  340 => 239,  300 => 201,  298 => 200,  282 => 186,  273 => 184,  269 => 183,  255 => 172,  248 => 168,  241 => 164,  232 => 158,  225 => 154,  218 => 150,  209 => 144,  202 => 140,  195 => 136,  190 => 133,  188 => 132,  166 => 113,  156 => 106,  146 => 99,  137 => 92,  135 => 91,  107 => 66,  81 => 42,  79 => 41,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<!-- Section One
================================================== -->
<div class=\"fill section-one-bg\">
  <div id=\"myCarousel\" class=\"carousel slide\" data-random=\"true\" data-ride=\"carousel\" data-interval=\"0\">
    <div class=\"carousel-inner\">
      <div class=\"item\">
        <div class=\"fill\" style=\"background-image:url('{{ url('image://bg-section1-1.jpg') }}');\">
        </div>
      </div>
      <div class=\"item\">
        <div class=\"fill\" style=\"background-image:url('{{ url('image://bg-section1-2.jpg') }}');\">
        </div>
      </div>
      <div class=\"item\">
        <div class=\"fill\" style=\"background-image:url('{{ url('image://bg-section1-3.jpg') }}');\">
        </div>
      </div>
    </div><!-- carousel-inner -->
  </div><!-- carousel slide -->
</div><!-- container fill -->

<div class=\"container section-one-container\">
  <div class=\"row\">
    <div class=\"col-lg-8 col-lg-offset-2 section-one-content\">
       <h1 class=\"tagline text-center\">Innovation Global Capital partners with exceptional entrepreneurs to build innovative global companies that change the world.</h1>
    </div>
  </div>
</div><!-- section-one-header -->

<!-- Section Two
================================================== -->
<a class=\"anchor\" id=\"firm\"></a>
<div class=\"section-two-header\">
<div class=\"container\">
<div class=\"row\">
  <div class=\"col-lg-8 col-lg-offset-2 section-two-content dark-text\">
    <h2 class=\"heading text-center\">The Firm</h2>
    {% include 'partials/h-divider.html.twig' %}
    <h2 class=\"text-center tagline\">We think like entrepreneurs<br>because we are entrepreneurs.</h2>
    <div class=\"twocolumn dark-text\">
      <p>Innovation Global Capital partners with visionary entrepreneurs in the development of strategies, branding, organizations, and operations throughout the progressive stages of growth. Our focus is on long-term value creation, growth and profitability — not quarterly capitalism.</p>
      <p>We have built businesses. We understand the critical role of product, merchandising, branding and digital, having consumer sector experience across three continents. We partner with leaders who are passionate about the customer.</p>
      <p>In select circumstances, Innovation Global Capital will invest in innovative concepts and exciting partners that fulfill our investment criteria. We also have access to substantial pools of capital via relationships with high net worth families, institutional, and strategic investors for co-invest opportunities.</p>
      <p>Our unique combination of executive experience and investment capital can significantly accelerate the growth of our partners.</p>
      <p>Having met with hundreds of entrepreneurs worldwide, a universally reoccurring theme emerged. Most entrepreneurs are looking for trusted partners with executive management experience, yet paradoxically much investment capital comes from financiers with limited real world experience. Innovation Global Capital was founded to fill this void.</p>
      <p>We have experienced the unabashed joys of entrepreneurial success, and the unique challenges of creating and building brands. We support the visionary passion of the entrepreneur yet understand the practical operational realities. We guide the critical path to market leadership.</p>
      <p>We are entrepreneurs.</p>
    </div>
  </div>
</div>
</div>
</div>

 <!-- Section Three
================================================== -->
<!--
<a class=\"anchor\" id=\"leadership\"></a>
<div class=\"section-three-header\">
<div class=\"container\">
<div class=\"row\">
 <div class=\"col-lg-7 col-md-7 section-three-content\">
   <h2 class=\"text-center\">Yasunobu Kyogoku, Founder</h2>
   <img class=\"img-responsive center hrule-bottom\" src=\"{{ url('image://hrule@2x.png') }}\" alt=\"hrule@2x\" width=\"340\" height=\"30\">
   <p class=\"lead\">Mr Kyogoku has extensive investing and executive experience spanning three continents. He has served as Chief Investment Officer of Fast Retailing and Chief Operating Officer of Uniqlo USA. He is a current or former Board Member of ModCloth, Theory, Helmut Lang, Comptoir des Cotonniers, Princesse tam.tam and other global brands.</p>
   <div class=\"twocolumn light-text\">
     <p>He has worked with two exceptional billionaire entrepreneurs &mdash; Messrs Tadashi Yanai and Minoru Mori &mdash; in his varied career.</p>
     <p>As the Chief Investment Officer of Fast Retailing, a \$36 Billion company, Mr Kyogoku purchased over \$1.3 Billion worth of branded fashion companies in the US, Europe and Asia. His investments created significant shareholder value during his involvement with the companies, and became the largest affordable luxury apparel group in the world. As COO of Uniqlo USA, Mr Kyogoku played a pivotal role in developing the brand from a single New York store into a national phenomenon.</p>
     <p>At Mori Building, Mr Kyogoku helped create one of Japan&rsquo;s first Real Estate Investment Trusts, eventually listing in a \$750 million IPO that today is worth nearly \$2 Billion. He began his career at the management consultancy Bain &amp; Company developing strategies for global technology, internet and consumer product corporations.</p>
     <p>Mr Kyogoku is a Trustee of the San Francisco Zoological Society (SF Zoo), and a Council Member of the Asiatic Society of Japan.</p>
     <p>Mr Kyogoku attended graduate schools at both Oxford University and Tokyo University after graduating from Columbia University.</p>
     <p>He has appeared frequently on television and in print, including CNBC, CBS, Fox Business, Bloomberg, Financial Times, New York Times, Wall Street Journal, and local TV affiliates of ABC, NBC, CBS, and Fox.</p>
   </div>
 </div>
</div>
</div>
</div>
-->

<!-- Section Four
================================================== -->
<div id=\"investmentStrategySlides\" class=\"section-four\">
<a class=\"anchor\" id=\"investment\"></a>
<div class=\"section-four-header\">
 <div class=\"container\">
   <div class=\"row\">
     <div class=\"col-sm-8 col-sm-offset-2 section-four-content\">
        <h2 class=\"heading text-center\">Investment Strategy</h2>
        {% include 'partials/h-divider.html.twig' %}
        <h2 class=\"text-center tagline\">Innovation targets investment opportunities at the intersection of the digital and real worlds. We favor consumer concepts with global potential.</h2>
     </div>
   </div>
   <div class=\"row investment-content\">
     <div class=\"col-sm-8 col-sm-offset-2 section-four-content\">
       <div class=\"col-md-4 dark-text section-four-text investment-col\">
         <div class=\"investment-col-icon\">
          <img src=\"{{ url('image://Fashion_Icon.svg') }}\" alt=\"fashion and beauty\" width=\"78\" height=\"80\">
         </div>
         <h5 class=\"investment-col-title\">Fashion & Beauty</h5>
         <p class=\"lead\">Venture and growth opportunities in the fashion, apparel, accessories, and beauty sectors, especially consumer focused concepts that utilize digital & social commerce.</p>
       </div>
       <div class=\"col-md-4 dark-text section-four-text investment-col\">
         <div class=\"investment-col-icon\">
          <img src=\"{{ url('image://Technology_Icon.svg') }}\" alt=\"consumer technology\" width=\"78\" height=\"80\">
         </div>
         <h5 class=\"investment-col-title\">Consumer Technology</h5>
         <p class=\"lead\">Harnessing the rapid growth in ubiquitous technology and mobility to create innovative digital services, applications, communities and distribution models that directly empower and engage consumers worldwide.</p>
       </div>
       <div class=\"col-md-4 dark-text section-four-text investment-col\">
         <div class=\"investment-col-icon\">
          <img src=\"{{ url('image://Food_Icon.svg') }}\" alt=\"natural food and beverage\" width=\"78\" height=\"80\">
         </div>
         <h5 class=\"investment-col-title\">Natural Food & Beverage</h5>
         <p class=\"lead\">Targeting emerging organic food and beverage brands to address the global population needs for healthy lifestyle alternatives.</p>
       </div>
     </div>
   </div><!-- row -->
 </div><!-- container -->
</div><!-- header -->
</div><!-- section -->

<!-- Section Five
================================================== -->
<a class=\"anchor\" id=\"expertise\"></a>
<div class=\"section-five-header\">
<div class=\"container\">
<div class=\"row\">
 <div class=\"col-lg-8 col-lg-offset-2 section-five-content\">
   <h2 class=\"heading text-center\">Expertise</h2>
   {% include 'partials/h-divider.html.twig' with {'inverse' : true} %}
   <h2 class=\"tagline text-center\">The brands of the future must successfully navigate the merging of the physical and digital domains, guided by those with experience in both.</h2>
   <div class=\"col-sm-4 col-sm-offset-2 center\">
     <div class=\"expertiseItem\">
       <img src=\"{{ url('image://ico-growth@2x.png') }}\" alt=\"ico-growth@2x\" width=\"17\" height=\"22\">
       <h5>Growth Strategy</h5>
     </div>
     <div class=\"expertiseItem\">
       <img src=\"{{ url('image://ico-global@2x.png') }}\" alt=\"ico-global@2x\" width=\"21\" height=\"21\">
       <h5>Global Expansion</h5>
     </div>
     <div class=\"expertiseItem\">
       <img src=\"{{ url('image://ico-digital@2x.png') }}\" alt=\"ico-digital@2x\" width=\"20\" height=\"20\">
       <h5>Digital Strategy</h5>
     </div>
   </div><!-- col -->
   <div class=\"col-sm-4 center\">
     <div class=\"expertiseItem\">
       <img src=\"{{ url('image://ico-brand@2x.png') }}\" alt=\"ico-brand@2x\" width=\"19\" height=\"19\">
       <h5>Brand Development</h5>
     </div>
     <div class=\"expertiseItem\">
       <img src=\"{{ url('image://ico-marketing@2x.png') }}\" alt=\"ico-marketing@2x\" width=\"19\" height=\"19\">
       <h5>Marketing &amp; Communications</h5>
     </div>
     <div class=\"expertiseItem\">
       <img src=\"{{ url('image://ico-consumers@2x.png') }}\" alt=\"ico-consumers@2x\" width=\"25\" height=\"14\">
       <h5>Consumer Insight</h5>
     </div>
   </div><!-- col -->
   <div class=\"col-sm-4 center\">
     <div class=\"expertiseItem\">
       <img src=\"{{ url('image://ico-management@2x.png') }}\" alt=\"ico-management@2x\" width=\"18\" height=\"22\">
       <h5>Management &amp; Organization</h5>
     </div>
     <div class=\"expertiseItem\">
       <img src=\"{{ url('image://ico-strategic@2x.png') }}\" alt=\"ico-strategic@2x\" width=\"31\" height=\"20\">
       <h5>Strategic Alliances<br>&amp; Partnerships</h5>
     </div>
     <div class=\"expertiseItem\">
       <img src=\"{{ url('image://ico-retail@2x.png') }}\" alt=\"ico-retail@2x\" width=\"22\" height=\"16\">
       <h5>Retail Strategy</h5>
     </div>
   </div>
 </div>
</div>
</div>
</div>

<!-- Section Six CMS sections starting with Portfolio
================================================== -->
{% for module in page.collection() %}
  {{ module.content }}
{% endfor %}

<!-- Section Seven
================================================== -->

<div id=\"principlesSlides\" class=\"carousel slide section-seven-header\" data-interval=\"false\">
<a class=\"anchor\" id=\"philosophy\"></a>
<!-- Slide 1 -->
<div class=\"carousel-inner\">

<div class=\"item active philosophy\">
 <div class=\"container\">
     <div class=\"row\">
       <div class=\"col-sm-8 col-sm-offset-2\">
         <h2 class=\"heading text-center\">Philosophy</h2>
         {% include 'partials/h-divider.html.twig' with {'inverse': true} %}
         <h2 class=\"text-center hidden-sm hidden-xs\">We strive for long-term shared success based upon our core principles.</h2>
       </div>
       <div class=\"col-md-12\">
         <div class=\"col-md-2 col-md-offset-1 principles\">
           <h4>Excellence</h4>
           <p>Perpetually<br>strive for global excellence.</p>
         </div>
         <div class=\"col-md-2 principles\">
           <h4>Innovation</h4>
           <p>Continually innovate for competitive advantage.</p>
         </div>
         <div class=\"col-md-2 principles\">
           <h4>Integrity</h4>
           <p>Value Integrity  and Trust foremost.</p>
         </div>
         <div class=\"col-md-2 principles\">
           <h4>Partnership</h4>
           <p>Form win-win partnerships.</p>
         </div>
         <div class=\"col-md-2 principles principles-last\">
           <h4>Social Responsibility</h4>
           <p>Contribute to a better society.</p>
         </div>
       </div>
     </div>
     <!-- Controls -->
     <a class=\"right carousel-control visible-sm visible-xs\" href=\"#principlesSlides\" data-slide=\"next\">
       <span class=\"icon-next\"></span>
     </a>
     <a class=\"igc-button-inverse igc-button buttons-philosophy hidden-sm hidden-xs btn btn-large btn-primary\" href=\"#principlesSlides\" data-slide=\"next\">OUR WORLDVIEW <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
 </div>
</div><!-- item -->

<div class=\"item innovation\">
 <div class=\"container\">
   <div class=\"row\">
     <div class=\"col-sm-8 col-sm-offset-2\">
       <h2 class=\"heading light-text text-center\">Philosophy</h2>
       {% include 'partials/h-divider.html.twig' with {'inverse': true} %}
       <h2 class=\"text-center hidden-xs\">The company name Innovation Global Capital reflects our worldview.</h2>
       <h4 class=\"two-column-title\">INNOVATION</h4>
       <div class=\"twocolumn light-text\">
         <p>We only work with the most innovative entrepreneurs and companies.</p>
         <p>Innovation is the only competitive advantage when information is democratic and immediate. In an era where industry disruption can begin in a dorm room, companies must continually innovate to compete in the global marketplace. Equally, an innovative concept or brand can aggressively expand and pioneer a new market. We believe that innovation cannot be a one-off event – it requires a relentless and continual commitment.</p>
       </div>
       <div class=\"col-sm-1 innovation-buttons prev-btn hidden-sm hidden-xs\">
         <a class=\"igc-button-inverse igc-button btn btn-large btn-primary\" href=\"#principlesSlides\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span> PHILOSOPHY</a>
       </div>
       <div class=\"col-sm-1 col-sm-offset-9 innovation-buttons hidden-sm hidden-xs\">
         <a class=\"igc-button-inverse igc-button btn btn-large btn-primary\" href=\"#principlesSlides\" data-slide=\"next\">GLOBAL <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
       </div>
       <!-- Indicators -->
       <ol class=\"carousel-indicators visible-md visible-lg\">
         <li data-target=\"#principlesSlides\" data-slide-to=\"0\"></li>
         <li data-target=\"#principlesSlides\" data-slide-to=\"1\" class=\"active\"></li>
         <li data-target=\"#principlesSlides\" data-slide-to=\"2\"></li>
         <li data-target=\"#principlesSlides\" data-slide-to=\"3\"></li>
       </ol>
     </div>
     <!-- Controls -->
     <a class=\"left carousel-control visible-sm visible-xs\" href=\"#principlesSlides\" data-slide=\"prev\">
       <span class=\"icon-prev\"></span>
     </a>
     <a class=\"right carousel-control visible-sm visible-xs\" href=\"#principlesSlides\" data-slide=\"next\">
       <span class=\"icon-next\"></span>
     </a>
   </div><!-- row -->
 </div><!-- container -->
</div><!-- item -->
<div class=\"item global\">
 <div class=\"container\">
   <div class=\"row\">
     <div class=\"col-sm-8 col-sm-offset-2\">
       <h2 class=\"heading light-text text-center\">Philosophy</h2>
       {% include 'partials/h-divider.html.twig' with {'inverse': true} %}
       <h2 class=\"text-center hidden-xs\">The company name Innovation Global Capital reflects our worldview.</h2>
       <h4 class=\"two-column-title\">GLOBAL</h4>
       <div class=\"twocolumn light-text\">
         <p>We firmly believe only global concepts and companies will survive and dominate in the 21st century. Consumers, markets, trends and information have become globalized. Entrepreneurs can no longer succeed simply by building a parochial domestic company. Whereas global opportunities were often considered only years after a company was founded, now most great ideas are globally scalable. With the right global relationships and knowledge, there are significant first mover advantages for the innovative. Globalization is an oft used word, but the world truly is Global.</p>
       </div>
       <div class=\"col-sm-1 global-buttons prev-btn hidden-sm hidden-xs\">
         <a class=\"igc-button-inverse igc-button btn btn-large btn-primary\" href=\"#principlesSlides\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span> INNOVATION</a>
       </div>
       <div class=\"col-sm-1 col-sm-offset-9 global-buttons hidden-sm hidden-xs\">
         <a class=\"igc-button-inverse igc-button btn btn-large btn-primary\" href=\"#principlesSlides\" data-slide=\"next\">CAPITAL <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
       </div>
       <!-- Indicators -->
       <ol class=\"carousel-indicators visible-md visible-lg\">
         <li data-target=\"#principlesSlides\" data-slide-to=\"0\"></li>
         <li data-target=\"#principlesSlides\" data-slide-to=\"1\"></li>
         <li class=\"activeSlide\"></li>
         <li data-target=\"#principlesSlides\" data-slide-to=\"3\"></li>
       </ol>
     </div>
     <!-- Controls -->
     <a class=\"left carousel-control visible-sm visible-xs\" href=\"#principlesSlides\" data-slide=\"prev\">
       <span class=\"icon-prev\"></span>
     </a>
     <a class=\"right carousel-control visible-sm visible-xs\" href=\"#principlesSlides\" data-slide=\"next\">
       <span class=\"icon-next\"></span>
     </a>
   </div><!-- row -->
 </div><!-- container -->
</div><!-- item -->
<div class=\"item capital\">
 <div class=\"container\">
   <div class=\"row\">
     <div class=\"col-sm-8 col-sm-offset-2\">
       <h2 class=\"heading light-text text-center\">Philosophy</h2>
       {% include 'partials/h-divider.html.twig' with {'inverse': true} %}
       <h2 class=\"text-center hidden-xs\">The company name Innovation Global Capital reflects our worldview.</h2>
       <h4 class=\"two-column-title\">CAPITAL</h4>
       <div class=\"twocolumn light-text\">
         <p>It is a given that capital is essential to growth. Innovation Global Capital, however, is different.</p>
         <p>We believe capital must be combined with experience, that creativity must coexist with rationality.</p>
         <p>We integrate both the passionate emotions of brands and the profit imperative of business.</p>
         <p><br></p>
         <p>Our approach to investing is to partner with visionary entrepreneurs who are driven to change the world.</p>
         <p>We provide capital and executive experience to propel growth and profitability, working together to create long term value as trusted confidant and partner.</p>
         <p>We think like entrepreneurs because we are entrepreneurs.</p>
       </div>
       <div class=\"col-sm-1 col-sm-offset-5 capital-buttons prev-btn hidden-sm hidden-xs\">
         <a class=\"igc-button-inverse igc-button btn btn-large btn-primary\" href=\"#principlesSlides\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span> GLOBAL</a>
       </div>
     </div>
     <!-- Controls -->
     <a class=\"left carousel-control visible-sm visible-xs\" href=\"#principlesSlides\" data-slide=\"prev\">
       <span class=\"icon-prev\"></span>
     </a>
   </div><!-- row -->
 </div><!-- container -->
</div><!-- item -->
</div>
</div>

<!-- Section Eight
================================================== -->
<div class=\"fill section-eight-header\">
 <div id=\"section-eight-carousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3500\">
   <div class=\"carousel-inner\">
     <div class=\"active item\">
       <div class=\"fill\" style=\"background-image:url('{{ url('image://bg-section8-1.png') }}');\">
       </div>
     </div>
     <div class=\"item\">
       <div class=\"fill\" style=\"background-image:url('{{ url('image://bg-section8-2.png') }}');\">
       </div>
     </div>
     <div class=\"item\">
       <div class=\"fill\" style=\"background-image:url('{{ url('image://bg-section8-3.png') }}');\">
       </div>
     </div>
   </div>
 </div><!-- carousel-inner -->
</div><!-- carousel slide -->
</div><!-- container fill -->
<div class=\"container section-eight-content\">
 <div class=\"row\">
   <div class=\"col-lg-8 col-lg-offset-2 section-one-content\">
     <h2 class=\"tagline text-center\">Entrepreneurship is built upon faith and passion. The entrepreneur will face naysayers along the journey. Yet the successful entrepreneur sees through the fog of uncertainty to <i>create the future.</i></h2>
   </div>
 </div>
</div>
</div>
{% endblock %}
", "index.html.twig", "/var/www/html/user/themes/igc/templates/index.html.twig");
    }
}
