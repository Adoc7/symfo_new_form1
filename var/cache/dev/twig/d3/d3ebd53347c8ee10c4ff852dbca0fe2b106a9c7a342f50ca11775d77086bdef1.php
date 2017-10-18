<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_83e2f5ef3a2e5970abfd286ba314e4dcc5113795d4d19e57407203d65236b487 extends Twig_Template
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
        $__internal_52bab49339edc17c91c3142f0e3af953fa797496ac87e98c7e6a6c0f894756e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52bab49339edc17c91c3142f0e3af953fa797496ac87e98c7e6a6c0f894756e9->enter($__internal_52bab49339edc17c91c3142f0e3af953fa797496ac87e98c7e6a6c0f894756e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_9bddff8ed1aa2d01691f742f3b03872d8374380c365fba1d397e1b3d9ddd5fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bddff8ed1aa2d01691f742f3b03872d8374380c365fba1d397e1b3d9ddd5fe7->enter($__internal_9bddff8ed1aa2d01691f742f3b03872d8374380c365fba1d397e1b3d9ddd5fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_52bab49339edc17c91c3142f0e3af953fa797496ac87e98c7e6a6c0f894756e9->leave($__internal_52bab49339edc17c91c3142f0e3af953fa797496ac87e98c7e6a6c0f894756e9_prof);

        
        $__internal_9bddff8ed1aa2d01691f742f3b03872d8374380c365fba1d397e1b3d9ddd5fe7->leave($__internal_9bddff8ed1aa2d01691f742f3b03872d8374380c365fba1d397e1b3d9ddd5fe7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
