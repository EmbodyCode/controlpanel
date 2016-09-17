<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b63fdd73f06a47df34e537297df800fe0bc7fdcf3c26bd27f638857b66bfc8bd extends Twig_Template
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
        $__internal_7ab76ca97ba6b26eff1404b2021caa05ba25eaffb091e0cb02e00a7851d07136 = $this->env->getExtension("native_profiler");
        $__internal_7ab76ca97ba6b26eff1404b2021caa05ba25eaffb091e0cb02e00a7851d07136->enter($__internal_7ab76ca97ba6b26eff1404b2021caa05ba25eaffb091e0cb02e00a7851d07136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7ab76ca97ba6b26eff1404b2021caa05ba25eaffb091e0cb02e00a7851d07136->leave($__internal_7ab76ca97ba6b26eff1404b2021caa05ba25eaffb091e0cb02e00a7851d07136_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
