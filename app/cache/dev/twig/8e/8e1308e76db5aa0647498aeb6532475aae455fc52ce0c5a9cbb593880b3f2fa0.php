<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_96736f91c9531092a79ffff0df3196004bd375bf965eadf37505400b79e19a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle:Configurator:form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74103163196804f954253317f2049b1a1c9d7f4acff4c3141791d389500b514f = $this->env->getExtension("native_profiler");
        $__internal_74103163196804f954253317f2049b1a1c9d7f4acff4c3141791d389500b514f->enter($__internal_74103163196804f954253317f2049b1a1c9d7f4acff4c3141791d389500b514f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74103163196804f954253317f2049b1a1c9d7f4acff4c3141791d389500b514f->leave($__internal_74103163196804f954253317f2049b1a1c9d7f4acff4c3141791d389500b514f_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_a2f0afe8735c033e30a0bf33501eb85224b53e2729d2f989fd1d7d82c885ed9b = $this->env->getExtension("native_profiler");
        $__internal_a2f0afe8735c033e30a0bf33501eb85224b53e2729d2f989fd1d7d82c885ed9b->enter($__internal_a2f0afe8735c033e30a0bf33501eb85224b53e2729d2f989fd1d7d82c885ed9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a2f0afe8735c033e30a0bf33501eb85224b53e2729d2f989fd1d7d82c885ed9b->leave($__internal_a2f0afe8735c033e30a0bf33501eb85224b53e2729d2f989fd1d7d82c885ed9b_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_12bd3fc696f9a4d4c355ebf3e5c8f73ec3a6697290cac94e86f85528f3fb2f77 = $this->env->getExtension("native_profiler");
        $__internal_12bd3fc696f9a4d4c355ebf3e5c8f73ec3a6697290cac94e86f85528f3fb2f77->enter($__internal_12bd3fc696f9a4d4c355ebf3e5c8f73ec3a6697290cac94e86f85528f3fb2f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_12bd3fc696f9a4d4c355ebf3e5c8f73ec3a6697290cac94e86f85528f3fb2f77->leave($__internal_12bd3fc696f9a4d4c355ebf3e5c8f73ec3a6697290cac94e86f85528f3fb2f77_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8dd0ea77328b019b419436bcdf5e3903e52c9dd33722b48d0e60a050238a4506 = $this->env->getExtension("native_profiler");
        $__internal_8dd0ea77328b019b419436bcdf5e3903e52c9dd33722b48d0e60a050238a4506->enter($__internal_8dd0ea77328b019b419436bcdf5e3903e52c9dd33722b48d0e60a050238a4506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_8dd0ea77328b019b419436bcdf5e3903e52c9dd33722b48d0e60a050238a4506->leave($__internal_8dd0ea77328b019b419436bcdf5e3903e52c9dd33722b48d0e60a050238a4506_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "form_div_layout.html.twig" %}*/
/* */
/* {% block form_rows %}*/
/*     <div class="symfony-form-errors">*/
/*         {{ form_errors(form) }}*/
/*     </div>*/
/*     {% for child in form %}*/
/*         {{ form_row(child) }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block form_row %}*/
/*     <div class="symfony-form-row">*/
/*         {{ form_label(form) }}*/
/*         <div class="symfony-form-field">*/
/*             {{ form_widget(form) }}*/
/*             <div class="symfony-form-errors">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form_label %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     <label for="{{ id }}">*/
/*         {{ label|trans }}*/
/*         {% if required %}*/
/*             <span class="symfony-form-required" title="This field is required">*</span>*/
/*         {% endif %}*/
/*     </label>*/
/* {% endblock %}*/
/* */
