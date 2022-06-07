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

/* team/organigramme.html.twig */
class __TwigTemplate_c62f1a1965f83f08257dd7f6e7f58df6ebf4ce50f02bd7aeaf5bd7c1825fd089 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Accueil' => [$this, 'block_Accueil'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/organigramme.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "team/organigramme.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_Accueil($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Accueil"));

        echo "Organigramme
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div
\t\tclass=\"example-wrapper\">
\t\t";
        // line 29
        echo "\t\t<h1>Organigramme de l'équipe</h1>
\t\t<p>
\t\t\t<ul>
\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 33
            echo "\t\t\t\t
\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 34), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 34), "html", null, true);
            echo "

\t\t\t\t\t";
            // line 36
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "sup_hierarchique", [], "any", false, false, false, 36), "Paul Stone"))) {
                // line 37
                echo "\t\t\t\t \t\t<h2>
\t\t\t\t\t\t\t\t<li>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 38), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 38), "html", null, true);
                echo "&nbsp;
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 40
$context["user"], "sup_hierarchique", [], "any", false, false, false, 40), "Paul Martin"))) {
                // line 41
                echo "\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t<li>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 42), "html", null, true);
                echo " &nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 42), "html", null, true);
                echo "</li>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 44
$context["user"], "sup_hierarchique", [], "any", false, false, false, 44), "Justine Dupont"))) {
                // line 45
                echo "\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t<li>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 46), "html", null, true);
                echo " &nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 46), "html", null, true);
                echo "</li>
\t\t\t\t\t\t</h4>

\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t 
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t
\t\t</ul>
\t</p>

\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team/organigramme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 52,  148 => 50,  139 => 46,  136 => 45,  134 => 44,  127 => 42,  124 => 41,  122 => 40,  115 => 38,  112 => 37,  110 => 36,  103 => 34,  100 => 33,  96 => 32,  91 => 29,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block Accueil %}Organigramme
{% endblock %}

{% block body %}
\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.example-wrapper code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div
\t\tclass=\"example-wrapper\">
\t\t{# <h1>Hello {{ controller_name }}! ✅</h1>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    This friendly message is coming from:
\t\t\t\t\t\t\t\t    <ul>
\t\t\t\t\t\t\t\t        <li>Your controller at <code><a href=\"{{ 'C:/laragon/www/tp-Symfony/Api-symfony/src/Controller/DefaultController.php'|file_link(0) }}\">src/Controller/DefaultController.php</a></code></li>
\t\t\t\t\t\t\t\t        <li>Your template at <code><a href=\"{{ 'C:/laragon/www/tp-Symfony/Api-symfony/templates/default/index.html.twig'|file_link(0) }}\">templates/default/index.html.twig</a></code></li>
\t\t\t\t\t\t\t\t    </ul> #}
\t\t<h1>Organigramme de l'équipe</h1>
\t\t<p>
\t\t\t<ul>
\t\t\t{% for user in message %}
\t\t\t\t
\t\t\t\t{{user.firstname }} {{ user.lastname }}

\t\t\t\t\t{% if user.sup_hierarchique =='Paul Stone' %}
\t\t\t\t \t\t<h2>
\t\t\t\t\t\t\t\t<li>{{ user.firstname}}&nbsp;{{ user.lastname}}&nbsp;
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t {% elseif user.sup_hierarchique ==\"Paul Martin\" %}
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t<li>{{user.firstname}} &nbsp;{{user.lastname}}</li>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t{% elseif user.sup_hierarchique ==\"Justine Dupont\" %}
\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t<li>{{user.firstname}} &nbsp;{{user.lastname}}</li>
\t\t\t\t\t\t</h4>

\t\t\t\t\t{% endif %}
\t\t\t\t 
\t\t\t\t\t{% endfor %}
\t\t
\t\t</ul>
\t</p>

\t</div>
{% endblock %}
", "team/organigramme.html.twig", "C:\\laragon\\www\\tp-symfony2\\Api-symfony\\templates\\team\\organigramme.html.twig");
    }
}
