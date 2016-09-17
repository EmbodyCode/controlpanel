<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_45aa537f55c68c1953a51a7d42460d43243e1642bc6fd411cd3b690c45556e34 extends Twig_Template
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
        $__internal_ca57033afd4098a9e7e13ae67416172821232055a7e3139d68dd9d3b5862e569 = $this->env->getExtension("native_profiler");
        $__internal_ca57033afd4098a9e7e13ae67416172821232055a7e3139d68dd9d3b5862e569->enter($__internal_ca57033afd4098a9e7e13ae67416172821232055a7e3139d68dd9d3b5862e569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ca57033afd4098a9e7e13ae67416172821232055a7e3139d68dd9d3b5862e569->leave($__internal_ca57033afd4098a9e7e13ae67416172821232055a7e3139d68dd9d3b5862e569_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
