<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_33adbfa345996d227d6b81e1b7c9360bca6a49b01bec3d739d0917199e443156 extends Twig_Template
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
        $__internal_a6c0978595ad25d179779ad762f663e554d2b21bc117bc1841d56b4addb3322a = $this->env->getExtension("native_profiler");
        $__internal_a6c0978595ad25d179779ad762f663e554d2b21bc117bc1841d56b4addb3322a->enter($__internal_a6c0978595ad25d179779ad762f663e554d2b21bc117bc1841d56b4addb3322a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a6c0978595ad25d179779ad762f663e554d2b21bc117bc1841d56b4addb3322a->leave($__internal_a6c0978595ad25d179779ad762f663e554d2b21bc117bc1841d56b4addb3322a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
