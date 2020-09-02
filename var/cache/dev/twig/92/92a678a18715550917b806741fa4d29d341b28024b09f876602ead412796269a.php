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

/* surgery/surgerypatient_index.html.twig */
class __TwigTemplate_4f34ef5ce528b2fc1b563bafcab1e1855e50c9182db824b5a308f3950990289d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "surgery/surgerypatient_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "surgery/surgerypatient_index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "surgery/surgerypatient_index.html.twig", 1);
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

        echo "Surgery Patients";
        
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
        if ((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 7, $this->source); })())) {
            echo " 
        <table class=\"table table-hover table-avatar table-valign-middle table-head-fixed table-responsive-xl\">
            <thead>
                <tr class=\"table\">
                    <th scope=\"col\"><p>Patient Name</p></th>
                    <th scope=\"col\"><p>Patient Address</p></th>
                    <th scope=\"col\"><p>Gender</p></th>
                    <th scope=\"col\"><p>Date of Birth</p></th>
                    <th scope=\"col\"><p>Phone Number</p></th>
                    <th scope=\"col\"><p>Emergency Contact Details</p></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 21
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["patient"], "getPatientType", [], "method", false, false, false, 21) == "In Patient")) {
                    // line 22
                    echo "                        ";
                    if (((twig_get_attribute($this->env, $this->source, $context["patient"], "getPCurrentLocation", [], "method", false, false, false, 22) == "Operating Theater") || (twig_get_attribute($this->env, $this->source, $context["patient"], "getPCurrentLocation", [], "method", false, false, false, 22) == "Ward"))) {
                        // line 23
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["patient"], "getPStatus", [], "method", false, false, false, 23) == "Active")) {
                            echo " 
                                <tr>
                                    <td><h7><a href=\"/surgery/patient/edit/";
                            // line 25
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 25), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pFirstName", [], "any", false, false, false, 25), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pLastName", [], "any", false, false, false, 25), "html", null, true);
                            echo "</a></h7></td>
                                    <td><p>";
                            // line 26
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pAddress", [], "any", false, false, false, 26), "html", null, true);
                            echo "</p></td>
                                    <td><p>";
                            // line 27
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pGender", [], "any", false, false, false, 27), "html", null, true);
                            echo "</p></td>
                                    <td><p>";
                            // line 28
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pDOB", [], "any", false, false, false, 28), "html", null, true);
                            echo "</p></td>
                                    <td><p>";
                            // line 29
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pPhoneNumber", [], "any", false, false, false, 29), "html", null, true);
                            echo "</p></td>
                                    <td><p>";
                            // line 30
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pEmergencyContactDetails", [], "any", false, false, false, 30), "html", null, true);
                            echo "</p></td>
                                </tr>
                            ";
                        }
                        // line 32
                        echo "    
                        ";
                    }
                    // line 33
                    echo "        
                    ";
                }
                // line 35
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "    
            </tbody>
        </table>            
        ";
        } else {
            // line 39
            echo "        <p align=\"center\">No surgical patients to display.</p>
        ";
        }
        // line 41
        echo "        <p align=\"center\" class=\"button-custom\"><a href=\"/surgery/patient/add\" class=\"btn btn-secondary py-2 px-3\">Add new Surgical Patient</a></p>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "surgery/surgerypatient_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 41,  172 => 39,  161 => 35,  157 => 33,  153 => 32,  147 => 30,  143 => 29,  139 => 28,  135 => 27,  131 => 26,  123 => 25,  117 => 23,  114 => 22,  111 => 21,  107 => 20,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Surgery Patients{% endblock %}

{% block body %}
    <section class=\"ftco-section\">
        {% if patients %} 
        <table class=\"table table-hover table-avatar table-valign-middle table-head-fixed table-responsive-xl\">
            <thead>
                <tr class=\"table\">
                    <th scope=\"col\"><p>Patient Name</p></th>
                    <th scope=\"col\"><p>Patient Address</p></th>
                    <th scope=\"col\"><p>Gender</p></th>
                    <th scope=\"col\"><p>Date of Birth</p></th>
                    <th scope=\"col\"><p>Phone Number</p></th>
                    <th scope=\"col\"><p>Emergency Contact Details</p></th>
                </tr>
            </thead>
            <tbody>
                {% for patient in patients %}
                    {% if patient.getPatientType() == \"In Patient\" %}
                        {% if patient.getPCurrentLocation() == \"Operating Theater\" or patient.getPCurrentLocation() == \"Ward\" %}
                            {% if patient.getPStatus() == \"Active\" %} 
                                <tr>
                                    <td><h7><a href=\"/surgery/patient/edit/{{ patient.id }}\">{{  patient.pFirstName }} {{  patient.pLastName }}</a></h7></td>
                                    <td><p>{{ patient.pAddress }}</p></td>
                                    <td><p>{{ patient.pGender }}</p></td>
                                    <td><p>{{ patient.pDOB }}</p></td>
                                    <td><p>{{ patient.pPhoneNumber }}</p></td>
                                    <td><p>{{ patient.pEmergencyContactDetails }}</p></td>
                                </tr>
                            {% endif %}    
                        {% endif %}        
                    {% endif %}
                {% endfor %}    
            </tbody>
        </table>            
        {% else %}
        <p align=\"center\">No surgical patients to display.</p>
        {% endif %}
        <p align=\"center\" class=\"button-custom\"><a href=\"/surgery/patient/add\" class=\"btn btn-secondary py-2 px-3\">Add new Surgical Patient</a></p>
    </section>
{% endblock %}", "surgery/surgerypatient_index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\surgery\\surgerypatient_index.html.twig");
    }
}
