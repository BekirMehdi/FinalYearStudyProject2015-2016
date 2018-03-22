<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateursConnecte1.html.twig */
class __TwigTemplate_2795a733f0347b91730f0219787876e89865a8c3cac263a542e1472f237ff295 extends Twig_Template
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
        echo " ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 2
            echo " <div class=\"wishlist\"><a title=\"My Wishlist\"  href=\"";
            echo $this->env->getExtension('routing')->getPath("SuperAdmin");
            echo "\"><span class=\"hidden-xs\">Super Admin</span></a></div>
 ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 4
            echo "  <div class=\"myaccount\"><a title=\"My Account\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin");
            echo "\"><span class=\"hidden-xs\">Créer Votre Boutique</span></a></div>
  ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 6
            echo "  ";
        }
        // line 7
        echo " <div class=\"check\"><a title=\"Deconnexion\" href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><span class=\"hidden-xs\">Deconnexion</span></a></div>";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  34 => 6,  28 => 4,  22 => 2,  19 => 1,);
    }
}
