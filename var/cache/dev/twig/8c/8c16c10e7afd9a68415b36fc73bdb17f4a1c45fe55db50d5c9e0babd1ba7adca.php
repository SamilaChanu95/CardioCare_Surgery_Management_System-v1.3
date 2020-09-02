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

/* home/pricing_index.html.twig */
class __TwigTemplate_28d595dacb15bbbcae680a848520412c64710b502bf1203c43ec832affc12700 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/pricing_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/pricing_index.html.twig"));

        // line 1
        echo "<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center mb-5 pb-2\">
            <div class=\"col-md-8 text-center heading-section ftco-animate\">
                <span class=\"subheading\">Pricing</span>
                <h2 class=\"mb-4\">Our Pricing</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3 ftco-animate\">
                <div class=\"pricing-entry pb-5 text-center\">
                    <div>
                        <h3 class=\"mb-4\">Basic</h3>
                        <p><span class=\"price\">\$24.50</span> <span class=\"per\">/ session</span></p>
                    </div>
                    <ul>
                        <li>Diagnostic Services</li>
                        <li>Professional Consultation</li>       
                        <li>Surgical Extractions</li>
                    </ul>
                    <p class=\"button text-center\"><a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Offer</a></p>
                </div>
            </div>
        <div class=\"col-md-3 ftco-animate\">
            <div class=\"pricing-entry pb-5 text-center\">
                <div>
                    <h3 class=\"mb-4\">Standard</h3>
                    <p><span class=\"price\">\$34.50</span> <span class=\"per\">/ session</span></p>
                </div>
                <ul>
                    <li>Diagnostic Services</li>
                    <li>Professional Consultation</li>
                    <li>Surgical Extractions</li>
                </ul>
                <p class=\"button text-center\"><a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Offer</a></p>
            </div>
        </div>
        <div class=\"col-md-3 ftco-animate\">
            <div class=\"pricing-entry active pb-5 text-center\">
                <div>
                    <h3 class=\"mb-4\">Premium</h3>
                    <p><span class=\"price\">\$54.50</span> <span class=\"per\">/ session</span></p>
                </div>
                <ul>
                    <li>Diagnostic Services</li>
                    <li>Professional Consultation</li>  
                    <li>Surgical Extractions</li>
                </ul>
                <p class=\"button text-center\"><a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Offer</a></p>
            </div>
        </div>
        <div class=\"col-md-3 ftco-animate\">
            <div class=\"pricing-entry pb-5 text-center\">
                <div>
                    <h3 class=\"mb-4\">Platinum</h3>
                    <p><span class=\"price\">\$89.50</span> <span class=\"per\">/ session</span></p>
                </div>
                <ul>
                    <li>Diagnostic Services</li>
                    <li>Professional Consultation</li>
                    <li>Surgical Extractions</li>
                </ul>
                <p class=\"button text-center\"><a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Offer</a></p>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/pricing_index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center mb-5 pb-2\">
            <div class=\"col-md-8 text-center heading-section ftco-animate\">
                <span class=\"subheading\">Pricing</span>
                <h2 class=\"mb-4\">Our Pricing</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3 ftco-animate\">
                <div class=\"pricing-entry pb-5 text-center\">
                    <div>
                        <h3 class=\"mb-4\">Basic</h3>
                        <p><span class=\"price\">\$24.50</span> <span class=\"per\">/ session</span></p>
                    </div>
                    <ul>
                        <li>Diagnostic Services</li>
                        <li>Professional Consultation</li>       
                        <li>Surgical Extractions</li>
                    </ul>
                    <p class=\"button text-center\"><a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Offer</a></p>
                </div>
            </div>
        <div class=\"col-md-3 ftco-animate\">
            <div class=\"pricing-entry pb-5 text-center\">
                <div>
                    <h3 class=\"mb-4\">Standard</h3>
                    <p><span class=\"price\">\$34.50</span> <span class=\"per\">/ session</span></p>
                </div>
                <ul>
                    <li>Diagnostic Services</li>
                    <li>Professional Consultation</li>
                    <li>Surgical Extractions</li>
                </ul>
                <p class=\"button text-center\"><a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Offer</a></p>
            </div>
        </div>
        <div class=\"col-md-3 ftco-animate\">
            <div class=\"pricing-entry active pb-5 text-center\">
                <div>
                    <h3 class=\"mb-4\">Premium</h3>
                    <p><span class=\"price\">\$54.50</span> <span class=\"per\">/ session</span></p>
                </div>
                <ul>
                    <li>Diagnostic Services</li>
                    <li>Professional Consultation</li>  
                    <li>Surgical Extractions</li>
                </ul>
                <p class=\"button text-center\"><a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Offer</a></p>
            </div>
        </div>
        <div class=\"col-md-3 ftco-animate\">
            <div class=\"pricing-entry pb-5 text-center\">
                <div>
                    <h3 class=\"mb-4\">Platinum</h3>
                    <p><span class=\"price\">\$89.50</span> <span class=\"per\">/ session</span></p>
                </div>
                <ul>
                    <li>Diagnostic Services</li>
                    <li>Professional Consultation</li>
                    <li>Surgical Extractions</li>
                </ul>
                <p class=\"button text-center\"><a href=\"#\" class=\"btn btn-primary px-4 py-3\">Get Offer</a></p>
            </div>
        </div>
    </div>
</section>", "home/pricing_index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\home\\pricing_index.html.twig");
    }
}
