<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a0624f554b5f52fc75e85e633a0a3b0eba1a6e402906faf24e6f0bd8fa2d60be extends Twig_Template
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
        $__internal_be84d1eb477822879b4b986f104349473fae90176210f4b882ac0a694a4ac6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be84d1eb477822879b4b986f104349473fae90176210f4b882ac0a694a4ac6f5->enter($__internal_be84d1eb477822879b4b986f104349473fae90176210f4b882ac0a694a4ac6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5a3186de99eb04308373278ad28a5309945ea85d4393ca739121740dd7030c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3186de99eb04308373278ad28a5309945ea85d4393ca739121740dd7030c67->enter($__internal_5a3186de99eb04308373278ad28a5309945ea85d4393ca739121740dd7030c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_be84d1eb477822879b4b986f104349473fae90176210f4b882ac0a694a4ac6f5->leave($__internal_be84d1eb477822879b4b986f104349473fae90176210f4b882ac0a694a4ac6f5_prof);

        
        $__internal_5a3186de99eb04308373278ad28a5309945ea85d4393ca739121740dd7030c67->leave($__internal_5a3186de99eb04308373278ad28a5309945ea85d4393ca739121740dd7030c67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
