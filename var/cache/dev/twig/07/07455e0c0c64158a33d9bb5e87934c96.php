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

/* @OroQueryDesigner/macros.html.twig */
class __TwigTemplate_46dc04a02ebc98f1e38c5cc414456220 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroQueryDesigner/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroQueryDesigner/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroQueryDesigner/macros.html.twig"));

        // line 44
        echo "
";
        // line 76
        echo "
";
        // line 95
        echo "
";
        // line 131
        echo "
";
        // line 154
        echo "
";
        // line 224
        echo "
";
        // line 260
        echo "
";
        // line 279
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
            $context["params"] = twig_array_merge(["column_chain_template_selector" => "#column-chain-template", "field_choice_filter_preset" => "querydesigner"],             // line 5
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 5, $this->source); })()));
            // line 6
            echo "    ";
            $context["fieldConditionModule"] = ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "fieldConditionModule", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "fieldConditionModule", [], "any", false, false, false, 6), "oroquerydesigner/js/app/views/field-condition-view")) : ("oroquerydesigner/js/app/views/field-condition-view"));
            // line 7
            echo "    ";
            $context["fieldConditionOptions"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(["filters" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
($context["params"] ?? null), "metadata", [], "any", false, true, false, 8), "filters", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "metadata", [], "any", false, true, false, 8), "filters", [], "any", false, false, false, 8), [])) : ([])), "hierarchy" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 9
($context["params"] ?? null), "metadata", [], "any", false, true, false, 9), "hierarchy", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "metadata", [], "any", false, true, false, 9), "hierarchy", [], "any", false, false, false, 9), [])) : ([])), "fieldChoice" => ["filterPreset" => twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 11, $this->source); })()), "field_choice_filter_preset", [], "any", false, false, false, 11), "select2" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.condition_builder.choose_entity_field"), "formatSelectionTemplateSelector" => ((twig_get_attribute($this->env, $this->source,             // line 14
($context["params"] ?? null), "column_chain_template_selector", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "column_chain_template_selector", [], "any", false, false, false, 14), null)) : (null))]]], ((twig_get_attribute($this->env, $this->source,             // line 17
($context["params"] ?? null), "fieldConditionOptions", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "fieldConditionOptions", [], "any", false, false, false, 17), [])) : ([])));
            // line 18
            echo "    ";
            $context["conditionBuilderOptions"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(["fieldsRelatedCriteria" => [0 => "condition-item"]], ((twig_get_attribute($this->env, $this->source,             // line 20
($context["params"] ?? null), "conditionBuilderOptions", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "conditionBuilderOptions", [], "any", false, false, false, 20), [])) : ([])));
            // line 21
            echo "    <div class=\"condition-builder\"
         data-page-component-module=\"oroquerydesigner/js/app/components/condition-builder-component\"
         data-page-component-options=\"";
            // line 23
            echo twig_escape_filter($this->env, json_encode((isset($context["conditionBuilderOptions"]) || array_key_exists("conditionBuilderOptions", $context) ? $context["conditionBuilderOptions"] : (function () { throw new RuntimeError('Variable "conditionBuilderOptions" does not exist.', 23, $this->source); })())), "html", null, true);
            echo "\"
         data-page-component-name=\"";
            // line 24
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "componentName", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "componentName", [], "any", false, false, false, 24), "condition-builder")) : ("condition-builder")), "html", null, true);
            echo "\">
        <div class=\"row-fluid\">
            <div class=\"criteria-list-container filter-criteria\">
                <ul class=\"criteria-list\">
                    <li class=\"option\" data-criteria=\"condition-item\"
                        data-module=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["fieldConditionModule"]) || array_key_exists("fieldConditionModule", $context) ? $context["fieldConditionModule"] : (function () { throw new RuntimeError('Variable "fieldConditionModule" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "\"
                        data-options=\"";
            // line 30
            echo twig_escape_filter($this->env, json_encode((isset($context["fieldConditionOptions"]) || array_key_exists("fieldConditionOptions", $context) ? $context["fieldConditionOptions"] : (function () { throw new RuntimeError('Variable "fieldConditionOptions" does not exist.', 30, $this->source); })())), "html", null, true);
            echo "\">
                        ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.condition_builder.criteria.field_condition"), "html", null, true);
            echo "
                    </li>
                    <li class=\"option\" data-criteria=\"conditions-group\">
                        ";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.condition_builder.criteria.conditions_group"), "html", null, true);
            echo "
                    </li>
                </ul>
            </div>
            <div class=\"condition-container\">
                <div class=\"drag-n-drop-hint\"><div>";
            // line 39
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

    // line 45
    public function macro_query_designer_column_list($__attr__ = null, $__showItems__ = [0 => "column", 1 => "label", 2 => "function", 3 => "sorting", 4 => "action"], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attr" => $__attr__,
            "showItems" => $__showItems__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_column_list"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_column_list"));

            // line 46
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroQueryDesigner/macros.html.twig", 46)->unwrap();
            // line 47
            echo "    ";
            $macros["queryDesignerMacros"] = $this;
            // line 48
            echo "    ";
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 48, $this->source); })()), [])) : ([])), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 48), "")) : ("")) . " grid-container query-designer-grid-container query-designer-columns-grid-container"))]);
            // line 49
            echo "    <div";
            echo twig_call_macro($macros["UI"], "macro_attributes", [(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 49, $this->source); })())], 49, $context, $this->getSourceContext());
            echo ">
        <table class=\"grid table-hover table table-bordered table-condensed\" style=\"display: table;\">
            <thead>
            <tr>
                ";
            // line 53
            if (twig_in_filter("column", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 53, $this->source); })()))) {
                // line 54
                echo "                <th class=\"name-column\"><span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.column.column"), "html", null, true);
                echo "</span></th>
                ";
            }
            // line 56
            echo "                ";
            if (twig_in_filter("label", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 56, $this->source); })()))) {
                // line 57
                echo "                <th class=\"label-column\"><span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.column.label"), "html", null, true);
                echo "</span></th>
                ";
            }
            // line 59
            echo "                ";
            if (twig_in_filter("function", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 59, $this->source); })()))) {
                // line 60
                echo "                <th class=\"function-column\"><span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.column.function"), "html", null, true);
                echo "</span></th>
                ";
            }
            // line 62
            echo "                ";
            if (twig_in_filter("sorting", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 62, $this->source); })()))) {
                // line 63
                echo "                <th class=\"sorting-column\"><span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.column.sorting"), "html", null, true);
                echo "</span></th>
                ";
            }
            // line 65
            echo "                ";
            if (twig_in_filter("action", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 65, $this->source); })()))) {
                // line 66
                echo "                <th class=\"action-column\"><span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.column.actions"), "html", null, true);
                echo "</span></th>
                ";
            }
            // line 68
            echo "            </tr>
            </thead>
            <tbody class=\"item-container\">
            </tbody>
        </table>
    </div>
    ";
            // line 74
            echo twig_call_macro($macros["queryDesignerMacros"], "macro_query_designer_column_template", [twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 74, $this->source); })()), "rowId", [], "any", false, false, false, 74), (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 74, $this->source); })())], 74, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 77
    public function macro_query_designer_grouping_list($__attr__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attr" => $__attr__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_grouping_list"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_grouping_list"));

            // line 78
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroQueryDesigner/macros.html.twig", 78)->unwrap();
            // line 79
            echo "    ";
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 79, $this->source); })()), [])) : ([])), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 79)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 79), "")) : ("")) . " grid-container query-designer-grid-container query-designer-columns-grid-container"))]);
            // line 80
            echo "    <div";
            echo twig_call_macro($macros["UI"], "macro_attributes", [(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 80, $this->source); })())], 80, $context, $this->getSourceContext());
            echo ">
        <div class=\"grid-container query-designer-grid-container query-designer-columns-grid-container\">
            <table class=\"grid table-hover table table-bordered table-condensed\" style=\"display: table;\">
                <thead>
                <tr>
                    <th class=\"name-column\"><span>";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.column.column"), "html", null, true);
            echo "</span></th>
                    <th class=\"action-column\"><span>";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.column.actions"), "html", null, true);
            echo "</span></th>
                </tr>
                </thead>
                <tbody class=\"grouping-item-container\">
                </tbody>
            </table>
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

    // line 96
    public function macro_query_designer_column_template($__id__ = null, $__showItems__ = [0 => "column", 1 => "label", 2 => "function", 3 => "sorting", 4 => "action"], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "showItems" => $__showItems__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_column_template"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_column_template"));

            // line 97
            echo "    <script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 97, $this->source); })()), "html", null, true);
            echo "\">
        <tr data-cid=\"<%- cid %>\">
            ";
            // line 99
            if (twig_in_filter("column", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 99, $this->source); })()))) {
                // line 100
                echo "            <td class=\"name-cell<% if (obj.deleted) { %> deleted-field<% } %>\"><%= name %></td>
            ";
            }
            // line 102
            echo "            ";
            if (twig_in_filter("label", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 102, $this->source); })()))) {
                // line 103
                echo "            <td class=\"label-cell\"><%- label %></td>
            ";
            }
            // line 105
            echo "            ";
            if (twig_in_filter("function", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 105, $this->source); })()))) {
                // line 106
                echo "            <td class=\"function-cell\"><%= func %></td>
            ";
            }
            // line 108
            echo "            ";
            if (twig_in_filter("sorting", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 108, $this->source); })()))) {
                // line 109
                echo "            <td class=\"sorting-cell\"><%= sorting %></td>
            ";
            }
            // line 111
            echo "            ";
            if (twig_in_filter("action", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 111, $this->source); })()))) {
                // line 112
                echo "            <td class=\"action-cell\">
                ";
                // line 113
                ob_start();
                // line 114
                echo "                <a href=\"#\" class=\"btn btn-icon btn-lighter action no-hash edit-button\"
                        title=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.action.update_column"), "html", null, true);
                echo "\"
                        data-collection-action=\"edit\">
                    <span class=\"fa-pencil-square-o\" aria-hidden=\"true\"></span></a>
                <a href=\"#\" class=\"btn btn-icon btn-lighter action no-hash delete-button\"
                        title=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.action.delete_column"), "html", null, true);
                echo "\"
                        data-collection-action=\"delete\"
                        data-message=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.action.delete_column_confirmation"), "html", null, true);
                echo "\">
                    <span class=\"fa-trash-o\" aria-hidden=\"true\"></span></a>
                <span class=\"btn btn-icon btn-lighter\" title=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.action.move_column"), "html", null, true);
                echo "\">
                    <span class=\"fa-arrows-v handle\" aria-hidden=\"true\"></span></span>
                ";
                $___internal_parse_68_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 113
                echo twig_spaceless($___internal_parse_68_);
                // line 126
                echo "            </td>
            ";
            }
            // line 128
            echo "        </tr>
    </script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 132
    public function macro_query_designer_grouping_item_template($__id__ = null, ...$__varargs__)
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
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_grouping_item_template"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_grouping_item_template"));

            // line 133
            echo "    <script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 133, $this->source); })()), "html", null, true);
            echo "\">
        <tr data-cid=\"<%- cid %>\">
            <td class=\"name-cell<% if (obj.deleted) { %> deleted-field<% } %>\"><%- name %></td>
            <td class=\"action-cell\">
                ";
            // line 137
            ob_start();
            // line 138
            echo "                <a href=\"#\" class=\"btn btn-icon btn-lighter action no-hash edit-button\"
                        title=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.action.update_column"), "html", null, true);
            echo "\"
                        data-collection-action=\"edit\">
                    <span class=\"fa-pencil-square-o\" aria-hidden=\"true\"></span></a>
                <a href=\"#\" class=\"btn btn-icon btn-lighter action no-hash delete-button\"
                        title=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.action.delete_column"), "html", null, true);
            echo "\"
                        data-collection-action=\"delete\"
                        data-message=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.action.delete_column_confirmation"), "html", null, true);
            echo "\">
                    <span class=\"fa-trash-o\" aria-hidden=\"true\"></span></a>
                <span class=\"btn btn-icon btn-lighter\" title=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.datagrid.action.move_column"), "html", null, true);
            echo "\">
                    <span class=\"fa-arrows-v handle\" aria-hidden=\"true\"></span></span>
                ";
            $___internal_parse_69_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 137
            echo twig_spaceless($___internal_parse_69_);
            // line 150
            echo "            </td>
        </tr>
    </script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 155
    public function macro_query_designer_column_form($__form__ = null, $__attr__ = null, $__params__ = null, $__showItems__ = [0 => "column", 1 => "label", 2 => "function", 3 => "sorting", 4 => "action"], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "attr" => $__attr__,
            "params" => $__params__,
            "showItems" => $__showItems__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_column_form"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_column_form"));

            // line 156
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroQueryDesigner/macros.html.twig", 156)->unwrap();
            // line 157
            echo "    ";
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 157, $this->source); })()), [])) : ([])), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,             // line 158
($context["attr"] ?? null), "class", [], "any", true, true, false, 158)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 158), "")) : ("")) . " query-designer-form"))]);
            // line 160
            echo "    <div ";
            echo twig_call_macro($macros["UI"], "macro_attributes", [(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 160, $this->source); })())], 160, $context, $this->getSourceContext());
            echo ">
        <div class=\"query-designer-row\">
            ";
            // line 163
            echo "            ";
            if (twig_in_filter("column", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 163, $this->source); })()))) {
                // line 164
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "name", [], "any", false, false, false, 164), 'row', ["label" => "oro.query_designer.form.column", "attr" => ["data-purpose" => "column-selector", "data-validation" => json_encode(["NotBlank" => null])]]);
                // line 170
                echo "
            ";
            }
            // line 172
            echo "            ";
            // line 173
            echo "            ";
            if (twig_in_filter("label", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 173, $this->source); })()))) {
                // line 174
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "label", [], "any", false, false, false, 174), 'row', ["label" => "oro.query_designer.form.label", "attr" => ["class" => "label-text", "data-purpose" => "label", "data-validation" => json_encode(["NotBlank" => null])]]);
                // line 181
                echo "
            ";
            }
            // line 183
            echo "            ";
            if (twig_in_filter("function", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 183, $this->source); })()))) {
                // line 184
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "func", [], "any", false, false, false, 184), 'row', ["label" => "oro.query_designer.form.function", "attr" => ["class" => "function-selector", "data-purpose" => "function-selector"]]);
                // line 190
                echo "
            ";
            }
            // line 192
            echo "            ";
            if (twig_in_filter("sorting", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 192, $this->source); })()))) {
                // line 193
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "sorting", [], "any", false, false, false, 193), 'row', ["label" => "oro.query_designer.form.sorting", "attr" => ["class" => "sorting-selector", "data-purpose" => "sorting-selector"]]);
                // line 199
                echo "
            ";
            }
            // line 201
            echo "            ";
            if (twig_in_filter("action", (isset($context["showItems"]) || array_key_exists("showItems", $context) ? $context["showItems"] : (function () { throw new RuntimeError('Variable "showItems" does not exist.', 201, $this->source); })()))) {
                // line 202
                echo "            <div class=\"submit-cancel-buttons\">
                ";
                // line 203
                ob_start();
                // line 204
                echo "                ";
                echo twig_call_macro($macros["UI"], "macro_clientButton", [["aCss" => "no-hash cancel-button column-form-button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.form.action.cancel")]], 204, $context, $this->getSourceContext());
                // line 207
                echo "
                ";
                // line 208
                echo twig_call_macro($macros["UI"], "macro_clientButton", [["visible" => false, "aCss" => "no-hash btn-success save-button column-form-button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.form.action.save")]], 208, $context, $this->getSourceContext());
                // line 212
                echo "
                ";
                // line 213
                echo twig_call_macro($macros["UI"], "macro_clientButton", [["visible" => false, "aCss" => "no-hash btn-primary add-button column-form-button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.form.action.add")]], 213, $context, $this->getSourceContext());
                // line 217
                echo "
                ";
                $___internal_parse_70_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 203
                echo twig_spaceless($___internal_parse_70_);
                // line 219
                echo "            </div>
            ";
            }
            // line 221
            echo "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 225
    public function macro_query_designer_grouping_form($__form__ = null, $__attr__ = null, $__params__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "attr" => $__attr__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_grouping_form"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_grouping_form"));

            // line 226
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroQueryDesigner/macros.html.twig", 226)->unwrap();
            // line 227
            echo "    ";
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 227, $this->source); })()), [])) : ([])), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 227)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 227), "")) : ("")) . " query-designer-grouping-form query-designer-form"))]);
            // line 228
            echo "    <div";
            echo twig_call_macro($macros["UI"], "macro_attributes", [(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 228, $this->source); })())], 228, $context, $this->getSourceContext());
            echo ">
        <div class=\"query-designer-row\">
            ";
            // line 231
            echo "            ";
            // line 232
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "columnNames", [], "any", false, false, false, 232), 'row', ["label" => "oro.query_designer.form.grouping_columns", "attr" => ["data-purpose" => "column-selector", "data-validation" => json_encode(["NotBlank" => null])]]);
            // line 238
            echo "
            <div class=\"submit-cancel-buttons\">
                ";
            // line 240
            ob_start();
            // line 241
            echo "                ";
            echo twig_call_macro($macros["UI"], "macro_clientButton", [["aCss" => "no-hash cancel-button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.form.action.cancel")]], 241, $context, $this->getSourceContext());
            // line 244
            echo "
                ";
            // line 245
            echo twig_call_macro($macros["UI"], "macro_clientButton", [["visible" => false, "aCss" => "no-hash btn-success save-button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.form.action.save")]], 245, $context, $this->getSourceContext());
            // line 249
            echo "
                ";
            // line 250
            echo twig_call_macro($macros["UI"], "macro_clientButton", [["visible" => false, "aCss" => "no-hash btn-primary add-button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.form.action.add")]], 250, $context, $this->getSourceContext());
            // line 254
            echo "
                ";
            $___internal_parse_71_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 240
            echo twig_spaceless($___internal_parse_71_);
            // line 256
            echo "            </div>
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

    // line 261
    public function macro_query_designer_date_grouping_form($__form__ = null, $__params__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_date_grouping_form"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_date_grouping_form"));

            // line 262
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroQueryDesigner/macros.html.twig", 262)->unwrap();
            // line 263
            echo "    ";
            $context["attr"] = twig_array_merge(((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 263, $this->source); })()), [])) : ([])), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 263)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 263), "")) : ("")) . " query-designer-grouping-form clearfix"))]);
            // line 264
            echo "    <div";
            echo twig_call_macro($macros["UI"], "macro_attributes", [(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 264, $this->source); })())], 264, $context, $this->getSourceContext());
            echo " ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/view-component", "options" => ["view" => "oroquerydesigner/js/app/views/date-grouping-view"]]], 264, $context, $this->getSourceContext());
            // line 269
            echo ">
        ";
            // line 270
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "useDateGroupFilter", [], "any", false, false, false, 270), 'row');
            echo "
        ";
            // line 271
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "fieldName", [], "any", false, false, false, 271), 'row', ["attr" => ["data-purpose" => "date-grouping-selector"]]);
            // line 275
            echo "
        ";
            // line 276
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "useSkipEmptyPeriodsFilter", [], "any", false, false, false, 276), 'row');
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

    // line 280
    public function macro_query_designer_column_chain_template($__id__ = null, ...$__varargs__)
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
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_column_chain_template"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "query_designer_column_chain_template"));

            // line 281
            echo "    ";
            ob_start();
            // line 282
            echo "    <script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 282, $this->source); })()), "html", null, true);
            echo "\">
        <span class=\"entity-field-path\">
        <% _.each(obj, function (item, index, list) { %>
            <% if (index === 0) { %>
                <span><%- item.entity.label %></span>
            <% }  else { %>
                <% if (index !== list.length - 1) { %>
                    <span><%- item.field.label %></span>
                <% } else { %>
                    <b><%- item.field.label %></b>
                <% } %>
            <% } %>
        <% }) %>
        </span>
    </script>
    ";
            $___internal_parse_72_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 281
            echo twig_spaceless($___internal_parse_72_);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroQueryDesigner/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  839 => 281,  819 => 282,  816 => 281,  797 => 280,  779 => 276,  776 => 275,  774 => 271,  770 => 270,  767 => 269,  762 => 264,  759 => 263,  756 => 262,  736 => 261,  718 => 256,  716 => 240,  712 => 254,  710 => 250,  707 => 249,  705 => 245,  702 => 244,  699 => 241,  697 => 240,  693 => 238,  690 => 232,  688 => 231,  682 => 228,  679 => 227,  676 => 226,  655 => 225,  638 => 221,  634 => 219,  632 => 203,  628 => 217,  626 => 213,  623 => 212,  621 => 208,  618 => 207,  615 => 204,  613 => 203,  610 => 202,  607 => 201,  603 => 199,  600 => 193,  597 => 192,  593 => 190,  590 => 184,  587 => 183,  583 => 181,  580 => 174,  577 => 173,  575 => 172,  571 => 170,  568 => 164,  565 => 163,  559 => 160,  557 => 158,  555 => 157,  552 => 156,  530 => 155,  512 => 150,  510 => 137,  504 => 147,  499 => 145,  494 => 143,  487 => 139,  484 => 138,  482 => 137,  474 => 133,  455 => 132,  438 => 128,  434 => 126,  432 => 113,  426 => 123,  421 => 121,  416 => 119,  409 => 115,  406 => 114,  404 => 113,  401 => 112,  398 => 111,  394 => 109,  391 => 108,  387 => 106,  384 => 105,  380 => 103,  377 => 102,  373 => 100,  371 => 99,  365 => 97,  345 => 96,  321 => 86,  317 => 85,  308 => 80,  305 => 79,  302 => 78,  283 => 77,  266 => 74,  258 => 68,  252 => 66,  249 => 65,  243 => 63,  240 => 62,  234 => 60,  231 => 59,  225 => 57,  222 => 56,  216 => 54,  214 => 53,  206 => 49,  203 => 48,  200 => 47,  197 => 46,  177 => 45,  157 => 39,  149 => 34,  143 => 31,  139 => 30,  135 => 29,  127 => 24,  123 => 23,  119 => 21,  117 => 20,  115 => 18,  113 => 17,  112 => 14,  111 => 11,  110 => 9,  109 => 8,  107 => 7,  104 => 6,  102 => 5,  100 => 2,  81 => 1,  67 => 279,  64 => 260,  61 => 224,  58 => 154,  55 => 131,  52 => 95,  49 => 76,  46 => 44,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro query_designer_condition_builder(params) %}
    {% set params = {
        column_chain_template_selector: '#column-chain-template',
        field_choice_filter_preset: 'querydesigner',
    }|merge(params) %}
    {% set fieldConditionModule = params.fieldConditionModule|default('oroquerydesigner/js/app/views/field-condition-view') %}
    {% set fieldConditionOptions = {
        filters: params.metadata.filters|default([]),
        hierarchy: params.metadata.hierarchy|default({}),
        fieldChoice: {
            filterPreset: params.field_choice_filter_preset,
            select2: {
                placeholder: 'oro.query_designer.condition_builder.choose_entity_field'|trans,
                formatSelectionTemplateSelector: params.column_chain_template_selector|default(null),
            },
        },
    }|merge_recursive(params.fieldConditionOptions|default({})) %}
    {% set conditionBuilderOptions = {
        fieldsRelatedCriteria: ['condition-item']
    }|merge_recursive(params.conditionBuilderOptions|default({})) %}
    <div class=\"condition-builder\"
         data-page-component-module=\"oroquerydesigner/js/app/components/condition-builder-component\"
         data-page-component-options=\"{{ conditionBuilderOptions|json_encode }}\"
         data-page-component-name=\"{{ params.componentName|default('condition-builder') }}\">
        <div class=\"row-fluid\">
            <div class=\"criteria-list-container filter-criteria\">
                <ul class=\"criteria-list\">
                    <li class=\"option\" data-criteria=\"condition-item\"
                        data-module=\"{{ fieldConditionModule }}\"
                        data-options=\"{{ fieldConditionOptions|json_encode }}\">
                        {{ 'oro.query_designer.condition_builder.criteria.field_condition'|trans }}
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

{% macro query_designer_column_list(attr, showItems = ['column', 'label', 'function', 'sorting', 'action']) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% import _self as queryDesignerMacros %}
    {% set attr = attr|default({})|merge({'class': (attr.class|default('') ~ ' grid-container query-designer-grid-container query-designer-columns-grid-container')|trim}) %}
    <div{{ UI.attributes(attr) }}>
        <table class=\"grid table-hover table table-bordered table-condensed\" style=\"display: table;\">
            <thead>
            <tr>
                {% if ('column' in showItems) %}
                <th class=\"name-column\"><span>{{ 'oro.query_designer.datagrid.column.column'|trans }}</span></th>
                {% endif %}
                {% if ('label' in showItems) %}
                <th class=\"label-column\"><span>{{ 'oro.query_designer.datagrid.column.label'|trans }}</span></th>
                {% endif %}
                {% if ('function' in showItems) %}
                <th class=\"function-column\"><span>{{ 'oro.query_designer.datagrid.column.function'|trans }}</span></th>
                {% endif %}
                {% if ('sorting' in showItems) %}
                <th class=\"sorting-column\"><span>{{ 'oro.query_designer.datagrid.column.sorting'|trans }}</span></th>
                {% endif %}
                {% if ('action' in showItems) %}
                <th class=\"action-column\"><span>{{ 'oro.query_designer.datagrid.column.actions'|trans }}</span></th>
                {% endif %}
            </tr>
            </thead>
            <tbody class=\"item-container\">
            </tbody>
        </table>
    </div>
    {{ queryDesignerMacros.query_designer_column_template(attr.rowId, showItems) }}
{% endmacro %}

{% macro query_designer_grouping_list(attr) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% set attr = attr|default({})|merge({'class': (attr.class|default('') ~ ' grid-container query-designer-grid-container query-designer-columns-grid-container')|trim}) %}
    <div{{ UI.attributes(attr) }}>
        <div class=\"grid-container query-designer-grid-container query-designer-columns-grid-container\">
            <table class=\"grid table-hover table table-bordered table-condensed\" style=\"display: table;\">
                <thead>
                <tr>
                    <th class=\"name-column\"><span>{{ 'oro.query_designer.datagrid.column.column'|trans }}</span></th>
                    <th class=\"action-column\"><span>{{ 'oro.query_designer.datagrid.column.actions'|trans }}</span></th>
                </tr>
                </thead>
                <tbody class=\"grouping-item-container\">
                </tbody>
            </table>
        </div>
    </div>
{% endmacro %}

{% macro query_designer_column_template(id, showItems = ['column', 'label', 'function', 'sorting', 'action']) %}
    <script type=\"text/html\" id=\"{{ id }}\">
        <tr data-cid=\"<%- cid %>\">
            {% if ('column' in showItems) %}
            <td class=\"name-cell<% if (obj.deleted) { %> deleted-field<% } %>\"><%= name %></td>
            {% endif %}
            {% if ('label' in showItems) %}
            <td class=\"label-cell\"><%- label %></td>
            {% endif %}
            {% if ('function' in showItems) %}
            <td class=\"function-cell\"><%= func %></td>
            {% endif %}
            {% if ('sorting' in showItems) %}
            <td class=\"sorting-cell\"><%= sorting %></td>
            {% endif %}
            {% if ('action' in showItems) %}
            <td class=\"action-cell\">
                {% apply spaceless %}
                <a href=\"#\" class=\"btn btn-icon btn-lighter action no-hash edit-button\"
                        title=\"{{ 'oro.query_designer.datagrid.action.update_column'|trans }}\"
                        data-collection-action=\"edit\">
                    <span class=\"fa-pencil-square-o\" aria-hidden=\"true\"></span></a>
                <a href=\"#\" class=\"btn btn-icon btn-lighter action no-hash delete-button\"
                        title=\"{{ 'oro.query_designer.datagrid.action.delete_column'|trans }}\"
                        data-collection-action=\"delete\"
                        data-message=\"{{ 'oro.query_designer.datagrid.action.delete_column_confirmation'|trans }}\">
                    <span class=\"fa-trash-o\" aria-hidden=\"true\"></span></a>
                <span class=\"btn btn-icon btn-lighter\" title=\"{{ 'oro.query_designer.datagrid.action.move_column'|trans }}\">
                    <span class=\"fa-arrows-v handle\" aria-hidden=\"true\"></span></span>
                {% endapply %}
            </td>
            {% endif %}
        </tr>
    </script>
{% endmacro %}

{% macro query_designer_grouping_item_template(id) %}
    <script type=\"text/html\" id=\"{{ id }}\">
        <tr data-cid=\"<%- cid %>\">
            <td class=\"name-cell<% if (obj.deleted) { %> deleted-field<% } %>\"><%- name %></td>
            <td class=\"action-cell\">
                {% apply spaceless %}
                <a href=\"#\" class=\"btn btn-icon btn-lighter action no-hash edit-button\"
                        title=\"{{ 'oro.query_designer.datagrid.action.update_column'|trans }}\"
                        data-collection-action=\"edit\">
                    <span class=\"fa-pencil-square-o\" aria-hidden=\"true\"></span></a>
                <a href=\"#\" class=\"btn btn-icon btn-lighter action no-hash delete-button\"
                        title=\"{{ 'oro.query_designer.datagrid.action.delete_column'|trans }}\"
                        data-collection-action=\"delete\"
                        data-message=\"{{ 'oro.query_designer.datagrid.action.delete_column_confirmation'|trans }}\">
                    <span class=\"fa-trash-o\" aria-hidden=\"true\"></span></a>
                <span class=\"btn btn-icon btn-lighter\" title=\"{{ 'oro.query_designer.datagrid.action.move_column'|trans }}\">
                    <span class=\"fa-arrows-v handle\" aria-hidden=\"true\"></span></span>
                {% endapply %}
            </td>
        </tr>
    </script>
{% endmacro %}

{% macro query_designer_column_form(form, attr, params, showItems = ['column', 'label', 'function', 'sorting', 'action']) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% set attr = attr|default({})|merge({
        'class': (attr.class|default('') ~ ' query-designer-form')|trim
    }) %}
    <div {{ UI.attributes(attr) }}>
        <div class=\"query-designer-row\">
            {# @todo we have to directly set 'data-validation' because JsValidationExtension does not support validation groups #}
            {% if ('column' in showItems) %}
            {{ form_row(form.name, {
                'label': 'oro.query_designer.form.column',
                'attr': {
                    'data-purpose': 'column-selector',
                    'data-validation': { NotBlank: null }|json_encode
                }
            }) }}
            {% endif %}
            {# @todo we have to directly set 'data-validation' because JsValidationExtension does not support validation groups #}
            {% if ('label' in showItems) %}
            {{ form_row(form.label, {
                'label': 'oro.query_designer.form.label',
                'attr': {
                    'class': 'label-text',
                    'data-purpose': 'label',
                    'data-validation': { NotBlank: null }|json_encode
                }
            }) }}
            {% endif %}
            {% if ('function' in showItems) %}
            {{ form_row(form.func, {
                'label': 'oro.query_designer.form.function',
                'attr': {
                    'class': 'function-selector',
                    'data-purpose': 'function-selector'
                }
            }) }}
            {% endif %}
            {% if ('sorting' in showItems) %}
            {{ form_row(form.sorting, {
                'label': 'oro.query_designer.form.sorting',
                'attr': {
                    'class': 'sorting-selector',
                    'data-purpose': 'sorting-selector'
                }
            }) }}
            {% endif %}
            {% if ('action' in showItems) %}
            <div class=\"submit-cancel-buttons\">
                {% apply spaceless %}
                {{ UI.clientButton({
                    'aCss': 'no-hash cancel-button column-form-button',
                    'label' : 'oro.query_designer.form.action.cancel'|trans
                }) }}
                {{ UI.clientButton({
                    'visible': false,
                    'aCss': 'no-hash btn-success save-button column-form-button',
                    'label' : 'oro.query_designer.form.action.save'|trans
                }) }}
                {{ UI.clientButton({
                    'visible': false,
                    'aCss': 'no-hash btn-primary add-button column-form-button',
                    'label' : 'oro.query_designer.form.action.add'|trans
                }) }}
                {% endapply %}
            </div>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro query_designer_grouping_form(form, attr, params) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% set attr = attr|default({})|merge({'class': (attr.class|default('') ~ ' query-designer-grouping-form query-designer-form')|trim}) %}
    <div{{ UI.attributes(attr) }}>
        <div class=\"query-designer-row\">
            {# @todo own formtype for this kind field based on hidden input #}
            {# @todo we have to directly set 'data-validation' because JsValidationExtension does not support validation groups #}
            {{ form_row(form.columnNames, {
                'label': 'oro.query_designer.form.grouping_columns',
                'attr': {
                    'data-purpose': 'column-selector',
                    'data-validation': { NotBlank: null }|json_encode
                }
            }) }}
            <div class=\"submit-cancel-buttons\">
                {% apply spaceless %}
                {{ UI.clientButton({
                    'aCss': 'no-hash cancel-button',
                    'label' : 'oro.query_designer.form.action.cancel'|trans
                }) }}
                {{ UI.clientButton({
                    'visible': false,
                    'aCss': 'no-hash btn-success save-button',
                    'label' : 'oro.query_designer.form.action.save'|trans
                }) }}
                {{ UI.clientButton({
                    'visible': false,
                    'aCss': 'no-hash btn-primary add-button',
                    'label' : 'oro.query_designer.form.action.add'|trans
                }) }}
                {% endapply %}
            </div>
        </div>
    </div>
{% endmacro %}

{% macro query_designer_date_grouping_form(form, params) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% set attr = attr|default({})|merge({'class': (attr.class|default('') ~ ' query-designer-grouping-form clearfix')|trim}) %}
    <div{{ UI.attributes(attr) }} {{ UI.renderPageComponentAttributes({
        module: 'oroui/js/app/components/view-component',
        options: {
            view: 'oroquerydesigner/js/app/views/date-grouping-view'
        }
    }) }}>
        {{ form_row(form.useDateGroupFilter) }}
        {{ form_row(form.fieldName, {
            'attr': {
                'data-purpose': 'date-grouping-selector'
            }
        }) }}
        {{form_row(form.useSkipEmptyPeriodsFilter)}}
    </div>
{% endmacro %}

{% macro query_designer_column_chain_template(id) %}
    {% apply spaceless %}
    <script type=\"text/html\" id=\"{{ id }}\">
        <span class=\"entity-field-path\">
        <% _.each(obj, function (item, index, list) { %>
            <% if (index === 0) { %>
                <span><%- item.entity.label %></span>
            <% }  else { %>
                <% if (index !== list.length - 1) { %>
                    <span><%- item.field.label %></span>
                <% } else { %>
                    <b><%- item.field.label %></b>
                <% } %>
            <% } %>
        <% }) %>
        </span>
    </script>
    {% endapply %}
{% endmacro %}
", "@OroQueryDesigner/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/QueryDesignerBundle/Resources/views/macros.html.twig");
    }
}
