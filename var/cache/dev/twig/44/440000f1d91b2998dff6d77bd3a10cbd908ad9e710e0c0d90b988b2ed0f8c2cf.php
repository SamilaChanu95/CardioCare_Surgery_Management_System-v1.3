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

/* clinic/clinic.html.twig */
class __TwigTemplate_3c232ec794a777f251e7212109c5146e918c0372d5472573c8ca0b7093b7ad70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clinic/clinic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clinic/clinic.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "clinic/clinic.html.twig", 1);
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

        echo "Clinical Patients";
        
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
        echo "    <!-- Page Specifying Meta Data -->
    ";
        // line 7
        $this->loadTemplate("meta_data.html.twig", "clinic/clinic.html.twig", 7)->display($context);
        // line 8
        echo "
    <!-- CSS Links -->
    ";
        // line 10
        $this->loadTemplate("css_part.html.twig", "clinic/clinic.html.twig", 10)->display($context);
        // line 11
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
        // line 28
        $this->loadTemplate("search_form.html.twig", "clinic/clinic.html.twig", 28)->display($context);
        // line 29
        echo "
                <!-- Right navbar links -->
                ";
        // line 31
        $this->loadTemplate("navbar_link_logout.html.twig", "clinic/clinic.html.twig", 31)->display($context);
        // line 32
        echo "            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
                <!-- Brand Logo -->
                ";
        // line 38
        $this->loadTemplate("brand_logo.html.twig", "clinic/clinic.html.twig", 38)->display($context);
        // line 39
        echo "
                <!-- Sidebar -->
                <div class=\"sidebar\">
                <!-- Sidebar user panel (optional) -->
                    <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                        <div class=\"image\">
                        <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
                        </div>
                        <div class=\"info\">
                            ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "username", [], "any", false, false, false, 48) == null)) {
            // line 49
            echo "                                <a href=\"#\" class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "email", [], "any", false, false, false, 49), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 51
            echo "                                <a href=\"#\" class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "username", [], "any", false, false, false, 51), "html", null, true);
            echo "</a>
                            ";
        }
        // line 53
        echo "                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    ";
        // line 57
        $this->loadTemplate("clinic/sidebar.html.twig", "clinic/clinic.html.twig", 57)->display($context);
        // line 58
        echo "                    <!-- /.sidebar-menu -->

                </div>
                    <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\">                 
                    ";
        // line 68
        $this->loadTemplate("page_header_nav.html.twig", "clinic/clinic.html.twig", 68)->display($context);
        // line 69
        echo "                    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
                      <div class=\"container d-flex align-items-center\">
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"oi oi-menu\"></span> Menu
                        </button>    
                      </div>
                    </nav>
                    <!-- END nav -->
                    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('images/bg_8.jpg');\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                                <div class=\"col-md-9 ftco-animate text-center\">
                                    <h2 class=\"breadcrumb-item\"><b>Clinical Patients</b></h2>
                                </div>
                            </div>
                        </div>
                    </section>
                        
                        
                    <section class=\"ftco-section\">
                    ";
        // line 90
        if ((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 90, $this->source); })())) {
            // line 91
            echo "                        <table class=\"table table-hover table-avatar table-valign-middle table-head-fixed table-responsive-xl\">
                            <thead>
                                <tr class=\"table\">
                                    <th scope=\"col\"><p>Patient Name</p></th>
                                    <th scope=\"col\"><p>Patient Address</p></th>
                                    <th scope=\"col\"><p>Gender</p></th>
                                    <th scope=\"col\"><p>Date of Birth</p></th>
                                    <th scope=\"col\"><p>Phone Number</p></th>
                                    <th scope=\"col\"><p>Emergency Contact Details</p></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 103, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 104
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["patient"], "getPatientType", [], "method", false, false, false, 104) == "Out Patient")) {
                    // line 105
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["patient"], "getPStatus", [], "method", false, false, false, 105) == "Active")) {
                        // line 106
                        echo "                                            <tr>
                                                <td><h7><a href=\"/clinic/patient/edit/";
                        // line 107
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 107), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pFirstName", [], "any", false, false, false, 107), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pLastName", [], "any", false, false, false, 107), "html", null, true);
                        echo "</a></h7></td>
                                                <td><p>";
                        // line 108
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pAddress", [], "any", false, false, false, 108), "html", null, true);
                        echo "</p></td>
                                                <td><p>";
                        // line 109
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pGender", [], "any", false, false, false, 109), "html", null, true);
                        echo "</p></td>
                                                <td><p>";
                        // line 110
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pDOB", [], "any", false, false, false, 110), "html", null, true);
                        echo "</p></td>
                                                <td><p>";
                        // line 111
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pPhoneNumber", [], "any", false, false, false, 111), "html", null, true);
                        echo "</p></td>
                                                <td><p>";
                        // line 112
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "pEmergencyContactDetails", [], "any", false, false, false, 112), "html", null, true);
                        echo "</p></td>
                                            </tr>
                                        ";
                    }
                    // line 114
                    echo "    
                                    ";
                }
                // line 116
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "    
                            </tbody>
                        </table>         
                    ";
        } else {
            // line 120
            echo "                        <p align=\"center\">No Clinical patients to display.</p>
                    ";
        }
        // line 122
        echo "                        <p align=\"center\" class=\"button-custom\"><a href=\"/clinic/patient/add\" class=\"btn btn-secondary py-2 px-3\">Add new Clinical Patient</a></p>
                    </section>

                    ";
        // line 125
        $this->loadTemplate("footer.html.twig", "clinic/clinic.html.twig", 125)->display($context);
        // line 126
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
        // line 141
        $this->loadTemplate("js_part.html.twig", "clinic/clinic.html.twig", 141)->display($context);
        // line 142
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "clinic/clinic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 142,  311 => 141,  294 => 126,  292 => 125,  287 => 122,  283 => 120,  272 => 116,  268 => 114,  262 => 112,  258 => 111,  254 => 110,  250 => 109,  246 => 108,  238 => 107,  235 => 106,  232 => 105,  229 => 104,  225 => 103,  211 => 91,  209 => 90,  186 => 69,  184 => 68,  172 => 58,  170 => 57,  164 => 53,  158 => 51,  152 => 49,  150 => 48,  144 => 45,  136 => 39,  134 => 38,  126 => 32,  124 => 31,  120 => 29,  118 => 28,  99 => 11,  97 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Clinical Patients{% endblock %}

{% block body %}
    <!-- Page Specifying Meta Data -->
    {% include \"meta_data.html.twig\" %}

    <!-- CSS Links -->
    {% include \"css_part.html.twig\" %}

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
                    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('images/bg_8.jpg');\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                                <div class=\"col-md-9 ftco-animate text-center\">
                                    <h2 class=\"breadcrumb-item\"><b>Clinical Patients</b></h2>
                                </div>
                            </div>
                        </div>
                    </section>
                        
                        
                    <section class=\"ftco-section\">
                    {% if patients %}
                        <table class=\"table table-hover table-avatar table-valign-middle table-head-fixed table-responsive-xl\">
                            <thead>
                                <tr class=\"table\">
                                    <th scope=\"col\"><p>Patient Name</p></th>
                                    <th scope=\"col\"><p>Patient Address</p></th>
                                    <th scope=\"col\"><p>Gender</p></th>
                                    <th scope=\"col\"><p>Date of Birth</p></th>
                                    <th scope=\"col\"><p>Phone Number</p></th>
                                    <th scope=\"col\"><p>Emergency Contact Details</p></th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for patient in patients %}
                                    {% if patient.getPatientType() == \"Out Patient\" %}
                                        {% if patient.getPStatus() == \"Active\" %}
                                            <tr>
                                                <td><h7><a href=\"/clinic/patient/edit/{{ patient.id }}\">{{  patient.pFirstName }} {{  patient.pLastName }}</a></h7></td>
                                                <td><p>{{ patient.pAddress }}</p></td>
                                                <td><p>{{ patient.pGender }}</p></td>
                                                <td><p>{{ patient.pDOB }}</p></td>
                                                <td><p>{{ patient.pPhoneNumber }}</p></td>
                                                <td><p>{{ patient.pEmergencyContactDetails }}</p></td>
                                            </tr>
                                        {% endif %}    
                                    {% endif %}
                                {% endfor %}    
                            </tbody>
                        </table>         
                    {% else %}
                        <p align=\"center\">No Clinical patients to display.</p>
                    {% endif %}
                        <p align=\"center\" class=\"button-custom\"><a href=\"/clinic/patient/add\" class=\"btn btn-secondary py-2 px-3\">Add new Clinical Patient</a></p>
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



", "clinic/clinic.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\clinic\\clinic.html.twig");
    }
}
