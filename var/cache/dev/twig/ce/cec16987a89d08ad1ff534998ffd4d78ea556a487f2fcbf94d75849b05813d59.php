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

/* hospital/edit.html.twig */
class __TwigTemplate_0633a7e40b676c39e01ae86b31babb5a77a9b859e8f28d1273b318fafd7bce68 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hospital/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hospital/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hospital/edit.html.twig", 1);
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

        echo "Edit Hospital";
        
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
        $this->loadTemplate("meta_data.html.twig", "hospital/edit.html.twig", 7)->display($context);
        // line 8
        echo "        
    <!-- CSS Links -->
    ";
        // line 10
        $this->loadTemplate("css_part.html.twig", "hospital/edit.html.twig", 10)->display($context);
        echo "  

    <!-- Remove botdetect link -->
    ";
        // line 13
        $this->loadTemplate("remove_botdetect_link.html.twig", "hospital/edit.html.twig", 13)->display($context);
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
        // line 30
        $this->loadTemplate("search_form.html.twig", "hospital/edit.html.twig", 30)->display($context);
        // line 31
        echo "        
                <!-- Right navbar links -->
                ";
        // line 33
        $this->loadTemplate("navbar_link_logout.html.twig", "hospital/edit.html.twig", 33)->display($context);
        // line 34
        echo "
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">

                <!-- Brand Logo -->
                ";
        // line 42
        $this->loadTemplate("brand_logo.html.twig", "hospital/edit.html.twig", 42)->display($context);
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
        $this->loadTemplate("hospital/sidebar.html.twig", "hospital/edit.html.twig", 61)->display($context);
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
        // line 71
        $this->loadTemplate("page_header_nav.html.twig", "hospital/edit.html.twig", 71)->display($context);
        // line 72
        echo "                                      
                    ";
        // line 73
        echo twig_include($this->env, $context, "hospital/_form.html.twig", ["button_label" => "Update"]);
        echo "

                    <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hospital_index");
        echo "\">back to list</a>

                    ";
        // line 77
        $this->loadTemplate("footer.html.twig", "hospital/edit.html.twig", 77)->display($context);
        // line 78
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
        // line 93
        $this->loadTemplate("js_part.html.twig", "hospital/edit.html.twig", 93)->display($context);
        // line 94
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hospital/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 94,  224 => 93,  207 => 78,  205 => 77,  200 => 75,  195 => 73,  192 => 72,  190 => 71,  179 => 62,  177 => 61,  171 => 57,  165 => 55,  159 => 53,  157 => 52,  151 => 49,  143 => 43,  141 => 42,  131 => 34,  129 => 33,  125 => 31,  123 => 30,  103 => 13,  97 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Hospital{% endblock %}

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
                                      
                    {{ include('hospital/_form.html.twig', {'button_label': 'Update'}) }}

                    <a href=\"{{ path('hospital_index') }}\">back to list</a>

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
", "hospital/edit.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\hospital\\edit.html.twig");
    }
}
