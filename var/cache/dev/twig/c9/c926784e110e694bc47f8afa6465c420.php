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

/* @OroImportExport/ImportExport/widget/configurableExport.html.twig */
class __TwigTemplate_f27f6257997bcc5cb2ec5906865bb0ce extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroImportExport/ImportExport/widget/configurableExport.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/widget/configurableExport.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/widget/configurableExport.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroImportExport/ImportExport/widget/configurableExport.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["exportConfigurableWidgetViewOptions"] = ["view" => ["view" => "oroimportexport/js/app/views/export-configurable-widget-view", "wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "get", [0 => "_wid"], "method", false, false, false, 6), "errorMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Errors occured during file export.")]];
        // line 10
        echo "
<div class=\"widget-content import-widget-content\">
    ";
        // line 12
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("configurable_export_messages", $context)) ? (_twig_default_filter((isset($context["configurable_export_messages"]) || array_key_exists("configurable_export_messages", $context) ? $context["configurable_export_messages"] : (function () { throw new RuntimeError('Variable "configurable_export_messages" does not exist.', 12, $this->source); })()), "configurable_export_messages")) : ("configurable_export_messages")), ["entityClass" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 12, $this->source); })()), "options" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 12, $this->source); })()), "exportJob" => (isset($context["exportJob"]) || array_key_exists("exportJob", $context) ? $context["exportJob"] : (function () { throw new RuntimeError('Variable "exportJob" does not exist.', 12, $this->source); })())]);
        // line 13
        echo "
    <div class=\"form-container\" ";
        // line 14
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [(isset($context["exportConfigurableWidgetViewOptions"]) || array_key_exists("exportConfigurableWidgetViewOptions", $context) ? $context["exportConfigurableWidgetViewOptions"] : (function () { throw new RuntimeError('Variable "exportConfigurableWidgetViewOptions" does not exist.', 14, $this->source); })())], 14, $context, $this->getSourceContext());
        echo ">
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_importexport_export_config", ["entity" =>         // line 16
(isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 16, $this->source); })()), "options" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 16, $this->source); })()), "exportJob" => (isset($context["exportJob"]) || array_key_exists("exportJob", $context) ? $context["exportJob"] : (function () { throw new RuntimeError('Variable "exportJob" does not exist.', 16, $this->source); })())]), "attr" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), "data-nohash" => "true", "class" => "form-horizontal"]]);
        // line 22
        echo "

            <fieldset class=\"form\">
                <div>
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "processorAlias", [], "any", false, false, false, 26), 'row');
        echo "
                </div>
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'rest');
        echo "
            </fieldset>

            <div class=\"widget-actions\">
                <button class=\"btn\" type=\"reset\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-primary\" type=\"submit\">
                    ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.export.popup.button.label"), "html", null, true);
        echo "
                </button>
            </div>
        ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
        ";
        // line 38
        echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()));
        echo "
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroImportExport/ImportExport/widget/configurableExport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  100 => 37,  94 => 34,  89 => 32,  82 => 28,  77 => 26,  71 => 22,  69 => 18,  68 => 16,  67 => 15,  63 => 14,  60 => 13,  58 => 12,  54 => 10,  52 => 6,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

{% set exportConfigurableWidgetViewOptions = {
    view: {
        view: 'oroimportexport/js/app/views/export-configurable-widget-view',
        wid: app.request.get('_wid'),
        errorMessage: 'Errors occured during file export.'|trans
    }
} %}

<div class=\"widget-content import-widget-content\">
    {% placeholder configurable_export_messages with { entityClass: entityName, options: options, exportJob: exportJob } %}

    <div class=\"form-container\" {{ UI.renderPageComponentAttributes(exportConfigurableWidgetViewOptions) }}>
        {{ form_start(form, {
            'action': path('oro_importexport_export_config', {entity: entityName, options: options, exportJob: exportJob}),
            'attr': {
                'id': form.vars.id,
                'data-nohash': 'true',
                'class': 'form-horizontal'
            }
        }) }}

            <fieldset class=\"form\">
                <div>
                    {{ form_row(form.processorAlias) }}
                </div>
                {{ form_rest(form) }}
            </fieldset>

            <div class=\"widget-actions\">
                <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
                <button class=\"btn btn-primary\" type=\"submit\">
                    {{ 'oro.importexport.export.popup.button.label'|trans }}
                </button>
            </div>
        {{ form_end(form) }}
        {{ oro_form_js_validation(form) }}
    </div>
</div>
", "@OroImportExport/ImportExport/widget/configurableExport.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ImportExportBundle/Resources/views/ImportExport/widget/configurableExport.html.twig");
    }
}
