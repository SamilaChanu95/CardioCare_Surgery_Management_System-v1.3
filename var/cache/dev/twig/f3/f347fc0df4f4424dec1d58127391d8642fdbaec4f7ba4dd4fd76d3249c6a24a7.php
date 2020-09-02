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

/* doctor/index.html.twig */
class __TwigTemplate_3cbcd3fe0be9b5c57d826aa727d3af95835452fa89f075252e081fc4cd85fe61 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doctor/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "doctor/index.html.twig"));

        // line 1
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('images/bg_5.jpg');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h2 class=\"breadcrumb-item\"><b>Qualified Doctors</b></h2>
            </div>
        </div>
    </div>
</section>
\t\t
    
<section class=\"ftco-section\">
    ";
        // line 14
        if ((isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">

                <!-- search form -->
                ";
            // line 20
            $this->loadTemplate("doctor/search.html.twig", "doctor/index.html.twig", 20)->display($context);
            // line 21
            echo "            
            </div>
        </div> 
        <div class=\"row\">
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
                // line 26
                echo "            <div class=\"col-md-6 col-lg-3 ftco-animate\">
                <div class=\"staff\">
                    <div class=\"img-wrap d-flex align-items-stretch\">
                        ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["doctor"], "photo", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "                            <div class=\"img align-self-stretch\" style=\"background-image: url('";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["doctor"], "photo", [], "any", false, false, false, 30))), "html", null, true);
                    echo "');\"></div>
                        ";
                } else {
                    // line 31
                    echo "  
                            <div class=\"img align-self-stretch\" style=\"background-image: url('";
                    // line 32
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default_user.png"), "html", null, true);
                    echo "');\"></div>  
                        ";
                }
                // line 34
                echo "                    </div>
                    <div class=\"text pt-3 text-center\">
                        <h3><a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctor_show", ["id" => twig_get_attribute($this->env, $this->source, $context["doctor"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "dFirstName", [], "any", false, false, false, 36), "html", null, true);
                echo "</a></h3>        
                        <span class=\"position mb-2\"><p>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "dAddress", [], "any", false, false, false, 37), "html", null, true);
                echo "</p></span>
                        <div class=\"faded\">
                            <p>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "dRole", [], "any", false, false, false, 39), "html", null, true);
                echo "</p>
                            <p>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "dPhoneNumber", [], "any", false, false, false, 40), "html", null, true);
                echo "</p>
                            <ul class=\"ftco-social text-center\">
                                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-google-plus\"></span></a></li>
                                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </div>
    </div>
    ";
        } else {
            // line 55
            echo "    <p align=\"center\">No doctors to display.</p>
    ";
        }
        // line 57
        echo "    <p align=\"center\" class=\"button-custom\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctor_add");
        echo "\" class=\"btn btn-secondary py-2 px-3\">Add new Doctor</a></p>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "doctor/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 57,  142 => 55,  137 => 52,  119 => 40,  115 => 39,  110 => 37,  104 => 36,  100 => 34,  95 => 32,  92 => 31,  86 => 30,  84 => 29,  79 => 26,  75 => 25,  69 => 21,  67 => 20,  60 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('images/bg_5.jpg');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h2 class=\"breadcrumb-item\"><b>Qualified Doctors</b></h2>
            </div>
        </div>
    </div>
</section>
\t\t
    
<section class=\"ftco-section\">
    {% if doctors %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">

                <!-- search form -->
                {% include \"doctor/search.html.twig\" %}
            
            </div>
        </div> 
        <div class=\"row\">
            {% for doctor in doctors %}
            <div class=\"col-md-6 col-lg-3 ftco-animate\">
                <div class=\"staff\">
                    <div class=\"img-wrap d-flex align-items-stretch\">
                        {% if doctor.photo %}
                            <div class=\"img align-self-stretch\" style=\"background-image: url('{{ asset('uploads/photos/' ~ doctor.photo) }}');\"></div>
                        {% else %}  
                            <div class=\"img align-self-stretch\" style=\"background-image: url('{{ asset('images/default_user.png') }}');\"></div>  
                        {% endif %}
                    </div>
                    <div class=\"text pt-3 text-center\">
                        <h3><a href=\"{{ path('doctor_show',{'id':doctor.id })}}\">{{  doctor.dFirstName }}</a></h3>        
                        <span class=\"position mb-2\"><p>{{  doctor.dAddress }}</p></span>
                        <div class=\"faded\">
                            <p>{{  doctor.dRole }}</p>
                            <p>{{  doctor.dPhoneNumber }}</p>
                            <ul class=\"ftco-social text-center\">
                                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-google-plus\"></span></a></li>
                                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    {% else %}
    <p align=\"center\">No doctors to display.</p>
    {% endif %}
    <p align=\"center\" class=\"button-custom\"><a href=\"{{path('doctor_add')}}\" class=\"btn btn-secondary py-2 px-3\">Add new Doctor</a></p>
</section>", "doctor/index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\doctor\\index.html.twig");
    }
}
