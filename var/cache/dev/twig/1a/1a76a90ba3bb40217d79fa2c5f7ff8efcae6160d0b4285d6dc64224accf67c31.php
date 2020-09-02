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

/* technician/new.html.twig */
class __TwigTemplate_d9b8aa1a4707457baaa4219750cb496db68b3d3732763139a6e283d50f68d1ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "technician/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "technician/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "technician/new.html.twig", 1);
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

        echo "Add Technician";
        
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
        $this->loadTemplate("meta_data.html.twig", "technician/new.html.twig", 9)->display($context);
        // line 10
        echo "        
    <!-- CSS Links -->
    ";
        // line 12
        $this->loadTemplate("css_part.html.twig", "technician/new.html.twig", 12)->display($context);
        // line 13
        echo "
    <!-- Remove botdetect link -->
    ";
        // line 15
        $this->loadTemplate("remove_botdetect_link.html.twig", "technician/new.html.twig", 15)->display($context);
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
        $this->loadTemplate("search_form.html.twig", "technician/new.html.twig", 33)->display($context);
        // line 34
        echo "    
                <!-- Right navbar links -->
                ";
        // line 36
        $this->loadTemplate("navbar_link_logout.html.twig", "technician/new.html.twig", 36)->display($context);
        // line 37
        echo "            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
                <!-- Brand Logo -->
                ";
        // line 43
        $this->loadTemplate("brand_logo.html.twig", "technician/new.html.twig", 43)->display($context);
        // line 44
        echo "                <!-- Sidebar -->
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
        // line 60
        $this->loadTemplate("technician/sidebar.html.twig", "technician/new.html.twig", 60)->display($context);
        // line 61
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
        $this->loadTemplate("page_header_nav.html.twig", "technician/new.html.twig", 70)->display($context);
        // line 71
        echo "                    
                    ";
        // line 72
        $this->loadTemplate("technician/_form.html.twig", "technician/new.html.twig", 72)->display($context);
        // line 73
        echo "
                    ";
        // line 74
        $this->loadTemplate("footer.html.twig", "technician/new.html.twig", 74)->display($context);
        // line 75
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
        // line 90
        $this->loadTemplate("js_part.html.twig", "technician/new.html.twig", 90)->display($context);
        // line 91
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <!--
        <script>
            var \$department = \$('#technician_department');
            \$department.change(function() {
                    var \$form = \$(this).closest('form');
                    var data = {};
                    data[\$department.attr('name')] = \$department.val();
                    \$.ajax({
                        url : \$form.attr('action'),
                        type: \$form.attr('method'),
                        data : data,
                        success: function(html) {
                            \$('#technician_unit').replaceWith(
                                \$(html).find('#technician_unit')
                            );
                        }
                    });
                });

        </script>
    -->
    <script>
        \$('#technician_Hospital').change(function () 
        {
            var hospitalSelector = \$(this);
            var id= hospitalSelector.val();
            \$.ajax({
                    url: \"";
        // line 123
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
        // line 155
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
        // line 189
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
        return "technician/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 189,  306 => 155,  271 => 123,  241 => 95,  231 => 94,  220 => 91,  218 => 90,  201 => 75,  199 => 74,  196 => 73,  194 => 72,  191 => 71,  189 => 70,  178 => 61,  176 => 60,  171 => 57,  165 => 55,  159 => 53,  157 => 52,  151 => 49,  144 => 44,  142 => 43,  134 => 37,  132 => 36,  128 => 34,  126 => 33,  107 => 16,  105 => 15,  101 => 13,  99 => 12,  95 => 10,  93 => 9,  89 => 7,  79 => 6,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  'base.html.twig' %}


{% block title %}Add Technician{% endblock %}

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
                    
                    {% include \"technician/_form.html.twig\" %}

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
    <!--
        <script>
            var \$department = \$('#technician_department');
            \$department.change(function() {
                    var \$form = \$(this).closest('form');
                    var data = {};
                    data[\$department.attr('name')] = \$department.val();
                    \$.ajax({
                        url : \$form.attr('action'),
                        type: \$form.attr('method'),
                        data : data,
                        success: function(html) {
                            \$('#technician_unit').replaceWith(
                                \$(html).find('#technician_unit')
                            );
                        }
                    });
                });

        </script>
    -->
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
", "technician/new.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\technician\\new.html.twig");
    }
}
