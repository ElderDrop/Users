<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_fe7df7f152cd7ae43ed97b1c2e808c9ff33cad6950b5d3bc1efef859db3f3969 extends Twig_Template
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
        $__internal_67730af4562f6ddf7e6fc2bf5971a9e1ae92452c3c1c114ee6818fb424f5d9f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67730af4562f6ddf7e6fc2bf5971a9e1ae92452c3c1c114ee6818fb424f5d9f5->enter($__internal_67730af4562f6ddf7e6fc2bf5971a9e1ae92452c3c1c114ee6818fb424f5d9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_6657b7abc493a5ba768975f18d56d7a485ac168897b9e43fa77a7ca128e9c212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6657b7abc493a5ba768975f18d56d7a485ac168897b9e43fa77a7ca128e9c212->enter($__internal_6657b7abc493a5ba768975f18d56d7a485ac168897b9e43fa77a7ca128e9c212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_67730af4562f6ddf7e6fc2bf5971a9e1ae92452c3c1c114ee6818fb424f5d9f5->leave($__internal_67730af4562f6ddf7e6fc2bf5971a9e1ae92452c3c1c114ee6818fb424f5d9f5_prof);

        
        $__internal_6657b7abc493a5ba768975f18d56d7a485ac168897b9e43fa77a7ca128e9c212->leave($__internal_6657b7abc493a5ba768975f18d56d7a485ac168897b9e43fa77a7ca128e9c212_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
