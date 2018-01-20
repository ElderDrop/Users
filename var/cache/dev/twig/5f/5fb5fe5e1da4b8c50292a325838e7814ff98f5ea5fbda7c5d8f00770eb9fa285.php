<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_70a0b40a2837ab00db27c68aa9c5df4fb7e9f1522ffe8a0e2682baba0ccf1a7e extends Twig_Template
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
        $__internal_311b946d4d56c7818acebd654e99857e18ea8fe86162cad3d2b9b3c1962787db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311b946d4d56c7818acebd654e99857e18ea8fe86162cad3d2b9b3c1962787db->enter($__internal_311b946d4d56c7818acebd654e99857e18ea8fe86162cad3d2b9b3c1962787db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_518ab6a6f4165a4574c0a60b94cdc91e8f63e78d39b4c85304830167c374810f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518ab6a6f4165a4574c0a60b94cdc91e8f63e78d39b4c85304830167c374810f->enter($__internal_518ab6a6f4165a4574c0a60b94cdc91e8f63e78d39b4c85304830167c374810f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_311b946d4d56c7818acebd654e99857e18ea8fe86162cad3d2b9b3c1962787db->leave($__internal_311b946d4d56c7818acebd654e99857e18ea8fe86162cad3d2b9b3c1962787db_prof);

        
        $__internal_518ab6a6f4165a4574c0a60b94cdc91e8f63e78d39b4c85304830167c374810f->leave($__internal_518ab6a6f4165a4574c0a60b94cdc91e8f63e78d39b4c85304830167c374810f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
