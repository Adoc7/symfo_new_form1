<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b937fd958fc9005549f432a159702385f17912c52a4e3f7460789e2028482b05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_280395138ce96fa77e88f47011343746bdb74e49185b642d9b98ef2616f98f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280395138ce96fa77e88f47011343746bdb74e49185b642d9b98ef2616f98f74->enter($__internal_280395138ce96fa77e88f47011343746bdb74e49185b642d9b98ef2616f98f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d4bfa2d85241bed15fb1404db3c4eff6f4523d37450bcb19f4133eb56567e9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bfa2d85241bed15fb1404db3c4eff6f4523d37450bcb19f4133eb56567e9c4->enter($__internal_d4bfa2d85241bed15fb1404db3c4eff6f4523d37450bcb19f4133eb56567e9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_280395138ce96fa77e88f47011343746bdb74e49185b642d9b98ef2616f98f74->leave($__internal_280395138ce96fa77e88f47011343746bdb74e49185b642d9b98ef2616f98f74_prof);

        
        $__internal_d4bfa2d85241bed15fb1404db3c4eff6f4523d37450bcb19f4133eb56567e9c4->leave($__internal_d4bfa2d85241bed15fb1404db3c4eff6f4523d37450bcb19f4133eb56567e9c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_546a17a0b9990e6b01ca0634ee15b75ee43b4e46dd9ad7cb7a2c536e80f90d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546a17a0b9990e6b01ca0634ee15b75ee43b4e46dd9ad7cb7a2c536e80f90d02->enter($__internal_546a17a0b9990e6b01ca0634ee15b75ee43b4e46dd9ad7cb7a2c536e80f90d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a9c251ed94fd06b68df80a108fc9bca660727184062b8f44e41875c5e740fb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c251ed94fd06b68df80a108fc9bca660727184062b8f44e41875c5e740fb23->enter($__internal_a9c251ed94fd06b68df80a108fc9bca660727184062b8f44e41875c5e740fb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a9c251ed94fd06b68df80a108fc9bca660727184062b8f44e41875c5e740fb23->leave($__internal_a9c251ed94fd06b68df80a108fc9bca660727184062b8f44e41875c5e740fb23_prof);

        
        $__internal_546a17a0b9990e6b01ca0634ee15b75ee43b4e46dd9ad7cb7a2c536e80f90d02->leave($__internal_546a17a0b9990e6b01ca0634ee15b75ee43b4e46dd9ad7cb7a2c536e80f90d02_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a5ee0ea026b5b58a411264445124a3b502b63c84cf7017dd3bde51f0472391d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5ee0ea026b5b58a411264445124a3b502b63c84cf7017dd3bde51f0472391d->enter($__internal_2a5ee0ea026b5b58a411264445124a3b502b63c84cf7017dd3bde51f0472391d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d858150923eefe2d9cf4bed353596bc544a6d2bbf83f49a6e18861d722f6df4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d858150923eefe2d9cf4bed353596bc544a6d2bbf83f49a6e18861d722f6df4b->enter($__internal_d858150923eefe2d9cf4bed353596bc544a6d2bbf83f49a6e18861d722f6df4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d858150923eefe2d9cf4bed353596bc544a6d2bbf83f49a6e18861d722f6df4b->leave($__internal_d858150923eefe2d9cf4bed353596bc544a6d2bbf83f49a6e18861d722f6df4b_prof);

        
        $__internal_2a5ee0ea026b5b58a411264445124a3b502b63c84cf7017dd3bde51f0472391d->leave($__internal_2a5ee0ea026b5b58a411264445124a3b502b63c84cf7017dd3bde51f0472391d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aaecc8c20b21b7d9edb4ebb71bf13e502a90d7243f809eee6cbed7fc9f432c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaecc8c20b21b7d9edb4ebb71bf13e502a90d7243f809eee6cbed7fc9f432c3b->enter($__internal_aaecc8c20b21b7d9edb4ebb71bf13e502a90d7243f809eee6cbed7fc9f432c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_928d67b5d4789189afb14779bf89998dbf5a2594ef138d2ce1836377be40d2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928d67b5d4789189afb14779bf89998dbf5a2594ef138d2ce1836377be40d2d3->enter($__internal_928d67b5d4789189afb14779bf89998dbf5a2594ef138d2ce1836377be40d2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_928d67b5d4789189afb14779bf89998dbf5a2594ef138d2ce1836377be40d2d3->leave($__internal_928d67b5d4789189afb14779bf89998dbf5a2594ef138d2ce1836377be40d2d3_prof);

        
        $__internal_aaecc8c20b21b7d9edb4ebb71bf13e502a90d7243f809eee6cbed7fc9f432c3b->leave($__internal_aaecc8c20b21b7d9edb4ebb71bf13e502a90d7243f809eee6cbed7fc9f432c3b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
