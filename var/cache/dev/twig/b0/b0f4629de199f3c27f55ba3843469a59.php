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

/* @OroTag/Tag/search.html.twig */
class __TwigTemplate_6b9e10ac7765b3ecbed12bc2738b3903 extends Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["bap"]) || array_key_exists("bap", $context) ? $context["bap"] : (function () { throw new RuntimeError('Variable "bap" does not exist.', 1, $this->source); })()), "layout", [], "any", false, false, false, 1), "@OroTag/Tag/search.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTag/Tag/search.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTag/Tag/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTag/Tag/search.html.twig"));

        // line 2
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroTag/Tag/search.html.twig", 2)->unwrap();
        // line 4
        $context["gridName"] = "tag-results-grid";

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%tag.name%" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)]]);
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
        <h2 style=\"width: auto\">";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tag.datagrid.search_result", ["%name%" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9))]);
        echo "</h2>
    </div>

    ";
        // line 12
        if (((twig_in_filter("", twig_get_array_keys_filter((isset($context["groupedResults"]) || array_key_exists("groupedResults", $context) ? $context["groupedResults"] : (function () { throw new RuntimeError('Variable "groupedResults" does not exist.', 12, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["groupedResults"]) || array_key_exists("groupedResults", $context) ? $context["groupedResults"] : (function () { throw new RuntimeError('Variable "groupedResults" does not exist.', 12, $this->source); })()), "", [], "array", false, false, false, 12), "count", [], "any", false, false, false, 12) > 0)) || (twig_length_filter($this->env, (isset($context["groupedResults"]) || array_key_exists("groupedResults", $context) ? $context["groupedResults"] : (function () { throw new RuntimeError('Variable "groupedResults" does not exist.', 12, $this->source); })())) > 1))) {
            // line 13
            echo "        ";
            $context["togglerId"] = uniqid("dropdown-");
            // line 14
            echo "        <div class=\"oro-page collapsible-sidebar clearfix\">
            <div class=\"oro-page-sidebar search-entity-types-column dropdown\">
                <a href=\"#\" role=\"button\" id=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                   aria-label=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tag.result.entity_filter"), "html", null, true);
            echo "\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"fa-filter\" aria-hidden=\"true\"></span>
                    ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, ($context["selectedResult"] ?? null), "label", [], "any", true, true, false, 19) && twig_get_attribute($this->env, $this->source, ($context["selectedResult"] ?? null), "count", [], "any", true, true, false, 19))) {
                // line 20
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["selectedResult"]) || array_key_exists("selectedResult", $context) ? $context["selectedResult"] : (function () { throw new RuntimeError('Variable "selectedResult" does not exist.', 20, $this->source); })()), "label", [], "any", false, false, false, 20)), "html", null, true);
                echo "
                        ";
                // line 21
                $context["selectedResultCount"] = twig_get_attribute($this->env, $this->source, (isset($context["selectedResult"]) || array_key_exists("selectedResult", $context) ? $context["selectedResult"] : (function () { throw new RuntimeError('Variable "selectedResult" does not exist.', 21, $this->source); })()), "count", [], "any", false, false, false, 21);
                // line 22
                echo "                    ";
            } else {
                // line 23
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.search.result.all"), "html", null, true);
                echo "
                        ";
                // line 24
                $context["selectedResultCount"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["groupedResults"]) || array_key_exists("groupedResults", $context) ? $context["groupedResults"] : (function () { throw new RuntimeError('Variable "groupedResults" does not exist.', 24, $this->source); })()), "", [], "array", false, false, false, 24), "count", [], "any", false, false, false, 24);
                // line 25
                echo "                    ";
            }
            // line 26
            echo "                    (";
            echo twig_escape_filter($this->env, (isset($context["selectedResultCount"]) || array_key_exists("selectedResultCount", $context) ? $context["selectedResultCount"] : (function () { throw new RuntimeError('Variable "selectedResultCount" does not exist.', 26, $this->source); })()), "html", null, true);
            echo ") <span class=\"fa-sort-desc\" aria-hidden=\"true\"></span>
                </a>
                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\">
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupedResults"]) || array_key_exists("groupedResults", $context) ? $context["groupedResults"] : (function () { throw new RuntimeError('Variable "groupedResults" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["alias"] => $context["type"]) {
                // line 30
                echo "                    ";
                $context["selected"] = ($context["alias"] == (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 30, $this->source); })()));
                // line 31
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["type"], "class", [], "any", true, true, false, 31)) {
                    // line 32
                    echo "                        ";
                    $context["label"] = twig_get_attribute($this->env, $this->source, $context["type"], "label", [], "any", false, false, false, 32);
                    // line 33
                    echo "                        ";
                    $context["iconClass"] = twig_get_attribute($this->env, $this->source, $context["type"], "icon", [], "any", false, false, false, 33);
                    // line 34
                    echo "                    ";
                } else {
                    // line 35
                    echo "                        ";
                    $context["label"] = "oro.search.result.all";
                    // line 36
                    echo "                        ";
                    $context["iconClass"] = "fa-search";
                    // line 37
                    echo "                    ";
                }
                // line 38
                echo "
                    ";
                // line 39
                if (twig_test_empty((isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 39, $this->source); })()))) {
                    // line 40
                    echo "                        ";
                    $context["iconClass"] = "fa-file";
                    // line 41
                    echo "                    ";
                }
                // line 42
                echo "
                    <li";
                // line 43
                if ((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 43, $this->source); })())) {
                    echo " class=\"selected\"";
                }
                echo ">
                        <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_tag_search", ["from" => $context["alias"], "id" => twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" ";
                if ((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 44, $this->source); })())) {
                    echo "aria-selected=\"true\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 44, $this->source); })())), "html", null, true);
                echo "\">
                            <span class=\"";
                // line 45
                echo twig_escape_filter($this->env, (isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 45, $this->source); })()), "html", null, true);
                echo "\" aria-hidden=\"true\"></span>
                            <span class=\"search-label\">";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 46, $this->source); })())), "html", null, true);
                echo "</span>
                            <span>&nbsp;(";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "count", [], "any", false, false, false, 47), "html", null, true);
                echo ")</span>
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </ul>
            </div>
            <div class=\"oro-page-body search-results-column\">
                <div id=\"tag-search-results-grid\">
                    ";
            // line 55
            echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [(isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 55, $this->source); })()), ["from" => (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 55, $this->source); })()), "tag_id" => twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)], ["cssClass" => "tag-search-grid"]], 55, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
        </div>
    ";
        } else {
            // line 60
            echo "    <div class=\"no-data\">
        ";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No results were found.", [], "messages");
            // line 62
            echo "        <br />
        ";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Try modifying your search criteria", [], "messages");
            // line 64
            echo "    </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroTag/Tag/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 64,  241 => 63,  238 => 62,  236 => 61,  233 => 60,  225 => 55,  219 => 51,  209 => 47,  205 => 46,  201 => 45,  191 => 44,  185 => 43,  182 => 42,  179 => 41,  176 => 40,  174 => 39,  171 => 38,  168 => 37,  165 => 36,  162 => 35,  159 => 34,  156 => 33,  153 => 32,  150 => 31,  147 => 30,  143 => 29,  139 => 28,  133 => 26,  130 => 25,  128 => 24,  123 => 23,  120 => 22,  118 => 21,  113 => 20,  111 => 19,  106 => 17,  102 => 16,  98 => 14,  95 => 13,  93 => 12,  87 => 9,  84 => 8,  71 => 7,  58 => 1,  56 => 5,  53 => 4,  51 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends bap.layout %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}

{% set gridName = 'tag-results-grid' %}
{% oro_title_set({ params: { '%tag.name%': tag.name } }) %}

{% block content %}
    <div class=\"container-fluid search-header clearfix\">
        <h2 style=\"width: auto\">{{ 'oro.tag.datagrid.search_result'|trans({'%name%': tag.name|escape})|raw }}</h2>
    </div>

    {% if '' in groupedResults|keys and groupedResults[''].count > 0 or groupedResults|length > 1 %}
        {% set togglerId = 'dropdown-'|uniqid %}
        <div class=\"oro-page collapsible-sidebar clearfix\">
            <div class=\"oro-page-sidebar search-entity-types-column dropdown\">
                <a href=\"#\" role=\"button\" id=\"{{ togglerId }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                   aria-label=\"{{ 'oro.tag.result.entity_filter'|trans }}\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"fa-filter\" aria-hidden=\"true\"></span>
                    {% if selectedResult.label is defined and selectedResult.count is defined%}
                        {{ selectedResult.label|trans}}
                        {% set selectedResultCount = selectedResult.count %}
                    {% else %}
                        {{ 'oro.search.result.all'|trans }}
                        {% set selectedResultCount = groupedResults[''].count %}
                    {% endif %}
                    ({{ selectedResultCount }}) <span class=\"fa-sort-desc\" aria-hidden=\"true\"></span>
                </a>
                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"{{ togglerId }}\">
                {% for alias, type in groupedResults %}
                    {% set selected = alias == from %}
                    {% if type.class is defined %}
                        {% set label = type.label %}
                        {% set iconClass = type.icon %}
                    {% else %}
                        {% set label = 'oro.search.result.all' %}
                        {% set iconClass = 'fa-search' %}
                    {% endif %}

                    {% if iconClass is empty %}
                        {% set iconClass = 'fa-file' %}
                    {% endif %}

                    <li{% if selected %} class=\"selected\"{% endif %}>
                        <a href=\"{{ path('oro_tag_search', { from: alias, id: tag.id }) }}\" {% if selected %}aria-selected=\"true\"{% endif %} title=\"{{ label|trans }}\">
                            <span class=\"{{ iconClass }}\" aria-hidden=\"true\"></span>
                            <span class=\"search-label\">{{ label|trans }}</span>
                            <span>&nbsp;({{ type.count }})</span>
                        </a>
                    </li>
                {% endfor %}
                </ul>
            </div>
            <div class=\"oro-page-body search-results-column\">
                <div id=\"tag-search-results-grid\">
                    {{ dataGrid.renderGrid(gridName, {from: from, tag_id: tag.id}, { cssClass: 'tag-search-grid' }) }}
                </div>
            </div>
        </div>
    {% else %}
    <div class=\"no-data\">
        {% trans %}No results were found.{% endtrans %}
        <br />
        {% trans %}Try modifying your search criteria{% endtrans %}
    </div>
    {% endif %}
{% endblock %}
", "@OroTag/Tag/search.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/TagBundle/Resources/views/Tag/search.html.twig");
    }
}
