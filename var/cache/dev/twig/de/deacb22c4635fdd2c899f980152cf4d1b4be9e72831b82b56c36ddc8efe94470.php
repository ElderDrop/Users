<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6e541b6cf8a3afb703266e102fc5a1fdf554ef794aa959e076ac027df33c3a29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_001ab70833cc8625d49c3842b46d802e41ec43a2058e0c452c29c7a685666612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001ab70833cc8625d49c3842b46d802e41ec43a2058e0c452c29c7a685666612->enter($__internal_001ab70833cc8625d49c3842b46d802e41ec43a2058e0c452c29c7a685666612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_38a031d3ee19548b4e13ec8e2ea1c4c6b6a0a38d6ade4293dffcecace05e2885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a031d3ee19548b4e13ec8e2ea1c4c6b6a0a38d6ade4293dffcecace05e2885->enter($__internal_38a031d3ee19548b4e13ec8e2ea1c4c6b6a0a38d6ade4293dffcecace05e2885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_001ab70833cc8625d49c3842b46d802e41ec43a2058e0c452c29c7a685666612->leave($__internal_001ab70833cc8625d49c3842b46d802e41ec43a2058e0c452c29c7a685666612_prof);

        
        $__internal_38a031d3ee19548b4e13ec8e2ea1c4c6b6a0a38d6ade4293dffcecace05e2885->leave($__internal_38a031d3ee19548b4e13ec8e2ea1c4c6b6a0a38d6ade4293dffcecace05e2885_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a7580c122dac070bc06ace1c53f3e74a65604cb6c8f3c2f8975566375fec882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7580c122dac070bc06ace1c53f3e74a65604cb6c8f3c2f8975566375fec882->enter($__internal_6a7580c122dac070bc06ace1c53f3e74a65604cb6c8f3c2f8975566375fec882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b82fc45955aa228f9cf958072cf5a4ef7fab1cca88ca03756b23f6ab1447b335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82fc45955aa228f9cf958072cf5a4ef7fab1cca88ca03756b23f6ab1447b335->enter($__internal_b82fc45955aa228f9cf958072cf5a4ef7fab1cca88ca03756b23f6ab1447b335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b82fc45955aa228f9cf958072cf5a4ef7fab1cca88ca03756b23f6ab1447b335->leave($__internal_b82fc45955aa228f9cf958072cf5a4ef7fab1cca88ca03756b23f6ab1447b335_prof);

        
        $__internal_6a7580c122dac070bc06ace1c53f3e74a65604cb6c8f3c2f8975566375fec882->leave($__internal_6a7580c122dac070bc06ace1c53f3e74a65604cb6c8f3c2f8975566375fec882_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_58ef5c37e68edcadd87118e29e773ca513e2c26792a21959054ad4995b3661a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ef5c37e68edcadd87118e29e773ca513e2c26792a21959054ad4995b3661a7->enter($__internal_58ef5c37e68edcadd87118e29e773ca513e2c26792a21959054ad4995b3661a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c06b4e14fc14541f8c69260c431ce125da70fb75e5349e60e435888acba8423f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06b4e14fc14541f8c69260c431ce125da70fb75e5349e60e435888acba8423f->enter($__internal_c06b4e14fc14541f8c69260c431ce125da70fb75e5349e60e435888acba8423f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c06b4e14fc14541f8c69260c431ce125da70fb75e5349e60e435888acba8423f->leave($__internal_c06b4e14fc14541f8c69260c431ce125da70fb75e5349e60e435888acba8423f_prof);

        
        $__internal_58ef5c37e68edcadd87118e29e773ca513e2c26792a21959054ad4995b3661a7->leave($__internal_58ef5c37e68edcadd87118e29e773ca513e2c26792a21959054ad4995b3661a7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb9b2d987f1bc4a01762a79ea0c1a0be2d1cf01e687223efc781025b7867821c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb9b2d987f1bc4a01762a79ea0c1a0be2d1cf01e687223efc781025b7867821c->enter($__internal_fb9b2d987f1bc4a01762a79ea0c1a0be2d1cf01e687223efc781025b7867821c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0244b2a68e2e7f5a5dff25011bb1f6f64934f202b7fef79ac6668434adce8670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0244b2a68e2e7f5a5dff25011bb1f6f64934f202b7fef79ac6668434adce8670->enter($__internal_0244b2a68e2e7f5a5dff25011bb1f6f64934f202b7fef79ac6668434adce8670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0244b2a68e2e7f5a5dff25011bb1f6f64934f202b7fef79ac6668434adce8670->leave($__internal_0244b2a68e2e7f5a5dff25011bb1f6f64934f202b7fef79ac6668434adce8670_prof);

        
        $__internal_fb9b2d987f1bc4a01762a79ea0c1a0be2d1cf01e687223efc781025b7867821c->leave($__internal_fb9b2d987f1bc4a01762a79ea0c1a0be2d1cf01e687223efc781025b7867821c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
