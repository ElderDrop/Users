<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2184d440a62d5ceda16fa829845c4102ac2cd4482313aa1bf8e3662dc9db8fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29a5dac9e176f8d041cdf0425fc74fef7dea71e4b935b517e36df232f029961c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a5dac9e176f8d041cdf0425fc74fef7dea71e4b935b517e36df232f029961c->enter($__internal_29a5dac9e176f8d041cdf0425fc74fef7dea71e4b935b517e36df232f029961c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_960996342f356a39017573deb98e7f825313de340949254a1edb779d282d087f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960996342f356a39017573deb98e7f825313de340949254a1edb779d282d087f->enter($__internal_960996342f356a39017573deb98e7f825313de340949254a1edb779d282d087f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_29a5dac9e176f8d041cdf0425fc74fef7dea71e4b935b517e36df232f029961c->leave($__internal_29a5dac9e176f8d041cdf0425fc74fef7dea71e4b935b517e36df232f029961c_prof);

        
        $__internal_960996342f356a39017573deb98e7f825313de340949254a1edb779d282d087f->leave($__internal_960996342f356a39017573deb98e7f825313de340949254a1edb779d282d087f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8b7c314fec21c0153f9f59d1d476cd7438e6981bb27d962421fed92dccc91ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b7c314fec21c0153f9f59d1d476cd7438e6981bb27d962421fed92dccc91ba->enter($__internal_e8b7c314fec21c0153f9f59d1d476cd7438e6981bb27d962421fed92dccc91ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1cc95a4774368ec54b4459d2f689689bde7feef942cf7b5c81376eab7aff723d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc95a4774368ec54b4459d2f689689bde7feef942cf7b5c81376eab7aff723d->enter($__internal_1cc95a4774368ec54b4459d2f689689bde7feef942cf7b5c81376eab7aff723d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1cc95a4774368ec54b4459d2f689689bde7feef942cf7b5c81376eab7aff723d->leave($__internal_1cc95a4774368ec54b4459d2f689689bde7feef942cf7b5c81376eab7aff723d_prof);

        
        $__internal_e8b7c314fec21c0153f9f59d1d476cd7438e6981bb27d962421fed92dccc91ba->leave($__internal_e8b7c314fec21c0153f9f59d1d476cd7438e6981bb27d962421fed92dccc91ba_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f02253c0efc5ebc6c2d3e815d8897e29b09d24da38f49160114e73f8aa830a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02253c0efc5ebc6c2d3e815d8897e29b09d24da38f49160114e73f8aa830a80->enter($__internal_f02253c0efc5ebc6c2d3e815d8897e29b09d24da38f49160114e73f8aa830a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c69ee8566a843fd27533c12be1994ea2c2228dd180664325b3a411acd992f5c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69ee8566a843fd27533c12be1994ea2c2228dd180664325b3a411acd992f5c6->enter($__internal_c69ee8566a843fd27533c12be1994ea2c2228dd180664325b3a411acd992f5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c69ee8566a843fd27533c12be1994ea2c2228dd180664325b3a411acd992f5c6->leave($__internal_c69ee8566a843fd27533c12be1994ea2c2228dd180664325b3a411acd992f5c6_prof);

        
        $__internal_f02253c0efc5ebc6c2d3e815d8897e29b09d24da38f49160114e73f8aa830a80->leave($__internal_f02253c0efc5ebc6c2d3e815d8897e29b09d24da38f49160114e73f8aa830a80_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_da6032a3f16b9b2d3dfbfaa7c719b7656d9cc2d060ae639ce821dd90eee6e5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6032a3f16b9b2d3dfbfaa7c719b7656d9cc2d060ae639ce821dd90eee6e5dc->enter($__internal_da6032a3f16b9b2d3dfbfaa7c719b7656d9cc2d060ae639ce821dd90eee6e5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_677fa750dc4375e527ac542049066058bce1e489e05865dd172ae45737cc3552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677fa750dc4375e527ac542049066058bce1e489e05865dd172ae45737cc3552->enter($__internal_677fa750dc4375e527ac542049066058bce1e489e05865dd172ae45737cc3552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_677fa750dc4375e527ac542049066058bce1e489e05865dd172ae45737cc3552->leave($__internal_677fa750dc4375e527ac542049066058bce1e489e05865dd172ae45737cc3552_prof);

        
        $__internal_da6032a3f16b9b2d3dfbfaa7c719b7656d9cc2d060ae639ce821dd90eee6e5dc->leave($__internal_da6032a3f16b9b2d3dfbfaa7c719b7656d9cc2d060ae639ce821dd90eee6e5dc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
