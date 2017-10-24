<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_38b9065e2d5cbb734a2019ee5913c92164e53f70103037dc5c77768848f31c95 extends Twig_Template
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
        $__internal_05008fe13e167704c8e9f2cc60cae0cea4a78bfd222f9d5603201ac2901eb5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05008fe13e167704c8e9f2cc60cae0cea4a78bfd222f9d5603201ac2901eb5bc->enter($__internal_05008fe13e167704c8e9f2cc60cae0cea4a78bfd222f9d5603201ac2901eb5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_76d9b495e339e4c6ad84c7a6b2ca82e98a4bf5fe7f30dca5e048b25bb907e560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d9b495e339e4c6ad84c7a6b2ca82e98a4bf5fe7f30dca5e048b25bb907e560->enter($__internal_76d9b495e339e4c6ad84c7a6b2ca82e98a4bf5fe7f30dca5e048b25bb907e560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_05008fe13e167704c8e9f2cc60cae0cea4a78bfd222f9d5603201ac2901eb5bc->leave($__internal_05008fe13e167704c8e9f2cc60cae0cea4a78bfd222f9d5603201ac2901eb5bc_prof);

        
        $__internal_76d9b495e339e4c6ad84c7a6b2ca82e98a4bf5fe7f30dca5e048b25bb907e560->leave($__internal_76d9b495e339e4c6ad84c7a6b2ca82e98a4bf5fe7f30dca5e048b25bb907e560_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
