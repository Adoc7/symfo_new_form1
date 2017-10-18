<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ca36975a1b427ef7b40cee221cef30427c252cd891120f5c9816fac5ac0d6f10 extends Twig_Template
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
        $__internal_c2b8aef2ae4e06c721e6727f3f368958ea7d3fd91478968900f31b96cea99858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b8aef2ae4e06c721e6727f3f368958ea7d3fd91478968900f31b96cea99858->enter($__internal_c2b8aef2ae4e06c721e6727f3f368958ea7d3fd91478968900f31b96cea99858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1ff96902e2e0faa2e91335401152c8ae23647bc8f5785f982565450c66cc8ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff96902e2e0faa2e91335401152c8ae23647bc8f5785f982565450c66cc8ed1->enter($__internal_1ff96902e2e0faa2e91335401152c8ae23647bc8f5785f982565450c66cc8ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c2b8aef2ae4e06c721e6727f3f368958ea7d3fd91478968900f31b96cea99858->leave($__internal_c2b8aef2ae4e06c721e6727f3f368958ea7d3fd91478968900f31b96cea99858_prof);

        
        $__internal_1ff96902e2e0faa2e91335401152c8ae23647bc8f5785f982565450c66cc8ed1->leave($__internal_1ff96902e2e0faa2e91335401152c8ae23647bc8f5785f982565450c66cc8ed1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
