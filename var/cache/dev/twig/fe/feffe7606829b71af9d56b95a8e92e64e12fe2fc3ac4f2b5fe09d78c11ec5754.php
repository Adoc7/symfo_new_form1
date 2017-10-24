<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_64f7fffc93e9e51b994168ce199cd51fbad2f46a08b6ac95648ccaedd5b0ce54 extends Twig_Template
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
        $__internal_55bbd23c9fef2af625617360508ad618c647a3781eb32ef9a123e05bd57f34df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bbd23c9fef2af625617360508ad618c647a3781eb32ef9a123e05bd57f34df->enter($__internal_55bbd23c9fef2af625617360508ad618c647a3781eb32ef9a123e05bd57f34df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_537e92de1e6b8c5a39b3d12c3df40b780529b8de36541c8035c6c48fe8129e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537e92de1e6b8c5a39b3d12c3df40b780529b8de36541c8035c6c48fe8129e60->enter($__internal_537e92de1e6b8c5a39b3d12c3df40b780529b8de36541c8035c6c48fe8129e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_55bbd23c9fef2af625617360508ad618c647a3781eb32ef9a123e05bd57f34df->leave($__internal_55bbd23c9fef2af625617360508ad618c647a3781eb32ef9a123e05bd57f34df_prof);

        
        $__internal_537e92de1e6b8c5a39b3d12c3df40b780529b8de36541c8035c6c48fe8129e60->leave($__internal_537e92de1e6b8c5a39b3d12c3df40b780529b8de36541c8035c6c48fe8129e60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
