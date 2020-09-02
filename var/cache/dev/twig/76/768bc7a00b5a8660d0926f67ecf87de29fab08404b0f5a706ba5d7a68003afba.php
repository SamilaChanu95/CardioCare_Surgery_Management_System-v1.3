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

/* pdf/pdf.html.twig */
class __TwigTemplate_2a7bd961ba7a067f0866027cfbe0f11de7e029d8c5f2cbd10b9a7849ffff03e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/pdf.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pdf/pdf.html.twig", 1);
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

        echo "Patient's Discharge Pdf";
        
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
        echo "<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Generate PDF File</title>

        <style>
            /** 
            * Set the margins of the PDF to 0
            * so the background image will cover the entire page.
            **/
            @page {
                margin: 80px 25px;
            }

            header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 60px;

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 35px;
            }

            footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 60px; 

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 35px;
            }

            /**
            * Define the real margins of the content of your PDF
            * Here you will fix the margins of the header and footer
            * Of your background image.
            **/
            body {
                margin-top:    1cm;
                margin-bottom: 1cm;
                margin-left:   1cm;
                margin-right:  1cm;
            }

            /** 
            * Define the width, height, margins and position of the watermark.
            **/
            #watermark {
                position: fixed;

                /** 
                    Set a position in the page for your image
                    This should center it vertically
                **/
                bottom:   10cm;
                left:     5.8cm;

                /** Change image dimensions**/
                width:    8cm;
                height:   8cm;

                /** Your watermark should be behind every content**/
                z-index:  -1000;
            }

            #headline {
                position: fixed;
                top:   0.6cm;
                left:     6.8cm;
            }
        </style>
    </head>

    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <a href=\"#\">
                <span style=\"font-size:25px\"><b>Cardio</b>Care</span>
            </a>
        </header>

        <footer>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
        </footer>
        
        <div id=\"watermark\">
            <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/about.jpg"), "html", null, true);
        echo "\" height=\"100%\" width=\"100%\"/>
        </div>
        <main>
            <h3 id=\"headline\">";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["headline"]) || array_key_exists("headline", $context) ? $context["headline"] : (function () { throw new RuntimeError('Variable "headline" does not exist.', 105, $this->source); })()), "html", null, true);
        echo "</h3>
            <div>
                <h4>Patient discharged at ";
        // line 107
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "H:i:s d/m/Y", "+05:30"), "html", null, true);
        echo "</h4> 
                <h4>Patient's Fullname: ";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 108, $this->source); })()), "pFirstName", [], "any", false, false, false, 108), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 108, $this->source); })()), "pLastName", [], "any", false, false, false, 108), "html", null, true);
        echo "</h4>
                <h4>Patient's Address: ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 109, $this->source); })()), "pAddress", [], "any", false, false, false, 109), "html", null, true);
        echo "</h4>
                <h4>Patient's Gender: ";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 110, $this->source); })()), "pGender", [], "any", false, false, false, 110), "html", null, true);
        echo "</h4>
                <h4>Patient's Date of Birth: ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 111, $this->source); })()), "pDOB", [], "any", false, false, false, 111), "html", null, true);
        echo "</h4>
                <h4>Patient's Height: ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 112, $this->source); })()), "pHeight", [], "any", false, false, false, 112), "html", null, true);
        echo "</h4>
                <h4>Patient's Weight: ";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 113, $this->source); })()), "pWeight", [], "any", false, false, false, 113), "html", null, true);
        echo "</h4>
                <h4>Patient's Mobile Number: ";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 114, $this->source); })()), "pPhoneNumber", [], "any", false, false, false, 114), "html", null, true);
        echo "</h4>
                <h4>Patient's Emergency Contact Details: ";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 115, $this->source); })()), "pEmergencyContactDetails", [], "any", false, false, false, 115), "html", null, true);
        echo "</h4>
                <h4>Patient's Medical History: ";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 116, $this->source); })()), "pMedicalHistroy", [], "any", false, false, false, 116), "html", null, true);
        echo "</h4>
                <h4>Patient's Allergic History: ";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 117, $this->source); })()), "pAllergicHistroy", [], "any", false, false, false, 117), "html", null, true);
        echo "</h4>
                <h4>Patient's Surgical History: ";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 118, $this->source); })()), "pSurgicalHistroy", [], "any", false, false, false, 118), "html", null, true);
        echo "</h4>
                <h4>Patient's Drug History: ";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 119, $this->source); })()), "pDrugHistroy", [], "any", false, false, false, 119), "html", null, true);
        echo "</h4>
                <h4>Patient's Social History: ";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 120, $this->source); })()), "pSocialHistroy", [], "any", false, false, false, 120), "html", null, true);
        echo "</h4>
                <h4>Patient's Examination Details: ";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 121, $this->source); })()), "pExaminationDetails", [], "any", false, false, false, 121), "html", null, true);
        echo "</h4>
            </div>
        </main>    
    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pdf/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 121,  251 => 120,  247 => 119,  243 => 118,  239 => 117,  235 => 116,  231 => 115,  227 => 114,  223 => 113,  219 => 112,  215 => 111,  211 => 110,  207 => 109,  201 => 108,  197 => 107,  192 => 105,  186 => 102,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Patient's Discharge Pdf{% endblock %}

{% block body %}
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Generate PDF File</title>

        <style>
            /** 
            * Set the margins of the PDF to 0
            * so the background image will cover the entire page.
            **/
            @page {
                margin: 80px 25px;
            }

            header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 60px;

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 35px;
            }

            footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 60px; 

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 35px;
            }

            /**
            * Define the real margins of the content of your PDF
            * Here you will fix the margins of the header and footer
            * Of your background image.
            **/
            body {
                margin-top:    1cm;
                margin-bottom: 1cm;
                margin-left:   1cm;
                margin-right:  1cm;
            }

            /** 
            * Define the width, height, margins and position of the watermark.
            **/
            #watermark {
                position: fixed;

                /** 
                    Set a position in the page for your image
                    This should center it vertically
                **/
                bottom:   10cm;
                left:     5.8cm;

                /** Change image dimensions**/
                width:    8cm;
                height:   8cm;

                /** Your watermark should be behind every content**/
                z-index:  -1000;
            }

            #headline {
                position: fixed;
                top:   0.6cm;
                left:     6.8cm;
            }
        </style>
    </head>

    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <a href=\"#\">
                <span style=\"font-size:25px\"><b>Cardio</b>Care</span>
            </a>
        </header>

        <footer>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
        </footer>
        
        <div id=\"watermark\">
            <img src=\"{{ asset('images/about.jpg') }}\" height=\"100%\" width=\"100%\"/>
        </div>
        <main>
            <h3 id=\"headline\">{{ headline }}</h3>
            <div>
                <h4>Patient discharged at {{ \"now\"|date(\"H:i:s d/m/Y\",\"+05:30\") }}</h4> 
                <h4>Patient's Fullname: {{ patient.pFirstName }} {{ patient.pLastName }}</h4>
                <h4>Patient's Address: {{ patient.pAddress }}</h4>
                <h4>Patient's Gender: {{ patient.pGender }}</h4>
                <h4>Patient's Date of Birth: {{ patient.pDOB }}</h4>
                <h4>Patient's Height: {{ patient.pHeight }}</h4>
                <h4>Patient's Weight: {{ patient.pWeight }}</h4>
                <h4>Patient's Mobile Number: {{ patient.pPhoneNumber }}</h4>
                <h4>Patient's Emergency Contact Details: {{ patient.pEmergencyContactDetails }}</h4>
                <h4>Patient's Medical History: {{ patient.pMedicalHistroy }}</h4>
                <h4>Patient's Allergic History: {{ patient.pAllergicHistroy }}</h4>
                <h4>Patient's Surgical History: {{ patient.pSurgicalHistroy }}</h4>
                <h4>Patient's Drug History: {{ patient.pDrugHistroy }}</h4>
                <h4>Patient's Social History: {{ patient.pSocialHistroy }}</h4>
                <h4>Patient's Examination Details: {{ patient.pExaminationDetails }}</h4>
            </div>
        </main>    
    </body>
</html>
{% endblock %}
", "pdf/pdf.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\pdf\\pdf.html.twig");
    }
}
