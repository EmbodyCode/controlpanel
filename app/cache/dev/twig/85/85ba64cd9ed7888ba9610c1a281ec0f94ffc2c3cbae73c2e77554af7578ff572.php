<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_245e3aac5d3a3cf21bfd4279f7bed93768cc3725af4c2b7e0f2412d8e4860eef extends Twig_Template
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
        $__internal_888e00011c7ae707def4fa5d3029d8ffa3e4d61f825c95f868602252d1b5f98a = $this->env->getExtension("native_profiler");
        $__internal_888e00011c7ae707def4fa5d3029d8ffa3e4d61f825c95f868602252d1b5f98a->enter($__internal_888e00011c7ae707def4fa5d3029d8ffa3e4d61f825c95f868602252d1b5f98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_888e00011c7ae707def4fa5d3029d8ffa3e4d61f825c95f868602252d1b5f98a->leave($__internal_888e00011c7ae707def4fa5d3029d8ffa3e4d61f825c95f868602252d1b5f98a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
