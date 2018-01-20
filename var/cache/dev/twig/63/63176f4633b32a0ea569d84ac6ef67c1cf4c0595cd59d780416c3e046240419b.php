<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_26663d490674fc69f60a0ebbe715c2478330e61c42a73f816f158b4f8812b37e extends Twig_Template
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
        $__internal_66766df4a42d9c34f59e361d2c6b366fc335c081e1283d63d2d1c1e64ee1e8a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66766df4a42d9c34f59e361d2c6b366fc335c081e1283d63d2d1c1e64ee1e8a6->enter($__internal_66766df4a42d9c34f59e361d2c6b366fc335c081e1283d63d2d1c1e64ee1e8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_eaababfe5f746db01d2ac51024c8cb186aa50d9b8d94088a7c81a2d9a1d2525a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaababfe5f746db01d2ac51024c8cb186aa50d9b8d94088a7c81a2d9a1d2525a->enter($__internal_eaababfe5f746db01d2ac51024c8cb186aa50d9b8d94088a7c81a2d9a1d2525a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_66766df4a42d9c34f59e361d2c6b366fc335c081e1283d63d2d1c1e64ee1e8a6->leave($__internal_66766df4a42d9c34f59e361d2c6b366fc335c081e1283d63d2d1c1e64ee1e8a6_prof);

        
        $__internal_eaababfe5f746db01d2ac51024c8cb186aa50d9b8d94088a7c81a2d9a1d2525a->leave($__internal_eaababfe5f746db01d2ac51024c8cb186aa50d9b8d94088a7c81a2d9a1d2525a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
