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
        $__internal_2a6d2b0bb5d01ffb357bf52bb7aab47e56e60d5815dbb2b7df38da7085ad5cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6d2b0bb5d01ffb357bf52bb7aab47e56e60d5815dbb2b7df38da7085ad5cc9->enter($__internal_2a6d2b0bb5d01ffb357bf52bb7aab47e56e60d5815dbb2b7df38da7085ad5cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_471391bacfcf65305e672bfeffc45c5d46deb98aff85d924cd440cf1218ef770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471391bacfcf65305e672bfeffc45c5d46deb98aff85d924cd440cf1218ef770->enter($__internal_471391bacfcf65305e672bfeffc45c5d46deb98aff85d924cd440cf1218ef770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2a6d2b0bb5d01ffb357bf52bb7aab47e56e60d5815dbb2b7df38da7085ad5cc9->leave($__internal_2a6d2b0bb5d01ffb357bf52bb7aab47e56e60d5815dbb2b7df38da7085ad5cc9_prof);

        
        $__internal_471391bacfcf65305e672bfeffc45c5d46deb98aff85d924cd440cf1218ef770->leave($__internal_471391bacfcf65305e672bfeffc45c5d46deb98aff85d924cd440cf1218ef770_prof);

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
