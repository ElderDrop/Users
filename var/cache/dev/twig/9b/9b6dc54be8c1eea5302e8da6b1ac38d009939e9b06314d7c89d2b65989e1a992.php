<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4d9ba31baaed54197e55d35dd1f6f08a70319774fc150790c8a46546fee3a1d1 extends Twig_Template
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
        $__internal_d07c9c48755d213749248cf7a5cca4ceef22b7b94404c9a80fa90cecaf8a4f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07c9c48755d213749248cf7a5cca4ceef22b7b94404c9a80fa90cecaf8a4f65->enter($__internal_d07c9c48755d213749248cf7a5cca4ceef22b7b94404c9a80fa90cecaf8a4f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_db86c1d7e4467eae698def21e0d595b0bc7943ffdb83309a32450808b3ff2db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db86c1d7e4467eae698def21e0d595b0bc7943ffdb83309a32450808b3ff2db4->enter($__internal_db86c1d7e4467eae698def21e0d595b0bc7943ffdb83309a32450808b3ff2db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d07c9c48755d213749248cf7a5cca4ceef22b7b94404c9a80fa90cecaf8a4f65->leave($__internal_d07c9c48755d213749248cf7a5cca4ceef22b7b94404c9a80fa90cecaf8a4f65_prof);

        
        $__internal_db86c1d7e4467eae698def21e0d595b0bc7943ffdb83309a32450808b3ff2db4->leave($__internal_db86c1d7e4467eae698def21e0d595b0bc7943ffdb83309a32450808b3ff2db4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
