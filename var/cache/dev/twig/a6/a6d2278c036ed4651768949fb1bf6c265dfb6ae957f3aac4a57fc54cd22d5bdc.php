<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_46c168e96e08de8af8091b4e88461f581b18645c75d55ecbc3ff160475e7062c extends Twig_Template
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
        $__internal_38c669c6eeade7fa564790718310a3cf1293bc84ad916193efe1d4eb54249889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c669c6eeade7fa564790718310a3cf1293bc84ad916193efe1d4eb54249889->enter($__internal_38c669c6eeade7fa564790718310a3cf1293bc84ad916193efe1d4eb54249889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_79b98cdeb3202b4a7dcee46a65c1dc77967b1d352cef05fcbd8d33f458f3fa28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b98cdeb3202b4a7dcee46a65c1dc77967b1d352cef05fcbd8d33f458f3fa28->enter($__internal_79b98cdeb3202b4a7dcee46a65c1dc77967b1d352cef05fcbd8d33f458f3fa28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_38c669c6eeade7fa564790718310a3cf1293bc84ad916193efe1d4eb54249889->leave($__internal_38c669c6eeade7fa564790718310a3cf1293bc84ad916193efe1d4eb54249889_prof);

        
        $__internal_79b98cdeb3202b4a7dcee46a65c1dc77967b1d352cef05fcbd8d33f458f3fa28->leave($__internal_79b98cdeb3202b4a7dcee46a65c1dc77967b1d352cef05fcbd8d33f458f3fa28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
