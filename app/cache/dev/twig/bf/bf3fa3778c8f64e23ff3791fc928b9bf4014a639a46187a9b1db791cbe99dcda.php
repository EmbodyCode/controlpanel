<?php

/* AppBundle:Admin:changepass.html.twig */
class __TwigTemplate_cbf49024704f875df80260717a92521257856c76b8426a8ae6495f779c09cfd1 extends Twig_Template
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
        $__internal_cc1a29ea331f5bad26afd2878418ee0b19b130f6b3e648a98240b77aa8ad377c = $this->env->getExtension("native_profiler");
        $__internal_cc1a29ea331f5bad26afd2878418ee0b19b130f6b3e648a98240b77aa8ad377c->enter($__internal_cc1a29ea331f5bad26afd2878418ee0b19b130f6b3e648a98240b77aa8ad377c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:changepass.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc1a29ea331f5bad26afd2878418ee0b19b130f6b3e648a98240b77aa8ad377c->leave($__internal_cc1a29ea331f5bad26afd2878418ee0b19b130f6b3e648a98240b77aa8ad377c_prof);

    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
        $__internal_d436c2c3ce27bd3cd1c15733bab97d9580f79e15c07ee74765c7b4316426c8ba = $this->env->getExtension("native_profiler");
        $__internal_d436c2c3ce27bd3cd1c15733bab97d9580f79e15c07ee74765c7b4316426c8ba->enter($__internal_d436c2c3ce27bd3cd1c15733bab97d9580f79e15c07ee74765c7b4316426c8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containerUsers"));

        // line 4
        echo "
    <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
         <h2 class=\"sub-header\">Изменение пароля пользователя ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h2>  
            <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("changepass", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"POST\">
                <input type=\"password\" name=\"newpass\" placeholder=\"Новый пароль\"
                   required autofocus>
                <input type=\"submit\" value=\"Изменить\"/>
            </form> 
    </div>  
 ";
        
        $__internal_d436c2c3ce27bd3cd1c15733bab97d9580f79e15c07ee74765c7b4316426c8ba->leave($__internal_d436c2c3ce27bd3cd1c15733bab97d9580f79e15c07ee74765c7b4316426c8ba_prof);

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
        return array (  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
