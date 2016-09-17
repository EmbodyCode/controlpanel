<?php

/* AppBundle:Admin:registration.html.twig */
class __TwigTemplate_e8a173e6a2711e4a67c1cfc546a13765761212f7545d5836f43a4eb8b1b1e2b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Admin:layout.html.twig", "AppBundle:Admin:registration.html.twig", 1);
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
        $__internal_7a3836317d7448f0476483e19ead8ceb8400780bc82acc192927579d5cd00343 = $this->env->getExtension("native_profiler");
        $__internal_7a3836317d7448f0476483e19ead8ceb8400780bc82acc192927579d5cd00343->enter($__internal_7a3836317d7448f0476483e19ead8ceb8400780bc82acc192927579d5cd00343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a3836317d7448f0476483e19ead8ceb8400780bc82acc192927579d5cd00343->leave($__internal_7a3836317d7448f0476483e19ead8ceb8400780bc82acc192927579d5cd00343_prof);

    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
        $__internal_053097c0fd3c1ab8cd0f78e064f45754e99e82d675ca0a05884af986f5bcd82e = $this->env->getExtension("native_profiler");
        $__internal_053097c0fd3c1ab8cd0f78e064f45754e99e82d675ca0a05884af986f5bcd82e->enter($__internal_053097c0fd3c1ab8cd0f78e064f45754e99e82d675ca0a05884af986f5bcd82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containerUsers"));

        // line 4
        echo "    
    <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
        <h2 class=\"sub-header\">Регистрация нового пользователя</h2>
        <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("reg");
        echo "\" method=\"POST\">
             <input type=\"text\" name=\"username\" placeholder=\"Логин\" required autofocus>
             <input type=\"password\" name=\"password\" placeholder=\"Пароль\" required autofocus>
             <input type=\"email\" name=\"email\" placeholder=\"Эл.ящик\" required autofocus>
             <h3 class=\"sub-header\"></h3>
             <button type=\"submit\">Зарегистрировать</button>
        </form>
             ";
        // line 14
        if (array_key_exists("message", $context)) {
            // line 15
            echo "                 <font color=\"green\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</font>
             ";
        }
        // line 17
        echo "             
    
    
    
    
    
    
    
";
        
        $__internal_053097c0fd3c1ab8cd0f78e064f45754e99e82d675ca0a05884af986f5bcd82e->leave($__internal_053097c0fd3c1ab8cd0f78e064f45754e99e82d675ca0a05884af986f5bcd82e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  57 => 15,  55 => 14,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle:Admin:layout.html.twig' %}*/
/* */
/* {% block containerUsers %}*/
/*     */
/*     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*         <h2 class="sub-header">Регистрация нового пользователя</h2>*/
/*         <form action="{{path('reg')}}" method="POST">*/
/*              <input type="text" name="username" placeholder="Логин" required autofocus>*/
/*              <input type="password" name="password" placeholder="Пароль" required autofocus>*/
/*              <input type="email" name="email" placeholder="Эл.ящик" required autofocus>*/
/*              <h3 class="sub-header"></h3>*/
/*              <button type="submit">Зарегистрировать</button>*/
/*         </form>*/
/*              {% if message is defined %}*/
/*                  <font color="green">{{message}}</font>*/
/*              {% endif %}*/
/*              */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/* {% endblock %}    */
