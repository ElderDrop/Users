<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2725d73993c564bbbd57ed71962896c591c0c1cccaa6b51af5275ae328701523 extends Twig_Template
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
        $__internal_55aaa02b0d48de31ea4f45dd70f82cf8f5c4328a91a55398823fe2d83ff7624a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55aaa02b0d48de31ea4f45dd70f82cf8f5c4328a91a55398823fe2d83ff7624a->enter($__internal_55aaa02b0d48de31ea4f45dd70f82cf8f5c4328a91a55398823fe2d83ff7624a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d626603d2f1ba7fd14f847358eef7855070ca2ee41237b13c8ca7bbe940239f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d626603d2f1ba7fd14f847358eef7855070ca2ee41237b13c8ca7bbe940239f0->enter($__internal_d626603d2f1ba7fd14f847358eef7855070ca2ee41237b13c8ca7bbe940239f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_55aaa02b0d48de31ea4f45dd70f82cf8f5c4328a91a55398823fe2d83ff7624a->leave($__internal_55aaa02b0d48de31ea4f45dd70f82cf8f5c4328a91a55398823fe2d83ff7624a_prof);

        
        $__internal_d626603d2f1ba7fd14f847358eef7855070ca2ee41237b13c8ca7bbe940239f0->leave($__internal_d626603d2f1ba7fd14f847358eef7855070ca2ee41237b13c8ca7bbe940239f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
