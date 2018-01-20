<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_58426a8f3a639b59753dfb61714d7c66921d17492f9ec12e151fc97212a98363 extends Twig_Template
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
        $__internal_30589558f314e3fb97b086be17680133307f9c5c6710c7d04c846fe9d3ca89a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30589558f314e3fb97b086be17680133307f9c5c6710c7d04c846fe9d3ca89a8->enter($__internal_30589558f314e3fb97b086be17680133307f9c5c6710c7d04c846fe9d3ca89a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_91b3d228f98900d5462912484782bca3a5c3e8b7541d9d0bd45d54bb138e8908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b3d228f98900d5462912484782bca3a5c3e8b7541d9d0bd45d54bb138e8908->enter($__internal_91b3d228f98900d5462912484782bca3a5c3e8b7541d9d0bd45d54bb138e8908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_30589558f314e3fb97b086be17680133307f9c5c6710c7d04c846fe9d3ca89a8->leave($__internal_30589558f314e3fb97b086be17680133307f9c5c6710c7d04c846fe9d3ca89a8_prof);

        
        $__internal_91b3d228f98900d5462912484782bca3a5c3e8b7541d9d0bd45d54bb138e8908->leave($__internal_91b3d228f98900d5462912484782bca3a5c3e8b7541d9d0bd45d54bb138e8908_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
