<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_28b8cca30292bdae82266ccbf400f52298705007138c529e5bef6a22c2a45d73 extends Twig_Template
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
        $__internal_70050ee8580d658a2e5175c45e00c96a96a40a9cac8d568756356a52af16f331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70050ee8580d658a2e5175c45e00c96a96a40a9cac8d568756356a52af16f331->enter($__internal_70050ee8580d658a2e5175c45e00c96a96a40a9cac8d568756356a52af16f331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_e473c2aa34991c95d55953e8d7e71f06c148435a4cf808a80f17078e73aca5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e473c2aa34991c95d55953e8d7e71f06c148435a4cf808a80f17078e73aca5ac->enter($__internal_e473c2aa34991c95d55953e8d7e71f06c148435a4cf808a80f17078e73aca5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_70050ee8580d658a2e5175c45e00c96a96a40a9cac8d568756356a52af16f331->leave($__internal_70050ee8580d658a2e5175c45e00c96a96a40a9cac8d568756356a52af16f331_prof);

        
        $__internal_e473c2aa34991c95d55953e8d7e71f06c148435a4cf808a80f17078e73aca5ac->leave($__internal_e473c2aa34991c95d55953e8d7e71f06c148435a4cf808a80f17078e73aca5ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
