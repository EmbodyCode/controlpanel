<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_26346b42ca54c2131bd03485d430e9aa10a5b704c8a8044820771c4c59905e0a extends Twig_Template
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
        $__internal_0e6be8f43b180518684c64752801d4d8f1a0da8755a178c040526c7dd132f232 = $this->env->getExtension("native_profiler");
        $__internal_0e6be8f43b180518684c64752801d4d8f1a0da8755a178c040526c7dd132f232->enter($__internal_0e6be8f43b180518684c64752801d4d8f1a0da8755a178c040526c7dd132f232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0e6be8f43b180518684c64752801d4d8f1a0da8755a178c040526c7dd132f232->leave($__internal_0e6be8f43b180518684c64752801d4d8f1a0da8755a178c040526c7dd132f232_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
