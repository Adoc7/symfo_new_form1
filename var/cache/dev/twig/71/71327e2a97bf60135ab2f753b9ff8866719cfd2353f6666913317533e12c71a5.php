<?php

/* :post:edit.html.twig */
class __TwigTemplate_32008d3e5e45d3739ba0ce3061a933f91153efbab1933e8a030ec4ed75ad717d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b8e9ff5a2841998ad616d02dc8b3513daca057b8f091257f713e1008706240b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8e9ff5a2841998ad616d02dc8b3513daca057b8f091257f713e1008706240b->enter($__internal_6b8e9ff5a2841998ad616d02dc8b3513daca057b8f091257f713e1008706240b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:edit.html.twig"));

        $__internal_6712997c171d9b72fc11ca3dd885d3031c2b1f62b201058582393e70915b822e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6712997c171d9b72fc11ca3dd885d3031c2b1f62b201058582393e70915b822e->enter($__internal_6712997c171d9b72fc11ca3dd885d3031c2b1f62b201058582393e70915b822e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b8e9ff5a2841998ad616d02dc8b3513daca057b8f091257f713e1008706240b->leave($__internal_6b8e9ff5a2841998ad616d02dc8b3513daca057b8f091257f713e1008706240b_prof);

        
        $__internal_6712997c171d9b72fc11ca3dd885d3031c2b1f62b201058582393e70915b822e->leave($__internal_6712997c171d9b72fc11ca3dd885d3031c2b1f62b201058582393e70915b822e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38fc27de7d9d46406d7caec0048174549949e6dd4896e76492a5ee1463bd936b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38fc27de7d9d46406d7caec0048174549949e6dd4896e76492a5ee1463bd936b->enter($__internal_38fc27de7d9d46406d7caec0048174549949e6dd4896e76492a5ee1463bd936b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d49dc835bd1f05a1d4cf5e0404c0c0267bdfeeb506638286d40d8c849bdd5992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49dc835bd1f05a1d4cf5e0404c0c0267bdfeeb506638286d40d8c849bdd5992->enter($__internal_d49dc835bd1f05a1d4cf5e0404c0c0267bdfeeb506638286d40d8c849bdd5992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d49dc835bd1f05a1d4cf5e0404c0c0267bdfeeb506638286d40d8c849bdd5992->leave($__internal_d49dc835bd1f05a1d4cf5e0404c0c0267bdfeeb506638286d40d8c849bdd5992_prof);

        
        $__internal_38fc27de7d9d46406d7caec0048174549949e6dd4896e76492a5ee1463bd936b->leave($__internal_38fc27de7d9d46406d7caec0048174549949e6dd4896e76492a5ee1463bd936b_prof);

    }

    public function getTemplateName()
    {
        return ":post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Post edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":post:edit.html.twig", "/var/www/html/symfo_new_form1/app/Resources/views/post/edit.html.twig");
    }
}
