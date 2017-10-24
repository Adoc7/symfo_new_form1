<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_008a45078cb492bf58a2c861e6ba99d37f1360c136eb57e1abc7e5701a5363b0 extends Twig_Template
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
        $__internal_276705de1aa57251757910e83cbf0b3acbb3f95e237d34f891f3be0c36f86df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276705de1aa57251757910e83cbf0b3acbb3f95e237d34f891f3be0c36f86df3->enter($__internal_276705de1aa57251757910e83cbf0b3acbb3f95e237d34f891f3be0c36f86df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1b751f1a109a2924adce4da63aa04c4d39fba3b4e7133fe2f5715493bb142624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b751f1a109a2924adce4da63aa04c4d39fba3b4e7133fe2f5715493bb142624->enter($__internal_1b751f1a109a2924adce4da63aa04c4d39fba3b4e7133fe2f5715493bb142624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_276705de1aa57251757910e83cbf0b3acbb3f95e237d34f891f3be0c36f86df3->leave($__internal_276705de1aa57251757910e83cbf0b3acbb3f95e237d34f891f3be0c36f86df3_prof);

        
        $__internal_1b751f1a109a2924adce4da63aa04c4d39fba3b4e7133fe2f5715493bb142624->leave($__internal_1b751f1a109a2924adce4da63aa04c4d39fba3b4e7133fe2f5715493bb142624_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
