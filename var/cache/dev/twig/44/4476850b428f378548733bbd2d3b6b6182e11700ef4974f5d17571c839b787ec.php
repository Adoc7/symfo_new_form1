<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9e1f77be0e2665c2c904bd91fc18cfcf42358c38bbf7396a356fd7cbee5179b9 extends Twig_Template
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
        $__internal_cdb3e25b5807f02e1118efa13483b60c1df6c6513c36d7d545dba3511ff9353b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb3e25b5807f02e1118efa13483b60c1df6c6513c36d7d545dba3511ff9353b->enter($__internal_cdb3e25b5807f02e1118efa13483b60c1df6c6513c36d7d545dba3511ff9353b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_407633afa239cf9650c34b91cda4fdbd960369d922e9b2055c0cef2c4bed5fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407633afa239cf9650c34b91cda4fdbd960369d922e9b2055c0cef2c4bed5fbc->enter($__internal_407633afa239cf9650c34b91cda4fdbd960369d922e9b2055c0cef2c4bed5fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_cdb3e25b5807f02e1118efa13483b60c1df6c6513c36d7d545dba3511ff9353b->leave($__internal_cdb3e25b5807f02e1118efa13483b60c1df6c6513c36d7d545dba3511ff9353b_prof);

        
        $__internal_407633afa239cf9650c34b91cda4fdbd960369d922e9b2055c0cef2c4bed5fbc->leave($__internal_407633afa239cf9650c34b91cda4fdbd960369d922e9b2055c0cef2c4bed5fbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
