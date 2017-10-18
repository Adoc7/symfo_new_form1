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
        $__internal_c7597dc3585951d5ce911d8ea6a961539a3f67886f72bb8a39b5a4d3b30acebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7597dc3585951d5ce911d8ea6a961539a3f67886f72bb8a39b5a4d3b30acebc->enter($__internal_c7597dc3585951d5ce911d8ea6a961539a3f67886f72bb8a39b5a4d3b30acebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_8430803ca4343f2984e51d764f52f7128cf196d771f6e6ea91a58e58d1939de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8430803ca4343f2984e51d764f52f7128cf196d771f6e6ea91a58e58d1939de8->enter($__internal_8430803ca4343f2984e51d764f52f7128cf196d771f6e6ea91a58e58d1939de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_c7597dc3585951d5ce911d8ea6a961539a3f67886f72bb8a39b5a4d3b30acebc->leave($__internal_c7597dc3585951d5ce911d8ea6a961539a3f67886f72bb8a39b5a4d3b30acebc_prof);

        
        $__internal_8430803ca4343f2984e51d764f52f7128cf196d771f6e6ea91a58e58d1939de8->leave($__internal_8430803ca4343f2984e51d764f52f7128cf196d771f6e6ea91a58e58d1939de8_prof);

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
