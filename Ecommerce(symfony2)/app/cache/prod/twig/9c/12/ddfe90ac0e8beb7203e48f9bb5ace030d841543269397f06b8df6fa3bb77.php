<?php

/* PagesBundle:Default:pages/layout/articles.html.twig */
class __TwigTemplate_9c12ddfe90ac0e8beb7203e48f9bb5ace030d841543269397f06b8df6fa3bb77 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        echo " 
 <div class=\"main-container col2-right-layout\">
    <div class=\"main container\">
      <div class=\"row\">
        <div class=\"col-main col-sm-9\">
          <div class=\"page-title\">
            <h2>Blog</h2>
          </div>
            <div class=\"toolbar\">
              <div class=\"pager\">
                <div class=\"pages\">
                  <ul class=\"pagination\">
                   ";
        // line 14
        echo $this->env->getExtension('knp_pagination')->render((isset($context["articles"]) ? $context["articles"] : null));
        echo "
                  </ul>
                </div>
              </div>
            </div>
          <div class=\"blog-wrapper\" id=\"main\">
            <div class=\"site-content\" id=\"primary\">
              <div role=\"main\" id=\"content\">
              <ol id=\"products-list\" class=\"products-list\">
              ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 24
            echo "                <li class=\"item odd\">
                  <div class=\"product-image\"> <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" title=\"Article\"> <img class=\"small-image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["article"], "image", array()), "AssetPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "\" width=\"230\" height=\"172px\"> </a> </div>
                  <div class=\"product-shop\">
                  <h2 class=\"product-name\"><a title=\" Sample Product\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo " </a></h2>
                                 
                  <div class=\"desc std\">
                    <div class=\"post-date\"><i class=\"icon-calendar\"></i> ";
            // line 30
            if ($this->getAttribute($context["article"], "datecreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</div>
                      <p>";
            // line 31
            echo $this->getAttribute($context["article"], "description", array());
            echo "</p>
                  </div>
                </li>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "             </ol>
              </div>
            </div>
          
          </div>
        </div>
        <div class=\"col-right sidebar col-sm-3 wow bounceInUp animated\">
                  <div role=\"complementary\" class=\"widget_wrapper13\" id=\"secondary\">
                    <div class=\"popular-posts widget widget__sidebar wow bounceInUp animated\" id=\"recent-posts-4\">
                      <h3 class=\"widget-title\">Les derenieere articles</h3>
                      <div class=\"widget-content\">
                        <ul class=\"posts-list unstyled clearfix\">
                 ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) ? $context["articles"] : null), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["Article"]) {
            // line 48
            echo "                  <li>
                    <figure class=\"featured-thumb\"> <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article", array("id" => $this->getAttribute($context["Article"], "id", array()))), "html", null, true);
            echo "\"> <img width=\"8px\" height=\"5px\" alt=\"blog image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["Article"], "image", array()), "AssetPath", array())), "html", null, true);
            echo "\"> </a> </figure>
                    <!--featured-thumb-->
                    <h4><a title=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "titre", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article", array("id" => $this->getAttribute($context["Article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "titre", array()), "html", null, true);
            echo "</a></h4>
                    <p class=\"post-meta\">
                      <time datetime=\"2014-07-10T07:09:31+00:00\" class=\"entry-date\"><div class=\"post-date\"><i class=\"icon-calendar\"></i> ";
            // line 53
            if ($this->getAttribute($context["Article"], "datecreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Article"], "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</div></time>
                      .</p>
                  </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "  
                </ul>
              </div>
              <!--widget-content--> 
            </div>
         
            <!-- Banner Ad Block -->
            
            <!-- Banner Text Block -->
           
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages/layout/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 56,  133 => 53,  124 => 51,  117 => 49,  114 => 48,  110 => 47,  96 => 35,  86 => 31,  80 => 30,  72 => 27,  63 => 25,  60 => 24,  56 => 23,  44 => 14,  28 => 2,);
    }
}
