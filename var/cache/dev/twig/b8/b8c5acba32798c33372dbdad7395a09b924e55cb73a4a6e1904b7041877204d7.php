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
        $__internal_bc7303343a232eb968802218eb2606c059aeb7b9eae0133633e8c683aec32427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7303343a232eb968802218eb2606c059aeb7b9eae0133633e8c683aec32427->enter($__internal_bc7303343a232eb968802218eb2606c059aeb7b9eae0133633e8c683aec32427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_119d29b884b3067f2aa674d3293ba318568248b12709392ac350266943923700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119d29b884b3067f2aa674d3293ba318568248b12709392ac350266943923700->enter($__internal_119d29b884b3067f2aa674d3293ba318568248b12709392ac350266943923700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_bc7303343a232eb968802218eb2606c059aeb7b9eae0133633e8c683aec32427->leave($__internal_bc7303343a232eb968802218eb2606c059aeb7b9eae0133633e8c683aec32427_prof);

        
        $__internal_119d29b884b3067f2aa674d3293ba318568248b12709392ac350266943923700->leave($__internal_119d29b884b3067f2aa674d3293ba318568248b12709392ac350266943923700_prof);

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
