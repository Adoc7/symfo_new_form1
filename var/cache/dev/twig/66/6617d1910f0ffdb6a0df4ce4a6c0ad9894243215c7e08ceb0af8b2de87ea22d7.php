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
        $__internal_f494769d655137035e3432d72b7f2210fbb83319135dfe1ab254b221abc8545e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f494769d655137035e3432d72b7f2210fbb83319135dfe1ab254b221abc8545e->enter($__internal_f494769d655137035e3432d72b7f2210fbb83319135dfe1ab254b221abc8545e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_7478d1f88130d99834458603ea467518d6f3f2dbad432c8b43fee24a05d513e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7478d1f88130d99834458603ea467518d6f3f2dbad432c8b43fee24a05d513e6->enter($__internal_7478d1f88130d99834458603ea467518d6f3f2dbad432c8b43fee24a05d513e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f494769d655137035e3432d72b7f2210fbb83319135dfe1ab254b221abc8545e->leave($__internal_f494769d655137035e3432d72b7f2210fbb83319135dfe1ab254b221abc8545e_prof);

        
        $__internal_7478d1f88130d99834458603ea467518d6f3f2dbad432c8b43fee24a05d513e6->leave($__internal_7478d1f88130d99834458603ea467518d6f3f2dbad432c8b43fee24a05d513e6_prof);

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
