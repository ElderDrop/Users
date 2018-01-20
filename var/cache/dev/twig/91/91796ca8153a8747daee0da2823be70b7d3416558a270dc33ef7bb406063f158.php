<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_a7786beb210ecdbda1c6ae35ee0e160870ebd8a15ff7ba6bf3f73a77898c05c9 extends Twig_Template
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
        $__internal_fbfa047ae88c55c5ae4d71662d1c33ca974842001649a74e5505318465c183c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbfa047ae88c55c5ae4d71662d1c33ca974842001649a74e5505318465c183c4->enter($__internal_fbfa047ae88c55c5ae4d71662d1c33ca974842001649a74e5505318465c183c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_f303717d2fb6af92851e9d05a724fc1af57c9cac3d182d4fb419fc90396e21e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f303717d2fb6af92851e9d05a724fc1af57c9cac3d182d4fb419fc90396e21e3->enter($__internal_f303717d2fb6af92851e9d05a724fc1af57c9cac3d182d4fb419fc90396e21e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fbfa047ae88c55c5ae4d71662d1c33ca974842001649a74e5505318465c183c4->leave($__internal_fbfa047ae88c55c5ae4d71662d1c33ca974842001649a74e5505318465c183c4_prof);

        
        $__internal_f303717d2fb6af92851e9d05a724fc1af57c9cac3d182d4fb419fc90396e21e3->leave($__internal_f303717d2fb6af92851e9d05a724fc1af57c9cac3d182d4fb419fc90396e21e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
