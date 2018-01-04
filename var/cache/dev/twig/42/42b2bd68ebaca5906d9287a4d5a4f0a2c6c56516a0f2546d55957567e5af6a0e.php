<?php

/* base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5c1d226060ff43072c1666d62a83b0dbeb94bf9a17a7d2d28c2c667097b19ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c1d226060ff43072c1666d62a83b0dbeb94bf9a17a7d2d28c2c667097b19ad->enter($__internal_e5c1d226060ff43072c1666d62a83b0dbeb94bf9a17a7d2d28c2c667097b19ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c639d0ba7b6f7c83c61b426af571a26e05b6acc447dc111980a10c7b98d8188d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c639d0ba7b6f7c83c61b426af571a26e05b6acc447dc111980a10c7b98d8188d->enter($__internal_c639d0ba7b6f7c83c61b426af571a26e05b6acc447dc111980a10c7b98d8188d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e5c1d226060ff43072c1666d62a83b0dbeb94bf9a17a7d2d28c2c667097b19ad->leave($__internal_e5c1d226060ff43072c1666d62a83b0dbeb94bf9a17a7d2d28c2c667097b19ad_prof);

        
        $__internal_c639d0ba7b6f7c83c61b426af571a26e05b6acc447dc111980a10c7b98d8188d->leave($__internal_c639d0ba7b6f7c83c61b426af571a26e05b6acc447dc111980a10c7b98d8188d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd70545b1d67900dad39c3f9c60780b8e7db35e94d321ef55f83723e138caf84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd70545b1d67900dad39c3f9c60780b8e7db35e94d321ef55f83723e138caf84->enter($__internal_dd70545b1d67900dad39c3f9c60780b8e7db35e94d321ef55f83723e138caf84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9453decfbbac8ffbbd1cee9439306c9006609b22a3cbbc29bde00ebb0e8151e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9453decfbbac8ffbbd1cee9439306c9006609b22a3cbbc29bde00ebb0e8151e->enter($__internal_a9453decfbbac8ffbbd1cee9439306c9006609b22a3cbbc29bde00ebb0e8151e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a9453decfbbac8ffbbd1cee9439306c9006609b22a3cbbc29bde00ebb0e8151e->leave($__internal_a9453decfbbac8ffbbd1cee9439306c9006609b22a3cbbc29bde00ebb0e8151e_prof);

        
        $__internal_dd70545b1d67900dad39c3f9c60780b8e7db35e94d321ef55f83723e138caf84->leave($__internal_dd70545b1d67900dad39c3f9c60780b8e7db35e94d321ef55f83723e138caf84_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c5fac5d4a285b594babf4e02233921584c563c62174e3daf73331bb0c7f521e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c5fac5d4a285b594babf4e02233921584c563c62174e3daf73331bb0c7f521e->enter($__internal_3c5fac5d4a285b594babf4e02233921584c563c62174e3daf73331bb0c7f521e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8644c01d17fa8dad63b95dd4ed7d8e3a3a5e0ac149f812dea4ea3835ccd57b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8644c01d17fa8dad63b95dd4ed7d8e3a3a5e0ac149f812dea4ea3835ccd57b99->enter($__internal_8644c01d17fa8dad63b95dd4ed7d8e3a3a5e0ac149f812dea4ea3835ccd57b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8644c01d17fa8dad63b95dd4ed7d8e3a3a5e0ac149f812dea4ea3835ccd57b99->leave($__internal_8644c01d17fa8dad63b95dd4ed7d8e3a3a5e0ac149f812dea4ea3835ccd57b99_prof);

        
        $__internal_3c5fac5d4a285b594babf4e02233921584c563c62174e3daf73331bb0c7f521e->leave($__internal_3c5fac5d4a285b594babf4e02233921584c563c62174e3daf73331bb0c7f521e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_467d5d38f83c3dca28fed92062677aa922cca910cd9d26288f589f3fba066715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467d5d38f83c3dca28fed92062677aa922cca910cd9d26288f589f3fba066715->enter($__internal_467d5d38f83c3dca28fed92062677aa922cca910cd9d26288f589f3fba066715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c3c0ec7c8a07b7b85b4d809149486f6ae7f1300ca4d7812a5be1fee6fada9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3c0ec7c8a07b7b85b4d809149486f6ae7f1300ca4d7812a5be1fee6fada9fb->enter($__internal_1c3c0ec7c8a07b7b85b4d809149486f6ae7f1300ca4d7812a5be1fee6fada9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1c3c0ec7c8a07b7b85b4d809149486f6ae7f1300ca4d7812a5be1fee6fada9fb->leave($__internal_1c3c0ec7c8a07b7b85b4d809149486f6ae7f1300ca4d7812a5be1fee6fada9fb_prof);

        
        $__internal_467d5d38f83c3dca28fed92062677aa922cca910cd9d26288f589f3fba066715->leave($__internal_467d5d38f83c3dca28fed92062677aa922cca910cd9d26288f589f3fba066715_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a02398348bac4c2521bb35e09e3ee31433f5a4a69cfbd370f6471f3a54053d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02398348bac4c2521bb35e09e3ee31433f5a4a69cfbd370f6471f3a54053d44->enter($__internal_a02398348bac4c2521bb35e09e3ee31433f5a4a69cfbd370f6471f3a54053d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2fde8f8e832d62a8dab1cd64781cf4f64474cba456015126ac7786d898dc6514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fde8f8e832d62a8dab1cd64781cf4f64474cba456015126ac7786d898dc6514->enter($__internal_2fde8f8e832d62a8dab1cd64781cf4f64474cba456015126ac7786d898dc6514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2fde8f8e832d62a8dab1cd64781cf4f64474cba456015126ac7786d898dc6514->leave($__internal_2fde8f8e832d62a8dab1cd64781cf4f64474cba456015126ac7786d898dc6514_prof);

        
        $__internal_a02398348bac4c2521bb35e09e3ee31433f5a4a69cfbd370f6471f3a54053d44->leave($__internal_a02398348bac4c2521bb35e09e3ee31433f5a4a69cfbd370f6471f3a54053d44_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/my_symfony_new/app/Resources/views/base.html.twig");
    }
}
