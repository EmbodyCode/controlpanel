<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_ae1c920e116d61622ffcbb2dd40cca45d3a97898f1ebec0037051b97f66bda7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_878b822156de27da3775099bd73d2db71b4b59354cb17297f3febcc6ca2fc88d = $this->env->getExtension("native_profiler");
        $__internal_878b822156de27da3775099bd73d2db71b4b59354cb17297f3febcc6ca2fc88d->enter($__internal_878b822156de27da3775099bd73d2db71b4b59354cb17297f3febcc6ca2fc88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_878b822156de27da3775099bd73d2db71b4b59354cb17297f3febcc6ca2fc88d->leave($__internal_878b822156de27da3775099bd73d2db71b4b59354cb17297f3febcc6ca2fc88d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97ad4bee424fab9e5f44ded4089f574d801203b7033beefccc2a9222026ccde1 = $this->env->getExtension("native_profiler");
        $__internal_97ad4bee424fab9e5f44ded4089f574d801203b7033beefccc2a9222026ccde1->enter($__internal_97ad4bee424fab9e5f44ded4089f574d801203b7033beefccc2a9222026ccde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_97ad4bee424fab9e5f44ded4089f574d801203b7033beefccc2a9222026ccde1->leave($__internal_97ad4bee424fab9e5f44ded4089f574d801203b7033beefccc2a9222026ccde1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
