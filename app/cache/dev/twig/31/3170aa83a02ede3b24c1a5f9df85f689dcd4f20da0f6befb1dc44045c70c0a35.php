<?php

/* AppBundle:Default:layout.html.twig */
class __TwigTemplate_1e3960bc3d7f16e03ff1b6224e649702a48a462bcb6aa0ea649865ea8e10830c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'news' => array($this, 'block_news'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be46a6e6ab84963eac9ae19c22eab10344be2ea382bfaa07d19a3faa99cbf422 = $this->env->getExtension("native_profiler");
        $__internal_be46a6e6ab84963eac9ae19c22eab10344be2ea382bfaa07d19a3faa99cbf422->enter($__internal_be46a6e6ab84963eac9ae19c22eab10344be2ea382bfaa07d19a3faa99cbf422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/css/admin/favicon.ico"), "html", null, true);
        echo "\">

        ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

        <!-- Custom styles for this template -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/css/default/blog.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
        <script src=\"../../assets/js/ie-emulation-modes-warning.js\"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

    <body>

        <div class=\"blog-masthead\">
            <div class=\"container\">
                <nav class=\"blog-nav\">
                    <a class=\"blog-nav-item active\" href=\"/\">Главная</a>
                    <a class=\"blog-nav-item\" href=\"http://vk.com/\">ВКонтакте</a>
                    <a class=\"blog-nav-item\" href=\"http://onliner.by/\">Onliner</a>
                    <a class=\"blog-nav-item\" href=\"http://facebook.com/\">Facebook</a>
                    <a class=\"blog-nav-item\" href=\"/admin\">Администраторская панель</a>
                </nav>
            </div>
        </div>

        <div class=\"container\">

            <div class=\"blog-header\">
                <h1 class=\"blog-title\">Тестовый новостной портал</h1>
                <p class=\"lead blog-description\">Здесь будут размещены тестовые новости или каталог</p>
            </div>

            <div class=\"row\">

                <div class=\"col-sm-8 blog-main\">
                   ";
        // line 60
        $this->displayBlock('news', $context, $blocks);
        // line 63
        echo "
                    <nav>
                        <ul class=\"pager\">
                            <li><a href=\"#\">Previous</a></li>
                            <li><a href=\"#\">Next</a></li>
                        </ul>
                    </nav>

                </div><!-- /.blog-main -->

      

            </div><!-- /.row -->

        </div><!-- /.container -->

      


        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    </body>
</html>";
        
        $__internal_be46a6e6ab84963eac9ae19c22eab10344be2ea382bfaa07d19a3faa99cbf422->leave($__internal_be46a6e6ab84963eac9ae19c22eab10344be2ea382bfaa07d19a3faa99cbf422_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fb14dbd8bbc942c5daafc57de09038caa66d6e5ee9657521f210e15089f875e = $this->env->getExtension("native_profiler");
        $__internal_8fb14dbd8bbc942c5daafc57de09038caa66d6e5ee9657521f210e15089f875e->enter($__internal_8fb14dbd8bbc942c5daafc57de09038caa66d6e5ee9657521f210e15089f875e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 13
        echo "            
        ";
        
        $__internal_8fb14dbd8bbc942c5daafc57de09038caa66d6e5ee9657521f210e15089f875e->leave($__internal_8fb14dbd8bbc942c5daafc57de09038caa66d6e5ee9657521f210e15089f875e_prof);

    }

    // line 60
    public function block_news($context, array $blocks = array())
    {
        $__internal_2490881dcdba301a1535bd8c4ab8a8c10104cd64a162ef18c889c50c83ae9f94 = $this->env->getExtension("native_profiler");
        $__internal_2490881dcdba301a1535bd8c4ab8a8c10104cd64a162ef18c889c50c83ae9f94->enter($__internal_2490881dcdba301a1535bd8c4ab8a8c10104cd64a162ef18c889c50c83ae9f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "news"));

        // line 61
        echo "                  
                  ";
        
        $__internal_2490881dcdba301a1535bd8c4ab8a8c10104cd64a162ef18c889c50c83ae9f94->leave($__internal_2490881dcdba301a1535bd8c4ab8a8c10104cd64a162ef18c889c50c83ae9f94_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 61,  137 => 60,  129 => 13,  123 => 12,  94 => 63,  92 => 60,  52 => 23,  42 => 15,  40 => 12,  35 => 10,  24 => 1,);
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
/*         <link rel="icon" href="{{asset('web/css/admin/favicon.ico')}}">*/
/* */
/*         {% block title %}*/
/*             */
/*         {% endblock %}*/
/* */
/*         <!-- Latest compiled and minified CSS -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">*/
/* */
/*         <!-- Optional theme -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">*/
/* */
/*         <!-- Custom styles for this template -->*/
/*         <link href="{{asset('web/css/default/blog.css')}}" rel="stylesheet">*/
/* */
/*         <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->*/
/*         <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->*/
/*         <script src="../../assets/js/ie-emulation-modes-warning.js"></script>*/
/* */
/*         <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*         <!--[if lt IE 9]>*/
/*           <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*           <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/* */
/*     <body>*/
/* */
/*         <div class="blog-masthead">*/
/*             <div class="container">*/
/*                 <nav class="blog-nav">*/
/*                     <a class="blog-nav-item active" href="/">Главная</a>*/
/*                     <a class="blog-nav-item" href="http://vk.com/">ВКонтакте</a>*/
/*                     <a class="blog-nav-item" href="http://onliner.by/">Onliner</a>*/
/*                     <a class="blog-nav-item" href="http://facebook.com/">Facebook</a>*/
/*                     <a class="blog-nav-item" href="/admin">Администраторская панель</a>*/
/*                 </nav>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="container">*/
/* */
/*             <div class="blog-header">*/
/*                 <h1 class="blog-title">Тестовый новостной портал</h1>*/
/*                 <p class="lead blog-description">Здесь будут размещены тестовые новости или каталог</p>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/* */
/*                 <div class="col-sm-8 blog-main">*/
/*                    {% block news %}*/
/*                   */
/*                   {% endblock %}*/
/* */
/*                     <nav>*/
/*                         <ul class="pager">*/
/*                             <li><a href="#">Previous</a></li>*/
/*                             <li><a href="#">Next</a></li>*/
/*                         </ul>*/
/*                     </nav>*/
/* */
/*                 </div><!-- /.blog-main -->*/
/* */
/*       */
/* */
/*             </div><!-- /.row -->*/
/* */
/*         </div><!-- /.container -->*/
/* */
/*       */
/* */
/* */
/*         <!-- Latest compiled and minified JavaScript -->*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>*/
/*     </body>*/
/* </html>*/
