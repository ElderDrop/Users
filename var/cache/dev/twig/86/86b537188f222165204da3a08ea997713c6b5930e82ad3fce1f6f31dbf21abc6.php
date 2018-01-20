<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ffb7e1bdcded41b7e132508859a97695b2d691a579a815bf3cb285c749ad3f73 extends Twig_Template
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
        $__internal_cb93578f95ad413a583e9e16e1fcc60de199ffb0b6ecde164387c1a879f5b96e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb93578f95ad413a583e9e16e1fcc60de199ffb0b6ecde164387c1a879f5b96e->enter($__internal_cb93578f95ad413a583e9e16e1fcc60de199ffb0b6ecde164387c1a879f5b96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_47d70ee77ca92a309e0dba523958fbc6e626c359c533056203396a9dcc4433ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d70ee77ca92a309e0dba523958fbc6e626c359c533056203396a9dcc4433ae->enter($__internal_47d70ee77ca92a309e0dba523958fbc6e626c359c533056203396a9dcc4433ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_cb93578f95ad413a583e9e16e1fcc60de199ffb0b6ecde164387c1a879f5b96e->leave($__internal_cb93578f95ad413a583e9e16e1fcc60de199ffb0b6ecde164387c1a879f5b96e_prof);

        
        $__internal_47d70ee77ca92a309e0dba523958fbc6e626c359c533056203396a9dcc4433ae->leave($__internal_47d70ee77ca92a309e0dba523958fbc6e626c359c533056203396a9dcc4433ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
