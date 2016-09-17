<?php

/* AppBundle:Admin:login.html.twig */
class __TwigTemplate_4217be9fe57ae53e72fb53223a34906f4dd5132598d69a2768c7bf46d31dd8a4 extends Twig_Template
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
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 11
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
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
        return array (  55 => 15,  51 => 14,  48 => 13,  42 => 11,  39 => 10,  33 => 9,  27 => 6,  20 => 1,);
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
