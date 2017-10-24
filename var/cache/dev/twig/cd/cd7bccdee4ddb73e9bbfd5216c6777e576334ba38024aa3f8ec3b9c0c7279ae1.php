<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_38c000028a394b799abdc062809d71556c31c9522fb4a525e4d103f6a08baef8 extends Twig_Template
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
        $__internal_eda791302c6c477359bb07227a1dce8b9cc7f32c6b4320984a2dade4c3044f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda791302c6c477359bb07227a1dce8b9cc7f32c6b4320984a2dade4c3044f5f->enter($__internal_eda791302c6c477359bb07227a1dce8b9cc7f32c6b4320984a2dade4c3044f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8e972c7e634c74302e184cc96eb972408d517e05dbffbe9433668345e0389fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e972c7e634c74302e184cc96eb972408d517e05dbffbe9433668345e0389fcf->enter($__internal_8e972c7e634c74302e184cc96eb972408d517e05dbffbe9433668345e0389fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_eda791302c6c477359bb07227a1dce8b9cc7f32c6b4320984a2dade4c3044f5f->leave($__internal_eda791302c6c477359bb07227a1dce8b9cc7f32c6b4320984a2dade4c3044f5f_prof);

        
        $__internal_8e972c7e634c74302e184cc96eb972408d517e05dbffbe9433668345e0389fcf->leave($__internal_8e972c7e634c74302e184cc96eb972408d517e05dbffbe9433668345e0389fcf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
