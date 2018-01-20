<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_72958e4bbeabf541e52b1c79c65f8db6d4dac88c50327b2b724971a3816058d1 extends Twig_Template
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
        $__internal_070b68c7be529d01e6930225ead8c67bb5906bace5cdf84082148115eb606b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070b68c7be529d01e6930225ead8c67bb5906bace5cdf84082148115eb606b9e->enter($__internal_070b68c7be529d01e6930225ead8c67bb5906bace5cdf84082148115eb606b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_b3fc4a9aeb31963a09910192c87c0f30b10e7fc9407056eae7f746e70ef2c044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fc4a9aeb31963a09910192c87c0f30b10e7fc9407056eae7f746e70ef2c044->enter($__internal_b3fc4a9aeb31963a09910192c87c0f30b10e7fc9407056eae7f746e70ef2c044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_070b68c7be529d01e6930225ead8c67bb5906bace5cdf84082148115eb606b9e->leave($__internal_070b68c7be529d01e6930225ead8c67bb5906bace5cdf84082148115eb606b9e_prof);

        
        $__internal_b3fc4a9aeb31963a09910192c87c0f30b10e7fc9407056eae7f746e70ef2c044->leave($__internal_b3fc4a9aeb31963a09910192c87c0f30b10e7fc9407056eae7f746e70ef2c044_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/Exception/traces.xml.twig");
    }
}
