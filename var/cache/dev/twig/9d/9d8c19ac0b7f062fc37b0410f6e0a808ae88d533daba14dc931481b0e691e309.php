<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3f8281c929507bba5aa8f693882e00511563cf4f347feaa60ee03fcde74d798b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80fe16a3fe76351b1cc635f50dd9665d6d36d3ff4efd630736e69ac10798bc3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80fe16a3fe76351b1cc635f50dd9665d6d36d3ff4efd630736e69ac10798bc3e->enter($__internal_80fe16a3fe76351b1cc635f50dd9665d6d36d3ff4efd630736e69ac10798bc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d7776c098a88f77b91ecefec2f63b71457be26ded339e3a7838403343cc309b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7776c098a88f77b91ecefec2f63b71457be26ded339e3a7838403343cc309b2->enter($__internal_d7776c098a88f77b91ecefec2f63b71457be26ded339e3a7838403343cc309b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80fe16a3fe76351b1cc635f50dd9665d6d36d3ff4efd630736e69ac10798bc3e->leave($__internal_80fe16a3fe76351b1cc635f50dd9665d6d36d3ff4efd630736e69ac10798bc3e_prof);

        
        $__internal_d7776c098a88f77b91ecefec2f63b71457be26ded339e3a7838403343cc309b2->leave($__internal_d7776c098a88f77b91ecefec2f63b71457be26ded339e3a7838403343cc309b2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b9ef8501a258a7f8a7d9979af2e8fcdbccc880aba62f1b37fec8757c311d67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9ef8501a258a7f8a7d9979af2e8fcdbccc880aba62f1b37fec8757c311d67d->enter($__internal_3b9ef8501a258a7f8a7d9979af2e8fcdbccc880aba62f1b37fec8757c311d67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fa632a8bf98439752b2a6f6653fa4e79a61b74585771abc1dd75a1a4350e9ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa632a8bf98439752b2a6f6653fa4e79a61b74585771abc1dd75a1a4350e9ee0->enter($__internal_fa632a8bf98439752b2a6f6653fa4e79a61b74585771abc1dd75a1a4350e9ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fa632a8bf98439752b2a6f6653fa4e79a61b74585771abc1dd75a1a4350e9ee0->leave($__internal_fa632a8bf98439752b2a6f6653fa4e79a61b74585771abc1dd75a1a4350e9ee0_prof);

        
        $__internal_3b9ef8501a258a7f8a7d9979af2e8fcdbccc880aba62f1b37fec8757c311d67d->leave($__internal_3b9ef8501a258a7f8a7d9979af2e8fcdbccc880aba62f1b37fec8757c311d67d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_437b8cb9e60c5a05abd59b6877adb85307441fdd10f923a87f31d922a56b3ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437b8cb9e60c5a05abd59b6877adb85307441fdd10f923a87f31d922a56b3ed7->enter($__internal_437b8cb9e60c5a05abd59b6877adb85307441fdd10f923a87f31d922a56b3ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b8fba2d8168f491a88fd6a0a5ed4862ec3ef5e1dcb44285b34d7db1e0ff6fd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fba2d8168f491a88fd6a0a5ed4862ec3ef5e1dcb44285b34d7db1e0ff6fd3d->enter($__internal_b8fba2d8168f491a88fd6a0a5ed4862ec3ef5e1dcb44285b34d7db1e0ff6fd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b8fba2d8168f491a88fd6a0a5ed4862ec3ef5e1dcb44285b34d7db1e0ff6fd3d->leave($__internal_b8fba2d8168f491a88fd6a0a5ed4862ec3ef5e1dcb44285b34d7db1e0ff6fd3d_prof);

        
        $__internal_437b8cb9e60c5a05abd59b6877adb85307441fdd10f923a87f31d922a56b3ed7->leave($__internal_437b8cb9e60c5a05abd59b6877adb85307441fdd10f923a87f31d922a56b3ed7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_688c3fb4e7d716ec6ad9d6e6d9362fd96c82b3c8cc452f37149ab7119f2430e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688c3fb4e7d716ec6ad9d6e6d9362fd96c82b3c8cc452f37149ab7119f2430e8->enter($__internal_688c3fb4e7d716ec6ad9d6e6d9362fd96c82b3c8cc452f37149ab7119f2430e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3fafb0b9fa27236b860f03416bcd8f371cb0a40df3848e203e80d3756513f36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fafb0b9fa27236b860f03416bcd8f371cb0a40df3848e203e80d3756513f36d->enter($__internal_3fafb0b9fa27236b860f03416bcd8f371cb0a40df3848e203e80d3756513f36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3fafb0b9fa27236b860f03416bcd8f371cb0a40df3848e203e80d3756513f36d->leave($__internal_3fafb0b9fa27236b860f03416bcd8f371cb0a40df3848e203e80d3756513f36d_prof);

        
        $__internal_688c3fb4e7d716ec6ad9d6e6d9362fd96c82b3c8cc452f37149ab7119f2430e8->leave($__internal_688c3fb4e7d716ec6ad9d6e6d9362fd96c82b3c8cc452f37149ab7119f2430e8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
