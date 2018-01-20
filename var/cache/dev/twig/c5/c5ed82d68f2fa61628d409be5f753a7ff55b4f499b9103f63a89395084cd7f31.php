<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_28fab546210d8f12bc49fadef5c0fb94bf48f485d67d3b7f6816f0822cc12bc0 extends Twig_Template
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
        $__internal_49e634a9b6c38fc35ad39748e232c38c144350ccb744590dde257f2e26c59017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e634a9b6c38fc35ad39748e232c38c144350ccb744590dde257f2e26c59017->enter($__internal_49e634a9b6c38fc35ad39748e232c38c144350ccb744590dde257f2e26c59017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_91f438ab424570b8f18cd29da10b5d6eb11a99a2e75f56bc358bd5a933f7ebf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f438ab424570b8f18cd29da10b5d6eb11a99a2e75f56bc358bd5a933f7ebf2->enter($__internal_91f438ab424570b8f18cd29da10b5d6eb11a99a2e75f56bc358bd5a933f7ebf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_49e634a9b6c38fc35ad39748e232c38c144350ccb744590dde257f2e26c59017->leave($__internal_49e634a9b6c38fc35ad39748e232c38c144350ccb744590dde257f2e26c59017_prof);

        
        $__internal_91f438ab424570b8f18cd29da10b5d6eb11a99a2e75f56bc358bd5a933f7ebf2->leave($__internal_91f438ab424570b8f18cd29da10b5d6eb11a99a2e75f56bc358bd5a933f7ebf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
