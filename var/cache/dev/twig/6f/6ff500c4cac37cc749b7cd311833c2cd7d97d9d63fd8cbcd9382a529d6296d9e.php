<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_573005c60dd013c8cc78d3b2c9b91cb5da6fe8cc5faa188ebbd25851ea9d8dcf extends Twig_Template
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
        $__internal_1fa5e2fa49dec4e45b087e7d6111acbd9339d4229d5f300ecca2ff373e0e7515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa5e2fa49dec4e45b087e7d6111acbd9339d4229d5f300ecca2ff373e0e7515->enter($__internal_1fa5e2fa49dec4e45b087e7d6111acbd9339d4229d5f300ecca2ff373e0e7515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c612595020282de38851406445a6482ada9f23b9480f2cf0364decad0782b07f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c612595020282de38851406445a6482ada9f23b9480f2cf0364decad0782b07f->enter($__internal_c612595020282de38851406445a6482ada9f23b9480f2cf0364decad0782b07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1fa5e2fa49dec4e45b087e7d6111acbd9339d4229d5f300ecca2ff373e0e7515->leave($__internal_1fa5e2fa49dec4e45b087e7d6111acbd9339d4229d5f300ecca2ff373e0e7515_prof);

        
        $__internal_c612595020282de38851406445a6482ada9f23b9480f2cf0364decad0782b07f->leave($__internal_c612595020282de38851406445a6482ada9f23b9480f2cf0364decad0782b07f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
