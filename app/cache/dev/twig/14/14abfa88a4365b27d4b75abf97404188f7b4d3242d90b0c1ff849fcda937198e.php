<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7d14bab3a7d15667ba32eaa49260c48ff8e18af910991a127f1051a4781d7777 extends Twig_Template
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
        $__internal_8ba1d86085fedfbde94a3b6214d7e7db46d6c2035765655b2a170db559fe8e4d = $this->env->getExtension("native_profiler");
        $__internal_8ba1d86085fedfbde94a3b6214d7e7db46d6c2035765655b2a170db559fe8e4d->enter($__internal_8ba1d86085fedfbde94a3b6214d7e7db46d6c2035765655b2a170db559fe8e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8ba1d86085fedfbde94a3b6214d7e7db46d6c2035765655b2a170db559fe8e4d->leave($__internal_8ba1d86085fedfbde94a3b6214d7e7db46d6c2035765655b2a170db559fe8e4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
