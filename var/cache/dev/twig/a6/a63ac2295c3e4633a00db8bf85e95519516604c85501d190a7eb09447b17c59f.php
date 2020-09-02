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

/* icu/icureport_show.html.twig */
class __TwigTemplate_32729c742c38a6a6cb5c28142ec7ec2816bebf635c733a8c485f12a583d7e5b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icu/icureport_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icu/icureport_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "icu/icureport_show.html.twig", 1);
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

        echo "ICU Report Details";
        
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
        $this->loadTemplate("meta_data.html.twig", "icu/icureport_show.html.twig", 8)->display($context);
        // line 9
        echo "        
    <!-- CSS Links -->
    ";
        // line 11
        $this->loadTemplate("css_part.html.twig", "icu/icureport_show.html.twig", 11)->display($context);
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
        $this->loadTemplate("search_form.html.twig", "icu/icureport_show.html.twig", 28)->display($context);
        // line 29
        echo "        
                <!-- Right navbar links -->
                ";
        // line 31
        $this->loadTemplate("navbar_link_logout.html.twig", "icu/icureport_show.html.twig", 31)->display($context);
        // line 32
        echo "
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
                <!-- Brand Logo -->
                ";
        // line 39
        $this->loadTemplate("brand_logo.html.twig", "icu/icureport_show.html.twig", 39)->display($context);
        // line 40
        echo "                <!-- Sidebar -->
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
        // line 56
        $this->loadTemplate("hospital/sidebar.html.twig", "icu/icureport_show.html.twig", 56)->display($context);
        // line 57
        echo "                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\">                 
                    ";
        // line 65
        $this->loadTemplate("page_header_nav.html.twig", "icu/icureport_show.html.twig", 65)->display($context);
        // line 66
        echo "    
                    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_9.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                                <div class=\"col-md-9 ftco-animate text-center\">
                                    <h2 class=\"breadcrumb-item\"><b>ICU Report</b></h2>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class=\"ftco-section\">
                        <div class=\"container1\">
                            <table class=\"table table-hover table-responsive table-borderless\">
                                <thead>
                                    <tr class=\"table\">
                                        <th scope=\"col\"><p>Code</p></th>
                                        <th scope=\"col\"><p>Patient Name</p></th>
                                        <th scope=\"col\"><p>Admit Date</p></th>
                                        <th scope=\"col\"><p>Room</p></th>
                                        <th scope=\"col\"><p>Diagnosies</p></th>
                                        <th scope=\"col\"><p>Neuro</p></th>
                                        <th scope=\"col\"><p>Cardiac</p></th>
                                        <th scope=\"col\"><p>Respiratory</p></th>
                                        <th scope=\"col\"><p>Ventilator</p></th>
                                        <th scope=\"col\"><p>GI</p></th>
                                        <th scope=\"col\"><p>GU</p></th>
                                        <th scope=\"col\"><p>Skin</p></th>
                                        <th scope=\"col\"><p>Drains</p></th>
                                        <th scope=\"col\"><p>Labs</p></th>
                                        <th scope=\"col\"><p>Meds</p></th>
                                        <th scope=\"col\"><p>Hemodynamics</p></th>
                                        <th scope=\"col\"><p>ToDo</p></th>
                                        <th scope=\"col\"><p>Core Measures</p></th>
                                        <th scope=\"col\"><p>Actions</p></th>
                                        <th scope=\"col\"><p>Actions</p></th>
                                    </tr>
                                </thead>
                                </tbody>                  
                                    <tr> 
                                        <td><p><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("icureport_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 107, $this->source); })()), "Code", [], "any", false, false, false, 107), "html", null, true);
        echo "</a></p></td>
                                        <td><p>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 108, $this->source); })()), "Patient", [], "any", false, false, false, 108), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 109
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 109, $this->source); })()), "AdmitDate", [], "any", false, false, false, 109), "d-m-Y"), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 110, $this->source); })()), "Room", [], "any", false, false, false, 110), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 111, $this->source); })()), "Diagnosis", [], "any", false, false, false, 111), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 112, $this->source); })()), "Neuro", [], "any", false, false, false, 112), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 113, $this->source); })()), "Cardiac", [], "any", false, false, false, 113), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 114, $this->source); })()), "Respiratory", [], "any", false, false, false, 114), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 115, $this->source); })()), "Ventilator", [], "any", false, false, false, 115), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 116, $this->source); })()), "GI", [], "any", false, false, false, 116), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 117, $this->source); })()), "GU", [], "any", false, false, false, 117), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 118, $this->source); })()), "Skin", [], "any", false, false, false, 118), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 119, $this->source); })()), "Drains", [], "any", false, false, false, 119), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 120, $this->source); })()), "Labs", [], "any", false, false, false, 120), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 121, $this->source); })()), "Meds", [], "any", false, false, false, 121), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 122, $this->source); })()), "Hemodynamics", [], "any", false, false, false, 122), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 123, $this->source); })()), "ToDo", [], "any", false, false, false, 123), "html", null, true);
        echo "</p></td>
                                        <td><p>";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 124, $this->source); })()), "CoreMeasures", [], "any", false, false, false, 124), "html", null, true);
        echo "</p></td>
                                        <td><p align=\"center\" class=\"button-custom pricing-entry\"><a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("icureport_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["icureport"]) || array_key_exists("icureport", $context) ? $context["icureport"] : (function () { throw new RuntimeError('Variable "icureport" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125)]), "html", null, true);
        echo "\" class=\"price py-2 px-3\">Edit</a></p></td>
                                        <td>";
        // line 126
        echo twig_include($this->env, $context, "icu/icureport_delete_form.html.twig");
        echo "</td> 
                                    </tr>
                                </tbody>               
                            </table> 
                            <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("icu_reports_list");
        echo "\">back to list</a>  
                        </div>
                    </section>

                    ";
        // line 134
        $this->loadTemplate("footer.html.twig", "icu/icureport_show.html.twig", 134)->display($context);
        // line 135
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
        // line 150
        $this->loadTemplate("js_part.html.twig", "icu/icureport_show.html.twig", 150)->display($context);
        // line 151
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "icu/icureport_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 151,  340 => 150,  323 => 135,  321 => 134,  314 => 130,  307 => 126,  303 => 125,  299 => 124,  295 => 123,  291 => 122,  287 => 121,  283 => 120,  279 => 119,  275 => 118,  271 => 117,  267 => 116,  263 => 115,  259 => 114,  255 => 113,  251 => 112,  247 => 111,  243 => 110,  239 => 109,  235 => 108,  229 => 107,  186 => 67,  183 => 66,  181 => 65,  171 => 57,  169 => 56,  164 => 53,  158 => 51,  152 => 49,  150 => 48,  144 => 45,  137 => 40,  135 => 39,  126 => 32,  124 => 31,  120 => 29,  118 => 28,  98 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ICU Report Details{% endblock %}

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
                     {% include \"hospital/sidebar.html.twig\" %}
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\">                 
                    {% include \"page_header_nav.html.twig\" %}
    
                    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('images/bg_9.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                                <div class=\"col-md-9 ftco-animate text-center\">
                                    <h2 class=\"breadcrumb-item\"><b>ICU Report</b></h2>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class=\"ftco-section\">
                        <div class=\"container1\">
                            <table class=\"table table-hover table-responsive table-borderless\">
                                <thead>
                                    <tr class=\"table\">
                                        <th scope=\"col\"><p>Code</p></th>
                                        <th scope=\"col\"><p>Patient Name</p></th>
                                        <th scope=\"col\"><p>Admit Date</p></th>
                                        <th scope=\"col\"><p>Room</p></th>
                                        <th scope=\"col\"><p>Diagnosies</p></th>
                                        <th scope=\"col\"><p>Neuro</p></th>
                                        <th scope=\"col\"><p>Cardiac</p></th>
                                        <th scope=\"col\"><p>Respiratory</p></th>
                                        <th scope=\"col\"><p>Ventilator</p></th>
                                        <th scope=\"col\"><p>GI</p></th>
                                        <th scope=\"col\"><p>GU</p></th>
                                        <th scope=\"col\"><p>Skin</p></th>
                                        <th scope=\"col\"><p>Drains</p></th>
                                        <th scope=\"col\"><p>Labs</p></th>
                                        <th scope=\"col\"><p>Meds</p></th>
                                        <th scope=\"col\"><p>Hemodynamics</p></th>
                                        <th scope=\"col\"><p>ToDo</p></th>
                                        <th scope=\"col\"><p>Core Measures</p></th>
                                        <th scope=\"col\"><p>Actions</p></th>
                                        <th scope=\"col\"><p>Actions</p></th>
                                    </tr>
                                </thead>
                                </tbody>                  
                                    <tr> 
                                        <td><p><a href=\"{{ path('icureport_edit', {'id': icureport.id}) }}\">{{  icureport.Code }}</a></p></td>
                                        <td><p>{{  icureport.Patient }}</p></td>
                                        <td><p>{{ icureport.AdmitDate|date('d-m-Y') }}</p></td>
                                        <td><p>{{  icureport.Room }}</p></td>
                                        <td><p>{{  icureport.Diagnosis }}</p></td>
                                        <td><p>{{  icureport.Neuro }}</p></td>
                                        <td><p>{{  icureport.Cardiac }}</p></td>
                                        <td><p>{{  icureport.Respiratory }}</p></td>
                                        <td><p>{{  icureport.Ventilator }}</p></td>
                                        <td><p>{{  icureport.GI }}</p></td>
                                        <td><p>{{  icureport.GU }}</p></td>
                                        <td><p>{{  icureport.Skin }}</p></td>
                                        <td><p>{{  icureport.Drains }}</p></td>
                                        <td><p>{{  icureport.Labs }}</p></td>
                                        <td><p>{{  icureport.Meds }}</p></td>
                                        <td><p>{{  icureport.Hemodynamics }}</p></td>
                                        <td><p>{{  icureport.ToDo }}</p></td>
                                        <td><p>{{  icureport.CoreMeasures }}</p></td>
                                        <td><p align=\"center\" class=\"button-custom pricing-entry\"><a href=\"{{ path('icureport_edit', {'id': icureport.id}) }}\" class=\"price py-2 px-3\">Edit</a></p></td>
                                        <td>{{ include('icu/icureport_delete_form.html.twig') }}</td> 
                                    </tr>
                                </tbody>               
                            </table> 
                            <a href=\"{{ path('icu_reports_list') }}\">back to list</a>  
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

{% endblock %}", "icu/icureport_show.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\icu\\icureport_show.html.twig");
    }
}
