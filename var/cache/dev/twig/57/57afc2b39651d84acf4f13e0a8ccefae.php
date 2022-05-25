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

/* @OroEmail/Configuration/Mailbox/update.html.twig */
class __TwigTemplate_48c01101e656d267e7e132ceeff15732 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroConfig/configPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Configuration/Mailbox/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Configuration/Mailbox/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Configuration/Mailbox/update.html.twig"));

        // line 3
        $macros["emailUI"] = $this->macros["emailUI"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroEmail/Configuration/Mailbox/update.html.twig", 3)->unwrap();
        // line 4
        $macros["configUI"] = $this->macros["configUI"] = $this->loadTemplate("@OroConfig/macros.html.twig", "@OroEmail/Configuration/Mailbox/update.html.twig", 4)->unwrap();
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "data", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6)) {
            // line 7
            $context["mailboxTitle"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "data", [], "any", false, false, false, 7), "label", [], "any", false, false, false, 7);
        } else {
            // line 9
            $context["mailboxTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.mailbox.action.new");
        }
        // line 12
        $context["pageTitle"] = [0 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_config_configuration_system"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.config.menu.system_configuration.label")], 1 => ["link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_config_configuration_system", ["activeGroup" => "platform", "activeSubGroup" => "email_configuration"]), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.system_configuration.email_configuration")], 2 =>         // line 24
(isset($context["mailboxTitle"]) || array_key_exists("mailboxTitle", $context) ? $context["mailboxTitle"] : (function () { throw new RuntimeError('Variable "mailboxTitle" does not exist.', 24, $this->source); })())];
        // line 27
        $context["formAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "attributes", [], "any", false, false, false, 28), "get", [0 => "_route"], "method", false, false, false, 28), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", [0 => "_route_params"], "method", false, false, false, 29), ["redirectData" => (isset($context["redirectData"]) || array_key_exists("redirectData", $context) ? $context["redirectData"] : (function () { throw new RuntimeError('Variable "redirectData" does not exist.', 29, $this->source); })())]));
        // line 32
        $context["routeName"] = "oro_config_configuration_system";
        // line 33
        $context["routeParameters"] = [];
        // line 35
        $macros["syncMacro"] = $this->macros["syncMacro"] = $this->loadTemplate("@OroSync/Include/contentTags.html.twig", "@OroEmail/Configuration/Mailbox/update.html.twig", 35)->unwrap();
        // line 36
        $macros["configUI"] = $this->macros["configUI"] = $this->loadTemplate("@OroConfig/macros.html.twig", "@OroEmail/Configuration/Mailbox/update.html.twig", 36)->unwrap();
        // line 37
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Configuration/Mailbox/update.html.twig", 37)->unwrap();
        // line 39
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig", 1 => "@OroLocale/Form/fields.html.twig"], true);
        // line 41
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "vars", [], "any", false, false, false, 41), "value", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)) {

            $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%label%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 42
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42), "label", [], "any", false, false, false, 42)]]);
        }
        // line 1
        $this->parent = $this->loadTemplate("@OroConfig/configPage.html.twig", "@OroEmail/Configuration/Mailbox/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 45
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumb", $this->getTemplateName(), 45));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 46
        echo "    ";
        $context["breadcrumbs"] = [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.config.menu.system_configuration.label")], 1 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.system_configuration.email_configuration")]];
        // line 50
        echo "    ";
        $this->loadTemplate("@OroNavigation/Menu/breadcrumbs.html.twig", "@OroEmail/Configuration/Mailbox/update.html.twig", 50)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 53));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 54
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Configuration/Mailbox/update.html.twig", 54)->unwrap();
        // line 55
        echo "
    ";
        // line 56
        $context["buttons"] = "";
        // line 57
        echo "    ";
        $context["html"] = "";
        // line 58
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "vars", [], "any", false, false, false, 58), "value", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "vars", [], "any", false, false, false, 58), "value", [], "any", false, false, false, 58)))) {
            // line 59
            echo "        ";
            $context["buttons"] = ((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 59, $this->source); })()) . twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_mailbox_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 60
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "value", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_config_configuration_system", ["activeGroup" => "platform", "activeSubGroup" => "email_configuration"]), "aCss" => "no-hash remove-button", "id" => "btn-remove-mailbox", "dataId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 67
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "vars", [], "any", false, false, false, 67), "value", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.mailbox.entity_label")]], 59, $context, $this->getSourceContext()));
            // line 70
            echo "        ";
            $context["buttons"] = ((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 70, $this->source); })()) . twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 70, $context, $this->getSourceContext()));
            // line 71
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 71, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [], 71, $context, $this->getSourceContext()));
            // line 72
            echo "    ";
        }
        // line 73
        echo "
    ";
        // line 74
        $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 74, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [], 74, $context, $this->getSourceContext()));
        // line 75
        echo "    ";
        $context["buttons"] = ((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 75, $this->source); })()) . twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 75, $this->source); })())]], 75, $context, $this->getSourceContext()));
        // line 76
        echo "
    ";
        // line 77
        $context["options"] = ["view" => "oroconfig/js/form/config-form"];
        // line 80
        echo "
    ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_start', ["action" =>         // line 82
(isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 82, $this->source); })()), "attr" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 84
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "vars", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "data-collect" => "true", "data-page-component-view" => json_encode(        // line 86
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 86, $this->source); })()))]]);
        // line 88
        echo "
        ";
        // line 89
        ob_start();
        // line 90
        echo "            ";
        $context["mailboxId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "vars", [], "any", false, false, false, 90), "value", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90);
        // line 91
        echo "            <fieldset class=\"form-horizontal form-horizontal-large auto-response-rules\">
                <div class=\"auto-response-rule-header\">
                    <h5 class=\"user-fieldset\">";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.autoresponserule.entity_plural_label"), "html", null, true);
        echo "</h5>
                    ";
        // line 94
        echo twig_call_macro($macros["UI"], "macro_clientLink", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_autoresponserule_create", ["mailbox" =>         // line 95
(isset($context["mailboxId"]) || array_key_exists("mailboxId", $context) ? $context["mailboxId"] : (function () { throw new RuntimeError('Variable "mailboxId" does not exist.', 95, $this->source); })())]), "aCss" => "pull-right no-hash btn btn-primary", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.autoresponserule.action.add.label"), "widget" => ["type" => "dialog", "multiple" => false, "reload-grid-name" => "email-auto-response-rules", "options" => ["alias" => "auto-response-rules-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.autoresponserule.action.add.title"), "allowMaximize" => false, "allowMinimize" => false, "modal" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]]], 94, $context, $this->getSourceContext());
        // line 115
        echo "
                </div>
                ";
        // line 117
        $macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroEmail/Configuration/Mailbox/update.html.twig", 117)->unwrap();
        // line 118
        echo "                ";
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", ["email-auto-response-rules", ["mailbox" => (isset($context["mailboxId"]) || array_key_exists("mailboxId", $context) ? $context["mailboxId"] : (function () { throw new RuntimeError('Variable "mailboxId" does not exist.', 118, $this->source); })())]], 118, $context, $this->getSourceContext());
        echo "
            </fieldset>
        ";
        $context["autoResponseRules"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 121
        echo "        ";
        echo twig_call_macro($macros["emailUI"], "macro_renderMailboxConfigTitleAndButtons", [(isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 121, $this->source); })()), (isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 121, $this->source); })())], 121, $context, $this->getSourceContext());
        echo "
        ";
        // line 122
        echo twig_call_macro($macros["configUI"], "macro_renderConfigurationScrollData", [["configTree" =>         // line 123
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 123, $this->source); })()), "form" =>         // line 124
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "content" => ["dataBlocks" => [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.system_configuration.mailbox_configuration.label"), "subblocks" => [0 =>         // line 129
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), 'form'), 1 =>         // line 130
(isset($context["autoResponseRules"]) || array_key_exists("autoResponseRules", $context) ? $context["autoResponseRules"] : (function () { throw new RuntimeError('Variable "autoResponseRules" does not exist.', 130, $this->source); })())]]]], "activeTabName" =>         // line 134
(isset($context["activeGroup"]) || array_key_exists("activeGroup", $context) ? $context["activeGroup"] : (function () { throw new RuntimeError('Variable "activeGroup" does not exist.', 134, $this->source); })()), "activeSubTabName" =>         // line 135
(isset($context["activeSubGroup"]) || array_key_exists("activeSubGroup", $context) ? $context["activeSubGroup"] : (function () { throw new RuntimeError('Variable "activeSubGroup" does not exist.', 135, $this->source); })()), "routeName" =>         // line 136
(isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 136, $this->source); })()), "routeParameters" =>         // line 137
(isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 137, $this->source); })())]], 122, $context, $this->getSourceContext());
        // line 138
        echo "
    ";
        // line 139
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
    ";
        // line 140
        echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()));
        echo "
    ";
        // line 141
        echo twig_call_macro($macros["syncMacro"], "macro_syncContentTags", [["name" => "system_configuration", "params" => [0 => (isset($context["activeGroup"]) || array_key_exists("activeGroup", $context) ? $context["activeGroup"] : (function () { throw new RuntimeError('Variable "activeGroup" does not exist.', 141, $this->source); })()), 1 => (isset($context["activeSubGroup"]) || array_key_exists("activeSubGroup", $context) ? $context["activeSubGroup"] : (function () { throw new RuntimeError('Variable "activeSubGroup" does not exist.', 141, $this->source); })())]]], 141, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Configuration/Mailbox/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 141,  249 => 140,  245 => 139,  242 => 138,  240 => 137,  239 => 136,  238 => 135,  237 => 134,  236 => 130,  235 => 129,  234 => 124,  233 => 123,  232 => 122,  227 => 121,  220 => 118,  218 => 117,  214 => 115,  212 => 95,  211 => 94,  207 => 93,  203 => 91,  200 => 90,  198 => 89,  195 => 88,  193 => 86,  192 => 84,  191 => 82,  190 => 81,  187 => 80,  185 => 77,  182 => 76,  179 => 75,  177 => 74,  174 => 73,  171 => 72,  168 => 71,  165 => 70,  163 => 67,  162 => 60,  160 => 59,  157 => 58,  154 => 57,  152 => 56,  149 => 55,  146 => 54,  133 => 53,  119 => 50,  116 => 46,  103 => 45,  89 => 1,  86 => 42,  83 => 41,  81 => 39,  79 => 37,  77 => 36,  75 => 35,  73 => 33,  71 => 32,  69 => 29,  68 => 28,  67 => 27,  65 => 24,  64 => 12,  61 => 9,  58 => 7,  56 => 6,  54 => 4,  52 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroConfig/configPage.html.twig' %}

{% import '@OroEmail/macros.html.twig' as emailUI %}
{% import '@OroConfig/macros.html.twig' as configUI %}

{% if form.vars.data.id %}
    {% set mailboxTitle = form.vars.data.label %}
{% else %}
    {% set mailboxTitle = 'oro.email.mailbox.action.new'|trans %}
{% endif %}

{% set pageTitle = [
    {
        link: path('oro_config_configuration_system'),
        label: 'oro.config.menu.system_configuration.label'|trans,
    },
    {
        link: path('oro_config_configuration_system', {
                activeGroup: 'platform',
                activeSubGroup: 'email_configuration'
            }),
        label: 'oro.email.system_configuration.email_configuration'|trans,
    },
    mailboxTitle
] %}

{% set formAction = path(
    app.request.attributes.get('_route'),
    app.request.attributes.get('_route_params')|merge({redirectData: redirectData})
) %}

{% set routeName = 'oro_config_configuration_system' %}
{% set routeParameters = {} %}

{% import '@OroSync/Include/contentTags.html.twig' as syncMacro %}
{% import '@OroConfig/macros.html.twig' as configUI %}
{% import '@OroUI/macros.html.twig' as UI %}

{% form_theme form with ['@OroForm/Form/fields.html.twig', '@OroLocale/Form/fields.html.twig'] %}

{% if form.vars.value.id %}
    {% oro_title_set({params : {\"%label%\": form.vars.value.label} }) %}
{% endif %}

{% block breadcrumb %}
    {% set breadcrumbs = [
        { label: 'oro.config.menu.system_configuration.label'|trans },
        { label: 'oro.email.system_configuration.email_configuration'|trans }
    ] %}
    {% include '@OroNavigation/Menu/breadcrumbs.html.twig' %}
{% endblock breadcrumb %}

{% block content %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set buttons = '' %}
    {% set html = '' %}
    {% if form.vars.value.id and is_granted('DELETE', form.vars.value) %}
        {% set buttons = buttons ~ UI.deleteButton({
            'dataUrl': path('oro_email_mailbox_delete', {'id': form.vars.value.id}),
            'dataRedirect': path('oro_config_configuration_system', {
                activeGroup: 'platform',
                activeSubGroup: 'email_configuration'
            }),
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-mailbox',
            'dataId':  form.vars.value.id,
            'entity_label': 'oro.email.mailbox.entity_label'|trans
        }) %}
        {% set buttons = buttons ~ UI.buttonSeparator() %}
        {% set html = html ~ UI.saveAndStayButton() %}
    {% endif %}

    {% set html = html ~ UI.saveAndCloseButton() %}
    {% set buttons = buttons ~ UI.dropdownSaveButton({'html': html}) %}

    {% set options = {
        view: 'oroconfig/js/form/config-form'
    } %}

    {{ form_start(form, {
        'action': formAction,
        'attr': {
            'id': form.vars.id,
            'data-collect': 'true',
            'data-page-component-view': options|json_encode
        }
    }) }}
        {% set autoResponseRules %}
            {% set mailboxId = form.vars.value.id %}
            <fieldset class=\"form-horizontal form-horizontal-large auto-response-rules\">
                <div class=\"auto-response-rule-header\">
                    <h5 class=\"user-fieldset\">{{ 'oro.email.autoresponserule.entity_plural_label'|trans }}</h5>
                    {{ UI.clientLink({
                        'dataUrl': path('oro_email_autoresponserule_create', {mailbox: mailboxId}),
                        'aCss': 'pull-right no-hash btn btn-primary',
                        'label' : 'oro.email.autoresponserule.action.add.label'|trans,
                        'widget' : {
                            'type' : 'dialog',
                            'multiple' : false,
                            'reload-grid-name' : 'email-auto-response-rules',
                            'options' : {
                                'alias': 'auto-response-rules-dialog',
                                'dialogOptions' : {
                                    'title' : 'oro.email.autoresponserule.action.add.title'|trans,
                                    'allowMaximize': false,
                                    'allowMinimize': false,
                                    'modal': true,
                                    'dblclick': 'maximize',
                                    'maximizedHeightDecreaseBy': 'minimize-bar',
                                    'width': 1000,
                                }
                            }
                        },
                    }) }}
                </div>
                {% import '@OroDataGrid/macros.html.twig' as dataGrid %}
                {{ dataGrid.renderGrid('email-auto-response-rules', {mailbox: mailboxId}) }}
            </fieldset>
        {% endset %}
        {{ emailUI.renderMailboxConfigTitleAndButtons(pageTitle, buttons) }}
        {{ configUI.renderConfigurationScrollData({
            configTree: data,
            form: form,
            content: {
                dataBlocks: [{
                    title: 'oro.email.system_configuration.mailbox_configuration.label'|trans,
                    subblocks: [
                        form(form),
                        autoResponseRules
                    ]
                }]
            },
            activeTabName: activeGroup,
            activeSubTabName: activeSubGroup,
            routeName: routeName,
            routeParameters: routeParameters
        }) }}
    {{ form_end(form, {'render_rest': false}) }}
    {{ oro_form_js_validation(form) }}
    {{ syncMacro.syncContentTags({name: 'system_configuration', params: [activeGroup, activeSubGroup]}) }}
{% endblock content %}
", "@OroEmail/Configuration/Mailbox/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Configuration/Mailbox/update.html.twig");
    }
}
