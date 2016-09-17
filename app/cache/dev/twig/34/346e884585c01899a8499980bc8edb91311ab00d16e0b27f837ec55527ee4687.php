<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e450b23087fa4a8dafeed18a991459500eec3255585a9c0d7af02fb05f5b2e95 extends Twig_Template
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
        $__internal_51f4901726c04028ec1b9ffc9ff727ae31c084421b43948a890bbd4d7b2f0e4f = $this->env->getExtension("native_profiler");
        $__internal_51f4901726c04028ec1b9ffc9ff727ae31c084421b43948a890bbd4d7b2f0e4f->enter($__internal_51f4901726c04028ec1b9ffc9ff727ae31c084421b43948a890bbd4d7b2f0e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_51f4901726c04028ec1b9ffc9ff727ae31c084421b43948a890bbd4d7b2f0e4f->leave($__internal_51f4901726c04028ec1b9ffc9ff727ae31c084421b43948a890bbd4d7b2f0e4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
