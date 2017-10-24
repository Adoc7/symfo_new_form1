<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d438984969725f06c2f335f17752ed7937d4f3ab3f22c0a3d0f8c34d236f7c64 extends Twig_Template
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
        $__internal_8bd94c5820ab36b0da29c47478eb2ab2b89cb4e5445c27a5f422b845f424270f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd94c5820ab36b0da29c47478eb2ab2b89cb4e5445c27a5f422b845f424270f->enter($__internal_8bd94c5820ab36b0da29c47478eb2ab2b89cb4e5445c27a5f422b845f424270f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8705c7b621d8e05f668cda6c1c34b70e7e0e8f752f6c7f1faa3ca30840fce626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8705c7b621d8e05f668cda6c1c34b70e7e0e8f752f6c7f1faa3ca30840fce626->enter($__internal_8705c7b621d8e05f668cda6c1c34b70e7e0e8f752f6c7f1faa3ca30840fce626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8bd94c5820ab36b0da29c47478eb2ab2b89cb4e5445c27a5f422b845f424270f->leave($__internal_8bd94c5820ab36b0da29c47478eb2ab2b89cb4e5445c27a5f422b845f424270f_prof);

        
        $__internal_8705c7b621d8e05f668cda6c1c34b70e7e0e8f752f6c7f1faa3ca30840fce626->leave($__internal_8705c7b621d8e05f668cda6c1c34b70e7e0e8f752f6c7f1faa3ca30840fce626_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
