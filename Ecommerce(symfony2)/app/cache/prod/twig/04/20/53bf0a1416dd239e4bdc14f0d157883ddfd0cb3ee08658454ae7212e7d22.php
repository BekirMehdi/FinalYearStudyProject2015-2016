<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_042053bf0a1416dd239e4bdc14f0d157883ddfd0cb3ee08658454ae7212e7d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout/layoutfront.html.twig");

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
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
    public function block_titre($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "nom", array()), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "description", array()), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<!-- main-container -->
  ";
        // line 8
        $context["idProduit"] = $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id", array());
        // line 9
        echo "  <section class=\"main-container col1-layout\">
    <div class=\"main container\">
      <div class=\"col-main\">
        <div class=\"row\">
          <div class=\"product-view\">
            <div class=\"product-essential\">
              <form action=\"#\" method=\"post\" id=\"product_addtocart_form\">
                <input name=\"form_key\" value=\"6UbXroakyQlbfQzK\" type=\"hidden\">
                <div class=\"product-img-box col-sm-5 wow bounceInRight animated\">
                  <div class=\"new-label new-top-left\"> New </div>
                   <div class=\"product-image\">
                    <div class=\"large-image\"> <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image", array()), "AssetPath", array())), "html", null, true);
        echo "\" class=\"cloud-zoom\" id=\"zoom1\" rel=\"useWrapper: false, adjustY:0, adjustX:20\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image", array()), "AssetPath", array())), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "nom", array()), "html", null, true);
        echo "\"> </a> </div>
                    <div class=\"flexslider flexslider-thumb\">
                      <ul class=\"previews-list slides\">
                       ";
        // line 23
        if (($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image", array()), "path", array()) != null)) {
            // line 24
            echo "                        <li><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image", array()), "AssetPath", array())), "html", null, true);
            echo "' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image", array()), "AssetPath", array())), "html", null, true);
            echo "' \"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image", array()), "AssetPath", array())), "html", null, true);
            echo "\" alt = \"Thumbnail 1\"/></a></li>
                        ";
        }
        // line 26
        echo "                      ";
        if (($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image1", array()), "path", array()) != null)) {
            // line 27
            echo "                        <li><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image1", array()), "AssetPath", array())), "html", null, true);
            echo "' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image1", array()), "AssetPath", array())), "html", null, true);
            echo "' \"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image1", array()), "AssetPath", array())), "html", null, true);
            echo "\" alt = \"Thumbnail 1\"/></a></li>
                        ";
        }
        // line 29
        echo "                        ";
        if (($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image2", array()), "path", array()) != null)) {
            // line 30
            echo "                        <li><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image2", array()), "AssetPath", array())), "html", null, true);
            echo "' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image2", array()), "AssetPath", array())), "html", null, true);
            echo "' \"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image2", array()), "AssetPath", array())), "html", null, true);
            echo "\" alt = \"Thumbnail 1\"/></a></li>
                        ";
        }
        // line 32
        echo "                        ";
        if (($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image3", array()), "path", array()) != null)) {
            // line 33
            echo "                        <li><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image3", array()), "AssetPath", array())), "html", null, true);
            echo "' class='cloud-zoom-gallery' rel=\"useZoom: 'zoom1', smallImage: '";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image3", array()), "AssetPath", array())), "html", null, true);
            echo "' \"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "image3", array()), "AssetPath", array())), "html", null, true);
            echo "\" alt = \"Thumbnail 3\"/></a></li>  
                        ";
        }
        // line 34
        echo "    
                      </ul>
                    </div>
                  </div>
                  
                  <!-- end: more-images -->
                  
                  <div class=\"clear\"></div>
                </div>
                <div class=\"product-shop col-sm-7 wow bounceInLeft animated\">
                  <div class=\"product-name\">
                    <h2>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "marque", array()), "html", null, true);
        echo "</h2>
                  </div>
                  ";
        // line 47
        if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "disponible", array()) != 0)) {
            // line 48
            echo "                  <p class=\"availability in-stock\">Disponibilité: <span>En stock</span></p>
                  ";
        } else {
            // line 50
            echo "                  <p class=\"availability in-stock\">Disponibilité: <span> Non </span></p>
                  ";
        }
        // line 52
        echo "                  <div class=\"price-block\">
                    <div class=\"price-box\">
                      <p class=\"special-price\"> <span class=\"price\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prixremise", array()), "html", null, true);
        echo " dt</span> </p>
                      <p class=\"old-price\"> <span class=\"price-sep\">-</span> <span class=\"price\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prix", array()), "html", null, true);
        echo "dt </span> </p>
                    </div>
                  </div>
                    <div class=\"short-description\">
                    <h2>Catégorie:</h2>
                    <p>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "categorieProduit", array()), "nom", array()), "html", null, true);
        echo "</p>
                     <h2>Boutique:</h2>
                    <p><a title=\" Sample Product\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentationBoutique", array("idB" => $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "boutique", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "boutique", array()), "nom", array()), "html", null, true);
        echo "</a></p>
                    </div>
                  
                  <div class=\"add-to-box\">
                  ";
        // line 66
        if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "disponible", array()) != 0)) {
            // line 67
            echo "                    ";
            if ((!$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id", array()), array(), "array", true, true))) {
                // line 68
                echo "                    <div class=\"add-to-cart\">
                      <a  href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id", array()))), "html", null, true);
                echo "\"><button onClick=\"productAddToCartForm.submit(this)\" class=\"button btn-cart\" title=\"Ajouter au panier\" type=\"button\"><span><i class=\"icon-basket\"></i>Ajouter au panier</span></button></a>
                    </div>
                    ";
            } else {
                // line 72
                echo "                    <div class=\"add-to-cart\">
                      <a  href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id", array()))), "html", null, true);
                echo "\"><button onClick=\"productAddToCartForm.submit(this)\" class=\"button btn-cart\" title=\"Ajouter au panier\" type=\"button\"><span><i class=\"icon-basket\"></i>Deja au panier</span></button></a>
                    </div>
                    ";
            }
            // line 76
            echo "                  ";
        }
        echo "  
                  </div>
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
              </form>
            </div>
            <div class=\"product-collateral\">
              <div class=\"col-sm-12 wow bounceInUp animated\">
                <ul id=\"product-detail-tab\" class=\"nav nav-tabs product-tabs\">
                  <li class=\"active\"> 
                    <a href=\"#reviews_tabs\" data-toggle=\"tab\">Produits Connexes</a> 
                  </li>
                  <li >
                    <a href=\"#product_tabs_description\" data-toggle=\"tab\"> Description Produit </a>
                  </li>
                  
                </ul>
                <div id=\"productTabContent\" class=\"tab-content\">
                  <div class=\"tab-pane fade\" id=\"product_tabs_description\">
                    <div class=\"std\">
                      <p> ";
        // line 105
        echo $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "description", array());
        echo ".</p>
                    </div>
                  </div>
                  <div class=\"tab-pane fade in active boutique_carousel\" id=\"reviews_tabs\">
                    <div class=\"col-sm-12\">
                    <div class=\"box-additional\">
                      <div class=\"related-pro wow bounceInUp animated\">
                        <div class=\"slider-items-products\">
                          <div class=\"new_title center\">
                            <h2>Produits connexes</h2>
                          </div>
                          <div id=\"related-products-slider\" class=\"product-flexslider hidden-buttons\">
                            <div class=\"slider-items slider-width-col4\"> 
                            ";
        // line 118
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : null)) != 0)) {
            echo "  
                              <!-- Item -->
                              ";
            // line 120
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 121
                echo "                               ";
                if (($this->getAttribute($context["produit"], "id", array()) != (isset($context["idProduit"]) ? $context["idProduit"] : null))) {
                    // line 122
                    echo "                              <div class=\"item\">
                                <div class=\"col-item\">
                                   ";
                    // line 124
                    if (($this->getAttribute($context["produit"], "disponible", array()) == 1)) {
                        // line 125
                        echo "                                      <div class=\"sale-label sale-top-right\">dispo</div>
                                    ";
                    }
                    // line 126
                    echo " 
                                  <div class=\"product-image-area\"> <a class=\"product-image\" title=\"Sale\" href=\"";
                    // line 127
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\"> <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array())), "html", null, true);
                    echo "\" class=\"img-responsive\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                    echo "\" /> </a>
                            <div class=\"hover_fly\">
                                                ";
                    // line 129
                    if ((!$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true))) {
                        echo "    
                                                  ";
                        // line 130
                        if (($this->getAttribute($context["produit"], "disponible", array()) != 0)) {
                            // line 131
                            echo "                                                    <a class=\"exclusive ajax_add_to_cart_button\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                            echo "\" title=\"Ajouter au panier\">
                                                      <div><i class=\"icon-shopping-cart\"></i><span>Ajouter au panier</span></div></a> 
                                                  ";
                        } else {
                            // line 133
                            echo "     
                                                    <a class=\"exclusive ajax_add_to_cart_button\" href=\"";
                            // line 134
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                            echo "\" title=\"N'est pas disponible\">
                                                      <div><i class=\"icon-shopping-cart\"></i><span>N'est pas disponible</span></div></a> 
                                                  ";
                        }
                        // line 136
                        echo "   
                                                ";
                    } else {
                        // line 138
                        echo "                                                <a class=\"exclusive ajax_add_to_cart_button\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                        echo "\" title=\"Deja en panier\">
                                                <div><i class=\"icon-shopping-cart\"></i><span>Deja en panier</span></div></a> 
                                                ";
                    }
                    // line 141
                    echo "                                                     <a class=\"quick-view\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\" title=\"Aperçu rapide\">
                                                    <div><i class=\"icon-eye-open\"></i><span>Aperçu rapide</span></div>
                                                    </a> <a class=\"add_to_compare\" href=\"";
                    // line 143
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousCategorieGridProduits", array("sousCategorieGrid" => $this->getAttribute($this->getAttribute($context["produit"], "categorieProduit", array()), "id", array()))), "html", null, true);
                    echo "\" title=\"Catégorie\">
                                                      <div><i class=\"icon-random\"></i><span>Catégorie</span></div>
                                                    </a> <a class=\"addToWishlist wishlistProd_5\" href=\"";
                    // line 145
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
                    // line 154
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                    echo " </a> </p>
                                                      <a title=\" Sample Product\" href=\"";
                    // line 155
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "marque", array()), "html", null, true);
                    echo " </a> 
                                                     </div>
                                                    <!--item-title-->
                                      <br>Boutique:";
                    // line 158
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "boutique", array()), "nom", array()), "html", null, true);
                    echo "
                                      <!--item-title-->
                                      <div class=\"item-content\">
                                        <div class=\"ratings\">
                                        </div>
                                        <div class=\"price-box\">
                                          <p class=\"special-price\"> <span class=\"price\">";
                    // line 164
                    echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["produit"], "prixremise", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "tauxtva", array())), "html", null, true);
                    echo " dt</span> </p>
                                          <p class=\"old-price\"> <span class=\"price-sep\">-</span> <span class=\"price\">";
                    // line 165
                    echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "tauxtva", array())), "html", null, true);
                    echo " dt</span> </p>
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
                // line 177
                echo "                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                              <!-- End Item -->  
                            ";
        } else {
            // line 180
            echo "                              Aucun produit
                            ";
        }
        // line 181
        echo "   
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  </div>
                  <div class=\"tab-pane fade\" id=\"product_tabs_tags\">
                    <div class=\"box-collateral box-tags\">
                      <div class=\"tags\">
                        <form id=\"addTagForm\" action=\"#\" method=\"get\">
                          <div class=\"form-add-tags\">
                            <label for=\"productTagName\">Add Tags:</label>
                            <div class=\"input-box\">
                              <input class=\"input-text required-entry\" name=\"productTagName\" id=\"productTagName\" type=\"text\">
                              <button type=\"button\" title=\"Add Tags\" class=\" button btn-add\" onClick=\"submitTagForm()\"> <span>Add Tags</span> </button>
                            </div>
                            <!--input-box--> 
                          </div>
                        </form>
                      </div>
                      <!--tags-->
                      <p class=\"note\">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                    </div>
                  </div>
                  <div class=\"tab-pane fade boutique_carousel\" id=\"reviews_tabs\">
                    <div class=\"box-collateral box-reviews\" id=\"customer-reviews\">
                      <div class=\"box-reviews1\">
                        <div class=\"form-add\">
                          <form id=\"review-form\" method=\"post\" action=\"#\">
                            <h3>Write Your Own Review</h3>
                            <fieldset>
                              <h4>How do you rate this product? <em class=\"required\">*</em></h4>
                              <span id=\"input-message-box\"></span>
                              <table id=\"product-review-table\" class=\"data-table\">
                                
                                <thead>
                                  <tr class=\"first last\">
                                    <th>&nbsp;</th>
                                    <th><span class=\"nobr\">1 *</span></th>
                                    <th><span class=\"nobr\">2 *</span></th>
                                    <th><span class=\"nobr\">3 *</span></th>
                                    <th><span class=\"nobr\">4 *</span></th>
                                    <th><span class=\"nobr\">5 *</span></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class=\"first odd\">
                                    <th>Price</th>
                                    <td class=\"value\"><input type=\"radio\" class=\"radio\" value=\"11\" id=\"Price_1\" name=\"ratings[3]\"></td>
                                    <td class=\"value\"><input type=\"radio\" class=\"radio\" value=\"12\" id=\"Price_2\" name=\"ratings[3]\"></td>
                                    <td class=\"value\"><input type=\"radio\" class=\"radio\" value=\"13\" id=\"Price_3\" name=\"ratings[3]\"></td>
                                    <td class=\"value\"><input type=\"radio\" class=\"radio\" value=\"14\" id=\"Price_4\" name=\"ratings[3]\"></td>
                                    <td class=\"value last\"><input type=\"radio\" class=\"radio\" value=\"15\" id=\"Price_5\" name=\"ratings[3]\"></td>
                                  </tr>
                                  <tr class=\"even\">
                                    <th>Value</th>
                                    <td class=\"value\"><input type=\"radio\" class=\"radio\" value=\"6\" id=\"Value_1\" name=\"ratings[2]\"></td>
                                    <td class=\"value\"><input type=\"radio\" class=\"radio\" value=\"7\" id=\"Value_2\" name=\"ratings[2]\"></td>
                                    <td class=\"value\"><input type=\"radio\" class=\"radio\" value=\"8\" id=\"Value_3\" name=\"ratings[2]\"></td>
                                    <td class=\"value\"><input type=\"radio\" class=\"radio\" value=\"9\" id=\"Value_4\" name=\"ratings[2]\"></td>
                                    <td class=\"value last\"><input type=\"radio\" class=\"radio\" value=\"10\" id=\"Value_5\" name=\"ratings[2]\"></td>
                                  </tr>
                                  <tr class=\"last odd\">
                                    <th>Quality</th>
                                    <td class=\"value\"><input type=\"radio\" class=\"radio\" value=\"1\" id=\"Quality_1\" name=\"ratings[1]\"></td>
                                    <td class=\"value\"><input type=\"radio\" class=\"radio\" value=\"2\" id=\"Quality_2\" name=\"ratings[1]\"></td>
                                    <td class=\"value\"><input type=\"radio\" class=\"radio\" value=\"3\" id=\"Quality_3\" name=\"ratings[1]\"></td>
                                    <td class=\"value\"><input type=\"radio\" class=\"radio\" value=\"4\" id=\"Quality_4\" name=\"ratings[1]\"></td>
                                    <td class=\"value last\"><input type=\"radio\" class=\"radio\" value=\"5\" id=\"Quality_5\" name=\"ratings[1]\"></td>
                                  </tr>
                                </tbody>
                              </table>
                              <input type=\"hidden\" value=\"\" class=\"validate-rating\" name=\"validate_rating\">
                              <div class=\"review1\">
                                <ul class=\"form-list\">
                                  <li>
                                    <label class=\"required\" for=\"nickname_field\">Nickname<em>*</em></label>
                                    <div class=\"input-box\">
                                      <input type=\"text\" class=\"input-text required-entry\" id=\"nickname_field\" name=\"nickname\">
                                    </div>
                                  </li>
                                  <li>
                                    <label class=\"required\" for=\"summary_field\">Summary<em>*</em></label>
                                    <div class=\"input-box\">
                                      <input type=\"text\" class=\"input-text required-entry\" id=\"summary_field\" name=\"title\">
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class=\"review2\">
                                <ul>
                                  <li>
                                    <label class=\"label-wide\" for=\"review_field\">Review<em>*</em></label>
                                    <div class=\"input-box\">
                                      <textarea class=\"required-entry\" rows=\"3\" cols=\"5\" id=\"review_field\" name=\"detail\"></textarea>
                                    </div>
                                  </li>
                                </ul>
                                <div class=\"buttons-set\">
                                  <button class=\"button submit\" title=\"Submit Review\" type=\"submit\"><span>Submit Review</span></button>
                                </div>
                              </div>
                            </fieldset>
                          </form>
                        </div>
                      </div>
                      <div class=\"box-reviews2\">
                        <h3>Customer Reviews</h3>
                        <div class=\"box visible\">
                          <ul>
                            <li>
                              <table class=\"ratings-table\">
                                
                                <tbody>
                                  <tr>
                                    <th>Value</th>
                                    <td><div class=\"rating-box\">
                                        <div class=\"rating\"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Quality</th>
                                    <td><div class=\"rating-box\">
                                        <div class=\"rating\"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Price</th>
                                    <td><div class=\"rating-box\">
                                        <div class=\"rating\"></div>
                                      </div></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class=\"review\">
                                <h6><a href=\"#/catalog/product/view/id/61/\">Excellent</a></h6>
                                <small>Review by <span>Leslie Prichard </span>on 1/3/2014 </small>
                                <div class=\"review-txt\"> I have purchased shirts from Minimalism a few times and am never disappointed. The quality is excellent and the shipping is amazing. It seems like it's at your front door the minute you get off your pc. I have received my purchases within two days - amazing.</div>
                              </div>
                            </li>
                            <li class=\"even\">
                              <table class=\"ratings-table\">
                                
                                <tbody>
                                  <tr>
                                    <th>Value</th>
                                    <td><div class=\"rating-box\">
                                        <div class=\"rating\"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Quality</th>
                                    <td><div class=\"rating-box\">
                                        <div class=\"rating\"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Price</th>
                                    <td><div class=\"rating-box\">
                                        <div class=\"rating\"></div>
                                      </div></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class=\"review\">
                                <h6><a href=\"#/catalog/product/view/id/60/\">Amazing</a></h6>
                                <small>Review by <span>Sandra Parker</span>on 1/3/2014 </small>
                                <div class=\"review-txt\"> Minimalism is the online ! </div>
                              </div>
                            </li>
                            <li>
                              <table class=\"ratings-table\">
                                
                                <tbody>
                                  <tr>
                                    <th>Value</th>
                                    <td><div class=\"rating-box\">
                                        <div class=\"rating\"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Quality</th>
                                    <td><div class=\"rating-box\">
                                        <div class=\"rating\"></div>
                                      </div></td>
                                  </tr>
                                  <tr>
                                    <th>Price</th>
                                    <td><div class=\"rating-box\">
                                        <div class=\"rating\"></div>
                                      </div></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class=\"review\">
                                <h6><a href=\"#/catalog/product/view/id/59/\">Nicely</a></h6>
                                <small>Review by <span>Anthony  Lewis</span>on 1/3/2014 </small>
                                <div class=\"review-txt\"> Unbeatable service and selection. This store has the best business model I have seen on the net. They are true to their word, and go the extra mile for their customers. I felt like a purchasing partner more than a customer. You have a lifetime client in me. </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class=\"actions\"> <a class=\"button view-all\" id=\"revies-button\"><span><span>View all</span></span></a> </div>
                      </div>
                      <div class=\"clear\"></div>
                    </div>
                  </div>
                  <div class=\"tab-pane fade\" id=\"product_tabs_custom\">
                    <div class=\"product-tabs-content-inner clearfix\">
                      <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when 
                        an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the 
                        leap into electronic typesetting, remaining essentially unchanged. It 
                        was popularised in the 1960s with the release of Letraset sheets 
                        containing Lorem Ipsum passages, and more recently with desktop 
                        publishing software like Aldus PageMaker including versions of Lorem 
                        Ipsum.</span></p>
                    </div>
                  </div>
                  <div class=\"tab-pane fade\" id=\"product_tabs_custom1\">
                    <div class=\"product-tabs-content-inner clearfix\">
                      <p> <strong> Comfortable </strong><span>&nbsp;preshrunk shirts. Highest Quality Printing.  6.1 oz. 100% preshrunk heavyweight cotton Shoulder-to-shoulder taping Double-needle sleeves and bottom hem     
                        
                        Lorem Ipsumis
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when 
                        an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries, but also the 
                        leap into electronic typesetting, remaining essentially unchanged. It 
                        was popularised in the 1960s with the release of Letraset sheets 
                        containing Lorem Ipsum passages, and more recently with desktop 
                        publishing software like Aldus PageMaker including versions of Lorem 
                        Ipsum.</span></p>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End main-container --> 
    ";
        // line 431
        $this->displayBlock('js', $context, $blocks);
    }

    public function block_js($context, array $blocks = array())
    {
        // line 432
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/js/cloud-zoom.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  659 => 432,  653 => 431,  401 => 181,  397 => 180,  387 => 177,  372 => 165,  368 => 164,  359 => 158,  351 => 155,  345 => 154,  333 => 145,  328 => 143,  322 => 141,  315 => 138,  311 => 136,  305 => 134,  302 => 133,  295 => 131,  293 => 130,  289 => 129,  280 => 127,  277 => 126,  273 => 125,  271 => 124,  267 => 122,  264 => 121,  260 => 120,  255 => 118,  239 => 105,  206 => 76,  200 => 73,  197 => 72,  191 => 69,  188 => 68,  185 => 67,  183 => 66,  174 => 62,  169 => 60,  161 => 55,  157 => 54,  153 => 52,  149 => 50,  145 => 48,  143 => 47,  138 => 45,  125 => 34,  115 => 33,  112 => 32,  102 => 30,  99 => 29,  89 => 27,  86 => 26,  76 => 24,  74 => 23,  64 => 20,  51 => 9,  49 => 8,  46 => 7,  43 => 6,  37 => 4,  31 => 3,);
    }
}
