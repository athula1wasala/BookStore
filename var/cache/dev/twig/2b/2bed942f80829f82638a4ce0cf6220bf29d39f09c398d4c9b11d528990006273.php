<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_74c868a56d6355b7de9680f17ca3ce640c925ebd6476d6efec672482a0905706 extends Twig_Template
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
        $__internal_eeed5d6aa16ddecbd16ec4432deb7ff3e997cf9441c0cd4d9a826016b809acf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeed5d6aa16ddecbd16ec4432deb7ff3e997cf9441c0cd4d9a826016b809acf4->enter($__internal_eeed5d6aa16ddecbd16ec4432deb7ff3e997cf9441c0cd4d9a826016b809acf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_873300b8b0fd6de5116b1882a929276432773c4a520b07229ea0e222192a5ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873300b8b0fd6de5116b1882a929276432773c4a520b07229ea0e222192a5ab2->enter($__internal_873300b8b0fd6de5116b1882a929276432773c4a520b07229ea0e222192a5ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_eeed5d6aa16ddecbd16ec4432deb7ff3e997cf9441c0cd4d9a826016b809acf4->leave($__internal_eeed5d6aa16ddecbd16ec4432deb7ff3e997cf9441c0cd4d9a826016b809acf4_prof);

        
        $__internal_873300b8b0fd6de5116b1882a929276432773c4a520b07229ea0e222192a5ab2->leave($__internal_873300b8b0fd6de5116b1882a929276432773c4a520b07229ea0e222192a5ab2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/symfoney/bookstore/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
