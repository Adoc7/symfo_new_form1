<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_38c000028a394b799abdc062809d71556c31c9522fb4a525e4d103f6a08baef8 extends Twig_Template
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
        $__internal_455e3bbe50d00ada96b1c4b0b5899ee422265e57453c309330a6ce84143e21d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455e3bbe50d00ada96b1c4b0b5899ee422265e57453c309330a6ce84143e21d1->enter($__internal_455e3bbe50d00ada96b1c4b0b5899ee422265e57453c309330a6ce84143e21d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_3fd5c46702a7f94ff2fd530e64971374580b31eb7e51ef08c5be451168fca8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd5c46702a7f94ff2fd530e64971374580b31eb7e51ef08c5be451168fca8a9->enter($__internal_3fd5c46702a7f94ff2fd530e64971374580b31eb7e51ef08c5be451168fca8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_455e3bbe50d00ada96b1c4b0b5899ee422265e57453c309330a6ce84143e21d1->leave($__internal_455e3bbe50d00ada96b1c4b0b5899ee422265e57453c309330a6ce84143e21d1_prof);

        
        $__internal_3fd5c46702a7f94ff2fd530e64971374580b31eb7e51ef08c5be451168fca8a9->leave($__internal_3fd5c46702a7f94ff2fd530e64971374580b31eb7e51ef08c5be451168fca8a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
