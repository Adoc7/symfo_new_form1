<?php

/* JGFormBundle:Default:index.html.twig */
class __TwigTemplate_dfb2231090a742dd47730cb5ba01246064320ae10133971c3fe9ebe21b317b0c extends Twig_Template
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
        $__internal_6cc930fa9d8cf5fd2ec7263c07b94169519f83962925670c2928733bc30d2c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc930fa9d8cf5fd2ec7263c07b94169519f83962925670c2928733bc30d2c97->enter($__internal_6cc930fa9d8cf5fd2ec7263c07b94169519f83962925670c2928733bc30d2c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JGFormBundle:Default:index.html.twig"));

        $__internal_7e933c9d2b9c6c9fb30f427f06775dab727747ee04d9399a97b3c615b3a8bd79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e933c9d2b9c6c9fb30f427f06775dab727747ee04d9399a97b3c615b3a8bd79->enter($__internal_7e933c9d2b9c6c9fb30f427f06775dab727747ee04d9399a97b3c615b3a8bd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JGFormBundle:Default:index.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "





";
        
        $__internal_6cc930fa9d8cf5fd2ec7263c07b94169519f83962925670c2928733bc30d2c97->leave($__internal_6cc930fa9d8cf5fd2ec7263c07b94169519f83962925670c2928733bc30d2c97_prof);

        
        $__internal_7e933c9d2b9c6c9fb30f427f06775dab727747ee04d9399a97b3c615b3a8bd79->leave($__internal_7e933c9d2b9c6c9fb30f427f06775dab727747ee04d9399a97b3c615b3a8bd79_prof);

    }

    public function getTemplateName()
    {
        return "JGFormBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}





", "JGFormBundle:Default:index.html.twig", "/var/www/html/symfo_new_form1/src/JG/FormBundle/Resources/views/Default/index.html.twig");
    }
}
