<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_55626a9682c75ccbde5351f4fc0fcda541454c8d30d5d6a3a0720c1ea009e0a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_e9803ea4bbdfcffb8bdaea11cd6af00738cf419b5d01bf162f763ddfa496b797 = $this->env->getExtension("native_profiler");
        $__internal_e9803ea4bbdfcffb8bdaea11cd6af00738cf419b5d01bf162f763ddfa496b797->enter($__internal_e9803ea4bbdfcffb8bdaea11cd6af00738cf419b5d01bf162f763ddfa496b797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9803ea4bbdfcffb8bdaea11cd6af00738cf419b5d01bf162f763ddfa496b797->leave($__internal_e9803ea4bbdfcffb8bdaea11cd6af00738cf419b5d01bf162f763ddfa496b797_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_082d4e4489c8df193d97ff40b52c414ea348c009fa4ddb2efb6030ca03a5bf1e = $this->env->getExtension("native_profiler");
        $__internal_082d4e4489c8df193d97ff40b52c414ea348c009fa4ddb2efb6030ca03a5bf1e->enter($__internal_082d4e4489c8df193d97ff40b52c414ea348c009fa4ddb2efb6030ca03a5bf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_082d4e4489c8df193d97ff40b52c414ea348c009fa4ddb2efb6030ca03a5bf1e->leave($__internal_082d4e4489c8df193d97ff40b52c414ea348c009fa4ddb2efb6030ca03a5bf1e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
