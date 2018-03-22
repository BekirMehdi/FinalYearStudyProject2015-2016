<?php

/* EcommerceBundle:SuperAdministration:Boutiques/layout/index.html.twig */
class __TwigTemplate_20477be78953e3cfbd14b536a08de0d3eebf22a6dac044457faf201195d6c285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout/layoutSuperAdmin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutSuperAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"new_title center\">
              <h2> Listes des boutique </h2>
            </div>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <!--<th>Id</th>--!>
                <th>Nom</th>
                <th>Description</th>
                <th>Telephone</th>
                <th>Adresse</th>
                <th>Date_creation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "            <tr>
                <td class=\"image\"><a class=\"product-image\" title=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentationBoutique", array("idB" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><img width=\"75\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["entity"], "image", array()), "AssetPath", array())), "html", null, true);
            echo "\"></a></td>
                <!--<td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SuperAdminBoutiques_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>--!>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["entity"], "datecreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                 <td>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SuperAdminBoutiques_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                     <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SuperAdminBoutiques_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <div class=\"bouton_button_add\">
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("SuperAdminBoutiques_new");
        echo "\">
                Créer une nouvelle boutique
            </a>
    </div>
        
    </ul>

    ";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:SuperAdministration:Boutiques/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 41,  111 => 37,  101 => 33,  97 => 32,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  58 => 24,  55 => 23,  51 => 22,  31 => 4,  28 => 3,);
    }
}
