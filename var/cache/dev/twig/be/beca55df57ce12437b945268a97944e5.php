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

/* @OroSales/B2bCustomer/widget/info.html.twig */
class __TwigTemplate_c52548734c97af2ad6aca05cdb4fc8ce extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSales/B2bCustomer/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/B2bCustomer/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/B2bCustomer/widget/info.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSales/B2bCustomer/widget/info.html.twig", 1)->unwrap();
        // line 2
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroSales/B2bCustomer/widget/info.html.twig", 2)->unwrap();
        // line 3
        $macros["address"] = $this->macros["address"] = $this->loadTemplate("@OroAddress/macros.html.twig", "@OroSales/B2bCustomer/widget/info.html.twig", 3)->unwrap();
        // line 4
        $macros["channel"] = $this->macros["channel"] = $this->loadTemplate("@OroChannel/macros.html.twig", "@OroSales/B2bCustomer/widget/info.html.twig", 4)->unwrap();
        // line 5
        $macros["sales"] = $this->macros["sales"] = $this->loadTemplate("@OroSales/macros.html.twig", "@OroSales/B2bCustomer/widget/info.html.twig", 5)->unwrap();
        // line 6
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 10
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext());
        echo "

            ";
        // line 12
        echo twig_call_macro($macros["channel"], "macro_renderChannelProperty", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "oro.sales.b2bcustomer.data_channel.label"], 12, $context, $this->getSourceContext());
        // line 14
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_account_view") && twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "account", [], "any", false, false, false, 14))) {
            // line 15
            $context["accountView"] = (((("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_account_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "account", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)])) . "\">") . twig_call_macro($macros["UI"], "macro_renderEntityViewLabel", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "account", [], "any", false, false, false, 15), "name", "oro.account.entity_label"], 15, $context, $this->getSourceContext())) . "</a>");
        } else {
            // line 17
            $context["accountView"] = twig_call_macro($macros["UI"], "macro_renderEntityViewLabel", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "account", [], "any", false, false, false, 17), "name"], 17, $context, $this->getSourceContext());
        }
        // line 19
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.account.label"), (isset($context["accountView"]) || array_key_exists("accountView", $context) ? $context["accountView"] : (function () { throw new RuntimeError('Variable "accountView" does not exist.', 19, $this->source); })())], 19, $context, $this->getSourceContext());
        echo "
            ";
        // line 20
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.phones.label"), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "phones", [], "any", false, false, false, 20), "count", [], "any", false, false, false, 20)) ? (twig_call_macro($macros["sales"], "macro_renderCollectionWithPrimaryElement", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "phones", [], "any", false, false, false, 20), false, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })())], 20, $context, $this->getSourceContext())) : (null))], 20, $context, $this->getSourceContext());
        echo "
            ";
        // line 21
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.emails.label"), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "emails", [], "any", false, false, false, 21), "count", [], "any", false, false, false, 21)) ? (twig_call_macro($macros["sales"], "macro_renderCollectionWithPrimaryElement", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "emails", [], "any", false, false, false, 21), true, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })())], 21, $context, $this->getSourceContext())) : (null))], 21, $context, $this->getSourceContext());
        echo "
            ";
        // line 22
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.contact.label"), twig_call_macro($macros["UI"], "macro_entityViewLink", [twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })()), "contact", [], "any", false, false, false, 24), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })()), "contact", [], "any", false, false, false, 24)) ? ($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })()), "contact", [], "any", false, false, false, 24))) : ("")), "oro_contact_view"], 24, $context, $this->getSourceContext())], 22, $context, $this->getSourceContext());
        // line 25
        echo "

            ";
        // line 27
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "billingAddress", [], "any", false, false, false, 27))) {
            // line 28
            echo "                ";
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.billing_address.label"), twig_call_macro($macros["address"], "macro_renderAddress", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "billingAddress", [], "any", false, false, false, 28), true], 28, $context, $this->getSourceContext())], 28, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 30
        echo "
            ";
        // line 31
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 31, $this->source); })()), "shippingAddress", [], "any", false, false, false, 31))) {
            // line 32
            echo "                ";
            echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.shipping_address.label"), twig_call_macro($macros["address"], "macro_renderAddress", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 32, $this->source); })()), "shippingAddress", [], "any", false, false, false, 32), true], 32, $context, $this->getSourceContext())], 32, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 34
        echo "        </div>
        <div class=\"responsive-block\">
            ";
        // line 36
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })())], 36, $context, $this->getSourceContext());
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
        return "@OroSales/B2bCustomer/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 36,  115 => 34,  109 => 32,  107 => 31,  104 => 30,  98 => 28,  96 => 27,  92 => 25,  90 => 24,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  74 => 17,  71 => 15,  69 => 14,  67 => 12,  62 => 10,  56 => 6,  54 => 5,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}
{% import '@OroAddress/macros.html.twig' as address %}
{% import '@OroChannel/macros.html.twig' as channel %}
{% import '@OroSales/macros.html.twig' as sales %}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            {{ UI.renderProperty('oro.sales.b2bcustomer.name.label'|trans, entity.name) }}

            {{ channel.renderChannelProperty(entity, 'oro.sales.b2bcustomer.data_channel.label') }}

            {%- if is_granted('oro_account_view') and entity.account -%}
                {% set accountView = '<a href=\"' ~ path('oro_account_view', {'id': entity.account.id}) ~ '\">' ~ UI.renderEntityViewLabel(entity.account, 'name', 'oro.account.entity_label') ~ '</a>' %}
            {%- else -%}
                {% set accountView = UI.renderEntityViewLabel(entity.account, 'name') %}
            {%- endif -%}
            {{ UI.renderHtmlProperty('oro.sales.b2bcustomer.account.label'|trans, accountView) }}
            {{ UI.renderHtmlProperty('oro.contact.phones.label'|trans, entity.phones.count ? sales.renderCollectionWithPrimaryElement(entity.phones, false, entity) : null) }}
            {{ UI.renderHtmlProperty('oro.contact.emails.label'|trans, entity.emails.count ? sales.renderCollectionWithPrimaryElement(entity.emails, true, entity) : null) }}
            {{ UI.renderHtmlProperty(
                'oro.sales.b2bcustomer.contact.label'|trans,
                UI.entityViewLink(entity.contact, entity.contact ? entity.contact|oro_format_name : '', 'oro_contact_view')
            ) }}

            {% if entity.billingAddress is not empty %}
                {{ UI.renderHtmlProperty('oro.sales.b2bcustomer.billing_address.label'|trans, address.renderAddress(entity.billingAddress, true)) }}
            {% endif %}

            {% if entity.shippingAddress is not empty %}
                {{ UI.renderHtmlProperty('oro.sales.b2bcustomer.shipping_address.label'|trans, address.renderAddress(entity.shippingAddress, true)) }}
            {% endif %}
        </div>
        <div class=\"responsive-block\">
            {{ entityConfig.renderDynamicFields(entity) }}
        </div>
    </div>
</div>
", "@OroSales/B2bCustomer/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/SalesBundle/Resources/views/B2bCustomer/widget/info.html.twig");
    }
}
