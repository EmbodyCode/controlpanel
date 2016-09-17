<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2d8c18e02667b6c27dca0e8162a222e7cfdae609b94d62c6369d7af388982c36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c51697b5333faa3b056ae4bd6493720271e61b24a3507b4afed4c0287b5c4688 = $this->env->getExtension("native_profiler");
        $__internal_c51697b5333faa3b056ae4bd6493720271e61b24a3507b4afed4c0287b5c4688->enter($__internal_c51697b5333faa3b056ae4bd6493720271e61b24a3507b4afed4c0287b5c4688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c51697b5333faa3b056ae4bd6493720271e61b24a3507b4afed4c0287b5c4688->leave($__internal_c51697b5333faa3b056ae4bd6493720271e61b24a3507b4afed4c0287b5c4688_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
