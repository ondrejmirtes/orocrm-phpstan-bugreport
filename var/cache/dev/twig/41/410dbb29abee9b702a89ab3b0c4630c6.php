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

/* @OroCampaign/Campaign/view.html.twig */
class __TwigTemplate_bd526e3bcd3ca68282877093e5d92d4f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'stats' => [$this, 'block_stats'],
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCampaign/Campaign/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCampaign/Campaign/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCampaign/Campaign/view.html.twig"));

        // line 2
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroCampaign/Campaign/view.html.twig", 2)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entity.name%" => ((twig_get_attribute($this->env, $this->source,         // line 4
($context["entity"] ?? null), "name", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 4), "N/A")) : ("N/A"))]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroCampaign/Campaign/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 6));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 7
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCampaign/Campaign/view.html.twig", 7)->unwrap();
        // line 8
        echo "
    ";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_campaign_update", ["id" => twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.entity_label")]], 10, $context, $this->getSourceContext());
            // line 13
            echo "
    ";
        }
        // line 15
        echo "    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("update_navButtons", $context)) ? (_twig_default_filter((isset($context["update_navButtons"]) || array_key_exists("update_navButtons", $context) ? $context["update_navButtons"] : (function () { throw new RuntimeError('Variable "update_navButtons" does not exist.', 15, $this->source); })()), "update_navButtons")) : ("update_navButtons")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })())]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 18
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 18));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 19
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 20
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_campaign_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.entity_plural_label"), "entityTitle" => ((twig_get_attribute($this->env, $this->source,         // line 23
($context["entity"] ?? null), "name", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 23), "N/A")) : ("N/A"))];
        // line 25
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 28
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 28));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 29
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 29, $this->source); })()), "entity", [], "any", false, false, false, 29), "createdAt", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 29, $this->source); })()), "entity", [], "any", false, false, false, 29), "createdAt", [], "any", false, false, false, 29)), "html", null, true))) : (print ("N/A")));
        echo "</li>
    <li>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.start_date.label"), "html", null, true);
        echo ": ";
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 30, $this->source); })()), "entity", [], "any", false, false, false, 30), "startDate", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 30, $this->source); })()), "entity", [], "any", false, false, false, 30), "startDate", [], "any", false, false, false, 30)), "html", null, true))) : (print ("N/A")));
        echo "</li>
    <li>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.end_date.label"), "html", null, true);
        echo ": ";
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 31, $this->source); })()), "entity", [], "any", false, false, false, 31), "endDate", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 31, $this->source); })()), "entity", [], "any", false, false, false, 31), "endDate", [], "any", false, false, false, 31)), "html", null, true))) : (print ("N/A")));
        echo "</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 34
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 34));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 35
        echo "    ";
        ob_start();
        // line 36
        echo "        ";
        $this->loadTemplate("@OroCampaign/Campaign/widget/view.html.twig", "@OroCampaign/Campaign/view.html.twig", 36)->display($context);
        // line 37
        echo "    ";
        $context["campaignInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
    ";
        // line 39
        ob_start();
        // line 40
        echo "        ";
        $context["trackingTotalGrid"] = "campaign-tracking-total-report-grid";
        // line 41
        echo "        ";
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "reportPeriod", [], "any", false, false, false, 41) === constant("Oro\\Bundle\\CampaignBundle\\Entity\\Campaign::PERIOD_HOURLY"))) {
            // line 42
            echo "            ";
            $context["trackingTotalGrid"] = ((isset($context["trackingTotalGrid"]) || array_key_exists("trackingTotalGrid", $context) ? $context["trackingTotalGrid"] : (function () { throw new RuntimeError('Variable "trackingTotalGrid" does not exist.', 42, $this->source); })()) . "-precalculated");
            // line 43
            echo "        ";
        }
        // line 44
        echo "        ";
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [(isset($context["trackingTotalGrid"]) || array_key_exists("trackingTotalGrid", $context) ? $context["trackingTotalGrid"] : (function () { throw new RuntimeError('Variable "trackingTotalGrid" does not exist.', 44, $this->source); })()), ["campaign" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)], ["cssClass" => "inner-grid"]], 44, $context, $this->getSourceContext());
        echo "
    ";
        $context["trackingEventsReport"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "
    ";
        // line 47
        ob_start();
        // line 48
        echo "        ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_campaign_event_plot", ["period" => twig_get_attribute($this->env, $this->source,         // line 53
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 53, $this->source); })()), "reportPeriod", [], "any", false, false, false, 53), "campaign" => twig_get_attribute($this->env, $this->source,         // line 54
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.block.detailed_report")]);
        // line 58
        echo "
    ";
        $context["trackingPlot"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        echo "
    ";
        // line 61
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.block.general"), "class" => "active", "subblocks" => [0 => ["data" => [0 =>         // line 66
(isset($context["campaignInformationWidget"]) || array_key_exists("campaignInformationWidget", $context) ? $context["campaignInformationWidget"] : (function () { throw new RuntimeError('Variable "campaignInformationWidget" does not exist.', 66, $this->source); })())]]]], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.block.events"), "subblocks" => [0 => ["data" => [0 =>         // line 73
(isset($context["trackingPlot"]) || array_key_exists("trackingPlot", $context) ? $context["trackingPlot"] : (function () { throw new RuntimeError('Variable "trackingPlot" does not exist.', 73, $this->source); })()), 1 =>         // line 74
(isset($context["trackingEventsReport"]) || array_key_exists("trackingEventsReport", $context) ? $context["trackingEventsReport"] : (function () { throw new RuntimeError('Variable "trackingEventsReport" does not exist.', 74, $this->source); })())]]]], 2 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.tracking_code.label"), "subblocks" => [0 => ["data" => [0 => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.tracking_code.info", ["%campaignCode%" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 82
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 82, $this->source); })()), "code", [], "any", false, false, false, 82))])]]]]];
        // line 88
        ob_start();
        // line 89
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_content_data_marketing_activities_summary", $context)) ? (_twig_default_filter((isset($context["view_content_data_marketing_activities_summary"]) || array_key_exists("view_content_data_marketing_activities_summary", $context) ? $context["view_content_data_marketing_activities_summary"] : (function () { throw new RuntimeError('Variable "view_content_data_marketing_activities_summary" does not exist.', 89, $this->source); })()), "view_content_data_marketing_activities_summary")) : ("view_content_data_marketing_activities_summary")), ["campaignId" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)]);
        $context["marketingActivitiesSummary"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        if ( !twig_test_empty((isset($context["marketingActivitiesSummary"]) || array_key_exists("marketingActivitiesSummary", $context) ? $context["marketingActivitiesSummary"] : (function () { throw new RuntimeError('Variable "marketingActivitiesSummary" does not exist.', 92, $this->source); })()))) {
            // line 93
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 93, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketingactivity.summary.label"), "priority" => 1000, "subblocks" => [0 => ["spanClass" => "empty", "data" => [0 =>             // line 99
(isset($context["marketingActivitiesSummary"]) || array_key_exists("marketingActivitiesSummary", $context) ? $context["marketingActivitiesSummary"] : (function () { throw new RuntimeError('Variable "marketingActivitiesSummary" does not exist.', 99, $this->source); })())]]]]]);
            // line 103
            echo "    ";
        }
        // line 104
        echo "
    ";
        // line 105
        $context["id"] = "campaignView";
        // line 106
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 106, $this->source); })())];
        // line 107
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCampaign/Campaign/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 107,  280 => 106,  278 => 105,  275 => 104,  272 => 103,  270 => 99,  268 => 93,  266 => 92,  263 => 89,  261 => 88,  259 => 82,  258 => 74,  257 => 73,  256 => 66,  255 => 61,  252 => 60,  248 => 58,  246 => 54,  245 => 53,  243 => 48,  241 => 47,  238 => 46,  232 => 44,  229 => 43,  226 => 42,  223 => 41,  220 => 40,  218 => 39,  215 => 38,  212 => 37,  209 => 36,  206 => 35,  193 => 34,  176 => 31,  170 => 30,  163 => 29,  150 => 28,  134 => 25,  132 => 23,  131 => 20,  129 => 19,  116 => 18,  102 => 15,  98 => 13,  96 => 11,  94 => 10,  92 => 9,  89 => 8,  86 => 7,  73 => 6,  59 => 1,  57 => 4,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}

{% oro_title_set({params : {\"%entity.name%\": entity.name|default('N/A') }}) %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if is_granted('EDIT', entity) %}
        {{ UI.editButton({
            'path' : path('oro_campaign_update', { id: entity.id }),
            'entity_label': 'oro.campaign.entity_label'|trans
        })  }}
    {% endif %}
    {% placeholder update_navButtons with {entity: entity} %}
{% endblock navButtons %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity':      entity,
        'indexPath':   path('oro_campaign_index'),
        'indexLabel':  'oro.campaign.entity_plural_label'|trans,
        'entityTitle': entity.name|default('N/A'),
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block stats %}
    <li>{{ 'oro.ui.created_at'|trans }}: {{ breadcrumbs.entity.createdAt ? breadcrumbs.entity.createdAt|oro_format_datetime : 'N/A' }}</li>
    <li>{{ 'oro.campaign.start_date.label'|trans }}: {{ breadcrumbs.entity.startDate ? breadcrumbs.entity.startDate|oro_format_date : 'N/A' }}</li>
    <li>{{ 'oro.campaign.end_date.label'|trans }}: {{ breadcrumbs.entity.endDate ? breadcrumbs.entity.endDate|oro_format_date : 'N/A' }}</li>
{% endblock stats %}

{% block content_data %}
    {% set campaignInformationWidget %}
        {% include '@OroCampaign/Campaign/widget/view.html.twig' %}
    {% endset %}

    {% set trackingEventsReport %}
        {% set trackingTotalGrid = 'campaign-tracking-total-report-grid' %}
        {% if entity.reportPeriod is not constant('Oro\\\\Bundle\\\\CampaignBundle\\\\Entity\\\\Campaign::PERIOD_HOURLY') %}
            {% set trackingTotalGrid = trackingTotalGrid ~ '-precalculated' %}
        {% endif %}
        {{ dataGrid.renderGrid(trackingTotalGrid, {campaign: entity.id}, {cssClass: 'inner-grid'}) }}
    {% endset %}

    {% set trackingPlot %}
        {{ oro_widget_render({
            'widgetType': 'block',
            'url': path(
                'oro_campaign_event_plot',
                {
                    period: entity.reportPeriod,
                    campaign: entity.id
                }
            ),
            'title': 'oro.campaign.block.detailed_report'|trans
        }) }}
    {% endset %}

    {% set dataBlocks = [
        {
            'title': 'oro.campaign.block.general'|trans,
            'class': 'active',
            'subblocks': [
                {'data' : [campaignInformationWidget]}
            ]
        },
        {
            'title': 'oro.campaign.block.events'|trans,
            'subblocks': [
                {'data' : [
                    trackingPlot,
                    trackingEventsReport
                ]}
            ]
        },
        {
            'title': 'oro.campaign.tracking_code.label'|trans,
            'subblocks': [
                {'data' : [
                    'oro.campaign.tracking_code.info'|trans({'%campaignCode%': entity.code|escape})
                ]}
            ]
        }
    ] %}

    {%- set marketingActivitiesSummary -%}
        {% placeholder view_content_data_marketing_activities_summary with {'campaignId': entity.id} %}
    {%- endset -%}

    {% if marketingActivitiesSummary is not empty %}
        {% set dataBlocks = dataBlocks|merge([{
            'title': 'oro.marketingactivity.summary.label'|trans,
            'priority' : 1000,
            'subblocks': [
                {
                    'spanClass': 'empty',
                    'data': [marketingActivitiesSummary]
                }
            ]
        }]) %}
    {% endif %}

    {% set id = 'campaignView' %}
    {% set data = { 'dataBlocks': dataBlocks } %}
    {{ parent() }}
{% endblock content_data %}
", "@OroCampaign/Campaign/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/CampaignBundle/Resources/views/Campaign/view.html.twig");
    }
}
