<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_f0a1f7ec558a7942332e5214ba857b31079a55cf8af67b16bf413a9f40cd928e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ead1979792a7207616917c30fbced30f81adb92b48f932deef11537d10ac0d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead1979792a7207616917c30fbced30f81adb92b48f932deef11537d10ac0d32->enter($__internal_ead1979792a7207616917c30fbced30f81adb92b48f932deef11537d10ac0d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_626981aaa4a76d6e387e35ab6a7df29656ecc0c251201e2d80e42174d2e3d0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626981aaa4a76d6e387e35ab6a7df29656ecc0c251201e2d80e42174d2e3d0d9->enter($__internal_626981aaa4a76d6e387e35ab6a7df29656ecc0c251201e2d80e42174d2e3d0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ead1979792a7207616917c30fbced30f81adb92b48f932deef11537d10ac0d32->leave($__internal_ead1979792a7207616917c30fbced30f81adb92b48f932deef11537d10ac0d32_prof);

        
        $__internal_626981aaa4a76d6e387e35ab6a7df29656ecc0c251201e2d80e42174d2e3d0d9->leave($__internal_626981aaa4a76d6e387e35ab6a7df29656ecc0c251201e2d80e42174d2e3d0d9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_06d8a72c05233f135c733f91d4c9e95d64aff06fb5288d12f38f4da28c534be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d8a72c05233f135c733f91d4c9e95d64aff06fb5288d12f38f4da28c534be6->enter($__internal_06d8a72c05233f135c733f91d4c9e95d64aff06fb5288d12f38f4da28c534be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4943982a51356a9053ce75a0ea73bdbac6e25048f106d5a4386924dcf1416a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4943982a51356a9053ce75a0ea73bdbac6e25048f106d5a4386924dcf1416a2c->enter($__internal_4943982a51356a9053ce75a0ea73bdbac6e25048f106d5a4386924dcf1416a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4943982a51356a9053ce75a0ea73bdbac6e25048f106d5a4386924dcf1416a2c->leave($__internal_4943982a51356a9053ce75a0ea73bdbac6e25048f106d5a4386924dcf1416a2c_prof);

        
        $__internal_06d8a72c05233f135c733f91d4c9e95d64aff06fb5288d12f38f4da28c534be6->leave($__internal_06d8a72c05233f135c733f91d4c9e95d64aff06fb5288d12f38f4da28c534be6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
