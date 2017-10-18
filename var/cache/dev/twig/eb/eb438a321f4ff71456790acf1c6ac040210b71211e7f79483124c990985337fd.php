<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_008a45078cb492bf58a2c861e6ba99d37f1360c136eb57e1abc7e5701a5363b0 extends Twig_Template
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
        $__internal_7280252ce3a5ae271015dfcb61264672ab357de8195c1f272c658b10fc8ad9b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7280252ce3a5ae271015dfcb61264672ab357de8195c1f272c658b10fc8ad9b9->enter($__internal_7280252ce3a5ae271015dfcb61264672ab357de8195c1f272c658b10fc8ad9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_cc002ba8fe62c6ca7f689c92940d264a482f15d8d6255b04d7b7770d601081bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc002ba8fe62c6ca7f689c92940d264a482f15d8d6255b04d7b7770d601081bf->enter($__internal_cc002ba8fe62c6ca7f689c92940d264a482f15d8d6255b04d7b7770d601081bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7280252ce3a5ae271015dfcb61264672ab357de8195c1f272c658b10fc8ad9b9->leave($__internal_7280252ce3a5ae271015dfcb61264672ab357de8195c1f272c658b10fc8ad9b9_prof);

        
        $__internal_cc002ba8fe62c6ca7f689c92940d264a482f15d8d6255b04d7b7770d601081bf->leave($__internal_cc002ba8fe62c6ca7f689c92940d264a482f15d8d6255b04d7b7770d601081bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
