<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
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
        $__internal_912375ce7d9d48525d3b87661c0e7c61d62c91ebb0e0b2058f49e19d32662b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912375ce7d9d48525d3b87661c0e7c61d62c91ebb0e0b2058f49e19d32662b82->enter($__internal_912375ce7d9d48525d3b87661c0e7c61d62c91ebb0e0b2058f49e19d32662b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9c2da97fc64b105dc5c4b6452fe8b5bdde261b65f29dace56bed0dd7f4216992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2da97fc64b105dc5c4b6452fe8b5bdde261b65f29dace56bed0dd7f4216992->enter($__internal_9c2da97fc64b105dc5c4b6452fe8b5bdde261b65f29dace56bed0dd7f4216992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_912375ce7d9d48525d3b87661c0e7c61d62c91ebb0e0b2058f49e19d32662b82->leave($__internal_912375ce7d9d48525d3b87661c0e7c61d62c91ebb0e0b2058f49e19d32662b82_prof);

        
        $__internal_9c2da97fc64b105dc5c4b6452fe8b5bdde261b65f29dace56bed0dd7f4216992->leave($__internal_9c2da97fc64b105dc5c4b6452fe8b5bdde261b65f29dace56bed0dd7f4216992_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0f3be26102e89c968281556bc633649c1f6ad0d15dd1d718cf98bf6140da508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f3be26102e89c968281556bc633649c1f6ad0d15dd1d718cf98bf6140da508->enter($__internal_e0f3be26102e89c968281556bc633649c1f6ad0d15dd1d718cf98bf6140da508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_107dd29e5cf4acffbaf7773d7519c3cb582054a0e09a318996eb45af6180d2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107dd29e5cf4acffbaf7773d7519c3cb582054a0e09a318996eb45af6180d2ed->enter($__internal_107dd29e5cf4acffbaf7773d7519c3cb582054a0e09a318996eb45af6180d2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_107dd29e5cf4acffbaf7773d7519c3cb582054a0e09a318996eb45af6180d2ed->leave($__internal_107dd29e5cf4acffbaf7773d7519c3cb582054a0e09a318996eb45af6180d2ed_prof);

        
        $__internal_e0f3be26102e89c968281556bc633649c1f6ad0d15dd1d718cf98bf6140da508->leave($__internal_e0f3be26102e89c968281556bc633649c1f6ad0d15dd1d718cf98bf6140da508_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2b8fa9b8ae7c2f5d431ddd591b68887a457870ee276dcb73a02df0a30adfd2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b8fa9b8ae7c2f5d431ddd591b68887a457870ee276dcb73a02df0a30adfd2b->enter($__internal_d2b8fa9b8ae7c2f5d431ddd591b68887a457870ee276dcb73a02df0a30adfd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c7f3e924f41d913856ae7e8d501a522e26b1850e891eb262bcebc0aa4826763a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f3e924f41d913856ae7e8d501a522e26b1850e891eb262bcebc0aa4826763a->enter($__internal_c7f3e924f41d913856ae7e8d501a522e26b1850e891eb262bcebc0aa4826763a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c7f3e924f41d913856ae7e8d501a522e26b1850e891eb262bcebc0aa4826763a->leave($__internal_c7f3e924f41d913856ae7e8d501a522e26b1850e891eb262bcebc0aa4826763a_prof);

        
        $__internal_d2b8fa9b8ae7c2f5d431ddd591b68887a457870ee276dcb73a02df0a30adfd2b->leave($__internal_d2b8fa9b8ae7c2f5d431ddd591b68887a457870ee276dcb73a02df0a30adfd2b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_588295a420ee7173baf4979c588b0da430deea25fe48a4333ada7cc53040f7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588295a420ee7173baf4979c588b0da430deea25fe48a4333ada7cc53040f7de->enter($__internal_588295a420ee7173baf4979c588b0da430deea25fe48a4333ada7cc53040f7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee98a7606c991974c720baeed410519f499cdcaff62d416f397a3aedff9a8769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee98a7606c991974c720baeed410519f499cdcaff62d416f397a3aedff9a8769->enter($__internal_ee98a7606c991974c720baeed410519f499cdcaff62d416f397a3aedff9a8769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ee98a7606c991974c720baeed410519f499cdcaff62d416f397a3aedff9a8769->leave($__internal_ee98a7606c991974c720baeed410519f499cdcaff62d416f397a3aedff9a8769_prof);

        
        $__internal_588295a420ee7173baf4979c588b0da430deea25fe48a4333ada7cc53040f7de->leave($__internal_588295a420ee7173baf4979c588b0da430deea25fe48a4333ada7cc53040f7de_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/my_symfony_new/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
