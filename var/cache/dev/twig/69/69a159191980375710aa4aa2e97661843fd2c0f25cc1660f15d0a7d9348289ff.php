<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a4efb7e616ec5bd82a227b544cbfb12282e6d65d13b968208179963442bea801 extends Twig_Template
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
        $__internal_1ea6f8f47b05a0305ca9e0f2e90d1c9b5c238d58da1e6f5fd5146d0586ad5236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea6f8f47b05a0305ca9e0f2e90d1c9b5c238d58da1e6f5fd5146d0586ad5236->enter($__internal_1ea6f8f47b05a0305ca9e0f2e90d1c9b5c238d58da1e6f5fd5146d0586ad5236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6e8e3159f569377a95c1b775ad834398f608cfb3ea33edf2de8d7f97fa17d467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8e3159f569377a95c1b775ad834398f608cfb3ea33edf2de8d7f97fa17d467->enter($__internal_6e8e3159f569377a95c1b775ad834398f608cfb3ea33edf2de8d7f97fa17d467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1ea6f8f47b05a0305ca9e0f2e90d1c9b5c238d58da1e6f5fd5146d0586ad5236->leave($__internal_1ea6f8f47b05a0305ca9e0f2e90d1c9b5c238d58da1e6f5fd5146d0586ad5236_prof);

        
        $__internal_6e8e3159f569377a95c1b775ad834398f608cfb3ea33edf2de8d7f97fa17d467->leave($__internal_6e8e3159f569377a95c1b775ad834398f608cfb3ea33edf2de8d7f97fa17d467_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
