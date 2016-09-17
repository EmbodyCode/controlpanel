<?php

/* ::base.html.twig */
class __TwigTemplate_bf24d13a38af3a968dee7755cd1d147aaeb2973439bdde896933b09b072f9845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34523c2238d06b3c7edf480431969db40de9eb8cef0334705fed576df260e40d = $this->env->getExtension("native_profiler");
        $__internal_34523c2238d06b3c7edf480431969db40de9eb8cef0334705fed576df260e40d->enter($__internal_34523c2238d06b3c7edf480431969db40de9eb8cef0334705fed576df260e40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_34523c2238d06b3c7edf480431969db40de9eb8cef0334705fed576df260e40d->leave($__internal_34523c2238d06b3c7edf480431969db40de9eb8cef0334705fed576df260e40d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_532a67b36c2dcfcec711e5dd7acb5a65b0c60eb403777c561ae6fd38c7b457d3 = $this->env->getExtension("native_profiler");
        $__internal_532a67b36c2dcfcec711e5dd7acb5a65b0c60eb403777c561ae6fd38c7b457d3->enter($__internal_532a67b36c2dcfcec711e5dd7acb5a65b0c60eb403777c561ae6fd38c7b457d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_532a67b36c2dcfcec711e5dd7acb5a65b0c60eb403777c561ae6fd38c7b457d3->leave($__internal_532a67b36c2dcfcec711e5dd7acb5a65b0c60eb403777c561ae6fd38c7b457d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37b5b0781524aadb80ce7dbf9da1e330df014274a328602318318acf88605252 = $this->env->getExtension("native_profiler");
        $__internal_37b5b0781524aadb80ce7dbf9da1e330df014274a328602318318acf88605252->enter($__internal_37b5b0781524aadb80ce7dbf9da1e330df014274a328602318318acf88605252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_37b5b0781524aadb80ce7dbf9da1e330df014274a328602318318acf88605252->leave($__internal_37b5b0781524aadb80ce7dbf9da1e330df014274a328602318318acf88605252_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f13afb100348e0ca968197c71076421e7ea441da853ed6b4c272a7d6a04c0ab = $this->env->getExtension("native_profiler");
        $__internal_2f13afb100348e0ca968197c71076421e7ea441da853ed6b4c272a7d6a04c0ab->enter($__internal_2f13afb100348e0ca968197c71076421e7ea441da853ed6b4c272a7d6a04c0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2f13afb100348e0ca968197c71076421e7ea441da853ed6b4c272a7d6a04c0ab->leave($__internal_2f13afb100348e0ca968197c71076421e7ea441da853ed6b4c272a7d6a04c0ab_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fc9f83b88a3a2f163da43e0fc3ff43e86232abaef8c692bf132b1fa1705901b = $this->env->getExtension("native_profiler");
        $__internal_3fc9f83b88a3a2f163da43e0fc3ff43e86232abaef8c692bf132b1fa1705901b->enter($__internal_3fc9f83b88a3a2f163da43e0fc3ff43e86232abaef8c692bf132b1fa1705901b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3fc9f83b88a3a2f163da43e0fc3ff43e86232abaef8c692bf132b1fa1705901b->leave($__internal_3fc9f83b88a3a2f163da43e0fc3ff43e86232abaef8c692bf132b1fa1705901b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
