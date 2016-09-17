<?php

/* AppBundle:Admin:newsedit.html.twig */
class __TwigTemplate_a35f6458c02c49be34cb7251129e9b294e600e504d9ff307e8061c4a608485ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Admin:layout.html.twig", "AppBundle:Admin:newsedit.html.twig", 1);
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
        $__internal_2744a9c6d2465c6787d93d7edc8011c11fe87d9f6ca7da23f926f5b28bcf4845 = $this->env->getExtension("native_profiler");
        $__internal_2744a9c6d2465c6787d93d7edc8011c11fe87d9f6ca7da23f926f5b28bcf4845->enter($__internal_2744a9c6d2465c6787d93d7edc8011c11fe87d9f6ca7da23f926f5b28bcf4845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:newsedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2744a9c6d2465c6787d93d7edc8011c11fe87d9f6ca7da23f926f5b28bcf4845->leave($__internal_2744a9c6d2465c6787d93d7edc8011c11fe87d9f6ca7da23f926f5b28bcf4845_prof);

    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
        $__internal_26407561eeb911abe0b0087823163f1330522c529e36aa304262775cf2ca0dd7 = $this->env->getExtension("native_profiler");
        $__internal_26407561eeb911abe0b0087823163f1330522c529e36aa304262775cf2ca0dd7->enter($__internal_26407561eeb911abe0b0087823163f1330522c529e36aa304262775cf2ca0dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containerUsers"));

        // line 4
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
            <h2 class=\"sub-header\">Редактирования новости ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id", array()), "html", null, true);
        echo "</h2> 
            <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editnews", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"POST\">
                <label>Заголовок новости</label>
                <input type=\"text\" name=\"title\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "title", array()), "html", null, true);
        echo "\"/><br>
                <label for=\"1\">Текст новости</label>
                <textarea id=\"1\" name=\"text\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "text", array()), "html", null, true);
        echo "</textarea><br>
                <label>Картинка новости</label>
                <input type=\"text\" name=\"picture\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "picture", array()), "html", null, true);
        echo "\"><br>
                <input type=\"hidden\" name=\"author\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "author", array()), "html", null, true);
        echo "\">
                <h3 class=\"sub-header\"></h3>
            <input type=\"submit\" value=\"Сохранить\">
        </form>
        ";
        // line 17
        if (array_key_exists("message", $context)) {
            // line 18
            echo "            <font color=\"green\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</font>
        ";
        }
        // line 20
        echo "    </div>
";
        
        $__internal_26407561eeb911abe0b0087823163f1330522c529e36aa304262775cf2ca0dd7->leave($__internal_26407561eeb911abe0b0087823163f1330522c529e36aa304262775cf2ca0dd7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:newsedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  75 => 18,  73 => 17,  66 => 13,  62 => 12,  57 => 10,  52 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:Admin:layout.html.twig" %}*/
/* */
/* {% block containerUsers %}*/
/*     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*             <h2 class="sub-header">Редактирования новости {{news.id}}</h2> */
/*             <form action="{{ path('editnews', { 'id' : id }) }}" method="POST">*/
/*                 <label>Заголовок новости</label>*/
/*                 <input type="text" name="title" value="{{news.title}}"/><br>*/
/*                 <label for="1">Текст новости</label>*/
/*                 <textarea id="1" name="text">{{news.text}}</textarea><br>*/
/*                 <label>Картинка новости</label>*/
/*                 <input type="text" name="picture" value="{{news.picture}}"><br>*/
/*                 <input type="hidden" name="author" value="{{news.author}}">*/
/*                 <h3 class="sub-header"></h3>*/
/*             <input type="submit" value="Сохранить">*/
/*         </form>*/
/*         {% if message is defined %}*/
/*             <font color="green">{{message}}</font>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
