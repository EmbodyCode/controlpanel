<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ec9fb5d216be8a2c5043e2c7374c60420d0fb62cd825eede59e71f6881e11b59 extends Twig_Template
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
        $__internal_1b6c5ef1047560be0a6320325ed677bac71a49a1e18ac9b0fdb5a8d544f8c21b = $this->env->getExtension("native_profiler");
        $__internal_1b6c5ef1047560be0a6320325ed677bac71a49a1e18ac9b0fdb5a8d544f8c21b->enter($__internal_1b6c5ef1047560be0a6320325ed677bac71a49a1e18ac9b0fdb5a8d544f8c21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1b6c5ef1047560be0a6320325ed677bac71a49a1e18ac9b0fdb5a8d544f8c21b->leave($__internal_1b6c5ef1047560be0a6320325ed677bac71a49a1e18ac9b0fdb5a8d544f8c21b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
