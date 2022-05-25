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

/* @OroCampaign/EmailCampaign/view.html.twig */
class __TwigTemplate_13c45c00dad6063954a56d6db556132d extends Template
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
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCampaign/EmailCampaign/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCampaign/EmailCampaign/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCampaign/EmailCampaign/view.html.twig"));

        // line 2
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroCampaign/EmailCampaign/view.html.twig", 2)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entity.name%" => ((twig_get_attribute($this->env, $this->source,         // line 4
($context["entity"] ?? null), "name", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 4), "N/A")) : ("N/A"))]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroCampaign/EmailCampaign/view.html.twig", 1);
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
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCampaign/EmailCampaign/view.html.twig", 7)->unwrap();
        // line 8
        echo "
    ";
        // line 9
        if ((isset($context["send_allowed"]) || array_key_exists("send_allowed", $context) ? $context["send_allowed"] : (function () { throw new RuntimeError('Variable "send_allowed" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_campaign_send", ["id" => twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.send"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.send"), "iCss" => "fa-envelope"]], 10, $context, $this->getSourceContext());
            // line 15
            echo "
    ";
        }
        // line 17
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()))) {
            // line 18
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_campaign_update", ["id" => twig_get_attribute($this->env, $this->source,             // line 19
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.entity_label")]], 18, $context, $this->getSourceContext());
            // line 21
            echo "
    ";
        }
        // line 23
        echo "    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("update_navButtons", $context)) ? (_twig_default_filter((isset($context["update_navButtons"]) || array_key_exists("update_navButtons", $context) ? $context["update_navButtons"] : (function () { throw new RuntimeError('Variable "update_navButtons" does not exist.', 23, $this->source); })()), "update_navButtons")) : ("update_navButtons")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })())]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 26
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 26));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 27
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 28
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_campaign_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.entity_plural_label"), "entityTitle" => ((twig_get_attribute($this->env, $this->source,         // line 31
($context["entity"] ?? null), "name", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 31), "N/A")) : ("N/A"))];
        // line 33
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 36
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbs", $this->getTemplateName(), 36));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 37
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCampaign/EmailCampaign/view.html.twig", 37)->unwrap();
        // line 38
        echo "
    ";
        // line 39
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <span class=\"page-title__status\">
        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "sent", [], "any", false, false, false, 41)) {
            // line 42
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.status.sent"), "enabled"], 42, $context, $this->getSourceContext());
            echo "
        ";
        } else {
            // line 44
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.status.not_sent"), "disabled"], 44, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 46
        echo "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 49
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 49));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 50
        echo "    ";
        ob_start();
        // line 51
        echo "        ";
        $this->loadTemplate("@OroCampaign/EmailCampaign/widget/view.html.twig", "@OroCampaign/EmailCampaign/view.html.twig", 51)->display($context);
        // line 52
        echo "    ";
        $context["campaignInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        ob_start();
        // line 55
        if ((isset($context["show_stats"]) || array_key_exists("show_stats", $context) ? $context["show_stats"] : (function () { throw new RuntimeError('Variable "show_stats" does not exist.', 55, $this->source); })())) {
            // line 56
            echo "            ";
            $this->loadTemplate("@OroCampaign/EmailCampaign/widget/stats.html.twig", "@OroCampaign/EmailCampaign/view.html.twig", 56)->display($context);
            // line 57
            echo "        ";
        }
        $context["emailCampaignStatisticsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        ob_start();
        // line 61
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_content_data_email_campaign_status", $context)) ? (_twig_default_filter((isset($context["view_content_data_email_campaign_status"]) || array_key_exists("view_content_data_email_campaign_status", $context) ? $context["view_content_data_email_campaign_status"] : (function () { throw new RuntimeError('Variable "view_content_data_email_campaign_status" does not exist.', 61, $this->source); })()), "view_content_data_email_campaign_status")) : ("view_content_data_email_campaign_status")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 61, $this->source); })())]);
        $context["emailCampaignStatusData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        ob_start();
        // line 65
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 65, $this->source); })()), "marketingList", [], "any", false, false, false, 65))) {
            // line 66
            echo "            ";
            echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [(twig_constant("Oro\\Bundle\\MarketingListBundle\\Datagrid\\ConfigurationProvider::GRID_PREFIX") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 67
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 67, $this->source); })()), "marketingList", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67)), ["emailCampaign" => twig_get_attribute($this->env, $this->source,             // line 69
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)], ["cssClass" => "inner-grid"]], 66, $context, $this->getSourceContext());
            // line 74
            echo "
        ";
        }
        $context["listData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        $context["generalSectionSubblocks"] = [0 => ["data" => [0 => (isset($context["campaignInformationWidget"]) || array_key_exists("campaignInformationWidget", $context) ? $context["campaignInformationWidget"] : (function () { throw new RuntimeError('Variable "campaignInformationWidget" does not exist.', 78, $this->source); })())]]];
        // line 79
        echo "    ";
        if ( !twig_test_empty((isset($context["emailCampaignStatisticsData"]) || array_key_exists("emailCampaignStatisticsData", $context) ? $context["emailCampaignStatisticsData"] : (function () { throw new RuntimeError('Variable "emailCampaignStatisticsData" does not exist.', 79, $this->source); })()))) {
            // line 80
            echo "        ";
            $context["generalSectionSubblocks"] = twig_array_merge((isset($context["generalSectionSubblocks"]) || array_key_exists("generalSectionSubblocks", $context) ? $context["generalSectionSubblocks"] : (function () { throw new RuntimeError('Variable "generalSectionSubblocks" does not exist.', 80, $this->source); })()), [0 => ["data" => [0 =>             // line 81
(isset($context["emailCampaignStatisticsData"]) || array_key_exists("emailCampaignStatisticsData", $context) ? $context["emailCampaignStatisticsData"] : (function () { throw new RuntimeError('Variable "emailCampaignStatisticsData" does not exist.', 81, $this->source); })())], "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaignstatistics.block.label")]]);
            // line 84
            echo "    ";
        }
        // line 85
        echo "
    ";
        // line 86
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.block.general"), "class" => "active", "subblocks" =>         // line 90
(isset($context["generalSectionSubblocks"]) || array_key_exists("generalSectionSubblocks", $context) ? $context["generalSectionSubblocks"] : (function () { throw new RuntimeError('Variable "generalSectionSubblocks" does not exist.', 90, $this->source); })())]];
        // line 93
        echo "    ";
        if ( !twig_test_empty((isset($context["emailCampaignStatusData"]) || array_key_exists("emailCampaignStatusData", $context) ? $context["emailCampaignStatusData"] : (function () { throw new RuntimeError('Variable "emailCampaignStatusData" does not exist.', 93, $this->source); })()))) {
            // line 94
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 94, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.block.status"), "subblocks" => [0 => ["data" => [0 =>             // line 97
(isset($context["emailCampaignStatusData"]) || array_key_exists("emailCampaignStatusData", $context) ? $context["emailCampaignStatusData"] : (function () { throw new RuntimeError('Variable "emailCampaignStatusData" does not exist.', 97, $this->source); })())]]]]]);
            // line 101
            echo "    ";
        }
        // line 102
        echo "    ";
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 102, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.block.recipients"), "subblocks" => [0 => ["spanClass" => "empty", "data" => [0 =>         // line 107
(isset($context["listData"]) || array_key_exists("listData", $context) ? $context["listData"] : (function () { throw new RuntimeError('Variable "listData" does not exist.', 107, $this->source); })())]]]]]);
        // line 111
        echo "
    ";
        // line 112
        $context["id"] = "emailCampaignView";
        // line 113
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 113, $this->source); })())];
        // line 114
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
        return "@OroCampaign/EmailCampaign/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 114,  302 => 113,  300 => 112,  297 => 111,  295 => 107,  293 => 102,  290 => 101,  288 => 97,  286 => 94,  283 => 93,  281 => 90,  280 => 86,  277 => 85,  274 => 84,  272 => 81,  270 => 80,  267 => 79,  265 => 78,  260 => 74,  258 => 69,  257 => 67,  255 => 66,  253 => 65,  251 => 64,  248 => 61,  246 => 60,  242 => 57,  239 => 56,  237 => 55,  235 => 54,  232 => 52,  229 => 51,  226 => 50,  213 => 49,  199 => 46,  193 => 44,  187 => 42,  185 => 41,  180 => 39,  177 => 38,  174 => 37,  161 => 36,  145 => 33,  143 => 31,  142 => 28,  140 => 27,  127 => 26,  113 => 23,  109 => 21,  107 => 19,  105 => 18,  102 => 17,  98 => 15,  96 => 11,  94 => 10,  92 => 9,  89 => 8,  86 => 7,  73 => 6,  59 => 1,  57 => 4,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}

{% oro_title_set({params : {\"%entity.name%\": entity.name|default('N/A') }}) %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if send_allowed %}
        {{ UI.button({
            'path' : path('oro_email_campaign_send', { id: entity.id }),
            'title': 'oro.campaign.emailcampaign.send'|trans,
            'label': 'oro.campaign.emailcampaign.send'|trans,
            'iCss': 'fa-envelope'
        })  }}
    {% endif %}
    {% if is_granted('EDIT', entity) %}
        {{ UI.editButton({
            'path' : path('oro_email_campaign_update', { id: entity.id }),
            'entity_label': 'oro.campaign.emailcampaign.entity_label'|trans
        })  }}
    {% endif %}
    {% placeholder update_navButtons with {entity: entity} %}
{% endblock navButtons %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity':      entity,
        'indexPath':   path('oro_email_campaign_index'),
        'indexLabel':  'oro.campaign.emailcampaign.entity_plural_label'|trans,
        'entityTitle': entity.name|default('N/A'),
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block breadcrumbs %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ parent() }}
    <span class=\"page-title__status\">
        {% if entity.sent %}
            {{ UI.badge('oro.campaign.emailcampaign.status.sent'|trans, 'enabled') }}
        {% else %}
            {{ UI.badge('oro.campaign.emailcampaign.status.not_sent'|trans, 'disabled') }}
        {% endif %}
    </span>
{% endblock breadcrumbs %}

{% block content_data %}
    {% set campaignInformationWidget %}
        {% include '@OroCampaign/EmailCampaign/widget/view.html.twig' %}
    {% endset %}

    {%- set emailCampaignStatisticsData -%}
        {% if show_stats %}
            {% include '@OroCampaign/EmailCampaign/widget/stats.html.twig' %}
        {% endif %}
    {%- endset -%}

    {%- set emailCampaignStatusData -%}
        {% placeholder view_content_data_email_campaign_status with {entity: entity} %}
    {%- endset -%}

    {%- set listData -%}
        {% if entity.marketingList is not empty %}
            {{ dataGrid.renderGrid(
                constant('Oro\\\\Bundle\\\\MarketingListBundle\\\\Datagrid\\\\ConfigurationProvider::GRID_PREFIX') ~ entity.marketingList.id,
                {
                    'emailCampaign': entity.id
                },
                {
                    cssClass: 'inner-grid'
                }
            ) }}
        {% endif %}
    {%- endset -%}

    {% set generalSectionSubblocks = [{'data': [campaignInformationWidget]}] %}
    {% if emailCampaignStatisticsData is not empty %}
        {% set generalSectionSubblocks = generalSectionSubblocks|merge([{
            'data': [emailCampaignStatisticsData],
            'title': 'oro.campaign.emailcampaignstatistics.block.label'|trans
        }]) %}
    {% endif %}

    {% set dataBlocks = [
        {
            'title': 'oro.campaign.emailcampaign.block.general'|trans,
            'class': 'active',
            'subblocks': generalSectionSubblocks
        }
    ] %}
    {% if emailCampaignStatusData is not empty %}
        {% set dataBlocks = dataBlocks|merge([
            {
                'title': 'oro.campaign.emailcampaign.block.status'|trans,
                'subblocks': [{'data' : [emailCampaignStatusData]}]
            }
        ])
        %}
    {% endif %}
    {% set dataBlocks = dataBlocks|merge([{
        'title': 'oro.campaign.emailcampaign.block.recipients'|trans,
        'subblocks': [
            {
                'spanClass': 'empty',
                'data': [listData]
            }
        ]
    }]) %}

    {% set id = 'emailCampaignView' %}
    {% set data = { 'dataBlocks': dataBlocks } %}
    {{ parent() }}
{% endblock content_data %}
", "@OroCampaign/EmailCampaign/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/CampaignBundle/Resources/views/EmailCampaign/view.html.twig");
    }
}
