<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_eb8737f67f33540af6d0900a8f573523373c95c61998d54a1a7e5d0ab820b854 extends Twig_Template
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
        $__internal_897e5ae24f157b2d505718a58808924d6d3cda4225ad43abdd51a5d54974c161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897e5ae24f157b2d505718a58808924d6d3cda4225ad43abdd51a5d54974c161->enter($__internal_897e5ae24f157b2d505718a58808924d6d3cda4225ad43abdd51a5d54974c161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_95307865a7856eeba4ac8a1f090a215d1b80dec69265083ef99df271b064808c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95307865a7856eeba4ac8a1f090a215d1b80dec69265083ef99df271b064808c->enter($__internal_95307865a7856eeba4ac8a1f090a215d1b80dec69265083ef99df271b064808c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_897e5ae24f157b2d505718a58808924d6d3cda4225ad43abdd51a5d54974c161->leave($__internal_897e5ae24f157b2d505718a58808924d6d3cda4225ad43abdd51a5d54974c161_prof);

        
        $__internal_95307865a7856eeba4ac8a1f090a215d1b80dec69265083ef99df271b064808c->leave($__internal_95307865a7856eeba4ac8a1f090a215d1b80dec69265083ef99df271b064808c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
