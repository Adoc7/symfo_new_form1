<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_cba4068a7af9a4a4b354a7d9e08642391f071089fac33f8d1bbfe8d730fcc2d6 extends Twig_Template
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
        $__internal_c47352021de3b94e7650c696ca08f0f29f7b3fea0c951080b53b90da22168da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47352021de3b94e7650c696ca08f0f29f7b3fea0c951080b53b90da22168da6->enter($__internal_c47352021de3b94e7650c696ca08f0f29f7b3fea0c951080b53b90da22168da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_193a24cf7a0ca8c307e2d525b84f09d071c014f9bd0ccf831f52a5ddeed2aff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193a24cf7a0ca8c307e2d525b84f09d071c014f9bd0ccf831f52a5ddeed2aff7->enter($__internal_193a24cf7a0ca8c307e2d525b84f09d071c014f9bd0ccf831f52a5ddeed2aff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c47352021de3b94e7650c696ca08f0f29f7b3fea0c951080b53b90da22168da6->leave($__internal_c47352021de3b94e7650c696ca08f0f29f7b3fea0c951080b53b90da22168da6_prof);

        
        $__internal_193a24cf7a0ca8c307e2d525b84f09d071c014f9bd0ccf831f52a5ddeed2aff7->leave($__internal_193a24cf7a0ca8c307e2d525b84f09d071c014f9bd0ccf831f52a5ddeed2aff7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
