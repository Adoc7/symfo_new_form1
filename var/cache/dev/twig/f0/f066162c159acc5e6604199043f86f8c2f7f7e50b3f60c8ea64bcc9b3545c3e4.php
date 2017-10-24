<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_83b42497293ffb8f09c55fe5484162e6c81c7b17e3d14b356c9b60157fa91263 extends Twig_Template
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
        $__internal_823c404888af87f5815634b80155c93ad448749bf2039de5ae5aa4ba1660a54b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823c404888af87f5815634b80155c93ad448749bf2039de5ae5aa4ba1660a54b->enter($__internal_823c404888af87f5815634b80155c93ad448749bf2039de5ae5aa4ba1660a54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_8acf0c867018239cc8de4c761b52ea1fd6fc108320acbf62100cb037f2939d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8acf0c867018239cc8de4c761b52ea1fd6fc108320acbf62100cb037f2939d81->enter($__internal_8acf0c867018239cc8de4c761b52ea1fd6fc108320acbf62100cb037f2939d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_823c404888af87f5815634b80155c93ad448749bf2039de5ae5aa4ba1660a54b->leave($__internal_823c404888af87f5815634b80155c93ad448749bf2039de5ae5aa4ba1660a54b_prof);

        
        $__internal_8acf0c867018239cc8de4c761b52ea1fd6fc108320acbf62100cb037f2939d81->leave($__internal_8acf0c867018239cc8de4c761b52ea1fd6fc108320acbf62100cb037f2939d81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
