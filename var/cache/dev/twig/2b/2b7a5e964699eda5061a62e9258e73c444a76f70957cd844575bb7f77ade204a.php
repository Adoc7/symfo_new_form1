<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_281fe104c3642df2ebbd6f9e1453ac947a9dbea1290ac2ca91ba2f482bfa1da2 extends Twig_Template
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
        $__internal_38c53696a61818a7fcc1fb114d5ede402ecea8f775b9907062241a1943e669d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c53696a61818a7fcc1fb114d5ede402ecea8f775b9907062241a1943e669d1->enter($__internal_38c53696a61818a7fcc1fb114d5ede402ecea8f775b9907062241a1943e669d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6fb27ebe8422cd3bee732c521fa78275039b5daa40f75e7410c5d02b3a6ab2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb27ebe8422cd3bee732c521fa78275039b5daa40f75e7410c5d02b3a6ab2aa->enter($__internal_6fb27ebe8422cd3bee732c521fa78275039b5daa40f75e7410c5d02b3a6ab2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_38c53696a61818a7fcc1fb114d5ede402ecea8f775b9907062241a1943e669d1->leave($__internal_38c53696a61818a7fcc1fb114d5ede402ecea8f775b9907062241a1943e669d1_prof);

        
        $__internal_6fb27ebe8422cd3bee732c521fa78275039b5daa40f75e7410c5d02b3a6ab2aa->leave($__internal_6fb27ebe8422cd3bee732c521fa78275039b5daa40f75e7410c5d02b3a6ab2aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
