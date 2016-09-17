<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6af3ac32d3074d133ab863855074e711a528bfb556ff412f59f17a729eff3e0b extends Twig_Template
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
        $__internal_a63ede369d811333ba172c878c96f77fc630475394b8a63ba6770f78257098d4 = $this->env->getExtension("native_profiler");
        $__internal_a63ede369d811333ba172c878c96f77fc630475394b8a63ba6770f78257098d4->enter($__internal_a63ede369d811333ba172c878c96f77fc630475394b8a63ba6770f78257098d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a63ede369d811333ba172c878c96f77fc630475394b8a63ba6770f78257098d4->leave($__internal_a63ede369d811333ba172c878c96f77fc630475394b8a63ba6770f78257098d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
