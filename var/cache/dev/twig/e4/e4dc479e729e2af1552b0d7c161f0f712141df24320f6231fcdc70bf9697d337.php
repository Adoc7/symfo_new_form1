<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4399adf3a96bd61de43db7b2e2c6f6ef3c0ccb01b38a8ca1b9a4e4e6aaae598e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0aaa58796eb238a5a4b6a2b7aa01781ca7beefeb2945b49c605c63a41d57101c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aaa58796eb238a5a4b6a2b7aa01781ca7beefeb2945b49c605c63a41d57101c->enter($__internal_0aaa58796eb238a5a4b6a2b7aa01781ca7beefeb2945b49c605c63a41d57101c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_fd29f9b2e37a6065c8aa1c3685e401021db2b07653525622a1bf86855bcfa22e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd29f9b2e37a6065c8aa1c3685e401021db2b07653525622a1bf86855bcfa22e->enter($__internal_fd29f9b2e37a6065c8aa1c3685e401021db2b07653525622a1bf86855bcfa22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0aaa58796eb238a5a4b6a2b7aa01781ca7beefeb2945b49c605c63a41d57101c->leave($__internal_0aaa58796eb238a5a4b6a2b7aa01781ca7beefeb2945b49c605c63a41d57101c_prof);

        
        $__internal_fd29f9b2e37a6065c8aa1c3685e401021db2b07653525622a1bf86855bcfa22e->leave($__internal_fd29f9b2e37a6065c8aa1c3685e401021db2b07653525622a1bf86855bcfa22e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_521f8bdf1a8548ac396991606d0ca715f6062aab7084f5ea37251233086b6a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521f8bdf1a8548ac396991606d0ca715f6062aab7084f5ea37251233086b6a5f->enter($__internal_521f8bdf1a8548ac396991606d0ca715f6062aab7084f5ea37251233086b6a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d6a767e74f104d341d57cdc169588a096fc64309e896d0bfd0feda47741d6a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a767e74f104d341d57cdc169588a096fc64309e896d0bfd0feda47741d6a91->enter($__internal_d6a767e74f104d341d57cdc169588a096fc64309e896d0bfd0feda47741d6a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d6a767e74f104d341d57cdc169588a096fc64309e896d0bfd0feda47741d6a91->leave($__internal_d6a767e74f104d341d57cdc169588a096fc64309e896d0bfd0feda47741d6a91_prof);

        
        $__internal_521f8bdf1a8548ac396991606d0ca715f6062aab7084f5ea37251233086b6a5f->leave($__internal_521f8bdf1a8548ac396991606d0ca715f6062aab7084f5ea37251233086b6a5f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
