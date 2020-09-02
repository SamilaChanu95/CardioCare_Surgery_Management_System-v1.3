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

/* patient/search.html.twig */
class __TwigTemplate_e7250d03af91afa8a70a376cbf5bbd59b1ea738e9442a2fd5c1c94a99409857a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "patient/search.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"sidebar-search\">
            <div class=\"input-group\">
                <form class=\"form-inline ml-5\">
                    <div class=\"input-group input-group-sm search-form\">
                        <input id=\"search\" type=\"text\" class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search here..\" aria-label=\"Search\" style=\"font-size: 17px;\" size=\"40\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-navbar\" type=\"submit\">
                                <i class=\"fas fa-search\"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- <input id=\"search\" type=\"text\" class=\"form-control\" placeholder=\"Search here..\"> -->
            </div>
        </div>  
        <div class=\"sidebar-search\">
            <div class=\"input-group\">  
                <ul class=\"nav\" id=\"side-menu\">
                    <li>
                    ";
        // line 24
        if ((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 24, $this->source); })())) {
            echo " 
                    <a href=\"#\">Results<span class=\"fa arrow\"></span></a>
                        <!-- <a href=\"#\">Results<span class=\"fa arrow\"></span></a> -->
                        <div class=\"row\">
                            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
                // line 29
                echo "                                <p id=\"entitiesNav\"></p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "     
                        </div>
                    ";
        }
        // line 33
        echo "                    </li>
                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            //console.log(\"test1\");
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var minlength = 1;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
                //console.log(\"test2\");
                if(value.length >= minlength) {
                    //console.log(\"test3\");
                    if(searchRequest == null) {
                        console.log(\"test4\");
                    }
                    if(searchRequest != null) 
                        //console.log(\"test5\");
                        searchRequest.abort();
                        //console.log(\"test3\");
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_search");
        echo "\",
                        data: {
                            'q': value
                        },
                        dataType: \"text\",
                        success: function(msg) {
                            if(value === \$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if(key === 'patients') {
                                            if(id !== 'error') {
                                                console.log(value[1]);
                                                entitySelector.append('<li><a href=\"/patient/'+id+'\">'+'<p>'+value[0]+' '+value[1]+'</p>'+'</a></li>');              
                                            } else {
                                                entitySelector.append('<li>'+value+'</li>');
                                            }
                                        }
                                    });
                                });
                            }
                        }
                    });    
                }
            });
        });
    </script>
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "patient/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 64,  139 => 41,  129 => 40,  114 => 33,  109 => 30,  102 => 29,  98 => 28,  91 => 24,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"sidebar-search\">
            <div class=\"input-group\">
                <form class=\"form-inline ml-5\">
                    <div class=\"input-group input-group-sm search-form\">
                        <input id=\"search\" type=\"text\" class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search here..\" aria-label=\"Search\" style=\"font-size: 17px;\" size=\"40\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-navbar\" type=\"submit\">
                                <i class=\"fas fa-search\"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- <input id=\"search\" type=\"text\" class=\"form-control\" placeholder=\"Search here..\"> -->
            </div>
        </div>  
        <div class=\"sidebar-search\">
            <div class=\"input-group\">  
                <ul class=\"nav\" id=\"side-menu\">
                    <li>
                    {% if patients %} 
                    <a href=\"#\">Results<span class=\"fa arrow\"></span></a>
                        <!-- <a href=\"#\">Results<span class=\"fa arrow\"></span></a> -->
                        <div class=\"row\">
                            {% for patient in patients %}
                                <p id=\"entitiesNav\"></p>
                            {% endfor %}     
                        </div>
                    {% endif %}
                    </li>
                </ul>
            </div>
        </div>
    </div>
{% endblock %}  
 
{% block javascripts %}
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            //console.log(\"test1\");
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var minlength = 1;
                var that = this;
                var value = \$(this).val();
                var entitySelector = \$(\"#entitiesNav\").html('');
                //console.log(\"test2\");
                if(value.length >= minlength) {
                    //console.log(\"test3\");
                    if(searchRequest == null) {
                        console.log(\"test4\");
                    }
                    if(searchRequest != null) 
                        //console.log(\"test5\");
                        searchRequest.abort();
                        //console.log(\"test3\");
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"{{ path('patient_search') }}\",
                        data: {
                            'q': value
                        },
                        dataType: \"text\",
                        success: function(msg) {
                            if(value === \$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if(key === 'patients') {
                                            if(id !== 'error') {
                                                console.log(value[1]);
                                                entitySelector.append('<li><a href=\"/patient/'+id+'\">'+'<p>'+value[0]+' '+value[1]+'</p>'+'</a></li>');              
                                            } else {
                                                entitySelector.append('<li>'+value+'</li>');
                                            }
                                        }
                                    });
                                });
                            }
                        }
                    });    
                }
            });
        });
    </script>
 
{% endblock %}
", "patient/search.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\patient\\search.html.twig");
    }
}
