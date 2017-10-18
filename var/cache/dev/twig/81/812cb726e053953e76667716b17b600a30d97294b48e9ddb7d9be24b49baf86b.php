<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b243cb04c76cf9dd57219274965dbfdc2d1dd0485274d7cfe27638a46fa8544f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ea539cfb2d13d5815df6e33539296fc50643179807940fa8dc0de8e10243a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea539cfb2d13d5815df6e33539296fc50643179807940fa8dc0de8e10243a7d->enter($__internal_7ea539cfb2d13d5815df6e33539296fc50643179807940fa8dc0de8e10243a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0662ac406a162c0012f74ddbe0f8d6b0ba013861f152dba022a3e96964657458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0662ac406a162c0012f74ddbe0f8d6b0ba013861f152dba022a3e96964657458->enter($__internal_0662ac406a162c0012f74ddbe0f8d6b0ba013861f152dba022a3e96964657458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ea539cfb2d13d5815df6e33539296fc50643179807940fa8dc0de8e10243a7d->leave($__internal_7ea539cfb2d13d5815df6e33539296fc50643179807940fa8dc0de8e10243a7d_prof);

        
        $__internal_0662ac406a162c0012f74ddbe0f8d6b0ba013861f152dba022a3e96964657458->leave($__internal_0662ac406a162c0012f74ddbe0f8d6b0ba013861f152dba022a3e96964657458_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6be406f3aa50a1bd5f3fbce294f961341742ce071b93af10017e5118c4f1aaf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be406f3aa50a1bd5f3fbce294f961341742ce071b93af10017e5118c4f1aaf4->enter($__internal_6be406f3aa50a1bd5f3fbce294f961341742ce071b93af10017e5118c4f1aaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9e311cddb9db22c3e1f442e014d96dba9cb3ea306a4846602f15c26df6ca23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e311cddb9db22c3e1f442e014d96dba9cb3ea306a4846602f15c26df6ca23d->enter($__internal_c9e311cddb9db22c3e1f442e014d96dba9cb3ea306a4846602f15c26df6ca23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c9e311cddb9db22c3e1f442e014d96dba9cb3ea306a4846602f15c26df6ca23d->leave($__internal_c9e311cddb9db22c3e1f442e014d96dba9cb3ea306a4846602f15c26df6ca23d_prof);

        
        $__internal_6be406f3aa50a1bd5f3fbce294f961341742ce071b93af10017e5118c4f1aaf4->leave($__internal_6be406f3aa50a1bd5f3fbce294f961341742ce071b93af10017e5118c4f1aaf4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_801fe0e7689a7e09b29b412c93f99b3534d569579f1324349ed371ed26a25ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801fe0e7689a7e09b29b412c93f99b3534d569579f1324349ed371ed26a25ad3->enter($__internal_801fe0e7689a7e09b29b412c93f99b3534d569579f1324349ed371ed26a25ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbfce76cefe4163ccbe6c76316d1f7d688e4d412fe94f1695f9eda1767a0dd62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbfce76cefe4163ccbe6c76316d1f7d688e4d412fe94f1695f9eda1767a0dd62->enter($__internal_bbfce76cefe4163ccbe6c76316d1f7d688e4d412fe94f1695f9eda1767a0dd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_bbfce76cefe4163ccbe6c76316d1f7d688e4d412fe94f1695f9eda1767a0dd62->leave($__internal_bbfce76cefe4163ccbe6c76316d1f7d688e4d412fe94f1695f9eda1767a0dd62_prof);

        
        $__internal_801fe0e7689a7e09b29b412c93f99b3534d569579f1324349ed371ed26a25ad3->leave($__internal_801fe0e7689a7e09b29b412c93f99b3534d569579f1324349ed371ed26a25ad3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
