<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_1fcd069cd43d6b7a4904484147cfd540ffe5f85fdd9257631d7096499f1c6870 extends Twig_Template
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
        $__internal_8ab1b0f0092e2d4c1acef141e40dce156ad63c8981656fb14fd6754f3da6b209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab1b0f0092e2d4c1acef141e40dce156ad63c8981656fb14fd6754f3da6b209->enter($__internal_8ab1b0f0092e2d4c1acef141e40dce156ad63c8981656fb14fd6754f3da6b209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_d9d07920771ec5cd26824631a1bab49a42f049e124a64c35050f14d2ed2075d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d07920771ec5cd26824631a1bab49a42f049e124a64c35050f14d2ed2075d1->enter($__internal_d9d07920771ec5cd26824631a1bab49a42f049e124a64c35050f14d2ed2075d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_8ab1b0f0092e2d4c1acef141e40dce156ad63c8981656fb14fd6754f3da6b209->leave($__internal_8ab1b0f0092e2d4c1acef141e40dce156ad63c8981656fb14fd6754f3da6b209_prof);

        
        $__internal_d9d07920771ec5cd26824631a1bab49a42f049e124a64c35050f14d2ed2075d1->leave($__internal_d9d07920771ec5cd26824631a1bab49a42f049e124a64c35050f14d2ed2075d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php");
    }
}
