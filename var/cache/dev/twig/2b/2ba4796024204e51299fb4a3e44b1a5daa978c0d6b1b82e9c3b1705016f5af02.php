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

/* consultant/index.html.twig */
class __TwigTemplate_51c85f3b0e693532b9643e91b5ee33c570f5ab6b29840338f684751a15f1f093 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultant/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultant/index.html.twig"));

        // line 1
        echo "<section class=\"ftco-section\">
    ";
        // line 2
        if ((isset($context["consultants"]) || array_key_exists("consultants", $context) ? $context["consultants"] : (function () { throw new RuntimeError('Variable "consultants" does not exist.', 2, $this->source); })())) {
            echo "   
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">

                <!-- search form -->
                ";
            // line 8
            $this->loadTemplate("consultant/search.html.twig", "consultant/index.html.twig", 8)->display($context);
            // line 9
            echo "            
            </div>
        </div> 
        <div class=\"row\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["consultants"]) || array_key_exists("consultants", $context) ? $context["consultants"] : (function () { throw new RuntimeError('Variable "consultants" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["consultant"]) {
                // line 14
                echo "            <div class=\"col-md-6 col-lg-3 ftco-animate\">
                <div class=\"staff\">
                    <div class=\"img-wrap d-flex align-items-stretch\">
                        ";
                // line 17
                if (twig_get_attribute($this->env, $this->source, $context["consultant"], "photo", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "                            <div class=\"img align-self-stretch\" style=\"background-image: url('";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["consultant"], "photo", [], "any", false, false, false, 18))), "html", null, true);
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
                // line 21
                echo "    
                    </div>
                    <div class=\"text pt-3 text-center\">
                        <h3><a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultant_show", ["id" => twig_get_attribute($this->env, $this->source, $context["consultant"], "id", [], "any", false, false, false, 24)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultant"], "cFirstName", [], "any", false, false, false, 24), "html", null, true);
                echo "</a></h3>
                        <span class=\"position mb-2\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultant"], "cAddress", [], "any", false, false, false, 25), "html", null, true);
                echo "</span>
                        <div class=\"faded\">
                        <p>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultant"], "cRole", [], "any", false, false, false, 27), "html", null, true);
                echo "</p>
                        <p>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultant"], "cPhoneNumber", [], "any", false, false, false, 28), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['consultant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </div>             
    ";
        } else {
            // line 42
            echo "    <p align=\"center\">No consultants to display.</p>
    ";
        }
        // line 44
        echo "    <p align=\"center\" class=\"button-custom\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultant_add");
        echo "\" class=\"btn btn-secondary py-2 px-3\">Add new Consultant</a></p>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "consultant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 44,  130 => 42,  126 => 40,  108 => 28,  104 => 27,  99 => 25,  93 => 24,  88 => 21,  83 => 20,  80 => 19,  74 => 18,  72 => 17,  67 => 14,  63 => 13,  57 => 9,  55 => 8,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ftco-section\">
    {% if consultants %}   
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">

                <!-- search form -->
                {% include \"consultant/search.html.twig\" %}
            
            </div>
        </div> 
        <div class=\"row\">
            {% for consultant in consultants %}
            <div class=\"col-md-6 col-lg-3 ftco-animate\">
                <div class=\"staff\">
                    <div class=\"img-wrap d-flex align-items-stretch\">
                        {% if consultant.photo %}
                            <div class=\"img align-self-stretch\" style=\"background-image: url('{{ asset('uploads/photos/' ~ consultant.photo) }}');\"></div>
                        {% else %}  
                            <div class=\"img align-self-stretch\" style=\"background-image: url('{{ asset('images/default_user.png') }}');\"></div>  
                        {% endif %}    
                    </div>
                    <div class=\"text pt-3 text-center\">
                        <h3><a href=\"{{ path('consultant_show',{'id':consultant.id })}}\">{{  consultant.cFirstName }}</a></h3>
                        <span class=\"position mb-2\">{{  consultant.cAddress }}</span>
                        <div class=\"faded\">
                        <p>{{  consultant.cRole }}</p>
                        <p>{{  consultant.cPhoneNumber }}</p>
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
    {% else %}
    <p align=\"center\">No consultants to display.</p>
    {% endif %}
    <p align=\"center\" class=\"button-custom\"><a href=\"{{path('consultant_add')}}\" class=\"btn btn-secondary py-2 px-3\">Add new Consultant</a></p>
</section>", "consultant/index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\consultant\\index.html.twig");
    }
}
