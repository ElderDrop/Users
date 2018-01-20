<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_0f06f43e56b54dbc0800742454d24765a3e2f3dd6353c4fb8b21ef6c8cc78f5c extends Twig_Template
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
        $__internal_a8da42556542826ae9297cca8c8ed9e9d963c4be3eb4e94c2a1d3c76e2369ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8da42556542826ae9297cca8c8ed9e9d963c4be3eb4e94c2a1d3c76e2369ff7->enter($__internal_a8da42556542826ae9297cca8c8ed9e9d963c4be3eb4e94c2a1d3c76e2369ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_dadafecfaeeeda172946e241e9f7237ed27c5d775a486709421e8e7763983bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadafecfaeeeda172946e241e9f7237ed27c5d775a486709421e8e7763983bd6->enter($__internal_dadafecfaeeeda172946e241e9f7237ed27c5d775a486709421e8e7763983bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_a8da42556542826ae9297cca8c8ed9e9d963c4be3eb4e94c2a1d3c76e2369ff7->leave($__internal_a8da42556542826ae9297cca8c8ed9e9d963c4be3eb4e94c2a1d3c76e2369ff7_prof);

        
        $__internal_dadafecfaeeeda172946e241e9f7237ed27c5d775a486709421e8e7763983bd6->leave($__internal_dadafecfaeeeda172946e241e9f7237ed27c5d775a486709421e8e7763983bd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/form_label.html.php");
    }
}
