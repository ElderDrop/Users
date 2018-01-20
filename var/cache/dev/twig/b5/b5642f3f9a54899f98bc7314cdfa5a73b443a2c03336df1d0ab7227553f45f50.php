<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_184fe9fe4cb25b88adca5994bf95dce33b9937d6d9190837ee30ca37bd1dff4b extends Twig_Template
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
        $__internal_74b526d7f63271fa84fc89dac2af2eaba977e34b33e79d05c97476746c71bf27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b526d7f63271fa84fc89dac2af2eaba977e34b33e79d05c97476746c71bf27->enter($__internal_74b526d7f63271fa84fc89dac2af2eaba977e34b33e79d05c97476746c71bf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_2bdf891b0e011f9d69e7366ddcb91c93910229d203e2d5914baf8a508ad1cefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bdf891b0e011f9d69e7366ddcb91c93910229d203e2d5914baf8a508ad1cefe->enter($__internal_2bdf891b0e011f9d69e7366ddcb91c93910229d203e2d5914baf8a508ad1cefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_74b526d7f63271fa84fc89dac2af2eaba977e34b33e79d05c97476746c71bf27->leave($__internal_74b526d7f63271fa84fc89dac2af2eaba977e34b33e79d05c97476746c71bf27_prof);

        
        $__internal_2bdf891b0e011f9d69e7366ddcb91c93910229d203e2d5914baf8a508ad1cefe->leave($__internal_2bdf891b0e011f9d69e7366ddcb91c93910229d203e2d5914baf8a508ad1cefe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
