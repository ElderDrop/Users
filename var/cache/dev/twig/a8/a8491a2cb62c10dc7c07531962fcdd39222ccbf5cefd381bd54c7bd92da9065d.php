<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b8da6e9f805b681a6ddba699bd6858c53ff97cffb98b4a339f35a4c8a5f7755d extends Twig_Template
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
        $__internal_d24ad346c04035b47055839de74afdd5adddd11047ee33bea8aa177a0b7dca37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24ad346c04035b47055839de74afdd5adddd11047ee33bea8aa177a0b7dca37->enter($__internal_d24ad346c04035b47055839de74afdd5adddd11047ee33bea8aa177a0b7dca37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_586050633028a1cdb48c51b1c2f28f6aa619b0d1e83bbb09f63187b22a6cd8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_586050633028a1cdb48c51b1c2f28f6aa619b0d1e83bbb09f63187b22a6cd8d9->enter($__internal_586050633028a1cdb48c51b1c2f28f6aa619b0d1e83bbb09f63187b22a6cd8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d24ad346c04035b47055839de74afdd5adddd11047ee33bea8aa177a0b7dca37->leave($__internal_d24ad346c04035b47055839de74afdd5adddd11047ee33bea8aa177a0b7dca37_prof);

        
        $__internal_586050633028a1cdb48c51b1c2f28f6aa619b0d1e83bbb09f63187b22a6cd8d9->leave($__internal_586050633028a1cdb48c51b1c2f28f6aa619b0d1e83bbb09f63187b22a6cd8d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
