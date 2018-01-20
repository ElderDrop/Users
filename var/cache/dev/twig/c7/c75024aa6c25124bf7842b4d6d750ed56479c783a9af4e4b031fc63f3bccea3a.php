<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_326753a53b42edb4cc0b7d480c1a7a2dce3772a0ae6c8a31d97b3fb907c55d0f extends Twig_Template
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
        $__internal_179fcac38fa1aa592be49fdb2edc7d5df1bfd8e1d32476899d9b972a15d92bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179fcac38fa1aa592be49fdb2edc7d5df1bfd8e1d32476899d9b972a15d92bcf->enter($__internal_179fcac38fa1aa592be49fdb2edc7d5df1bfd8e1d32476899d9b972a15d92bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f9dacf5865aff90fc6a53972fb63e7040cab76ed6d750919338bcfeb8b72524b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9dacf5865aff90fc6a53972fb63e7040cab76ed6d750919338bcfeb8b72524b->enter($__internal_f9dacf5865aff90fc6a53972fb63e7040cab76ed6d750919338bcfeb8b72524b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_179fcac38fa1aa592be49fdb2edc7d5df1bfd8e1d32476899d9b972a15d92bcf->leave($__internal_179fcac38fa1aa592be49fdb2edc7d5df1bfd8e1d32476899d9b972a15d92bcf_prof);

        
        $__internal_f9dacf5865aff90fc6a53972fb63e7040cab76ed6d750919338bcfeb8b72524b->leave($__internal_f9dacf5865aff90fc6a53972fb63e7040cab76ed6d750919338bcfeb8b72524b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
