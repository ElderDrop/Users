<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_c0214ac7c653ae18b844980a83689a0ccc3c04fd358fab29c4bcee1bc5e7a32a extends Twig_Template
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
        $__internal_8f243ccc9ca833b31016e86c1096b2ef4b777f855b8c22d73a66ad63a6d78685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f243ccc9ca833b31016e86c1096b2ef4b777f855b8c22d73a66ad63a6d78685->enter($__internal_8f243ccc9ca833b31016e86c1096b2ef4b777f855b8c22d73a66ad63a6d78685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_0f2d772ac6957b618d22649511c7063e057694d0b62edd8416830d042a873f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2d772ac6957b618d22649511c7063e057694d0b62edd8416830d042a873f6c->enter($__internal_0f2d772ac6957b618d22649511c7063e057694d0b62edd8416830d042a873f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_8f243ccc9ca833b31016e86c1096b2ef4b777f855b8c22d73a66ad63a6d78685->leave($__internal_8f243ccc9ca833b31016e86c1096b2ef4b777f855b8c22d73a66ad63a6d78685_prof);

        
        $__internal_0f2d772ac6957b618d22649511c7063e057694d0b62edd8416830d042a873f6c->leave($__internal_0f2d772ac6957b618d22649511c7063e057694d0b62edd8416830d042a873f6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/elderdrop/PhpstormProjects/Users/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
