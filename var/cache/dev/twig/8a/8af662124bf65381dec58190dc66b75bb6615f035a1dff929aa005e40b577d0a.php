<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_25186721dab0979879c2c6cf8e0271ade167d2fd0ca0856687fb7b6d67285ed0 extends Twig_Template
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
        $__internal_9528b7a588425347992019abb7c0d5bbb380305050bc111c3304058884427965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9528b7a588425347992019abb7c0d5bbb380305050bc111c3304058884427965->enter($__internal_9528b7a588425347992019abb7c0d5bbb380305050bc111c3304058884427965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a6fd748627601d303d364749263f6885a1cce01657cb798ab5e5a1f0d16fcec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6fd748627601d303d364749263f6885a1cce01657cb798ab5e5a1f0d16fcec0->enter($__internal_a6fd748627601d303d364749263f6885a1cce01657cb798ab5e5a1f0d16fcec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9528b7a588425347992019abb7c0d5bbb380305050bc111c3304058884427965->leave($__internal_9528b7a588425347992019abb7c0d5bbb380305050bc111c3304058884427965_prof);

        
        $__internal_a6fd748627601d303d364749263f6885a1cce01657cb798ab5e5a1f0d16fcec0->leave($__internal_a6fd748627601d303d364749263f6885a1cce01657cb798ab5e5a1f0d16fcec0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
