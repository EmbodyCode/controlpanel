<?php

/* AppBundle:Admin:banlist.html.twig */
class __TwigTemplate_e049f8e0631118f0ac32707e60641b53e673fb1f4268d091bbf037946fe2a0a9 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
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
        return array (  69 => 23,  60 => 20,  56 => 19,  52 => 18,  49 => 17,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
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
