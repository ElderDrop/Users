<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cac9d09a2a495cdf28082cebc2bf92d95ec1237071d0f87139db13a7bba0ef5d extends Twig_Template
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
        $__internal_eae3e138700392b5cf8630bae9123a35b23de151da3067729da15deb62443f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae3e138700392b5cf8630bae9123a35b23de151da3067729da15deb62443f21->enter($__internal_eae3e138700392b5cf8630bae9123a35b23de151da3067729da15deb62443f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d1370cb9eb4cbf5543e9328d62b89105666c30b2f72b8eed86a56bad475eb72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1370cb9eb4cbf5543e9328d62b89105666c30b2f72b8eed86a56bad475eb72e->enter($__internal_d1370cb9eb4cbf5543e9328d62b89105666c30b2f72b8eed86a56bad475eb72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_eae3e138700392b5cf8630bae9123a35b23de151da3067729da15deb62443f21->leave($__internal_eae3e138700392b5cf8630bae9123a35b23de151da3067729da15deb62443f21_prof);

        
        $__internal_d1370cb9eb4cbf5543e9328d62b89105666c30b2f72b8eed86a56bad475eb72e->leave($__internal_d1370cb9eb4cbf5543e9328d62b89105666c30b2f72b8eed86a56bad475eb72e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
