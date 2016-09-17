<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ab1aad3118d9bf7120de0d6c61485fa77bff4187938230337b2982863186a8b1 extends Twig_Template
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
        $__internal_2148f60f01fe9104b1b56a62c2378c628d9944865e51072aa46861dfdca5d402 = $this->env->getExtension("native_profiler");
        $__internal_2148f60f01fe9104b1b56a62c2378c628d9944865e51072aa46861dfdca5d402->enter($__internal_2148f60f01fe9104b1b56a62c2378c628d9944865e51072aa46861dfdca5d402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2148f60f01fe9104b1b56a62c2378c628d9944865e51072aa46861dfdca5d402->leave($__internal_2148f60f01fe9104b1b56a62c2378c628d9944865e51072aa46861dfdca5d402_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
