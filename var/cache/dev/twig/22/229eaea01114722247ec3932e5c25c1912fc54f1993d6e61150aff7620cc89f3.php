<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_eb8737f67f33540af6d0900a8f573523373c95c61998d54a1a7e5d0ab820b854 extends Twig_Template
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
        $__internal_2277df9b90588a2f6559aef97158bec4590edc288c3fcbb64968976c44f606b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2277df9b90588a2f6559aef97158bec4590edc288c3fcbb64968976c44f606b1->enter($__internal_2277df9b90588a2f6559aef97158bec4590edc288c3fcbb64968976c44f606b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_a53b40bc8b5ab3bbf3c3e6af1264050e288a6c68b6b5c43e8a9d4b2d165cc6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53b40bc8b5ab3bbf3c3e6af1264050e288a6c68b6b5c43e8a9d4b2d165cc6dd->enter($__internal_a53b40bc8b5ab3bbf3c3e6af1264050e288a6c68b6b5c43e8a9d4b2d165cc6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2277df9b90588a2f6559aef97158bec4590edc288c3fcbb64968976c44f606b1->leave($__internal_2277df9b90588a2f6559aef97158bec4590edc288c3fcbb64968976c44f606b1_prof);

        
        $__internal_a53b40bc8b5ab3bbf3c3e6af1264050e288a6c68b6b5c43e8a9d4b2d165cc6dd->leave($__internal_a53b40bc8b5ab3bbf3c3e6af1264050e288a6c68b6b5c43e8a9d4b2d165cc6dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
