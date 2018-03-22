<?php

/* ::layout/layoutfront.html.twig */
class __TwigTemplate_12e583bacc71653b49b3f0dff43825ed553c378c8ec20be69e3e20772f3a9413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" xml:lang=\"en\">
<head>
<meta charset=\"utf-8\">
<title>e-boutique</title>

<!-- Favicons Icon -->
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("f.ico"), "html", null, true);
        echo "\" />


<!-- Mobile Specific -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

<!-- CSS Style -->

<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/bootstrap-3.3.1/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/revslider.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/owl.theme.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/blogmate.css"), "html", null, true);
        echo "\" type=\"text/css\">


<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
</head>

<body>
<div class=\"page\"> 
  <!-- Header -->
  <header class=\"header-container\">
    <div class=\"header-top\">
      <div class=\"container\">
        <div class=\"row\"> 
          <!-- Header Language -->
          <div class=\"col-xs-6\">
            <div class=\"dropdown block-language-wrapper\"> <a role=\"button\" data-toggle=\"dropdown\" data-target=\"#\" class=\"block-language dropdown-toggle\" href=\"#\"> <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/english.png"), "html", null, true);
        echo "\" alt=\"language\"> English <span class=\"caret\"></span> </a>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/english.png"), "html", null, true);
        echo "\" alt=\"language\"> English </a></li>
                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/francais.png"), "html", null, true);
        echo "\" alt=\"language\"> French </a></li>
                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/german.png"), "html", null, true);
        echo "\" alt=\"language\"> German </a></li>
              </ul>
            </div>
            
            <!-- End Header Language --> 
            
            <!-- Header Currency -->
            <div class=\"dropdown block-currency-wrapper\"> <a role=\"button\" data-toggle=\"dropdown\" data-target=\"#\" class=\"block-currency dropdown-toggle\" href=\"#\"> USD <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"> \$ - Dollar </a></li>
                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"> £ - Pound </a></li>
                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"> € - Euro </a></li>
              </ul>
            </div>
            
            <!-- End Header Currency -->
            
            <div class=\"welcome-msg hidden-xs\"> Default welcome msg! </div>
          </div>
          <div class=\"col-xs-6\">
            
            <!-- Header Top Links --> 
            <div class=\"toplinks\">
              <div class=\"links\">
                ";
        // line 67
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 68
            echo "                ";
            $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte1.html.twig")->display($context);
            echo "   
                ";
        } else {
            // line 70
            echo "                ";
            $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig")->display($context);
            echo "   
                ";
        }
        // line 72
        echo "                <div ><a title=\"Aide\"  href=\"";
        echo $this->env->getExtension('routing')->getPath("aidePDF");
        echo "\" target=\"_blank\"><span class=\"
                glyphicon glyphicon-question-sign\">Aide</span></a></div>
              </div>
            </div>
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
    <div class=\"header container\">
      <div class=\"row\">
        <div class=\"col-lg-2 col-sm-3 col-md-2\"> 
          <!-- Header Logo --> 
          <a class=\"logo\" title=\"Magento Commerce\" href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\"><img alt=\"E-Boutique\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/logo.png"), "html", null, true);
        echo "\"></a> 
          <!-- End Header Logo --> 
        </div>
        <div class=\"col-lg-8 col-sm-6 col-md-8\"> 
          <!-- Search-col -->
          <div class=\"search-box\">
            <form action=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("rechercheProduits");
        echo "\" method=\"POST\"  id=\"search_mini_form\">
              ";
        // line 92
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:tousCategories"), array());
        // line 93
        echo "              ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Produits:recherche"), array());
        // line 94
        echo "           
            </form>
          </div>
          <!-- End Search-col --> 
        </div>
        <!-- Top Cart -->
       <div class=\"col-lg-2 col-sm-3 col-md-2\">
          <div class=\"top-cart-contain\">
            <div class=\"mini-cart\">
              <div  data-hover=\"dropdown\" class=\"basket dropdown-toggle\"> <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\"> <i class=\"glyphicon glyphicon-shopping-cart\"></i>
                <div class=\"cart-box\"><span class=\"title\"></span><span id=\"cart-total\">";
        // line 104
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:articles"), array());
        echo " </span></div>
                </a></div>
             ";
        // line 106
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:panierHover"), array());
        // line 107
        echo "            </div>
            <div id=\"ajaxconfig_info\"> <a href=\"#/\"></a>
              <input value=\"\" type=\"hidden\">
              <input id=\"enable_module\" value=\"1\" type=\"hidden\">
              <input class=\"effect_to_cart\" value=\"1\" type=\"hidden\">
              <input class=\"title_shopping_cart\" value=\"Go to shopping cart\" type=\"hidden\">
            </div>
          </div>
        </div>
        <!-- End Top Cart --> 
      </div>
    </div>
  </header>
  <!-- end header --> 
  <!-- Navbar -->
  <nav>
    <div class=\"container\">
      <div class=\"nav-inner\">
        <div class=\"logo-small\"> <a class=\"logo\" title=\"Magento Commerce\" href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\"><img alt=\"E-Boutique\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/logo.png"), "html", null, true);
        echo "\"></a> </div>
        <!-- mobile-menu -->
        <div class=\"hidden-desktop\" id=\"mobile-menu\">
          <ul class=\"navmenu\">
            <li>
              <div class=\"menutop\">
                <div class=\"toggle\"> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span></div>
                <h2>Menu</h2>
              </div>
             ";
        // line 134
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:menuHorizontal"), array());
        // line 135
        echo "            </li>
          </ul>
          <!--navmenu--> 
        </div>
        
        <!--End mobile-menu -->
        <ul id=\"nav\" class=\"hidden-xs\">
          <li class=\"level0 nav-8 level-top\"> <a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"level-top\"> <span>Acceuil</span> 
          <li class=\"level0 parent drop-menu\"><a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("contactUs");
        echo "\"><span>Contact</span> </a>   
          </li>
           <li class=\"nav-custom-link level0 level-top parent\"> <a class=\"level-top\" href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("blog");
        echo "\"><span>Blog</span></a>
           ";
        // line 146
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PagesBundle:Pages:menuHorizontal"), array());
        // line 147
        echo "          </li>
          <li class=\"level0 nav-8 level-top\"> <a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("aboutUs");
        echo "\" class=\"level-top\"> <span>À propos de nous</span> </a> </li>
          ";
        // line 149
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 150
            echo "            <li class=\"level0 nav-8 level-top\"> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\" class=\"level-top\"> <span>MON compte</span> </a> </li>
          ";
        }
        // line 152
        echo "        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav --> 

  
    ";
        // line 159
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 160
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 161
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" id=\"mar\">
                <strong>";
                // line 162
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "
  ";
        // line 167
        $this->displayBlock('body', $context, $blocks);
        // line 168
        echo "


  <footer class=\"footer wow bounceInUp animated\">
    <div class=\"brand-logo \">
      <div class=\"container\">
        <div class=\"slider-items-products\">
          <div id=\"brand-logo-slider\" class=\"product-flexslider hidden-buttons\">
            <div class=\"slider-items slider-width-col6\"> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\" alt=\"Image\"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\" alt=\"Image\"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\" alt=\"Image\"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\" alt=\"Image\"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\" alt=\"Image\"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\" alt=\"Image\"></a> </div>
              <!-- End Item --> 
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-12 col-sm-12 col-md-7\">
            <div class=\"social\">
              <ul>
               <li class=\"fb\"><a href=\"https://www.facebook.com/\"></a></li>
                <li class=\"tw\"><a href=\"https://twitter.com/\"></a></li>
                <li class=\"googleplus\"><a href=\"https://plus.google.com/\"></a></li>
                <li class=\"pintrest\"><a href=\"https://fr.pinterest.com/\"></a></li>
                <li class=\"linkedin\"><a href=\"https://www.linkedin.com/\"></a></li>
                <li class=\"youtube\"><a href=\"https://www.youtube.com/\"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"footer-middle container\">
      <div class=\"row\">
        <div class=\"col-md-4 col-sm-4\">
          <div class=\"footer-logo mar\"><a href=\"";
        // line 236
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" title=\"Logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a></div>
          <div class=\"payment-accept\">
            <div><div class=\"icon-truck\">&nbsp;</div>
          <span class=\"hidden-xs\"><strong class=\"bekir\"> LIVRAISON ET RETOUR GRATUITS</strong> </span><br> <div class=\"icon-support\">&nbsp;</div>
          <span class=\"hidden-xs\"><strong class=\"bekir\">Service client</strong> 50390251</span> <br><div class=\"icon-money\">&nbsp;</div>
          <span class=\"hidden-xs\"><strong class=\"bekir\">Paiement à la livraison </strong> </span><br> <div class=\"icon-dis\">&nbsp;</div>
          <span class=\"hidden-xs\"><strong class=\"bekir\">bienvenue</strong></span></div>
          </div>
        </div> 
        ";
        // line 245
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:footer"), array());
        // line 246
        echo "        <div class=\"col-md-4 col-sm-4\">
          <h4>Contactez nous</h4>
          <div class=\"contacts-info\">
            <address>
            <i class=\"add-icon\">&nbsp;</i>7000 Tunisie, Bizerte, <br>
            &nbsp;Bizerte 7000 TUNISIE
            </address>
            <div class=\"phone-footer\"><i class=\"phone-icon\">&nbsp;</i>50390251</div>
            <div class=\"email-footer\"><i class=\"email-icon\">&nbsp;</i> <a href=\"#\">eboutique@gmail.com</a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"footer-bottom\">
      <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-7 coppyright\"> &copy;";
        // line 262
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". Tous les droits sont réservés. Conçu par <a href=\"#\">e-boutique.com</a> </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
</div>

<!-- JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/parallax.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/common.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/revslider.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
  ";
        // line 277
        $this->displayBlock('js', $context, $blocks);
        // line 280
        echo " <script type=\"text/javascript\">
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 585,
                startheight: 460,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script> 
</body>
</html>";
    }

    // line 167
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 277
    public function block_js($context, array $blocks = array())
    {
        // line 278
        echo "
";
    }

    public function getTemplateName()
    {
        return "::layout/layoutfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 278,  568 => 277,  562 => 167,  485 => 280,  483 => 277,  479 => 276,  475 => 275,  471 => 274,  467 => 273,  463 => 272,  459 => 271,  447 => 262,  429 => 246,  427 => 245,  413 => 236,  381 => 207,  374 => 203,  367 => 199,  360 => 195,  353 => 191,  346 => 187,  339 => 183,  332 => 179,  319 => 168,  317 => 167,  314 => 166,  308 => 165,  299 => 162,  294 => 161,  289 => 160,  285 => 159,  276 => 152,  270 => 150,  268 => 149,  264 => 148,  261 => 147,  259 => 146,  255 => 145,  250 => 143,  246 => 142,  237 => 135,  235 => 134,  221 => 125,  201 => 107,  199 => 106,  194 => 104,  190 => 103,  179 => 94,  176 => 93,  174 => 92,  170 => 91,  159 => 85,  142 => 72,  136 => 70,  130 => 68,  128 => 67,  101 => 43,  97 => 42,  93 => 41,  88 => 39,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  49 => 18,  45 => 17,  41 => 16,  30 => 8,  21 => 1,);
    }
}
