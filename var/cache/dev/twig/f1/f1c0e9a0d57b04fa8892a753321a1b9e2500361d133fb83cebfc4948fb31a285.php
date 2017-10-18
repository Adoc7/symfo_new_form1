<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_51c8ce0850f7f0b6efff543903c8e8c1535381d81fcf62b0c6e8f37f68cdfac0 extends Twig_Template
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
        $__internal_4e955cabb648a7e72b4c80801ba732d12dc2e3798ce0b63ae526aa26c58c646b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e955cabb648a7e72b4c80801ba732d12dc2e3798ce0b63ae526aa26c58c646b->enter($__internal_4e955cabb648a7e72b4c80801ba732d12dc2e3798ce0b63ae526aa26c58c646b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_d96544c95912b7e71b6be5c22e061b3efd9ffc9453f640f4a4447e0df7a203cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96544c95912b7e71b6be5c22e061b3efd9ffc9453f640f4a4447e0df7a203cc->enter($__internal_d96544c95912b7e71b6be5c22e061b3efd9ffc9453f640f4a4447e0df7a203cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4e955cabb648a7e72b4c80801ba732d12dc2e3798ce0b63ae526aa26c58c646b->leave($__internal_4e955cabb648a7e72b4c80801ba732d12dc2e3798ce0b63ae526aa26c58c646b_prof);

        
        $__internal_d96544c95912b7e71b6be5c22e061b3efd9ffc9453f640f4a4447e0df7a203cc->leave($__internal_d96544c95912b7e71b6be5c22e061b3efd9ffc9453f640f4a4447e0df7a203cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
