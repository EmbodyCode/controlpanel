<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_734de2ce9835fc7e20c4b1cfe29dbb0d4754aeea05ff326dbaf675ef4c0a6895 extends Twig_Template
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
        $__internal_a356cd8a3b72b43048b25c70d42314e7163d0d85d8638cbff4be73c3162b4188 = $this->env->getExtension("native_profiler");
        $__internal_a356cd8a3b72b43048b25c70d42314e7163d0d85d8638cbff4be73c3162b4188->enter($__internal_a356cd8a3b72b43048b25c70d42314e7163d0d85d8638cbff4be73c3162b4188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a356cd8a3b72b43048b25c70d42314e7163d0d85d8638cbff4be73c3162b4188->leave($__internal_a356cd8a3b72b43048b25c70d42314e7163d0d85d8638cbff4be73c3162b4188_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
