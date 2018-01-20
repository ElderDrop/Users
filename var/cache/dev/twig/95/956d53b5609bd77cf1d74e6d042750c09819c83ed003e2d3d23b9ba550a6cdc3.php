<?php

/* security/login.html.twig */
class __TwigTemplate_e168136096774b019a7f0f1f7cbaf0e77e956ec9197ca6bbfc228702dd6e216a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cc17c36d965e9f7b05438e463bebb00472a3aa7db720d867e8706b21bbfefe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc17c36d965e9f7b05438e463bebb00472a3aa7db720d867e8706b21bbfefe7->enter($__internal_2cc17c36d965e9f7b05438e463bebb00472a3aa7db720d867e8706b21bbfefe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6b0209e268293d805f4cc2ae1c6b949086659e307bab04f0a80af8dd0e1b7b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0209e268293d805f4cc2ae1c6b949086659e307bab04f0a80af8dd0e1b7b19->enter($__internal_6b0209e268293d805f4cc2ae1c6b949086659e307bab04f0a80af8dd0e1b7b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cc17c36d965e9f7b05438e463bebb00472a3aa7db720d867e8706b21bbfefe7->leave($__internal_2cc17c36d965e9f7b05438e463bebb00472a3aa7db720d867e8706b21bbfefe7_prof);

        
        $__internal_6b0209e268293d805f4cc2ae1c6b949086659e307bab04f0a80af8dd0e1b7b19->leave($__internal_6b0209e268293d805f4cc2ae1c6b949086659e307bab04f0a80af8dd0e1b7b19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f9ee8cee24a468ed475201c8630d72b8b0a8db4f78779a204337e0881008fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9ee8cee24a468ed475201c8630d72b8b0a8db4f78779a204337e0881008fb5->enter($__internal_8f9ee8cee24a468ed475201c8630d72b8b0a8db4f78779a204337e0881008fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc3dce8b11722c744fb80167f8c4f52cb7631eca764c61606c76876416ad9589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3dce8b11722c744fb80167f8c4f52cb7631eca764c61606c76876416ad9589->enter($__internal_dc3dce8b11722c744fb80167f8c4f52cb7631eca764c61606c76876416ad9589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 20
        echo "
        <button type=\"submit\">login</button>
    </form>
";
        
        $__internal_dc3dce8b11722c744fb80167f8c4f52cb7631eca764c61606c76876416ad9589->leave($__internal_dc3dce8b11722c744fb80167f8c4f52cb7631eca764c61606c76876416ad9589_prof);

        
        $__internal_8f9ee8cee24a468ed475201c8630d72b8b0a8db4f78779a204337e0881008fb5->leave($__internal_8f9ee8cee24a468ed475201c8630d72b8b0a8db4f78779a204337e0881008fb5_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  66 => 10,  61 => 8,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <form action=\"{{ path('login') }}\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        {#
            If you want to control the URL the user
            is redirected to on success (more details below)
            <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
        #}

        <button type=\"submit\">login</button>
    </form>
{% endblock %}", "security/login.html.twig", "/home/elderdrop/PhpstormProjects/Users/templates/security/login.html.twig");
    }
}
