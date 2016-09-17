<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4497d10655c57518e77c9bdd4e6386b921a703a5c5c3e7792f3d0b183ce7a620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dd8da41c27fc6ecf001712cfb6db296e6de72fb57907e80c8569224b39f83f9 = $this->env->getExtension("native_profiler");
        $__internal_6dd8da41c27fc6ecf001712cfb6db296e6de72fb57907e80c8569224b39f83f9->enter($__internal_6dd8da41c27fc6ecf001712cfb6db296e6de72fb57907e80c8569224b39f83f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6dd8da41c27fc6ecf001712cfb6db296e6de72fb57907e80c8569224b39f83f9->leave($__internal_6dd8da41c27fc6ecf001712cfb6db296e6de72fb57907e80c8569224b39f83f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
