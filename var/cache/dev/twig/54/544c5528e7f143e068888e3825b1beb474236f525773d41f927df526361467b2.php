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

/* home/technician_index.html.twig */
class __TwigTemplate_91b93ebe9a49e5f7427f9ba51bdfb094986380d3db444bf8e5a6aca3016420ac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/technician_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/technician_index.html.twig"));

        // line 1
        echo "<section class=\"ftco-section ftco-no-pt\">
    <div class=\"container\">
        <div class=\"row justify-content-center mb-5 pb-2\">
            <div class=\"col-md-8 text-center heading-section ftco-animate\">
                <span class=\"subheading\">Technicians</span>
                <h2 class=\"mb-4\">Our Qualified Technicains</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        ";
        // line 10
        if ((isset($context["technicians"]) || array_key_exists("technicians", $context) ? $context["technicians"] : (function () { throw new RuntimeError('Variable "technicians" does not exist.', 10, $this->source); })())) {
            echo "\t
            <div class=\"row\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["technicians"]) || array_key_exists("technicians", $context) ? $context["technicians"] : (function () { throw new RuntimeError('Variable "technicians" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["technician"]) {
                // line 13
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["technician"], "getTStatus", [], "method", false, false, false, 13) == "Active")) {
                    echo " 
                        <div class=\"col-md-6 col-lg-3 ftco-animate\">
                            <div class=\"staff\">
                                <div class=\"img-wrap d-flex align-items-stretch\">
                                    ";
                    // line 17
                    if (twig_get_attribute($this->env, $this->source, $context["technician"], "photo", [], "any", false, false, false, 17)) {
                        // line 18
                        echo "                                        <div class=\"img align-self-stretch\" style=\"background-image: url('";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["technician"], "photo", [], "any", false, false, false, 18))), "html", null, true);
                        echo "');\"></div>
                                    ";
                    } else {
                        // line 19
                        echo "  
                                        <div class=\"img align-self-stretch\" style=\"background-image: url('";
                        // line 20
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default_user.png"), "html", null, true);
                        echo "');\"></div>  
                                    ";
                    }
                    // line 22
                    echo "                                </div>
                                <div class=\"text pt-3 text-center\">
                                    <h3><a href=\"technician/edit/";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technician"], "id", [], "any", false, false, false, 24), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technician"], "tFirstName", [], "any", false, false, false, 24), "html", null, true);
                    echo "</a></h3>  
                                    <span class=\"position mb-2\">";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technician"], "tAddress", [], "any", false, false, false, 25), "html", null, true);
                    echo "</span>
                                    <div class=\"faded\">
                                        <p>";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technician"], "tRole", [], "any", false, false, false, 27), "html", null, true);
                    echo "</p>
                                        <p>";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technician"], "tPhoneNumber", [], "any", false, false, false, 28), "html", null, true);
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
                // line 40
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technician'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            </div>
        ";
        } else {
            // line 43
            echo "            <p align=\"center\">No technicians to display.</p>
        ";
        }
        // line 45
        echo "    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/technician_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 45,  131 => 43,  127 => 41,  121 => 40,  106 => 28,  102 => 27,  97 => 25,  91 => 24,  87 => 22,  82 => 20,  79 => 19,  73 => 18,  71 => 17,  63 => 13,  59 => 12,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ftco-section ftco-no-pt\">
    <div class=\"container\">
        <div class=\"row justify-content-center mb-5 pb-2\">
            <div class=\"col-md-8 text-center heading-section ftco-animate\">
                <span class=\"subheading\">Technicians</span>
                <h2 class=\"mb-4\">Our Qualified Technicains</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        {% if technicians %}\t
            <div class=\"row\">
                {% for technician in technicians %}
                    {% if technician.getTStatus() == \"Active\" %} 
                        <div class=\"col-md-6 col-lg-3 ftco-animate\">
                            <div class=\"staff\">
                                <div class=\"img-wrap d-flex align-items-stretch\">
                                    {% if technician.photo %}
                                        <div class=\"img align-self-stretch\" style=\"background-image: url('{{ asset('uploads/photos/' ~ technician.photo) }}');\"></div>
                                    {% else %}  
                                        <div class=\"img align-self-stretch\" style=\"background-image: url('{{ asset('images/default_user.png') }}');\"></div>  
                                    {% endif %}
                                </div>
                                <div class=\"text pt-3 text-center\">
                                    <h3><a href=\"technician/edit/{{ technician.id }}\">{{  technician.tFirstName }}</a></h3>  
                                    <span class=\"position mb-2\">{{ technician.tAddress }}</span>
                                    <div class=\"faded\">
                                        <p>{{  technician.tRole }}</p>
                                        <p>{{  technician.tPhoneNumber }}</p>
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
                    {% endif %}
                {% endfor %}
            </div>
        {% else %}
            <p align=\"center\">No technicians to display.</p>
        {% endif %}
    </div>
</section>", "home/technician_index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\home\\technician_index.html.twig");
    }
}
