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

/* @OroEntityPagination/Placeholder/entityPagination.html.twig */
class __TwigTemplate_e6aa105fe667867c388bdad0bcfba208 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityPagination/Placeholder/entityPagination.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityPagination/Placeholder/entityPagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityPagination/Placeholder/entityPagination.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityPagination/Placeholder/entityPagination.html.twig", 1)->unwrap();
        // line 2
        $context["first_route"] = ((array_key_exists("first_route", $context)) ? (_twig_default_filter((isset($context["first_route"]) || array_key_exists("first_route", $context) ? $context["first_route"] : (function () { throw new RuntimeError('Variable "first_route" does not exist.', 2, $this->source); })()), "oro_entity_pagination_first")) : ("oro_entity_pagination_first"));
        // line 3
        $context["previous_route"] = ((array_key_exists("previous_route", $context)) ? (_twig_default_filter((isset($context["previous_route"]) || array_key_exists("previous_route", $context) ? $context["previous_route"] : (function () { throw new RuntimeError('Variable "previous_route" does not exist.', 3, $this->source); })()), "oro_entity_pagination_previous")) : ("oro_entity_pagination_previous"));
        // line 4
        $context["next_route"] = ((array_key_exists("next_route", $context)) ? (_twig_default_filter((isset($context["next_route"]) || array_key_exists("next_route", $context) ? $context["next_route"] : (function () { throw new RuntimeError('Variable "next_route" does not exist.', 4, $this->source); })()), "oro_entity_pagination_next")) : ("oro_entity_pagination_next"));
        // line 5
        $context["last_route"] = ((array_key_exists("last_route", $context)) ? (_twig_default_filter((isset($context["last_route"]) || array_key_exists("last_route", $context) ? $context["last_route"] : (function () { throw new RuntimeError('Variable "last_route" does not exist.', 5, $this->source); })()), "oro_entity_pagination_last")) : ("oro_entity_pagination_last"));
        // line 6
        echo "
";
        // line 7
        if ((array_key_exists("entity", $context) && (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "    ";
            $context["isDataCollected"] = $this->extensions['Oro\Bundle\EntityPaginationBundle\Twig\EntityPaginationExtension']->collectData((isset($context["scope"]) || array_key_exists("scope", $context) ? $context["scope"] : (function () { throw new RuntimeError('Variable "scope" does not exist.', 8, $this->source); })()));
            // line 9
            echo "    ";
            $context["pager"] = $this->extensions['Oro\Bundle\EntityPaginationBundle\Twig\EntityPaginationExtension']->getPager((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), (isset($context["scope"]) || array_key_exists("scope", $context) ? $context["scope"] : (function () { throw new RuntimeError('Variable "scope" does not exist.', 9, $this->source); })()));
            // line 10
            echo "
    ";
            // line 11
            if (((isset($context["isDataCollected"]) || array_key_exists("isDataCollected", $context) ? $context["isDataCollected"] : (function () { throw new RuntimeError('Variable "isDataCollected" does not exist.', 11, $this->source); })()) && (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 11, $this->source); })()))) {
                // line 12
                echo "        ";
                $context["infoMessageShown"] = $this->extensions['Oro\Bundle\EntityPaginationBundle\Twig\EntityPaginationExtension']->showInfoMessage((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), (isset($context["scope"]) || array_key_exists("scope", $context) ? $context["scope"] : (function () { throw new RuntimeError('Variable "scope" does not exist.', 12, $this->source); })()));
                // line 13
                echo "        ";
                $context["currentRoute"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "attributes", [], "any", false, false, false, 13), "get", [0 => "_route"], "method", false, false, false, 13);
                // line 14
                echo "        ";
                $context["currentParams"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "attributes", [], "any", false, false, false, 14), "get", [0 => "_route_params"], "method", false, false, false, 14);
                // line 15
                echo "        ";
                $context["queryParams"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "query", [], "any", false, false, false, 15), "all", [], "any", false, false, false, 15);
                // line 16
                echo "        ";
                $context["allParams"] = ["_entityName" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), true), "_scope" => (isset($context["scope"]) || array_key_exists("scope", $context) ? $context["scope"] : (function () { throw new RuntimeError('Variable "scope" does not exist.', 16, $this->source); })()), "_routeName" => (isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 16, $this->source); })())];
                // line 17
                echo "        ";
                $context["allParams"] = twig_array_merge((isset($context["allParams"]) || array_key_exists("allParams", $context) ? $context["allParams"] : (function () { throw new RuntimeError('Variable "allParams" does not exist.', 17, $this->source); })()), (isset($context["currentParams"]) || array_key_exists("currentParams", $context) ? $context["currentParams"] : (function () { throw new RuntimeError('Variable "currentParams" does not exist.', 17, $this->source); })()));
                // line 18
                echo "        ";
                $context["allParams"] = twig_array_merge((isset($context["allParams"]) || array_key_exists("allParams", $context) ? $context["allParams"] : (function () { throw new RuntimeError('Variable "allParams" does not exist.', 18, $this->source); })()), (isset($context["queryParams"]) || array_key_exists("queryParams", $context) ? $context["queryParams"] : (function () { throw new RuntimeError('Variable "queryParams" does not exist.', 18, $this->source); })()));
                // line 19
                echo "
        ";
                // line 20
                $context["componentName"] = "oroui/js/app/components/hidden-redirect-component";
                // line 21
                echo "        ";
                $context["componentOptions"] = ["type" => "warning"];
                // line 22
                echo "        
        <div id=\"entity-pagination\" class=\"entity-pagination\" ";
                // line 23
                if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
                    // line 24
                    echo "            ";
                    echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroui/js/app/views/sticky-element/sticky-element-view", "options" => ["stickyOptions" => ["enabled" => true, "relativeTo" => "body"]]]], 24, $context, $this->getSourceContext());
                    // line 32
                    echo "
        ";
                }
                // line 33
                echo ">
            <ul class=\"pagination pagination--mini\">
                <li class=\"page-item";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 35, $this->source); })()), "current", [], "any", false, false, false, 35) == 1)) {
                    echo " disabled";
                }
                echo "\">
                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["first_route"]) || array_key_exists("first_route", $context) ? $context["first_route"] : (function () { throw new RuntimeError('Variable "first_route" does not exist.', 36, $this->source); })()), (isset($context["allParams"]) || array_key_exists("allParams", $context) ? $context["allParams"] : (function () { throw new RuntimeError('Variable "allParams" does not exist.', 36, $this->source); })())), "html", null, true);
                echo "\"
                       class=\"page-link\" 
                       data-page-component-module=\"";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["componentName"]) || array_key_exists("componentName", $context) ? $context["componentName"] : (function () { throw new RuntimeError('Variable "componentName" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "\"
                       data-page-component-options=\"";
                // line 39
                echo twig_escape_filter($this->env, json_encode((isset($context["componentOptions"]) || array_key_exists("componentOptions", $context) ? $context["componentOptions"] : (function () { throw new RuntimeError('Variable "componentOptions" does not exist.', 39, $this->source); })())), "html", null, true);
                echo "\">
                        ";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_pagination.first"), "html", null, true);
                echo "
                    </a>
                </li>
                <li class=\"page-item";
                // line 43
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 43, $this->source); })()), "current", [], "any", false, false, false, 43) == 1)) {
                    echo " disabled";
                }
                echo "\">
                    <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["previous_route"]) || array_key_exists("previous_route", $context) ? $context["previous_route"] : (function () { throw new RuntimeError('Variable "previous_route" does not exist.', 44, $this->source); })()), (isset($context["allParams"]) || array_key_exists("allParams", $context) ? $context["allParams"] : (function () { throw new RuntimeError('Variable "allParams" does not exist.', 44, $this->source); })())), "html", null, true);
                echo "\"
                       class=\"page-link\"
                       data-page-component-module=\"";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["componentName"]) || array_key_exists("componentName", $context) ? $context["componentName"] : (function () { throw new RuntimeError('Variable "componentName" does not exist.', 46, $this->source); })()), "html", null, true);
                echo "\"
                       data-page-component-options=\"";
                // line 47
                echo twig_escape_filter($this->env, json_encode((isset($context["componentOptions"]) || array_key_exists("componentOptions", $context) ? $context["componentOptions"] : (function () { throw new RuntimeError('Variable "componentOptions" does not exist.', 47, $this->source); })())), "html", null, true);
                echo "\">
                        <i class=\"fa-chevron-left hide-text\"></i>
                    </a>
                </li>
                <li class=\"page-item\">
                    <div class=\"page-current\">";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 52, $this->source); })()), "current", [], "any", false, false, false, 52), "html", null, true);
                echo "</div>
                </li>
                <li class=\"page-item";
                // line 54
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 54, $this->source); })()), "current", [], "any", false, false, false, 54) == twig_get_attribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 54, $this->source); })()), "total", [], "any", false, false, false, 54))) {
                    echo " disabled";
                }
                echo "\">
                    <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["next_route"]) || array_key_exists("next_route", $context) ? $context["next_route"] : (function () { throw new RuntimeError('Variable "next_route" does not exist.', 55, $this->source); })()), (isset($context["allParams"]) || array_key_exists("allParams", $context) ? $context["allParams"] : (function () { throw new RuntimeError('Variable "allParams" does not exist.', 55, $this->source); })())), "html", null, true);
                echo "\"
                       class=\"page-link\"
                       data-page-component-module=\"";
                // line 57
                echo twig_escape_filter($this->env, (isset($context["componentName"]) || array_key_exists("componentName", $context) ? $context["componentName"] : (function () { throw new RuntimeError('Variable "componentName" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "\"
                       data-page-component-options=\"";
                // line 58
                echo twig_escape_filter($this->env, json_encode((isset($context["componentOptions"]) || array_key_exists("componentOptions", $context) ? $context["componentOptions"] : (function () { throw new RuntimeError('Variable "componentOptions" does not exist.', 58, $this->source); })())), "html", null, true);
                echo "\">
                        <i class=\"fa-chevron-right hide-text\"></i>
                    </a>
                </li>
                <li class=\"page-item";
                // line 62
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 62, $this->source); })()), "current", [], "any", false, false, false, 62) == twig_get_attribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 62, $this->source); })()), "total", [], "any", false, false, false, 62))) {
                    echo " disabled";
                }
                echo "\">
                    <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["last_route"]) || array_key_exists("last_route", $context) ? $context["last_route"] : (function () { throw new RuntimeError('Variable "last_route" does not exist.', 63, $this->source); })()), (isset($context["allParams"]) || array_key_exists("allParams", $context) ? $context["allParams"] : (function () { throw new RuntimeError('Variable "allParams" does not exist.', 63, $this->source); })())), "html", null, true);
                echo "\"
                       class=\"page-link\"
                       data-page-component-module=\"";
                // line 65
                echo twig_escape_filter($this->env, (isset($context["componentName"]) || array_key_exists("componentName", $context) ? $context["componentName"] : (function () { throw new RuntimeError('Variable "componentName" does not exist.', 65, $this->source); })()), "html", null, true);
                echo "\"
                       data-page-component-options=\"";
                // line 66
                echo twig_escape_filter($this->env, json_encode((isset($context["componentOptions"]) || array_key_exists("componentOptions", $context) ? $context["componentOptions"] : (function () { throw new RuntimeError('Variable "componentOptions" does not exist.', 66, $this->source); })())), "html", null, true);
                echo "\">
                        ";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_pagination.last"), "html", null, true);
                echo "
                    </a>
                </li>
            </ul>

            <div class=\"entity-pagination_total\">
                ";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_pagination.pager_of_%count%_record|pager_of_%count%_records", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 73, $this->source); })()), "total", [], "any", false, false, false, 73)]), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEntityPagination/Placeholder/entityPagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 73,  211 => 67,  207 => 66,  203 => 65,  198 => 63,  192 => 62,  185 => 58,  181 => 57,  176 => 55,  170 => 54,  165 => 52,  157 => 47,  153 => 46,  148 => 44,  142 => 43,  136 => 40,  132 => 39,  128 => 38,  123 => 36,  117 => 35,  113 => 33,  109 => 32,  106 => 24,  104 => 23,  101 => 22,  98 => 21,  96 => 20,  93 => 19,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  59 => 7,  56 => 6,  54 => 5,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% set first_route = first_route|default('oro_entity_pagination_first') %}
{% set previous_route = previous_route|default('oro_entity_pagination_previous') %}
{% set next_route = next_route|default('oro_entity_pagination_next') %}
{% set last_route = last_route|default('oro_entity_pagination_last') %}

{% if entity is defined and entity %}
    {% set isDataCollected = oro_entity_pagination_collect_data(scope) %}
    {% set pager = oro_entity_pagination_pager(entity, scope) %}

    {% if isDataCollected and pager %}
        {% set infoMessageShown = oro_entity_pagination_show_info_message(entity, scope) %}
        {% set currentRoute = app.request.attributes.get('_route') %}
        {% set currentParams = app.request.attributes.get('_route_params') %}
        {% set queryParams = app.request.query.all %}
        {% set allParams = {'_entityName': oro_class_name(entity, true), '_scope': scope, '_routeName': currentRoute} %}
        {% set allParams = allParams|merge(currentParams) %}
        {% set allParams = allParams|merge(queryParams) %}

        {% set componentName = 'oroui/js/app/components/hidden-redirect-component' %}
        {% set componentOptions = {type: 'warning'} %}
        
        <div id=\"entity-pagination\" class=\"entity-pagination\" {% if isMobileVersion() %}
            {{ UI.renderPageComponentAttributes({
                view: 'oroui/js/app/views/sticky-element/sticky-element-view',
                options: {
                    stickyOptions: {
                        enabled: true,
                        relativeTo: 'body'
                    }
                }
            }) }}
        {% endif %}>
            <ul class=\"pagination pagination--mini\">
                <li class=\"page-item{% if pager.current == 1 %} disabled{% endif %}\">
                    <a href=\"{{ path(first_route, allParams) }}\"
                       class=\"page-link\" 
                       data-page-component-module=\"{{ componentName }}\"
                       data-page-component-options=\"{{ componentOptions|json_encode }}\">
                        {{ 'oro.entity_pagination.first'|trans }}
                    </a>
                </li>
                <li class=\"page-item{% if pager.current == 1 %} disabled{% endif %}\">
                    <a href=\"{{ path(previous_route, allParams) }}\"
                       class=\"page-link\"
                       data-page-component-module=\"{{ componentName }}\"
                       data-page-component-options=\"{{ componentOptions|json_encode }}\">
                        <i class=\"fa-chevron-left hide-text\"></i>
                    </a>
                </li>
                <li class=\"page-item\">
                    <div class=\"page-current\">{{ pager.current }}</div>
                </li>
                <li class=\"page-item{% if pager.current == pager.total %} disabled{% endif %}\">
                    <a href=\"{{ path(next_route, allParams) }}\"
                       class=\"page-link\"
                       data-page-component-module=\"{{ componentName }}\"
                       data-page-component-options=\"{{ componentOptions|json_encode }}\">
                        <i class=\"fa-chevron-right hide-text\"></i>
                    </a>
                </li>
                <li class=\"page-item{% if pager.current == pager.total %} disabled{% endif %}\">
                    <a href=\"{{ path(last_route, allParams) }}\"
                       class=\"page-link\"
                       data-page-component-module=\"{{ componentName }}\"
                       data-page-component-options=\"{{ componentOptions|json_encode }}\">
                        {{ 'oro.entity_pagination.last'|trans }}
                    </a>
                </li>
            </ul>

            <div class=\"entity-pagination_total\">
                {{ 'oro.entity_pagination.pager_of_%count%_record|pager_of_%count%_records'|trans({'%count%': pager.total}) }}
            </div>
        </div>
    {% endif %}
{% endif %}
", "@OroEntityPagination/Placeholder/entityPagination.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityPaginationBundle/Resources/views/Placeholder/entityPagination.html.twig");
    }
}
