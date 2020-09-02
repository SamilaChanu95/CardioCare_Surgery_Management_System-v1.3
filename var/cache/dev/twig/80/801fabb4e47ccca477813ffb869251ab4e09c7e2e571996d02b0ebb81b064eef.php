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

/* icu/icureport_index.html.twig */
class __TwigTemplate_f3e780c9629f6cd1cb2e0080a59ec400404fe2cf32833f3641f5befa6dc53b15 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icu/icureport_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icu/icureport_index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "icu/icureport_index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ICU Report index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"ftco-section\">
    ";
        // line 7
        if ((isset($context["icureports"]) || array_key_exists("icureports", $context) ? $context["icureports"] : (function () { throw new RuntimeError('Variable "icureports" does not exist.', 7, $this->source); })())) {
            echo "           
        <table class=\"table table-hover table-avatar table-valign-middle table-head-fixed table-responsive-xl\">
            <thead>
                <tr class=\"table\">
                    <th scope=\"col\"><p>Patient Name</p></th>
                    <th scope=\"col\"><p>Admit Date</p></th>
                    <th scope=\"col\"><p>Code</p></th>
                    <th scope=\"col\"><p>Room</p></th>
                    <th scope=\"col\"><p>Diagnosies</p></th>
                    <th scope=\"col\"><p>Neuro</p></th>
                    <th scope=\"col\"><p>Cardiac</p></th>
                    <th scope=\"col\"><p>Respiratory</p></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["icureports"]) || array_key_exists("icureports", $context) ? $context["icureports"] : (function () { throw new RuntimeError('Variable "icureports" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["icureport"]) {
                // line 23
                echo "                    <tr>
                        <td><h7><a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("icureport_show", ["id" => twig_get_attribute($this->env, $this->source, $context["icureport"], "id", [], "any", false, false, false, 24)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["icureport"], "Patient", [], "any", false, false, false, 24), "html", null, true);
                echo "</a></h7></td>
                        <td><p>";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["icureport"], "AdmitDate", [], "any", false, false, false, 25), "d-m-Y"), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["icureport"], "Code", [], "any", false, false, false, 26), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["icureport"], "Room", [], "any", false, false, false, 27), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["icureport"], "Diagnosis", [], "any", false, false, false, 28), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["icureport"], "Neuro", [], "any", false, false, false, 29), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["icureport"], "Cardiac", [], "any", false, false, false, 30), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["icureport"], "Respiratory", [], "any", false, false, false, 31), "html", null, true);
                echo "</p></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icureport'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            </tbody>
        </table>          
    ";
        } else {
            // line 37
            echo "        <p align=\"center\">No ICU Reports to display.</p>
    ";
        }
        // line 39
        echo "        <p align=\"center\" class=\"button-custom\"><a href=\"icu/add\" class=\"btn btn-secondary py-2 px-3\">Add new ICU Report</a></p>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "icu/icureport_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 39,  160 => 37,  155 => 34,  146 => 31,  142 => 30,  138 => 29,  134 => 28,  130 => 27,  126 => 26,  122 => 25,  116 => 24,  113 => 23,  109 => 22,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ICU Report index{% endblock %}

{% block body %}
    <section class=\"ftco-section\">
    {% if icureports %}           
        <table class=\"table table-hover table-avatar table-valign-middle table-head-fixed table-responsive-xl\">
            <thead>
                <tr class=\"table\">
                    <th scope=\"col\"><p>Patient Name</p></th>
                    <th scope=\"col\"><p>Admit Date</p></th>
                    <th scope=\"col\"><p>Code</p></th>
                    <th scope=\"col\"><p>Room</p></th>
                    <th scope=\"col\"><p>Diagnosies</p></th>
                    <th scope=\"col\"><p>Neuro</p></th>
                    <th scope=\"col\"><p>Cardiac</p></th>
                    <th scope=\"col\"><p>Respiratory</p></th>
                </tr>
            </thead>
            <tbody>
                {% for icureport in icureports %}
                    <tr>
                        <td><h7><a href=\"{{path('icureport_show',{'id': icureport.id })}}\">{{ icureport.Patient }}</a></h7></td>
                        <td><p>{{ icureport.AdmitDate|date('d-m-Y') }}</p></td>
                        <td><p>{{ icureport.Code }}</p></td>
                        <td><p>{{ icureport.Room }}</p></td>
                        <td><p>{{ icureport.Diagnosis }}</p></td>
                        <td><p>{{ icureport.Neuro }}</p></td>
                        <td><p>{{ icureport.Cardiac }}</p></td>
                        <td><p>{{ icureport.Respiratory }}</p></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>          
    {% else %}
        <p align=\"center\">No ICU Reports to display.</p>
    {% endif %}
        <p align=\"center\" class=\"button-custom\"><a href=\"icu/add\" class=\"btn btn-secondary py-2 px-3\">Add new ICU Report</a></p>
    </section>
{% endblock %}
", "icu/icureport_index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\icu\\icureport_index.html.twig");
    }
}
