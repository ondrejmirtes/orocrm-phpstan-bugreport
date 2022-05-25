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

/* @OroCampaign/EmailCampaign/update.html.twig */
class __TwigTemplate_e1b664b5e8d34490fe8d0ab122414171 extends Template
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
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCampaign/EmailCampaign/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCampaign/EmailCampaign/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCampaign/EmailCampaign/update.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig"], true);
        // line 4
        $context["entityId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4);

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entity.name%" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.entity_label")]]);
        // line 6
        $context["formAction"] = (((isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 6, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_campaign_update", ["id" => (isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 6, $this->source); })())])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_campaign_create")));
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroCampaign/EmailCampaign/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 8));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 9
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCampaign/EmailCampaign/update.html.twig", 9)->unwrap();
        // line 10
        echo "
    ";
        // line 11
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("update_navButtons", $context)) ? (_twig_default_filter((isset($context["update_navButtons"]) || array_key_exists("update_navButtons", $context) ? $context["update_navButtons"] : (function () { throw new RuntimeError('Variable "update_navButtons" does not exist.', 11, $this->source); })()), "update_navButtons")) : ("update_navButtons")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })())]);
        // line 12
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_campaign_index")], 12, $context, $this->getSourceContext());
        echo "
    ";
        // line 13
        $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_email_campaign_view", "params" => ["id" => "\$id"]]], 13, $context, $this->getSourceContext());
        // line 17
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_campaign_create")) {
            // line 18
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 18, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_email_campaign_create"]], 18, $context, $this->getSourceContext()));
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_campaign_update"))) {
            // line 23
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 23, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_email_campaign_update", "params" => ["id" => "\$id"]]], 23, $context, $this->getSourceContext()));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 28, $this->source); })())]], 28, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 31
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 31));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 32
        echo "    ";
        if ((isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "        ";
            $context["breadcrumbs"] = ["entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 34
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_campaign_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 37
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37)];
            // line 39
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 41
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.entity_label")]);
            // line 42
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroCampaign/EmailCampaign/update.html.twig", 42)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 42, $this->source); })())]));
            // line 43
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 46
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 46));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 47
        echo "    ";
        $context["id"] = "oro_email_campaign_form-profile";
        // line 48
        echo "
    ";
        // line 49
        $context["transportFormData"] = [0 => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "transport", [], "any", false, false, false, 49), 'row')];
        // line 50
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "transportSettings", [], "any", true, true, false, 50)) {
            // line 51
            echo "        ";
            $context["transportFormData"] = twig_array_merge((isset($context["transportFormData"]) || array_key_exists("transportFormData", $context) ? $context["transportFormData"] : (function () { throw new RuntimeError('Variable "transportFormData" does not exist.', 51, $this->source); })()), [0 => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "transportSettings", [], "any", false, false, false, 51), 'widget')]);
            // line 52
            echo "    ";
        }
        // line 53
        echo "
    ";
        // line 54
        $context["hideScheduleFor"] = "";
        // line 55
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "vars", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55), "schedule", [], "any", false, false, false, 55) != twig_constant("Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign::SCHEDULE_DEFERRED"))) {
            // line 56
            echo "        ";
            $context["hideScheduleFor"] = "hide";
            // line 57
            echo "    ";
        }
        // line 58
        echo "
    ";
        // line 59
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.block.general"), "class" => "active", "subblocks" => [0 => ["title" => "", "data" => [0 =>         // line 67
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "name", [], "any", false, false, false, 67), 'row'), 1 =>         // line 68
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "marketingList", [], "any", false, false, false, 68), 'row'), 2 =>         // line 69
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "schedule", [], "any", false, false, false, 69), 'row'), 3 =>         // line 70
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "scheduledFor", [], "any", false, false, false, 70), 'row', ["attr" => ["class" => ((isset($context["hideScheduleFor"]) || array_key_exists("hideScheduleFor", $context) ? $context["hideScheduleFor"] : (function () { throw new RuntimeError('Variable "hideScheduleFor" does not exist.', 70, $this->source); })()) . " scheduledFor")]]), 4 =>         // line 71
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "senderEmail", [], "any", false, false, false, 71), 'row'), 5 =>         // line 72
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "senderName", [], "any", false, false, false, 72), 'row'), 6 =>         // line 73
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "campaign", [], "any", false, false, false, 73), 'row'), 7 =>         // line 74
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "description", [], "any", false, false, false, 74), 'row')]]]], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.campaign.emailcampaign.block.email_settings"), "subblocks" => [0 => ["title" => "", "data" =>         // line 84
(isset($context["transportFormData"]) || array_key_exists("transportFormData", $context) ? $context["transportFormData"] : (function () { throw new RuntimeError('Variable "transportFormData" does not exist.', 84, $this->source); })())]]]];
        // line 89
        echo "
    ";
        // line 90
        $context["data"] = ["formErrors" => ((        // line 92
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 93
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 93, $this->source); })())];
        // line 96
        echo "
    ";
        // line 97
        $context["componentOptions"] = ["scheduleEl" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "schedule", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98)), "scheduledForEl" => ".scheduledFor", "transportEl" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 100
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "transport", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "id", [], "any", false, false, false, 100)), "hideOn" => [0 => twig_constant("Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign::SCHEDULE_MANUAL")], "showOn" => [0 => twig_constant("Oro\\Bundle\\CampaignBundle\\Entity\\EmailCampaign::SCHEDULE_DEFERRED")]];
        // line 104
        echo "    <div data-page-component-module=\"orocampaign/js/app/components/email-campaign-form\"
         data-page-component-options=\"";
        // line 105
        echo twig_escape_filter($this->env, json_encode((isset($context["componentOptions"]) || array_key_exists("componentOptions", $context) ? $context["componentOptions"] : (function () { throw new RuntimeError('Variable "componentOptions" does not exist.', 105, $this->source); })())), "html", null, true);
        echo "\">
        ";
        // line 106
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCampaign/EmailCampaign/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 106,  260 => 105,  257 => 104,  255 => 100,  254 => 98,  253 => 97,  250 => 96,  248 => 93,  247 => 92,  246 => 90,  243 => 89,  241 => 84,  240 => 74,  239 => 73,  238 => 72,  237 => 71,  236 => 70,  235 => 69,  234 => 68,  233 => 67,  232 => 59,  229 => 58,  226 => 57,  223 => 56,  220 => 55,  218 => 54,  215 => 53,  212 => 52,  209 => 51,  206 => 50,  204 => 49,  201 => 48,  198 => 47,  185 => 46,  171 => 43,  168 => 42,  165 => 41,  159 => 39,  157 => 37,  156 => 34,  154 => 33,  151 => 32,  138 => 31,  122 => 28,  119 => 27,  116 => 23,  113 => 22,  110 => 21,  107 => 18,  104 => 17,  102 => 13,  97 => 12,  95 => 11,  92 => 10,  89 => 9,  76 => 8,  62 => 1,  60 => 6,  58 => 5,  55 => 4,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% form_theme form with ['@OroForm/Form/fields.html.twig'] %}

{% set entityId = form.vars.value.id %}
{% oro_title_set({params : {\"%entity.name%\": entity.name, \"%entityName%\": 'oro.campaign.emailcampaign.entity_label'|trans }}) %}
{% set formAction = entityId ? path('oro_email_campaign_update', { 'id': entityId}) : path('oro_email_campaign_create') %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% placeholder update_navButtons with {entity: entity} %}
    {{ UI.cancelButton(path('oro_email_campaign_index')) }}
    {% set html = UI.saveAndCloseButton({
        'route': 'oro_email_campaign_view',
        'params': {'id': '\$id'}
    }) %}
    {% if is_granted('oro_email_campaign_create') %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_email_campaign_create'
        }) %}
    {% endif %}
    {% if form.vars.value.id or is_granted('oro_email_campaign_update') %}
        {% set html = html ~ UI.saveAndStayButton({
            'route': 'oro_email_campaign_update',
            'params': {'id': '\$id'}
        }) %}
    {% endif %}
    {{ UI.dropdownSaveButton({'html': html}) }}
{% endblock navButtons %}

{% block pageHeader %}
    {% if entityId %}
        {% set breadcrumbs = {
            'entity':      form.vars.value,
            'indexPath':   path('oro_email_campaign_index'),
            'indexLabel': 'oro.campaign.emailcampaign.entity_plural_label'|trans,
            'entityTitle': form.vars.value.name
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.campaign.emailcampaign.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}
{% endblock pageHeader %}

{% block content_data %}
    {% set id = 'oro_email_campaign_form-profile' %}

    {% set transportFormData = [form_row(form.transport)] %}
    {% if form.transportSettings is defined %}
        {% set transportFormData = transportFormData|merge([form_widget(form.transportSettings)]) %}
    {% endif %}

    {% set hideScheduleFor = '' %}
    {% if form.vars.value.schedule != constant('Oro\\\\Bundle\\\\CampaignBundle\\\\Entity\\\\EmailCampaign::SCHEDULE_DEFERRED') %}
        {% set hideScheduleFor = 'hide' %}
    {% endif %}

    {% set dataBlocks = [
        {
            'title': 'oro.campaign.emailcampaign.block.general'|trans,
            'class': 'active',
            'subblocks': [
                {
                    'title': '',
                    'data': [
                        form_row(form.name),
                        form_row(form.marketingList),
                        form_row(form.schedule),
                        form_row(form.scheduledFor, {'attr': {'class': hideScheduleFor ~ ' scheduledFor'}}),
                        form_row(form.senderEmail),
                        form_row(form.senderName),
                        form_row(form.campaign),
                        form_row(form.description),
                    ]
                }
            ]
        },
        {
            'title': 'oro.campaign.emailcampaign.block.email_settings'|trans,
            'subblocks': [
                {
                    'title': '',
                    'data': transportFormData
                }
            ]
        }
    ] %}

    {% set data =
        {
            'formErrors': form_errors(form)? form_errors(form) : null,
            'dataBlocks': dataBlocks
        }
    %}

    {% set componentOptions = {
        scheduleEl: '#' ~ form.schedule.vars.id,
        scheduledForEl: '.scheduledFor',
        transportEl: '#' ~ form.transport.vars.id,
        hideOn: [constant('Oro\\\\Bundle\\\\CampaignBundle\\\\Entity\\\\EmailCampaign::SCHEDULE_MANUAL')],
        showOn: [constant('Oro\\\\Bundle\\\\CampaignBundle\\\\Entity\\\\EmailCampaign::SCHEDULE_DEFERRED')]
    } %}
    <div data-page-component-module=\"orocampaign/js/app/components/email-campaign-form\"
         data-page-component-options=\"{{ componentOptions|json_encode }}\">
        {{ parent() }}
    </div>
{% endblock content_data %}
", "@OroCampaign/EmailCampaign/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/CampaignBundle/Resources/views/EmailCampaign/update.html.twig");
    }
}
