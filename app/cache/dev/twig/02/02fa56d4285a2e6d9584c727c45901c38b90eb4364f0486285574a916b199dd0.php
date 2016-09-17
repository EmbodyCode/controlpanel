<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f10aebc5b361b28db39e33d9e825441fb2c0b9918800c8c8c44817012b8c90d1 extends Twig_Template
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
        $__internal_853f62a4d90e2c098e555d8da0d76e8ebd9f086cbc9647b812c6726e8b6c6525 = $this->env->getExtension("native_profiler");
        $__internal_853f62a4d90e2c098e555d8da0d76e8ebd9f086cbc9647b812c6726e8b6c6525->enter($__internal_853f62a4d90e2c098e555d8da0d76e8ebd9f086cbc9647b812c6726e8b6c6525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_853f62a4d90e2c098e555d8da0d76e8ebd9f086cbc9647b812c6726e8b6c6525->leave($__internal_853f62a4d90e2c098e555d8da0d76e8ebd9f086cbc9647b812c6726e8b6c6525_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
