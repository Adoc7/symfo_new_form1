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
        $__internal_fb537874e5fdc6f322abbc0db615064473b2bda242db379adf7229cdb2cebb78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb537874e5fdc6f322abbc0db615064473b2bda242db379adf7229cdb2cebb78->enter($__internal_fb537874e5fdc6f322abbc0db615064473b2bda242db379adf7229cdb2cebb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_bc08c54de1b2bb9bde1be61d9a86048fd674dd748e6f6ed65eb7785524f3bc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc08c54de1b2bb9bde1be61d9a86048fd674dd748e6f6ed65eb7785524f3bc45->enter($__internal_bc08c54de1b2bb9bde1be61d9a86048fd674dd748e6f6ed65eb7785524f3bc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fb537874e5fdc6f322abbc0db615064473b2bda242db379adf7229cdb2cebb78->leave($__internal_fb537874e5fdc6f322abbc0db615064473b2bda242db379adf7229cdb2cebb78_prof);

        
        $__internal_bc08c54de1b2bb9bde1be61d9a86048fd674dd748e6f6ed65eb7785524f3bc45->leave($__internal_bc08c54de1b2bb9bde1be61d9a86048fd674dd748e6f6ed65eb7785524f3bc45_prof);

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
