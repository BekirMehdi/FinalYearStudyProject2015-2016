<?php

/* ::modulesUsed/navigationSuperAdmin.html.twig */
class __TwigTemplate_25ec40f69f17288ef88a0eb45e1082710ae6937759511495a3298704292df097 extends Twig_Template
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
        echo "<div class=\"span3\">

    <div class=\"well\">
    <div class=\"nav-title\"> <span>Menu</span> </div>
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("SuperAdminCategories");
        echo "\"><span class=\"menu-title\">Catégories</span></a>
            </li>
            <li>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("adminSousCategories");
        echo "\"><span class=\"menu-title\">Sous Catégories</span></a>
            </li>
            <li>
                <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("SuperAdminBoutiques");
        echo "\"><span class=\"menu-title\">Boutiques</span></a>
            </li>
            <li>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("adminBoutiquesPremium");
        echo "\"><span class=\"menu-title\">Boutiques Premium</span></a>
            </li>
            <li>
                <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("SuperAdminProduits");
        echo "\"><span class=\"menu-title\">Produits</span></a>
            </li>
            <li>
                <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("adminProduitsPremium");
        echo "\"><span class=\"menu-title\">Produits Premium</span></a>
            </li>
          
            <li>
                <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("adminArticles");
        echo "\"><span class=\"menu-title\">blog</span></a>
            </li>
            <li>
                <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("SuperAdminUtilisateurs");
        echo "\"><span class=\"menu-title\">espace membres</span></a>
            </li>
             <li>
                <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("superAdminMessage");
        echo "\"><span class=\"menu-title\">messages</span></a>
            </li>
             <li>
                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("superAdminCommande");
        echo "\"><span class=\"menu-title\">Commandes</span></a>
            </li>
            <li>
                <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><span class=\"menu-title\">Deconnexion</span></a>
            </li> 
        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigationSuperAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 38,  82 => 35,  76 => 32,  70 => 29,  64 => 26,  57 => 22,  51 => 19,  45 => 16,  39 => 13,  33 => 10,  27 => 7,  19 => 1,);
    }
}
