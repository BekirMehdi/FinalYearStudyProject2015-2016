<?php

/* EcommerceBundle:Default:categories/modulesUsed/tousCategories.html.twig */
class __TwigTemplate_79ca0971c15a92a2500d6bf0e77f539dbcf975c0952bdcfc2f72ebe29ed8d759 extends Twig_Template
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
 <select name=\"choix\" class=\"cate-dropdown hidden-xs\">
                <option value=\"boutiques\" selected>recherche boutique</option>
                <option value=\"produits\">recherche produits</option>
              </select>
              ";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:categories/modulesUsed/tousCategories.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
