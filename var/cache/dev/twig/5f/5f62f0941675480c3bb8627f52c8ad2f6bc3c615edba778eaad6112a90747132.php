<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5c074c03092b9e9aef48873473ba31f61e406ffe62854353b913ef302373606c extends Twig_Template
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
        $__internal_7c3ef02aa75cd24bb24d982e57b8e9e9b02d880095482f2124a56eed7aa60ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3ef02aa75cd24bb24d982e57b8e9e9b02d880095482f2124a56eed7aa60ed4->enter($__internal_7c3ef02aa75cd24bb24d982e57b8e9e9b02d880095482f2124a56eed7aa60ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_11e61d5c4a8bb8d50a820febc71bcd7f58ab44cc92df3ea3822e06e84fb921f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e61d5c4a8bb8d50a820febc71bcd7f58ab44cc92df3ea3822e06e84fb921f2->enter($__internal_11e61d5c4a8bb8d50a820febc71bcd7f58ab44cc92df3ea3822e06e84fb921f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7c3ef02aa75cd24bb24d982e57b8e9e9b02d880095482f2124a56eed7aa60ed4->leave($__internal_7c3ef02aa75cd24bb24d982e57b8e9e9b02d880095482f2124a56eed7aa60ed4_prof);

        
        $__internal_11e61d5c4a8bb8d50a820febc71bcd7f58ab44cc92df3ea3822e06e84fb921f2->leave($__internal_11e61d5c4a8bb8d50a820febc71bcd7f58ab44cc92df3ea3822e06e84fb921f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
