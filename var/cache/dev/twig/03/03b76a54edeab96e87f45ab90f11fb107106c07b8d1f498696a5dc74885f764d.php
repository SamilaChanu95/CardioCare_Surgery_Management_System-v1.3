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

/* nurse/_form.html.twig */
class __TwigTemplate_dba60f6bf9ab2d6de1f71505a85bb7abcdfa220739582cbf9c16ac530a5f4fb1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nurse/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nurse/_form.html.twig"));

        // line 1
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_9.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h2 class=\"breadcrumb-item\"><b>Nurse's details</b></h2>
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
                            <div class=\"col-2\">  
                                <div class=\"input-group form-group\">
                                    <label class=\"label\">NIC Number</label>
                                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nNIC", [], "any", false, false, false, 25), 'row');
        echo "
                                    </div>    
                                </div>
                            </div>
                        <div class=\"form-row\">                
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">First Name</label>
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nFirstName", [], "any", false, false, false, 32), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Last Name</label>
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "nLastName", [], "any", false, false, false, 36), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Date of Birth</label>
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "nDOB", [], "any", false, false, false, 42), 'row');
        echo "
                            </div>
                             <div class=\"form-group col-md-2\">
                                <label class=\"label\">Gender</label>
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "nGender", [], "any", false, false, false, 46), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Phone Number</label>
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "nPhoneNumber", [], "any", false, false, false, 50), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Address</label>
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "nAddress", [], "any", false, false, false, 56), 'row');
        echo "
                            </div>
                        </div>
                        <hr>
                        <h4 class=\"title\">Other Information</h4>
                        <hr>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Role</label>
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "nRole", [], "any", false, false, false, 65), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Hospital</label>
                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "Hospital", [], "any", false, false, false, 71), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Department</label>
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "Department", [], "any", false, false, false, 77), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Unit</label>
                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "Unit", [], "any", false, false, false, 83), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Ward</label>
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "Ward", [], "any", false, false, false, 89), 'row');
        echo "
                            </div>
                        </div> 
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Status</label>
                                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "nStatus", [], "any", false, false, false, 95), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Upload user photo</label>
                                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "photo", [], "any", false, false, false, 101), 'row');
        echo "
                            </div>
                        </div>
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'widget');
        echo "
                        ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_end');
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
        return "nurse/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 105,  195 => 104,  189 => 101,  180 => 95,  171 => 89,  162 => 83,  153 => 77,  144 => 71,  135 => 65,  123 => 56,  114 => 50,  107 => 46,  100 => 42,  91 => 36,  84 => 32,  74 => 25,  66 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('images/bg_9.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h2 class=\"breadcrumb-item\"><b>Nurse's details</b></h2>
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
                            <div class=\"col-2\">  
                                <div class=\"input-group form-group\">
                                    <label class=\"label\">NIC Number</label>
                                        {{ form_row(form.nNIC) }}
                                    </div>    
                                </div>
                            </div>
                        <div class=\"form-row\">                
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">First Name</label>
                                {{ form_row(form.nFirstName) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Last Name</label>
                                {{ form_row(form.nLastName) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Date of Birth</label>
                                {{ form_row(form.nDOB) }}
                            </div>
                             <div class=\"form-group col-md-2\">
                                <label class=\"label\">Gender</label>
                                {{ form_row(form.nGender) }}
                            </div>
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Phone Number</label>
                                {{ form_row(form.nPhoneNumber) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Address</label>
                                {{ form_row(form.nAddress) }}
                            </div>
                        </div>
                        <hr>
                        <h4 class=\"title\">Other Information</h4>
                        <hr>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Role</label>
                                {{ form_row(form.nRole) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Hospital</label>
                                {{ form_row(form.Hospital) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Department</label>
                                {{ form_row(form.Department) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Unit</label>
                                {{ form_row(form.Unit) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Ward</label>
                                {{ form_row(form.Ward) }}
                            </div>
                        </div> 
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Status</label>
                                {{ form_row(form.nStatus) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Upload user photo</label>
                                {{ form_row(form.photo) }}
                            </div>
                        </div>
                        {{ form_widget(form) }}
                        {{ form_end(form) }}
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>", "nurse/_form.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\nurse\\_form.html.twig");
    }
}
