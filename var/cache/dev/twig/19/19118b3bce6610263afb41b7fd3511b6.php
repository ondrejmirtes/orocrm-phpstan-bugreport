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

/* @OroMarketingActivity/MarketingActivity/widget/marketingActivitiesSection.html.twig */
class __TwigTemplate_f5b9df84cb679b64946ee8e91471d199 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
            'widget_actions' => [$this, 'block_widget_actions'],
            'items_container' => [$this, 'block_items_container'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroMarketingActivity/MarketingActivity/widget/marketingActivitiesSection.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMarketingActivity/MarketingActivity/widget/marketingActivitiesSection.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMarketingActivity/MarketingActivity/widget/marketingActivitiesSection.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroMarketingActivity/MarketingActivity/widget/marketingActivitiesSection.html.twig", 1)->unwrap();
        // line 2
        $context["containerExtraClass"] = ((array_key_exists("containerExtraClass", $context)) ? ((isset($context["containerExtraClass"]) || array_key_exists("containerExtraClass", $context) ? $context["containerExtraClass"] : (function () { throw new RuntimeError('Variable "containerExtraClass" does not exist.', 2, $this->source); })())) : (""));
        // line 3
        echo "<div class=\"widget-content activity-list marketing-activities ";
        echo twig_escape_filter($this->env, (isset($context["containerExtraClass"]) || array_key_exists("containerExtraClass", $context) ? $context["containerExtraClass"] : (function () { throw new RuntimeError('Variable "containerExtraClass" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 4
        $context["pager"] = ["current" => 1, "pagesize" => $this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_activity_list.per_page"), "total" => 1, "count" => 1, "sortingField" => "eventDate"];
        // line 11
        echo "    ";
        $context["configuration"] = [        // line 12
(isset($context["configurationKey"]) || array_key_exists("configurationKey", $context) ? $context["configurationKey"] : (function () { throw new RuntimeError('Variable "configurationKey" does not exist.', 12, $this->source); })()) => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.entity_label"), "template" => "@OroMarketingActivity/MarketingActivity/js/marketingActivitySectionItem.html.twig", "has_comments" => false, "routes" => ["itemView" => "oro_marketing_activity_widget_marketing_activities_info"]]];
        // line 21
        echo "    ";
        $this->displayBlock('widget_content', $context, $blocks);
        // line 101
        echo "</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widget_content", $this->getTemplateName(), 21));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_content"));

        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('widget_actions', $context, $blocks);
        // line 57
        echo "        ";
        $this->displayBlock('items_container', $context, $blocks);
        // line 99
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 23
    public function block_widget_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widget_actions", $this->getTemplateName(), 23));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_actions"));

        // line 24
        echo "        <div class=\"grid-toolbar\">
            <div class=\"filter-box\">
                <div class=\"filter-container\"></div>
            </div>
            <div class=\"pagination\" role=\"navigation\">
                <button class=\"btn pagination-previous\"
                        data-section=\"top\"
                        data-action-name=\"goto_previous\"
                        title=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activitylist.pagination.newer"), "html", null, true);
        echo "\"
                        ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 33, $this->source); })()), "current", [], "any", false, false, false, 33) == 1)) {
            echo " disabled ";
        }
        // line 34
        echo "                >
                    <span class=\"fa-chevron-left\" aria-hidden=\"true\"></span>
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activitylist.pagination.newer"), "html", null, true);
        echo "
                </button>
                <button class=\"btn icon-end pagination-next\"
                        data-section=\"top\"
                        data-action-name=\"goto_next\"
                        title=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activitylist.pagination.older"), "html", null, true);
        echo "\"
                >
                    ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activitylist.pagination.older"), "html", null, true);
        echo "
                    <span class=\"fa-chevron-right\" aria-hidden=\"true\"></span>
                </button>
            </div>
            <div class=\"actions-panel\">
                ";
        // line 48
        echo twig_call_macro($macros["UI"], "macro_clientLink", [["aCss" => "action btn btn-icon", "iCss" => "fa-refresh", "label" => (" " . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Refresh")), "dataAttributes" => ["action-name" => "refresh", "section" => "top"]]], 48, $context, $this->getSourceContext());
        // line 53
        echo "
            </div>
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 57
    public function block_items_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("items_container", $this->getTemplateName(), 57));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "items_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "items_container"));

        // line 58
        echo "            ";
        $context["options"] = ["widgetId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "get", [0 => "_wid"], "method", false, false, false, 59), "activityListData" => $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_marketing_activity_widget_marketing_activities_list", ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(        // line 63
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source,         // line 64
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)])), "activityListOptions" => ["configuration" =>         // line 68
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 68, $this->source); })()), "template" => "#template-marketing-activities", "itemTemplate" => "#template-marketing-activities-item", "listWidgetSelector" => ".marketing-activities-container .marketing-activities-list-widget", "activityListSelector" => ".marketing-activities", "reloadOnAdd" => false, "reloadOnUpdate" => false, "triggerRefreshEvent" => false, "urls" => ["route" => "oro_marketing_activity_widget_marketing_activities_list", "parameters" => ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(        // line 79
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 79, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source,         // line 80
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]], "loadingContainerSelector" => ".marketing-activities", "pager" =>         // line 84
(isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 84, $this->source); })()), "campaignFilterValues" =>         // line 85
(isset($context["campaignFilterValues"]) || array_key_exists("campaignFilterValues", $context) ? $context["campaignFilterValues"] : (function () { throw new RuntimeError('Variable "campaignFilterValues" does not exist.', 85, $this->source); })()), "routes" => []]];
        // line 89
        echo "
            <div class=\"container-fluid accordion\"
                data-page-component-module=\"oromarketingactivity/js/app/components/marketing-activities-section-component\"
                data-page-component-options=\"";
        // line 92
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 92, $this->source); })())), "html", null, true);
        echo "\"></div>
            ";
        // line 93
        $this->loadTemplate("@OroMarketingActivity/MarketingActivity/js/list.html.twig", "@OroMarketingActivity/MarketingActivity/widget/marketingActivitiesSection.html.twig", 93)->display(twig_array_merge($context, ["id" => "template-marketing-activities"]));
        // line 94
        echo "            ";
        $this->loadTemplate("@OroMarketingActivity/MarketingActivity/js/marketingActivitySectionItem.html.twig", "@OroMarketingActivity/MarketingActivity/widget/marketingActivitiesSection.html.twig", 94)->display(twig_array_merge($context, ["id" => "template-marketing-activities-item"]));
        // line 95
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 95, $this->source); })()));
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
        foreach ($context['_seq'] as $context["activityClass"] => $context["activityOptions"]) {
            // line 96
            echo "                ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["activityOptions"], "template", [], "any", false, false, false, 96), "@OroMarketingActivity/MarketingActivity/widget/marketingActivitiesSection.html.twig", 96)->display(twig_array_merge($context, ["id" => ("template-activity-item-" . $context["activityClass"])]));
            // line 97
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
        unset($context['_seq'], $context['_iterated'], $context['activityClass'], $context['activityOptions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroMarketingActivity/MarketingActivity/widget/marketingActivitiesSection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 98,  249 => 97,  246 => 96,  228 => 95,  225 => 94,  223 => 93,  219 => 92,  214 => 89,  212 => 85,  211 => 84,  210 => 80,  209 => 79,  208 => 68,  207 => 64,  206 => 63,  205 => 59,  203 => 58,  190 => 57,  174 => 53,  172 => 48,  164 => 43,  159 => 41,  151 => 36,  147 => 34,  143 => 33,  139 => 32,  129 => 24,  116 => 23,  102 => 99,  99 => 57,  97 => 23,  94 => 22,  81 => 21,  67 => 101,  64 => 21,  62 => 12,  60 => 11,  58 => 4,  53 => 3,  51 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% set containerExtraClass = containerExtraClass is defined ? containerExtraClass : '' %}
<div class=\"widget-content activity-list marketing-activities {{ containerExtraClass }}\">
    {% set pager = {
        current: 1,
        pagesize: oro_config_value('oro_activity_list.per_page'),
        total: 1,
        count: 1,
        sortingField: 'eventDate'
    } %}
    {% set configuration = {
        (configurationKey): {
            label: 'oro.campaign.entity_label'|trans,
            template: '@OroMarketingActivity/MarketingActivity/js/marketingActivitySectionItem.html.twig',
            has_comments: false,
            routes: {
                itemView: 'oro_marketing_activity_widget_marketing_activities_info',
            }
        }
    } %}
    {% block widget_content %}

        {% block widget_actions %}
        <div class=\"grid-toolbar\">
            <div class=\"filter-box\">
                <div class=\"filter-container\"></div>
            </div>
            <div class=\"pagination\" role=\"navigation\">
                <button class=\"btn pagination-previous\"
                        data-section=\"top\"
                        data-action-name=\"goto_previous\"
                        title=\"{{ 'oro.activitylist.pagination.newer'|trans }}\"
                        {% if pager.current == 1 %} disabled {% endif %}
                >
                    <span class=\"fa-chevron-left\" aria-hidden=\"true\"></span>
                    {{ 'oro.activitylist.pagination.newer'|trans }}
                </button>
                <button class=\"btn icon-end pagination-next\"
                        data-section=\"top\"
                        data-action-name=\"goto_next\"
                        title=\"{{ 'oro.activitylist.pagination.older'|trans }}\"
                >
                    {{ 'oro.activitylist.pagination.older'|trans }}
                    <span class=\"fa-chevron-right\" aria-hidden=\"true\"></span>
                </button>
            </div>
            <div class=\"actions-panel\">
                {{ UI.clientLink({
                    'aCss': 'action btn btn-icon',
                    'iCss': 'fa-refresh',
                    'label': ' ' ~ ('Refresh'|trans),
                    'dataAttributes': {'action-name': 'refresh', 'section': 'top'}
                }) }}
            </div>
        </div>
        {% endblock %}
        {% block items_container %}
            {% set options = {
                widgetId: app.request.get('_wid'),
                activityListData: render(path(
                    'oro_marketing_activity_widget_marketing_activities_list',
                    {
                        entityClass: oro_class_name(entity, true),
                        entityId: entity.id
                    }
                )),
                activityListOptions: {
                    configuration: configuration,
                    template: '#template-marketing-activities',
                    itemTemplate: '#template-marketing-activities-item',
                    listWidgetSelector: '.marketing-activities-container .marketing-activities-list-widget',
                    activityListSelector: '.marketing-activities',
                    reloadOnAdd: false,
                    reloadOnUpdate: false,
                    triggerRefreshEvent: false,
                    urls: {
                        route: 'oro_marketing_activity_widget_marketing_activities_list',
                        parameters: {
                            entityClass: oro_class_name(entity, true),
                            entityId: entity.id
                        }
                    },
                    loadingContainerSelector: '.marketing-activities',
                    pager: pager,
                    campaignFilterValues: campaignFilterValues,
                    routes: {}
                }
            } %}

            <div class=\"container-fluid accordion\"
                data-page-component-module=\"oromarketingactivity/js/app/components/marketing-activities-section-component\"
                data-page-component-options=\"{{ options|json_encode }}\"></div>
            {% include '@OroMarketingActivity/MarketingActivity/js/list.html.twig' with {'id': 'template-marketing-activities'} %}
            {% include '@OroMarketingActivity/MarketingActivity/js/marketingActivitySectionItem.html.twig' with {'id': 'template-marketing-activities-item'} %}
            {% for activityClass, activityOptions in configuration %}
                {% include activityOptions.template with {'id': ('template-activity-item-' ~ activityClass) } %}
            {% endfor %}
        {% endblock %}

    {% endblock %}
</div>
", "@OroMarketingActivity/MarketingActivity/widget/marketingActivitiesSection.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/MarketingActivityBundle/Resources/views/MarketingActivity/widget/marketingActivitiesSection.html.twig");
    }
}
