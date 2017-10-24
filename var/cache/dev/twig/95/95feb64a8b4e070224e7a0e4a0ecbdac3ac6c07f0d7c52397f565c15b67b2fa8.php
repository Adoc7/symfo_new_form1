<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_6ddf510b2e269da49d9b3b320de638d1b6c7ffd2dd3920f0c72651129b802db3 extends Twig_Template
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
        $__internal_acdc749f55c960abcd829d3d9618907d8f418a2fb554e284ee61de7b6c4fda39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdc749f55c960abcd829d3d9618907d8f418a2fb554e284ee61de7b6c4fda39->enter($__internal_acdc749f55c960abcd829d3d9618907d8f418a2fb554e284ee61de7b6c4fda39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e833513298fd180e1a6268c276f10d8c2ed7c19abb089ae8edd8a0ed042f5b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e833513298fd180e1a6268c276f10d8c2ed7c19abb089ae8edd8a0ed042f5b37->enter($__internal_e833513298fd180e1a6268c276f10d8c2ed7c19abb089ae8edd8a0ed042f5b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_acdc749f55c960abcd829d3d9618907d8f418a2fb554e284ee61de7b6c4fda39->leave($__internal_acdc749f55c960abcd829d3d9618907d8f418a2fb554e284ee61de7b6c4fda39_prof);

        
        $__internal_e833513298fd180e1a6268c276f10d8c2ed7c19abb089ae8edd8a0ed042f5b37->leave($__internal_e833513298fd180e1a6268c276f10d8c2ed7c19abb089ae8edd8a0ed042f5b37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
