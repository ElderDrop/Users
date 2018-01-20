<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_9f52a69c0b505e56b2d8b432bfc7a7229b672a90be7cd2434d3cfd611462a8b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e187de693cb45cafa4a5bdf41dc99577fa44a9ad4597842677d9fdf63966b7c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e187de693cb45cafa4a5bdf41dc99577fa44a9ad4597842677d9fdf63966b7c5->enter($__internal_e187de693cb45cafa4a5bdf41dc99577fa44a9ad4597842677d9fdf63966b7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_36dd7a3e4f51ed9b7ffeb75b2213b0cdac70e3608eafd1a04fa655257d0ea676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36dd7a3e4f51ed9b7ffeb75b2213b0cdac70e3608eafd1a04fa655257d0ea676->enter($__internal_36dd7a3e4f51ed9b7ffeb75b2213b0cdac70e3608eafd1a04fa655257d0ea676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_e187de693cb45cafa4a5bdf41dc99577fa44a9ad4597842677d9fdf63966b7c5->leave($__internal_e187de693cb45cafa4a5bdf41dc99577fa44a9ad4597842677d9fdf63966b7c5_prof);

        
        $__internal_36dd7a3e4f51ed9b7ffeb75b2213b0cdac70e3608eafd1a04fa655257d0ea676->leave($__internal_36dd7a3e4f51ed9b7ffeb75b2213b0cdac70e3608eafd1a04fa655257d0ea676_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_7ad14f482b2ad814136554bc7a3267a3447fb2f75404ded0575fb361431c9d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad14f482b2ad814136554bc7a3267a3447fb2f75404ded0575fb361431c9d91->enter($__internal_7ad14f482b2ad814136554bc7a3267a3447fb2f75404ded0575fb361431c9d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_77bcd0c52ad38effd27d1c73e653e6ae9e8e9d5feabf5b93e3be28a3f10c491f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77bcd0c52ad38effd27d1c73e653e6ae9e8e9d5feabf5b93e3be28a3f10c491f->enter($__internal_77bcd0c52ad38effd27d1c73e653e6ae9e8e9d5feabf5b93e3be28a3f10c491f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_77bcd0c52ad38effd27d1c73e653e6ae9e8e9d5feabf5b93e3be28a3f10c491f->leave($__internal_77bcd0c52ad38effd27d1c73e653e6ae9e8e9d5feabf5b93e3be28a3f10c491f_prof);

        
        $__internal_7ad14f482b2ad814136554bc7a3267a3447fb2f75404ded0575fb361431c9d91->leave($__internal_7ad14f482b2ad814136554bc7a3267a3447fb2f75404ded0575fb361431c9d91_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_89ec6de7b20d3de75ff857ff88ec68911393a37bd5c8a3ffdb9cd5ac82f50468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ec6de7b20d3de75ff857ff88ec68911393a37bd5c8a3ffdb9cd5ac82f50468->enter($__internal_89ec6de7b20d3de75ff857ff88ec68911393a37bd5c8a3ffdb9cd5ac82f50468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7fa29d4327065d3e5cac444963c3658328d67344e09755f1285b64decd1babd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa29d4327065d3e5cac444963c3658328d67344e09755f1285b64decd1babd0->enter($__internal_7fa29d4327065d3e5cac444963c3658328d67344e09755f1285b64decd1babd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_7fa29d4327065d3e5cac444963c3658328d67344e09755f1285b64decd1babd0->leave($__internal_7fa29d4327065d3e5cac444963c3658328d67344e09755f1285b64decd1babd0_prof);

        
        $__internal_89ec6de7b20d3de75ff857ff88ec68911393a37bd5c8a3ffdb9cd5ac82f50468->leave($__internal_89ec6de7b20d3de75ff857ff88ec68911393a37bd5c8a3ffdb9cd5ac82f50468_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c672fe9bc33f86dc42d4b4a54e1841bc342844b0f588de95ab47c7bcde807e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c672fe9bc33f86dc42d4b4a54e1841bc342844b0f588de95ab47c7bcde807e88->enter($__internal_c672fe9bc33f86dc42d4b4a54e1841bc342844b0f588de95ab47c7bcde807e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_f192936fedd33e4f9be77146bcc75e4c9c662bff72dd413f8e4702eeef3db772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f192936fedd33e4f9be77146bcc75e4c9c662bff72dd413f8e4702eeef3db772->enter($__internal_f192936fedd33e4f9be77146bcc75e4c9c662bff72dd413f8e4702eeef3db772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_f192936fedd33e4f9be77146bcc75e4c9c662bff72dd413f8e4702eeef3db772->leave($__internal_f192936fedd33e4f9be77146bcc75e4c9c662bff72dd413f8e4702eeef3db772_prof);

        
        $__internal_c672fe9bc33f86dc42d4b4a54e1841bc342844b0f588de95ab47c7bcde807e88->leave($__internal_c672fe9bc33f86dc42d4b4a54e1841bc342844b0f588de95ab47c7bcde807e88_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6b365ece1d5cadd65f7e2500f708e61f080f16a9735fcfda1d1d3b5a32b512b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b365ece1d5cadd65f7e2500f708e61f080f16a9735fcfda1d1d3b5a32b512b8->enter($__internal_6b365ece1d5cadd65f7e2500f708e61f080f16a9735fcfda1d1d3b5a32b512b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8a9600be7977bee8b9ef65e1d63fd99bd2e138a40e7e80db82b60e4fc0a2b3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9600be7977bee8b9ef65e1d63fd99bd2e138a40e7e80db82b60e4fc0a2b3f8->enter($__internal_8a9600be7977bee8b9ef65e1d63fd99bd2e138a40e7e80db82b60e4fc0a2b3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_8a9600be7977bee8b9ef65e1d63fd99bd2e138a40e7e80db82b60e4fc0a2b3f8->leave($__internal_8a9600be7977bee8b9ef65e1d63fd99bd2e138a40e7e80db82b60e4fc0a2b3f8_prof);

        
        $__internal_6b365ece1d5cadd65f7e2500f708e61f080f16a9735fcfda1d1d3b5a32b512b8->leave($__internal_6b365ece1d5cadd65f7e2500f708e61f080f16a9735fcfda1d1d3b5a32b512b8_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_b9790faf9d2421fab4b64f722f51d7a439163eed78b22302a395a965631b43f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9790faf9d2421fab4b64f722f51d7a439163eed78b22302a395a965631b43f6->enter($__internal_b9790faf9d2421fab4b64f722f51d7a439163eed78b22302a395a965631b43f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_b1ce9a6f2d11e4faf26dbba04bff3d39cf91af5df2cbdb545e3acd47a6b653ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ce9a6f2d11e4faf26dbba04bff3d39cf91af5df2cbdb545e3acd47a6b653ce->enter($__internal_b1ce9a6f2d11e4faf26dbba04bff3d39cf91af5df2cbdb545e3acd47a6b653ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_b1ce9a6f2d11e4faf26dbba04bff3d39cf91af5df2cbdb545e3acd47a6b653ce->leave($__internal_b1ce9a6f2d11e4faf26dbba04bff3d39cf91af5df2cbdb545e3acd47a6b653ce_prof);

        
        $__internal_b9790faf9d2421fab4b64f722f51d7a439163eed78b22302a395a965631b43f6->leave($__internal_b9790faf9d2421fab4b64f722f51d7a439163eed78b22302a395a965631b43f6_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_883da861f0fbec0310fbdb8fadab2067f5efe0d08b883910d2342fb59572b638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883da861f0fbec0310fbdb8fadab2067f5efe0d08b883910d2342fb59572b638->enter($__internal_883da861f0fbec0310fbdb8fadab2067f5efe0d08b883910d2342fb59572b638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_ec680afa03c0463a8cd92ffa6e844b45fa8726bfd3336b90ffdcb4da603c3417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec680afa03c0463a8cd92ffa6e844b45fa8726bfd3336b90ffdcb4da603c3417->enter($__internal_ec680afa03c0463a8cd92ffa6e844b45fa8726bfd3336b90ffdcb4da603c3417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_ec680afa03c0463a8cd92ffa6e844b45fa8726bfd3336b90ffdcb4da603c3417->leave($__internal_ec680afa03c0463a8cd92ffa6e844b45fa8726bfd3336b90ffdcb4da603c3417_prof);

        
        $__internal_883da861f0fbec0310fbdb8fadab2067f5efe0d08b883910d2342fb59572b638->leave($__internal_883da861f0fbec0310fbdb8fadab2067f5efe0d08b883910d2342fb59572b638_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_f1e9c3b10e6258548073f3477bfb8aeed5a9148718bfc2ce70265a9b480e2dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e9c3b10e6258548073f3477bfb8aeed5a9148718bfc2ce70265a9b480e2dd5->enter($__internal_f1e9c3b10e6258548073f3477bfb8aeed5a9148718bfc2ce70265a9b480e2dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_b6fed4b9ff3926c9ceba2c4a8a0534aea5c4980769bb467156f71b96cab55d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6fed4b9ff3926c9ceba2c4a8a0534aea5c4980769bb467156f71b96cab55d11->enter($__internal_b6fed4b9ff3926c9ceba2c4a8a0534aea5c4980769bb467156f71b96cab55d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_b6fed4b9ff3926c9ceba2c4a8a0534aea5c4980769bb467156f71b96cab55d11->leave($__internal_b6fed4b9ff3926c9ceba2c4a8a0534aea5c4980769bb467156f71b96cab55d11_prof);

        
        $__internal_f1e9c3b10e6258548073f3477bfb8aeed5a9148718bfc2ce70265a9b480e2dd5->leave($__internal_f1e9c3b10e6258548073f3477bfb8aeed5a9148718bfc2ce70265a9b480e2dd5_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_94c17b092a6f3f9f0312b399ed1d1debc99e74f33e7895f3100e34e79b4ce53b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c17b092a6f3f9f0312b399ed1d1debc99e74f33e7895f3100e34e79b4ce53b->enter($__internal_94c17b092a6f3f9f0312b399ed1d1debc99e74f33e7895f3100e34e79b4ce53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_2d7afa42b5576d3533fad49afa4ee5df603a3050a071ce2cad7dbe67896d0601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7afa42b5576d3533fad49afa4ee5df603a3050a071ce2cad7dbe67896d0601->enter($__internal_2d7afa42b5576d3533fad49afa4ee5df603a3050a071ce2cad7dbe67896d0601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_2d7afa42b5576d3533fad49afa4ee5df603a3050a071ce2cad7dbe67896d0601->leave($__internal_2d7afa42b5576d3533fad49afa4ee5df603a3050a071ce2cad7dbe67896d0601_prof);

        
        $__internal_94c17b092a6f3f9f0312b399ed1d1debc99e74f33e7895f3100e34e79b4ce53b->leave($__internal_94c17b092a6f3f9f0312b399ed1d1debc99e74f33e7895f3100e34e79b4ce53b_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
