<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_7e97c69c5874761c6787dbb96b41fad034f22ef12e556fe86ba16c4cf495c3ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Default:layout.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'news' => array($this, 'block_news'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    <title>Главная страница</title>
";
    }

    // line 7
    public function block_news($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 9
            echo "        <div class=\"blog-post\">
            <h2 class=\"blog-post-title\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "title", array()), "html", null, true);
            echo "</h2> <a href=\"\">Редактировать</a>
            <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "picture", array()), "html", null, true);
            echo "\" width=\"600\" height=\"400\"/>
            <p class=\"blog-post-meta\">";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "createdAt", array()), "d.m.Y в H:i"), "html", null, true);
            echo " by <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "author", array()), "html", null, true);
            echo "</a></p>
            <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "text", array()), "html", null, true);
            echo "</p>  
            <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  62 => 13,  56 => 12,  52 => 11,  48 => 10,  45 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:Default:layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     <title>Главная страница</title>*/
/* {% endblock %}*/
/* */
/* {% block news %}*/
/*     {% for n in news %}*/
/*         <div class="blog-post">*/
/*             <h2 class="blog-post-title">{{n.title}}</h2> <a href="">Редактировать</a>*/
/*             <img src="{{n.picture}}" width="600" height="400"/>*/
/*             <p class="blog-post-meta">{{n.createdAt|date('d.m.Y в H:i')}} by <a href="#">{{n.author}}</a></p>*/
/*             <p>{{n.text}}</p>  */
/*             <br>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
