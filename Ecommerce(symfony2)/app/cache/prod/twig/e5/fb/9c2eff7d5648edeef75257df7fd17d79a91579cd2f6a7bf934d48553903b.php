<?php

/* EcommerceBundle:Default:categories/modulesUsed/men.html.twig */
class __TwigTemplate_e5fb9c2eff7d5648edeef75257df7fd17d79a91579cd2f6a7bf934d48553903b extends Twig_Template
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
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produitsPremium"]) ? $context["produitsPremium"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produitPremium"]) {
            // line 2
            echo "          
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider_img_2.jpg'><img src='";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["produitPremium"], "image", array()), "AssetPath", array())), "html", null, true);
            echo "' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt=\"banner\"/>
                  <div    class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='45'  data-y='30'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Exclusive Designer</div>
                  <div    class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='45'  data-y='70'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>prime de produit</div>
                  ";
            // line 6
            if ((!$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produitPremium"], "id", array()), array(), "array", true, true))) {
                // line 7
                echo "                  <div    class='tp-caption sfb  tp-resizeme ' data-x='45'  data-y='360'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentationPremium", array("idP" => $this->getAttribute($context["produitPremium"], "id", array()))), "html", null, true);
                echo "' class=\"view-more\">Voir plus</a> <a href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouterPremium", array("idP" => $this->getAttribute($context["produitPremium"], "id", array()))), "html", null, true);
                echo "' class=\"buy-btn\">Ajouter au panier</a></div>
                  ";
            }
            // line 9
            echo "                  <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='130'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Un produit premium tend à générer plus de marge qu’un produit standard. <br>
                    «Grâce au Premium, le prix est mort… Vive la valeur !».</div>
                  <div    class='tp-caption Title sft  tp-resizeme ' data-x='45'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;font-size:11px'></div>
                </li>
                
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produitPremium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:categories/modulesUsed/men.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  35 => 7,  33 => 6,  27 => 3,  24 => 2,  19 => 1,);
    }
}
