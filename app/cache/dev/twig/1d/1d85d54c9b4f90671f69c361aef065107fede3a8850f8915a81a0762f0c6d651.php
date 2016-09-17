<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_576f8bd461f476d602b15454127727082d9d2ad1fc5d75c8e9bc10b1ca69a134 extends Twig_Template
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
        $__internal_d6e57d55f4cef6e596c23f5613f343c7eb765beb524c1a939377d943cfa871ba = $this->env->getExtension("native_profiler");
        $__internal_d6e57d55f4cef6e596c23f5613f343c7eb765beb524c1a939377d943cfa871ba->enter($__internal_d6e57d55f4cef6e596c23f5613f343c7eb765beb524c1a939377d943cfa871ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d6e57d55f4cef6e596c23f5613f343c7eb765beb524c1a939377d943cfa871ba->leave($__internal_d6e57d55f4cef6e596c23f5613f343c7eb765beb524c1a939377d943cfa871ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
