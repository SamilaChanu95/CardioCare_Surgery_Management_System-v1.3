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

/* surgery/surgerypatient_form.html.twig */
class __TwigTemplate_e31f51c7f7986e3fd120d0d7ede0a7d6fa431f4b8362af2204a9da6fd76d6715 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "surgery/surgerypatient_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "surgery/surgerypatient_form.html.twig"));

        // line 1
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_18.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"breadcrumb-item\"><b>Surgery Patient's details</b></h2>
            </div>
        </div>
    </div>
</section>
\t\t
<section class=\"ftco-section\">
    <div class=\"container1\">
        <div class=\"card card-4\">
            <div class=\"card-body\">
                <h4 class=\"title\">Personal Information</h4>
                <hr>
                <div class=\"row\">
                    <div class=\"col-sm-12 m-md-auto ftco-animate\">\t   
                    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "  
                        <div class=\"form-row\">
                            <div class=\"col-6\">  
                                <div class=\"input-group form-group col-md-6\">
                                    <label class=\"label\">NIC Number</label>
                                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "pNIC", [], "any", false, false, false, 25), 'row');
        echo "
                                </div> 
                            </div>     
                            <div class=\"col-2\">
                                <div class=\"input-group form-group\">
                                    <label class=\"label\">Patient Type</label>
                                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "PatientType", [], "any", false, false, false, 31), 'row');
        echo "
                                </div>    
                            </div>
                        </div>
                        <div class=\"form-row\">  
                            <div class=\"col-6\">               
                                <div class=\"form-group col-12\">
                                    <label class=\"label\">First Name</label>
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "pFirstName", [], "any", false, false, false, 39), 'row');
        echo "
                                </div>
                            </div>    
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Last Name</label>
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "pLastName", [], "any", false, false, false, 44), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Date of Birth</label>
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "pDOB", [], "any", false, false, false, 50), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Patient Height</label>
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "pHeight", [], "any", false, false, false, 54), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Patient Weight</label>
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "pWeight", [], "any", false, false, false, 58), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Gender</label>
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "pGender", [], "any", false, false, false, 62), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Phone Number</label>
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "pPhoneNumber", [], "any", false, false, false, 66), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Address</label>
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "pAddress", [], "any", false, false, false, 72), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Emergency Contact</label>
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "pEmergencyContactDetails", [], "any", false, false, false, 76), 'row');
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
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "pMedicalHistroy", [], "any", false, false, false, 85), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Surgical Histroy</label>
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "pSurgicalHistroy", [], "any", false, false, false, 89), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Allergic Histroy</label>
                                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "pAllergicHistroy", [], "any", false, false, false, 95), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Drug Histroy</label>
                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "pDrugHistroy", [], "any", false, false, false, 99), 'row');
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
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "pVisitingNumber", [], "any", false, false, false, 108), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-5\">
                                <label class=\"label\">Social Histroy</label>
                                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "pSocialHistroy", [], "any", false, false, false, 112), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-5\">
                                <label class=\"label\">Exam Details</label>
                                ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "pExaminationDetails", [], "any", false, false, false, 116), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Current Location</label>
                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "pCurrentLocation", [], "any", false, false, false, 122), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Status</label>
                                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "pStatus", [], "any", false, false, false, 128), 'row');
        echo "
                            </div>
                        </div>
                        
                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), 'widget');
        echo "
                    ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), 'form_end');
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
        return "surgery/surgerypatient_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 133,  241 => 132,  234 => 128,  225 => 122,  216 => 116,  209 => 112,  202 => 108,  190 => 99,  183 => 95,  174 => 89,  167 => 85,  155 => 76,  148 => 72,  139 => 66,  132 => 62,  125 => 58,  118 => 54,  111 => 50,  102 => 44,  94 => 39,  83 => 31,  74 => 25,  66 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('images/bg_18.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"breadcrumb-item\"><b>Surgery Patient's details</b></h2>
            </div>
        </div>
    </div>
</section>
\t\t
<section class=\"ftco-section\">
    <div class=\"container1\">
        <div class=\"card card-4\">
            <div class=\"card-body\">
                <h4 class=\"title\">Personal Information</h4>
                <hr>
                <div class=\"row\">
                    <div class=\"col-sm-12 m-md-auto ftco-animate\">\t   
                    {{ form_start(form) }}  
                        <div class=\"form-row\">
                            <div class=\"col-6\">  
                                <div class=\"input-group form-group col-md-6\">
                                    <label class=\"label\">NIC Number</label>
                                    {{ form_row(form.pNIC) }}
                                </div> 
                            </div>     
                            <div class=\"col-2\">
                                <div class=\"input-group form-group\">
                                    <label class=\"label\">Patient Type</label>
                                    {{ form_row(form.PatientType) }}
                                </div>    
                            </div>
                        </div>
                        <div class=\"form-row\">  
                            <div class=\"col-6\">               
                                <div class=\"form-group col-12\">
                                    <label class=\"label\">First Name</label>
                                    {{ form_row(form.pFirstName) }}
                                </div>
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
                        
                    {{ form_widget(form) }}
                    {{ form_end(form) }}
                    </div>
                </div>     
            </div>
        </div>
    </div>
</section>", "surgery/surgerypatient_form.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\surgery\\surgerypatient_form.html.twig");
    }
}
