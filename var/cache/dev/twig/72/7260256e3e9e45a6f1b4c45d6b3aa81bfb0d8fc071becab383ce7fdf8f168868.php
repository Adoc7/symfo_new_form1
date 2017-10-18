<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_270bb51c46f5ac264363953e6db9441ba64165e49c506f10792c7ac33f8ba982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_610c0fa100bdc743bb4c9298c378dd98408b8668a0ee1fc5b4f276cf9e3b8e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610c0fa100bdc743bb4c9298c378dd98408b8668a0ee1fc5b4f276cf9e3b8e5f->enter($__internal_610c0fa100bdc743bb4c9298c378dd98408b8668a0ee1fc5b4f276cf9e3b8e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_5031660330daad4b1a86f1462c218aa31bfededd2bfc8cee43b4a4b7a26d2a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5031660330daad4b1a86f1462c218aa31bfededd2bfc8cee43b4a4b7a26d2a47->enter($__internal_5031660330daad4b1a86f1462c218aa31bfededd2bfc8cee43b4a4b7a26d2a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_610c0fa100bdc743bb4c9298c378dd98408b8668a0ee1fc5b4f276cf9e3b8e5f->leave($__internal_610c0fa100bdc743bb4c9298c378dd98408b8668a0ee1fc5b4f276cf9e3b8e5f_prof);

        
        $__internal_5031660330daad4b1a86f1462c218aa31bfededd2bfc8cee43b4a4b7a26d2a47->leave($__internal_5031660330daad4b1a86f1462c218aa31bfededd2bfc8cee43b4a4b7a26d2a47_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80a11f08aee8bbfd4eda0c45b0af76119f9802a4e88532d04a425a16a6a4c3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a11f08aee8bbfd4eda0c45b0af76119f9802a4e88532d04a425a16a6a4c3ca->enter($__internal_80a11f08aee8bbfd4eda0c45b0af76119f9802a4e88532d04a425a16a6a4c3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8e47e1f6ea8767061c85c09761822a4f4a985ab17c1d9754c690a8855585438a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e47e1f6ea8767061c85c09761822a4f4a985ab17c1d9754c690a8855585438a->enter($__internal_8e47e1f6ea8767061c85c09761822a4f4a985ab17c1d9754c690a8855585438a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8e47e1f6ea8767061c85c09761822a4f4a985ab17c1d9754c690a8855585438a->leave($__internal_8e47e1f6ea8767061c85c09761822a4f4a985ab17c1d9754c690a8855585438a_prof);

        
        $__internal_80a11f08aee8bbfd4eda0c45b0af76119f9802a4e88532d04a425a16a6a4c3ca->leave($__internal_80a11f08aee8bbfd4eda0c45b0af76119f9802a4e88532d04a425a16a6a4c3ca_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f88b69375de7b1ceb9bc59bb282d4562b52d8bd39e00098a31fb8e70af1d726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f88b69375de7b1ceb9bc59bb282d4562b52d8bd39e00098a31fb8e70af1d726->enter($__internal_6f88b69375de7b1ceb9bc59bb282d4562b52d8bd39e00098a31fb8e70af1d726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb6c550571254cddae9d1f1e1e03294f5723baa50491515602499874ed30ee06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6c550571254cddae9d1f1e1e03294f5723baa50491515602499874ed30ee06->enter($__internal_eb6c550571254cddae9d1f1e1e03294f5723baa50491515602499874ed30ee06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eb6c550571254cddae9d1f1e1e03294f5723baa50491515602499874ed30ee06->leave($__internal_eb6c550571254cddae9d1f1e1e03294f5723baa50491515602499874ed30ee06_prof);

        
        $__internal_6f88b69375de7b1ceb9bc59bb282d4562b52d8bd39e00098a31fb8e70af1d726->leave($__internal_6f88b69375de7b1ceb9bc59bb282d4562b52d8bd39e00098a31fb8e70af1d726_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_48cbd609d10a542700d6939f7a01bdd6ed146efe4679a8e4a4ce1f3e77757b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48cbd609d10a542700d6939f7a01bdd6ed146efe4679a8e4a4ce1f3e77757b26->enter($__internal_48cbd609d10a542700d6939f7a01bdd6ed146efe4679a8e4a4ce1f3e77757b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_879c480524e797a11bfc42a7fa4bd88705fd3ba647ce9d1534d5241f4a7ea5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879c480524e797a11bfc42a7fa4bd88705fd3ba647ce9d1534d5241f4a7ea5da->enter($__internal_879c480524e797a11bfc42a7fa4bd88705fd3ba647ce9d1534d5241f4a7ea5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_879c480524e797a11bfc42a7fa4bd88705fd3ba647ce9d1534d5241f4a7ea5da->leave($__internal_879c480524e797a11bfc42a7fa4bd88705fd3ba647ce9d1534d5241f4a7ea5da_prof);

        
        $__internal_48cbd609d10a542700d6939f7a01bdd6ed146efe4679a8e4a4ce1f3e77757b26->leave($__internal_48cbd609d10a542700d6939f7a01bdd6ed146efe4679a8e4a4ce1f3e77757b26_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
