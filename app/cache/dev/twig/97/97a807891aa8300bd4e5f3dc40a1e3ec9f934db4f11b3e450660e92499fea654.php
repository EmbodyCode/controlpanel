<?php

/* AppBundle:Admin:users.html.twig */
class __TwigTemplate_1fcf97e4c5ba17b2d823c5c96977d7c7826b5e7ceb3e1d603c06aca371374de8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Admin:layout.html.twig", "AppBundle:Admin:users.html.twig", 1);
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
        $__internal_b33c15c73b7af430ee05e59f5fac0b4e83ea4d268e6711a6a3a4a50de8db1c6e = $this->env->getExtension("native_profiler");
        $__internal_b33c15c73b7af430ee05e59f5fac0b4e83ea4d268e6711a6a3a4a50de8db1c6e->enter($__internal_b33c15c73b7af430ee05e59f5fac0b4e83ea4d268e6711a6a3a4a50de8db1c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b33c15c73b7af430ee05e59f5fac0b4e83ea4d268e6711a6a3a4a50de8db1c6e->leave($__internal_b33c15c73b7af430ee05e59f5fac0b4e83ea4d268e6711a6a3a4a50de8db1c6e_prof);

    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
        $__internal_7f3eab27ab4d3c96fb3d283aac065809d5827e73038809c4f86b61348b765605 = $this->env->getExtension("native_profiler");
        $__internal_7f3eab27ab4d3c96fb3d283aac065809d5827e73038809c4f86b61348b765605->enter($__internal_7f3eab27ab4d3c96fb3d283aac065809d5827e73038809c4f86b61348b765605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containerUsers"));

        // line 4
        echo "  <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
                   <h2 class=\"sub-header\">Зарегистрированные пользователи</h2>
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>Управление</th>
                                    <th>Имя пользователя</th>
                                    <th>Электронный адрес</th>
                                    <th>Дата регистрации</th>
                                    <th>Последний заход на сайт</th>
                                    <th>Last Ip</th>
                                    <th>Роль</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "                                <tr> 
                                    <td><a href=\"/admin/users/edit/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"><input type=\"button\" value=\"Тык\"></a><a href=\"/admin/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\">
                                            <input type=\"button\" value =\"Удалить\">
                                        </a></td>
                                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "CreatedAt", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastIp", array()), "html", null, true);
            echo "</td>
                                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 31
                echo "                                        ";
                if (($context["role"] == "ROLE_SUPER_ADMIN")) {
                    // line 32
                    echo "                                            <td>Разработчик</td>
                                        ";
                }
                // line 34
                echo "                                        ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 35
                    echo "                                            <td>Администратор</td>
                                        ";
                }
                // line 37
                echo "                                        ";
                if (($context["role"] == "ROLE_USER")) {
                    // line 38
                    echo "                                        ";
                }
                // line 39
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                            </tbody>
                        </table>
                    </div>
                    
                </div>
";
        
        $__internal_7f3eab27ab4d3c96fb3d283aac065809d5827e73038809c4f86b61348b765605->leave($__internal_7f3eab27ab4d3c96fb3d283aac065809d5827e73038809c4f86b61348b765605_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 42,  123 => 40,  117 => 39,  114 => 38,  111 => 37,  107 => 35,  104 => 34,  100 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:Admin:layout.html.twig" %}*/
/* */
/* {% block containerUsers %}*/
/*   <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*                    <h2 class="sub-header">Зарегистрированные пользователи</h2>*/
/*                     <div class="table-responsive">*/
/*                         <table class="table table-striped">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>Управление</th>*/
/*                                     <th>Имя пользователя</th>*/
/*                                     <th>Электронный адрес</th>*/
/*                                     <th>Дата регистрации</th>*/
/*                                     <th>Последний заход на сайт</th>*/
/*                                     <th>Last Ip</th>*/
/*                                     <th>Роль</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for user in users %}*/
/*                                 <tr> */
/*                                     <td><a href="/admin/users/edit/{{user.id}}"><input type="button" value="Тык"></a><a href="/admin/delete/{{user.username}}">*/
/*                                             <input type="button" value ="Удалить">*/
/*                                         </a></td>*/
/*                                     <td>{{user.username}}</td>*/
/*                                     <td>{{user.email}}</td>*/
/*                                     <td>{{user.CreatedAt |date('d.m.Y')}}</td>*/
/*                                     <td>{{user.lastLogin |date('Y-m-d H:i:s') }}</td>*/
/*                                     <td>{{user.lastIp}}</td>*/
/*                                     {% for role in user.roles %}*/
/*                                         {% if role == "ROLE_SUPER_ADMIN" %}*/
/*                                             <td>Разработчик</td>*/
/*                                         {% endif %}*/
/*                                         {% if role == "ROLE_ADMIN" %}*/
/*                                             <td>Администратор</td>*/
/*                                         {% endif %}*/
/*                                         {% if role == "ROLE_USER" %}*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                     */
/*                 </div>*/
/* {% endblock %}*/
/* */
