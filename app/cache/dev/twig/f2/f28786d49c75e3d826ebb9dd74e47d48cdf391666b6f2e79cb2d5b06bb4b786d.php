<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9b16befce066bf9f0283f0b647ca0325f08dd1bf6ba73106d5bf9ab000d19ed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6087628bc491d272a57649fb6652c712df592f37ff09325e2a45e940ae0db4de = $this->env->getExtension("native_profiler");
        $__internal_6087628bc491d272a57649fb6652c712df592f37ff09325e2a45e940ae0db4de->enter($__internal_6087628bc491d272a57649fb6652c712df592f37ff09325e2a45e940ae0db4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6087628bc491d272a57649fb6652c712df592f37ff09325e2a45e940ae0db4de->leave($__internal_6087628bc491d272a57649fb6652c712df592f37ff09325e2a45e940ae0db4de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08ab1ed1be73ebcf8b1d6c8c13dff805bab7989a07f49f73da059a5a4110e1db = $this->env->getExtension("native_profiler");
        $__internal_08ab1ed1be73ebcf8b1d6c8c13dff805bab7989a07f49f73da059a5a4110e1db->enter($__internal_08ab1ed1be73ebcf8b1d6c8c13dff805bab7989a07f49f73da059a5a4110e1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_08ab1ed1be73ebcf8b1d6c8c13dff805bab7989a07f49f73da059a5a4110e1db->leave($__internal_08ab1ed1be73ebcf8b1d6c8c13dff805bab7989a07f49f73da059a5a4110e1db_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79df1f8a535b42127a8042902d8a2fdf37abe3be968ec3bb6b7cb2331f7c1125 = $this->env->getExtension("native_profiler");
        $__internal_79df1f8a535b42127a8042902d8a2fdf37abe3be968ec3bb6b7cb2331f7c1125->enter($__internal_79df1f8a535b42127a8042902d8a2fdf37abe3be968ec3bb6b7cb2331f7c1125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_79df1f8a535b42127a8042902d8a2fdf37abe3be968ec3bb6b7cb2331f7c1125->leave($__internal_79df1f8a535b42127a8042902d8a2fdf37abe3be968ec3bb6b7cb2331f7c1125_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e90b9d0c53c0ebcb768b832b2e1b7813985fa3f34a84e98c9e122d489431a184 = $this->env->getExtension("native_profiler");
        $__internal_e90b9d0c53c0ebcb768b832b2e1b7813985fa3f34a84e98c9e122d489431a184->enter($__internal_e90b9d0c53c0ebcb768b832b2e1b7813985fa3f34a84e98c9e122d489431a184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e90b9d0c53c0ebcb768b832b2e1b7813985fa3f34a84e98c9e122d489431a184->leave($__internal_e90b9d0c53c0ebcb768b832b2e1b7813985fa3f34a84e98c9e122d489431a184_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
