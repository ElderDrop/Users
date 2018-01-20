<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_03c68ab7d8e0297c8db092e6bf91e023eaddee70b4ee7d8391749c5a280a67a5 extends Twig_Template
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
        $__internal_b522b236388672874543fc792fb935edd48d3ae0d216122f4a7da5fd8d57f214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b522b236388672874543fc792fb935edd48d3ae0d216122f4a7da5fd8d57f214->enter($__internal_b522b236388672874543fc792fb935edd48d3ae0d216122f4a7da5fd8d57f214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4f9029c5d40844337d110abfef2e36a3e5b0afbc2e5ed723de3f2a184c62a45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9029c5d40844337d110abfef2e36a3e5b0afbc2e5ed723de3f2a184c62a45d->enter($__internal_4f9029c5d40844337d110abfef2e36a3e5b0afbc2e5ed723de3f2a184c62a45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b522b236388672874543fc792fb935edd48d3ae0d216122f4a7da5fd8d57f214->leave($__internal_b522b236388672874543fc792fb935edd48d3ae0d216122f4a7da5fd8d57f214_prof);

        
        $__internal_4f9029c5d40844337d110abfef2e36a3e5b0afbc2e5ed723de3f2a184c62a45d->leave($__internal_4f9029c5d40844337d110abfef2e36a3e5b0afbc2e5ed723de3f2a184c62a45d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
