<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c5fe66be27ee78b70ab160b8d5c343d122647b1c4efd4d3b4cf424ea340cdd71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c606d0709b0002c83e3ffbc05b5c51346637d011f8f6d697aa098d836174f345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c606d0709b0002c83e3ffbc05b5c51346637d011f8f6d697aa098d836174f345->enter($__internal_c606d0709b0002c83e3ffbc05b5c51346637d011f8f6d697aa098d836174f345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ee867472246d6e4c28eab6dd706f5e9f16d4823173513a8f0ce738181178128b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee867472246d6e4c28eab6dd706f5e9f16d4823173513a8f0ce738181178128b->enter($__internal_ee867472246d6e4c28eab6dd706f5e9f16d4823173513a8f0ce738181178128b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c606d0709b0002c83e3ffbc05b5c51346637d011f8f6d697aa098d836174f345->leave($__internal_c606d0709b0002c83e3ffbc05b5c51346637d011f8f6d697aa098d836174f345_prof);

        
        $__internal_ee867472246d6e4c28eab6dd706f5e9f16d4823173513a8f0ce738181178128b->leave($__internal_ee867472246d6e4c28eab6dd706f5e9f16d4823173513a8f0ce738181178128b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1913cb36878795f420c76b21bc0db77d6b0e75174a7ba188d8b85d3eecc78894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1913cb36878795f420c76b21bc0db77d6b0e75174a7ba188d8b85d3eecc78894->enter($__internal_1913cb36878795f420c76b21bc0db77d6b0e75174a7ba188d8b85d3eecc78894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ea297ce95307076c547b9caf10249e15eb443913805ce217d2ca212a7143e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea297ce95307076c547b9caf10249e15eb443913805ce217d2ca212a7143e5f->enter($__internal_8ea297ce95307076c547b9caf10249e15eb443913805ce217d2ca212a7143e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8ea297ce95307076c547b9caf10249e15eb443913805ce217d2ca212a7143e5f->leave($__internal_8ea297ce95307076c547b9caf10249e15eb443913805ce217d2ca212a7143e5f_prof);

        
        $__internal_1913cb36878795f420c76b21bc0db77d6b0e75174a7ba188d8b85d3eecc78894->leave($__internal_1913cb36878795f420c76b21bc0db77d6b0e75174a7ba188d8b85d3eecc78894_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_db4182a7f4ba7b861338a0501b2707a7b8793808236c8acf683fd9ee06d9ce93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4182a7f4ba7b861338a0501b2707a7b8793808236c8acf683fd9ee06d9ce93->enter($__internal_db4182a7f4ba7b861338a0501b2707a7b8793808236c8acf683fd9ee06d9ce93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d069c935661daded8a38ae17d07c308e504fd5d00a56ed53a34fad5b5355cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d069c935661daded8a38ae17d07c308e504fd5d00a56ed53a34fad5b5355cb5->enter($__internal_6d069c935661daded8a38ae17d07c308e504fd5d00a56ed53a34fad5b5355cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6d069c935661daded8a38ae17d07c308e504fd5d00a56ed53a34fad5b5355cb5->leave($__internal_6d069c935661daded8a38ae17d07c308e504fd5d00a56ed53a34fad5b5355cb5_prof);

        
        $__internal_db4182a7f4ba7b861338a0501b2707a7b8793808236c8acf683fd9ee06d9ce93->leave($__internal_db4182a7f4ba7b861338a0501b2707a7b8793808236c8acf683fd9ee06d9ce93_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a7527d8695a0b0d1a7c557aafd075f434ec7a0e1ef8fcebe67abc1cf308f5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7527d8695a0b0d1a7c557aafd075f434ec7a0e1ef8fcebe67abc1cf308f5fc->enter($__internal_0a7527d8695a0b0d1a7c557aafd075f434ec7a0e1ef8fcebe67abc1cf308f5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6084566760aa7564bd47cca23c025c6540b250773669df0ceb586e3d38620b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6084566760aa7564bd47cca23c025c6540b250773669df0ceb586e3d38620b79->enter($__internal_6084566760aa7564bd47cca23c025c6540b250773669df0ceb586e3d38620b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6084566760aa7564bd47cca23c025c6540b250773669df0ceb586e3d38620b79->leave($__internal_6084566760aa7564bd47cca23c025c6540b250773669df0ceb586e3d38620b79_prof);

        
        $__internal_0a7527d8695a0b0d1a7c557aafd075f434ec7a0e1ef8fcebe67abc1cf308f5fc->leave($__internal_0a7527d8695a0b0d1a7c557aafd075f434ec7a0e1ef8fcebe67abc1cf308f5fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
