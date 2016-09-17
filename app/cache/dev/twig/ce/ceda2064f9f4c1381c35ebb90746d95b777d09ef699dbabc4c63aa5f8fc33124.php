<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_37919368ade185902fe15c7c1f3bc7555437b6bc5071ab88abd7daa5565b1978 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c06dc466a6bfbedae99bcd963be031d37b65008ea83c123d2e12b3b60c5dfc03 = $this->env->getExtension("native_profiler");
        $__internal_c06dc466a6bfbedae99bcd963be031d37b65008ea83c123d2e12b3b60c5dfc03->enter($__internal_c06dc466a6bfbedae99bcd963be031d37b65008ea83c123d2e12b3b60c5dfc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c06dc466a6bfbedae99bcd963be031d37b65008ea83c123d2e12b3b60c5dfc03->leave($__internal_c06dc466a6bfbedae99bcd963be031d37b65008ea83c123d2e12b3b60c5dfc03_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2abd4ec1f1137b1182ca3423107fe3543c752df6933f0f336e4f2ad1a59e141 = $this->env->getExtension("native_profiler");
        $__internal_d2abd4ec1f1137b1182ca3423107fe3543c752df6933f0f336e4f2ad1a59e141->enter($__internal_d2abd4ec1f1137b1182ca3423107fe3543c752df6933f0f336e4f2ad1a59e141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d2abd4ec1f1137b1182ca3423107fe3543c752df6933f0f336e4f2ad1a59e141->leave($__internal_d2abd4ec1f1137b1182ca3423107fe3543c752df6933f0f336e4f2ad1a59e141_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
