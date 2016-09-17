<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_80b01e0f5cc10266e91bed9b9233ef0b55bbf1fc5e30dae796cc23767ee99137 extends Twig_Template
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
        $__internal_ed90b41d77de0e5993c666afba2e307782863140ff5895aa71bc54eb53ccfaf0 = $this->env->getExtension("native_profiler");
        $__internal_ed90b41d77de0e5993c666afba2e307782863140ff5895aa71bc54eb53ccfaf0->enter($__internal_ed90b41d77de0e5993c666afba2e307782863140ff5895aa71bc54eb53ccfaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed90b41d77de0e5993c666afba2e307782863140ff5895aa71bc54eb53ccfaf0->leave($__internal_ed90b41d77de0e5993c666afba2e307782863140ff5895aa71bc54eb53ccfaf0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_155646a30d47009d9ac9d6857f861e7841e5c8154085d6c2f74ec62ccc6565ca = $this->env->getExtension("native_profiler");
        $__internal_155646a30d47009d9ac9d6857f861e7841e5c8154085d6c2f74ec62ccc6565ca->enter($__internal_155646a30d47009d9ac9d6857f861e7841e5c8154085d6c2f74ec62ccc6565ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_155646a30d47009d9ac9d6857f861e7841e5c8154085d6c2f74ec62ccc6565ca->leave($__internal_155646a30d47009d9ac9d6857f861e7841e5c8154085d6c2f74ec62ccc6565ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf3de49ee56aeab1cd7615b2a96d62151eca572d3fa973674638a212b1ea6fda = $this->env->getExtension("native_profiler");
        $__internal_cf3de49ee56aeab1cd7615b2a96d62151eca572d3fa973674638a212b1ea6fda->enter($__internal_cf3de49ee56aeab1cd7615b2a96d62151eca572d3fa973674638a212b1ea6fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cf3de49ee56aeab1cd7615b2a96d62151eca572d3fa973674638a212b1ea6fda->leave($__internal_cf3de49ee56aeab1cd7615b2a96d62151eca572d3fa973674638a212b1ea6fda_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_18ab7a769d16bfa2810bad383c5d8bc7ef632596fa7a0827e108f7b0abf8b420 = $this->env->getExtension("native_profiler");
        $__internal_18ab7a769d16bfa2810bad383c5d8bc7ef632596fa7a0827e108f7b0abf8b420->enter($__internal_18ab7a769d16bfa2810bad383c5d8bc7ef632596fa7a0827e108f7b0abf8b420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_18ab7a769d16bfa2810bad383c5d8bc7ef632596fa7a0827e108f7b0abf8b420->leave($__internal_18ab7a769d16bfa2810bad383c5d8bc7ef632596fa7a0827e108f7b0abf8b420_prof);

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
