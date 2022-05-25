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

/* @OroConfig/configPage.html.twig */
class __TwigTemplate_7b5ad4342042121124b3735c3fafec40 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["bap"]) || array_key_exists("bap", $context) ? $context["bap"] : (function () { throw new RuntimeError('Variable "bap" does not exist.', 1, $this->source); })()), "layout", [], "any", false, false, false, 1), "@OroConfig/configPage.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroConfig/configPage.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroConfig/configPage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroConfig/configPage.html.twig"));

        // line 12
        if ((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })())) {
            // line 13
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), [0 => "@OroConfig/Form/fields.html.twig", 1 => "@OroForm/Form/fields.html.twig", 2 => "@OroLocale/Form/fields.html.twig"], true);
        }
        // line 15
        $macros["syncMacro"] = $this->macros["syncMacro"] = $this->loadTemplate("@OroSync/Include/contentTags.html.twig", "@OroConfig/configPage.html.twig", 15)->unwrap();
        // line 16
        $macros["configUI"] = $this->macros["configUI"] = $this->loadTemplate("@OroConfig/macros.html.twig", "@OroConfig/configPage.html.twig", 16)->unwrap();
        // line 17
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroConfig/configPage.html.twig", 17)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 19));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroConfig/configPage.html.twig", 20)->unwrap();
        // line 21
        echo "
    ";
        // line 22
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop()) {
            // line 23
            echo "        ";
            $context["saveButton"] = twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.config.actions.save_settings")]], 23, $context, $this->getSourceContext());
            // line 26
            echo "        ";
            $context["restoreButton"] = twig_call_macro($macros["UI"], "macro_buttonType", [["type" => "reset", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.config.actions.restore_saved_values")]], 26, $context, $this->getSourceContext());
            // line 27
            echo "        ";
            $context["pageReload"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "block_config", [], "any", false, false, false, 27), (isset($context["activeSubGroup"]) || array_key_exists("activeSubGroup", $context) ? $context["activeSubGroup"] : (function () { throw new RuntimeError('Variable "activeSubGroup" does not exist.', 27, $this->source); })()), [], "any", false, false, false, 27), "page_reload", [], "any", false, false, false, 27);
            // line 28
            echo "        ";
            $context["options"] = ["view" => "oroconfig/js/form/config-form", "pageReload" =>             // line 30
(isset($context["pageReload"]) || array_key_exists("pageReload", $context) ? $context["pageReload"] : (function () { throw new RuntimeError('Variable "pageReload" does not exist.', 30, $this->source); })()), "isFormValid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 31
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "valid", [], "any", false, false, false, 31)];
            // line 33
            echo "
        ";
            // line 34
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["action" =>             // line 35
(isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 35, $this->source); })()), "attr" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 37
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "data-scope-class" => ((            // line 38
array_key_exists("scopeEntityClass", $context)) ? ((isset($context["scopeEntityClass"]) || array_key_exists("scopeEntityClass", $context) ? $context["scopeEntityClass"] : (function () { throw new RuntimeError('Variable "scopeEntityClass" does not exist.', 38, $this->source); })())) : (null)), "data-scope-id" => ((            // line 39
array_key_exists("scopeEntityId", $context)) ? ((isset($context["scopeEntityId"]) || array_key_exists("scopeEntityId", $context) ? $context["scopeEntityId"] : (function () { throw new RuntimeError('Variable "scopeEntityId" does not exist.', 39, $this->source); })())) : (null)), "data-collect" => "true", "data-page-component-view" => json_encode(            // line 41
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 41, $this->source); })()))]]);
            // line 43
            echo "
            ";
            // line 44
            echo twig_call_macro($macros["configUI"], "macro_renderTitleAndButtons", [(isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 44, $this->source); })()), [0 => (isset($context["restoreButton"]) || array_key_exists("restoreButton", $context) ? $context["restoreButton"] : (function () { throw new RuntimeError('Variable "restoreButton" does not exist.', 44, $this->source); })()), 1 => (isset($context["saveButton"]) || array_key_exists("saveButton", $context) ? $context["saveButton"] : (function () { throw new RuntimeError('Variable "saveButton" does not exist.', 44, $this->source); })())]], 44, $context, $this->getSourceContext());
            echo "
            ";
            // line 45
            echo twig_call_macro($macros["configUI"], "macro_renderScrollData", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), (isset($context["activeGroup"]) || array_key_exists("activeGroup", $context) ? $context["activeGroup"] : (function () { throw new RuntimeError('Variable "activeGroup" does not exist.', 45, $this->source); })()), (isset($context["activeSubGroup"]) || array_key_exists("activeSubGroup", $context) ? $context["activeSubGroup"] : (function () { throw new RuntimeError('Variable "activeSubGroup" does not exist.', 45, $this->source); })()), (isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 45, $this->source); })()), (isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 45, $this->source); })())], 45, $context, $this->getSourceContext());
            echo "
        ";
            // line 46
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end', ["render_rest" => false]);
            echo "
        ";
            // line 47
            echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()));
            echo "
        ";
            // line 48
            echo twig_call_macro($macros["syncMacro"], "macro_syncContentTags", [["name" => "system_configuration", "params" => [0 => (isset($context["activeGroup"]) || array_key_exists("activeGroup", $context) ? $context["activeGroup"] : (function () { throw new RuntimeError('Variable "activeGroup" does not exist.', 48, $this->source); })()), 1 => (isset($context["activeSubGroup"]) || array_key_exists("activeSubGroup", $context) ? $context["activeSubGroup"] : (function () { throw new RuntimeError('Variable "activeSubGroup" does not exist.', 48, $this->source); })())]]], 48, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 50
            echo "        ";
            // line 51
            echo "        <div class=\"no-data\">
            ";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.config.system_configuration.desktop_only"), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroConfig/configPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 52,  146 => 51,  144 => 50,  139 => 48,  135 => 47,  131 => 46,  127 => 45,  123 => 44,  120 => 43,  118 => 41,  117 => 39,  116 => 38,  115 => 37,  114 => 35,  113 => 34,  110 => 33,  108 => 31,  107 => 30,  105 => 28,  102 => 27,  99 => 26,  96 => 23,  94 => 22,  91 => 21,  88 => 20,  75 => 19,  62 => 1,  60 => 17,  58 => 16,  56 => 15,  53 => 13,  51 => 12,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends bap.layout %}
{#
    'Abstract' page for configuration pages.

    In parent template should be defined next variables:
        pageTitle        - page title
        formAction       - url to save current changed tab
        routeName        - route name for tabs switch
        routeParameters  - additional route parameters
#}

{% if form %}
    {% form_theme form with ['@OroConfig/Form/fields.html.twig', '@OroForm/Form/fields.html.twig', '@OroLocale/Form/fields.html.twig'] %}
{% endif %}
{% import '@OroSync/Include/contentTags.html.twig' as syncMacro %}
{% import '@OroConfig/macros.html.twig' as configUI %}
{% import '@OroUI/macros.html.twig' as UI %}

{% block content %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if isDesktopVersion() %}
        {% set saveButton = UI.saveAndStayButton({
            'label': 'oro.config.actions.save_settings'|trans
        }) %}
        {% set restoreButton = UI.buttonType({type: 'reset', label: 'oro.config.actions.restore_saved_values'|trans }) %}
        {% set pageReload = attribute(form.vars.block_config, activeSubGroup).page_reload %}
        {% set options = {
            view: 'oroconfig/js/form/config-form',
            pageReload: pageReload,
            isFormValid: form.vars.valid
        } %}

        {{ form_start(form, {
            'action': formAction,
            'attr': {
                'id': form.vars.id,
                'data-scope-class': scopeEntityClass is defined ? scopeEntityClass : null,
                'data-scope-id': scopeEntityId is defined ? scopeEntityId : null,
                'data-collect': 'true',
                'data-page-component-view': options|json_encode
            }
        }) }}
            {{ configUI.renderTitleAndButtons(pageTitle, [restoreButton, saveButton]) }}
            {{ configUI.renderScrollData(data, form, activeGroup, activeSubGroup, routeName, routeParameters) }}
        {{ form_end(form, {'render_rest': false}) }}
        {{ oro_form_js_validation(form) }}
        {{ syncMacro.syncContentTags({name: 'system_configuration', params: [activeGroup, activeSubGroup]}) }}
    {% else %}
        {# Mobile view #}
        <div class=\"no-data\">
            {{ 'oro.config.system_configuration.desktop_only'|trans }}
        </div>
    {% endif %}
{% endblock content %}
", "@OroConfig/configPage.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ConfigBundle/Resources/views/configPage.html.twig");
    }
}
