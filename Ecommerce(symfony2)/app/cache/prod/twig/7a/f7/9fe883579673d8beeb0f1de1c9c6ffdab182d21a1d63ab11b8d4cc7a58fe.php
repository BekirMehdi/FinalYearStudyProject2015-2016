<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_7af79fe883579673d8beeb0f1de1c9c6ffdab182d21a1d63ab11b8d4cc7a58fe extends Twig_Template
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
        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 6
        $context["totalHTcommande"] = 0;
        // line 7
        $context["totalTTCcommande"] = 0;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "



<div class=\"breadcrumbs\">
    <div class=\"container\">
      <div class=\"row\">
        <ul>
          <li class=\"home\"> <a title=\"Aller à la page d'accueil\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">Accueil</a><span>&mdash;›</span></li>
          <li class=\"category13\"><strong>Panier</strong></li>
        </ul>
      </div>
    </div>
  </div>



            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 28
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
<section class=\"main-container col1-layout\">

    <div class=\"main container\">
      <div class=\"col-main\">
        <div class=\"cart wow bounceInUp animated\">
          <div class=\"page-title\">
            <h2>Votre panier</h2>
          </div>
          <div class=\"table-responsive\">
        
              <input type=\"hidden\" value=\"Vwww7itR3zQFe86m\" name=\"form_key\">
              <fieldset>
                <table class=\"data-table cart-table\" id=\"shopping-cart-table\">
                  <thead>
                    <tr class=\"first last\">
                      <th rowspan=\"1\">&nbsp;</th>
                      <th rowspan=\"1\"><span class=\"nobr\">nom produit</span></th>                      
                      <th colspan=\"1\" class=\"a-center\"><span class=\"nobr\">Prix unitaire</span></th>
                      <th class=\"a-center\" rowspan=\"1\">Quantité</th>
                      <th colspan=\"1\" class=\"a-center\">Total HT</th>
                      <th colspan=\"1\" class=\"a-center\">Total TTC</th>
                      <th class=\"a-center\" rowspan=\"1\">&nbsp;</th>
                    </tr>
                  </thead>
                  
                  <tbody>

                    ";
        // line 59
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : null)) == 0)) {
            // line 60
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    ";
        }
        // line 64
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 65
            echo "                    <tr class=\"first odd\">
                    <form action=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                       <td class=\"image\"><a class=\"product-image\" title=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><img width=\"75\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array())), "html", null, true);
            echo "\"></a></td>
                        <td><h2 class=\"product-name\"> <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</a> </h2></td>
                        <td class=\"a-right\"><span class=\"cart-price\"> <span >";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixremise", array()), "html", null, true);
            echo " dt</span> </span></td>
                        <td>
                      
                          <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                      ";
            // line 73
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["produit"], "quantite", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 74
                echo "                                          <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                          </select>
                        </td>
                        ";
            // line 78
            $context["totalHT"] = ($this->getAttribute($context["produit"], "prixremise", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array"));
            // line 79
            echo "                        ";
            $context["totalTTC"] = ((isset($context["totalHT"]) ? $context["totalHT"] : null) * ((100 + $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "tauxtva", array())) / 100));
            // line 80
            echo "                        <td class=\"a-right movewishlist\"><span class=\"cart-price\"> <span style=\"color:green\">";
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : null), "html", null, true);
            echo " dt</span> </span></td>   
                        ";
            // line 81
            $context["totalHTcommande"] = ((isset($context["totalHTcommande"]) ? $context["totalHTcommande"] : null) + (isset($context["totalHT"]) ? $context["totalHT"] : null));
            // line 82
            echo "                        ";
            $context["totalTTCcommande"] = ((isset($context["totalTTCcommande"]) ? $context["totalTTCcommande"] : null) + (isset($context["totalTTC"]) ? $context["totalTTC"] : null));
            // line 83
            echo "                        <td class=\"a-right movewishlist\"><span class=\"cart-price\"> <span style=\"color:green\">";
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : null), "html", null, true);
            echo " dt</span> </span></td>
                        <td class=\"a-center last\"><a class=\"button remove-item\" title=\"Remove item\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><span><span>Retirer l'article</span></span></a></td>
                    </form>
                    </tr>
                   
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "  
                    <td class=\"a-right last\" colspan=\"7\">
                   \t\t<span>Total HT de commande <span class=\"price\">";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["totalHTcommande"]) ? $context["totalHTcommande"] : null), "html", null, true);
        echo " dt</span></span><br>
\t\t\t\t\t\t<span>Total TTC de commande <span class=\"price\">";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["totalTTCcommande"]) ? $context["totalTTCcommande"] : null), "html", null, true);
        echo " dt</span></span>
                    </td>
                        
                  </tbody>
                  <tfoot>
                   \t
                     <td class=\"a-right last\" colspan=\"7\"><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\"><button onclick=\"setLocation('#')\" class=\"button btn-continue\" title=\"Continuer mes achats\" type=\"button\"><span><span>Continuer mes achats</span></span></button></a>
                        ";
        // line 98
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : null)) != 0)) {
            // line 99
            echo "                                    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("livraison");
            echo "\"><button action=\"";
            echo $this->env->getExtension('routing')->getPath("livraison");
            echo "\" class=\"button btn-update\" title=\"Valider mon panier\" value=\"update_qty\" name=\"update_cart_action\" type=\"submit\"><span><span>Valider mon panier</span></span></button></a>
                        ";
        }
        // line 101
        echo "                    </td>
                  </tfoot>
                </table>

              </fieldset>
          </div>
        </div>
        <!-- BEGIN CART COLLATERALS -->
      </div>
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 101,  227 => 99,  225 => 98,  221 => 97,  212 => 91,  208 => 90,  204 => 88,  193 => 84,  188 => 83,  185 => 82,  183 => 81,  178 => 80,  175 => 79,  173 => 78,  169 => 76,  154 => 74,  150 => 73,  143 => 69,  137 => 68,  127 => 67,  123 => 66,  120 => 65,  115 => 64,  109 => 60,  107 => 59,  77 => 31,  68 => 28,  65 => 27,  61 => 26,  49 => 17,  39 => 9,  36 => 8,  31 => 7,  29 => 6,  27 => 4,  25 => 3,);
    }
}
