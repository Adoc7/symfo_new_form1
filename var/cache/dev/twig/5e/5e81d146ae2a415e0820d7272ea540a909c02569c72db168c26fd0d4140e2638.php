<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_91c175485fd7484bf2f405dbf8a472bf18c0f3817c23e7838863cbdfb4d88c51 extends Twig_Template
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
        $__internal_504a23f749d5dc2ab2d61abda2fdf409bb535a01037b718dc540038adf1d0de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504a23f749d5dc2ab2d61abda2fdf409bb535a01037b718dc540038adf1d0de7->enter($__internal_504a23f749d5dc2ab2d61abda2fdf409bb535a01037b718dc540038adf1d0de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_0e81765845b1a3bcb6d62d863e51ccd7bf3a0c4cc61493128d6467b7187769cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e81765845b1a3bcb6d62d863e51ccd7bf3a0c4cc61493128d6467b7187769cd->enter($__internal_0e81765845b1a3bcb6d62d863e51ccd7bf3a0c4cc61493128d6467b7187769cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_504a23f749d5dc2ab2d61abda2fdf409bb535a01037b718dc540038adf1d0de7->leave($__internal_504a23f749d5dc2ab2d61abda2fdf409bb535a01037b718dc540038adf1d0de7_prof);

        
        $__internal_0e81765845b1a3bcb6d62d863e51ccd7bf3a0c4cc61493128d6467b7187769cd->leave($__internal_0e81765845b1a3bcb6d62d863e51ccd7bf3a0c4cc61493128d6467b7187769cd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
