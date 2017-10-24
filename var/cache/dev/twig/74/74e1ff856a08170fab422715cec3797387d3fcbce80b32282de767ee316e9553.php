<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6a0929b647dbfebe3c74867e694138aa17da19ad74292e75d4031a53e2bb6a47 extends Twig_Template
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
        $__internal_a12fe6ed901a20a636f5f475203e405c620459314cadc2b21a9f5af9cd1ed73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12fe6ed901a20a636f5f475203e405c620459314cadc2b21a9f5af9cd1ed73a->enter($__internal_a12fe6ed901a20a636f5f475203e405c620459314cadc2b21a9f5af9cd1ed73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d7fd4c7187849cd666137d9d5d5f3fe6f90b59d9418df3d2ce6160bccc3a101f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fd4c7187849cd666137d9d5d5f3fe6f90b59d9418df3d2ce6160bccc3a101f->enter($__internal_d7fd4c7187849cd666137d9d5d5f3fe6f90b59d9418df3d2ce6160bccc3a101f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a12fe6ed901a20a636f5f475203e405c620459314cadc2b21a9f5af9cd1ed73a->leave($__internal_a12fe6ed901a20a636f5f475203e405c620459314cadc2b21a9f5af9cd1ed73a_prof);

        
        $__internal_d7fd4c7187849cd666137d9d5d5f3fe6f90b59d9418df3d2ce6160bccc3a101f->leave($__internal_d7fd4c7187849cd666137d9d5d5f3fe6f90b59d9418df3d2ce6160bccc3a101f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
