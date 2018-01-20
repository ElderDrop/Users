<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_1c24f584b145fe05970da688d1996075f3064e56031450727cb65556c2dece73 extends Twig_Template
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
        $__internal_c82f2bff0b33f87954089cda273dfacdc6c52c6e1d1d6b688e55fbeedb1e7bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82f2bff0b33f87954089cda273dfacdc6c52c6e1d1d6b688e55fbeedb1e7bf2->enter($__internal_c82f2bff0b33f87954089cda273dfacdc6c52c6e1d1d6b688e55fbeedb1e7bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_01fc3362731eeeba86bda9dc3fa563641b8a10418a3fdc5fb297008a8d56de6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01fc3362731eeeba86bda9dc3fa563641b8a10418a3fdc5fb297008a8d56de6f->enter($__internal_01fc3362731eeeba86bda9dc3fa563641b8a10418a3fdc5fb297008a8d56de6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c82f2bff0b33f87954089cda273dfacdc6c52c6e1d1d6b688e55fbeedb1e7bf2->leave($__internal_c82f2bff0b33f87954089cda273dfacdc6c52c6e1d1d6b688e55fbeedb1e7bf2_prof);

        
        $__internal_01fc3362731eeeba86bda9dc3fa563641b8a10418a3fdc5fb297008a8d56de6f->leave($__internal_01fc3362731eeeba86bda9dc3fa563641b8a10418a3fdc5fb297008a8d56de6f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
