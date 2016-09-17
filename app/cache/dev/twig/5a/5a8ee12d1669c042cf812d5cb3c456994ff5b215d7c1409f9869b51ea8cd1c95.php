<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e8d3a8961de28119f859fe845521b15bd22bb56c35ed291a401e32b3d04b4804 extends Twig_Template
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
        $__internal_6eaf6f8757611aed246c39c8d56bacf5cec1c1e71846d805f3d43c720c56b910 = $this->env->getExtension("native_profiler");
        $__internal_6eaf6f8757611aed246c39c8d56bacf5cec1c1e71846d805f3d43c720c56b910->enter($__internal_6eaf6f8757611aed246c39c8d56bacf5cec1c1e71846d805f3d43c720c56b910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6eaf6f8757611aed246c39c8d56bacf5cec1c1e71846d805f3d43c720c56b910->leave($__internal_6eaf6f8757611aed246c39c8d56bacf5cec1c1e71846d805f3d43c720c56b910_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
