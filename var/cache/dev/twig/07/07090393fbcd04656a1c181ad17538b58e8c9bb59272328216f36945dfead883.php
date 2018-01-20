<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ac79cbd4d7cd99393a1a25df4a5d5ce96e71eaf66df1581048a1b82b14e10526 extends Twig_Template
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
        $__internal_39248735cf31411ab4d2f560b4ee0d1050c2e9b60ce63c36060e8cb158dd30dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39248735cf31411ab4d2f560b4ee0d1050c2e9b60ce63c36060e8cb158dd30dd->enter($__internal_39248735cf31411ab4d2f560b4ee0d1050c2e9b60ce63c36060e8cb158dd30dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5eb5a77537c26d77185a99e622657446163b6eca32413b628bb23717efd7eb7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb5a77537c26d77185a99e622657446163b6eca32413b628bb23717efd7eb7c->enter($__internal_5eb5a77537c26d77185a99e622657446163b6eca32413b628bb23717efd7eb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_39248735cf31411ab4d2f560b4ee0d1050c2e9b60ce63c36060e8cb158dd30dd->leave($__internal_39248735cf31411ab4d2f560b4ee0d1050c2e9b60ce63c36060e8cb158dd30dd_prof);

        
        $__internal_5eb5a77537c26d77185a99e622657446163b6eca32413b628bb23717efd7eb7c->leave($__internal_5eb5a77537c26d77185a99e622657446163b6eca32413b628bb23717efd7eb7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
