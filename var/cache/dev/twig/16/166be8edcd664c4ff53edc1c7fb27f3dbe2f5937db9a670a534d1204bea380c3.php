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

/* registration/register.html.twig */
class __TwigTemplate_e27f0c3f9f86a8e05ac97f4d8d86a440644d5b8deb7dd7f5ceee391d21d8ac54 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Page Specifying Meta Data -->
    ";
        // line 6
        $this->loadTemplate("meta_data.html.twig", "registration/register.html.twig", 6)->display($context);
        // line 7
        echo "        
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
    
    <!-- CSS Links -->
    ";
        // line 11
        $this->loadTemplate("css.html.twig", "registration/register.html.twig", 11)->display($context);
        // line 12
        echo "
    <body class=\"hold-transition register-page\">
        <div class=\"register-box\">
            <div class=\"register-logo\">
                <a href=\"#\"><b>Cardio</b>Care</a>
            </div>

            <div class=\"card\">
                <div class=\"card-body register-card-body\">
                    <p class=\"login-box-msg\">Register a new patient</p>
                   
                    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registration_form"]) || array_key_exists("registration_form", $context) ? $context["registration_form"] : (function () { throw new RuntimeError('Variable "registration_form" does not exist.', 23, $this->source); })()), 'form_start');
        echo "
                    
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registration_form"]) || array_key_exists("registration_form", $context) ? $context["registration_form"] : (function () { throw new RuntimeError('Variable "registration_form" does not exist.', 25, $this->source); })()), "username", [], "any", false, false, false, 25), 'row');
        echo "

                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registration_form"]) || array_key_exists("registration_form", $context) ? $context["registration_form"] : (function () { throw new RuntimeError('Variable "registration_form" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), 'row');
        echo "

                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registration_form"]) || array_key_exists("registration_form", $context) ? $context["registration_form"] : (function () { throw new RuntimeError('Variable "registration_form" does not exist.', 29, $this->source); })()), "plainPassword", [], "any", false, false, false, 29), 'row');
        echo "

                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registration_form"]) || array_key_exists("registration_form", $context) ? $context["registration_form"] : (function () { throw new RuntimeError('Variable "registration_form" does not exist.', 31, $this->source); })()), "termsAccepted", [], "any", false, false, false, 31), 'row');
        echo "
                  
                        <!-- Now add the widget with the sitekey that you retrieve in the registration --> 
                        <!-- <div class=\"g-recaptcha\" data-sitekey=\"6LfSiegUAAAAADav3qH6rP1OgSW7CcNOlRT4-3GN\"></div> -->

                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registration_form"]) || array_key_exists("registration_form", $context) ? $context["registration_form"] : (function () { throw new RuntimeError('Variable "registration_form" does not exist.', 36, $this->source); })()), "register", [], "any", false, false, false, 36), 'row');
        echo "

                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registration_form"]) || array_key_exists("registration_form", $context) ? $context["registration_form"] : (function () { throw new RuntimeError('Variable "registration_form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
                   
                    <div class=\"social-auth-links text-center\">  
                        <a href=\"/login\" class=\"text-center\">I already have a membership</a>
                    </div>
                </div><!-- /.form-box -->
            </div><!-- /.card -->
        </div><!-- /.register-box -->
    </body>

    <!-- Javascript Links -->
    ";
        // line 49
        $this->loadTemplate("js.html.twig", "registration/register.html.twig", 49)->display($context);
        echo " 
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 49,  128 => 38,  123 => 36,  115 => 31,  110 => 29,  105 => 27,  100 => 25,  95 => 23,  82 => 12,  80 => 11,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <!-- Page Specifying Meta Data -->
    {% include \"meta_data.html.twig\" %}
        
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
    
    <!-- CSS Links -->
    {% include \"css.html.twig\" %}

    <body class=\"hold-transition register-page\">
        <div class=\"register-box\">
            <div class=\"register-logo\">
                <a href=\"#\"><b>Cardio</b>Care</a>
            </div>

            <div class=\"card\">
                <div class=\"card-body register-card-body\">
                    <p class=\"login-box-msg\">Register a new patient</p>
                   
                    {{ form_start(registration_form) }}
                    
                        {{ form_row(registration_form.username) }}

                        {{ form_row(registration_form.email) }}

                        {{ form_row(registration_form.plainPassword) }}

                        {{ form_row(registration_form.termsAccepted) }}
                  
                        <!-- Now add the widget with the sitekey that you retrieve in the registration --> 
                        <!-- <div class=\"g-recaptcha\" data-sitekey=\"6LfSiegUAAAAADav3qH6rP1OgSW7CcNOlRT4-3GN\"></div> -->

                        {{ form_row(registration_form.register) }}

                    {{ form_end(registration_form) }}
                   
                    <div class=\"social-auth-links text-center\">  
                        <a href=\"/login\" class=\"text-center\">I already have a membership</a>
                    </div>
                </div><!-- /.form-box -->
            </div><!-- /.card -->
        </div><!-- /.register-box -->
    </body>

    <!-- Javascript Links -->
    {% include \"js.html.twig\" %} 
    
{% endblock %}

", "registration/register.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\registration\\register.html.twig");
    }
}
