<?php

/* base.html.twig */
class __TwigTemplate_bec05707194859d017a4fd5bb3a59646f2b84dcf2545423cc6b417395fd0e0e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a3febc13d2f8c16d587238469788103a40a709203b28da8fc21d22416104364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3febc13d2f8c16d587238469788103a40a709203b28da8fc21d22416104364->enter($__internal_6a3febc13d2f8c16d587238469788103a40a709203b28da8fc21d22416104364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_34102acc5573feb8381c50c7ef5e30b6789a13ce0e95a5765e93542a1d038ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34102acc5573feb8381c50c7ef5e30b6789a13ce0e95a5765e93542a1d038ae9->enter($__internal_34102acc5573feb8381c50c7ef5e30b6789a13ce0e95a5765e93542a1d038ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_6a3febc13d2f8c16d587238469788103a40a709203b28da8fc21d22416104364->leave($__internal_6a3febc13d2f8c16d587238469788103a40a709203b28da8fc21d22416104364_prof);

        
        $__internal_34102acc5573feb8381c50c7ef5e30b6789a13ce0e95a5765e93542a1d038ae9->leave($__internal_34102acc5573feb8381c50c7ef5e30b6789a13ce0e95a5765e93542a1d038ae9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8c638d264df18ddfa4894a8f54a9be6cf634d461844fe96c5d9b6341ae1635c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c638d264df18ddfa4894a8f54a9be6cf634d461844fe96c5d9b6341ae1635c->enter($__internal_a8c638d264df18ddfa4894a8f54a9be6cf634d461844fe96c5d9b6341ae1635c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae17750c8e98691afd875163449a1c934ae71d98abe19007fa1f0e4ff0f60e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae17750c8e98691afd875163449a1c934ae71d98abe19007fa1f0e4ff0f60e0a->enter($__internal_ae17750c8e98691afd875163449a1c934ae71d98abe19007fa1f0e4ff0f60e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ae17750c8e98691afd875163449a1c934ae71d98abe19007fa1f0e4ff0f60e0a->leave($__internal_ae17750c8e98691afd875163449a1c934ae71d98abe19007fa1f0e4ff0f60e0a_prof);

        
        $__internal_a8c638d264df18ddfa4894a8f54a9be6cf634d461844fe96c5d9b6341ae1635c->leave($__internal_a8c638d264df18ddfa4894a8f54a9be6cf634d461844fe96c5d9b6341ae1635c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df5160c2353954360afa61ef6b936a9b46ade6ea6728ae67ceca9bfc034b6d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5160c2353954360afa61ef6b936a9b46ade6ea6728ae67ceca9bfc034b6d60->enter($__internal_df5160c2353954360afa61ef6b936a9b46ade6ea6728ae67ceca9bfc034b6d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0e762b3b694beeaac8caad9c975dcb8ac1382c6f0c9608dcf5b3b839309f5e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e762b3b694beeaac8caad9c975dcb8ac1382c6f0c9608dcf5b3b839309f5e7b->enter($__internal_0e762b3b694beeaac8caad9c975dcb8ac1382c6f0c9608dcf5b3b839309f5e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0e762b3b694beeaac8caad9c975dcb8ac1382c6f0c9608dcf5b3b839309f5e7b->leave($__internal_0e762b3b694beeaac8caad9c975dcb8ac1382c6f0c9608dcf5b3b839309f5e7b_prof);

        
        $__internal_df5160c2353954360afa61ef6b936a9b46ade6ea6728ae67ceca9bfc034b6d60->leave($__internal_df5160c2353954360afa61ef6b936a9b46ade6ea6728ae67ceca9bfc034b6d60_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e707c808b4a1a514165e3c0b0ee10219ae9da64fa1c814a5ffb27201a6c982d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e707c808b4a1a514165e3c0b0ee10219ae9da64fa1c814a5ffb27201a6c982d->enter($__internal_8e707c808b4a1a514165e3c0b0ee10219ae9da64fa1c814a5ffb27201a6c982d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0782c4a38133599813c390f52c8fe8f634563d911de3ee00ccec3173fcfe84af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0782c4a38133599813c390f52c8fe8f634563d911de3ee00ccec3173fcfe84af->enter($__internal_0782c4a38133599813c390f52c8fe8f634563d911de3ee00ccec3173fcfe84af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0782c4a38133599813c390f52c8fe8f634563d911de3ee00ccec3173fcfe84af->leave($__internal_0782c4a38133599813c390f52c8fe8f634563d911de3ee00ccec3173fcfe84af_prof);

        
        $__internal_8e707c808b4a1a514165e3c0b0ee10219ae9da64fa1c814a5ffb27201a6c982d->leave($__internal_8e707c808b4a1a514165e3c0b0ee10219ae9da64fa1c814a5ffb27201a6c982d_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee6b288f32ed42f16ff546e56c10cd5fc8c3fd429f037ea59739e287c40abb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6b288f32ed42f16ff546e56c10cd5fc8c3fd429f037ea59739e287c40abb9d->enter($__internal_ee6b288f32ed42f16ff546e56c10cd5fc8c3fd429f037ea59739e287c40abb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3ac60ff79c1799b6eb900d44c031d7a47b9303bdb276b451fc51b250bc3022b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac60ff79c1799b6eb900d44c031d7a47b9303bdb276b451fc51b250bc3022b8->enter($__internal_3ac60ff79c1799b6eb900d44c031d7a47b9303bdb276b451fc51b250bc3022b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3ac60ff79c1799b6eb900d44c031d7a47b9303bdb276b451fc51b250bc3022b8->leave($__internal_3ac60ff79c1799b6eb900d44c031d7a47b9303bdb276b451fc51b250bc3022b8_prof);

        
        $__internal_ee6b288f32ed42f16ff546e56c10cd5fc8c3fd429f037ea59739e287c40abb9d->leave($__internal_ee6b288f32ed42f16ff546e56c10cd5fc8c3fd429f037ea59739e287c40abb9d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/elderdrop/PhpstormProjects/Users/templates/base.html.twig");
    }
}
