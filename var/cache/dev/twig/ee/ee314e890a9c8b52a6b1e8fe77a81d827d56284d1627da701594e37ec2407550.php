<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3829f5ccde5177f34ae74cb36969d11b6d1d379dc44dde03ea4df813a4b55313 extends Twig_Template
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
        $__internal_7bb4de6e86b564179535f8b8a7245c8cbfaa3154bc6cf7d139aba520c1f96ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb4de6e86b564179535f8b8a7245c8cbfaa3154bc6cf7d139aba520c1f96ad0->enter($__internal_7bb4de6e86b564179535f8b8a7245c8cbfaa3154bc6cf7d139aba520c1f96ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_34c9fedc598a79e9d8f45a4c4ed7fb523855ee95089064bd86ccf744384049b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c9fedc598a79e9d8f45a4c4ed7fb523855ee95089064bd86ccf744384049b2->enter($__internal_34c9fedc598a79e9d8f45a4c4ed7fb523855ee95089064bd86ccf744384049b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7bb4de6e86b564179535f8b8a7245c8cbfaa3154bc6cf7d139aba520c1f96ad0->leave($__internal_7bb4de6e86b564179535f8b8a7245c8cbfaa3154bc6cf7d139aba520c1f96ad0_prof);

        
        $__internal_34c9fedc598a79e9d8f45a4c4ed7fb523855ee95089064bd86ccf744384049b2->leave($__internal_34c9fedc598a79e9d8f45a4c4ed7fb523855ee95089064bd86ccf744384049b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
