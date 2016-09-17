<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b67a48c6293ad00563ebc418a35c52636b7855fa5173cf3d0abaa84d85eaf30f extends Twig_Template
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
        $__internal_9d359467ec58c0cad9d45d676c711fc6c3481a3b4d1521534c46ac7e9f78ca69 = $this->env->getExtension("native_profiler");
        $__internal_9d359467ec58c0cad9d45d676c711fc6c3481a3b4d1521534c46ac7e9f78ca69->enter($__internal_9d359467ec58c0cad9d45d676c711fc6c3481a3b4d1521534c46ac7e9f78ca69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9d359467ec58c0cad9d45d676c711fc6c3481a3b4d1521534c46ac7e9f78ca69->leave($__internal_9d359467ec58c0cad9d45d676c711fc6c3481a3b4d1521534c46ac7e9f78ca69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
