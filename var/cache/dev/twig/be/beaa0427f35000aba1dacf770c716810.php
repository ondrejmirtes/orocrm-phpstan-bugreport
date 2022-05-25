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

/* @OroDashboard/Dashboard/widget.html.twig */
class __TwigTemplate_f7acc03cc31891ad17b913e8ede5c6ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'actions' => [$this, 'block_actions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDashboard/Dashboard/widget.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Dashboard/widget.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Dashboard/widget.html.twig"));

        // line 1
        $context["widgetId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "get", [0 => "_wid"], "method", false, false, false, 1);
        // line 2
        $context["widgetContentId"] = ("widget-content-" . (isset($context["widgetId"]) || array_key_exists("widgetId", $context) ? $context["widgetId"] : (function () { throw new RuntimeError('Variable "widgetId" does not exist.', 2, $this->source); })()));
        // line 3
        $context["widgetType"] = ((array_key_exists("widgetType", $context)) ? (_twig_default_filter((isset($context["widgetType"]) || array_key_exists("widgetType", $context) ? $context["widgetType"] : (function () { throw new RuntimeError('Variable "widgetType" does not exist.', 3, $this->source); })()), "dashboard")) : ("dashboard"));
        // line 4
        $context["widgetClass"] = twig_lower_filter($this->env, twig_replace_filter((isset($context["widgetName"]) || array_key_exists("widgetName", $context) ? $context["widgetName"] : (function () { throw new RuntimeError('Variable "widgetName" does not exist.', 4, $this->source); })()), ["_" => "-"]));
        // line 5
        if ( !array_key_exists("widgetTitle", $context)) {
            // line 6
            echo "    ";
            if ( !array_key_exists("widgetLabel", $context)) {
                // line 7
                echo "        ";
                $context["widgetTitle"] = false;
                // line 8
                echo "    ";
            } elseif (((array_key_exists("widgetConfiguration", $context) && twig_get_attribute($this->env, $this->source, ($context["widgetConfiguration"] ?? null), "title", [], "any", true, true, false, 8)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widgetConfiguration"]) || array_key_exists("widgetConfiguration", $context) ? $context["widgetConfiguration"] : (function () { throw new RuntimeError('Variable "widgetConfiguration" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8)))) {
                // line 9
                echo "        ";
                $context["widgetTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widgetConfiguration"]) || array_key_exists("widgetConfiguration", $context) ? $context["widgetConfiguration"] : (function () { throw new RuntimeError('Variable "widgetConfiguration" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "value", [], "any", false, false, false, 9));
                // line 10
                echo "    ";
            } else {
                // line 11
                echo "        ";
                $context["widgetTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widgetLabel"]) || array_key_exists("widgetLabel", $context) ? $context["widgetLabel"] : (function () { throw new RuntimeError('Variable "widgetLabel" does not exist.', 11, $this->source); })()));
                // line 12
                echo "    ";
            }
        }
        // line 14
        echo "
<div id=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["widgetContentId"]) || array_key_exists("widgetContentId", $context) ? $context["widgetContentId"] : (function () { throw new RuntimeError('Variable "widgetContentId" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" class=\"invisible widget-content ";
        echo twig_escape_filter($this->env, (isset($context["widgetType"]) || array_key_exists("widgetType", $context) ? $context["widgetType"] : (function () { throw new RuntimeError('Variable "widgetType" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "-widget-content ";
        echo twig_escape_filter($this->env, (isset($context["widgetClass"]) || array_key_exists("widgetClass", $context) ? $context["widgetClass"] : (function () { throw new RuntimeError('Variable "widgetClass" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "-widget-content\" data-widget-title=\"";
        echo twig_escape_filter($this->env, (isset($context["widgetTitle"]) || array_key_exists("widgetTitle", $context) ? $context["widgetTitle"] : (function () { throw new RuntimeError('Variable "widgetTitle" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "    ";
        if (array_key_exists("widgetConfiguration", $context)) {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widgetConfiguration"]) || array_key_exists("widgetConfiguration", $context) ? $context["widgetConfiguration"] : (function () { throw new RuntimeError('Variable "widgetConfiguration" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["configName"] => $context["config"]) {
                // line 20
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["config"], "show_on_widget", [], "any", false, false, false, 20) &&  !(null === twig_get_attribute($this->env, $this->source, $context["config"], "value", [], "any", false, false, false, 20)))) {
                    // line 21
                    echo "                ";
                    if (twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["config"], "value", [], "any", false, false, false, 21))) {
                        // line 22
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["config"], "value", [], "any", false, false, false, 22));
                        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                            // line 23
                            echo "                <div class=\"widget-config-data\"><strong>";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["key"]), "html", null, true);
                            echo "</strong>: ";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "</div>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        echo "                ";
                    } else {
                        // line 26
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["config"], "options", [], "any", true, true, false, 26) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["config"], "options", [], "any", false, true, false, 26), "label", [], "any", true, true, false, 26))) {
                            // line 27
                            echo "                        ";
                            $context["label"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["config"], "options", [], "any", false, false, false, 27), "label", [], "any", false, false, false, 27);
                            // line 28
                            echo "                    ";
                        } else {
                            // line 29
                            echo "                        ";
                            $context["label"] = $context["configName"];
                            // line 30
                            echo "                    ";
                        }
                        // line 31
                        echo "                    ";
                        $context["value"] = null;
                        // line 32
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["config"], "options", [], "any", true, true, false, 32) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["config"], "options", [], "any", false, true, false, 32), "choices", [], "any", true, true, false, 32))) {
                            // line 33
                            echo "                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["config"], "options", [], "any", false, false, false, 33), "choices", [], "any", false, false, false, 33));
                            foreach ($context['_seq'] as $context["choiceLabel"] => $context["choiceValue"]) {
                                // line 34
                                echo "                            ";
                                if ((twig_get_attribute($this->env, $this->source, $context["config"], "value", [], "any", false, false, false, 34) == $context["choiceValue"])) {
                                    // line 35
                                    echo "                                ";
                                    $context["value"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["choiceLabel"]);
                                    // line 36
                                    echo "                            ";
                                }
                                // line 37
                                echo "                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['choiceLabel'], $context['choiceValue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 38
                            echo "                    ";
                        }
                        // line 39
                        echo "                    ";
                        if ((null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 39, $this->source); })()))) {
                            // line 40
                            echo "                        ";
                            $context["value"] = twig_get_attribute($this->env, $this->source, $context["config"], "value", [], "any", false, false, false, 40);
                            // line 41
                            echo "                    ";
                        }
                        // line 42
                        echo "                    <div class=\"widget-config-data\"><strong>";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 42, $this->source); })())), "html", null, true);
                        echo "</strong>: ";
                        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 42, $this->source); })()), "html", null, true);
                        echo "</div>
                ";
                    }
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['configName'], $context['config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    ";
        }
        // line 47
        echo "    ";
        $this->displayBlock('actions', $context, $blocks);
        // line 68
        echo "</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 16));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 47
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("actions", $this->getTemplateName(), 47));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 48
        echo "        <div class=\"widget-actions\">
            ";
        // line 49
        if (array_key_exists("actions", $context)) {
            // line 50
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 51
                if (( !twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", true, true, false, 51) || (twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 51) == "button"))) {
                    // line 52
                    echo "                        ";
                    $context["cssType"] = ("btn btn-sm " . ((twig_get_attribute($this->env, $this->source, $context["action"], "class", [], "any", true, true, false, 52)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 52), "btn-primary")) : ("btn-primary")));
                    // line 53
                    echo "                    ";
                } else {
                    // line 54
                    echo "                        ";
                    $context["cssType"] = "dashboard-link";
                    // line 55
                    echo "                    ";
                }
                // line 56
                echo "                    <a class=\"dashboard-btn  ";
                echo twig_escape_filter($this->env, (isset($context["cssType"]) || array_key_exists("cssType", $context) ? $context["cssType"] : (function () { throw new RuntimeError('Variable "cssType" does not exist.', 56, $this->source); })()), "html", null, true);
                if (( !twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", true, true, false, 56) ||  !twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 56))) {
                    echo " no-hash";
                }
                echo "\"
                        href=\"";
                // line 57
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 57), "#")) : ("#")), "html", null, true);
                echo "\"
                        ";
                // line 58
                if (twig_get_attribute($this->env, $this->source, $context["action"], "data", [], "any", true, true, false, 58)) {
                    // line 59
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["action"], "data", [], "any", false, false, false, 59));
                    foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                        // line 60
                        echo "                            data-";
                        echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["dataItemValue"], "html_attr");
                        echo "\"
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "                        ";
                }
                // line 63
                echo "                    >";
                if (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", true, true, false, 63)) {
                    echo "<i class=\"fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 63), "html", null, true);
                    echo "\"></i> ";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 63), "html", null, true);
                echo "</a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            ";
        }
        // line 66
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroDashboard/Dashboard/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 66,  327 => 65,  314 => 63,  311 => 62,  300 => 60,  295 => 59,  293 => 58,  289 => 57,  281 => 56,  278 => 55,  275 => 54,  272 => 53,  269 => 52,  267 => 51,  262 => 50,  260 => 49,  257 => 48,  244 => 47,  231 => 17,  218 => 16,  204 => 68,  201 => 47,  198 => 46,  192 => 45,  189 => 44,  181 => 42,  178 => 41,  175 => 40,  172 => 39,  169 => 38,  163 => 37,  160 => 36,  157 => 35,  154 => 34,  149 => 33,  146 => 32,  143 => 31,  140 => 30,  137 => 29,  134 => 28,  131 => 27,  128 => 26,  125 => 25,  114 => 23,  109 => 22,  106 => 21,  103 => 20,  98 => 19,  95 => 18,  93 => 16,  83 => 15,  80 => 14,  76 => 12,  73 => 11,  70 => 10,  67 => 9,  64 => 8,  61 => 7,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set widgetId = app.request.get('_wid') %}
{% set widgetContentId = 'widget-content-' ~ widgetId %}
{% set widgetType = widgetType|default('dashboard') %}
{% set widgetClass = (widgetName|replace({'_': '-'}))|lower %}
{% if not widgetTitle is defined %}
    {% if not widgetLabel is defined %}
        {% set widgetTitle = false %}
    {% elseif widgetConfiguration is defined and widgetConfiguration.title is defined and widgetConfiguration.title.value is not empty %}
        {% set widgetTitle = widgetConfiguration.title.value|trans %}
    {% else %}
        {% set widgetTitle = widgetLabel|trans %}
    {% endif %}
{% endif %}

<div id=\"{{ widgetContentId }}\" class=\"invisible widget-content {{ widgetType }}-widget-content {{ widgetClass }}-widget-content\" data-widget-title=\"{{ widgetTitle }}\">
    {% block content %}
    {% endblock %}
    {% if widgetConfiguration is defined %}
        {% for configName, config in widgetConfiguration %}
            {% if config.show_on_widget and config.value is not null%}
                {% if config.value is iterable %}
                    {% for key,value in config.value %}
                <div class=\"widget-config-data\"><strong>{{ key|trans }}</strong>: {{ value }}</div>
                    {% endfor %}
                {% else %}
                    {% if config.options is defined and config.options.label is defined %}
                        {% set label = config.options.label %}
                    {% else %}
                        {% set label = configName %}
                    {% endif %}
                    {% set value = null %}
                    {% if config.options is defined and config.options.choices is defined %}
                        {% for choiceLabel, choiceValue in config.options.choices %}
                            {% if config.value == choiceValue %}
                                {% set value = choiceLabel|trans %}
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                    {% if value is null %}
                        {% set value = config.value %}
                    {% endif %}
                    <div class=\"widget-config-data\"><strong>{{ label|trans }}</strong>: {{ value }}</div>
                {% endif %}
            {% endif %}
        {% endfor %}
    {% endif %}
    {% block actions %}
        <div class=\"widget-actions\">
            {% if actions is defined %}
                {% for action in actions -%}
                    {% if action.type is not defined or action.type == \"button\" %}
                        {% set cssType = \"btn btn-sm \" ~ action.class|default('btn-primary') %}
                    {% else %}
                        {% set cssType = \"dashboard-link\" %}
                    {% endif %}
                    <a class=\"dashboard-btn  {{ cssType }}{% if not action.url is defined or not action.url %} no-hash{% endif %}\"
                        href=\"{{ action.url|default('#') }}\"
                        {% if action.data is defined %}
                            {% for dataItemName,dataItemValue in action.data %}
                            data-{{ dataItemName }}=\"{{ dataItemValue|e('html_attr')|raw }}\"
                            {% endfor %}
                        {% endif %}
                    >{% if action.icon is defined %}<i class=\"fa-{{ action.icon }}\"></i> {% endif %}{{ action.label }}</a>
                {%- endfor %}
            {% endif %}
        </div>
    {% endblock %}
</div>
", "@OroDashboard/Dashboard/widget.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Dashboard/widget.html.twig");
    }
}
