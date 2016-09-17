<?php

/* AppBundle:Admin:login.html.twig */
class __TwigTemplate_18b8a44fe58044968a18b9d96f68ebb474aae5cf090859fed5a54d0cb8ae9f36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6095ad89104b33eab7c046a9b8f57350a1f0d74ddb0b0753fee8faef4bba1a6 = $this->env->getExtension("native_profiler");
        $__internal_a6095ad89104b33eab7c046a9b8f57350a1f0d74ddb0b0753fee8faef4bba1a6->enter($__internal_a6095ad89104b33eab7c046a9b8f57350a1f0d74ddb0b0753fee8faef4bba1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
 <head>
  <meta charset=\"utf-8\">
  <title>STUDY University</title>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/style/auth-style.css"), "html", null, true);
        echo "\">
 </head>
 <body>
     ";
        // line 9
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_a6095ad89104b33eab7c046a9b8f57350a1f0d74ddb0b0753fee8faef4bba1a6->leave($__internal_a6095ad89104b33eab7c046a9b8f57350a1f0d74ddb0b0753fee8faef4bba1a6_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcb46b6ce74113b085216c279bb024d0a8a1ab776552d26dc87221f0e7d1cd57 = $this->env->getExtension("native_profiler");
        $__internal_fcb46b6ce74113b085216c279bb024d0a8a1ab776552d26dc87221f0e7d1cd57->enter($__internal_fcb46b6ce74113b085216c279bb024d0a8a1ab776552d26dc87221f0e7d1cd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "        ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 13
        echo "   <div id=\"auth-form\">
       <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
            <input type=\"name\" id=\"username\" name=\"_username\" required autofocus
                   placeholder=\"Логин\"/>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" 
                   placeholder=\"Пароль\"/>
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Войти\" />
   </div>
   <footer>
     <ul>
       <li><a href=\"#\">О проекте</a></li>
       <li><a href=\"#\">Как зарегистрироваться?</a></li>
       <li><a href=\"#\">Политика использования</a></li>
       <li><a href=\"#\">Политика конфиденциальности</a></li>
       <li><a href=\"#\">Техническая поддержка</a></li>
     </ul>
     <p>STUDY &copy; 2016</p>
   </footer>
 </body>
</html>
     ";
        
        $__internal_fcb46b6ce74113b085216c279bb024d0a8a1ab776552d26dc87221f0e7d1cd57->leave($__internal_fcb46b6ce74113b085216c279bb024d0a8a1ab776552d26dc87221f0e7d1cd57_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  60 => 14,  57 => 13,  51 => 11,  48 => 10,  36 => 9,  30 => 6,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*  <head>*/
/*   <meta charset="utf-8">*/
/*   <title>STUDY University</title>*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('web/style/auth-style.css')}}">*/
/*  </head>*/
/*  <body>*/
/*      {% block fos_user_content %}*/
/*         {% if error %}*/
/*             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*         {% endif %}*/
/*    <div id="auth-form">*/
/*        <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*             <input type="name" id="username" name="_username" required autofocus*/
/*                    placeholder="Логин"/>*/
/*             <input type="password" id="password" name="_password" required="required" */
/*                    placeholder="Пароль"/>*/
/*             <input type="submit" id="_submit" name="_submit" value="Войти" />*/
/*    </div>*/
/*    <footer>*/
/*      <ul>*/
/*        <li><a href="#">О проекте</a></li>*/
/*        <li><a href="#">Как зарегистрироваться?</a></li>*/
/*        <li><a href="#">Политика использования</a></li>*/
/*        <li><a href="#">Политика конфиденциальности</a></li>*/
/*        <li><a href="#">Техническая поддержка</a></li>*/
/*      </ul>*/
/*      <p>STUDY &copy; 2016</p>*/
/*    </footer>*/
/*  </body>*/
/* </html>*/
/*      {% endblock %}*/
/* */
