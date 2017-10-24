<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_4b1662a1626b8bc96f8d461f0b92f640ff96be6ab3f2fc3bfbc135799a529512 extends Twig_Template
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
        $__internal_e5d197f413a19816f38b8fec63955e9d2e73f5a68fd5fc89cb54c2c6bb847995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d197f413a19816f38b8fec63955e9d2e73f5a68fd5fc89cb54c2c6bb847995->enter($__internal_e5d197f413a19816f38b8fec63955e9d2e73f5a68fd5fc89cb54c2c6bb847995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5fdb07b7acd7fb2d1b21a9c16a617cd3027be0698cc5f56a5592008c1976614e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdb07b7acd7fb2d1b21a9c16a617cd3027be0698cc5f56a5592008c1976614e->enter($__internal_5fdb07b7acd7fb2d1b21a9c16a617cd3027be0698cc5f56a5592008c1976614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e5d197f413a19816f38b8fec63955e9d2e73f5a68fd5fc89cb54c2c6bb847995->leave($__internal_e5d197f413a19816f38b8fec63955e9d2e73f5a68fd5fc89cb54c2c6bb847995_prof);

        
        $__internal_5fdb07b7acd7fb2d1b21a9c16a617cd3027be0698cc5f56a5592008c1976614e->leave($__internal_5fdb07b7acd7fb2d1b21a9c16a617cd3027be0698cc5f56a5592008c1976614e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
