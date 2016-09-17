<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_157d806c0bb11d5f0c743de810afa786242ccf130f1af06b70242b5ffe3df9bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_d56e07e1b0912c16708d75dc6c306a3b80996737f5ac2c0e026eac72d97419cf = $this->env->getExtension("native_profiler");
        $__internal_d56e07e1b0912c16708d75dc6c306a3b80996737f5ac2c0e026eac72d97419cf->enter($__internal_d56e07e1b0912c16708d75dc6c306a3b80996737f5ac2c0e026eac72d97419cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d56e07e1b0912c16708d75dc6c306a3b80996737f5ac2c0e026eac72d97419cf->leave($__internal_d56e07e1b0912c16708d75dc6c306a3b80996737f5ac2c0e026eac72d97419cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e43bfe1013c236f3bdbc917da001a1bdaba5efdde50efba8171a5a390d4a7f2 = $this->env->getExtension("native_profiler");
        $__internal_0e43bfe1013c236f3bdbc917da001a1bdaba5efdde50efba8171a5a390d4a7f2->enter($__internal_0e43bfe1013c236f3bdbc917da001a1bdaba5efdde50efba8171a5a390d4a7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_0e43bfe1013c236f3bdbc917da001a1bdaba5efdde50efba8171a5a390d4a7f2->leave($__internal_0e43bfe1013c236f3bdbc917da001a1bdaba5efdde50efba8171a5a390d4a7f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
