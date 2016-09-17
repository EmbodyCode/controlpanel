<?php

/* AppBundle:Admin:createnews.html.twig */
class __TwigTemplate_8c5817843c83d2c22b22996d4d8552959678f71b76e896722184e8e249039849 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
        <h2 class=\"sub-header\">Добавление новости</h2> 
        <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("createNews");
        echo "\" method=\"POST\">
            <label>Заголовок новости</label>
            <input type=\"text\" name=\"title\" required autofocus/><br>
            <label for=\"1\">Текст новости</label>
            <textarea id=\"1\" name=\"text\" required autofocus></textarea><br>
            <label>Картинка новости</label>
            <input type=\"text\" name=\"picture\" required autofocus><br>
            <h3 class=\"sub-header\"></h3>
            <input type=\"submit\" value=\"Добавить\">
        </form>
            ";
        // line 16
        if (array_key_exists("message", $context)) {
            // line 17
            echo "            <font color=\"green\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</font>
        ";
        }
        // line 19
        echo "    </div>
";
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
        return array (  56 => 19,  50 => 17,  48 => 16,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
/*             <label for="1">Текст новости</label>*/
/*             <textarea id="1" name="text" required autofocus></textarea><br>*/
/*             <label>Картинка новости</label>*/
/*             <input type="text" name="picture" required autofocus><br>*/
/*             <h3 class="sub-header"></h3>*/
/*             <input type="submit" value="Добавить">*/
/*         </form>*/
/*             {% if message is defined %}*/
/*             <font color="green">{{message}}</font>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
