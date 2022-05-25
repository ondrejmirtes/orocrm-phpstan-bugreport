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

/* @NelmioApiDoc/method.html.twig */
class __TwigTemplate_1f10f7d19f62e5de0773ba5b024e4296 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@NelmioApiDoc/method.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@NelmioApiDoc/method.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@NelmioApiDoc/method.html.twig"));

        // line 1
        echo "<li class=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "method", [], "any", false, false, false, 1)), "html", null, true);
        echo " operation\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <div class=\"heading toggler";
        // line 2
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()), "deprecated", [], "any", false, false, false, 2)) {
            echo " deprecated";
        }
        echo "\" data-href=\"#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
        <h3>
            <span class=\"http_method\">
                <i>";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "method", [], "any", false, false, false, 5)), "html", null, true);
        echo "</i>
            </span>

            ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "deprecated", [], "any", false, false, false, 8)) {
            // line 9
            echo "            <span class=\"deprecated\">
                <i>DEPRECATED</i>
            </span>
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "https", [], "any", false, false, false, 14)) {
            // line 15
            echo "                <span class=\"icon lock\" title=\"HTTPS\"></span>
            ";
        }
        // line 17
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "authentication", [], "any", false, false, false, 17)) {
            // line 18
            echo "                <span class=\"icon keys\" title=\"Needs ";
            (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "authenticationRoles", [], "any", false, false, false, 18)) > 0)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "authenticationRoles", [], "any", false, false, false, 18), ", "), "html", null, true))) : (print ("authentication")));
            echo "\"></span>
            ";
        }
        // line 20
        echo "
            <span class=\"path\">
                ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "host", [], "any", true, true, false, 22)) {
            // line 23
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "https", [], "any", false, false, false, 23)) ? ("https://") : ("http://"));
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "host", [], "any", false, false, false, 24), "html", null, true);
        }
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "uri", [], "any", false, false, false, 26), "html", null, true);
        echo "
            </span>
           ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "tags", [], "any", true, true, false, 28)) {
            // line 29
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "tags", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["tag"] => $context["color_code"]) {
                // line 30
                echo "                    <span class=\"tag\" ";
                if ((array_key_exists("color_code", $context) &&  !twig_test_empty($context["color_code"]))) {
                    echo "style=\"background-color:";
                    echo twig_escape_filter($this->env, $context["color_code"], "html", null, true);
                    echo ";\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tag'], $context['color_code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
        }
        // line 33
        echo "        </h3>
        <ul class=\"options\">
            ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "description", [], "any", true, true, false, 35)) {
            // line 36
            echo "                <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), "html", null, true);
            echo "</li>
            ";
        }
        // line 38
        echo "        </ul>
    </div>

    <div class=\"content\" style=\"display: ";
        // line 41
        if ((array_key_exists("displayContent", $context) && ((isset($context["displayContent"]) || array_key_exists("displayContent", $context) ? $context["displayContent"] : (function () { throw new RuntimeError('Variable "displayContent" does not exist.', 41, $this->source); })()) == true))) {
            echo "display";
        } else {
            echo "none";
        }
        echo ";\">
        <ul class=\"tabs\">
            ";
        // line 43
        if ((isset($context["enableSandbox"]) || array_key_exists("enableSandbox", $context) ? $context["enableSandbox"] : (function () { throw new RuntimeError('Variable "enableSandbox" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "                <li class=\"selected\" data-pane=\"content\">Documentation</li>
                <li data-pane=\"sandbox\">Sandbox</li>
            ";
        }
        // line 47
        echo "        </ul>

        <div class=\"panes\">
            <div class=\"pane content selected\">
            ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "documentation", [], "any", true, true, false, 51) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 51, $this->source); })()), "documentation", [], "any", false, false, false, 51)))) {
            // line 52
            echo "                <h4>Documentation</h4>
                <div>";
            // line 53
            echo $this->extensions['Oro\Bundle\ApiBundle\Twig\MarkdownExtension']->markdown(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 53, $this->source); })()), "documentation", [], "any", false, false, false, 53));
            echo "</div>
            ";
        }
        // line 55
        echo "
            ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "link", [], "any", true, true, false, 56) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "link", [], "any", false, false, false, 56)))) {
            // line 57
            echo "                <h4>Link</h4>
                <div><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "link", [], "any", false, false, false, 58), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "link", [], "any", false, false, false, 58), "html", null, true);
            echo "</a></div>
            ";
        }
        // line 60
        echo "
            ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "requirements", [], "any", true, true, false, 61) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), "requirements", [], "any", false, false, false, 61)))) {
            // line 62
            echo "                <h4>Requirements</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Requirement</th>
                            <th>Type</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 73, $this->source); })()), "requirements", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 74
                echo "                            <tr>
                                <td>";
                // line 75
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                                <td>";
                // line 76
                ((twig_get_attribute($this->env, $this->source, $context["infos"], "requirement", [], "any", true, true, false, 76)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "requirement", [], "any", false, false, false, 76), "html", null, true))) : (print ("")));
                echo "</td>
                                <td>";
                // line 77
                ((twig_get_attribute($this->env, $this->source, $context["infos"], "dataType", [], "any", true, true, false, 77)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "dataType", [], "any", false, false, false, 77), "html", null, true))) : (print ("")));
                echo "</td>
                                <td>";
                // line 78
                ((twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", true, true, false, 78)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", false, false, false, 78), "html", null, true))) : (print ("")));
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                    </tbody>
                </table>
            ";
        }
        // line 84
        echo "
            ";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "filters", [], "any", true, true, false, 85) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 85, $this->source); })()), "filters", [], "any", false, false, false, 85)))) {
            // line 86
            echo "                <h4>Filters</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Information</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 95, $this->source); })()), "filters", [], "any", false, false, false, 95));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 96
                echo "                        <tr>
                            <td>";
                // line 97
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                            <td>
                                <table>
                                ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["infos"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 101
                    echo "                                    <tr>
                                        <td>";
                    // line 102
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["key"]), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 103
                    echo twig_escape_filter($this->env, twig_trim_filter(twig_replace_filter(json_encode($context["value"], twig_constant("JSON_UNESCAPED_UNICODE")), ["\\\\" => "\\"]), "\""), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                                </table>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                    </tbody>
                </table>
            ";
        }
        // line 113
        echo "
            ";
        // line 114
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "parameters", [], "any", true, true, false, 114) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 114, $this->source); })()), "parameters", [], "any", false, false, false, 114)))) {
            // line 115
            echo "                <h4>Parameters</h4>
                <table class='fullwidth'>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Required?</th>
                            <th>Format</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 127, $this->source); })()), "parameters", [], "any", false, false, false, 127));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 128
                echo "                            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["infos"], "readonly", [], "any", false, false, false, 128)) {
                    // line 129
                    echo "                                <tr>
                                    <td>";
                    // line 130
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 131
                    ((twig_get_attribute($this->env, $this->source, $context["infos"], "dataType", [], "any", true, true, false, 131)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "dataType", [], "any", false, false, false, 131), "html", null, true))) : (print ("")));
                    echo "</td>
                                    <td>";
                    // line 132
                    echo ((twig_get_attribute($this->env, $this->source, $context["infos"], "required", [], "any", false, false, false, 132)) ? ("true") : ("false"));
                    echo "</td>
                                    <td class=\"format\">";
                    // line 133
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "format", [], "any", false, false, false, 133), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 134
                    ((twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", true, true, false, 134)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", false, false, false, 134)), "html", null, true))) : (print ("")));
                    echo "</td>
                                </tr>
                            ";
                }
                // line 137
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                    </tbody>
                </table>
            ";
        }
        // line 141
        echo "

            ";
        // line 143
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "headers", [], "any", true, true, false, 143) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 143, $this->source); })()), "headers", [], "any", false, false, false, 143)))) {
            // line 144
            echo "                <h4>Headers</h4>
                <table class=\"fullwidth\">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Required?</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 154, $this->source); })()), "headers", [], "any", false, false, false, 154));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 155
                echo "                        <tr>
                            <td>";
                // line 156
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                            <td>";
                // line 157
                echo (((twig_get_attribute($this->env, $this->source, $context["infos"], "required", [], "any", true, true, false, 157) && (twig_get_attribute($this->env, $this->source, $context["infos"], "required", [], "any", false, false, false, 157) == "true"))) ? ("true") : ("false"));
                echo "</td>
                            <td>";
                // line 158
                ((twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", true, true, false, 158)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", false, false, false, 158)), "html", null, true))) : (print ("")));
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                    </tbody>
                </table>
            ";
        }
        // line 164
        echo "
            ";
        // line 165
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "parsedResponseMap", [], "any", true, true, false, 165) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 165, $this->source); })()), "parsedResponseMap", [], "any", false, false, false, 165)))) {
            // line 166
            echo "                <h4>Return</h4>
                <table class='fullwidth'>
                    <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Type</th>
                        <th>Versions</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 176, $this->source); })()), "parsedResponseMap", [], "any", false, false, false, 176));
            foreach ($context['_seq'] as $context["status_code"] => $context["response"]) {
                // line 177
                echo "                    <tbody>
                        <tr>
                            <td colspan=\"4\">
                                <h4>
                                    ";
                // line 181
                echo twig_escape_filter($this->env, $context["status_code"], "html", null, true);
                echo "
                                    ";
                // line 182
                if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "statusCodes", [], "any", true, true, false, 182) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "statusCodes", [], "any", false, true, false, 182), $context["status_code"], [], "array", true, true, false, 182))) {
                    // line 183
                    echo "                                        - ";
                    echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 183, $this->source); })()), "statusCodes", [], "any", false, false, false, 183), $context["status_code"], [], "array", false, false, false, 183), ", "), "html", null, true);
                    echo "
                                    ";
                }
                // line 185
                echo "                                </h4>
                            </td>
                        </tr>
                    ";
                // line 188
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["response"], "model", [], "any", false, false, false, 188));
                foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                    // line 189
                    echo "                        <tr>
                            <td>";
                    // line 190
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</td>
                            <td>";
                    // line 191
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "dataType", [], "any", false, false, false, 191), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 192
                    $this->loadTemplate("@NelmioApiDoc/Components/version.html.twig", "@NelmioApiDoc/method.html.twig", 192)->display(twig_to_array(["sinceVersion" => twig_get_attribute($this->env, $this->source, $context["infos"], "sinceVersion", [], "any", false, false, false, 192), "untilVersion" => twig_get_attribute($this->env, $this->source, $context["infos"], "untilVersion", [], "any", false, false, false, 192)]));
                    echo "</td>
                            <td>";
                    // line 193
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", false, false, false, 193), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                echo "                    </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status_code'], $context['response'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "                </table>
            ";
        }
        // line 200
        echo "
            ";
        // line 201
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "statusCodes", [], "any", true, true, false, 201) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 201, $this->source); })()), "statusCodes", [], "any", false, false, false, 201)))) {
            // line 202
            echo "                <h4>Status Codes</h4>
                <table class=\"fullwidth\">
                    <thead>
                    <tr>
                        <th>Status Code</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 211, $this->source); })()), "statusCodes", [], "any", false, false, false, 211));
            foreach ($context['_seq'] as $context["status_code"] => $context["descriptions"]) {
                // line 212
                echo "                        <tr>
                            <td><a href=\"http://en.wikipedia.org/wiki/HTTP_";
                // line 213
                echo twig_escape_filter($this->env, $context["status_code"], "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $context["status_code"], "html", null, true);
                echo "</a></td>
                            <td>
                                <ul>
                                    ";
                // line 216
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["descriptions"]);
                foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
                    // line 217
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 219
                echo "                                </ul>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status_code'], $context['descriptions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "                    </tbody>
                </table>
            ";
        }
        // line 226
        echo "
            ";
        // line 227
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "cache", [], "any", true, true, false, 227) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 227, $this->source); })()), "cache", [], "any", false, false, false, 227)))) {
            // line 228
            echo "                <h4>Cache</h4>
                <div>";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 229, $this->source); })()), "cache", [], "any", false, false, false, 229), "html", null, true);
            echo "s</div>
            ";
        }
        // line 231
        echo "
            </div>

            ";
        // line 234
        if ((isset($context["enableSandbox"]) || array_key_exists("enableSandbox", $context) ? $context["enableSandbox"] : (function () { throw new RuntimeError('Variable "enableSandbox" does not exist.', 234, $this->source); })())) {
            // line 235
            echo "                <div class=\"pane sandbox\">
                    ";
            // line 236
            if ((( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 236, $this->source); })()), "request", [], "any", false, false, false, 236)) && twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 236, $this->source); })()), "https", [], "any", false, false, false, 236)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 236, $this->source); })()), "request", [], "any", false, false, false, 236), "secure", [], "any", false, false, false, 236) != twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 236, $this->source); })()), "https", [], "any", false, false, false, 236)))) {
                // line 237
                echo "                    Please reload the documentation using the scheme ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 237, $this->source); })()), "https", [], "any", false, false, false, 237)) {
                    echo "HTTPS";
                } else {
                    echo "HTTP";
                }
                echo " if you want to use the sandbox.
                    ";
            } else {
                // line 239
                echo "                        <form method=\"\" action=\"";
                if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "host", [], "any", true, true, false, 239)) {
                    echo ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 239, $this->source); })()), "https", [], "any", false, false, false, 239)) ? ("https://") : ("http://"));
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 239, $this->source); })()), "host", [], "any", false, false, false, 239), "html", null, true);
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 239, $this->source); })()), "uri", [], "any", false, false, false, 239), "html", null, true);
                echo "\">
                            <fieldset class=\"parameters\">
                                <legend>Input</legend>
                                ";
                // line 242
                if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "requirements", [], "any", true, true, false, 242)) {
                    // line 243
                    echo "                                    <h4>Requirements</h4>
                                    ";
                    // line 244
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 244, $this->source); })()), "requirements", [], "any", false, false, false, 244));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 245
                        echo "                                        <p class=\"tuple\">
                                            <input type=\"text\" class=\"key\" value=\"";
                        // line 246
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" placeholder=\"";
                        // line 248
                        if (twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", true, true, false, 248)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", false, false, false, 248), "html", null, true);
                        } else {
                            echo "Value";
                        }
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["infos"], "default", [], "any", true, true, false, 248)) {
                            echo " value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "default", [], "any", false, false, false, 248), "html", null, true);
                            echo "\" ";
                        }
                        echo "/> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 251
                    echo "                                ";
                }
                // line 252
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "filters", [], "any", true, true, false, 252)) {
                    // line 253
                    echo "                                    <h4>Filters</h4>
                                    ";
                    // line 254
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 254, $this->source); })()), "filters", [], "any", false, false, false, 254));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 255
                        echo "                                        <p class=\"tuple filter\">
                                            <input type=\"text\" class=\"key\" value=\"";
                        // line 256
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" placeholder=\"";
                        // line 258
                        if (twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", true, true, false, 258)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", false, false, false, 258), "html", null, true);
                        } else {
                            echo "Value";
                        }
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["infos"], "default", [], "any", true, true, false, 258)) {
                            echo " value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "default", [], "any", false, false, false, 258), "html", null, true);
                            echo "\" ";
                        }
                        echo "/> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 261
                    echo "                                ";
                }
                // line 262
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "parameters", [], "any", true, true, false, 262)) {
                    // line 263
                    echo "                                    <h4>Parameters</h4>
                                    ";
                    // line 264
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 264, $this->source); })()), "parameters", [], "any", false, false, false, 264));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 265
                        echo "                                    ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["infos"], "readonly", [], "any", false, false, false, 265)) {
                            // line 266
                            echo "                                        <p class=\"tuple\" data-dataType=\"";
                            if (twig_get_attribute($this->env, $this->source, $context["infos"], "dataType", [], "any", false, false, false, 266)) {
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "dataType", [], "any", false, false, false, 266), "html", null, true);
                            }
                            echo "\" data-format=\"";
                            if (twig_get_attribute($this->env, $this->source, $context["infos"], "format", [], "any", false, false, false, 266)) {
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "format", [], "any", false, false, false, 266), "html", null, true);
                                echo " ";
                            }
                            echo "\" data-description=\"";
                            if (twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", false, false, false, 266)) {
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", false, false, false, 266)), "html", null, true);
                            }
                            echo "\">
                                            <input type=\"text\" class=\"key\" value=\"";
                            // line 267
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo "\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <select class=\"tuple_type\">
                                                <option value=\"\">Type</option>
                                                <option value=\"string\">String</option>
                                                <option value=\"boolean\">Boolean</option>
                                                <option value=\"file\">File</option>
                                                <option value=\"textarea\">Textarea</option>
                                            </select>
                                            <input type=\"text\" class=\"value\" placeholder=\"";
                            // line 276
                            if (twig_get_attribute($this->env, $this->source, $context["infos"], "dataType", [], "any", false, false, false, 276)) {
                                echo "[";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "dataType", [], "any", false, false, false, 276), "html", null, true);
                                echo "] ";
                            }
                            if (twig_get_attribute($this->env, $this->source, $context["infos"], "format", [], "any", false, false, false, 276)) {
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "format", [], "any", false, false, false, 276), "html", null, true);
                            }
                            if (twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", false, false, false, 276)) {
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["infos"], "description", [], "any", false, false, false, 276)), "html", null, true);
                            } else {
                                echo "Value";
                            }
                            echo "\" ";
                            if (twig_get_attribute($this->env, $this->source, $context["infos"], "default", [], "any", true, true, false, 276)) {
                                echo " value=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "default", [], "any", false, false, false, 276), "html", null, true);
                                echo "\" ";
                            }
                            echo "/> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                        }
                        // line 279
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 280
                    echo "                                    <button type=\"button\" class=\"add_parameter\">New parameter</button>
                                ";
                }
                // line 282
                echo "
                            </fieldset>

                            <fieldset class=\"headers\">
                                ";
                // line 286
                $context["methods"] = twig_split_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 286, $this->source); })()), "method", [], "any", false, false, false, 286)), "|");
                // line 287
                echo "                                ";
                if ((twig_length_filter($this->env, (isset($context["methods"]) || array_key_exists("methods", $context) ? $context["methods"] : (function () { throw new RuntimeError('Variable "methods" does not exist.', 287, $this->source); })())) > 1)) {
                    // line 288
                    echo "                                    <legend>Method</legend>
                                    <select name=\"header_method\">
                                    ";
                    // line 290
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["methods"]) || array_key_exists("methods", $context) ? $context["methods"] : (function () { throw new RuntimeError('Variable "methods" does not exist.', 290, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                        // line 291
                        echo "                                        <option value=\"";
                        echo twig_escape_filter($this->env, $context["method"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["method"], "html", null, true);
                        echo "</option>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 293
                    echo "                                    </select>
                                ";
                } else {
                    // line 295
                    echo "                                    <input type=\"hidden\" name=\"header_method\" value=\"";
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["methods"]) || array_key_exists("methods", $context) ? $context["methods"] : (function () { throw new RuntimeError('Variable "methods" does not exist.', 295, $this->source); })())), "html", null, true);
                    echo "\" />
                                ";
                }
                // line 297
                echo "
                                <legend>Headers</legend>

                                ";
                // line 300
                if ((isset($context["acceptType"]) || array_key_exists("acceptType", $context) ? $context["acceptType"] : (function () { throw new RuntimeError('Variable "acceptType" does not exist.', 300, $this->source); })())) {
                    // line 301
                    echo "                                    <p class=\"tuple\">
                                        <input type=\"text\" class=\"key\" value=\"Accept\" />
                                        <span>=</span>
                                        <input type=\"text\" class=\"value\" value=\"";
                    // line 304
                    echo twig_escape_filter($this->env, (isset($context["acceptType"]) || array_key_exists("acceptType", $context) ? $context["acceptType"] : (function () { throw new RuntimeError('Variable "acceptType" does not exist.', 304, $this->source); })()), "html", null, true);
                    echo "\" /> <span class=\"remove\">-</span>
                                    </p>
                                ";
                }
                // line 307
                echo "
                                ";
                // line 308
                if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "headers", [], "any", true, true, false, 308)) {
                    // line 309
                    echo "
                                    ";
                    // line 310
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 310, $this->source); })()), "headers", [], "any", false, false, false, 310));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 311
                        echo "                                        <p class=\"tuple\">
                                            <input type=\"text\" class=\"key\" value=\"";
                        // line 312
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" value=\"";
                        // line 314
                        if (twig_get_attribute($this->env, $this->source, $context["infos"], "default", [], "any", true, true, false, 314)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["infos"], "default", [], "any", false, false, false, 314), "html", null, true);
                        }
                        echo "\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 317
                    echo "
                                ";
                }
                // line 319
                echo "
                                <p class=\"tuple\">
                                    <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                                    <span>=</span>
                                    <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                                </p>

                                <button type=\"button\" class=\"add_header\">New header</button>
                            </fieldset>

                            <fieldset class=\"request-content\">
                                <legend>Content</legend>

                                <textarea class=\"content\" placeholder=\"Content set here will override the parameters that do not match the url\"></textarea>

                                <p class=\"tuple\">
                                    <input type=\"text\" class=\"key content-type\" value=\"Content-Type\" disabled=\"disabled\" />
                                    <span>=</span>
                                    <input type=\"text\" class=\"value\" placeholder=\"Value\" />
                                    <button  type=\"button\" class=\"set-content-type\">Set header</button> <small>Replaces header if set</small>
                                </p>
                            </fieldset>

                            <div class=\"buttons\">
                                <input type=\"submit\" value=\"Try!\" />
                            </div>
                        </form>

                        <script type=\"text/x-tmpl\" class=\"parameters_tuple_template\">
                        <p class=\"tuple\">
                            <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                            <span>=</span>
                            <select class=\"tuple_type\">
                                                <option value=\"\">Type</option>
                                                <option value=\"string\">String</option>
                                                <option value=\"boolean\">Boolean</option>
                                                <option value=\"file\">File</option>
                                                <option value=\"textarea\">Textarea</option>
                                            </select>
                            <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                        </p>
                        </script>

                        <script type=\"text/x-tmpl\" class=\"headers_tuple_template\">
                        <p class=\"tuple\">
                            <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                            <span>=</span>
                            <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                        </p>
                        </script>


                        <div class=\"result\">
                            <h4>Request URL</h4>
                            <pre class=\"url\"></pre>

                            <h4 class=\"request-body-header\">Request body</h4>
                            <pre class=\"request-body\"></pre>

                            <h4>Response Headers&nbsp;<small>[<a href=\"\" class=\"to-expand\">Expand</a>]</small>&nbsp;<small class=\"profiler\">[<a href=\"\" class=\"profiler-link\" target=\"_blank\">Profiler</a>]</small></h4>
                            <pre class=\"headers to-expand\"></pre>

                            <h4>Response Body&nbsp;<small>[<a href=\"\" class=\"to-raw\">Raw</a>]</small></h4>
                            <pre class=\"response prettyprint\"></pre>

                            <h4>Curl Command Line</h4>
                            <pre class=\"curl-command\"></pre>
                        </div>
                    ";
            }
            // line 388
            echo "                </div>
            ";
        }
        // line 390
        echo "        </div>
    </div>
</li>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@NelmioApiDoc/method.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  932 => 390,  928 => 388,  857 => 319,  853 => 317,  842 => 314,  837 => 312,  834 => 311,  830 => 310,  827 => 309,  825 => 308,  822 => 307,  816 => 304,  811 => 301,  809 => 300,  804 => 297,  798 => 295,  794 => 293,  783 => 291,  779 => 290,  775 => 288,  772 => 287,  770 => 286,  764 => 282,  760 => 280,  754 => 279,  730 => 276,  718 => 267,  702 => 266,  699 => 265,  695 => 264,  692 => 263,  689 => 262,  686 => 261,  667 => 258,  662 => 256,  659 => 255,  655 => 254,  652 => 253,  649 => 252,  646 => 251,  627 => 248,  622 => 246,  619 => 245,  615 => 244,  612 => 243,  610 => 242,  599 => 239,  589 => 237,  587 => 236,  584 => 235,  582 => 234,  577 => 231,  572 => 229,  569 => 228,  567 => 227,  564 => 226,  559 => 223,  550 => 219,  541 => 217,  537 => 216,  529 => 213,  526 => 212,  522 => 211,  511 => 202,  509 => 201,  506 => 200,  502 => 198,  495 => 196,  486 => 193,  482 => 192,  478 => 191,  474 => 190,  471 => 189,  467 => 188,  462 => 185,  456 => 183,  454 => 182,  450 => 181,  444 => 177,  440 => 176,  428 => 166,  426 => 165,  423 => 164,  418 => 161,  409 => 158,  405 => 157,  401 => 156,  398 => 155,  394 => 154,  382 => 144,  380 => 143,  376 => 141,  371 => 138,  365 => 137,  359 => 134,  355 => 133,  351 => 132,  347 => 131,  343 => 130,  340 => 129,  337 => 128,  333 => 127,  319 => 115,  317 => 114,  314 => 113,  309 => 110,  300 => 106,  291 => 103,  287 => 102,  284 => 101,  280 => 100,  274 => 97,  271 => 96,  267 => 95,  256 => 86,  254 => 85,  251 => 84,  246 => 81,  237 => 78,  233 => 77,  229 => 76,  225 => 75,  222 => 74,  218 => 73,  205 => 62,  203 => 61,  200 => 60,  193 => 58,  190 => 57,  188 => 56,  185 => 55,  180 => 53,  177 => 52,  175 => 51,  169 => 47,  164 => 44,  162 => 43,  153 => 41,  148 => 38,  142 => 36,  140 => 35,  136 => 33,  133 => 32,  118 => 30,  113 => 29,  111 => 28,  106 => 26,  103 => 24,  101 => 23,  99 => 22,  95 => 20,  89 => 18,  86 => 17,  82 => 15,  80 => 14,  77 => 13,  71 => 9,  69 => 8,  63 => 5,  53 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"{{ data.method|lower }} operation\" id=\"{{ data.id }}\">
    <div class=\"heading toggler{% if data.deprecated %} deprecated{% endif %}\" data-href=\"#{{ data.id }}\">
        <h3>
            <span class=\"http_method\">
                <i>{{ data.method|upper }}</i>
            </span>

            {% if data.deprecated %}
            <span class=\"deprecated\">
                <i>DEPRECATED</i>
            </span>
            {% endif %}

            {% if data.https %}
                <span class=\"icon lock\" title=\"HTTPS\"></span>
            {% endif %}
            {% if data.authentication %}
                <span class=\"icon keys\" title=\"Needs {{ data.authenticationRoles|length > 0 ? data.authenticationRoles|join(', ') : 'authentication' }}\"></span>
            {% endif %}

            <span class=\"path\">
                {% if data.host is defined -%}
                    {{ data.https ? 'https://' : 'http://' -}}
                    {{ data.host -}}
                {% endif -%}
                {{ data.uri }}
            </span>
           {% if data.tags is defined %}
                {% for tag, color_code in data.tags %}
                    <span class=\"tag\" {% if color_code is defined and color_code is not empty %}style=\"background-color:{{ color_code }};\"{% endif %}>{{ tag }}</span>
                {% endfor %}
            {%  endif %}
        </h3>
        <ul class=\"options\">
            {% if data.description is defined %}
                <li>{{ data.description }}</li>
            {% endif %}
        </ul>
    </div>

    <div class=\"content\" style=\"display: {% if displayContent is defined and displayContent == true %}display{% else %}none{% endif %};\">
        <ul class=\"tabs\">
            {% if enableSandbox %}
                <li class=\"selected\" data-pane=\"content\">Documentation</li>
                <li data-pane=\"sandbox\">Sandbox</li>
            {% endif %}
        </ul>

        <div class=\"panes\">
            <div class=\"pane content selected\">
            {% if data.documentation is defined and data.documentation is not empty %}
                <h4>Documentation</h4>
                <div>{{ data.documentation|extra_markdown }}</div>
            {% endif %}

            {% if data.link is defined and data.link is not empty %}
                <h4>Link</h4>
                <div><a href=\"{{ data.link }}\" target=\"_blank\">{{ data.link }}</a></div>
            {% endif %}

            {% if data.requirements is defined and data.requirements is not empty %}
                <h4>Requirements</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Requirement</th>
                            <th>Type</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for name, infos in data.requirements %}
                            <tr>
                                <td>{{ name }}</td>
                                <td>{{ infos.requirement is defined ? infos.requirement : ''}}</td>
                                <td>{{ infos.dataType is defined ? infos.dataType : ''}}</td>
                                <td>{{ infos.description is defined ? infos.description : ''}}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}

            {% if data.filters is defined and data.filters is not empty %}
                <h4>Filters</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Information</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for name, infos in data.filters %}
                        <tr>
                            <td>{{ name }}</td>
                            <td>
                                <table>
                                {% for key, value in infos %}
                                    <tr>
                                        <td>{{ key|title }}</td>
                                        <td>{{ value|json_encode(constant('JSON_UNESCAPED_UNICODE'))|replace({'\\\\\\\\': '\\\\'})|trim('\"') }}</td>
                                    </tr>
                                {% endfor %}
                                </table>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% endif %}

            {% if data.parameters is defined and data.parameters is not empty %}
                <h4>Parameters</h4>
                <table class='fullwidth'>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Required?</th>
                            <th>Format</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for name, infos in data.parameters %}
                            {% if not infos.readonly %}
                                <tr>
                                    <td>{{ name }}</td>
                                    <td>{{ infos.dataType is defined ? infos.dataType : '' }}</td>
                                    <td>{{ infos.required ? 'true' : 'false' }}</td>
                                    <td class=\"format\">{{ infos.format }}</td>
                                    <td>{{ infos.description is defined ? infos.description|trans : ''  }}</td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}


            {% if data.headers is defined and data.headers is not empty %}
                <h4>Headers</h4>
                <table class=\"fullwidth\">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Required?</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for name, infos in data.headers %}
                        <tr>
                            <td>{{ name }}</td>
                            <td>{{ infos.required is defined and infos.required == 'true' ? 'true' : 'false'}}</td>
                            <td>{{ infos.description is defined ? infos.description|trans : ''}}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% endif %}

            {% if data.parsedResponseMap is defined and data.parsedResponseMap is not empty %}
                <h4>Return</h4>
                <table class='fullwidth'>
                    <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Type</th>
                        <th>Versions</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                {% for status_code, response in data.parsedResponseMap %}
                    <tbody>
                        <tr>
                            <td colspan=\"4\">
                                <h4>
                                    {{ status_code }}
                                    {% if data.statusCodes is defined and data.statusCodes[status_code] is defined %}
                                        - {{ data.statusCodes[status_code]|join(', ') }}
                                    {% endif %}
                                </h4>
                            </td>
                        </tr>
                    {% for name, infos in response.model %}
                        <tr>
                            <td>{{ name }}</td>
                            <td>{{ infos.dataType }}</td>
                            <td>{% include '@NelmioApiDoc/Components/version.html.twig' with {'sinceVersion': infos.sinceVersion, 'untilVersion': infos.untilVersion} only %}</td>
                            <td>{{ infos.description }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                {% endfor %}
                </table>
            {% endif %}

            {% if data.statusCodes is defined and data.statusCodes is not empty %}
                <h4>Status Codes</h4>
                <table class=\"fullwidth\">
                    <thead>
                    <tr>
                        <th>Status Code</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for status_code, descriptions in data.statusCodes %}
                        <tr>
                            <td><a href=\"http://en.wikipedia.org/wiki/HTTP_{{ status_code }}\" target=\"_blank\">{{ status_code }}</a></td>
                            <td>
                                <ul>
                                    {% for description in descriptions %}
                                        <li>{{ description }}</li>
                                    {%  endfor %}
                                </ul>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% endif %}

            {% if data.cache is defined and data.cache is not empty %}
                <h4>Cache</h4>
                <div>{{ data.cache }}s</div>
            {% endif %}

            </div>

            {% if enableSandbox %}
                <div class=\"pane sandbox\">
                    {% if app.request is not null and data.https and app.request.secure != data.https %}
                    Please reload the documentation using the scheme {% if data.https %}HTTPS{% else %}HTTP{% endif %} if you want to use the sandbox.
                    {% else %}
                        <form method=\"\" action=\"{% if data.host is defined %}{{ data.https ? 'https://' : 'http://' }}{{ data.host }}{% endif %}{{ data.uri }}\">
                            <fieldset class=\"parameters\">
                                <legend>Input</legend>
                                {% if data.requirements is defined %}
                                    <h4>Requirements</h4>
                                    {% for name, infos in data.requirements %}
                                        <p class=\"tuple\">
                                            <input type=\"text\" class=\"key\" value=\"{{ name }}\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" placeholder=\"{% if infos.description is defined %}{{ infos.description }}{% else %}Value{% endif %}\" {% if infos.default is defined %} value=\"{{ infos.default }}\" {% endif %}/> <span class=\"remove\">-</span>
                                        </p>
                                    {% endfor %}
                                {% endif %}
                                {% if data.filters is defined %}
                                    <h4>Filters</h4>
                                    {% for name, infos in data.filters %}
                                        <p class=\"tuple filter\">
                                            <input type=\"text\" class=\"key\" value=\"{{ name }}\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" placeholder=\"{% if infos.description is defined %}{{ infos.description }}{% else %}Value{% endif %}\" {% if infos.default is defined %} value=\"{{ infos.default }}\" {% endif %}/> <span class=\"remove\">-</span>
                                        </p>
                                    {% endfor %}
                                {% endif %}
                                {% if data.parameters is defined %}
                                    <h4>Parameters</h4>
                                    {% for name, infos in data.parameters %}
                                    {% if not infos.readonly %}
                                        <p class=\"tuple\" data-dataType=\"{% if infos.dataType %}{{ infos.dataType }}{% endif %}\" data-format=\"{% if infos.format %}{{ infos.format }} {% endif %}\" data-description=\"{% if infos.description %}{{ infos.description|trans }}{% endif %}\">
                                            <input type=\"text\" class=\"key\" value=\"{{ name }}\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <select class=\"tuple_type\">
                                                <option value=\"\">Type</option>
                                                <option value=\"string\">String</option>
                                                <option value=\"boolean\">Boolean</option>
                                                <option value=\"file\">File</option>
                                                <option value=\"textarea\">Textarea</option>
                                            </select>
                                            <input type=\"text\" class=\"value\" placeholder=\"{% if infos.dataType %}[{{ infos.dataType }}] {% endif %}{% if infos.format %}{{ infos.format }}{% endif %}{% if infos.description %}{{ infos.description|trans }}{% else %}Value{% endif %}\" {% if infos.default is defined %} value=\"{{ infos.default }}\" {% endif %}/> <span class=\"remove\">-</span>
                                        </p>
                                    {% endif %}
                                    {% endfor %}
                                    <button type=\"button\" class=\"add_parameter\">New parameter</button>
                                {% endif %}

                            </fieldset>

                            <fieldset class=\"headers\">
                                {% set methods = data.method|upper|split('|') %}
                                {% if methods|length > 1 %}
                                    <legend>Method</legend>
                                    <select name=\"header_method\">
                                    {% for method in methods %}
                                        <option value=\"{{ method }}\">{{ method }}</option>
                                    {% endfor %}
                                    </select>
                                {% else %}
                                    <input type=\"hidden\" name=\"header_method\" value=\"{{ methods|join }}\" />
                                {% endif %}

                                <legend>Headers</legend>

                                {% if acceptType %}
                                    <p class=\"tuple\">
                                        <input type=\"text\" class=\"key\" value=\"Accept\" />
                                        <span>=</span>
                                        <input type=\"text\" class=\"value\" value=\"{{ acceptType }}\" /> <span class=\"remove\">-</span>
                                    </p>
                                {% endif %}

                                {% if data.headers is defined %}

                                    {% for name, infos in data.headers %}
                                        <p class=\"tuple\">
                                            <input type=\"text\" class=\"key\" value=\"{{ name }}\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" value=\"{% if infos.default is defined %}{{ infos.default }}{% endif %}\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                                        </p>
                                    {% endfor %}

                                {% endif %}

                                <p class=\"tuple\">
                                    <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                                    <span>=</span>
                                    <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                                </p>

                                <button type=\"button\" class=\"add_header\">New header</button>
                            </fieldset>

                            <fieldset class=\"request-content\">
                                <legend>Content</legend>

                                <textarea class=\"content\" placeholder=\"Content set here will override the parameters that do not match the url\"></textarea>

                                <p class=\"tuple\">
                                    <input type=\"text\" class=\"key content-type\" value=\"Content-Type\" disabled=\"disabled\" />
                                    <span>=</span>
                                    <input type=\"text\" class=\"value\" placeholder=\"Value\" />
                                    <button  type=\"button\" class=\"set-content-type\">Set header</button> <small>Replaces header if set</small>
                                </p>
                            </fieldset>

                            <div class=\"buttons\">
                                <input type=\"submit\" value=\"Try!\" />
                            </div>
                        </form>

                        <script type=\"text/x-tmpl\" class=\"parameters_tuple_template\">
                        <p class=\"tuple\">
                            <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                            <span>=</span>
                            <select class=\"tuple_type\">
                                                <option value=\"\">Type</option>
                                                <option value=\"string\">String</option>
                                                <option value=\"boolean\">Boolean</option>
                                                <option value=\"file\">File</option>
                                                <option value=\"textarea\">Textarea</option>
                                            </select>
                            <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                        </p>
                        </script>

                        <script type=\"text/x-tmpl\" class=\"headers_tuple_template\">
                        <p class=\"tuple\">
                            <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                            <span>=</span>
                            <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                        </p>
                        </script>


                        <div class=\"result\">
                            <h4>Request URL</h4>
                            <pre class=\"url\"></pre>

                            <h4 class=\"request-body-header\">Request body</h4>
                            <pre class=\"request-body\"></pre>

                            <h4>Response Headers&nbsp;<small>[<a href=\"\" class=\"to-expand\">Expand</a>]</small>&nbsp;<small class=\"profiler\">[<a href=\"\" class=\"profiler-link\" target=\"_blank\">Profiler</a>]</small></h4>
                            <pre class=\"headers to-expand\"></pre>

                            <h4>Response Body&nbsp;<small>[<a href=\"\" class=\"to-raw\">Raw</a>]</small></h4>
                            <pre class=\"response prettyprint\"></pre>

                            <h4>Curl Command Line</h4>
                            <pre class=\"curl-command\"></pre>
                        </div>
                    {% endif %}
                </div>
            {% endif %}
        </div>
    </div>
</li>
", "@NelmioApiDoc/method.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/method.html.twig");
    }
}
