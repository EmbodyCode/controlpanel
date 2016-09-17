<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_bd644ae5bd92d15ce2dfb76acb60050080ba47af6aed5f65bd58e828f7893b5c extends Twig_Template
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
        $__internal_540e0d9ed6e0dbf9b2c01ba7a27be91c4cbe781ee3f4986734e5ee7452029f4c = $this->env->getExtension("native_profiler");
        $__internal_540e0d9ed6e0dbf9b2c01ba7a27be91c4cbe781ee3f4986734e5ee7452029f4c->enter($__internal_540e0d9ed6e0dbf9b2c01ba7a27be91c4cbe781ee3f4986734e5ee7452029f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_540e0d9ed6e0dbf9b2c01ba7a27be91c4cbe781ee3f4986734e5ee7452029f4c->leave($__internal_540e0d9ed6e0dbf9b2c01ba7a27be91c4cbe781ee3f4986734e5ee7452029f4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
