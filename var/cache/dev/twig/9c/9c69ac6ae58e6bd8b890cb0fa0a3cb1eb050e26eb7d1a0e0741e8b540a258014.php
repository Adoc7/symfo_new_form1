<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8d27c561a1049ab6f607af2028df0e13858e040a72d80efa1b244a852234fbcb extends Twig_Template
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
        $__internal_8b91a6fc3b0f3827275c647e24baa76a61bef15993c2d6fc548cc5f6352ada9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b91a6fc3b0f3827275c647e24baa76a61bef15993c2d6fc548cc5f6352ada9c->enter($__internal_8b91a6fc3b0f3827275c647e24baa76a61bef15993c2d6fc548cc5f6352ada9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9e12d54dd921845560f9b4621e19d8b92a28b3b0abecb22d87220d09cc4c3c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e12d54dd921845560f9b4621e19d8b92a28b3b0abecb22d87220d09cc4c3c79->enter($__internal_9e12d54dd921845560f9b4621e19d8b92a28b3b0abecb22d87220d09cc4c3c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_8b91a6fc3b0f3827275c647e24baa76a61bef15993c2d6fc548cc5f6352ada9c->leave($__internal_8b91a6fc3b0f3827275c647e24baa76a61bef15993c2d6fc548cc5f6352ada9c_prof);

        
        $__internal_9e12d54dd921845560f9b4621e19d8b92a28b3b0abecb22d87220d09cc4c3c79->leave($__internal_9e12d54dd921845560f9b4621e19d8b92a28b3b0abecb22d87220d09cc4c3c79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
