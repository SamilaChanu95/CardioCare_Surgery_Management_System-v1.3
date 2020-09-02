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

/* home/consulation_index.html.twig */
class __TwigTemplate_9316eb4d1cee76df93841d97f9993f086182c177592ce976b8ae2e19198eae9b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/consulation_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/consulation_index.html.twig"));

        // line 1
        echo "<section class=\"ftco-section ftco-no-pt ftco-no-pb ftco-counter img\" id=\"section-counter\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_3.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 py-5 pr-md-5\">
        <div class=\"heading-section heading-section-white ftco-animate mb-5\">
            <span class=\"subheading\">Consultation</span>
            <h2 class=\"mb-4\">Free Consultation</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
        <form action=\"#\" class=\"appointment-form ftco-animate\">
                    <div class=\"d-md-flex\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"First Name\">
                        </div>
                        <div class=\"form-group ml-md-4\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Last Name\">
                        </div>
                    </div>
                    <div class=\"d-md-flex\">
                        <div class=\"form-group\">
                            <div class=\"form-field\">
                        <div class=\"select-wrap\">
                <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
                <select name=\"\" id=\"\" class=\"form-control\">
                    <option value=\"\">Select Your Services</option>
                    <option value=\"\">Surgical</option>
                    <option value=\"\">Cardiology</option>
                    <option value=\"\">Other Services</option>
                </select>
                </div>
                </div>
                        </div>
                        <div class=\"form-group ml-md-4\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Phone\">
                        </div>
                    </div>
                    <div class=\"d-md-flex\">
                        <div class=\"form-group\">
                            <div class=\"input-wrap\">
                        <div class=\"icon\"><span class=\"ion-md-calendar\"></span></div>
                        <input type=\"text\" class=\"form-control appointment_date\" placeholder=\"Date\">
                    </div>
                        </div>
                        <div class=\"form-group ml-md-4\">
                            <div class=\"input-wrap\">
                        <div class=\"icon\"><span class=\"ion-ios-clock\"></span></div>
                        <input type=\"text\" class=\"form-control appointment_time\" placeholder=\"Time\">
                    </div>
                        </div>
                    </div>
                    <div class=\"d-md-flex\">
                        <div class=\"form-group\">
                <textarea name=\"\" id=\"\" cols=\"30\" rows=\"2\" class=\"form-control\" placeholder=\"Message\"></textarea>
                </div>
                <div class=\"form-group ml-md-4\">
                <input type=\"submit\" value=\"Appointment\" class=\"btn btn-secondary py-3 px-4\">
                </div>
                    </div>
                </form>
            </div>
            <div class=\"col-lg-6 p-5 bg-counter aside-stretch\">
                    <h3 class=\"vr\">About <span class=\"text\"><b>Cardio</b>Care</span> Facts</h3>
                <div class=\"row pt-4 mt-1\">
            <div class=\"col-md-6 d-flex justify-content-center counter-wrap ftco-animate\">
                <div class=\"block-18 p-5 bg-light\">
                <div class=\"text\">
                    <strong class=\"number\" data-number=\"30\">0</strong>
                    <span>Years of Experienced</span>
                </div>
                </div>
            </div>
            <div class=\"col-md-6 d-flex justify-content-center counter-wrap ftco-animate\">
                <div class=\"block-18 p-5 bg-light\">
                <div class=\"text\">
                    <strong class=\"number\" data-number=\"4500\">0</strong>
                    <span>Happy Patients</span>
                </div>
                </div>
            </div>
            <div class=\"col-md-6 d-flex justify-content-center counter-wrap ftco-animate\">
                <div class=\"block-18 p-5 bg-light\">
                <div class=\"text\">
                    <strong class=\"number\" data-number=\"84\">0</strong>
                    <span>Number of Doctors</span>
                </div>
                </div>
            </div>
            <div class=\"col-md-6 d-flex justify-content-center counter-wrap ftco-animate\">
                <div class=\"block-18 p-5 bg-light\">
                <div class=\"text\">
                    <strong class=\"number\" data-number=\"300\">0</strong>
                    <span>Number of Staffs</span>
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
        return "home/consulation_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ftco-section ftco-no-pt ftco-no-pb ftco-counter img\" id=\"section-counter\" style=\"background-image: url('{{ asset('images/bg_3.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 py-5 pr-md-5\">
        <div class=\"heading-section heading-section-white ftco-animate mb-5\">
            <span class=\"subheading\">Consultation</span>
            <h2 class=\"mb-4\">Free Consultation</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
        <form action=\"#\" class=\"appointment-form ftco-animate\">
                    <div class=\"d-md-flex\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"First Name\">
                        </div>
                        <div class=\"form-group ml-md-4\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Last Name\">
                        </div>
                    </div>
                    <div class=\"d-md-flex\">
                        <div class=\"form-group\">
                            <div class=\"form-field\">
                        <div class=\"select-wrap\">
                <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
                <select name=\"\" id=\"\" class=\"form-control\">
                    <option value=\"\">Select Your Services</option>
                    <option value=\"\">Surgical</option>
                    <option value=\"\">Cardiology</option>
                    <option value=\"\">Other Services</option>
                </select>
                </div>
                </div>
                        </div>
                        <div class=\"form-group ml-md-4\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Phone\">
                        </div>
                    </div>
                    <div class=\"d-md-flex\">
                        <div class=\"form-group\">
                            <div class=\"input-wrap\">
                        <div class=\"icon\"><span class=\"ion-md-calendar\"></span></div>
                        <input type=\"text\" class=\"form-control appointment_date\" placeholder=\"Date\">
                    </div>
                        </div>
                        <div class=\"form-group ml-md-4\">
                            <div class=\"input-wrap\">
                        <div class=\"icon\"><span class=\"ion-ios-clock\"></span></div>
                        <input type=\"text\" class=\"form-control appointment_time\" placeholder=\"Time\">
                    </div>
                        </div>
                    </div>
                    <div class=\"d-md-flex\">
                        <div class=\"form-group\">
                <textarea name=\"\" id=\"\" cols=\"30\" rows=\"2\" class=\"form-control\" placeholder=\"Message\"></textarea>
                </div>
                <div class=\"form-group ml-md-4\">
                <input type=\"submit\" value=\"Appointment\" class=\"btn btn-secondary py-3 px-4\">
                </div>
                    </div>
                </form>
            </div>
            <div class=\"col-lg-6 p-5 bg-counter aside-stretch\">
                    <h3 class=\"vr\">About <span class=\"text\"><b>Cardio</b>Care</span> Facts</h3>
                <div class=\"row pt-4 mt-1\">
            <div class=\"col-md-6 d-flex justify-content-center counter-wrap ftco-animate\">
                <div class=\"block-18 p-5 bg-light\">
                <div class=\"text\">
                    <strong class=\"number\" data-number=\"30\">0</strong>
                    <span>Years of Experienced</span>
                </div>
                </div>
            </div>
            <div class=\"col-md-6 d-flex justify-content-center counter-wrap ftco-animate\">
                <div class=\"block-18 p-5 bg-light\">
                <div class=\"text\">
                    <strong class=\"number\" data-number=\"4500\">0</strong>
                    <span>Happy Patients</span>
                </div>
                </div>
            </div>
            <div class=\"col-md-6 d-flex justify-content-center counter-wrap ftco-animate\">
                <div class=\"block-18 p-5 bg-light\">
                <div class=\"text\">
                    <strong class=\"number\" data-number=\"84\">0</strong>
                    <span>Number of Doctors</span>
                </div>
                </div>
            </div>
            <div class=\"col-md-6 d-flex justify-content-center counter-wrap ftco-animate\">
                <div class=\"block-18 p-5 bg-light\">
                <div class=\"text\">
                    <strong class=\"number\" data-number=\"300\">0</strong>
                    <span>Number of Staffs</span>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>", "home/consulation_index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\home\\consulation_index.html.twig");
    }
}
