<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_60e4d3416e8d7b37f4341b7947eb8e26b341edd1e6e7e6fce971e3469e52f80f extends Twig_Template
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
        $__internal_50f55feda20b00e062da65d3533f555ea811e1c67969251cbc290236fb1d2d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f55feda20b00e062da65d3533f555ea811e1c67969251cbc290236fb1d2d42->enter($__internal_50f55feda20b00e062da65d3533f555ea811e1c67969251cbc290236fb1d2d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_fdaa6600fb27191dcb7ccb1fd3d0be3b4c6739abaaadf1e1344bccfea9cf4b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdaa6600fb27191dcb7ccb1fd3d0be3b4c6739abaaadf1e1344bccfea9cf4b72->enter($__internal_fdaa6600fb27191dcb7ccb1fd3d0be3b4c6739abaaadf1e1344bccfea9cf4b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_50f55feda20b00e062da65d3533f555ea811e1c67969251cbc290236fb1d2d42->leave($__internal_50f55feda20b00e062da65d3533f555ea811e1c67969251cbc290236fb1d2d42_prof);

        
        $__internal_fdaa6600fb27191dcb7ccb1fd3d0be3b4c6739abaaadf1e1344bccfea9cf4b72->leave($__internal_fdaa6600fb27191dcb7ccb1fd3d0be3b4c6739abaaadf1e1344bccfea9cf4b72_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
