<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_12405baa1c91a3e5e8a62c0b268e469da3e32a627dd5fc4f08b56edd5feace71 extends Twig_Template
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
        $__internal_457314b0fcfdb2a8712b40d09797fd0e499fd032719b0704b494fcfa02e74398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457314b0fcfdb2a8712b40d09797fd0e499fd032719b0704b494fcfa02e74398->enter($__internal_457314b0fcfdb2a8712b40d09797fd0e499fd032719b0704b494fcfa02e74398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_47009769246ee5048fd6f239285f681fbb58b01389db1d19a3ea5f89dca51654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47009769246ee5048fd6f239285f681fbb58b01389db1d19a3ea5f89dca51654->enter($__internal_47009769246ee5048fd6f239285f681fbb58b01389db1d19a3ea5f89dca51654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_457314b0fcfdb2a8712b40d09797fd0e499fd032719b0704b494fcfa02e74398->leave($__internal_457314b0fcfdb2a8712b40d09797fd0e499fd032719b0704b494fcfa02e74398_prof);

        
        $__internal_47009769246ee5048fd6f239285f681fbb58b01389db1d19a3ea5f89dca51654->leave($__internal_47009769246ee5048fd6f239285f681fbb58b01389db1d19a3ea5f89dca51654_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
