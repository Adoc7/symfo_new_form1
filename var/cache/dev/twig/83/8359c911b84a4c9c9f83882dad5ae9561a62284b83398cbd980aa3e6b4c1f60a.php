<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_406223498b2ba2d8d397cc72068c66e1987051b8842d312dcdbfc2a2cc478ce5 extends Twig_Template
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
        $__internal_dbb1382444ed4337fcbe943be3ceed607a54c008980827b7fb52e84b5b89edf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb1382444ed4337fcbe943be3ceed607a54c008980827b7fb52e84b5b89edf3->enter($__internal_dbb1382444ed4337fcbe943be3ceed607a54c008980827b7fb52e84b5b89edf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_39a888e72c8f8de3906a41507b7d4415e152ecfce493d0d9cfbd58bbd43d5f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a888e72c8f8de3906a41507b7d4415e152ecfce493d0d9cfbd58bbd43d5f3f->enter($__internal_39a888e72c8f8de3906a41507b7d4415e152ecfce493d0d9cfbd58bbd43d5f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_dbb1382444ed4337fcbe943be3ceed607a54c008980827b7fb52e84b5b89edf3->leave($__internal_dbb1382444ed4337fcbe943be3ceed607a54c008980827b7fb52e84b5b89edf3_prof);

        
        $__internal_39a888e72c8f8de3906a41507b7d4415e152ecfce493d0d9cfbd58bbd43d5f3f->leave($__internal_39a888e72c8f8de3906a41507b7d4415e152ecfce493d0d9cfbd58bbd43d5f3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
