<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_3f1d22493645b4783dd6da2fb09bbc8fc5011bc4e6db1aad0753834d37c75b32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd7f289ecb253f70be9579b89a4708c2edc37f42f45ea963a8e797ec9c20f9e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7f289ecb253f70be9579b89a4708c2edc37f42f45ea963a8e797ec9c20f9e4->enter($__internal_dd7f289ecb253f70be9579b89a4708c2edc37f42f45ea963a8e797ec9c20f9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ed93ecf5a58557f506cd5270694de634bcde9e9511684f4c8a29559301fcd50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed93ecf5a58557f506cd5270694de634bcde9e9511684f4c8a29559301fcd50f->enter($__internal_ed93ecf5a58557f506cd5270694de634bcde9e9511684f4c8a29559301fcd50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd7f289ecb253f70be9579b89a4708c2edc37f42f45ea963a8e797ec9c20f9e4->leave($__internal_dd7f289ecb253f70be9579b89a4708c2edc37f42f45ea963a8e797ec9c20f9e4_prof);

        
        $__internal_ed93ecf5a58557f506cd5270694de634bcde9e9511684f4c8a29559301fcd50f->leave($__internal_ed93ecf5a58557f506cd5270694de634bcde9e9511684f4c8a29559301fcd50f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8c93e22d09d22e0a11ee7ff53c97b1a829060b6e04d0d67c4f79ea2d75b367d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c93e22d09d22e0a11ee7ff53c97b1a829060b6e04d0d67c4f79ea2d75b367d->enter($__internal_d8c93e22d09d22e0a11ee7ff53c97b1a829060b6e04d0d67c4f79ea2d75b367d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d942177d1b8d46e465e8326bb570a55a19700dd65eab7600573ea6e0a4de0c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d942177d1b8d46e465e8326bb570a55a19700dd65eab7600573ea6e0a4de0c6f->enter($__internal_d942177d1b8d46e465e8326bb570a55a19700dd65eab7600573ea6e0a4de0c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d942177d1b8d46e465e8326bb570a55a19700dd65eab7600573ea6e0a4de0c6f->leave($__internal_d942177d1b8d46e465e8326bb570a55a19700dd65eab7600573ea6e0a4de0c6f_prof);

        
        $__internal_d8c93e22d09d22e0a11ee7ff53c97b1a829060b6e04d0d67c4f79ea2d75b367d->leave($__internal_d8c93e22d09d22e0a11ee7ff53c97b1a829060b6e04d0d67c4f79ea2d75b367d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c643575d28d8a7ee26aa26b9971dfff5a84e9e72e8d94080a365e9b62c0c3a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c643575d28d8a7ee26aa26b9971dfff5a84e9e72e8d94080a365e9b62c0c3a7c->enter($__internal_c643575d28d8a7ee26aa26b9971dfff5a84e9e72e8d94080a365e9b62c0c3a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67f8b81e31b97467e6f07312f3272c92768d2a9b0dcb1e6cad8c1ce2ea4c8b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f8b81e31b97467e6f07312f3272c92768d2a9b0dcb1e6cad8c1ce2ea4c8b7b->enter($__internal_67f8b81e31b97467e6f07312f3272c92768d2a9b0dcb1e6cad8c1ce2ea4c8b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_67f8b81e31b97467e6f07312f3272c92768d2a9b0dcb1e6cad8c1ce2ea4c8b7b->leave($__internal_67f8b81e31b97467e6f07312f3272c92768d2a9b0dcb1e6cad8c1ce2ea4c8b7b_prof);

        
        $__internal_c643575d28d8a7ee26aa26b9971dfff5a84e9e72e8d94080a365e9b62c0c3a7c->leave($__internal_c643575d28d8a7ee26aa26b9971dfff5a84e9e72e8d94080a365e9b62c0c3a7c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
