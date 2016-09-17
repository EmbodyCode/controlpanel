<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_16f1d7ba5c6dca2905ae77d88ee721d701a2e7ab2263da50f0cb227a594ae281 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27bed94ad8c289de4fe65bcc9b964deb3af57b44e5b7df67519661a0020153ed = $this->env->getExtension("native_profiler");
        $__internal_27bed94ad8c289de4fe65bcc9b964deb3af57b44e5b7df67519661a0020153ed->enter($__internal_27bed94ad8c289de4fe65bcc9b964deb3af57b44e5b7df67519661a0020153ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27bed94ad8c289de4fe65bcc9b964deb3af57b44e5b7df67519661a0020153ed->leave($__internal_27bed94ad8c289de4fe65bcc9b964deb3af57b44e5b7df67519661a0020153ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c4f9352f01d3fae06684cafabde8f69d8b08e9490c9d84e8a00a04bd8cea5ee = $this->env->getExtension("native_profiler");
        $__internal_3c4f9352f01d3fae06684cafabde8f69d8b08e9490c9d84e8a00a04bd8cea5ee->enter($__internal_3c4f9352f01d3fae06684cafabde8f69d8b08e9490c9d84e8a00a04bd8cea5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3c4f9352f01d3fae06684cafabde8f69d8b08e9490c9d84e8a00a04bd8cea5ee->leave($__internal_3c4f9352f01d3fae06684cafabde8f69d8b08e9490c9d84e8a00a04bd8cea5ee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d83d594344f31462bef3b692b41062aa18242667eaaf0264796745e091ea9f72 = $this->env->getExtension("native_profiler");
        $__internal_d83d594344f31462bef3b692b41062aa18242667eaaf0264796745e091ea9f72->enter($__internal_d83d594344f31462bef3b692b41062aa18242667eaaf0264796745e091ea9f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d83d594344f31462bef3b692b41062aa18242667eaaf0264796745e091ea9f72->leave($__internal_d83d594344f31462bef3b692b41062aa18242667eaaf0264796745e091ea9f72_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
