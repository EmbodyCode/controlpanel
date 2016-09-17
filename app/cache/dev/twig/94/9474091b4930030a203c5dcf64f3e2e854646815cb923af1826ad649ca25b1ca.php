<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_010a0205d1b3cfb0d530eb15dc265bc609b1ee8b56f08a9b7d062edf644953a4 extends Twig_Template
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
        $__internal_45f134791779a547df24f30b683f26284314048948ec83cf86d9fb776a8bb546 = $this->env->getExtension("native_profiler");
        $__internal_45f134791779a547df24f30b683f26284314048948ec83cf86d9fb776a8bb546->enter($__internal_45f134791779a547df24f30b683f26284314048948ec83cf86d9fb776a8bb546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_45f134791779a547df24f30b683f26284314048948ec83cf86d9fb776a8bb546->leave($__internal_45f134791779a547df24f30b683f26284314048948ec83cf86d9fb776a8bb546_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
