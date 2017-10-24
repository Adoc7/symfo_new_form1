<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d38dc11b0a6471af5da1dc0de18a4b1e3baa8fa3fde04e807604260def47283c extends Twig_Template
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
        $__internal_63de8cdb815e92f951c35cd8080559858f2f08aea39c863c0da53a7e97c51193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63de8cdb815e92f951c35cd8080559858f2f08aea39c863c0da53a7e97c51193->enter($__internal_63de8cdb815e92f951c35cd8080559858f2f08aea39c863c0da53a7e97c51193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_0d50c610fbea2a7ea63374110a0a6554573ceaf0e75f36b056d63616a860b999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d50c610fbea2a7ea63374110a0a6554573ceaf0e75f36b056d63616a860b999->enter($__internal_0d50c610fbea2a7ea63374110a0a6554573ceaf0e75f36b056d63616a860b999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_63de8cdb815e92f951c35cd8080559858f2f08aea39c863c0da53a7e97c51193->leave($__internal_63de8cdb815e92f951c35cd8080559858f2f08aea39c863c0da53a7e97c51193_prof);

        
        $__internal_0d50c610fbea2a7ea63374110a0a6554573ceaf0e75f36b056d63616a860b999->leave($__internal_0d50c610fbea2a7ea63374110a0a6554573ceaf0e75f36b056d63616a860b999_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
