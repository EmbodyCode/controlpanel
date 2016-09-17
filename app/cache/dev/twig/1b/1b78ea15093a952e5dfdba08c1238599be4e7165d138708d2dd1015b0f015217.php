<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9bad73b2425e73c143272f0c1fa946c719dbc7ba30f06f4461c765195877f095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c9a01226f37ec48ee1a603583e6f25686821bc32e5d016cf4b1b1fe68c3c27a = $this->env->getExtension("native_profiler");
        $__internal_7c9a01226f37ec48ee1a603583e6f25686821bc32e5d016cf4b1b1fe68c3c27a->enter($__internal_7c9a01226f37ec48ee1a603583e6f25686821bc32e5d016cf4b1b1fe68c3c27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c9a01226f37ec48ee1a603583e6f25686821bc32e5d016cf4b1b1fe68c3c27a->leave($__internal_7c9a01226f37ec48ee1a603583e6f25686821bc32e5d016cf4b1b1fe68c3c27a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34f9a9428fe1e3b009e907afc4d5bde72db74ef02f223aa3a0d8a87cfa84b92a = $this->env->getExtension("native_profiler");
        $__internal_34f9a9428fe1e3b009e907afc4d5bde72db74ef02f223aa3a0d8a87cfa84b92a->enter($__internal_34f9a9428fe1e3b009e907afc4d5bde72db74ef02f223aa3a0d8a87cfa84b92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_34f9a9428fe1e3b009e907afc4d5bde72db74ef02f223aa3a0d8a87cfa84b92a->leave($__internal_34f9a9428fe1e3b009e907afc4d5bde72db74ef02f223aa3a0d8a87cfa84b92a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77102397a0fadbe34a74fc93f60c454b30dcff11dd49c5f4b10d1aded05d160b = $this->env->getExtension("native_profiler");
        $__internal_77102397a0fadbe34a74fc93f60c454b30dcff11dd49c5f4b10d1aded05d160b->enter($__internal_77102397a0fadbe34a74fc93f60c454b30dcff11dd49c5f4b10d1aded05d160b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_77102397a0fadbe34a74fc93f60c454b30dcff11dd49c5f4b10d1aded05d160b->leave($__internal_77102397a0fadbe34a74fc93f60c454b30dcff11dd49c5f4b10d1aded05d160b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22f172aa142fbe49e587d5026144cd52a8709147322fc8017c60bdfbf9592539 = $this->env->getExtension("native_profiler");
        $__internal_22f172aa142fbe49e587d5026144cd52a8709147322fc8017c60bdfbf9592539->enter($__internal_22f172aa142fbe49e587d5026144cd52a8709147322fc8017c60bdfbf9592539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_22f172aa142fbe49e587d5026144cd52a8709147322fc8017c60bdfbf9592539->leave($__internal_22f172aa142fbe49e587d5026144cd52a8709147322fc8017c60bdfbf9592539_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
