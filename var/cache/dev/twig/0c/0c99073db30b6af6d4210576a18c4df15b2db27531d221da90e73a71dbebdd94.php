<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_df2e52560fa055c85c66e821eb660f98c56830707b00806bbfb2e7bbbccf879b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2e52560fa055c85c66e821eb660f98c56830707b00806bbfb2e7bbbccf879b->enter($__internal_df2e52560fa055c85c66e821eb660f98c56830707b00806bbfb2e7bbbccf879b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e6e4fabece78287a447bc238c6cbcabd82d5632f77860f4d0380f9d0fe1fc174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e4fabece78287a447bc238c6cbcabd82d5632f77860f4d0380f9d0fe1fc174->enter($__internal_e6e4fabece78287a447bc238c6cbcabd82d5632f77860f4d0380f9d0fe1fc174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df2e52560fa055c85c66e821eb660f98c56830707b00806bbfb2e7bbbccf879b->leave($__internal_df2e52560fa055c85c66e821eb660f98c56830707b00806bbfb2e7bbbccf879b_prof);

        
        $__internal_e6e4fabece78287a447bc238c6cbcabd82d5632f77860f4d0380f9d0fe1fc174->leave($__internal_e6e4fabece78287a447bc238c6cbcabd82d5632f77860f4d0380f9d0fe1fc174_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a07de3602241ae6a79cb9b7ff057f0ec348522d0f5e02d3da43d5b2d83ca335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a07de3602241ae6a79cb9b7ff057f0ec348522d0f5e02d3da43d5b2d83ca335->enter($__internal_7a07de3602241ae6a79cb9b7ff057f0ec348522d0f5e02d3da43d5b2d83ca335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_62c1e74f4b137f0e102b4c9f659b48d3c13f57974a5165c4775a44920a696809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c1e74f4b137f0e102b4c9f659b48d3c13f57974a5165c4775a44920a696809->enter($__internal_62c1e74f4b137f0e102b4c9f659b48d3c13f57974a5165c4775a44920a696809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_62c1e74f4b137f0e102b4c9f659b48d3c13f57974a5165c4775a44920a696809->leave($__internal_62c1e74f4b137f0e102b4c9f659b48d3c13f57974a5165c4775a44920a696809_prof);

        
        $__internal_7a07de3602241ae6a79cb9b7ff057f0ec348522d0f5e02d3da43d5b2d83ca335->leave($__internal_7a07de3602241ae6a79cb9b7ff057f0ec348522d0f5e02d3da43d5b2d83ca335_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f588f736aebbf62415eb29862c9a3c2df5c6bfbc245d595f1631e2393b46d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f588f736aebbf62415eb29862c9a3c2df5c6bfbc245d595f1631e2393b46d94->enter($__internal_0f588f736aebbf62415eb29862c9a3c2df5c6bfbc245d595f1631e2393b46d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b948fdac5268587d014576aab3503374c469a878d177f326843a51cd96937fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b948fdac5268587d014576aab3503374c469a878d177f326843a51cd96937fb6->enter($__internal_b948fdac5268587d014576aab3503374c469a878d177f326843a51cd96937fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b948fdac5268587d014576aab3503374c469a878d177f326843a51cd96937fb6->leave($__internal_b948fdac5268587d014576aab3503374c469a878d177f326843a51cd96937fb6_prof);

        
        $__internal_0f588f736aebbf62415eb29862c9a3c2df5c6bfbc245d595f1631e2393b46d94->leave($__internal_0f588f736aebbf62415eb29862c9a3c2df5c6bfbc245d595f1631e2393b46d94_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ab16a3cb1a5066536138b889d78fe617057ea2b07420f49a1fed70a477aae49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab16a3cb1a5066536138b889d78fe617057ea2b07420f49a1fed70a477aae49->enter($__internal_1ab16a3cb1a5066536138b889d78fe617057ea2b07420f49a1fed70a477aae49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_64e7540bc9a1fbf65a2e852212c76932c34dac931f316c76a09c2819a6687041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e7540bc9a1fbf65a2e852212c76932c34dac931f316c76a09c2819a6687041->enter($__internal_64e7540bc9a1fbf65a2e852212c76932c34dac931f316c76a09c2819a6687041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_64e7540bc9a1fbf65a2e852212c76932c34dac931f316c76a09c2819a6687041->leave($__internal_64e7540bc9a1fbf65a2e852212c76932c34dac931f316c76a09c2819a6687041_prof);

        
        $__internal_1ab16a3cb1a5066536138b889d78fe617057ea2b07420f49a1fed70a477aae49->leave($__internal_1ab16a3cb1a5066536138b889d78fe617057ea2b07420f49a1fed70a477aae49_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/my_symfony_new/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
