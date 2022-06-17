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
\t\t<h1>
\t\t\t<a href=\"../team\">
\t\t\t\t<img width='50px' heigh='50px' src=\"../../img/home.png\" alt=\"image d'adresse\">
\t\t\t</a>
\t\t\tOrganigramme de l'équipe
\t\t</h1>
\t\t\t<p>
\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["userOrder"]) {
            // line 28
            echo "\t\t\t";
            // line 29
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 30
                echo "\t\t\t\t";
                // line 31
                echo "\t\t\t\t\t";
                if ((0 === twig_compare($context["userOrder"], twig_get_attribute($this->env, $this->source, $context["user"], "key", [], "any", false, false, false, 31)))) {
                    // line 32
                    echo "\t\t\t\t\t";
                    // line 33
                    echo "\t\t\t\t\t";
                    $context["flag"] = true;
                    // line 34
                    echo "\t\t\t\t\t";
                    // line 35
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["hierarchie"]) || array_key_exists("hierarchie", $context) ? $context["hierarchie"] : (function () { throw new RuntimeError('Variable "hierarchie" does not exist.', 35, $this->source); })()));
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
                        // line 36
                        echo "\t\t\t\t\t\t";
                        // line 37
                        echo "\t\t\t\t\t\t\t";
                        $context["i"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37);
                        // line 38
                        echo "\t\t\t\t\t\t\t";
                        // line 39
                        echo "\t\t\t\t\t\t\t";
                        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "supHierarchique", [], "any", false, false, false, 39), $context["place"])) && (0 === twig_compare((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 39, $this->source); })()), true)))) {
                            // line 40
                            echo "\t\t\t\t\t\t\t\t";
                            // line 41
                            echo "\t\t\t\t\t\t\t\t";
                            $context["flag"] = false;
                            // line 42
                            echo "\t\t\t\t\t\t\t\t";
                            // line 43
                            echo "\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 43, $this->source); })())));
                            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                                // line 44
                                echo "\t\t\t\t\t\t\t\t";
                                // line 45
                                echo "\t\t\t\t\t\t\t\t\t&nbsp; &nbsp;
\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 47
                            echo "\t\t\t\t\t\t\t\t";
                            // line 48
                            echo "\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 48), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                            // line 50
                            echo "\t\t\t\t\t\t\t\t<img width='40px' heigh='40px' src=\"../img/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 50), "html", null, true);
                            echo "\" alt=\"photo de ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 50), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 50), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t<a href=\"organigramme/user/";
                            // line 51
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "numero", [], "any", false, false, false, 51), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t";
                            // line 53
                            echo "\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 53), "html", null, true);
                            echo " 
\t\t\t\t\t\t\t\t";
                            // line 55
                            echo "\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 55), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t";
                            // line 57
                            echo "\t\t\t\t\t\t\t\t(";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "label", [], "any", false, false, false, 57), "html", null, true);
                            echo ") (NIV. :";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "niveau", [], "any", false, false, false, 57), "html", null, true);
                            echo ")--(POS. :";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "level", [], "any", false, false, false, 57), "html", null, true);
                            echo ")</a>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
                        }
                        // line 60
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
                    // line 61
                    echo "\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userOrder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t</p>
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
        return array (  238 => 64,  232 => 63,  226 => 62,  223 => 61,  209 => 60,  198 => 57,  193 => 55,  188 => 53,  184 => 51,  175 => 50,  170 => 48,  168 => 47,  161 => 45,  159 => 44,  154 => 43,  152 => 42,  149 => 41,  147 => 40,  144 => 39,  142 => 38,  139 => 37,  137 => 36,  119 => 35,  117 => 34,  114 => 33,  112 => 32,  109 => 31,  107 => 30,  102 => 29,  100 => 28,  96 => 27,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
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
\t\t<h1>
\t\t\t<a href=\"../team\">
\t\t\t\t<img width='50px' heigh='50px' src=\"../../img/home.png\" alt=\"image d'adresse\">
\t\t\t</a>
\t\t\tOrganigramme de l'équipe
\t\t</h1>
\t\t\t<p>
\t\t\t{% for userOrder in order %}
\t\t\t{# boucle pour chaque utilisateur de la liste ordonné#}
\t\t\t\t{% for user in users %}
\t\t\t\t{# boucle pour chaque membre #}
\t\t\t\t\t{% if userOrder == user.key %}
\t\t\t\t\t{# si l'utilisateur ordonné = membre #}
\t\t\t\t\t{% set flag = true %}
\t\t\t\t\t{# mise a tree du flag  #}
\t\t\t\t\t\t{% for place in hierarchie %}
\t\t\t\t\t\t{# boucle pour chaquue position de hierarchie #}
\t\t\t\t\t\t\t{% set i = loop.index %}
\t\t\t\t\t\t\t{# initailisation du compteur\t #}
\t\t\t\t\t\t\t{% if user.supHierarchique == place and flag == true %}
\t\t\t\t\t\t\t\t{# si user.superiarchique = place et que flag = true (n'est pas encore passé dans la condition)  #}
\t\t\t\t\t\t\t\t{% set flag = false %}
\t\t\t\t\t\t\t\t{# mise a false du flag #}
\t\t\t\t\t\t\t\t{% for j in 1.. i %}
\t\t\t\t\t\t\t\t{# boucle de j de 1 à i #}
\t\t\t\t\t\t\t\t\t&nbsp; &nbsp;
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{# on affiche l'id du membre #}
\t\t\t\t\t\t\t\t{{user.id}}
\t\t\t\t\t\t\t\t{# on affiche  la photo du membre #}
\t\t\t\t\t\t\t\t<img width='40px' heigh='40px' src=\"../img/{{ user.photo }}\" alt=\"photo de {{user.firstname}} {{user.lastname}}\">
\t\t\t\t\t\t\t\t<a href=\"organigramme/user/{{user.numero}}\">
\t\t\t\t\t\t\t\t{# on affiche son prenom #}
\t\t\t\t\t\t\t\t{{user.firstname}} 
\t\t\t\t\t\t\t\t{# on affiche son nom #}
\t\t\t\t\t\t\t\t{{user.lastname}}
\t\t\t\t\t\t\t\t{# on affiche son label #}
\t\t\t\t\t\t\t\t({{user.label}}) (NIV. :{{user.niveau}})--(POS. :{{user.level}})</a>
\t\t\t\t\t\t\t\t<br>
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
