<?php

/* AppBundle:Admin:createnews.html.twig */
class __TwigTemplate_294824e3e4c69099938596059e38397730d84a951c97b49bf86704648f7ae2e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Admin:layout.html.twig", "AppBundle:Admin:createnews.html.twig", 1);
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
        $__internal_f88bd691e6b24f8b44b76e8c415426e4d64c5149f254069cb3b697d5de6fbb2c = $this->env->getExtension("native_profiler");
        $__internal_f88bd691e6b24f8b44b76e8c415426e4d64c5149f254069cb3b697d5de6fbb2c->enter($__internal_f88bd691e6b24f8b44b76e8c415426e4d64c5149f254069cb3b697d5de6fbb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:createnews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f88bd691e6b24f8b44b76e8c415426e4d64c5149f254069cb3b697d5de6fbb2c->leave($__internal_f88bd691e6b24f8b44b76e8c415426e4d64c5149f254069cb3b697d5de6fbb2c_prof);

    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
        $__internal_ca506ebdebb7e6f6fe1b7e6a2974965f8b02f978f7529c8848a93b4f08a4e281 = $this->env->getExtension("native_profiler");
        $__internal_ca506ebdebb7e6f6fe1b7e6a2974965f8b02f978f7529c8848a93b4f08a4e281->enter($__internal_ca506ebdebb7e6f6fe1b7e6a2974965f8b02f978f7529c8848a93b4f08a4e281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containerUsers"));

        // line 4
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
        <h2 class=\"sub-header\">Добавление новости</h2> 
        <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("createNews");
        echo "\" method=\"POST\">
            <label>Заголовок новости</label>
            <input type=\"text\" name=\"title\" required autofocus/><br>
            <label>Текст новости</label>
            <textarea name=\"text\" required autofocus></textarea><br>
            <label>Картинка новости(необязательно)</label>
            <input type=\"text\" name=\"picture\"><br>
            <h3 class=\"sub-header\"></h3>
            <input type=\"submit\" value=\"Добавить\">
        </form>
            ";
        // line 16
        if (array_key_exists("message", $context)) {
            // line 17
            echo "            <font color=\"green\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</font>
        ";
        }
        // line 19
        echo "    </div>
";
        
        $__internal_ca506ebdebb7e6f6fe1b7e6a2974965f8b02f978f7529c8848a93b4f08a4e281->leave($__internal_ca506ebdebb7e6f6fe1b7e6a2974965f8b02f978f7529c8848a93b4f08a4e281_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:createnews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  59 => 17,  57 => 16,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:Admin:layout.html.twig" %}*/
/* */
/* {% block containerUsers %}*/
/*     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*         <h2 class="sub-header">Добавление новости</h2> */
/*         <form action="{{path('createNews')}}" method="POST">*/
/*             <label>Заголовок новости</label>*/
/*             <input type="text" name="title" required autofocus/><br>*/
/*             <label>Текст новости</label>*/
/*             <textarea name="text" required autofocus></textarea><br>*/
/*             <label>Картинка новости(необязательно)</label>*/
/*             <input type="text" name="picture"><br>*/
/*             <h3 class="sub-header"></h3>*/
/*             <input type="submit" value="Добавить">*/
/*         </form>*/
/*             {% if message is defined %}*/
/*             <font color="green">{{message}}</font>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
