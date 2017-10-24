<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_50c4d05f9d86fef7f43fe4d4f062ebf05a5ef4dfea6409466499732b32a5f972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bd8c5df717a4ec88f8ccd8d063ac2702d1c8ac7e1da9813765aacbaa29b006a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd8c5df717a4ec88f8ccd8d063ac2702d1c8ac7e1da9813765aacbaa29b006a->enter($__internal_3bd8c5df717a4ec88f8ccd8d063ac2702d1c8ac7e1da9813765aacbaa29b006a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_abe183c05dd5dffc40285952bc2e639e5fbd60beda07b6086083ec92f52d3594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe183c05dd5dffc40285952bc2e639e5fbd60beda07b6086083ec92f52d3594->enter($__internal_abe183c05dd5dffc40285952bc2e639e5fbd60beda07b6086083ec92f52d3594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_3bd8c5df717a4ec88f8ccd8d063ac2702d1c8ac7e1da9813765aacbaa29b006a->leave($__internal_3bd8c5df717a4ec88f8ccd8d063ac2702d1c8ac7e1da9813765aacbaa29b006a_prof);

        
        $__internal_abe183c05dd5dffc40285952bc2e639e5fbd60beda07b6086083ec92f52d3594->leave($__internal_abe183c05dd5dffc40285952bc2e639e5fbd60beda07b6086083ec92f52d3594_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_fd6209dda2b31548bbe1b4fa0b7ce1790bc5233a4716f6f1618c1741b9bedb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6209dda2b31548bbe1b4fa0b7ce1790bc5233a4716f6f1618c1741b9bedb39->enter($__internal_fd6209dda2b31548bbe1b4fa0b7ce1790bc5233a4716f6f1618c1741b9bedb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_36ec7fb61e2d103871edba9b6496e877315ad1204a55e5e3f9088a50fdebe8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ec7fb61e2d103871edba9b6496e877315ad1204a55e5e3f9088a50fdebe8b5->enter($__internal_36ec7fb61e2d103871edba9b6496e877315ad1204a55e5e3f9088a50fdebe8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_36ec7fb61e2d103871edba9b6496e877315ad1204a55e5e3f9088a50fdebe8b5->leave($__internal_36ec7fb61e2d103871edba9b6496e877315ad1204a55e5e3f9088a50fdebe8b5_prof);

        
        $__internal_fd6209dda2b31548bbe1b4fa0b7ce1790bc5233a4716f6f1618c1741b9bedb39->leave($__internal_fd6209dda2b31548bbe1b4fa0b7ce1790bc5233a4716f6f1618c1741b9bedb39_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_adcc70edeac02e10ae80392871e10fc3b42a628c3a1d199be18cf740b83813b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adcc70edeac02e10ae80392871e10fc3b42a628c3a1d199be18cf740b83813b8->enter($__internal_adcc70edeac02e10ae80392871e10fc3b42a628c3a1d199be18cf740b83813b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_ef5bd02f8e6177de248d1a134ac1925120de3f6f50131e03bdcec556e03302c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5bd02f8e6177de248d1a134ac1925120de3f6f50131e03bdcec556e03302c5->enter($__internal_ef5bd02f8e6177de248d1a134ac1925120de3f6f50131e03bdcec556e03302c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ef5bd02f8e6177de248d1a134ac1925120de3f6f50131e03bdcec556e03302c5->leave($__internal_ef5bd02f8e6177de248d1a134ac1925120de3f6f50131e03bdcec556e03302c5_prof);

        
        $__internal_adcc70edeac02e10ae80392871e10fc3b42a628c3a1d199be18cf740b83813b8->leave($__internal_adcc70edeac02e10ae80392871e10fc3b42a628c3a1d199be18cf740b83813b8_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_b12c604ea3d34663f7a7a962febc981fac758d68cbbb599db9c673f49699685d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b12c604ea3d34663f7a7a962febc981fac758d68cbbb599db9c673f49699685d->enter($__internal_b12c604ea3d34663f7a7a962febc981fac758d68cbbb599db9c673f49699685d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_9bcf37fe9dd7f598b201d171d60efa59e95af44fc45cd462286ad473a486f27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcf37fe9dd7f598b201d171d60efa59e95af44fc45cd462286ad473a486f27c->enter($__internal_9bcf37fe9dd7f598b201d171d60efa59e95af44fc45cd462286ad473a486f27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9bcf37fe9dd7f598b201d171d60efa59e95af44fc45cd462286ad473a486f27c->leave($__internal_9bcf37fe9dd7f598b201d171d60efa59e95af44fc45cd462286ad473a486f27c_prof);

        
        $__internal_b12c604ea3d34663f7a7a962febc981fac758d68cbbb599db9c673f49699685d->leave($__internal_b12c604ea3d34663f7a7a962febc981fac758d68cbbb599db9c673f49699685d_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_3e5baab9dfff5a7a83c6fc01be7261ecff2be8552d2a8dc05ca1bc8b718d3ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e5baab9dfff5a7a83c6fc01be7261ecff2be8552d2a8dc05ca1bc8b718d3ad2->enter($__internal_3e5baab9dfff5a7a83c6fc01be7261ecff2be8552d2a8dc05ca1bc8b718d3ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_3640d69dbe3f2f641cdffed6340ad636fd54f82dea1c31d4920fc38b6b142261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3640d69dbe3f2f641cdffed6340ad636fd54f82dea1c31d4920fc38b6b142261->enter($__internal_3640d69dbe3f2f641cdffed6340ad636fd54f82dea1c31d4920fc38b6b142261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3640d69dbe3f2f641cdffed6340ad636fd54f82dea1c31d4920fc38b6b142261->leave($__internal_3640d69dbe3f2f641cdffed6340ad636fd54f82dea1c31d4920fc38b6b142261_prof);

        
        $__internal_3e5baab9dfff5a7a83c6fc01be7261ecff2be8552d2a8dc05ca1bc8b718d3ad2->leave($__internal_3e5baab9dfff5a7a83c6fc01be7261ecff2be8552d2a8dc05ca1bc8b718d3ad2_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "/var/www/html/symfo_new_form1/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
