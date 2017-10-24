<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_8119691d5cf299f6686bce1206b164b331038787c9d57c57710f4cf4a008cc83 extends Twig_Template
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
        $__internal_76283813935c74677f40e614c26cfc7bc4860c80c36973268dda8dd69ab185ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76283813935c74677f40e614c26cfc7bc4860c80c36973268dda8dd69ab185ee->enter($__internal_76283813935c74677f40e614c26cfc7bc4860c80c36973268dda8dd69ab185ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_7605954fbc256d42ae916c7878e286944a77ff567c39b8d12b25fe09f2a31a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7605954fbc256d42ae916c7878e286944a77ff567c39b8d12b25fe09f2a31a84->enter($__internal_7605954fbc256d42ae916c7878e286944a77ff567c39b8d12b25fe09f2a31a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_76283813935c74677f40e614c26cfc7bc4860c80c36973268dda8dd69ab185ee->leave($__internal_76283813935c74677f40e614c26cfc7bc4860c80c36973268dda8dd69ab185ee_prof);

        
        $__internal_7605954fbc256d42ae916c7878e286944a77ff567c39b8d12b25fe09f2a31a84->leave($__internal_7605954fbc256d42ae916c7878e286944a77ff567c39b8d12b25fe09f2a31a84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
