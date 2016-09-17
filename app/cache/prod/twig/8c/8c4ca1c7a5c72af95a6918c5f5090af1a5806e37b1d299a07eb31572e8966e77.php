<?php

/* AppBundle:Admin:index.html.twig */
class __TwigTemplate_12407f7fa79d769ad9c3b8219ca4b2b253ac0996296feb0c6396066318bd32f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Admin:layout.html.twig", "AppBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
            'containerUsers' => array($this, 'block_containerUsers'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
        echo " 
      <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
          <center><h2 class=\"sub-header\">Добро пожаловать, ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</h2></center>
            ";
        // line 6
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 7
            echo "                <h4 class=\"sub-header\">Вы авторизовались как Разработчик</h4>
            ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "                <h4 class=\"sub-header\">Вы авторизовались как Администратор</h4>
            ";
        }
        // line 11
        echo "      </div>
      
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  44 => 9,  40 => 7,  38 => 6,  34 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:Admin:layout.html.twig" %}*/
/* */
/* {% block containerUsers %} */
/*       <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*           <center><h2 class="sub-header">Добро пожаловать, {{user.username}}</h2></center>*/
/*             {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                 <h4 class="sub-header">Вы авторизовались как Разработчик</h4>*/
/*             {% elseif is_granted('ROLE_ADMIN') %}*/
/*                 <h4 class="sub-header">Вы авторизовались как Администратор</h4>*/
/*             {% endif %}*/
/*       </div>*/
/*       */
/* {% endblock %}*/
