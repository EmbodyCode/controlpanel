<?php

/* AppBundle:Admin:users.html.twig */
class __TwigTemplate_79929ca335408063e42eab8e91e2cffb87c9b1d56f936d985187bcb28a76430a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
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
                                    <th>Роль</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "                                <tr> 
                                    <td><a href=\"/users/edit/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"><input type=\"button\" value=\"Тык\"></a><a href=\"/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\">
                                            <input type=\"button\" value =\"Удалить\">
                                        </a></td>
                                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "CreatedAt", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 29
                echo "                                        ";
                if (($context["role"] == "ROLE_SUPER_ADMIN")) {
                    // line 30
                    echo "                                            <td>Разработчик</td>
                                        ";
                }
                // line 32
                echo "                                        ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 33
                    echo "                                            <td>Администратор</td>
                                        ";
                }
                // line 35
                echo "                                        ";
                if (($context["role"] == "ROLE_USER")) {
                    // line 36
                    echo "                                        ";
                }
                // line 37
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                            </tbody>
                        </table>
                    </div>
                    
                </div>
";
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
        return array (  116 => 40,  109 => 38,  103 => 37,  100 => 36,  97 => 35,  93 => 33,  90 => 32,  86 => 30,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  55 => 21,  52 => 20,  48 => 19,  31 => 4,  28 => 3,  11 => 1,);
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
/*                                     <th>Роль</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for user in users %}*/
/*                                 <tr> */
/*                                     <td><a href="/users/edit/{{user.id}}"><input type="button" value="Тык"></a><a href="/delete/{{user.username}}">*/
/*                                             <input type="button" value ="Удалить">*/
/*                                         </a></td>*/
/*                                     <td>{{user.username}}</td>*/
/*                                     <td>{{user.email}}</td>*/
/*                                     <td>{{user.CreatedAt |date('d.m.Y')}}</td>*/
/*                                     <td>{{user.lastLogin |date('Y-m-d H:i:s') }}</td>*/
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
