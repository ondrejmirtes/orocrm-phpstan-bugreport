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

/* @OroDotmailer/Dotmailer/emailCampaignStats.html.twig */
class __TwigTemplate_a93899ab9b74300fa4c3179f4b81679d extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDotmailer/Dotmailer/emailCampaignStats.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDotmailer/Dotmailer/emailCampaignStats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDotmailer/Dotmailer/emailCampaignStats.html.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    ";
            $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroDotmailer/macros.html.twig", "@OroDotmailer/Dotmailer/emailCampaignStats.html.twig", 2)->unwrap();
            // line 3
            echo "
    <div class=\"row-fluid\">
        <h5 class=\"user-fieldset\">
            <span>";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.emailcampaign.statistics.label"), "html", null, true);
            echo "</span>
        </h5>
    </div>

    <div class=\"row-fluid row-fluid-divider form-horizontal\">
        <div class=\"responsive-cell\">
            <div class=\"responsive-block\">
                <strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.emailcampaign.positive.label"), "html", null, true);
            echo "</strong>

                ";
            // line 15
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.emailsSent.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source,             // line 17
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 17, $this->source); })()), "numTotalSent", [], "any", false, false, false, 17)), "oro.dotmailer.emailcampaign.emailsSent.tooltip"], 15, $context, $this->getSourceContext());
            // line 19
            echo "

                ";
            // line 21
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.totalDelivered.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source,             // line 23
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 23, $this->source); })()), "numTotalDelivered", [], "any", false, false, false, 23)), "oro.dotmailer.emailcampaign.totalDelivered.tooltip"], 21, $context, $this->getSourceContext());
            // line 25
            echo "
                ";
            // line 26
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.percentageDelivered.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatPercent(twig_get_attribute($this->env, $this->source,             // line 28
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 28, $this->source); })()), "percentageDelivered", [], "any", false, false, false, 28)), "oro.dotmailer.emailcampaign.percentageDelivered.tooltip"], 26, $context, $this->getSourceContext());
            // line 30
            echo "

                <h5>";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.emailcampaign.engagement.label"), "html", null, true);
            echo "</h5>
                ";
            // line 33
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.opens.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source,             // line 35
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 35, $this->source); })()), "numTotalOpens", [], "any", false, false, false, 35)), "oro.dotmailer.emailcampaign.opens.tooltip"], 33, $context, $this->getSourceContext());
            // line 37
            echo "
                ";
            // line 38
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.unique_opens.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source,             // line 40
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 40, $this->source); })()), "numTotalUniqueOpens", [], "any", false, false, false, 40)), "oro.dotmailer.emailcampaign.unique_opens.tooltip"], 38, $context, $this->getSourceContext());
            // line 42
            echo "
                ";
            // line 43
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.percentageUniqueOpens.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatPercent(twig_get_attribute($this->env, $this->source,             // line 45
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 45, $this->source); })()), "percentageUniqueOpens", [], "any", false, false, false, 45)), "oro.dotmailer.emailcampaign.percentageUniqueOpens.tooltip"], 43, $context, $this->getSourceContext());
            // line 47
            echo "
                ";
            // line 48
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.estimatedForwards.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source,             // line 50
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 50, $this->source); })()), "numTotalEstimatedForwards", [], "any", false, false, false, 50)), "oro.dotmailer.emailcampaign.estimatedForwards.tooltip"], 48, $context, $this->getSourceContext());
            // line 52
            echo "

                <h5>";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.emailcampaign.interaction.label"), "html", null, true);
            echo "</h5>
                ";
            // line 55
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.user_clicks.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source,             // line 57
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 57, $this->source); })()), "numRecipientsClicked", [], "any", false, false, false, 57)), "oro.dotmailer.emailcampaign.user_clicks.tooltip"], 55, $context, $this->getSourceContext());
            // line 59
            echo "
                ";
            // line 60
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.user_clicks_percentage.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatPercent(twig_get_attribute($this->env, $this->source,             // line 62
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 62, $this->source); })()), "percentageUsersClicked", [], "any", false, false, false, 62)), "oro.dotmailer.emailcampaign.user_clicks_percentage.tooltip"], 60, $context, $this->getSourceContext());
            // line 64
            echo "
                ";
            // line 65
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.clicks.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source,             // line 67
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 67, $this->source); })()), "numTotalClicks", [], "any", false, false, false, 67)), "oro.dotmailer.emailcampaign.clicks.tooltip"], 65, $context, $this->getSourceContext());
            // line 69
            echo "
                ";
            // line 70
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.click_to_open.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatPercent(twig_get_attribute($this->env, $this->source,             // line 72
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 72, $this->source); })()), "percentageClicksToOpens", [], "any", false, false, false, 72)), "oro.dotmailer.emailcampaign.click_to_open.tooltip"], 70, $context, $this->getSourceContext());
            // line 74
            echo "
                ";
            // line 75
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.page_views.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatPercent(twig_get_attribute($this->env, $this->source,             // line 77
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 77, $this->source); })()), "numTotalPageViews", [], "any", false, false, false, 77)), "oro.dotmailer.emailcampaign.page_views.tooltip"], 75, $context, $this->getSourceContext());
            // line 79
            echo "
                ";
            // line 80
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.total_replies.label", twig_get_attribute($this->env, $this->source,             // line 82
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 82, $this->source); })()), "numTotalReplies", [], "any", false, false, false, 82), "oro.dotmailer.emailcampaign.total_replies.tooltip"], 80, $context, $this->getSourceContext());
            // line 84
            echo "
                ";
            // line 85
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.replies_percentage.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatPercent(twig_get_attribute($this->env, $this->source,             // line 87
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 87, $this->source); })()), "percentageReplies", [], "any", false, false, false, 87)), "oro.dotmailer.emailcampaign.replies_percentage.tooltip"], 85, $context, $this->getSourceContext());
            // line 89
            echo "

                ";
            // line 91
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.forwards.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source,             // line 93
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 93, $this->source); })()), "numForwards", [], "any", false, false, false, 93)), "oro.dotmailer.emailcampaign.forwards.tooltip"], 91, $context, $this->getSourceContext());
            // line 95
            echo "
            </div>
        </div>

        <div class=\"responsive-cell\">
            <div class=\"responsive-block\">
                <strong>";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.emailcampaign.negative.label"), "html", null, true);
            echo "</strong>

                ";
            // line 103
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.hardBounces.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source,             // line 105
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 105, $this->source); })()), "numTotalHardBounces", [], "any", false, false, false, 105)), "oro.dotmailer.emailcampaign.hardBounces.tooltip"], 103, $context, $this->getSourceContext());
            // line 107
            echo "
                ";
            // line 108
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.hardBouncesPercentage.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatPercent(twig_get_attribute($this->env, $this->source,             // line 110
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 110, $this->source); })()), "percentageHardBounces", [], "any", false, false, false, 110)), "oro.dotmailer.emailcampaign.hardBouncesPercentage.tooltip"], 108, $context, $this->getSourceContext());
            // line 112
            echo "

                ";
            // line 114
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.softBounces.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source,             // line 116
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 116, $this->source); })()), "numTotalSoftBounces", [], "any", false, false, false, 116)), "oro.dotmailer.emailcampaign.softBounces.tooltip"], 114, $context, $this->getSourceContext());
            // line 118
            echo "
                ";
            // line 119
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.softBouncesPercentage.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatPercent(twig_get_attribute($this->env, $this->source,             // line 121
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 121, $this->source); })()), "percentageSoftBounces", [], "any", false, false, false, 121)), "oro.dotmailer.emailcampaign.softBouncesPercentage.tooltip"], 119, $context, $this->getSourceContext());
            // line 123
            echo "

                ";
            // line 125
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.unsubscribes.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source,             // line 127
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 127, $this->source); })()), "numTotalUnsubscribes", [], "any", false, false, false, 127)), "oro.dotmailer.emailcampaign.unsubscribes.tooltip"], 125, $context, $this->getSourceContext());
            // line 129
            echo "
                ";
            // line 130
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.unsubscribesPercentage.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatPercent(twig_get_attribute($this->env, $this->source,             // line 132
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 132, $this->source); })()), "percentageUnsubscribes", [], "any", false, false, false, 132)), "oro.dotmailer.emailcampaign.unsubscribesPercentage.tooltip"], 130, $context, $this->getSourceContext());
            // line 134
            echo "

                ";
            // line 136
            echo twig_call_macro($macros["ui"], "macro_renderAttributeWithTooltip", ["oro.dotmailer.emailcampaign.isp_complaints.label", $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source,             // line 138
(isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 138, $this->source); })()), "numTotalIspComplaints", [], "any", false, false, false, 138)), "oro.dotmailer.emailcampaign.isp_complaints.tooltip"], 136, $context, $this->getSourceContext());
            // line 140
            echo "
            </div>
        </div>
    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroDotmailer/Dotmailer/emailCampaignStats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 140,  223 => 138,  222 => 136,  218 => 134,  216 => 132,  215 => 130,  212 => 129,  210 => 127,  209 => 125,  205 => 123,  203 => 121,  202 => 119,  199 => 118,  197 => 116,  196 => 114,  192 => 112,  190 => 110,  189 => 108,  186 => 107,  184 => 105,  183 => 103,  178 => 101,  170 => 95,  168 => 93,  167 => 91,  163 => 89,  161 => 87,  160 => 85,  157 => 84,  155 => 82,  154 => 80,  151 => 79,  149 => 77,  148 => 75,  145 => 74,  143 => 72,  142 => 70,  139 => 69,  137 => 67,  136 => 65,  133 => 64,  131 => 62,  130 => 60,  127 => 59,  125 => 57,  124 => 55,  120 => 54,  116 => 52,  114 => 50,  113 => 48,  110 => 47,  108 => 45,  107 => 43,  104 => 42,  102 => 40,  101 => 38,  98 => 37,  96 => 35,  95 => 33,  91 => 32,  87 => 30,  85 => 28,  84 => 26,  81 => 25,  79 => 23,  78 => 21,  74 => 19,  72 => 17,  71 => 15,  66 => 13,  56 => 6,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if campaignStats is not empty %}
    {% import '@OroDotmailer/macros.html.twig' as ui %}

    <div class=\"row-fluid\">
        <h5 class=\"user-fieldset\">
            <span>{{ 'oro.dotmailer.emailcampaign.statistics.label'|trans }}</span>
        </h5>
    </div>

    <div class=\"row-fluid row-fluid-divider form-horizontal\">
        <div class=\"responsive-cell\">
            <div class=\"responsive-block\">
                <strong>{{ 'oro.dotmailer.emailcampaign.positive.label'|trans }}</strong>

                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.emailsSent.label',
                    campaignStats.numTotalSent|oro_format_decimal,
                    'oro.dotmailer.emailcampaign.emailsSent.tooltip'
                ) }}

                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.totalDelivered.label',
                    campaignStats.numTotalDelivered|oro_format_decimal,
                    'oro.dotmailer.emailcampaign.totalDelivered.tooltip'
                ) }}
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.percentageDelivered.label',
                    campaignStats.percentageDelivered|oro_format_percent,
                    'oro.dotmailer.emailcampaign.percentageDelivered.tooltip'
                ) }}

                <h5>{{ 'oro.dotmailer.emailcampaign.engagement.label'|trans }}</h5>
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.opens.label',
                    campaignStats.numTotalOpens|oro_format_decimal,
                    'oro.dotmailer.emailcampaign.opens.tooltip')
                }}
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.unique_opens.label',
                    campaignStats.numTotalUniqueOpens|oro_format_decimal,
                    'oro.dotmailer.emailcampaign.unique_opens.tooltip')
                }}
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.percentageUniqueOpens.label',
                    campaignStats.percentageUniqueOpens|oro_format_percent,
                    'oro.dotmailer.emailcampaign.percentageUniqueOpens.tooltip')
                }}
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.estimatedForwards.label',
                    campaignStats.numTotalEstimatedForwards|oro_format_decimal,
                    'oro.dotmailer.emailcampaign.estimatedForwards.tooltip')
                }}

                <h5>{{ 'oro.dotmailer.emailcampaign.interaction.label'|trans }}</h5>
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.user_clicks.label',
                    campaignStats.numRecipientsClicked|oro_format_decimal,
                    'oro.dotmailer.emailcampaign.user_clicks.tooltip')
                }}
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.user_clicks_percentage.label',
                    campaignStats.percentageUsersClicked|oro_format_percent,
                    'oro.dotmailer.emailcampaign.user_clicks_percentage.tooltip')
                }}
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.clicks.label',
                    campaignStats.numTotalClicks|oro_format_decimal,
                    'oro.dotmailer.emailcampaign.clicks.tooltip')
                }}
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.click_to_open.label',
                    campaignStats.percentageClicksToOpens|oro_format_percent,
                    'oro.dotmailer.emailcampaign.click_to_open.tooltip')
                }}
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.page_views.label',
                    campaignStats.numTotalPageViews|oro_format_percent,
                    'oro.dotmailer.emailcampaign.page_views.tooltip')
                }}
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.total_replies.label',
                    campaignStats.numTotalReplies,
                    'oro.dotmailer.emailcampaign.total_replies.tooltip')
                }}
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.replies_percentage.label',
                    campaignStats.percentageReplies|oro_format_percent,
                    'oro.dotmailer.emailcampaign.replies_percentage.tooltip')
                }}

                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.forwards.label',
                    campaignStats.numForwards|oro_format_decimal,
                    'oro.dotmailer.emailcampaign.forwards.tooltip')
                }}
            </div>
        </div>

        <div class=\"responsive-cell\">
            <div class=\"responsive-block\">
                <strong>{{ 'oro.dotmailer.emailcampaign.negative.label'|trans }}</strong>

                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.hardBounces.label',
                    campaignStats.numTotalHardBounces|oro_format_decimal,
                    'oro.dotmailer.emailcampaign.hardBounces.tooltip')
                }}
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.hardBouncesPercentage.label',
                    campaignStats.percentageHardBounces|oro_format_percent,
                    'oro.dotmailer.emailcampaign.hardBouncesPercentage.tooltip')
                }}

                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.softBounces.label',
                    campaignStats.numTotalSoftBounces|oro_format_decimal,
                    'oro.dotmailer.emailcampaign.softBounces.tooltip')
                }}
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.softBouncesPercentage.label',
                    campaignStats.percentageSoftBounces|oro_format_percent,
                    'oro.dotmailer.emailcampaign.softBouncesPercentage.tooltip')
                }}

                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.unsubscribes.label',
                    campaignStats.numTotalUnsubscribes|oro_format_decimal,
                    'oro.dotmailer.emailcampaign.unsubscribes.tooltip')
                }}
                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.unsubscribesPercentage.label',
                    campaignStats.percentageUnsubscribes|oro_format_percent,
                    'oro.dotmailer.emailcampaign.unsubscribesPercentage.tooltip')
                }}

                {{ ui.renderAttributeWithTooltip(
                    'oro.dotmailer.emailcampaign.isp_complaints.label',
                    campaignStats.numTotalIspComplaints|oro_format_decimal,
                    'oro.dotmailer.emailcampaign.isp_complaints.tooltip')
                }}
            </div>
        </div>
    </div>
{% endif %}
", "@OroDotmailer/Dotmailer/emailCampaignStats.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-dotmailer/Resources/views/Dotmailer/emailCampaignStats.html.twig");
    }
}
