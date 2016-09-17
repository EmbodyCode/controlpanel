<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0a4efaa7780ae80e48d31c506da857994ddc864a630e330ed1a5b07969352d1e extends Twig_Template
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
        $__internal_4b9be830af75c94dbd3eb579c182066dbee32b296db9054f582f71373020c0ee = $this->env->getExtension("native_profiler");
        $__internal_4b9be830af75c94dbd3eb579c182066dbee32b296db9054f582f71373020c0ee->enter($__internal_4b9be830af75c94dbd3eb579c182066dbee32b296db9054f582f71373020c0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4b9be830af75c94dbd3eb579c182066dbee32b296db9054f582f71373020c0ee->leave($__internal_4b9be830af75c94dbd3eb579c182066dbee32b296db9054f582f71373020c0ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
