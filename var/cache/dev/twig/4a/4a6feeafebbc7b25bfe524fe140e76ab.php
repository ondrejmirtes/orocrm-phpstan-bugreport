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

/* @OroSearch/Search/searchResults.html.twig */
class __TwigTemplate_ce4cba1288130bc245d8f87d5e7fd406 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["bap"]) || array_key_exists("bap", $context) ? $context["bap"] : (function () { throw new RuntimeError('Variable "bap" does not exist.', 1, $this->source); })()), "layout", [], "any", false, false, false, 1), "@OroSearch/Search/searchResults.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSearch/Search/searchResults.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSearch/Search/searchResults.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSearch/Search/searchResults.html.twig"));

        // line 2
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroSearch/Search/searchResults.html.twig", 2)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%keyword%" => ((        // line 4
array_key_exists("searchString", $context)) ? (_twig_default_filter((isset($context["searchString"]) || array_key_exists("searchString", $context) ? $context["searchString"] : (function () { throw new RuntimeError('Variable "searchString" does not exist.', 4, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.search.result.empty"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.search.result.empty")))]]);
        // line 5
        $context["gridName"] = "search-grid";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 7));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"container-fluid search-header clearfix\">
        <h2>
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search results", [], "messages");
        // line 11
        echo "        </h2>
        <form method=\"get\" action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_search_results");
        echo "\" class=\"form-inline search-form\">
            <input type=\"hidden\" name=\"from\" value=\"\" />
            <div class=\"input-group\">
                <input type=\"text\" id=\"search\" class=\"form-control span2 search\" name=\"search\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["searchString"]) || array_key_exists("searchString", $context) ? $context["searchString"] : (function () { throw new RuntimeError('Variable "searchString" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\">
                <div class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-square-default btn-search\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </form>
    </div>

    ";
        // line 23
        if ((((array_key_exists("groupedResults", $context) && twig_in_filter("", twig_get_array_keys_filter((isset($context["groupedResults"]) || array_key_exists("groupedResults", $context) ? $context["groupedResults"] : (function () { throw new RuntimeError('Variable "groupedResults" does not exist.', 23, $this->source); })())))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["groupedResults"]) || array_key_exists("groupedResults", $context) ? $context["groupedResults"] : (function () { throw new RuntimeError('Variable "groupedResults" does not exist.', 23, $this->source); })()), "", [], "array", false, false, false, 23), "count", [], "any", false, false, false, 23) > 0)) || (twig_length_filter($this->env, (isset($context["groupedResults"]) || array_key_exists("groupedResults", $context) ? $context["groupedResults"] : (function () { throw new RuntimeError('Variable "groupedResults" does not exist.', 23, $this->source); })())) > 1))) {
            // line 24
            echo "        ";
            $context["togglerId"] = uniqid("dropdown-");
            // line 25
            echo "        <div class=\"oro-page collapsible-sidebar clearfix\">
            <div class=\"oro-page-sidebar search-entity-types-column dropdown\">
                <a href=\"#\" role=\"button\" id=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                   aria-label=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.search.result.entity_filter"), "html", null, true);
            echo "\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"fa-filter\" aria-hidden=\"true\"></span>
                    ";
            // line 30
            if ((isset($context["selectedResult"]) || array_key_exists("selectedResult", $context) ? $context["selectedResult"] : (function () { throw new RuntimeError('Variable "selectedResult" does not exist.', 30, $this->source); })())) {
                // line 31
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["selectedResult"]) || array_key_exists("selectedResult", $context) ? $context["selectedResult"] : (function () { throw new RuntimeError('Variable "selectedResult" does not exist.', 31, $this->source); })()), "class", [], "any", false, false, false, 31)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedResult"]) || array_key_exists("selectedResult", $context) ? $context["selectedResult"] : (function () { throw new RuntimeError('Variable "selectedResult" does not exist.', 31, $this->source); })()), "label", [], "any", false, false, false, 31), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.search.result.all"), "html", null, true);
                }
                // line 32
                echo "                        (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedResult"]) || array_key_exists("selectedResult", $context) ? $context["selectedResult"] : (function () { throw new RuntimeError('Variable "selectedResult" does not exist.', 32, $this->source); })()), "count", [], "any", false, false, false, 32), "html", null, true);
                echo ")
                    ";
            }
            // line 34
            echo "                </a>
                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "\">
                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupedResults"]) || array_key_exists("groupedResults", $context) ? $context["groupedResults"] : (function () { throw new RuntimeError('Variable "groupedResults" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["alias"] => $context["type"]) {
                // line 37
                echo "                    ";
                $context["selected"] = ($context["alias"] == (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 37, $this->source); })()));
                // line 38
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["type"], "class", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "                        ";
                    $context["label"] = twig_get_attribute($this->env, $this->source, $context["type"], "label", [], "any", false, false, false, 39);
                    // line 40
                    echo "                        ";
                    $context["iconClass"] = twig_get_attribute($this->env, $this->source, $context["type"], "icon", [], "any", false, false, false, 40);
                    // line 41
                    echo "                    ";
                } else {
                    // line 42
                    echo "                        ";
                    $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.search.result.all");
                    // line 43
                    echo "                        ";
                    $context["iconClass"] = "fa-search";
                    // line 44
                    echo "                    ";
                }
                // line 45
                echo "
                    ";
                // line 46
                if (twig_test_empty((isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 46, $this->source); })()))) {
                    // line 47
                    echo "                        ";
                    $context["iconClass"] = "fa-file";
                    // line 48
                    echo "                    ";
                }
                // line 49
                echo "
                    <li";
                // line 50
                if ((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 50, $this->source); })())) {
                    echo " class=\"selected\"";
                }
                echo ">
                        <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_search_results", ["from" => $context["alias"], "search" => (isset($context["searchString"]) || array_key_exists("searchString", $context) ? $context["searchString"] : (function () { throw new RuntimeError('Variable "searchString" does not exist.', 51, $this->source); })())]), "html", null, true);
                echo "\" ";
                if ((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 51, $this->source); })())) {
                    echo "aria-selected=\"true\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 51, $this->source); })()), "html", null, true);
                echo "\">
                            <span class=\"";
                // line 52
                echo twig_escape_filter($this->env, (isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 52, $this->source); })()), "html", null, true);
                echo "\" aria-hidden=\"true\"></span>
                            <span class=\"search-label\">";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 53, $this->source); })())), "html", null, true);
                echo "</span>
                            <span>&nbsp;(";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "count", [], "any", false, false, false, 54), "html", null, true);
                echo ")</span>
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                </ul>
            </div>
            <div class=\"oro-page-body search-results-column\">
                <div id=\"search-result-grid\">
                    ";
            // line 62
            echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [(isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 62, $this->source); })()), ["from" => (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 62, $this->source); })()), "search" => (isset($context["searchString"]) || array_key_exists("searchString", $context) ? $context["searchString"] : (function () { throw new RuntimeError('Variable "searchString" does not exist.', 62, $this->source); })())], ["cssClass" => "search-grid grid-without-header"]], 62, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
        </div>
    ";
        } else {
            // line 67
            echo "    <div class=\"no-data\">
        ";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No results were found to match your search.", [], "messages");
            // line 69
            echo "        <br />
        ";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Try modifying your search criteria or creating a new ...", [], "messages");
            // line 71
            echo "    </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroSearch/Search/searchResults.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 71,  251 => 70,  248 => 69,  246 => 68,  243 => 67,  235 => 62,  229 => 58,  219 => 54,  215 => 53,  211 => 52,  201 => 51,  195 => 50,  192 => 49,  189 => 48,  186 => 47,  184 => 46,  181 => 45,  178 => 44,  175 => 43,  172 => 42,  169 => 41,  166 => 40,  163 => 39,  160 => 38,  157 => 37,  153 => 36,  149 => 35,  146 => 34,  140 => 32,  133 => 31,  131 => 30,  126 => 28,  122 => 27,  118 => 25,  115 => 24,  113 => 23,  104 => 17,  99 => 15,  93 => 12,  90 => 11,  88 => 10,  84 => 8,  71 => 7,  58 => 1,  56 => 5,  54 => 4,  51 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends bap.layout %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}

{% oro_title_set({ params: { '%keyword%': searchString|default('oro.search.result.empty'|trans) } }) %}
{% set gridName = 'search-grid' %}

{% block content %}
    <div class=\"container-fluid search-header clearfix\">
        <h2>
            {% trans %}Search results{% endtrans %}
        </h2>
        <form method=\"get\" action=\"{{ path('oro_search_results') }}\" class=\"form-inline search-form\">
            <input type=\"hidden\" name=\"from\" value=\"\" />
            <div class=\"input-group\">
                <input type=\"text\" id=\"search\" class=\"form-control span2 search\" name=\"search\" value=\"{{ searchString }}\">
                <div class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-square-default btn-search\">{{ 'Search'|trans }}</button>
                </div>
            </div>
        </form>
    </div>

    {% if groupedResults is defined and '' in groupedResults|keys and groupedResults[''].count > 0 or groupedResults|length > 1 %}
        {% set togglerId = 'dropdown-'|uniqid %}
        <div class=\"oro-page collapsible-sidebar clearfix\">
            <div class=\"oro-page-sidebar search-entity-types-column dropdown\">
                <a href=\"#\" role=\"button\" id=\"{{ togglerId }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                   aria-label=\"{{ 'oro.search.result.entity_filter'|trans }}\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"fa-filter\" aria-hidden=\"true\"></span>
                    {% if selectedResult %}
                        {% if selectedResult.class %}{{ selectedResult.label }}{% else %}{{ 'oro.search.result.all'|trans }}{% endif %}
                        ({{ selectedResult.count }})
                    {% endif %}
                </a>
                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"{{ togglerId }}\">
                {% for alias, type in groupedResults %}
                    {% set selected = alias == from %}
                    {% if type.class %}
                        {% set label = type.label %}
                        {% set iconClass = type.icon %}
                    {% else %}
                        {% set label = 'oro.search.result.all'|trans %}
                        {% set iconClass = 'fa-search' %}
                    {% endif %}

                    {% if iconClass is empty %}
                        {% set iconClass = 'fa-file' %}
                    {% endif %}

                    <li{% if selected %} class=\"selected\"{% endif %}>
                        <a href=\"{{ path('oro_search_results', { from: alias, search: searchString }) }}\" {% if selected %}aria-selected=\"true\"{% endif %} title=\"{{ label }}\">
                            <span class=\"{{ iconClass }}\" aria-hidden=\"true\"></span>
                            <span class=\"search-label\">{{ label|trans }}</span>
                            <span>&nbsp;({{ type.count }})</span>
                        </a>
                    </li>
                {% endfor %}
                </ul>
            </div>
            <div class=\"oro-page-body search-results-column\">
                <div id=\"search-result-grid\">
                    {{ dataGrid.renderGrid(gridName, {from: from, search: searchString}, { cssClass: 'search-grid grid-without-header' }) }}
                </div>
            </div>
        </div>
    {% else %}
    <div class=\"no-data\">
        {% trans %}No results were found to match your search.{% endtrans %}
        <br />
        {% trans %}Try modifying your search criteria or creating a new ...{% endtrans %}
    </div>
    {% endif %}
{% endblock %}
", "@OroSearch/Search/searchResults.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/SearchBundle/Resources/views/Search/searchResults.html.twig");
    }
}
