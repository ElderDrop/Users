<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e2cc9b8b80c72446b24b6d5329fba6022f015349937e730915fcce80a4927736 extends Twig_Template
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
        $__internal_f069238362e82f7ab36e0658f1aa4b763ecb5d23e8c263482e6bcf9ee79288db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f069238362e82f7ab36e0658f1aa4b763ecb5d23e8c263482e6bcf9ee79288db->enter($__internal_f069238362e82f7ab36e0658f1aa4b763ecb5d23e8c263482e6bcf9ee79288db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_d8a1f911b922f88024d501b43717561b201143a79b5163ef7e2ddfcb9d4d200a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a1f911b922f88024d501b43717561b201143a79b5163ef7e2ddfcb9d4d200a->enter($__internal_d8a1f911b922f88024d501b43717561b201143a79b5163ef7e2ddfcb9d4d200a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f069238362e82f7ab36e0658f1aa4b763ecb5d23e8c263482e6bcf9ee79288db->leave($__internal_f069238362e82f7ab36e0658f1aa4b763ecb5d23e8c263482e6bcf9ee79288db_prof);

        
        $__internal_d8a1f911b922f88024d501b43717561b201143a79b5163ef7e2ddfcb9d4d200a->leave($__internal_d8a1f911b922f88024d501b43717561b201143a79b5163ef7e2ddfcb9d4d200a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
