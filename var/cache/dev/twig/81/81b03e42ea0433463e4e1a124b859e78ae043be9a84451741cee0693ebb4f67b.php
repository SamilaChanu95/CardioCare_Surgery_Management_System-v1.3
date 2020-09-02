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

/* search/search.html.twig */
class __TwigTemplate_8497f14d88057ecc6b2a0063b29d0da0f67109585fa979d536c940d46859f6fc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/search.html.twig", 1);
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
        echo "<div class=\"container\">
    <form method=\"POST\" action=\"\" class=\"navbar-form navbar-left inline-form\">
        <input id=\"search\" type=\"text\" name=\"recherche\" class=\"input-sm form-control\">
        <input type=\"submit\" value=\"Search\" class=\"btn-primary btn\">

        <div id=\"sresult\" class=\"search-result\">
        </div>
    </form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    <script>
        \$('#search').keyup(function() {
            recherche = \$(this).val();

            \$.ajax({
            type: \"POST\",
            url: \"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\",
            dataType: \"json\",
            data: {recherche : recherche},
            success : function(response) {
                document.getElementById(\"sresult\").innerHTML = \"\";
                if(response.length === 1){
                    var elmt = document.getElementById(\"sresult\");
                    elmt.style.display = \"block\";

                    var result = response[0];
                    document.getElementById(\"sresult\").innerHTML = \"<div class=resultat><p> Title : \"+result.title+\"<br/>oneData : \"+result.data+\"<br/>Gender : \"+result.gender+\"</p><br/></div>\";
                }
                else {
                for(var i =0;i <= response.length-1;i++) {
                    var elmt = document.getElementById(\"sresult\");
                    elmt.style.display = \"block\";

                    var result = response[i];
                    document.getElementById(\"sresult\").innerHTML += \"<div class=resultat><p> Title : \"+result.title+\"<br/>Data : \"+result.data+\"<br/>Gender : \"+result.gender+\"</p><br/></div>\";
                }
                }
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
        return "search/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  98 => 16,  88 => 15,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <form method=\"POST\" action=\"\" class=\"navbar-form navbar-left inline-form\">
        <input id=\"search\" type=\"text\" name=\"recherche\" class=\"input-sm form-control\">
        <input type=\"submit\" value=\"Search\" class=\"btn-primary btn\">

        <div id=\"sresult\" class=\"search-result\">
        </div>
    </form>
</div>
{% endblock %}

{% block javascripts %}
    <script>
        \$('#search').keyup(function() {
            recherche = \$(this).val();

            \$.ajax({
            type: \"POST\",
            url: \"{{ path('search') }}\",
            dataType: \"json\",
            data: {recherche : recherche},
            success : function(response) {
                document.getElementById(\"sresult\").innerHTML = \"\";
                if(response.length === 1){
                    var elmt = document.getElementById(\"sresult\");
                    elmt.style.display = \"block\";

                    var result = response[0];
                    document.getElementById(\"sresult\").innerHTML = \"<div class=resultat><p> Title : \"+result.title+\"<br/>oneData : \"+result.data+\"<br/>Gender : \"+result.gender+\"</p><br/></div>\";
                }
                else {
                for(var i =0;i <= response.length-1;i++) {
                    var elmt = document.getElementById(\"sresult\");
                    elmt.style.display = \"block\";

                    var result = response[i];
                    document.getElementById(\"sresult\").innerHTML += \"<div class=resultat><p> Title : \"+result.title+\"<br/>Data : \"+result.data+\"<br/>Gender : \"+result.gender+\"</p><br/></div>\";
                }
                }
            }
            });
        });
    </script>
{% endblock %}
", "search/search.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\templates\\search\\search.html.twig");
    }
}
