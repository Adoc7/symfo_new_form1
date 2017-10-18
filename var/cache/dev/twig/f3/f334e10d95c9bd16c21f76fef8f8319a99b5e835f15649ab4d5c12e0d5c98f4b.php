<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5a1eb63fbc3379fa4eb989664ac63a3fa0571687230cb31be75ef7f17c00fdca extends Twig_Template
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
        $__internal_2125ae7f1a9554a832c0beb4ae73cd357425e3cf094d2df434d0eaa6cdbfc79f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2125ae7f1a9554a832c0beb4ae73cd357425e3cf094d2df434d0eaa6cdbfc79f->enter($__internal_2125ae7f1a9554a832c0beb4ae73cd357425e3cf094d2df434d0eaa6cdbfc79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_669f7954767e13f929a26b2ec62d452de57d7ddfc3c88c83315ff9ade42070ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669f7954767e13f929a26b2ec62d452de57d7ddfc3c88c83315ff9ade42070ea->enter($__internal_669f7954767e13f929a26b2ec62d452de57d7ddfc3c88c83315ff9ade42070ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2125ae7f1a9554a832c0beb4ae73cd357425e3cf094d2df434d0eaa6cdbfc79f->leave($__internal_2125ae7f1a9554a832c0beb4ae73cd357425e3cf094d2df434d0eaa6cdbfc79f_prof);

        
        $__internal_669f7954767e13f929a26b2ec62d452de57d7ddfc3c88c83315ff9ade42070ea->leave($__internal_669f7954767e13f929a26b2ec62d452de57d7ddfc3c88c83315ff9ade42070ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
