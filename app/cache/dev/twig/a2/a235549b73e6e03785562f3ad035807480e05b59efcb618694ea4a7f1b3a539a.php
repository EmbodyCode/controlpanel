<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_696dddc12fda0492ecc73b7f2baadf37900a6bb0de66f1c95f2eb78de4942a4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_23db25cf9de412b71ffeee4e0a3734cd69e59c5d9a248f61875913b6b014c18c = $this->env->getExtension("native_profiler");
        $__internal_23db25cf9de412b71ffeee4e0a3734cd69e59c5d9a248f61875913b6b014c18c->enter($__internal_23db25cf9de412b71ffeee4e0a3734cd69e59c5d9a248f61875913b6b014c18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23db25cf9de412b71ffeee4e0a3734cd69e59c5d9a248f61875913b6b014c18c->leave($__internal_23db25cf9de412b71ffeee4e0a3734cd69e59c5d9a248f61875913b6b014c18c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_873b226da7f417b385e31df07b984d2a6377497b9ebd3512009b8f3dbb4fb591 = $this->env->getExtension("native_profiler");
        $__internal_873b226da7f417b385e31df07b984d2a6377497b9ebd3512009b8f3dbb4fb591->enter($__internal_873b226da7f417b385e31df07b984d2a6377497b9ebd3512009b8f3dbb4fb591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_873b226da7f417b385e31df07b984d2a6377497b9ebd3512009b8f3dbb4fb591->leave($__internal_873b226da7f417b385e31df07b984d2a6377497b9ebd3512009b8f3dbb4fb591_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
