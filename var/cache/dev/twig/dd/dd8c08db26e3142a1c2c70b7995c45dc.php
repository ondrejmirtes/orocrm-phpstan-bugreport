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

/* @OroSales/Opportunity/widget/info.html.twig */
class __TwigTemplate_d947f42f69594d89449272e9f8ba5cf8 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSales/Opportunity/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/Opportunity/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/Opportunity/widget/info.html.twig"));

        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSales/Opportunity/widget/info.html.twig", 1)->unwrap();
        // line 2
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroSales/Opportunity/widget/info.html.twig", 2)->unwrap();
        // line 3
        $macros["channel"] = $this->macros["channel"] = $this->loadTemplate("@OroChannel/macros.html.twig", "@OroSales/Opportunity/widget/info.html.twig", 3)->unwrap();
        // line 4
        $macros["currency"] = $this->macros["currency"] = $this->loadTemplate("@OroCurrency/macros.html.twig", "@OroSales/Opportunity/widget/info.html.twig", 4)->unwrap();
        // line 5
        $macros["sales"] = $this->macros["sales"] = $this->loadTemplate("@OroSales/macros.html.twig", "@OroSales/Opportunity/widget/info.html.twig", 5)->unwrap();
        // line 6
        $macros["Tag"] = $this->macros["Tag"] = $this->loadTemplate("@OroTag/macros.html.twig", "@OroSales/Opportunity/widget/info.html.twig", 6)->unwrap();
        // line 7
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block border-right\">
            <div class=\"row-fluid\">
                <div class=\"responsive-block\">
                    ";
        // line 13
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "name"], 13, $context, $this->getSourceContext());
        echo "
                    ";
        // line 14
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.status.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "status", [], "any", false, false, false, 14), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "status"], 14, $context, $this->getSourceContext());
        echo "

                    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "dataChannel", [], "array", true, true, false, 16)) {
            // line 17
            echo "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "channel")) {
                // line 18
                echo "                            ";
                echo twig_call_macro($macros["channel"], "macro_renderChannelProperty", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "oro.sales.lead.data_channel.label"], 18, $context, $this->getSourceContext());
                echo "
                        ";
            }
            // line 20
            echo "                    ";
        }
        // line 21
        echo "
                    ";
        // line 22
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.probability.label"), ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 22, $this->source); })()), "probability", [], "any", false, false, false, 22))) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatPercent(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 22, $this->source); })()), "probability", [], "any", false, false, false, 22))) : ("")), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 22, $this->source); })()), "probability"], 22, $context, $this->getSourceContext());
        echo "
                    ";
        // line 23
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.budget_amount.label"), ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })()), "budgetAmount", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23))) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })()), "budgetAmount", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23), ["currency" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })()), "budgetAmount", [], "any", false, false, false, 23), "currency", [], "any", false, false, false, 23)])) : ("")), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })()), "budgetAmount"], 23, $context, $this->getSourceContext());
        echo "
                    ";
        // line 24
        echo twig_call_macro($macros["currency"], "macro_convert_to_base_currency", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })()), "budgetAmount", [], "any", false, false, false, 24), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.budget_base_currency.label"), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })()), "budgetAmount"], 24, $context, $this->getSourceContext());
        echo "

                    ";
        // line 26
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 26, $this->source); })())], 26, $context, $this->getSourceContext());
        echo "
                    ";
        // line 27
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.close_date.label"), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "closeDate", [], "any", false, false, false, 27)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "closeDate", [], "any", false, false, false, 27))) : ("")), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "closeDate"], 27, $context, $this->getSourceContext());
        echo "
                    ";
        // line 28
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.close_revenue.label"), ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "closeRevenue", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28))) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "closeRevenue", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28), ["currency" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "closeRevenue", [], "any", false, false, false, 28), "currency", [], "any", false, false, false, 28)])) : ("")), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "closeRevenue"], 28, $context, $this->getSourceContext());
        echo "
                    ";
        // line 29
        echo twig_call_macro($macros["currency"], "macro_convert_to_base_currency", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })()), "closeRevenue", [], "any", false, false, false, 29), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.budget_base_currency.label"), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })()), "closeRevenue"], 29, $context, $this->getSourceContext());
        echo "
                    ";
        // line 30
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.close_reason.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "closeReason", [], "any", false, false, false, 30), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "closeReason"], 30, $context, $this->getSourceContext());
        echo "
                    ";
        // line 31
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tag.entity_plural_label"), twig_call_macro($macros["Tag"], "macro_renderView", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 31, $this->source); })())], 31, $context, $this->getSourceContext())], 31, $context, $this->getSourceContext());
        echo "
                </div>

                <div class=\"responsive-block\">
                    ";
        // line 35
        echo twig_call_macro($macros["sales"], "macro_render_customer_info", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 35, $this->source); })())], 35, $context, $this->getSourceContext());
        echo "
                    ";
        // line 36
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.contact.label"), twig_call_macro($macros["ui"], "macro_entityViewLink", [twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 38, $this->source); })()), "contact", [], "any", false, false, false, 38), $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 38, $this->source); })()), "contact", [], "any", false, false, false, 38)), "oro_contact_view"], 38, $context, $this->getSourceContext())], 36, $context, $this->getSourceContext());
        // line 39
        echo "

                    ";
        // line 41
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.lead.label"), twig_call_macro($macros["ui"], "macro_entityViewLink", [twig_get_attribute($this->env, $this->source,         // line 43
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 43, $this->source); })()), "lead", [], "any", false, false, false, 43), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 43, $this->source); })()), "lead", [], "any", false, false, false, 43)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 43, $this->source); })()), "lead", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43)) : (null)), "oro_sales_lead_view"], 43, $context, $this->getSourceContext())], 41, $context, $this->getSourceContext());
        // line 44
        echo "
                </div>
            </div>
        </div>
        <div class=\"responsive-block\">
            ";
        // line 49
        echo twig_call_macro($macros["ui"], "macro_renderCollapsibleHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.customer_need.label"), $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "customerNeed", [], "any", false, false, false, 49)), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "customerNeed"], 49, $context, $this->getSourceContext());
        echo "
            ";
        // line 50
        echo twig_call_macro($macros["ui"], "macro_renderCollapsibleHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.proposed_solution.label"), $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 50, $this->source); })()), "proposedSolution", [], "any", false, false, false, 50)), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 50, $this->source); })()), "proposedSolution"], 50, $context, $this->getSourceContext());
        echo "
            ";
        // line 51
        echo twig_call_macro($macros["ui"], "macro_renderCollapsibleHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.notes.label"), $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 51, $this->source); })()), "notes", [], "any", false, false, false, 51)), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 51, $this->source); })()), "notes"], 51, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroSales/Opportunity/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 51,  157 => 50,  153 => 49,  146 => 44,  144 => 43,  143 => 41,  139 => 39,  137 => 38,  136 => 36,  132 => 35,  125 => 31,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  100 => 24,  96 => 23,  92 => 22,  89 => 21,  86 => 20,  80 => 18,  77 => 17,  75 => 16,  70 => 14,  66 => 13,  58 => 7,  56 => 6,  54 => 5,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as ui %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}
{% import '@OroChannel/macros.html.twig' as channel %}
{% import '@OroCurrency/macros.html.twig' as currency %}
{% import '@OroSales/macros.html.twig' as sales %}
{% import '@OroTag/macros.html.twig' as Tag %}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block border-right\">
            <div class=\"row-fluid\">
                <div class=\"responsive-block\">
                    {{ ui.renderProperty('oro.sales.opportunity.name.label'|trans, entity.name, entity, 'name') }}
                    {{ ui.renderProperty('oro.sales.opportunity.status.label'|trans, entity.status, entity, 'status') }}

                    {% if entity['dataChannel'] is defined %}
                        {% if is_granted('VIEW', entity, 'channel') %}
                            {{ channel.renderChannelProperty(entity, 'oro.sales.lead.data_channel.label') }}
                        {% endif %}
                    {% endif %}

                    {{ ui.renderProperty('oro.sales.opportunity.probability.label'|trans, entity.probability|length ? entity.probability|oro_format_percent : '', entity, 'probability') }}
                    {{ ui.renderProperty('oro.sales.opportunity.budget_amount.label'|trans, entity.budgetAmount.value|length ? entity.budgetAmount.value|oro_format_currency({'currency': entity.budgetAmount.currency}) : '', entity, 'budgetAmount') }}
                    {{ currency.convert_to_base_currency(entity.budgetAmount, 'oro.sales.opportunity.budget_base_currency.label'|trans, entity, 'budgetAmount') }}

                    {{ entityConfig.renderDynamicFields(entity) }}
                    {{ ui.renderProperty('oro.sales.opportunity.close_date.label'|trans, entity.closeDate ? entity.closeDate|oro_format_date : '', entity, 'closeDate') }}
                    {{ ui.renderProperty('oro.sales.opportunity.close_revenue.label'|trans, entity.closeRevenue.value|length ? entity.closeRevenue.value|oro_format_currency({'currency': entity.closeRevenue.currency}) : '', entity, 'closeRevenue') }}
                    {{ currency.convert_to_base_currency(entity.closeRevenue, 'oro.sales.opportunity.budget_base_currency.label'|trans, entity, 'closeRevenue') }}
                    {{ ui.renderProperty('oro.sales.opportunity.close_reason.label'|trans, entity.closeReason, entity, 'closeReason') }}
                    {{ ui.renderHtmlProperty('oro.tag.entity_plural_label'|trans, Tag.renderView(entity)) }}
                </div>

                <div class=\"responsive-block\">
                    {{ sales.render_customer_info(entity) }}
                    {{ ui.renderHtmlProperty(
                        'oro.sales.opportunity.contact.label'|trans,
                        ui.entityViewLink(entity.contact, entity.contact|oro_format_name, 'oro_contact_view')
                    ) }}

                    {{ ui.renderHtmlProperty(
                        'oro.sales.opportunity.lead.label'|trans,
                        ui.entityViewLink(entity.lead, entity.lead ? entity.lead.name : null, 'oro_sales_lead_view')
                    ) }}
                </div>
            </div>
        </div>
        <div class=\"responsive-block\">
            {{ ui.renderCollapsibleHtmlProperty('oro.sales.opportunity.customer_need.label'|trans, entity.customerNeed|oro_html_sanitize, entity, 'customerNeed') }}
            {{ ui.renderCollapsibleHtmlProperty('oro.sales.opportunity.proposed_solution.label'|trans, entity.proposedSolution|oro_html_sanitize, entity, 'proposedSolution') }}
            {{ ui.renderCollapsibleHtmlProperty('oro.sales.opportunity.notes.label'|trans, entity.notes|oro_html_sanitize, entity, 'notes') }}
        </div>
    </div>
</div>
", "@OroSales/Opportunity/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/SalesBundle/Resources/views/Opportunity/widget/info.html.twig");
    }
}
