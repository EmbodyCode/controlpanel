<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a09ceb227da30162fad926ec64d39923673961a1efd6a42bc2f7f6dfdffd6255 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_92ff9448a097bfa5b6baa95ac28c934570895a298fe4612efa23aa70420b5df7 = $this->env->getExtension("native_profiler");
        $__internal_92ff9448a097bfa5b6baa95ac28c934570895a298fe4612efa23aa70420b5df7->enter($__internal_92ff9448a097bfa5b6baa95ac28c934570895a298fe4612efa23aa70420b5df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92ff9448a097bfa5b6baa95ac28c934570895a298fe4612efa23aa70420b5df7->leave($__internal_92ff9448a097bfa5b6baa95ac28c934570895a298fe4612efa23aa70420b5df7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b91ec96027dc02475f7f3aff47c2fccb35ec12a8a0cd7f3e9c729dbf8efd273b = $this->env->getExtension("native_profiler");
        $__internal_b91ec96027dc02475f7f3aff47c2fccb35ec12a8a0cd7f3e9c729dbf8efd273b->enter($__internal_b91ec96027dc02475f7f3aff47c2fccb35ec12a8a0cd7f3e9c729dbf8efd273b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b91ec96027dc02475f7f3aff47c2fccb35ec12a8a0cd7f3e9c729dbf8efd273b->leave($__internal_b91ec96027dc02475f7f3aff47c2fccb35ec12a8a0cd7f3e9c729dbf8efd273b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
