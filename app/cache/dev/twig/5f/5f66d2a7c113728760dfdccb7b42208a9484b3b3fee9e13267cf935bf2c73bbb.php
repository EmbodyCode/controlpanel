<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_72e04a9cc1fc143020a88ae74cc354f3801ba37792d667288c0df7245db1191a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_f567c5409c7f48a8161417ce051052a1d74f923636b3b68086c3dd5c4ff71e06 = $this->env->getExtension("native_profiler");
        $__internal_f567c5409c7f48a8161417ce051052a1d74f923636b3b68086c3dd5c4ff71e06->enter($__internal_f567c5409c7f48a8161417ce051052a1d74f923636b3b68086c3dd5c4ff71e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f567c5409c7f48a8161417ce051052a1d74f923636b3b68086c3dd5c4ff71e06->leave($__internal_f567c5409c7f48a8161417ce051052a1d74f923636b3b68086c3dd5c4ff71e06_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5bd4a5f603cf3b4582266752a56da5f23c8c65590402868fa14c39861fc01c9 = $this->env->getExtension("native_profiler");
        $__internal_d5bd4a5f603cf3b4582266752a56da5f23c8c65590402868fa14c39861fc01c9->enter($__internal_d5bd4a5f603cf3b4582266752a56da5f23c8c65590402868fa14c39861fc01c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d5bd4a5f603cf3b4582266752a56da5f23c8c65590402868fa14c39861fc01c9->leave($__internal_d5bd4a5f603cf3b4582266752a56da5f23c8c65590402868fa14c39861fc01c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
