<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2d51735c89a3f8b7fa319180a5588eb8f48b6867178476f48fb1ec3eb3128c9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa4d41ad6267cb96f46d48d017b032df370b4708a89c86bb736c973c42d0ac92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa4d41ad6267cb96f46d48d017b032df370b4708a89c86bb736c973c42d0ac92->enter($__internal_fa4d41ad6267cb96f46d48d017b032df370b4708a89c86bb736c973c42d0ac92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_19b7b3843d3209d62427da99044bce5eee89cef623914cef88cddbaceadebbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b7b3843d3209d62427da99044bce5eee89cef623914cef88cddbaceadebbea->enter($__internal_19b7b3843d3209d62427da99044bce5eee89cef623914cef88cddbaceadebbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa4d41ad6267cb96f46d48d017b032df370b4708a89c86bb736c973c42d0ac92->leave($__internal_fa4d41ad6267cb96f46d48d017b032df370b4708a89c86bb736c973c42d0ac92_prof);

        
        $__internal_19b7b3843d3209d62427da99044bce5eee89cef623914cef88cddbaceadebbea->leave($__internal_19b7b3843d3209d62427da99044bce5eee89cef623914cef88cddbaceadebbea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_098c66d31ac4804b9e647e22b45bf3513a4b5c9a356db29a314c02f11b92a8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098c66d31ac4804b9e647e22b45bf3513a4b5c9a356db29a314c02f11b92a8ea->enter($__internal_098c66d31ac4804b9e647e22b45bf3513a4b5c9a356db29a314c02f11b92a8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a0cbf142e7485e1f3575ce90f5d56cec1d8865f7ba46882537463aa248727e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0cbf142e7485e1f3575ce90f5d56cec1d8865f7ba46882537463aa248727e1b->enter($__internal_a0cbf142e7485e1f3575ce90f5d56cec1d8865f7ba46882537463aa248727e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a0cbf142e7485e1f3575ce90f5d56cec1d8865f7ba46882537463aa248727e1b->leave($__internal_a0cbf142e7485e1f3575ce90f5d56cec1d8865f7ba46882537463aa248727e1b_prof);

        
        $__internal_098c66d31ac4804b9e647e22b45bf3513a4b5c9a356db29a314c02f11b92a8ea->leave($__internal_098c66d31ac4804b9e647e22b45bf3513a4b5c9a356db29a314c02f11b92a8ea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
