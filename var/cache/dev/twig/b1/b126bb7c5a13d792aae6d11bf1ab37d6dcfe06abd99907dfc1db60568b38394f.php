<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_67e852c42decfb05864936f9bbdf212157d05dcae7524a470d961c10acf3b2c7 extends Twig_Template
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
        $__internal_ef3d6bb7c3b16f013ad981d5a629257c98069be86545187f61a8b2810d149b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef3d6bb7c3b16f013ad981d5a629257c98069be86545187f61a8b2810d149b24->enter($__internal_ef3d6bb7c3b16f013ad981d5a629257c98069be86545187f61a8b2810d149b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_cf05a51f45d5fbce6696925d0c215d2c1640e80e8cd76f408c3ff954ee508ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf05a51f45d5fbce6696925d0c215d2c1640e80e8cd76f408c3ff954ee508ede->enter($__internal_cf05a51f45d5fbce6696925d0c215d2c1640e80e8cd76f408c3ff954ee508ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ef3d6bb7c3b16f013ad981d5a629257c98069be86545187f61a8b2810d149b24->leave($__internal_ef3d6bb7c3b16f013ad981d5a629257c98069be86545187f61a8b2810d149b24_prof);

        
        $__internal_cf05a51f45d5fbce6696925d0c215d2c1640e80e8cd76f408c3ff954ee508ede->leave($__internal_cf05a51f45d5fbce6696925d0c215d2c1640e80e8cd76f408c3ff954ee508ede_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
