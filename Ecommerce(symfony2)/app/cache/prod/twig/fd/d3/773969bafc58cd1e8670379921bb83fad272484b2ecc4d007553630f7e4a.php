<?php

/* EcommerceBundle:Default:categories/modulesUsed/footer.html.twig */
class __TwigTemplate_fdd3773969bafc58cd1e8670379921bb83fad272484b2ecc4d007553630f7e4a extends Twig_Template
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
        <div class=\"col-md-2 col-sm-4\">
          <h4>Categories</h4>
          ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["categories"]) ? $context["categories"] : null), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 5
            echo "            <ul class=\"links\">
              <li class=\"first\"><a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieGridBoutiques", array("categorieGrid" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</a></li>
            </ul>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </div>
        <div class=\"col-md-2 col-sm-4\">
          <h4>Boutiques</h4>
          ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["boutiques"]) ? $context["boutiques"] : null), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["boutique"]) {
            // line 13
            echo "            <ul class=\"links\">
              <li class=\"first\"><a title=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "nom", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentationBoutique", array("idB" => $this->getAttribute($context["boutique"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["boutique"], "nom", array()), "html", null, true);
            echo "</a></li>
            </ul>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boutique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:categories/modulesUsed/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  56 => 14,  53 => 13,  49 => 12,  44 => 9,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
