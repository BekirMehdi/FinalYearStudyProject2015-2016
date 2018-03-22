<?php

/* EcommerceBundle:Default:categories/modulesUsed/menuHorizontal.html.twig */
class __TwigTemplate_04e4d6ae7c1687121ad6b00293dd12f02989b5d2a0e74ce77835cc1c846f858d extends Twig_Template
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
        echo "              <ul class=\"submenu\">
                <li>
                  <ul class=\"topnav\">
                    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 5
            echo "                      ";
            $context["id"] = $this->getAttribute($context["categorie"], "nom", array());
            // line 6
            echo "                      ";
            $context["autre"] = "autre";
            // line 7
            echo "                      ";
            if (((isset($context["id"]) ? $context["id"] : null) != (isset($context["autre"]) ? $context["autre"] : null))) {
                // line 8
                echo "                      <li class=\"level0 nav-6 level-top first parent\"> <a class=\"level-top\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieGridBoutiques", array("categorieGrid" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                echo "\"> <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                echo "</span> </a>
                        <ul class=\"level0\">
                          ";
                // line 10
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sousCategories"]) ? $context["sousCategories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["sousCategorie"]) {
                    // line 11
                    echo "                            ";
                    $context["id1"] = $this->getAttribute($context["sousCategorie"], "categorie", array());
                    // line 12
                    echo "                            ";
                    if (((isset($context["id1"]) ? $context["id1"] : null) == (isset($context["id"]) ? $context["id"] : null))) {
                        // line 13
                        echo "                              <li class=\"level1 first\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousCategorieGridProduits", array("sousCategorieGrid" => $this->getAttribute($context["sousCategorie"], "id", array()))), "html", null, true);
                        echo "\"><span>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sousCategorie"], "nom", array()), "html", null, true);
                        echo "</span></a></li>
                            ";
                    }
                    // line 14
                    echo "  
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousCategorie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo " 
                        </ul>  
                      </li>
                      ";
            }
            // line 18
            echo " 
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 21
            echo "                      ";
            $context["id"] = $this->getAttribute($context["categorie"], "nom", array());
            // line 22
            echo "                      ";
            $context["autre"] = "autre";
            // line 23
            echo "                      ";
            if (((isset($context["id"]) ? $context["id"] : null) == (isset($context["autre"]) ? $context["autre"] : null))) {
                // line 24
                echo "                      <li class=\"level0 nav-6 level-top first parent\"> <a class=\"level-top\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieGridBoutiques", array("categorieGrid" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                echo "\"> <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                echo "</span> </a>
                        <ul class=\"level0\">
                          ";
                // line 26
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sousCategories"]) ? $context["sousCategories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["sousCategorie"]) {
                    // line 27
                    echo "                            ";
                    $context["id1"] = $this->getAttribute($context["sousCategorie"], "categorie", array());
                    // line 28
                    echo "                            ";
                    if (((isset($context["id1"]) ? $context["id1"] : null) == (isset($context["id"]) ? $context["id"] : null))) {
                        // line 29
                        echo "                              <li class=\"level1 first\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sousCategorieGridProduits", array("sousCategorieGrid" => $this->getAttribute($context["sousCategorie"], "id", array()))), "html", null, true);
                        echo "\"><span>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sousCategorie"], "nom", array()), "html", null, true);
                        echo "</span></a></li>
                            ";
                    }
                    // line 30
                    echo "  
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousCategorie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo " 
                        </ul>  
                      </li>
                      ";
            }
            // line 34
            echo " 
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                  </ul>
                </li>
              </ul>";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:categories/modulesUsed/menuHorizontal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 36,  136 => 34,  130 => 31,  123 => 30,  115 => 29,  112 => 28,  109 => 27,  105 => 26,  97 => 24,  94 => 23,  91 => 22,  88 => 21,  83 => 20,  76 => 18,  70 => 15,  63 => 14,  55 => 13,  52 => 12,  49 => 11,  45 => 10,  37 => 8,  34 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
