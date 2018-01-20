<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_fdfabe0767f811f69070c965678a52e431e68c2b08fd12c5b562e24c2834477f extends Twig_Template
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
        $__internal_fbee448f36b979da815daebfc4c80fe5bd933964f594cb444f9989d2233950e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbee448f36b979da815daebfc4c80fe5bd933964f594cb444f9989d2233950e1->enter($__internal_fbee448f36b979da815daebfc4c80fe5bd933964f594cb444f9989d2233950e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_c32b5696fd4e28423071b5e62df018a6fcbb8391226083788b2eee9d744af425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32b5696fd4e28423071b5e62df018a6fcbb8391226083788b2eee9d744af425->enter($__internal_c32b5696fd4e28423071b5e62df018a6fcbb8391226083788b2eee9d744af425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_fbee448f36b979da815daebfc4c80fe5bd933964f594cb444f9989d2233950e1->leave($__internal_fbee448f36b979da815daebfc4c80fe5bd933964f594cb444f9989d2233950e1_prof);

        
        $__internal_c32b5696fd4e28423071b5e62df018a6fcbb8391226083788b2eee9d744af425->leave($__internal_c32b5696fd4e28423071b5e62df018a6fcbb8391226083788b2eee9d744af425_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
