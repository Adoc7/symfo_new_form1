<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b074274ab70ac7ab9671f72dd40dcbef7110f20dce8598994492c4ffeda634a8 extends Twig_Template
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
        $__internal_eb360b3712ab7da25ae2d3c2fe710188f65c710d04a222aeee05f4ec45698524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb360b3712ab7da25ae2d3c2fe710188f65c710d04a222aeee05f4ec45698524->enter($__internal_eb360b3712ab7da25ae2d3c2fe710188f65c710d04a222aeee05f4ec45698524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_fc396a0856f00f575e356ca40fe518cdbaef59f7c142564d47b3ddb5a88e64a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc396a0856f00f575e356ca40fe518cdbaef59f7c142564d47b3ddb5a88e64a3->enter($__internal_fc396a0856f00f575e356ca40fe518cdbaef59f7c142564d47b3ddb5a88e64a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_eb360b3712ab7da25ae2d3c2fe710188f65c710d04a222aeee05f4ec45698524->leave($__internal_eb360b3712ab7da25ae2d3c2fe710188f65c710d04a222aeee05f4ec45698524_prof);

        
        $__internal_fc396a0856f00f575e356ca40fe518cdbaef59f7c142564d47b3ddb5a88e64a3->leave($__internal_fc396a0856f00f575e356ca40fe518cdbaef59f7c142564d47b3ddb5a88e64a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
