<?php

/* ::modulesUsed/navigatio.html.twig */
class __TwigTemplate_5d11c25a078b765ecc172646d7944b20612fb1ec88605c3d1290efaf8caa115d extends Twig_Template
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
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Boutiques:men"), array());
    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigatio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
