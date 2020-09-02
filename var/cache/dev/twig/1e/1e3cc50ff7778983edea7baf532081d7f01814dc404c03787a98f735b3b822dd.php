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

/* page_header_nav.html.twig */
class __TwigTemplate_d0ca484223e8a8122bb7f90dec9792094d680e23ddca5adb58a5ab204978b83a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_header_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_header_nav.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
    <nav class=\"navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row\">
        <div class=\"container\">
            <div class=\"row no-gutters d-flex align-items-start align-items-center px-3 px-md-0\">
                <div class=\"col-lg-2 pr-4 align-items-center\">
                    <span class=\"text\" style=\"font-size:23px;\"><b>Cardio</b>Care</span>
                </div>
                <div class=\"col-lg-10 d-none d-md-block\">
                    <div class=\"row d-flex\">
                        <div class=\"col-md-4 pr-4 d-flex topper align-items-center\">
                            <div class=\"icon bg-white mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-map\"></span></div>
                            <span class=\"text\">Address: 198 West 21th Street, Suite 721 New York NY 10016</span>
                        </div>
                        <div class=\"col-md pr-4 d-flex topper align-items-center\">
                            <div class=\"icon bg-white mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-paper-plane\"></span></div>
                            <span class=\"text\">Email: youremail@email.com</span>
                        </div>
                        <div class=\"col-md pr-4 d-flex topper align-items-center\">
                            <div class=\"icon bg-white mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-phone2\"></span></div>
                            <span class=\"text\">Phone: + 1235 2355 98</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page_header_nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

    <nav class=\"navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row\">
        <div class=\"container\">
            <div class=\"row no-gutters d-flex align-items-start align-items-center px-3 px-md-0\">
                <div class=\"col-lg-2 pr-4 align-items-center\">
                    <span class=\"text\" style=\"font-size:23px;\"><b>Cardio</b>Care</span>
                </div>
                <div class=\"col-lg-10 d-none d-md-block\">
                    <div class=\"row d-flex\">
                        <div class=\"col-md-4 pr-4 d-flex topper align-items-center\">
                            <div class=\"icon bg-white mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-map\"></span></div>
                            <span class=\"text\">Address: 198 West 21th Street, Suite 721 New York NY 10016</span>
                        </div>
                        <div class=\"col-md pr-4 d-flex topper align-items-center\">
                            <div class=\"icon bg-white mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-paper-plane\"></span></div>
                            <span class=\"text\">Email: youremail@email.com</span>
                        </div>
                        <div class=\"col-md pr-4 d-flex topper align-items-center\">
                            <div class=\"icon bg-white mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-phone2\"></span></div>
                            <span class=\"text\">Phone: + 1235 2355 98</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

{% endblock %}", "page_header_nav.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\page_header_nav.html.twig");
    }
}
