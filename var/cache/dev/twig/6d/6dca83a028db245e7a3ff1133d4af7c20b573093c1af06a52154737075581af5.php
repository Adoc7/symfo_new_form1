<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a0624f554b5f52fc75e85e633a0a3b0eba1a6e402906faf24e6f0bd8fa2d60be extends Twig_Template
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
        $__internal_28a9a5bab4f3cf6cb37191e9ff9ba61cfd00cbca907c73c5686f2dd6437bcca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a9a5bab4f3cf6cb37191e9ff9ba61cfd00cbca907c73c5686f2dd6437bcca1->enter($__internal_28a9a5bab4f3cf6cb37191e9ff9ba61cfd00cbca907c73c5686f2dd6437bcca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_62ec86df16136c67f0ae907c622b691805432d82048fc504ae6d16940c0e5d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ec86df16136c67f0ae907c622b691805432d82048fc504ae6d16940c0e5d82->enter($__internal_62ec86df16136c67f0ae907c622b691805432d82048fc504ae6d16940c0e5d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_28a9a5bab4f3cf6cb37191e9ff9ba61cfd00cbca907c73c5686f2dd6437bcca1->leave($__internal_28a9a5bab4f3cf6cb37191e9ff9ba61cfd00cbca907c73c5686f2dd6437bcca1_prof);

        
        $__internal_62ec86df16136c67f0ae907c622b691805432d82048fc504ae6d16940c0e5d82->leave($__internal_62ec86df16136c67f0ae907c622b691805432d82048fc504ae6d16940c0e5d82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
