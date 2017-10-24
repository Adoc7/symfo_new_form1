<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b011d0160a0d05d3990766830767de981eec6327f3b939095552bafd6ecb9200 extends Twig_Template
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
        $__internal_d446d0c4a592895c4d9d4c570cbd5e1889daca872342fa6124e57ce250517bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d446d0c4a592895c4d9d4c570cbd5e1889daca872342fa6124e57ce250517bf7->enter($__internal_d446d0c4a592895c4d9d4c570cbd5e1889daca872342fa6124e57ce250517bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_06db8f04a0e795b990d94430b8ab237073c66d7671050ed4a9946a304bd3219c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06db8f04a0e795b990d94430b8ab237073c66d7671050ed4a9946a304bd3219c->enter($__internal_06db8f04a0e795b990d94430b8ab237073c66d7671050ed4a9946a304bd3219c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d446d0c4a592895c4d9d4c570cbd5e1889daca872342fa6124e57ce250517bf7->leave($__internal_d446d0c4a592895c4d9d4c570cbd5e1889daca872342fa6124e57ce250517bf7_prof);

        
        $__internal_06db8f04a0e795b990d94430b8ab237073c66d7671050ed4a9946a304bd3219c->leave($__internal_06db8f04a0e795b990d94430b8ab237073c66d7671050ed4a9946a304bd3219c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
