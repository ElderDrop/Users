<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_547992443f32d5816e250d58a023ce49ea8132c8dd059bf00b5478a2c3eae7fc extends Twig_Template
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
        $__internal_b3a74802d4216cd1c276244fbc22e69def740e061dee4b230294dde930ae5eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a74802d4216cd1c276244fbc22e69def740e061dee4b230294dde930ae5eed->enter($__internal_b3a74802d4216cd1c276244fbc22e69def740e061dee4b230294dde930ae5eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_9910edb2abf0b5d49ebd118a3c8e7baf6c1e6b79c8b49b7f5e9d119417162d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9910edb2abf0b5d49ebd118a3c8e7baf6c1e6b79c8b49b7f5e9d119417162d48->enter($__internal_9910edb2abf0b5d49ebd118a3c8e7baf6c1e6b79c8b49b7f5e9d119417162d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b3a74802d4216cd1c276244fbc22e69def740e061dee4b230294dde930ae5eed->leave($__internal_b3a74802d4216cd1c276244fbc22e69def740e061dee4b230294dde930ae5eed_prof);

        
        $__internal_9910edb2abf0b5d49ebd118a3c8e7baf6c1e6b79c8b49b7f5e9d119417162d48->leave($__internal_9910edb2abf0b5d49ebd118a3c8e7baf6c1e6b79c8b49b7f5e9d119417162d48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
