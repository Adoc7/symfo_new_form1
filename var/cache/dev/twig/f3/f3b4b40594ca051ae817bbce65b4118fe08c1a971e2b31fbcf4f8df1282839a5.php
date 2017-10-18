<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_883ce8958ca89715234a66ed59f0fd3e6c62b7f4b5474ea4dcb8705249e125bd extends Twig_Template
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
        $__internal_971b079051b4b4088c4e71cc5ca3136cc12fcc07045455518f4b03c49dabb5ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971b079051b4b4088c4e71cc5ca3136cc12fcc07045455518f4b03c49dabb5ea->enter($__internal_971b079051b4b4088c4e71cc5ca3136cc12fcc07045455518f4b03c49dabb5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_699ae5bd0fc2a4b0bc417a6bf114612e72e8ee806dcb77cf9845e6fc6033e0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699ae5bd0fc2a4b0bc417a6bf114612e72e8ee806dcb77cf9845e6fc6033e0e4->enter($__internal_699ae5bd0fc2a4b0bc417a6bf114612e72e8ee806dcb77cf9845e6fc6033e0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_971b079051b4b4088c4e71cc5ca3136cc12fcc07045455518f4b03c49dabb5ea->leave($__internal_971b079051b4b4088c4e71cc5ca3136cc12fcc07045455518f4b03c49dabb5ea_prof);

        
        $__internal_699ae5bd0fc2a4b0bc417a6bf114612e72e8ee806dcb77cf9845e6fc6033e0e4->leave($__internal_699ae5bd0fc2a4b0bc417a6bf114612e72e8ee806dcb77cf9845e6fc6033e0e4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
