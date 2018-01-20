<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_721ea9fcb21a8c25888fc6a46e7210ee7e7c5660907d360a1fd0ce7672edae68 extends Twig_Template
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
        $__internal_880391ec1030dacf0c6a5c3aeb8a27af902eb142ba38238832dc8b3969ab41b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880391ec1030dacf0c6a5c3aeb8a27af902eb142ba38238832dc8b3969ab41b2->enter($__internal_880391ec1030dacf0c6a5c3aeb8a27af902eb142ba38238832dc8b3969ab41b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_2dbd85e1acdd134a83c037661d39e4479a0a856b9fc42a2ed68848a6c06da315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dbd85e1acdd134a83c037661d39e4479a0a856b9fc42a2ed68848a6c06da315->enter($__internal_2dbd85e1acdd134a83c037661d39e4479a0a856b9fc42a2ed68848a6c06da315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_880391ec1030dacf0c6a5c3aeb8a27af902eb142ba38238832dc8b3969ab41b2->leave($__internal_880391ec1030dacf0c6a5c3aeb8a27af902eb142ba38238832dc8b3969ab41b2_prof);

        
        $__internal_2dbd85e1acdd134a83c037661d39e4479a0a856b9fc42a2ed68848a6c06da315->leave($__internal_2dbd85e1acdd134a83c037661d39e4479a0a856b9fc42a2ed68848a6c06da315_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
