<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ef0aea2f0d4953b89cf1bc0ba26574d71f67f3705fe621e9b2b54f0a698fbaf0 extends Twig_Template
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
        $__internal_3385f1ca62955e420596c00a63fdf72343ee6c5be63c550307c18b63e0df7ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3385f1ca62955e420596c00a63fdf72343ee6c5be63c550307c18b63e0df7ade->enter($__internal_3385f1ca62955e420596c00a63fdf72343ee6c5be63c550307c18b63e0df7ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_501d10bbc97a9cfa8d80c48c7b1eeec2743ff378a056c07453c7b5134d4eaa4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501d10bbc97a9cfa8d80c48c7b1eeec2743ff378a056c07453c7b5134d4eaa4e->enter($__internal_501d10bbc97a9cfa8d80c48c7b1eeec2743ff378a056c07453c7b5134d4eaa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3385f1ca62955e420596c00a63fdf72343ee6c5be63c550307c18b63e0df7ade->leave($__internal_3385f1ca62955e420596c00a63fdf72343ee6c5be63c550307c18b63e0df7ade_prof);

        
        $__internal_501d10bbc97a9cfa8d80c48c7b1eeec2743ff378a056c07453c7b5134d4eaa4e->leave($__internal_501d10bbc97a9cfa8d80c48c7b1eeec2743ff378a056c07453c7b5134d4eaa4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
