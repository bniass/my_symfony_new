<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
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
        $__internal_cf3e73ca0d6ee571506fb45eaab46690004362b3bc4f9c0491c6f0eda98d4fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3e73ca0d6ee571506fb45eaab46690004362b3bc4f9c0491c6f0eda98d4fa3->enter($__internal_cf3e73ca0d6ee571506fb45eaab46690004362b3bc4f9c0491c6f0eda98d4fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6b163b12ed7ce1d54e6d44dcc3c062d4e00543bf270e0854788af6795d533948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b163b12ed7ce1d54e6d44dcc3c062d4e00543bf270e0854788af6795d533948->enter($__internal_6b163b12ed7ce1d54e6d44dcc3c062d4e00543bf270e0854788af6795d533948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf3e73ca0d6ee571506fb45eaab46690004362b3bc4f9c0491c6f0eda98d4fa3->leave($__internal_cf3e73ca0d6ee571506fb45eaab46690004362b3bc4f9c0491c6f0eda98d4fa3_prof);

        
        $__internal_6b163b12ed7ce1d54e6d44dcc3c062d4e00543bf270e0854788af6795d533948->leave($__internal_6b163b12ed7ce1d54e6d44dcc3c062d4e00543bf270e0854788af6795d533948_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e3ef565313daabf6330361810a82670d9acff4e27ac4ca42b13e4af0cf84e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3ef565313daabf6330361810a82670d9acff4e27ac4ca42b13e4af0cf84e5d->enter($__internal_8e3ef565313daabf6330361810a82670d9acff4e27ac4ca42b13e4af0cf84e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8cf247c7502e0e06d8ead1cd8898c50bc87e73faa3b85a5b9df8c8e6be9628ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf247c7502e0e06d8ead1cd8898c50bc87e73faa3b85a5b9df8c8e6be9628ea->enter($__internal_8cf247c7502e0e06d8ead1cd8898c50bc87e73faa3b85a5b9df8c8e6be9628ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8cf247c7502e0e06d8ead1cd8898c50bc87e73faa3b85a5b9df8c8e6be9628ea->leave($__internal_8cf247c7502e0e06d8ead1cd8898c50bc87e73faa3b85a5b9df8c8e6be9628ea_prof);

        
        $__internal_8e3ef565313daabf6330361810a82670d9acff4e27ac4ca42b13e4af0cf84e5d->leave($__internal_8e3ef565313daabf6330361810a82670d9acff4e27ac4ca42b13e4af0cf84e5d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d45abd596ea645b70f5a5c6f82313e4f4194c3f26268e34259d4bc3f2a006a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45abd596ea645b70f5a5c6f82313e4f4194c3f26268e34259d4bc3f2a006a33->enter($__internal_d45abd596ea645b70f5a5c6f82313e4f4194c3f26268e34259d4bc3f2a006a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a67e889a0726900ff33108f5dbb2a0802fc7bd94093cc85eb495e7645d78385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a67e889a0726900ff33108f5dbb2a0802fc7bd94093cc85eb495e7645d78385->enter($__internal_5a67e889a0726900ff33108f5dbb2a0802fc7bd94093cc85eb495e7645d78385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5a67e889a0726900ff33108f5dbb2a0802fc7bd94093cc85eb495e7645d78385->leave($__internal_5a67e889a0726900ff33108f5dbb2a0802fc7bd94093cc85eb495e7645d78385_prof);

        
        $__internal_d45abd596ea645b70f5a5c6f82313e4f4194c3f26268e34259d4bc3f2a006a33->leave($__internal_d45abd596ea645b70f5a5c6f82313e4f4194c3f26268e34259d4bc3f2a006a33_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f62c73e614143e7521c79f6d8ba88c8f1ba773783d643eb3b612b7e3776a277c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62c73e614143e7521c79f6d8ba88c8f1ba773783d643eb3b612b7e3776a277c->enter($__internal_f62c73e614143e7521c79f6d8ba88c8f1ba773783d643eb3b612b7e3776a277c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6eeb4178e52f80dc435b98eea818d0cf662eeba73578604f43caf83cffc6730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6eeb4178e52f80dc435b98eea818d0cf662eeba73578604f43caf83cffc6730->enter($__internal_a6eeb4178e52f80dc435b98eea818d0cf662eeba73578604f43caf83cffc6730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a6eeb4178e52f80dc435b98eea818d0cf662eeba73578604f43caf83cffc6730->leave($__internal_a6eeb4178e52f80dc435b98eea818d0cf662eeba73578604f43caf83cffc6730_prof);

        
        $__internal_f62c73e614143e7521c79f6d8ba88c8f1ba773783d643eb3b612b7e3776a277c->leave($__internal_f62c73e614143e7521c79f6d8ba88c8f1ba773783d643eb3b612b7e3776a277c_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/my_symfony_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
