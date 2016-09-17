<?php

/* AppBundle:Admin:edit.html.twig */
class __TwigTemplate_2d4ce47a953ed70e25259b37a02c812b0209186f5d7d2e566eb4477dda916c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Admin:layout.html.twig", "AppBundle:Admin:edit.html.twig", 1);
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
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
        <h2 class=\"sub-header\">Изменение данных пользователя</h2>
        <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\" method=\"POST\">
            <label>Имя пользователя</label>
            <input type=\"text\" name =\"username\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "\"><br>
            <label>Электронный адрес</label>
            <input type=\"email\" name=\"email\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\">
            <br><a href=\"/changepassword/";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">Изменить пароль</a>
            <br><br>
            <input type=\"submit\" value=\"Сохранить\">
        </form>   
        ";
        // line 15
        if (array_key_exists("message", $context)) {
            // line 16
            echo "            <font color=\"green\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</font>
        ";
        }
        // line 18
        echo "    </div>
 
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  58 => 16,  56 => 15,  49 => 11,  45 => 10,  40 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:Admin:layout.html.twig" %}*/
/* */
/* {% block containerUsers %}*/
/*     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*         <h2 class="sub-header">Изменение данных пользователя</h2>*/
/*         <form action="{{ path('edit', { 'id' : id }) }}" method="POST">*/
/*             <label>Имя пользователя</label>*/
/*             <input type="text" name ="username" value="{{user.username}}"><br>*/
/*             <label>Электронный адрес</label>*/
/*             <input type="email" name="email" value="{{user.email}}">*/
/*             <br><a href="/changepassword/{{user.id}}">Изменить пароль</a>*/
/*             <br><br>*/
/*             <input type="submit" value="Сохранить">*/
/*         </form>   */
/*         {% if message is defined %}*/
/*             <font color="green">{{message}}</font>*/
/*         {% endif %}*/
/*     </div>*/
/*  */
/* {% endblock %}    */
