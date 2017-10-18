<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7e0fe876e74a52aa58fda4abf315e10e980c9f393ddff4f680722f9f4f84830c extends Twig_Template
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
        $__internal_4d37244820bdf5551d460ade72866a314c83feb934f8e1f7d02fbbae6bcd26bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d37244820bdf5551d460ade72866a314c83feb934f8e1f7d02fbbae6bcd26bd->enter($__internal_4d37244820bdf5551d460ade72866a314c83feb934f8e1f7d02fbbae6bcd26bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_60ea23bdab6f63d843cbe493058536759069c7e8ab97d612e6b02c5ba26f77d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ea23bdab6f63d843cbe493058536759069c7e8ab97d612e6b02c5ba26f77d1->enter($__internal_60ea23bdab6f63d843cbe493058536759069c7e8ab97d612e6b02c5ba26f77d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4d37244820bdf5551d460ade72866a314c83feb934f8e1f7d02fbbae6bcd26bd->leave($__internal_4d37244820bdf5551d460ade72866a314c83feb934f8e1f7d02fbbae6bcd26bd_prof);

        
        $__internal_60ea23bdab6f63d843cbe493058536759069c7e8ab97d612e6b02c5ba26f77d1->leave($__internal_60ea23bdab6f63d843cbe493058536759069c7e8ab97d612e6b02c5ba26f77d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
