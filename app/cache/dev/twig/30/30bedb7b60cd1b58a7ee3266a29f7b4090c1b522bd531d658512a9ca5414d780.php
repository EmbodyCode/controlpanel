<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_4a392ac1bb41573ca258c234ce5f3cfe0e88f14e37a6d24d775f2c1223be9f4a extends Twig_Template
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
        $__internal_d256f713c5aa1d13591ebc1f232155afb2a8a98157174531d8cc92a6e54eac8f = $this->env->getExtension("native_profiler");
        $__internal_d256f713c5aa1d13591ebc1f232155afb2a8a98157174531d8cc92a6e54eac8f->enter($__internal_d256f713c5aa1d13591ebc1f232155afb2a8a98157174531d8cc92a6e54eac8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d256f713c5aa1d13591ebc1f232155afb2a8a98157174531d8cc92a6e54eac8f->leave($__internal_d256f713c5aa1d13591ebc1f232155afb2a8a98157174531d8cc92a6e54eac8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
