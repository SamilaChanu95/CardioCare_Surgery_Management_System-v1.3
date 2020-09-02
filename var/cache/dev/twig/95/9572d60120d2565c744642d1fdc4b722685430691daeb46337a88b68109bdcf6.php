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

/* consultant/new.html.twig */
class __TwigTemplate_fbff3528f2b91694d0e55a8cc75b5b04dea62de9d235eee84de14c6dba2d934c extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultant/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultant/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "consultant/new.html.twig", 1);
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

        echo "Add Consultant";
        
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
        $this->loadTemplate("meta_data.html.twig", "consultant/new.html.twig", 8)->display($context);
        // line 9
        echo "        
    <!-- CSS Links -->
    ";
        // line 11
        $this->loadTemplate("css_part.html.twig", "consultant/new.html.twig", 11)->display($context);
        // line 12
        echo "
    <!-- Remove botdetect link -->
    ";
        // line 14
        $this->loadTemplate("remove_botdetect_link.html.twig", "consultant/new.html.twig", 14)->display($context);
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
        $this->loadTemplate("search_form.html.twig", "consultant/new.html.twig", 32)->display($context);
        // line 33
        echo "        
                <!-- Right navbar links -->
                ";
        // line 35
        $this->loadTemplate("navbar_link_logout.html.twig", "consultant/new.html.twig", 35)->display($context);
        // line 36
        echo "            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
                <!-- Brand Logo -->
                ";
        // line 42
        $this->loadTemplate("brand_logo.html.twig", "consultant/new.html.twig", 42)->display($context);
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
        $this->loadTemplate("consultant/sidebar.html.twig", "consultant/new.html.twig", 61)->display($context);
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
        // line 73
        $this->loadTemplate("page_header_nav.html.twig", "consultant/new.html.twig", 73)->display($context);
        // line 74
        echo "                    
                    ";
        // line 75
        $this->loadTemplate("consultant/_form.html.twig", "consultant/new.html.twig", 75)->display($context);
        // line 76
        echo "
                    <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultant_index");
        echo "\">back to list</a>

                    ";
        // line 79
        $this->loadTemplate("footer.html.twig", "consultant/new.html.twig", 79)->display($context);
        // line 80
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
        // line 95
        $this->loadTemplate("js_part.html.twig", "consultant/new.html.twig", 95)->display($context);
        // line 96
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "    <script>
        \$('#consultant_Hospital').change(function () 
        {
            var hospitalSelector = \$(this);
            var id= hospitalSelector.val();
            \$.ajax({
                    url: \"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultant_getDepartment");
        echo "\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: hospitalSelector.val()
                    },
                    success: function (departments) {
                        var departmentSelector = \$(\"#consultant_Department\");

                        // Remove current options
                        departmentSelector.html('');
                        
                        departmentSelector.append('<option value> Select Department </option>');
                        
                        \$.each(departments, function (key, department) {
                            departmentSelector.append('<option value=\"' + department.id + '\">' + department.name + '</option>');
                        });
                        
                    },
                    
                    error:function (jQXHR, textStatus, errorThrown) 
                    {    }
                    
            });     
        });
    </script> 
    <script>
        \$('#consultant_Department').change(function () 
        {
        var departmentSelector = \$(this);
        var id= departmentSelector.val();
            \$.ajax({
                    url: \"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultant_getUnit");
        echo "\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: departmentSelector.val()
                    },
                    success: function (units) {
                        var unitSelector = \$(\"#consultant_Unit\");

                        // Remove current options
                        unitSelector.html('');
                        
                        unitSelector.append('<option value> Select Unit</option>');
                        
                        \$.each(units, function (key, unit) {
                            unitSelector.append('<option value=\"' + unit.id + '\">' + unit.name + '</option>');
                        });
                        
                    },
                    
                    error:function (jQXHR, textStatus, errorThrown) 
                    {    }
                    
                });

                
        });
    </script>
    <script>
        \$('#consultant_Unit').change(function () 
        {
        var unitSelector = \$(this);
        var id= unitSelector.val();
            \$.ajax({
                    url: \"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultant_getWard");
        echo "\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: unitSelector.val()
                    },
                    success: function (wards) {
                        var wardSelector = \$(\"#consultant_Ward\");

                        // Remove current options
                        wardSelector.html('');
                        
                        wardSelector.append('<option value> Select Ward</option>');
                        
                        \$.each(wards, function (key, ward) {
                            wardSelector.append('<option value=\"' + ward.id + '\">' + ward.name + '</option>');
                        });
                        
                    },
                    
                    error:function (jQXHR, textStatus, errorThrown) 
                    {    }
                    
                });
                
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "consultant/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 172,  292 => 138,  257 => 106,  249 => 100,  239 => 99,  228 => 96,  226 => 95,  209 => 80,  207 => 79,  202 => 77,  199 => 76,  197 => 75,  194 => 74,  192 => 73,  179 => 62,  177 => 61,  171 => 57,  165 => 55,  159 => 53,  157 => 52,  151 => 49,  143 => 43,  141 => 42,  133 => 36,  131 => 35,  127 => 33,  125 => 32,  106 => 15,  104 => 14,  100 => 12,  98 => 11,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'base.html.twig' %}


{% block title %}Add Consultant{% endblock %}

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
                    {% include \"consultant/sidebar.html.twig\" %}
                    <!-- /.sidebar-menu -->
                        
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\">  

                    {% include \"page_header_nav.html.twig\" %}
                    
                    {% include \"consultant/_form.html.twig\" %}

                    <a href=\"{{ path('consultant_index') }}\">back to list</a>

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

{% block javascripts %}
    <script>
        \$('#consultant_Hospital').change(function () 
        {
            var hospitalSelector = \$(this);
            var id= hospitalSelector.val();
            \$.ajax({
                    url: \"{{ path('consultant_getDepartment') }}\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: hospitalSelector.val()
                    },
                    success: function (departments) {
                        var departmentSelector = \$(\"#consultant_Department\");

                        // Remove current options
                        departmentSelector.html('');
                        
                        departmentSelector.append('<option value> Select Department </option>');
                        
                        \$.each(departments, function (key, department) {
                            departmentSelector.append('<option value=\"' + department.id + '\">' + department.name + '</option>');
                        });
                        
                    },
                    
                    error:function (jQXHR, textStatus, errorThrown) 
                    {    }
                    
            });     
        });
    </script> 
    <script>
        \$('#consultant_Department').change(function () 
        {
        var departmentSelector = \$(this);
        var id= departmentSelector.val();
            \$.ajax({
                    url: \"{{ path('consultant_getUnit') }}\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: departmentSelector.val()
                    },
                    success: function (units) {
                        var unitSelector = \$(\"#consultant_Unit\");

                        // Remove current options
                        unitSelector.html('');
                        
                        unitSelector.append('<option value> Select Unit</option>');
                        
                        \$.each(units, function (key, unit) {
                            unitSelector.append('<option value=\"' + unit.id + '\">' + unit.name + '</option>');
                        });
                        
                    },
                    
                    error:function (jQXHR, textStatus, errorThrown) 
                    {    }
                    
                });

                
        });
    </script>
    <script>
        \$('#consultant_Unit').change(function () 
        {
        var unitSelector = \$(this);
        var id= unitSelector.val();
            \$.ajax({
                    url: \"{{ path('consultant_getWard') }}\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: unitSelector.val()
                    },
                    success: function (wards) {
                        var wardSelector = \$(\"#consultant_Ward\");

                        // Remove current options
                        wardSelector.html('');
                        
                        wardSelector.append('<option value> Select Ward</option>');
                        
                        \$.each(wards, function (key, ward) {
                            wardSelector.append('<option value=\"' + ward.id + '\">' + ward.name + '</option>');
                        });
                        
                    },
                    
                    error:function (jQXHR, textStatus, errorThrown) 
                    {    }
                    
                });
                
        });
    </script>

{% endblock %}", "consultant/new.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\consultant\\new.html.twig");
    }
}
