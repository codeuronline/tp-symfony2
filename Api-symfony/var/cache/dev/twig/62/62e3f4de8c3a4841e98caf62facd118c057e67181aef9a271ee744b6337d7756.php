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
\t\t<h1>Organigramme de l'équipe</h1>
\t\t<p>
\t\t";
        // line 24
        $context["index"] = 0;
        // line 25
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filterUsers"]) || array_key_exists("filterUsers", $context) ? $context["filterUsers"] : (function () { throw new RuntimeError('Variable "filterUsers" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "\t\t\t\t
\t\t\t\t";
            // line 27
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["user"], "supHierarchique", [], "any", false, false, false, 27))) {
                // line 28
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 28), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 28), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 28), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "label", [], "any", false, false, false, 28), "html", null, true);
                echo ")[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "supHierarchique", [], "any", false, false, false, 28), "html", null, true);
                echo "]<br>
\t\t\t\t";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 29
$context["user"], "supHierarchique", [], "any", false, false, false, 29), "Paul Stone"))) {
                // line 30
                echo "\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 30), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 30), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "label", [], "any", false, false, false, 30), "html", null, true);
                echo ")[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "supHierarchique", [], "any", false, false, false, 30), "html", null, true);
                echo "]<br>
\t\t\t\t";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 31
$context["user"], "supHierarchique", [], "any", false, false, false, 31), "Paul Martin"))) {
                // line 32
                echo "\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 32), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 32), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "label", [], "any", false, false, false, 32), "html", null, true);
                echo ")[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "supHierarchique", [], "any", false, false, false, 32), "html", null, true);
                echo "]<br>
\t\t\t\t";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 33
$context["user"], "supHierarchique", [], "any", false, false, false, 33), "Justine Dupond"))) {
                // line 34
                echo "\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 34), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 34), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "label", [], "any", false, false, false, 34), "html", null, true);
                echo ")[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "supHierarchique", [], "any", false, false, false, 34), "html", null, true);
                echo "]<br>\t\t\t\t\t\t\t
\t\t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 36), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 36), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "label", [], "any", false, false, false, 36), "html", null, true);
                echo ")[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "supHierarchique", [], "any", false, false, false, 36), "html", null, true);
                echo "]
\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "

\t\t</p>

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
        return array (  185 => 40,  178 => 38,  164 => 36,  150 => 34,  148 => 33,  135 => 32,  133 => 31,  120 => 30,  118 => 29,  105 => 28,  103 => 27,  100 => 26,  95 => 25,  93 => 24,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
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
\t\t<h1>Organigramme de l'équipe</h1>
\t\t<p>
\t\t{% set index =0 %}
\t\t\t{% for user in filterUsers  %}
\t\t\t\t
\t\t\t\t{% if user.supHierarchique is empty %}
\t\t\t\t\t{{user.id}} {{user.firstname}} {{user.lastname}}({{user.label}})[{{user.supHierarchique}}]<br>
\t\t\t\t{% elseif user.supHierarchique == \"Paul Stone\" %}
\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;{{user.id}} {{user.firstname}} {{user.lastname}}({{user.label}})[{{user.supHierarchique}}]<br>
\t\t\t\t{% elseif  user.supHierarchique == \"Paul Martin\" %}
\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{user.id}} {{user.firstname}} {{user.lastname}}({{user.label}})[{{user.supHierarchique}}]<br>
\t\t\t\t{% elseif user.supHierarchique == \"Justine Dupond\" %}
\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{user.id}} {{user.firstname}} {{user.lastname}}({{user.label}})[{{user.supHierarchique}}]<br>\t\t\t\t\t\t\t
\t\t\t\t{% else %}
\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{user.id}} {{user.firstname}} {{user.lastname}}({{user.label}})[{{user.supHierarchique}}]
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t{% endfor %}


\t\t</p>

\t</div>
{% endblock %}
", "team/organigramme.html.twig", "C:\\laragon\\www\\tp-symfony2\\Api-symfony\\templates\\team\\organigramme.html.twig");
    }
}
