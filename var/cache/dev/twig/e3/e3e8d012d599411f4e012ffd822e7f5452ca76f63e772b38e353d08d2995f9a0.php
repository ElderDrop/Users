<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e96474540be364fa774d32e78e61206dca65f0316d77db8674a6b3dcfdd145a9 extends Twig_Template
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
        $__internal_ba2d1f6903f21cd72f224e58959ff8a485697396f948014922f19c2a7ba08057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2d1f6903f21cd72f224e58959ff8a485697396f948014922f19c2a7ba08057->enter($__internal_ba2d1f6903f21cd72f224e58959ff8a485697396f948014922f19c2a7ba08057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a10bbbe274216b3cff2fe2c0befcdad307e7b6ca95ce0a88fe245a80980a7273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10bbbe274216b3cff2fe2c0befcdad307e7b6ca95ce0a88fe245a80980a7273->enter($__internal_a10bbbe274216b3cff2fe2c0befcdad307e7b6ca95ce0a88fe245a80980a7273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_ba2d1f6903f21cd72f224e58959ff8a485697396f948014922f19c2a7ba08057->leave($__internal_ba2d1f6903f21cd72f224e58959ff8a485697396f948014922f19c2a7ba08057_prof);

        
        $__internal_a10bbbe274216b3cff2fe2c0befcdad307e7b6ca95ce0a88fe245a80980a7273->leave($__internal_a10bbbe274216b3cff2fe2c0befcdad307e7b6ca95ce0a88fe245a80980a7273_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
