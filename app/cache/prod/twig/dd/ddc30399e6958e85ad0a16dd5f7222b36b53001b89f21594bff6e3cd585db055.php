<?php

/* AppBundle:Admin:changepass.html.twig */
class __TwigTemplate_041c1527966d0e51fe8286b261f001784d39759566f46b896669c97817c01aa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Admin:layout.html.twig", "AppBundle:Admin:changepass.html.twig", 1);
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
        // line 4
        echo "
    <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
         <h2 class=\"sub-header\">Изменение пароля пользователя ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</h2>  
            <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("changepass", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\" method=\"POST\">
                <input type=\"password\" name=\"newpass\" placeholder=\"Новый пароль\"
                   required autofocus>
                <input type=\"submit\" value=\"Изменить\"/>
            </form> 
    </div>  
 ";
    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:changepass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:Admin:layout.html.twig" %}*/
/* */
/* {% block containerUsers %}*/
/* */
/*     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*          <h2 class="sub-header">Изменение пароля пользователя {{user.username}}</h2>  */
/*             <form action="{{path('changepass', { 'id' : id }) }}" method="POST">*/
/*                 <input type="password" name="newpass" placeholder="Новый пароль"*/
/*                    required autofocus>*/
/*                 <input type="submit" value="Изменить"/>*/
/*             </form> */
/*     </div>  */
/*  {% endblock %}*/
