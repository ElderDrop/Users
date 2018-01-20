<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_2c1c7da846fca072a4e247cff44e0aa648af0a1bcd12ddb5a43af326e7fee7bd extends Twig_Template
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
        $__internal_8c9b2ce70228553e2ff844d1f49f238f86e8e4fd051ec8fc6b83491a7a4fdc7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c9b2ce70228553e2ff844d1f49f238f86e8e4fd051ec8fc6b83491a7a4fdc7b->enter($__internal_8c9b2ce70228553e2ff844d1f49f238f86e8e4fd051ec8fc6b83491a7a4fdc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7dd2f844c82684169647ef9f15df404473bed4774abeb7c373e7f7f166dbe66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd2f844c82684169647ef9f15df404473bed4774abeb7c373e7f7f166dbe66e->enter($__internal_7dd2f844c82684169647ef9f15df404473bed4774abeb7c373e7f7f166dbe66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8c9b2ce70228553e2ff844d1f49f238f86e8e4fd051ec8fc6b83491a7a4fdc7b->leave($__internal_8c9b2ce70228553e2ff844d1f49f238f86e8e4fd051ec8fc6b83491a7a4fdc7b_prof);

        
        $__internal_7dd2f844c82684169647ef9f15df404473bed4774abeb7c373e7f7f166dbe66e->leave($__internal_7dd2f844c82684169647ef9f15df404473bed4774abeb7c373e7f7f166dbe66e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
