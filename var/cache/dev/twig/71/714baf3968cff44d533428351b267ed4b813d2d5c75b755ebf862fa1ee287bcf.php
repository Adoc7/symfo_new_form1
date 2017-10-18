<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b011d0160a0d05d3990766830767de981eec6327f3b939095552bafd6ecb9200 extends Twig_Template
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
        $__internal_16b632bb2bdeb85bae940e373f2a4ee726683233f8fcecb6d7c93ae804e2cfcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b632bb2bdeb85bae940e373f2a4ee726683233f8fcecb6d7c93ae804e2cfcf->enter($__internal_16b632bb2bdeb85bae940e373f2a4ee726683233f8fcecb6d7c93ae804e2cfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d9f7518ee90a2d868343dcd0ddc3bd3c3f9e1275b989a87d3e5237963dc9e6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f7518ee90a2d868343dcd0ddc3bd3c3f9e1275b989a87d3e5237963dc9e6d5->enter($__internal_d9f7518ee90a2d868343dcd0ddc3bd3c3f9e1275b989a87d3e5237963dc9e6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_16b632bb2bdeb85bae940e373f2a4ee726683233f8fcecb6d7c93ae804e2cfcf->leave($__internal_16b632bb2bdeb85bae940e373f2a4ee726683233f8fcecb6d7c93ae804e2cfcf_prof);

        
        $__internal_d9f7518ee90a2d868343dcd0ddc3bd3c3f9e1275b989a87d3e5237963dc9e6d5->leave($__internal_d9f7518ee90a2d868343dcd0ddc3bd3c3f9e1275b989a87d3e5237963dc9e6d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
