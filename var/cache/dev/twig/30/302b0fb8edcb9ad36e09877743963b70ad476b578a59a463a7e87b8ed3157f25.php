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
        $__internal_dd80f3717226d23be1167da09f22872a5defd97519d29d5ce7d37f5a62d92475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd80f3717226d23be1167da09f22872a5defd97519d29d5ce7d37f5a62d92475->enter($__internal_dd80f3717226d23be1167da09f22872a5defd97519d29d5ce7d37f5a62d92475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9172dc2c8463d5b935ca9b2347376aea23017cb219ba09497421d89b40bfd599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9172dc2c8463d5b935ca9b2347376aea23017cb219ba09497421d89b40bfd599->enter($__internal_9172dc2c8463d5b935ca9b2347376aea23017cb219ba09497421d89b40bfd599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_dd80f3717226d23be1167da09f22872a5defd97519d29d5ce7d37f5a62d92475->leave($__internal_dd80f3717226d23be1167da09f22872a5defd97519d29d5ce7d37f5a62d92475_prof);

        
        $__internal_9172dc2c8463d5b935ca9b2347376aea23017cb219ba09497421d89b40bfd599->leave($__internal_9172dc2c8463d5b935ca9b2347376aea23017cb219ba09497421d89b40bfd599_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2259fad12824502f59a3fa352721b726f45e298645622ed9600964b77da09d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2259fad12824502f59a3fa352721b726f45e298645622ed9600964b77da09d7d->enter($__internal_2259fad12824502f59a3fa352721b726f45e298645622ed9600964b77da09d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3c26a0d6d21720f45325027ced507094c6de79bd2d114d3e98e22fab166e1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c26a0d6d21720f45325027ced507094c6de79bd2d114d3e98e22fab166e1d2->enter($__internal_d3c26a0d6d21720f45325027ced507094c6de79bd2d114d3e98e22fab166e1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d3c26a0d6d21720f45325027ced507094c6de79bd2d114d3e98e22fab166e1d2->leave($__internal_d3c26a0d6d21720f45325027ced507094c6de79bd2d114d3e98e22fab166e1d2_prof);

        
        $__internal_2259fad12824502f59a3fa352721b726f45e298645622ed9600964b77da09d7d->leave($__internal_2259fad12824502f59a3fa352721b726f45e298645622ed9600964b77da09d7d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe2ead91d3f164e100fabe201ee5227fad680b9bd0b5b3b98d34acb56dd3bd07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe2ead91d3f164e100fabe201ee5227fad680b9bd0b5b3b98d34acb56dd3bd07->enter($__internal_fe2ead91d3f164e100fabe201ee5227fad680b9bd0b5b3b98d34acb56dd3bd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_97868ceaf27eba5442cfc65f55bca20153d4567f37ad32c8b1d93561e5afd8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97868ceaf27eba5442cfc65f55bca20153d4567f37ad32c8b1d93561e5afd8e8->enter($__internal_97868ceaf27eba5442cfc65f55bca20153d4567f37ad32c8b1d93561e5afd8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_97868ceaf27eba5442cfc65f55bca20153d4567f37ad32c8b1d93561e5afd8e8->leave($__internal_97868ceaf27eba5442cfc65f55bca20153d4567f37ad32c8b1d93561e5afd8e8_prof);

        
        $__internal_fe2ead91d3f164e100fabe201ee5227fad680b9bd0b5b3b98d34acb56dd3bd07->leave($__internal_fe2ead91d3f164e100fabe201ee5227fad680b9bd0b5b3b98d34acb56dd3bd07_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b4b896602f5e9effa752974fa2f3008f6414e2d04f1120a564ac9ded465191c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4b896602f5e9effa752974fa2f3008f6414e2d04f1120a564ac9ded465191c->enter($__internal_4b4b896602f5e9effa752974fa2f3008f6414e2d04f1120a564ac9ded465191c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e4217538cfa2489c9979996c5da1b2d041e809197e8ac7c5f371795c4bd86af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4217538cfa2489c9979996c5da1b2d041e809197e8ac7c5f371795c4bd86af->enter($__internal_0e4217538cfa2489c9979996c5da1b2d041e809197e8ac7c5f371795c4bd86af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e4217538cfa2489c9979996c5da1b2d041e809197e8ac7c5f371795c4bd86af->leave($__internal_0e4217538cfa2489c9979996c5da1b2d041e809197e8ac7c5f371795c4bd86af_prof);

        
        $__internal_4b4b896602f5e9effa752974fa2f3008f6414e2d04f1120a564ac9ded465191c->leave($__internal_4b4b896602f5e9effa752974fa2f3008f6414e2d04f1120a564ac9ded465191c_prof);

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
