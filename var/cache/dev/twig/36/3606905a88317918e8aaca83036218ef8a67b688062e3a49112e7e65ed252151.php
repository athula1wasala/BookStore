<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd52f6960022e064ba85cffbda420c85a2bb96e60ce94eed70030a21a61d466d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd52f6960022e064ba85cffbda420c85a2bb96e60ce94eed70030a21a61d466d->enter($__internal_cd52f6960022e064ba85cffbda420c85a2bb96e60ce94eed70030a21a61d466d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_bb90e789fb640114bde3291c9a4b43264941b6e4395d99125756e461a495bbff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb90e789fb640114bde3291c9a4b43264941b6e4395d99125756e461a495bbff->enter($__internal_bb90e789fb640114bde3291c9a4b43264941b6e4395d99125756e461a495bbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd52f6960022e064ba85cffbda420c85a2bb96e60ce94eed70030a21a61d466d->leave($__internal_cd52f6960022e064ba85cffbda420c85a2bb96e60ce94eed70030a21a61d466d_prof);

        
        $__internal_bb90e789fb640114bde3291c9a4b43264941b6e4395d99125756e461a495bbff->leave($__internal_bb90e789fb640114bde3291c9a4b43264941b6e4395d99125756e461a495bbff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea628075b2ddfb1f0bfd9ed1003578bab44e031dd18c62e390b201c66e024606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea628075b2ddfb1f0bfd9ed1003578bab44e031dd18c62e390b201c66e024606->enter($__internal_ea628075b2ddfb1f0bfd9ed1003578bab44e031dd18c62e390b201c66e024606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f05d8fe900b2f608163e1388cba0a6a56b5003008b0224829c8a1056e8fe7d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05d8fe900b2f608163e1388cba0a6a56b5003008b0224829c8a1056e8fe7d78->enter($__internal_f05d8fe900b2f608163e1388cba0a6a56b5003008b0224829c8a1056e8fe7d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f05d8fe900b2f608163e1388cba0a6a56b5003008b0224829c8a1056e8fe7d78->leave($__internal_f05d8fe900b2f608163e1388cba0a6a56b5003008b0224829c8a1056e8fe7d78_prof);

        
        $__internal_ea628075b2ddfb1f0bfd9ed1003578bab44e031dd18c62e390b201c66e024606->leave($__internal_ea628075b2ddfb1f0bfd9ed1003578bab44e031dd18c62e390b201c66e024606_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b1cb335216c42b641655c4c19b961d7b618aa2bf51dbe7a1477d7ea3b34a66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1cb335216c42b641655c4c19b961d7b618aa2bf51dbe7a1477d7ea3b34a66c->enter($__internal_6b1cb335216c42b641655c4c19b961d7b618aa2bf51dbe7a1477d7ea3b34a66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df20ebc4d44376c57c8ab4a6525a516fe68bc358ed9e799c20dc522d71df19c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df20ebc4d44376c57c8ab4a6525a516fe68bc358ed9e799c20dc522d71df19c3->enter($__internal_df20ebc4d44376c57c8ab4a6525a516fe68bc358ed9e799c20dc522d71df19c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_df20ebc4d44376c57c8ab4a6525a516fe68bc358ed9e799c20dc522d71df19c3->leave($__internal_df20ebc4d44376c57c8ab4a6525a516fe68bc358ed9e799c20dc522d71df19c3_prof);

        
        $__internal_6b1cb335216c42b641655c4c19b961d7b618aa2bf51dbe7a1477d7ea3b34a66c->leave($__internal_6b1cb335216c42b641655c4c19b961d7b618aa2bf51dbe7a1477d7ea3b34a66c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6762e024b875e972bbe1b9cf7eb1d878890e53ce84378adce64eba710ec2ec7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6762e024b875e972bbe1b9cf7eb1d878890e53ce84378adce64eba710ec2ec7b->enter($__internal_6762e024b875e972bbe1b9cf7eb1d878890e53ce84378adce64eba710ec2ec7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3b71b72bf4e45276604fa88d112d9fd99fcc2913f4c0ffc7a169090030b67851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b71b72bf4e45276604fa88d112d9fd99fcc2913f4c0ffc7a169090030b67851->enter($__internal_3b71b72bf4e45276604fa88d112d9fd99fcc2913f4c0ffc7a169090030b67851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3b71b72bf4e45276604fa88d112d9fd99fcc2913f4c0ffc7a169090030b67851->leave($__internal_3b71b72bf4e45276604fa88d112d9fd99fcc2913f4c0ffc7a169090030b67851_prof);

        
        $__internal_6762e024b875e972bbe1b9cf7eb1d878890e53ce84378adce64eba710ec2ec7b->leave($__internal_6762e024b875e972bbe1b9cf7eb1d878890e53ce84378adce64eba710ec2ec7b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/symfoney/bookstore/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
