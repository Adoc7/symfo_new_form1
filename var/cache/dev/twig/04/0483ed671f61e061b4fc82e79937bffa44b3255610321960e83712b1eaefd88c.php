<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_575fc7ea33e43539e238c4c2bf46e03755d84bb1f7282dc21381d151cffef28c extends Twig_Template
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
        $__internal_3f7574db12295aff7d65471a98b23881e0304e5acb1f089a8558c7257b8e142d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7574db12295aff7d65471a98b23881e0304e5acb1f089a8558c7257b8e142d->enter($__internal_3f7574db12295aff7d65471a98b23881e0304e5acb1f089a8558c7257b8e142d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_fa9cb835d61131d20b2924fbfcbf04b0ff489f62b8e3005f8115009d27fddb78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9cb835d61131d20b2924fbfcbf04b0ff489f62b8e3005f8115009d27fddb78->enter($__internal_fa9cb835d61131d20b2924fbfcbf04b0ff489f62b8e3005f8115009d27fddb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3f7574db12295aff7d65471a98b23881e0304e5acb1f089a8558c7257b8e142d->leave($__internal_3f7574db12295aff7d65471a98b23881e0304e5acb1f089a8558c7257b8e142d_prof);

        
        $__internal_fa9cb835d61131d20b2924fbfcbf04b0ff489f62b8e3005f8115009d27fddb78->leave($__internal_fa9cb835d61131d20b2924fbfcbf04b0ff489f62b8e3005f8115009d27fddb78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
