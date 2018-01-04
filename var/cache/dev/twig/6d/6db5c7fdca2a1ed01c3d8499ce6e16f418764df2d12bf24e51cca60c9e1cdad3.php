<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_34616eeb8a8f3e15a7fbdc93c9f045d3e018ef568ea303a611410a5313b4465c extends Twig_Template
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
        $__internal_d127fda1ab155a03af7bbdf8e602551bd4cb20809673923d8da7f107a2c39b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d127fda1ab155a03af7bbdf8e602551bd4cb20809673923d8da7f107a2c39b99->enter($__internal_d127fda1ab155a03af7bbdf8e602551bd4cb20809673923d8da7f107a2c39b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        $__internal_daf8eae427d520cb433a24a54ccb841b752d67d93571c4c30b9afcc77fbc3302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf8eae427d520cb433a24a54ccb841b752d67d93571c4c30b9afcc77fbc3302->enter($__internal_daf8eae427d520cb433a24a54ccb841b752d67d93571c4c30b9afcc77fbc3302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 2
        echo "

<html>

  <body>

    Hello World!

  </body>

</html>
";
        
        $__internal_d127fda1ab155a03af7bbdf8e602551bd4cb20809673923d8da7f107a2c39b99->leave($__internal_d127fda1ab155a03af7bbdf8e602551bd4cb20809673923d8da7f107a2c39b99_prof);

        
        $__internal_daf8eae427d520cb433a24a54ccb841b752d67d93571c4c30b9afcc77fbc3302->leave($__internal_daf8eae427d520cb433a24a54ccb841b752d67d93571c4c30b9afcc77fbc3302_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Default/index.html.twig #}


<html>

  <body>

    Hello World!

  </body>

</html>
", "OCPlatformBundle:Default:index.html.twig", "/var/www/html/my_symfony_new/src/OC/PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
