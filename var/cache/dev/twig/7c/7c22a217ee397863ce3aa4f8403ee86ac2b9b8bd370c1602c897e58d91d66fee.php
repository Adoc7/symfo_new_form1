<?php

/* :post:index.html.twig */
class __TwigTemplate_5c891eab0acd9f1741b719b27fa91c1507754a0890f83bc5b8db04f8e3e8c000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:index.html.twig", 1);
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
        $__internal_3fa239cb4017c06d86db599a6ef2382eb1032386a0e3bea91d34513ead738f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa239cb4017c06d86db599a6ef2382eb1032386a0e3bea91d34513ead738f66->enter($__internal_3fa239cb4017c06d86db599a6ef2382eb1032386a0e3bea91d34513ead738f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:index.html.twig"));

        $__internal_b91caa3fe89608471d615e734806c4341fdf1b84033e549edf4aeada247f6627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91caa3fe89608471d615e734806c4341fdf1b84033e549edf4aeada247f6627->enter($__internal_b91caa3fe89608471d615e734806c4341fdf1b84033e549edf4aeada247f6627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fa239cb4017c06d86db599a6ef2382eb1032386a0e3bea91d34513ead738f66->leave($__internal_3fa239cb4017c06d86db599a6ef2382eb1032386a0e3bea91d34513ead738f66_prof);

        
        $__internal_b91caa3fe89608471d615e734806c4341fdf1b84033e549edf4aeada247f6627->leave($__internal_b91caa3fe89608471d615e734806c4341fdf1b84033e549edf4aeada247f6627_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecab25e9a6f6a3b407ee47b3482157a0ed9052272cbb043726c940f4d50924e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecab25e9a6f6a3b407ee47b3482157a0ed9052272cbb043726c940f4d50924e1->enter($__internal_ecab25e9a6f6a3b407ee47b3482157a0ed9052272cbb043726c940f4d50924e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5103749c67a045a24b5cb4b58329942c4182014bbf6fb4af051ee3753e61b59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5103749c67a045a24b5cb4b58329942c4182014bbf6fb4af051ee3753e61b59e->enter($__internal_5103749c67a045a24b5cb4b58329942c4182014bbf6fb4af051ee3753e61b59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Article</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "image", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "auteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "article", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["post"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\">Create a new post</a>
        </li>
    </ul>
";
        
        $__internal_5103749c67a045a24b5cb4b58329942c4182014bbf6fb4af051ee3753e61b59e->leave($__internal_5103749c67a045a24b5cb4b58329942c4182014bbf6fb4af051ee3753e61b59e_prof);

        
        $__internal_ecab25e9a6f6a3b407ee47b3482157a0ed9052272cbb043726c940f4d50924e1->leave($__internal_ecab25e9a6f6a3b407ee47b3482157a0ed9052272cbb043726c940f4d50924e1_prof);

    }

    public function getTemplateName()
    {
        return ":post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 44,  122 => 39,  110 => 33,  104 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Article</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.id }}</a></td>
                <td>{{ post.image }}</td>
                <td>{{ post.titre }}</td>
                <td>{{ post.auteur }}</td>
                <td>{{ post.article }}</td>
                <td>{% if post.date %}{{ post.date|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('post_show', { 'id': post.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_new') }}\">Create a new post</a>
        </li>
    </ul>
{% endblock %}
", ":post:index.html.twig", "/var/www/html/symfo_new_form1/app/Resources/views/post/index.html.twig");
    }
}
