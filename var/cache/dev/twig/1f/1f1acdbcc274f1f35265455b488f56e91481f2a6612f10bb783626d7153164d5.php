<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bf4caf6fb5b2427449ea8a7ed07cf85c0048d45bad9643faedf642d6a9f68937 extends Twig_Template
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
        $__internal_fc4ecfb74831fc06971134fd12e83bf3ffad13a4312e3ebb4058d89ad829508c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4ecfb74831fc06971134fd12e83bf3ffad13a4312e3ebb4058d89ad829508c->enter($__internal_fc4ecfb74831fc06971134fd12e83bf3ffad13a4312e3ebb4058d89ad829508c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_6cb00a47d1872e9614f5470b3aca64f41c2cd9c09d8c3f038a9df6e883f2bac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb00a47d1872e9614f5470b3aca64f41c2cd9c09d8c3f038a9df6e883f2bac2->enter($__internal_6cb00a47d1872e9614f5470b3aca64f41c2cd9c09d8c3f038a9df6e883f2bac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_fc4ecfb74831fc06971134fd12e83bf3ffad13a4312e3ebb4058d89ad829508c->leave($__internal_fc4ecfb74831fc06971134fd12e83bf3ffad13a4312e3ebb4058d89ad829508c_prof);

        
        $__internal_6cb00a47d1872e9614f5470b3aca64f41c2cd9c09d8c3f038a9df6e883f2bac2->leave($__internal_6cb00a47d1872e9614f5470b3aca64f41c2cd9c09d8c3f038a9df6e883f2bac2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
