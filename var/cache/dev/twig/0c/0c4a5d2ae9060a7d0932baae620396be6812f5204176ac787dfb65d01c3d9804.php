<?php

/* form_table_layout.html.twig */
class __TwigTemplate_c18a5158fd9e8c541c26757f980c306312f1cb3acddd3a1c83bd8075ac673bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39fdfacaa90f28e7b02464879e07edc0fc9428750a8d51068311cd87534f898f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fdfacaa90f28e7b02464879e07edc0fc9428750a8d51068311cd87534f898f->enter($__internal_39fdfacaa90f28e7b02464879e07edc0fc9428750a8d51068311cd87534f898f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_c6ffdb6e4071898a12e8356b890a23f2f86d743bdf05fe28792170bdcbc3e230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ffdb6e4071898a12e8356b890a23f2f86d743bdf05fe28792170bdcbc3e230->enter($__internal_c6ffdb6e4071898a12e8356b890a23f2f86d743bdf05fe28792170bdcbc3e230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_39fdfacaa90f28e7b02464879e07edc0fc9428750a8d51068311cd87534f898f->leave($__internal_39fdfacaa90f28e7b02464879e07edc0fc9428750a8d51068311cd87534f898f_prof);

        
        $__internal_c6ffdb6e4071898a12e8356b890a23f2f86d743bdf05fe28792170bdcbc3e230->leave($__internal_c6ffdb6e4071898a12e8356b890a23f2f86d743bdf05fe28792170bdcbc3e230_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_66d9668e0d90de689f950181ad7760c8035d42022f1275898f308a79ae2bb5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d9668e0d90de689f950181ad7760c8035d42022f1275898f308a79ae2bb5d1->enter($__internal_66d9668e0d90de689f950181ad7760c8035d42022f1275898f308a79ae2bb5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a912c6833b004ca70ec8611e13a7c583be8f5af064d9782eee72a283a6432743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a912c6833b004ca70ec8611e13a7c583be8f5af064d9782eee72a283a6432743->enter($__internal_a912c6833b004ca70ec8611e13a7c583be8f5af064d9782eee72a283a6432743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_a912c6833b004ca70ec8611e13a7c583be8f5af064d9782eee72a283a6432743->leave($__internal_a912c6833b004ca70ec8611e13a7c583be8f5af064d9782eee72a283a6432743_prof);

        
        $__internal_66d9668e0d90de689f950181ad7760c8035d42022f1275898f308a79ae2bb5d1->leave($__internal_66d9668e0d90de689f950181ad7760c8035d42022f1275898f308a79ae2bb5d1_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_cf70d1a2858bff6e7a3fdcbf65399710b2fbc44171316fcc156867794ef71f0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf70d1a2858bff6e7a3fdcbf65399710b2fbc44171316fcc156867794ef71f0b->enter($__internal_cf70d1a2858bff6e7a3fdcbf65399710b2fbc44171316fcc156867794ef71f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_556792fbd4002d7287d9c7fbc29c38e55a15208f0535860feae04dbb1b0f6482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556792fbd4002d7287d9c7fbc29c38e55a15208f0535860feae04dbb1b0f6482->enter($__internal_556792fbd4002d7287d9c7fbc29c38e55a15208f0535860feae04dbb1b0f6482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_556792fbd4002d7287d9c7fbc29c38e55a15208f0535860feae04dbb1b0f6482->leave($__internal_556792fbd4002d7287d9c7fbc29c38e55a15208f0535860feae04dbb1b0f6482_prof);

        
        $__internal_cf70d1a2858bff6e7a3fdcbf65399710b2fbc44171316fcc156867794ef71f0b->leave($__internal_cf70d1a2858bff6e7a3fdcbf65399710b2fbc44171316fcc156867794ef71f0b_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_bc9794e9cfa26c2ed435db1c35cce6628a4fec3b25dea5956d68cfb91a934dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9794e9cfa26c2ed435db1c35cce6628a4fec3b25dea5956d68cfb91a934dbd->enter($__internal_bc9794e9cfa26c2ed435db1c35cce6628a4fec3b25dea5956d68cfb91a934dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_07516f29066a3f6acbe6212b03c1af3dd0c66be1fd68652e69f0f916998468bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07516f29066a3f6acbe6212b03c1af3dd0c66be1fd68652e69f0f916998468bd->enter($__internal_07516f29066a3f6acbe6212b03c1af3dd0c66be1fd68652e69f0f916998468bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_07516f29066a3f6acbe6212b03c1af3dd0c66be1fd68652e69f0f916998468bd->leave($__internal_07516f29066a3f6acbe6212b03c1af3dd0c66be1fd68652e69f0f916998468bd_prof);

        
        $__internal_bc9794e9cfa26c2ed435db1c35cce6628a4fec3b25dea5956d68cfb91a934dbd->leave($__internal_bc9794e9cfa26c2ed435db1c35cce6628a4fec3b25dea5956d68cfb91a934dbd_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_21c2c2a8c10751754d65c9f685fd0d9e55b805121685da083497f9ecf768058f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c2c2a8c10751754d65c9f685fd0d9e55b805121685da083497f9ecf768058f->enter($__internal_21c2c2a8c10751754d65c9f685fd0d9e55b805121685da083497f9ecf768058f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_a8da51b27e499322bd80540aa486a72fe536e58cae2841e6209c45316e963299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8da51b27e499322bd80540aa486a72fe536e58cae2841e6209c45316e963299->enter($__internal_a8da51b27e499322bd80540aa486a72fe536e58cae2841e6209c45316e963299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_a8da51b27e499322bd80540aa486a72fe536e58cae2841e6209c45316e963299->leave($__internal_a8da51b27e499322bd80540aa486a72fe536e58cae2841e6209c45316e963299_prof);

        
        $__internal_21c2c2a8c10751754d65c9f685fd0d9e55b805121685da083497f9ecf768058f->leave($__internal_21c2c2a8c10751754d65c9f685fd0d9e55b805121685da083497f9ecf768058f_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bridge/Resources/views/Form/form_table_layout.html.twig");
    }
}
