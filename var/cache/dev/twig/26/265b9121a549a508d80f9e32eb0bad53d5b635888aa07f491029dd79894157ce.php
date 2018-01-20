<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_e2ba3ecc15144db3faec48098b9dbea5cd4280a4c2285def152056e81cadbc61 extends Twig_Template
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
        $__internal_c155c7d967a5aa2ba78fe3034bedb09a7a3f23fae8c2f87335ac598179ec8bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c155c7d967a5aa2ba78fe3034bedb09a7a3f23fae8c2f87335ac598179ec8bc2->enter($__internal_c155c7d967a5aa2ba78fe3034bedb09a7a3f23fae8c2f87335ac598179ec8bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_70ce17a78217a39426c60ea29b4f1c659bffb1da03e4db0e4664b061ee8bddd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ce17a78217a39426c60ea29b4f1c659bffb1da03e4db0e4664b061ee8bddd2->enter($__internal_70ce17a78217a39426c60ea29b4f1c659bffb1da03e4db0e4664b061ee8bddd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_c155c7d967a5aa2ba78fe3034bedb09a7a3f23fae8c2f87335ac598179ec8bc2->leave($__internal_c155c7d967a5aa2ba78fe3034bedb09a7a3f23fae8c2f87335ac598179ec8bc2_prof);

        
        $__internal_70ce17a78217a39426c60ea29b4f1c659bffb1da03e4db0e4664b061ee8bddd2->leave($__internal_70ce17a78217a39426c60ea29b4f1c659bffb1da03e4db0e4664b061ee8bddd2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
