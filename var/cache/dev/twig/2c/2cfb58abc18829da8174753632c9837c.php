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

/* @OroDigitalAsset/DigitalAsset/widget/choose.html.twig */
class __TwigTemplate_ef046e85fc057665fa26bb7f03d7ee0d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDigitalAsset/DigitalAsset/widget/choose.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDigitalAsset/DigitalAsset/widget/choose.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDigitalAsset/DigitalAsset/widget/choose.html.twig"));

        // line 1
        if ((array_key_exists("saved", $context) && (isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 1, $this->source); })()))) {
            // line 2
            $context["widgetResponse"] = ["widget" => ["message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.digitalasset.dam.dialog.uploaded.message"), "messageOptions" => ["container" => (("[data-wid=" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 6
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "get", [0 => "_wid"], "method", false, false, false, 6)) . "] .flash-messages")], "messageAfterPageChange" => false, "triggerSuccess" => false, "newDigitalAssetId" => twig_get_attribute($this->env, $this->source,             // line 10
(isset($context["digital_asset"]) || array_key_exists("digital_asset", $context) ? $context["digital_asset"] : (function () { throw new RuntimeError('Variable "digital_asset" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "gridName" =>             // line 11
(isset($context["grid_name"]) || array_key_exists("grid_name", $context) ? $context["grid_name"] : (function () { throw new RuntimeError('Variable "grid_name" does not exist.', 11, $this->source); })()), "trigger" => [0 => ["eventBroker" => "mediator", "name" => ("datagrid:doInitialRefresh:" .             // line 15
(isset($context["grid_name"]) || array_key_exists("grid_name", $context) ? $context["grid_name"] : (function () { throw new RuntimeError('Variable "grid_name" does not exist.', 15, $this->source); })())), "args" => []], 1 => ["eventBroker" => "widget", "name" => "formReset", "args" => []]], "remove" => false]];
            // line 27
            echo json_encode((isset($context["widgetResponse"]) || array_key_exists("widgetResponse", $context) ? $context["widgetResponse"] : (function () { throw new RuntimeError('Variable "widgetResponse" does not exist.', 27, $this->source); })()));
        } else {
            // line 29
            $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroDigitalAsset/DigitalAsset/widget/choose.html.twig", 29)->unwrap();
            // line 30
            echo "
    ";
            // line 31
            $context["grid_render_params"] = ["enableViews" => true, "showViewsInNavbar" => false, "filtersStateElement" => "[data-role=\"filters-state-view-container\"]", "routerEnabled" => false, "jsmodules" => [0 => "orodatagrid/js/row-select-for-widget/builder"], "gridBuildersOptions" => ["rowSelectForWidget" => ["wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 39
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "get", [0 => "_wid"], "method", false, false, false, 39), "multiSelect" => false]], "cssClass" => ("inner-grid " . ((            // line 43
(isset($context["is_image_type"]) || array_key_exists("is_image_type", $context) ? $context["is_image_type"] : (function () { throw new RuntimeError('Variable "is_image_type" does not exist.', 43, $this->source); })())) ? ("digital-asset-image-grid") : ("digital-asset-file-grid")))];
            // line 45
            echo "
    <div class=\"widget-content\">";
            // line 47
            $this->displayBlock('widget_content', $context, $blocks);
            // line 109
            echo "    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 47
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widget_content", $this->getTemplateName(), 47));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_content"));

        // line 48
        echo "<div class=\"flash-messages\">
                <div class=\"flash-messages-frame\">
                    <div class=\"flash-messages-holder\"></div>
                </div>
            </div>";
        // line 54
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "valid", [], "any", false, false, false, 54) && $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'errors'))) {
            // line 55
            echo "<div class=\"alert alert-error\" role=\"alert\">
                    <div class=\"message\">
                        ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'errors');
            echo "
                    </div>
                </div>";
        }
        // line 62
        $context["form_options"] = ["attr" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64)], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 67
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "attributes", [], "any", false, false, false, 67), "get", [0 => "_route"], "method", false, false, false, 67), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "attributes", [], "any", false, false, false, 68), "get", [0 => "_route_params"], "method", false, false, false, 68))];
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_start', (isset($context["form_options"]) || array_key_exists("form_options", $context) ? $context["form_options"] : (function () { throw new RuntimeError('Variable "form_options" does not exist.', 71, $this->source); })()));
        // line 73
        echo "<div class=\"form-flex\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "sourceFile", [], "any", false, false, false, 74), 'row', ["attr" => ["class" => "form-source-file widget-title-container"]]);
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "titles", [], "any", false, false, false, 79), 'row', ["attr" => ["class" => "form-titles widget-title-container"]]);
        // line 84
        echo "<div class=\"widget-actions form-buttons\">
                    <button class=\"btn\" type=\"reset\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.digitalasset.dam.dialog.clear.label"), "html", null, true);
        echo "</button>
                    <button class=\"btn btn-primary\" type=\"submit\">";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.digitalasset.dam.dialog.upload.label"), "html", null, true);
        echo "</button>
                </div>
            </div>

            <div class=\"hide\">";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'rest');
        // line 92
        echo "</div>";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        // line 95
        echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()));
        // line 97
        echo "<h4 class=\"scrollspy-title datagrid-title\">";
        // line 98
        if ((isset($context["is_image_type"]) || array_key_exists("is_image_type", $context) ? $context["is_image_type"] : (function () { throw new RuntimeError('Variable "is_image_type" does not exist.', 98, $this->source); })())) {
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.digitalasset.dam.dialog.datagrid_title.images"), "html", null, true);
        } else {
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.digitalasset.dam.dialog.datagrid_title.files"), "html", null, true);
        }
        // line 103
        echo "</h4>
            <div class=\"scrollspy-nav-target\" aria-hidden=\"true\"></div>
            <div class=\"section-content\">
                ";
        // line 106
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [(isset($context["grid_name"]) || array_key_exists("grid_name", $context) ? $context["grid_name"] : (function () { throw new RuntimeError('Variable "grid_name" does not exist.', 106, $this->source); })()), ((array_key_exists("grid_params", $context)) ? (_twig_default_filter((isset($context["grid_params"]) || array_key_exists("grid_params", $context) ? $context["grid_params"] : (function () { throw new RuntimeError('Variable "grid_params" does not exist.', 106, $this->source); })()), [])) : ([])), (isset($context["grid_render_params"]) || array_key_exists("grid_render_params", $context) ? $context["grid_render_params"] : (function () { throw new RuntimeError('Variable "grid_render_params" does not exist.', 106, $this->source); })())], 106, $context, $this->getSourceContext());
        echo "
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroDigitalAsset/DigitalAsset/widget/choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 106,  163 => 103,  160 => 101,  157 => 99,  155 => 98,  153 => 97,  151 => 95,  149 => 94,  147 => 92,  145 => 91,  138 => 86,  134 => 85,  131 => 84,  129 => 79,  127 => 74,  125 => 73,  123 => 71,  121 => 68,  120 => 67,  119 => 64,  118 => 62,  112 => 57,  108 => 55,  106 => 54,  100 => 48,  87 => 47,  72 => 109,  70 => 47,  67 => 45,  65 => 43,  64 => 39,  63 => 31,  60 => 30,  58 => 29,  55 => 27,  53 => 15,  52 => 11,  51 => 10,  50 => 6,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- if saved is defined and saved -%}
    {%- set widgetResponse = {
        widget: {
            message: 'oro.digitalasset.dam.dialog.uploaded.message'|trans,
            messageOptions: {
                container: '[data-wid=' ~ app.request.get('_wid') ~ '] .flash-messages'
            },
            messageAfterPageChange: false,
            triggerSuccess: false,
            newDigitalAssetId: digital_asset.id,
            gridName: grid_name,
            trigger: [
                {
                    eventBroker: 'mediator',
                    name: 'datagrid:doInitialRefresh:' ~ grid_name,
                    args: [],
                },
                {
                    eventBroker: 'widget',
                    name: 'formReset',
                    args: [],
                }
            ],
            remove: false
        }
    } -%}
    {{ widgetResponse|json_encode|raw }}
{%- else -%}
    {% import '@OroDataGrid/macros.html.twig' as dataGrid %}

    {% set grid_render_params = {
        enableViews: true,
        showViewsInNavbar: false,
        filtersStateElement: '[data-role=\"filters-state-view-container\"]',
        routerEnabled: false,
        jsmodules: ['orodatagrid/js/row-select-for-widget/builder'],
        gridBuildersOptions: {
            rowSelectForWidget: {
                wid: app.request.get('_wid'),
                multiSelect: false
            }
        },
        cssClass: 'inner-grid ' ~ (is_image_type ? 'digital-asset-image-grid' : 'digital-asset-file-grid')
    } %}

    <div class=\"widget-content\">
        {%- block widget_content -%}
            <div class=\"flash-messages\">
                <div class=\"flash-messages-frame\">
                    <div class=\"flash-messages-holder\"></div>
                </div>
            </div>

            {%- if not form.vars.valid and form_errors(form) -%}
                <div class=\"alert alert-error\" role=\"alert\">
                    <div class=\"message\">
                        {{ form_errors(form) }}
                    </div>
                </div>
            {%- endif -%}

            {%- set form_options = {
                attr: {
                    id: form.vars.id,
                },
                action: path(
                    app.request.attributes.get('_route'),
                    app.request.attributes.get('_route_params')
                )
            } -%}
            {{- form_start(form, form_options) -}}

            <div class=\"form-flex\">
                {{- form_row(form.sourceFile, {
                    'attr': {
                        'class': 'form-source-file widget-title-container'
                    }
                }) -}}
                {{- form_row(form.titles, {
                    'attr': {
                        'class': 'form-titles widget-title-container'
                    }
                }) -}}
                <div class=\"widget-actions form-buttons\">
                    <button class=\"btn\" type=\"reset\">{{ 'oro.digitalasset.dam.dialog.clear.label'|trans }}</button>
                    <button class=\"btn btn-primary\" type=\"submit\">{{ 'oro.digitalasset.dam.dialog.upload.label'|trans }}</button>
                </div>
            </div>

            <div class=\"hide\">
                {{- form_rest(form) -}}
            </div>

            {{- form_end(form) -}}
            {{- oro_form_js_validation(form) -}}

            <h4 class=\"scrollspy-title datagrid-title\">
                {%- if is_image_type -%}
                    {{ 'oro.digitalasset.dam.dialog.datagrid_title.images'|trans }}
                {%- else -%}
                    {{ 'oro.digitalasset.dam.dialog.datagrid_title.files'|trans }}
                {%- endif -%}
            </h4>
            <div class=\"scrollspy-nav-target\" aria-hidden=\"true\"></div>
            <div class=\"section-content\">
                {{ dataGrid.renderGrid(grid_name, grid_params|default({}), grid_render_params) }}
            </div>
        {% endblock %}
    </div>
{% endif %}
", "@OroDigitalAsset/DigitalAsset/widget/choose.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DigitalAssetBundle/Resources/views/DigitalAsset/widget/choose.html.twig");
    }
}
