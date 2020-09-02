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

/* technician/sidebar.html.twig */
class __TwigTemplate_d73685afbb87092f8f7269bbb0d2a74aab6588da6ebf3143ddb8d6d66da4b08f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "technician/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "technician/sidebar.html.twig"));

        // line 1
        echo "<nav class=\"mt-2\">
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
            <a href=\"#\" class=\"nav-link \">
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
            </ul>
        </li>
        <li class=\"nav-item has-treeview\">
            <a href=\"/icu\" class=\"nav-link\">
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
            <a href=\"#\" class=\"nav-link\">
                <i class=\"nav-icon fas fa-cogs\"></i>
                <p>Settings <i class=\"right fas fa-angle-left\"></i></p>
            </a>
            <ul class=\"nav nav-treeview\">
                <li class=\"nav-item\">
                    <div class=\"container1\">
                        <a href=\"/hospital\" class=\"nav-link\">
                            <i class=\"nav-icon fa fa-building\"></i>
                            <p>Hospital</p>
                        </a>
                    </div>    
                </li>
                 <li class=\"nav-item\">
                    <div class=\"container1\">
                        <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("department_index");
        echo "\" class=\"nav-link\">
                            <i class=\"nav-icon fa fa-building\"></i>
                            <p>Department</p>
                        </a>
                    </div>    
                </li>
                 <li class=\"nav-item\">
                    <div class=\"container1\">
                        <a href=\"/unit\" class=\"nav-link \">
                            <i class=\"nav-icon fa fa-building\"></i>
                            <p>Unit</p>
                        </a>
                    </div>    
                </li>
                <li class=\"nav-item\">
                    <div class=\"container1\">
                        <a href=\"/ward\" class=\"nav-link \">
                            <i class=\"nav-icon fa fa-building\"></i>
                            <p>Ward</p>
                        </a>
                    </div>    
                </li>
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
                        <a href=\"/technician\" class=\"nav-link active\">
                        <i class=\"nav-icon fas fa-user\"></i>
                            <p>Technicians</p>
                        </a>
                    </div>
                </li>
            </ul>
        </li>
        <li class=\"nav-item has-treeview\">
            <a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"nav-link\">
                <i class=\"nav-icon fas fa-sign-out-alt\"></i>
                <p>Logout</p>
            </a>   
        </li>
    </ul>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "technician/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 131,  110 => 66,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"mt-2\">
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
            <a href=\"#\" class=\"nav-link \">
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
            </ul>
        </li>
        <li class=\"nav-item has-treeview\">
            <a href=\"/icu\" class=\"nav-link\">
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
            <a href=\"#\" class=\"nav-link\">
                <i class=\"nav-icon fas fa-cogs\"></i>
                <p>Settings <i class=\"right fas fa-angle-left\"></i></p>
            </a>
            <ul class=\"nav nav-treeview\">
                <li class=\"nav-item\">
                    <div class=\"container1\">
                        <a href=\"/hospital\" class=\"nav-link\">
                            <i class=\"nav-icon fa fa-building\"></i>
                            <p>Hospital</p>
                        </a>
                    </div>    
                </li>
                 <li class=\"nav-item\">
                    <div class=\"container1\">
                        <a href=\"{{path('department_index')}}\" class=\"nav-link\">
                            <i class=\"nav-icon fa fa-building\"></i>
                            <p>Department</p>
                        </a>
                    </div>    
                </li>
                 <li class=\"nav-item\">
                    <div class=\"container1\">
                        <a href=\"/unit\" class=\"nav-link \">
                            <i class=\"nav-icon fa fa-building\"></i>
                            <p>Unit</p>
                        </a>
                    </div>    
                </li>
                <li class=\"nav-item\">
                    <div class=\"container1\">
                        <a href=\"/ward\" class=\"nav-link \">
                            <i class=\"nav-icon fa fa-building\"></i>
                            <p>Ward</p>
                        </a>
                    </div>    
                </li>
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
                        <a href=\"/technician\" class=\"nav-link active\">
                        <i class=\"nav-icon fas fa-user\"></i>
                            <p>Technicians</p>
                        </a>
                    </div>
                </li>
            </ul>
        </li>
        <li class=\"nav-item has-treeview\">
            <a href=\"{{ path('logout') }}\" class=\"nav-link\">
                <i class=\"nav-icon fas fa-sign-out-alt\"></i>
                <p>Logout</p>
            </a>   
        </li>
    </ul>
</nav>", "technician/sidebar.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\technician\\sidebar.html.twig");
    }
}
