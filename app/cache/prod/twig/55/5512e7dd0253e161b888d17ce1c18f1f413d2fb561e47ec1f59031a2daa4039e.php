<?php

/* AppBundle:Admin:index.html.twig */
class __TwigTemplate_a0a31fabf783a457df59401ee7c4e75c1285c27cd37f417f8c82831fc5522b69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Admin:layout.html.twig", "AppBundle:Admin:index.html.twig", 1);
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
        $__internal_4a6a7e8ed999d1b2f8b245419fc24f0c0098008bad77e82d24461bac5fbd9f11 = $this->env->getExtension("native_profiler");
        $__internal_4a6a7e8ed999d1b2f8b245419fc24f0c0098008bad77e82d24461bac5fbd9f11->enter($__internal_4a6a7e8ed999d1b2f8b245419fc24f0c0098008bad77e82d24461bac5fbd9f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a6a7e8ed999d1b2f8b245419fc24f0c0098008bad77e82d24461bac5fbd9f11->leave($__internal_4a6a7e8ed999d1b2f8b245419fc24f0c0098008bad77e82d24461bac5fbd9f11_prof);

    }

    // line 3
    public function block_containerUsers($context, array $blocks = array())
    {
        $__internal_7d287b944a3aef53ab59207fce21c8c58312a0825a3b886035046d3c53152cde = $this->env->getExtension("native_profiler");
        $__internal_7d287b944a3aef53ab59207fce21c8c58312a0825a3b886035046d3c53152cde->enter($__internal_7d287b944a3aef53ab59207fce21c8c58312a0825a3b886035046d3c53152cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containerUsers"));

        echo " 
      <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
          <center><h2 class=\"sub-header\">Добро пожаловать, ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h2></center>
            ";
        // line 6
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 7
            echo "                <h4 class=\"sub-header\">Вы авторизовались как Разработчик</h4>
            ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "                <h4 class=\"sub-header\">Вы авторизовались как Администратор</h4>
            ";
        }
        // line 11
        echo "      </div>
      
";
        
        $__internal_7d287b944a3aef53ab59207fce21c8c58312a0825a3b886035046d3c53152cde->leave($__internal_7d287b944a3aef53ab59207fce21c8c58312a0825a3b886035046d3c53152cde_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  53 => 9,  49 => 7,  47 => 6,  43 => 5,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:Admin:layout.html.twig" %}*/
/* */
/* {% block containerUsers %} */
/*       <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">*/
/*           <center><h2 class="sub-header">Добро пожаловать, {{user.username}}</h2></center>*/
/*             {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                 <h4 class="sub-header">Вы авторизовались как Разработчик</h4>*/
/*             {% elseif is_granted('ROLE_ADMIN') %}*/
/*                 <h4 class="sub-header">Вы авторизовались как Администратор</h4>*/
/*             {% endif %}*/
/*       </div>*/
/*       */
/* {% endblock %}*/
