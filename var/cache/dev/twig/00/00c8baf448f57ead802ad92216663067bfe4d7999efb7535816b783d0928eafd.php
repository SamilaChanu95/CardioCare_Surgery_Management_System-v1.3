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

/* home/about_index.html.twig */
class __TwigTemplate_d038518ce87af1f093c1a1cc6925c3e361409bbae73e685704bbdfb3a7d92ad4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about_index.html.twig"));

        // line 1
        echo "<section class=\"ftco-section ftco-no-pt ftc-no-pb\">
    <div class=\"container\">
        <div class=\"row no-gutters\">
            <div class=\"col-md-5 p-md-5 img img-2 mt-5 mt-md-0\" style=\"background-image: url('";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/about.jpg"), "html", null, true);
        echo "');\"></div>                      
            <div class=\"col-md-7 wrap-about py-4 py-md-5 ftco-animate\">
                <div class=\"heading-section mb-5\">
                    <div class=\"pl-md-5 ml-md-5\">
                        <span class=\"subheading\">About <b>Cardio</b>Care</span>
                        <h2 class=\"mb-4\" style=\"font-size: 28px;\">Medical specialty concerned with the care of acutely ill hospitalized patients</h2>
                    </div>
                </div>
                <div class=\"pl-md-5 ml-md-5 mb-5\">
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                        <div class=\"row mt-5 pt-2\">
                            <div class=\"col-lg-6\">
                                <div class=\"services-2 d-flex\">
                                    <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-first-aid-kit\"></span></div>
                                    <div class=\"text\">
                                        <h3>Primary Care</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"services-2 d-flex\">
                                    <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-dropper\"></span></div>
                                    <div class=\"text\">
                                        <h3>Lab Test</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"services-2 d-flex\">
                                <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-experiment-results\"></span></div>
                                <div class=\"text\">
                                    <h3>Symptom Check</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"services-2 d-flex\">
                                <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-heart-rate\"></span></div>
                                <div class=\"text\">
                                    <h3>Heart Rate</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/about_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ftco-section ftco-no-pt ftc-no-pb\">
    <div class=\"container\">
        <div class=\"row no-gutters\">
            <div class=\"col-md-5 p-md-5 img img-2 mt-5 mt-md-0\" style=\"background-image: url('{{ asset('images/about.jpg') }}');\"></div>                      
            <div class=\"col-md-7 wrap-about py-4 py-md-5 ftco-animate\">
                <div class=\"heading-section mb-5\">
                    <div class=\"pl-md-5 ml-md-5\">
                        <span class=\"subheading\">About <b>Cardio</b>Care</span>
                        <h2 class=\"mb-4\" style=\"font-size: 28px;\">Medical specialty concerned with the care of acutely ill hospitalized patients</h2>
                    </div>
                </div>
                <div class=\"pl-md-5 ml-md-5 mb-5\">
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                        <div class=\"row mt-5 pt-2\">
                            <div class=\"col-lg-6\">
                                <div class=\"services-2 d-flex\">
                                    <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-first-aid-kit\"></span></div>
                                    <div class=\"text\">
                                        <h3>Primary Care</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"services-2 d-flex\">
                                    <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-dropper\"></span></div>
                                    <div class=\"text\">
                                        <h3>Lab Test</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"services-2 d-flex\">
                                <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-experiment-results\"></span></div>
                                <div class=\"text\">
                                    <h3>Symptom Check</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"services-2 d-flex\">
                                <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-heart-rate\"></span></div>
                                <div class=\"text\">
                                    <h3>Heart Rate</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "home/about_index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\home\\about_index.html.twig");
    }
}
