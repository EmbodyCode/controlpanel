<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_a8f9f659102bc59e9b22c6d0b1cb340ff3eac43e05a85cbf97bb0ce17a2f2b10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7937c03f64f40378dd449c16415cdaf584a710ea9fece50a99e921c0c061e79a = $this->env->getExtension("native_profiler");
        $__internal_7937c03f64f40378dd449c16415cdaf584a710ea9fece50a99e921c0c061e79a->enter($__internal_7937c03f64f40378dd449c16415cdaf584a710ea9fece50a99e921c0c061e79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7937c03f64f40378dd449c16415cdaf584a710ea9fece50a99e921c0c061e79a->leave($__internal_7937c03f64f40378dd449c16415cdaf584a710ea9fece50a99e921c0c061e79a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2c299a431ded3134b58a43a42486a9601f3417721f3575390818e502065468b2 = $this->env->getExtension("native_profiler");
        $__internal_2c299a431ded3134b58a43a42486a9601f3417721f3575390818e502065468b2->enter($__internal_2c299a431ded3134b58a43a42486a9601f3417721f3575390818e502065468b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_2c299a431ded3134b58a43a42486a9601f3417721f3575390818e502065468b2->leave($__internal_2c299a431ded3134b58a43a42486a9601f3417721f3575390818e502065468b2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_be7bb96cdc0fc0dccbcac490e2505c4f9e4b4a7b282acaa1b3a38bed70ec2684 = $this->env->getExtension("native_profiler");
        $__internal_be7bb96cdc0fc0dccbcac490e2505c4f9e4b4a7b282acaa1b3a38bed70ec2684->enter($__internal_be7bb96cdc0fc0dccbcac490e2505c4f9e4b4a7b282acaa1b3a38bed70ec2684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_be7bb96cdc0fc0dccbcac490e2505c4f9e4b4a7b282acaa1b3a38bed70ec2684->leave($__internal_be7bb96cdc0fc0dccbcac490e2505c4f9e4b4a7b282acaa1b3a38bed70ec2684_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_56c259e6b0ba3138eb2fc827b592c10dd010f9273e3d72a1106e047c6d14b0d2 = $this->env->getExtension("native_profiler");
        $__internal_56c259e6b0ba3138eb2fc827b592c10dd010f9273e3d72a1106e047c6d14b0d2->enter($__internal_56c259e6b0ba3138eb2fc827b592c10dd010f9273e3d72a1106e047c6d14b0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_56c259e6b0ba3138eb2fc827b592c10dd010f9273e3d72a1106e047c6d14b0d2->leave($__internal_56c259e6b0ba3138eb2fc827b592c10dd010f9273e3d72a1106e047c6d14b0d2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
