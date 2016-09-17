<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3da8fd2ede80cab0fc7ce975dd7f5902c755573e24f260b5ebf607e85b7769c9 extends Twig_Template
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
        $__internal_fac6af71f059ba4ad09524cbb024f98d79d553735133af95cc25bc1ca57feb6d = $this->env->getExtension("native_profiler");
        $__internal_fac6af71f059ba4ad09524cbb024f98d79d553735133af95cc25bc1ca57feb6d->enter($__internal_fac6af71f059ba4ad09524cbb024f98d79d553735133af95cc25bc1ca57feb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fac6af71f059ba4ad09524cbb024f98d79d553735133af95cc25bc1ca57feb6d->leave($__internal_fac6af71f059ba4ad09524cbb024f98d79d553735133af95cc25bc1ca57feb6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
