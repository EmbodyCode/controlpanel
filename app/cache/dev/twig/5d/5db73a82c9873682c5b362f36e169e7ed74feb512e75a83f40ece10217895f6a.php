<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_625bdb23dc8f1378f03efc3280a81b7d2324ceaeda8c9ab2f347b0c3a1f5d365 extends Twig_Template
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
        $__internal_9aaee247a0b531e57c78733958a504497d469bd3f9a58bece25a6fd5532a03c4 = $this->env->getExtension("native_profiler");
        $__internal_9aaee247a0b531e57c78733958a504497d469bd3f9a58bece25a6fd5532a03c4->enter($__internal_9aaee247a0b531e57c78733958a504497d469bd3f9a58bece25a6fd5532a03c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9aaee247a0b531e57c78733958a504497d469bd3f9a58bece25a6fd5532a03c4->leave($__internal_9aaee247a0b531e57c78733958a504497d469bd3f9a58bece25a6fd5532a03c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
