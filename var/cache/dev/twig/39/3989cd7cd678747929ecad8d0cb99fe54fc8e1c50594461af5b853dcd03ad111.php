<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7cbe8951ce65d4342eea6c0a65351f03b7930c54972473c4411a868f749707e4 extends Twig_Template
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
        $__internal_92b8d4f3931ba0c65cb45735be116fd7f9acf64ee8742c37c7b780e982b12f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b8d4f3931ba0c65cb45735be116fd7f9acf64ee8742c37c7b780e982b12f42->enter($__internal_92b8d4f3931ba0c65cb45735be116fd7f9acf64ee8742c37c7b780e982b12f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_adf96036b029dde7e84643c12563fb4dc42636f668d1932f3fb1a3ac453fec51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf96036b029dde7e84643c12563fb4dc42636f668d1932f3fb1a3ac453fec51->enter($__internal_adf96036b029dde7e84643c12563fb4dc42636f668d1932f3fb1a3ac453fec51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_92b8d4f3931ba0c65cb45735be116fd7f9acf64ee8742c37c7b780e982b12f42->leave($__internal_92b8d4f3931ba0c65cb45735be116fd7f9acf64ee8742c37c7b780e982b12f42_prof);

        
        $__internal_adf96036b029dde7e84643c12563fb4dc42636f668d1932f3fb1a3ac453fec51->leave($__internal_adf96036b029dde7e84643c12563fb4dc42636f668d1932f3fb1a3ac453fec51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
