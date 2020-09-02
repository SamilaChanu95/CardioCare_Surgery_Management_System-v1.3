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

/* icu/icureport_form.html.twig */
class __TwigTemplate_a0b6b8e70793f50f922bd6ed7e2346c854b7d6997df90d8f8ad7f9220b30603f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icu/icureport_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icu/icureport_form.html.twig"));

        // line 1
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_10.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h2 class=\"breadcrumb-item\"><b>ICU Report's details</b></h2>
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
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Patient Name</label>
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "Patient", [], "any", false, false, false, 24), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"col-2\">  
                                <div class=\"input-group form-group\">
                                    <label class=\"label\">Admit Date</label>
                                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "AdmitDate", [], "any", false, false, false, 31), 'row');
        echo "
                                </div>    
                            </div>                
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Patient's Room Number</label>
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "Room", [], "any", false, false, false, 36), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Report's Code Number</label>
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "Code", [], "any", false, false, false, 40), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Diagnosis Information</label>
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "Diagnosis", [], "any", false, false, false, 46), 'row');
        echo "
                            </div>              
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Neuro Information</label>
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "Neuro", [], "any", false, false, false, 50), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Cardiac Information</label>
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "Cardiac", [], "any", false, false, false, 54), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Respiratory Information</label>
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "Respiratory", [], "any", false, false, false, 60), 'row');
        echo "
                            </div>              
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Ventilator Information</label>
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "Ventilator", [], "any", false, false, false, 64), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">GI</label>
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "GI", [], "any", false, false, false, 68), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">GU</label>
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "GU", [], "any", false, false, false, 72), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Skin</label>
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "Skin", [], "any", false, false, false, 76), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">             
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Drains</label>
                                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "Drains", [], "any", false, false, false, 82), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Labs</label>
                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "Labs", [], "any", false, false, false, 86), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Meds</label>
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "Meds", [], "any", false, false, false, 90), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Hemodynamics</label>
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "Hemodynamics", [], "any", false, false, false, 94), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">             
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">ToDo List</label>
                                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "ToDo", [], "any", false, false, false, 100), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Core Measures</label>
                                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "CoreMeasures", [], "any", false, false, false, 104), 'row');
        echo "
                            </div>
                        </div>
                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'widget');
        echo "
                    ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_end');
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
        return "icu/icureport_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 108,  210 => 107,  204 => 104,  197 => 100,  188 => 94,  181 => 90,  174 => 86,  167 => 82,  158 => 76,  151 => 72,  144 => 68,  137 => 64,  130 => 60,  121 => 54,  114 => 50,  107 => 46,  98 => 40,  91 => 36,  83 => 31,  73 => 24,  66 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('images/bg_10.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h2 class=\"breadcrumb-item\"><b>ICU Report's details</b></h2>
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
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Patient Name</label>
                                {{ form_row(form.Patient) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"col-2\">  
                                <div class=\"input-group form-group\">
                                    <label class=\"label\">Admit Date</label>
                                    {{ form_row(form.AdmitDate) }}
                                </div>    
                            </div>                
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Patient's Room Number</label>
                                {{ form_row(form.Room) }}
                            </div>
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Report's Code Number</label>
                                {{ form_row(form.Code) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">Diagnosis Information</label>
                                {{ form_row(form.Diagnosis) }}
                            </div>              
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Neuro Information</label>
                                {{ form_row(form.Neuro) }}
                            </div>
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Cardiac Information</label>
                                {{ form_row(form.Cardiac) }}
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Respiratory Information</label>
                                {{ form_row(form.Respiratory) }}
                            </div>              
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Ventilator Information</label>
                                {{ form_row(form.Ventilator) }}
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">GI</label>
                                {{ form_row(form.GI) }}
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">GU</label>
                                {{ form_row(form.GU) }}
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Skin</label>
                                {{ form_row(form.Skin) }}
                            </div>
                        </div>
                        <div class=\"form-row\">             
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Drains</label>
                                {{ form_row(form.Drains) }}
                            </div>
                            <div class=\"form-group col-md-2\">
                                <label class=\"label\">Labs</label>
                                {{ form_row(form.Labs) }}
                            </div>
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Meds</label>
                                {{ form_row(form.Meds) }}
                            </div>
                            <div class=\"form-group col-md-3\">
                                <label class=\"label\">Hemodynamics</label>
                                {{ form_row(form.Hemodynamics) }}
                            </div>
                        </div>
                        <div class=\"form-row\">             
                            <div class=\"form-group col-md-4\">
                                <label class=\"label\">ToDo List</label>
                                {{ form_row(form.ToDo) }}
                            </div>
                            <div class=\"form-group col-md-6\">
                                <label class=\"label\">Core Measures</label>
                                {{ form_row(form.CoreMeasures) }}
                            </div>
                        </div>
                    {{ form_widget(form) }}
                    {{ form_end(form) }}
                    </div>
                </div>     
            </div>
        </div>
    </div>
</section>", "icu/icureport_form.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\icu\\icureport_form.html.twig");
    }
}
