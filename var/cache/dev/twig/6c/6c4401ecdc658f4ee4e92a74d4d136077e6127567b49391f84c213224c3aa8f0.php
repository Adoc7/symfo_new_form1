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
        $__internal_865ed1ca120f7cace0e9eafd2785f0525ebd2be3f94ab9743ce85db6c24b1ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865ed1ca120f7cace0e9eafd2785f0525ebd2be3f94ab9743ce85db6c24b1ed6->enter($__internal_865ed1ca120f7cace0e9eafd2785f0525ebd2be3f94ab9743ce85db6c24b1ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_2a08053e5413dabab9620bd6cce89fa2a54a404f4d1acea5fb2b8baaaac3e31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a08053e5413dabab9620bd6cce89fa2a54a404f4d1acea5fb2b8baaaac3e31b->enter($__internal_2a08053e5413dabab9620bd6cce89fa2a54a404f4d1acea5fb2b8baaaac3e31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_865ed1ca120f7cace0e9eafd2785f0525ebd2be3f94ab9743ce85db6c24b1ed6->leave($__internal_865ed1ca120f7cace0e9eafd2785f0525ebd2be3f94ab9743ce85db6c24b1ed6_prof);

        
        $__internal_2a08053e5413dabab9620bd6cce89fa2a54a404f4d1acea5fb2b8baaaac3e31b->leave($__internal_2a08053e5413dabab9620bd6cce89fa2a54a404f4d1acea5fb2b8baaaac3e31b_prof);

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
