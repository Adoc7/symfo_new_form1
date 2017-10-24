<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_1371ccef3f909c2932a07980cf26cb659ddec67b414f128363423c8a0dc44a61 extends Twig_Template
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
        $__internal_c21f4cedcdf5e2694d7dc9db25d501f831a0bbb80ef9456b5adba3e26582d706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21f4cedcdf5e2694d7dc9db25d501f831a0bbb80ef9456b5adba3e26582d706->enter($__internal_c21f4cedcdf5e2694d7dc9db25d501f831a0bbb80ef9456b5adba3e26582d706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b7336892a274e6b1f4cb5f63c814d0a2f0000b5ff6d02863033b9947a9bc0844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7336892a274e6b1f4cb5f63c814d0a2f0000b5ff6d02863033b9947a9bc0844->enter($__internal_b7336892a274e6b1f4cb5f63c814d0a2f0000b5ff6d02863033b9947a9bc0844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c21f4cedcdf5e2694d7dc9db25d501f831a0bbb80ef9456b5adba3e26582d706->leave($__internal_c21f4cedcdf5e2694d7dc9db25d501f831a0bbb80ef9456b5adba3e26582d706_prof);

        
        $__internal_b7336892a274e6b1f4cb5f63c814d0a2f0000b5ff6d02863033b9947a9bc0844->leave($__internal_b7336892a274e6b1f4cb5f63c814d0a2f0000b5ff6d02863033b9947a9bc0844_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
