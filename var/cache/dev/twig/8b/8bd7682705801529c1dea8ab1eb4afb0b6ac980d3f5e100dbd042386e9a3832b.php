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

/* home/home.html.twig */
class __TwigTemplate_fd0e277f7142553f93c01d07998c487d241db915632f87612bfb8d87552ef53a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
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

        echo "Home";
        
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
        $this->loadTemplate("meta_data.html.twig", "home/home.html.twig", 8)->display($context);
        // line 9
        echo "        
    <!-- CSS Links -->
    ";
        // line 11
        $this->loadTemplate("css_part.html.twig", "home/home.html.twig", 11)->display($context);
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
        // line 29
        $this->loadTemplate("search_form.html.twig", "home/home.html.twig", 29)->display($context);
        // line 30
        echo "        
                <!-- Right navbar links -->
                ";
        // line 32
        $this->loadTemplate("navbar_link_logout.html.twig", "home/home.html.twig", 32)->display($context);
        // line 33
        echo "
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
                <!-- Brand Logo -->
                ";
        // line 40
        $this->loadTemplate("brand_logo.html.twig", "home/home.html.twig", 40)->display($context);
        // line 41
        echo "
                <!-- Sidebar -->
                <div class=\"sidebar\">
                <!-- Sidebar user panel (optional) -->
                    <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                        <div class=\"image\">
                            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
                        </div>
                        <div class=\"info\">
                            ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "username", [], "any", false, false, false, 50) == null)) {
            // line 51
            echo "                                <a href=\"#\" class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 53
            echo "                                <a href=\"#\" class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "username", [], "any", false, false, false, 53), "html", null, true);
            echo "</a>
                            ";
        }
        // line 55
        echo "                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    ";
        // line 59
        $this->loadTemplate("home/sidebar.html.twig", "home/home.html.twig", 59)->display($context);
        // line 60
        echo "                    <!-- /.sidebar-menu -->

                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\">                 
                    ";
        // line 70
        $this->loadTemplate("page_header_nav.html.twig", "home/home.html.twig", 70)->display($context);
        // line 71
        echo "                    
                    <section class=\"home-slider owl-carousel\">
                        <div class=\"slider-item\" style=\"background-image:url('";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_1.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
                            <div class=\"overlay\"></div>
                            <div class=\"container\">
                                <div class=\"row no-gutters slider-text align-items-center justify-content-start\" data-scrollax-parent=\"true\">
                                    <div class=\"col-md-6 text ftco-animate\">
                                        <h1 class=\"mb-4\">Helping Your <span class=\"text\"><b>Stay Happy One</b></span></h1>
                                        <h3 class=\"subheading\">Everyday We Bring Hope and Smile to the Patient We Serve</h3>
                                        <p><a href=\"patient/add\" class=\"btn btn-secondary px-4 py-3 mt-3\">Add new Patient</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"slider-item\" style=\"background-image:url('";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_2.jpg"), "html", null, true);
        echo "');\"  data-stellar-background-ratio=\"0.5\">
                            <div class=\"overlay\"></div>
                            <div class=\"container\">
                                <div class=\"row no-gutters slider-text align-items-center justify-content-start\" data-scrollax-parent=\"true\">
                                    <div class=\"col-md-6 text ftco-animate\">
                                        <b><h1 class=\"mb-4\">We Care <span class=\"text\"><b>About Your Health</b></span></h1></b>
                                        <h3 class=\"subheading\">Your Health is Our Top Priority with Comprehensive, Affordable medical.</h3>
                                        <p><a href=\"patient/add\" class=\"btn btn-secondary px-4 py-3 mt-3\">Add new Patient</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    ";
        // line 100
        $this->loadTemplate("home/service_index.html.twig", "home/home.html.twig", 100)->display($context);
        echo "   

                    ";
        // line 102
        $this->loadTemplate("home/about_index.html.twig", "home/home.html.twig", 102)->display($context);
        echo "  
\t\t
                    <section class=\"ftco-intro\" style=\"background-image: url('";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_3.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-9\">
                                    <h2>We Provide Free Health Care Consultation</h2>
                                    <p class=\"mb-0\">Your Health is Our Top Priority with Comprehensive, Affordable medical.</p>
                                    <p></p>
                                </div>
                                <div class=\"col-md-3 d-flex align-items-center\">
                                    <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-secondary px-4 py-3\">Free Consutation</a></p>
                                </div>
                            </div>
                        </div>
                    </section>

                    ";
        // line 120
        $this->loadTemplate("home/department_index.html.twig", "home/home.html.twig", 120)->display($context);
        echo " 
\t\t
                    ";
        // line 122
        $this->loadTemplate("home/doctor_index.html.twig", "home/home.html.twig", 122)->display($context);
        // line 123
        echo "
                    ";
        // line 124
        $this->loadTemplate("home/consultant_index.html.twig", "home/home.html.twig", 124)->display($context);
        // line 125
        echo "
                    ";
        // line 126
        $this->loadTemplate("home/nurse_index.html.twig", "home/home.html.twig", 126)->display($context);
        // line 127
        echo "
                    ";
        // line 128
        $this->loadTemplate("home/technician_index.html.twig", "home/home.html.twig", 128)->display($context);
        echo "    

                    ";
        // line 130
        $this->loadTemplate("home/testimonial_index.html.twig", "home/home.html.twig", 130)->display($context);
        echo "                

                    ";
        // line 132
        $this->loadTemplate("home/consulation_index.html.twig", "home/home.html.twig", 132)->display($context);
        // line 133
        echo "
                    ";
        // line 134
        $this->loadTemplate("home/pricing_index.html.twig", "home/home.html.twig", 134)->display($context);
        echo " 

                    ";
        // line 136
        $this->loadTemplate("home/blog_index.html.twig", "home/home.html.twig", 136)->display($context);
        echo " 

                    ";
        // line 138
        $this->loadTemplate("footer.html.twig", "home/home.html.twig", 138)->display($context);
        // line 139
        echo "                    
                </div>
                <!-- /.content-header -->
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
        // line 155
        $this->loadTemplate("js_part.html.twig", "home/home.html.twig", 155)->display($context);
        // line 156
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 156,  319 => 155,  301 => 139,  299 => 138,  294 => 136,  289 => 134,  286 => 133,  284 => 132,  279 => 130,  274 => 128,  271 => 127,  269 => 126,  266 => 125,  264 => 124,  261 => 123,  259 => 122,  254 => 120,  235 => 104,  230 => 102,  225 => 100,  208 => 86,  192 => 73,  188 => 71,  186 => 70,  174 => 60,  172 => 59,  166 => 55,  160 => 53,  154 => 51,  152 => 50,  146 => 47,  138 => 41,  136 => 40,  127 => 33,  125 => 32,  121 => 30,  119 => 29,  100 => 12,  98 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

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
                    {% include \"home/sidebar.html.twig\" %}
                    <!-- /.sidebar-menu -->

                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\">                 
                    {% include \"page_header_nav.html.twig\" %}
                    
                    <section class=\"home-slider owl-carousel\">
                        <div class=\"slider-item\" style=\"background-image:url('{{ asset('images/bg_1.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
                            <div class=\"overlay\"></div>
                            <div class=\"container\">
                                <div class=\"row no-gutters slider-text align-items-center justify-content-start\" data-scrollax-parent=\"true\">
                                    <div class=\"col-md-6 text ftco-animate\">
                                        <h1 class=\"mb-4\">Helping Your <span class=\"text\"><b>Stay Happy One</b></span></h1>
                                        <h3 class=\"subheading\">Everyday We Bring Hope and Smile to the Patient We Serve</h3>
                                        <p><a href=\"patient/add\" class=\"btn btn-secondary px-4 py-3 mt-3\">Add new Patient</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"slider-item\" style=\"background-image:url('{{ asset('images/bg_2.jpg') }}');\"  data-stellar-background-ratio=\"0.5\">
                            <div class=\"overlay\"></div>
                            <div class=\"container\">
                                <div class=\"row no-gutters slider-text align-items-center justify-content-start\" data-scrollax-parent=\"true\">
                                    <div class=\"col-md-6 text ftco-animate\">
                                        <b><h1 class=\"mb-4\">We Care <span class=\"text\"><b>About Your Health</b></span></h1></b>
                                        <h3 class=\"subheading\">Your Health is Our Top Priority with Comprehensive, Affordable medical.</h3>
                                        <p><a href=\"patient/add\" class=\"btn btn-secondary px-4 py-3 mt-3\">Add new Patient</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    {% include \"home/service_index.html.twig\" %}   

                    {% include \"home/about_index.html.twig\" %}  
\t\t
                    <section class=\"ftco-intro\" style=\"background-image: url('{{ asset('images/bg_3.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
                        <div class=\"overlay\"></div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-9\">
                                    <h2>We Provide Free Health Care Consultation</h2>
                                    <p class=\"mb-0\">Your Health is Our Top Priority with Comprehensive, Affordable medical.</p>
                                    <p></p>
                                </div>
                                <div class=\"col-md-3 d-flex align-items-center\">
                                    <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-secondary px-4 py-3\">Free Consutation</a></p>
                                </div>
                            </div>
                        </div>
                    </section>

                    {% include \"home/department_index.html.twig\" %} 
\t\t
                    {% include \"home/doctor_index.html.twig\" %}

                    {% include \"home/consultant_index.html.twig\" %}

                    {% include \"home/nurse_index.html.twig\" %}

                    {% include \"home/technician_index.html.twig\" %}    

                    {% include \"home/testimonial_index.html.twig\" %}                

                    {% include \"home/consulation_index.html.twig\" %}

                    {% include \"home/pricing_index.html.twig\" %} 

                    {% include \"home/blog_index.html.twig\" %} 

                    {% include \"footer.html.twig\" %}
                    
                </div>
                <!-- /.content-header -->
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
", "home/home.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\home\\home.html.twig");
    }
}
