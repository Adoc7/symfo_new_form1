<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_bdaaa6356b9a10a7df9e775f8ad5e482dba0f80cf1b40636826851c5871decb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2659e55c618a6e028f90bdb5f86cafacf35880bbc847cbf06c6a8ef93942d8f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2659e55c618a6e028f90bdb5f86cafacf35880bbc847cbf06c6a8ef93942d8f8->enter($__internal_2659e55c618a6e028f90bdb5f86cafacf35880bbc847cbf06c6a8ef93942d8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_a8f572644dffec1becc077df56d8729997c7df8901e6ddfc2c782564a11da138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f572644dffec1becc077df56d8729997c7df8901e6ddfc2c782564a11da138->enter($__internal_a8f572644dffec1becc077df56d8729997c7df8901e6ddfc2c782564a11da138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2659e55c618a6e028f90bdb5f86cafacf35880bbc847cbf06c6a8ef93942d8f8->leave($__internal_2659e55c618a6e028f90bdb5f86cafacf35880bbc847cbf06c6a8ef93942d8f8_prof);

        
        $__internal_a8f572644dffec1becc077df56d8729997c7df8901e6ddfc2c782564a11da138->leave($__internal_a8f572644dffec1becc077df56d8729997c7df8901e6ddfc2c782564a11da138_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e94bcfa5a0215f7b36bda382920301eb496dd33900c0bbecc3a6eff3bc5cf6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e94bcfa5a0215f7b36bda382920301eb496dd33900c0bbecc3a6eff3bc5cf6e->enter($__internal_5e94bcfa5a0215f7b36bda382920301eb496dd33900c0bbecc3a6eff3bc5cf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_60526aae714907d7d2cba5e7d2f6fd239b06bc208e0e548a26ba58a3b49d216a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60526aae714907d7d2cba5e7d2f6fd239b06bc208e0e548a26ba58a3b49d216a->enter($__internal_60526aae714907d7d2cba5e7d2f6fd239b06bc208e0e548a26ba58a3b49d216a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_60526aae714907d7d2cba5e7d2f6fd239b06bc208e0e548a26ba58a3b49d216a->leave($__internal_60526aae714907d7d2cba5e7d2f6fd239b06bc208e0e548a26ba58a3b49d216a_prof);

        
        $__internal_5e94bcfa5a0215f7b36bda382920301eb496dd33900c0bbecc3a6eff3bc5cf6e->leave($__internal_5e94bcfa5a0215f7b36bda382920301eb496dd33900c0bbecc3a6eff3bc5cf6e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_571a7c75a180a1ba05beff5a35b35f822f166f553e19b406c4cb13a9fcb2d053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571a7c75a180a1ba05beff5a35b35f822f166f553e19b406c4cb13a9fcb2d053->enter($__internal_571a7c75a180a1ba05beff5a35b35f822f166f553e19b406c4cb13a9fcb2d053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0b6fab718e24c1f7b21ef49b2542c56b0c54295f194aaadd562d6bd864c23b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6fab718e24c1f7b21ef49b2542c56b0c54295f194aaadd562d6bd864c23b12->enter($__internal_0b6fab718e24c1f7b21ef49b2542c56b0c54295f194aaadd562d6bd864c23b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0b6fab718e24c1f7b21ef49b2542c56b0c54295f194aaadd562d6bd864c23b12->leave($__internal_0b6fab718e24c1f7b21ef49b2542c56b0c54295f194aaadd562d6bd864c23b12_prof);

        
        $__internal_571a7c75a180a1ba05beff5a35b35f822f166f553e19b406c4cb13a9fcb2d053->leave($__internal_571a7c75a180a1ba05beff5a35b35f822f166f553e19b406c4cb13a9fcb2d053_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dbd7812394e94ce335c641b72acb5b72918571da662b945625c6b69999c41aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd7812394e94ce335c641b72acb5b72918571da662b945625c6b69999c41aaf->enter($__internal_dbd7812394e94ce335c641b72acb5b72918571da662b945625c6b69999c41aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_03c802cf1cebf180e09fed92d4ed8d0a7db710019631077e4cd6f527c2364dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c802cf1cebf180e09fed92d4ed8d0a7db710019631077e4cd6f527c2364dca->enter($__internal_03c802cf1cebf180e09fed92d4ed8d0a7db710019631077e4cd6f527c2364dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_03c802cf1cebf180e09fed92d4ed8d0a7db710019631077e4cd6f527c2364dca->leave($__internal_03c802cf1cebf180e09fed92d4ed8d0a7db710019631077e4cd6f527c2364dca_prof);

        
        $__internal_dbd7812394e94ce335c641b72acb5b72918571da662b945625c6b69999c41aaf->leave($__internal_dbd7812394e94ce335c641b72acb5b72918571da662b945625c6b69999c41aaf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
