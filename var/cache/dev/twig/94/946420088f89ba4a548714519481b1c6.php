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

/* @OroImportExport/ImportExport/buttons.html.twig */
class __TwigTemplate_8304abcd2d35d0c8a43de7f01ca351eb extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroImportExport/ImportExport/buttons.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/buttons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/buttons.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroImportExport/ImportExport/buttons.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["hasImportProcessor"] = (array_key_exists("importProcessor", $context) &&  !twig_test_empty((isset($context["importProcessor"]) || array_key_exists("importProcessor", $context) ? $context["importProcessor"] : (function () { throw new RuntimeError('Variable "importProcessor" does not exist.', 3, $this->source); })())));
        // line 4
        $context["importAllowed"] = ((isset($context["hasImportProcessor"]) || array_key_exists("hasImportProcessor", $context) ? $context["hasImportProcessor"] : (function () { throw new RuntimeError('Variable "hasImportProcessor" does not exist.', 4, $this->source); })()) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_importexport_import"));
        // line 5
        $context["importLabel"] = ((array_key_exists("importLabel", $context)) ? (_twig_default_filter((isset($context["importLabel"]) || array_key_exists("importLabel", $context) ? $context["importLabel"] : (function () { throw new RuntimeError('Variable "importLabel" does not exist.', 5, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.import.label"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.import.label")));
        // line 6
        $context["importValidationLabel"] = ((array_key_exists("importValidationLabel", $context)) ? (_twig_default_filter((isset($context["importValidationLabel"]) || array_key_exists("importValidationLabel", $context) ? $context["importValidationLabel"] : (function () { throw new RuntimeError('Variable "importValidationLabel" does not exist.', 6, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.import.validation_label"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.import.validation_label")));
        // line 7
        echo "
";
        // line 8
        $context["hasExportProcessor"] = (array_key_exists("exportProcessor", $context) &&  !twig_test_empty((isset($context["exportProcessor"]) || array_key_exists("exportProcessor", $context) ? $context["exportProcessor"] : (function () { throw new RuntimeError('Variable "exportProcessor" does not exist.', 8, $this->source); })())));
        // line 9
        $context["exportAllowed"] = ((isset($context["hasExportProcessor"]) || array_key_exists("hasExportProcessor", $context) ? $context["hasExportProcessor"] : (function () { throw new RuntimeError('Variable "hasExportProcessor" does not exist.', 9, $this->source); })()) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_importexport_export"));
        // line 10
        if ((isset($context["exportAllowed"]) || array_key_exists("exportAllowed", $context) ? $context["exportAllowed"] : (function () { throw new RuntimeError('Variable "exportAllowed" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "    ";
            $context["isExportPopupRequired"] = (twig_test_iterable((isset($context["exportProcessor"]) || array_key_exists("exportProcessor", $context) ? $context["exportProcessor"] : (function () { throw new RuntimeError('Variable "exportProcessor" does not exist.', 11, $this->source); })())) && (twig_length_filter($this->env, (isset($context["exportProcessor"]) || array_key_exists("exportProcessor", $context) ? $context["exportProcessor"] : (function () { throw new RuntimeError('Variable "exportProcessor" does not exist.', 11, $this->source); })())) > 1));
        }
        // line 13
        $context["exportLabel"] = ((array_key_exists("exportLabel", $context)) ? (_twig_default_filter((isset($context["exportLabel"]) || array_key_exists("exportLabel", $context) ? $context["exportLabel"] : (function () { throw new RuntimeError('Variable "exportLabel" does not exist.', 13, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.export.label"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.export.label")));
        // line 14
        echo "
";
        // line 15
        $context["hasExportTemplateProcessor"] = (array_key_exists("exportTemplateProcessor", $context) &&  !twig_test_empty((isset($context["exportTemplateProcessor"]) || array_key_exists("exportTemplateProcessor", $context) ? $context["exportTemplateProcessor"] : (function () { throw new RuntimeError('Variable "exportTemplateProcessor" does not exist.', 15, $this->source); })())));
        // line 16
        if ((isset($context["hasExportTemplateProcessor"]) || array_key_exists("hasExportTemplateProcessor", $context) ? $context["hasExportTemplateProcessor"] : (function () { throw new RuntimeError('Variable "hasExportTemplateProcessor" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "    ";
            $context["isExportTemplatePopupRequired"] = twig_test_iterable((isset($context["exportTemplateProcessor"]) || array_key_exists("exportTemplateProcessor", $context) ? $context["exportTemplateProcessor"] : (function () { throw new RuntimeError('Variable "exportTemplateProcessor" does not exist.', 17, $this->source); })()));
            // line 18
            echo "    ";
            $context["exportTemplateProcessor"] = ((twig_test_iterable((isset($context["exportTemplateProcessor"]) || array_key_exists("exportTemplateProcessor", $context) ? $context["exportTemplateProcessor"] : (function () { throw new RuntimeError('Variable "exportTemplateProcessor" does not exist.', 18, $this->source); })()))) ? (twig_get_attribute($this->env, $this->source, (isset($context["exportTemplateProcessor"]) || array_key_exists("exportTemplateProcessor", $context) ? $context["exportTemplateProcessor"] : (function () { throw new RuntimeError('Variable "exportTemplateProcessor" does not exist.', 18, $this->source); })()), 0, [], "array", false, false, false, 18)) : ((isset($context["exportTemplateProcessor"]) || array_key_exists("exportTemplateProcessor", $context) ? $context["exportTemplateProcessor"] : (function () { throw new RuntimeError('Variable "exportTemplateProcessor" does not exist.', 18, $this->source); })())));
        }
        // line 20
        echo "
";
        // line 21
        $context["exportTemplateLabel"] = ((array_key_exists("exportTemplateLabel", $context)) ? (_twig_default_filter((isset($context["exportTemplateLabel"]) || array_key_exists("exportTemplateLabel", $context) ? $context["exportTemplateLabel"] : (function () { throw new RuntimeError('Variable "exportTemplateLabel" does not exist.', 21, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.export_template.label"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.export_template.label")));
        // line 22
        echo "
";
        // line 23
        if (((isset($context["exportAllowed"]) || array_key_exists("exportAllowed", $context) ? $context["exportAllowed"] : (function () { throw new RuntimeError('Variable "exportAllowed" does not exist.', 23, $this->source); })()) || (isset($context["importAllowed"]) || array_key_exists("importAllowed", $context) ? $context["importAllowed"] : (function () { throw new RuntimeError('Variable "importAllowed" does not exist.', 23, $this->source); })()))) {
            // line 24
            echo "    <span class=\"pull-left\"
        data-page-component-module=\"oroui/js/app/components/view-component\"
        data-page-component-options=\"";
            // line 26
            echo twig_escape_filter($this->env, json_encode(["view" => "oroimportexport/js/app/views/import-export-buttons-view", "data" => ["entity" =>             // line 29
(isset($context["entity_class"]) || array_key_exists("entity_class", $context) ? $context["entity_class"] : (function () { throw new RuntimeError('Variable "entity_class" does not exist.', 29, $this->source); })()), "routeOptions" => ((            // line 30
array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 30, $this->source); })()), [])) : ([])), "importTitle" => ((            // line 32
array_key_exists("importTitle", $context)) ? (_twig_default_filter((isset($context["importTitle"]) || array_key_exists("importTitle", $context) ? $context["importTitle"] : (function () { throw new RuntimeError('Variable "importTitle" does not exist.', 32, $this->source); })()), (isset($context["importLabel"]) || array_key_exists("importLabel", $context) ? $context["importLabel"] : (function () { throw new RuntimeError('Variable "importLabel" does not exist.', 32, $this->source); })()))) : ((isset($context["importLabel"]) || array_key_exists("importLabel", $context) ? $context["importLabel"] : (function () { throw new RuntimeError('Variable "importLabel" does not exist.', 32, $this->source); })()))), "importJob" => ((            // line 33
array_key_exists("importJob", $context)) ? (_twig_default_filter((isset($context["importJob"]) || array_key_exists("importJob", $context) ? $context["importJob"] : (function () { throw new RuntimeError('Variable "importJob" does not exist.', 33, $this->source); })()), null)) : (null)), "importValidateJob" => ((            // line 34
array_key_exists("importValidateJob", $context)) ? (_twig_default_filter((isset($context["importValidateJob"]) || array_key_exists("importValidateJob", $context) ? $context["importValidateJob"] : (function () { throw new RuntimeError('Variable "importValidateJob" does not exist.', 34, $this->source); })()), null)) : (null)), "exportTitle" => ((            // line 36
array_key_exists("exportTitle", $context)) ? (_twig_default_filter((isset($context["exportTitle"]) || array_key_exists("exportTitle", $context) ? $context["exportTitle"] : (function () { throw new RuntimeError('Variable "exportTitle" does not exist.', 36, $this->source); })()), (isset($context["exportLabel"]) || array_key_exists("exportLabel", $context) ? $context["exportLabel"] : (function () { throw new RuntimeError('Variable "exportLabel" does not exist.', 36, $this->source); })()))) : ((isset($context["exportLabel"]) || array_key_exists("exportLabel", $context) ? $context["exportLabel"] : (function () { throw new RuntimeError('Variable "exportLabel" does not exist.', 36, $this->source); })()))), "exportJob" => ((            // line 37
array_key_exists("exportJob", $context)) ? (_twig_default_filter((isset($context["exportJob"]) || array_key_exists("exportJob", $context) ? $context["exportJob"] : (function () { throw new RuntimeError('Variable "exportJob" does not exist.', 37, $this->source); })()), null)) : (null)), "exportProcessor" => ((            // line 38
array_key_exists("exportProcessor", $context)) ? (_twig_default_filter((isset($context["exportProcessor"]) || array_key_exists("exportProcessor", $context) ? $context["exportProcessor"] : (function () { throw new RuntimeError('Variable "exportProcessor" does not exist.', 38, $this->source); })()), null)) : (null)), "isExportPopupRequired" => ((            // line 39
array_key_exists("isExportPopupRequired", $context)) ? (_twig_default_filter((isset($context["isExportPopupRequired"]) || array_key_exists("isExportPopupRequired", $context) ? $context["isExportPopupRequired"] : (function () { throw new RuntimeError('Variable "isExportPopupRequired" does not exist.', 39, $this->source); })()), false)) : (false)), "exportTemplateTitle" => ((            // line 41
array_key_exists("exportTemplateTitle", $context)) ? (_twig_default_filter((isset($context["exportTemplateTitle"]) || array_key_exists("exportTemplateTitle", $context) ? $context["exportTemplateTitle"] : (function () { throw new RuntimeError('Variable "exportTemplateTitle" does not exist.', 41, $this->source); })()), (isset($context["exportLabel"]) || array_key_exists("exportLabel", $context) ? $context["exportLabel"] : (function () { throw new RuntimeError('Variable "exportLabel" does not exist.', 41, $this->source); })()))) : ((isset($context["exportLabel"]) || array_key_exists("exportLabel", $context) ? $context["exportLabel"] : (function () { throw new RuntimeError('Variable "exportLabel" does not exist.', 41, $this->source); })()))), "exportTemplateJob" => ((            // line 42
array_key_exists("exportTemplateJob", $context)) ? (_twig_default_filter((isset($context["exportTemplateJob"]) || array_key_exists("exportTemplateJob", $context) ? $context["exportTemplateJob"] : (function () { throw new RuntimeError('Variable "exportTemplateJob" does not exist.', 42, $this->source); })()), null)) : (null)), "exportTemplateProcessor" => ((            // line 43
array_key_exists("exportTemplateProcessor", $context)) ? (_twig_default_filter((isset($context["exportTemplateProcessor"]) || array_key_exists("exportTemplateProcessor", $context) ? $context["exportTemplateProcessor"] : (function () { throw new RuntimeError('Variable "exportTemplateProcessor" does not exist.', 43, $this->source); })()), null)) : (null)), "isExportTemplatePopupRequired" => ((            // line 44
array_key_exists("isExportTemplatePopupRequired", $context)) ? (_twig_default_filter((isset($context["isExportTemplatePopupRequired"]) || array_key_exists("isExportTemplatePopupRequired", $context) ? $context["isExportTemplatePopupRequired"] : (function () { throw new RuntimeError('Variable "isExportTemplatePopupRequired" does not exist.', 44, $this->source); })()), false)) : (false)), "filePrefix" => ((            // line 46
array_key_exists("filePrefix", $context)) ? (_twig_default_filter((isset($context["filePrefix"]) || array_key_exists("filePrefix", $context) ? $context["filePrefix"] : (function () { throw new RuntimeError('Variable "filePrefix" does not exist.', 46, $this->source); })()), null)) : (null)), "datagridName" => ((            // line 47
array_key_exists("datagridName", $context)) ? (_twig_default_filter((isset($context["datagridName"]) || array_key_exists("datagridName", $context) ? $context["datagridName"] : (function () { throw new RuntimeError('Variable "datagridName" does not exist.', 47, $this->source); })()), null)) : (null)), "afterRefreshPageMessage" => ((            // line 48
array_key_exists("afterRefreshPageMessage", $context)) ? (_twig_default_filter((isset($context["afterRefreshPageMessage"]) || array_key_exists("afterRefreshPageMessage", $context) ? $context["afterRefreshPageMessage"] : (function () { throw new RuntimeError('Variable "afterRefreshPageMessage" does not exist.', 48, $this->source); })()), null)) : (null)), "refreshPageOnSuccess" => ((            // line 49
array_key_exists("refreshPageOnSuccess", $context)) ? (_twig_default_filter((isset($context["refreshPageOnSuccess"]) || array_key_exists("refreshPageOnSuccess", $context) ? $context["refreshPageOnSuccess"] : (function () { throw new RuntimeError('Variable "refreshPageOnSuccess" does not exist.', 49, $this->source); })()), false)) : (false))]]), "html", null, true);
            // line 51
            echo "\"
    >
    ";
            // line 53
            if ((isset($context["exportAllowed"]) || array_key_exists("exportAllowed", $context) ? $context["exportAllowed"] : (function () { throw new RuntimeError('Variable "exportAllowed" does not exist.', 53, $this->source); })())) {
                // line 54
                echo "        <div class=\"btn-group\">
            <a href=\"#\" role=\"button\" class=\"btn export-btn icons-holder-text no-hash\">
                <span class=\"fa-upload hide-text\">";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.export.label"), "html", null, true);
                echo "</span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.export.label"), "html", null, true);
                echo "
            </a>
        </div>
    ";
            }
            // line 60
            echo "
    ";
            // line 61
            if ((isset($context["importAllowed"]) || array_key_exists("importAllowed", $context) ? $context["importAllowed"] : (function () { throw new RuntimeError('Variable "importAllowed" does not exist.', 61, $this->source); })())) {
                // line 62
                echo "        <div class=\"btn-group\">
            ";
                // line 63
                ob_start();
                // line 64
                echo "                <a href=\"#\" role=\"button\" class=\"btn import-btn icons-holder-text no-hash\">
                    <span class=\"fa-download hide-text\">";
                // line 65
                echo twig_escape_filter($this->env, (isset($context["importLabel"]) || array_key_exists("importLabel", $context) ? $context["importLabel"] : (function () { throw new RuntimeError('Variable "importLabel" does not exist.', 65, $this->source); })()), "html", null, true);
                echo "</span>";
                echo twig_escape_filter($this->env, (isset($context["importLabel"]) || array_key_exists("importLabel", $context) ? $context["importLabel"] : (function () { throw new RuntimeError('Variable "importLabel" does not exist.', 65, $this->source); })()), "html", null, true);
                echo "
                </a>
                <a href=\"#\" role=\"button\" class=\"btn import-validation-btn icons-holder-text no-hash\">
                    <span class=\"icon-download-alt hide-text\">";
                // line 68
                echo twig_escape_filter($this->env, (isset($context["importValidationLabel"]) || array_key_exists("importValidationLabel", $context) ? $context["importValidationLabel"] : (function () { throw new RuntimeError('Variable "importValidationLabel" does not exist.', 68, $this->source); })()), "html", null, true);
                echo "</span>";
                echo twig_escape_filter($this->env, (isset($context["importValidationLabel"]) || array_key_exists("importValidationLabel", $context) ? $context["importValidationLabel"] : (function () { throw new RuntimeError('Variable "importValidationLabel" does not exist.', 68, $this->source); })()), "html", null, true);
                echo "
                </a>
                ";
                // line 70
                if ((isset($context["hasExportTemplateProcessor"]) || array_key_exists("hasExportTemplateProcessor", $context) ? $context["hasExportTemplateProcessor"] : (function () { throw new RuntimeError('Variable "hasExportTemplateProcessor" does not exist.', 70, $this->source); })())) {
                    // line 71
                    echo "                    <a href=\"#\" role=\"button\" class=\"btn template-btn icons-holder-text no-hash\">
                        <span class=\"fa-file-o hide-text\"></span>";
                    // line 72
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.import.tempate"), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 75
                echo "            ";
                $context["buttonsHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 76
                echo "
            ";
                // line 77
                $context["parameters"] = ["html" =>                 // line 78
(isset($context["buttonsHtml"]) || array_key_exists("buttonsHtml", $context) ? $context["buttonsHtml"] : (function () { throw new RuntimeError('Variable "buttonsHtml" does not exist.', 78, $this->source); })())];
                // line 80
                echo "            ";
                echo twig_call_macro($macros["UI"], "macro_pinnedDropdownButton", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 80, $this->source); })())], 80, $context, $this->getSourceContext());
                echo "
        </div>
    ";
            }
            // line 83
            echo "    </span>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroImportExport/ImportExport/buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 83,  188 => 80,  186 => 78,  185 => 77,  182 => 76,  179 => 75,  173 => 72,  170 => 71,  168 => 70,  161 => 68,  153 => 65,  150 => 64,  148 => 63,  145 => 62,  143 => 61,  140 => 60,  131 => 56,  127 => 54,  125 => 53,  121 => 51,  119 => 49,  118 => 48,  117 => 47,  116 => 46,  115 => 44,  114 => 43,  113 => 42,  112 => 41,  111 => 39,  110 => 38,  109 => 37,  108 => 36,  107 => 34,  106 => 33,  105 => 32,  104 => 30,  103 => 29,  102 => 26,  98 => 24,  96 => 23,  93 => 22,  91 => 21,  88 => 20,  84 => 18,  81 => 17,  79 => 16,  77 => 15,  74 => 14,  72 => 13,  68 => 11,  66 => 10,  64 => 9,  62 => 8,  59 => 7,  57 => 6,  55 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

{% set hasImportProcessor = importProcessor is defined and importProcessor is not empty %}
{% set importAllowed = hasImportProcessor and is_granted('oro_importexport_import') %}
{% set importLabel = importLabel|default('oro.importexport.import.label'|trans) %}
{% set importValidationLabel = importValidationLabel|default('oro.importexport.import.validation_label'|trans) %}

{% set hasExportProcessor = exportProcessor is defined and exportProcessor is not empty %}
{% set exportAllowed = hasExportProcessor and is_granted('oro_importexport_export') %}
{% if exportAllowed %}
    {% set isExportPopupRequired = exportProcessor is iterable and exportProcessor|length > 1 %}
{% endif %}
{% set exportLabel = exportLabel|default('oro.importexport.export.label'|trans) %}

{% set hasExportTemplateProcessor = exportTemplateProcessor is defined and exportTemplateProcessor is not empty %}
{% if hasExportTemplateProcessor %}
    {% set isExportTemplatePopupRequired = exportTemplateProcessor is iterable %}
    {% set exportTemplateProcessor = exportTemplateProcessor is iterable ? exportTemplateProcessor[0] : exportTemplateProcessor %}
{% endif %}

{% set exportTemplateLabel = exportTemplateLabel|default('oro.importexport.export_template.label'|trans) %}

{% if exportAllowed or importAllowed %}
    <span class=\"pull-left\"
        data-page-component-module=\"oroui/js/app/components/view-component\"
        data-page-component-options=\"{{ {
            view: 'oroimportexport/js/app/views/import-export-buttons-view',
            data: {
                entity: entity_class,
                routeOptions: options|default({}),

                importTitle: importTitle|default(importLabel),
                importJob: importJob|default(null),
                importValidateJob: importValidateJob|default(null),

                exportTitle: exportTitle|default(exportLabel),
                exportJob: exportJob|default(null),
                exportProcessor: exportProcessor|default(null),
                isExportPopupRequired: isExportPopupRequired|default(false),

                exportTemplateTitle: exportTemplateTitle|default(exportLabel),
                exportTemplateJob: exportTemplateJob|default(null),
                exportTemplateProcessor: exportTemplateProcessor|default(null),
                isExportTemplatePopupRequired: isExportTemplatePopupRequired|default(false),

                filePrefix: filePrefix|default(null),
                datagridName: datagridName|default(null),
                afterRefreshPageMessage: afterRefreshPageMessage|default(null),
                refreshPageOnSuccess: refreshPageOnSuccess|default(false),
            }
        }|json_encode }}\"
    >
    {% if exportAllowed %}
        <div class=\"btn-group\">
            <a href=\"#\" role=\"button\" class=\"btn export-btn icons-holder-text no-hash\">
                <span class=\"fa-upload hide-text\">{{ 'oro.importexport.export.label'|trans }}</span>{{ 'oro.importexport.export.label'|trans }}
            </a>
        </div>
    {% endif %}

    {% if importAllowed %}
        <div class=\"btn-group\">
            {% set buttonsHtml %}
                <a href=\"#\" role=\"button\" class=\"btn import-btn icons-holder-text no-hash\">
                    <span class=\"fa-download hide-text\">{{ importLabel }}</span>{{ importLabel }}
                </a>
                <a href=\"#\" role=\"button\" class=\"btn import-validation-btn icons-holder-text no-hash\">
                    <span class=\"icon-download-alt hide-text\">{{ importValidationLabel }}</span>{{ importValidationLabel }}
                </a>
                {% if hasExportTemplateProcessor %}
                    <a href=\"#\" role=\"button\" class=\"btn template-btn icons-holder-text no-hash\">
                        <span class=\"fa-file-o hide-text\"></span>{{ 'oro.importexport.import.tempate'|trans }}
                    </a>
                {% endif %}
            {% endset %}

            {% set parameters = {
                'html': buttonsHtml
            } %}
            {{ UI.pinnedDropdownButton(parameters) }}
        </div>
    {% endif %}
    </span>
{% endif %}
", "@OroImportExport/ImportExport/buttons.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ImportExportBundle/Resources/views/ImportExport/buttons.html.twig");
    }
}
