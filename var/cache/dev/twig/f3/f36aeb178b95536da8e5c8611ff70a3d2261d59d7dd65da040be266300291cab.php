<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_681ed2b637a65ed221bf24c4b2fd0e21d95e03564947b3324b00cdb45426b015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9e6779e84895eb749c5bf1b33815a441221c3c0dfc788bff30193a263a18b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e6779e84895eb749c5bf1b33815a441221c3c0dfc788bff30193a263a18b5f->enter($__internal_d9e6779e84895eb749c5bf1b33815a441221c3c0dfc788bff30193a263a18b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_b0f60814b980db7d37de1270a6eacbb83541688dcc37dbf3645237ee24f195d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f60814b980db7d37de1270a6eacbb83541688dcc37dbf3645237ee24f195d6->enter($__internal_b0f60814b980db7d37de1270a6eacbb83541688dcc37dbf3645237ee24f195d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d9e6779e84895eb749c5bf1b33815a441221c3c0dfc788bff30193a263a18b5f->leave($__internal_d9e6779e84895eb749c5bf1b33815a441221c3c0dfc788bff30193a263a18b5f_prof);

        
        $__internal_b0f60814b980db7d37de1270a6eacbb83541688dcc37dbf3645237ee24f195d6->leave($__internal_b0f60814b980db7d37de1270a6eacbb83541688dcc37dbf3645237ee24f195d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
