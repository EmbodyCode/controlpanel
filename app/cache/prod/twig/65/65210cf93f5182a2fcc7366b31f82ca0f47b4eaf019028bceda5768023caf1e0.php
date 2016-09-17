<?php

/* AppBundle:Admin:ban.html.twig */
class __TwigTemplate_626171fc264ad92997a36cd1b59defa3f8aa5bdbbabbaf0dde2ab5095110374e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Admin:layout.html.twig", "AppBundle:Admin:ban.html.twig", 1);
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
        <h2 class=\"sub-header\">Блокировка пользователя</h2>
        <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("banuser");
        echo "\" method=\"POST\">
            <label>Имя пользователя</label>
            <input type=\"text\" name =\"username\" required autofocus><br>
            <h3 class=\"sub-header\"></h3>
            <input type=\"submit\" value=\"Заблокировать\">
        </form>   
        ";
        // line 12
        if (array_key_exists("msg", $context)) {
            // line 13
            echo "            <font color=\"green\">";
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : null), "html", null, true);
            echo "</font>
        ";
        }
        // line 15
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:ban.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  46 => 13,  44 => 12,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:Admin:layout.html.twig" %}*/
/* */
/* {% block containerUsers %}*/
/*     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*         <h2 class="sub-header">Блокировка пользователя</h2>*/
/*         <form action="{{ path('banuser')}}" method="POST">*/
/*             <label>Имя пользователя</label>*/
/*             <input type="text" name ="username" required autofocus><br>*/
/*             <h3 class="sub-header"></h3>*/
/*             <input type="submit" value="Заблокировать">*/
/*         </form>   */
/*         {% if msg is defined %}*/
/*             <font color="green">{{msg}}</font>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
