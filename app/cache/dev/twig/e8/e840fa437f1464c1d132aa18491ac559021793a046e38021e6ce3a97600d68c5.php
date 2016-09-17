<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_bb22edd05c156cebbd45359db61868a7ad6e455300cd5fb2bd2aca44825f8a25 extends Twig_Template
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
        $__internal_7a7588059e383f64cf53a144e0cbe328b5ac210c155873459c4a349c4067a8df = $this->env->getExtension("native_profiler");
        $__internal_7a7588059e383f64cf53a144e0cbe328b5ac210c155873459c4a349c4067a8df->enter($__internal_7a7588059e383f64cf53a144e0cbe328b5ac210c155873459c4a349c4067a8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7a7588059e383f64cf53a144e0cbe328b5ac210c155873459c4a349c4067a8df->leave($__internal_7a7588059e383f64cf53a144e0cbe328b5ac210c155873459c4a349c4067a8df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
