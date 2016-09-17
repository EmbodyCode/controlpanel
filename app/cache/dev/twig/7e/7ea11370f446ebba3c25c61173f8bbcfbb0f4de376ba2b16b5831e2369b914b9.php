<?php

/* AppBundle:Admin:edit.html.twig */
class __TwigTemplate_af8dfcf22a9316f835d6edd67350a61bfad74a12e7ddf93352ad7c33e6e10e3d extends Twig_Template
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
        $__internal_54d4783a66d9543195105345dcaa2844a91b68af4f21eaf234396bf605896bbf = $this->env->getExtension("native_profiler");
        $__internal_54d4783a66d9543195105345dcaa2844a91b68af4f21eaf234396bf605896bbf->enter($__internal_54d4783a66d9543195105345dcaa2844a91b68af4f21eaf234396bf605896bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d4783a66d9543195105345dcaa2844a91b68af4f21eaf234396bf605896bbf->leave($__internal_54d4783a66d9543195105345dcaa2844a91b68af4f21eaf234396bf605896bbf_prof);

    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
        $__internal_8baf2aac40818ba41d25c353da40d9e6dba789c55cd41cc0a8f19e0ff97b8bf9 = $this->env->getExtension("native_profiler");
        $__internal_8baf2aac40818ba41d25c353da40d9e6dba789c55cd41cc0a8f19e0ff97b8bf9->enter($__internal_8baf2aac40818ba41d25c353da40d9e6dba789c55cd41cc0a8f19e0ff97b8bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containerUsers"));

        // line 4
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
        <h2 class=\"sub-header\">Изменение данных пользователя</h2>
        <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"POST\">
            <label>Имя пользователя</label>
            <input type=\"text\" name =\"username\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "\"><br>
            <label>Электронный адрес</label>
            <input type=\"email\" name=\"email\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\">
            <br><a href=\"/changepassword/";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">Изменить пароль</a>
            <br><br>
            <input type=\"submit\" value=\"Сохранить\">
        </form>   
        ";
        // line 15
        if (array_key_exists("message", $context)) {
            // line 16
            echo "            <font color=\"green\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</font>
        ";
        }
        // line 18
        echo "    </div>
 
";
        
        $__internal_8baf2aac40818ba41d25c353da40d9e6dba789c55cd41cc0a8f19e0ff97b8bf9->leave($__internal_8baf2aac40818ba41d25c353da40d9e6dba789c55cd41cc0a8f19e0ff97b8bf9_prof);

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
        return array (  73 => 18,  67 => 16,  65 => 15,  58 => 11,  54 => 10,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
