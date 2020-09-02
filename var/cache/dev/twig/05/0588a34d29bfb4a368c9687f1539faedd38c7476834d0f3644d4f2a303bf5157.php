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

/* home/testimonial_index.html.twig */
class __TwigTemplate_2306ff24796d9487b0cdd57ace0d72a73b5896206d7886d6181d1434248b2810 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/testimonial_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/testimonial_index.html.twig"));

        // line 1
        echo "<section class=\"ftco-section testimony-section bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center mb-5 pb-2\">
            <div class=\"col-md-8 text-center heading-section ftco-animate\">
                <span class=\"subheading\">Testimonials</span>
                <h2 class=\"mb-4\">Our Patients Says About Us</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class=\"row ftco-animate justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"carousel-testimony owl-carousel\">
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img mr-4\" style=\"background-image: url('";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_1.jpg"), "html", null, true);
        echo "')\"></div>
                            <div class=\"text ml-2 bg-light\">
                                <span class=\"quote d-flex align-items-center justify-content-center\">
                                    <i class=\"icon-quote-left\"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Racky Henderson</p>
                                <span class=\"position\">Farmer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img mr-4\" style=\"background-image: url('";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_2.jpg"), "html", null, true);
        echo "')\"></div>
                            <div class=\"text ml-2 bg-light\">
                                <span class=\"quote d-flex align-items-center justify-content-center\">
                                    <i class=\"icon-quote-left\"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Henry Dee</p>
                                <span class=\"position\">Businessman</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                        <div class=\"user-img mr-4\" style=\"background-image: url('";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_3.jpg"), "html", null, true);
        echo "')\">
                        </div>
                        <div class=\"text ml-2 bg-light\">
                            <span class=\"quote d-flex align-items-center justify-content-center\">
                            <i class=\"icon-quote-left\"></i>
                            </span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class=\"name\">Mark Huff</p>
                            <span class=\"position\">Students</span>
                        </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                        <div class=\"user-img mr-4\" style=\"background-image: url('";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_4.jpg"), "html", null, true);
        echo "')\">
                        </div>
                        <div class=\"text ml-2 bg-light\">
                            <span class=\"quote d-flex align-items-center justify-content-center\">
                            <i class=\"icon-quote-left\"></i>
                            </span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class=\"name\">Rodel Golez</p>
                            <span class=\"position\">Striper</span>
                        </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img mr-4\" style=\"background-image: url('";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_1.jpg"), "html", null, true);
        echo "')\"></div>
                            <div class=\"text ml-2 bg-light\">
                                <span class=\"quote d-flex align-items-center justify-content-center\">
                                    <i class=\"icon-quote-left\"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Ken Bosh</p>
                                <span class=\"position\">Manager</span>
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
        return "home/testimonial_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 69,  108 => 55,  91 => 41,  75 => 28,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ftco-section testimony-section bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center mb-5 pb-2\">
            <div class=\"col-md-8 text-center heading-section ftco-animate\">
                <span class=\"subheading\">Testimonials</span>
                <h2 class=\"mb-4\">Our Patients Says About Us</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class=\"row ftco-animate justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"carousel-testimony owl-carousel\">
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img mr-4\" style=\"background-image: url('{{ asset('images/person_1.jpg') }}')\"></div>
                            <div class=\"text ml-2 bg-light\">
                                <span class=\"quote d-flex align-items-center justify-content-center\">
                                    <i class=\"icon-quote-left\"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Racky Henderson</p>
                                <span class=\"position\">Farmer</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img mr-4\" style=\"background-image: url('{{ asset('images/person_2.jpg') }}')\"></div>
                            <div class=\"text ml-2 bg-light\">
                                <span class=\"quote d-flex align-items-center justify-content-center\">
                                    <i class=\"icon-quote-left\"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Henry Dee</p>
                                <span class=\"position\">Businessman</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                        <div class=\"user-img mr-4\" style=\"background-image: url('{{ asset('images/person_3.jpg') }}')\">
                        </div>
                        <div class=\"text ml-2 bg-light\">
                            <span class=\"quote d-flex align-items-center justify-content-center\">
                            <i class=\"icon-quote-left\"></i>
                            </span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class=\"name\">Mark Huff</p>
                            <span class=\"position\">Students</span>
                        </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                        <div class=\"user-img mr-4\" style=\"background-image: url('{{ asset('images/person_4.jpg') }}')\">
                        </div>
                        <div class=\"text ml-2 bg-light\">
                            <span class=\"quote d-flex align-items-center justify-content-center\">
                            <i class=\"icon-quote-left\"></i>
                            </span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class=\"name\">Rodel Golez</p>
                            <span class=\"position\">Striper</span>
                        </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimony-wrap d-flex\">
                            <div class=\"user-img mr-4\" style=\"background-image: url('{{ asset('images/person_1.jpg') }}')\"></div>
                            <div class=\"text ml-2 bg-light\">
                                <span class=\"quote d-flex align-items-center justify-content-center\">
                                    <i class=\"icon-quote-left\"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class=\"name\">Ken Bosh</p>
                                <span class=\"position\">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "home/testimonial_index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\home\\testimonial_index.html.twig");
    }
}
