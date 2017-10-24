<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a4efb7e616ec5bd82a227b544cbfb12282e6d65d13b968208179963442bea801 extends Twig_Template
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
        $__internal_2fcc8e39ab0e4feb9d328d38f4015e08e839bc4799b349c6206b41a629995f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fcc8e39ab0e4feb9d328d38f4015e08e839bc4799b349c6206b41a629995f91->enter($__internal_2fcc8e39ab0e4feb9d328d38f4015e08e839bc4799b349c6206b41a629995f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_3b9874f5b9938c6bce443a5f69f20efc95ff54b5006692b7dea1f17beda8bbcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9874f5b9938c6bce443a5f69f20efc95ff54b5006692b7dea1f17beda8bbcd->enter($__internal_3b9874f5b9938c6bce443a5f69f20efc95ff54b5006692b7dea1f17beda8bbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2fcc8e39ab0e4feb9d328d38f4015e08e839bc4799b349c6206b41a629995f91->leave($__internal_2fcc8e39ab0e4feb9d328d38f4015e08e839bc4799b349c6206b41a629995f91_prof);

        
        $__internal_3b9874f5b9938c6bce443a5f69f20efc95ff54b5006692b7dea1f17beda8bbcd->leave($__internal_3b9874f5b9938c6bce443a5f69f20efc95ff54b5006692b7dea1f17beda8bbcd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
