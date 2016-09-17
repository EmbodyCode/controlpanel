<?php

/* AppBundle:Admin:ban.html.twig */
class __TwigTemplate_f8f8b07ad7f65f8921bdad95307b3414f03f5f68eae5d1a62e027ca354a5313b extends Twig_Template
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
        $__internal_27ff0aef71d23e6f77c653892cb3cdb506cbdb521787fac228d1f037d06942a8 = $this->env->getExtension("native_profiler");
        $__internal_27ff0aef71d23e6f77c653892cb3cdb506cbdb521787fac228d1f037d06942a8->enter($__internal_27ff0aef71d23e6f77c653892cb3cdb506cbdb521787fac228d1f037d06942a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:ban.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27ff0aef71d23e6f77c653892cb3cdb506cbdb521787fac228d1f037d06942a8->leave($__internal_27ff0aef71d23e6f77c653892cb3cdb506cbdb521787fac228d1f037d06942a8_prof);

    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
        $__internal_78e561281dbfda2400c203e1905dac2a06a7b940cc89d3616844fb3e424b8a6c = $this->env->getExtension("native_profiler");
        $__internal_78e561281dbfda2400c203e1905dac2a06a7b940cc89d3616844fb3e424b8a6c->enter($__internal_78e561281dbfda2400c203e1905dac2a06a7b940cc89d3616844fb3e424b8a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containerUsers"));

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
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
            echo "</font>
        ";
        }
        // line 15
        echo "    </div>
";
        
        $__internal_78e561281dbfda2400c203e1905dac2a06a7b940cc89d3616844fb3e424b8a6c->leave($__internal_78e561281dbfda2400c203e1905dac2a06a7b940cc89d3616844fb3e424b8a6c_prof);

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
        return array (  61 => 15,  55 => 13,  53 => 12,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
