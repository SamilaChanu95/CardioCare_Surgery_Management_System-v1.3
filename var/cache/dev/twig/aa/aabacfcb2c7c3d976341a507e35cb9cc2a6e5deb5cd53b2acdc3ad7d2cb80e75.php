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

/* HttplugBundle::stack.html.twig */
class __TwigTemplate_227dc7abb9240da1cf164af02a63b4d74e40bf731c55c3e68c917bc5488b8895 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "HttplugBundle::stack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "HttplugBundle::stack.html.twig"));

        // line 1
        echo "<div class=\"httplug-stack-header httplug-toggle\" data-toggle=\"#httplug-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 1, $this->source); })()), "clientSlug", [], "any", false, false, false, 1), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "-details\">
    <div>
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 3, $this->source); })()), "failed", [], "any", false, false, false, 3)) {
            // line 4
            echo "            <span class=\"httplug-stack-failed\">✘</span>
        ";
        } else {
            // line 6
            echo "            <span class=\"httplug-stack-success\">✔</span>
        ";
        }
        // line 8
        echo "        <span class=\"label httplug-method httplug-method-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 8, $this->source); })()), "requestMethod", [], "any", false, false, false, 8)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 8, $this->source); })()), "requestMethod", [], "any", false, false, false, 8), "html", null, true);
        echo "</span>
    </div>
    <div class=\"label httplug-stack-header-target\">
        <span class=\"httplug-scheme\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 11, $this->source); })()), "requestScheme", [], "any", false, false, false, 11), "html", null, true);
        echo "://</span>
        <span class=\"httplug-host\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 12, $this->source); })()), "requestHost", [], "any", false, false, false, 12), "html", null, true);
        echo "</span>
        <span class=\"httplug-target\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 13, $this->source); })()), "requestTarget", [], "any", false, false, false, 13), "html", null, true);
        echo "</span>
    </div>
    <div>
        <span class=\"label httplug-duration\">";
        // line 16
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 16, $this->source); })()), "duration", [], "any", false, false, false, 16)), "html", null, true);
        echo " ms</span>
        ";
        // line 17
        if (((twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 17, $this->source); })()), "responseCode", [], "any", false, false, false, 17) >= 400) && (twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 17, $this->source); })()), "responseCode", [], "any", false, false, false, 17) <= 599))) {
            // line 18
            echo "            <span class=\"label status-error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 18, $this->source); })()), "responseCode", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
        ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 19, $this->source); })()), "responseCode", [], "any", false, false, false, 19) >= 300) && (twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 19, $this->source); })()), "responseCode", [], "any", false, false, false, 19) <= 399))) {
            // line 20
            echo "            <span class=\"label status-warning\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 20, $this->source); })()), "responseCode", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 22
            echo "            <span class=\"label status-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 22, $this->source); })()), "responseCode", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
        ";
        }
        // line 24
        echo "    </div>
</div>
<div id=\"httplug-";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 26, $this->source); })()), "clientSlug", [], "any", false, false, false, 26), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "-details\" class=\"httplug-hidden\">
    <div class=\"httplug-toolbar\">
        <div class=\"httplug-copy-as-curl\">
            <input readonly=\"readonly\" type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 29, $this->source); })()), "curlCommand", [], "any", false, false, false, 29), "html", null, true);
        echo "\" />
            <button class=\"btn tooltip-toggle\" aria-label=\"Copy to clipboard\">Copy to clipboard</button>
        </div>
        <button data-toggle=\"#httplug-";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 32, $this->source); })()), "clientSlug", [], "any", false, false, false, 32), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "-stack\" class=\"httplug-toggle btn\" >Toggle plugin stack</button>
        <button data-toggle=\"#httplug-";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 33, $this->source); })()), "clientSlug", [], "any", false, false, false, 33), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "-details .httplug-http-body\" class=\"httplug-toggle btn\">Toggle body</button>
    </div>
    <div class=\"httplug-messages\">
        <div class=\"httplug-message card\">
            ";
        // line 37
        $this->loadTemplate("@Httplug/http_message.html.twig", "HttplugBundle::stack.html.twig", 37)->display(twig_to_array(["data" => twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 37, $this->source); })()), "clientRequest", [], "any", false, false, false, 37), "header" => "Request"]));
        // line 38
        echo "        </div>
        <div class=\"httplug-message card\">
            ";
        // line 40
        $this->loadTemplate("@Httplug/http_message.html.twig", "HttplugBundle::stack.html.twig", 40)->display(twig_to_array(["data" => twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 40, $this->source); })()), "clientResponse", [], "any", false, false, false, 40), "header" => "Response"]));
        // line 41
        echo "        </div>
    </div>
    ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 43, $this->source); })()), "profiles", [], "any", false, false, false, 43)) {
            // line 44
            echo "        <div id=\"httplug-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 44, $this->source); })()), "clientSlug", [], "any", false, false, false, 44), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "-stack\" class=\"httplug-hidden card\">
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 45, $this->source); })()), "profiles", [], "any", false, false, false, 45));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 46
                echo "                <h3 class=\"httplug-plugin-name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "plugin", [], "any", false, false, false, 46), "html", null, true);
                echo "</h3>
                <div class=\"httplug-messages\">
                    <div class=\"httplug-message\">
                        ";
                // line 49
                $this->loadTemplate("@Httplug/http_message.html.twig", "HttplugBundle::stack.html.twig", 49)->display(twig_to_array(["data" => twig_get_attribute($this->env, $this->source, $context["profile"], "request", [], "any", false, false, false, 49), "header" => "Request"]));
                // line 50
                echo "                    </div>
                    <div class=\"httplug-message\">
                        ";
                // line 52
                $this->loadTemplate("@Httplug/http_message.html.twig", "HttplugBundle::stack.html.twig", 52)->display(twig_to_array(["data" => twig_get_attribute($this->env, $this->source, $context["profile"], "response", [], "any", false, false, false, 52), "header" => "Response"]));
                // line 53
                echo "                    </div>
                </div>
                ";
                // line 55
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 55)) {
                    // line 56
                    echo "                    <hr />
                ";
                }
                // line 58
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </div>
    ";
        }
        // line 61
        echo "</div>
";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 62, $this->source); })()), "childrenStacks", [0 => (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new RuntimeError('Variable "stack" does not exist.', 62, $this->source); })())], "method", false, false, false, 62));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 63
            echo "    <div class=\"httplug-stack\">
        ";
            // line 64
            $this->loadTemplate("@Httplug/stack.html.twig", "HttplugBundle::stack.html.twig", 64)->display(twig_to_array(["collector" =>             // line 65
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 65, $this->source); })()), "client" =>             // line 66
(isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 66, $this->source); })()), "stack" =>             // line 67
$context["child"], "id" => ((            // line 68
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 68, $this->source); })()) . "-") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 68))]));
            // line 70
            echo "    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "HttplugBundle::stack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 70,  250 => 68,  249 => 67,  248 => 66,  247 => 65,  246 => 64,  243 => 63,  226 => 62,  223 => 61,  219 => 59,  205 => 58,  201 => 56,  199 => 55,  195 => 53,  193 => 52,  189 => 50,  187 => 49,  180 => 46,  163 => 45,  156 => 44,  154 => 43,  150 => 41,  148 => 40,  144 => 38,  142 => 37,  133 => 33,  127 => 32,  121 => 29,  113 => 26,  109 => 24,  103 => 22,  97 => 20,  95 => 19,  90 => 18,  88 => 17,  84 => 16,  78 => 13,  74 => 12,  70 => 11,  61 => 8,  57 => 6,  53 => 4,  51 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"httplug-stack-header httplug-toggle\" data-toggle=\"#httplug-{{ stack.clientSlug }}-{{ id }}-details\">
    <div>
        {% if stack.failed %}
            <span class=\"httplug-stack-failed\">✘</span>
        {% else %}
            <span class=\"httplug-stack-success\">✔</span>
        {% endif %}
        <span class=\"label httplug-method httplug-method-{{ stack.requestMethod|lower }}\">{{ stack.requestMethod }}</span>
    </div>
    <div class=\"label httplug-stack-header-target\">
        <span class=\"httplug-scheme\">{{ stack.requestScheme }}://</span>
        <span class=\"httplug-host\">{{ stack.requestHost }}</span>
        <span class=\"httplug-target\">{{ stack.requestTarget }}</span>
    </div>
    <div>
        <span class=\"label httplug-duration\">{{ stack.duration|number_format }} ms</span>
        {% if stack.responseCode >= 400 and stack.responseCode <= 599 %}
            <span class=\"label status-error\">{{ stack.responseCode }}</span>
        {% elseif stack.responseCode >= 300 and stack.responseCode <= 399 %}
            <span class=\"label status-warning\">{{ stack.responseCode }}</span>
        {% else %}
            <span class=\"label status-success\">{{ stack.responseCode }}</span>
        {% endif %}
    </div>
</div>
<div id=\"httplug-{{ stack.clientSlug }}-{{ id }}-details\" class=\"httplug-hidden\">
    <div class=\"httplug-toolbar\">
        <div class=\"httplug-copy-as-curl\">
            <input readonly=\"readonly\" type=\"text\" value=\"{{ stack.curlCommand }}\" />
            <button class=\"btn tooltip-toggle\" aria-label=\"Copy to clipboard\">Copy to clipboard</button>
        </div>
        <button data-toggle=\"#httplug-{{ stack.clientSlug }}-{{ id }}-stack\" class=\"httplug-toggle btn\" >Toggle plugin stack</button>
        <button data-toggle=\"#httplug-{{ stack.clientSlug }}-{{ id }}-details .httplug-http-body\" class=\"httplug-toggle btn\">Toggle body</button>
    </div>
    <div class=\"httplug-messages\">
        <div class=\"httplug-message card\">
            {% include '@Httplug/http_message.html.twig' with { data: stack.clientRequest, header: 'Request' } only %}
        </div>
        <div class=\"httplug-message card\">
            {% include '@Httplug/http_message.html.twig' with { data: stack.clientResponse, header: 'Response' } only %}
        </div>
    </div>
    {% if stack.profiles %}
        <div id=\"httplug-{{ stack.clientSlug }}-{{ id }}-stack\" class=\"httplug-hidden card\">
            {% for profile in stack.profiles %}
                <h3 class=\"httplug-plugin-name\">{{ profile.plugin }}</h3>
                <div class=\"httplug-messages\">
                    <div class=\"httplug-message\">
                        {% include '@Httplug/http_message.html.twig' with { data: profile.request, header: 'Request' } only %}
                    </div>
                    <div class=\"httplug-message\">
                        {% include '@Httplug/http_message.html.twig' with { data: profile.response, header: 'Response' } only %}
                    </div>
                </div>
                {% if not loop.last %}
                    <hr />
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}
</div>
{% for child in collector.childrenStacks(stack) %}
    <div class=\"httplug-stack\">
        {% include '@Httplug/stack.html.twig' with {
            'collector': collector,
            'client': client,
            'stack': child,
            'id': id ~ '-' ~ loop.index
        } only %}
    </div>
{% endfor %}
", "HttplugBundle::stack.html.twig", "E:\\Symfony\\CardioCare\\Version-1.2\\vendor\\php-http\\httplug-bundle\\src/Resources/views/stack.html.twig");
    }
}
