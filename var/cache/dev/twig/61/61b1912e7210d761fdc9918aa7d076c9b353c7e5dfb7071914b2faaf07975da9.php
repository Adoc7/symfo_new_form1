<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4765aad5a9612c979a9a756490ea7d4cc72ad22fe487e74c637eb11b01c94a33 extends Twig_Template
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
        $__internal_3d7c480d2ea70dc020710015de6dcdfcf5c642df27f8ff924c867ec201bf95eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7c480d2ea70dc020710015de6dcdfcf5c642df27f8ff924c867ec201bf95eb->enter($__internal_3d7c480d2ea70dc020710015de6dcdfcf5c642df27f8ff924c867ec201bf95eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_85588b0ac214bb8b0c369bd70bc5e781e624e7f6ea0499b787c95175bc656fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85588b0ac214bb8b0c369bd70bc5e781e624e7f6ea0499b787c95175bc656fd7->enter($__internal_85588b0ac214bb8b0c369bd70bc5e781e624e7f6ea0499b787c95175bc656fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3d7c480d2ea70dc020710015de6dcdfcf5c642df27f8ff924c867ec201bf95eb->leave($__internal_3d7c480d2ea70dc020710015de6dcdfcf5c642df27f8ff924c867ec201bf95eb_prof);

        
        $__internal_85588b0ac214bb8b0c369bd70bc5e781e624e7f6ea0499b787c95175bc656fd7->leave($__internal_85588b0ac214bb8b0c369bd70bc5e781e624e7f6ea0499b787c95175bc656fd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
