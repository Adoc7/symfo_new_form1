<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_339ed2c0f6f2aa6e7913205009055621f22369ebaf3399b593ac74b592e60e10 extends Twig_Template
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
        $__internal_eb28bd61cb9e4e8781d8ba09f30a16c5f2a41d54be0a28f950b38e716d4941fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb28bd61cb9e4e8781d8ba09f30a16c5f2a41d54be0a28f950b38e716d4941fc->enter($__internal_eb28bd61cb9e4e8781d8ba09f30a16c5f2a41d54be0a28f950b38e716d4941fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_75459ddd1034f3dedaf65b668e70ed9fa7f9dad2c0bb14c2e33040a692ed57a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75459ddd1034f3dedaf65b668e70ed9fa7f9dad2c0bb14c2e33040a692ed57a3->enter($__internal_75459ddd1034f3dedaf65b668e70ed9fa7f9dad2c0bb14c2e33040a692ed57a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_eb28bd61cb9e4e8781d8ba09f30a16c5f2a41d54be0a28f950b38e716d4941fc->leave($__internal_eb28bd61cb9e4e8781d8ba09f30a16c5f2a41d54be0a28f950b38e716d4941fc_prof);

        
        $__internal_75459ddd1034f3dedaf65b668e70ed9fa7f9dad2c0bb14c2e33040a692ed57a3->leave($__internal_75459ddd1034f3dedaf65b668e70ed9fa7f9dad2c0bb14c2e33040a692ed57a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
