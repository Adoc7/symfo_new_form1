<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5a1eb63fbc3379fa4eb989664ac63a3fa0571687230cb31be75ef7f17c00fdca extends Twig_Template
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
        $__internal_36d26b66dd859afdb933d1c53f4166f4b74abeb9e83430de4e07d0ab517bbcdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d26b66dd859afdb933d1c53f4166f4b74abeb9e83430de4e07d0ab517bbcdc->enter($__internal_36d26b66dd859afdb933d1c53f4166f4b74abeb9e83430de4e07d0ab517bbcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c3d3adf7aab09b7c83ec26a9e2a26d2a32a2b4d44d0582be2e29f849790168d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d3adf7aab09b7c83ec26a9e2a26d2a32a2b4d44d0582be2e29f849790168d9->enter($__internal_c3d3adf7aab09b7c83ec26a9e2a26d2a32a2b4d44d0582be2e29f849790168d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_36d26b66dd859afdb933d1c53f4166f4b74abeb9e83430de4e07d0ab517bbcdc->leave($__internal_36d26b66dd859afdb933d1c53f4166f4b74abeb9e83430de4e07d0ab517bbcdc_prof);

        
        $__internal_c3d3adf7aab09b7c83ec26a9e2a26d2a32a2b4d44d0582be2e29f849790168d9->leave($__internal_c3d3adf7aab09b7c83ec26a9e2a26d2a32a2b4d44d0582be2e29f849790168d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
