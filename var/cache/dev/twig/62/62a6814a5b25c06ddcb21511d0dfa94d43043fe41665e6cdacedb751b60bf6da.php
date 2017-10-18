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
        $__internal_dee7883cf648d3c5145b46a1442b2cf792d272c9ad55c276c8e559801e05a75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee7883cf648d3c5145b46a1442b2cf792d272c9ad55c276c8e559801e05a75d->enter($__internal_dee7883cf648d3c5145b46a1442b2cf792d272c9ad55c276c8e559801e05a75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_169f93177a9eb19f76b39b36a145d04550263ebe6868446c7ae9dd66c2ab6230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169f93177a9eb19f76b39b36a145d04550263ebe6868446c7ae9dd66c2ab6230->enter($__internal_169f93177a9eb19f76b39b36a145d04550263ebe6868446c7ae9dd66c2ab6230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dee7883cf648d3c5145b46a1442b2cf792d272c9ad55c276c8e559801e05a75d->leave($__internal_dee7883cf648d3c5145b46a1442b2cf792d272c9ad55c276c8e559801e05a75d_prof);

        
        $__internal_169f93177a9eb19f76b39b36a145d04550263ebe6868446c7ae9dd66c2ab6230->leave($__internal_169f93177a9eb19f76b39b36a145d04550263ebe6868446c7ae9dd66c2ab6230_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4add62b24a656fc8af4c4c2fd8043e8bad70e6de56fb5261ec7a135293cf9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4add62b24a656fc8af4c4c2fd8043e8bad70e6de56fb5261ec7a135293cf9d9->enter($__internal_b4add62b24a656fc8af4c4c2fd8043e8bad70e6de56fb5261ec7a135293cf9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_23f880ec12ee502dfbb40b1d3a8f833546f5de54d7c951527bd20f575d3dddd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f880ec12ee502dfbb40b1d3a8f833546f5de54d7c951527bd20f575d3dddd2->enter($__internal_23f880ec12ee502dfbb40b1d3a8f833546f5de54d7c951527bd20f575d3dddd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_23f880ec12ee502dfbb40b1d3a8f833546f5de54d7c951527bd20f575d3dddd2->leave($__internal_23f880ec12ee502dfbb40b1d3a8f833546f5de54d7c951527bd20f575d3dddd2_prof);

        
        $__internal_b4add62b24a656fc8af4c4c2fd8043e8bad70e6de56fb5261ec7a135293cf9d9->leave($__internal_b4add62b24a656fc8af4c4c2fd8043e8bad70e6de56fb5261ec7a135293cf9d9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3b95587d6500276fe168fa6a8fcb91dccdb62dfec20867d523912103ebf5ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b95587d6500276fe168fa6a8fcb91dccdb62dfec20867d523912103ebf5ad4->enter($__internal_b3b95587d6500276fe168fa6a8fcb91dccdb62dfec20867d523912103ebf5ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7016e8e41dcbcf526994443db90330fc2eb3790faed063b6a57573c50b54be40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7016e8e41dcbcf526994443db90330fc2eb3790faed063b6a57573c50b54be40->enter($__internal_7016e8e41dcbcf526994443db90330fc2eb3790faed063b6a57573c50b54be40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7016e8e41dcbcf526994443db90330fc2eb3790faed063b6a57573c50b54be40->leave($__internal_7016e8e41dcbcf526994443db90330fc2eb3790faed063b6a57573c50b54be40_prof);

        
        $__internal_b3b95587d6500276fe168fa6a8fcb91dccdb62dfec20867d523912103ebf5ad4->leave($__internal_b3b95587d6500276fe168fa6a8fcb91dccdb62dfec20867d523912103ebf5ad4_prof);

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
