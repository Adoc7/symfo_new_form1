<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4399adf3a96bd61de43db7b2e2c6f6ef3c0ccb01b38a8ca1b9a4e4e6aaae598e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d2fc48f1c06b1efa1f7b794d69cc6fb7485ec3b6852872bd78b7302af0e174b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2fc48f1c06b1efa1f7b794d69cc6fb7485ec3b6852872bd78b7302af0e174b->enter($__internal_3d2fc48f1c06b1efa1f7b794d69cc6fb7485ec3b6852872bd78b7302af0e174b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b11518993a97b5e638ba93c13423510b3616ebbdf3f28ed9a56b220a670b5d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11518993a97b5e638ba93c13423510b3616ebbdf3f28ed9a56b220a670b5d5a->enter($__internal_b11518993a97b5e638ba93c13423510b3616ebbdf3f28ed9a56b220a670b5d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3d2fc48f1c06b1efa1f7b794d69cc6fb7485ec3b6852872bd78b7302af0e174b->leave($__internal_3d2fc48f1c06b1efa1f7b794d69cc6fb7485ec3b6852872bd78b7302af0e174b_prof);

        
        $__internal_b11518993a97b5e638ba93c13423510b3616ebbdf3f28ed9a56b220a670b5d5a->leave($__internal_b11518993a97b5e638ba93c13423510b3616ebbdf3f28ed9a56b220a670b5d5a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9787b0a4c4d96d5cef962f273e1579e972dd00c696ccfb4facb80632ada25df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9787b0a4c4d96d5cef962f273e1579e972dd00c696ccfb4facb80632ada25df8->enter($__internal_9787b0a4c4d96d5cef962f273e1579e972dd00c696ccfb4facb80632ada25df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7968a56811a81c86b9707db56dd344c5c5b2158da0e5095e479ff2de30828e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7968a56811a81c86b9707db56dd344c5c5b2158da0e5095e479ff2de30828e1e->enter($__internal_7968a56811a81c86b9707db56dd344c5c5b2158da0e5095e479ff2de30828e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7968a56811a81c86b9707db56dd344c5c5b2158da0e5095e479ff2de30828e1e->leave($__internal_7968a56811a81c86b9707db56dd344c5c5b2158da0e5095e479ff2de30828e1e_prof);

        
        $__internal_9787b0a4c4d96d5cef962f273e1579e972dd00c696ccfb4facb80632ada25df8->leave($__internal_9787b0a4c4d96d5cef962f273e1579e972dd00c696ccfb4facb80632ada25df8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
