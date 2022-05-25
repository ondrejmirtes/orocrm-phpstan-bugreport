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

/* @OroImportExport/ImportExport/export-buttons.html.twig */
class __TwigTemplate_4a70d5290815878d4630870b9b997eed extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroImportExport/ImportExport/export-buttons.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/export-buttons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/export-buttons.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroImportExport/ImportExport/export-buttons.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["exportButtonsHtml"] = "";
        // line 4
        $context["showExportButtons"] = false;
        // line 5
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Oro\Bundle\ImportExportBundle\Twig\GetImportExportConfigurationExtension']->getConfiguration((isset($context["alias"]) || array_key_exists("alias", $context) ? $context["alias"] : (function () { throw new RuntimeError('Variable "alias" does not exist.', 6, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
            // line 7
            echo "    ";
            $context["hasExportProcessor"] = (twig_get_attribute($this->env, $this->source, $context["configuration"], "exportProcessorAlias", [], "any", true, true, false, 7) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["configuration"], "exportProcessorAlias", [], "any", false, false, false, 7)));
            // line 8
            echo "    ";
            $context["exportAllowed"] = (((isset($context["hasExportProcessor"]) || array_key_exists("hasExportProcessor", $context) ? $context["hasExportProcessor"] : (function () { throw new RuntimeError('Variable "hasExportProcessor" does not exist.', 8, $this->source); })()) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_importexport_export")) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW;entity:OroImportExportBundle:ImportExportResult"));
            // line 9
            echo "    ";
            $context["exportProcessor"] = ((twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["configuration"], "exportProcessorAlias", [], "any", false, false, false, 9))) ? (twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["configuration"], "exportProcessorAlias", [], "any", false, false, false, 9))) : (twig_get_attribute($this->env, $this->source, $context["configuration"], "exportProcessorAlias", [], "any", false, false, false, 9)));
            // line 10
            echo "    ";
            $context["isExportPopupRequired"] = twig_test_iterable(twig_get_attribute($this->env, $this->source, $context["configuration"], "exportProcessorAlias", [], "any", false, false, false, 10));
            // line 11
            echo "    ";
            $context["exportLabel"] = ((twig_get_attribute($this->env, $this->source, $context["configuration"], "exportButtonLabel", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["configuration"], "exportButtonLabel", [], "any", false, false, false, 11), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.export.label"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.export.label")));
            // line 12
            echo "
    ";
            // line 13
            if ((isset($context["exportAllowed"]) || array_key_exists("exportAllowed", $context) ? $context["exportAllowed"] : (function () { throw new RuntimeError('Variable "exportAllowed" does not exist.', 13, $this->source); })())) {
                // line 14
                echo "        ";
                $context["showExportButtons"] = true;
                // line 15
                echo "
        ";
                // line 16
                ob_start();
                // line 17
                echo "            <a href=\"#\"
                role=\"button\"
                class=\"btn export-btn icons-holder-text no-hash\"
                data-page-component-module=\"oroui/js/app/components/view-component\"
                data-page-component-options=\"";
                // line 21
                echo twig_escape_filter($this->env, json_encode(["view" => "oroimportexport/js/app/views/export-button-view", "entity" => twig_get_attribute($this->env, $this->source,                 // line 23
$context["configuration"], "entityClass", [], "any", false, false, false, 23), "routeOptions" => twig_array_merge(((twig_get_attribute($this->env, $this->source,                 // line 24
$context["configuration"], "routeOptions", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["configuration"], "routeOptions", [], "any", false, false, false, 24), [])) : ([])), ((array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 24, $this->source); })()), [])) : ([]))), "exportTitle" => ((twig_get_attribute($this->env, $this->source,                 // line 25
$context["configuration"], "exportPopupTitle", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["configuration"], "exportPopupTitle", [], "any", false, false, false, 25), (isset($context["exportLabel"]) || array_key_exists("exportLabel", $context) ? $context["exportLabel"] : (function () { throw new RuntimeError('Variable "exportLabel" does not exist.', 25, $this->source); })()))) : ((isset($context["exportLabel"]) || array_key_exists("exportLabel", $context) ? $context["exportLabel"] : (function () { throw new RuntimeError('Variable "exportLabel" does not exist.', 25, $this->source); })()))), "exportProcessor" => ((                // line 26
array_key_exists("exportProcessor", $context)) ? (_twig_default_filter((isset($context["exportProcessor"]) || array_key_exists("exportProcessor", $context) ? $context["exportProcessor"] : (function () { throw new RuntimeError('Variable "exportProcessor" does not exist.', 26, $this->source); })()), null)) : (null)), "exportJob" => ((twig_get_attribute($this->env, $this->source,                 // line 27
$context["configuration"], "exportJobName", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["configuration"], "exportJobName", [], "any", false, false, false, 27), null)) : (null)), "isExportPopupRequired" => ((                // line 28
array_key_exists("isExportPopupRequired", $context)) ? (_twig_default_filter((isset($context["isExportPopupRequired"]) || array_key_exists("isExportPopupRequired", $context) ? $context["isExportPopupRequired"] : (function () { throw new RuntimeError('Variable "isExportPopupRequired" does not exist.', 28, $this->source); })()), false)) : (false)), "filePrefix" => ((twig_get_attribute($this->env, $this->source,                 // line 29
$context["configuration"], "filePrefix", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["configuration"], "filePrefix", [], "any", false, false, false, 29), null)) : (null))]), "html", null, true);
                // line 30
                echo "\"
            >
                <span class=\"fa-upload hide-text\">";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["exportLabel"]) || array_key_exists("exportLabel", $context) ? $context["exportLabel"] : (function () { throw new RuntimeError('Variable "exportLabel" does not exist.', 32, $this->source); })()), "html", null, true);
                echo "</span>";
                echo twig_escape_filter($this->env, (isset($context["exportLabel"]) || array_key_exists("exportLabel", $context) ? $context["exportLabel"] : (function () { throw new RuntimeError('Variable "exportLabel" does not exist.', 32, $this->source); })()), "html", null, true);
                echo "
            </a>
        ";
                $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 35
                echo "
        ";
                // line 36
                $context["exportButtonsHtml"] = ((isset($context["exportButtonsHtml"]) || array_key_exists("exportButtonsHtml", $context) ? $context["exportButtonsHtml"] : (function () { throw new RuntimeError('Variable "exportButtonsHtml" does not exist.', 36, $this->source); })()) . (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 36, $this->source); })()));
                // line 37
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        // line 40
        if ((isset($context["showExportButtons"]) || array_key_exists("showExportButtons", $context) ? $context["showExportButtons"] : (function () { throw new RuntimeError('Variable "showExportButtons" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "    <div class=\"btn-group\">
        ";
            // line 42
            echo twig_call_macro($macros["UI"], "macro_pinnedDropdownButton", [["html" =>             // line 43
(isset($context["exportButtonsHtml"]) || array_key_exists("exportButtonsHtml", $context) ? $context["exportButtonsHtml"] : (function () { throw new RuntimeError('Variable "exportButtonsHtml" does not exist.', 43, $this->source); })())]], 42, $context, $this->getSourceContext());
            // line 44
            echo "
    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroImportExport/ImportExport/export-buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 44,  138 => 43,  137 => 42,  134 => 41,  132 => 40,  129 => 39,  122 => 37,  120 => 36,  117 => 35,  109 => 32,  105 => 30,  103 => 29,  102 => 28,  101 => 27,  100 => 26,  99 => 25,  98 => 24,  97 => 23,  96 => 21,  90 => 17,  88 => 16,  85 => 15,  82 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  68 => 9,  65 => 8,  62 => 7,  58 => 6,  55 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

{% set exportButtonsHtml = '' %}
{% set showExportButtons = false %}

{% for configuration in get_import_export_configuration(alias) %}
    {% set hasExportProcessor = configuration.exportProcessorAlias is defined and configuration.exportProcessorAlias is not empty %}
    {% set exportAllowed = hasExportProcessor and is_granted('oro_importexport_export') and is_granted('VIEW;entity:OroImportExportBundle:ImportExportResult') %}
    {% set exportProcessor = configuration.exportProcessorAlias is iterable ? configuration.exportProcessorAlias|first : configuration.exportProcessorAlias %}
    {% set isExportPopupRequired = configuration.exportProcessorAlias is iterable %}
    {% set exportLabel = configuration.exportButtonLabel|default('oro.importexport.export.label'|trans) %}

    {% if exportAllowed %}
        {% set showExportButtons = true %}

        {% set html %}
            <a href=\"#\"
                role=\"button\"
                class=\"btn export-btn icons-holder-text no-hash\"
                data-page-component-module=\"oroui/js/app/components/view-component\"
                data-page-component-options=\"{{ {
                    'view': 'oroimportexport/js/app/views/export-button-view',
                    'entity': configuration.entityClass,
                    'routeOptions': configuration.routeOptions|default({})|merge(options|default({})),
                    'exportTitle': configuration.exportPopupTitle|default(exportLabel),
                    'exportProcessor': exportProcessor|default(null),
                    'exportJob': configuration.exportJobName|default(null),
                    'isExportPopupRequired': isExportPopupRequired|default(false),
                    'filePrefix': configuration.filePrefix|default(null)
                }|json_encode }}\"
            >
                <span class=\"fa-upload hide-text\">{{ exportLabel }}</span>{{ exportLabel }}
            </a>
        {% endset %}

        {% set exportButtonsHtml = exportButtonsHtml ~ html %}
    {% endif %}
{% endfor %}

{% if showExportButtons %}
    <div class=\"btn-group\">
        {{ UI.pinnedDropdownButton({
            'html': exportButtonsHtml
        }) }}
    </div>
{% endif %}
", "@OroImportExport/ImportExport/export-buttons.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ImportExportBundle/Resources/views/ImportExport/export-buttons.html.twig");
    }
}
