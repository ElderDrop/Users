<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f580fca7bdc769780e6e46bdad4866007246471ed68f2f8378ecf792700a1fa4 extends Twig_Template
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
        $__internal_a07e7f674eb07d6f0bd43b12a20c15295204edb43acc3761e8f25bfade74ec65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07e7f674eb07d6f0bd43b12a20c15295204edb43acc3761e8f25bfade74ec65->enter($__internal_a07e7f674eb07d6f0bd43b12a20c15295204edb43acc3761e8f25bfade74ec65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_a984dffaf7834051a9cfa0c719a4ff25064934c3e37b9c8ce01cb643f46318b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a984dffaf7834051a9cfa0c719a4ff25064934c3e37b9c8ce01cb643f46318b8->enter($__internal_a984dffaf7834051a9cfa0c719a4ff25064934c3e37b9c8ce01cb643f46318b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_a07e7f674eb07d6f0bd43b12a20c15295204edb43acc3761e8f25bfade74ec65->leave($__internal_a07e7f674eb07d6f0bd43b12a20c15295204edb43acc3761e8f25bfade74ec65_prof);

        
        $__internal_a984dffaf7834051a9cfa0c719a4ff25064934c3e37b9c8ce01cb643f46318b8->leave($__internal_a984dffaf7834051a9cfa0c719a4ff25064934c3e37b9c8ce01cb643f46318b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
