<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_b6b879875330d81fee60a12a483fad6cc23ee5be769f7173dfa032d47549e1cc extends Twig_Template
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
        $__internal_966f933ce5d7344ad6fbfa94b3d9a5e12e744d9b9d0d03a040f5441682937ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_966f933ce5d7344ad6fbfa94b3d9a5e12e744d9b9d0d03a040f5441682937ae2->enter($__internal_966f933ce5d7344ad6fbfa94b3d9a5e12e744d9b9d0d03a040f5441682937ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_32ea9f896777dd470af358b9ce659b063fbb1345ba91985825e1e017ec793c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ea9f896777dd470af358b9ce659b063fbb1345ba91985825e1e017ec793c18->enter($__internal_32ea9f896777dd470af358b9ce659b063fbb1345ba91985825e1e017ec793c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_966f933ce5d7344ad6fbfa94b3d9a5e12e744d9b9d0d03a040f5441682937ae2->leave($__internal_966f933ce5d7344ad6fbfa94b3d9a5e12e744d9b9d0d03a040f5441682937ae2_prof);

        
        $__internal_32ea9f896777dd470af358b9ce659b063fbb1345ba91985825e1e017ec793c18->leave($__internal_32ea9f896777dd470af358b9ce659b063fbb1345ba91985825e1e017ec793c18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Framework/Form/attributes.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
