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

/* @OroImportExport/ImportExport/widget/configurableTemplateExport.html.twig */
class __TwigTemplate_83aea2d75050d2603dc0a39c8415876e extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroImportExport/ImportExport/widget/configurableTemplateExport.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/widget/configurableTemplateExport.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/widget/configurableTemplateExport.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroImportExport/ImportExport/widget/configurableTemplateExport.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["exportConfigurableTemplateWidgetViewOptions"] = ["view" => ["view" => "oroimportexport/js/app/views/export-configurable-template-widget-view", "wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "get", [0 => "_wid"], "method", false, false, false, 6), "downloadMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Downloading data template...")]];
        // line 10
        echo "
<div class=\"widget-content import-widget-content\">
    <div class=\"form-container\" ";
        // line 12
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [(isset($context["exportConfigurableTemplateWidgetViewOptions"]) || array_key_exists("exportConfigurableTemplateWidgetViewOptions", $context) ? $context["exportConfigurableTemplateWidgetViewOptions"] : (function () { throw new RuntimeError('Variable "exportConfigurableTemplateWidgetViewOptions" does not exist.', 12, $this->source); })())], 12, $context, $this->getSourceContext());
        echo ">
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_importexport_export_template_config", ["entity" =>         // line 14
(isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 14, $this->source); })()), "options" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 14, $this->source); })())]), "attr" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), "data-nohash" => "true", "class" => "form-horizontal"]]);
        // line 20
        echo "

            <fieldset class=\"form\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'rest');
        echo "
            </fieldset>

            <div class=\"widget-actions\">
                <button class=\"btn\" type=\"reset\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-primary\" type=\"submit\">
                    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download"), "html", null, true);
        echo "
                </button>
            </div>
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
        ";
        // line 33
        echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()));
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
        return "@OroImportExport/ImportExport/widget/configurableTemplateExport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  89 => 32,  83 => 29,  78 => 27,  71 => 23,  66 => 20,  64 => 16,  63 => 14,  62 => 13,  58 => 12,  54 => 10,  52 => 6,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

{% set exportConfigurableTemplateWidgetViewOptions = {
    view: {
        view: 'oroimportexport/js/app/views/export-configurable-template-widget-view',
        wid: app.request.get('_wid'),
        downloadMessage: 'Downloading data template...'|trans
    }
} %}

<div class=\"widget-content import-widget-content\">
    <div class=\"form-container\" {{ UI.renderPageComponentAttributes(exportConfigurableTemplateWidgetViewOptions) }}>
        {{ form_start(form, {
            'action': path('oro_importexport_export_template_config', {entity: entityName, options: options}),
            'attr': {
                'id': form.vars.id,
                'data-nohash': 'true',
                'class': 'form-horizontal'
            }
        }) }}

            <fieldset class=\"form\">
                {{ form_rest(form) }}
            </fieldset>

            <div class=\"widget-actions\">
                <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
                <button class=\"btn btn-primary\" type=\"submit\">
                    {{ 'Download'|trans }}
                </button>
            </div>
        {{ form_end(form) }}
        {{ oro_form_js_validation(form) }}
    </div>
</div>
", "@OroImportExport/ImportExport/widget/configurableTemplateExport.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ImportExportBundle/Resources/views/ImportExport/widget/configurableTemplateExport.html.twig");
    }
}
