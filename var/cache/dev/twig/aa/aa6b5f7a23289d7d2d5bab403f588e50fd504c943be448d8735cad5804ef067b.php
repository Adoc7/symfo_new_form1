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
        $__internal_d62aca24750bf57335b84f100b99a9f3b5c5e07f62567e5a1d29120bc879b5d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62aca24750bf57335b84f100b99a9f3b5c5e07f62567e5a1d29120bc879b5d9->enter($__internal_d62aca24750bf57335b84f100b99a9f3b5c5e07f62567e5a1d29120bc879b5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_66e61d71e505c9cd9097f315844c0e6597f96c846e66263a211c386595419d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e61d71e505c9cd9097f315844c0e6597f96c846e66263a211c386595419d26->enter($__internal_66e61d71e505c9cd9097f315844c0e6597f96c846e66263a211c386595419d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d62aca24750bf57335b84f100b99a9f3b5c5e07f62567e5a1d29120bc879b5d9->leave($__internal_d62aca24750bf57335b84f100b99a9f3b5c5e07f62567e5a1d29120bc879b5d9_prof);

        
        $__internal_66e61d71e505c9cd9097f315844c0e6597f96c846e66263a211c386595419d26->leave($__internal_66e61d71e505c9cd9097f315844c0e6597f96c846e66263a211c386595419d26_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f029afed810c4a5eb3225e53094df5fc6b2badbe87e163e473ca1886189fcfe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f029afed810c4a5eb3225e53094df5fc6b2badbe87e163e473ca1886189fcfe8->enter($__internal_f029afed810c4a5eb3225e53094df5fc6b2badbe87e163e473ca1886189fcfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a4bb1c6044a59eb4fe73698adb6320cf259d7959150185b759a19a1eae44290d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4bb1c6044a59eb4fe73698adb6320cf259d7959150185b759a19a1eae44290d->enter($__internal_a4bb1c6044a59eb4fe73698adb6320cf259d7959150185b759a19a1eae44290d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a4bb1c6044a59eb4fe73698adb6320cf259d7959150185b759a19a1eae44290d->leave($__internal_a4bb1c6044a59eb4fe73698adb6320cf259d7959150185b759a19a1eae44290d_prof);

        
        $__internal_f029afed810c4a5eb3225e53094df5fc6b2badbe87e163e473ca1886189fcfe8->leave($__internal_f029afed810c4a5eb3225e53094df5fc6b2badbe87e163e473ca1886189fcfe8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b91ffa89d6f83916e88b7dabe1ef8de8606290456ba8b83eaf22a55afd86314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b91ffa89d6f83916e88b7dabe1ef8de8606290456ba8b83eaf22a55afd86314->enter($__internal_8b91ffa89d6f83916e88b7dabe1ef8de8606290456ba8b83eaf22a55afd86314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63fafb5f9836e75e8934422c02b592f95c02a3d87b4e25d1fb6ade30a2e37d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fafb5f9836e75e8934422c02b592f95c02a3d87b4e25d1fb6ade30a2e37d03->enter($__internal_63fafb5f9836e75e8934422c02b592f95c02a3d87b4e25d1fb6ade30a2e37d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_63fafb5f9836e75e8934422c02b592f95c02a3d87b4e25d1fb6ade30a2e37d03->leave($__internal_63fafb5f9836e75e8934422c02b592f95c02a3d87b4e25d1fb6ade30a2e37d03_prof);

        
        $__internal_8b91ffa89d6f83916e88b7dabe1ef8de8606290456ba8b83eaf22a55afd86314->leave($__internal_8b91ffa89d6f83916e88b7dabe1ef8de8606290456ba8b83eaf22a55afd86314_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9f003e85f549668e1d9da41e0e9edc9234ce579873a4cfbe461fbaf431e6200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f003e85f549668e1d9da41e0e9edc9234ce579873a4cfbe461fbaf431e6200->enter($__internal_d9f003e85f549668e1d9da41e0e9edc9234ce579873a4cfbe461fbaf431e6200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e6cd1cd63f5ee5a8cfd3092267221f799283085bd9c4c07b35f85d3c7c2d565f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cd1cd63f5ee5a8cfd3092267221f799283085bd9c4c07b35f85d3c7c2d565f->enter($__internal_e6cd1cd63f5ee5a8cfd3092267221f799283085bd9c4c07b35f85d3c7c2d565f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6cd1cd63f5ee5a8cfd3092267221f799283085bd9c4c07b35f85d3c7c2d565f->leave($__internal_e6cd1cd63f5ee5a8cfd3092267221f799283085bd9c4c07b35f85d3c7c2d565f_prof);

        
        $__internal_d9f003e85f549668e1d9da41e0e9edc9234ce579873a4cfbe461fbaf431e6200->leave($__internal_d9f003e85f549668e1d9da41e0e9edc9234ce579873a4cfbe461fbaf431e6200_prof);

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
