<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ef0aea2f0d4953b89cf1bc0ba26574d71f67f3705fe621e9b2b54f0a698fbaf0 extends Twig_Template
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
        $__internal_8fb658f4a6b0c631e3677db817c52d6299b5b8a01384d3aed86301813519f85a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb658f4a6b0c631e3677db817c52d6299b5b8a01384d3aed86301813519f85a->enter($__internal_8fb658f4a6b0c631e3677db817c52d6299b5b8a01384d3aed86301813519f85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_482598786eabdea3529399098e67d7d66ecbfe82304d0e2682dd9788681ffe95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482598786eabdea3529399098e67d7d66ecbfe82304d0e2682dd9788681ffe95->enter($__internal_482598786eabdea3529399098e67d7d66ecbfe82304d0e2682dd9788681ffe95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8fb658f4a6b0c631e3677db817c52d6299b5b8a01384d3aed86301813519f85a->leave($__internal_8fb658f4a6b0c631e3677db817c52d6299b5b8a01384d3aed86301813519f85a_prof);

        
        $__internal_482598786eabdea3529399098e67d7d66ecbfe82304d0e2682dd9788681ffe95->leave($__internal_482598786eabdea3529399098e67d7d66ecbfe82304d0e2682dd9788681ffe95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
