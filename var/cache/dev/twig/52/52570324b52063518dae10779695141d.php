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

/* @OroContactUs/ContactRequest/widget/info.html.twig */
class __TwigTemplate_3705af6ca4da227bcfeec91d71df9df3 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroContactUs/ContactRequest/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroContactUs/ContactRequest/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroContactUs/ContactRequest/widget/info.html.twig"));

        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroContactUs/ContactRequest/widget/info.html.twig", 1)->unwrap();
        // line 2
        $macros["email"] = $this->macros["email"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroContactUs/ContactRequest/widget/info.html.twig", 2)->unwrap();
        // line 3
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroContactUs/ContactRequest/widget/info.html.twig", 3)->unwrap();
        // line 4
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 8
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.contactrequest.first_name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "firstName", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
        echo "
            ";
        // line 9
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.contactrequest.last_name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "lastName", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext());
        echo "
            ";
        // line 10
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.contactrequest.organization_name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), "organizationName", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext());
        echo "
            ";
        // line 11
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.contactrequest.preferred_contact_method.label"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "preferredContactMethod", [], "any", false, false, false, 11))], 11, $context, $this->getSourceContext());
        echo "

            ";
        // line 13
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })())], 13, $context, $this->getSourceContext());
        echo "
        </div>

        <div class=\"responsive-block\">
            ";
        // line 17
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.contactrequest.email_address.label"), twig_call_macro($macros["email"], "macro_renderEmailWithActions", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "emailAddress", [], "any", false, false, false, 17), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })())], 17, $context, $this->getSourceContext())], 17, $context, $this->getSourceContext());
        echo "
            ";
        // line 18
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.contactrequest.phone.label"), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "phone", [], "any", false, false, false, 18)) ? (twig_call_macro($macros["ui"], "macro_renderPhoneWithActions", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "phone", [], "any", false, false, false, 18), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })())], 18, $context, $this->getSourceContext())) : (null))], 18, $context, $this->getSourceContext());
        echo "
            ";
        // line 19
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.contactrequest.contact_reason.label"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "contactReason", [], "any", false, false, false, 19))], 19, $context, $this->getSourceContext());
        echo "
            ";
        // line 20
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.contactrequest.comment.label"), twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "comment", [], "any", false, false, false, 20), "html", null, true))], 20, $context, $this->getSourceContext());
        echo "
            ";
        // line 21
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.contactrequest.feedback.label"), twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "feedback", [], "any", false, false, false, 21), "html", null, true))], 21, $context, $this->getSourceContext());
        echo "

            ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })()), "opportunity", [], "any", false, false, false, 23)) {
            // line 24
            echo "                ";
            echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.contactrequest.opportunity.label"), twig_call_macro($macros["ui"], "macro_entityViewLink", [twig_get_attribute($this->env, $this->source,             // line 26
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 26, $this->source); })()), "opportunity", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 26, $this->source); })()), "opportunity", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "oro_sales_opportunity_view"], 26, $context, $this->getSourceContext())], 24, $context, $this->getSourceContext());
            // line 27
            echo "
            ";
        }
        // line 29
        echo "
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "lead", [], "any", false, false, false, 30)) {
            // line 31
            echo "                ";
            echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contactus.contactrequest.lead.label"), twig_call_macro($macros["ui"], "macro_entityViewLink", [twig_get_attribute($this->env, $this->source,             // line 33
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 33, $this->source); })()), "lead", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 33, $this->source); })()), "lead", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "oro_sales_lead_view"], 33, $context, $this->getSourceContext())], 31, $context, $this->getSourceContext());
            // line 34
            echo "
            ";
        }
        // line 36
        echo "        </div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroContactUs/ContactRequest/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 36,  122 => 34,  120 => 33,  118 => 31,  116 => 30,  113 => 29,  109 => 27,  107 => 26,  105 => 24,  103 => 23,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  75 => 13,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as ui %}
{% import '@OroEmail/macros.html.twig' as email %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            {{ ui.renderProperty('oro.contactus.contactrequest.first_name.label'|trans, entity.firstName) }}
            {{ ui.renderProperty('oro.contactus.contactrequest.last_name.label'|trans, entity.lastName) }}
            {{ ui.renderProperty('oro.contactus.contactrequest.organization_name.label'|trans, entity.organizationName) }}
            {{ ui.renderProperty('oro.contactus.contactrequest.preferred_contact_method.label'|trans, entity.preferredContactMethod|trans) }}

            {{ entityConfig.renderDynamicFields(entity) }}
        </div>

        <div class=\"responsive-block\">
            {{ ui.renderHtmlProperty('oro.contactus.contactrequest.email_address.label'|trans, email.renderEmailWithActions(entity.emailAddress, entity)) }}
            {{ ui.renderHtmlProperty('oro.contactus.contactrequest.phone.label'|trans, entity.phone ? ui.renderPhoneWithActions(entity.phone, entity) : null) }}
            {{ ui.renderProperty('oro.contactus.contactrequest.contact_reason.label'|trans, entity.contactReason|trans) }}
            {{ ui.renderHtmlProperty('oro.contactus.contactrequest.comment.label'|trans, entity.comment|nl2br) }}
            {{ ui.renderHtmlProperty('oro.contactus.contactrequest.feedback.label'|trans, entity.feedback|nl2br) }}

            {% if entity.opportunity %}
                {{ ui.renderHtmlProperty(
                    'oro.contactus.contactrequest.opportunity.label'|trans,
                    ui.entityViewLink(entity.opportunity, entity.opportunity.name, 'oro_sales_opportunity_view')
                ) }}
            {% endif %}

            {% if entity.lead %}
                {{ ui.renderHtmlProperty(
                    'oro.contactus.contactrequest.lead.label'|trans,
                    ui.entityViewLink(entity.lead, entity.lead.name, 'oro_sales_lead_view')
                ) }}
            {% endif %}
        </div>
    </div>
</div>
", "@OroContactUs/ContactRequest/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/ContactUsBundle/Resources/views/ContactRequest/widget/info.html.twig");
    }
}
