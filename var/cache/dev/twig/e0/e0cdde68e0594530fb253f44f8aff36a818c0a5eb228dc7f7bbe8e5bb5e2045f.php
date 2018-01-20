<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_81b96e869c8eecf3dc34ccaada347875cabe71424b46e11d0e6b3594817731d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_023ef30e6113b022214f7cf54e524d692250967de44e10c8c563686088fa52c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023ef30e6113b022214f7cf54e524d692250967de44e10c8c563686088fa52c4->enter($__internal_023ef30e6113b022214f7cf54e524d692250967de44e10c8c563686088fa52c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_bf17783a18fbc3ec44e49a0c046e972da37521b9c11255930caa00a8c367aa70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf17783a18fbc3ec44e49a0c046e972da37521b9c11255930caa00a8c367aa70->enter($__internal_bf17783a18fbc3ec44e49a0c046e972da37521b9c11255930caa00a8c367aa70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_023ef30e6113b022214f7cf54e524d692250967de44e10c8c563686088fa52c4->leave($__internal_023ef30e6113b022214f7cf54e524d692250967de44e10c8c563686088fa52c4_prof);

        
        $__internal_bf17783a18fbc3ec44e49a0c046e972da37521b9c11255930caa00a8c367aa70->leave($__internal_bf17783a18fbc3ec44e49a0c046e972da37521b9c11255930caa00a8c367aa70_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4035949bc33904a3d7147425522ae59fc3e3753c51c486603fe9792e370daf7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4035949bc33904a3d7147425522ae59fc3e3753c51c486603fe9792e370daf7a->enter($__internal_4035949bc33904a3d7147425522ae59fc3e3753c51c486603fe9792e370daf7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_45f5ecba14886a5345a2464f45e1d3d78aa2480132762c752d85f046fb376f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f5ecba14886a5345a2464f45e1d3d78aa2480132762c752d85f046fb376f24->enter($__internal_45f5ecba14886a5345a2464f45e1d3d78aa2480132762c752d85f046fb376f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_45f5ecba14886a5345a2464f45e1d3d78aa2480132762c752d85f046fb376f24->leave($__internal_45f5ecba14886a5345a2464f45e1d3d78aa2480132762c752d85f046fb376f24_prof);

        
        $__internal_4035949bc33904a3d7147425522ae59fc3e3753c51c486603fe9792e370daf7a->leave($__internal_4035949bc33904a3d7147425522ae59fc3e3753c51c486603fe9792e370daf7a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4a443331a39afae99ceb8e4aa5e5893054b5b4ed8e991ecdf75cc2852341795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a443331a39afae99ceb8e4aa5e5893054b5b4ed8e991ecdf75cc2852341795->enter($__internal_b4a443331a39afae99ceb8e4aa5e5893054b5b4ed8e991ecdf75cc2852341795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_31e67cb2a3fb15a4aa262e8b88d782505fbb95c8b6d276353e701a06fbb18fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e67cb2a3fb15a4aa262e8b88d782505fbb95c8b6d276353e701a06fbb18fdd->enter($__internal_31e67cb2a3fb15a4aa262e8b88d782505fbb95c8b6d276353e701a06fbb18fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_31e67cb2a3fb15a4aa262e8b88d782505fbb95c8b6d276353e701a06fbb18fdd->leave($__internal_31e67cb2a3fb15a4aa262e8b88d782505fbb95c8b6d276353e701a06fbb18fdd_prof);

        
        $__internal_b4a443331a39afae99ceb8e4aa5e5893054b5b4ed8e991ecdf75cc2852341795->leave($__internal_b4a443331a39afae99ceb8e4aa5e5893054b5b4ed8e991ecdf75cc2852341795_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
