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

/* technician/edit.html.twig */
class __TwigTemplate_0252983848c9bc79465b5ae39abaa85e9e3053d61581abae48de993b17f9674a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "technician/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "technician/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "technician/edit.html.twig", 1);
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

        echo "Edit Technician";
        
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
        $this->loadTemplate("meta_data.html.twig", "technician/edit.html.twig", 8)->display($context);
        // line 9
        echo "        
    <!-- CSS Links -->
    ";
        // line 11
        $this->loadTemplate("css_part.html.twig", "technician/edit.html.twig", 11)->display($context);
        // line 12
        echo "
    <!-- Remove botdetect link -->
    ";
        // line 14
        $this->loadTemplate("remove_botdetect_link.html.twig", "technician/edit.html.twig", 14)->display($context);
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
        // line 31
        $this->loadTemplate("search_form.html.twig", "technician/edit.html.twig", 31)->display($context);
        // line 32
        echo "        
                <!-- Right navbar links -->
                ";
        // line 34
        $this->loadTemplate("navbar_link_logout.html.twig", "technician/edit.html.twig", 34)->display($context);
        // line 35
        echo "            
            </nav>
            <!-- /.navbar -->
            
            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
                
                <!-- Brand Logo -->
                ";
        // line 43
        $this->loadTemplate("brand_logo.html.twig", "technician/edit.html.twig", 43)->display($context);
        // line 44
        echo "                
                <!-- Sidebar -->
                <div class=\"sidebar\">
                <!-- Sidebar user panel (optional) -->
                    <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                        <div class=\"image\">
                        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
                        </div>
                        <div class=\"info\">
                            ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "username", [], "any", false, false, false, 53) == null)) {
            // line 54
            echo "                                <a href=\"#\" class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "email", [], "any", false, false, false, 54), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 56
            echo "                                <a href=\"#\" class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "username", [], "any", false, false, false, 56), "html", null, true);
            echo "</a>
                            ";
        }
        // line 58
        echo "                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    ";
        // line 62
        $this->loadTemplate("technician/sidebar.html.twig", "technician/edit.html.twig", 62)->display($context);
        // line 63
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
        $this->loadTemplate("page_header_nav.html.twig", "technician/edit.html.twig", 74)->display($context);
        // line 75
        echo "                    
                    ";
        // line 76
        echo twig_include($this->env, $context, "technician/_form.html.twig", ["button_label" => "Update"]);
        echo "

                    <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technician_index");
        echo "\">back to list</a>

                    ";
        // line 80
        $this->loadTemplate("footer.html.twig", "technician/edit.html.twig", 80)->display($context);
        // line 81
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
        // line 96
        $this->loadTemplate("js_part.html.twig", "technician/edit.html.twig", 96)->display($context);
        // line 97
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 101
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script>
        \$('#technician_Hospital').change(function () 
        {
            var hospitalSelector = \$(this);
            var id= hospitalSelector.val();
            \$.ajax({
                    url: \"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technician_getDepartment");
        echo "\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: hospitalSelector.val()
                    },
                    success: function (departments) {
                        var departmentSelector = \$(\"#technician_department\");

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
        \$('#technician_department').change(function () 
        {
        var departmentSelector = \$(this);
        var id= departmentSelector.val();
            \$.ajax({
                    url: \"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technician_getUnit");
        echo "\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: departmentSelector.val()
                    },
                    success: function (units) {
                        var unitSelector = \$(\"#technician_unit\");

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
        \$('#technician_unit').change(function () 
        {
        var unitSelector = \$(this);
        var id= unitSelector.val();
            \$.ajax({
                    url: \"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technician_getWard");
        echo "\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: unitSelector.val()
                    },
                    success: function (wards) {
                        var wardSelector = \$(\"#technician_Ward\");

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
        return "technician/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 174,  295 => 140,  260 => 108,  251 => 101,  241 => 100,  230 => 97,  228 => 96,  211 => 81,  209 => 80,  204 => 78,  199 => 76,  196 => 75,  194 => 74,  181 => 63,  179 => 62,  173 => 58,  167 => 56,  161 => 54,  159 => 53,  153 => 50,  145 => 44,  143 => 43,  133 => 35,  131 => 34,  127 => 32,  125 => 31,  107 => 15,  105 => 14,  101 => 12,  99 => 11,  95 => 9,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'base.html.twig' %}

{% block title %}Edit Technician{% endblock %}

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
                    {% include \"technician/sidebar.html.twig\" %}
                    <!-- /.sidebar-menu -->
                    
                </div>
                <!-- /.sidebar -->
            </aside>
            
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <div class=\"content-header\"> 

                    {% include \"page_header_nav.html.twig\" %}
                    
                    {{ include('technician/_form.html.twig', {'button_label': 'Update'}) }}

                    <a href=\"{{ path('technician_index') }}\">back to list</a>

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
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script>
        \$('#technician_Hospital').change(function () 
        {
            var hospitalSelector = \$(this);
            var id= hospitalSelector.val();
            \$.ajax({
                    url: \"{{ path('technician_getDepartment') }}\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: hospitalSelector.val()
                    },
                    success: function (departments) {
                        var departmentSelector = \$(\"#technician_department\");

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
        \$('#technician_department').change(function () 
        {
        var departmentSelector = \$(this);
        var id= departmentSelector.val();
            \$.ajax({
                    url: \"{{ path('technician_getUnit') }}\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: departmentSelector.val()
                    },
                    success: function (units) {
                        var unitSelector = \$(\"#technician_unit\");

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
        \$('#technician_unit').change(function () 
        {
        var unitSelector = \$(this);
        var id= unitSelector.val();
            \$.ajax({
                    url: \"{{ path('technician_getWard') }}\",
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {
                        id: unitSelector.val()
                    },
                    success: function (wards) {
                        var wardSelector = \$(\"#technician_Ward\");

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

{% endblock %}
", "technician/edit.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\technician\\edit.html.twig");
    }
}
