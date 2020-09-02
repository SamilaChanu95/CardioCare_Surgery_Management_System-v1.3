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

/* patient/_form.html.twig */
class __TwigTemplate_121d8aa809f514fe7e1a658170eb92fea13d0e9cf54e8ab0b2c41828e5c7d26c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/_form.html.twig"));

        // line 1
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_22.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h2 class=\"breadcrumb-item\"><b>Patient's details</b></h2>
            </div>
        </div>
    </div>
</section>
                        
<section class=\"ftco-section\">
    <div class=\"container1\">
        <div class=\"card card-4\">
            <div class=\"card-body\">
                <h4 class=\"title\">Personal Information</h4>
                <hr>
                <div class=\"row\">
                    <div class=\"col-sm-12 m-md-auto ftco-animate\">\t\t   
                    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "  
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-3\">  
                                <label class=\"label\">NIC Number</label>
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "pNIC", [], "any", false, false, false, 24), 'row');
        echo "   
                            </div>
                        </div>
                        <div class=\"form-row\">                
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">First Name</label>
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "pFirstName", [], "any", false, false, false, 30), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Last Name</label>
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "pLastName", [], "any", false, false, false, 34), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Date of Birth</label>
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "pDOB", [], "any", false, false, false, 40), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Patient Height</label>
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "pHeight", [], "any", false, false, false, 44), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Patient Weight</label>
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "pWeight", [], "any", false, false, false, 48), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Gender</label>
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "pGender", [], "any", false, false, false, 52), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Phone Number</label>
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "pPhoneNumber", [], "any", false, false, false, 56), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Address</label>
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "pAddress", [], "any", false, false, false, 62), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Emergency Contact</label>
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "pEmergencyContactDetails", [], "any", false, false, false, 66), 'row');
        echo "
                            </div>
                        </div>
                        <hr>
                        <h4 class=\"title\">Medical Information</h4>
                        <hr>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Medical Histroy</label>
                                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "pMedicalHistroy", [], "any", false, false, false, 75), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Surgical Histroy</label>
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "pSurgicalHistroy", [], "any", false, false, false, 79), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Allergic Histroy</label>
                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "pAllergicHistroy", [], "any", false, false, false, 85), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Drug Histroy</label>
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "pDrugHistroy", [], "any", false, false, false, 89), 'row');
        echo "
                            </div>
                        </div>
                        <hr>
                        <h4 class=\"title\">Other Information</h4>
                        <hr>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Visiting Number</label>
                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "pVisitingNumber", [], "any", false, false, false, 98), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-5\">
                                <label class=\"label\">Social Histroy</label>
                                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "pSocialHistroy", [], "any", false, false, false, 102), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-5\">
                                <label class=\"label\">Exam Details</label>
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "pExaminationDetails", [], "any", false, false, false, 106), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Current Location</label>
                                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "pCurrentLocation", [], "any", false, false, false, 112), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Status</label>
                                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "pStatus", [], "any", false, false, false, 118), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Patient Type</label>
                                ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "PatientType", [], "any", false, false, false, 124), 'row');
        echo "
                            </div>
                        </div>
                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'widget');
        echo "
                    ";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_end');
        echo "   
                    </div>     
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "patient/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 128,  236 => 127,  230 => 124,  221 => 118,  212 => 112,  203 => 106,  196 => 102,  189 => 98,  177 => 89,  170 => 85,  161 => 79,  154 => 75,  142 => 66,  135 => 62,  126 => 56,  119 => 52,  112 => 48,  105 => 44,  98 => 40,  89 => 34,  82 => 30,  73 => 24,  66 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('images/bg_22.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h2 class=\"breadcrumb-item\"><b>Patient's details</b></h2>
            </div>
        </div>
    </div>
</section>
                        
<section class=\"ftco-section\">
    <div class=\"container1\">
        <div class=\"card card-4\">
            <div class=\"card-body\">
                <h4 class=\"title\">Personal Information</h4>
                <hr>
                <div class=\"row\">
                    <div class=\"col-sm-12 m-md-auto ftco-animate\">\t\t   
                    {{ form_start(form) }}  
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-3\">  
                                <label class=\"label\">NIC Number</label>
                                {{ form_row(form.pNIC) }}   
                            </div>
                        </div>
                        <div class=\"form-row\">                
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">First Name</label>
                                {{ form_row(form.pFirstName) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Last Name</label>
                                {{ form_row(form.pLastName) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Date of Birth</label>
                                {{ form_row(form.pDOB) }}
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Patient Height</label>
                                {{ form_row(form.pHeight) }}
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Patient Weight</label>
                                {{ form_row(form.pWeight) }}
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Gender</label>
                                {{ form_row(form.pGender) }}
                            </div>
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Phone Number</label>
                                {{ form_row(form.pPhoneNumber) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Address</label>
                                {{ form_row(form.pAddress) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Emergency Contact</label>
                                {{ form_row(form.pEmergencyContactDetails) }}
                            </div>
                        </div>
                        <hr>
                        <h4 class=\"title\">Medical Information</h4>
                        <hr>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Medical Histroy</label>
                                {{ form_row(form.pMedicalHistroy) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Surgical Histroy</label>
                                {{ form_row(form.pSurgicalHistroy) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Allergic Histroy</label>
                                {{ form_row(form.pAllergicHistroy) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Drug Histroy</label>
                                {{ form_row(form.pDrugHistroy) }}
                            </div>
                        </div>
                        <hr>
                        <h4 class=\"title\">Other Information</h4>
                        <hr>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Visiting Number</label>
                                {{ form_row(form.pVisitingNumber) }}
                            </div>
                            <div class=\"form-group col-md-5\">
                                <label class=\"label\">Social Histroy</label>
                                {{ form_row(form.pSocialHistroy) }}
                            </div>
                            <div class=\"form-group col-md-5\">
                                <label class=\"label\">Exam Details</label>
                                {{ form_row(form.pExaminationDetails) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Current Location</label>
                                {{ form_row(form.pCurrentLocation) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Status</label>
                                {{ form_row(form.pStatus) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Patient Type</label>
                                {{ form_row(form.PatientType) }}
                            </div>
                        </div>
                    {{ form_widget(form) }}
                    {{ form_end(form) }}   
                    </div>     
                </div>
            </div>
        </div>
    </div>
</section>", "patient/_form.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\patient\\_form.html.twig");
    }
}
