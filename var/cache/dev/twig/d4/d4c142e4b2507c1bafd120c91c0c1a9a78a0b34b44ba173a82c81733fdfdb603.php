<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_bdf865191fe9dfd24bca17f695cfed892b8ea4fb747b6d6031260603f2185081 extends Twig_Template
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
        $__internal_886f36054527516a6308bf88eb75b5298b48d17c7f975a62abef2a854ed1f12a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886f36054527516a6308bf88eb75b5298b48d17c7f975a62abef2a854ed1f12a->enter($__internal_886f36054527516a6308bf88eb75b5298b48d17c7f975a62abef2a854ed1f12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5d968be0d1d1e7fae0d06b24fb05f368aea42bf50d406bbc24245de3ee4cb300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d968be0d1d1e7fae0d06b24fb05f368aea42bf50d406bbc24245de3ee4cb300->enter($__internal_5d968be0d1d1e7fae0d06b24fb05f368aea42bf50d406bbc24245de3ee4cb300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_886f36054527516a6308bf88eb75b5298b48d17c7f975a62abef2a854ed1f12a->leave($__internal_886f36054527516a6308bf88eb75b5298b48d17c7f975a62abef2a854ed1f12a_prof);

        
        $__internal_5d968be0d1d1e7fae0d06b24fb05f368aea42bf50d406bbc24245de3ee4cb300->leave($__internal_5d968be0d1d1e7fae0d06b24fb05f368aea42bf50d406bbc24245de3ee4cb300_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
