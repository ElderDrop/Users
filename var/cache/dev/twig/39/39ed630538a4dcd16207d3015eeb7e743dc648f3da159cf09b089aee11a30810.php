<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_d1360aaaa79ec7acfb641e2a977fbcd5be291112814950056a0813e6da4273e6 extends Twig_Template
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
        $__internal_aa56a4cad068fae19388a7b7ff096f02c4a09055735f9ac6cace49d3943ee2b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa56a4cad068fae19388a7b7ff096f02c4a09055735f9ac6cace49d3943ee2b1->enter($__internal_aa56a4cad068fae19388a7b7ff096f02c4a09055735f9ac6cace49d3943ee2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_cb18c07fdb3c6980e2f137f98d54519316beb0de3d27e9df3f4324d34320d643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb18c07fdb3c6980e2f137f98d54519316beb0de3d27e9df3f4324d34320d643->enter($__internal_cb18c07fdb3c6980e2f137f98d54519316beb0de3d27e9df3f4324d34320d643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_aa56a4cad068fae19388a7b7ff096f02c4a09055735f9ac6cace49d3943ee2b1->leave($__internal_aa56a4cad068fae19388a7b7ff096f02c4a09055735f9ac6cace49d3943ee2b1_prof);

        
        $__internal_cb18c07fdb3c6980e2f137f98d54519316beb0de3d27e9df3f4324d34320d643->leave($__internal_cb18c07fdb3c6980e2f137f98d54519316beb0de3d27e9df3f4324d34320d643_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
