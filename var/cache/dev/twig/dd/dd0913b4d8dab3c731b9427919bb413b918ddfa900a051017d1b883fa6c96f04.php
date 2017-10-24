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
        $__internal_9864726f5a42d649e2731b343557e2dbc39e81e71bd8f88260013f485cc8eb1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9864726f5a42d649e2731b343557e2dbc39e81e71bd8f88260013f485cc8eb1e->enter($__internal_9864726f5a42d649e2731b343557e2dbc39e81e71bd8f88260013f485cc8eb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b0847964f27abc428e2143417c62d88ed58f18dd96b0c416760196371a218469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0847964f27abc428e2143417c62d88ed58f18dd96b0c416760196371a218469->enter($__internal_b0847964f27abc428e2143417c62d88ed58f18dd96b0c416760196371a218469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9864726f5a42d649e2731b343557e2dbc39e81e71bd8f88260013f485cc8eb1e->leave($__internal_9864726f5a42d649e2731b343557e2dbc39e81e71bd8f88260013f485cc8eb1e_prof);

        
        $__internal_b0847964f27abc428e2143417c62d88ed58f18dd96b0c416760196371a218469->leave($__internal_b0847964f27abc428e2143417c62d88ed58f18dd96b0c416760196371a218469_prof);

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
