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
        $__internal_c1c910f969ff9a51cb00119b0dacb1753be006391c1e819891e91ff5673ed377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c910f969ff9a51cb00119b0dacb1753be006391c1e819891e91ff5673ed377->enter($__internal_c1c910f969ff9a51cb00119b0dacb1753be006391c1e819891e91ff5673ed377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_2ece1ec1a2884b70e0ceb41b413458d593c736ab050a5c70f4e994f259b7d3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ece1ec1a2884b70e0ceb41b413458d593c736ab050a5c70f4e994f259b7d3b6->enter($__internal_2ece1ec1a2884b70e0ceb41b413458d593c736ab050a5c70f4e994f259b7d3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c1c910f969ff9a51cb00119b0dacb1753be006391c1e819891e91ff5673ed377->leave($__internal_c1c910f969ff9a51cb00119b0dacb1753be006391c1e819891e91ff5673ed377_prof);

        
        $__internal_2ece1ec1a2884b70e0ceb41b413458d593c736ab050a5c70f4e994f259b7d3b6->leave($__internal_2ece1ec1a2884b70e0ceb41b413458d593c736ab050a5c70f4e994f259b7d3b6_prof);

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
