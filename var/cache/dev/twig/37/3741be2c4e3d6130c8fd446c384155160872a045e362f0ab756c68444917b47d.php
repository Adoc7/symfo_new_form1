<?php

/* ::base.html.twig */
class __TwigTemplate_e5567193ccc3120c11d55bcd195d3706c227b6c6767c814a38530861a8e702b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_daea008cfd5be560419d98b13d867604fe2ac9431e0fa070e43d8ef5112e6c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daea008cfd5be560419d98b13d867604fe2ac9431e0fa070e43d8ef5112e6c26->enter($__internal_daea008cfd5be560419d98b13d867604fe2ac9431e0fa070e43d8ef5112e6c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ebe0d9cd68e9b3a2db52e8428bb345b1a5ce00dde093a7cf540817120e92ef54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe0d9cd68e9b3a2db52e8428bb345b1a5ce00dde093a7cf540817120e92ef54->enter($__internal_ebe0d9cd68e9b3a2db52e8428bb345b1a5ce00dde093a7cf540817120e92ef54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_daea008cfd5be560419d98b13d867604fe2ac9431e0fa070e43d8ef5112e6c26->leave($__internal_daea008cfd5be560419d98b13d867604fe2ac9431e0fa070e43d8ef5112e6c26_prof);

        
        $__internal_ebe0d9cd68e9b3a2db52e8428bb345b1a5ce00dde093a7cf540817120e92ef54->leave($__internal_ebe0d9cd68e9b3a2db52e8428bb345b1a5ce00dde093a7cf540817120e92ef54_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb7e058582dbb93f1a1ec73ad0ea83e6d1789878533bf7e97345b6eb6498fcff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7e058582dbb93f1a1ec73ad0ea83e6d1789878533bf7e97345b6eb6498fcff->enter($__internal_fb7e058582dbb93f1a1ec73ad0ea83e6d1789878533bf7e97345b6eb6498fcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_608924a60be32aad7bd29bd4cb78722abf3cfa3d505a376ea1381de80d678095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608924a60be32aad7bd29bd4cb78722abf3cfa3d505a376ea1381de80d678095->enter($__internal_608924a60be32aad7bd29bd4cb78722abf3cfa3d505a376ea1381de80d678095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_608924a60be32aad7bd29bd4cb78722abf3cfa3d505a376ea1381de80d678095->leave($__internal_608924a60be32aad7bd29bd4cb78722abf3cfa3d505a376ea1381de80d678095_prof);

        
        $__internal_fb7e058582dbb93f1a1ec73ad0ea83e6d1789878533bf7e97345b6eb6498fcff->leave($__internal_fb7e058582dbb93f1a1ec73ad0ea83e6d1789878533bf7e97345b6eb6498fcff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5725037acf3deea80816bac46d829ee614f8b7be763b31f0ae8ecb3962a74fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5725037acf3deea80816bac46d829ee614f8b7be763b31f0ae8ecb3962a74fca->enter($__internal_5725037acf3deea80816bac46d829ee614f8b7be763b31f0ae8ecb3962a74fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_383187356ddc0abf699d0f552ec65a91962f51f062c6597e40ecf9983bae0902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383187356ddc0abf699d0f552ec65a91962f51f062c6597e40ecf9983bae0902->enter($__internal_383187356ddc0abf699d0f552ec65a91962f51f062c6597e40ecf9983bae0902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_383187356ddc0abf699d0f552ec65a91962f51f062c6597e40ecf9983bae0902->leave($__internal_383187356ddc0abf699d0f552ec65a91962f51f062c6597e40ecf9983bae0902_prof);

        
        $__internal_5725037acf3deea80816bac46d829ee614f8b7be763b31f0ae8ecb3962a74fca->leave($__internal_5725037acf3deea80816bac46d829ee614f8b7be763b31f0ae8ecb3962a74fca_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_de61b26049d7ab43fd4339475bb917b04a85eb7048341c659fb91292a386ccb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de61b26049d7ab43fd4339475bb917b04a85eb7048341c659fb91292a386ccb5->enter($__internal_de61b26049d7ab43fd4339475bb917b04a85eb7048341c659fb91292a386ccb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b0d9d84aa9cf5715d1a6107731196d93a79d8aabc89617f74f71b3a8fa114c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0d9d84aa9cf5715d1a6107731196d93a79d8aabc89617f74f71b3a8fa114c3->enter($__internal_5b0d9d84aa9cf5715d1a6107731196d93a79d8aabc89617f74f71b3a8fa114c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5b0d9d84aa9cf5715d1a6107731196d93a79d8aabc89617f74f71b3a8fa114c3->leave($__internal_5b0d9d84aa9cf5715d1a6107731196d93a79d8aabc89617f74f71b3a8fa114c3_prof);

        
        $__internal_de61b26049d7ab43fd4339475bb917b04a85eb7048341c659fb91292a386ccb5->leave($__internal_de61b26049d7ab43fd4339475bb917b04a85eb7048341c659fb91292a386ccb5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de07c86c9d027ac376a6fdbf8cdf53b9b999a4e45a4acd2d3155d42546ba8f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de07c86c9d027ac376a6fdbf8cdf53b9b999a4e45a4acd2d3155d42546ba8f16->enter($__internal_de07c86c9d027ac376a6fdbf8cdf53b9b999a4e45a4acd2d3155d42546ba8f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_26bd414b43112324f890d1fe6e2d2762fc88612c59c8152ced0d845574de7c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26bd414b43112324f890d1fe6e2d2762fc88612c59c8152ced0d845574de7c85->enter($__internal_26bd414b43112324f890d1fe6e2d2762fc88612c59c8152ced0d845574de7c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_26bd414b43112324f890d1fe6e2d2762fc88612c59c8152ced0d845574de7c85->leave($__internal_26bd414b43112324f890d1fe6e2d2762fc88612c59c8152ced0d845574de7c85_prof);

        
        $__internal_de07c86c9d027ac376a6fdbf8cdf53b9b999a4e45a4acd2d3155d42546ba8f16->leave($__internal_de07c86c9d027ac376a6fdbf8cdf53b9b999a4e45a4acd2d3155d42546ba8f16_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/symfo_new_form1/app/Resources/views/base.html.twig");
    }
}
