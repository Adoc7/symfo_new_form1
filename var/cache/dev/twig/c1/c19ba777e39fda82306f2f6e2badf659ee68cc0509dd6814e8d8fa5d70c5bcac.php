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
        $__internal_3e7a32e2d3dd0db22e4eca7be871b7d87ed23a0dcba845b93c9ef26ace997303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e7a32e2d3dd0db22e4eca7be871b7d87ed23a0dcba845b93c9ef26ace997303->enter($__internal_3e7a32e2d3dd0db22e4eca7be871b7d87ed23a0dcba845b93c9ef26ace997303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_f671e6b9c71cb43a50be1b31b3ef96b568eed43eed123bba216a82f8e372f811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f671e6b9c71cb43a50be1b31b3ef96b568eed43eed123bba216a82f8e372f811->enter($__internal_f671e6b9c71cb43a50be1b31b3ef96b568eed43eed123bba216a82f8e372f811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_3e7a32e2d3dd0db22e4eca7be871b7d87ed23a0dcba845b93c9ef26ace997303->leave($__internal_3e7a32e2d3dd0db22e4eca7be871b7d87ed23a0dcba845b93c9ef26ace997303_prof);

        
        $__internal_f671e6b9c71cb43a50be1b31b3ef96b568eed43eed123bba216a82f8e372f811->leave($__internal_f671e6b9c71cb43a50be1b31b3ef96b568eed43eed123bba216a82f8e372f811_prof);

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
