<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_ed9470cca9ef20fc634af860dbe65f1d22e2b4b18f399633c0f4ef9b1919b002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73482614e10abf34084d1432a3c5289fa2c05f375eaa4044c8e895e3f831fcc4 = $this->env->getExtension("native_profiler");
        $__internal_73482614e10abf34084d1432a3c5289fa2c05f375eaa4044c8e895e3f831fcc4->enter($__internal_73482614e10abf34084d1432a3c5289fa2c05f375eaa4044c8e895e3f831fcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73482614e10abf34084d1432a3c5289fa2c05f375eaa4044c8e895e3f831fcc4->leave($__internal_73482614e10abf34084d1432a3c5289fa2c05f375eaa4044c8e895e3f831fcc4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f922ad19d0d0261cd648cd4fea6aab50b7d9fca22c6639e19f85762f72fd8e1b = $this->env->getExtension("native_profiler");
        $__internal_f922ad19d0d0261cd648cd4fea6aab50b7d9fca22c6639e19f85762f72fd8e1b->enter($__internal_f922ad19d0d0261cd648cd4fea6aab50b7d9fca22c6639e19f85762f72fd8e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f922ad19d0d0261cd648cd4fea6aab50b7d9fca22c6639e19f85762f72fd8e1b->leave($__internal_f922ad19d0d0261cd648cd4fea6aab50b7d9fca22c6639e19f85762f72fd8e1b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_187830df425cf814bdb7d77f0d1e4dc9eb96b2347be9176358fa4101ea4165cf = $this->env->getExtension("native_profiler");
        $__internal_187830df425cf814bdb7d77f0d1e4dc9eb96b2347be9176358fa4101ea4165cf->enter($__internal_187830df425cf814bdb7d77f0d1e4dc9eb96b2347be9176358fa4101ea4165cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_187830df425cf814bdb7d77f0d1e4dc9eb96b2347be9176358fa4101ea4165cf->leave($__internal_187830df425cf814bdb7d77f0d1e4dc9eb96b2347be9176358fa4101ea4165cf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e30cfb047a3c351e8e2a9f8487b4535c0eb0c7ecee5a66bf4395777f15d6f236 = $this->env->getExtension("native_profiler");
        $__internal_e30cfb047a3c351e8e2a9f8487b4535c0eb0c7ecee5a66bf4395777f15d6f236->enter($__internal_e30cfb047a3c351e8e2a9f8487b4535c0eb0c7ecee5a66bf4395777f15d6f236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_e30cfb047a3c351e8e2a9f8487b4535c0eb0c7ecee5a66bf4395777f15d6f236->leave($__internal_e30cfb047a3c351e8e2a9f8487b4535c0eb0c7ecee5a66bf4395777f15d6f236_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d4bdf384c7cec21b837d0bac97f4a4169c3e9ec85aebce65208fa06f0ccd3a54 = $this->env->getExtension("native_profiler");
        $__internal_d4bdf384c7cec21b837d0bac97f4a4169c3e9ec85aebce65208fa06f0ccd3a54->enter($__internal_d4bdf384c7cec21b837d0bac97f4a4169c3e9ec85aebce65208fa06f0ccd3a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d4bdf384c7cec21b837d0bac97f4a4169c3e9ec85aebce65208fa06f0ccd3a54->leave($__internal_d4bdf384c7cec21b837d0bac97f4a4169c3e9ec85aebce65208fa06f0ccd3a54_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
