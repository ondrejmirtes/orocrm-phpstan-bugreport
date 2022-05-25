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

/* @OroImportExport/ImportExport/widget/importValidateExportTemplate.html.twig */
class __TwigTemplate_f1e744f637542e9cb1c6e7dd4a14206a extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroImportExport/ImportExport/widget/importValidateExportTemplate.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/widget/importValidateExportTemplate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImportExport/ImportExport/widget/importValidateExportTemplate.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroImportExport/ImportExport/widget/importValidateExportTemplate.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["importProcessorAliasesToConfirmMessage"] = [];
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configsWithForm"]) || array_key_exists("configsWithForm", $context) ? $context["configsWithForm"] : (function () { throw new RuntimeError('Variable "configsWithForm" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["configWithForm"]) {
            // line 6
            echo "    ";
            $context["config"] = twig_get_attribute($this->env, $this->source, $context["configWithForm"], "configuration", [], "any", false, false, false, 6);
            // line 7
            echo "    ";
            $context["importProcessorAliasesToConfirmMessage"] = twig_array_merge((isset($context["importProcessorAliasesToConfirmMessage"]) || array_key_exists("importProcessorAliasesToConfirmMessage", $context) ? $context["importProcessorAliasesToConfirmMessage"] : (function () { throw new RuntimeError('Variable "importProcessorAliasesToConfirmMessage" does not exist.', 7, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 7, $this->source); })()), "importProcessorsToConfirmationMessage", [], "any", false, false, false, 7));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configWithForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
";
        // line 10
        $context["ImportValidateViewOptions"] = ["view" => "oroimportexport/js/app/views/import-validate-view", "options" => ["importProcessorAliasesToConfirmMessages" =>         // line 13
(isset($context["importProcessorAliasesToConfirmMessage"]) || array_key_exists("importProcessorAliasesToConfirmMessage", $context) ? $context["importProcessorAliasesToConfirmMessage"] : (function () { throw new RuntimeError('Variable "importProcessorAliasesToConfirmMessage" does not exist.', 13, $this->source); })()), "wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", [0 => "_wid"], "method", false, false, false, 14)]];
        // line 18
        echo "
<div class=\"widget-content import-widget-content\" ";
        // line 19
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [(isset($context["ImportValidateViewOptions"]) || array_key_exists("ImportValidateViewOptions", $context) ? $context["ImportValidateViewOptions"] : (function () { throw new RuntimeError('Variable "ImportValidateViewOptions" does not exist.', 19, $this->source); })())], 19, $context, $this->getSourceContext());
        echo ">
    ";
        // line 20
        $context["tabId"] = uniqid("import-tablist-");
        // line 21
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["configsWithForm"]) || array_key_exists("configsWithForm", $context) ? $context["configsWithForm"] : (function () { throw new RuntimeError('Variable "configsWithForm" does not exist.', 21, $this->source); })())) > 1)) {
            // line 22
            echo "        <div  ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/tabs-component"]], 22, $context, $this->getSourceContext());
            // line 24
            echo ">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["configsWithForm"]) || array_key_exists("configsWithForm", $context) ? $context["configsWithForm"] : (function () { throw new RuntimeError('Variable "configsWithForm" does not exist.', 26, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["configWithForm"]) {
                // line 27
                echo "                    ";
                $context["config"] = twig_get_attribute($this->env, $this->source, $context["configWithForm"], "configuration", [], "any", false, false, false, 27);
                // line 28
                echo "                    ";
                $context["shortEntityName"] = $this->extensions['Oro\Bundle\ImportExportBundle\Twig\BasenameTwigExtension']->basenameFilter(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 28, $this->source); })()), "entityClass", [], "any", false, false, false, 28));
                // line 29
                echo "
                    ";
                // line 30
                if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "importEntityLabel", [], "any", true, true, false, 30) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "importEntityLabel", [], "any", false, false, false, 30)))) {
                    // line 31
                    echo "                        ";
                    $context["entityLabel"] = twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "importEntityLabel", [], "any", false, false, false, 31);
                    // line 32
                    echo "                    ";
                } else {
                    // line 33
                    echo "                        ";
                    $context["entityLabel"] = (isset($context["shortEntityName"]) || array_key_exists("shortEntityName", $context) ? $context["shortEntityName"] : (function () { throw new RuntimeError('Variable "shortEntityName" does not exist.', 33, $this->source); })());
                    // line 34
                    echo "                    ";
                }
                // line 35
                echo "
                    ";
                // line 36
                $context["isActiveEntity"] = (((isset($context["chosenEntityName"]) || array_key_exists("chosenEntityName", $context) ? $context["chosenEntityName"] : (function () { throw new RuntimeError('Variable "chosenEntityName" does not exist.', 36, $this->source); })()) && ((isset($context["chosenEntityName"]) || array_key_exists("chosenEntityName", $context) ? $context["chosenEntityName"] : (function () { throw new RuntimeError('Variable "chosenEntityName" does not exist.', 36, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 36, $this->source); })()), "entityClass", [], "any", false, false, false, 36))) || ( !(isset($context["chosenEntityName"]) || array_key_exists("chosenEntityName", $context) ? $context["chosenEntityName"] : (function () { throw new RuntimeError('Variable "chosenEntityName" does not exist.', 36, $this->source); })()) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 36) == 1)));
                // line 37
                echo "
                    <li class=\"nav-item\">
                        <a id=\"importExport";
                // line 39
                echo twig_escape_filter($this->env, ((isset($context["shortEntityName"]) || array_key_exists("shortEntityName", $context) ? $context["shortEntityName"] : (function () { throw new RuntimeError('Variable "shortEntityName" does not exist.', 39, $this->source); })()) . (isset($context["tabId"]) || array_key_exists("tabId", $context) ? $context["tabId"] : (function () { throw new RuntimeError('Variable "tabId" does not exist.', 39, $this->source); })())), "html", null, true);
                echo "-tab\"
                           href=\"#importExport";
                // line 40
                echo twig_escape_filter($this->env, ((isset($context["shortEntityName"]) || array_key_exists("shortEntityName", $context) ? $context["shortEntityName"] : (function () { throw new RuntimeError('Variable "shortEntityName" does not exist.', 40, $this->source); })()) . (isset($context["tabId"]) || array_key_exists("tabId", $context) ? $context["tabId"] : (function () { throw new RuntimeError('Variable "tabId" does not exist.', 40, $this->source); })())), "html", null, true);
                echo "\"
                           class=\"nav-link";
                // line 41
                if ((isset($context["isActiveEntity"]) || array_key_exists("isActiveEntity", $context) ? $context["isActiveEntity"] : (function () { throw new RuntimeError('Variable "isActiveEntity" does not exist.', 41, $this->source); })())) {
                    echo " active";
                }
                echo "\"
                           data-toggle=\"tab\"
                           aria-selected=\"";
                // line 43
                if ((isset($context["isActiveEntity"]) || array_key_exists("isActiveEntity", $context) ? $context["isActiveEntity"] : (function () { throw new RuntimeError('Variable "isActiveEntity" does not exist.', 43, $this->source); })())) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo "\"
                           aria-controls=\"importExport";
                // line 44
                echo twig_escape_filter($this->env, ((isset($context["shortEntityName"]) || array_key_exists("shortEntityName", $context) ? $context["shortEntityName"] : (function () { throw new RuntimeError('Variable "shortEntityName" does not exist.', 44, $this->source); })()) . (isset($context["tabId"]) || array_key_exists("tabId", $context) ? $context["tabId"] : (function () { throw new RuntimeError('Variable "tabId" does not exist.', 44, $this->source); })())), "html", null, true);
                echo "\"
                           role=\"tab\"
                        >";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["entityLabel"]) || array_key_exists("entityLabel", $context) ? $context["entityLabel"] : (function () { throw new RuntimeError('Variable "entityLabel" does not exist.', 46, $this->source); })()), "html", null, true);
                echo "</a>
                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configWithForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </ul>
        </div>
    ";
        }
        // line 52
        echo "
    ";
        // line 53
        if ((twig_length_filter($this->env, (isset($context["configsWithForm"]) || array_key_exists("configsWithForm", $context) ? $context["configsWithForm"] : (function () { throw new RuntimeError('Variable "configsWithForm" does not exist.', 53, $this->source); })())) > 1)) {
            // line 54
            echo "    <div class=\"tab-content\">
    ";
        }
        // line 56
        echo "
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configsWithForm"]) || array_key_exists("configsWithForm", $context) ? $context["configsWithForm"] : (function () { throw new RuntimeError('Variable "configsWithForm" does not exist.', 57, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["configWithForm"]) {
            // line 58
            echo "            ";
            $context["config"] = twig_get_attribute($this->env, $this->source, $context["configWithForm"], "configuration", [], "any", false, false, false, 58);
            // line 59
            echo "            ";
            $context["form"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["configWithForm"], "form", [], "any", false, false, false, 59), "createView", [], "method", false, false, false, 59);
            // line 60
            echo "            ";
            $context["shortEntityName"] = $this->extensions['Oro\Bundle\ImportExportBundle\Twig\BasenameTwigExtension']->basenameFilter(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 60, $this->source); })()), "entityClass", [], "any", false, false, false, 60));
            // line 61
            echo "            ";
            $context["isActiveEntity"] = (((isset($context["chosenEntityName"]) || array_key_exists("chosenEntityName", $context) ? $context["chosenEntityName"] : (function () { throw new RuntimeError('Variable "chosenEntityName" does not exist.', 61, $this->source); })()) && ((isset($context["chosenEntityName"]) || array_key_exists("chosenEntityName", $context) ? $context["chosenEntityName"] : (function () { throw new RuntimeError('Variable "chosenEntityName" does not exist.', 61, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 61, $this->source); })()), "entityClass", [], "any", false, false, false, 61))) || ( !(isset($context["chosenEntityName"]) || array_key_exists("chosenEntityName", $context) ? $context["chosenEntityName"] : (function () { throw new RuntimeError('Variable "chosenEntityName" does not exist.', 61, $this->source); })()) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61) == 1)));
            // line 62
            echo "            ";
            $context["strategyTooltip"] = ((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 62, $this->source); })()), "importStrategyTooltip", [], "any", false, false, false, 62)) ? (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 62, $this->source); })()), "importStrategyTooltip", [], "any", false, false, false, 62)) : ("oro.importexport.import.strategy.tooltip"));
            // line 63
            echo "
            <div id=\"importExport";
            // line 64
            echo twig_escape_filter($this->env, ((isset($context["shortEntityName"]) || array_key_exists("shortEntityName", $context) ? $context["shortEntityName"] : (function () { throw new RuntimeError('Variable "shortEntityName" does not exist.', 64, $this->source); })()) . (isset($context["tabId"]) || array_key_exists("tabId", $context) ? $context["tabId"] : (function () { throw new RuntimeError('Variable "tabId" does not exist.', 64, $this->source); })())), "html", null, true);
            echo "\"
                 class=\"tab-pane";
            // line 65
            if ((isset($context["isActiveEntity"]) || array_key_exists("isActiveEntity", $context) ? $context["isActiveEntity"] : (function () { throw new RuntimeError('Variable "isActiveEntity" does not exist.', 65, $this->source); })())) {
                echo " active";
            }
            echo "\"
                 role=\"tabpanel\"
                 aria-labelledby=\"importExport";
            // line 67
            echo twig_escape_filter($this->env, ((isset($context["shortEntityName"]) || array_key_exists("shortEntityName", $context) ? $context["shortEntityName"] : (function () { throw new RuntimeError('Variable "shortEntityName" does not exist.', 67, $this->source); })()) . (isset($context["tabId"]) || array_key_exists("tabId", $context) ? $context["tabId"] : (function () { throw new RuntimeError('Variable "tabId" does not exist.', 67, $this->source); })())), "html", null, true);
            echo "-tab\"
            >
                <div class=\"alert alert-info import-notice\" role=\"alert\">
                    <b>";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.import.importance"), "html", null, true);
            echo "</b>:
                    ";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.import.columns_notice"), "html", null, true);
            echo "
                </div>

                ";
            // line 74
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("import_validate_export_messages", $context)) ? (_twig_default_filter((isset($context["import_validate_export_messages"]) || array_key_exists("import_validate_export_messages", $context) ? $context["import_validate_export_messages"] : (function () { throw new RuntimeError('Variable "import_validate_export_messages" does not exist.', 74, $this->source); })()), "import_validate_export_messages")) : ("import_validate_export_messages")), ["alias" => (isset($context["alias"]) || array_key_exists("alias", $context) ? $context["alias"] : (function () { throw new RuntimeError('Variable "alias" does not exist.', 74, $this->source); })()), "config" => (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 74, $this->source); })()), "options" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 74, $this->source); })())]);
            // line 75
            echo "
                <div class=\"form-container\">
                    ";
            // line 77
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_importexport_import_validate_export_template_form", ["entity" => twig_get_attribute($this->env, $this->source,             // line 79
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 79, $this->source); })()), "entityClass", [], "any", false, false, false, 79), "importJob" => twig_get_attribute($this->env, $this->source,             // line 80
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 80, $this->source); })()), "importJobName", [], "any", false, false, false, 80), "importValidateJob" => twig_get_attribute($this->env, $this->source,             // line 81
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 81, $this->source); })()), "importValidationJobName", [], "any", false, false, false, 81), "alias" =>             // line 82
(isset($context["alias"]) || array_key_exists("alias", $context) ? $context["alias"] : (function () { throw new RuntimeError('Variable "alias" does not exist.', 82, $this->source); })())]), "attr" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 85
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "vars", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85), "data-nohash" => "true", "class" => "form-horizontal"]]);
            // line 89
            echo "

                        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 91, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 92
                echo "                            <input type=\"hidden\" name=\"options[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "\" />
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "
                        <input type=\"hidden\" name=\"isValidateJob\" value=\"false\" />

                        <fieldset class=\"form\">
                            <div class=\"control-group-container import-file\">
                                ";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "file", [], "any", false, false, false, 99), 'row', ["label" => "oro.importexport.import.file", "attr" => ["data-validation-ignore-onblur" => true]]);
            // line 102
            echo "
                            </div>
                            <div class=\"control-group-container\" ";
            // line 104
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "processorAlias", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "choices", [], "any", false, false, false, 104)) <= 1)) {
                echo "style=\"display: none;\"";
            }
            echo ">
                                ";
            // line 105
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "processorAlias", [], "any", false, false, false, 105), 'row', ["label" => "oro.importexport.import.strategy", "tooltip" =>             // line 107
(isset($context["strategyTooltip"]) || array_key_exists("strategyTooltip", $context) ? $context["strategyTooltip"] : (function () { throw new RuntimeError('Variable "strategyTooltip" does not exist.', 107, $this->source); })())]);
            // line 108
            echo "
                            </div>
                        ";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'rest');
            echo "

                        ";
            // line 112
            $context["exportTemplateProcessors"] = twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 112, $this->source); })()), "exportTemplateProcessorAlias", [], "any", false, false, false, 112);
            // line 113
            echo "                        ";
            $context["hasExportTemplateProcessor"] =  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 113, $this->source); })()), "exportTemplateProcessorAlias", [], "any", false, false, false, 113));
            // line 114
            echo "                        ";
            $context["isMultipleProcessorsRequired"] = twig_test_iterable((isset($context["exportTemplateProcessors"]) || array_key_exists("exportTemplateProcessors", $context) ? $context["exportTemplateProcessors"] : (function () { throw new RuntimeError('Variable "exportTemplateProcessors" does not exist.', 114, $this->source); })()));
            // line 115
            echo "                            <div class=\"control-group control-group-file\">
                                <div class=\"control-label wrap\"></div>
                                <div class=\"controls\">
                                    ";
            // line 118
            if ((isset($context["hasExportTemplateProcessor"]) || array_key_exists("hasExportTemplateProcessor", $context) ? $context["hasExportTemplateProcessor"] : (function () { throw new RuntimeError('Variable "hasExportTemplateProcessor" does not exist.', 118, $this->source); })())) {
                // line 119
                echo "                                        ";
                if (((isset($context["isMultipleProcessorsRequired"]) || array_key_exists("isMultipleProcessorsRequired", $context) ? $context["isMultipleProcessorsRequired"] : (function () { throw new RuntimeError('Variable "isMultipleProcessorsRequired" does not exist.', 119, $this->source); })()) && (twig_length_filter($this->env, (isset($context["exportTemplateProcessors"]) || array_key_exists("exportTemplateProcessors", $context) ? $context["exportTemplateProcessors"] : (function () { throw new RuntimeError('Variable "exportTemplateProcessors" does not exist.', 119, $this->source); })())) > 1))) {
                    // line 120
                    echo "                                            ";
                    $context["exportTemplateButtons"] = [];
                    // line 121
                    echo "
                                            ";
                    // line 122
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["exportTemplateProcessors"]) || array_key_exists("exportTemplateProcessors", $context) ? $context["exportTemplateProcessors"] : (function () { throw new RuntimeError('Variable "exportTemplateProcessors" does not exist.', 122, $this->source); })()));
                    foreach ($context['_seq'] as $context["alias"] => $context["label"]) {
                        // line 123
                        echo "                                                ";
                        $context["exportTemplateButtons"] = twig_array_merge((isset($context["exportTemplateButtons"]) || array_key_exists("exportTemplateButtons", $context) ? $context["exportTemplateButtons"] : (function () { throw new RuntimeError('Variable "exportTemplateButtons" does not exist.', 123, $this->source); })()), [0 => ["path" => "#", "aCss" => "icons-holder-text no-hash export-tmpl-btn", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                        // line 126
$context["label"]), "iCss" => "fa-file-o hide-text", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                        // line 128
$context["label"]), "data" => ["page-component-module" => "oroui/js/app/components/view-component", "page-component-options" => json_encode(["view" => "oroimportexport/js/app/views/export-template-button-view", "exportTemplateProcessor" =>                         // line 133
$context["alias"], "exportTemplateJob" => ((twig_get_attribute($this->env, $this->source,                         // line 134
($context["config"] ?? null), "exportTemplateJob", [], "any", true, true, false, 134)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "exportTemplateJob", [], "any", false, false, false, 134), null)) : (null)), "routeOptions" => ((                        // line 135
array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 135, $this->source); })()), [])) : ([]))])]]]);
                        // line 140
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['alias'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "
                                            ";
                    // line 142
                    echo twig_call_macro($macros["UI"], "macro_dropdownButton", [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.export_template.label"), "elements" =>                     // line 144
(isset($context["exportTemplateButtons"]) || array_key_exists("exportTemplateButtons", $context) ? $context["exportTemplateButtons"] : (function () { throw new RuntimeError('Variable "exportTemplateButtons" does not exist.', 144, $this->source); })())]], 142, $context, $this->getSourceContext());
                    // line 145
                    echo "
                                        ";
                } else {
                    // line 147
                    echo "                                            ";
                    echo twig_call_macro($macros["UI"], "macro_button", [["path" => "#", "aCss" => "icons-holder-text no-hash export-tmpl-btn", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.export_template.label"), "iCss" => "fa-file-o hide-text", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.export_template.label"), "data" => ["page-component-module" => "oroui/js/app/components/view-component", "page-component-options" => json_encode(["view" => "oroimportexport/js/app/views/export-template-button-view", "exportTemplateProcessor" => twig_get_attribute($this->env, $this->source,                     // line 157
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 157, $this->source); })()), "exportTemplateProcessorAlias", [], "any", false, false, false, 157), "exportTemplateJob" => ((twig_get_attribute($this->env, $this->source,                     // line 158
($context["config"] ?? null), "exportTemplateJob", [], "any", true, true, false, 158)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "exportTemplateJob", [], "any", false, false, false, 158), null)) : (null)), "routeOptions" => ((                    // line 159
array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 159, $this->source); })()), [])) : ([]))])]]], 147, $context, $this->getSourceContext());
                    // line 162
                    echo "
                                        ";
                }
                // line 164
                echo "                                    ";
            }
            // line 165
            echo "                                </div>
                            </div>
                        </fieldset>
                    ";
            // line 168
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), 'form_end');
            echo "
                    ";
            // line 169
            echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()));
            echo "
                </div>
            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configWithForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "
    ";
        // line 174
        if ((twig_length_filter($this->env, (isset($context["configsWithForm"]) || array_key_exists("configsWithForm", $context) ? $context["configsWithForm"] : (function () { throw new RuntimeError('Variable "configsWithForm" does not exist.', 174, $this->source); })())) > 1)) {
            // line 175
            echo "    </div>
    ";
        }
        // line 177
        echo "
    <div class=\"widget-actions\">
        <button class=\"btn\" type=\"reset\">";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
        <button class=\"btn btn-primary\" type=\"button\" data-action-name=\"validate_import\" id=\"validate_import_button\">";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.import.validation_label"), "html", null, true);
        echo "</button>
        <button class=\"btn btn-success\" type=\"button\" data-action-name=\"import\" id=\"import_button\">";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.importexport.import.label"), "html", null, true);
        echo "</button>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroImportExport/ImportExport/widget/importValidateExportTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 181,  441 => 180,  437 => 179,  433 => 177,  429 => 175,  427 => 174,  424 => 173,  406 => 169,  402 => 168,  397 => 165,  394 => 164,  390 => 162,  388 => 159,  387 => 158,  386 => 157,  384 => 147,  380 => 145,  378 => 144,  377 => 142,  374 => 141,  368 => 140,  366 => 135,  365 => 134,  364 => 133,  363 => 128,  362 => 126,  360 => 123,  356 => 122,  353 => 121,  350 => 120,  347 => 119,  345 => 118,  340 => 115,  337 => 114,  334 => 113,  332 => 112,  327 => 110,  323 => 108,  321 => 107,  320 => 105,  314 => 104,  310 => 102,  308 => 99,  301 => 94,  290 => 92,  286 => 91,  282 => 89,  280 => 85,  279 => 82,  278 => 81,  277 => 80,  276 => 79,  275 => 77,  271 => 75,  269 => 74,  263 => 71,  259 => 70,  253 => 67,  246 => 65,  242 => 64,  239 => 63,  236 => 62,  233 => 61,  230 => 60,  227 => 59,  224 => 58,  207 => 57,  204 => 56,  200 => 54,  198 => 53,  195 => 52,  190 => 49,  173 => 46,  168 => 44,  160 => 43,  153 => 41,  149 => 40,  145 => 39,  141 => 37,  139 => 36,  136 => 35,  133 => 34,  130 => 33,  127 => 32,  124 => 31,  122 => 30,  119 => 29,  116 => 28,  113 => 27,  96 => 26,  92 => 24,  89 => 22,  86 => 21,  84 => 20,  80 => 19,  77 => 18,  75 => 14,  74 => 13,  73 => 10,  70 => 9,  63 => 7,  60 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

{% set importProcessorAliasesToConfirmMessage = [] %}

{% for configWithForm in configsWithForm %}
    {% set config = configWithForm.configuration %}
    {% set importProcessorAliasesToConfirmMessage = importProcessorAliasesToConfirmMessage|merge(config.importProcessorsToConfirmationMessage) %}
{% endfor %}

{% set ImportValidateViewOptions = {
    view: 'oroimportexport/js/app/views/import-validate-view',
        options: {
            importProcessorAliasesToConfirmMessages: importProcessorAliasesToConfirmMessage,
            wid: app.request.get('_wid')
        },
    }
%}

<div class=\"widget-content import-widget-content\" {{ UI.renderPageComponentAttributes(ImportValidateViewOptions) }}>
    {% set tabId = 'import-tablist-'|uniqid %}
    {% if configsWithForm|length > 1 %}
        <div  {{ UI.renderPageComponentAttributes({
            module: 'oroui/js/app/components/tabs-component'
        }) }}>
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                {% for configWithForm in configsWithForm %}
                    {% set config = configWithForm.configuration %}
                    {% set shortEntityName = config.entityClass|basename %}

                    {% if config.importEntityLabel is defined and config.importEntityLabel is not empty %}
                        {% set entityLabel = config.importEntityLabel %}
                    {% else %}
                        {% set entityLabel = shortEntityName %}
                    {% endif %}

                    {% set isActiveEntity = (chosenEntityName and chosenEntityName == config.entityClass) or (not chosenEntityName and loop.index == 1) %}

                    <li class=\"nav-item\">
                        <a id=\"importExport{{ shortEntityName ~ tabId }}-tab\"
                           href=\"#importExport{{ shortEntityName ~ tabId }}\"
                           class=\"nav-link{% if isActiveEntity %} active{% endif %}\"
                           data-toggle=\"tab\"
                           aria-selected=\"{% if isActiveEntity %}true{% else %}false{% endif %}\"
                           aria-controls=\"importExport{{ shortEntityName ~ tabId }}\"
                           role=\"tab\"
                        >{{ entityLabel }}</a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}

    {% if configsWithForm|length > 1 %}
    <div class=\"tab-content\">
    {% endif %}

        {% for configWithForm in configsWithForm %}
            {% set config = configWithForm.configuration %}
            {% set form = configWithForm.form.createView() %}
            {% set shortEntityName = config.entityClass|basename %}
            {% set isActiveEntity = (chosenEntityName and chosenEntityName == config.entityClass) or (not chosenEntityName and loop.index == 1) %}
            {% set strategyTooltip = config.importStrategyTooltip ? config.importStrategyTooltip : 'oro.importexport.import.strategy.tooltip' %}

            <div id=\"importExport{{ shortEntityName ~ tabId }}\"
                 class=\"tab-pane{% if isActiveEntity %} active{% endif %}\"
                 role=\"tabpanel\"
                 aria-labelledby=\"importExport{{ shortEntityName ~ tabId }}-tab\"
            >
                <div class=\"alert alert-info import-notice\" role=\"alert\">
                    <b>{{ 'oro.importexport.import.importance'|trans }}</b>:
                    {{ 'oro.importexport.import.columns_notice'|trans }}
                </div>

                {% placeholder import_validate_export_messages with { alias: alias, config: config, options: options } %}

                <div class=\"form-container\">
                    {{ form_start(form, {
                        'action': path('oro_importexport_import_validate_export_template_form', {
                            entity: config.entityClass,
                            importJob: config.importJobName,
                            importValidateJob: config.importValidationJobName,
                            alias: alias
                        }),
                        'attr': {
                            'id': form.vars.id,
                            'data-nohash': 'true',
                            'class': 'form-horizontal'
                        }
                    }) }}

                        {% for key, option in options %}
                            <input type=\"hidden\" name=\"options[{{ key }}]\" value=\"{{ option }}\" />
                        {% endfor %}

                        <input type=\"hidden\" name=\"isValidateJob\" value=\"false\" />

                        <fieldset class=\"form\">
                            <div class=\"control-group-container import-file\">
                                {{ form_row(form.file, {
                                    'label': 'oro.importexport.import.file',
                                    'attr': {'data-validation-ignore-onblur': true}
                                }) }}
                            </div>
                            <div class=\"control-group-container\" {% if form.processorAlias.vars.choices|length <= 1 %}style=\"display: none;\"{% endif %}>
                                {{ form_row(form.processorAlias, {
                                    'label': 'oro.importexport.import.strategy',
                                    'tooltip': strategyTooltip
                                }) }}
                            </div>
                        {{ form_rest(form) }}

                        {% set exportTemplateProcessors = config.exportTemplateProcessorAlias %}
                        {% set hasExportTemplateProcessor = config.exportTemplateProcessorAlias is not empty %}
                        {% set isMultipleProcessorsRequired = exportTemplateProcessors is iterable %}
                            <div class=\"control-group control-group-file\">
                                <div class=\"control-label wrap\"></div>
                                <div class=\"controls\">
                                    {% if hasExportTemplateProcessor %}
                                        {% if isMultipleProcessorsRequired and exportTemplateProcessors|length > 1 %}
                                            {% set exportTemplateButtons = [] %}

                                            {% for alias, label in exportTemplateProcessors %}
                                                {% set exportTemplateButtons = exportTemplateButtons|merge([{
                                                        'path':'#',
                                                        'aCss':'icons-holder-text no-hash export-tmpl-btn',
                                                        'title': label|trans,
                                                        'iCss':'fa-file-o hide-text',
                                                        'label': label|trans,
                                                        'data': {
                                                            'page-component-module': 'oroui/js/app/components/view-component',
                                                            'page-component-options': {
                                                                'view': 'oroimportexport/js/app/views/export-template-button-view',
                                                                'exportTemplateProcessor': alias,
                                                                'exportTemplateJob': config.exportTemplateJob|default(null),
                                                                'routeOptions': options|default({})
                                                            }|json_encode
                                                        }
                                                    }])
                                                %}
                                            {% endfor %}

                                            {{ UI.dropdownButton({
                                                'label': 'oro.importexport.export_template.label'|trans,
                                                'elements': exportTemplateButtons
                                            }) }}
                                        {% else %}
                                            {{ UI.button({
                                                'path':'#',
                                                'aCss':'icons-holder-text no-hash export-tmpl-btn',
                                                'title': 'oro.importexport.export_template.label'|trans,
                                                'iCss':'fa-file-o hide-text',
                                                'label': 'oro.importexport.export_template.label'|trans,
                                                'data': {
                                                    'page-component-module': 'oroui/js/app/components/view-component',
                                                    'page-component-options': {
                                                        'view': 'oroimportexport/js/app/views/export-template-button-view',
                                                        'exportTemplateProcessor': config.exportTemplateProcessorAlias,
                                                        'exportTemplateJob': config.exportTemplateJob|default(null),
                                                        'routeOptions': options|default({})
                                                    }|json_encode
                                                }
                                            }) }}
                                        {% endif %}
                                    {% endif %}
                                </div>
                            </div>
                        </fieldset>
                    {{ form_end(form) }}
                    {{ oro_form_js_validation(form) }}
                </div>
            </div>
        {% endfor %}

    {% if configsWithForm|length > 1 %}
    </div>
    {% endif %}

    <div class=\"widget-actions\">
        <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
        <button class=\"btn btn-primary\" type=\"button\" data-action-name=\"validate_import\" id=\"validate_import_button\">{{ 'oro.importexport.import.validation_label'|trans }}</button>
        <button class=\"btn btn-success\" type=\"button\" data-action-name=\"import\" id=\"import_button\">{{ 'oro.importexport.import.label'|trans }}</button>
    </div>
</div>
", "@OroImportExport/ImportExport/widget/importValidateExportTemplate.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ImportExportBundle/Resources/views/ImportExport/widget/importValidateExportTemplate.html.twig");
    }
}
