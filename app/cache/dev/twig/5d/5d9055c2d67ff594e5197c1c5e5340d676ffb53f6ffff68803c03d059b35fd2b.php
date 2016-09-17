<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_92b3fa74f4c0e4c79ad5c82c46962858bbc35520f018591e1c9fd3a6aea903bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_82282056fab6eeb64d0680f74ef4733ae8b96a005311bf58bbfd0bc57266c8b5 = $this->env->getExtension("native_profiler");
        $__internal_82282056fab6eeb64d0680f74ef4733ae8b96a005311bf58bbfd0bc57266c8b5->enter($__internal_82282056fab6eeb64d0680f74ef4733ae8b96a005311bf58bbfd0bc57266c8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82282056fab6eeb64d0680f74ef4733ae8b96a005311bf58bbfd0bc57266c8b5->leave($__internal_82282056fab6eeb64d0680f74ef4733ae8b96a005311bf58bbfd0bc57266c8b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a99b65cba0636a7706a29b65fd9ebf4156c6f38b849be716af561492421d840 = $this->env->getExtension("native_profiler");
        $__internal_5a99b65cba0636a7706a29b65fd9ebf4156c6f38b849be716af561492421d840->enter($__internal_5a99b65cba0636a7706a29b65fd9ebf4156c6f38b849be716af561492421d840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_5a99b65cba0636a7706a29b65fd9ebf4156c6f38b849be716af561492421d840->leave($__internal_5a99b65cba0636a7706a29b65fd9ebf4156c6f38b849be716af561492421d840_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
