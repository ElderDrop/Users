<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_5dd152c0b811349f8c1799324ed36bf4459f2c94555d5b49879852e33540ec0c extends Twig_Template
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
        $__internal_0b40b3c72baba6bf39b938eac876d6815a4cd72cf68937e1c40a0bd823d378ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b40b3c72baba6bf39b938eac876d6815a4cd72cf68937e1c40a0bd823d378ff->enter($__internal_0b40b3c72baba6bf39b938eac876d6815a4cd72cf68937e1c40a0bd823d378ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_0b4943b4cb87953b158501ab23bd4f8e5de4f4ce3c5b1f4df609b5296d5cf9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4943b4cb87953b158501ab23bd4f8e5de4f4ce3c5b1f4df609b5296d5cf9e2->enter($__internal_0b4943b4cb87953b158501ab23bd4f8e5de4f4ce3c5b1f4df609b5296d5cf9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_0b40b3c72baba6bf39b938eac876d6815a4cd72cf68937e1c40a0bd823d378ff->leave($__internal_0b40b3c72baba6bf39b938eac876d6815a4cd72cf68937e1c40a0bd823d378ff_prof);

        
        $__internal_0b4943b4cb87953b158501ab23bd4f8e5de4f4ce3c5b1f4df609b5296d5cf9e2->leave($__internal_0b4943b4cb87953b158501ab23bd4f8e5de4f4ce3c5b1f4df609b5296d5cf9e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
