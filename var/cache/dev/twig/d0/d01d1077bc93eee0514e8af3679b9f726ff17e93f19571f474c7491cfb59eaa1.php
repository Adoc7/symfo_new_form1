<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_6c81c0570380311de05a2453a19448c3b770495e77c33ead5c44f89832074169 extends Twig_Template
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
        $__internal_16f235fa91536021c8712be6d898dede278583e417944928c4fb3781a74a7c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f235fa91536021c8712be6d898dede278583e417944928c4fb3781a74a7c82->enter($__internal_16f235fa91536021c8712be6d898dede278583e417944928c4fb3781a74a7c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_63024c1e8d7afe3d32f79c35b009f686d5afce1cb65e924bd493045614e24b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63024c1e8d7afe3d32f79c35b009f686d5afce1cb65e924bd493045614e24b0b->enter($__internal_63024c1e8d7afe3d32f79c35b009f686d5afce1cb65e924bd493045614e24b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_16f235fa91536021c8712be6d898dede278583e417944928c4fb3781a74a7c82->leave($__internal_16f235fa91536021c8712be6d898dede278583e417944928c4fb3781a74a7c82_prof);

        
        $__internal_63024c1e8d7afe3d32f79c35b009f686d5afce1cb65e924bd493045614e24b0b->leave($__internal_63024c1e8d7afe3d32f79c35b009f686d5afce1cb65e924bd493045614e24b0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
