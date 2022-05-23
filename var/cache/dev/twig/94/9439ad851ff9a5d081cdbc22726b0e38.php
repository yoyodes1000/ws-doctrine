<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_6c38e8d4f00178a811a023df13cece8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h1 class=\"text-center text-primary my-3\">Gestion des écureuils et du stock de noix</h1>
\t<section class=\"container bg-light bg-opacity-50 rounded p-3\">
\t\t<div class=\"squirrels mb-5\">
\t\t\t<h2>Liste des écureuils ayant accès au stock :</h2>
\t\t\t";
        // line 8
        if (( !array_key_exists("squirrels", $context) || twig_test_empty((isset($context["squirrels"]) || array_key_exists("squirrels", $context) ? $context["squirrels"] : (function () { throw new RuntimeError('Variable "squirrels" does not exist.', 8, $this->source); })())))) {
            // line 9
            echo "\t\t\t\t<span class=\"alert-danger rounded p-2\">Aucun écureuil !</span>
\t\t\t";
        } else {
            // line 11
            echo "\t\t\t\t<ul>
\t\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["squirrels"]) || array_key_exists("squirrels", $context) ? $context["squirrels"] : (function () { throw new RuntimeError('Variable "squirrels" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["squirrel"]) {
                // line 13
                echo "\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["squirrel"], "name", [], "any", false, false, false, 13), "html", null, true);
                echo "</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['squirrel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t\t\t\t</ul>
\t\t\t";
        }
        // line 17
        echo "\t\t</div>
\t\t";
        // line 18
        if (( !array_key_exists("nuts", $context) || twig_test_empty((isset($context["nuts"]) || array_key_exists("nuts", $context) ? $context["nuts"] : (function () { throw new RuntimeError('Variable "nuts" does not exist.', 18, $this->source); })())))) {
            // line 19
            echo "\t\t\t<span class=\"alert-danger rounded p-2 my-5\">Aucune noix en stock !</span>
\t\t";
        } else {
            // line 21
            echo "\t\t\t<table class=\"table bg-secondary bg-opacity-50\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t<td>Quantité</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nuts"]) || array_key_exists("nuts", $context) ? $context["nuts"] : (function () { throw new RuntimeError('Variable "nuts" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["nut"]) {
                // line 29
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nut"], "name", [], "any", false, false, false, 31), "html", null, true);
                echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nut"], "stock", [], "any", false, false, false, 34), "html", null, true);
                echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nut'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t</table>
\t\t";
        }
        // line 40
        echo "\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 40,  142 => 38,  132 => 34,  126 => 31,  122 => 29,  118 => 28,  109 => 21,  105 => 19,  103 => 18,  100 => 17,  96 => 15,  87 => 13,  83 => 12,  80 => 11,  76 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
\t<h1 class=\"text-center text-primary my-3\">Gestion des écureuils et du stock de noix</h1>
\t<section class=\"container bg-light bg-opacity-50 rounded p-3\">
\t\t<div class=\"squirrels mb-5\">
\t\t\t<h2>Liste des écureuils ayant accès au stock :</h2>
\t\t\t{% if squirrels is not defined or squirrels is empty %}
\t\t\t\t<span class=\"alert-danger rounded p-2\">Aucun écureuil !</span>
\t\t\t{% else %}
\t\t\t\t<ul>
\t\t\t\t\t{% for squirrel in squirrels %}
\t\t\t\t\t\t<li>{{ squirrel.name }}</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t{% endif %}
\t\t</div>
\t\t{% if nuts is not defined or nuts is empty %}
\t\t\t<span class=\"alert-danger rounded p-2 my-5\">Aucune noix en stock !</span>
\t\t{% else %}
\t\t\t<table class=\"table bg-secondary bg-opacity-50\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Nom</td>
\t\t\t\t\t\t<td>Quantité</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t{% for nut in nuts %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ nut.name }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{ nut.stock }}
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</table>
\t\t{% endif %}
\t</section>
{% endblock %}
", "home/index.html.twig", "/home/thibault/WCS/TA/Workshop/Semaine12/test/test/templates/home/index.html.twig");
    }
}
