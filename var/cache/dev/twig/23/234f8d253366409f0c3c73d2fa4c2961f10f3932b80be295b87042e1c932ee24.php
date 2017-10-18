<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_1636e3ff0ffd18e9a7e04ced064743294014d3d2cfef37b6134cafda95301105 extends Twig_Template
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
        $__internal_341fd163b3dfa80fe308cd54f93a2d5ac8106f85240a33826a765c14a6786929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341fd163b3dfa80fe308cd54f93a2d5ac8106f85240a33826a765c14a6786929->enter($__internal_341fd163b3dfa80fe308cd54f93a2d5ac8106f85240a33826a765c14a6786929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_321c3afb2a097b26e5f9b4a2b04613f37dec737442a11a0c74809fba38cce5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321c3afb2a097b26e5f9b4a2b04613f37dec737442a11a0c74809fba38cce5d9->enter($__internal_321c3afb2a097b26e5f9b4a2b04613f37dec737442a11a0c74809fba38cce5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_341fd163b3dfa80fe308cd54f93a2d5ac8106f85240a33826a765c14a6786929->leave($__internal_341fd163b3dfa80fe308cd54f93a2d5ac8106f85240a33826a765c14a6786929_prof);

        
        $__internal_321c3afb2a097b26e5f9b4a2b04613f37dec737442a11a0c74809fba38cce5d9->leave($__internal_321c3afb2a097b26e5f9b4a2b04613f37dec737442a11a0c74809fba38cce5d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
