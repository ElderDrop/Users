<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_3cdbc9aabe250714bd1dfaa5c015940c3c928e60abb3a7ff1a0298062804ccec extends Twig_Template
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
        $__internal_cd6449f1947f6e042a75ce6910f35fb0a00852649590be8920cfcc7ad8bbb3eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6449f1947f6e042a75ce6910f35fb0a00852649590be8920cfcc7ad8bbb3eb->enter($__internal_cd6449f1947f6e042a75ce6910f35fb0a00852649590be8920cfcc7ad8bbb3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_4a13ff8bdcb686d0b2decf009c5fe9b083bcfe4f75b7fc049efdedb22d17de18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a13ff8bdcb686d0b2decf009c5fe9b083bcfe4f75b7fc049efdedb22d17de18->enter($__internal_4a13ff8bdcb686d0b2decf009c5fe9b083bcfe4f75b7fc049efdedb22d17de18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_cd6449f1947f6e042a75ce6910f35fb0a00852649590be8920cfcc7ad8bbb3eb->leave($__internal_cd6449f1947f6e042a75ce6910f35fb0a00852649590be8920cfcc7ad8bbb3eb_prof);

        
        $__internal_4a13ff8bdcb686d0b2decf009c5fe9b083bcfe4f75b7fc049efdedb22d17de18->leave($__internal_4a13ff8bdcb686d0b2decf009c5fe9b083bcfe4f75b7fc049efdedb22d17de18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
