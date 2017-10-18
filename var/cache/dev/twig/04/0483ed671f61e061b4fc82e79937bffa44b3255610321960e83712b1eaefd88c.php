<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_575fc7ea33e43539e238c4c2bf46e03755d84bb1f7282dc21381d151cffef28c extends Twig_Template
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
        $__internal_d9dd0fd869697869bc16fd9522b398328cd01891e9a9e925841b109dec7663ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9dd0fd869697869bc16fd9522b398328cd01891e9a9e925841b109dec7663ba->enter($__internal_d9dd0fd869697869bc16fd9522b398328cd01891e9a9e925841b109dec7663ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_237d6e8b95c03e86d1ddd8eba4c27820186002c72ae5d42344adf08198ed420b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237d6e8b95c03e86d1ddd8eba4c27820186002c72ae5d42344adf08198ed420b->enter($__internal_237d6e8b95c03e86d1ddd8eba4c27820186002c72ae5d42344adf08198ed420b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d9dd0fd869697869bc16fd9522b398328cd01891e9a9e925841b109dec7663ba->leave($__internal_d9dd0fd869697869bc16fd9522b398328cd01891e9a9e925841b109dec7663ba_prof);

        
        $__internal_237d6e8b95c03e86d1ddd8eba4c27820186002c72ae5d42344adf08198ed420b->leave($__internal_237d6e8b95c03e86d1ddd8eba4c27820186002c72ae5d42344adf08198ed420b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
