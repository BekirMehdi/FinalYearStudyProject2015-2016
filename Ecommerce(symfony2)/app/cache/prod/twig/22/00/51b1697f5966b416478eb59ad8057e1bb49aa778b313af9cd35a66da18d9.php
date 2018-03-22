<?php

/* EcommerceBundle:Default:produits/layout/acceuil.html.twig */
class __TwigTemplate_220051b1697f5966b416478eb59ad8057e1bb49aa778b313af9cd35a66da18d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout/layoutfront.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutfront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
        <div >
            ";
        // line 6
        $this->env->loadTemplate("::modulesUsed/navigation.html.twig")->display($context);
        // line 7
        echo "        </div>
            
    
             <div class=\"container\">
    <div class=\"header-service wow bounceInUp animated\">
      <div class=\"col-lg-3 col-sm-6 col-xs-3\">
        <div class=\"content\">
          <div class=\"icon-truck\">&nbsp;</div>
          <span class=\"hidden-xs\"><strong> LIVRAISON ET RETOUR GRATUITS</strong> </span></div>
      </div>
      <div class=\"col-lg-3 col-sm-6 col-xs-3\">
        <div class=\"content\">
          <div class=\"icon-support\">&nbsp;</div>
          <span class=\"hidden-xs\"><strong>Service client</strong> 50390251</span></div>
      </div>
      <div class=\"col-lg-3 col-sm-6 col-xs-3\">
        <div class=\"content\">
          <div class=\"icon-money\">&nbsp;</div>
          <span class=\"hidden-xs\"><strong>Paiement à la livraison </strong> </span></div>
      </div>
      <div class=\"col-lg-3 col-sm-6 col-xs-3\">
        <div class=\"content\">
          <div class=\"icon-dis\">&nbsp;</div>
          <span class=\"hidden-xs\"><strong>bienvenue</strong></span></div>
      </div>
    </div>
  </div>
  <!-- end header service --> 
";
        // line 35
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Boutiques:me"), array());
        // line 36
        echo " <section class=\"main-container col1-layout home-content-container\">
                    <div class=\"container\">
                        <div class=\"std\">
                            <div class=\"best-seller-pro wow bounceInUp animated\">
                              ";
        // line 40
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : null)) != 0)) {
            // line 41
            echo "                                <div class=\"slider-items-products\">
                                    <div class=\"new_title center\">
                                    <h2>Tous les Produits</h2>
                                    </div>
                                    <div id=\"best-seller-slider\" class=\"product-flexslider hidden-buttons\">
                                    <div class=\"slider-items slider-width-col4\"> 
                                        ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 48
                echo "                                            <div class=\"item\">
                                              <div class=\"col-item\">
                                                 ";
                // line 50
                if (($this->getAttribute($context["produit"], "disponible", array()) == 1)) {
                    // line 51
                    echo "                                                    <div class=\"sale-label sale-top-right\">dispo</div>
                                                  ";
                }
                // line 52
                echo " 
                                                <div class=\"product-image-area\"> <a class=\"product-image\" title=\"Sample Product\" href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\"> <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array())), "html", null, true);
                echo "\" class=\"img-responsive\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "\" /> </a>
                                                
                                              <div class=\"hover_fly\">
                                                ";
                // line 56
                if ((!$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true))) {
                    echo "    
                                                  ";
                    // line 57
                    if (($this->getAttribute($context["produit"], "disponible", array()) != 0)) {
                        // line 58
                        echo "                                                    <a class=\"exclusive ajax_add_to_cart_button\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                        echo "\" title=\"Ajouter au panier\">
                                                      <div><i class=\"icon-shopping-cart\"></i><span>Ajouter au panier</span></div></a> 
                                                  ";
                    } else {
                        // line 60
                        echo "     
                                                    <a class=\"exclusive ajax_add_to_cart_button\" href=\"";
                        // line 61
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                        echo "\" title=\"N'est pas disponible\">
                                                      <div><i class=\"icon-shopping-cart\"></i><span>N'est pas disponible</span></div></a> 
                                                  ";
                    }
                    // line 63
                    echo "   
                                                ";
                } else {
                    // line 65
                    echo "                                                <a class=\"exclusive ajax_add_to_cart_button\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\" title=\"Deja en panier\">
                                                <div><i class=\"icon-shopping-cart\"></i><span>Deja en panier</span></div></a> 
                                                ";
                }
                // line 68
                echo "                                                     <a class=\"quick-view\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\" title=\"Aperçu rapide\">
                                                    <div><i class=\"icon-eye-open\"></i><span>Aperçu rapide</span></div>
                                                    </a> <a class=\"add_to_compare\" href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousCategorieGridProduits", array("sousCategorieGrid" => $this->getAttribute($this->getAttribute($context["produit"], "categorieProduit", array()), "id", array()))), "html", null, true);
                echo "\" title=\"Catégorie\">
                                                      <div><i class=\"icon-random\"></i><span>Catégorie</span></div>
                                                    </a> <a class=\"addToWishlist wishlistProd_5\" href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentationBoutique", array("idB" => $this->getAttribute($this->getAttribute($context["produit"], "boutique", array()), "id", array()))), "html", null, true);
                echo "\" title=\"Voir Boutique\" >
                                                    <div><i class=\"icon-heart\"></i><span>Voir Boutique</span></div>
                                                      </a> 
                                              </div>

                                                </div>
                                                <div class=\"info\">
                                                  <div class=\"info-inner\">
                                                    <div class=\"item-title\">
                                                     <p><a title=\" Sample Product\" href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo " </a> </p>
                                                      <a title=\" Sample Product\" href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "marque", array()), "html", null, true);
                echo " </a> 
                                                     </div>
                                                    <!--item-title-->
                                                    <div class=\"item-content\">
                                                      <div class=\"price-box\">
                                                        <p class=\"special-price\"> <span class=\"price\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixremise", array()), "html", null, true);
                echo " dt</span> </p>
                                                        <p class=\"old-price\"> <span class=\"price-sep\">-</span> <span class=\"price\">";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo " dt </span> </p>
                                                      </div>
                                                    </div>
                                                    <!--item-content--> 
                                                  </div>
                                                  <!--info-inner-->
                                                  
                                                  <div class=\"clearfix\"> </div>
                                                </div>
                                              </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                
                                         <div class=\"navigation\">
                                          ";
            // line 101
            echo $this->env->getExtension('knp_pagination')->render((isset($context["produits"]) ? $context["produits"] : null));
            echo "
                                        </div>  

                                    </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        } else {
            // line 111
            echo "                Aucun produit
            ";
        }
        // line 112
        echo " 
 </section>
  <!-- End main container --> 
  
  <!-- offer banner section -->
 
  
  <!-- end offer banner section --> 
  
  <!-- Featured Slider -->

  <!-- End Featured Slider --> 
  <!-- promo banner section -->
 
  <!-- End promo banner section --> 
  <!-- middle slider -->
";
        // line 128
        if ((twig_length_filter($this->env, (isset($context["sousCategories"]) ? $context["sousCategories"] : null)) != 0)) {
            echo "  
 <section class=\"middle-slider container wow bounceInUp animated\">
    <div class=\"row\">
    ";
            // line 131
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["sousCategories"]) ? $context["sousCategories"] : null), 0, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["sousCategorie"]) {
                // line 132
                echo "      <div class=\"col-md-6\">
        <div class=\"bag-product-slider small-pr-slider cat-section\">
          <div class=\"slider-items-products\">
            <div class=\"new_title center\">
              <h2>";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["sousCategorie"], "nom", array()), "html", null, true);
                echo "</h2>
            </div>
            <div id=\"bag-seller-slider\" class=\"product-flexslider hidden-buttons\">
              <div class=\"slider-items slider-width-col3\">
              ";
                // line 140
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    echo " 
                ";
                    // line 141
                    if (($this->getAttribute($context["sousCategorie"], "nom", array()) == $this->getAttribute($context["produit"], "categorieProduit", array()))) {
                        echo "  
                <!-- Item -->
                <div class=\"item\">
                  <div class=\"col-item\">
                    <div class=\"product-image-area\"> <a class=\"product-image\" title=\"";
                        // line 145
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                        echo "\"> <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array())), "html", null, true);
                        echo "\" class=\"img-responsive\" alt=\"a\" /> </a>
                      <div class=\"actions-links\"><span class=\"add-to-links\"> <a title=\"Aperçu rapide\" class=\"magik-btn-quickview\" href=\"";
                        // line 146
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                        echo "\"><span>Aperçu rapide</span></a> <a title=\"Voir Boutique\" class=\"link-wishlist\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentationBoutique", array("idB" => $this->getAttribute($this->getAttribute($context["produit"], "boutique", array()), "id", array()))), "html", null, true);
                        echo "\"><span>Voir Boutique</span></a> <a title=\"Catégorie\" class=\"link-compare\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousCategorieGridProduits", array("sousCategorieGrid" => $this->getAttribute($this->getAttribute($context["produit"], "categorieProduit", array()), "id", array()))), "html", null, true);
                        echo "\"><span>Catégorie</span></a></span> </div>
                    </div>
                    <div class=\"info\">
                      <div class=\"info-inner\">
                        <div class=\"item-title\"> <a title=\" Sample Product\" href=\"";
                        // line 150
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                        echo " </a> </div>
                        <!--item-title-->
                        <div class=\"item-content\">  
                          <div class=\"price-box\">
                            <p class=\"special-price\"> <span class=\"price\">";
                        // line 154
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixremise", array()), "html", null, true);
                        echo " dt</span> </p>
                            <p class=\"old-price\"> <span class=\"price-sep\">-</span> <span class=\"price\">";
                        // line 155
                        echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                        echo " dt </span> </p>
                          </div>
                        </div>
                        <!--item-content--> 
                      </div>
                      <!--info-inner-->
                      <div class=\"actions\">
                      ";
                        // line 162
                        if ((!$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true))) {
                            // line 163
                            echo "                        ";
                            if (($this->getAttribute($context["produit"], "disponible", array()) != 0)) {
                                // line 164
                                echo "                          <a  href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                                echo "\"><button type=\"button\" title=\"Ajouter au panier\" class=\"button btn-cart\"><span>Ajouter au panier</span></button></a>
                        ";
                            } else {
                                // line 165
                                echo " 
                          <a  href=\"";
                                // line 166
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                                echo "\"><button type=\"button\" title=\"N'est pas disponible\" class=\"button btn-cart\"><span>N'est pas disponible</span></button></a>  
                        ";
                            }
                            // line 167
                            echo "  
                      ";
                        } else {
                            // line 168
                            echo " 
                        <a  href=\"";
                            // line 169
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                            echo "\"><button type=\"button\" title=\"Deja au panier\" class=\"button btn-cart\"><span>Deja au panier</span></button></a>   
                      ";
                        }
                        // line 170
                        echo "  
                      </div>
                      <!--actions-->
                      
                      <div class=\"clearfix\"> </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                ";
                    }
                    // line 180
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "  
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousCategorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "  
    </div>
  </section>
";
        }
        // line 189
        echo "  
  <!-- End middle slider --> 
  
  <!-- Latest Blog -->
  ";
        // line 193
        if ((twig_length_filter($this->env, (isset($context["articles"]) ? $context["articles"] : null)) != 0)) {
            // line 194
            echo "  <section class=\"latest-blog container wow bounceInUp animated\">
    <div class=\"blog-title\">
      <h2><span>Dernières Articles</span></h2>
    </div>
  ";
            // line 198
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) ? $context["articles"] : null), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 199
                echo "    <div class=\"col-xs-12 col-sm-4\">
      <div class=\"blog-img\"> <img src=\"";
                // line 200
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["article"], "image", array()), "AssetPath", array())), "html", null, true);
                echo "\" alt=\"Image\">
        <div class=\"mask\"> <a class=\"info\" href=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">Lire plus</a> </div>
      </div>
      <h2><a href=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
                echo "</a> </h2>
      <div class=\"post-date\"><i class=\"icon-calendar\"></i> ";
                // line 204
                if ($this->getAttribute($context["article"], "datecreation", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</div>
      <p> ";
                // line 205
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "description", array()), "html", null, true);
                echo " </p>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "  </section>
  <!-- End Latest Blog -->

";
        }
        // line 212
        echo "

            
 
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 212,  440 => 208,  431 => 205,  425 => 204,  419 => 203,  414 => 201,  410 => 200,  407 => 199,  403 => 198,  397 => 194,  395 => 193,  389 => 189,  383 => 186,  366 => 180,  354 => 170,  349 => 169,  346 => 168,  342 => 167,  337 => 166,  334 => 165,  328 => 164,  325 => 163,  323 => 162,  313 => 155,  309 => 154,  300 => 150,  289 => 146,  281 => 145,  274 => 141,  268 => 140,  261 => 136,  255 => 132,  251 => 131,  245 => 128,  227 => 112,  223 => 111,  210 => 101,  206 => 99,  188 => 88,  184 => 87,  174 => 82,  168 => 81,  156 => 72,  151 => 70,  145 => 68,  138 => 65,  134 => 63,  128 => 61,  125 => 60,  118 => 58,  116 => 57,  112 => 56,  102 => 53,  99 => 52,  95 => 51,  93 => 50,  89 => 48,  85 => 47,  77 => 41,  75 => 40,  69 => 36,  67 => 35,  37 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
