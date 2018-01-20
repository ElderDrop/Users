<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_11ec16e53d358c0fa0e6936a926303df93826dfc8903dffaf66a902909ffdf53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_246cad3697bf2a9650d66a914e7d5927096b49749184f04c8576fc09ee2d5573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246cad3697bf2a9650d66a914e7d5927096b49749184f04c8576fc09ee2d5573->enter($__internal_246cad3697bf2a9650d66a914e7d5927096b49749184f04c8576fc09ee2d5573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_4f247828839970224a3e94c44407d19c5f904f0453a35746596aaefbcb14caf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f247828839970224a3e94c44407d19c5f904f0453a35746596aaefbcb14caf8->enter($__internal_4f247828839970224a3e94c44407d19c5f904f0453a35746596aaefbcb14caf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_246cad3697bf2a9650d66a914e7d5927096b49749184f04c8576fc09ee2d5573->leave($__internal_246cad3697bf2a9650d66a914e7d5927096b49749184f04c8576fc09ee2d5573_prof);

        
        $__internal_4f247828839970224a3e94c44407d19c5f904f0453a35746596aaefbcb14caf8->leave($__internal_4f247828839970224a3e94c44407d19c5f904f0453a35746596aaefbcb14caf8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7665f139c0b5ada521e28a1e0c2984ef33037ac245b8dfb1472109580c18b813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7665f139c0b5ada521e28a1e0c2984ef33037ac245b8dfb1472109580c18b813->enter($__internal_7665f139c0b5ada521e28a1e0c2984ef33037ac245b8dfb1472109580c18b813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8500fef7828fda3a6e465e851f1af234255806c8567d3e8110b0250297b2f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8500fef7828fda3a6e465e851f1af234255806c8567d3e8110b0250297b2f82->enter($__internal_e8500fef7828fda3a6e465e851f1af234255806c8567d3e8110b0250297b2f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e8500fef7828fda3a6e465e851f1af234255806c8567d3e8110b0250297b2f82->leave($__internal_e8500fef7828fda3a6e465e851f1af234255806c8567d3e8110b0250297b2f82_prof);

        
        $__internal_7665f139c0b5ada521e28a1e0c2984ef33037ac245b8dfb1472109580c18b813->leave($__internal_7665f139c0b5ada521e28a1e0c2984ef33037ac245b8dfb1472109580c18b813_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5260abebc12f701e7b4e66f992e012780f72edd89b841bc479234497745af7fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5260abebc12f701e7b4e66f992e012780f72edd89b841bc479234497745af7fb->enter($__internal_5260abebc12f701e7b4e66f992e012780f72edd89b841bc479234497745af7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c0f259c9e9ad9f93c5619a268e68c32711115529cd213019046145c4a589467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0f259c9e9ad9f93c5619a268e68c32711115529cd213019046145c4a589467->enter($__internal_7c0f259c9e9ad9f93c5619a268e68c32711115529cd213019046145c4a589467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7c0f259c9e9ad9f93c5619a268e68c32711115529cd213019046145c4a589467->leave($__internal_7c0f259c9e9ad9f93c5619a268e68c32711115529cd213019046145c4a589467_prof);

        
        $__internal_5260abebc12f701e7b4e66f992e012780f72edd89b841bc479234497745af7fb->leave($__internal_5260abebc12f701e7b4e66f992e012780f72edd89b841bc479234497745af7fb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
