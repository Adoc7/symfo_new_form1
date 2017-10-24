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
        $__internal_f8b1938d89efcd499b68804d83a046e8afbe573cf160df397b7774b15637d258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b1938d89efcd499b68804d83a046e8afbe573cf160df397b7774b15637d258->enter($__internal_f8b1938d89efcd499b68804d83a046e8afbe573cf160df397b7774b15637d258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f9eb8c4a4e69312c494740a309c7c34d4cc67c68e6055f76917b7dc52fd44c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9eb8c4a4e69312c494740a309c7c34d4cc67c68e6055f76917b7dc52fd44c6d->enter($__internal_f9eb8c4a4e69312c494740a309c7c34d4cc67c68e6055f76917b7dc52fd44c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8b1938d89efcd499b68804d83a046e8afbe573cf160df397b7774b15637d258->leave($__internal_f8b1938d89efcd499b68804d83a046e8afbe573cf160df397b7774b15637d258_prof);

        
        $__internal_f9eb8c4a4e69312c494740a309c7c34d4cc67c68e6055f76917b7dc52fd44c6d->leave($__internal_f9eb8c4a4e69312c494740a309c7c34d4cc67c68e6055f76917b7dc52fd44c6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1afdce7f8e72b17e0bd576ad16290e98c32efcebc7351c59a8b0e6887867f650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1afdce7f8e72b17e0bd576ad16290e98c32efcebc7351c59a8b0e6887867f650->enter($__internal_1afdce7f8e72b17e0bd576ad16290e98c32efcebc7351c59a8b0e6887867f650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6b20a12d6304ed6bc0d79d0758d4356acb00cdaec7424b1def0a37f11e3781a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b20a12d6304ed6bc0d79d0758d4356acb00cdaec7424b1def0a37f11e3781a->enter($__internal_f6b20a12d6304ed6bc0d79d0758d4356acb00cdaec7424b1def0a37f11e3781a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f6b20a12d6304ed6bc0d79d0758d4356acb00cdaec7424b1def0a37f11e3781a->leave($__internal_f6b20a12d6304ed6bc0d79d0758d4356acb00cdaec7424b1def0a37f11e3781a_prof);

        
        $__internal_1afdce7f8e72b17e0bd576ad16290e98c32efcebc7351c59a8b0e6887867f650->leave($__internal_1afdce7f8e72b17e0bd576ad16290e98c32efcebc7351c59a8b0e6887867f650_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec723f7263d638ec20770ac599b74aa5eb3818f37f16d912c2a76b5e5969fe23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec723f7263d638ec20770ac599b74aa5eb3818f37f16d912c2a76b5e5969fe23->enter($__internal_ec723f7263d638ec20770ac599b74aa5eb3818f37f16d912c2a76b5e5969fe23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6d76055ac3d8a59f7e19d19be11db3e53f9cc873ec06829abaf47f2b0adb2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d76055ac3d8a59f7e19d19be11db3e53f9cc873ec06829abaf47f2b0adb2d5->enter($__internal_e6d76055ac3d8a59f7e19d19be11db3e53f9cc873ec06829abaf47f2b0adb2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e6d76055ac3d8a59f7e19d19be11db3e53f9cc873ec06829abaf47f2b0adb2d5->leave($__internal_e6d76055ac3d8a59f7e19d19be11db3e53f9cc873ec06829abaf47f2b0adb2d5_prof);

        
        $__internal_ec723f7263d638ec20770ac599b74aa5eb3818f37f16d912c2a76b5e5969fe23->leave($__internal_ec723f7263d638ec20770ac599b74aa5eb3818f37f16d912c2a76b5e5969fe23_prof);

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
