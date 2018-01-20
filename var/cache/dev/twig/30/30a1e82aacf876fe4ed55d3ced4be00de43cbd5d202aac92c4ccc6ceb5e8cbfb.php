<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_32e8693e84bc70f84181577dde902c2b80860aff21e859f06fe4ec54bf628c48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec4e3d666cf43eee178c610142daa6113c83784ea54de7b99df70904a06bbf21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec4e3d666cf43eee178c610142daa6113c83784ea54de7b99df70904a06bbf21->enter($__internal_ec4e3d666cf43eee178c610142daa6113c83784ea54de7b99df70904a06bbf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_e4e2380e7d2b4e03d78a026dbac8d7b156a3709d6df7fb0a620f6c4f54586e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e2380e7d2b4e03d78a026dbac8d7b156a3709d6df7fb0a620f6c4f54586e3a->enter($__internal_e4e2380e7d2b4e03d78a026dbac8d7b156a3709d6df7fb0a620f6c4f54586e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_ec4e3d666cf43eee178c610142daa6113c83784ea54de7b99df70904a06bbf21->leave($__internal_ec4e3d666cf43eee178c610142daa6113c83784ea54de7b99df70904a06bbf21_prof);

        
        $__internal_e4e2380e7d2b4e03d78a026dbac8d7b156a3709d6df7fb0a620f6c4f54586e3a->leave($__internal_e4e2380e7d2b4e03d78a026dbac8d7b156a3709d6df7fb0a620f6c4f54586e3a_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8a4e10941e598f380e866baf9a9c53f51aa87b366b2f0ff8d9d5a23a5ff07512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4e10941e598f380e866baf9a9c53f51aa87b366b2f0ff8d9d5a23a5ff07512->enter($__internal_8a4e10941e598f380e866baf9a9c53f51aa87b366b2f0ff8d9d5a23a5ff07512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_9584b518a7152d4e1af3c27fda6d73f6de4923ea8b40a776a2fa834290d237ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9584b518a7152d4e1af3c27fda6d73f6de4923ea8b40a776a2fa834290d237ea->enter($__internal_9584b518a7152d4e1af3c27fda6d73f6de4923ea8b40a776a2fa834290d237ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9584b518a7152d4e1af3c27fda6d73f6de4923ea8b40a776a2fa834290d237ea->leave($__internal_9584b518a7152d4e1af3c27fda6d73f6de4923ea8b40a776a2fa834290d237ea_prof);

        
        $__internal_8a4e10941e598f380e866baf9a9c53f51aa87b366b2f0ff8d9d5a23a5ff07512->leave($__internal_8a4e10941e598f380e866baf9a9c53f51aa87b366b2f0ff8d9d5a23a5ff07512_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_5d33382688dc486cb8897f42106890eb1330da356821c694057deeaaaff24a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d33382688dc486cb8897f42106890eb1330da356821c694057deeaaaff24a94->enter($__internal_5d33382688dc486cb8897f42106890eb1330da356821c694057deeaaaff24a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b84c3dcbdce16e352d3f75708f37f5ecc79b987c78ab31548258e2dcff80afe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84c3dcbdce16e352d3f75708f37f5ecc79b987c78ab31548258e2dcff80afe1->enter($__internal_b84c3dcbdce16e352d3f75708f37f5ecc79b987c78ab31548258e2dcff80afe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b84c3dcbdce16e352d3f75708f37f5ecc79b987c78ab31548258e2dcff80afe1->leave($__internal_b84c3dcbdce16e352d3f75708f37f5ecc79b987c78ab31548258e2dcff80afe1_prof);

        
        $__internal_5d33382688dc486cb8897f42106890eb1330da356821c694057deeaaaff24a94->leave($__internal_5d33382688dc486cb8897f42106890eb1330da356821c694057deeaaaff24a94_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_96e4874c655074c3f4c18df01b7cf6fd24ded721b9e30cd3b8cc6dd6a563786d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e4874c655074c3f4c18df01b7cf6fd24ded721b9e30cd3b8cc6dd6a563786d->enter($__internal_96e4874c655074c3f4c18df01b7cf6fd24ded721b9e30cd3b8cc6dd6a563786d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d8ce3d29500955282832bb0a4496e0912fda59827feb9f42890169312b27a9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ce3d29500955282832bb0a4496e0912fda59827feb9f42890169312b27a9b0->enter($__internal_d8ce3d29500955282832bb0a4496e0912fda59827feb9f42890169312b27a9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_d8ce3d29500955282832bb0a4496e0912fda59827feb9f42890169312b27a9b0->leave($__internal_d8ce3d29500955282832bb0a4496e0912fda59827feb9f42890169312b27a9b0_prof);

        
        $__internal_96e4874c655074c3f4c18df01b7cf6fd24ded721b9e30cd3b8cc6dd6a563786d->leave($__internal_96e4874c655074c3f4c18df01b7cf6fd24ded721b9e30cd3b8cc6dd6a563786d_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1c15e3d751c9fa731e8166f38f97dfbf0d8e5984070055aaa0e329d8b2b82be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c15e3d751c9fa731e8166f38f97dfbf0d8e5984070055aaa0e329d8b2b82be2->enter($__internal_1c15e3d751c9fa731e8166f38f97dfbf0d8e5984070055aaa0e329d8b2b82be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_1dec6ba45bbce63d7a4b676cb17d36841b4a62355386090cdc5ef0579cd8fe45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dec6ba45bbce63d7a4b676cb17d36841b4a62355386090cdc5ef0579cd8fe45->enter($__internal_1dec6ba45bbce63d7a4b676cb17d36841b4a62355386090cdc5ef0579cd8fe45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_1dec6ba45bbce63d7a4b676cb17d36841b4a62355386090cdc5ef0579cd8fe45->leave($__internal_1dec6ba45bbce63d7a4b676cb17d36841b4a62355386090cdc5ef0579cd8fe45_prof);

        
        $__internal_1c15e3d751c9fa731e8166f38f97dfbf0d8e5984070055aaa0e329d8b2b82be2->leave($__internal_1c15e3d751c9fa731e8166f38f97dfbf0d8e5984070055aaa0e329d8b2b82be2_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3d53f8041db2b4ebe13fadd29a6fbb7cc5ee47f324520aaa7cbe034075dc552f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d53f8041db2b4ebe13fadd29a6fbb7cc5ee47f324520aaa7cbe034075dc552f->enter($__internal_3d53f8041db2b4ebe13fadd29a6fbb7cc5ee47f324520aaa7cbe034075dc552f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_92def5eae51c37a863582a38a2d08cb2da0714292ac298762efae1a6fc18596c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92def5eae51c37a863582a38a2d08cb2da0714292ac298762efae1a6fc18596c->enter($__internal_92def5eae51c37a863582a38a2d08cb2da0714292ac298762efae1a6fc18596c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_92def5eae51c37a863582a38a2d08cb2da0714292ac298762efae1a6fc18596c->leave($__internal_92def5eae51c37a863582a38a2d08cb2da0714292ac298762efae1a6fc18596c_prof);

        
        $__internal_3d53f8041db2b4ebe13fadd29a6fbb7cc5ee47f324520aaa7cbe034075dc552f->leave($__internal_3d53f8041db2b4ebe13fadd29a6fbb7cc5ee47f324520aaa7cbe034075dc552f_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7bafb7b20ddc8de5edac198b0c330fc7c319d6bc90bc23c457f2307aa01c969b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bafb7b20ddc8de5edac198b0c330fc7c319d6bc90bc23c457f2307aa01c969b->enter($__internal_7bafb7b20ddc8de5edac198b0c330fc7c319d6bc90bc23c457f2307aa01c969b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_db03b60d7e152a6e0ad0b0e8721534e04e2cc66993f27b23e485b18cb2c02e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db03b60d7e152a6e0ad0b0e8721534e04e2cc66993f27b23e485b18cb2c02e34->enter($__internal_db03b60d7e152a6e0ad0b0e8721534e04e2cc66993f27b23e485b18cb2c02e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_db03b60d7e152a6e0ad0b0e8721534e04e2cc66993f27b23e485b18cb2c02e34->leave($__internal_db03b60d7e152a6e0ad0b0e8721534e04e2cc66993f27b23e485b18cb2c02e34_prof);

        
        $__internal_7bafb7b20ddc8de5edac198b0c330fc7c319d6bc90bc23c457f2307aa01c969b->leave($__internal_7bafb7b20ddc8de5edac198b0c330fc7c319d6bc90bc23c457f2307aa01c969b_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ef1ff8aff7e96101a304fb4720ecb92d301891bc80dcb2e135f8a7d1bd04db46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1ff8aff7e96101a304fb4720ecb92d301891bc80dcb2e135f8a7d1bd04db46->enter($__internal_ef1ff8aff7e96101a304fb4720ecb92d301891bc80dcb2e135f8a7d1bd04db46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_d0a2f07fcfd40567f6afddb0fa307713777ff3a1b26684024d543db499d1769f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a2f07fcfd40567f6afddb0fa307713777ff3a1b26684024d543db499d1769f->enter($__internal_d0a2f07fcfd40567f6afddb0fa307713777ff3a1b26684024d543db499d1769f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d0a2f07fcfd40567f6afddb0fa307713777ff3a1b26684024d543db499d1769f->leave($__internal_d0a2f07fcfd40567f6afddb0fa307713777ff3a1b26684024d543db499d1769f_prof);

        
        $__internal_ef1ff8aff7e96101a304fb4720ecb92d301891bc80dcb2e135f8a7d1bd04db46->leave($__internal_ef1ff8aff7e96101a304fb4720ecb92d301891bc80dcb2e135f8a7d1bd04db46_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_2002ef2d61e90c47eb4d45fbd6022e67c9d45b5cf699cfb143697e7e72f7c776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2002ef2d61e90c47eb4d45fbd6022e67c9d45b5cf699cfb143697e7e72f7c776->enter($__internal_2002ef2d61e90c47eb4d45fbd6022e67c9d45b5cf699cfb143697e7e72f7c776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_0f56dfb9fc415213fc3f6a4bcbc2fcfae72e54bf52643f24e6e0a0c5b69ae000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f56dfb9fc415213fc3f6a4bcbc2fcfae72e54bf52643f24e6e0a0c5b69ae000->enter($__internal_0f56dfb9fc415213fc3f6a4bcbc2fcfae72e54bf52643f24e6e0a0c5b69ae000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0f56dfb9fc415213fc3f6a4bcbc2fcfae72e54bf52643f24e6e0a0c5b69ae000->leave($__internal_0f56dfb9fc415213fc3f6a4bcbc2fcfae72e54bf52643f24e6e0a0c5b69ae000_prof);

        
        $__internal_2002ef2d61e90c47eb4d45fbd6022e67c9d45b5cf699cfb143697e7e72f7c776->leave($__internal_2002ef2d61e90c47eb4d45fbd6022e67c9d45b5cf699cfb143697e7e72f7c776_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_afb8f80a46524edf830c60303335707b42faccfd40afcba90a52f2755c164a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb8f80a46524edf830c60303335707b42faccfd40afcba90a52f2755c164a4b->enter($__internal_afb8f80a46524edf830c60303335707b42faccfd40afcba90a52f2755c164a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_3b577d8e424c33ccdd201168d78eb52076dfbc459d9e498de015efa5067589ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b577d8e424c33ccdd201168d78eb52076dfbc459d9e498de015efa5067589ca->enter($__internal_3b577d8e424c33ccdd201168d78eb52076dfbc459d9e498de015efa5067589ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_3b577d8e424c33ccdd201168d78eb52076dfbc459d9e498de015efa5067589ca->leave($__internal_3b577d8e424c33ccdd201168d78eb52076dfbc459d9e498de015efa5067589ca_prof);

        
        $__internal_afb8f80a46524edf830c60303335707b42faccfd40afcba90a52f2755c164a4b->leave($__internal_afb8f80a46524edf830c60303335707b42faccfd40afcba90a52f2755c164a4b_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_84d7534ef17ab8d7bfe9ae0877e94f09e84646afe4fe729af368675c97fd13e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d7534ef17ab8d7bfe9ae0877e94f09e84646afe4fe729af368675c97fd13e6->enter($__internal_84d7534ef17ab8d7bfe9ae0877e94f09e84646afe4fe729af368675c97fd13e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_04fd4d4a02b11f5f4f57e6c208ee70f1e7dc0a918cebef1260a69bffc52c1b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04fd4d4a02b11f5f4f57e6c208ee70f1e7dc0a918cebef1260a69bffc52c1b09->enter($__internal_04fd4d4a02b11f5f4f57e6c208ee70f1e7dc0a918cebef1260a69bffc52c1b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_04fd4d4a02b11f5f4f57e6c208ee70f1e7dc0a918cebef1260a69bffc52c1b09->leave($__internal_04fd4d4a02b11f5f4f57e6c208ee70f1e7dc0a918cebef1260a69bffc52c1b09_prof);

        
        $__internal_84d7534ef17ab8d7bfe9ae0877e94f09e84646afe4fe729af368675c97fd13e6->leave($__internal_84d7534ef17ab8d7bfe9ae0877e94f09e84646afe4fe729af368675c97fd13e6_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_97ff8cbe2a1c8af31b8102405c2f7bdbc9ea1b173fbeaffc88ab39ae1228b7c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ff8cbe2a1c8af31b8102405c2f7bdbc9ea1b173fbeaffc88ab39ae1228b7c0->enter($__internal_97ff8cbe2a1c8af31b8102405c2f7bdbc9ea1b173fbeaffc88ab39ae1228b7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f078c1e78bf9909e60f06b0fb3607fc0647bb13229201eed10fdacf17a098214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f078c1e78bf9909e60f06b0fb3607fc0647bb13229201eed10fdacf17a098214->enter($__internal_f078c1e78bf9909e60f06b0fb3607fc0647bb13229201eed10fdacf17a098214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_f078c1e78bf9909e60f06b0fb3607fc0647bb13229201eed10fdacf17a098214->leave($__internal_f078c1e78bf9909e60f06b0fb3607fc0647bb13229201eed10fdacf17a098214_prof);

        
        $__internal_97ff8cbe2a1c8af31b8102405c2f7bdbc9ea1b173fbeaffc88ab39ae1228b7c0->leave($__internal_97ff8cbe2a1c8af31b8102405c2f7bdbc9ea1b173fbeaffc88ab39ae1228b7c0_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_e35c660f598d9849f94a15e65439c91f67cfe89bc6983e9117460c4752bd9d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35c660f598d9849f94a15e65439c91f67cfe89bc6983e9117460c4752bd9d6d->enter($__internal_e35c660f598d9849f94a15e65439c91f67cfe89bc6983e9117460c4752bd9d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_b19770f35454ae349d477166a910f3f9e3250357e143271b7eaef4261ceb32fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19770f35454ae349d477166a910f3f9e3250357e143271b7eaef4261ceb32fe->enter($__internal_b19770f35454ae349d477166a910f3f9e3250357e143271b7eaef4261ceb32fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b19770f35454ae349d477166a910f3f9e3250357e143271b7eaef4261ceb32fe->leave($__internal_b19770f35454ae349d477166a910f3f9e3250357e143271b7eaef4261ceb32fe_prof);

        
        $__internal_e35c660f598d9849f94a15e65439c91f67cfe89bc6983e9117460c4752bd9d6d->leave($__internal_e35c660f598d9849f94a15e65439c91f67cfe89bc6983e9117460c4752bd9d6d_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_bafa5793cdd97515e65f6057e5fc7d6cfd917b575a8253eabcfb738ac97f2d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bafa5793cdd97515e65f6057e5fc7d6cfd917b575a8253eabcfb738ac97f2d6b->enter($__internal_bafa5793cdd97515e65f6057e5fc7d6cfd917b575a8253eabcfb738ac97f2d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_8a29e0ccee64f427879a4b83cd157be271cce605ac4c22daaf4c1fe26896df1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a29e0ccee64f427879a4b83cd157be271cce605ac4c22daaf4c1fe26896df1a->enter($__internal_8a29e0ccee64f427879a4b83cd157be271cce605ac4c22daaf4c1fe26896df1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8a29e0ccee64f427879a4b83cd157be271cce605ac4c22daaf4c1fe26896df1a->leave($__internal_8a29e0ccee64f427879a4b83cd157be271cce605ac4c22daaf4c1fe26896df1a_prof);

        
        $__internal_bafa5793cdd97515e65f6057e5fc7d6cfd917b575a8253eabcfb738ac97f2d6b->leave($__internal_bafa5793cdd97515e65f6057e5fc7d6cfd917b575a8253eabcfb738ac97f2d6b_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_950e1e184aa7606f1bd429728b9c9b6ea261d9ad4ae92ad345fb1677c0ca7224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950e1e184aa7606f1bd429728b9c9b6ea261d9ad4ae92ad345fb1677c0ca7224->enter($__internal_950e1e184aa7606f1bd429728b9c9b6ea261d9ad4ae92ad345fb1677c0ca7224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_60ad05bfa0a5ac89cbc4e0aa642d40212df9a32a0c10a4ef5446586b9b32502e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ad05bfa0a5ac89cbc4e0aa642d40212df9a32a0c10a4ef5446586b9b32502e->enter($__internal_60ad05bfa0a5ac89cbc4e0aa642d40212df9a32a0c10a4ef5446586b9b32502e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_60ad05bfa0a5ac89cbc4e0aa642d40212df9a32a0c10a4ef5446586b9b32502e->leave($__internal_60ad05bfa0a5ac89cbc4e0aa642d40212df9a32a0c10a4ef5446586b9b32502e_prof);

        
        $__internal_950e1e184aa7606f1bd429728b9c9b6ea261d9ad4ae92ad345fb1677c0ca7224->leave($__internal_950e1e184aa7606f1bd429728b9c9b6ea261d9ad4ae92ad345fb1677c0ca7224_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_675c10814154902cb4437c3db9c2874788ff209e0457c41e4219ef015bbfb1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675c10814154902cb4437c3db9c2874788ff209e0457c41e4219ef015bbfb1c8->enter($__internal_675c10814154902cb4437c3db9c2874788ff209e0457c41e4219ef015bbfb1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_d9e54fc469a0959fe81d8c98f121df2182b533e11af556e378ab72d4b5316af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e54fc469a0959fe81d8c98f121df2182b533e11af556e378ab72d4b5316af4->enter($__internal_d9e54fc469a0959fe81d8c98f121df2182b533e11af556e378ab72d4b5316af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d9e54fc469a0959fe81d8c98f121df2182b533e11af556e378ab72d4b5316af4->leave($__internal_d9e54fc469a0959fe81d8c98f121df2182b533e11af556e378ab72d4b5316af4_prof);

        
        $__internal_675c10814154902cb4437c3db9c2874788ff209e0457c41e4219ef015bbfb1c8->leave($__internal_675c10814154902cb4437c3db9c2874788ff209e0457c41e4219ef015bbfb1c8_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_70b33cc16a2df70b31a74384f178920d326cf0367e99bfe6faa74f8e8db6485a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b33cc16a2df70b31a74384f178920d326cf0367e99bfe6faa74f8e8db6485a->enter($__internal_70b33cc16a2df70b31a74384f178920d326cf0367e99bfe6faa74f8e8db6485a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7c1e54ac5b7c8bf4a5664aa153c545623147fc9b25369d845fff9fcd38e5d01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1e54ac5b7c8bf4a5664aa153c545623147fc9b25369d845fff9fcd38e5d01c->enter($__internal_7c1e54ac5b7c8bf4a5664aa153c545623147fc9b25369d845fff9fcd38e5d01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_7c1e54ac5b7c8bf4a5664aa153c545623147fc9b25369d845fff9fcd38e5d01c->leave($__internal_7c1e54ac5b7c8bf4a5664aa153c545623147fc9b25369d845fff9fcd38e5d01c_prof);

        
        $__internal_70b33cc16a2df70b31a74384f178920d326cf0367e99bfe6faa74f8e8db6485a->leave($__internal_70b33cc16a2df70b31a74384f178920d326cf0367e99bfe6faa74f8e8db6485a_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_be5497c4ad064ebd784db5e4cc9782b36ae455428fa0b8d9e3433d0b995f17cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5497c4ad064ebd784db5e4cc9782b36ae455428fa0b8d9e3433d0b995f17cc->enter($__internal_be5497c4ad064ebd784db5e4cc9782b36ae455428fa0b8d9e3433d0b995f17cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_6fbb70cc18ea698118b528a522a7962f09aee2effefe0a7bbc33953c6487d448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fbb70cc18ea698118b528a522a7962f09aee2effefe0a7bbc33953c6487d448->enter($__internal_6fbb70cc18ea698118b528a522a7962f09aee2effefe0a7bbc33953c6487d448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_6fbb70cc18ea698118b528a522a7962f09aee2effefe0a7bbc33953c6487d448->leave($__internal_6fbb70cc18ea698118b528a522a7962f09aee2effefe0a7bbc33953c6487d448_prof);

        
        $__internal_be5497c4ad064ebd784db5e4cc9782b36ae455428fa0b8d9e3433d0b995f17cc->leave($__internal_be5497c4ad064ebd784db5e4cc9782b36ae455428fa0b8d9e3433d0b995f17cc_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_91b029130b9c4e638d40b76cc659cd9d6faadf1ae35c957b08fada4f3b37cf6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91b029130b9c4e638d40b76cc659cd9d6faadf1ae35c957b08fada4f3b37cf6e->enter($__internal_91b029130b9c4e638d40b76cc659cd9d6faadf1ae35c957b08fada4f3b37cf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_fa4c8fd8d8e7b1289abe05037bd1afbac14545cae52d54c0aa0edf7f6a17a9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4c8fd8d8e7b1289abe05037bd1afbac14545cae52d54c0aa0edf7f6a17a9e5->enter($__internal_fa4c8fd8d8e7b1289abe05037bd1afbac14545cae52d54c0aa0edf7f6a17a9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_fa4c8fd8d8e7b1289abe05037bd1afbac14545cae52d54c0aa0edf7f6a17a9e5->leave($__internal_fa4c8fd8d8e7b1289abe05037bd1afbac14545cae52d54c0aa0edf7f6a17a9e5_prof);

        
        $__internal_91b029130b9c4e638d40b76cc659cd9d6faadf1ae35c957b08fada4f3b37cf6e->leave($__internal_91b029130b9c4e638d40b76cc659cd9d6faadf1ae35c957b08fada4f3b37cf6e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
