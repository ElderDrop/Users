<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1bc474d337d1951aeddc1f87ac062ec4e739954a6f3142fab51d43f132db0481 extends Twig_Template
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
        $__internal_2970c4b97a2732a00a1c0c06428c4280d4c44d7c847c6398978ee7a161cbeb56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2970c4b97a2732a00a1c0c06428c4280d4c44d7c847c6398978ee7a161cbeb56->enter($__internal_2970c4b97a2732a00a1c0c06428c4280d4c44d7c847c6398978ee7a161cbeb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2e114f62ea83e8813a331f039338f7f0e0c4204efc5954697d30da075d9d3119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e114f62ea83e8813a331f039338f7f0e0c4204efc5954697d30da075d9d3119->enter($__internal_2e114f62ea83e8813a331f039338f7f0e0c4204efc5954697d30da075d9d3119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2970c4b97a2732a00a1c0c06428c4280d4c44d7c847c6398978ee7a161cbeb56->leave($__internal_2970c4b97a2732a00a1c0c06428c4280d4c44d7c847c6398978ee7a161cbeb56_prof);

        
        $__internal_2e114f62ea83e8813a331f039338f7f0e0c4204efc5954697d30da075d9d3119->leave($__internal_2e114f62ea83e8813a331f039338f7f0e0c4204efc5954697d30da075d9d3119_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
