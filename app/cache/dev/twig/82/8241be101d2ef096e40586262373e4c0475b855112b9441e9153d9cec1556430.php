<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_12e91a50cf15e3b46e2b467c14e3127c751a9eab9bcca0be25a3c46743dce98c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3a066cca580c06a945a9bc1d7b889864acf6204a0413fd83723e0b09ea56e372 = $this->env->getExtension("native_profiler");
        $__internal_3a066cca580c06a945a9bc1d7b889864acf6204a0413fd83723e0b09ea56e372->enter($__internal_3a066cca580c06a945a9bc1d7b889864acf6204a0413fd83723e0b09ea56e372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a066cca580c06a945a9bc1d7b889864acf6204a0413fd83723e0b09ea56e372->leave($__internal_3a066cca580c06a945a9bc1d7b889864acf6204a0413fd83723e0b09ea56e372_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33c64786d86ddba82877dff6b922e39cafa0993c12577cf7a24d6bf7e8d661a0 = $this->env->getExtension("native_profiler");
        $__internal_33c64786d86ddba82877dff6b922e39cafa0993c12577cf7a24d6bf7e8d661a0->enter($__internal_33c64786d86ddba82877dff6b922e39cafa0993c12577cf7a24d6bf7e8d661a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_33c64786d86ddba82877dff6b922e39cafa0993c12577cf7a24d6bf7e8d661a0->leave($__internal_33c64786d86ddba82877dff6b922e39cafa0993c12577cf7a24d6bf7e8d661a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
