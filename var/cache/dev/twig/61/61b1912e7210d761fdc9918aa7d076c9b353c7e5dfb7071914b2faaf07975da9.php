<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4765aad5a9612c979a9a756490ea7d4cc72ad22fe487e74c637eb11b01c94a33 extends Twig_Template
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
        $__internal_ba5eb0c04211bed71b2e3236c17e8e8e6d225898fad34693bffef3e9e14b6404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5eb0c04211bed71b2e3236c17e8e8e6d225898fad34693bffef3e9e14b6404->enter($__internal_ba5eb0c04211bed71b2e3236c17e8e8e6d225898fad34693bffef3e9e14b6404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a3cb1be9a14ffeb783240db2a9f66212e102f3fd32115268b7ef207d220ddac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3cb1be9a14ffeb783240db2a9f66212e102f3fd32115268b7ef207d220ddac5->enter($__internal_a3cb1be9a14ffeb783240db2a9f66212e102f3fd32115268b7ef207d220ddac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ba5eb0c04211bed71b2e3236c17e8e8e6d225898fad34693bffef3e9e14b6404->leave($__internal_ba5eb0c04211bed71b2e3236c17e8e8e6d225898fad34693bffef3e9e14b6404_prof);

        
        $__internal_a3cb1be9a14ffeb783240db2a9f66212e102f3fd32115268b7ef207d220ddac5->leave($__internal_a3cb1be9a14ffeb783240db2a9f66212e102f3fd32115268b7ef207d220ddac5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
