<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_a3290159c53a6ce06706d0e168b7866336c19b9f45ad846f3fe019470927d00d extends Twig_Template
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
        $__internal_a245b40c93b452d8fc7dcac1692f246437b31689ffd38a2f2fdac697ec571617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a245b40c93b452d8fc7dcac1692f246437b31689ffd38a2f2fdac697ec571617->enter($__internal_a245b40c93b452d8fc7dcac1692f246437b31689ffd38a2f2fdac697ec571617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f24f0034c0c5213b6d5dc6bd647c886e992df7fe640593b19d18f2d88ec1c458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24f0034c0c5213b6d5dc6bd647c886e992df7fe640593b19d18f2d88ec1c458->enter($__internal_f24f0034c0c5213b6d5dc6bd647c886e992df7fe640593b19d18f2d88ec1c458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a245b40c93b452d8fc7dcac1692f246437b31689ffd38a2f2fdac697ec571617->leave($__internal_a245b40c93b452d8fc7dcac1692f246437b31689ffd38a2f2fdac697ec571617_prof);

        
        $__internal_f24f0034c0c5213b6d5dc6bd647c886e992df7fe640593b19d18f2d88ec1c458->leave($__internal_f24f0034c0c5213b6d5dc6bd647c886e992df7fe640593b19d18f2d88ec1c458_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
