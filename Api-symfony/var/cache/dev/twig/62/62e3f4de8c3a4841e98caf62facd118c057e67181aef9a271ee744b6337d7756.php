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
\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 32
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "supHierarchique", [], "any", false, false, false, 32), "Paul Stone"))) {
                echo " 
\t\t\t\t\t";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "supHierarchique", [], "any", false, false, false, 33), "html", null, true);
                echo "
\t\t\t\t\t
\t\t\t\t\t\t<p>Le supérieur est Paul Stone</p>
\t\t\t\t\t\t\t ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 36), "html", null, true);
                echo "
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 38), "html", null, true);
                echo "
\t\t\t\t\t\t\t&nbsp; 
\t\t\t\t\t<br>
\t\t\t\t\t ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 41
$context["user"], "supHierarchique", [], "any", false, false, false, 41), "Paul Martin"))) {
                echo " 
\t\t\t\t\t\t";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "supHierarchique", [], "any", false, false, false, 42), "html", null, true);
                echo "
\t\t\t\t\t
\t\t\t\t\t\t<p>Le supérieur est Paul Martin</p>\t\t<br>

\t\t\t\t\t\t ";
            } else {
                // line 46
                echo " 
\t\t\t\t\t\t\t ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "supHierarchique", [], "any", false, false, false, 47), "html", null, true);
                echo " 
\t\t\t\t\t
\t\t\t\t\t\t<p>Le supérieur est Justine Dupont</p>\t\t<br> 
\t\t\t\t";
            }
            // line 50
            echo "  

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        return array (  150 => 53,  142 => 50,  135 => 47,  132 => 46,  124 => 42,  120 => 41,  114 => 38,  109 => 36,  103 => 33,  99 => 32,  95 => 31,  91 => 29,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
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
\t\t\t{% for user in message  %}
{% if user.supHierarchique == 'Paul Stone'%} 
\t\t\t\t\t{{user.supHierarchique}}
\t\t\t\t\t
\t\t\t\t\t\t<p>Le supérieur est Paul Stone</p>
\t\t\t\t\t\t\t {{\t user.firstname }}
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t{{ user.lastname}}
\t\t\t\t\t\t\t&nbsp; 
\t\t\t\t\t<br>
\t\t\t\t\t {% elseif user.supHierarchique =='Paul Martin' %} 
\t\t\t\t\t\t{{user.supHierarchique}}
\t\t\t\t\t
\t\t\t\t\t\t<p>Le supérieur est Paul Martin</p>\t\t<br>

\t\t\t\t\t\t {% else %} 
\t\t\t\t\t\t\t {{user.supHierarchique}} 
\t\t\t\t\t
\t\t\t\t\t\t<p>Le supérieur est Justine Dupont</p>\t\t<br> 
\t\t\t\t{% endif %}  

\t\t\t{% endfor %}


\t\t</p>

\t</div>
{% endblock %}
", "team/organigramme.html.twig", "C:\\laragon\\www\\tp-Symfony\\Api-symfony\\templates\\team\\organigramme.html.twig");
    }
}
