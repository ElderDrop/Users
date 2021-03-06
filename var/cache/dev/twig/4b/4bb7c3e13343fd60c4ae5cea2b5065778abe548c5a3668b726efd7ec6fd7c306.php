<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_530151f3b4e3350431108c1bc8193570446d66800fdce448b4de0a1269b7f1f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0abb71df0077de9d329bba44296a203a63613bdb7f7325ec222b5834cbd37626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0abb71df0077de9d329bba44296a203a63613bdb7f7325ec222b5834cbd37626->enter($__internal_0abb71df0077de9d329bba44296a203a63613bdb7f7325ec222b5834cbd37626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_9d7145b0fb90b84a2c54f79bd56d2f827246e02e27b9ecb1c504d721c744044c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7145b0fb90b84a2c54f79bd56d2f827246e02e27b9ecb1c504d721c744044c->enter($__internal_9d7145b0fb90b84a2c54f79bd56d2f827246e02e27b9ecb1c504d721c744044c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_0abb71df0077de9d329bba44296a203a63613bdb7f7325ec222b5834cbd37626->leave($__internal_0abb71df0077de9d329bba44296a203a63613bdb7f7325ec222b5834cbd37626_prof);

        
        $__internal_9d7145b0fb90b84a2c54f79bd56d2f827246e02e27b9ecb1c504d721c744044c->leave($__internal_9d7145b0fb90b84a2c54f79bd56d2f827246e02e27b9ecb1c504d721c744044c_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_87bae56ba2764611c4d675f4c749f2b19ae64a7d03c3dd8a452e4cbc3b0cc19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bae56ba2764611c4d675f4c749f2b19ae64a7d03c3dd8a452e4cbc3b0cc19d->enter($__internal_87bae56ba2764611c4d675f4c749f2b19ae64a7d03c3dd8a452e4cbc3b0cc19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7e91b0b10efb9b1065c458a78f3669b23f607892128642cc766bb1ab17e6f0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e91b0b10efb9b1065c458a78f3669b23f607892128642cc766bb1ab17e6f0dc->enter($__internal_7e91b0b10efb9b1065c458a78f3669b23f607892128642cc766bb1ab17e6f0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_7e91b0b10efb9b1065c458a78f3669b23f607892128642cc766bb1ab17e6f0dc->leave($__internal_7e91b0b10efb9b1065c458a78f3669b23f607892128642cc766bb1ab17e6f0dc_prof);

        
        $__internal_87bae56ba2764611c4d675f4c749f2b19ae64a7d03c3dd8a452e4cbc3b0cc19d->leave($__internal_87bae56ba2764611c4d675f4c749f2b19ae64a7d03c3dd8a452e4cbc3b0cc19d_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_76cd53430e37c6808602662071afd439e4454e35c377f7c36cf1304d28db6f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76cd53430e37c6808602662071afd439e4454e35c377f7c36cf1304d28db6f3e->enter($__internal_76cd53430e37c6808602662071afd439e4454e35c377f7c36cf1304d28db6f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_5ddf846b1924de3cbbbb6c347e32a1a3437f3126cacbb0ad7163db93eba062f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ddf846b1924de3cbbbb6c347e32a1a3437f3126cacbb0ad7163db93eba062f8->enter($__internal_5ddf846b1924de3cbbbb6c347e32a1a3437f3126cacbb0ad7163db93eba062f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_5ddf846b1924de3cbbbb6c347e32a1a3437f3126cacbb0ad7163db93eba062f8->leave($__internal_5ddf846b1924de3cbbbb6c347e32a1a3437f3126cacbb0ad7163db93eba062f8_prof);

        
        $__internal_76cd53430e37c6808602662071afd439e4454e35c377f7c36cf1304d28db6f3e->leave($__internal_76cd53430e37c6808602662071afd439e4454e35c377f7c36cf1304d28db6f3e_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4462beda614f9cab52d6798a3721ecd820168c50e3d0a16d0b988631fcafd2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4462beda614f9cab52d6798a3721ecd820168c50e3d0a16d0b988631fcafd2c0->enter($__internal_4462beda614f9cab52d6798a3721ecd820168c50e3d0a16d0b988631fcafd2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_12ffc56326909cf1bf8304fe54c5ca3779c6c76cf6ce47d387477d66552e3af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ffc56326909cf1bf8304fe54c5ca3779c6c76cf6ce47d387477d66552e3af6->enter($__internal_12ffc56326909cf1bf8304fe54c5ca3779c6c76cf6ce47d387477d66552e3af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_12ffc56326909cf1bf8304fe54c5ca3779c6c76cf6ce47d387477d66552e3af6->leave($__internal_12ffc56326909cf1bf8304fe54c5ca3779c6c76cf6ce47d387477d66552e3af6_prof);

        
        $__internal_4462beda614f9cab52d6798a3721ecd820168c50e3d0a16d0b988631fcafd2c0->leave($__internal_4462beda614f9cab52d6798a3721ecd820168c50e3d0a16d0b988631fcafd2c0_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_383d1a597b506c6c3e6142ca096881122411acea43bd9c81b62c9cdd8ce192d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383d1a597b506c6c3e6142ca096881122411acea43bd9c81b62c9cdd8ce192d8->enter($__internal_383d1a597b506c6c3e6142ca096881122411acea43bd9c81b62c9cdd8ce192d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_b2fce2e23a71f772fc66811d08d8e32c6efa80486799f1b9b77093c1c7c458c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2fce2e23a71f772fc66811d08d8e32c6efa80486799f1b9b77093c1c7c458c8->enter($__internal_b2fce2e23a71f772fc66811d08d8e32c6efa80486799f1b9b77093c1c7c458c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_b2fce2e23a71f772fc66811d08d8e32c6efa80486799f1b9b77093c1c7c458c8->leave($__internal_b2fce2e23a71f772fc66811d08d8e32c6efa80486799f1b9b77093c1c7c458c8_prof);

        
        $__internal_383d1a597b506c6c3e6142ca096881122411acea43bd9c81b62c9cdd8ce192d8->leave($__internal_383d1a597b506c6c3e6142ca096881122411acea43bd9c81b62c9cdd8ce192d8_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_0a0e34e9945bc875be5e74aa6722899bd342899c1dffa405340812b1369e9b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0e34e9945bc875be5e74aa6722899bd342899c1dffa405340812b1369e9b07->enter($__internal_0a0e34e9945bc875be5e74aa6722899bd342899c1dffa405340812b1369e9b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_29c21770bbd7e087ebabc1f5cdbc946c1d68fb37c76ff13bc811a5ca1cd5e2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c21770bbd7e087ebabc1f5cdbc946c1d68fb37c76ff13bc811a5ca1cd5e2bd->enter($__internal_29c21770bbd7e087ebabc1f5cdbc946c1d68fb37c76ff13bc811a5ca1cd5e2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_29c21770bbd7e087ebabc1f5cdbc946c1d68fb37c76ff13bc811a5ca1cd5e2bd->leave($__internal_29c21770bbd7e087ebabc1f5cdbc946c1d68fb37c76ff13bc811a5ca1cd5e2bd_prof);

        
        $__internal_0a0e34e9945bc875be5e74aa6722899bd342899c1dffa405340812b1369e9b07->leave($__internal_0a0e34e9945bc875be5e74aa6722899bd342899c1dffa405340812b1369e9b07_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_7331d1fdf928bd7e1e1ab595b6fe7e71dfc68fcb4409cef9cd08638abee837c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7331d1fdf928bd7e1e1ab595b6fe7e71dfc68fcb4409cef9cd08638abee837c7->enter($__internal_7331d1fdf928bd7e1e1ab595b6fe7e71dfc68fcb4409cef9cd08638abee837c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_c913013d980b8ad7ab48978b8cd5167d57740c44a1056f9a41818dfe32c2f2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c913013d980b8ad7ab48978b8cd5167d57740c44a1056f9a41818dfe32c2f2e0->enter($__internal_c913013d980b8ad7ab48978b8cd5167d57740c44a1056f9a41818dfe32c2f2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_c913013d980b8ad7ab48978b8cd5167d57740c44a1056f9a41818dfe32c2f2e0->leave($__internal_c913013d980b8ad7ab48978b8cd5167d57740c44a1056f9a41818dfe32c2f2e0_prof);

        
        $__internal_7331d1fdf928bd7e1e1ab595b6fe7e71dfc68fcb4409cef9cd08638abee837c7->leave($__internal_7331d1fdf928bd7e1e1ab595b6fe7e71dfc68fcb4409cef9cd08638abee837c7_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e6ed7c8937737e6e71e4d1d75bcf4dafb7477c25385b298f6aee5956fbdd8800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ed7c8937737e6e71e4d1d75bcf4dafb7477c25385b298f6aee5956fbdd8800->enter($__internal_e6ed7c8937737e6e71e4d1d75bcf4dafb7477c25385b298f6aee5956fbdd8800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_e48089586b854143a4ad6d1a84ba2011ee35ccf801f676ff2bf3c03870c0ef10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48089586b854143a4ad6d1a84ba2011ee35ccf801f676ff2bf3c03870c0ef10->enter($__internal_e48089586b854143a4ad6d1a84ba2011ee35ccf801f676ff2bf3c03870c0ef10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_e48089586b854143a4ad6d1a84ba2011ee35ccf801f676ff2bf3c03870c0ef10->leave($__internal_e48089586b854143a4ad6d1a84ba2011ee35ccf801f676ff2bf3c03870c0ef10_prof);

        
        $__internal_e6ed7c8937737e6e71e4d1d75bcf4dafb7477c25385b298f6aee5956fbdd8800->leave($__internal_e6ed7c8937737e6e71e4d1d75bcf4dafb7477c25385b298f6aee5956fbdd8800_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ac98758be24e531fe75181b225ff9f79a01f1b869d0ee76d38d346022c3f139d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac98758be24e531fe75181b225ff9f79a01f1b869d0ee76d38d346022c3f139d->enter($__internal_ac98758be24e531fe75181b225ff9f79a01f1b869d0ee76d38d346022c3f139d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_41948063d6b6bca1cbaf1ae424baba3304b06943b61d002d6b5a21cfbad2c402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41948063d6b6bca1cbaf1ae424baba3304b06943b61d002d6b5a21cfbad2c402->enter($__internal_41948063d6b6bca1cbaf1ae424baba3304b06943b61d002d6b5a21cfbad2c402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_41948063d6b6bca1cbaf1ae424baba3304b06943b61d002d6b5a21cfbad2c402->leave($__internal_41948063d6b6bca1cbaf1ae424baba3304b06943b61d002d6b5a21cfbad2c402_prof);

        
        $__internal_ac98758be24e531fe75181b225ff9f79a01f1b869d0ee76d38d346022c3f139d->leave($__internal_ac98758be24e531fe75181b225ff9f79a01f1b869d0ee76d38d346022c3f139d_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
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
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
