<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_9a7a4882cbab1d7b076c9df6ca19fed260f16ed47345383ad943763785828bda extends Twig_Template
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
        $__internal_c41a91d73d5ba994ceedb59d206c0120e980c6cda172f636171fb9539e770746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41a91d73d5ba994ceedb59d206c0120e980c6cda172f636171fb9539e770746->enter($__internal_c41a91d73d5ba994ceedb59d206c0120e980c6cda172f636171fb9539e770746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_00c725e95053f4c8bbd514b42166d8767e93a11da5823cbb8c7a9b0f45cc8005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c725e95053f4c8bbd514b42166d8767e93a11da5823cbb8c7a9b0f45cc8005->enter($__internal_00c725e95053f4c8bbd514b42166d8767e93a11da5823cbb8c7a9b0f45cc8005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c41a91d73d5ba994ceedb59d206c0120e980c6cda172f636171fb9539e770746->leave($__internal_c41a91d73d5ba994ceedb59d206c0120e980c6cda172f636171fb9539e770746_prof);

        
        $__internal_00c725e95053f4c8bbd514b42166d8767e93a11da5823cbb8c7a9b0f45cc8005->leave($__internal_00c725e95053f4c8bbd514b42166d8767e93a11da5823cbb8c7a9b0f45cc8005_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
