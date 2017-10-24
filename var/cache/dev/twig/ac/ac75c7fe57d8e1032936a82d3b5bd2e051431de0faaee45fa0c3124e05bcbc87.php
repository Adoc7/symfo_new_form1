<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_2b7ef8246240e18831cc748b667552b8af748567ab965c35f71ccb26709bdbfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_549fbc1333aad840dd96d921a286b38ef1c98ee79b477a8c8a488e33dbd7fb71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549fbc1333aad840dd96d921a286b38ef1c98ee79b477a8c8a488e33dbd7fb71->enter($__internal_549fbc1333aad840dd96d921a286b38ef1c98ee79b477a8c8a488e33dbd7fb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ac0776674eca3a692232461af32b76bc2a0e80caded93a73001fded7b17d4532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0776674eca3a692232461af32b76bc2a0e80caded93a73001fded7b17d4532->enter($__internal_ac0776674eca3a692232461af32b76bc2a0e80caded93a73001fded7b17d4532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_549fbc1333aad840dd96d921a286b38ef1c98ee79b477a8c8a488e33dbd7fb71->leave($__internal_549fbc1333aad840dd96d921a286b38ef1c98ee79b477a8c8a488e33dbd7fb71_prof);

        
        $__internal_ac0776674eca3a692232461af32b76bc2a0e80caded93a73001fded7b17d4532->leave($__internal_ac0776674eca3a692232461af32b76bc2a0e80caded93a73001fded7b17d4532_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_32eccc2cfd22372f28468397e3b96073dc473f5c39ab2b3fe4fe152ad08ad8e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32eccc2cfd22372f28468397e3b96073dc473f5c39ab2b3fe4fe152ad08ad8e6->enter($__internal_32eccc2cfd22372f28468397e3b96073dc473f5c39ab2b3fe4fe152ad08ad8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_bb3cebb75b02b4506f4588727b46c93f20159cdee6c565adfaf4fd1d37246b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3cebb75b02b4506f4588727b46c93f20159cdee6c565adfaf4fd1d37246b48->enter($__internal_bb3cebb75b02b4506f4588727b46c93f20159cdee6c565adfaf4fd1d37246b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_bb3cebb75b02b4506f4588727b46c93f20159cdee6c565adfaf4fd1d37246b48->leave($__internal_bb3cebb75b02b4506f4588727b46c93f20159cdee6c565adfaf4fd1d37246b48_prof);

        
        $__internal_32eccc2cfd22372f28468397e3b96073dc473f5c39ab2b3fe4fe152ad08ad8e6->leave($__internal_32eccc2cfd22372f28468397e3b96073dc473f5c39ab2b3fe4fe152ad08ad8e6_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f2952bf6ce9ac22dd710c07c528a0d81f9e352483d69f7ce521c291bdd08222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2952bf6ce9ac22dd710c07c528a0d81f9e352483d69f7ce521c291bdd08222->enter($__internal_9f2952bf6ce9ac22dd710c07c528a0d81f9e352483d69f7ce521c291bdd08222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_373632b1ea00a9182b03938f5ddfc63954afb631506ca47ac6f93f6a4f108fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373632b1ea00a9182b03938f5ddfc63954afb631506ca47ac6f93f6a4f108fac->enter($__internal_373632b1ea00a9182b03938f5ddfc63954afb631506ca47ac6f93f6a4f108fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_373632b1ea00a9182b03938f5ddfc63954afb631506ca47ac6f93f6a4f108fac->leave($__internal_373632b1ea00a9182b03938f5ddfc63954afb631506ca47ac6f93f6a4f108fac_prof);

        
        $__internal_9f2952bf6ce9ac22dd710c07c528a0d81f9e352483d69f7ce521c291bdd08222->leave($__internal_9f2952bf6ce9ac22dd710c07c528a0d81f9e352483d69f7ce521c291bdd08222_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
