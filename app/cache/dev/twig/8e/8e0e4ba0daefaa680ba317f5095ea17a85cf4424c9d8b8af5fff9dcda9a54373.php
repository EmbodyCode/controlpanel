<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a3d20a361519a34cd08dc4dba272ac499d2f6c8de8694299db72bc5f9ea914ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71dffd7a74dcd7c12d704f223fd18b72f984932ec63e9a8c4abbfda24d2bd94e = $this->env->getExtension("native_profiler");
        $__internal_71dffd7a74dcd7c12d704f223fd18b72f984932ec63e9a8c4abbfda24d2bd94e->enter($__internal_71dffd7a74dcd7c12d704f223fd18b72f984932ec63e9a8c4abbfda24d2bd94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_71dffd7a74dcd7c12d704f223fd18b72f984932ec63e9a8c4abbfda24d2bd94e->leave($__internal_71dffd7a74dcd7c12d704f223fd18b72f984932ec63e9a8c4abbfda24d2bd94e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d490c1a864fb16a861c1699d566258c4a7edd05be87af70b0d0bb79e91612f5 = $this->env->getExtension("native_profiler");
        $__internal_6d490c1a864fb16a861c1699d566258c4a7edd05be87af70b0d0bb79e91612f5->enter($__internal_6d490c1a864fb16a861c1699d566258c4a7edd05be87af70b0d0bb79e91612f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6d490c1a864fb16a861c1699d566258c4a7edd05be87af70b0d0bb79e91612f5->leave($__internal_6d490c1a864fb16a861c1699d566258c4a7edd05be87af70b0d0bb79e91612f5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
