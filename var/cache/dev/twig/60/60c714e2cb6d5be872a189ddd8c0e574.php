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

/* @OroSales/B2bCustomer/widget/customerInfo.html.twig */
class __TwigTemplate_64bd9a0b7a43c26d32a28aa241904d1d extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSales/B2bCustomer/widget/customerInfo.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/B2bCustomer/widget/customerInfo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/B2bCustomer/widget/customerInfo.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSales/B2bCustomer/widget/customerInfo.html.twig", 1)->unwrap();
        // line 2
        $macros["address"] = $this->macros["address"] = $this->loadTemplate("@OroAddress/macros.html.twig", "@OroSales/B2bCustomer/widget/customerInfo.html.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 4
        $context["activeTab"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 4), "get", [0 => "_activeTab"], "method", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 4), "get", [0 => "_activeTab"], "method", false, false, false, 4), null)) : (null));
        // line 5
        $context["uniqueSuffix"] = ((("_customer_" . twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)) . "_channel_") . twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5));
        // line 6
        ob_start();
        // line 7
        echo "    <div class=\"row-fluid\">
        <div class=\"responsive-block\">
            ";
        // line 9
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.name.label"), twig_call_macro($macros["UI"], "macro_entityViewLink", [        // line 11
(isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 11, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "oro_sales_b2bcustomer_view"], 11, $context, $this->getSourceContext())], 9, $context, $this->getSourceContext());
        // line 12
        echo "
            ";
        // line 13
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.contact.label"), twig_call_macro($macros["UI"], "macro_entityViewLink", [twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 15, $this->source); })()), "contact", [], "any", false, false, false, 15), $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 15, $this->source); })()), "contact", [], "any", false, false, false, 15)), "oro_contact_view"], 15, $context, $this->getSourceContext())], 13, $context, $this->getSourceContext());
        // line 16
        echo "
        </div>
        <div class=\"responsive-block\">
            ";
        // line 19
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.shipping_address.label"), twig_call_macro($macros["address"], "macro_renderAddress", [twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 19, $this->source); })()), "shippingAddress", [], "any", false, false, false, 19), true], 19, $context, $this->getSourceContext())], 19, $context, $this->getSourceContext());
        echo "
            ";
        // line 20
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.billing_address.label"), twig_call_macro($macros["address"], "macro_renderAddress", [twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 20, $this->source); })()), "billingAddress", [], "any", false, false, false, 20), true], 20, $context, $this->getSourceContext())], 20, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
";
        $context["customer_general_info"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        $context["tabs"] = [0 => ["alias" => ("oro_sales_b2bcustomer_general_info" .         // line 26
(isset($context["uniqueSuffix"]) || array_key_exists("uniqueSuffix", $context) ? $context["uniqueSuffix"] : (function () { throw new RuntimeError('Variable "uniqueSuffix" does not exist.', 26, $this->source); })())), "widgetType" => "block", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.sections.general"), "content" =>         // line 29
(isset($context["customer_general_info"]) || array_key_exists("customer_general_info", $context) ? $context["customer_general_info"] : (function () { throw new RuntimeError('Variable "customer_general_info" does not exist.', 29, $this->source); })()), "url" => null]];
        // line 33
        echo "
";
        // line 34
        $context["tabs"] = twig_array_merge((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 34, $this->source); })()), [0 => ["alias" => ("oro_sales_b2bcustomer_leads" .         // line 36
(isset($context["uniqueSuffix"]) || array_key_exists("uniqueSuffix", $context) ? $context["uniqueSuffix"] : (function () { throw new RuntimeError('Variable "uniqueSuffix" does not exist.', 36, $this->source); })())), "widgetType" => "block", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.leads.label"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_sales_b2bcustomer_widget_leads", ["id" => twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)])]]);
        // line 42
        echo "
";
        // line 43
        $context["tabs"] = twig_array_merge((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 43, $this->source); })()), [0 => ["alias" => ("oro_sales_b2bcustomer_opportunities" .         // line 45
(isset($context["uniqueSuffix"]) || array_key_exists("uniqueSuffix", $context) ? $context["uniqueSuffix"] : (function () { throw new RuntimeError('Variable "uniqueSuffix" does not exist.', 45, $this->source); })())), "widgetType" => "block", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.opportunities.label"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_sales_b2bcustomer_widget_opportunities", ["id" => twig_get_attribute($this->env, $this->source,         // line 48
(isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)])]]);
        // line 51
        echo "
";
        // line 52
        $context["tabPanelOptions"] = ["subTabs" => $this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()];
        // line 55
        if ((isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 55, $this->source); })())) {
            // line 56
            echo "    ";
            $context["tabPanelOptions"] = twig_array_merge((isset($context["tabPanelOptions"]) || array_key_exists("tabPanelOptions", $context) ? $context["tabPanelOptions"] : (function () { throw new RuntimeError('Variable "tabPanelOptions" does not exist.', 56, $this->source); })()), ["activeTabAlias" => (("oro_sales_b2bcustomer_" .             // line 57
(isset($context["activeTab"]) || array_key_exists("activeTab", $context) ? $context["activeTab"] : (function () { throw new RuntimeError('Variable "activeTab" does not exist.', 57, $this->source); })())) . (isset($context["uniqueSuffix"]) || array_key_exists("uniqueSuffix", $context) ? $context["uniqueSuffix"] : (function () { throw new RuntimeError('Variable "uniqueSuffix" does not exist.', 57, $this->source); })()))]);
        }
        // line 60
        echo "
<div class=\"widget-content row-fluid\">
    <div class=\"account-customer-title\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName((isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 62, $this->source); })())), "html", null, true);
        echo "
        <div class=\"pull-right label label-large label-success orocrm-channel-lifetime-value-label\">
            ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.lifetime.label"), "html", null, true);
        echo ":
            <b>";
        // line 65
        echo $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatCurrency($this->extensions['Oro\Bundle\ChannelBundle\Twig\ChannelExtension']->getLifetimeValue(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 65, $this->source); })()), "account", [], "any", false, false, false, 65), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 65, $this->source); })())));
        echo "</b>
        </div>
    </div>
    <div class=\"customer-without-border-tabs\">
        ";
        // line 69
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\TabExtension']->tabPanel($this->env, (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 69, $this->source); })()), (isset($context["tabPanelOptions"]) || array_key_exists("tabPanelOptions", $context) ? $context["tabPanelOptions"] : (function () { throw new RuntimeError('Variable "tabPanelOptions" does not exist.', 69, $this->source); })()));
        echo "
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroSales/B2bCustomer/widget/customerInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 69,  131 => 65,  127 => 64,  122 => 62,  118 => 60,  115 => 57,  113 => 56,  111 => 55,  109 => 52,  106 => 51,  104 => 48,  103 => 45,  102 => 43,  99 => 42,  97 => 39,  96 => 36,  95 => 34,  92 => 33,  90 => 29,  89 => 26,  88 => 24,  81 => 20,  77 => 19,  72 => 16,  70 => 15,  69 => 13,  66 => 12,  64 => 11,  63 => 9,  59 => 7,  57 => 6,  55 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroAddress/macros.html.twig' as address %}

{% set activeTab = app.request.get('_activeTab')|default(null) %}
{% set uniqueSuffix = '_customer_' ~ customer.id ~ '_channel_' ~ channel.id %}
{% set customer_general_info %}
    <div class=\"row-fluid\">
        <div class=\"responsive-block\">
            {{ UI.renderHtmlProperty(
                'oro.sales.b2bcustomer.name.label'|trans,
                UI.entityViewLink(customer, customer.name, 'oro_sales_b2bcustomer_view')
            ) }}
            {{ UI.renderHtmlProperty(
                'oro.sales.lead.contact.label'|trans,
                UI.entityViewLink(customer.contact, customer.contact|oro_format_name, 'oro_contact_view')
            ) }}
        </div>
        <div class=\"responsive-block\">
            {{ UI.renderHtmlProperty('oro.sales.b2bcustomer.shipping_address.label'|trans, address.renderAddress(customer.shippingAddress, true)) }}
            {{ UI.renderHtmlProperty('oro.sales.b2bcustomer.billing_address.label'|trans, address.renderAddress(customer.billingAddress, true)) }}
        </div>
    </div>
{% endset %}
{% set tabs = [
    {
        'alias': 'oro_sales_b2bcustomer_general_info' ~ uniqueSuffix,
        'widgetType': 'block',
        'label': 'oro.sales.sections.general'|trans,
        'content': customer_general_info,
        'url': null
    }
] %}

{% set tabs = tabs|merge([
    {
        'alias': 'oro_sales_b2bcustomer_leads' ~ uniqueSuffix,
        'widgetType': 'block',
        'label': 'oro.sales.b2bcustomer.leads.label'|trans,
        'url': path('oro_sales_b2bcustomer_widget_leads', {'id': customer.id})
    }
]) %}

{% set tabs = tabs|merge([
    {
        'alias': 'oro_sales_b2bcustomer_opportunities' ~ uniqueSuffix,
        'widgetType': 'block',
        'label': 'oro.sales.b2bcustomer.opportunities.label'|trans,
        'url': path('oro_sales_b2bcustomer_widget_opportunities', {'id': customer.id})
    }
]) %}

{% set tabPanelOptions = {
    subTabs: isMobileVersion()
} %}
{% if activeTab %}
    {% set tabPanelOptions = tabPanelOptions|merge({
        activeTabAlias: 'oro_sales_b2bcustomer_' ~ activeTab ~ uniqueSuffix
    }) %}
{% endif %}

<div class=\"widget-content row-fluid\">
    <div class=\"account-customer-title\">{{ customer|oro_format_name }}
        <div class=\"pull-right label label-large label-success orocrm-channel-lifetime-value-label\">
            {{ 'oro.sales.b2bcustomer.lifetime.label'|trans}}:
            <b>{{ oro_channel_account_lifetime(customer.account, channel)|oro_format_currency }}</b>
        </div>
    </div>
    <div class=\"customer-without-border-tabs\">
        {{ tabPanel(tabs, tabPanelOptions) }}
    </div>
</div>
", "@OroSales/B2bCustomer/widget/customerInfo.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/SalesBundle/Resources/views/B2bCustomer/widget/customerInfo.html.twig");
    }
}
