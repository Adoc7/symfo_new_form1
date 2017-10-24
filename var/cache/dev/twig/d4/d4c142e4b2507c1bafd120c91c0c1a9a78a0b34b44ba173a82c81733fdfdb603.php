<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_bdf865191fe9dfd24bca17f695cfed892b8ea4fb747b6d6031260603f2185081 extends Twig_Template
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
        $__internal_4ec08b404e36a1fbcb05b8707e0a757efb1faec1e9ede42cb736a7fa653dbbd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec08b404e36a1fbcb05b8707e0a757efb1faec1e9ede42cb736a7fa653dbbd2->enter($__internal_4ec08b404e36a1fbcb05b8707e0a757efb1faec1e9ede42cb736a7fa653dbbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a56c282b7288551b92bb4564b6fa58c03f3ec2e899126760672dd36be59297d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56c282b7288551b92bb4564b6fa58c03f3ec2e899126760672dd36be59297d0->enter($__internal_a56c282b7288551b92bb4564b6fa58c03f3ec2e899126760672dd36be59297d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_4ec08b404e36a1fbcb05b8707e0a757efb1faec1e9ede42cb736a7fa653dbbd2->leave($__internal_4ec08b404e36a1fbcb05b8707e0a757efb1faec1e9ede42cb736a7fa653dbbd2_prof);

        
        $__internal_a56c282b7288551b92bb4564b6fa58c03f3ec2e899126760672dd36be59297d0->leave($__internal_a56c282b7288551b92bb4564b6fa58c03f3ec2e899126760672dd36be59297d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
