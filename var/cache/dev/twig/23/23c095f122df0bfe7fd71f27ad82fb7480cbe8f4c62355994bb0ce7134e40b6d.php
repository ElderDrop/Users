<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_06a5fa1926f764150af5bd8846c2a0263c8ae79f01c60856f46b370950fba38d extends Twig_Template
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
        $__internal_8fa495a884e75952ca45a516e9d8b7e180de8c8d7219453f33f0e08fa59d59dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa495a884e75952ca45a516e9d8b7e180de8c8d7219453f33f0e08fa59d59dd->enter($__internal_8fa495a884e75952ca45a516e9d8b7e180de8c8d7219453f33f0e08fa59d59dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_344b69744da4811e9c72d1455be185c6b20cd1598c6ef5d187298ea178948354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344b69744da4811e9c72d1455be185c6b20cd1598c6ef5d187298ea178948354->enter($__internal_344b69744da4811e9c72d1455be185c6b20cd1598c6ef5d187298ea178948354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_8fa495a884e75952ca45a516e9d8b7e180de8c8d7219453f33f0e08fa59d59dd->leave($__internal_8fa495a884e75952ca45a516e9d8b7e180de8c8d7219453f33f0e08fa59d59dd_prof);

        
        $__internal_344b69744da4811e9c72d1455be185c6b20cd1598c6ef5d187298ea178948354->leave($__internal_344b69744da4811e9c72d1455be185c6b20cd1598c6ef5d187298ea178948354_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
