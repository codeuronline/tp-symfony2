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
\t\t<h1>Organigramme de l'équipe</h1>
\t\t<p>
\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["userOrder"]) {
            // line 24
            echo "\t\t\t";
            $context["flagUser"] = true;
            // line 25
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 26
                echo "\t\t\t\t\t";
                if ((0 === twig_compare($context["userOrder"], twig_get_attribute($this->env, $this->source, $context["user"], "key", [], "any", false, false, false, 26)))) {
                    // line 27
                    echo "\t\t\t\t\t";
                    $context["flag"] = true;
                    // line 28
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["hierarchie"]) || array_key_exists("hierarchie", $context) ? $context["hierarchie"] : (function () { throw new RuntimeError('Variable "hierarchie" does not exist.', 28, $this->source); })()));
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
                        // line 29
                        echo "\t\t\t\t\t\t\t";
                        $context["i"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29);
                        // line 30
                        echo "\t\t\t\t\t\t\t";
                        if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "supHierarchique", [], "any", false, false, false, 30), $context["place"])) && (0 === twig_compare((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 30, $this->source); })()), true))) && (0 === twig_compare((isset($context["flagUser"]) || array_key_exists("flagUser", $context) ? $context["flagUser"] : (function () { throw new RuntimeError('Variable "flagUser" does not exist.', 30, $this->source); })()), true)))) {
                            // line 31
                            echo "\t\t\t\t\t\t\t\t";
                            $context["flag"] = false;
                            // line 32
                            echo "\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t";
                            // line 33
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 33, $this->source); })())));
                            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                                // line 34
                                echo "\t\t\t\t\t\t\t\t\t";
                                // line 35
                                echo "\t\t\t\t\t\t\t\t\t--
\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 37
                            echo "\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 37), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t<img width='40px' heigh='40px' src=\"../img/";
                            // line 38
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 38), "html", null, true);
                            echo "\" alt=\"photo de ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 38), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 38), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t<a href=\"organigramme/user/";
                            // line 39
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "numero", [], "any", false, false, false, 39), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 39), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t";
                            // line 40
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 40), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t(";
                            // line 41
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "label", [], "any", false, false, false, 41), "html", null, true);
                            echo ")</a>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t";
                            // line 43
                            $context["flagUser"] = false;
                            // line 44
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 45
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
                    // line 46
                    echo "\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userOrder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        return array (  215 => 49,  209 => 48,  203 => 47,  200 => 46,  186 => 45,  183 => 44,  181 => 43,  176 => 41,  172 => 40,  166 => 39,  158 => 38,  153 => 37,  146 => 35,  144 => 34,  140 => 33,  137 => 32,  134 => 31,  131 => 30,  128 => 29,  110 => 28,  107 => 27,  104 => 26,  99 => 25,  96 => 24,  92 => 23,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
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
\t\t<h1>Organigramme de l'équipe</h1>
\t\t<p>
\t\t\t{% for userOrder in order %}
\t\t\t{% set flagUser = true %}
\t\t\t\t{% for user in users %}
\t\t\t\t\t{% if userOrder == user.key %}
\t\t\t\t\t{% set flag = true %}
\t\t\t\t\t\t{% for place in hierarchie %}
\t\t\t\t\t\t\t{% set i = loop.index %}
\t\t\t\t\t\t\t{% if (user.supHierarchique == place) and (flag == true) and flagUser == true %}
\t\t\t\t\t\t\t\t{% set flag = false %}
\t\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t\t{% for j in 1.. i %}
\t\t\t\t\t\t\t\t\t{# &nbsp; &nbsp; #}
\t\t\t\t\t\t\t\t\t--
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{{user.id}}
\t\t\t\t\t\t\t\t<img width='40px' heigh='40px' src=\"../img/{{ user.photo }}\" alt=\"photo de {{user.firstname}} {{user.lastname}}\">
\t\t\t\t\t\t\t\t<a href=\"organigramme/user/{{user.numero}}\">{{user.firstname}}
\t\t\t\t\t\t\t\t\t{{user.lastname}}
\t\t\t\t\t\t\t\t\t({{user.label}})</a>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t{% set flagUser = false %}
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
