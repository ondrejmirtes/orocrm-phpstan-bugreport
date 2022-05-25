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

/* @OroSegment/macros.html.twig */
class __TwigTemplate_9a8647467bb4cb141b8341e7c15655d8 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSegment/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSegment/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSegment/macros.html.twig"));

        // line 53
        echo "
";
        // line 60
        echo "
";
        // line 84
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_query_designer_condition_builder($__params__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "params" => $__params__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_condition_builder"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_condition_builder"));

            // line 2
            echo "    ";
            $macros["segmentMacros"] = $this;
            // line 3
            echo "    ";
            $context["params"] = twig_array_merge(["column_chain_template_selector" => "#column-chain-template", "field_choice_filter_preset" => "querydesigner"],             // line 6
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 6, $this->source); })()));
            // line 7
            echo "    ";
            $context["segment_selection_template_id"] = "segment-template";
            // line 8
            echo "    ";
            $context["segmentConditionOptions"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(["filters" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 9
($context["params"] ?? null), "metadata", [], "any", false, true, false, 9), "filters", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "metadata", [], "any", false, true, false, 9), "filters", [], "any", false, false, false, 9), [])) : ([])), "segmentChoice" => ["select2" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.condition_builder.choose_entity_segment"), "formatSelectionTemplateSelector" => ("#" .             // line 13
(isset($context["segment_selection_template_id"]) || array_key_exists("segment_selection_template_id", $context) ? $context["segment_selection_template_id"] : (function () { throw new RuntimeError('Variable "segment_selection_template_id" does not exist.', 13, $this->source); })())), "ajax" => ["url" => "oro_api_get_segment_items", "quietMillis" => 100], "pageLimit" => ((twig_get_attribute($this->env, $this->source,             // line 18
($context["params"] ?? null), "page_limit", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "page_limit", [], "any", false, false, false, 18), 10)) : (10))], "currentSegment" => ((twig_get_attribute($this->env, $this->source,             // line 20
($context["params"] ?? null), "currentSegmentId", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "currentSegmentId", [], "any", false, false, false, 20), null)) : (null))]], ((twig_get_attribute($this->env, $this->source,             // line 22
($context["params"] ?? null), "segmentConditionOptions", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "segmentConditionOptions", [], "any", false, false, false, 22), [])) : ([])));
            // line 23
            echo "    ";
            $context["conditionBuilderOptions"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(["fieldsRelatedCriteria" => [0 => "condition-item", 1 => "condition-segment"]], ((twig_get_attribute($this->env, $this->source,             // line 25
($context["params"] ?? null), "conditionBuilderOptions", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "conditionBuilderOptions", [], "any", false, false, false, 25), [])) : ([])));
            // line 26
            echo "    ";
            $context["conditionBuilderOptions"] = $this->extensions['Oro\Bundle\SegmentBundle\Twig\SegmentExtension']->updateSegmentConditionBuilderOptions((isset($context["conditionBuilderOptions"]) || array_key_exists("conditionBuilderOptions", $context) ? $context["conditionBuilderOptions"] : (function () { throw new RuntimeError('Variable "conditionBuilderOptions" does not exist.', 26, $this->source); })()));
            // line 27
            echo "
    ";
            // line 28
            echo twig_call_macro($macros["segmentMacros"], "macro_query_designer_segment_template", [(isset($context["segment_selection_template_id"]) || array_key_exists("segment_selection_template_id", $context) ? $context["segment_selection_template_id"] : (function () { throw new RuntimeError('Variable "segment_selection_template_id" does not exist.', 28, $this->source); })())], 28, $context, $this->getSourceContext());
            echo "
    <div class=\"condition-builder\"
         data-page-component-module=\"oroquerydesigner/js/app/components/condition-builder-component\"
         data-page-component-options=\"";
            // line 31
            echo twig_escape_filter($this->env, json_encode((isset($context["conditionBuilderOptions"]) || array_key_exists("conditionBuilderOptions", $context) ? $context["conditionBuilderOptions"] : (function () { throw new RuntimeError('Variable "conditionBuilderOptions" does not exist.', 31, $this->source); })())), "html", null, true);
            echo "\"
         data-page-component-name=\"";
            // line 32
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "componentName", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "componentName", [], "any", false, false, false, 32), "condition-builder")) : ("condition-builder")), "html", null, true);
            echo "\">
        <div class=\"row-fluid\">
            <div class=\"criteria-list-container filter-criteria\">
                <ul class=\"criteria-list\">
                    ";
            // line 36
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("segment_criteria_list", $context)) ? (_twig_default_filter((isset($context["segment_criteria_list"]) || array_key_exists("segment_criteria_list", $context) ? $context["segment_criteria_list"] : (function () { throw new RuntimeError('Variable "segment_criteria_list" does not exist.', 36, $this->source); })()), "segment_criteria_list")) : ("segment_criteria_list")), ["params" => (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 36, $this->source); })())]);
            // line 37
            echo "                    <li class=\"option\" data-criteria=\"condition-segment\"
                        data-module=\"orosegment/js/app/views/segment-condition-view\"
                        data-options=\"";
            // line 39
            echo twig_escape_filter($this->env, json_encode((isset($context["segmentConditionOptions"]) || array_key_exists("segmentConditionOptions", $context) ? $context["segmentConditionOptions"] : (function () { throw new RuntimeError('Variable "segmentConditionOptions" does not exist.', 39, $this->source); })())), "html", null, true);
            echo "\">
                        ";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.condition_builder.criteria.segment_condition"), "html", null, true);
            echo "
                    </li>
                    <li class=\"option\" data-criteria=\"conditions-group\">
                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.condition_builder.criteria.conditions_group"), "html", null, true);
            echo "
                    </li>
                </ul>
            </div>
            <div class=\"condition-container\">
                <div class=\"drag-n-drop-hint\"><div>";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.condition_builder.drag_n_drop_hint"), "html", null, true);
            echo "</div></div>
            </div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_query_designer_segment_template($__id__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_segment_template"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_segment_template"));

            // line 55
            echo "    <script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "\">
        ";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply segment", [], "messages");
            // line 57
            echo "        <%= obj.text %>
    </script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 67
    public function macro_runButton($__entity__ = null, $__reloadRequired__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "reloadRequired" => $__reloadRequired__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "runButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "runButton"));

            // line 68
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSegment/macros.html.twig", 68)->unwrap();
            // line 69
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 69, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 70
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 70, $this->source); })()), "type", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70) == twig_constant("Oro\\Bundle\\SegmentBundle\\Entity\\SegmentType::TYPE_STATIC")))) {
                // line 72
                echo "        ";
                echo twig_call_macro($macros["UI"], "macro_clientButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_post_segment_run", ["id" => twig_get_attribute($this->env, $this->source,                 // line 73
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "aCss" => "no-hash run-button btn", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.action.refresh"), "iCss" => "fa-refresh", "dataAttributes" => ["page-component-module" => "orosegment/js/app/components/refresh-button", "page-component-options" => json_encode(["reloadRequired" =>                 // line 79
(isset($context["reloadRequired"]) || array_key_exists("reloadRequired", $context) ? $context["reloadRequired"] : (function () { throw new RuntimeError('Variable "reloadRequired" does not exist.', 79, $this->source); })())])]]], 72, $context, $this->getSourceContext());
                // line 81
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 93
    public function macro_initJsWidgets($__type__ = null, $__form__ = null, $__entities__ = null, $__metadata__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "form" => $__form__,
            "entities" => $__entities__,
            "metadata" => $__metadata__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "initJsWidgets"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "initJsWidgets"));

            // line 94
            echo "    ";
            $context["widgetOptions"] = ["valueSource" => (("[data-ftid=" .             // line 95
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 95, $this->source); })())) . "_form_definition]"), "entityChoice" => (("[data-ftid=" .             // line 96
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 96, $this->source); })())) . "_form_entity]"), "entityChangeConfirmMessage" => (twig_replace_filter(            // line 97
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 97, $this->source); })()), ["_" => "."]) . ".change_entity_confirmation"), "column" => ["editor" => ["namePattern" => (("^" .             // line 99
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 99, $this->source); })())) . "_form\\[column\\]\\[([\\w\\W]*)\\]\$")], "form" => (("#" .             // line 100
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 100, $this->source); })())) . "-column-form"), "itemContainer" => (("#" .             // line 101
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 101, $this->source); })())) . "-column-list .item-container"), "itemTemplate" => (("#" .             // line 102
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 102, $this->source); })())) . "-column-row")], "select2FieldChoiceTemplate" => "#column-chain-template", "metadata" =>             // line 105
(isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 105, $this->source); })())];
            // line 107
            echo "
    ";
            // line 108
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 108, $this->source); })()) == "oro_report")) {
                // line 109
                echo "        ";
                $context["widgetOptions"] = twig_array_merge((isset($context["widgetOptions"]) || array_key_exists("widgetOptions", $context) ? $context["widgetOptions"] : (function () { throw new RuntimeError('Variable "widgetOptions" does not exist.', 109, $this->source); })()), ["grouping" => ["editor" => ["mapping" => ["name" => "oro_report_form[grouping][columnNames]"]], "form" => "#oro_report-grouping-form", "itemContainer" => "#oro_report-grouping-list .grouping-item-container", "itemTemplate" => "#oro_report-grouping-item-row"]]);
                // line 119
                echo "    ";
            }
            // line 120
            echo "
    ";
            // line 121
            $context["widgetOptions"] = $this->extensions['Oro\Bundle\SegmentBundle\Twig\SegmentExtension']->updateSegmentWidgetOptions((isset($context["widgetOptions"]) || array_key_exists("widgetOptions", $context) ? $context["widgetOptions"] : (function () { throw new RuntimeError('Variable "widgetOptions" does not exist.', 121, $this->source); })()), (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 121, $this->source); })()));
            // line 122
            echo "
    <div data-page-component-module=\"orosegment/js/app/components/segment-component\"
         data-page-component-options=\"";
            // line 124
            echo twig_escape_filter($this->env, json_encode((isset($context["widgetOptions"]) || array_key_exists("widgetOptions", $context) ? $context["widgetOptions"] : (function () { throw new RuntimeError('Variable "widgetOptions" does not exist.', 124, $this->source); })())), "html", null, true);
            echo "\"></div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroSegment/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 124,  315 => 122,  313 => 121,  310 => 120,  307 => 119,  304 => 109,  302 => 108,  299 => 107,  297 => 105,  296 => 102,  295 => 101,  294 => 100,  293 => 99,  292 => 97,  291 => 96,  290 => 95,  288 => 94,  266 => 93,  249 => 81,  247 => 79,  246 => 73,  244 => 72,  242 => 70,  240 => 69,  237 => 68,  217 => 67,  200 => 57,  198 => 56,  193 => 55,  174 => 54,  154 => 48,  146 => 43,  140 => 40,  136 => 39,  132 => 37,  130 => 36,  123 => 32,  119 => 31,  113 => 28,  110 => 27,  107 => 26,  105 => 25,  103 => 23,  101 => 22,  100 => 20,  99 => 18,  98 => 13,  97 => 9,  95 => 8,  92 => 7,  90 => 6,  88 => 3,  85 => 2,  66 => 1,  52 => 84,  49 => 60,  46 => 53,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro query_designer_condition_builder(params) %}
    {% import _self as segmentMacros %}
    {% set params = {
        column_chain_template_selector: '#column-chain-template',
        field_choice_filter_preset: 'querydesigner',
    }|merge(params) %}
    {% set segment_selection_template_id = 'segment-template' %}
    {% set segmentConditionOptions = {
        filters: params.metadata.filters|default([]),
        segmentChoice: {
            select2: {
                placeholder: 'oro.segment.condition_builder.choose_entity_segment'|trans,
                formatSelectionTemplateSelector: '#' ~ segment_selection_template_id,
                ajax: {
                    url: 'oro_api_get_segment_items',
                    quietMillis: 100
                },
                pageLimit: params.page_limit|default(10)
            },
            currentSegment: params.currentSegmentId|default(null)
        }
    }|merge_recursive(params.segmentConditionOptions|default({})) %}
    {% set conditionBuilderOptions = {
        fieldsRelatedCriteria: ['condition-item', 'condition-segment'],
    }|merge_recursive(params.conditionBuilderOptions|default({})) %}
    {% set conditionBuilderOptions = update_segment_condition_builder_options(conditionBuilderOptions) %}

    {{ segmentMacros.query_designer_segment_template(segment_selection_template_id) }}
    <div class=\"condition-builder\"
         data-page-component-module=\"oroquerydesigner/js/app/components/condition-builder-component\"
         data-page-component-options=\"{{ conditionBuilderOptions|json_encode }}\"
         data-page-component-name=\"{{ params.componentName|default('condition-builder') }}\">
        <div class=\"row-fluid\">
            <div class=\"criteria-list-container filter-criteria\">
                <ul class=\"criteria-list\">
                    {% placeholder segment_criteria_list with {params: params} %}
                    <li class=\"option\" data-criteria=\"condition-segment\"
                        data-module=\"orosegment/js/app/views/segment-condition-view\"
                        data-options=\"{{ segmentConditionOptions|json_encode }}\">
                        {{ 'oro.segment.condition_builder.criteria.segment_condition'|trans }}
                    </li>
                    <li class=\"option\" data-criteria=\"conditions-group\">
                        {{ 'oro.query_designer.condition_builder.criteria.conditions_group'|trans }}
                    </li>
                </ul>
            </div>
            <div class=\"condition-container\">
                <div class=\"drag-n-drop-hint\"><div>{{ 'oro.query_designer.condition_builder.drag_n_drop_hint'|trans }}</div></div>
            </div>
        </div>
    </div>
{% endmacro %}

{% macro query_designer_segment_template(id) %}
    <script type=\"text/html\" id=\"{{ id }}\">
        {% trans %}Apply segment {% endtrans %}
        <%= obj.text %>
    </script>
{% endmacro %}

{#
    Renders run button for static segment if allowed

    @param Segment entity
    @param bool    reloadRequired - is page reload required after run
#}
{% macro runButton(entity, reloadRequired = false) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% if entity.id and is_granted('EDIT', entity)
        and entity.type.name == constant('Oro\\\\Bundle\\\\SegmentBundle\\\\Entity\\\\SegmentType::TYPE_STATIC')
    %}
        {{ UI.clientButton({
            'dataUrl': path('oro_api_post_segment_run', { 'id': entity.id }) ,
            'aCss':   'no-hash run-button btn',
            'label' : 'oro.segment.action.refresh'|trans,
            'iCss':   'fa-refresh',
            'dataAttributes': {
                'page-component-module': 'orosegment/js/app/components/refresh-button',
                'page-component-options': {'reloadRequired': reloadRequired}|json_encode,
            }
        }) }}
    {% endif %}
{% endmacro %}

{#
    Render JS code for report/segment init

    @param string   type     segment or report
    @param FormView form
    @param array    entities
    @param array    metadata
#}
{% macro initJsWidgets(type, form, entities, metadata) %}
    {% set widgetOptions = {
        valueSource:                '[data-ftid=' ~ type ~ '_form_definition]',
        entityChoice:               '[data-ftid=' ~ type ~ '_form_entity]',
        entityChangeConfirmMessage: type|replace({'_':'.'}) ~ '.change_entity_confirmation',
        column: {
            editor:        { namePattern: '^' ~ type ~ '_form\\\\[column\\\\]\\\\[([\\\\w\\\\W]*)\\\\]\$' },
            form:          '#' ~ type ~ '-column-form',
            itemContainer: '#' ~ type ~ '-column-list .item-container',
            itemTemplate:  '#' ~ type ~ '-column-row'
        },
        select2FieldChoiceTemplate: '#column-chain-template',
        metadata:                   metadata,
    } %}

    {% if type == 'oro_report' %}
        {% set widgetOptions = widgetOptions|merge({
            'grouping': {
                editor: {
                    mapping: { name: 'oro_report_form[grouping][columnNames]' }
                },
                form:          '#oro_report-grouping-form',
                itemContainer: '#oro_report-grouping-list .grouping-item-container',
                itemTemplate:  '#oro_report-grouping-item-row'
            }
        }) %}
    {% endif %}

    {% set widgetOptions = update_segment_widget_options(widgetOptions, type) %}

    <div data-page-component-module=\"orosegment/js/app/components/segment-component\"
         data-page-component-options=\"{{ widgetOptions|json_encode }}\"></div>
{% endmacro %}
", "@OroSegment/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/SegmentBundle/Resources/views/macros.html.twig");
    }
}
