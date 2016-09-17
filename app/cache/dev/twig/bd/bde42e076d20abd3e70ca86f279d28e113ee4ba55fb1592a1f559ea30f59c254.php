<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f6c61c36c41d3d6b25943f71e679c1b8b41f51010718ca71be5702b5addf5b28 extends Twig_Template
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
        $__internal_cf533ca352d67dc52d5e0d425e5ef221a7e5d9133c935abcedea366d46cc23c0 = $this->env->getExtension("native_profiler");
        $__internal_cf533ca352d67dc52d5e0d425e5ef221a7e5d9133c935abcedea366d46cc23c0->enter($__internal_cf533ca352d67dc52d5e0d425e5ef221a7e5d9133c935abcedea366d46cc23c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cf533ca352d67dc52d5e0d425e5ef221a7e5d9133c935abcedea366d46cc23c0->leave($__internal_cf533ca352d67dc52d5e0d425e5ef221a7e5d9133c935abcedea366d46cc23c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
