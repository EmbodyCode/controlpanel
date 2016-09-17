<?php

/* AppBundle:Admin:unban.html.twig */
class __TwigTemplate_cd511fee63b1e9e0ad910fc1bac8db8cafa667b00445e2db60e43b091ab74e7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Admin:layout.html.twig", "AppBundle:Admin:unban.html.twig", 1);
        $this->blocks = array(
            'containerUsers' => array($this, 'block_containerUsers'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f68dce1b6de1c311502425a0f97f44ca761bfb9d0133707742cd2d68bed071a = $this->env->getExtension("native_profiler");
        $__internal_9f68dce1b6de1c311502425a0f97f44ca761bfb9d0133707742cd2d68bed071a->enter($__internal_9f68dce1b6de1c311502425a0f97f44ca761bfb9d0133707742cd2d68bed071a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:unban.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f68dce1b6de1c311502425a0f97f44ca761bfb9d0133707742cd2d68bed071a->leave($__internal_9f68dce1b6de1c311502425a0f97f44ca761bfb9d0133707742cd2d68bed071a_prof);

    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
        $__internal_eef32f6e14aacebcd1073b1a9936f4293971621e0ccc6dde3a7728ae7bb84576 = $this->env->getExtension("native_profiler");
        $__internal_eef32f6e14aacebcd1073b1a9936f4293971621e0ccc6dde3a7728ae7bb84576->enter($__internal_eef32f6e14aacebcd1073b1a9936f4293971621e0ccc6dde3a7728ae7bb84576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containerUsers"));

        // line 4
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
        <h2 class=\"sub-header\">Вы разблокировали пользователя ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " </h2>
    
";
        
        $__internal_eef32f6e14aacebcd1073b1a9936f4293971621e0ccc6dde3a7728ae7bb84576->leave($__internal_eef32f6e14aacebcd1073b1a9936f4293971621e0ccc6dde3a7728ae7bb84576_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:unban.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:Admin:layout.html.twig" %}*/
/* */
/* {% block containerUsers %}*/
/*     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*         <h2 class="sub-header">Вы разблокировали пользователя {{user.username}} </h2>*/
/*     */
/* {% endblock %}*/
