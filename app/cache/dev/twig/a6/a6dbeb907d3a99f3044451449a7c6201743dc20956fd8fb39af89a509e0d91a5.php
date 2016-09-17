<?php

/* AppBundle:Admin:banlist.html.twig */
class __TwigTemplate_e7d67d12cb7afa188d15aef061f51008630f72cfbed2bf8d6e1982f0d9d1be97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Admin:layout.html.twig", "AppBundle:Admin:banlist.html.twig", 1);
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
        $__internal_60ca33f1913d55f292e15f41917591104272ced41745269174d4705f7325de94 = $this->env->getExtension("native_profiler");
        $__internal_60ca33f1913d55f292e15f41917591104272ced41745269174d4705f7325de94->enter($__internal_60ca33f1913d55f292e15f41917591104272ced41745269174d4705f7325de94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:banlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60ca33f1913d55f292e15f41917591104272ced41745269174d4705f7325de94->leave($__internal_60ca33f1913d55f292e15f41917591104272ced41745269174d4705f7325de94_prof);

    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
        $__internal_9e1af418520f2f69ca441659dcce2a496a868489b488cffa213624c67a339fb1 = $this->env->getExtension("native_profiler");
        $__internal_9e1af418520f2f69ca441659dcce2a496a868489b488cffa213624c67a339fb1->enter($__internal_9e1af418520f2f69ca441659dcce2a496a868489b488cffa213624c67a339fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containerUsers"));

        // line 4
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
        <h2 class=\"sub-header\">Список заблокированных пользователей </h2>
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Разблокировать</th>
                        <th>Имя пользователя</th>
                        <th>Электронный адрес</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            echo "                        <tr> 
                            <td><a href=\"/unban/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"><input type=\"button\" value=\"Тык\" name=\"unban\"></a></td>
                            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </tbody>
            </table>
        </div>
    ";
        
        $__internal_9e1af418520f2f69ca441659dcce2a496a868489b488cffa213624c67a339fb1->leave($__internal_9e1af418520f2f69ca441659dcce2a496a868489b488cffa213624c67a339fb1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:banlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:Admin:layout.html.twig" %}*/
/* */
/* {% block containerUsers %}*/
/*     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*         <h2 class="sub-header">Список заблокированных пользователей </h2>*/
/*         <div class="table-responsive">*/
/*             <table class="table table-striped">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Разблокировать</th>*/
/*                         <th>Имя пользователя</th>*/
/*                         <th>Электронный адрес</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for user in users %}*/
/*                         <tr> */
/*                             <td><a href="/unban/{{user.id}}"><input type="button" value="Тык" name="unban"></a></td>*/
/*                             <td>{{user.username}}</td>*/
/*                             <td>{{user.email}}</td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     {% endblock %}*/
