<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_dc0acf1e49d506903c0b32dd90da7f6e8bf1b52e5a0b524447558c0576a1dec0 extends Twig_Template
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
        $__internal_9430524e8068289f8c7b6e53be3c0343f581cc15f09f4fee07d7af976f610c23 = $this->env->getExtension("native_profiler");
        $__internal_9430524e8068289f8c7b6e53be3c0343f581cc15f09f4fee07d7af976f610c23->enter($__internal_9430524e8068289f8c7b6e53be3c0343f581cc15f09f4fee07d7af976f610c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9430524e8068289f8c7b6e53be3c0343f581cc15f09f4fee07d7af976f610c23->leave($__internal_9430524e8068289f8c7b6e53be3c0343f581cc15f09f4fee07d7af976f610c23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
