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

/* @OroCampaign/EmailCampaign/widget/view.html.twig */
class __TwigTemplate_4300956630e983a19206d5b7c23337de extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCampaign/EmailCampaign/widget/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCampaign/EmailCampaign/widget/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCampaign/EmailCampaign/widget/view.html.twig"));

        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCampaign/EmailCampaign/widget/view.html.twig", 1)->unwrap();
        // line 2
        $macros["email"] = $this->macros["email"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroCampaign/EmailCampaign/widget/view.html.twig", 2)->unwrap();
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
            ";
        // line 8
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.sender_email.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "senderEmail", [], "any", false, false, false, 8), null, null, ["dir" => "ltr"]], 8, $context, $this->getSourceContext());
        echo "
            ";
        // line 9
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.sender_name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "senderName", [], "any", false, false, false, 9)], 9, $context, $this->getSourceContext());
        echo "
            ";
        // line 10
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.schedule.label"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("oro.campaign.emailcampaign.schedule." . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), "schedule", [], "any", false, false, false, 10)))], 10, $context, $this->getSourceContext());
        echo "

            ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "schedule", [], "any", false, false, false, 12) == twig_constant("Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign::SCHEDULE_DEFERRED"))) {
            // line 13
            echo "                ";
            echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.scheduled_for.label"), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "scheduledFor", [], "any", false, false, false, 13)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "scheduledFor", [], "any", false, false, false, 13))) : (""))], 13, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 15
        echo "
            ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), "sent", [], "any", false, false, false, 16)) {
            // line 17
            echo "                ";
            echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.sent_at.label"), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "sentAt", [], "any", false, false, false, 17)) ? ($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "sentAt", [], "any", false, false, false, 17))) : (""))], 17, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 20
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "campaign", [], "any", false, false, false, 20))) {
            // line 21
            echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.campaign.label"), twig_call_macro($macros["ui"], "macro_entityViewLink", [twig_get_attribute($this->env, $this->source,             // line 23
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })()), "campaign", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })()), "campaign", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "oro_campaign_view"], 23, $context, $this->getSourceContext())], 21, $context, $this->getSourceContext());
        }
        // line 27
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "marketingList", [], "any", false, false, false, 27))) {
            // line 28
            echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.marketing_list.label"), twig_call_macro($macros["ui"], "macro_entityViewLink", [twig_get_attribute($this->env, $this->source,             // line 30
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "marketingList", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "marketingList", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "oro_marketing_list_view"], 30, $context, $this->getSourceContext())], 28, $context, $this->getSourceContext());
        }
        // line 34
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.description.label"), $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34))], 34, $context, $this->getSourceContext());
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
        return "@OroCampaign/EmailCampaign/widget/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 34,  101 => 30,  100 => 28,  98 => 27,  95 => 23,  94 => 21,  92 => 20,  86 => 17,  84 => 16,  81 => 15,  75 => 13,  73 => 12,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as ui %}
{% import '@OroEmail/macros.html.twig' as email %}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            {{ ui.renderProperty('oro.campaign.emailcampaign.name.label'|trans, entity.name) }}
            {{ ui.renderProperty('oro.campaign.emailcampaign.sender_email.label'|trans, entity.senderEmail, null, null, {'dir': 'ltr'}) }}
            {{ ui.renderProperty('oro.campaign.emailcampaign.sender_name.label'|trans, entity.senderName) }}
            {{ ui.renderProperty('oro.campaign.emailcampaign.schedule.label'|trans, ('oro.campaign.emailcampaign.schedule.' ~ entity.schedule)|trans ) }}

            {% if entity.schedule == constant('Oro\\\\Bundle\\\\CampaignBundle\\\\Entity\\\\EmailCampaign::SCHEDULE_DEFERRED') %}
                {{ ui.renderProperty('oro.campaign.emailcampaign.scheduled_for.label'|trans, entity.scheduledFor ? entity.scheduledFor|oro_format_datetime : '') }}
            {% endif %}

            {% if entity.sent %}
                {{ ui.renderProperty('oro.campaign.emailcampaign.sent_at.label'|trans, entity.sentAt ? entity.sentAt|oro_format_datetime : '') }}
            {% endif %}

            {%- if entity.campaign is not empty -%}
                {{ ui.renderHtmlProperty(
                    'oro.campaign.emailcampaign.campaign.label'|trans,
                    ui.entityViewLink(entity.campaign, entity.campaign.name, 'oro_campaign_view')
                ) }}
            {%- endif -%}

            {%- if entity.marketingList is not empty -%}
                {{ ui.renderHtmlProperty(
                    'oro.campaign.emailcampaign.marketing_list.label'|trans,
                    ui.entityViewLink(entity.marketingList,entity.marketingList.name, 'oro_marketing_list_view')
                ) }}
            {%- endif -%}

            {{ ui.renderHtmlProperty('oro.campaign.emailcampaign.description.label'|trans, entity.description|oro_html_sanitize) }}
        </div>
    </div>
</div>
", "@OroCampaign/EmailCampaign/widget/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/CampaignBundle/Resources/views/EmailCampaign/widget/view.html.twig");
    }
}
