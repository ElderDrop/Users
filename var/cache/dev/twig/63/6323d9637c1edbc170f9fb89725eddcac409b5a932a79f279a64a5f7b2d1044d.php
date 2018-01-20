<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_232e9393ae90e87a4069883a6c423a8ede98e15e412731b233e6d05b529fa4ff extends Twig_Template
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
        $__internal_02b119a25a71749b8de60508b5096cc9a4aeca7064698b86826cb539565fc7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b119a25a71749b8de60508b5096cc9a4aeca7064698b86826cb539565fc7b2->enter($__internal_02b119a25a71749b8de60508b5096cc9a4aeca7064698b86826cb539565fc7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_21025fb3351acfdfebff10fe08bd0a2f54ad9b38f30995eedba4c25edf609bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21025fb3351acfdfebff10fe08bd0a2f54ad9b38f30995eedba4c25edf609bb0->enter($__internal_21025fb3351acfdfebff10fe08bd0a2f54ad9b38f30995eedba4c25edf609bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_02b119a25a71749b8de60508b5096cc9a4aeca7064698b86826cb539565fc7b2->leave($__internal_02b119a25a71749b8de60508b5096cc9a4aeca7064698b86826cb539565fc7b2_prof);

        
        $__internal_21025fb3351acfdfebff10fe08bd0a2f54ad9b38f30995eedba4c25edf609bb0->leave($__internal_21025fb3351acfdfebff10fe08bd0a2f54ad9b38f30995eedba4c25edf609bb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
