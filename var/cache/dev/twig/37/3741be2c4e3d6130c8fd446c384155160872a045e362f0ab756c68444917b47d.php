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
        $__internal_4d23e93e7fece2b6c5ce622d26e624c98ef077a604b9fa2a71e668cc103bcce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d23e93e7fece2b6c5ce622d26e624c98ef077a604b9fa2a71e668cc103bcce3->enter($__internal_4d23e93e7fece2b6c5ce622d26e624c98ef077a604b9fa2a71e668cc103bcce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_6f7ebc4344668e755f6feaa084976492f9858105e0b329b2c39bd16d99bc0b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7ebc4344668e755f6feaa084976492f9858105e0b329b2c39bd16d99bc0b87->enter($__internal_6f7ebc4344668e755f6feaa084976492f9858105e0b329b2c39bd16d99bc0b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4d23e93e7fece2b6c5ce622d26e624c98ef077a604b9fa2a71e668cc103bcce3->leave($__internal_4d23e93e7fece2b6c5ce622d26e624c98ef077a604b9fa2a71e668cc103bcce3_prof);

        
        $__internal_6f7ebc4344668e755f6feaa084976492f9858105e0b329b2c39bd16d99bc0b87->leave($__internal_6f7ebc4344668e755f6feaa084976492f9858105e0b329b2c39bd16d99bc0b87_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7776ec1781043b10b53b33196b7a569ba6ccc43abda6f27ad3f6b767be37041c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7776ec1781043b10b53b33196b7a569ba6ccc43abda6f27ad3f6b767be37041c->enter($__internal_7776ec1781043b10b53b33196b7a569ba6ccc43abda6f27ad3f6b767be37041c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54da057fedddcfae8f056ee95b55d388f4aafda5f3419b2676c3c074f0e05016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54da057fedddcfae8f056ee95b55d388f4aafda5f3419b2676c3c074f0e05016->enter($__internal_54da057fedddcfae8f056ee95b55d388f4aafda5f3419b2676c3c074f0e05016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_54da057fedddcfae8f056ee95b55d388f4aafda5f3419b2676c3c074f0e05016->leave($__internal_54da057fedddcfae8f056ee95b55d388f4aafda5f3419b2676c3c074f0e05016_prof);

        
        $__internal_7776ec1781043b10b53b33196b7a569ba6ccc43abda6f27ad3f6b767be37041c->leave($__internal_7776ec1781043b10b53b33196b7a569ba6ccc43abda6f27ad3f6b767be37041c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1ec70231b5976b34fd48478a6a63ea096cea9e3abe90b82bd303c22369e0174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ec70231b5976b34fd48478a6a63ea096cea9e3abe90b82bd303c22369e0174->enter($__internal_e1ec70231b5976b34fd48478a6a63ea096cea9e3abe90b82bd303c22369e0174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_054e716444ee8d739ff9b87fde5f4716f1a87cde24ae7c79d0c3c93c27f04b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054e716444ee8d739ff9b87fde5f4716f1a87cde24ae7c79d0c3c93c27f04b09->enter($__internal_054e716444ee8d739ff9b87fde5f4716f1a87cde24ae7c79d0c3c93c27f04b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_054e716444ee8d739ff9b87fde5f4716f1a87cde24ae7c79d0c3c93c27f04b09->leave($__internal_054e716444ee8d739ff9b87fde5f4716f1a87cde24ae7c79d0c3c93c27f04b09_prof);

        
        $__internal_e1ec70231b5976b34fd48478a6a63ea096cea9e3abe90b82bd303c22369e0174->leave($__internal_e1ec70231b5976b34fd48478a6a63ea096cea9e3abe90b82bd303c22369e0174_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a15eb4ed88e4d5da4f7ec58313941d1c52ab3c6d434c2b6d703f277a6c6b8892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15eb4ed88e4d5da4f7ec58313941d1c52ab3c6d434c2b6d703f277a6c6b8892->enter($__internal_a15eb4ed88e4d5da4f7ec58313941d1c52ab3c6d434c2b6d703f277a6c6b8892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c67e90d6902f317b1ab7c55ee1a9c3cb5f22d4b60eae17755cd377903065936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c67e90d6902f317b1ab7c55ee1a9c3cb5f22d4b60eae17755cd377903065936->enter($__internal_5c67e90d6902f317b1ab7c55ee1a9c3cb5f22d4b60eae17755cd377903065936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5c67e90d6902f317b1ab7c55ee1a9c3cb5f22d4b60eae17755cd377903065936->leave($__internal_5c67e90d6902f317b1ab7c55ee1a9c3cb5f22d4b60eae17755cd377903065936_prof);

        
        $__internal_a15eb4ed88e4d5da4f7ec58313941d1c52ab3c6d434c2b6d703f277a6c6b8892->leave($__internal_a15eb4ed88e4d5da4f7ec58313941d1c52ab3c6d434c2b6d703f277a6c6b8892_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67b252655fc47d354afb1b9faa155bad7dff18197bf401333e01963296630104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b252655fc47d354afb1b9faa155bad7dff18197bf401333e01963296630104->enter($__internal_67b252655fc47d354afb1b9faa155bad7dff18197bf401333e01963296630104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_505a666b3192c5a1131a890e54dedda981554896356b3c0ddebcc118ffbeec32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505a666b3192c5a1131a890e54dedda981554896356b3c0ddebcc118ffbeec32->enter($__internal_505a666b3192c5a1131a890e54dedda981554896356b3c0ddebcc118ffbeec32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_505a666b3192c5a1131a890e54dedda981554896356b3c0ddebcc118ffbeec32->leave($__internal_505a666b3192c5a1131a890e54dedda981554896356b3c0ddebcc118ffbeec32_prof);

        
        $__internal_67b252655fc47d354afb1b9faa155bad7dff18197bf401333e01963296630104->leave($__internal_67b252655fc47d354afb1b9faa155bad7dff18197bf401333e01963296630104_prof);

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
