<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_8ea7745cab288f4c5bf1c0e749540bedee8878d30190942b7670754055bf8d80 extends Twig_Template
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
        $__internal_829a854c16920804d82f5e1d36ad04951001bf5dcee83815759f17c1400c2023 = $this->env->getExtension("native_profiler");
        $__internal_829a854c16920804d82f5e1d36ad04951001bf5dcee83815759f17c1400c2023->enter($__internal_829a854c16920804d82f5e1d36ad04951001bf5dcee83815759f17c1400c2023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_829a854c16920804d82f5e1d36ad04951001bf5dcee83815759f17c1400c2023->leave($__internal_829a854c16920804d82f5e1d36ad04951001bf5dcee83815759f17c1400c2023_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
