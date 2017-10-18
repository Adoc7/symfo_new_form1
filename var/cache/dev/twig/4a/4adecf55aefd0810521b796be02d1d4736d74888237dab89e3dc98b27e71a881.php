<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_5f2e8b53ffbdbaef9319676707f5eca8c9624d4fdd65b99cddeeecabe109ddb2 extends Twig_Template
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
        $__internal_b5564bbb8756905ca3fe426ad17b8f65b01def341bd34b7c4e0ee364a6782e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5564bbb8756905ca3fe426ad17b8f65b01def341bd34b7c4e0ee364a6782e67->enter($__internal_b5564bbb8756905ca3fe426ad17b8f65b01def341bd34b7c4e0ee364a6782e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_029d8c02a18f79399cdc3afc3cfd1c45901f4fd7aa6a80bb7dd497de3238ac0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_029d8c02a18f79399cdc3afc3cfd1c45901f4fd7aa6a80bb7dd497de3238ac0d->enter($__internal_029d8c02a18f79399cdc3afc3cfd1c45901f4fd7aa6a80bb7dd497de3238ac0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_b5564bbb8756905ca3fe426ad17b8f65b01def341bd34b7c4e0ee364a6782e67->leave($__internal_b5564bbb8756905ca3fe426ad17b8f65b01def341bd34b7c4e0ee364a6782e67_prof);

        
        $__internal_029d8c02a18f79399cdc3afc3cfd1c45901f4fd7aa6a80bb7dd497de3238ac0d->leave($__internal_029d8c02a18f79399cdc3afc3cfd1c45901f4fd7aa6a80bb7dd497de3238ac0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
