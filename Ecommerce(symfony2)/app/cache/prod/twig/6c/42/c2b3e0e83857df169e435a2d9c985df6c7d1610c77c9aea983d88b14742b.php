<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_6c42c2b3e0e83857df169e435a2d9c985df6c7d1610c77c9aea983d88b14742b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AUTOBIZExpertBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AUTOBIZExpertBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Erreur ";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
\t\th1, h4{color:#FF2937!important; font-size:15px;}
\t\th1{font-size:55px; padding-bottom:0px; margin-bottom:0px;}
\t\th4{margin-top:0px; padding-top:0px;}
\t\tp{font-size:16px;}
\t</style>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "\t<div class=\"mb2 mt2 p1 wrapper\">
\t\t<div class=\"pt2-s768 mt2 row\">
\t\t\t<div class=\"col-s768 mt2 mb1 w33-s480 pl2\">
\t\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/autobizexpert/imgs/notification.png"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\" col-s768 pr1 pl2 pt2\">

\t\t\t\t<h1>ERREUR 404</h1>
\t\t\t\t<h4>La page demandée n'est pas disponible sur ce serveur</h4>

\t\t\t\t<p>
\t\t\t\t Vous avez manuellement saisi une URL, ou utilisé un signet?<br>
\t\t\t\t Merci de vérifier vos sources ou mettez a jour votre bookmark
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  61 => 15,  58 => 14,  45 => 6,  42 => 5,  33 => 3,  30 => 2,);
    }
}
