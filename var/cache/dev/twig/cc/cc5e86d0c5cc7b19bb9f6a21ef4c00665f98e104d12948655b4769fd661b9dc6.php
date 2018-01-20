<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f16c42b9de2a6ba4e8339eb2420f50b9c4ee98c33309911efd3929ee31a5eeb4 extends Twig_Template
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
        $__internal_f0e77f441cc533ea276a8a96e7aecbbddeec045b86c31b05019a95ea71226716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e77f441cc533ea276a8a96e7aecbbddeec045b86c31b05019a95ea71226716->enter($__internal_f0e77f441cc533ea276a8a96e7aecbbddeec045b86c31b05019a95ea71226716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_597b899ab675a75065a47b102c3d6347cb75baf4cd03bce8f2f2c6e02583d757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597b899ab675a75065a47b102c3d6347cb75baf4cd03bce8f2f2c6e02583d757->enter($__internal_597b899ab675a75065a47b102c3d6347cb75baf4cd03bce8f2f2c6e02583d757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_f0e77f441cc533ea276a8a96e7aecbbddeec045b86c31b05019a95ea71226716->leave($__internal_f0e77f441cc533ea276a8a96e7aecbbddeec045b86c31b05019a95ea71226716_prof);

        
        $__internal_597b899ab675a75065a47b102c3d6347cb75baf4cd03bce8f2f2c6e02583d757->leave($__internal_597b899ab675a75065a47b102c3d6347cb75baf4cd03bce8f2f2c6e02583d757_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
