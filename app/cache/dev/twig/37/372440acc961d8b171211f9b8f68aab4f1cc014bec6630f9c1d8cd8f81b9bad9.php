<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e408ade9fbb91f5e648d3863160122a0831d52d28c8e6d845b2b4fdbefffae08 extends Twig_Template
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
        $__internal_78e5e020c6a75833f9532d4138c493f361ca5c79784e242e0319d838270d4935 = $this->env->getExtension("native_profiler");
        $__internal_78e5e020c6a75833f9532d4138c493f361ca5c79784e242e0319d838270d4935->enter($__internal_78e5e020c6a75833f9532d4138c493f361ca5c79784e242e0319d838270d4935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_78e5e020c6a75833f9532d4138c493f361ca5c79784e242e0319d838270d4935->leave($__internal_78e5e020c6a75833f9532d4138c493f361ca5c79784e242e0319d838270d4935_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
