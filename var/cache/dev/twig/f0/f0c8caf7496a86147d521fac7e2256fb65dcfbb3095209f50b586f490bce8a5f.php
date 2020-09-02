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

/* clinic/patient_edit.html.twig */
class __TwigTemplate_3669cd03de39cd21f856f8baed139d56791134b6bc348e042822f9edade9d67b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clinic/patient_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clinic/patient_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "clinic/patient_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Clinical Patient";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <!-- Page Specifying Meta Data -->
    ";
        // line 8
        $this->loadTemplate("meta_data.html.twig", "clinic/patient_edit.html.twig", 8)->display($context);
        // line 9
        echo "        
    <!-- CSS Links -->
    ";
        // line 11
        $this->loadTemplate("css_part.html.twig", "clinic/patient_edit.html.twig", 11)->display($context);
        // line 12
        echo "
    <!-- Remove botdetect link -->
    ";
        // line 14
        $this->loadTemplate("remove_botdetect_link.html.twig", "clinic/patient_edit.html.twig", 14)->display($context);
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
        $this->loadTemplate("search_form.html.twig", "clinic/patient_edit.html.twig", 32)->display($context);
        // line 33
        echo "    
                <!-- Right navbar links -->
                ";
        // line 35
        $this->loadTemplate("navbar_link_logout.html.twig", "clinic/patient_edit.html.twig", 35)->display($context);
        // line 36
        echo "            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
                <!-- Brand Logo -->
                ";
        // line 42
        $this->loadTemplate("brand_logo.html.twig", "clinic/patient_edit.html.twig", 42)->display($context);
        // line 43
        echo "                   
                <!-- Sidebar -->
                <div class=\"sidebar\">
                <!-- Sidebar user panel (optional) -->
                    <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                        <div class=\"image\">
                        <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
                        </div>
                        <div class=\"info\">
                            ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "username", [], "any", false, false, false, 52) == null)) {
            // line 53
            echo "                                <a href=\"#\" class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "email", [], "any", false, false, false, 53), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 55
            echo "                                <a href=\"#\" class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "username", [], "any", false, false, false, 55), "html", null, true);
            echo "</a>
                            ";
        }
        // line 57
        echo "                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    ";
        // line 61
        $this->loadTemplate("clinic/sidebar.html.twig", "clinic/patient_edit.html.twig", 61)->display($context);
        // line 62
        echo "                    <!-- /.sidebar-menu -->
                        
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\">                 
                    ";
        // line 72
        $this->loadTemplate("page_header_nav.html.twig", "clinic/patient_edit.html.twig", 72)->display($context);
        // line 73
        echo "                    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
                      <div class=\"container d-flex align-items-center\">
                      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                              <span class=\"oi oi-menu\"></span> Menu
                          </button>    
                      </div>
                    </nav>
                    <!-- END nav -->
    
                    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_8.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                                <div class=\"col-md-9 ftco-animate text-center\">
                                    <h2 class=\"breadcrumb-item\"><b>Clinical Patient's details</b></h2>
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
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_start');
        echo "  
                                            <div class=\"form-row\">
                                                <div class=\"col-6\">  
                                                    <div class=\"input-group form-group col-md-6\">
                                                        <label class=\"label\">NIC Number</label>
                                                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "pNIC", [], "any", false, false, false, 106), 'row');
        echo "
                                                    </div> 
                                                </div>     
                                                <div class=\"col-2\">
                                                    <div class=\"input-group form-group\">
                                                        <label class=\"label\">Patient Type</label>
                                                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "PatientType", [], "any", false, false, false, 112), 'row');
        echo "
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class=\"form-row\">  
                                                <div class=\"col-6\">               
                                                    <div class=\"form-group col-12\">
                                                        <label class=\"label\">First Name</label>
                                                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "pFirstName", [], "any", false, false, false, 120), 'row');
        echo "
                                                    </div>
                                                </div>    
                                                <div class=\"form-group col-md-6\">
                                                    <label class=\"label\">Last Name</label>
                                                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "pLastName", [], "any", false, false, false, 125), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-row\">
                                                <div class=\"form-group col-md-3\">
                                                    <label class=\"label\">Date of Birth</label>
                                                    ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "pDOB", [], "any", false, false, false, 131), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-2\">
                                                    <label class=\"label\">Patient Height</label>
                                                    ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "pHeight", [], "any", false, false, false, 135), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-2\">
                                                    <label class=\"label\">Patient Weight</label>
                                                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "pWeight", [], "any", false, false, false, 139), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-2\">
                                                    <label class=\"label\">Gender</label>
                                                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "pGender", [], "any", false, false, false, 143), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-3\">
                                                    <label class=\"label\">Phone Number</label>
                                                    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "pPhoneNumber", [], "any", false, false, false, 147), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-row\">
                                                <div class=\"form-group col-md-6\">
                                                    <label class=\"label\">Address</label>
                                                    ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "pAddress", [], "any", false, false, false, 153), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-6\">
                                                    <label class=\"label\">Emergency Contact</label>
                                                    ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "pEmergencyContactDetails", [], "any", false, false, false, 157), 'row');
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
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "pMedicalHistroy", [], "any", false, false, false, 166), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-6\">
                                                    <label class=\"label\">Surgical Histroy</label>
                                                    ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "pSurgicalHistroy", [], "any", false, false, false, 170), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-row\">
                                                <div class=\"form-group col-md-6\">
                                                    <label class=\"label\">Allergic Histroy</label>
                                                    ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "pAllergicHistroy", [], "any", false, false, false, 176), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-6\">
                                                    <label class=\"label\">Drug Histroy</label>
                                                    ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "pDrugHistroy", [], "any", false, false, false, 180), 'row');
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
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "pVisitingNumber", [], "any", false, false, false, 189), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-5\">
                                                    <label class=\"label\">Social Histroy</label>
                                                    ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "pSocialHistroy", [], "any", false, false, false, 193), 'row');
        echo "
                                                </div>
                                                <div class=\"form-group col-md-5\">
                                                    <label class=\"label\">Exam Details</label>
                                                    ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "pExaminationDetails", [], "any", false, false, false, 197), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-row\">
                                                <div class=\"form-group col-md-4\">
                                                    <label class=\"label\">Status</label>
                                                    ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "pStatus", [], "any", false, false, false, 203), 'row');
        echo "
                                                </div>
                                            </div>
                                            <div class=\"form-row\">
                                                <div class=\"form-group col-md-4\">
                                                    <label class=\"label\">Patient Type</label>
                                                    ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "PatientType", [], "any", false, false, false, 209), 'row');
        echo "
                                                </div>
                                            </div>
                                        ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), 'widget');
        echo "
                                        ";
        // line 213
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), 'form_end');
        echo "
                                        </div> 
                                    </div>       
                                </div>
                            </div>
                        </div>
                    </section>

                    ";
        // line 221
        $this->loadTemplate("footer.html.twig", "clinic/patient_edit.html.twig", 221)->display($context);
        // line 222
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
        // line 237
        $this->loadTemplate("js_part.html.twig", "clinic/patient_edit.html.twig", 237)->display($context);
        // line 238
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "clinic/patient_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 238,  433 => 237,  416 => 222,  414 => 221,  403 => 213,  399 => 212,  393 => 209,  384 => 203,  375 => 197,  368 => 193,  361 => 189,  349 => 180,  342 => 176,  333 => 170,  326 => 166,  314 => 157,  307 => 153,  298 => 147,  291 => 143,  284 => 139,  277 => 135,  270 => 131,  261 => 125,  253 => 120,  242 => 112,  233 => 106,  225 => 101,  203 => 82,  192 => 73,  190 => 72,  178 => 62,  176 => 61,  170 => 57,  164 => 55,  158 => 53,  156 => 52,  150 => 49,  142 => 43,  140 => 42,  132 => 36,  130 => 35,  126 => 33,  124 => 32,  105 => 15,  103 => 14,  99 => 12,  97 => 11,  93 => 9,  91 => 8,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'base.html.twig' %}


{% block title %}Edit Clinical Patient{% endblock %}

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
                    {% include \"clinic/sidebar.html.twig\" %}
                    <!-- /.sidebar-menu -->
                        
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\">                 
                    {% include \"page_header_nav.html.twig\" %}
                    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
                      <div class=\"container d-flex align-items-center\">
                      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                              <span class=\"oi oi-menu\"></span> Menu
                          </button>    
                      </div>
                    </nav>
                    <!-- END nav -->
    
                    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('images/bg_8.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                                <div class=\"col-md-9 ftco-animate text-center\">
                                    <h2 class=\"breadcrumb-item\"><b>Clinical Patient's details</b></h2>
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
", "clinic/patient_edit.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\clinic\\patient_edit.html.twig");
    }
}
