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

/* nurse/index.html.twig */
class __TwigTemplate_2fc1627ce6f7e9d6d7b308d1f7bf4c249c7b5ceca3129bd7b635e96c89c12aea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nurse/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nurse/index.html.twig"));

        // line 1
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_9.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h2 class=\"breadcrumb-item\"><b>Qualified Nurses</b></h2>
            </div>
        </div>
    </div>
</section>
    
<section class=\"ftco-section\">
    ";
        // line 13
        if ((isset($context["nurses"]) || array_key_exists("nurses", $context) ? $context["nurses"] : (function () { throw new RuntimeError('Variable "nurses" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "    <div class=\"container\">
        <div class=\"row\">
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nurses"]) || array_key_exists("nurses", $context) ? $context["nurses"] : (function () { throw new RuntimeError('Variable "nurses" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["nurse"]) {
                // line 17
                echo "                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                            <div class=\"img-wrap d-flex align-items-stretch\">
                                ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["nurse"], "photo", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                                    <div class=\"img align-self-stretch\" style=\"background-image: url('";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["nurse"], "photo", [], "any", false, false, false, 21))), "html", null, true);
                    echo "');\"></div>
                                ";
                } else {
                    // line 22
                    echo "  
                                    <div class=\"img align-self-stretch\" style=\"background-image: url('";
                    // line 23
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default_user.png"), "html", null, true);
                    echo "');\"></div>  
                                ";
                }
                // line 24
                echo "    
                            </div>
                        <div class=\"text pt-3 text-center\">
                            <h3><a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nurse_show", ["id" => twig_get_attribute($this->env, $this->source, $context["nurse"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nurse"], "nFirstName", [], "any", false, false, false, 27), "html", null, true);
                echo "</a></h3>
                            <span class=\"position mb-2\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nurse"], "nAddress", [], "any", false, false, false, 28), "html", null, true);
                echo "</span>
                            <div class=\"faded\">
                                <p>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nurse"], "nRole", [], "any", false, false, false, 30), "html", null, true);
                echo "</p>
                                <p>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nurse"], "nPhoneNumber", [], "any", false, false, false, 31), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nurse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </div>
    </div>
    ";
        } else {
            // line 46
            echo "    <p align=\"center\">No nurses to display.</p>
    ";
        }
        // line 48
        echo "    <p align=\"center\" class=\"button-custom\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nurse_add");
        echo "\" class=\"btn btn-secondary py-2 px-3\">Add new Nurse</a></p>    
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "nurse/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  133 => 46,  128 => 43,  110 => 31,  106 => 30,  101 => 28,  95 => 27,  90 => 24,  85 => 23,  82 => 22,  76 => 21,  74 => 20,  69 => 17,  65 => 16,  61 => 14,  59 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('images/bg_9.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h2 class=\"breadcrumb-item\"><b>Qualified Nurses</b></h2>
            </div>
        </div>
    </div>
</section>
    
<section class=\"ftco-section\">
    {% if nurses %}
    <div class=\"container\">
        <div class=\"row\">
            {% for nurse in nurses %}
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                            <div class=\"img-wrap d-flex align-items-stretch\">
                                {% if nurse.photo %}
                                    <div class=\"img align-self-stretch\" style=\"background-image: url('{{ asset('uploads/photos/' ~ nurse.photo) }}');\"></div>
                                {% else %}  
                                    <div class=\"img align-self-stretch\" style=\"background-image: url('{{ asset('images/default_user.png') }}');\"></div>  
                                {% endif %}    
                            </div>
                        <div class=\"text pt-3 text-center\">
                            <h3><a href=\"{{ path('nurse_show',{'id':nurse.id })}}\">{{  nurse.nFirstName }}</a></h3>
                            <span class=\"position mb-2\">{{  nurse.nAddress }}</span>
                            <div class=\"faded\">
                                <p>{{  nurse.nRole }}</p>
                                <p>{{  nurse.nPhoneNumber }}</p>
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
    <p align=\"center\">No nurses to display.</p>
    {% endif %}
    <p align=\"center\" class=\"button-custom\"><a href=\"{{path('nurse_add')}}\" class=\"btn btn-secondary py-2 px-3\">Add new Nurse</a></p>    
</section>", "nurse/index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\nurse\\index.html.twig");
    }
}
