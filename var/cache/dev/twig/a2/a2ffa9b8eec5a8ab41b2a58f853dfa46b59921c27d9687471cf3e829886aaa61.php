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
        $__internal_459f07fffcbcdec21e80f288838309a749e4132a3bcf8723d287ec65875a82b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459f07fffcbcdec21e80f288838309a749e4132a3bcf8723d287ec65875a82b6->enter($__internal_459f07fffcbcdec21e80f288838309a749e4132a3bcf8723d287ec65875a82b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_88937b5e053e2d102819a2ab20da0de061e2b8fef70b30dced0a18e2bb169946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88937b5e053e2d102819a2ab20da0de061e2b8fef70b30dced0a18e2bb169946->enter($__internal_88937b5e053e2d102819a2ab20da0de061e2b8fef70b30dced0a18e2bb169946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_459f07fffcbcdec21e80f288838309a749e4132a3bcf8723d287ec65875a82b6->leave($__internal_459f07fffcbcdec21e80f288838309a749e4132a3bcf8723d287ec65875a82b6_prof);

        
        $__internal_88937b5e053e2d102819a2ab20da0de061e2b8fef70b30dced0a18e2bb169946->leave($__internal_88937b5e053e2d102819a2ab20da0de061e2b8fef70b30dced0a18e2bb169946_prof);

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
