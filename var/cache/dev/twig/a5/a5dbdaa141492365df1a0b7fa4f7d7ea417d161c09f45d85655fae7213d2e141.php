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

/* icu/patient_add.html.twig */
class __TwigTemplate_9015de1435818cca2fe3b48042ab6d2ad4c98e74a429ab5ba62a96d1b47258a4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icu/patient_add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icu/patient_add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "icu/patient_add.html.twig", 1);
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

        echo "Add ICU Patients";
        
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
        echo "
    <!-- Page Specifying Meta Data -->
    ";
        // line 8
        $this->loadTemplate("meta_data.html.twig", "icu/patient_add.html.twig", 8)->display($context);
        // line 9
        echo "        
    <!-- CSS Links -->
    ";
        // line 11
        $this->loadTemplate("css_part.html.twig", "icu/patient_add.html.twig", 11)->display($context);
        // line 12
        echo "
    <!-- Remove botdetect link -->
    ";
        // line 14
        $this->loadTemplate("remove_botdetect_link.html.twig", "icu/patient_add.html.twig", 14)->display($context);
        // line 15
        echo "
    <body class=\"hold-transition sidebar-mini layout-fixed\">
        <div class=\"wrapper\">

            <!-- Navbar -->
            <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
                <!-- Left navbar links -->
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
                    </li>
                    <li class=\"nav-item d-none d-sm-inline-block col-auto\">
                        <a href=\"/\" class=\"nav-link\" style=\"font-size: 17px;\">Home</a>
                    </li>
                </ul>

                <!-- Search Form -->
                ";
        // line 32
        $this->loadTemplate("search_form.html.twig", "icu/patient_add.html.twig", 32)->display($context);
        // line 33
        echo "        
                <!-- Right navbar links -->
                ";
        // line 35
        $this->loadTemplate("navbar_link_logout.html.twig", "icu/patient_add.html.twig", 35)->display($context);
        // line 36
        echo "
            </nav>
            <!-- /.navbar -->
            
            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">

                <!-- Brand Logo -->
                ";
        // line 44
        $this->loadTemplate("brand_logo.html.twig", "icu/patient_add.html.twig", 44)->display($context);
        // line 45
        echo "                
                <!-- Sidebar -->
                <div class=\"sidebar\">
                <!-- Sidebar user panel (optional) -->
                    <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                        <div class=\"image\">
                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
                        </div>
                       <div class=\"info\">
                            ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "username", [], "any", false, false, false, 54) == null)) {
            // line 55
            echo "                                <a href=\"#\" class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "email", [], "any", false, false, false, 55), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 57
            echo "                                <a href=\"#\" class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "username", [], "any", false, false, false, 57), "html", null, true);
            echo "</a>
                            ";
        }
        // line 59
        echo "                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class=\"mt-2\">
                        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                            <li class=\"nav-item has-treeview\">
                                <a href=\"/\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-home\"></i>
                                    <p>Home</p>
                                </a>
                            </li>
                            <li class=\"nav-item has-treeview\">
                                <a href=\"/clinic\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-stethoscope\"></i>
                                    <p>Clinic</p>
                                </a>
                            </li>
                            <li class=\"nav-item has-treeview\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-clinic-medical\"></i>
                                    <p>Ward Addmission<i class=\"right fas fa-angle-left\"></i></p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <div class=\"container1\">
                                            <a href=\"/patient\" class=\"nav-link active\">
                                            <i class=\"nav-icon fas fa-user-injured\"></i>
                                                <p>Patients</p>
                                            </a>
                                        </div>    
                                    </li>
                                    <li class=\"nav-item\">
                                        <div class=\"container1\">
                                            <a href=\"/doctor\" class=\"nav-link\">
                                            <i class=\"nav-icon fas fa-user-md\"></i>
                                                <p>Doctors</p>
                                            </a>
                                        </div>    
                                    </li>
                                    <li class=\"nav-item\">
                                        <div class=\"container1\">
                                            <a href=\"/nurse\" class=\"nav-link\">
                                            <i class=\"nav-icon fas fa-user-nurse\"></i>
                                                <p>Nurses</p>
                                            </a>
                                        </div>    
                                    </li>
                                    <li class=\"nav-item\">
                                        <div class=\"container1\">
                                            <a href=\"/consultant\" class=\"nav-link\">
                                            <i class=\"nav-icon fas fa-user-tie\"></i>
                                                <p>Consultants</p>
                                            </a>
                                        </div>    
                                    </li>
                                    <li class=\"nav-item\">
                                        <div class=\"container1\">
                                            <a href=\"/technician\" class=\"nav-link\">
                                            <i class=\"nav-icon fas fa-user\"></i>
                                                <p>Technicians</p>
                                            </a>
                                        </div>    
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item has-treeview\">
                                <a href=\"/icu\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-procedures\"></i>
                                    <p>ICU</p>
                                </a>
                            </li>
                            <li class=\"nav-item has-treeview\">
                                <a href=\"/surgery\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-syringe\"></i>
                                    <p>Surgery</p>
                                </a>
                            </li>
                            <li class=\"nav-item has-treeview\">
                                <a href=\"/discharge\" class=\"nav-link\">
                                    <i class=\"nav-icon far fa-plus-square\"></i>
                                    <p>Discharge</p>
                                </a>   
                            </li>
                            <li class=\"nav-item has-treeview\">
                                <a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-sign-out-alt\"></i>
                                    <p>Logout</p>
                                </a>   
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                    
            </div>
            <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\">                 
                    ";
        // line 161
        $this->loadTemplate("page_header_nav.html.twig", "icu/patient_add.html.twig", 161)->display($context);
        echo "         
    
                    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_24.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                                <div class=\"col-md-9 ftco-animate text-center\">
                                    <h1 class=\"breadcrumb-item\"><b>ICU Patient's details</b></h2>
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
                                        <div class=\"col-sm-12 m-md-auto ftco-animate\">\t\t   
                                        ";
        // line 182
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), 'form_start');
        echo "  
                                                <div class=\"form-row\">
                                                    <div class=\"col-6\">  
                                                        <div class=\"input-group form-group col-md-6\">
                                                            <label class=\"label\">NIC Number</label>
                                                            ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "pNIC", [], "any", false, false, false, 187), 'row');
        echo "
                                                        </div> 
                                                    </div>     
                                                    <div class=\"col-2\">
                                                        <div class=\"input-group form-group\">
                                                            <label class=\"label\">Patient Type</label>
                                                            ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "PatientType", [], "any", false, false, false, 193), 'row');
        echo "
                                                        </div>    
                                                    </div>
                                                </div>
                                                <div class=\"form-row\">  
                                                    <div class=\"col-6\">               
                                                        <div class=\"form-group col-12\">
                                                            <label class=\"label\">First Name</label>
                                                            ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "pFirstName", [], "any", false, false, false, 201), 'row');
        echo "
                                                        </div>
                                                    </div>    
                                                    <div class=\"form-group col-md-6\">
                                                        <label class=\"label\">Last Name</label>
                                                        ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "pLastName", [], "any", false, false, false, 206), 'row');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"form-row\">
                                                    <div class=\"form-group col-md-3\">
                                                        <label class=\"label\">Date of Birth</label>
                                                        ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "pDOB", [], "any", false, false, false, 212), 'row');
        echo "
                                                    </div>
                                                    <div class=\"form-group col-md-2\">
                                                        <label class=\"label\">Patient Height</label>
                                                        ";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "pHeight", [], "any", false, false, false, 216), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-2\">
                                                    <label class=\"label\">Patient Weight</label>
                                                    ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "pWeight", [], "any", false, false, false, 220), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-2\">
                                                    <label class=\"label\">Gender</label>
                                                    ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "pGender", [], "any", false, false, false, 224), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-3\">
                                                    <label class=\"label\">Phone Number</label>
                                                    ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "pPhoneNumber", [], "any", false, false, false, 228), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-row\">
                                                <div class=\"form-group col-md-6\">
                                                    <label class=\"label\">Address</label>
                                                    ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "pAddress", [], "any", false, false, false, 234), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-6\">
                                                    <label class=\"label\">Emergency Contact</label>
                                                    ";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "pEmergencyContactDetails", [], "any", false, false, false, 238), 'row');
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
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "pMedicalHistroy", [], "any", false, false, false, 247), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-6\">
                                                    <label class=\"label\">Surgical Histroy</label>
                                                    ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "pSurgicalHistroy", [], "any", false, false, false, 251), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-row\">
                                                <div class=\"form-group col-md-6\">
                                                    <label class=\"label\">Allergic Histroy</label>
                                                    ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "pAllergicHistroy", [], "any", false, false, false, 257), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-6\">
                                                    <label class=\"label\">Drug Histroy</label>
                                                    ";
        // line 261
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "pDrugHistroy", [], "any", false, false, false, 261), 'row');
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
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "pVisitingNumber", [], "any", false, false, false, 270), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-5\">
                                                    <label class=\"label\">Social Histroy</label>
                                                    ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "pSocialHistroy", [], "any", false, false, false, 274), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-5\">
                                                    <label class=\"label\">Exam Details</label>
                                                    ";
        // line 278
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "pExaminationDetails", [], "any", false, false, false, 278), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-row\">
                                                <div class=\"form-group col-md-4\">
                                                    <label class=\"label\">Current Location</label>
                                                    ";
        // line 284
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "pCurrentLocation", [], "any", false, false, false, 284), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-row\">
                                                <div class=\"form-group col-md-4\">
                                                    <label class=\"label\">Status</label>
                                                    ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "pStatus", [], "any", false, false, false, 290), 'row');
        echo "
                                                </div>
                                            </div>
                                       
                                            ";
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), 'widget');
        echo "
                                            ";
        // line 295
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), 'form_end');
        echo "
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    ";
        // line 303
        $this->loadTemplate("footer.html.twig", "icu/patient_add.html.twig", 303)->display($context);
        // line 304
        echo "
                </div><!-- /.content-header -->    
            </div>
            <!-- /.content-wrapper -->  

            <!-- Control Sidebar -->
            <aside class=\"control-sidebar control-sidebar-dark\">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
    </body>

    <!-- Javascript Links -->
    ";
        // line 319
        $this->loadTemplate("js_part.html.twig", "icu/patient_add.html.twig", 319)->display($context);
        // line 320
        echo "        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "icu/patient_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 320,  516 => 319,  499 => 304,  497 => 303,  486 => 295,  482 => 294,  475 => 290,  466 => 284,  457 => 278,  450 => 274,  443 => 270,  431 => 261,  424 => 257,  415 => 251,  408 => 247,  396 => 238,  389 => 234,  380 => 228,  373 => 224,  366 => 220,  359 => 216,  352 => 212,  343 => 206,  335 => 201,  324 => 193,  315 => 187,  307 => 182,  285 => 163,  280 => 161,  260 => 144,  173 => 59,  167 => 57,  161 => 55,  159 => 54,  153 => 51,  145 => 45,  143 => 44,  133 => 36,  131 => 35,  127 => 33,  125 => 32,  106 => 15,  104 => 14,  100 => 12,  98 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'base.html.twig' %}

{% block title %}Add ICU Patients{% endblock %}

{% block body %}

    <!-- Page Specifying Meta Data -->
    {% include \"meta_data.html.twig\" %}
        
    <!-- CSS Links -->
    {% include \"css_part.html.twig\" %}

    <!-- Remove botdetect link -->
    {% include \"remove_botdetect_link.html.twig\" %}

    <body class=\"hold-transition sidebar-mini layout-fixed\">
        <div class=\"wrapper\">

            <!-- Navbar -->
            <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
                <!-- Left navbar links -->
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
                    </li>
                    <li class=\"nav-item d-none d-sm-inline-block col-auto\">
                        <a href=\"/\" class=\"nav-link\" style=\"font-size: 17px;\">Home</a>
                    </li>
                </ul>

                <!-- Search Form -->
                {% include \"search_form.html.twig\" %}
        
                <!-- Right navbar links -->
                {% include \"navbar_link_logout.html.twig\" %}

            </nav>
            <!-- /.navbar -->
            
            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">

                <!-- Brand Logo -->
                {% include \"brand_logo.html.twig\" %}
                
                <!-- Sidebar -->
                <div class=\"sidebar\">
                <!-- Sidebar user panel (optional) -->
                    <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                        <div class=\"image\">
                        <img src=\"{{ asset('dist/img/user2-160x160.jpg') }}\" class=\"img-circle elevation-2\" alt=\"User Image\">
                        </div>
                       <div class=\"info\">
                            {% if app.user.username == null %}
                                <a href=\"#\" class=\"d-block\">{{ app.user.email }}</a>
                            {% else %}
                                <a href=\"#\" class=\"d-block\">{{ app.user.username }}</a>
                            {% endif %}
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class=\"mt-2\">
                        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                            <li class=\"nav-item has-treeview\">
                                <a href=\"/\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-home\"></i>
                                    <p>Home</p>
                                </a>
                            </li>
                            <li class=\"nav-item has-treeview\">
                                <a href=\"/clinic\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-stethoscope\"></i>
                                    <p>Clinic</p>
                                </a>
                            </li>
                            <li class=\"nav-item has-treeview\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-clinic-medical\"></i>
                                    <p>Ward Addmission<i class=\"right fas fa-angle-left\"></i></p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <div class=\"container1\">
                                            <a href=\"/patient\" class=\"nav-link active\">
                                            <i class=\"nav-icon fas fa-user-injured\"></i>
                                                <p>Patients</p>
                                            </a>
                                        </div>    
                                    </li>
                                    <li class=\"nav-item\">
                                        <div class=\"container1\">
                                            <a href=\"/doctor\" class=\"nav-link\">
                                            <i class=\"nav-icon fas fa-user-md\"></i>
                                                <p>Doctors</p>
                                            </a>
                                        </div>    
                                    </li>
                                    <li class=\"nav-item\">
                                        <div class=\"container1\">
                                            <a href=\"/nurse\" class=\"nav-link\">
                                            <i class=\"nav-icon fas fa-user-nurse\"></i>
                                                <p>Nurses</p>
                                            </a>
                                        </div>    
                                    </li>
                                    <li class=\"nav-item\">
                                        <div class=\"container1\">
                                            <a href=\"/consultant\" class=\"nav-link\">
                                            <i class=\"nav-icon fas fa-user-tie\"></i>
                                                <p>Consultants</p>
                                            </a>
                                        </div>    
                                    </li>
                                    <li class=\"nav-item\">
                                        <div class=\"container1\">
                                            <a href=\"/technician\" class=\"nav-link\">
                                            <i class=\"nav-icon fas fa-user\"></i>
                                                <p>Technicians</p>
                                            </a>
                                        </div>    
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item has-treeview\">
                                <a href=\"/icu\" class=\"nav-link active\">
                                    <i class=\"nav-icon fas fa-procedures\"></i>
                                    <p>ICU</p>
                                </a>
                            </li>
                            <li class=\"nav-item has-treeview\">
                                <a href=\"/surgery\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-syringe\"></i>
                                    <p>Surgery</p>
                                </a>
                            </li>
                            <li class=\"nav-item has-treeview\">
                                <a href=\"/discharge\" class=\"nav-link\">
                                    <i class=\"nav-icon far fa-plus-square\"></i>
                                    <p>Discharge</p>
                                </a>   
                            </li>
                            <li class=\"nav-item has-treeview\">
                                <a href=\"{{ path('logout') }}\" class=\"nav-link\">
                                    <i class=\"nav-icon fas fa-sign-out-alt\"></i>
                                    <p>Logout</p>
                                </a>   
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                    
            </div>
            <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\">                 
                    {% include \"page_header_nav.html.twig\" %}         
    
                    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('images/bg_24.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                                <div class=\"col-md-9 ftco-animate text-center\">
                                    <h1 class=\"breadcrumb-item\"><b>ICU Patient's details</b></h2>
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
                                        <div class=\"col-sm-12 m-md-auto ftco-animate\">\t\t   
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
                    </section>

                    {% include \"footer.html.twig\" %}

                </div><!-- /.content-header -->    
            </div>
            <!-- /.content-wrapper -->  

            <!-- Control Sidebar -->
            <aside class=\"control-sidebar control-sidebar-dark\">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
    </body>

    <!-- Javascript Links -->
    {% include \"js_part.html.twig\" %}
        
{% endblock %}
", "icu/patient_add.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\icu\\patient_add.html.twig");
    }
}
