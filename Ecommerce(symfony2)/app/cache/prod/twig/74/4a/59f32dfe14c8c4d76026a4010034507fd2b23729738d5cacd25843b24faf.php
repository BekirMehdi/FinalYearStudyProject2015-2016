<?php

/* EcommerceBundle:Default:boutiques/layout/boutiquesRecherche.html.twig */
class __TwigTemplate_744a59f32dfe14c8c4d76026a4010034507fd2b23729738d5cacd25843b24faf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout/layoutfront.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutfront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "

            
    
                <section class=\"main-container col1-layout home-content-container\">
                    <div class=\"container\">
                        <div class=\"std\">
                            <div class=\"best-seller-pro wow bounceInUp animated\">
                              ";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["boutiques"]) ? $context["boutiques"] : null)) != 0)) {
            // line 13
            echo "                                <div class=\"slider-items-products\">
                                    <div class=\"new_title center\">
                                   
                                    </div>
                                    <div id=\"best-seller-slider\" class=\"product-flexslider hidden-buttons\">
                                    <div class=\"slider-items slider-width-col4\"> 
                                        ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["boutiques"]) ? $context["boutiques"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["boutique"]) {
                // line 20
                echo "                                            <div class=\"item\">
                                              <div class=\"col-item\">
                                                
                                                <div class=\"product-image-area\"> <a class=\"product-image\" title=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "nom", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentationBoutique", array("idB" => $this->getAttribute($context["boutique"], "id", array()))), "html", null, true);
                echo "\"> <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["boutique"], "image", array()), "AssetPath", array())), "html", null, true);
                echo "\" class=\"img-responsive\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "nom", array()), "html", null, true);
                echo "\" /> </a>
                                                  
                                                </div>
                                                <div class=\"info\">
                                                  <div class=\"info-inner\">
                                                    <div class=\"item-title\">
                                                     ";
                // line 29
                if ((!$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["boutique"], "id", array()), array(), "array", true, true))) {
                    // line 30
                    echo "                                                     <a title=\" Sample Product\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentationBoutique", array("idB" => $this->getAttribute($context["boutique"], "id", array()))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "nom", array()), "html", null, true);
                    echo " </a> 
                                                      ";
                }
                // line 32
                echo "                                                    
                                            
                                                    
                                                     </div>
                                                    <!--item-title-->
                                                   
                                                    <!--item-content--> 
                                                  </div>
                                                  <!--info-inner-->
                                                  
                                                  <div class=\"clearfix\"> </div>
                                                </div>
                                              </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boutique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                
                                         <div class=\"navigation\">
                                          
                                        </div>  

                                    </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        } else {
            // line 58
            echo "                Aucun boutique
            ";
        }
        // line 59
        echo " 
                </section>



            
 
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:boutiques/layout/boutiquesRecherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 59,  119 => 58,  105 => 46,  85 => 32,  77 => 30,  75 => 29,  60 => 23,  55 => 20,  51 => 19,  43 => 13,  41 => 12,  31 => 4,  28 => 3,);
    }
}
