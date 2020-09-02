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

/* patient/index.html.twig */
class __TwigTemplate_fa838a8746a45fca7c302d95941d8b6daff6799e877a5a72fe705a1e0b2ebea1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/index.html.twig"));

        // line 1
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_22.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h2 class=\"breadcrumb-item\"><b>Our Patients</b></h2>
            </div>
        </div>
    </div>
</section>
\t\t
<section class=\"ftco-section\">
    ";
        // line 13
        if ((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "
        <!-- search form -->
        ";
            // line 16
            $this->loadTemplate("patient/search.html.twig", "patient/index.html.twig", 16)->display($context);
            // line 17
            echo "
        <table class=\"table table-hover table-avatar table-valign-middle table-head-fixed table-responsive-xl\">
            <thead>
                <tr class=\"table\">
                    <th scope=\"col\"><p>Patient Name</p></th>
                    <th scope=\"col\"><p>Patient Type</p></th>
                    <th scope=\"col\"><p>Patient Address</p></th>
                    <th scope=\"col\"><p>Gender</p></th>
                    <th scope=\"col\"><p>Date of Birth</p></th>
                    <th scope=\"col\"><p>Phone Number</p></th>
                    <th scope=\"col\"><p>Emergency Contact Details</p></th>
                    <th scope=\"col\"><p>Current Status</p></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 33
                echo "                    <tr>
                        <td><h7><a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_show", ["id" => twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pFirstName", [], "any", false, false, false, 34), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pLastName", [], "any", false, false, false, 34), "html", null, true);
                echo "</a></h7></td>
                        <td><p>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "getPatientType", [], "method", false, false, false, 35), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pAddress", [], "any", false, false, false, 36), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pGender", [], "any", false, false, false, 37), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pDOB", [], "any", false, false, false, 38), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pPhoneNumber", [], "any", false, false, false, 39), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pEmergencyContactDetails", [], "any", false, false, false, 40), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pStatus", [], "any", false, false, false, 41), "html", null, true);
                echo "</p></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    
            </tbody>
        </table>              
    ";
        } else {
            // line 47
            echo "        <p align=\"center\">No patients to display.</p>
    ";
        }
        // line 49
        echo "        <p align=\"center\" class=\"button-custom\"><a href=\"patient/add\" class=\"btn btn-secondary py-2 px-3\">Add new Patient</a></p>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "patient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 49,  138 => 47,  132 => 43,  123 => 41,  119 => 40,  115 => 39,  111 => 38,  107 => 37,  103 => 36,  99 => 35,  91 => 34,  88 => 33,  84 => 32,  67 => 17,  65 => 16,  61 => 14,  59 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('images/bg_22.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h2 class=\"breadcrumb-item\"><b>Our Patients</b></h2>
            </div>
        </div>
    </div>
</section>
\t\t
<section class=\"ftco-section\">
    {% if patients %}

        <!-- search form -->
        {% include \"patient/search.html.twig\" %}

        <table class=\"table table-hover table-avatar table-valign-middle table-head-fixed table-responsive-xl\">
            <thead>
                <tr class=\"table\">
                    <th scope=\"col\"><p>Patient Name</p></th>
                    <th scope=\"col\"><p>Patient Type</p></th>
                    <th scope=\"col\"><p>Patient Address</p></th>
                    <th scope=\"col\"><p>Gender</p></th>
                    <th scope=\"col\"><p>Date of Birth</p></th>
                    <th scope=\"col\"><p>Phone Number</p></th>
                    <th scope=\"col\"><p>Emergency Contact Details</p></th>
                    <th scope=\"col\"><p>Current Status</p></th>
                </tr>
            </thead>
            <tbody>
                {% for patient in patients %}
                    <tr>
                        <td><h7><a href=\"{{ path('patient_show',{'id':patient.id })}}\">{{  patient.pFirstName }} {{  patient.pLastName }}</a></h7></td>
                        <td><p>{{ patient.getPatientType() }}</p></td>
                        <td><p>{{ patient.pAddress }}</p></td>
                        <td><p>{{ patient.pGender }}</p></td>
                        <td><p>{{ patient.pDOB }}</p></td>
                        <td><p>{{ patient.pPhoneNumber }}</p></td>
                        <td><p>{{ patient.pEmergencyContactDetails }}</p></td>
                        <td><p>{{ patient.pStatus }}</p></td>
                    </tr>
                {% endfor %}    
            </tbody>
        </table>              
    {% else %}
        <p align=\"center\">No patients to display.</p>
    {% endif %}
        <p align=\"center\" class=\"button-custom\"><a href=\"patient/add\" class=\"btn btn-secondary py-2 px-3\">Add new Patient</a></p>
</section>", "patient/index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\patient\\index.html.twig");
    }
}
