<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_162de9e82287794b4d536dd2752c895b22cffc63e3fccf6ac1f5161344cbefe4 extends Twig_Template
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
        echo "<div class=\"login\"><a title=\"Login\" href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><span  class=\"hidden-xs\">S'identifier</span></a></div>
<div class=\"login\"><a title=\"inscrire\" href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><span  class=\"hidden-xs\">S'inscrire</span></a></div>";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
