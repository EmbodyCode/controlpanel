<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_e391e7a4c604a17d736fb98f40dfacfc158f95e3c6beacb27bb75e7bd6906cca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_215a2ef2f6d008639d389aed0c625880773f54548a3f50e997c33228a3092d34 = $this->env->getExtension("native_profiler");
        $__internal_215a2ef2f6d008639d389aed0c625880773f54548a3f50e997c33228a3092d34->enter($__internal_215a2ef2f6d008639d389aed0c625880773f54548a3f50e997c33228a3092d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_215a2ef2f6d008639d389aed0c625880773f54548a3f50e997c33228a3092d34->leave($__internal_215a2ef2f6d008639d389aed0c625880773f54548a3f50e997c33228a3092d34_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_874cde20428c9efe46481ecf35abdf326cb16359fbd6b672d02881a402764401 = $this->env->getExtension("native_profiler");
        $__internal_874cde20428c9efe46481ecf35abdf326cb16359fbd6b672d02881a402764401->enter($__internal_874cde20428c9efe46481ecf35abdf326cb16359fbd6b672d02881a402764401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_874cde20428c9efe46481ecf35abdf326cb16359fbd6b672d02881a402764401->leave($__internal_874cde20428c9efe46481ecf35abdf326cb16359fbd6b672d02881a402764401_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
