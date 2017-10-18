<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b581432eed06348e001d55047a5d2a8c2ad6b9852f31b64f1a0f71c8e1b6d90e extends Twig_Template
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
        $__internal_b1a851f131c6df98106afc03f28412c009335ff02ff4e2339da0d54f527c09e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a851f131c6df98106afc03f28412c009335ff02ff4e2339da0d54f527c09e4->enter($__internal_b1a851f131c6df98106afc03f28412c009335ff02ff4e2339da0d54f527c09e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_1986ef79f633adb29ca35669665145fb5bf7edcfd32c3b39a768d009875f3979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1986ef79f633adb29ca35669665145fb5bf7edcfd32c3b39a768d009875f3979->enter($__internal_1986ef79f633adb29ca35669665145fb5bf7edcfd32c3b39a768d009875f3979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b1a851f131c6df98106afc03f28412c009335ff02ff4e2339da0d54f527c09e4->leave($__internal_b1a851f131c6df98106afc03f28412c009335ff02ff4e2339da0d54f527c09e4_prof);

        
        $__internal_1986ef79f633adb29ca35669665145fb5bf7edcfd32c3b39a768d009875f3979->leave($__internal_1986ef79f633adb29ca35669665145fb5bf7edcfd32c3b39a768d009875f3979_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
