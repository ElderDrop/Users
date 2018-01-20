<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f71b7a1645f7d3cab7b4780b5457aed9e3a6edff69449b137e9f138864af307e extends Twig_Template
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
        $__internal_70fe62c63e687e7ddd89c49b1744ebb46a44babc1f894497b50ffdfd79cc6c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70fe62c63e687e7ddd89c49b1744ebb46a44babc1f894497b50ffdfd79cc6c09->enter($__internal_70fe62c63e687e7ddd89c49b1744ebb46a44babc1f894497b50ffdfd79cc6c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_33773bd4bb319e1834ea04dcc7463a1c9b0ced5d1527b0a4a0538daaf6acc66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33773bd4bb319e1834ea04dcc7463a1c9b0ced5d1527b0a4a0538daaf6acc66a->enter($__internal_33773bd4bb319e1834ea04dcc7463a1c9b0ced5d1527b0a4a0538daaf6acc66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_70fe62c63e687e7ddd89c49b1744ebb46a44babc1f894497b50ffdfd79cc6c09->leave($__internal_70fe62c63e687e7ddd89c49b1744ebb46a44babc1f894497b50ffdfd79cc6c09_prof);

        
        $__internal_33773bd4bb319e1834ea04dcc7463a1c9b0ced5d1527b0a4a0538daaf6acc66a->leave($__internal_33773bd4bb319e1834ea04dcc7463a1c9b0ced5d1527b0a4a0538daaf6acc66a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
