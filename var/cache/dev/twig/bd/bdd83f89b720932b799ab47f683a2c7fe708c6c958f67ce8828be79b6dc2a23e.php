<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ecd9a1a0fd7c7cf637b2a7651193aa87936458812a903f219ed83be8d1ba38d9 extends Twig_Template
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
        $__internal_dc6519a5ce99563a6ef1ca2b4b68393f83aa58f133a11ad8cb4560d487f48f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6519a5ce99563a6ef1ca2b4b68393f83aa58f133a11ad8cb4560d487f48f1c->enter($__internal_dc6519a5ce99563a6ef1ca2b4b68393f83aa58f133a11ad8cb4560d487f48f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1bee0a076457206a19eb88587c78ee6fec732e503ab8b02b8ccc9bfb57b25b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bee0a076457206a19eb88587c78ee6fec732e503ab8b02b8ccc9bfb57b25b02->enter($__internal_1bee0a076457206a19eb88587c78ee6fec732e503ab8b02b8ccc9bfb57b25b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_dc6519a5ce99563a6ef1ca2b4b68393f83aa58f133a11ad8cb4560d487f48f1c->leave($__internal_dc6519a5ce99563a6ef1ca2b4b68393f83aa58f133a11ad8cb4560d487f48f1c_prof);

        
        $__internal_1bee0a076457206a19eb88587c78ee6fec732e503ab8b02b8ccc9bfb57b25b02->leave($__internal_1bee0a076457206a19eb88587c78ee6fec732e503ab8b02b8ccc9bfb57b25b02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
