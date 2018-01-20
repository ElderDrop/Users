<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7490f866af85a1e1c70554e6e1ec7e43a44b72abfb50b891df25e56a72c55e9e extends Twig_Template
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
        $__internal_f01f02be670bae24c536ade2bc40b4b12ca46d3cd498a35a450a1b50f3e584e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f01f02be670bae24c536ade2bc40b4b12ca46d3cd498a35a450a1b50f3e584e5->enter($__internal_f01f02be670bae24c536ade2bc40b4b12ca46d3cd498a35a450a1b50f3e584e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_3b79851cb8f3789f4f034b1789455d797961cbfd57e4301d72c59910483eeed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b79851cb8f3789f4f034b1789455d797961cbfd57e4301d72c59910483eeed7->enter($__internal_3b79851cb8f3789f4f034b1789455d797961cbfd57e4301d72c59910483eeed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f01f02be670bae24c536ade2bc40b4b12ca46d3cd498a35a450a1b50f3e584e5->leave($__internal_f01f02be670bae24c536ade2bc40b4b12ca46d3cd498a35a450a1b50f3e584e5_prof);

        
        $__internal_3b79851cb8f3789f4f034b1789455d797961cbfd57e4301d72c59910483eeed7->leave($__internal_3b79851cb8f3789f4f034b1789455d797961cbfd57e4301d72c59910483eeed7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
