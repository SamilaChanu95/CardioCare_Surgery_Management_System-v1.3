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

/* home/nurse_index.html.twig */
class __TwigTemplate_7408fed6830d2d452919c76468398481768d37c861400d8e23609822ce114816 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/nurse_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/nurse_index.html.twig"));

        // line 1
        echo "<section class=\"ftco-section ftco-no-pt\">
    <div class=\"container\">
        <div class=\"row justify-content-center mb-5 pb-2\">
            <div class=\"col-md-8 text-center heading-section ftco-animate\">
                <span class=\"subheading\">Nurses</span>
                <h2 class=\"mb-4\">Our Qualified Nurses</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>\t
    ";
        // line 10
        if ((isset($context["nurses"]) || array_key_exists("nurses", $context) ? $context["nurses"] : (function () { throw new RuntimeError('Variable "nurses" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "    <div class=\"row\"> 
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nurses"]) || array_key_exists("nurses", $context) ? $context["nurses"] : (function () { throw new RuntimeError('Variable "nurses" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["nurse"]) {
                echo "   
            ";
                // line 13
                if ((twig_get_attribute($this->env, $this->source, $context["nurse"], "getNStatus", [], "method", false, false, false, 13) == "Active")) {
                    echo "        
                <div class=\"col-md-6 col-lg-3 ftco-animate\">
                    <div class=\"staff\">
                        <div class=\"img-wrap d-flex align-items-stretch\">
                            ";
                    // line 17
                    if (twig_get_attribute($this->env, $this->source, $context["nurse"], "photo", [], "any", false, false, false, 17)) {
                        // line 18
                        echo "                                <div class=\"img align-self-stretch\" style=\"background-image: url('";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["nurse"], "photo", [], "any", false, false, false, 18))), "html", null, true);
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
                    echo "                        </div>
                    <div class=\"text pt-3 text-center\">
                        <h3><a href=\"/nurse/edit/";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nurse"], "id", [], "any", false, false, false, 24), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nurse"], "nFirstName", [], "any", false, false, false, 24), "html", null, true);
                    echo "</a></h3>
                        <span class=\"position mb-2\">";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nurse"], "nAddress", [], "any", false, false, false, 25), "html", null, true);
                    echo "</span>
                        <div class=\"faded\">
                            <p>";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nurse"], "nRole", [], "any", false, false, false, 27), "html", null, true);
                    echo "</p>
                            <p>";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nurse"], "nPhoneNumber", [], "any", false, false, false, 28), "html", null, true);
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
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nurse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "    </div>
    ";
        } else {
            // line 43
            echo "        <p align=\"center\">No nurses to display.</p>
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
        return "home/nurse_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 45,  132 => 43,  128 => 41,  122 => 40,  107 => 28,  103 => 27,  98 => 25,  92 => 24,  88 => 22,  83 => 20,  80 => 19,  74 => 18,  72 => 17,  65 => 13,  59 => 12,  56 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ftco-section ftco-no-pt\">
    <div class=\"container\">
        <div class=\"row justify-content-center mb-5 pb-2\">
            <div class=\"col-md-8 text-center heading-section ftco-animate\">
                <span class=\"subheading\">Nurses</span>
                <h2 class=\"mb-4\">Our Qualified Nurses</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>\t
    {% if nurses %}
    <div class=\"row\"> 
        {% for nurse in nurses %}   
            {% if nurse.getNStatus() == \"Active\" %}        
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
                        <h3><a href=\"/nurse/edit/{{ nurse.id }}\">{{  nurse.nFirstName }}</a></h3>
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
            {% endif %}
        {% endfor %}
    </div>
    {% else %}
        <p align=\"center\">No nurses to display.</p>
    {% endif %}
    </div>
</section>", "home/nurse_index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\home\\nurse_index.html.twig");
    }
}
