<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_fd6cf50ef890d1a273e7527edc7a4159c998fd68462c8f48ba1f562769ed9f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_2ef4dfb43a6a7519253d76f7aea237ca4a0176a0d299759ab7baf574cd0642cc = $this->env->getExtension("native_profiler");
        $__internal_2ef4dfb43a6a7519253d76f7aea237ca4a0176a0d299759ab7baf574cd0642cc->enter($__internal_2ef4dfb43a6a7519253d76f7aea237ca4a0176a0d299759ab7baf574cd0642cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ef4dfb43a6a7519253d76f7aea237ca4a0176a0d299759ab7baf574cd0642cc->leave($__internal_2ef4dfb43a6a7519253d76f7aea237ca4a0176a0d299759ab7baf574cd0642cc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c234d060fdb40f42881444ee91b28d28d03c09c32a50521866702520fc34d37 = $this->env->getExtension("native_profiler");
        $__internal_9c234d060fdb40f42881444ee91b28d28d03c09c32a50521866702520fc34d37->enter($__internal_9c234d060fdb40f42881444ee91b28d28d03c09c32a50521866702520fc34d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9c234d060fdb40f42881444ee91b28d28d03c09c32a50521866702520fc34d37->leave($__internal_9c234d060fdb40f42881444ee91b28d28d03c09c32a50521866702520fc34d37_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
