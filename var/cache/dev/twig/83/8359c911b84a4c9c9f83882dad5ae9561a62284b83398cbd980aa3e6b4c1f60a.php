<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_406223498b2ba2d8d397cc72068c66e1987051b8842d312dcdbfc2a2cc478ce5 extends Twig_Template
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
        $__internal_979a9e89f6368493123a9deb01a3a5503846dba774ad78fb6908bbed415950b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979a9e89f6368493123a9deb01a3a5503846dba774ad78fb6908bbed415950b8->enter($__internal_979a9e89f6368493123a9deb01a3a5503846dba774ad78fb6908bbed415950b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_061d4aa35d0e0a05ee07eea1148ac2637fd3df66907e8554a9eaf05c213d93d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061d4aa35d0e0a05ee07eea1148ac2637fd3df66907e8554a9eaf05c213d93d8->enter($__internal_061d4aa35d0e0a05ee07eea1148ac2637fd3df66907e8554a9eaf05c213d93d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_979a9e89f6368493123a9deb01a3a5503846dba774ad78fb6908bbed415950b8->leave($__internal_979a9e89f6368493123a9deb01a3a5503846dba774ad78fb6908bbed415950b8_prof);

        
        $__internal_061d4aa35d0e0a05ee07eea1148ac2637fd3df66907e8554a9eaf05c213d93d8->leave($__internal_061d4aa35d0e0a05ee07eea1148ac2637fd3df66907e8554a9eaf05c213d93d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
