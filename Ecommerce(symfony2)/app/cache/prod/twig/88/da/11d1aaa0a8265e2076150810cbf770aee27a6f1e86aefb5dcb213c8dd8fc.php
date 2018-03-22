<?php

/* EcommerceBundle:Default:panier/layout/panierVertical.html.twig */
class __TwigTemplate_88da11d1aaa0a8265e2076150810cbf770aee27a6f1e86aefb5dcb213c8dd8fc extends Twig_Template
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
        $context["totalHT"] = 0;
        // line 2
        $context["totalTTC"] = 0;
        // line 3
        echo "
  <div class=\"block block-cart\">
            <div class=\"block-title \">MON PANIER</div>
            <div class=\"block-content\">
              <div class=\"summary\">
                <p class=\"amount\">Il y a <a href=\"#\">";
        // line 8
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:articles"), array());
        echo "</a> dans votre panier.</p>
              ";
        // line 9
        if (((isset($context["articles"]) ? $context["articles"] : null) != 0)) {
            echo "  
              ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["produits"]) ? $context["produits"] : null), 0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 11
                echo "              ";
                $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : null) + ($this->getAttribute($context["produit"], "prixremise", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
                // line 12
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                <p class=\"subtotal\"> <span class=\"label\">Panier Sous-total:</span> <span class=\"price\">";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : null), "html", null, true);
            echo " dt</span> </p>
              </div>
              <div class=\"ajax-checkout\">
              <form action=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\">
               <button type=\"submit\" action =\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\"title=\"Voir Panier\" class=\"button button-checkout\"><span> Voir Panier</span></button>
              </form> 
              </div>
              <p class=\"block-subtitle\">Derniers articles ajoutés (s) </p>
              <ul>
              ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["produits"]) ? $context["produits"] : null), 0, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 23
                echo "                <li class=\"item\"> <a class=\"product-image\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\"><img width=\"80\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array())), "html", null, true);
                echo "\"></a>
                  <div class=\"product-details\">
                    <div class=\"access\"> <a class=\"btn-remove1\" title=\"Supprimer cet article\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\"> <span class=\"icon\"></span> Supprimer </a> </div>
                    <p class=\"product-name\"> <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</a> </p>
                    <strong>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array"), "html", null, true);
                echo "</strong> x <span class=\"price\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixremise", array()), "html", null, true);
                echo " dt</span> </div>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "  
              </ul>
            ";
        }
        // line 31
        echo "                
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panierVertical.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 31,  108 => 29,  97 => 27,  91 => 26,  87 => 25,  75 => 23,  71 => 22,  63 => 17,  59 => 16,  53 => 13,  45 => 12,  42 => 11,  38 => 10,  34 => 9,  30 => 8,  23 => 3,  21 => 2,  19 => 1,);
    }
}
