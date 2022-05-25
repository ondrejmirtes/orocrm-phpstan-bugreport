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

/* @OroCampaign/EmailCampaign/widget/stats.html.twig */
class __TwigTemplate_114dfd54e618dfe23cbe22b500794e3e extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCampaign/EmailCampaign/widget/stats.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCampaign/EmailCampaign/widget/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCampaign/EmailCampaign/widget/stats.html.twig"));

        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCampaign/EmailCampaign/widget/stats.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 6
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.stats.open.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 6, $this->source); })()), "open", [], "any", false, false, false, 6))], 6, $context, $this->getSourceContext());
        echo "
            ";
        // line 7
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.stats.click.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 7, $this->source); })()), "click", [], "any", false, false, false, 7))], 7, $context, $this->getSourceContext());
        echo "
            ";
        // line 8
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.stats.bounce.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 8, $this->source); })()), "bounce", [], "any", false, false, false, 8))], 8, $context, $this->getSourceContext());
        echo "
            ";
        // line 9
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.stats.abuse.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 9, $this->source); })()), "abuse", [], "any", false, false, false, 9))], 9, $context, $this->getSourceContext());
        echo "
            ";
        // line 10
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.stats.unsubscribe.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\NumberExtension']->formatDecimal(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 10, $this->source); })()), "unsubscribe", [], "any", false, false, false, 10))], 10, $context, $this->getSourceContext());
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
        return "@OroCampaign/EmailCampaign/widget/stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  66 => 9,  62 => 8,  58 => 7,  54 => 6,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as ui %}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            {{ ui.renderProperty('oro.campaign.emailcampaign.stats.open.label'|trans, stats.open|oro_format_decimal) }}
            {{ ui.renderProperty('oro.campaign.emailcampaign.stats.click.label'|trans, stats.click|oro_format_decimal) }}
            {{ ui.renderProperty('oro.campaign.emailcampaign.stats.bounce.label'|trans, stats.bounce|oro_format_decimal) }}
            {{ ui.renderProperty('oro.campaign.emailcampaign.stats.abuse.label'|trans, stats.abuse|oro_format_decimal) }}
            {{ ui.renderProperty('oro.campaign.emailcampaign.stats.unsubscribe.label'|trans, stats.unsubscribe|oro_format_decimal) }}
        </div>
    </div>
</div>
", "@OroCampaign/EmailCampaign/widget/stats.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/CampaignBundle/Resources/views/EmailCampaign/widget/stats.html.twig");
    }
}
