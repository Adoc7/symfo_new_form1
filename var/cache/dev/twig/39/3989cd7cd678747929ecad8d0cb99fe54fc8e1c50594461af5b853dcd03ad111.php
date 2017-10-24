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
        $__internal_31f259c63e12ca713b2079f6051eb2a839db605064903b335facf9d5564e7df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f259c63e12ca713b2079f6051eb2a839db605064903b335facf9d5564e7df6->enter($__internal_31f259c63e12ca713b2079f6051eb2a839db605064903b335facf9d5564e7df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_8cc051afdc12f5d9bb2b3ff794775b7d87c2443965657198e7c462953d223457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc051afdc12f5d9bb2b3ff794775b7d87c2443965657198e7c462953d223457->enter($__internal_8cc051afdc12f5d9bb2b3ff794775b7d87c2443965657198e7c462953d223457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_31f259c63e12ca713b2079f6051eb2a839db605064903b335facf9d5564e7df6->leave($__internal_31f259c63e12ca713b2079f6051eb2a839db605064903b335facf9d5564e7df6_prof);

        
        $__internal_8cc051afdc12f5d9bb2b3ff794775b7d87c2443965657198e7c462953d223457->leave($__internal_8cc051afdc12f5d9bb2b3ff794775b7d87c2443965657198e7c462953d223457_prof);

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
