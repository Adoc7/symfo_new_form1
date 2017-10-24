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
        $__internal_a67746e8835b2d42433703d62868f390a75187a648f992d4675cce471250858f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a67746e8835b2d42433703d62868f390a75187a648f992d4675cce471250858f->enter($__internal_a67746e8835b2d42433703d62868f390a75187a648f992d4675cce471250858f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7adfec027b4ccc016ac0cb332dd4333f812a7632dd476dab712ce3245480d4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7adfec027b4ccc016ac0cb332dd4333f812a7632dd476dab712ce3245480d4c0->enter($__internal_7adfec027b4ccc016ac0cb332dd4333f812a7632dd476dab712ce3245480d4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a67746e8835b2d42433703d62868f390a75187a648f992d4675cce471250858f->leave($__internal_a67746e8835b2d42433703d62868f390a75187a648f992d4675cce471250858f_prof);

        
        $__internal_7adfec027b4ccc016ac0cb332dd4333f812a7632dd476dab712ce3245480d4c0->leave($__internal_7adfec027b4ccc016ac0cb332dd4333f812a7632dd476dab712ce3245480d4c0_prof);

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
