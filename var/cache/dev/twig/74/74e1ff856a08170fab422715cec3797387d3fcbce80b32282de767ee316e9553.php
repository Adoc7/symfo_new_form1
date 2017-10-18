<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6a0929b647dbfebe3c74867e694138aa17da19ad74292e75d4031a53e2bb6a47 extends Twig_Template
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
        $__internal_aa63feb6fef6c1c380f8470661bb9a5eb17cafda32344519b38797cf3dc58347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa63feb6fef6c1c380f8470661bb9a5eb17cafda32344519b38797cf3dc58347->enter($__internal_aa63feb6fef6c1c380f8470661bb9a5eb17cafda32344519b38797cf3dc58347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_cc625c5c6b4231bc9854b2b97ab1dae7a8bbbe79288c5b56c9fd24f290a5ebbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc625c5c6b4231bc9854b2b97ab1dae7a8bbbe79288c5b56c9fd24f290a5ebbe->enter($__internal_cc625c5c6b4231bc9854b2b97ab1dae7a8bbbe79288c5b56c9fd24f290a5ebbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_aa63feb6fef6c1c380f8470661bb9a5eb17cafda32344519b38797cf3dc58347->leave($__internal_aa63feb6fef6c1c380f8470661bb9a5eb17cafda32344519b38797cf3dc58347_prof);

        
        $__internal_cc625c5c6b4231bc9854b2b97ab1dae7a8bbbe79288c5b56c9fd24f290a5ebbe->leave($__internal_cc625c5c6b4231bc9854b2b97ab1dae7a8bbbe79288c5b56c9fd24f290a5ebbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
