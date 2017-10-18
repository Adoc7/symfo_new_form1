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
        $__internal_14f083f1e527b21a0bcfc6a92bee09bd24e4cdbb7f242a07bdf152ed0be75db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f083f1e527b21a0bcfc6a92bee09bd24e4cdbb7f242a07bdf152ed0be75db5->enter($__internal_14f083f1e527b21a0bcfc6a92bee09bd24e4cdbb7f242a07bdf152ed0be75db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_286389c16a5b7291febd755cc438e880ea9be93e4458a25fb8a8c5250eb31d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286389c16a5b7291febd755cc438e880ea9be93e4458a25fb8a8c5250eb31d06->enter($__internal_286389c16a5b7291febd755cc438e880ea9be93e4458a25fb8a8c5250eb31d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_14f083f1e527b21a0bcfc6a92bee09bd24e4cdbb7f242a07bdf152ed0be75db5->leave($__internal_14f083f1e527b21a0bcfc6a92bee09bd24e4cdbb7f242a07bdf152ed0be75db5_prof);

        
        $__internal_286389c16a5b7291febd755cc438e880ea9be93e4458a25fb8a8c5250eb31d06->leave($__internal_286389c16a5b7291febd755cc438e880ea9be93e4458a25fb8a8c5250eb31d06_prof);

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
