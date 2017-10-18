<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0d75fca4ba51de0fffc5ccd0db7d74128c7a643226111f64ba6edf1e2cd0cd62 extends Twig_Template
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
        $__internal_33ad42e7d97cdccc676424f1593e28e2f261e58c4b84a1254cfd4ac9e2a88751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ad42e7d97cdccc676424f1593e28e2f261e58c4b84a1254cfd4ac9e2a88751->enter($__internal_33ad42e7d97cdccc676424f1593e28e2f261e58c4b84a1254cfd4ac9e2a88751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_198aaf6dd2d6285057a7527a083babc75323e9298cb62e31f33ed1d933d369b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198aaf6dd2d6285057a7527a083babc75323e9298cb62e31f33ed1d933d369b6->enter($__internal_198aaf6dd2d6285057a7527a083babc75323e9298cb62e31f33ed1d933d369b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_33ad42e7d97cdccc676424f1593e28e2f261e58c4b84a1254cfd4ac9e2a88751->leave($__internal_33ad42e7d97cdccc676424f1593e28e2f261e58c4b84a1254cfd4ac9e2a88751_prof);

        
        $__internal_198aaf6dd2d6285057a7527a083babc75323e9298cb62e31f33ed1d933d369b6->leave($__internal_198aaf6dd2d6285057a7527a083babc75323e9298cb62e31f33ed1d933d369b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
