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

/* team/user.html.twig */
class __TwigTemplate_8e9e9e5c751968ff3f1d17796d77bb174874f94f9aa5dd8d71e3bc7cea4f3bf4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "team/user.html.twig", 1);
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
\t\t.head {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.head code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div class=\"head\">
\t\t<h1></h1>
\t\t<p>
            <h2>
                <img width='100px' heigh='100px' src=\"../../../img/";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "photo", [], "any", false, false, false, 24), "html", null, true);
        echo "\" alt=\"photo de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "firstname", [], "any", false, false, false, 24), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "lastname", [], "any", false, false, false, 24), "html", null, true);
        echo "\"> &nbsp;&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "firstname", [], "any", false, false, false, 24), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "lastname", [], "any", false, false, false, 24), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "label", [], "any", false, false, false, 24), "html", null, true);
        echo ") 
            </h2>
            <h2> Age : ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "age", [], "any", false, false, false, 26), "html", null, true);
        echo " ans</h2>
            <h2>
                <img width='50px' heigh='50px' src=\"../../../img/pdf.png\" alt=\"image de cv\"><a href=\"/pdf/";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "/cv_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "lastname", [], "any", false, false, false, 28), "html", null, true);
        echo ".pdf\" alt=\"cv de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "lastname", [], "any", false, false, false, 28), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "firstname", [], "any", false, false, false, 28), "html", null, true);
        echo "\"> Son CV</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <img width='50px' heigh='50px' src=\"../../../img/mail.png\" alt=\"image de mail\"><a href=\"mailto://";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "mail", [], "any", false, false, false, 29), "html", null, true);
        echo "\" alt=\"mail de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "lastname", [], "any", false, false, false, 29), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "firstname", [], "any", false, false, false, 29), "html", null, true);
        echo "\"> Son mail </a>
            </h2>
            <h2>
                <img width='50px' heigh='50px' src=\"../../../img/tel.png\" alt=\"image de tel\"> Son téléphone : ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "tel", [], "any", false, false, false, 32), "html", null, true);
        echo "</h2>
            </h2>
            <h2>
                <img width='50px' heigh='50px' src=\"../../../img/adresse.png\" alt=\"image d'adresse\"> Son adresse : ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "adresse", [], "any", false, false, false, 35), "html", null, true);
        echo "
                </h2>            
            
            <h2>
               
                ";
        // line 40
        if ((1 === twig_compare((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40) - 1), twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 40, $this->source); })()), "min", [], "any", false, false, false, 40)))) {
            // line 41
            echo "                    <a href=\"../../organigramme/user/";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41) - 1), "html", null, true);
            echo "\"><img width='50px' heigh='50px' src=\"../../../img/fleche_gauche.png\"></a>
                ";
        }
        // line 43
        echo "                    &nbsp;&nbsp;&nbsp;&nbsp;<a href=\"../../organigramme/\"><img width='50px' heigh='50px' src=\"../../../img/home.png\"></a>
                ";
        // line 44
        if ((-1 === twig_compare((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44) + 1), twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 44, $this->source); })()), "max", [], "any", false, false, false, 44)))) {
            // line 45
            echo "                    &nbsp;&nbsp;&nbsp;&nbsp;<a href=\"../../organigramme/user/";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45) + 1), "html", null, true);
            echo "\"><img width='50px' heigh='50px' src=\"../../../img/fleche_droite.png\"></a>
                ";
        }
        // line 47
        echo "            </h2>
\t\t<br>
        </p>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 47,  160 => 45,  158 => 44,  155 => 43,  149 => 41,  147 => 40,  139 => 35,  133 => 32,  123 => 29,  113 => 28,  108 => 26,  93 => 24,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block Accueil %}Organigramme
{% endblock %}

{% block body %}
\t<style>
\t\t.head {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}
\t\t.head code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>

\t<div class=\"head\">
\t\t<h1></h1>
\t\t<p>
            <h2>
                <img width='100px' heigh='100px' src=\"../../../img/{{ user.photo }}\" alt=\"photo de {{user.firstname}} {{user.lastname}}\"> &nbsp;&nbsp;{{user.firstname}} {{user.lastname}}({{user.label}}) 
            </h2>
            <h2> Age : {{user.age}} ans</h2>
            <h2>
                <img width='50px' heigh='50px' src=\"../../../img/pdf.png\" alt=\"image de cv\"><a href=\"/pdf/{{user.id}}/cv_{{user.lastname}}.pdf\" alt=\"cv de {{user.lastname}} {{user.firstname}}\"> Son CV</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <img width='50px' heigh='50px' src=\"../../../img/mail.png\" alt=\"image de mail\"><a href=\"mailto://{{user.mail}}\" alt=\"mail de {{user.lastname}} {{user.firstname}}\"> Son mail </a>
            </h2>
            <h2>
                <img width='50px' heigh='50px' src=\"../../../img/tel.png\" alt=\"image de tel\"> Son téléphone : {{user.tel}}</h2>
            </h2>
            <h2>
                <img width='50px' heigh='50px' src=\"../../../img/adresse.png\" alt=\"image d'adresse\"> Son adresse : {{user.adresse}}
                </h2>            
            
            <h2>
               
                {% if user.id - 1 > pagination.min %}
                    <a href=\"../../organigramme/user/{{user.id - 1}}\"><img width='50px' heigh='50px' src=\"../../../img/fleche_gauche.png\"></a>
                {% endif %}
                    &nbsp;&nbsp;&nbsp;&nbsp;<a href=\"../../organigramme/\"><img width='50px' heigh='50px' src=\"../../../img/home.png\"></a>
                {% if user.id + 1 < pagination.max %}
                    &nbsp;&nbsp;&nbsp;&nbsp;<a href=\"../../organigramme/user/{{user.id + 1}}\"><img width='50px' heigh='50px' src=\"../../../img/fleche_droite.png\"></a>
                {% endif %}
            </h2>
\t\t<br>
        </p>
\t</div>
{% endblock %}
", "team/user.html.twig", "C:\\laragon\\www\\tp-symfony2\\Api-symfony\\templates\\team\\user.html.twig");
    }
}
