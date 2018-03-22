<?php

/* EcommerceBundle:Default:Boutiques/layout/categorieBoutiquesGrid.html.twig */
class __TwigTemplate_362e7f70a3a86a34481f41f084c3db3717b21272b82f2e52c170ea6be583e1f0 extends Twig_Template
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
        echo "  <!-- breadcrumbs -->
  <div class=\"breadcrumbs\">
    <div class=\"container\">
      <div class=\"row\">
        <ul>
          <li class=\"home\"> <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" title=\"Aller à la page d'accueil\">Accueil</a><span>&mdash;›</span></li>
          <li class=\"category13\"><strong> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "nom", array()), "html", null, true);
        echo " </strong></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End breadcrumbs --> 
  <!-- Two columns content -->
  <div class=\"main-container col2-left-layout\">
    <div class=\"main container\">
      <div class=\"row\">
        <section class=\"col-main col-sm-9 col-sm-push-3 wow bounceInUp animated\">
          <div class=\"category-description std\">
            <div class=\"slider-items-products\">
              <div id=\"category-desc-slider\" class=\"product-flexslider hidden-buttons\">
                <div class=\"slider-items slider-width-col1\"> 
                  
                  <!-- Item -->
                  <div class=\"item\"> <a href=\"#x\"><img alt=\"\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "image", array()), "AssetPath", array())), "html", null, true);
        echo "\"></a>
                    <div class=\"cat-img-title cat-bg cat-box\">
                     
                    </div>
                  </div>
                  <!-- End Item -->
                  
                </div>
              </div>
            </div>
          </div>
          <div class=\"category-title\">
              <h1>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "nom", array()), "html", null, true);
        echo "</h1>
          </div>
          ";
        // line 41
        if ((twig_length_filter($this->env, (isset($context["boutiques"]) ? $context["boutiques"] : null)) != 0)) {
            // line 42
            echo "          <div class=\"category-products\">
            <div class=\"toolbar\">
              <div class=\"sorter\">
                <div class=\"view-mode\"> <span title=\"Grid\" class=\"button button-active button-grid\">Grid</span> </div>
              </div>
              <div class=\"pager\">
                <div class=\"pages\">
                  <ul class=\"pagination\">
                  ";
            // line 50
            echo $this->env->getExtension('knp_pagination')->render((isset($context["boutiques"]) ? $context["boutiques"] : null));
            echo "
                  </ul>
                </div>
              </div>
            </div>
            <ul class=\"products-grid\">
             ";
            // line 56
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["boutiques"]) ? $context["boutiques"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["boutique"]) {
                // line 57
                echo "              <li class=\"item col-lg-4 col-md-4 col-sm-6 col-xs-6\">
                <div class=\"col-item\">
                  <div class=\"product-image-area\"> <a class=\"product-image\" title=\"Sample Product\" href=\"
                      <div class=\"item-title\"> <a title=\" Sample Product\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentationBoutique", array("idB" => $this->getAttribute($context["boutique"], "id", array()))), "html", null, true);
                echo "\"> <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["boutique"], "image", array()), "AssetPath", array())), "html", null, true);
                echo "\" class=\"img-responsive\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "nom", array()), "html", null, true);
                echo "\" /> </a>
                    </div>
                  <div class=\"info\">
                    <div class=\"info-inner\">
                      <div class=\"item-title\"> <a title=\" Sample Product\" href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentationBoutique", array("idB" => $this->getAttribute($context["boutique"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "nom", array()), "html", null, true);
                echo " </a> </div>
                      <!--item-title-->
                      <div class=\"item-content\">
                        <div class=\"ratings\">
                          
                        </div>
                       
                      </div>
                      <!--item-content--> 
                    </div>
                    <!--info-inner-->
                    
                    <div class=\"clearfix\"> </div>
                  </div>
                </div>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boutique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo " 

            </ul>
          </div>
          ";
        } else {
            // line 85
            echo "            Aucun boutique
          ";
        }
        // line 86
        echo " 
        </section>
        <!-- ----------------------------mehdi----------------------------- --!>
<aside class=\"col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated\">
  <div class=\"side-nav-categories\">
            <div class=\"block-title\"> Categories </div>
            <!--block-title--> 
            <!-- BEGIN BOX-CATEGORY -->
            <div class=\"box-content box-category\">
              <ul>
                  ";
        // line 96
        $context["id"] = $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "nom", array());
        // line 97
        echo "                   
                        <li class=\"active\"> <a  href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieGridBoutiques", array("categorieGrid" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "nom", array()), "html", null, true);
        echo "</a> <span class=\"subDropdown minus\"></span>
                     
                    ";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sousCategories"]) ? $context["sousCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sousCategorie"]) {
            // line 101
            echo "                      ";
            $context["id1"] = $this->getAttribute($context["sousCategorie"], "categorie", array());
            // line 102
            echo "                      ";
            if (((isset($context["id1"]) ? $context["id1"] : null) == (isset($context["id"]) ? $context["id"] : null))) {
                // line 103
                echo "                        <ul class=\"level0_415\">
                          <li> <a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousCategorieGridProduits", array("sousCategorieGrid" => $this->getAttribute($context["sousCategorie"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sousCategorie"], "nom", array()), "html", null, true);
                echo " </a> 
                          </li>
                        </ul>  
                      ";
            }
            // line 107
            echo "   
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousCategorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "   
                    <!--level1-->
                  <!--level0--> 
                </li>
                <!--level 0-->
                ";
        // line 113
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Categorie"]) {
            // line 114
            echo "                  ";
            $context["id2"] = $this->getAttribute($context["Categorie"], "nom", array());
            // line 115
            echo "                  ";
            if (((isset($context["id2"]) ? $context["id2"] : null) != (isset($context["id"]) ? $context["id"] : null))) {
                // line 116
                echo "                    
                        <li> <a href=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieGridBoutiques", array("categorieGrid" => $this->getAttribute($context["Categorie"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Categorie"], "nom", array()), "html", null, true);
                echo "</a> <span class=\"subDropdown plus\"></span>
                     
                    ";
                // line 119
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sousCategories"]) ? $context["sousCategories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["sousCategorie"]) {
                    // line 120
                    echo "                      ";
                    $context["id1"] = $this->getAttribute($context["sousCategorie"], "categorie", array());
                    // line 121
                    echo "                      ";
                    if (((isset($context["id1"]) ? $context["id1"] : null) == (isset($context["id2"]) ? $context["id2"] : null))) {
                        echo " 
                          <ul class=\"level0_482\">
                            <li> <a href=\"";
                        // line 123
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousCategorieGridProduits", array("sousCategorieGrid" => $this->getAttribute($context["sousCategorie"], "id", array()))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sousCategorie"], "nom", array()), "html", null, true);
                        echo " </a></li>
                          </ul>
                      ";
                    }
                    // line 125
                    echo " 
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousCategorie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "    
                        </li>
                  ";
            }
            // line 129
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "              </ul>
            </div>
            <!--box-content box-category--> 
  </div>   
  ";
        // line 134
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:panierVertical"), array());
        // line 135
        echo "  ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Boutiques:boutiqueVertical"), array());
        // line 136
        echo "</aside>
      </div>
    </div>
  </div>
  <!-- End Two columns content --> 
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Boutiques/layout/categorieBoutiquesGrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 136,  286 => 135,  284 => 134,  278 => 130,  272 => 129,  267 => 126,  260 => 125,  252 => 123,  246 => 121,  243 => 120,  239 => 119,  232 => 117,  229 => 116,  226 => 115,  223 => 114,  219 => 113,  212 => 108,  205 => 107,  196 => 104,  193 => 103,  190 => 102,  187 => 101,  183 => 100,  176 => 98,  173 => 97,  171 => 96,  159 => 86,  155 => 85,  148 => 80,  123 => 64,  112 => 60,  107 => 57,  103 => 56,  94 => 50,  84 => 42,  82 => 41,  77 => 39,  62 => 27,  42 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
