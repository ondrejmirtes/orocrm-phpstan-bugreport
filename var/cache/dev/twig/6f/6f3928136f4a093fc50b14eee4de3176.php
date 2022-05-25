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

/* @OroEmail/Form/fields.html.twig */
class __TwigTemplate_0eaf948c6f25e8ec2386813e282675c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_email_configuration_oro_email___smtp_settings_password_row' => [$this, 'block__email_configuration_oro_email___smtp_settings_password_row'],
            '_email_configuration_oro_email___attachment_sync_max_size_value_widget' => [$this, 'block__email_configuration_oro_email___attachment_sync_max_size_value_widget'],
            '_oro_email_autoresponserule_template_new_entity_translations_widget' => [$this, 'block__oro_email_autoresponserule_template_new_entity_translations_widget'],
            'oro_email_template_list_row' => [$this, 'block_oro_email_template_list_row'],
            'oro_email_link_to_scope_row' => [$this, 'block_oro_email_link_to_scope_row'],
            'oro_email_attachments_row' => [$this, 'block_oro_email_attachments_row'],
            'oro_email_emailtemplate_localizations_widget' => [$this, 'block_oro_email_emailtemplate_localizations_widget'],
            'oro_email_email_folder_tree_row' => [$this, 'block_oro_email_email_folder_tree_row'],
            'oro_email_email_folder_tree_widget' => [$this, 'block_oro_email_email_folder_tree_widget'],
            'oro_email_mailbox_grid_row' => [$this, 'block_oro_email_mailbox_grid_row'],
            'oro_email_mailbox_grid_label' => [$this, 'block_oro_email_mailbox_grid_label'],
            'oro_email_mailbox_grid_widget' => [$this, 'block_oro_email_mailbox_grid_widget'],
            'oro_email_mailbox_widget' => [$this, 'block_oro_email_mailbox_widget'],
            'oro_email_emailtemplate_localization_widget' => [$this, 'block_oro_email_emailtemplate_localization_widget'],
            '_oro_email_emailtemplate_translations_template_fallback_checkbox_row' => [$this, 'block__oro_email_emailtemplate_translations_template_fallback_checkbox_row'],
            '_oro_email_autoresponserule_template_new_entity_oro_email_emailtemplate_template_fallback_checkbox_row' => [$this, 'block__oro_email_autoresponserule_template_new_entity_oro_email_emailtemplate_template_fallback_checkbox_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('_email_configuration_oro_email___smtp_settings_password_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('_email_configuration_oro_email___attachment_sync_max_size_value_widget', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('_oro_email_autoresponserule_template_new_entity_translations_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('oro_email_template_list_row', $context, $blocks);
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('oro_email_link_to_scope_row', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('oro_email_attachments_row', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('oro_email_emailtemplate_localizations_widget', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('oro_email_email_folder_tree_row', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('oro_email_email_folder_tree_widget', $context, $blocks);
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('oro_email_mailbox_grid_row', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('oro_email_mailbox_grid_label', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('oro_email_mailbox_grid_widget', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('oro_email_mailbox_widget', $context, $blocks);
        // line 306
        echo "
";
        // line 307
        $this->displayBlock('oro_email_emailtemplate_localization_widget', $context, $blocks);
        // line 320
        echo "
";
        // line 321
        $this->displayBlock('_oro_email_emailtemplate_translations_template_fallback_checkbox_row', $context, $blocks);
        // line 330
        echo "
";
        // line 331
        $this->displayBlock('_oro_email_autoresponserule_template_new_entity_oro_email_emailtemplate_template_fallback_checkbox_row', $context, $blocks);
        // line 340
        echo "
";
        // line 371
        echo "
";
        // line 401
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block__email_configuration_oro_email___smtp_settings_password_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_email_configuration_oro_email___smtp_settings_password_row", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_email_configuration_oro_email___smtp_settings_password_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_email_configuration_oro_email___smtp_settings_password_row"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'row');
        echo "

        ";
        // line 5
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "parent", [], "any", false, false, false, 5), "parent", [], "any", false, false, false, 5))) {
            // line 6
            echo "            ";
            $context["data"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "parent", [], "any", false, false, false, 6), "parent", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6);
            // line 7
            echo "        ";
        } else {
            // line 8
            echo "            ";
            $context["data"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "parent", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8);
            // line 9
            echo "        ";
        }
        // line 10
        echo "
        ";
        // line 11
        $context["options"] = twig_array_merge(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 11), "options", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 11), "options", [], "any", false, false, false, 11), [])) : ([])), ["elementNamePrototype" =>         // line 12
(isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 12, $this->source); })()), "id" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 13), "value", [], "any", false, true, false, 13), "id", [], "any", true, true, false, 13))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)) : (null)), "forEntity" => "user", "organization" => ((((        // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()) && twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "organization", [], "any", true, true, false, 15)) && twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "organization", [], "any", false, false, false, 15))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "organization", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)) : (null)), "parentElementSelector" => "fieldset", "showLoading" => true]);
        // line 19
        echo "        <div class=\"control-group\">
            <div class=\"controls\">
                <span class=\"form-text\">
                    <button class=\"btn btn-primary check-connection-messages\"
                            data-role=\"check-smtp-connection\"
                            data-page-component-module=\"";
        // line 24
        echo "oroemail/js/app/components/check-smtp-connection-component";
        echo "\"
                            data-page-component-options=\"";
        // line 25
        echo twig_escape_filter($this->env, json_encode(twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 25, $this->source); })()), ["view" => "new"])), "html", null, true);
        echo "\"
                    >";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.system_configuration.smtp_settings.check_connection.label"), "html", null, true);
        echo "</button>
                </span>
                <span class=\"form-text\">
                    <button class=\"btn btn-primary check-connection-messages\"
                            data-role=\"check-saved-smtp-connection\"
                            data-page-component-module=\"";
        // line 31
        echo "oroemail/js/app/components/check-smtp-connection-component";
        echo "\"
                            data-page-component-options=\"";
        // line 32
        echo twig_escape_filter($this->env, json_encode(twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 32, $this->source); })()), ["view" => "saved"])), "html", null, true);
        echo "\"
                    >";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.system_configuration.smtp_settings.check_saved_connection.label"), "html", null, true);
        echo "</button>
                </span>
                <div class=\"check-connection-messages check-smtp-connection-messages\"></div>
            </div>
        </div>
    ";
        $___internal_parse_45_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_parse_45_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 41
    public function block__email_configuration_oro_email___attachment_sync_max_size_value_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_email_configuration_oro_email___attachment_sync_max_size_value_widget", $this->getTemplateName(), 41));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_email_configuration_oro_email___attachment_sync_max_size_value_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_email_configuration_oro_email___attachment_sync_max_size_value_widget"));

        // line 42
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'widget');
        echo "
    ";
        // line 43
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_config_system")) {
            // line 44
            echo "    <span class=\"form-text\">
        <a class=\"btn btn-block btn-danger\"
           href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_purge_emails_attachments");
            echo "\"
           data-request-method=\"POST\"
           data-page-component-module=\"";
            // line 48
            echo "oroui/js/app/components/hidden-redirect-component";
            echo "\"
           data-page-component-options=\"";
            // line 49
            echo twig_escape_filter($this->env, json_encode(["showLoading" => true]), "html", null, true);
            echo "\"
        >";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.system_configuration.attachment_configuration.remove_larger_attachments.label"), "html", null, true);
            echo "</a>
    </span>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 55
    public function block__oro_email_autoresponserule_template_new_entity_translations_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_oro_email_autoresponserule_template_new_entity_translations_widget", $this->getTemplateName(), 55));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_email_autoresponserule_template_new_entity_translations_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_email_autoresponserule_template_new_entity_translations_widget"));

        // line 56
        echo "    ";
        $macros["email"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroEmail/Form/fields.html.twig", 56)->unwrap();
        // line 57
        echo "    ";
        $context["entityNameForm"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "parent", [], "any", false, false, false, 57), "entityName", [], "any", false, false, false, 57);
        // line 58
        echo "
    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'widget');
        echo "
    ";
        // line 60
        echo twig_call_macro($macros["email"], "macro_renderAvailableVariablesWidget", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entityNameForm"]) || array_key_exists("entityNameForm", $context) ? $context["entityNameForm"] : (function () { throw new RuntimeError('Variable "entityNameForm" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "value", [], "any", false, false, false, 60), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entityNameForm"]) || array_key_exists("entityNameForm", $context) ? $context["entityNameForm"] : (function () { throw new RuntimeError('Variable "entityNameForm" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60)], 60, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 63
    public function block_oro_email_template_list_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_email_template_list_row", $this->getTemplateName(), 63));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_template_list_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_template_list_row"));

        // line 64
        echo "    <script type=\"text/template\" id=\"emailtemplate-chooser-template\">
        <% _.each(entities, function(entity, i) { %>
        <option value=\"<%- entity.get('id') %>\"><%- entity.get('name') %></option>
        <% }); %>
    </script>

    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'row');
        echo "

    ";
        // line 72
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Form/fields.html.twig", 72)->unwrap();
        // line 73
        echo "
    ";
        // line 74
        $context["options"] = ["targetSelector" => ("#" .         // line 75
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 75, $this->source); })())), "_sourceElement" => (("[name\$=\"[" .         // line 76
(isset($context["depends_on_parent_field"]) || array_key_exists("depends_on_parent_field", $context) ? $context["depends_on_parent_field"] : (function () { throw new RuntimeError('Variable "depends_on_parent_field" does not exist.', 76, $this->source); })())) . "]\"]"), "collectionOptions" => ["route" =>         // line 78
(isset($context["data_route"]) || array_key_exists("data_route", $context) ? $context["data_route"] : (function () { throw new RuntimeError('Variable "data_route" does not exist.', 78, $this->source); })()), "routeId" =>         // line 79
(isset($context["data_route_parameter"]) || array_key_exists("data_route_parameter", $context) ? $context["data_route_parameter"] : (function () { throw new RuntimeError('Variable "data_route_parameter" does not exist.', 79, $this->source); })()), "includeNonEntity" => (((        // line 80
array_key_exists("includeNonEntity", $context) && (isset($context["includeNonEntity"]) || array_key_exists("includeNonEntity", $context) ? $context["includeNonEntity"] : (function () { throw new RuntimeError('Variable "includeNonEntity" does not exist.', 80, $this->source); })()))) ? (true) : (false)), "includeSystemTemplates" => (((        // line 81
array_key_exists("includeSystemTemplates", $context) &&  !(isset($context["includeSystemTemplates"]) || array_key_exists("includeSystemTemplates", $context) ? $context["includeSystemTemplates"] : (function () { throw new RuntimeError('Variable "includeSystemTemplates" does not exist.', 81, $this->source); })()))) ? (false) : (true))]];
        // line 84
        echo "
    <div ";
        // line 85
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroemail/js/app/views/email-template-view", "options" =>         // line 87
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 87, $this->source); })())]], 85, $context, $this->getSourceContext());
        // line 88
        echo "></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 91
    public function block_oro_email_link_to_scope_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_email_link_to_scope_row", $this->getTemplateName(), 91));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_link_to_scope_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_link_to_scope_row"));

        // line 92
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Form/fields.html.twig", 92)->unwrap();
        // line 93
        echo "
    ";
        // line 94
        $context["options"] = ["enableAttachmentSelector" => "[data-ftid=oro_entity_config_type_attachment_enabled]", "_sourceElement" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 96
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "vars", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96))];
        // line 98
        echo "
    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'row');
        echo "

    <div ";
        // line 101
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroemail/js/app/views/email-attachment-context-view", "options" =>         // line 103
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 103, $this->source); })())]], 101, $context, $this->getSourceContext());
        // line 104
        echo "></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 107
    public function block_oro_email_attachments_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_email_attachments_row", $this->getTemplateName(), 107));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_attachments_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_attachments_row"));

        // line 108
        echo "    ";
        $context["entityAttachmentsArray"] = [];
        // line 109
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 109, $this->source); })()), "entityAttachments", [], "any", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
            // line 110
            echo "        ";
            $context["entityAttachmentArray"] = ["id" => twig_get_attribute($this->env, $this->source,             // line 111
$context["attachment"], "id", [], "any", false, false, false, 111), "type" => twig_get_attribute($this->env, $this->source,             // line 112
$context["attachment"], "type", [], "any", false, false, false, 112), "fileName" => twig_get_attribute($this->env, $this->source,             // line 113
$context["attachment"], "fileName", [], "any", false, false, false, 113), "icon" => twig_get_attribute($this->env, $this->source,             // line 114
$context["attachment"], "icon", [], "any", false, false, false, 114), "errors" => twig_get_attribute($this->env, $this->source,             // line 115
$context["attachment"], "errors", [], "any", false, false, false, 115)];
            // line 117
            echo "        ";
            $context["entityAttachmentsArray"] = twig_array_merge((isset($context["entityAttachmentsArray"]) || array_key_exists("entityAttachmentsArray", $context) ? $context["entityAttachmentsArray"] : (function () { throw new RuntimeError('Variable "entityAttachmentsArray" does not exist.', 117, $this->source); })()), [0 => (isset($context["entityAttachmentArray"]) || array_key_exists("entityAttachmentArray", $context) ? $context["entityAttachmentArray"] : (function () { throw new RuntimeError('Variable "entityAttachmentArray" does not exist.', 117, $this->source); })())]);
            // line 118
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
    ";
        // line 120
        $context["attachmentsAvailableArray"] = [];
        // line 121
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 121, $this->source); })()), "attachmentsAvailable", [], "any", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
            // line 122
            echo "        ";
            $context["attachmentAvailableArray"] = ["id" => twig_get_attribute($this->env, $this->source,             // line 123
$context["attachment"], "id", [], "any", false, false, false, 123), "type" => twig_get_attribute($this->env, $this->source,             // line 124
$context["attachment"], "type", [], "any", false, false, false, 124), "fileName" => twig_get_attribute($this->env, $this->source,             // line 125
$context["attachment"], "fileName", [], "any", false, false, false, 125), "fileSize" => twig_get_attribute($this->env, $this->source,             // line 126
$context["attachment"], "fileSize", [], "any", false, false, false, 126), "modified" => twig_get_attribute($this->env, $this->source,             // line 127
$context["attachment"], "modified", [], "any", false, false, false, 127), "icon" => twig_get_attribute($this->env, $this->source,             // line 128
$context["attachment"], "icon", [], "any", false, false, false, 128), "preview" => twig_get_attribute($this->env, $this->source,             // line 129
$context["attachment"], "preview", [], "any", false, false, false, 129)];
            // line 131
            echo "        ";
            $context["attachmentsAvailableArray"] = twig_array_merge((isset($context["attachmentsAvailableArray"]) || array_key_exists("attachmentsAvailableArray", $context) ? $context["attachmentsAvailableArray"] : (function () { throw new RuntimeError('Variable "attachmentsAvailableArray" does not exist.', 131, $this->source); })()), [0 => (isset($context["attachmentAvailableArray"]) || array_key_exists("attachmentAvailableArray", $context) ? $context["attachmentAvailableArray"] : (function () { throw new RuntimeError('Variable "attachmentAvailableArray" does not exist.', 131, $this->source); })())]);
            // line 132
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
    ";
        // line 134
        $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 134, $this->source); })()), ["containerId" =>         // line 135
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 135, $this->source); })()), "inputName" =>         // line 136
(isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 136, $this->source); })()), "entityAttachments" =>         // line 137
(isset($context["entityAttachmentsArray"]) || array_key_exists("entityAttachmentsArray", $context) ? $context["entityAttachmentsArray"] : (function () { throw new RuntimeError('Variable "entityAttachmentsArray" does not exist.', 137, $this->source); })()), "attachmentsAvailable" =>         // line 138
(isset($context["attachmentsAvailableArray"]) || array_key_exists("attachmentsAvailableArray", $context) ? $context["attachmentsAvailableArray"] : (function () { throw new RuntimeError('Variable "attachmentsAvailableArray" does not exist.', 138, $this->source); })()), "fileIcons" => $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFileIconsConfig()]);
        // line 141
        echo "
    <div data-page-component-module=\"oroemail/js/app/components/email-attachment-component\"
         data-page-component-options=\"";
        // line 143
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 143, $this->source); })())), "html", null, true);
        echo "\"
         class=\"attachment-container\">
        ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'row');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 149
    public function block_oro_email_emailtemplate_localizations_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_email_emailtemplate_localizations_widget", $this->getTemplateName(), 149));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_emailtemplate_localizations_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_emailtemplate_localizations_widget"));

        // line 150
        echo "    ";
        $macros["emailFormFealds"] = $this;
        // line 151
        echo "
    ";
        // line 152
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Form/fields.html.twig", 152)->unwrap();
        // line 153
        echo "    <div class=\"emailtemplate-translatation oro-tabs tabbable\" ";
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroemail/js/app/views/email-translation-view"]], 153, $context, $this->getSourceContext());
        // line 155
        echo ">
        ";
        // line 156
        $context["tabId"] = uniqid("email-translation-");
        // line 157
        echo "        ";
        $context["tabContentId"] = (isset($context["tabId"]) || array_key_exists("tabId", $context) ? $context["tabId"] : (function () { throw new RuntimeError('Variable "tabId" does not exist.', 157, $this->source); })());
        // line 158
        echo "        <div class=\"oro-tabs__head\"  ";
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/tabs-component"]], 158, $context, $this->getSourceContext());
        // line 160
        echo ">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                ";
        // line 162
        ob_start();
        // line 163
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["templateLocalization"]) {
            // line 164
            echo "                        ";
            echo twig_call_macro($macros["emailFormFealds"], "macro_renderTabNavItem", [$context["templateLocalization"], twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 164), (((isset($context["tabId"]) || array_key_exists("tabId", $context) ? $context["tabId"] : (function () { throw new RuntimeError('Variable "tabId" does not exist.', 164, $this->source); })()) . "-") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 164))], 164, $context, $this->getSourceContext());
            echo "
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['templateLocalization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                ";
        $___internal_parse_46_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 162
        echo twig_spaceless($___internal_parse_46_);
        // line 167
        echo "            </ul>
        </div>
        <div class=\"oro-tabs__content\">
            <div class=\"tab-content\">
                ";
        // line 171
        ob_start();
        // line 172
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["templateLocalization"]) {
            // line 173
            echo "                        ";
            echo twig_call_macro($macros["emailFormFealds"], "macro_renderTab", [$context["templateLocalization"], twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 173), (((isset($context["tabContentId"]) || array_key_exists("tabContentId", $context) ? $context["tabContentId"] : (function () { throw new RuntimeError('Variable "tabContentId" does not exist.', 173, $this->source); })()) . "-") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 173))], 173, $context, $this->getSourceContext());
            echo "
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['templateLocalization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                ";
        $___internal_parse_47_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 171
        echo twig_spaceless($___internal_parse_47_);
        // line 176
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 181
    public function block_oro_email_email_folder_tree_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_email_email_folder_tree_row", $this->getTemplateName(), 181));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_email_folder_tree_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_email_folder_tree_row"));

        // line 182
        echo "    ";
        if (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "vars", [], "any", false, false, false, 182), "value", [], "any", false, false, false, 182)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "vars", [], "any", false, false, false, 182), "value", [], "any", false, false, false, 182)) > 0))) {
            // line 183
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), 'row');
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 187
    public function block_oro_email_email_folder_tree_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_email_email_folder_tree_widget", $this->getTemplateName(), 187));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_email_folder_tree_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_email_folder_tree_widget"));

        // line 188
        echo "    ";
        $macros["emailFormFealds"] = $this;
        // line 189
        echo "
    ";
        // line 190
        $context["options"] = ["dataInputSelector" => (("input[name=\"" .         // line 191
(isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 191, $this->source); })())) . "\"]"), "checkAllSelector" => ".check-all", "relatedCheckboxesSelector" => ".folder-list :checkbox"];
        // line 195
        echo "    <div class=\"folder-tree-widget\"
         data-page-component-module=\"oroemail/js/app/components/folder-tree-component\"
         data-page-component-options=\"";
        // line 197
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 197, $this->source); })())), "html", null, true);
        echo "\"
         data-layout=\"separate\"
    >
        <label class=\"folder-label\">
            <input class=\"check-all\" type=\"checkbox\">
            ";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.imap.folder.checkAll"), "html", null, true);
        echo "
        </label>
        <div class=\"folder-list\">
            ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "vars", [], "any", false, false, false, 205), "value", [], "any", false, false, false, 205));
        foreach ($context['_seq'] as $context["key"] => $context["folder"]) {
            // line 206
            echo "                ";
            if (((null === twig_get_attribute($this->env, $this->source, $context["folder"], "parentFolder", [], "any", false, false, false, 206)) && (null === twig_get_attribute($this->env, $this->source, $context["folder"], "outdatedAt", [], "any", false, false, false, 206)))) {
                // line 207
                echo "                    ";
                echo twig_call_macro($macros["emailFormFealds"], "macro_renderFolder", [$context["key"], $context["folder"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "vars", [], "any", false, false, false, 207), "full_name", [], "any", false, false, false, 207)], 207, $context, $this->getSourceContext());
                echo "
                ";
            }
            // line 209
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "        </div>
        <input name=\"";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 211, $this->source); })()), "html", null, true);
        echo "\" type=\"hidden\">
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 215
    public function block_oro_email_mailbox_grid_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_email_mailbox_grid_row", $this->getTemplateName(), 215));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_mailbox_grid_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_mailbox_grid_row"));

        // line 216
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), 'label');
        echo "
    ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), 'widget');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 220
    public function block_oro_email_mailbox_grid_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_email_mailbox_grid_label", $this->getTemplateName(), 220));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_mailbox_grid_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_mailbox_grid_label"));

        // line 221
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Form/fields.html.twig", 221)->unwrap();
        // line 222
        echo "    ";
        $context["redirectData"] = ["route" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 223
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 223, $this->source); })()), "request", [], "any", false, false, false, 223), "attributes", [], "any", false, false, false, 223), "get", [0 => "_route"], "method", false, false, false, 223), "parameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 224
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 224, $this->source); })()), "request", [], "any", false, false, false, 224), "attributes", [], "any", false, false, false, 224), "get", [0 => "_route_params"], "method", false, false, false, 224)];
        // line 226
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_organization_update")) {
            // line 227
            echo "        <div class=\"row user-fieldset-block-actions\">
            <div class=\"btn-group\">
                ";
            // line 229
            echo twig_call_macro($macros["UI"], "macro_addButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_mailbox_create", ["redirectData" =>             // line 230
(isset($context["redirectData"]) || array_key_exists("redirectData", $context) ? $context["redirectData"] : (function () { throw new RuntimeError('Variable "redirectData" does not exist.', 230, $this->source); })())]), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.system_configuration.mailbox_configuration.add_mailbox.label")]], 229, $context, $this->getSourceContext());
            // line 232
            echo "
            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 238
    public function block_oro_email_mailbox_grid_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_email_mailbox_grid_widget", $this->getTemplateName(), 238));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_mailbox_grid_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_mailbox_grid_widget"));

        // line 239
        echo "    ";
        $macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroEmail/Form/fields.html.twig", 239)->unwrap();
        // line 240
        echo "    ";
        $context["redirectData"] = ["route" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 241
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 241, $this->source); })()), "request", [], "any", false, false, false, 241), "attributes", [], "any", false, false, false, 241), "get", [0 => "_route"], "method", false, false, false, 241), "parameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 242
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 242, $this->source); })()), "request", [], "any", false, false, false, 242), "attributes", [], "any", false, false, false, 242), "get", [0 => "_route_params"], "method", false, false, false, 242)];
        // line 244
        echo "    <div class=\"row user-fieldset-block-body\">
        ";
        // line 245
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", ["base-mailboxes-grid", ["redirectData" =>         // line 246
(isset($context["redirectData"]) || array_key_exists("redirectData", $context) ? $context["redirectData"] : (function () { throw new RuntimeError('Variable "redirectData" does not exist.', 246, $this->source); })()), "organization_ids" => [0 => twig_get_attribute($this->env, $this->source, $this->extensions['Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension']->getCurrentOrganization(), "getId", [], "method", false, false, false, 246)]]], 245, $context, $this->getSourceContext());
        // line 247
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 251
    public function block_oro_email_mailbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_email_mailbox_widget", $this->getTemplateName(), 251));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_mailbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_mailbox_widget"));

        // line 252
        echo "    ";
        ob_start();
        // line 253
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, true, false, 253), "origin", [], "any", true, true, false, 253)) {
            // line 254
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "children", [], "any", false, false, false, 254), "origin", [], "any", false, false, false, 254), 'widget');
            echo "
            ";
            // line 255
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "children", [], "any", false, false, false, 255), "origin", [], "any", false, false, false, 255), 'errors');
            echo "
        ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 256
($context["form"] ?? null), "children", [], "any", false, true, false, 256), "imapAccountType", [], "any", true, true, false, 256)) {
            // line 257
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "children", [], "any", false, false, false, 257), "imapAccountType", [], "any", false, false, false, 257), 'widget');
            echo "
            ";
            // line 258
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "children", [], "any", false, false, false, 258), "imapAccountType", [], "any", false, false, false, 258), 'errors');
            echo "
        ";
        }
        // line 260
        echo "    ";
        $context["imapAccountType"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 261
        echo "
    ";
        // line 262
        $context["process"] = ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "children", [], "any", false, false, false, 262), "processType", [], "any", false, false, false, 262), 'row') .         // line 263
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "children", [], "any", false, false, false, 263), "processSettings", [], "any", false, false, false, 263), 'widget'));
        // line 264
        echo "    ";
        $context["access"] = ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "children", [], "any", false, false, false, 264), "authorizedUsers", [], "any", false, false, false, 264), 'row') .         // line 265
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "children", [], "any", false, false, false, 265), "authorizedRoles", [], "any", false, false, false, 265), 'row'));
        // line 267
        echo "    ";
        $context["options"] = ["el" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 268
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "vars", [], "any", false, false, false, 268), "id", [], "any", false, false, false, 268))];
        // line 270
        echo "    <div data-page-component-module=\"oroemail/js/app/views/mailbox-update-view\"
         data-page-component-options=\"";
        // line 271
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 271, $this->source); })())), "html", null, true);
        echo "\">
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5 class=\"user-fieldset\">
                <span>";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.mailbox.general.label"), "html", null, true);
        echo "</span>
            </h5>
            <div class=\"control-group-wrapper\">
                ";
        // line 277
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 277, $this->source); })()), 'widget');
        echo "
            </div>
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5 class=\"user-fieldset\">
                <span>";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.mailbox.origin.label"), "html", null, true);
        echo "</span>
            </h5>
            <div class=\"control-group-wrapper\">
                ";
        // line 285
        echo (isset($context["imapAccountType"]) || array_key_exists("imapAccountType", $context) ? $context["imapAccountType"] : (function () { throw new RuntimeError('Variable "imapAccountType" does not exist.', 285, $this->source); })());
        echo "
            </div>
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5 class=\"user-fieldset\">
                <span>";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.mailbox.process.label"), "html", null, true);
        echo "</span>
            </h5>
            <div class=\"control-group-wrapper\">
                ";
        // line 293
        echo (isset($context["process"]) || array_key_exists("process", $context) ? $context["process"] : (function () { throw new RuntimeError('Variable "process" does not exist.', 293, $this->source); })());
        echo "
            </div>
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5 class=\"user-fieldset\">
                <span>";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.mailbox.access.label"), "html", null, true);
        echo "</span>
            </h5>
            <div class=\"control-group-wrapper\">
                ";
        // line 301
        echo (isset($context["access"]) || array_key_exists("access", $context) ? $context["access"] : (function () { throw new RuntimeError('Variable "access" does not exist.', 301, $this->source); })());
        echo "
            </div>
        </fieldset>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 307
    public function block_oro_email_emailtemplate_localization_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_email_emailtemplate_localization_widget", $this->getTemplateName(), 307));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_emailtemplate_localization_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_email_emailtemplate_localization_widget"));

        // line 308
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "subject", [], "any", false, false, false, 309), 'row');
        echo "
        ";
        // line 310
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subjectFallback", [], "any", true, true, false, 310)) {
            // line 311
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 311, $this->source); })()), "subjectFallback", [], "any", false, false, false, 311), 'row');
            echo "
        ";
        }
        // line 313
        echo "
        ";
        // line 314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 314, $this->source); })()), "content", [], "any", false, false, false, 314), 'row');
        echo "
        ";
        // line 315
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contentFallback", [], "any", true, true, false, 315)) {
            // line 316
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "contentFallback", [], "any", false, false, false, 316), 'row');
            echo "
        ";
        }
        // line 318
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 321
    public function block__oro_email_emailtemplate_translations_template_fallback_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_oro_email_emailtemplate_translations_template_fallback_checkbox_row", $this->getTemplateName(), 321));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_email_emailtemplate_translations_template_fallback_checkbox_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_email_emailtemplate_translations_template_fallback_checkbox_row"));

        // line 322
        echo "    <div class=\"control-group control-group-checkbox\">
        <div class=\"control-label wrap\">&nbsp;</div>
        <div class=\"controls\">
            ";
        // line 325
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), 'widget');
        echo "
            ";
        // line 326
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 326, $this->source); })()), 'label');
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 331
    public function block__oro_email_autoresponserule_template_new_entity_oro_email_emailtemplate_template_fallback_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_oro_email_autoresponserule_template_new_entity_oro_email_emailtemplate_template_fallback_checkbox_row", $this->getTemplateName(), 331));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_email_autoresponserule_template_new_entity_oro_email_emailtemplate_template_fallback_checkbox_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_email_autoresponserule_template_new_entity_oro_email_emailtemplate_template_fallback_checkbox_row"));

        // line 332
        echo "    <div class=\"control-group control-group-checkbox\">
        <div class=\"control-label wrap\">&nbsp;</div>
        <div class=\"controls\">
            ";
        // line 335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), 'widget');
        echo "
            ";
        // line 336
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 336, $this->source); })()), 'label');
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 348
    public function macro_renderTabNavItem($__form__ = null, $__isActive__ = false, $__uniqid__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "isActive" => $__isActive__,
            "uniqid" => $__uniqid__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTabNavItem"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTabNavItem"));

            // line 349
            echo "    <li class=\"nav-item\">
        <a href=\"#\"
           class=\"nav-link ";
            // line 351
            if ((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 351, $this->source); })())) {
                echo "active";
            }
            echo "\"
           data-role=\"change-localization\"
           data-target=\".emailtemplate-translatation-fields-";
            // line 353
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "vars", [], "any", false, false, false, 353), "name", [], "any", false, false, false, 353), "html", null, true);
            echo "\"
           data-toggle=\"tab\"
           data-related=\"";
            // line 355
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 355, $this->source); })()), "vars", [], "any", false, false, false, 355), "name", [], "any", false, false, false, 355), "html", null, true);
            echo "\"
           role=\"tab\"
           aria-selected=\"";
            // line 357
            echo (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 357, $this->source); })())) ? ("true") : ("false"));
            echo "\"
                ";
            // line 358
            if ((isset($context["uniqid"]) || array_key_exists("uniqid", $context) ? $context["uniqid"] : (function () { throw new RuntimeError('Variable "uniqid" does not exist.', 358, $this->source); })())) {
                // line 359
                echo "                    id=\"";
                echo twig_escape_filter($this->env, ((isset($context["uniqid"]) || array_key_exists("uniqid", $context) ? $context["uniqid"] : (function () { throw new RuntimeError('Variable "uniqid" does not exist.', 359, $this->source); })()) . "-tab"), "html", null, true);
                echo "\"
                    aria-controls=\"";
                // line 360
                echo twig_escape_filter($this->env, (isset($context["uniqid"]) || array_key_exists("uniqid", $context) ? $context["uniqid"] : (function () { throw new RuntimeError('Variable "uniqid" does not exist.', 360, $this->source); })()), "html", null, true);
                echo "\"
                ";
            }
            // line 362
            echo "        >";
            // line 363
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), "vars", [], "any", false, false, false, 363), "localization_title", [], "any", false, false, false, 363))) {
                // line 364
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 364, $this->source); })()), "vars", [], "any", false, false, false, 364), "localization_title", [], "any", false, false, false, 364), "html", null, true);
            } else {
                // line 366
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailtemplatetranslation.form.default_localization"), "html", null, true);
            }
            // line 368
            echo "</a>
    </li>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 379
    public function macro_renderTab($__form__ = null, $__isActive__ = false, $__uniqid__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "isActive" => $__isActive__,
            "uniqid" => $__uniqid__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTab"));

            // line 380
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Form/fields.html.twig", 380)->unwrap();
            // line 381
            echo "
    <div class=\"emailtemplate-translatation-fields-";
            // line 382
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 382, $this->source); })()), "vars", [], "any", false, false, false, 382), "name", [], "any", false, false, false, 382), "html", null, true);
            echo " tab-pane";
            if ((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 382, $this->source); })())) {
                echo " active";
            }
            echo "\"
         role=\"tabpanel\"
            ";
            // line 384
            if ((isset($context["uniqid"]) || array_key_exists("uniqid", $context) ? $context["uniqid"] : (function () { throw new RuntimeError('Variable "uniqid" does not exist.', 384, $this->source); })())) {
                // line 385
                echo "                id=\"";
                echo twig_escape_filter($this->env, (isset($context["uniqid"]) || array_key_exists("uniqid", $context) ? $context["uniqid"] : (function () { throw new RuntimeError('Variable "uniqid" does not exist.', 385, $this->source); })()), "html", null, true);
                echo "\"
                aria-labelledby=\"";
                // line 386
                echo twig_escape_filter($this->env, ((isset($context["uniqid"]) || array_key_exists("uniqid", $context) ? $context["uniqid"] : (function () { throw new RuntimeError('Variable "uniqid" does not exist.', 386, $this->source); })()) . "-tab"), "html", null, true);
                echo "\"
            ";
            }
            // line 388
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroemail/js/app/views/email-template-localization-view", "options" => ["localization" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 392
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 392, $this->source); })()), "vars", [], "any", false, false, false, 392), "localization_id", [], "any", false, false, false, 392), "parentId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 393
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), "vars", [], "any", false, false, false, 393), "localization_parent_id", [], "any", false, false, false, 393)]]]], 388, $context, $this->getSourceContext());
            // line 396
            echo "
    >
        ";
            // line 398
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 398, $this->source); })()), 'widget');
            echo "
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 402
    public function macro_renderFolder($__key__ = null, $__folder__ = null, $__namePrefix__ = null, $__maxDepth__ = 10, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "key" => $__key__,
            "folder" => $__folder__,
            "namePrefix" => $__namePrefix__,
            "maxDepth" => $__maxDepth__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderFolder"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderFolder"));

            // line 403
            echo "    ";
            $macros["emailFormFealds"] = $this;
            // line 404
            echo "    ";
            if ((isset($context["maxDepth"]) || array_key_exists("maxDepth", $context) ? $context["maxDepth"] : (function () { throw new RuntimeError('Variable "maxDepth" does not exist.', 404, $this->source); })())) {
                // line 405
                echo "        <div>
            <label class=\"folder-label\">
                <input type=\"checkbox\" data-name=\"syncEnabled\"";
                // line 407
                if (twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 407, $this->source); })()), "syncEnabled", [], "any", false, false, false, 407)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                ";
                // line 408
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 408, $this->source); })()), "name", [], "any", false, false, false, 408), "html", null, true);
                echo "
            </label>
            <input type=\"hidden\" data-name=\"fullName\" value=\"";
                // line 410
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 410, $this->source); })()), "fullName", [], "any", false, false, false, 410), "html", null, true);
                echo "\">
            <input type=\"hidden\" data-name=\"name\" value=\"";
                // line 411
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 411, $this->source); })()), "name", [], "any", false, false, false, 411), "html", null, true);
                echo "\">
            <input type=\"hidden\" data-name=\"type\" value=\"";
                // line 412
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 412, $this->source); })()), "type", [], "any", false, false, false, 412), "html", null, true);
                echo "\">
            ";
                // line 413
                if ((((isset($context["maxDepth"]) || array_key_exists("maxDepth", $context) ? $context["maxDepth"] : (function () { throw new RuntimeError('Variable "maxDepth" does not exist.', 413, $this->source); })()) > 1) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 413, $this->source); })()), "subFolders", [], "any", false, false, false, 413)) > 0))) {
                    // line 414
                    echo "                <div class=\"folder-sub-folders\">
                    ";
                    // line 415
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["folder"]) || array_key_exists("folder", $context) ? $context["folder"] : (function () { throw new RuntimeError('Variable "folder" does not exist.', 415, $this->source); })()), "subFolders", [], "any", false, false, false, 415));
                    foreach ($context['_seq'] as $context["subKey"] => $context["subFolder"]) {
                        // line 416
                        echo "                        ";
                        echo twig_call_macro($macros["emailFormFealds"], "macro_renderFolder", [$context["subKey"], $context["subFolder"], ((((isset($context["namePrefix"]) || array_key_exists("namePrefix", $context) ? $context["namePrefix"] : (function () { throw new RuntimeError('Variable "namePrefix" does not exist.', 416, $this->source); })()) . "[") . (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 416, $this->source); })())) . "][subFolders]"), ((isset($context["maxDepth"]) || array_key_exists("maxDepth", $context) ? $context["maxDepth"] : (function () { throw new RuntimeError('Variable "maxDepth" does not exist.', 416, $this->source); })()) - 1)], 416, $context, $this->getSourceContext());
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['subKey'], $context['subFolder'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 418
                    echo "                </div>
            ";
                }
                // line 420
                echo "        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroEmail/Form/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1441 => 420,  1437 => 418,  1428 => 416,  1424 => 415,  1421 => 414,  1419 => 413,  1415 => 412,  1411 => 411,  1407 => 410,  1402 => 408,  1396 => 407,  1392 => 405,  1389 => 404,  1386 => 403,  1364 => 402,  1346 => 398,  1342 => 396,  1340 => 393,  1339 => 392,  1337 => 388,  1332 => 386,  1327 => 385,  1325 => 384,  1316 => 382,  1313 => 381,  1310 => 380,  1289 => 379,  1272 => 368,  1269 => 366,  1266 => 364,  1264 => 363,  1262 => 362,  1257 => 360,  1252 => 359,  1250 => 358,  1246 => 357,  1241 => 355,  1236 => 353,  1229 => 351,  1225 => 349,  1204 => 348,  1187 => 336,  1183 => 335,  1178 => 332,  1165 => 331,  1148 => 326,  1144 => 325,  1139 => 322,  1126 => 321,  1112 => 318,  1107 => 316,  1105 => 315,  1101 => 314,  1098 => 313,  1093 => 311,  1091 => 310,  1087 => 309,  1082 => 308,  1069 => 307,  1051 => 301,  1045 => 298,  1037 => 293,  1031 => 290,  1023 => 285,  1017 => 282,  1009 => 277,  1003 => 274,  997 => 271,  994 => 270,  992 => 268,  990 => 267,  988 => 265,  986 => 264,  984 => 263,  983 => 262,  980 => 261,  977 => 260,  972 => 258,  967 => 257,  965 => 256,  961 => 255,  956 => 254,  953 => 253,  950 => 252,  937 => 251,  922 => 247,  920 => 246,  919 => 245,  916 => 244,  914 => 242,  913 => 241,  911 => 240,  908 => 239,  895 => 238,  878 => 232,  876 => 230,  875 => 229,  871 => 227,  868 => 226,  866 => 224,  865 => 223,  863 => 222,  860 => 221,  847 => 220,  832 => 217,  827 => 216,  814 => 215,  798 => 211,  795 => 210,  789 => 209,  783 => 207,  780 => 206,  776 => 205,  770 => 202,  762 => 197,  758 => 195,  756 => 191,  755 => 190,  752 => 189,  749 => 188,  736 => 187,  719 => 183,  716 => 182,  703 => 181,  687 => 176,  685 => 171,  682 => 175,  665 => 173,  647 => 172,  645 => 171,  639 => 167,  637 => 162,  634 => 166,  617 => 164,  599 => 163,  597 => 162,  593 => 160,  590 => 158,  587 => 157,  585 => 156,  582 => 155,  579 => 153,  577 => 152,  574 => 151,  571 => 150,  558 => 149,  542 => 145,  537 => 143,  533 => 141,  531 => 138,  530 => 137,  529 => 136,  528 => 135,  527 => 134,  524 => 133,  518 => 132,  515 => 131,  513 => 129,  512 => 128,  511 => 127,  510 => 126,  509 => 125,  508 => 124,  507 => 123,  505 => 122,  500 => 121,  498 => 120,  495 => 119,  489 => 118,  486 => 117,  484 => 115,  483 => 114,  482 => 113,  481 => 112,  480 => 111,  478 => 110,  473 => 109,  470 => 108,  457 => 107,  443 => 104,  441 => 103,  440 => 101,  435 => 99,  432 => 98,  430 => 96,  429 => 94,  426 => 93,  423 => 92,  410 => 91,  396 => 88,  394 => 87,  393 => 85,  390 => 84,  388 => 81,  387 => 80,  386 => 79,  385 => 78,  384 => 76,  383 => 75,  382 => 74,  379 => 73,  377 => 72,  372 => 70,  364 => 64,  351 => 63,  336 => 60,  332 => 59,  329 => 58,  326 => 57,  323 => 56,  310 => 55,  293 => 50,  289 => 49,  285 => 48,  280 => 46,  276 => 44,  274 => 43,  269 => 42,  256 => 41,  243 => 2,  234 => 33,  230 => 32,  226 => 31,  218 => 26,  214 => 25,  210 => 24,  203 => 19,  201 => 15,  200 => 13,  199 => 12,  198 => 11,  195 => 10,  192 => 9,  189 => 8,  186 => 7,  183 => 6,  181 => 5,  175 => 3,  172 => 2,  159 => 1,  145 => 401,  142 => 371,  139 => 340,  137 => 331,  134 => 330,  132 => 321,  129 => 320,  127 => 307,  124 => 306,  122 => 251,  119 => 250,  117 => 238,  114 => 237,  112 => 220,  109 => 219,  107 => 215,  104 => 214,  102 => 187,  99 => 186,  97 => 181,  94 => 180,  92 => 149,  89 => 148,  87 => 107,  84 => 106,  82 => 91,  79 => 90,  77 => 63,  74 => 62,  72 => 55,  69 => 54,  67 => 41,  64 => 40,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block _email_configuration_oro_email___smtp_settings_password_row %}
    {% apply spaceless %}
        {{ form_row(form) }}

        {% if form.parent.parent is not null %}
            {% set data = form.parent.parent.vars.value %}
        {% else %}
            {% set data = form.parent.vars.value %}
        {% endif %}

        {% set options = form.vars.options|default({})|merge({
            elementNamePrototype: full_name,
            id: form.vars.value and form.vars.value.id is defined ? form.vars.value.id : null,
            forEntity: 'user',
            organization: data and data.organization is defined and data.organization ? data.organization.id : null,
            parentElementSelector: 'fieldset',
            showLoading: true
        }) %}
        <div class=\"control-group\">
            <div class=\"controls\">
                <span class=\"form-text\">
                    <button class=\"btn btn-primary check-connection-messages\"
                            data-role=\"check-smtp-connection\"
                            data-page-component-module=\"{{ 'oroemail/js/app/components/check-smtp-connection-component' }}\"
                            data-page-component-options=\"{{ options|merge({view: 'new'})|json_encode }}\"
                    >{{ 'oro.email.system_configuration.smtp_settings.check_connection.label'|trans }}</button>
                </span>
                <span class=\"form-text\">
                    <button class=\"btn btn-primary check-connection-messages\"
                            data-role=\"check-saved-smtp-connection\"
                            data-page-component-module=\"{{ 'oroemail/js/app/components/check-smtp-connection-component' }}\"
                            data-page-component-options=\"{{ options|merge({view: 'saved'})|json_encode }}\"
                    >{{ 'oro.email.system_configuration.smtp_settings.check_saved_connection.label'|trans }}</button>
                </span>
                <div class=\"check-connection-messages check-smtp-connection-messages\"></div>
            </div>
        </div>
    {% endapply %}
{% endblock %}

{% block _email_configuration_oro_email___attachment_sync_max_size_value_widget %}
    {{ form_widget(form) }}
    {% if is_granted('oro_config_system') %}
    <span class=\"form-text\">
        <a class=\"btn btn-block btn-danger\"
           href=\"{{ path('oro_email_purge_emails_attachments') }}\"
           data-request-method=\"POST\"
           data-page-component-module=\"{{ 'oroui/js/app/components/hidden-redirect-component' }}\"
           data-page-component-options=\"{{ {showLoading: true}|json_encode }}\"
        >{{ 'oro.email.system_configuration.attachment_configuration.remove_larger_attachments.label'|trans }}</a>
    </span>
    {% endif %}
{% endblock %}

{% block _oro_email_autoresponserule_template_new_entity_translations_widget %}
    {% import '@OroEmail/macros.html.twig' as email %}
    {% set entityNameForm = form.parent.entityName %}

    {{ form_widget(form) }}
    {{ email.renderAvailableVariablesWidget(entityNameForm.vars.value, entityNameForm.vars.id) }}
{% endblock %}

{% block oro_email_template_list_row %}
    <script type=\"text/template\" id=\"emailtemplate-chooser-template\">
        <% _.each(entities, function(entity, i) { %>
        <option value=\"<%- entity.get('id') %>\"><%- entity.get('name') %></option>
        <% }); %>
    </script>

    {{ form_row(form) }}

    {% import '@OroUI/macros.html.twig' as UI %}

    {% set options = {
        targetSelector: '#' ~ id,
        _sourceElement: '[name\$=\"[' ~ depends_on_parent_field ~ ']\"]',
        collectionOptions: {
            route: data_route,
            routeId: data_route_parameter,
            includeNonEntity: includeNonEntity is defined and includeNonEntity ? true : false,
            includeSystemTemplates: includeSystemTemplates is defined and not includeSystemTemplates ? false : true
        }
    } %}

    <div {{ UI.renderPageComponentAttributes({
        view: 'oroemail/js/app/views/email-template-view',
        options: options
    }) }}></div>
{% endblock %}

{% block oro_email_link_to_scope_row %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set options = {
        enableAttachmentSelector: '[data-ftid=oro_entity_config_type_attachment_enabled]',
        _sourceElement: '#' ~ form.vars.id,
    } %}

    {{ form_row(form) }}

    <div {{ UI.renderPageComponentAttributes({
        view: 'oroemail/js/app/views/email-attachment-context-view',
        options: options
    }) }}></div>
{% endblock %}

{% block oro_email_attachments_row %}
    {% set entityAttachmentsArray = [] %}
    {% for attachment in options.entityAttachments %}
        {% set entityAttachmentArray = {
            'id': attachment.id,
            'type': attachment.type,
            'fileName': attachment.fileName,
            'icon': attachment.icon,
            'errors': attachment.errors
        } %}
        {% set entityAttachmentsArray = entityAttachmentsArray|merge([entityAttachmentArray]) %}
    {% endfor %}

    {% set attachmentsAvailableArray = [] %}
    {% for attachment in options.attachmentsAvailable %}
        {% set attachmentAvailableArray = {
            'id': attachment.id,
            'type': attachment.type,
            'fileName': attachment.fileName,
            'fileSize': attachment.fileSize,
            'modified': attachment.modified,
            'icon': attachment.icon,
            'preview': attachment.preview
        } %}
        {% set attachmentsAvailableArray = attachmentsAvailableArray|merge([attachmentAvailableArray]) %}
    {% endfor %}

    {% set options = options|merge({
        containerId: id,
        inputName: full_name,
        entityAttachments: entityAttachmentsArray,
        attachmentsAvailable: attachmentsAvailableArray,
        fileIcons: oro_file_icons_config()
    }) %}

    <div data-page-component-module=\"oroemail/js/app/components/email-attachment-component\"
         data-page-component-options=\"{{ options|json_encode }}\"
         class=\"attachment-container\">
        {{ form_row(form) }}
    </div>
{% endblock %}

{% block oro_email_emailtemplate_localizations_widget %}
    {% import _self as emailFormFealds %}

    {% import '@OroUI/macros.html.twig' as UI %}
    <div class=\"emailtemplate-translatation oro-tabs tabbable\" {{ UI.renderPageComponentAttributes({
        view: 'oroemail/js/app/views/email-translation-view'
    }) }}>
        {% set tabId = 'email-translation-'|uniqid %}
        {% set tabContentId = tabId %}
        <div class=\"oro-tabs__head\"  {{ UI.renderPageComponentAttributes({
            module: 'oroui/js/app/components/tabs-component'
        }) }}>
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                {% apply spaceless %}
                    {% for templateLocalization in form %}
                        {{ emailFormFealds.renderTabNavItem(templateLocalization, loop.first, tabId ~ '-' ~ loop.index) }}
                    {% endfor %}
                {% endapply %}
            </ul>
        </div>
        <div class=\"oro-tabs__content\">
            <div class=\"tab-content\">
                {% apply spaceless %}
                    {% for templateLocalization in form %}
                        {{ emailFormFealds.renderTab(templateLocalization, loop.first, tabContentId ~ '-' ~ loop.index) }}
                    {% endfor %}
                {% endapply %}
            </div>
        </div>
    </div>
{% endblock %}

{% block oro_email_email_folder_tree_row %}
    {% if form.vars.value is not null and form.vars.value|length > 0 %}
        {{ form_row(form) }}
    {% endif %}
{% endblock %}

{% block oro_email_email_folder_tree_widget %}
    {% import _self as emailFormFealds %}

    {% set options = {
        dataInputSelector: 'input[name=\"' ~ full_name ~ '\"]',
        checkAllSelector: '.check-all',
        relatedCheckboxesSelector: '.folder-list :checkbox'
    } %}
    <div class=\"folder-tree-widget\"
         data-page-component-module=\"oroemail/js/app/components/folder-tree-component\"
         data-page-component-options=\"{{ options|json_encode }}\"
         data-layout=\"separate\"
    >
        <label class=\"folder-label\">
            <input class=\"check-all\" type=\"checkbox\">
            {{ \"oro.email.imap.folder.checkAll\"|trans }}
        </label>
        <div class=\"folder-list\">
            {% for key, folder in form.vars.value %}
                {% if folder.parentFolder is null and folder.outdatedAt is null %}
                    {{ emailFormFealds.renderFolder(key, folder, form.vars.full_name) }}
                {% endif %}
            {% endfor %}
        </div>
        <input name=\"{{ full_name }}\" type=\"hidden\">
    </div>
{% endblock %}

{% block oro_email_mailbox_grid_row %}
    {{ form_label(form) }}
    {{ form_widget(form) }}
{% endblock %}

{% block oro_email_mailbox_grid_label %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% set redirectData = {
        'route': app.request.attributes.get('_route'),
        'parameters': app.request.attributes.get('_route_params'),
    } %}
    {% if is_granted('oro_organization_update') %}
        <div class=\"row user-fieldset-block-actions\">
            <div class=\"btn-group\">
                {{ UI.addButton({
                    'path': path('oro_email_mailbox_create', {redirectData: redirectData}),
                    'label': 'oro.email.system_configuration.mailbox_configuration.add_mailbox.label'|trans
                }) }}
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block oro_email_mailbox_grid_widget %}
    {% import '@OroDataGrid/macros.html.twig' as dataGrid %}
    {% set redirectData = {
        'route': app.request.attributes.get('_route'),
        'parameters': app.request.attributes.get('_route_params')
    } %}
    <div class=\"row user-fieldset-block-body\">
        {{ dataGrid.renderGrid('base-mailboxes-grid', {
            'redirectData': redirectData, 'organization_ids': [get_current_organization().getId()]
        }) }}
    </div>
{% endblock %}

{% block oro_email_mailbox_widget %}
    {% set imapAccountType %}
        {% if  form.children.origin is defined %}
            {{ form_widget(form.children.origin) }}
            {{ form_errors(form.children.origin) }}
        {% elseif form.children.imapAccountType is defined %}
            {{ form_widget(form.children.imapAccountType) }}
            {{ form_errors(form.children.imapAccountType) }}
        {% endif %}
    {% endset %}

    {% set process = form_row(form.children.processType) ~
        form_widget(form.children.processSettings) %}
    {% set access = form_row(form.children.authorizedUsers) ~
        form_row(form.children.authorizedRoles)
    %}
    {% set options = {
        el: '#' ~ form.vars.id
    } %}
    <div data-page-component-module=\"oroemail/js/app/views/mailbox-update-view\"
         data-page-component-options=\"{{ options|json_encode }}\">
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5 class=\"user-fieldset\">
                <span>{{ 'oro.email.mailbox.general.label'|trans }}</span>
            </h5>
            <div class=\"control-group-wrapper\">
                {{ form_widget(form) }}
            </div>
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5 class=\"user-fieldset\">
                <span>{{ 'oro.email.mailbox.origin.label'|trans }}</span>
            </h5>
            <div class=\"control-group-wrapper\">
                {{ imapAccountType|raw }}
            </div>
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5 class=\"user-fieldset\">
                <span>{{ 'oro.email.mailbox.process.label'|trans }}</span>
            </h5>
            <div class=\"control-group-wrapper\">
                {{ process|raw }}
            </div>
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5 class=\"user-fieldset\">
                <span>{{ 'oro.email.mailbox.access.label'|trans }}</span>
            </h5>
            <div class=\"control-group-wrapper\">
                {{ access|raw }}
            </div>
        </fieldset>
    </div>
{% endblock %}

{% block oro_email_emailtemplate_localization_widget %}
    <div {{ block('widget_container_attributes') }}>
        {{ form_row(form.subject) }}
        {% if form.subjectFallback is defined %}
            {{- form_row(form.subjectFallback) }}
        {% endif %}

        {{ form_row(form.content) }}
        {% if form.contentFallback is defined %}
            {{- form_row(form.contentFallback) }}
        {% endif %}
    </div>
{% endblock %}

{% block _oro_email_emailtemplate_translations_template_fallback_checkbox_row %}
    <div class=\"control-group control-group-checkbox\">
        <div class=\"control-label wrap\">&nbsp;</div>
        <div class=\"controls\">
            {{ form_widget(form) }}
            {{ form_label(form) }}
        </div>
    </div>
{% endblock %}

{% block _oro_email_autoresponserule_template_new_entity_oro_email_emailtemplate_template_fallback_checkbox_row %}
    <div class=\"control-group control-group-checkbox\">
        <div class=\"control-label wrap\">&nbsp;</div>
        <div class=\"controls\">
            {{ form_widget(form) }}
            {{ form_label(form) }}
        </div>
    </div>
{% endblock %}

{#
    Renders tab `li` tag for bootstrap tab panels
    paramters:
        form         - instance of FormView, it's a view for localized field
        isActive - is current tab active
        uniqid       - is unique identifier
#}
{% macro renderTabNavItem(form, isActive = false, uniqid = null) %}
    <li class=\"nav-item\">
        <a href=\"#\"
           class=\"nav-link {% if isActive %}active{% endif %}\"
           data-role=\"change-localization\"
           data-target=\".emailtemplate-translatation-fields-{{ form.vars.name }}\"
           data-toggle=\"tab\"
           data-related=\"{{ form.vars.name }}\"
           role=\"tab\"
           aria-selected=\"{{ isActive ? 'true' : 'false' }}\"
                {% if uniqid %}
                    id=\"{{ uniqid ~ '-tab'}}\"
                    aria-controls=\"{{ uniqid }}\"
                {% endif %}
        >
            {%- if form.vars.localization_title is not empty -%}
                {{ form.vars.localization_title }}
            {%- else -%}
                {{ 'oro.email.emailtemplatetranslation.form.default_localization'|trans }}
            {%- endif -%}
        </a>
    </li>
{% endmacro %}

{#
    Renders content of bootstrap tab panel
    paramters:
        form   - instance of FormView, it's a view for localized field
        isActive - is current tab active
        uniqid - is unique identifier
#}
{% macro renderTab(form, isActive = false, uniqid = null) %}
    {% import '@OroUI/macros.html.twig' as UI %}

    <div class=\"emailtemplate-translatation-fields-{{ form.vars.name }} tab-pane{% if isActive %} active{% endif %}\"
         role=\"tabpanel\"
            {% if uniqid %}
                id=\"{{ uniqid }}\"
                aria-labelledby=\"{{ uniqid ~ '-tab' }}\"
            {% endif %}
            {{ UI.renderPageComponentAttributes({
                view: 'oroemail/js/app/views/email-template-localization-view',
                options: {
                    'localization': {
                        'id': form.vars.localization_id,
                        'parentId': form.vars.localization_parent_id,
                    }
                }
            }) }}
    >
        {{ form_widget(form) }}
    </div>
{% endmacro %}

{% macro renderFolder(key, folder, namePrefix, maxDepth = 10) %}
    {% import _self as emailFormFealds %}
    {% if maxDepth %}
        <div>
            <label class=\"folder-label\">
                <input type=\"checkbox\" data-name=\"syncEnabled\"{% if folder.syncEnabled %}checked=\"checked\"{% endif %}>
                {{ folder.name }}
            </label>
            <input type=\"hidden\" data-name=\"fullName\" value=\"{{ folder.fullName }}\">
            <input type=\"hidden\" data-name=\"name\" value=\"{{ folder.name }}\">
            <input type=\"hidden\" data-name=\"type\" value=\"{{ folder.type }}\">
            {% if maxDepth > 1 and folder.subFolders|length > 0 %}
                <div class=\"folder-sub-folders\">
                    {% for subKey, subFolder in folder.subFolders %}
                        {{ emailFormFealds.renderFolder(subKey, subFolder, namePrefix ~ '[' ~ key ~ '][subFolders]', maxDepth - 1) }}
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    {% endif %}
{% endmacro %}
", "@OroEmail/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Form/fields.html.twig");
    }
}
