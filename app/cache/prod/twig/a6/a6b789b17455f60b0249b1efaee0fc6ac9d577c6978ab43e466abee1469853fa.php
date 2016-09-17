<?php

/* AppBundle:Admin:registration.html.twig */
class __TwigTemplate_22e254820987633e4385409a39340f68478a445feec9de9dac3a5d036cc4eda4 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</font>
             ";
        }
        // line 17
        echo "             
    
    
    
    
    
    
    
";
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
        return array (  54 => 17,  48 => 15,  46 => 14,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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
