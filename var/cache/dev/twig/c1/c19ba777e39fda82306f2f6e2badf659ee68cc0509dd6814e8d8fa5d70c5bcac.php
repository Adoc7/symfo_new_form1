<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_1ba5cb02f9ed6f4b1c9bbce187df4e5b5fed129b5e39ce158ca76c1856711a1e extends Twig_Template
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
        $__internal_11014717c18d3073e94692e94d376cb154738b7d3c71b50ae783072c432d0003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11014717c18d3073e94692e94d376cb154738b7d3c71b50ae783072c432d0003->enter($__internal_11014717c18d3073e94692e94d376cb154738b7d3c71b50ae783072c432d0003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e2fe657a3f36b52893924734c1b7e57f67b609844887039765b6622b48874585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2fe657a3f36b52893924734c1b7e57f67b609844887039765b6622b48874585->enter($__internal_e2fe657a3f36b52893924734c1b7e57f67b609844887039765b6622b48874585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_11014717c18d3073e94692e94d376cb154738b7d3c71b50ae783072c432d0003->leave($__internal_11014717c18d3073e94692e94d376cb154738b7d3c71b50ae783072c432d0003_prof);

        
        $__internal_e2fe657a3f36b52893924734c1b7e57f67b609844887039765b6622b48874585->leave($__internal_e2fe657a3f36b52893924734c1b7e57f67b609844887039765b6622b48874585_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
