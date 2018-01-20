<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c4d4e9d9d10405a3274f39a565f5c0c5ad9512205a5adcebabbb925983496245 extends Twig_Template
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
        $__internal_0d667ed1e10ea88462a71b6f6499181aaed0c352e474889eed6b4bb368e1474b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d667ed1e10ea88462a71b6f6499181aaed0c352e474889eed6b4bb368e1474b->enter($__internal_0d667ed1e10ea88462a71b6f6499181aaed0c352e474889eed6b4bb368e1474b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_91b278b84229d19b8c9558ca195c9488f8b030feabfe5efebf1032de25542dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b278b84229d19b8c9558ca195c9488f8b030feabfe5efebf1032de25542dd3->enter($__internal_91b278b84229d19b8c9558ca195c9488f8b030feabfe5efebf1032de25542dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0d667ed1e10ea88462a71b6f6499181aaed0c352e474889eed6b4bb368e1474b->leave($__internal_0d667ed1e10ea88462a71b6f6499181aaed0c352e474889eed6b4bb368e1474b_prof);

        
        $__internal_91b278b84229d19b8c9558ca195c9488f8b030feabfe5efebf1032de25542dd3->leave($__internal_91b278b84229d19b8c9558ca195c9488f8b030feabfe5efebf1032de25542dd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
