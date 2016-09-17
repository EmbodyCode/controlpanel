<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_03651531ee116c5c7f171b8dab2f9fe4167b6437918cc5ebc6faf6f3299a6ca5 extends Twig_Template
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
        $__internal_c38980baca86167cf5ea6bfc64d5873ce779438e5f0f737391cfa605ec560c7e = $this->env->getExtension("native_profiler");
        $__internal_c38980baca86167cf5ea6bfc64d5873ce779438e5f0f737391cfa605ec560c7e->enter($__internal_c38980baca86167cf5ea6bfc64d5873ce779438e5f0f737391cfa605ec560c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c38980baca86167cf5ea6bfc64d5873ce779438e5f0f737391cfa605ec560c7e->leave($__internal_c38980baca86167cf5ea6bfc64d5873ce779438e5f0f737391cfa605ec560c7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_261852159c3824003fbe6c27bb9e83a71988eee23806e2163f2f93052021fd71 = $this->env->getExtension("native_profiler");
        $__internal_261852159c3824003fbe6c27bb9e83a71988eee23806e2163f2f93052021fd71->enter($__internal_261852159c3824003fbe6c27bb9e83a71988eee23806e2163f2f93052021fd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <title>Главная страница</title>
";
        
        $__internal_261852159c3824003fbe6c27bb9e83a71988eee23806e2163f2f93052021fd71->leave($__internal_261852159c3824003fbe6c27bb9e83a71988eee23806e2163f2f93052021fd71_prof);

    }

    // line 7
    public function block_news($context, array $blocks = array())
    {
        $__internal_6171c0271d0512abdfdab7c6a49494a6c5cc64414b1ade7221ea9168fff3686c = $this->env->getExtension("native_profiler");
        $__internal_6171c0271d0512abdfdab7c6a49494a6c5cc64414b1ade7221ea9168fff3686c->enter($__internal_6171c0271d0512abdfdab7c6a49494a6c5cc64414b1ade7221ea9168fff3686c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "news"));

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
        
        $__internal_6171c0271d0512abdfdab7c6a49494a6c5cc64414b1ade7221ea9168fff3686c->leave($__internal_6171c0271d0512abdfdab7c6a49494a6c5cc64414b1ade7221ea9168fff3686c_prof);

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
        return array (  86 => 16,  77 => 13,  71 => 12,  67 => 11,  63 => 10,  60 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
