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
        $__internal_a8b386800d548343381c416b61383f292f3f5b67dd3aca5bc7df063d0ec8a848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b386800d548343381c416b61383f292f3f5b67dd3aca5bc7df063d0ec8a848->enter($__internal_a8b386800d548343381c416b61383f292f3f5b67dd3aca5bc7df063d0ec8a848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ba2f663c135b3d1c174475124b3eb4ae048e133ea2566d29611b6d26921f09ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2f663c135b3d1c174475124b3eb4ae048e133ea2566d29611b6d26921f09ab->enter($__internal_ba2f663c135b3d1c174475124b3eb4ae048e133ea2566d29611b6d26921f09ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a8b386800d548343381c416b61383f292f3f5b67dd3aca5bc7df063d0ec8a848->leave($__internal_a8b386800d548343381c416b61383f292f3f5b67dd3aca5bc7df063d0ec8a848_prof);

        
        $__internal_ba2f663c135b3d1c174475124b3eb4ae048e133ea2566d29611b6d26921f09ab->leave($__internal_ba2f663c135b3d1c174475124b3eb4ae048e133ea2566d29611b6d26921f09ab_prof);

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
