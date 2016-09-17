<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_497a0d40a02bee015f071c4a1833f74a0ea618e0be09d3dc26f339202a74c735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a9d6111e4c274348da99f5652888d651c497157038658a9f0ade4428f0c9e7d7 = $this->env->getExtension("native_profiler");
        $__internal_a9d6111e4c274348da99f5652888d651c497157038658a9f0ade4428f0c9e7d7->enter($__internal_a9d6111e4c274348da99f5652888d651c497157038658a9f0ade4428f0c9e7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9d6111e4c274348da99f5652888d651c497157038658a9f0ade4428f0c9e7d7->leave($__internal_a9d6111e4c274348da99f5652888d651c497157038658a9f0ade4428f0c9e7d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8d6057c6e3b177d0e61c52f6fe2b95c2ece72b68ec8d9ea5113710237c41922 = $this->env->getExtension("native_profiler");
        $__internal_f8d6057c6e3b177d0e61c52f6fe2b95c2ece72b68ec8d9ea5113710237c41922->enter($__internal_f8d6057c6e3b177d0e61c52f6fe2b95c2ece72b68ec8d9ea5113710237c41922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f8d6057c6e3b177d0e61c52f6fe2b95c2ece72b68ec8d9ea5113710237c41922->leave($__internal_f8d6057c6e3b177d0e61c52f6fe2b95c2ece72b68ec8d9ea5113710237c41922_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4127d173b52179d503bde716a2b6c187f659d18ddb5ce34b26077b298a79ffce = $this->env->getExtension("native_profiler");
        $__internal_4127d173b52179d503bde716a2b6c187f659d18ddb5ce34b26077b298a79ffce->enter($__internal_4127d173b52179d503bde716a2b6c187f659d18ddb5ce34b26077b298a79ffce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4127d173b52179d503bde716a2b6c187f659d18ddb5ce34b26077b298a79ffce->leave($__internal_4127d173b52179d503bde716a2b6c187f659d18ddb5ce34b26077b298a79ffce_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9066030753d404b8fb879c7081c9022a67ee901f6c1ccf3dac4658855fdc6a8 = $this->env->getExtension("native_profiler");
        $__internal_c9066030753d404b8fb879c7081c9022a67ee901f6c1ccf3dac4658855fdc6a8->enter($__internal_c9066030753d404b8fb879c7081c9022a67ee901f6c1ccf3dac4658855fdc6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c9066030753d404b8fb879c7081c9022a67ee901f6c1ccf3dac4658855fdc6a8->leave($__internal_c9066030753d404b8fb879c7081c9022a67ee901f6c1ccf3dac4658855fdc6a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
