<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bda8d8a130b17bd51ec3a447c59ce79149079989e46cb714dd4f7d3bab2540c5 extends Twig_Template
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
        $__internal_6d5d5a13124b721c3dcc92bcff78e4d6748f01c001606941abad3e20937472a4 = $this->env->getExtension("native_profiler");
        $__internal_6d5d5a13124b721c3dcc92bcff78e4d6748f01c001606941abad3e20937472a4->enter($__internal_6d5d5a13124b721c3dcc92bcff78e4d6748f01c001606941abad3e20937472a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6d5d5a13124b721c3dcc92bcff78e4d6748f01c001606941abad3e20937472a4->leave($__internal_6d5d5a13124b721c3dcc92bcff78e4d6748f01c001606941abad3e20937472a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
