<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e09fd4af6b5c1c7c5b27127807ea74152e589ad11088ba80cda61d148d68e04f extends Twig_Template
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
        $__internal_7392c2e0e066440fa9da36e5e9068bd9d8b4d5b935fe7364317dbc37c9d29014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7392c2e0e066440fa9da36e5e9068bd9d8b4d5b935fe7364317dbc37c9d29014->enter($__internal_7392c2e0e066440fa9da36e5e9068bd9d8b4d5b935fe7364317dbc37c9d29014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b7f797231b11a8b443a2d553a495a6181e506faaa64fcc7b038a5f3ccdd4c0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f797231b11a8b443a2d553a495a6181e506faaa64fcc7b038a5f3ccdd4c0f5->enter($__internal_b7f797231b11a8b443a2d553a495a6181e506faaa64fcc7b038a5f3ccdd4c0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7392c2e0e066440fa9da36e5e9068bd9d8b4d5b935fe7364317dbc37c9d29014->leave($__internal_7392c2e0e066440fa9da36e5e9068bd9d8b4d5b935fe7364317dbc37c9d29014_prof);

        
        $__internal_b7f797231b11a8b443a2d553a495a6181e506faaa64fcc7b038a5f3ccdd4c0f5->leave($__internal_b7f797231b11a8b443a2d553a495a6181e506faaa64fcc7b038a5f3ccdd4c0f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
