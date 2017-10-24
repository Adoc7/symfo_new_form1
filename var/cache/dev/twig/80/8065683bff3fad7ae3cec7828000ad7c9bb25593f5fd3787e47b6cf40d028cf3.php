<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_41e59ab2e5bc67a7bb3ef62a857ff391ef601344c25dd89670f4915b301c932d extends Twig_Template
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
        $__internal_41bbf64275622b1235edcf10e466b4cf17d30529c8c9b419d6c855bf7f522841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41bbf64275622b1235edcf10e466b4cf17d30529c8c9b419d6c855bf7f522841->enter($__internal_41bbf64275622b1235edcf10e466b4cf17d30529c8c9b419d6c855bf7f522841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_8ed8f100b5273c12ed51e9a704dc98f66e129d2f388f11aa340e74ad74dfe8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed8f100b5273c12ed51e9a704dc98f66e129d2f388f11aa340e74ad74dfe8d0->enter($__internal_8ed8f100b5273c12ed51e9a704dc98f66e129d2f388f11aa340e74ad74dfe8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_41bbf64275622b1235edcf10e466b4cf17d30529c8c9b419d6c855bf7f522841->leave($__internal_41bbf64275622b1235edcf10e466b4cf17d30529c8c9b419d6c855bf7f522841_prof);

        
        $__internal_8ed8f100b5273c12ed51e9a704dc98f66e129d2f388f11aa340e74ad74dfe8d0->leave($__internal_8ed8f100b5273c12ed51e9a704dc98f66e129d2f388f11aa340e74ad74dfe8d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
