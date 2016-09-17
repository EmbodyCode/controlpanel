<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_6cb2734834bf5a42872c96b14d4e506e791905518bc2f7d2517c0697607c78b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_f33fcaa9009deec7b0c091d8edf2df2ec242ea35f61711e288bfd5fbd007aa24 = $this->env->getExtension("native_profiler");
        $__internal_f33fcaa9009deec7b0c091d8edf2df2ec242ea35f61711e288bfd5fbd007aa24->enter($__internal_f33fcaa9009deec7b0c091d8edf2df2ec242ea35f61711e288bfd5fbd007aa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f33fcaa9009deec7b0c091d8edf2df2ec242ea35f61711e288bfd5fbd007aa24->leave($__internal_f33fcaa9009deec7b0c091d8edf2df2ec242ea35f61711e288bfd5fbd007aa24_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4a0828f2fe14c1c21b1c260a0180a20d97aabd5524a1b798e7dad56c3fcb7ec = $this->env->getExtension("native_profiler");
        $__internal_f4a0828f2fe14c1c21b1c260a0180a20d97aabd5524a1b798e7dad56c3fcb7ec->enter($__internal_f4a0828f2fe14c1c21b1c260a0180a20d97aabd5524a1b798e7dad56c3fcb7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_f4a0828f2fe14c1c21b1c260a0180a20d97aabd5524a1b798e7dad56c3fcb7ec->leave($__internal_f4a0828f2fe14c1c21b1c260a0180a20d97aabd5524a1b798e7dad56c3fcb7ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
