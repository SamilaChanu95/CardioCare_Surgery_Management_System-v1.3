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

/* icu/icupatient_edit.html.twig */
class __TwigTemplate_d99867c6aead8fe0352ddbb2bc3b269922e977350018c3bf19ff629709c8dd38 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icu/icupatient_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icu/icupatient_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "icu/icupatient_edit.html.twig", 1);
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

        echo "Edit ICU Reports";
        
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
        echo "
    <!-- Page Specifying Meta Data -->
    ";
        // line 9
        $this->loadTemplate("meta_data.html.twig", "icu/icupatient_edit.html.twig", 9)->display($context);
        // line 10
        echo "        
    <!-- CSS Links -->
    ";
        // line 12
        $this->loadTemplate("css_part.html.twig", "icu/icupatient_edit.html.twig", 12)->display($context);
        // line 13
        echo "
    <!-- Remove botdetect link -->
    ";
        // line 15
        $this->loadTemplate("remove_botdetect_link.html.twig", "icu/icupatient_edit.html.twig", 15)->display($context);
        // line 16
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
        // line 33
        $this->loadTemplate("search_form.html.twig", "icu/icupatient_edit.html.twig", 33)->display($context);
        // line 34
        echo "        
                <!-- Right navbar links -->
                ";
        // line 36
        $this->loadTemplate("navbar_link_logout.html.twig", "icu/icupatient_edit.html.twig", 36)->display($context);
        // line 37
        echo "
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
            
                <!-- Brand Logo -->
                ";
        // line 45
        $this->loadTemplate("brand_logo.html.twig", "icu/icupatient_edit.html.twig", 45)->display($context);
        // line 46
        echo "
                <!-- Sidebar -->
                <div class=\"sidebar\">
                <!-- Sidebar user panel (optional) -->
                    <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                        <div class=\"image\">
                        <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
                        </div>
                        <div class=\"info\">
                            ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "username", [], "any", false, false, false, 55) == null)) {
            // line 56
            echo "                                <a href=\"#\" class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "email", [], "any", false, false, false, 56), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 58
            echo "                                <a href=\"#\" class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "username", [], "any", false, false, false, 58), "html", null, true);
            echo "</a>
                            ";
        }
        // line 60
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
                                            <a href=\"/patient\" class=\"nav-link\">
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
        // line 145
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
        // line 162
        $this->loadTemplate("page_header_nav.html.twig", "icu/icupatient_edit.html.twig", 162)->display($context);
        // line 163
        echo "                        
                    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        // line 164
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
\t\t
                    <section class=\"ftco-section\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-10 m-md-auto ftco-animate\">\t\t   
                                    ";
        // line 179
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), 'form_start');
        echo "
                                    ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), 'widget');
        echo "
                                    ";
        // line 181
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), 'form_end');
        echo "    
                                </div>
                            </div>
                        </div>
                    </section>

                    ";
        // line 187
        $this->loadTemplate("footer.html.twig", "icu/icupatient_edit.html.twig", 187)->display($context);
        // line 188
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
        // line 203
        $this->loadTemplate("js_part.html.twig", "icu/icupatient_edit.html.twig", 203)->display($context);
        // line 204
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "icu/icupatient_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 204,  339 => 203,  322 => 188,  320 => 187,  311 => 181,  307 => 180,  303 => 179,  285 => 164,  282 => 163,  280 => 162,  260 => 145,  173 => 60,  167 => 58,  161 => 56,  159 => 55,  153 => 52,  145 => 46,  143 => 45,  133 => 37,  131 => 36,  127 => 34,  125 => 33,  106 => 16,  104 => 15,  100 => 13,  98 => 12,  94 => 10,  92 => 9,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'base.html.twig' %}


{% block title %}Edit ICU Reports{% endblock %}

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
                                            <a href=\"/patient\" class=\"nav-link\">
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
                        
                    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('images/bg_10.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                                <div class=\"col-md-9 ftco-animate text-center\">
                                    <h2 class=\"breadcrumb-item\"><b>ICU Report's details</b></h2>
                                </div>
                            </div>
                        </div>
                    </section>
\t\t
                    <section class=\"ftco-section\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-10 m-md-auto ftco-animate\">\t\t   
                                    {{ form_start(form) }}
                                    {{ form_widget(form) }}
                                    {{ form_end(form) }}    
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
", "icu/icupatient_edit.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\icu\\icupatient_edit.html.twig");
    }
}
