<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bf4caf6fb5b2427449ea8a7ed07cf85c0048d45bad9643faedf642d6a9f68937 extends Twig_Template
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
        $__internal_5b75be1afb64e32c5495daa986011c6961b3ce473a8da33f6b350a8ce320dbef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b75be1afb64e32c5495daa986011c6961b3ce473a8da33f6b350a8ce320dbef->enter($__internal_5b75be1afb64e32c5495daa986011c6961b3ce473a8da33f6b350a8ce320dbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ecdf25222bdacacbac844675a0f07c492aff5129a472daba964f26e34f76ada5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecdf25222bdacacbac844675a0f07c492aff5129a472daba964f26e34f76ada5->enter($__internal_ecdf25222bdacacbac844675a0f07c492aff5129a472daba964f26e34f76ada5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_5b75be1afb64e32c5495daa986011c6961b3ce473a8da33f6b350a8ce320dbef->leave($__internal_5b75be1afb64e32c5495daa986011c6961b3ce473a8da33f6b350a8ce320dbef_prof);

        
        $__internal_ecdf25222bdacacbac844675a0f07c492aff5129a472daba964f26e34f76ada5->leave($__internal_ecdf25222bdacacbac844675a0f07c492aff5129a472daba964f26e34f76ada5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
