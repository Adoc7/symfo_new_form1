<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_78d20b367ead9c522a727af3c8e7b31c58b8406b799037cfd4cc383e4da8c128 extends Twig_Template
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
        $__internal_22ae5ed7ff37e5b612321e4c54f72d03e046faf371fee03e6f720ad61164be67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ae5ed7ff37e5b612321e4c54f72d03e046faf371fee03e6f720ad61164be67->enter($__internal_22ae5ed7ff37e5b612321e4c54f72d03e046faf371fee03e6f720ad61164be67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_42ad928b4a9e42005391687a283d23ba488f28a61ecc82ea5b5210e19c6fb131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ad928b4a9e42005391687a283d23ba488f28a61ecc82ea5b5210e19c6fb131->enter($__internal_42ad928b4a9e42005391687a283d23ba488f28a61ecc82ea5b5210e19c6fb131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_22ae5ed7ff37e5b612321e4c54f72d03e046faf371fee03e6f720ad61164be67->leave($__internal_22ae5ed7ff37e5b612321e4c54f72d03e046faf371fee03e6f720ad61164be67_prof);

        
        $__internal_42ad928b4a9e42005391687a283d23ba488f28a61ecc82ea5b5210e19c6fb131->leave($__internal_42ad928b4a9e42005391687a283d23ba488f28a61ecc82ea5b5210e19c6fb131_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
