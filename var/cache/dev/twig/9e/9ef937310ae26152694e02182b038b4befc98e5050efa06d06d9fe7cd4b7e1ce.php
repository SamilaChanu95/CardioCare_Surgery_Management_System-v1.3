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

/* home/blog_index.html.twig */
class __TwigTemplate_6d736b5af45f3502fc6797ce13f56c86cc567a93623457de8c97379d4f879215 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blog_index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/blog_index.html.twig"));

        // line 1
        echo "<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center mb-5 pb-2\">
            <div class=\"col-md-8 text-center heading-section ftco-animate\">
                <span class=\"subheading\">Blog</span>
                <h2 class=\"mb-4\">Recent Blog</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4 ftco-animate\">
                <div class=\"blog-entry\">
                    <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_1.jpg"), "html", null, true);
        echo "');\">
                        <div class=\"meta-date text-center p-2\">
                            <span class=\"day\">23</span>
                            <span class=\"mos\">January</span>
                            <span class=\"yr\">2019</span>
                        </div>
                    </a>
                    <div class=\"text bg-white p-4\">
                        <h3 class=\"heading\"><a href=\"#\">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class=\"d-flex align-items-center mt-4\">
                            <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary\">Read More <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
                            <p class=\"ml-auto mb-0\">
                                <a href=\"#\" class=\"mr-2\">Admin</a>
                                <a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 ftco-animate\">
                <div class=\"blog-entry\">
                    <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_2.jpg"), "html", null, true);
        echo "');\">
                        <div class=\"meta-date text-center p-2\">
                            <span class=\"day\">23</span>
                            <span class=\"mos\">January</span>
                            <span class=\"yr\">2019</span>
                        </div>
                    </a>
                    <div class=\"text bg-white p-4\">
                        <h3 class=\"heading\"><a href=\"#\">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class=\"d-flex align-items-center mt-4\">
                            <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary\">Read More <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
                            <p class=\"ml-auto mb-0\">
                                <a href=\"#\" class=\"mr-2\">Admin</a>
                                <a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 ftco-animate\">
                <div class=\"blog-entry\">
                    <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image_3.jpg"), "html", null, true);
        echo "');\">
                        <div class=\"meta-date text-center p-2\">
                            <span class=\"day\">23</span>
                            <span class=\"mos\">January</span>
                            <span class=\"yr\">2019</span>
                        </div>
                    </a>
                    <div class=\"text bg-white p-4\">
                        <h3 class=\"heading\"><a href=\"#\">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class=\"d-flex align-items-center mt-4\">
                            <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary\">Read More <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
                            <p class=\"ml-auto mb-0\">
                                <a href=\"#\" class=\"mr-2\">Admin</a>
                                <a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a>
                            </p>
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
        return "home/blog_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 57,  82 => 35,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center mb-5 pb-2\">
            <div class=\"col-md-8 text-center heading-section ftco-animate\">
                <span class=\"subheading\">Blog</span>
                <h2 class=\"mb-4\">Recent Blog</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4 ftco-animate\">
                <div class=\"blog-entry\">
                    <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('{{ asset('images/image_1.jpg') }}');\">
                        <div class=\"meta-date text-center p-2\">
                            <span class=\"day\">23</span>
                            <span class=\"mos\">January</span>
                            <span class=\"yr\">2019</span>
                        </div>
                    </a>
                    <div class=\"text bg-white p-4\">
                        <h3 class=\"heading\"><a href=\"#\">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class=\"d-flex align-items-center mt-4\">
                            <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary\">Read More <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
                            <p class=\"ml-auto mb-0\">
                                <a href=\"#\" class=\"mr-2\">Admin</a>
                                <a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 ftco-animate\">
                <div class=\"blog-entry\">
                    <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('{{ asset('images/image_2.jpg') }}');\">
                        <div class=\"meta-date text-center p-2\">
                            <span class=\"day\">23</span>
                            <span class=\"mos\">January</span>
                            <span class=\"yr\">2019</span>
                        </div>
                    </a>
                    <div class=\"text bg-white p-4\">
                        <h3 class=\"heading\"><a href=\"#\">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class=\"d-flex align-items-center mt-4\">
                            <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary\">Read More <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
                            <p class=\"ml-auto mb-0\">
                                <a href=\"#\" class=\"mr-2\">Admin</a>
                                <a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 ftco-animate\">
                <div class=\"blog-entry\">
                    <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('{{ asset('images/image_3.jpg') }}');\">
                        <div class=\"meta-date text-center p-2\">
                            <span class=\"day\">23</span>
                            <span class=\"mos\">January</span>
                            <span class=\"yr\">2019</span>
                        </div>
                    </a>
                    <div class=\"text bg-white p-4\">
                        <h3 class=\"heading\"><a href=\"#\">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class=\"d-flex align-items-center mt-4\">
                            <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary\">Read More <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
                            <p class=\"ml-auto mb-0\">
                                <a href=\"#\" class=\"mr-2\">Admin</a>
                                <a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "home/blog_index.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\home\\blog_index.html.twig");
    }
}
