<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_af8ed77833a19051ff6b4c4c0fd973c78221145cbe01250ec2993fe52f1c0f67 extends Twig_Template
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
        $__internal_ecfeb09c3b2bcb6ef30d71e91ab7f13b1b860c046936e523eff3f98f31a98be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecfeb09c3b2bcb6ef30d71e91ab7f13b1b860c046936e523eff3f98f31a98be6->enter($__internal_ecfeb09c3b2bcb6ef30d71e91ab7f13b1b860c046936e523eff3f98f31a98be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_7ddf0f1251aeabe033c474b7538fec522ee4971d78796e539029391b4422e542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ddf0f1251aeabe033c474b7538fec522ee4971d78796e539029391b4422e542->enter($__internal_7ddf0f1251aeabe033c474b7538fec522ee4971d78796e539029391b4422e542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ecfeb09c3b2bcb6ef30d71e91ab7f13b1b860c046936e523eff3f98f31a98be6->leave($__internal_ecfeb09c3b2bcb6ef30d71e91ab7f13b1b860c046936e523eff3f98f31a98be6_prof);

        
        $__internal_7ddf0f1251aeabe033c474b7538fec522ee4971d78796e539029391b4422e542->leave($__internal_7ddf0f1251aeabe033c474b7538fec522ee4971d78796e539029391b4422e542_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
