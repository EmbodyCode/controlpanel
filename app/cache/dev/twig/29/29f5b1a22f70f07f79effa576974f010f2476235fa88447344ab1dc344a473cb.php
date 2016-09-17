<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_125233d237a396cf4a1a96de163a21064471428959714f84071eb01854b1694c extends Twig_Template
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
        $__internal_6a8df41b3b72297ac4e05bfe42fd1a46a091faff8fd2818b27cdd65a0bcee3bd = $this->env->getExtension("native_profiler");
        $__internal_6a8df41b3b72297ac4e05bfe42fd1a46a091faff8fd2818b27cdd65a0bcee3bd->enter($__internal_6a8df41b3b72297ac4e05bfe42fd1a46a091faff8fd2818b27cdd65a0bcee3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a8df41b3b72297ac4e05bfe42fd1a46a091faff8fd2818b27cdd65a0bcee3bd->leave($__internal_6a8df41b3b72297ac4e05bfe42fd1a46a091faff8fd2818b27cdd65a0bcee3bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b5175c7460f2957cabf4fea39ffab812f8c77bbe23454951e9e6f2940a27a2a = $this->env->getExtension("native_profiler");
        $__internal_0b5175c7460f2957cabf4fea39ffab812f8c77bbe23454951e9e6f2940a27a2a->enter($__internal_0b5175c7460f2957cabf4fea39ffab812f8c77bbe23454951e9e6f2940a27a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title>Главная страница</title>
";
        
        $__internal_0b5175c7460f2957cabf4fea39ffab812f8c77bbe23454951e9e6f2940a27a2a->leave($__internal_0b5175c7460f2957cabf4fea39ffab812f8c77bbe23454951e9e6f2940a27a2a_prof);

    }

    // line 7
    public function block_news($context, array $blocks = array())
    {
        $__internal_c0ed79c47084f228594b87cb933583ed870757ef4529ee2f66ddf059467c2205 = $this->env->getExtension("native_profiler");
        $__internal_c0ed79c47084f228594b87cb933583ed870757ef4529ee2f66ddf059467c2205->enter($__internal_c0ed79c47084f228594b87cb933583ed870757ef4529ee2f66ddf059467c2205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "news"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 9
            echo "        <div class=\"blog-post\">
            <h2 class=\"blog-post-title\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "title", array()), "html", null, true);
            echo "</h2> 
            ";
            // line 11
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 12
                echo "                <a href=\"admin/news/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "id", array()), "html", null, true);
                echo "\">Редактировать</a>
            ";
            }
            // line 14
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "picture", array()), "html", null, true);
            echo "\" width=\"600\" height=\"400\"/>
            <p class=\"blog-post-meta\">";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "createdAt", array()), "Создана d.m.Y в H:i"), "html", null, true);
            echo " by ";
            if (($this->getAttribute($context["n"], "author", array()) == "admin")) {
                // line 16
                echo "                <a href=\"#\"><font color=\"red\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "author", array()), "html", null, true);
                echo "</font></a></p> ";
            } elseif (($this->getAttribute($context["n"], "author", array()) != "admin")) {
                // line 17
                echo "            <p class=\"blog-post-meta\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "createdAt", array()), "Создана d.m.Y в H:i"), "html", null, true);
                echo " by <a href=\"#\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "author", array()), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 19
            echo "            
            ";
            // line 20
            if (($this->getAttribute($context["n"], "lastUpdatedBy", array()) != null)) {
                // line 21
                echo "                ";
                if (($this->getAttribute($context["n"], "lastUpdatedBy", array()) == "admin")) {
                    // line 22
                    echo "                    <p class=\"blog-post-meta\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "updatedAt", array()), "Обновлена d.m.Y в H:i"), "html", null, true);
                    echo " by <a href=\"#\"><font
                                color = \"red\">";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "lastUpdatedBy", array()), "html", null, true);
                    echo "</font></a></p>
                ";
                } elseif (($this->getAttribute(                // line 24
$context["n"], "lastUpdatedBy", array()) != "admin")) {
                    // line 25
                    echo "                    <p class=\"blog-post-meta\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "updatedAt", array()), "Обновлена d.m.Y в H:i"), "html", null, true);
                    echo " by <a href=\"#\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "lastUpdatedBy", array()), "html", null, true);
                    echo "</a></p>
                ";
                }
                // line 27
                echo "                    
                    
            ";
            }
            // line 30
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "text", array()), "html", null, true);
            echo "</p>  
            <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
";
        
        $__internal_c0ed79c47084f228594b87cb933583ed870757ef4529ee2f66ddf059467c2205->leave($__internal_c0ed79c47084f228594b87cb933583ed870757ef4529ee2f66ddf059467c2205_prof);

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
        return array (  139 => 33,  129 => 30,  124 => 27,  116 => 25,  114 => 24,  110 => 23,  105 => 22,  102 => 21,  100 => 20,  97 => 19,  89 => 17,  84 => 16,  80 => 15,  75 => 14,  69 => 12,  67 => 11,  63 => 10,  60 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/*             <h2 class="blog-post-title">{{n.title}}</h2> */
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*                 <a href="admin/news/{{n.id}}">Редактировать</a>*/
/*             {% endif %}*/
/*             <img src="{{n.picture}}" width="600" height="400"/>*/
/*             <p class="blog-post-meta">{{n.createdAt|date('Создана d.m.Y в H:i')}} by {% if n.author == "admin" %}*/
/*                 <a href="#"><font color="red">{{n.author}}</font></a></p> {% elseif n.author != "admin" %}*/
/*             <p class="blog-post-meta">{{n.createdAt|date('Создана d.m.Y в H:i')}} by <a href="#">{{n.author}}</a></p>*/
/*             {% endif %}*/
/*             */
/*             {% if n.lastUpdatedBy != null  %}*/
/*                 {% if n.lastUpdatedBy == "admin" %}*/
/*                     <p class="blog-post-meta">{{n.updatedAt|date('Обновлена d.m.Y в H:i')}} by <a href="#"><font*/
/*                                 color = "red">{{n.lastUpdatedBy}}</font></a></p>*/
/*                 {% elseif n.lastUpdatedBy != "admin" %}*/
/*                     <p class="blog-post-meta">{{n.updatedAt|date('Обновлена d.m.Y в H:i')}} by <a href="#">{{n.lastUpdatedBy}}</a></p>*/
/*                 {% endif %}*/
/*                     */
/*                     */
/*             {% endif %}*/
/*             <p>{{n.text}}</p>  */
/*             <br>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
