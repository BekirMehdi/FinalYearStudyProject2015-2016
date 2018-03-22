<?php

/* EcommerceBundle:Default:categories/modulesUsed/menu.html.twig */
class __TwigTemplate_665e344f2d4b60b76648a2fb55d2b1583161f5483f0169bdf8136f95529c3762 extends Twig_Template
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
        echo " <div class=\"magik-slideshow wow bounceInUp animated\" id=\"magik-slideshow\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"LHS-nav col-lg-3 col-md-4\">
          <div id=\"magik-verticalmenu\" class=\"block magik-verticalmenu\">
            <div class=\"nav-title\"> <span>Categories Boutiques</span> </div>
            <div class=\"nav-content\">
              <div class=\"navbar navbar-inverse\">
                <div id=\"verticalmenu\" class=\"verticalmenu\" role=\"navigation\">
                  <div class=\"navbar\">
                    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                      <ul class=\"nav navbar-nav verticalmenu\">
                      ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 14
            echo "                      ";
            $context["id"] = $this->getAttribute($context["categorie"], "nom", array());
            // line 15
            echo "                      ";
            $context["autre"] = "autre";
            // line 16
            echo "                      ";
            if (((isset($context["id"]) ? $context["id"] : null) != (isset($context["autre"]) ? $context["autre"] : null))) {
                // line 17
                echo "                        <li class=\" parent dropdown \"> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieGridBoutiques", array("categorieGrid" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                echo "\" class=\"dropdown-toggle\"><span class=\"menu-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                echo "</span><b ></b></a> 
                         
                        </li>   
                      ";
            }
            // line 20
            echo "           
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  
                      ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 23
            echo "                      ";
            $context["id"] = $this->getAttribute($context["categorie"], "nom", array());
            // line 24
            echo "                      ";
            $context["autre"] = "autre";
            // line 25
            echo "                        ";
            if (((isset($context["id"]) ? $context["id"] : null) == (isset($context["autre"]) ? $context["autre"] : null))) {
                // line 26
                echo "                        <li class=\" parent dropdown \"> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieGridBoutiques", array("categorieGrid" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                echo "\" class=\"dropdown-toggle\"><span class=\"menu-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                echo "</span><b class=\"round-arrow\"></b></a> 
                        
                        </li> 
                      ";
            }
            // line 29
            echo " 
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-lg-6 col-sm-12 col-md-8\">
          <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
             <ul>
               ";
        // line 43
        $this->env->loadTemplate("::modulesUsed/navigatio.html.twig")->display($context);
        // line 44
        echo "             </ul>
              <div class=\"tp-bannertimer\"></div>
            </div>
          </div>
         
        </div>
        <aside class=\"col-xs-12 col-sm-12 col-md-3\">
          <div class=\"RHS-banner\">
            <div class=\"add\"><a href=\"#\"><img alt=\"banner-img\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/sal.jpg"), "html", null, true);
        echo "\"></a></div>
            <div class=\"add\"><a href=\"#\"><img alt=\"banner-img\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/bal.jpg"), "html", null, true);
        echo "\"></a></div>
          </div>
        </aside>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 53,  122 => 52,  112 => 44,  110 => 43,  96 => 31,  89 => 29,  79 => 26,  76 => 25,  73 => 24,  70 => 23,  66 => 22,  63 => 21,  56 => 20,  46 => 17,  43 => 16,  40 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }
}
