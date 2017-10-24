<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_1636e3ff0ffd18e9a7e04ced064743294014d3d2cfef37b6134cafda95301105 extends Twig_Template
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
        $__internal_0e5fdb253f60560cdbc54d28532bb21f273c74b615ea2fc690195141f6b09910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5fdb253f60560cdbc54d28532bb21f273c74b615ea2fc690195141f6b09910->enter($__internal_0e5fdb253f60560cdbc54d28532bb21f273c74b615ea2fc690195141f6b09910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_cf49733d674c2a46a0e7be4197dcca4c6023e6fee34584cbf43134662fb6e3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf49733d674c2a46a0e7be4197dcca4c6023e6fee34584cbf43134662fb6e3e6->enter($__internal_cf49733d674c2a46a0e7be4197dcca4c6023e6fee34584cbf43134662fb6e3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0e5fdb253f60560cdbc54d28532bb21f273c74b615ea2fc690195141f6b09910->leave($__internal_0e5fdb253f60560cdbc54d28532bb21f273c74b615ea2fc690195141f6b09910_prof);

        
        $__internal_cf49733d674c2a46a0e7be4197dcca4c6023e6fee34584cbf43134662fb6e3e6->leave($__internal_cf49733d674c2a46a0e7be4197dcca4c6023e6fee34584cbf43134662fb6e3e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
