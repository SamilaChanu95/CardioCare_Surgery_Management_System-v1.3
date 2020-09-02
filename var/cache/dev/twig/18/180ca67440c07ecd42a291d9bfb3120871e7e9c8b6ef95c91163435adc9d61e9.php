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

/* surgery/surgery.html.twig */
class __TwigTemplate_66f1b8e45d75f2c391ee593b06ddac613b0af9d9ee2c285cf79cf111841229b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "surgery/surgery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "surgery/surgery.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "surgery/surgery.html.twig", 1);
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

        echo "Surgeries";
        
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
        $this->loadTemplate("meta_data.html.twig", "surgery/surgery.html.twig", 8)->display($context);
        // line 9
        echo "        
    <!-- CSS Links -->
    ";
        // line 11
        $this->loadTemplate("css_part.html.twig", "surgery/surgery.html.twig", 11)->display($context);
        // line 12
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
        $this->loadTemplate("search_form.html.twig", "surgery/surgery.html.twig", 28)->display($context);
        // line 29
        echo "        
                <!-- Right navbar links -->
                ";
        // line 31
        $this->loadTemplate("navbar_link_logout.html.twig", "surgery/surgery.html.twig", 31)->display($context);
        // line 32
        echo "
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
                <!-- Brand Logo -->
                ";
        // line 39
        $this->loadTemplate("brand_logo.html.twig", "surgery/surgery.html.twig", 39)->display($context);
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
        // line 57
        $this->loadTemplate("surgery/sidebar.html.twig", "surgery/surgery.html.twig", 57)->display($context);
        // line 58
        echo "                    <!-- /.sidebar-menu -->

                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\"> 

                    ";
        // line 69
        $this->loadTemplate("page_header_nav.html.twig", "surgery/surgery.html.twig", 69)->display($context);
        echo "                   
    
                    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_18.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                                <div class=\"col-md-9 ftco-animate text-center\">
                                    <h2 class=\"breadcrumb-item\"><b>Surgical Patients</b></h2>
                                </div>
                            </div>
                        </div>
                    </section>
\t\t
                    ";
        // line 82
        $this->loadTemplate("surgery/surgerypatient_index.html.twig", "surgery/surgery.html.twig", 82)->display($context);
        // line 83
        echo "
                    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_7.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
                    <div class=\"overlay\"></div>
                    <div class=\"container\">
                        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                        <div class=\"col-md-9 ftco-animate text-center\">
                            <h2 class=\"breadcrumb-item\"><b>Our Surgeries</b></h2>
                        </div>
                        </div>
                    </div>
                    </section>
\t\t
                    ";
        // line 95
        $this->loadTemplate("surgery/surgeryreport_index.html.twig", "surgery/surgery.html.twig", 95)->display($context);
        // line 96
        echo "
                    ";
        // line 97
        $this->loadTemplate("footer.html.twig", "surgery/surgery.html.twig", 97)->display($context);
        // line 98
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
        // line 113
        $this->loadTemplate("js_part.html.twig", "surgery/surgery.html.twig", 113)->display($context);
        // line 114
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "surgery/surgery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 114,  247 => 113,  230 => 98,  228 => 97,  225 => 96,  223 => 95,  209 => 84,  206 => 83,  204 => 82,  190 => 71,  185 => 69,  172 => 58,  170 => 57,  164 => 53,  158 => 51,  152 => 49,  150 => 48,  144 => 45,  137 => 40,  135 => 39,  126 => 32,  124 => 31,  120 => 29,  118 => 28,  100 => 12,  98 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Surgeries{% endblock %}

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
                    {% include \"surgery/sidebar.html.twig\" %}
                    <!-- /.sidebar-menu -->

                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\"> 

                    {% include \"page_header_nav.html.twig\" %}                   
    
                    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('images/bg_18.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                                <div class=\"col-md-9 ftco-animate text-center\">
                                    <h2 class=\"breadcrumb-item\"><b>Surgical Patients</b></h2>
                                </div>
                            </div>
                        </div>
                    </section>
\t\t
                    {% include \"surgery/surgerypatient_index.html.twig\" %}

                    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('images/bg_7.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
                    <div class=\"overlay\"></div>
                    <div class=\"container\">
                        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                        <div class=\"col-md-9 ftco-animate text-center\">
                            <h2 class=\"breadcrumb-item\"><b>Our Surgeries</b></h2>
                        </div>
                        </div>
                    </div>
                    </section>
\t\t
                    {% include \"surgery/surgeryreport_index.html.twig\" %}

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



", "surgery/surgery.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\surgery\\surgery.html.twig");
    }
}
