<?php

/* EcommerceBundle:Default:categories/modulesUsed/me.html.twig */
class __TwigTemplate_0a5ec8398721f8da484b41095042e26578855e8748f2bb7269b3725b8b14fc87 extends Twig_Template
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
        echo "

   <div class=\"offer-banner-section wow bounceInUp animated\">
    <div class=\"container\">
      <div class=\"row\">
      ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["boutiquesPremium"]) ? $context["boutiquesPremium"] : null), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["boutiquePremium"]) {
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentationBoutiquePremium", array("idBP" => $this->getAttribute($context["boutiquePremium"], "id", array()))), "html", null, true);
            echo "\"><div class=\"col-lg-4 col-xs-12 col-sm-4\"><img alt=\"offer banner1\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["boutiquePremium"], "image", array()), "AssetPath", array())), "html", null, true);
            echo "\"></a>
        </div>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boutiquePremium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo " 
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:categories/modulesUsed/me.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}
