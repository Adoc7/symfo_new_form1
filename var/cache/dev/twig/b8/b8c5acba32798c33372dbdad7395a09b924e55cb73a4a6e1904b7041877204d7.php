<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_af5c25bbef3efb5ac5878dce93217bbab12550229909a03d7f5a34f1a6e601d9 extends Twig_Template
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
        $__internal_efbd04cef7759780b823cf4f5a8d4b1bac90fdb8f8dfe3c51aa7604c509f194e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efbd04cef7759780b823cf4f5a8d4b1bac90fdb8f8dfe3c51aa7604c509f194e->enter($__internal_efbd04cef7759780b823cf4f5a8d4b1bac90fdb8f8dfe3c51aa7604c509f194e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_360758f2f80a32ef8b01ddb9f43ab939ba8dc009c92a14d7c0044ae162d34325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360758f2f80a32ef8b01ddb9f43ab939ba8dc009c92a14d7c0044ae162d34325->enter($__internal_360758f2f80a32ef8b01ddb9f43ab939ba8dc009c92a14d7c0044ae162d34325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_efbd04cef7759780b823cf4f5a8d4b1bac90fdb8f8dfe3c51aa7604c509f194e->leave($__internal_efbd04cef7759780b823cf4f5a8d4b1bac90fdb8f8dfe3c51aa7604c509f194e_prof);

        
        $__internal_360758f2f80a32ef8b01ddb9f43ab939ba8dc009c92a14d7c0044ae162d34325->leave($__internal_360758f2f80a32ef8b01ddb9f43ab939ba8dc009c92a14d7c0044ae162d34325_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
