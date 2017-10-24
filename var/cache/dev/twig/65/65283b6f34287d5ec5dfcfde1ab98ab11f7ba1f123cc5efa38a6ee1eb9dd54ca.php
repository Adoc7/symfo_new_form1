<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_d00de2bf7d350911fd48abc080cfa6156ffc28f0ca46b1fc21f1c48dff710640 extends Twig_Template
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
        $__internal_d8f5fba3b8e99f6a0458619400e3c7e0ec803e50a81f4edb3eeb33dc43fdb501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f5fba3b8e99f6a0458619400e3c7e0ec803e50a81f4edb3eeb33dc43fdb501->enter($__internal_d8f5fba3b8e99f6a0458619400e3c7e0ec803e50a81f4edb3eeb33dc43fdb501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_d6688f51125eb04d59f93e710ae0cebcb48acad5ff7cec4297fed7ccdfa764ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6688f51125eb04d59f93e710ae0cebcb48acad5ff7cec4297fed7ccdfa764ac->enter($__internal_d6688f51125eb04d59f93e710ae0cebcb48acad5ff7cec4297fed7ccdfa764ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_d8f5fba3b8e99f6a0458619400e3c7e0ec803e50a81f4edb3eeb33dc43fdb501->leave($__internal_d8f5fba3b8e99f6a0458619400e3c7e0ec803e50a81f4edb3eeb33dc43fdb501_prof);

        
        $__internal_d6688f51125eb04d59f93e710ae0cebcb48acad5ff7cec4297fed7ccdfa764ac->leave($__internal_d6688f51125eb04d59f93e710ae0cebcb48acad5ff7cec4297fed7ccdfa764ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
