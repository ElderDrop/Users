<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_736a54e8bdfdb4e9c2f90ab054b22e195174c3d19276f6b3058c2413b80fb615 extends Twig_Template
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
        $__internal_34e3854a4f5bbb63fabf3e914ec7ba44b3fd24d4070644a0e85a400980b90b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e3854a4f5bbb63fabf3e914ec7ba44b3fd24d4070644a0e85a400980b90b61->enter($__internal_34e3854a4f5bbb63fabf3e914ec7ba44b3fd24d4070644a0e85a400980b90b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_a9c70e388a8c3e1fddebb365ed4f5101fb761093e8d35e8cb4689a11d5987b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c70e388a8c3e1fddebb365ed4f5101fb761093e8d35e8cb4689a11d5987b6e->enter($__internal_a9c70e388a8c3e1fddebb365ed4f5101fb761093e8d35e8cb4689a11d5987b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_34e3854a4f5bbb63fabf3e914ec7ba44b3fd24d4070644a0e85a400980b90b61->leave($__internal_34e3854a4f5bbb63fabf3e914ec7ba44b3fd24d4070644a0e85a400980b90b61_prof);

        
        $__internal_a9c70e388a8c3e1fddebb365ed4f5101fb761093e8d35e8cb4689a11d5987b6e->leave($__internal_a9c70e388a8c3e1fddebb365ed4f5101fb761093e8d35e8cb4689a11d5987b6e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
