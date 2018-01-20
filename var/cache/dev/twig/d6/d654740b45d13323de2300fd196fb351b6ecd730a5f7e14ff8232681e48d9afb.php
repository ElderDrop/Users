<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_eed9c205dc68d56f86a4fa4afc2a5ea65eda100af90bf0d562de2719714ae988 extends Twig_Template
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
        $__internal_9d5e702cb73075a19c8cf01066da2072fb36f902b74abc8fd3e084b9b9f490dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5e702cb73075a19c8cf01066da2072fb36f902b74abc8fd3e084b9b9f490dc->enter($__internal_9d5e702cb73075a19c8cf01066da2072fb36f902b74abc8fd3e084b9b9f490dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_c4a513a231a123db6de801eb251d0f897deb28650d705952a1e91caa071d7fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a513a231a123db6de801eb251d0f897deb28650d705952a1e91caa071d7fcc->enter($__internal_c4a513a231a123db6de801eb251d0f897deb28650d705952a1e91caa071d7fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9d5e702cb73075a19c8cf01066da2072fb36f902b74abc8fd3e084b9b9f490dc->leave($__internal_9d5e702cb73075a19c8cf01066da2072fb36f902b74abc8fd3e084b9b9f490dc_prof);

        
        $__internal_c4a513a231a123db6de801eb251d0f897deb28650d705952a1e91caa071d7fcc->leave($__internal_c4a513a231a123db6de801eb251d0f897deb28650d705952a1e91caa071d7fcc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
