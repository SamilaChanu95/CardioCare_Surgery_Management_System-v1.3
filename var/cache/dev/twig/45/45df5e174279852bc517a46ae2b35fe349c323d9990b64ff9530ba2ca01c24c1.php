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

/* home/department_index.html.twig */
class __TwigTemplate_6f9ee3e75afa7a059cb804cad22407b76c3fda105dcc108a9f1b5ffbc7e8ed2a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/department_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/department_index.html.twig"));

        // line 1
        echo "<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center mb-5 pb-2\">
            <div class=\"col-md-8 text-center heading-section ftco-animate\">
                <span class=\"subheading\">Departments</span>
                <h2 class=\"mb-4\">Clinic Departments</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class=\"ftco-departments\">
            <div class=\"row\">
                <div class=\"col-md-12 nav-link-wrap\">
                    <div class=\"nav nav-pills d-flex text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                        <a class=\"nav-link ftco-animate col-md-6\" id=\"v-pills-2-tab\" data-toggle=\"pill\" href=\"#v-pills-2\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"false\">Surgical</a>
                        <a class=\"nav-link ftco-animate col-md-6\" id=\"v-pills-5-tab\" data-toggle=\"pill\" href=\"#v-pills-5\" role=\"tab\" aria-controls=\"v-pills-5\" aria-selected=\"false\">Cardiology</a>
                    </div>
                </div>
                <div class=\"col-md-12 tab-wrap\">     
                    <div class=\"tab-content bg-light p-4 p-md-5 ftco-animate\" id=\"v-pills-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"day-1-tab\">
                            <div class=\"row departments\">
                                <div class=\"col-lg-4 order-lg-last d-flex align-items-stretch\">
                                    <div class=\"img d-flex align-self-stretch\" style=\"background-image: url('";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/dept-1.jpg"), "html", null, true);
        echo "');\"></div>
                                </div>
                                <div class=\"col-md-8\">
                                    <h2>Surgical Deparments</h2>
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
                        <div class=\"tab-pane fade\" id=\"v-pills-2\" role=\"tabpanel\" aria-labelledby=\"v-pills-day-2-tab\">
                            <div class=\"row departments\">
                                <div class=\"col-lg-4 order-lg-last d-flex align-items-stretch\">
                                    <div class=\"img d-flex align-self-stretch\" style=\"background-image: url('";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/dept-2.jpg"), "html", null, true);
        echo "');\"></div>
                                </div>
                                <div class=\"col-md-8\">
                                    <h2>Surgical Deparments</h2>
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
                        <div class=\"tab-pane fade\" id=\"v-pills-5\" role=\"tabpanel\" aria-labelledby=\"v-pills-day-5-tab\">
                            <div class=\"row departments\">
                                    <div class=\"col-lg-4 order-lg-last d-flex align-items-stretch\">
                                        <div class=\"img d-flex align-self-stretch\" style=\"background-image: url('";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/dept-5.jpg"), "html", null, true);
        echo "');\"></div>
                                    </div>
                                    <div class=\"col-md-8\">
                                        <h2>Cardiology Deparments</h2>
                                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                                        <div class=\"row mt-5 pt-2\">
                                            <div class=\"col-md-6\">
                                                <div class=\"services-2 d-flex\">
                                                    <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-idea\"></span></div>
                                                    <div class=\"text\">
                                                        <h3>Primary Care</h3>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"services-2 d-flex\">
                                                    <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-idea\"></span></div>
                                                    <div class=\"text\">
                                                        <h3>Lab Test</h3>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"services-2 d-flex\">
                                                    <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-idea\"></span></div>
                                                    <div class=\"text\">
                                                        <h3>Symptom Check</h3>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"services-2 d-flex\">
                                                    <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-idea\"></span></div>
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
        return "home/department_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 121,  119 => 72,  67 => 23,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center mb-5 pb-2\">
            <div class=\"col-md-8 text-center heading-section ftco-animate\">
                <span class=\"subheading\">Departments</span>
                <h2 class=\"mb-4\">Clinic Departments</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class=\"ftco-departments\">
            <div class=\"row\">
                <div class=\"col-md-12 nav-link-wrap\">
                    <div class=\"nav nav-pills d-flex text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                        <a class=\"nav-link ftco-animate col-md-6\" id=\"v-pills-2-tab\" data-toggle=\"pill\" href=\"#v-pills-2\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"false\">Surgical</a>
                        <a class=\"nav-link ftco-animate col-md-6\" id=\"v-pills-5-tab\" data-toggle=\"pill\" href=\"#v-pills-5\" role=\"tab\" aria-controls=\"v-pills-5\" aria-selected=\"false\">Cardiology</a>
                    </div>
                </div>
                <div class=\"col-md-12 tab-wrap\">     
                    <div class=\"tab-content bg-light p-4 p-md-5 ftco-animate\" id=\"v-pills-tabContent\">
                        <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"day-1-tab\">
                            <div class=\"row departments\">
                                <div class=\"col-lg-4 order-lg-last d-flex align-items-stretch\">
                                    <div class=\"img d-flex align-self-stretch\" style=\"background-image: url('{{ asset('images/dept-1.jpg') }}');\"></div>
                                </div>
                                <div class=\"col-md-8\">
                                    <h2>Surgical Deparments</h2>
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
                        <div class=\"tab-pane fade\" id=\"v-pills-2\" role=\"tabpanel\" aria-labelledby=\"v-pills-day-2-tab\">
                            <div class=\"row departments\">
                                <div class=\"col-lg-4 order-lg-last d-flex align-items-stretch\">
                                    <div class=\"img d-flex align-self-stretch\" style=\"background-image: url('{{ asset('images/dept-2.jpg') }}');\"></div>
                                </div>
                                <div class=\"col-md-8\">
                                    <h2>Surgical Deparments</h2>
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
                        <div class=\"tab-pane fade\" id=\"v-pills-5\" role=\"tabpanel\" aria-labelledby=\"v-pills-day-5-tab\">
                            <div class=\"row departments\">
                                    <div class=\"col-lg-4 order-lg-last d-flex align-items-stretch\">
                                        <div class=\"img d-flex align-self-stretch\" style=\"background-image: url('{{ asset('images/dept-5.jpg') }}');\"></div>
                                    </div>
                                    <div class=\"col-md-8\">
                                        <h2>Cardiology Deparments</h2>
                                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                                        <div class=\"row mt-5 pt-2\">
                                            <div class=\"col-md-6\">
                                                <div class=\"services-2 d-flex\">
                                                    <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-idea\"></span></div>
                                                    <div class=\"text\">
                                                        <h3>Primary Care</h3>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"services-2 d-flex\">
                                                    <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-idea\"></span></div>
                                                    <div class=\"text\">
                                                        <h3>Lab Test</h3>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"services-2 d-flex\">
                                                    <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-idea\"></span></div>
                                                    <div class=\"text\">
                                                        <h3>Symptom Check</h3>
                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"services-2 d-flex\">
                                                    <div class=\"icon mt-2 mr-3 d-flex justify-content-center align-items-center\"><span class=\"flaticon-idea\"></span></div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "home/department_index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\home\\department_index.html.twig");
    }
}
