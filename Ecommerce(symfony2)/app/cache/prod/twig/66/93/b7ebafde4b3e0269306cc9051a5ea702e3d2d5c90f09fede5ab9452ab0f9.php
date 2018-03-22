<?php

/* EcommerceBundle:Default:panier/modulesUsed/articles.html.twig */
class __TwigTemplate_6693b7ebafde4b3e0269306cc9051a5ea702e3d2d5c90f09fede5ab9452ab0f9 extends Twig_Template
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
                ";
        // line 2
        if (((isset($context["articles"]) ? $context["articles"] : null) == 0)) {
            // line 3
            echo "                    Aucun article
                ";
        } elseif (((isset($context["articles"]) ? $context["articles"] : null) == 1)) {
            // line 5
            echo "                    1 article
                ";
        } else {
            // line 7
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["articles"]) ? $context["articles"] : null), "html", null, true);
            echo " articles
                ";
        }
        // line 9
        echo "      ";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/modulesUsed/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  32 => 7,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
