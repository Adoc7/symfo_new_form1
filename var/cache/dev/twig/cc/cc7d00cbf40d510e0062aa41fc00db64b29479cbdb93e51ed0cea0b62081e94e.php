<?php

/* :post:show.html.twig */
class __TwigTemplate_4cac2b380379b8e8e323d717586240f99e342302cd1e6b91f1f51e08e13f18d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:show.html.twig", 1);
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
        $__internal_2b6c5ab73d3d8b836ee824427f86f148b804f5efafa0c16ffc3c8a7c7a704e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b6c5ab73d3d8b836ee824427f86f148b804f5efafa0c16ffc3c8a7c7a704e5c->enter($__internal_2b6c5ab73d3d8b836ee824427f86f148b804f5efafa0c16ffc3c8a7c7a704e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:show.html.twig"));

        $__internal_f665f780d76f4c7fcf6ca0538eca4886bd73e32dbb4d66930677677d7ce6d2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f665f780d76f4c7fcf6ca0538eca4886bd73e32dbb4d66930677677d7ce6d2e7->enter($__internal_f665f780d76f4c7fcf6ca0538eca4886bd73e32dbb4d66930677677d7ce6d2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6c5ab73d3d8b836ee824427f86f148b804f5efafa0c16ffc3c8a7c7a704e5c->leave($__internal_2b6c5ab73d3d8b836ee824427f86f148b804f5efafa0c16ffc3c8a7c7a704e5c_prof);

        
        $__internal_f665f780d76f4c7fcf6ca0538eca4886bd73e32dbb4d66930677677d7ce6d2e7->leave($__internal_f665f780d76f4c7fcf6ca0538eca4886bd73e32dbb4d66930677677d7ce6d2e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dd40f5e283a5e075a9643b67553fbcfcb39a38526417b37eee0a7939335a82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd40f5e283a5e075a9643b67553fbcfcb39a38526417b37eee0a7939335a82f->enter($__internal_7dd40f5e283a5e075a9643b67553fbcfcb39a38526417b37eee0a7939335a82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4150aa7d62d9948f52b785725e367bb3df9b574a373cbd57fe6df1c1fe2f4105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4150aa7d62d9948f52b785725e367bb3df9b574a373cbd57fe6df1c1fe2f4105->enter($__internal_4150aa7d62d9948f52b785725e367bb3df9b574a373cbd57fe6df1c1fe2f4105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "image", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Auteur</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "auteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Article</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "article", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4150aa7d62d9948f52b785725e367bb3df9b574a373cbd57fe6df1c1fe2f4105->leave($__internal_4150aa7d62d9948f52b785725e367bb3df9b574a373cbd57fe6df1c1fe2f4105_prof);

        
        $__internal_7dd40f5e283a5e075a9643b67553fbcfcb39a38526417b37eee0a7939335a82f->leave($__internal_7dd40f5e283a5e075a9643b67553fbcfcb39a38526417b37eee0a7939335a82f_prof);

    }

    public function getTemplateName()
    {
        return ":post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  116 => 43,  110 => 40,  104 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ post.id }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ post.image }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ post.titre }}</td>
            </tr>
            <tr>
                <th>Auteur</th>
                <td>{{ post.auteur }}</td>
            </tr>
            <tr>
                <th>Article</th>
                <td>{{ post.article }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if post.date %}{{ post.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":post:show.html.twig", "/var/www/html/symfo_new_form1/app/Resources/views/post/show.html.twig");
    }
}
