<?php

/* :post:new.html.twig */
class __TwigTemplate_bb90db76ce9f93b46631edfa87b6a7efaa0c886dad4da4778d9ff84ccd1be520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6910e4601ff9e14456c8e26f1ee7b63e4b44df857db086fd9b7ca9373f146133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6910e4601ff9e14456c8e26f1ee7b63e4b44df857db086fd9b7ca9373f146133->enter($__internal_6910e4601ff9e14456c8e26f1ee7b63e4b44df857db086fd9b7ca9373f146133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:new.html.twig"));

        $__internal_fef4318563b4eae659caf6ce64351f06bf441ea5b2777dcc1d72b775a9565031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef4318563b4eae659caf6ce64351f06bf441ea5b2777dcc1d72b775a9565031->enter($__internal_fef4318563b4eae659caf6ce64351f06bf441ea5b2777dcc1d72b775a9565031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6910e4601ff9e14456c8e26f1ee7b63e4b44df857db086fd9b7ca9373f146133->leave($__internal_6910e4601ff9e14456c8e26f1ee7b63e4b44df857db086fd9b7ca9373f146133_prof);

        
        $__internal_fef4318563b4eae659caf6ce64351f06bf441ea5b2777dcc1d72b775a9565031->leave($__internal_fef4318563b4eae659caf6ce64351f06bf441ea5b2777dcc1d72b775a9565031_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3077bf284c90609cdb836bef3d99bff512637bbbab79b4e292f74939f43904b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3077bf284c90609cdb836bef3d99bff512637bbbab79b4e292f74939f43904b0->enter($__internal_3077bf284c90609cdb836bef3d99bff512637bbbab79b4e292f74939f43904b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2cc03680899ff2858f940d151c781fed149210a3c798b75fdf173e722640ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2cc03680899ff2858f940d151c781fed149210a3c798b75fdf173e722640ba4->enter($__internal_d2cc03680899ff2858f940d151c781fed149210a3c798b75fdf173e722640ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d2cc03680899ff2858f940d151c781fed149210a3c798b75fdf173e722640ba4->leave($__internal_d2cc03680899ff2858f940d151c781fed149210a3c798b75fdf173e722640ba4_prof);

        
        $__internal_3077bf284c90609cdb836bef3d99bff512637bbbab79b4e292f74939f43904b0->leave($__internal_3077bf284c90609cdb836bef3d99bff512637bbbab79b4e292f74939f43904b0_prof);

    }

    public function getTemplateName()
    {
        return ":post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Post creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":post:new.html.twig", "/var/www/html/symfo_new_form1/app/Resources/views/post/new.html.twig");
    }
}
