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

\t<div class=\"example-wrapper\">
\t\t<h1><a href=\"../team\"><img width='50px' heigh='50px' src=\"../../img/home.png\" alt=\"image d'adresse\"></a>Organigramme de l'équipe</h1>
\t\t\t\t<p>
\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["userOrder"]) {
            // line 24
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 25
                echo "\t\t\t\t\t";
                if ((0 === twig_compare($context["userOrder"], twig_get_attribute($this->env, $this->source, $context["user"], "key", [], "any", false, false, false, 25)))) {
                    // line 26
                    echo "\t\t\t\t\t";
                    $context["flag"] = true;
                    // line 27
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["hierarchie"]) || array_key_exists("hierarchie", $context) ? $context["hierarchie"] : (function () { throw new RuntimeError('Variable "hierarchie" does not exist.', 27, $this->source); })()));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
                        // line 28
                        echo "\t\t\t\t\t\t\t";
                        $context["i"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 28);
                        // line 29
                        echo "\t\t\t\t\t\t\t";
                        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "supHierarchique", [], "any", false, false, false, 29), $context["place"])) && (0 === twig_compare((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 29, $this->source); })()), true)))) {
                            // line 30
                            echo "\t\t\t\t\t\t\t\t";
                            $context["flag"] = false;
                            // line 31
                            echo "\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 31, $this->source); })())));
                            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                                // line 32
                                echo "\t\t\t\t\t\t\t\t\t&nbsp; &nbsp;
\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 34
                            echo "\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t<img width='40px' heigh='40px' src=\"../img/";
                            // line 35
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 35), "html", null, true);
                            echo "\" alt=\"photo de ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 35), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 35), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t<a href=\"organigramme/user/";
                            // line 36
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "numero", [], "any", false, false, false, 36), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 36), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t";
                            // line 37
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 37), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t(";
                            // line 38
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "label", [], "any", false, false, false, 38), "html", null, true);
                            echo ")</a>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
                        }
                        // line 41
                        echo "\t\t\t\t\t\t";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userOrder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
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
        return array (  204 => 45,  198 => 44,  192 => 43,  189 => 42,  175 => 41,  169 => 38,  165 => 37,  159 => 36,  151 => 35,  146 => 34,  139 => 32,  134 => 31,  131 => 30,  128 => 29,  125 => 28,  107 => 27,  104 => 26,  101 => 25,  96 => 24,  92 => 23,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
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

\t<div class=\"example-wrapper\">
\t\t<h1><a href=\"../team\"><img width='50px' heigh='50px' src=\"../../img/home.png\" alt=\"image d'adresse\"></a>Organigramme de l'équipe</h1>
\t\t\t\t<p>
\t\t\t{% for userOrder in order %}
\t\t\t\t{% for user in users %}
\t\t\t\t\t{% if userOrder == user.key %}
\t\t\t\t\t{% set flag = true %}
\t\t\t\t\t\t{% for place in hierarchie %}
\t\t\t\t\t\t\t{% set i = loop.index %}
\t\t\t\t\t\t\t{% if (user.supHierarchique == place) and (flag == true) %}
\t\t\t\t\t\t\t\t{% set flag = false %}
\t\t\t\t\t\t\t\t{% for j in 1.. i %}
\t\t\t\t\t\t\t\t\t&nbsp; &nbsp;
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{{user.id}}
\t\t\t\t\t\t\t\t<img width='40px' heigh='40px' src=\"../img/{{ user.photo }}\" alt=\"photo de {{user.firstname}} {{user.lastname}}\">
\t\t\t\t\t\t\t\t<a href=\"organigramme/user/{{user.numero}}\">{{user.firstname}}
\t\t\t\t\t\t\t\t\t{{user.lastname}}
\t\t\t\t\t\t\t\t\t({{user.label}})</a>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t{% endfor %}

\t\t</p>

\t</div>
{% endblock %}
", "team/organigramme.html.twig", "C:\\laragon\\www\\tp-symfony2\\Api-symfony\\templates\\team\\organigramme.html.twig");
    }
}
