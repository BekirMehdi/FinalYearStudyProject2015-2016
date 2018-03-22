<?php

/* EcommerceBundle:Default:panier/layout/panierHover.html.twig */
class __TwigTemplate_c3be7d14ae1e08037c194abe4d93fefcec2af5595c1f2cf5bd15afff02db8f3d extends Twig_Template
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
        if (((isset($context["articles"]) ? $context["articles"] : null) != 0)) {
            // line 2
            $context["totalHT"] = 0;
            // line 3
            $context["totalTTC"] = 0;
            // line 4
            echo "
 <div>
                <div class=\"top-cart-content arrow_box\">
                  <div class=\"block-subtitle\">Derniers articles ajoutés (s)</div>
                  <ul id=\"cart-sidebar\" class=\"mini-products-list\">
                  ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["produits"]) ? $context["produits"] : null), 0, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 10
                echo "                    <li class=\"item even\"> <div class=\"mehdi\" ><a class=\"product-image\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\"><img alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo " \" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array())), "html", null, true);
                echo "\" width=\"80\"></a></div>
                      <div class=\"detail-item\">
                        <div class=\"product-details\"> <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\" title=\"Supprimer cet article\" onClick=\"\" class=\"glyphicon glyphicon-remove\">&nbsp;</a> <a class=\"glyphicon glyphicon-pencil\" title=\"Modifier l'article\" href=\"";
                echo $this->env->getExtension('routing')->getPath("panier");
                echo "\">&nbsp;</a>
                          <p class=\"product-name\"> <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\" title=\"afficher produit\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</a> </p>
                        </div>
                        <div class=\"product-details-bottom\"> <span class=\"price\">";
                // line 15
                echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixremise", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
                echo " dt</span> <span class=\"title-desc\">Qty:</span> <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array"), "html", null, true);
                echo "</strong> </div>
                      </div>
                    </li>
                     ";
                // line 18
                $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : null) + ($this->getAttribute($context["produit"], "prixremise", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
                // line 19
                echo "                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                  </ul>
                  <div class=\"top-subtotal\">Sous-Total: <span class=\"price\">";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : null), "html", null, true);
            echo " dt</span></div>
                  <div class=\"actions\">
                    <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("produits");
            echo "\"><button class=\"btn-checkout\" type=\"button\"><span>Checkout</span></button></a>
                    <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\"><button class=\"view-cart\" type=\"button\"><span>Voir le panier</span></button></a>
                  </div>
                </div>
              </div>
";
        }
        // line 28
        echo "              ";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panierHover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 28,  89 => 24,  85 => 23,  80 => 21,  77 => 20,  71 => 19,  69 => 18,  61 => 15,  54 => 13,  48 => 12,  36 => 10,  32 => 9,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
