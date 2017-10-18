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
        $__internal_8646956bb6c58904ad5fdc87fdf674583378a7fa2308e8ae62536abc5055ae15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8646956bb6c58904ad5fdc87fdf674583378a7fa2308e8ae62536abc5055ae15->enter($__internal_8646956bb6c58904ad5fdc87fdf674583378a7fa2308e8ae62536abc5055ae15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JGFormBundle:Default:index.html.twig"));

        $__internal_c793cb8ebc481497d996ab7dc2dd1f2bc69eeaf73ec330644a29f568cd26079d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c793cb8ebc481497d996ab7dc2dd1f2bc69eeaf73ec330644a29f568cd26079d->enter($__internal_c793cb8ebc481497d996ab7dc2dd1f2bc69eeaf73ec330644a29f568cd26079d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JGFormBundle:Default:index.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_8646956bb6c58904ad5fdc87fdf674583378a7fa2308e8ae62536abc5055ae15->leave($__internal_8646956bb6c58904ad5fdc87fdf674583378a7fa2308e8ae62536abc5055ae15_prof);

        
        $__internal_c793cb8ebc481497d996ab7dc2dd1f2bc69eeaf73ec330644a29f568cd26079d->leave($__internal_c793cb8ebc481497d996ab7dc2dd1f2bc69eeaf73ec330644a29f568cd26079d_prof);

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
        return array (  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}


", "JGFormBundle:Default:index.html.twig", "/var/www/html/symfo_new_form1/src/JG/FormBundle/Resources/views/Default/index.html.twig");
    }
}
