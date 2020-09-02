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

/* footer.html.twig */
class __TwigTemplate_23612d42d612b3178bd6b7d90ee3e06434618deca3ec3e71c86a45c4eb2ce0ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "   ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
    <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md\">
                    <div class=\"ftco-footer-widget mb-5\">
                        <h2 class=\"brand-text font-weight-light\"><b>Cardio</b>Care</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class=\"ftco-footer-widget mb-5\">
                        <h2 class=\"brand-text font-weight-light\">Have a Questions?</h2>
                        <div class=\"block-23 mb-3\">
                            <ul>
                                <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
                                <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                        <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-3\">
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md\">
                    <div class=\"ftco-footer-widget mb-5 ml-md-4\">
                        <h2 class=\"brand-text font-weight-light\">Links</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"/\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Home</a></li>
                            <li><a href=\"/patient\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Patients</a></li>
                            <li><a href=\"/doctor\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Doctors</a></li>
                            <li><a href=\"/nurse\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Nurses</a></li>
                            <li><a href=\"/consultant\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Consultants</a></li>
                            <li><a href=\"/technician\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Technicians</a></li>
                        </ul>
                    </div>
                    <div class=\"ftco-footer-widget mb-5 ml-md-4\">
                        <h2 class=\"brand-text font-weight-light\">Services</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Cardiology</a></li>
                            <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Surgery</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md\">
                    <div class=\"ftco-footer-widget mb-5\">
                    <h2 class=\"brand-text font-weight-light\">Recent Blog</h2>
                    <div class=\"block-21 mb-4 d-flex\">
                        <a class=\"blog-img mr-4\" style=\"background-image: url('";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_1.jpg"), "html", null, true);
        echo "');\"></a>
                        <div class=\"text\">
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about</a></h3>
                            <div class=\"meta\">
                                <div><a href=\"#\"><span class=\"icon-calendar\"></span> Dec 25, 2018</a></div>
                                <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                                <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"block-21 mb-5 d-flex\">
                        <a class=\"blog-img mr-4\" style=\"background-image: url('";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_2.jpg"), "html", null, true);
        echo "');\"></a>
                        <div class=\"text\">
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about</a></h3>
                            <div class=\"meta\">
                                <div><a href=\"#\"><span class=\"icon-calendar\"></span> Dec 25, 2018</a></div>
                                <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                                <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-5\">
                    <h2 class=\"brand-text font-weight-light\">Opening Hours</h2>
                    <h3 class=\"open-hours pl-4\"><span class=\"ion-ios-time mr-3\"></span>We are open 24/7</h3>
                </div>
                <div class=\"ftco-footer-widget mb-5\">
                    <h2 class=\"brand-text font-weight-light\">Subscribe Us!</h2>
                        <form action=\"#\" class=\"subscribe-form\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control mb-2 text-center\" placeholder=\"Enter email address\">
                                <input type=\"submit\" value=\"Subscribe\" class=\"form-control submit px-3\">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  131 => 62,  117 => 51,  66 => 2,  56 => 1,  46 => 98,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

    <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md\">
                    <div class=\"ftco-footer-widget mb-5\">
                        <h2 class=\"brand-text font-weight-light\"><b>Cardio</b>Care</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class=\"ftco-footer-widget mb-5\">
                        <h2 class=\"brand-text font-weight-light\">Have a Questions?</h2>
                        <div class=\"block-23 mb-3\">
                            <ul>
                                <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
                                <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                        <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-3\">
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md\">
                    <div class=\"ftco-footer-widget mb-5 ml-md-4\">
                        <h2 class=\"brand-text font-weight-light\">Links</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"/\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Home</a></li>
                            <li><a href=\"/patient\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Patients</a></li>
                            <li><a href=\"/doctor\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Doctors</a></li>
                            <li><a href=\"/nurse\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Nurses</a></li>
                            <li><a href=\"/consultant\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Consultants</a></li>
                            <li><a href=\"/technician\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Technicians</a></li>
                        </ul>
                    </div>
                    <div class=\"ftco-footer-widget mb-5 ml-md-4\">
                        <h2 class=\"brand-text font-weight-light\">Services</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Cardiology</a></li>
                            <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Surgery</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md\">
                    <div class=\"ftco-footer-widget mb-5\">
                    <h2 class=\"brand-text font-weight-light\">Recent Blog</h2>
                    <div class=\"block-21 mb-4 d-flex\">
                        <a class=\"blog-img mr-4\" style=\"background-image: url('{{ asset('images/image_1.jpg') }}');\"></a>
                        <div class=\"text\">
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about</a></h3>
                            <div class=\"meta\">
                                <div><a href=\"#\"><span class=\"icon-calendar\"></span> Dec 25, 2018</a></div>
                                <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                                <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"block-21 mb-5 d-flex\">
                        <a class=\"blog-img mr-4\" style=\"background-image: url('{{ asset('images/image_2.jpg') }}');\"></a>
                        <div class=\"text\">
                            <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about</a></h3>
                            <div class=\"meta\">
                                <div><a href=\"#\"><span class=\"icon-calendar\"></span> Dec 25, 2018</a></div>
                                <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                                <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-5\">
                    <h2 class=\"brand-text font-weight-light\">Opening Hours</h2>
                    <h3 class=\"open-hours pl-4\"><span class=\"ion-ios-time mr-3\"></span>We are open 24/7</h3>
                </div>
                <div class=\"ftco-footer-widget mb-5\">
                    <h2 class=\"brand-text font-weight-light\">Subscribe Us!</h2>
                        <form action=\"#\" class=\"subscribe-form\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control mb-2 text-center\" placeholder=\"Enter email address\">
                                <input type=\"submit\" value=\"Subscribe\" class=\"form-control submit px-3\">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    
{% endblock %}   ", "footer.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\footer.html.twig");
    }
}
