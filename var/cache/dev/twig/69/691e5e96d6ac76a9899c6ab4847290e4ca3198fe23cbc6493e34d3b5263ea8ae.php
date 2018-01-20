<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_84ee529b0212986308ac082d44f1c23d3d0d168986db077d1721bcb627989e07 extends Twig_Template
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
        $__internal_377585b896758c930d1839b357412d5bcfa3376822e5d9155d3f248cf15c1cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377585b896758c930d1839b357412d5bcfa3376822e5d9155d3f248cf15c1cb3->enter($__internal_377585b896758c930d1839b357412d5bcfa3376822e5d9155d3f248cf15c1cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7830f5493cb28cb10dd87c4311f54de2092df7e264695227ce1df880da239b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7830f5493cb28cb10dd87c4311f54de2092df7e264695227ce1df880da239b04->enter($__internal_7830f5493cb28cb10dd87c4311f54de2092df7e264695227ce1df880da239b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_377585b896758c930d1839b357412d5bcfa3376822e5d9155d3f248cf15c1cb3->leave($__internal_377585b896758c930d1839b357412d5bcfa3376822e5d9155d3f248cf15c1cb3_prof);

        
        $__internal_7830f5493cb28cb10dd87c4311f54de2092df7e264695227ce1df880da239b04->leave($__internal_7830f5493cb28cb10dd87c4311f54de2092df7e264695227ce1df880da239b04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
