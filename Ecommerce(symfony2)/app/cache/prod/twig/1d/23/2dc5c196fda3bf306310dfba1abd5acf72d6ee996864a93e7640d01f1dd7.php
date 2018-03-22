<?php

/* PagesBundle:Default:pages/layout/pages.html.twig */
class __TwigTemplate_1d232dc5c196fda3bf306310dfba1abd5acf72d6ee996864a93e7640d01f1dd7 extends Twig_Template
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
        echo "<div class=\"main-container col2-right-layout\">
    <div class=\"main container\">
      <div class=\"row\">
        <div class=\"col-main col-sm-9 wow bounceInUp animated\">
          <div class=\"page-title\">
            <h2>Blog</h2>
          </div>
          <div class=\"blog-wrapper\" id=\"main\">
            <div class=\"site-content\" id=\"primary\">
              <div role=\"main\" id=\"content\">
                <article class=\"blog_entry clearfix\">
                  <header class=\"blog_entry-header clearfix\">
                    <div class=\"blog_entry-header-inner\">
                      <h2 class=\"blog_entry-title\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articles"]) ? $context["articles"] : null), "titre", array()), "html", null, true);
        echo "</h2>
                    </div>
                    <!--blog_entry-header-inner--> 
                  </header>
                  <!--blog_entry-header clearfix-->
                  <div class=\"entry-content\">
                    <div class=\"featured-thumb\"><img alt=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articles"]) ? $context["articles"] : null), "titre", array()), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : null), "image", array()), "AssetPath", array())), "html", null, true);
        echo "\"></div>
                    <div class=\"entry-content\">
                      
                      <blockquote>";
        // line 26
        echo $this->getAttribute((isset($context["articles"]) ? $context["articles"] : null), "contenu", array());
        echo ".</blockquote>
                     
                    </div>
                  </div>
                  <footer class=\"entry-meta\"> Cet article a été publiée  en
                    <time datetime=\"2014-07-10T06:53:43+00:00\" class=\"entry-date\"><div class=\"post-date\"><i class=\"icon-calendar\"></i> ";
        // line 31
        if ($this->getAttribute((isset($context["articles"]) ? $context["articles"] : null), "datecreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["articles"]) ? $context["articles"] : null), "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</div></time></footer>
                </article>
                <div class=\"comment-content wow bounceInUp animated\">
                 ";
        // line 34
        if ((twig_length_filter($this->env, (isset($context["commentaires"]) ? $context["commentaires"] : null)) != 0)) {
            // line 35
            echo "                 <div class=\"comments-wrapper\">
                    <h3> Comments </h3>
                    <ul class=\"commentlist\">
                    ";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["commentaires"]) ? $context["commentaires"] : null), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 39
                echo "                     <li class=\"comment\">
                            <div class=\"comment-wrapper\">
                              <div class=\"comment-author vcard\"><p class=\"gravatar\"><a href=\"#\"><img height=\"70px\" alt=\"avatar\" src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("frontoffice/images/commentaire.jpg"), "html", null, true);
                echo "\"></a></p> <span class=\"author\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "nom", array()), "html", null, true);
                echo "</span> </div>
                              <!--comment-author vcard-->
                              <div class=\"comment-meta\">
                                <time datetime=\"2014-07-10T07:27:08+00:00\" class=\"entry-date\"><div class=\"post-date\"><i class=\"icon-calendar\"></i> ";
                // line 44
                if ($this->getAttribute((isset($context["articles"]) ? $context["articles"] : null), "datecreation", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["articles"]) ? $context["articles"] : null), "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</div></time>
                              </div>
                              <!--comment-meta-->
                              <div class=\"comment-body\">  ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "commentaire", array()), "html", null, true);
                echo " </div>
                            </div>
                          </li>
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                    </ul>
                    <!--commentlist--> 
                  </div>

 ";
        }
        // line 56
        echo "                  <!--comments-wrapper-->
                  \t";
        // line 57
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 58
            echo "                  <div class=\"comments-form-wrapper clearfix\">
                    <h3>Laisser une réponse</h3>
                    <form class=\"comment-form\" action=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commentaire", array("id" => $this->getAttribute((isset($context["articles"]) ? $context["articles"] : null), "id", array()))), "html", null, true);
            echo "\" method=\"POST\" id=\"postComment\">
                      <div class=\"field\">
                        <label>Nom<em class=\"required\">*</em></label>
                        <input type=\"text\" class=\"input-text\" title=\"nom\" value=\"\" id=\"user\" name=\"nom\">
                      </div>
                      <div class=\"field\">
                        <label>Email<em class=\"required\">*</em></label>
                        <input type=\"text\" class=\"input-text validate-email\" title=\"Email\" value=\"\" id=\"email\" name=\"email\">
                      </div>
                      <div class=\"clear\"></div>
                      <div class=\"field aw-blog-comment-area\">
                        <label>Commentaire<em class=\"required\">*</em></label>
                        <textarea rows=\"5\" cols=\"50\" class=\"input-text\" title=\"Commentaire\" id=\"comment\" name=\"commentaire\"></textarea>
                      </div>
                      <div class=\"button-set\">
                        <input type=\"hidden\" value=\"1\" name=\"blog_id\">
                        <button type=\"submit\" class=\"bnt-comment\"><span><span>Ajouter un commentaire</span></span></button>
                      </div>
                    </form>
                  </div>
 ";
        }
        // line 81
        echo "                  <!--comments-form-wrapper clearfix--> 
       
                </div>
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
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["Articles"]) ? $context["Articles"] : null), 0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["Article"]) {
            // line 95
            echo "                  <li>
                    <figure class=\"featured-thumb\"> <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article", array("id" => $this->getAttribute($context["Article"], "id", array()))), "html", null, true);
            echo "\"> <img width=\"8px\" height=\"5px\" alt=\"blog image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["Article"], "image", array()), "AssetPath", array())), "html", null, true);
            echo "\"> </a> </figure>
                    <!--featured-thumb-->
                    <h4><a title=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "titre", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article", array("id" => $this->getAttribute($context["Article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "titre", array()), "html", null, true);
            echo "</a></h4>
                    <p class=\"post-meta\">
                      <time datetime=\"2014-07-10T07:09:31+00:00\" class=\"entry-date\"><div class=\"post-date\"><i class=\"icon-calendar\"></i> ";
            // line 100
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
        // line 103
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
        return "PagesBundle:Default:pages/layout/pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 103,  198 => 100,  189 => 98,  182 => 96,  179 => 95,  175 => 94,  160 => 81,  136 => 60,  132 => 58,  130 => 57,  127 => 56,  120 => 51,  110 => 47,  102 => 44,  94 => 41,  90 => 39,  86 => 38,  81 => 35,  79 => 34,  71 => 31,  63 => 26,  55 => 23,  46 => 17,  31 => 4,  28 => 3,);
    }
}
