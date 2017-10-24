<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9a40f3a04203b6063308291c92f50f43b4cdddb18ffcf3f0e6ce2d43be9d5201 extends Twig_Template
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
        $__internal_215c086d931d46c667031231d8d7c4a12275f477d010d8a40d16be258f372bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215c086d931d46c667031231d8d7c4a12275f477d010d8a40d16be258f372bcb->enter($__internal_215c086d931d46c667031231d8d7c4a12275f477d010d8a40d16be258f372bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_88e8f2143e14c942cfb23d6111840dd769eba96e43da61eff721642542fb81d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e8f2143e14c942cfb23d6111840dd769eba96e43da61eff721642542fb81d1->enter($__internal_88e8f2143e14c942cfb23d6111840dd769eba96e43da61eff721642542fb81d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_215c086d931d46c667031231d8d7c4a12275f477d010d8a40d16be258f372bcb->leave($__internal_215c086d931d46c667031231d8d7c4a12275f477d010d8a40d16be258f372bcb_prof);

        
        $__internal_88e8f2143e14c942cfb23d6111840dd769eba96e43da61eff721642542fb81d1->leave($__internal_88e8f2143e14c942cfb23d6111840dd769eba96e43da61eff721642542fb81d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
