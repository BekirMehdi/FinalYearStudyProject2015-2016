<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0f279656a5be9209d472f27bd6d6808127d2b8f7d3746730ff262e90b49dcaee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/exeption.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/revslider.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/owl.theme.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/css/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 24
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
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/english.png"), "html", null, true);
        echo "\" alt=\"language\"> English <span class=\"caret\"></span> </a>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/english.png"), "html", null, true);
        echo "\" alt=\"language\"> English </a></li>
                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/francais.png"), "html", null, true);
        echo "\" alt=\"language\"> French </a></li>
                <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\"><img src=\"";
        // line 44
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
        // line 68
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 69
            echo "                ";
            $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte1.html.twig")->display($context);
            echo "   
                ";
        } else {
            // line 71
            echo "                ";
            $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig")->display($context);
            echo "   
                ";
        }
        // line 73
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
        // line 86
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
        // line 92
        echo $this->env->getExtension('routing')->getPath("rechercheProduits");
        echo "\" method=\"POST\"  id=\"search_mini_form\">
              ";
        // line 93
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:tousCategories"), array());
        // line 94
        echo "              ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Produits:recherche"), array());
        // line 95
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
        // line 104
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\"> <i class=\"glyphicon glyphicon-shopping-cart\"></i>
                <div class=\"cart-box\"><span class=\"title\"></span><span id=\"cart-total\">";
        // line 105
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:articles"), array());
        echo " </span></div>
                </a></div>
             ";
        // line 107
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:panierHover"), array());
        // line 108
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
        // line 126
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
        // line 135
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:menuHorizontal"), array());
        // line 136
        echo "            </li>
          </ul>
          <!--navmenu--> 
        </div>
        
        <!--End mobile-menu -->
        <ul id=\"nav\" class=\"hidden-xs\">
          <li class=\"level0 nav-8 level-top\"> <a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"level-top\"> <span>Acceuil</span> 
          <li class=\"level0 parent drop-menu\"><a href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("contactUs");
        echo "\"><span>Contact</span> </a>   
          </li>
           <li class=\"nav-custom-link level0 level-top parent\"> <a class=\"level-top\" href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("blog");
        echo "\"><span>Blog</span></a>
           ";
        // line 147
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PagesBundle:Pages:menuHorizontal"), array());
        // line 148
        echo "          </li>
          <li class=\"level0 nav-8 level-top\"> <a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("aboutUs");
        echo "\" class=\"level-top\"> <span>À propos de nous</span> </a> </li>
          ";
        // line 150
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 151
            echo "            <li class=\"level0 nav-8 level-top\"> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\" class=\"level-top\"> <span>MON compte</span> </a> </li>
          ";
        }
        // line 153
        echo "        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav --> 


   ";
        // line 160
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 161
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 164
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 165
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 166
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" id=\"mar\">
                <strong>";
                // line 167
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "</div>   
    <section class=\"main-container col1-layout\">
        <div class=\"main container\">
            <div class=\"account-login\">
                <div class=\"page-title\">
                    <h2>Identifiez-vous ou créez un compte</h2>
                </div>
                <fieldset class=\"col2-set\">
                    <legend>Identifiez-vous ou créez un compte</legend>
                    <div class=\"col-1 new-users\"><strong>nouveaux clients</strong>
                        <div class=\"content\">
                            <p>En créant un compte sur notre boutique , vous serez en mesure de se déplacer à travers le processus de paiement plus rapide , stocker les adresses de livraison multiples , consulter et suivre vos commandes dans votre compte et plus encore.</p>
                            <div class=\"buttons-set\">
                                <a href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><button action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"button create-account\" type=\"button\"><span>Créer un compte</span></button></a> 
                            </div>
                        </div>
                    </div>
                    <div class=\"col-2 registered-users\"><strong>Clients enregistrés</strong>
                        <div class=\"content\">
                            <form action=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
                                <p>Si vous avez un compte avec nous , s'il vous plaît connecter .</p>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
                                <ul class=\"form-list\">
                                    <li>
                                        <label  for=\"username\">";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "<span class=\"required\">*</span></label>
                                        <br>
                                        <input type=\"text\" title=\"Email Address\" class=\"input-text required-entry\" id=\"username\" name=\"_username\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\">
                                    </li>
                                    <li>
                                        <label for=\"password\">";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "<span class=\"required\">*</span></label>
                                        <br>
                                        <input type=\"password\" title=\"Password\" class=\"input-text required-entry validate-password\" id=\"password\" name=\"_password\" required=\"required\">
                                    </li>
                                </ul>
                                <input class=\"required\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                <label for=\"remember_me\">";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                                <div class=\"buttons-set\">
                                    <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"button login\"><span>S'identifier</span></button>
                                    <a class=\"forgot-word\" href=\"";
        // line 210
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_check_email");
        echo "\">Mot de passe oublié?</a> </div>
                                    
                        
                        </div>
                        </form>
                    </div>
                </fieldset>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </section>


  <footer class=\"footer wow bounceInUp animated\">
    <div class=\"brand-logo \">
      <div class=\"container\">
        <div class=\"slider-items-products\">
          <div id=\"brand-logo-slider\" class=\"product-flexslider hidden-buttons\">
            <div class=\"slider-items slider-width-col6\"> 
              
                <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\" alt=\"Image\"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\" alt=\"Image\"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\" alt=\"Image\"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\" alt=\"Image\"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\" alt=\"Image\"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/horedo.png"), "html", null, true);
        echo "\"></a> </div>
              <!-- End Item --> 
              
              <!-- Item -->
              <div class=\"item\"> <a href=\"#x\"><img src=\"";
        // line 263
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
        // line 292
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
        // line 301
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:footer"), array());
        // line 302
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
        // line 318
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
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/parallax.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/common.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/revslider.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
  ";
        // line 333
        $this->displayBlock('js', $context, $blocks);
        // line 336
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

    // line 333
    public function block_js($context, array $blocks = array())
    {
        // line 334
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  654 => 334,  651 => 333,  574 => 336,  572 => 333,  568 => 332,  564 => 331,  560 => 330,  556 => 329,  552 => 328,  548 => 327,  536 => 318,  518 => 302,  516 => 301,  502 => 292,  470 => 263,  463 => 259,  456 => 255,  449 => 251,  442 => 247,  435 => 243,  428 => 239,  421 => 235,  393 => 210,  389 => 209,  383 => 206,  374 => 200,  368 => 197,  363 => 195,  357 => 192,  352 => 190,  341 => 184,  326 => 171,  320 => 170,  311 => 167,  306 => 166,  301 => 165,  296 => 164,  290 => 161,  288 => 160,  279 => 153,  273 => 151,  271 => 150,  267 => 149,  264 => 148,  262 => 147,  258 => 146,  253 => 144,  249 => 143,  240 => 136,  238 => 135,  224 => 126,  204 => 108,  202 => 107,  197 => 105,  193 => 104,  182 => 95,  179 => 94,  177 => 93,  173 => 92,  162 => 86,  145 => 73,  139 => 71,  133 => 69,  131 => 68,  104 => 44,  100 => 43,  96 => 42,  91 => 40,  72 => 24,  68 => 23,  64 => 22,  60 => 21,  56 => 20,  52 => 19,  48 => 18,  44 => 17,  40 => 16,  29 => 8,  20 => 1,);
    }
}
