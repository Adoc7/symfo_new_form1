<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ca36975a1b427ef7b40cee221cef30427c252cd891120f5c9816fac5ac0d6f10 extends Twig_Template
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
        $__internal_337c0865e25bf5856628fc71d237993069370b43d17f69668ed49b9aabf2f613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337c0865e25bf5856628fc71d237993069370b43d17f69668ed49b9aabf2f613->enter($__internal_337c0865e25bf5856628fc71d237993069370b43d17f69668ed49b9aabf2f613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a21df4f2f810b8be59ed976aac12d147f921b4af6c5a8b97dd567f7c2ed8d1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21df4f2f810b8be59ed976aac12d147f921b4af6c5a8b97dd567f7c2ed8d1a6->enter($__internal_a21df4f2f810b8be59ed976aac12d147f921b4af6c5a8b97dd567f7c2ed8d1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_337c0865e25bf5856628fc71d237993069370b43d17f69668ed49b9aabf2f613->leave($__internal_337c0865e25bf5856628fc71d237993069370b43d17f69668ed49b9aabf2f613_prof);

        
        $__internal_a21df4f2f810b8be59ed976aac12d147f921b4af6c5a8b97dd567f7c2ed8d1a6->leave($__internal_a21df4f2f810b8be59ed976aac12d147f921b4af6c5a8b97dd567f7c2ed8d1a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/symfo_new_form1/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
