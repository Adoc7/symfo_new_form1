<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a83607d0b73077986a7d34d61c13ebb353c393493d592a0a7870e17681872340 extends Twig_Template
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
        $__internal_cf30ab4c6916aa9881d74c674d89ae4976e569ab503a63eafd88cc3b37f31a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf30ab4c6916aa9881d74c674d89ae4976e569ab503a63eafd88cc3b37f31a9c->enter($__internal_cf30ab4c6916aa9881d74c674d89ae4976e569ab503a63eafd88cc3b37f31a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d72717103713089243fe9acec46c15a887dcf5dbe7e188cc3a393b2660ed8f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72717103713089243fe9acec46c15a887dcf5dbe7e188cc3a393b2660ed8f75->enter($__internal_d72717103713089243fe9acec46c15a887dcf5dbe7e188cc3a393b2660ed8f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_cf30ab4c6916aa9881d74c674d89ae4976e569ab503a63eafd88cc3b37f31a9c->leave($__internal_cf30ab4c6916aa9881d74c674d89ae4976e569ab503a63eafd88cc3b37f31a9c_prof);

        
        $__internal_d72717103713089243fe9acec46c15a887dcf5dbe7e188cc3a393b2660ed8f75->leave($__internal_d72717103713089243fe9acec46c15a887dcf5dbe7e188cc3a393b2660ed8f75_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
