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
        $__internal_24f730d2e7cce807aa66a0a081faa8e26c28e3a8b2461f7355c3c13af2cef9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f730d2e7cce807aa66a0a081faa8e26c28e3a8b2461f7355c3c13af2cef9b8->enter($__internal_24f730d2e7cce807aa66a0a081faa8e26c28e3a8b2461f7355c3c13af2cef9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8e6a3fedf8eb7e9d36a893d49654624162a1a92aaea5dfe6391ed93eb0e03af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6a3fedf8eb7e9d36a893d49654624162a1a92aaea5dfe6391ed93eb0e03af8->enter($__internal_8e6a3fedf8eb7e9d36a893d49654624162a1a92aaea5dfe6391ed93eb0e03af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_24f730d2e7cce807aa66a0a081faa8e26c28e3a8b2461f7355c3c13af2cef9b8->leave($__internal_24f730d2e7cce807aa66a0a081faa8e26c28e3a8b2461f7355c3c13af2cef9b8_prof);

        
        $__internal_8e6a3fedf8eb7e9d36a893d49654624162a1a92aaea5dfe6391ed93eb0e03af8->leave($__internal_8e6a3fedf8eb7e9d36a893d49654624162a1a92aaea5dfe6391ed93eb0e03af8_prof);

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
