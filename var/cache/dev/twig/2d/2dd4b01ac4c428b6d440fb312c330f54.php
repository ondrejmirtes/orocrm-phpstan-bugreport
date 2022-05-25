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

/* @OroImap/Form/fields.html.twig */
class __TwigTemplate_439dc573ad60a5fb7c1608cd082f7a30 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_imap_configuration_check_widget' => [$this, 'block_oro_imap_configuration_check_widget'],
            'oro_imap_choice_account_type_widget' => [$this, 'block_oro_imap_choice_account_type_widget'],
            'oro_imap_configuration_gmail_widget' => [$this, 'block_oro_imap_configuration_gmail_widget'],
            'oro_config_google_imap_sync_checkbox_widget' => [$this, 'block_oro_config_google_imap_sync_checkbox_widget'],
            'oro_imap_configuration_microsoft_widget' => [$this, 'block_oro_imap_configuration_microsoft_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroImap/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImap/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImap/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_imap_configuration_check_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('oro_imap_choice_account_type_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('oro_imap_configuration_gmail_widget', $context, $blocks);
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('oro_config_google_imap_sync_checkbox_widget', $context, $blocks);
        // line 168
        echo "


";
        // line 171
        $this->displayBlock('oro_imap_configuration_microsoft_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_imap_configuration_check_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_imap_configuration_check_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_imap_configuration_check_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_imap_configuration_check_widget"));

        // line 2
        echo "    ";
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "parent", [], "any", false, false, false, 2), "parent", [], "any", false, false, false, 2), "parent", [], "any", false, false, false, 2))) {
            // line 3
            echo "        ";
            $context["data"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "parent", [], "any", false, false, false, 3), "parent", [], "any", false, false, false, 3), "parent", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3);
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        ";
            $context["data"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "parent", [], "any", false, false, false, 5), "parent", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5);
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        if (((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()) && twig_in_filter("oro_email_mailbox", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "parent", [], "any", false, false, false, 7), "parent", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "full_name", [], "any", false, false, false, 7)))) {
            // line 8
            echo "        ";
            $context["forEntity"] = "mailbox";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["forEntity"] = "user";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    ";
        $context["options"] = twig_array_merge(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 12), "options", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 12), "options", [], "any", false, false, false, 12), [])) : ([])), ["elementNamePrototype" =>         // line 13
(isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 13, $this->source); })()), "id" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "parent", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 14), "vars", [], "any", false, true, false, 14), "value", [], "any", false, true, false, 14), "id", [], "any", true, true, false, 14))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "parent", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)) : (null)), "forEntity" =>         // line 15
(isset($context["forEntity"]) || array_key_exists("forEntity", $context) ? $context["forEntity"] : (function () { throw new RuntimeError('Variable "forEntity" does not exist.', 15, $this->source); })()), "organization" => ((((        // line 16
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "organization", [], "any", true, true, false, 16)) && twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "organization", [], "any", false, false, false, 16))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "organization", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)) : (null)), "parentElementSelector" => "fieldset"]);
        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 19, $this->source); })()), ["data-role" => "check-connection-btn", "data-page-component-module" => "oroimap/js/app/components/check-connection-component", "data-page-component-options" => json_encode(        // line 22
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 22, $this->source); })()))]);
        // line 24
        echo "    <div class=\"control-group\">
        <div class=\"controls\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 26, $this->source); })())]);
        echo "
            <div class=\"check-connection-messages\"></div>
        </div>
    </div>
    <div class=\"container-config-group\"
         data-page-component-module=\"oroimap/js/app/components/check-config-settings\"
         data-page-component-options=\"\">
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 36
    public function block_oro_imap_choice_account_type_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_imap_choice_account_type_widget", $this->getTemplateName(), 36));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_imap_choice_account_type_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_imap_choice_account_type_widget"));

        // line 37
        echo "    ";
        $context["data"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "parent", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37);
        // line 38
        echo "
    ";
        // line 39
        $context["options"] = twig_array_merge(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 39), "options", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 39), "options", [], "any", false, false, false, 39), [])) : ([])), ["route" => "oro_imap_change_account_type", "formSelector" => ("#" . ((        // line 41
array_key_exists("formSelector", $context)) ? (_twig_default_filter((isset($context["formSelector"]) || array_key_exists("formSelector", $context) ? $context["formSelector"] : (function () { throw new RuntimeError('Variable "formSelector" does not exist.', 41, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "vars", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "vars", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)))), "formParentName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "parent", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "organization" => ((((        // line 43
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "organization", [], "any", true, true, false, 43)) && twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "organization", [], "any", false, false, false, 43))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "organization", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)) : (null)), "id" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 44
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 44), "value", [], "any", false, true, false, 44), "userEmailOrigin", [], "any", false, true, false, 44), "id", [], "any", true, true, false, 44))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44), "userEmailOrigin", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)) : (null))]);
        // line 46
        echo "
    <div class=\"container-change-account-type\"
        data-page-component-module=\"oroimap/js/app/components/account-type-component\"
        data-page-component-options=\"";
        // line 49
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 49, $this->source); })())), "html", null, true);
        echo "\"
        data-layout=\"separate\"
    >
        <div ";
        // line 52
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 53
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "parent", [], "any", false, false, false, 53))) {
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'errors');
        }
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "accountType", [], "any", true, true, false, 57)) {
            // line 58
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "accountType", [], "any", false, false, false, 58), 'row');
            echo "
            ";
        }
        // line 60
        echo "
            ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "userEmailOrigin", [], "any", true, true, false, 61)) {
            // line 62
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "userEmailOrigin", [], "any", false, false, false, 62), 'widget');
            echo "
            ";
        }
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'rest');
        // line 66
        echo "</div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 70
    public function block_oro_imap_configuration_gmail_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_imap_configuration_gmail_widget", $this->getTemplateName(), 70));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_imap_configuration_gmail_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_imap_configuration_gmail_widget"));

        // line 71
        echo "    ";
        $context["data"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "parent", [], "any", false, false, false, 71), "parent", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "value", [], "any", false, false, false, 71);
        // line 72
        echo "
    ";
        // line 73
        $context["options"] = twig_array_merge(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 73), "options", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 73), "options", [], "any", false, false, false, 73), [])) : ([])), ["route" => "oro_imap_change_account_type", "routeAccessToken" => "oro_imap_gmail_access_token", "routeGetFolders" => "oro_imap_gmail_connection_check", "formSelector" => ("#" . ((        // line 77
array_key_exists("formSelector", $context)) ? (_twig_default_filter((isset($context["formSelector"]) || array_key_exists("formSelector", $context) ? $context["formSelector"] : (function () { throw new RuntimeError('Variable "formSelector" does not exist.', 77, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "vars", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "vars", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77)))), "vendorErrorMessage" => ".google-alert", "formParentName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 79
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "parent", [], "any", false, false, false, 79), "parent", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "name", [], "any", false, false, false, 79), "organization" => ((((        // line 80
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 80, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "organization", [], "any", true, true, false, 80)) && twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 80, $this->source); })()), "organization", [], "any", false, false, false, 80))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 80, $this->source); })()), "organization", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80)) : (null)), "user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 81
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "parent", [], "any", false, false, false, 81), "userEmailOrigin", [], "any", false, false, false, 81), "user", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "value", [], "any", false, false, false, 81), "accessToken" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 82
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "parent", [], "any", false, false, false, 82), "userEmailOrigin", [], "any", false, false, false, 82), "accessToken", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "value", [], "any", false, false, false, 82), "accessTokenExpiresAt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 83
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "parent", [], "any", false, false, false, 83), "userEmailOrigin", [], "any", false, false, false, 83), "accessTokenExpiresAt", [], "any", false, false, false, 83), "vars", [], "any", false, false, false, 83), "value", [], "any", false, false, false, 83), "id" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 84
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "vars", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 84), "value", [], "any", false, true, false, 84), "id", [], "any", true, true, false, 84))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "vars", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84)) : (null))]);
        // line 86
        echo "
    <div class=\"container-imap-gmail-container\"
         data-page-component-module=\"oroimap/js/app/components/imap-gmail-component\"
         data-page-component-options=\"";
        // line 89
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 89, $this->source); })())), "html", null, true);
        echo "\"
         ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "vars", [], "any", false, false, false, 90), "is_partial", [], "any", false, false, false, 90)) {
            // line 91
            echo "            data-layout=\"separate\"
         ";
        }
        // line 93
        echo "    >
        <div ";
        // line 94
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 95
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "parent", [], "any", false, false, false, 95))) {
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'errors');
        }
        // line 99
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "parent", [], "any", false, false, false, 99), "userEmailOrigin", [], "any", false, false, false, 99), "user", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "value", [], "any", false, false, false, 99))) {
            // line 100
            echo "                <div class=\"control-group\">
                    <div class=\"control-label wrap\">
                        ";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.imap.configuration.reset_email.label"), "html", null, true);
            echo "
                    </div>
                    <div class=\"controls oro-item-collection\">
                        <div class=\"controls-line-group\">
                            <strong>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "parent", [], "any", false, false, false, 106), "userEmailOrigin", [], "any", false, false, false, 106), "user", [], "any", false, false, false, 106), "vars", [], "any", false, false, false, 106), "value", [], "any", false, false, false, 106), "html", null, true);
            echo "</strong>
                            <button data-role=\"remove\" class=\"btn btn-icon btn-square-lighter delete\" type=\"button\"
                                    title=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.imap.configuration.disconnect.label"), "html", null, true);
            echo "\"
                            >
                                <span class=\"fa-close\" aria-hidden=\"true\"></span>
                            </button>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 116
        echo "
            ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "check", [], "any", true, true, false, 117)) {
            // line 118
            echo "                <div class=\"control-group\">
                    <div class=\"controls\">
                        ";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "check", [], "any", false, false, false, 120), 'widget');
            echo "
                    </div>
                </div>
            ";
        }
        // line 124
        echo "
            <div class=\"control-group\">
                <div class=\"controls\">
                    <div class=\"google-alert google-connection-status alert alert-error\" role=\"alert\" style=\"display: none\"></div>
                </div>
            </div>

            ";
        // line 131
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "checkFolder", [], "any", true, true, false, 131)) {
            // line 132
            echo "                <div class=\"control-group\">
                    <div class=\"controls\">
                        ";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "checkFolder", [], "any", false, false, false, 134), 'widget');
            echo "
                    </div>
                </div>
            ";
        }
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), 'rest');
        // line 140
        echo "</div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 144
    public function block_oro_config_google_imap_sync_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_config_google_imap_sync_checkbox_widget", $this->getTemplateName(), 144));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_config_google_imap_sync_checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_config_google_imap_sync_checkbox_widget"));

        // line 145
        echo "    ";
        $context["options"] = ["errorMessage" => ".default-alert", "successMessage" => ".alert-success", "googleErrorMessage" => ".google-alert", "googleWarningMessage" => ".alert-warning"];
        // line 151
        echo "    <div data-page-component-module=\"oroimap/js/app/components/google-sync-checkbox-component\"
        data-page-component-options=\"";
        // line 152
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 152, $this->source); })())), "html", null, true);
        echo "\" style=\"margin-top: 3px\">
        ";
        // line 153
        $this->displayBlock("checkbox_widget", $context, $blocks);
        echo "
        <div class=\"alert google-connection-status alert-warning\" role=\"alert\" style=\"display: none\">
            ";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.imap.system_configuration.fields.enable_google_imap.warning.label"), "html", null, true);
        echo "
        </div>
        <div class=\"google-alert google-connection-status alert alert-error\" role=\"alert\" style=\"display: none\">

        </div>
        <div class=\"default-alert google-connection-status alert alert-error\" role=\"alert\" style=\"display: none\">
            ";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.imap.system_configuration.fields.enable_google_imap.error.label"), "html", null, true);
        echo "
        </div>
        <div class=\"alert google-connection-status alert-success\" role=\"alert\" style=\"display: none\">
            ";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.imap.system_configuration.fields.enable_google_imap.success.label"), "html", null, true);
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 171
    public function block_oro_imap_configuration_microsoft_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_imap_configuration_microsoft_widget", $this->getTemplateName(), 171));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_imap_configuration_microsoft_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_imap_configuration_microsoft_widget"));

        // line 172
        echo "    ";
        $context["data"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "parent", [], "any", false, false, false, 172), "parent", [], "any", false, false, false, 172), "vars", [], "any", false, false, false, 172), "value", [], "any", false, false, false, 172);
        // line 173
        echo "
    ";
        // line 174
        $context["options"] = twig_array_merge(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 174), "options", [], "any", true, true, false, 174)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 174), "options", [], "any", false, false, false, 174), [])) : ([])), ["route" => "oro_imap_change_account_type", "routeAccessToken" => "oro_imap_microsoft_access_token", "routeGetFolders" => "oro_imap_microsoft_connection_check", "formSelector" => ("#" . ((        // line 178
array_key_exists("formSelector", $context)) ? (_twig_default_filter((isset($context["formSelector"]) || array_key_exists("formSelector", $context) ? $context["formSelector"] : (function () { throw new RuntimeError('Variable "formSelector" does not exist.', 178, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "vars", [], "any", false, false, false, 178), "id", [], "any", false, false, false, 178))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "vars", [], "any", false, false, false, 178), "id", [], "any", false, false, false, 178)))), "vendorErrorMessage" => ".vendor-alert", "formParentName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 180
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "parent", [], "any", false, false, false, 180), "parent", [], "any", false, false, false, 180), "vars", [], "any", false, false, false, 180), "name", [], "any", false, false, false, 180), "organization" => ((((        // line 181
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 181, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "organization", [], "any", true, true, false, 181)) && twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 181, $this->source); })()), "organization", [], "any", false, false, false, 181))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 181, $this->source); })()), "organization", [], "any", false, false, false, 181), "id", [], "any", false, false, false, 181)) : (null)), "user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 182
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "parent", [], "any", false, false, false, 182), "userEmailOrigin", [], "any", false, false, false, 182), "user", [], "any", false, false, false, 182), "vars", [], "any", false, false, false, 182), "value", [], "any", false, false, false, 182), "accessToken" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 183
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "parent", [], "any", false, false, false, 183), "userEmailOrigin", [], "any", false, false, false, 183), "accessToken", [], "any", false, false, false, 183), "vars", [], "any", false, false, false, 183), "value", [], "any", false, false, false, 183), "accessTokenExpiresAt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 184
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "parent", [], "any", false, false, false, 184), "userEmailOrigin", [], "any", false, false, false, 184), "accessTokenExpiresAt", [], "any", false, false, false, 184), "vars", [], "any", false, false, false, 184), "value", [], "any", false, false, false, 184), "id" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 185
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "vars", [], "any", false, false, false, 185), "value", [], "any", false, false, false, 185) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 185), "value", [], "any", false, true, false, 185), "id", [], "any", true, true, false, 185))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "vars", [], "any", false, false, false, 185), "value", [], "any", false, false, false, 185), "id", [], "any", false, false, false, 185)) : (null))]);
        // line 187
        echo "
    <div class=\"container-imap-microsoft-container\"
         data-page-component-module=\"oroimap/js/app/components/imap-microsoft-component\"
         data-page-component-options=\"";
        // line 190
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 190, $this->source); })())), "html", null, true);
        echo "\"
            ";
        // line 191
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "vars", [], "any", false, false, false, 191), "is_partial", [], "any", false, false, false, 191)) {
            // line 192
            echo "                data-layout=\"separate\"
            ";
        }
        // line 194
        echo "    >
        <div ";
        // line 195
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 196
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "parent", [], "any", false, false, false, 196))) {
            // line 197
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), 'errors');
        }
        // line 200
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "parent", [], "any", false, false, false, 200), "userEmailOrigin", [], "any", false, false, false, 200), "user", [], "any", false, false, false, 200), "vars", [], "any", false, false, false, 200), "value", [], "any", false, false, false, 200))) {
            // line 201
            echo "                <div class=\"control-group\">
                    <div class=\"control-label wrap\">
                        ";
            // line 203
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.imap.configuration.reset_email.label"), "html", null, true);
            echo "
                    </div>
                    <div class=\"controls oro-item-collection\">
                        <div class=\"controls-line-group\">
                            <strong>";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "parent", [], "any", false, false, false, 207), "userEmailOrigin", [], "any", false, false, false, 207), "user", [], "any", false, false, false, 207), "vars", [], "any", false, false, false, 207), "value", [], "any", false, false, false, 207), "html", null, true);
            echo "</strong>
                            <button data-role=\"remove\" class=\"btn btn-icon btn-square-lighter delete\" type=\"button\"
                                    title=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.imap.configuration.disconnect.label"), "html", null, true);
            echo "\"
                            >
                                <span class=\"fa-close\" aria-hidden=\"true\"></span>
                            </button>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 217
        echo "
            ";
        // line 218
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "check", [], "any", true, true, false, 218)) {
            // line 219
            echo "                <div class=\"control-group\">
                    <div class=\"controls\">
                        ";
            // line 221
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "check", [], "any", false, false, false, 221), 'widget');
            echo "
                    </div>
                </div>
            ";
        }
        // line 225
        echo "
            <div class=\"control-group\">
                <div class=\"controls\">
                    <div class=\"vendor-alert google-connection-status alert alert-error\" role=\"alert\" style=\"display: none\"></div>
                </div>
            </div>

            ";
        // line 232
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "checkFolder", [], "any", true, true, false, 232)) {
            // line 233
            echo "                <div class=\"control-group\">
                    <div class=\"controls\">
                        ";
            // line 235
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "checkFolder", [], "any", false, false, false, 235), 'widget');
            echo "
                    </div>
                </div>
            ";
        }
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), 'rest');
        // line 241
        echo "</div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroImap/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  567 => 241,  565 => 240,  558 => 235,  554 => 233,  552 => 232,  543 => 225,  536 => 221,  532 => 219,  530 => 218,  527 => 217,  516 => 209,  511 => 207,  504 => 203,  500 => 201,  498 => 200,  495 => 197,  493 => 196,  490 => 195,  487 => 194,  483 => 192,  481 => 191,  477 => 190,  472 => 187,  470 => 185,  469 => 184,  468 => 183,  467 => 182,  466 => 181,  465 => 180,  464 => 178,  463 => 174,  460 => 173,  457 => 172,  444 => 171,  427 => 164,  421 => 161,  412 => 155,  407 => 153,  403 => 152,  400 => 151,  397 => 145,  384 => 144,  369 => 140,  367 => 139,  360 => 134,  356 => 132,  354 => 131,  345 => 124,  338 => 120,  334 => 118,  332 => 117,  329 => 116,  318 => 108,  313 => 106,  306 => 102,  302 => 100,  300 => 99,  297 => 96,  295 => 95,  292 => 94,  289 => 93,  285 => 91,  283 => 90,  279 => 89,  274 => 86,  272 => 84,  271 => 83,  270 => 82,  269 => 81,  268 => 80,  267 => 79,  266 => 77,  265 => 73,  262 => 72,  259 => 71,  246 => 70,  231 => 66,  229 => 65,  223 => 62,  221 => 61,  218 => 60,  212 => 58,  210 => 57,  207 => 54,  205 => 53,  202 => 52,  196 => 49,  191 => 46,  189 => 44,  188 => 43,  187 => 42,  186 => 41,  185 => 39,  182 => 38,  179 => 37,  166 => 36,  144 => 26,  140 => 24,  138 => 22,  136 => 19,  134 => 16,  133 => 15,  132 => 14,  131 => 13,  129 => 12,  126 => 11,  123 => 10,  120 => 9,  117 => 8,  114 => 7,  111 => 6,  108 => 5,  105 => 4,  102 => 3,  99 => 2,  86 => 1,  73 => 171,  68 => 168,  66 => 144,  63 => 143,  61 => 70,  58 => 69,  56 => 36,  53 => 35,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_imap_configuration_check_widget %}
    {% if form.parent.parent.parent is not null %}
        {% set data = form.parent.parent.parent.vars.value %}
    {% else %}
        {% set data = form.parent.parent.vars.value %}
    {% endif %}
    {% if data and 'oro_email_mailbox' in form.parent.parent.vars.full_name %}
        {% set forEntity = 'mailbox' %}
    {% else %}
        {% set forEntity = 'user' %}
    {% endif %}
    {% set options = form.vars.options|default({})|merge({
        elementNamePrototype: full_name,
        id: form.parent.vars.value and form.parent.vars.value.id is defined ? form.parent.vars.value.id : null,
        forEntity: forEntity,
        organization: data and data.organization is defined and data.organization ? data.organization.id : null,
        parentElementSelector: 'fieldset'
    }) %}
    {% set attr = attr|merge({
        'data-role': 'check-connection-btn',
        'data-page-component-module':  'oroimap/js/app/components/check-connection-component',
        'data-page-component-options': options|json_encode|raw,
    }) %}
    <div class=\"control-group\">
        <div class=\"controls\">
            {{ form_widget(form, {'attr': attr }) }}
            <div class=\"check-connection-messages\"></div>
        </div>
    </div>
    <div class=\"container-config-group\"
         data-page-component-module=\"oroimap/js/app/components/check-config-settings\"
         data-page-component-options=\"\">
    </div>
{% endblock %}

{% block oro_imap_choice_account_type_widget %}
    {% set data = form.parent.vars.value %}

    {% set options = form.vars.options|default({})|merge({
        'route': \"oro_imap_change_account_type\",
        'formSelector': '#'~formSelector|default(form.vars.id),
        'formParentName': form.parent.vars.name,
        'organization': data and data.organization is defined and data.organization ? data.organization.id : null,
        'id': form.vars.value and form.vars.value.userEmailOrigin.id is defined ? form.vars.value.userEmailOrigin.id : null,
    }) %}

    <div class=\"container-change-account-type\"
        data-page-component-module=\"oroimap/js/app/components/account-type-component\"
        data-page-component-options=\"{{ options|json_encode }}\"
        data-layout=\"separate\"
    >
        <div {{ block('widget_container_attributes') }}>
            {%- if form.parent is empty -%}
                {{ form_errors(form) }}
            {%- endif -%}

            {% if (form.accountType is defined) %}
                {{ form_row(form.accountType) }}
            {% endif %}

            {% if form.userEmailOrigin is defined %}
                {{ form_widget(form.userEmailOrigin) }}
            {% endif %}

            {{- form_rest(form) -}}
        </div>
    </div>
{% endblock %}

{% block oro_imap_configuration_gmail_widget %}
    {% set data = form.parent.parent.vars.value %}

    {% set options = form.vars.options|default({})|merge({
        'route': 'oro_imap_change_account_type',
        'routeAccessToken': \"oro_imap_gmail_access_token\",
        'routeGetFolders': \"oro_imap_gmail_connection_check\",
        'formSelector': '#'~formSelector|default(form.vars.id),
        'vendorErrorMessage': '.google-alert',
        'formParentName' : form.parent.parent.vars.name,
        'organization': data and data.organization is defined and data.organization ? data.organization.id : null,
        'user': form.parent.userEmailOrigin.user.vars.value,
        'accessToken': form.parent.userEmailOrigin.accessToken.vars.value,
        'accessTokenExpiresAt': form.parent.userEmailOrigin.accessTokenExpiresAt.vars.value,
        'id': form.vars.value and form.vars.value.id is defined ? form.vars.value.id : null,
    }) %}

    <div class=\"container-imap-gmail-container\"
         data-page-component-module=\"oroimap/js/app/components/imap-gmail-component\"
         data-page-component-options=\"{{ options|json_encode }}\"
         {% if form.vars.is_partial %}
            data-layout=\"separate\"
         {% endif %}
    >
        <div {{ block('widget_container_attributes') }}>
            {%- if form.parent is empty -%}
                {{ form_errors(form) }}
            {%- endif -%}

            {% if form.parent.userEmailOrigin.user.vars.value is not empty %}
                <div class=\"control-group\">
                    <div class=\"control-label wrap\">
                        {{ 'oro.imap.configuration.reset_email.label'|trans }}
                    </div>
                    <div class=\"controls oro-item-collection\">
                        <div class=\"controls-line-group\">
                            <strong>{{ form.parent.userEmailOrigin.user.vars.value }}</strong>
                            <button data-role=\"remove\" class=\"btn btn-icon btn-square-lighter delete\" type=\"button\"
                                    title=\"{{ 'oro.imap.configuration.disconnect.label'|trans }}\"
                            >
                                <span class=\"fa-close\" aria-hidden=\"true\"></span>
                            </button>
                        </div>
                    </div>
                </div>
            {% endif %}

            {% if form.check is defined %}
                <div class=\"control-group\">
                    <div class=\"controls\">
                        {{ form_widget(form.check) }}
                    </div>
                </div>
            {% endif %}

            <div class=\"control-group\">
                <div class=\"controls\">
                    <div class=\"google-alert google-connection-status alert alert-error\" role=\"alert\" style=\"display: none\"></div>
                </div>
            </div>

            {% if form.checkFolder is defined %}
                <div class=\"control-group\">
                    <div class=\"controls\">
                        {{ form_widget(form.checkFolder) }}
                    </div>
                </div>
            {% endif %}

            {{- form_rest(form) -}}
        </div>
    </div>
{% endblock %}

{% block oro_config_google_imap_sync_checkbox_widget %}
    {% set options = {
        errorMessage: '.default-alert',
        successMessage: '.alert-success',
        googleErrorMessage: '.google-alert',
        googleWarningMessage: '.alert-warning'
    } %}
    <div data-page-component-module=\"oroimap/js/app/components/google-sync-checkbox-component\"
        data-page-component-options=\"{{ options|json_encode }}\" style=\"margin-top: 3px\">
        {{ block('checkbox_widget') }}
        <div class=\"alert google-connection-status alert-warning\" role=\"alert\" style=\"display: none\">
            {{ 'oro.imap.system_configuration.fields.enable_google_imap.warning.label'|trans }}
        </div>
        <div class=\"google-alert google-connection-status alert alert-error\" role=\"alert\" style=\"display: none\">

        </div>
        <div class=\"default-alert google-connection-status alert alert-error\" role=\"alert\" style=\"display: none\">
            {{ 'oro.imap.system_configuration.fields.enable_google_imap.error.label'|trans }}
        </div>
        <div class=\"alert google-connection-status alert-success\" role=\"alert\" style=\"display: none\">
            {{ 'oro.imap.system_configuration.fields.enable_google_imap.success.label'|trans }}
        </div>
    </div>
{% endblock %}



{% block oro_imap_configuration_microsoft_widget %}
    {% set data = form.parent.parent.vars.value %}

    {% set options = form.vars.options|default({})|merge({
        'route': 'oro_imap_change_account_type',
        'routeAccessToken': \"oro_imap_microsoft_access_token\",
        'routeGetFolders': \"oro_imap_microsoft_connection_check\",
        'formSelector': '#'~formSelector|default(form.vars.id),
        'vendorErrorMessage': '.vendor-alert',
        'formParentName' : form.parent.parent.vars.name,
        'organization': data and data.organization is defined and data.organization ? data.organization.id : null,
        'user': form.parent.userEmailOrigin.user.vars.value,
        'accessToken': form.parent.userEmailOrigin.accessToken.vars.value,
        'accessTokenExpiresAt': form.parent.userEmailOrigin.accessTokenExpiresAt.vars.value,
        'id': form.vars.value and form.vars.value.id is defined ? form.vars.value.id : null,
    }) %}

    <div class=\"container-imap-microsoft-container\"
         data-page-component-module=\"oroimap/js/app/components/imap-microsoft-component\"
         data-page-component-options=\"{{ options|json_encode }}\"
            {% if form.vars.is_partial %}
                data-layout=\"separate\"
            {% endif %}
    >
        <div {{ block('widget_container_attributes') }}>
            {%- if form.parent is empty -%}
                {{ form_errors(form) }}
            {%- endif -%}

            {% if form.parent.userEmailOrigin.user.vars.value is not empty %}
                <div class=\"control-group\">
                    <div class=\"control-label wrap\">
                        {{ 'oro.imap.configuration.reset_email.label'|trans }}
                    </div>
                    <div class=\"controls oro-item-collection\">
                        <div class=\"controls-line-group\">
                            <strong>{{ form.parent.userEmailOrigin.user.vars.value }}</strong>
                            <button data-role=\"remove\" class=\"btn btn-icon btn-square-lighter delete\" type=\"button\"
                                    title=\"{{ 'oro.imap.configuration.disconnect.label'|trans }}\"
                            >
                                <span class=\"fa-close\" aria-hidden=\"true\"></span>
                            </button>
                        </div>
                    </div>
                </div>
            {% endif %}

            {% if form.check is defined %}
                <div class=\"control-group\">
                    <div class=\"controls\">
                        {{ form_widget(form.check) }}
                    </div>
                </div>
            {% endif %}

            <div class=\"control-group\">
                <div class=\"controls\">
                    <div class=\"vendor-alert google-connection-status alert alert-error\" role=\"alert\" style=\"display: none\"></div>
                </div>
            </div>

            {% if form.checkFolder is defined %}
                <div class=\"control-group\">
                    <div class=\"controls\">
                        {{ form_widget(form.checkFolder) }}
                    </div>
                </div>
            {% endif %}

            {{- form_rest(form) -}}
        </div>
    </div>
{% endblock %}
", "@OroImap/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ImapBundle/Resources/views/Form/fields.html.twig");
    }
}
