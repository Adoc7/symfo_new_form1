<?php

/* JGFormBundle:Default:valid.html.twig */
class __TwigTemplate_ff435f0b96446a55f0f5c0c384170b9e17345251b3a67d61bcb52c7c44087d62 extends Twig_Template
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
        $__internal_cf187b8efa94b4700bde0d8854d95dd5def1bae6e52817070a0dd8489433fc5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf187b8efa94b4700bde0d8854d95dd5def1bae6e52817070a0dd8489433fc5b->enter($__internal_cf187b8efa94b4700bde0d8854d95dd5def1bae6e52817070a0dd8489433fc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JGFormBundle:Default:valid.html.twig"));

        $__internal_2592314c3f17ed6b2893bd87ff282e633d2d0628274e4f68b43d0c9f11be33a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2592314c3f17ed6b2893bd87ff282e633d2d0628274e4f68b43d0c9f11be33a7->enter($__internal_2592314c3f17ed6b2893bd87ff282e633d2d0628274e4f68b43d0c9f11be33a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JGFormBundle:Default:valid.html.twig"));

        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jg_form_homepage");
        echo "\">
        Retour au formulaire
</a>

<h1>Liste des articles</h1>

<hr>

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "
        ";
            // line 12
            echo "    ";
            // line 13
            echo "        <p> Image : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "image", array()), "html", null, true);
            echo "</p>
        <h3>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</h3>
        <p>Article : ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "article", array()), "html", null, true);
            echo "</p>
        <p>Auteur : ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "auteur", array()), "html", null, true);
            echo "</p>
        <p>Posté le : ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</p>
        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jg_form_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
                Modifier le formulaire
        </a>
        <br>
        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("jg_form_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
                Supprimer le formulaire
        </a>

        <hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "

";
        
        $__internal_cf187b8efa94b4700bde0d8854d95dd5def1bae6e52817070a0dd8489433fc5b->leave($__internal_cf187b8efa94b4700bde0d8854d95dd5def1bae6e52817070a0dd8489433fc5b_prof);

        
        $__internal_2592314c3f17ed6b2893bd87ff282e633d2d0628274e4f68b43d0c9f11be33a7->leave($__internal_2592314c3f17ed6b2893bd87ff282e633d2d0628274e4f68b43d0c9f11be33a7_prof);

    }

    public function getTemplateName()
    {
        return "JGFormBundle:Default:valid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  74 => 22,  67 => 18,  63 => 17,  59 => 16,  55 => 15,  51 => 14,  46 => 13,  44 => 12,  41 => 10,  37 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ path('jg_form_homepage')}}\">
        Retour au formulaire
</a>

<h1>Liste des articles</h1>

<hr>

{% for article in articles %}

        {#<img src=\"{{ vich_uploader_asset(article.image, 'file') }}\" />#}
    {#{{ vich_uploader_asset(devis, 'devisFile') }}\"#}
        <p> Image : {{ article.image }}</p>
        <h3>{{ article.titre }}</h3>
        <p>Article : {{ article.article }}</p>
        <p>Auteur : {{ article.auteur }}</p>
        <p>Posté le : {{ article.date | date('d-m-Y') }}</p>
        <a href=\"{{ path('jg_form_edit', {'id' : article.id})}}\">
                Modifier le formulaire
        </a>
        <br>
        <a href=\"{{ path('jg_form_delete', {'id' : article.id})}}\">
                Supprimer le formulaire
        </a>

        <hr>
{% endfor %}


", "JGFormBundle:Default:valid.html.twig", "/var/www/html/symfo_new_form1/src/JG/FormBundle/Resources/views/Default/valid.html.twig");
    }
}
