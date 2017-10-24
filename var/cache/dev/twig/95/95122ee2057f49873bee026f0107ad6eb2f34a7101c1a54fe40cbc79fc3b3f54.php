<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1a1dd4cafb5c6ab3c2c91677a17810a024f7cd12ceead1a6505b5275de350484 extends Twig_Template
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
        $__internal_c181e71d33c65a4a4c0dd57d975b6e79140a52919c0cc0cf80ba4d0753fd0622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c181e71d33c65a4a4c0dd57d975b6e79140a52919c0cc0cf80ba4d0753fd0622->enter($__internal_c181e71d33c65a4a4c0dd57d975b6e79140a52919c0cc0cf80ba4d0753fd0622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_4da6b1dcc596df385990c446e7efb7b52b9df4ab1cc5d7cbbc2d6d55d446e193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da6b1dcc596df385990c446e7efb7b52b9df4ab1cc5d7cbbc2d6d55d446e193->enter($__internal_4da6b1dcc596df385990c446e7efb7b52b9df4ab1cc5d7cbbc2d6d55d446e193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c181e71d33c65a4a4c0dd57d975b6e79140a52919c0cc0cf80ba4d0753fd0622->leave($__internal_c181e71d33c65a4a4c0dd57d975b6e79140a52919c0cc0cf80ba4d0753fd0622_prof);

        
        $__internal_4da6b1dcc596df385990c446e7efb7b52b9df4ab1cc5d7cbbc2d6d55d446e193->leave($__internal_4da6b1dcc596df385990c446e7efb7b52b9df4ab1cc5d7cbbc2d6d55d446e193_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
