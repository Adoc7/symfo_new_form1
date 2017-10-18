<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_1371ccef3f909c2932a07980cf26cb659ddec67b414f128363423c8a0dc44a61 extends Twig_Template
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
        $__internal_a27bfe8c6bfdafdb74509c37e5f1e03091327428f698be675bfb4f27fbc0523d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27bfe8c6bfdafdb74509c37e5f1e03091327428f698be675bfb4f27fbc0523d->enter($__internal_a27bfe8c6bfdafdb74509c37e5f1e03091327428f698be675bfb4f27fbc0523d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ee9d574f4524a941d7c9e12e0960856a2ad8aa2b1378733b3c0d47495ee6344a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9d574f4524a941d7c9e12e0960856a2ad8aa2b1378733b3c0d47495ee6344a->enter($__internal_ee9d574f4524a941d7c9e12e0960856a2ad8aa2b1378733b3c0d47495ee6344a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a27bfe8c6bfdafdb74509c37e5f1e03091327428f698be675bfb4f27fbc0523d->leave($__internal_a27bfe8c6bfdafdb74509c37e5f1e03091327428f698be675bfb4f27fbc0523d_prof);

        
        $__internal_ee9d574f4524a941d7c9e12e0960856a2ad8aa2b1378733b3c0d47495ee6344a->leave($__internal_ee9d574f4524a941d7c9e12e0960856a2ad8aa2b1378733b3c0d47495ee6344a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
