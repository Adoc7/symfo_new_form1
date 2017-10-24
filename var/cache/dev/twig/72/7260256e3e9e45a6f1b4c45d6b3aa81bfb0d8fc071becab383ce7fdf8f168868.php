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
        $__internal_4b8bd9da84583077cd3dba0411bce0f94e1c0858bb63f159a1c4c0cad109c94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8bd9da84583077cd3dba0411bce0f94e1c0858bb63f159a1c4c0cad109c94f->enter($__internal_4b8bd9da84583077cd3dba0411bce0f94e1c0858bb63f159a1c4c0cad109c94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_410b76c40a03eca0b4f0726f1c7649d36bba544c96c876141be2e497cee27ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410b76c40a03eca0b4f0726f1c7649d36bba544c96c876141be2e497cee27ce7->enter($__internal_410b76c40a03eca0b4f0726f1c7649d36bba544c96c876141be2e497cee27ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b8bd9da84583077cd3dba0411bce0f94e1c0858bb63f159a1c4c0cad109c94f->leave($__internal_4b8bd9da84583077cd3dba0411bce0f94e1c0858bb63f159a1c4c0cad109c94f_prof);

        
        $__internal_410b76c40a03eca0b4f0726f1c7649d36bba544c96c876141be2e497cee27ce7->leave($__internal_410b76c40a03eca0b4f0726f1c7649d36bba544c96c876141be2e497cee27ce7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d899dd200f6e2bed085fbcbf6c393faf4b12d79cc703e94811189848254b4030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d899dd200f6e2bed085fbcbf6c393faf4b12d79cc703e94811189848254b4030->enter($__internal_d899dd200f6e2bed085fbcbf6c393faf4b12d79cc703e94811189848254b4030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3995a35ef509d961209088bf7f79cb08b0239bd379f91687b5cd52576b5f9b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3995a35ef509d961209088bf7f79cb08b0239bd379f91687b5cd52576b5f9b27->enter($__internal_3995a35ef509d961209088bf7f79cb08b0239bd379f91687b5cd52576b5f9b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3995a35ef509d961209088bf7f79cb08b0239bd379f91687b5cd52576b5f9b27->leave($__internal_3995a35ef509d961209088bf7f79cb08b0239bd379f91687b5cd52576b5f9b27_prof);

        
        $__internal_d899dd200f6e2bed085fbcbf6c393faf4b12d79cc703e94811189848254b4030->leave($__internal_d899dd200f6e2bed085fbcbf6c393faf4b12d79cc703e94811189848254b4030_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4185c44f48ea41a1a9f3dbec52f98fabf663c0ba916c21a5e514d1c429860961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4185c44f48ea41a1a9f3dbec52f98fabf663c0ba916c21a5e514d1c429860961->enter($__internal_4185c44f48ea41a1a9f3dbec52f98fabf663c0ba916c21a5e514d1c429860961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_789278105c9de52248171d65f1722dd0df351d97a12ebb87ec02d2986899a5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789278105c9de52248171d65f1722dd0df351d97a12ebb87ec02d2986899a5da->enter($__internal_789278105c9de52248171d65f1722dd0df351d97a12ebb87ec02d2986899a5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_789278105c9de52248171d65f1722dd0df351d97a12ebb87ec02d2986899a5da->leave($__internal_789278105c9de52248171d65f1722dd0df351d97a12ebb87ec02d2986899a5da_prof);

        
        $__internal_4185c44f48ea41a1a9f3dbec52f98fabf663c0ba916c21a5e514d1c429860961->leave($__internal_4185c44f48ea41a1a9f3dbec52f98fabf663c0ba916c21a5e514d1c429860961_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_29b516c1a6082adb557bcc21c6a2defd9bd28c1709118af1e8ff08f5d0d4f4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b516c1a6082adb557bcc21c6a2defd9bd28c1709118af1e8ff08f5d0d4f4cb->enter($__internal_29b516c1a6082adb557bcc21c6a2defd9bd28c1709118af1e8ff08f5d0d4f4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1b5716300172919582234326c2db8e558bfa0e286677cb171f6a091e4e30b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b5716300172919582234326c2db8e558bfa0e286677cb171f6a091e4e30b7b->enter($__internal_e1b5716300172919582234326c2db8e558bfa0e286677cb171f6a091e4e30b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e1b5716300172919582234326c2db8e558bfa0e286677cb171f6a091e4e30b7b->leave($__internal_e1b5716300172919582234326c2db8e558bfa0e286677cb171f6a091e4e30b7b_prof);

        
        $__internal_29b516c1a6082adb557bcc21c6a2defd9bd28c1709118af1e8ff08f5d0d4f4cb->leave($__internal_29b516c1a6082adb557bcc21c6a2defd9bd28c1709118af1e8ff08f5d0d4f4cb_prof);

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
