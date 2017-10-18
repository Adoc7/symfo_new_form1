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
        $__internal_fd6d20026b599d13f1ea4cd3a70460cd1a8584cac4641ea63b9020c005d20372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6d20026b599d13f1ea4cd3a70460cd1a8584cac4641ea63b9020c005d20372->enter($__internal_fd6d20026b599d13f1ea4cd3a70460cd1a8584cac4641ea63b9020c005d20372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e1f43b3382221f34a7fc9fd8a5dc89a24e155ed00d2433f5a92f9cf4016cb263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f43b3382221f34a7fc9fd8a5dc89a24e155ed00d2433f5a92f9cf4016cb263->enter($__internal_e1f43b3382221f34a7fc9fd8a5dc89a24e155ed00d2433f5a92f9cf4016cb263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd6d20026b599d13f1ea4cd3a70460cd1a8584cac4641ea63b9020c005d20372->leave($__internal_fd6d20026b599d13f1ea4cd3a70460cd1a8584cac4641ea63b9020c005d20372_prof);

        
        $__internal_e1f43b3382221f34a7fc9fd8a5dc89a24e155ed00d2433f5a92f9cf4016cb263->leave($__internal_e1f43b3382221f34a7fc9fd8a5dc89a24e155ed00d2433f5a92f9cf4016cb263_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9d4d93aef37a9c2dcd0b8e4f89f218d2b02f760d9c809a53276732c8f2b002c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d4d93aef37a9c2dcd0b8e4f89f218d2b02f760d9c809a53276732c8f2b002c3->enter($__internal_9d4d93aef37a9c2dcd0b8e4f89f218d2b02f760d9c809a53276732c8f2b002c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8185d8cf78cd5b194db6d80c6080844757ef8c740d66c4a94b9e3a7f72211973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8185d8cf78cd5b194db6d80c6080844757ef8c740d66c4a94b9e3a7f72211973->enter($__internal_8185d8cf78cd5b194db6d80c6080844757ef8c740d66c4a94b9e3a7f72211973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_8185d8cf78cd5b194db6d80c6080844757ef8c740d66c4a94b9e3a7f72211973->leave($__internal_8185d8cf78cd5b194db6d80c6080844757ef8c740d66c4a94b9e3a7f72211973_prof);

        
        $__internal_9d4d93aef37a9c2dcd0b8e4f89f218d2b02f760d9c809a53276732c8f2b002c3->leave($__internal_9d4d93aef37a9c2dcd0b8e4f89f218d2b02f760d9c809a53276732c8f2b002c3_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ec3b6c5bedd9fd2b71a54ffa592c6c56ef0ab4d8c70e7fba1c799c96ef57008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec3b6c5bedd9fd2b71a54ffa592c6c56ef0ab4d8c70e7fba1c799c96ef57008->enter($__internal_1ec3b6c5bedd9fd2b71a54ffa592c6c56ef0ab4d8c70e7fba1c799c96ef57008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a741e5c31a6155346a65caac92990452406db7744e74682cf32b04669501b67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a741e5c31a6155346a65caac92990452406db7744e74682cf32b04669501b67c->enter($__internal_a741e5c31a6155346a65caac92990452406db7744e74682cf32b04669501b67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a741e5c31a6155346a65caac92990452406db7744e74682cf32b04669501b67c->leave($__internal_a741e5c31a6155346a65caac92990452406db7744e74682cf32b04669501b67c_prof);

        
        $__internal_1ec3b6c5bedd9fd2b71a54ffa592c6c56ef0ab4d8c70e7fba1c799c96ef57008->leave($__internal_1ec3b6c5bedd9fd2b71a54ffa592c6c56ef0ab4d8c70e7fba1c799c96ef57008_prof);

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
