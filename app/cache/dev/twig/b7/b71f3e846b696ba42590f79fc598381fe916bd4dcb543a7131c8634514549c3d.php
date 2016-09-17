<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_21c18827e1d1bb9e5128291354eec316833f110afaeaf0b8ba960da609caa4e4 extends Twig_Template
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
        $__internal_54b285b143e8e11abc0be8938400f8c95fb92cd8f159dc61a0b273dd0401f9a0 = $this->env->getExtension("native_profiler");
        $__internal_54b285b143e8e11abc0be8938400f8c95fb92cd8f159dc61a0b273dd0401f9a0->enter($__internal_54b285b143e8e11abc0be8938400f8c95fb92cd8f159dc61a0b273dd0401f9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_54b285b143e8e11abc0be8938400f8c95fb92cd8f159dc61a0b273dd0401f9a0->leave($__internal_54b285b143e8e11abc0be8938400f8c95fb92cd8f159dc61a0b273dd0401f9a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
