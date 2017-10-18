<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_4b1662a1626b8bc96f8d461f0b92f640ff96be6ab3f2fc3bfbc135799a529512 extends Twig_Template
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
        $__internal_aeff33a37c6cec7942907c35ac4e0948bc1ac21dc406f666f6149756aefa013e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeff33a37c6cec7942907c35ac4e0948bc1ac21dc406f666f6149756aefa013e->enter($__internal_aeff33a37c6cec7942907c35ac4e0948bc1ac21dc406f666f6149756aefa013e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_834073a2d414fdfee9a1645a80860f758c0a5ef387abd075cf234cdcd677622a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834073a2d414fdfee9a1645a80860f758c0a5ef387abd075cf234cdcd677622a->enter($__internal_834073a2d414fdfee9a1645a80860f758c0a5ef387abd075cf234cdcd677622a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_aeff33a37c6cec7942907c35ac4e0948bc1ac21dc406f666f6149756aefa013e->leave($__internal_aeff33a37c6cec7942907c35ac4e0948bc1ac21dc406f666f6149756aefa013e_prof);

        
        $__internal_834073a2d414fdfee9a1645a80860f758c0a5ef387abd075cf234cdcd677622a->leave($__internal_834073a2d414fdfee9a1645a80860f758c0a5ef387abd075cf234cdcd677622a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
