<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ee77b0566e02c08097cc0818e6e220f0438fc514ff5c2ae52342b3a8ccea3295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7dd5f3811515510bc9a2cec9acdbee9dbdcaa665e527d76dbd50d5fb3c9ad9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7dd5f3811515510bc9a2cec9acdbee9dbdcaa665e527d76dbd50d5fb3c9ad9b->enter($__internal_d7dd5f3811515510bc9a2cec9acdbee9dbdcaa665e527d76dbd50d5fb3c9ad9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8ccb2c7801315e3501a9deba89109abe21fdd6eb3ea72fcada6f9c6885e232bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ccb2c7801315e3501a9deba89109abe21fdd6eb3ea72fcada6f9c6885e232bb->enter($__internal_8ccb2c7801315e3501a9deba89109abe21fdd6eb3ea72fcada6f9c6885e232bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7dd5f3811515510bc9a2cec9acdbee9dbdcaa665e527d76dbd50d5fb3c9ad9b->leave($__internal_d7dd5f3811515510bc9a2cec9acdbee9dbdcaa665e527d76dbd50d5fb3c9ad9b_prof);

        
        $__internal_8ccb2c7801315e3501a9deba89109abe21fdd6eb3ea72fcada6f9c6885e232bb->leave($__internal_8ccb2c7801315e3501a9deba89109abe21fdd6eb3ea72fcada6f9c6885e232bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d86a27ef39f89de23f15c57e9b78d1e5b748d605714b0c4539a9010cf8bf6583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86a27ef39f89de23f15c57e9b78d1e5b748d605714b0c4539a9010cf8bf6583->enter($__internal_d86a27ef39f89de23f15c57e9b78d1e5b748d605714b0c4539a9010cf8bf6583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae68e8f8a16d54140b72fa0a91bc085ed8ac8c1f1c4e5c20f9bb0edcd8b7ae13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae68e8f8a16d54140b72fa0a91bc085ed8ac8c1f1c4e5c20f9bb0edcd8b7ae13->enter($__internal_ae68e8f8a16d54140b72fa0a91bc085ed8ac8c1f1c4e5c20f9bb0edcd8b7ae13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ae68e8f8a16d54140b72fa0a91bc085ed8ac8c1f1c4e5c20f9bb0edcd8b7ae13->leave($__internal_ae68e8f8a16d54140b72fa0a91bc085ed8ac8c1f1c4e5c20f9bb0edcd8b7ae13_prof);

        
        $__internal_d86a27ef39f89de23f15c57e9b78d1e5b748d605714b0c4539a9010cf8bf6583->leave($__internal_d86a27ef39f89de23f15c57e9b78d1e5b748d605714b0c4539a9010cf8bf6583_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_eaa185bf0f21427f08d5bf82dac0ae1ece40d2edf07762c85709a68e7dbd2ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa185bf0f21427f08d5bf82dac0ae1ece40d2edf07762c85709a68e7dbd2ab0->enter($__internal_eaa185bf0f21427f08d5bf82dac0ae1ece40d2edf07762c85709a68e7dbd2ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b23c9d4d20e71fe475308e534cc82eb3e2ffc87551b8672ec2cedd40469474ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23c9d4d20e71fe475308e534cc82eb3e2ffc87551b8672ec2cedd40469474ad->enter($__internal_b23c9d4d20e71fe475308e534cc82eb3e2ffc87551b8672ec2cedd40469474ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b23c9d4d20e71fe475308e534cc82eb3e2ffc87551b8672ec2cedd40469474ad->leave($__internal_b23c9d4d20e71fe475308e534cc82eb3e2ffc87551b8672ec2cedd40469474ad_prof);

        
        $__internal_eaa185bf0f21427f08d5bf82dac0ae1ece40d2edf07762c85709a68e7dbd2ab0->leave($__internal_eaa185bf0f21427f08d5bf82dac0ae1ece40d2edf07762c85709a68e7dbd2ab0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_92b24379194e64639f3e5aa3b2d217ce8c5a7c5a0bae88ad7b12566dd035b2a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b24379194e64639f3e5aa3b2d217ce8c5a7c5a0bae88ad7b12566dd035b2a2->enter($__internal_92b24379194e64639f3e5aa3b2d217ce8c5a7c5a0bae88ad7b12566dd035b2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a6c07d740d7c37cc682f6f13bc0e59ed4fcd1f22d2e87001fd7a45b3bfcf244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6c07d740d7c37cc682f6f13bc0e59ed4fcd1f22d2e87001fd7a45b3bfcf244->enter($__internal_6a6c07d740d7c37cc682f6f13bc0e59ed4fcd1f22d2e87001fd7a45b3bfcf244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6a6c07d740d7c37cc682f6f13bc0e59ed4fcd1f22d2e87001fd7a45b3bfcf244->leave($__internal_6a6c07d740d7c37cc682f6f13bc0e59ed4fcd1f22d2e87001fd7a45b3bfcf244_prof);

        
        $__internal_92b24379194e64639f3e5aa3b2d217ce8c5a7c5a0bae88ad7b12566dd035b2a2->leave($__internal_92b24379194e64639f3e5aa3b2d217ce8c5a7c5a0bae88ad7b12566dd035b2a2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfoney/bookstore/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
