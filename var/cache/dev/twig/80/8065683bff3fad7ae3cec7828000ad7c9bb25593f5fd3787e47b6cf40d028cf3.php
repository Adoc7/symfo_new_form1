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
        $__internal_e0fa964f7c8cbbd6e8bff3a12733b2aa25724a2107ae10ad81887040ca1cf8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0fa964f7c8cbbd6e8bff3a12733b2aa25724a2107ae10ad81887040ca1cf8fc->enter($__internal_e0fa964f7c8cbbd6e8bff3a12733b2aa25724a2107ae10ad81887040ca1cf8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ac856bc9e5750a6d4b8f1c9cdbe9d75e8d85db9a81266f9e03c8cb989ddd11f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac856bc9e5750a6d4b8f1c9cdbe9d75e8d85db9a81266f9e03c8cb989ddd11f6->enter($__internal_ac856bc9e5750a6d4b8f1c9cdbe9d75e8d85db9a81266f9e03c8cb989ddd11f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_e0fa964f7c8cbbd6e8bff3a12733b2aa25724a2107ae10ad81887040ca1cf8fc->leave($__internal_e0fa964f7c8cbbd6e8bff3a12733b2aa25724a2107ae10ad81887040ca1cf8fc_prof);

        
        $__internal_ac856bc9e5750a6d4b8f1c9cdbe9d75e8d85db9a81266f9e03c8cb989ddd11f6->leave($__internal_ac856bc9e5750a6d4b8f1c9cdbe9d75e8d85db9a81266f9e03c8cb989ddd11f6_prof);

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
