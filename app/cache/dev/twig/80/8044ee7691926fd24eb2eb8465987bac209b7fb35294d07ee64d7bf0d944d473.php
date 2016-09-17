<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a3759cbbc2919e1a69026fe6058120046f50ba074de5e06444148ba36be6b30f extends Twig_Template
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
        $__internal_a8d465cd2c4e49ab95a7c8eb017ffbadb0f7d5a04af86e985d9df8702c770d07 = $this->env->getExtension("native_profiler");
        $__internal_a8d465cd2c4e49ab95a7c8eb017ffbadb0f7d5a04af86e985d9df8702c770d07->enter($__internal_a8d465cd2c4e49ab95a7c8eb017ffbadb0f7d5a04af86e985d9df8702c770d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a8d465cd2c4e49ab95a7c8eb017ffbadb0f7d5a04af86e985d9df8702c770d07->leave($__internal_a8d465cd2c4e49ab95a7c8eb017ffbadb0f7d5a04af86e985d9df8702c770d07_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
