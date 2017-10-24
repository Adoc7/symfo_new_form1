<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_aa754fc42d1164b7128af9c6a3cc1acd6c509e7e094baf7bbc64f0f1331a9733 extends Twig_Template
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
        $__internal_51b27ff88ed5f6b03b42460c067592714a6b574d590873ec7e246da0d99a7455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b27ff88ed5f6b03b42460c067592714a6b574d590873ec7e246da0d99a7455->enter($__internal_51b27ff88ed5f6b03b42460c067592714a6b574d590873ec7e246da0d99a7455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_387ef93711e56d67dd093fb58725d8b5fe0d1b66a801db2d0c4a5f2ac0a197ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387ef93711e56d67dd093fb58725d8b5fe0d1b66a801db2d0c4a5f2ac0a197ae->enter($__internal_387ef93711e56d67dd093fb58725d8b5fe0d1b66a801db2d0c4a5f2ac0a197ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_51b27ff88ed5f6b03b42460c067592714a6b574d590873ec7e246da0d99a7455->leave($__internal_51b27ff88ed5f6b03b42460c067592714a6b574d590873ec7e246da0d99a7455_prof);

        
        $__internal_387ef93711e56d67dd093fb58725d8b5fe0d1b66a801db2d0c4a5f2ac0a197ae->leave($__internal_387ef93711e56d67dd093fb58725d8b5fe0d1b66a801db2d0c4a5f2ac0a197ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
