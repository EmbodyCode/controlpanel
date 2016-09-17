<?php

/* AppBundle:Admin:layout.html.twig */
class __TwigTemplate_ea0def0227cf7a89a30cbe9070399fbc884279e6c9e01480877c0a5820b39b44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'containerUsers' => array($this, 'block_containerUsers'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3084f3b7abbf1e369a8ead85fbf19be74584257d9188d261c2e2e20307a97ba = $this->env->getExtension("native_profiler");
        $__internal_f3084f3b7abbf1e369a8ead85fbf19be74584257d9188d261c2e2e20307a97ba->enter($__internal_f3084f3b7abbf1e369a8ead85fbf19be74584257d9188d261c2e2e20307a97ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/css/admin/faviconq.ico"), "html", null, true);
        echo "\">

       ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

        <!-- Custom styles for this template -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/css/admin/index_admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
        <script src=\"../../assets/js/ie-emulation-modes-warning.js\"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    
    <body>

        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/admin\">Панель управления</a>
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"/\">На главную</a></li>
                        <li><a href=\"http://vk.com/\">Вконтакте</a></li>
                    </ul>
                  
                </div>
            </div>
        </nav>
        
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-3 col-md-2 sidebar\">
                    <ul class=\"nav nav-sidebar\">
                        <li><a href=\"/admin/users\">Управление админ.составом</a></li>
                        ";
        // line 62
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 63
            echo "                            <li><a href=\"/admin/registration\">Регистрация администратора</a></li>
                        ";
        }
        // line 65
        echo "                        <li><a href=\"/admin/ban\">Блокировка пользователя</a></li>
                        <li><a href=\"/admin/addnews/\">Добавление новости</a></li>
                        <li><a href=\"/admin/banlist\">Список заблокированных</a></li>
                        <li><a href=\"/logout\">Выйти</a></li>
                    </ul>
                </div>
            </div>
        </div>
        ";
        // line 73
        $this->displayBlock('containerUsers', $context, $blocks);
        // line 76
        echo "
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src=\"../../assets/js/vendor/holder.min.js\"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src=\"../../assets/js/ie10-viewport-bug-workaround.js\"></script>
    </body>
</html>
";
        
        $__internal_f3084f3b7abbf1e369a8ead85fbf19be74584257d9188d261c2e2e20307a97ba->leave($__internal_f3084f3b7abbf1e369a8ead85fbf19be74584257d9188d261c2e2e20307a97ba_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5a68130b968d24ff87b0d32f47e63ce15ffcb0babcff386632fb6784f3a4d58 = $this->env->getExtension("native_profiler");
        $__internal_b5a68130b968d24ff87b0d32f47e63ce15ffcb0babcff386632fb6784f3a4d58->enter($__internal_b5a68130b968d24ff87b0d32f47e63ce15ffcb0babcff386632fb6784f3a4d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " <title>Панель управления сайтом</title> ";
        
        $__internal_b5a68130b968d24ff87b0d32f47e63ce15ffcb0babcff386632fb6784f3a4d58->leave($__internal_b5a68130b968d24ff87b0d32f47e63ce15ffcb0babcff386632fb6784f3a4d58_prof);

    }

    // line 73
    public function block_containerUsers($context, array $blocks = array())
    {
        $__internal_e493c2c233643f927876ded56bf43ef6fa21a9cfaa2a0d6f6b3f35d09adf561b = $this->env->getExtension("native_profiler");
        $__internal_e493c2c233643f927876ded56bf43ef6fa21a9cfaa2a0d6f6b3f35d09adf561b->enter($__internal_e493c2c233643f927876ded56bf43ef6fa21a9cfaa2a0d6f6b3f35d09adf561b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "containerUsers"));

        // line 74
        echo "            
        ";
        
        $__internal_e493c2c233643f927876ded56bf43ef6fa21a9cfaa2a0d6f6b3f35d09adf561b->leave($__internal_e493c2c233643f927876ded56bf43ef6fa21a9cfaa2a0d6f6b3f35d09adf561b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 74,  142 => 73,  130 => 12,  114 => 76,  112 => 73,  102 => 65,  98 => 63,  96 => 62,  52 => 21,  42 => 13,  40 => 12,  35 => 10,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*         <link rel="icon" href="{{asset('web/css/admin/faviconq.ico')}}">*/
/* */
/*        {% block title %} <title>Панель управления сайтом</title> {% endblock %}*/
/* */
/*         <!-- Latest compiled and minified CSS -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/*         <!-- Optional theme -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/*         <!-- Custom styles for this template -->*/
/*         <link href="{{asset('web/css/admin/index_admin.css')}}" rel="stylesheet">*/
/* */
/*         <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->*/
/*         <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->*/
/*         <script src="../../assets/js/ie-emulation-modes-warning.js"></script>*/
/* */
/*         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*         <!--[if lt IE 9]>*/
/*           <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*           <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/*     */
/*     <body>*/
/* */
/*         <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="container-fluid">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="/admin">Панель управления</a>*/
/*                 </div>*/
/*                 <div id="navbar" class="navbar-collapse collapse">*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a href="/">На главную</a></li>*/
/*                         <li><a href="http://vk.com/">Вконтакте</a></li>*/
/*                     </ul>*/
/*                   */
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*         */
/*         <div class="container-fluid">*/
/*             <div class="row">*/
/*                 <div class="col-sm-3 col-md-2 sidebar">*/
/*                     <ul class="nav nav-sidebar">*/
/*                         <li><a href="/admin/users">Управление админ.составом</a></li>*/
/*                         {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                             <li><a href="/admin/registration">Регистрация администратора</a></li>*/
/*                         {% endif %}*/
/*                         <li><a href="/admin/ban">Блокировка пользователя</a></li>*/
/*                         <li><a href="/admin/addnews/">Добавление новости</a></li>*/
/*                         <li><a href="/admin/banlist">Список заблокированных</a></li>*/
/*                         <li><a href="/logout">Выйти</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% block containerUsers %}*/
/*             */
/*         {% endblock %}*/
/* */
/*         <!-- Latest compiled and minified JavaScript -->*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*         <!-- Just to make our placeholder images work. Don't actually copy the next line! -->*/
/*         <script src="../../assets/js/vendor/holder.min.js"></script>*/
/*         <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*         <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>*/
/*     </body>*/
/* </html>*/
/* */
