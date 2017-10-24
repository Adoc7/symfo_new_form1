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
        $__internal_0fb68db77e332632e9e0350bc20d058b4baec63eb2060c9dd0001b3d9c7ce46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb68db77e332632e9e0350bc20d058b4baec63eb2060c9dd0001b3d9c7ce46c->enter($__internal_0fb68db77e332632e9e0350bc20d058b4baec63eb2060c9dd0001b3d9c7ce46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_8309ba654d4e397b8680486e59966fb742066a1f05deb822d5235c4e17ef3229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8309ba654d4e397b8680486e59966fb742066a1f05deb822d5235c4e17ef3229->enter($__internal_8309ba654d4e397b8680486e59966fb742066a1f05deb822d5235c4e17ef3229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_0fb68db77e332632e9e0350bc20d058b4baec63eb2060c9dd0001b3d9c7ce46c->leave($__internal_0fb68db77e332632e9e0350bc20d058b4baec63eb2060c9dd0001b3d9c7ce46c_prof);

        
        $__internal_8309ba654d4e397b8680486e59966fb742066a1f05deb822d5235c4e17ef3229->leave($__internal_8309ba654d4e397b8680486e59966fb742066a1f05deb822d5235c4e17ef3229_prof);

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
