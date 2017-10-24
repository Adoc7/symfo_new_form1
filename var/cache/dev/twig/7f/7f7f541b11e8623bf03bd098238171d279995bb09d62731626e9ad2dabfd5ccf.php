<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_04ebcaa5820ed9c76110fe894c07bae527594120c8a4776b326b520e797dd817 extends Twig_Template
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
        $__internal_5af0dd3b21d9688dad5c83dbd5553e503df303f64d680ef56b6a09d511f87bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af0dd3b21d9688dad5c83dbd5553e503df303f64d680ef56b6a09d511f87bf5->enter($__internal_5af0dd3b21d9688dad5c83dbd5553e503df303f64d680ef56b6a09d511f87bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7add7844ce14b6b26b3b47791dbddb781d256500ca41be8b438c046ea7fee637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7add7844ce14b6b26b3b47791dbddb781d256500ca41be8b438c046ea7fee637->enter($__internal_7add7844ce14b6b26b3b47791dbddb781d256500ca41be8b438c046ea7fee637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5af0dd3b21d9688dad5c83dbd5553e503df303f64d680ef56b6a09d511f87bf5->leave($__internal_5af0dd3b21d9688dad5c83dbd5553e503df303f64d680ef56b6a09d511f87bf5_prof);

        
        $__internal_7add7844ce14b6b26b3b47791dbddb781d256500ca41be8b438c046ea7fee637->leave($__internal_7add7844ce14b6b26b3b47791dbddb781d256500ca41be8b438c046ea7fee637_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
