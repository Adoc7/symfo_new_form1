<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_809fb4fb97fe13e985049565ccaf856e0c5543b88f21e7f6a763d1d143a2590c extends Twig_Template
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
        $__internal_887ce3cda2e1d7391100c9f7dd06c6cddb2b9669d23247a354489afd356d6762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887ce3cda2e1d7391100c9f7dd06c6cddb2b9669d23247a354489afd356d6762->enter($__internal_887ce3cda2e1d7391100c9f7dd06c6cddb2b9669d23247a354489afd356d6762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        $__internal_807d126d5b32416882cf32c18be32c947fb48490282ed384b9605d47b26bab49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807d126d5b32416882cf32c18be32c947fb48490282ed384b9605d47b26bab49->enter($__internal_807d126d5b32416882cf32c18be32c947fb48490282ed384b9605d47b26bab49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo ((((($context["status_code"] ?? $this->getContext($context, "status_code")) . " | ") . ($context["status_text"] ?? $this->getContext($context, "status_text"))) . " | ") . $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()));
        echo "
[message] ";
        // line 2
        echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo $this->getAttribute($context["e"], "class", array());
            echo ": ";
            echo $this->getAttribute($context["e"], "message", array());
            echo "
";
            // line 5
            echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => $context["e"]), false);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_887ce3cda2e1d7391100c9f7dd06c6cddb2b9669d23247a354489afd356d6762->leave($__internal_887ce3cda2e1d7391100c9f7dd06c6cddb2b9669d23247a354489afd356d6762_prof);

        
        $__internal_807d126d5b32416882cf32c18be32c947fb48490282ed384b9605d47b26bab49->leave($__internal_807d126d5b32416882cf32c18be32c947fb48490282ed384b9605d47b26bab49_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  38 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{{ include('@Twig/Exception/traces.txt.twig', { exception: e }, with_context = false) }}

{% endfor %}
", "TwigBundle:Exception:exception.txt.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.txt.twig");
    }
}
