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
        $__internal_91fe3a85343dd4bb5ca15a983f450e2c43fc8c3e849cf837a75535dffb185936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91fe3a85343dd4bb5ca15a983f450e2c43fc8c3e849cf837a75535dffb185936->enter($__internal_91fe3a85343dd4bb5ca15a983f450e2c43fc8c3e849cf837a75535dffb185936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_3bcb1f9f81217392aa98f34154bd74c63cb5ef32c8dde9852f4625223f4a341e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bcb1f9f81217392aa98f34154bd74c63cb5ef32c8dde9852f4625223f4a341e->enter($__internal_3bcb1f9f81217392aa98f34154bd74c63cb5ef32c8dde9852f4625223f4a341e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_91fe3a85343dd4bb5ca15a983f450e2c43fc8c3e849cf837a75535dffb185936->leave($__internal_91fe3a85343dd4bb5ca15a983f450e2c43fc8c3e849cf837a75535dffb185936_prof);

        
        $__internal_3bcb1f9f81217392aa98f34154bd74c63cb5ef32c8dde9852f4625223f4a341e->leave($__internal_3bcb1f9f81217392aa98f34154bd74c63cb5ef32c8dde9852f4625223f4a341e_prof);

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
