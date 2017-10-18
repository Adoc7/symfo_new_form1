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
        $__internal_4c0e2e89200fee3a5b66e8e16a055fbd96210e89634d9401bacd8794054c152f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c0e2e89200fee3a5b66e8e16a055fbd96210e89634d9401bacd8794054c152f->enter($__internal_4c0e2e89200fee3a5b66e8e16a055fbd96210e89634d9401bacd8794054c152f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c0416996372b0ca1c2974083f81758cac1ce5a24755770ea8a247d112820c0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0416996372b0ca1c2974083f81758cac1ce5a24755770ea8a247d112820c0c6->enter($__internal_c0416996372b0ca1c2974083f81758cac1ce5a24755770ea8a247d112820c0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_4c0e2e89200fee3a5b66e8e16a055fbd96210e89634d9401bacd8794054c152f->leave($__internal_4c0e2e89200fee3a5b66e8e16a055fbd96210e89634d9401bacd8794054c152f_prof);

        
        $__internal_c0416996372b0ca1c2974083f81758cac1ce5a24755770ea8a247d112820c0c6->leave($__internal_c0416996372b0ca1c2974083f81758cac1ce5a24755770ea8a247d112820c0c6_prof);

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
