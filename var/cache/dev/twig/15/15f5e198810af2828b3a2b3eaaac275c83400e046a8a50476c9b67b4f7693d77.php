<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_22b319c85c11bd29b4a11bc267bf01d721b05a5a24a33b90232aceb0ca0aa854 extends Twig_Template
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
        $__internal_7b8ceb2ee69a45f68ca767d4fba8aa284fd3dacf3546f2afc53e7aefd8d30777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8ceb2ee69a45f68ca767d4fba8aa284fd3dacf3546f2afc53e7aefd8d30777->enter($__internal_7b8ceb2ee69a45f68ca767d4fba8aa284fd3dacf3546f2afc53e7aefd8d30777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_233984b7c798389fa74d6e9d143306e7d952c21f4a52b91ac21c33e35db6c375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233984b7c798389fa74d6e9d143306e7d952c21f4a52b91ac21c33e35db6c375->enter($__internal_233984b7c798389fa74d6e9d143306e7d952c21f4a52b91ac21c33e35db6c375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7b8ceb2ee69a45f68ca767d4fba8aa284fd3dacf3546f2afc53e7aefd8d30777->leave($__internal_7b8ceb2ee69a45f68ca767d4fba8aa284fd3dacf3546f2afc53e7aefd8d30777_prof);

        
        $__internal_233984b7c798389fa74d6e9d143306e7d952c21f4a52b91ac21c33e35db6c375->leave($__internal_233984b7c798389fa74d6e9d143306e7d952c21f4a52b91ac21c33e35db6c375_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
