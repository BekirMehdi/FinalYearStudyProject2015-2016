<?php

/* EcommerceBundle:Default:Boutiques/layout/boutiquesVertical.html.twig */
class __TwigTemplate_a504def1a33476746811b7fab41f3af37c46c3b68a01360f43777525e50b7347 extends Twig_Template
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
        echo "            <div class=\"popular-posts widget widget__sidebar wow bounceInUp animated\" id=\"recent-posts-4\">
              <h3 class=\"widget-title\">Boutiques Premium</h3>
              <div class=\"widget-content\">
                <ul class=\"posts-list unstyled clearfix\">
                ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["boutiquesPremium"]) ? $context["boutiquesPremium"] : null), 0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["boutiquePremium"]) {
            // line 6
            echo "                  <li>
                    <figure class=\"featured-thumb\"> <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentationBoutiquePremium", array("idBP" => $this->getAttribute($context["boutiquePremium"], "id", array()))), "html", null, true);
            echo "\"> <img width=\"80\" height=\"53\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutiquePremium"], "nom", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["boutiquePremium"], "image", array()), "AssetPath", array())), "html", null, true);
            echo "\"> </a> </figure>
                    <!--featured-thumb-->
                    <a title=\"Pellentesque posuere\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentationBoutiquePremium", array("idBP" => $this->getAttribute($context["boutiquePremium"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutiquePremium"], "nom", array()), "html", null, true);
            echo "</a><br>
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutiquePremium"], "telephone", array()), "html", null, true);
            echo "<br>
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutiquePremium"], "adresseEmail", array()), "html", null, true);
            echo "
                  </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boutiquePremium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </ul>
              </div>
              <!--widget-content--> 
            </div>";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Boutiques/layout/boutiquesVertical.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  51 => 11,  47 => 10,  41 => 9,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
