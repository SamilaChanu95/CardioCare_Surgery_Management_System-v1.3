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

/* nurse/new.html.twig */
class __TwigTemplate_f9120a86b4a116f46a4ebc9b453b98e14b4cc331a03206c8573bf810b15cd3c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nurse/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nurse/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "nurse/new.html.twig", 1);
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

        echo "Add Nurse";
        
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
        $this->loadTemplate("meta_data.html.twig", "nurse/new.html.twig", 9)->display($context);
        // line 10
        echo "        
    <!-- CSS Links -->
    ";
        // line 12
        $this->loadTemplate("css_part.html.twig", "nurse/new.html.twig", 12)->display($context);
        echo "  

    <!-- Remove botdetect link -->
    ";
        // line 15
        $this->loadTemplate("remove_botdetect_link.html.twig", "nurse/new.html.twig", 15)->display($context);
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
        $this->loadTemplate("search_form.html.twig", "nurse/new.html.twig", 32)->display($context);
        // line 33
        echo "        
                <!-- Right navbar links -->
                ";
        // line 35
        $this->loadTemplate("navbar_link_logout.html.twig", "nurse/new.html.twig", 35)->display($context);
        // line 36
        echo "
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">

                <!-- Brand Logo -->
                ";
        // line 44
        $this->loadTemplate("brand_logo.html.twig", "nurse/new.html.twig", 44)->display($context);
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
                    ";
        // line 63
        $this->loadTemplate("nurse/sidebar.html.twig", "nurse/new.html.twig", 63)->display($context);
        // line 64
        echo "                    <!-- /.sidebar-menu -->

                </div>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\"> 
                                
                    ";
        // line 74
        $this->loadTemplate("page_header_nav.html.twig", "nurse/new.html.twig", 74)->display($context);
        // line 75
        echo "                    
                    ";
        // line 76
        $this->loadTemplate("nurse/_form.html.twig", "nurse/new.html.twig", 76)->display($context);
        // line 77
        echo "
                    ";
        // line 78
        $this->loadTemplate("footer.html.twig", "nurse/new.html.twig", 78)->display($context);
        // line 79
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
        // line 94
        $this->loadTemplate("js_part.html.twig", "nurse/new.html.twig", 94)->display($context);
        echo " 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    <script>
        \$('#nurse_Hospital').change(function () 
        {
            var hospitalSelector = \$(this);
            var id= hospitalSelector.val();
            \$.ajax({
                    url: \"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nurse_getDepartment");
        echo "\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: hospitalSelector.val()
                    },
                    success: function (departments) {
                        var departmentSelector = \$(\"#nurse_Department\");

                        // Remove current options
                        departmentSelector.html('');
                        
                        departmentSelector.append('<option value> Select Department</option>');
                        
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
        \$('#nurse_Department').change(function () 
        {
        var departmentSelector = \$(this);
        var id= departmentSelector.val();
            \$.ajax({
                    url: \"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nurse_getUnit");
        echo "\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: departmentSelector.val()
                    },
                    success: function (units) {
                        var unitSelector = \$(\"#nurse_Unit\");

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
        \$('#nurse_Unit').change(function () 
        {
        var unitSelector = \$(this);
        var id= unitSelector.val();
            \$.ajax({
                    url: \"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nurse_getWard");
        echo "\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: unitSelector.val()
                    },
                    success: function (wards) {
                        var wardSelector = \$(\"#nurse_Ward\");

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
        return "nurse/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 171,  288 => 137,  253 => 105,  245 => 99,  235 => 98,  222 => 94,  205 => 79,  203 => 78,  200 => 77,  198 => 76,  195 => 75,  193 => 74,  181 => 64,  179 => 63,  173 => 59,  167 => 57,  161 => 55,  159 => 54,  153 => 51,  145 => 45,  143 => 44,  133 => 36,  131 => 35,  127 => 33,  125 => 32,  105 => 15,  99 => 12,  95 => 10,  93 => 9,  89 => 7,  79 => 6,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'base.html.twig' %}


{% block title %}Add Nurse{% endblock %}

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
                    {% include \"nurse/sidebar.html.twig\" %}
                    <!-- /.sidebar-menu -->

                </div>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\"> 
                                
                    {% include \"page_header_nav.html.twig\" %}
                    
                    {% include \"nurse/_form.html.twig\" %}

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
        \$('#nurse_Hospital').change(function () 
        {
            var hospitalSelector = \$(this);
            var id= hospitalSelector.val();
            \$.ajax({
                    url: \"{{ path('nurse_getDepartment') }}\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: hospitalSelector.val()
                    },
                    success: function (departments) {
                        var departmentSelector = \$(\"#nurse_Department\");

                        // Remove current options
                        departmentSelector.html('');
                        
                        departmentSelector.append('<option value> Select Department</option>');
                        
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
        \$('#nurse_Department').change(function () 
        {
        var departmentSelector = \$(this);
        var id= departmentSelector.val();
            \$.ajax({
                    url: \"{{ path('nurse_getUnit') }}\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: departmentSelector.val()
                    },
                    success: function (units) {
                        var unitSelector = \$(\"#nurse_Unit\");

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
        \$('#nurse_Unit').change(function () 
        {
        var unitSelector = \$(this);
        var id= unitSelector.val();
            \$.ajax({
                    url: \"{{ path('nurse_getWard') }}\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: unitSelector.val()
                    },
                    success: function (wards) {
                        var wardSelector = \$(\"#nurse_Ward\");

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

{% endblock %}", "nurse/new.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\nurse\\new.html.twig");
    }
}
