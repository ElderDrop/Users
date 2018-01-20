<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c1f53994652e3ff4f48d0cbe1d26011c9803860c6b824a90db1293931eea8f57 extends Twig_Template
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
        $__internal_682c8c371cb32d35edaf3f273c4400862f6eeb12f14c995a3738c2961a324e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682c8c371cb32d35edaf3f273c4400862f6eeb12f14c995a3738c2961a324e01->enter($__internal_682c8c371cb32d35edaf3f273c4400862f6eeb12f14c995a3738c2961a324e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_67d9dc51998342e77b7fb3322b95546a239b2049fa68823980dd919d84c92fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d9dc51998342e77b7fb3322b95546a239b2049fa68823980dd919d84c92fce->enter($__internal_67d9dc51998342e77b7fb3322b95546a239b2049fa68823980dd919d84c92fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_682c8c371cb32d35edaf3f273c4400862f6eeb12f14c995a3738c2961a324e01->leave($__internal_682c8c371cb32d35edaf3f273c4400862f6eeb12f14c995a3738c2961a324e01_prof);

        
        $__internal_67d9dc51998342e77b7fb3322b95546a239b2049fa68823980dd919d84c92fce->leave($__internal_67d9dc51998342e77b7fb3322b95546a239b2049fa68823980dd919d84c92fce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
