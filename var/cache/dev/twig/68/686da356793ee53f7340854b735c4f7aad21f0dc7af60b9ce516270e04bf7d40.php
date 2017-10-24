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
        $__internal_67a72e85d2bf2edaef0175a4d8924d367f9efcb7d7dfdb00b28af5366a6144ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a72e85d2bf2edaef0175a4d8924d367f9efcb7d7dfdb00b28af5366a6144ea->enter($__internal_67a72e85d2bf2edaef0175a4d8924d367f9efcb7d7dfdb00b28af5366a6144ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_ad1d2bfa2b1a19e39e42d54c0a53d408a2b133b29a3714c54c014f6174779466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1d2bfa2b1a19e39e42d54c0a53d408a2b133b29a3714c54c014f6174779466->enter($__internal_ad1d2bfa2b1a19e39e42d54c0a53d408a2b133b29a3714c54c014f6174779466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_67a72e85d2bf2edaef0175a4d8924d367f9efcb7d7dfdb00b28af5366a6144ea->leave($__internal_67a72e85d2bf2edaef0175a4d8924d367f9efcb7d7dfdb00b28af5366a6144ea_prof);

        
        $__internal_ad1d2bfa2b1a19e39e42d54c0a53d408a2b133b29a3714c54c014f6174779466->leave($__internal_ad1d2bfa2b1a19e39e42d54c0a53d408a2b133b29a3714c54c014f6174779466_prof);

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
