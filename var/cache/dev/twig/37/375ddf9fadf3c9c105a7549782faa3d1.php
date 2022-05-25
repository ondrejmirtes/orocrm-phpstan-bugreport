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

/* @OroAccount/Account/view.html.twig */
class __TwigTemplate_4887206d8be2e22b32224a9e3ff79c00 extends Template
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
        return "@OroUI/actions/view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAccount/Account/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAccount/Account/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAccount/Account/view.html.twig"));

        // line 3
        $context["hasGrantedNameView"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 3, $this->source); })()), "name");

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%account.name%" => ((        // line 5
(isset($context["hasGrantedNameView"]) || array_key_exists("hasGrantedNameView", $context) ? $context["hasGrantedNameView"] : (function () { throw new RuntimeError('Variable "hasGrantedNameView" does not exist.', 5, $this->source); })())) ? (((twig_get_attribute($this->env, $this->source,         // line 6
($context["entity"] ?? null), "name", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 6), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view %fieldName% not granted", ["%fieldName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.account.name.label")])))]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroAccount/Account/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 10));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 11
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroAccount/Account/view.html.twig", 11)->unwrap();
        // line 12
        echo "
    ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_account_update", ["id" => twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.account.entity_label")]], 14, $context, $this->getSourceContext());
            // line 17
            echo "
    ";
        }
        // line 19
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_account", ["id" => twig_get_attribute($this->env, $this->source,             // line 21
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_account_index"), "aCss" => "no-hash remove-button", "dataId" => twig_get_attribute($this->env, $this->source,             // line 24
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "id" => "btn-remove-account", "dataMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.delete_confirm_cascade", ["%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.account.entity_label")])]], 20, $context, $this->getSourceContext());
            // line 29
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 33
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 33));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 34
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroAccount/Account/view.html.twig", 34)->unwrap();
        // line 35
        echo "
    ";
        // line 36
        $context["breadcrumbs"] = ["entity" =>         // line 37
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_account_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.account.entity_plural_label"), "rawEntityTitle" =>  !        // line 40
(isset($context["hasGrantedNameView"]) || array_key_exists("hasGrantedNameView", $context) ? $context["hasGrantedNameView"] : (function () { throw new RuntimeError('Variable "hasGrantedNameView" does not exist.', 40, $this->source); })()), "entityTitle" => ((        // line 41
(isset($context["hasGrantedNameView"]) || array_key_exists("hasGrantedNameView", $context) ? $context["hasGrantedNameView"] : (function () { throw new RuntimeError('Variable "hasGrantedNameView" does not exist.', 41, $this->source); })())) ? (((twig_get_attribute($this->env, $this->source,         // line 42
($context["entity"] ?? null), "name", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 42), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")))) : (twig_call_macro($macros["UI"], "macro_renderDisabledLabel", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view %fieldName% not granted", ["%fieldName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.account.name.label")])], 43, $context, $this->getSourceContext())))];
        // line 45
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 48
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 48));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 49
        echo "    ";
        ob_start();
        // line 50
        echo "        ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.account.widgets.account_information"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_account_widget_info", ["id" => twig_get_attribute($this->env, $this->source,         // line 53
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)])]);
        // line 54
        echo "
    ";
        $context["accountInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 56
        echo "
    ";
        // line 57
        $context["generalSectionBlocks"] = [0 => ["data" => [0 => (isset($context["accountInformationWidget"]) || array_key_exists("accountInformationWidget", $context) ? $context["accountInformationWidget"] : (function () { throw new RuntimeError('Variable "accountInformationWidget" does not exist.', 57, $this->source); })())]]];
        // line 58
        echo "
    ";
        // line 59
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_contact_view") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 59, $this->source); })()), "contacts"))) {
            // line 60
            echo "        ";
            ob_start();
            // line 61
            echo "            <div class=\"contact-widget-wrapper\">
                ";
            // line 62
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_account_widget_contacts", ["id" => twig_get_attribute($this->env, $this->source,             // line 64
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.widgets.account_contacts")]);
            // line 66
            echo "
            </div>
        ";
            $context["contactsInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 69
            echo "
        ";
            // line 70
            $context["generalSectionBlocks"] = twig_array_merge((isset($context["generalSectionBlocks"]) || array_key_exists("generalSectionBlocks", $context) ? $context["generalSectionBlocks"] : (function () { throw new RuntimeError('Variable "generalSectionBlocks" does not exist.', 70, $this->source); })()), [0 => ["data" => [0 =>             // line 71
(isset($context["contactsInformationWidget"]) || array_key_exists("contactsInformationWidget", $context) ? $context["contactsInformationWidget"] : (function () { throw new RuntimeError('Variable "contactsInformationWidget" does not exist.', 71, $this->source); })())]]]);
            // line 73
            echo "    ";
        }
        // line 74
        echo "
    ";
        // line 75
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.account.sections.general"), "subblocks" =>         // line 78
(isset($context["generalSectionBlocks"]) || array_key_exists("generalSectionBlocks", $context) ? $context["generalSectionBlocks"] : (function () { throw new RuntimeError('Variable "generalSectionBlocks" does not exist.', 78, $this->source); })())]];
        // line 81
        echo "
    ";
        // line 83
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 84
            ob_start();
            // line 85
            ob_start();
            // line 86
            echo "                ";
            $context["placeHolderName"] = ("oro_account_channel_info_" . twig_get_attribute($this->env, $this->source, $context["channel"], "channelType", [], "any", false, false, false, 86));
            // line 87
            echo "                ";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, (isset($context["placeHolderName"]) || array_key_exists("placeHolderName", $context) ? $context["placeHolderName"] : (function () { throw new RuntimeError('Variable "placeHolderName" does not exist.', 87, $this->source); })()), ["accountId" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87), "channelId" => twig_get_attribute($this->env, $this->source, $context["channel"], "id", [], "any", false, false, false, 87)]);
            echo "
            ";
            $___internal_parse_87_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 85
            echo twig_spaceless($___internal_parse_87_);
            $context["accountChannelInfoSection"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 90
            if ( !twig_test_empty(twig_trim_filter(twig_striptags((isset($context["accountChannelInfoSection"]) || array_key_exists("accountChannelInfoSection", $context) ? $context["accountChannelInfoSection"] : (function () { throw new RuntimeError('Variable "accountChannelInfoSection" does not exist.', 90, $this->source); })()))))) {
                // line 91
                echo "            ";
                $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 91, $this->source); })()), [0 => ["title" => twig_get_attribute($this->env, $this->source,                 // line 93
$context["channel"], "name", [], "any", false, false, false, 93), "priority" => 255, "subblocks" => [0 => ["data" => [0 =>                 // line 96
(isset($context["accountChannelInfoSection"]) || array_key_exists("accountChannelInfoSection", $context) ? $context["accountChannelInfoSection"] : (function () { throw new RuntimeError('Variable "accountChannelInfoSection" does not exist.', 96, $this->source); })())]]]]]);
                // line 100
                echo "        ";
            }
            // line 101
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "
    ";
        // line 104
        echo "    ";
        ob_start();
        // line 105
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("oro_website_activity", $context)) ? (_twig_default_filter((isset($context["oro_website_activity"]) || array_key_exists("oro_website_activity", $context) ? $context["oro_website_activity"] : (function () { throw new RuntimeError('Variable "oro_website_activity" does not exist.', 105, $this->source); })()), "oro_website_activity")) : ("oro_website_activity")), ["customers" => (isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new RuntimeError('Variable "customers" does not exist.', 105, $this->source); })()), "byChannel" => true]);
        $context["websiteActivity"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        echo "    ";
        if ( !twig_test_empty((isset($context["websiteActivity"]) || array_key_exists("websiteActivity", $context) ? $context["websiteActivity"] : (function () { throw new RuntimeError('Variable "websiteActivity" does not exist.', 107, $this->source); })()))) {
            // line 108
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 108, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.account.sections.website_activity"), "priority" => 1050, "subblocks" => [0 => ["data" => [0 =>             // line 113
(isset($context["websiteActivity"]) || array_key_exists("websiteActivity", $context) ? $context["websiteActivity"] : (function () { throw new RuntimeError('Variable "websiteActivity" does not exist.', 113, $this->source); })())]]]]]);
            // line 117
            echo "    ";
        }
        // line 118
        echo "
    ";
        // line 119
        $context["id"] = "accountView";
        // line 120
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 120, $this->source); })())];
        // line 121
        echo "
    ";
        // line 122
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroAccount/Account/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 122,  296 => 121,  293 => 120,  291 => 119,  288 => 118,  285 => 117,  283 => 113,  281 => 108,  278 => 107,  275 => 105,  272 => 104,  269 => 102,  263 => 101,  260 => 100,  258 => 96,  257 => 93,  255 => 91,  253 => 90,  250 => 85,  244 => 87,  241 => 86,  239 => 85,  237 => 84,  232 => 83,  229 => 81,  227 => 78,  226 => 75,  223 => 74,  220 => 73,  218 => 71,  217 => 70,  214 => 69,  209 => 66,  207 => 64,  206 => 62,  203 => 61,  200 => 60,  198 => 59,  195 => 58,  193 => 57,  190 => 56,  186 => 54,  184 => 53,  182 => 50,  179 => 49,  166 => 48,  150 => 45,  148 => 42,  147 => 41,  146 => 40,  145 => 37,  144 => 36,  141 => 35,  138 => 34,  125 => 33,  110 => 29,  108 => 24,  107 => 21,  105 => 20,  102 => 19,  98 => 17,  96 => 15,  94 => 14,  92 => 13,  89 => 12,  86 => 11,  73 => 10,  59 => 1,  57 => 6,  56 => 5,  53 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}

{% set hasGrantedNameView = is_granted('VIEW', entity, 'name') %}

{% oro_title_set({params : {\"%account.name%\": hasGrantedNameView
    ? entity.name|default('N/A'|trans)
    : 'view %fieldName% not granted'|trans({'%fieldName%': 'oro.account.name.label'|trans}) }})
%}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if is_granted('EDIT', entity) %}
        {{ UI.editButton({
            'path': path('oro_account_update', {'id': entity.id}),
            'entity_label': 'oro.account.entity_label'|trans
        }) }}
    {% endif %}
    {% if is_granted('DELETE', entity) %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_api_delete_account', {'id': entity.id}),
            'dataRedirect': path('oro_account_index'),
            'aCss': 'no-hash remove-button',
            'dataId': entity.id,
            'id': 'btn-remove-account',
            'dataMessage': 'oro.ui.delete_confirm_cascade'|trans({
                '%entity_label%' : 'oro.account.entity_label'|trans
            }),
        }) }}
    {% endif %}
{% endblock navButtons %}

{% block pageHeader %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set breadcrumbs = {
        'entity': entity,
        'indexPath': path('oro_account_index'),
        'indexLabel': 'oro.account.entity_plural_label'|trans,
        'rawEntityTitle': not hasGrantedNameView,
        'entityTitle': hasGrantedNameView
            ? entity.name|default('N/A'|trans)
            : UI.renderDisabledLabel('view %fieldName% not granted'|trans({'%fieldName%': 'oro.account.name.label'|trans}))
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block content_data %}
    {% set accountInformationWidget %}
        {{ oro_widget_render({
            'widgetType': 'block',
            'title': 'oro.account.widgets.account_information'|trans,
            'url': path('oro_account_widget_info', {id: entity.id})
        }) }}
    {% endset %}

    {% set generalSectionBlocks = [{'data' : [accountInformationWidget]}]%}

    {% if is_granted('oro_contact_view') and is_granted('VIEW', entity, 'contacts') %}
        {% set contactsInformationWidget %}
            <div class=\"contact-widget-wrapper\">
                {{ oro_widget_render({
                    'widgetType': 'block',
                    'url': path('oro_account_widget_contacts', {id: entity.id}),
                    'title': 'oro.contact.widgets.account_contacts'|trans
                }) }}
            </div>
        {% endset %}

        {% set generalSectionBlocks = generalSectionBlocks|merge(
            [{'data': [contactsInformationWidget]}]
        ) %}
    {% endif %}

    {% set dataBlocks = [
        {
            'title': 'oro.account.sections.general'|trans,
            'subblocks': generalSectionBlocks
        }
    ] %}

    {# Render account channels #}
    {% for channel in channels %}
        {%- set accountChannelInfoSection -%}
            {% apply spaceless %}
                {% set placeHolderName = 'oro_account_channel_info_' ~ channel.channelType %}
                {{ placeholder(placeHolderName, {'accountId': entity.id, 'channelId': channel.id}) }}
            {% endapply %}
        {%- endset -%}
        {% if accountChannelInfoSection|striptags|trim is not empty %}
            {% set dataBlocks = dataBlocks|merge([
                {
                    'title': channel.name,
                    'priority': 255,
                    'subblocks': [
                        {'data' : [accountChannelInfoSection]}
                    ]
                }
            ]) %}
        {% endif %}
    {% endfor %}

    {# Render Website Activity Section if there is at least one applicable customer #}
    {% set websiteActivity %}
        {%- placeholder oro_website_activity with {'customers': customers, 'byChannel': true} -%}
    {% endset %}
    {% if websiteActivity is not empty %}
        {% set dataBlocks = dataBlocks|merge([
            {
                'title': 'oro.account.sections.website_activity'|trans,
                'priority': 1050,
                'subblocks': [
                    {'data' : [websiteActivity]}
                ]
            }
        ]) %}
    {% endif %}

    {% set id = 'accountView' %}
    {% set data = {'dataBlocks': dataBlocks} %}

    {{ parent() }}
{% endblock content_data %}
", "@OroAccount/Account/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/AccountBundle/Resources/views/Account/view.html.twig");
    }
}
