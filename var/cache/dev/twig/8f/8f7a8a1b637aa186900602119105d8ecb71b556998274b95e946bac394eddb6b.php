<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_eb7ea7594ffc0d6435d046f81de317e3381cc670d91fe9de0d95444b7c11d746 extends Twig_Template
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
        $__internal_8b24f5fe267c42aa64db4f5234d968b0ce0f977031091aebd622f7be41ff1482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b24f5fe267c42aa64db4f5234d968b0ce0f977031091aebd622f7be41ff1482->enter($__internal_8b24f5fe267c42aa64db4f5234d968b0ce0f977031091aebd622f7be41ff1482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7d7eb8debf67ffe86e6c394782ed12285ebe2ce0dfa0bd4b073425a1de566218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7eb8debf67ffe86e6c394782ed12285ebe2ce0dfa0bd4b073425a1de566218->enter($__internal_7d7eb8debf67ffe86e6c394782ed12285ebe2ce0dfa0bd4b073425a1de566218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_8b24f5fe267c42aa64db4f5234d968b0ce0f977031091aebd622f7be41ff1482->leave($__internal_8b24f5fe267c42aa64db4f5234d968b0ce0f977031091aebd622f7be41ff1482_prof);

        
        $__internal_7d7eb8debf67ffe86e6c394782ed12285ebe2ce0dfa0bd4b073425a1de566218->leave($__internal_7d7eb8debf67ffe86e6c394782ed12285ebe2ce0dfa0bd4b073425a1de566218_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
