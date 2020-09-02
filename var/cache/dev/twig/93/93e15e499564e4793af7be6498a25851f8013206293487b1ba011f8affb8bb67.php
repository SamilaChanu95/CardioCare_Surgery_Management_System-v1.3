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

/* surgery/surgeryreport_index.html.twig */
class __TwigTemplate_e3f2b8bc3f4a782e0956f6f6c3f47fac491a5bffc30b6512a4e3f7324b711ccf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "surgery/surgeryreport_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "surgery/surgeryreport_index.html.twig"));

        // line 1
        echo "<section class=\"ftco-section\">
    ";
        // line 2
        if ((isset($context["surgeries"]) || array_key_exists("surgeries", $context) ? $context["surgeries"] : (function () { throw new RuntimeError('Variable "surgeries" does not exist.', 2, $this->source); })())) {
            echo "           
        <table class=\"table table-hover table-responsive table-borderless\">
            <thead>
                <tr class=\"table\">
                    <th scope=\"col\"><p>Surgery Name</p></th>
                    <th scope=\"col\"><p>Surgery Priority</p></th>
                    <th scope=\"col\"><p>Patient Name</p></th>
                    <th scope=\"col\"><p>Surgery Time</p></th>
                    <th scope=\"col\"><p>Surgery Date</p></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["surgeries"]) || array_key_exists("surgeries", $context) ? $context["surgeries"] : (function () { throw new RuntimeError('Variable "surgeries" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["surgery"]) {
                // line 15
                echo "                    <tr>
                        <td><h7><a href=\"surgery/edit/";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "SurgeryName", [], "any", false, false, false, 16), "html", null, true);
                echo "</a></h7></td>
                        <td><p>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "Priority", [], "any", false, false, false, 17), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "Patient", [], "any", false, false, false, 18), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "time", [], "any", false, false, false, 19), "H:i:s"), "html", null, true);
                echo "</p></td>
                        <td><p>";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["surgery"], "date", [], "any", false, false, false, 20), "d-m-Y"), "html", null, true);
                echo "</p></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surgery'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            </tbody>
        </table>          
    ";
        } else {
            // line 26
            echo "    <p align=\"center\">No surgeries to display.</p>
    ";
        }
        // line 28
        echo "    <p align=\"center\" class=\"button-custom\"><a href=\"/surgery/add\" class=\"btn btn-secondary py-2 px-3\">Add new Surgery</a></p>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "surgery/surgeryreport_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  100 => 26,  95 => 23,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  68 => 16,  65 => 15,  61 => 14,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ftco-section\">
    {% if surgeries %}           
        <table class=\"table table-hover table-responsive table-borderless\">
            <thead>
                <tr class=\"table\">
                    <th scope=\"col\"><p>Surgery Name</p></th>
                    <th scope=\"col\"><p>Surgery Priority</p></th>
                    <th scope=\"col\"><p>Patient Name</p></th>
                    <th scope=\"col\"><p>Surgery Time</p></th>
                    <th scope=\"col\"><p>Surgery Date</p></th>
                </tr>
            </thead>
            <tbody>
                {% for surgery in surgeries %}
                    <tr>
                        <td><h7><a href=\"surgery/edit/{{ surgery.id }}\">{{  surgery.SurgeryName }}</a></h7></td>
                        <td><p>{{ surgery.Priority }}</p></td>
                        <td><p>{{ surgery.Patient }}</p></td>
                        <td><p>{{ surgery.time|date('H:i:s') }}</p></td>
                        <td><p>{{  surgery.date|date('d-m-Y') }}</p></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>          
    {% else %}
    <p align=\"center\">No surgeries to display.</p>
    {% endif %}
    <p align=\"center\" class=\"button-custom\"><a href=\"/surgery/add\" class=\"btn btn-secondary py-2 px-3\">Add new Surgery</a></p>
</section>", "surgery/surgeryreport_index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\surgery\\surgeryreport_index.html.twig");
    }
}
