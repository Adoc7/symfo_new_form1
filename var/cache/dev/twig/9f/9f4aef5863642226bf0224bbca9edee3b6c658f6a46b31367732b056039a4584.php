<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_38b9065e2d5cbb734a2019ee5913c92164e53f70103037dc5c77768848f31c95 extends Twig_Template
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
        $__internal_0f4e21b2f017136d3c3f90521c2414f024ffdc84fd4bf9268a225c39d068720c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f4e21b2f017136d3c3f90521c2414f024ffdc84fd4bf9268a225c39d068720c->enter($__internal_0f4e21b2f017136d3c3f90521c2414f024ffdc84fd4bf9268a225c39d068720c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_880da69155e0e06c5a9ce58667e4b1e5d571cb56cc4225f8ae8e0e5116314568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880da69155e0e06c5a9ce58667e4b1e5d571cb56cc4225f8ae8e0e5116314568->enter($__internal_880da69155e0e06c5a9ce58667e4b1e5d571cb56cc4225f8ae8e0e5116314568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_0f4e21b2f017136d3c3f90521c2414f024ffdc84fd4bf9268a225c39d068720c->leave($__internal_0f4e21b2f017136d3c3f90521c2414f024ffdc84fd4bf9268a225c39d068720c_prof);

        
        $__internal_880da69155e0e06c5a9ce58667e4b1e5d571cb56cc4225f8ae8e0e5116314568->leave($__internal_880da69155e0e06c5a9ce58667e4b1e5d571cb56cc4225f8ae8e0e5116314568_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
