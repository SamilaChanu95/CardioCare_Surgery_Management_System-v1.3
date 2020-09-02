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

/* discharge/index.html.twig */
class __TwigTemplate_58f19a68baef22d74981bf49d2e258864e75e95b7ffe96a291254595b3d30a08 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "discharge/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "discharge/index.html.twig"));

        // line 1
        echo "<section class=\"ftco-section\">
    ";
        // line 2
        if ((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    <table class=\"table table-hover table-avatar table-valign-middle table-head-fixed table-responsive-xl\">
        <thead>
            <tr class=\"table\">
                <th scope=\"col\"><p>Patient Name</p></th>
                <th scope=\"col\"><p>Patient Address</p></th>
                <th scope=\"col\"><p>Gender</p></th>
                <th scope=\"col\"><p>Phone Number</p></th>
                <th scope=\"col\"><p>Emergency Contact Details</p></th>
                <th scope=\"col\"><p>Action</p></th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 16
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["patient"], "getPatientType", [], "method", false, false, false, 16) == "In Patient")) {
                    // line 17
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["patient"], "getPCurrentLocation", [], "method", false, false, false, 17) == "Ward")) {
                        // line 18
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["patient"], "getPStatus", [], "method", false, false, false, 18) == "Active")) {
                            // line 19
                            echo "                            <tr>
                                <td><h7><p>";
                            // line 20
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pFirstName", [], "any", false, false, false, 20), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pLastName", [], "any", false, false, false, 20), "html", null, true);
                            echo "</p></h7></td>
                                <td><p>";
                            // line 21
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pAddress", [], "any", false, false, false, 21), "html", null, true);
                            echo "</p></td>
                                <td><p>";
                            // line 22
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pGender", [], "any", false, false, false, 22), "html", null, true);
                            echo "</p></td>
                                <td><p>";
                            // line 23
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pPhoneNumber", [], "any", false, false, false, 23), "html", null, true);
                            echo "</p></td>
                                <td><p>";
                            // line 24
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pEmergencyContactDetails", [], "any", false, false, false, 24), "html", null, true);
                            echo "</p></td>
                                <td><p align=\"center\" class=\"button-custom pricing-entry\"><a href=\"/pdf/";
                            // line 25
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 25), "html", null, true);
                            echo "\" class=\"price py-2 px-3\">Discharge</a></p></td>
                            </tr>
                        ";
                        }
                        // line 27
                        echo " 
                    ";
                    }
                    // line 28
                    echo "   
                ";
                }
                // line 30
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "    
        </tbody>
    </table>         
    ";
        } else {
            // line 34
            echo "    <p align=\"center\">No Ward patients to discharge.</p>
    ";
        }
        // line 36
        echo "    <p align=\"center\" class=\"button-custom\"><a href=\"/clinic/patient/add\" class=\"btn btn-secondary py-2 px-3\">Add new Clinical Patient</a></p>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "discharge/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 36,  125 => 34,  114 => 30,  110 => 28,  106 => 27,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  62 => 15,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ftco-section\">
    {% if patients %}
    <table class=\"table table-hover table-avatar table-valign-middle table-head-fixed table-responsive-xl\">
        <thead>
            <tr class=\"table\">
                <th scope=\"col\"><p>Patient Name</p></th>
                <th scope=\"col\"><p>Patient Address</p></th>
                <th scope=\"col\"><p>Gender</p></th>
                <th scope=\"col\"><p>Phone Number</p></th>
                <th scope=\"col\"><p>Emergency Contact Details</p></th>
                <th scope=\"col\"><p>Action</p></th>
            </tr>
        </thead>
        <tbody>
            {% for patient in patients %}
                {% if patient.getPatientType() == \"In Patient\" %}
                    {% if patient.getPCurrentLocation() == \"Ward\" %}
                        {% if patient.getPStatus() == \"Active\" %}
                            <tr>
                                <td><h7><p>{{  patient.pFirstName }} {{  patient.pLastName }}</p></h7></td>
                                <td><p>{{ patient.pAddress }}</p></td>
                                <td><p>{{ patient.pGender }}</p></td>
                                <td><p>{{ patient.pPhoneNumber }}</p></td>
                                <td><p>{{ patient.pEmergencyContactDetails }}</p></td>
                                <td><p align=\"center\" class=\"button-custom pricing-entry\"><a href=\"/pdf/{{ patient.id }}\" class=\"price py-2 px-3\">Discharge</a></p></td>
                            </tr>
                        {% endif %} 
                    {% endif %}   
                {% endif %}
            {% endfor %}    
        </tbody>
    </table>         
    {% else %}
    <p align=\"center\">No Ward patients to discharge.</p>
    {% endif %}
    <p align=\"center\" class=\"button-custom\"><a href=\"/clinic/patient/add\" class=\"btn btn-secondary py-2 px-3\">Add new Clinical Patient</a></p>
</section>", "discharge/index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\discharge\\index.html.twig");
    }
}
