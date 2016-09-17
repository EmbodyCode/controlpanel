<?php

/* AppBundle:Default:layout.html.twig */
class __TwigTemplate_8258c0c9bb899cc3c2986ebf436efb79155d44011ee430e193b2ca31b64edb9e extends Twig_Template
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
        $__internal_709e181f04204eff7100b966f3f2bf2140c6998578375bd1d53ccc787c0bef05 = $this->env->getExtension("native_profiler");
        $__internal_709e181f04204eff7100b966f3f2bf2140c6998578375bd1d53ccc787c0bef05->enter($__internal_709e181f04204eff7100b966f3f2bf2140c6998578375bd1d53ccc787c0bef05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:layout.html.twig"));

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
        
        $__internal_709e181f04204eff7100b966f3f2bf2140c6998578375bd1d53ccc787c0bef05->leave($__internal_709e181f04204eff7100b966f3f2bf2140c6998578375bd1d53ccc787c0bef05_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_5401b76981cb31eaafd0cb4514839884c1f30506f9a139bb06611ab8a75371f2 = $this->env->getExtension("native_profiler");
        $__internal_5401b76981cb31eaafd0cb4514839884c1f30506f9a139bb06611ab8a75371f2->enter($__internal_5401b76981cb31eaafd0cb4514839884c1f30506f9a139bb06611ab8a75371f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 13
        echo "            
        ";
        
        $__internal_5401b76981cb31eaafd0cb4514839884c1f30506f9a139bb06611ab8a75371f2->leave($__internal_5401b76981cb31eaafd0cb4514839884c1f30506f9a139bb06611ab8a75371f2_prof);

    }

    // line 60
    public function block_news($context, array $blocks = array())
    {
        $__internal_d6882de43cff33441fa1172ce57a25dc97864a4cdf0e3b0ce4d1a123febcc5d1 = $this->env->getExtension("native_profiler");
        $__internal_d6882de43cff33441fa1172ce57a25dc97864a4cdf0e3b0ce4d1a123febcc5d1->enter($__internal_d6882de43cff33441fa1172ce57a25dc97864a4cdf0e3b0ce4d1a123febcc5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "news"));

        // line 61
        echo "                  
                  ";
        
        $__internal_d6882de43cff33441fa1172ce57a25dc97864a4cdf0e3b0ce4d1a123febcc5d1->leave($__internal_d6882de43cff33441fa1172ce57a25dc97864a4cdf0e3b0ce4d1a123febcc5d1_prof);

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
