<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1190db2484aacc36bd118e746fd518f8ab99d5023e7cf114ba300ac128a9a7e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62313656fab3e53e641484691cf2d4f571d786e70250e58a059cb205b7702731 = $this->env->getExtension("native_profiler");
        $__internal_62313656fab3e53e641484691cf2d4f571d786e70250e58a059cb205b7702731->enter($__internal_62313656fab3e53e641484691cf2d4f571d786e70250e58a059cb205b7702731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62313656fab3e53e641484691cf2d4f571d786e70250e58a059cb205b7702731->leave($__internal_62313656fab3e53e641484691cf2d4f571d786e70250e58a059cb205b7702731_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ae509adf95c4c544d53b41c9dcc66ffe36175f6f405e9d33a1cc222d6087331 = $this->env->getExtension("native_profiler");
        $__internal_5ae509adf95c4c544d53b41c9dcc66ffe36175f6f405e9d33a1cc222d6087331->enter($__internal_5ae509adf95c4c544d53b41c9dcc66ffe36175f6f405e9d33a1cc222d6087331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5ae509adf95c4c544d53b41c9dcc66ffe36175f6f405e9d33a1cc222d6087331->leave($__internal_5ae509adf95c4c544d53b41c9dcc66ffe36175f6f405e9d33a1cc222d6087331_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
