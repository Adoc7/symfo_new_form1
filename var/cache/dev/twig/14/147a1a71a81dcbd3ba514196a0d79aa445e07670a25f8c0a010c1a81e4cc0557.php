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
        $__internal_9ca8c58b657d58ee83acbda0931afc3e906769194212cf587ea32aec570537cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca8c58b657d58ee83acbda0931afc3e906769194212cf587ea32aec570537cc->enter($__internal_9ca8c58b657d58ee83acbda0931afc3e906769194212cf587ea32aec570537cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0708cbe4294edaef92943491a81038cc251114137f149fa6a7bf0d79419bfdcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0708cbe4294edaef92943491a81038cc251114137f149fa6a7bf0d79419bfdcb->enter($__internal_0708cbe4294edaef92943491a81038cc251114137f149fa6a7bf0d79419bfdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9ca8c58b657d58ee83acbda0931afc3e906769194212cf587ea32aec570537cc->leave($__internal_9ca8c58b657d58ee83acbda0931afc3e906769194212cf587ea32aec570537cc_prof);

        
        $__internal_0708cbe4294edaef92943491a81038cc251114137f149fa6a7bf0d79419bfdcb->leave($__internal_0708cbe4294edaef92943491a81038cc251114137f149fa6a7bf0d79419bfdcb_prof);

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
