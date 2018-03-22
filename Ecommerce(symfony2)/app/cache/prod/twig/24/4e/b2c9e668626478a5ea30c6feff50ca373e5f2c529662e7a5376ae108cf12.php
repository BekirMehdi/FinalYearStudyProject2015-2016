<?php

/* PagesBundle:Default:pages/modulesUsed/menuHorizontal.html.twig */
class __TwigTemplate_244eb2c9e668626478a5ea30c6feff50ca373e5f2c529662e7a5376ae108cf12 extends Twig_Template
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
        echo "          ";
        if (((isset($context["articles"]) ? $context["articles"] : null) != 0)) {
            // line 2
            echo "            <div class=\"level0-wrapper custom-menu\">
              <div class=\"header-nav-dropdown-wrapper clearer\">
              ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) ? $context["articles"] : null), 0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 5
                echo "                <div class=\"grid12-5\">
                 
                  <div class=\"custom_img\"><a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["article"], "image", array()), "AssetPath", array())), "html", null, true);
                echo "\" alt=\"custom img1\"></a></div>
                  <div class=\"post-date\"><i class=\"icon-calendar\"></i> ";
                // line 8
                if ($this->getAttribute($context["article"], "datecreation", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</div>
                  <p>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
                echo "</p>
                  <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" title=\"Lire plus\" class=\"learn_more_btn\"><span>Lire plus</span></button></a>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "              </div>
            </div>
          ";
        }
        // line 15
        echo "  ";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages/modulesUsed/menuHorizontal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  59 => 13,  50 => 10,  46 => 9,  40 => 8,  34 => 7,  30 => 5,  26 => 4,  22 => 2,  19 => 1,);
    }
}
