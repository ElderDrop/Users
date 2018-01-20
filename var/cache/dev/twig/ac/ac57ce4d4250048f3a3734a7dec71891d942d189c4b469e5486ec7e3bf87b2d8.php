<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_12687e9ee7e3ede924de3695f3951e05503f4aac5f4adf3c0340954bc6248113 extends Twig_Template
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
        $__internal_3cc6270fb3fce1307c3f23472348c9ecbf10f22e1023877a250f5764650c9d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc6270fb3fce1307c3f23472348c9ecbf10f22e1023877a250f5764650c9d53->enter($__internal_3cc6270fb3fce1307c3f23472348c9ecbf10f22e1023877a250f5764650c9d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_dd9bd58cfd3d6d9a2a4262ed62e81b36fb9876a8aff2055240973e7cb641e489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9bd58cfd3d6d9a2a4262ed62e81b36fb9876a8aff2055240973e7cb641e489->enter($__internal_dd9bd58cfd3d6d9a2a4262ed62e81b36fb9876a8aff2055240973e7cb641e489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3cc6270fb3fce1307c3f23472348c9ecbf10f22e1023877a250f5764650c9d53->leave($__internal_3cc6270fb3fce1307c3f23472348c9ecbf10f22e1023877a250f5764650c9d53_prof);

        
        $__internal_dd9bd58cfd3d6d9a2a4262ed62e81b36fb9876a8aff2055240973e7cb641e489->leave($__internal_dd9bd58cfd3d6d9a2a4262ed62e81b36fb9876a8aff2055240973e7cb641e489_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
