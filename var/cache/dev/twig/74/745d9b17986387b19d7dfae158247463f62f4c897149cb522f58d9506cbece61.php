<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_13e9e035589684f58241ac5c4bdf87b5b84d594c3417c79a17bd4dd0d7cb8806 extends Twig_Template
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
        $__internal_96495ac87b39a019df67c8353f5f76ca93b37d6bdf0592b59057dbed027efb11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96495ac87b39a019df67c8353f5f76ca93b37d6bdf0592b59057dbed027efb11->enter($__internal_96495ac87b39a019df67c8353f5f76ca93b37d6bdf0592b59057dbed027efb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_5e4abfcb57947fd6cbd4e2e86b16133e2b79c958b3f7977148c7dfc9ed24dc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4abfcb57947fd6cbd4e2e86b16133e2b79c958b3f7977148c7dfc9ed24dc84->enter($__internal_5e4abfcb57947fd6cbd4e2e86b16133e2b79c958b3f7977148c7dfc9ed24dc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        // line 2
        echo "

<!DOCTYPE html>

<html>

  <head>

    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>

  </head>

  <body>

    <h1>Hello World !</h1>


    <p>

      Le Hello World est un grand classique en programmation.

      Il signifie énormément, car cela veut dire que vous avez

      réussi à exécuter le programme pour accomplir une tâche simple :

      afficher ce hello world !

    </p>

    <h1>Hello ";
        // line 31
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

  </body>

</html>

";
        
        $__internal_96495ac87b39a019df67c8353f5f76ca93b37d6bdf0592b59057dbed027efb11->leave($__internal_96495ac87b39a019df67c8353f5f76ca93b37d6bdf0592b59057dbed027efb11_prof);

        
        $__internal_5e4abfcb57947fd6cbd4e2e86b16133e2b79c958b3f7977148c7dfc9ed24dc84->leave($__internal_5e4abfcb57947fd6cbd4e2e86b16133e2b79c958b3f7977148c7dfc9ed24dc84_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 31,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}


<!DOCTYPE html>

<html>

  <head>

    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>

  </head>

  <body>

    <h1>Hello World !</h1>


    <p>

      Le Hello World est un grand classique en programmation.

      Il signifie énormément, car cela veut dire que vous avez

      réussi à exécuter le programme pour accomplir une tâche simple :

      afficher ce hello world !

    </p>

    <h1>Hello {{ nom }} !</h1>

  </body>

</html>

", "OCPlatformBundle:Advert:index.html.twig", "/var/www/html/my_symfony_new/src/OC/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
