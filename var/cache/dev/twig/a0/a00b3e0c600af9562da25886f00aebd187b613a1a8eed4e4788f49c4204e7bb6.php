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

/* security/login.html.twig */
class __TwigTemplate_f609d0e42192f18714042a1b59686dd75d1533a34688641ffd1ce14c40f3e6b1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <!-- Page Specifying Meta Data -->
    ";
        // line 7
        $this->loadTemplate("meta_data.html.twig", "security/login.html.twig", 7)->display($context);
        // line 8
        echo "        
    <!-- CSS Links -->
    ";
        // line 10
        $this->loadTemplate("css.html.twig", "security/login.html.twig", 10)->display($context);
        // line 11
        echo "
    <div>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "            <div class=\"alert alert-success alert-dismissible\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [0 => "success-forget"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "            <div class=\"alert alert-success alert-dismissible\">
                ";
            // line 21
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </div>

    <body class=\"hold-transition register-page\">
        <div class=\"register-box\">
            <div class=\"register-logo\">
                <a href=\"#\"><b>Cardio</b>Care</a>
            </div>

            <!-- /.login-logo -->
            <div class=\"card\">
                <div class=\"card-body login-card-body\">
                    <p class=\"login-box-msg\">Login to start your session</p>

                    <form  action= \"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\">
                        ";
        // line 38
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "                        <span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })()), "messageKey", [], "any", false, false, false, 39), "html", null, true);
            echo "</span>
                        ";
        }
        // line 41
        echo "                        <div class=\"input-group mb-3\">
                            <input type=\"text\" name=\"_username\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\" id=\"inputUsername\" class=\"form-control\" placeholder=\"Enter username\" required autofocus>
                                <div class=\"input-group-append\">
                                    <div class=\"input-group-text\">
                                        <span class=\"fas fa-user\"></span>
                                    </div>
                                </div>
                            </input>    
                        </div>
                        <div class=\"input-group mb-3\">
                            <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Enter password\" required>
                                <div class=\"input-group-append\">
                                    <div class=\"input-group-text\">
                                        <span class=\"fas fa-lock\"></span>
                                    </div>
                                </div>
                            </input>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <div class=\"icheck-primary\">
                                    <input type=\"checkbox\" id=\"remember\">
                                        <label for=\"remember\">
                                            Remember Me
                                        </label>
                                    </input>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class=\"col-4\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block\">Login</button>
                            </div>
                        <!-- /.col -->
                        </div>
                    </form>

                    <div class=\"social-auth-links text-center mb-3\">
                        <p>- OR -</p>
                        <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_service_redirect", ["service" => "facebook"]);
        echo "\" class=\"btn btn-block btn-primary\">
                            <i class=\"fab fa-facebook mr-2\"></i> Sign in using Facebook
                        </a>
                        <a href=\"#\" class=\"btn btn-block btn-danger\">
                            <i class=\"fab fa-google-plus mr-2\"></i> Sign in using Google+
                        </a>
                        <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_service_redirect", ["service" => "github"]);
        echo "\" class=\"btn btn-block btn-dark\">
                            <i class=\"fab fa-github mr-2\"></i> Sign in using GitHub
                        </a>
                    </div>
                    <!-- /.social-auth-links -->

                    <p class=\"mb-1\">
                        <a href=\"/forget\">I forgot my password</a>
                    </p>
                    <p class=\"mb-0\">
                        <a href=\"/register\" class=\"text-center\">Register a new membership</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->
    </body>

    <!-- Javascript Links -->
    ";
        // line 105
        $this->loadTemplate("js.html.twig", "security/login.html.twig", 105)->display($context);
        // line 106
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 106,  221 => 105,  198 => 85,  189 => 79,  149 => 42,  146 => 41,  140 => 39,  138 => 38,  134 => 37,  119 => 24,  110 => 21,  107 => 20,  103 => 19,  100 => 18,  91 => 15,  88 => 14,  84 => 13,  80 => 11,  78 => 10,  74 => 8,  72 => 7,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

    <!-- Page Specifying Meta Data -->
    {% include \"meta_data.html.twig\" %}
        
    <!-- CSS Links -->
    {% include \"css.html.twig\" %}

    <div>
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success alert-dismissible\">
                {{ message }}
            </div>
        {% endfor %}

        {% for message in app.flashes('success-forget') %}
            <div class=\"alert alert-success alert-dismissible\">
                {{ message }}
            </div>
        {% endfor %}
    </div>

    <body class=\"hold-transition register-page\">
        <div class=\"register-box\">
            <div class=\"register-logo\">
                <a href=\"#\"><b>Cardio</b>Care</a>
            </div>

            <!-- /.login-logo -->
            <div class=\"card\">
                <div class=\"card-body login-card-body\">
                    <p class=\"login-box-msg\">Login to start your session</p>

                    <form  action= \"{{ path('login') }}\" method=\"POST\">
                        {% if error %}
                        <span class=\"error\">{{ error.messageKey }}</span>
                        {% endif %}
                        <div class=\"input-group mb-3\">
                            <input type=\"text\" name=\"_username\" value=\"{{ last_username }}\" id=\"inputUsername\" class=\"form-control\" placeholder=\"Enter username\" required autofocus>
                                <div class=\"input-group-append\">
                                    <div class=\"input-group-text\">
                                        <span class=\"fas fa-user\"></span>
                                    </div>
                                </div>
                            </input>    
                        </div>
                        <div class=\"input-group mb-3\">
                            <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Enter password\" required>
                                <div class=\"input-group-append\">
                                    <div class=\"input-group-text\">
                                        <span class=\"fas fa-lock\"></span>
                                    </div>
                                </div>
                            </input>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <div class=\"icheck-primary\">
                                    <input type=\"checkbox\" id=\"remember\">
                                        <label for=\"remember\">
                                            Remember Me
                                        </label>
                                    </input>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class=\"col-4\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block\">Login</button>
                            </div>
                        <!-- /.col -->
                        </div>
                    </form>

                    <div class=\"social-auth-links text-center mb-3\">
                        <p>- OR -</p>
                        <a href=\"{{ path('hwi_oauth_service_redirect', {'service': 'facebook' }) }}\" class=\"btn btn-block btn-primary\">
                            <i class=\"fab fa-facebook mr-2\"></i> Sign in using Facebook
                        </a>
                        <a href=\"#\" class=\"btn btn-block btn-danger\">
                            <i class=\"fab fa-google-plus mr-2\"></i> Sign in using Google+
                        </a>
                        <a href=\"{{ path('hwi_oauth_service_redirect', {'service': 'github' }) }}\" class=\"btn btn-block btn-dark\">
                            <i class=\"fab fa-github mr-2\"></i> Sign in using GitHub
                        </a>
                    </div>
                    <!-- /.social-auth-links -->

                    <p class=\"mb-1\">
                        <a href=\"/forget\">I forgot my password</a>
                    </p>
                    <p class=\"mb-0\">
                        <a href=\"/register\" class=\"text-center\">Register a new membership</a>
                    </p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->
    </body>

    <!-- Javascript Links -->
    {% include \"js.html.twig\" %}

{% endblock %}
", "security/login.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\security\\login.html.twig");
    }
}
