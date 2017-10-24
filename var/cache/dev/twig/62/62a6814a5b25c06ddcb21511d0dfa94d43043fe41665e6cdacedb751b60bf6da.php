<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_cec6efbb399a933d8ca5f7245e067dad568157e8b8fe2c81d9e8dd5310c54b96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c605ed2fddac55efc461289113c431427b9753a43cf0d2178e5928f566ba9b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c605ed2fddac55efc461289113c431427b9753a43cf0d2178e5928f566ba9b6a->enter($__internal_c605ed2fddac55efc461289113c431427b9753a43cf0d2178e5928f566ba9b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f62c0182d20616299dd79f0d3b4666defb2a23056d7816e5d7c49715c61185bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62c0182d20616299dd79f0d3b4666defb2a23056d7816e5d7c49715c61185bc->enter($__internal_f62c0182d20616299dd79f0d3b4666defb2a23056d7816e5d7c49715c61185bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c605ed2fddac55efc461289113c431427b9753a43cf0d2178e5928f566ba9b6a->leave($__internal_c605ed2fddac55efc461289113c431427b9753a43cf0d2178e5928f566ba9b6a_prof);

        
        $__internal_f62c0182d20616299dd79f0d3b4666defb2a23056d7816e5d7c49715c61185bc->leave($__internal_f62c0182d20616299dd79f0d3b4666defb2a23056d7816e5d7c49715c61185bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fbb48e00f19544a2d1e800ece0ae23512e2adad8c2a8e0c19a9726513848cc47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb48e00f19544a2d1e800ece0ae23512e2adad8c2a8e0c19a9726513848cc47->enter($__internal_fbb48e00f19544a2d1e800ece0ae23512e2adad8c2a8e0c19a9726513848cc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_72b95e08345f6782ef680fc09dd5b1ee38918f3c2c67673159c71592d14b913a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b95e08345f6782ef680fc09dd5b1ee38918f3c2c67673159c71592d14b913a->enter($__internal_72b95e08345f6782ef680fc09dd5b1ee38918f3c2c67673159c71592d14b913a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_72b95e08345f6782ef680fc09dd5b1ee38918f3c2c67673159c71592d14b913a->leave($__internal_72b95e08345f6782ef680fc09dd5b1ee38918f3c2c67673159c71592d14b913a_prof);

        
        $__internal_fbb48e00f19544a2d1e800ece0ae23512e2adad8c2a8e0c19a9726513848cc47->leave($__internal_fbb48e00f19544a2d1e800ece0ae23512e2adad8c2a8e0c19a9726513848cc47_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0bc1cf16964c2b411250b855753217771828980b4c1fc27472763370024dbb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0bc1cf16964c2b411250b855753217771828980b4c1fc27472763370024dbb8->enter($__internal_a0bc1cf16964c2b411250b855753217771828980b4c1fc27472763370024dbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e88554b7de971a397562aff197e8efe92b4dd0571aaf30929b0879029c6cf9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88554b7de971a397562aff197e8efe92b4dd0571aaf30929b0879029c6cf9d2->enter($__internal_e88554b7de971a397562aff197e8efe92b4dd0571aaf30929b0879029c6cf9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_e88554b7de971a397562aff197e8efe92b4dd0571aaf30929b0879029c6cf9d2->leave($__internal_e88554b7de971a397562aff197e8efe92b4dd0571aaf30929b0879029c6cf9d2_prof);

        
        $__internal_a0bc1cf16964c2b411250b855753217771828980b4c1fc27472763370024dbb8->leave($__internal_a0bc1cf16964c2b411250b855753217771828980b4c1fc27472763370024dbb8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
