<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2e367293c229fb3fff02e1754cb476dc863a563241ccd69bec290c4cdee3f6a4 extends Twig_Template
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
        $__internal_f3e5e3efd51379dce82f552b51db6ea440fc783b28785a2bebb721d386698b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e5e3efd51379dce82f552b51db6ea440fc783b28785a2bebb721d386698b2c->enter($__internal_f3e5e3efd51379dce82f552b51db6ea440fc783b28785a2bebb721d386698b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a1b10830049a4bd689abed16b834bc6b9743d4084865f875cd2cd5f2266c0f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b10830049a4bd689abed16b834bc6b9743d4084865f875cd2cd5f2266c0f17->enter($__internal_a1b10830049a4bd689abed16b834bc6b9743d4084865f875cd2cd5f2266c0f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f3e5e3efd51379dce82f552b51db6ea440fc783b28785a2bebb721d386698b2c->leave($__internal_f3e5e3efd51379dce82f552b51db6ea440fc783b28785a2bebb721d386698b2c_prof);

        
        $__internal_a1b10830049a4bd689abed16b834bc6b9743d4084865f875cd2cd5f2266c0f17->leave($__internal_a1b10830049a4bd689abed16b834bc6b9743d4084865f875cd2cd5f2266c0f17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
