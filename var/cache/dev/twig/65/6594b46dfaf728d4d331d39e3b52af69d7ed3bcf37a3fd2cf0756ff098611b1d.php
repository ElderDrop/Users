<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0d4ccdd0bbd4af6a0403db31a1039ef17adfb474592ae6b905f4a4cc296e76bf extends Twig_Template
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
        $__internal_953dd1379d1b45d467e1f82e7525a64f36d9389cc6dc645ff7ac7a64e933ced4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953dd1379d1b45d467e1f82e7525a64f36d9389cc6dc645ff7ac7a64e933ced4->enter($__internal_953dd1379d1b45d467e1f82e7525a64f36d9389cc6dc645ff7ac7a64e933ced4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_787510f8cd3a13ed9d37a7ba4cfd9cf5a3eefc3ce20cdd96069a90ab9a9ad42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787510f8cd3a13ed9d37a7ba4cfd9cf5a3eefc3ce20cdd96069a90ab9a9ad42f->enter($__internal_787510f8cd3a13ed9d37a7ba4cfd9cf5a3eefc3ce20cdd96069a90ab9a9ad42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_953dd1379d1b45d467e1f82e7525a64f36d9389cc6dc645ff7ac7a64e933ced4->leave($__internal_953dd1379d1b45d467e1f82e7525a64f36d9389cc6dc645ff7ac7a64e933ced4_prof);

        
        $__internal_787510f8cd3a13ed9d37a7ba4cfd9cf5a3eefc3ce20cdd96069a90ab9a9ad42f->leave($__internal_787510f8cd3a13ed9d37a7ba4cfd9cf5a3eefc3ce20cdd96069a90ab9a9ad42f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
