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
        $__internal_258d617e4ef8686832da62215f59ca7b7ee89c4056561642d55d9a788d2a04e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_258d617e4ef8686832da62215f59ca7b7ee89c4056561642d55d9a788d2a04e6->enter($__internal_258d617e4ef8686832da62215f59ca7b7ee89c4056561642d55d9a788d2a04e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_fc7dbc3a70b76446012d76fb17b66ded73997821b673cb9f97d921c601e86b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7dbc3a70b76446012d76fb17b66ded73997821b673cb9f97d921c601e86b4b->enter($__internal_fc7dbc3a70b76446012d76fb17b66ded73997821b673cb9f97d921c601e86b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_258d617e4ef8686832da62215f59ca7b7ee89c4056561642d55d9a788d2a04e6->leave($__internal_258d617e4ef8686832da62215f59ca7b7ee89c4056561642d55d9a788d2a04e6_prof);

        
        $__internal_fc7dbc3a70b76446012d76fb17b66ded73997821b673cb9f97d921c601e86b4b->leave($__internal_fc7dbc3a70b76446012d76fb17b66ded73997821b673cb9f97d921c601e86b4b_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_4fdb3b54635b52f4d236fbe799270016bb47a5e96fdfbcdc6d5e0c0c02eff9ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fdb3b54635b52f4d236fbe799270016bb47a5e96fdfbcdc6d5e0c0c02eff9ff->enter($__internal_4fdb3b54635b52f4d236fbe799270016bb47a5e96fdfbcdc6d5e0c0c02eff9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_605cb5537ac891b69662fd2572c7042f7ad00f2ad85ef5be73564319f4b03180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605cb5537ac891b69662fd2572c7042f7ad00f2ad85ef5be73564319f4b03180->enter($__internal_605cb5537ac891b69662fd2572c7042f7ad00f2ad85ef5be73564319f4b03180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_605cb5537ac891b69662fd2572c7042f7ad00f2ad85ef5be73564319f4b03180->leave($__internal_605cb5537ac891b69662fd2572c7042f7ad00f2ad85ef5be73564319f4b03180_prof);

        
        $__internal_4fdb3b54635b52f4d236fbe799270016bb47a5e96fdfbcdc6d5e0c0c02eff9ff->leave($__internal_4fdb3b54635b52f4d236fbe799270016bb47a5e96fdfbcdc6d5e0c0c02eff9ff_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_bd1c7fb612efcc9aa616f713e5f569dbe678b5854a8dfb9b08710adb9b2ae9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1c7fb612efcc9aa616f713e5f569dbe678b5854a8dfb9b08710adb9b2ae9c5->enter($__internal_bd1c7fb612efcc9aa616f713e5f569dbe678b5854a8dfb9b08710adb9b2ae9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_2b0eda340452dd45339ab4b030e17b0610711e8f239a34d2d34bf023581f87af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0eda340452dd45339ab4b030e17b0610711e8f239a34d2d34bf023581f87af->enter($__internal_2b0eda340452dd45339ab4b030e17b0610711e8f239a34d2d34bf023581f87af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_2b0eda340452dd45339ab4b030e17b0610711e8f239a34d2d34bf023581f87af->leave($__internal_2b0eda340452dd45339ab4b030e17b0610711e8f239a34d2d34bf023581f87af_prof);

        
        $__internal_bd1c7fb612efcc9aa616f713e5f569dbe678b5854a8dfb9b08710adb9b2ae9c5->leave($__internal_bd1c7fb612efcc9aa616f713e5f569dbe678b5854a8dfb9b08710adb9b2ae9c5_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_669ae3b558f6ca2c4b2ffabde9687bda8dfa7175ccfccc645b2d2160c22bbf55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669ae3b558f6ca2c4b2ffabde9687bda8dfa7175ccfccc645b2d2160c22bbf55->enter($__internal_669ae3b558f6ca2c4b2ffabde9687bda8dfa7175ccfccc645b2d2160c22bbf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_058b6fca951c67497183adc038efd7eba75acfe5660259ce767698c7ba2b79f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058b6fca951c67497183adc038efd7eba75acfe5660259ce767698c7ba2b79f8->enter($__internal_058b6fca951c67497183adc038efd7eba75acfe5660259ce767698c7ba2b79f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_058b6fca951c67497183adc038efd7eba75acfe5660259ce767698c7ba2b79f8->leave($__internal_058b6fca951c67497183adc038efd7eba75acfe5660259ce767698c7ba2b79f8_prof);

        
        $__internal_669ae3b558f6ca2c4b2ffabde9687bda8dfa7175ccfccc645b2d2160c22bbf55->leave($__internal_669ae3b558f6ca2c4b2ffabde9687bda8dfa7175ccfccc645b2d2160c22bbf55_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_dcffefa6aafa86835f751441a655c32ddedc3f63dacfbf03a6e91727678426b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcffefa6aafa86835f751441a655c32ddedc3f63dacfbf03a6e91727678426b2->enter($__internal_dcffefa6aafa86835f751441a655c32ddedc3f63dacfbf03a6e91727678426b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_e3edf108098bb4d86e6a58bcf9f497c2492fe00e9e27e242a61cd77086cbc911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3edf108098bb4d86e6a58bcf9f497c2492fe00e9e27e242a61cd77086cbc911->enter($__internal_e3edf108098bb4d86e6a58bcf9f497c2492fe00e9e27e242a61cd77086cbc911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_e3edf108098bb4d86e6a58bcf9f497c2492fe00e9e27e242a61cd77086cbc911->leave($__internal_e3edf108098bb4d86e6a58bcf9f497c2492fe00e9e27e242a61cd77086cbc911_prof);

        
        $__internal_dcffefa6aafa86835f751441a655c32ddedc3f63dacfbf03a6e91727678426b2->leave($__internal_dcffefa6aafa86835f751441a655c32ddedc3f63dacfbf03a6e91727678426b2_prof);

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
