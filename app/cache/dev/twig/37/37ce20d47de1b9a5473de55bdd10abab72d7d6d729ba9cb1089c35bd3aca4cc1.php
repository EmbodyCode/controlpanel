<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e14e2a10d6c9a9b40d12200de01bdac8a3beef08ff02d7dab9d76622a41f202d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_82fab961f3080b6e0903aa901a9d7461c41b671eb64cb6eb226f31c7720f7962 = $this->env->getExtension("native_profiler");
        $__internal_82fab961f3080b6e0903aa901a9d7461c41b671eb64cb6eb226f31c7720f7962->enter($__internal_82fab961f3080b6e0903aa901a9d7461c41b671eb64cb6eb226f31c7720f7962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82fab961f3080b6e0903aa901a9d7461c41b671eb64cb6eb226f31c7720f7962->leave($__internal_82fab961f3080b6e0903aa901a9d7461c41b671eb64cb6eb226f31c7720f7962_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aee3ce5ab4af0a04c388f26e592edb8bfeb801eebea80b0a3692ed7f395228e3 = $this->env->getExtension("native_profiler");
        $__internal_aee3ce5ab4af0a04c388f26e592edb8bfeb801eebea80b0a3692ed7f395228e3->enter($__internal_aee3ce5ab4af0a04c388f26e592edb8bfeb801eebea80b0a3692ed7f395228e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_aee3ce5ab4af0a04c388f26e592edb8bfeb801eebea80b0a3692ed7f395228e3->leave($__internal_aee3ce5ab4af0a04c388f26e592edb8bfeb801eebea80b0a3692ed7f395228e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
