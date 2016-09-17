<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fdf80c84b8e163581d4c51d85c6447eaddd3067dde72116fb07d866b5e3c4fa7 extends Twig_Template
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
        $__internal_f7cdabfa623e9713185fde7325a76fda036db53499533712e811d07e29e19cdd = $this->env->getExtension("native_profiler");
        $__internal_f7cdabfa623e9713185fde7325a76fda036db53499533712e811d07e29e19cdd->enter($__internal_f7cdabfa623e9713185fde7325a76fda036db53499533712e811d07e29e19cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f7cdabfa623e9713185fde7325a76fda036db53499533712e811d07e29e19cdd->leave($__internal_f7cdabfa623e9713185fde7325a76fda036db53499533712e811d07e29e19cdd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
