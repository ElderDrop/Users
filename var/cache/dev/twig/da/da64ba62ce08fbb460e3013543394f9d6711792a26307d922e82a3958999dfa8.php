<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_ca31054d78ece37b797d4d60ee0c503efd5b2d1fe183f71a800d9cab77ee6f37 extends Twig_Template
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
        $__internal_4e33c7939d15528237cb1373be49f6f69700b178faf264ac8674139183000c4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e33c7939d15528237cb1373be49f6f69700b178faf264ac8674139183000c4b->enter($__internal_4e33c7939d15528237cb1373be49f6f69700b178faf264ac8674139183000c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_2e3a456ebaece1e7906f0f1320b7b3f1021287affcba7a7fde06342c3229d2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3a456ebaece1e7906f0f1320b7b3f1021287affcba7a7fde06342c3229d2cf->enter($__internal_2e3a456ebaece1e7906f0f1320b7b3f1021287affcba7a7fde06342c3229d2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_4e33c7939d15528237cb1373be49f6f69700b178faf264ac8674139183000c4b->leave($__internal_4e33c7939d15528237cb1373be49f6f69700b178faf264ac8674139183000c4b_prof);

        
        $__internal_2e3a456ebaece1e7906f0f1320b7b3f1021287affcba7a7fde06342c3229d2cf->leave($__internal_2e3a456ebaece1e7906f0f1320b7b3f1021287affcba7a7fde06342c3229d2cf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
