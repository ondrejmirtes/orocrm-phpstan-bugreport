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

/* @OroDashboard/Form/fields.html.twig */
class __TwigTemplate_b5c66103abcc21991c7bd3ace067922a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_type_widget_datetime_range_widget' => [$this, 'block_oro_type_widget_datetime_range_widget'],
            'oro_type_widget_date_range_widget' => [$this, 'block_oro_type_widget_date_range_widget'],
            'oro_type_widget_title_widget' => [$this, 'block_oro_type_widget_title_widget'],
            'oro_type_widget_items_row' => [$this, 'block_oro_type_widget_items_row'],
            'oro_type_widget_items_javascript' => [$this, 'block_oro_type_widget_items_javascript'],
            'oro_type_widget_date_widget' => [$this, 'block_oro_type_widget_date_widget'],
            'oro_dashboard_query_filter_row' => [$this, 'block_oro_dashboard_query_filter_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDashboard/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_type_widget_datetime_range_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('oro_type_widget_date_range_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('oro_type_widget_title_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('oro_type_widget_items_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('oro_type_widget_items_javascript', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('oro_type_widget_date_widget', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('oro_dashboard_query_filter_row', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_type_widget_datetime_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_type_widget_datetime_range_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_widget_datetime_range_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_widget_datetime_range_widget"));

        // line 2
        echo "    ";
        $context["valueType"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2), "type", [], "any", false, false, false, 2) != "")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2), "type", [], "any", false, false, false, 2)) : (1));
        // line 3
        echo "
    ";
        // line 4
        $macros["UI"] = $this->loadTemplate("@OroDashboard/macros.html.twig", "@OroDashboard/Form/fields.html.twig", 4)->unwrap();
        // line 5
        echo "
    ";
        // line 6
        echo twig_call_macro($macros["UI"], "macro_renderDateWidgeView", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), (isset($context["valueType"]) || array_key_exists("valueType", $context) ? $context["valueType"] : (function () { throw new RuntimeError('Variable "valueType" does not exist.', 6, $this->source); })()), "datetime", "orodashboard/js/app/views/widget-datetime-range-view"], 6, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 9
    public function block_oro_type_widget_date_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_type_widget_date_range_widget", $this->getTemplateName(), 9));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_widget_date_range_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_widget_date_range_widget"));

        // line 10
        echo "    ";
        $context["monthType"] = twig_constant("Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\AbstractDateFilterType::TYPE_THIS_MONTH");
        // line 11
        echo "    ";
        $context["valueType"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11), "type", [], "any", false, false, false, 11) != "")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11), "type", [], "any", false, false, false, 11)) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "datetime_range_metadata", [], "any", false, false, false, 11), "valueTypes", [], "any", false, false, false, 11)) ? ((isset($context["monthType"]) || array_key_exists("monthType", $context) ? $context["monthType"] : (function () { throw new RuntimeError('Variable "monthType" does not exist.', 11, $this->source); })())) : (1))));
        // line 12
        echo "
    ";
        // line 13
        $macros["UI"] = $this->loadTemplate("@OroDashboard/macros.html.twig", "@OroDashboard/Form/fields.html.twig", 13)->unwrap();
        // line 14
        echo "
    ";
        // line 15
        echo twig_call_macro($macros["UI"], "macro_renderDateWidgeView", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), (isset($context["valueType"]) || array_key_exists("valueType", $context) ? $context["valueType"] : (function () { throw new RuntimeError('Variable "valueType" does not exist.', 15, $this->source); })()), "date", "orodashboard/js/app/views/widget-date-range-view"], 15, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 18
    public function block_oro_type_widget_title_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_type_widget_title_widget", $this->getTemplateName(), 18));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_widget_title_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_widget_title_widget"));

        // line 19
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDashboard/Form/fields.html.twig", 19)->unwrap();
        // line 20
        echo "
    <div class=\"widget-title-container\" ";
        // line 21
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroform/js/app/views/default-field-value-view", "options" => ["fieldSelector" => ("input#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)), "prepareTinymce" => false]]], 21, $context, $this->getSourceContext());
        // line 27
        echo ">
        <div class=\"widget-title-widget\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "widget-title-input"]]);
        echo "
        </div>
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "useDefault", [], "any", false, false, false, 31), 'row', ["attr" => ["data-role" => "changeUseDefault"]]);
        echo "
    </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 37
    public function block_oro_type_widget_items_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_type_widget_items_row", $this->getTemplateName(), 37));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_widget_items_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_widget_items_row"));

        // line 38
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDashboard/Form/fields.html.twig", 38)->unwrap();
        // line 39
        echo "    ";
        $context["rowId"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39) . "Row");
        // line 40
        echo "
    <div id=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["rowId"]) || array_key_exists("rowId", $context) ? $context["rowId"] : (function () { throw new RuntimeError('Variable "rowId" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\" class=\"control-group dashboard-widget-items\">
        <label class=\"control-label\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 42, $this->source); })())), "html", null, true);
        echo "</label>
        <div class=\"controls items-table-container\">
            <div class=\"actions-wrap\">
                ";
        // line 45
        echo twig_call_macro($macros["UI"], "macro_clientButton", [["aCss" => "no-hash add-button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.datagrid.actions.add.label")]], 45, $context, $this->getSourceContext());
        // line 48
        echo "
                ";
        // line 49
        echo twig_call_macro($macros["UI"], "macro_clientButton", [["aCss" => "no-hash btn-primary add-all-button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.datagrid.actions.add_all.label")]], 49, $context, $this->getSourceContext());
        // line 52
        echo "
            </div>
            <table id=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
        echo "\" class=\"grid table table-bordered table-condensed\">
                <thead>
                <tr>
                    <th><span>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "vars", [], "any", false, false, false, 57), "item_label", [], "any", false, false, false, 57)), "html", null, true);
        echo "</span></th>
                    <th class=\"action-column\"><span>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.datagrid.columns.actions"), "html", null, true);
        echo "</span></th>
                </tr>
                </thead>
                <tbody class=\"item-container\"></tbody>
            </table>
        </div>
    </div>
    ";
        // line 65
        echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderJavascript((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 68
    public function block_oro_type_widget_items_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_type_widget_items_javascript", $this->getTemplateName(), 68));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_widget_items_javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_widget_items_javascript"));

        // line 69
        echo "    ";
        $context["options"] = ["_sourceElement" => (("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "vars", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70)) . "Row"), "itemsData" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "children", [], "any", false, false, false, 71), "items", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "value", [], "any", false, false, false, 71), "baseName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 72
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "children", [], "any", false, false, false, 72), "items", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "full_name", [], "any", false, false, false, 72)];
        // line 74
        echo "    ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "attr", [], "any", false, false, false, 74)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 74), "attr", [], "any", false, true, false, 74), "placeholder", [], "any", true, true, false, 74))) {
            // line 75
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 75, $this->source); })()), ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 76
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "vars", [], "any", false, false, false, 76), "attr", [], "any", false, false, false, 76), "placeholder", [], "any", false, false, false, 76))]);
            // line 78
            echo "    ";
        }
        // line 79
        echo "
    ";
        // line 80
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDashboard/Form/fields.html.twig", 80)->unwrap();
        // line 81
        echo "
    <div ";
        // line 82
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "orodashboard/js/items/view", "options" =>         // line 84
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 84, $this->source); })())]], 82, $context, $this->getSourceContext());
        // line 85
        echo "></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 88
    public function block_oro_type_widget_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_type_widget_date_widget", $this->getTemplateName(), 88));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_widget_date_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_type_widget_date_widget"));

        // line 89
        echo "    <div class=\"widget-date-compare\">
        <div class=\"widget-date-widget\">
            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "useDate", [], "any", false, false, false, 91), 'widget', ["attr" => ["data-role" => "updateDatapicker"]]);
        echo "
        </div>
        ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", true, true, false, 93)) {
            // line 94
            echo "            <div class=\"widget-date-input-widget\">
                ";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "date", [], "any", false, false, false, 95), 'widget');
            echo "
            </div>

            ";
            // line 98
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDashboard/Form/fields.html.twig", 98)->unwrap();
            // line 99
            echo "
            <div ";
            // line 100
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "orodashboard/js/app/views/widget-date-compare-view", "options" => ["_sourceElement" => ".widget-date-compare", "useDateSelector" => ("input#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 104
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "useDate", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104)), "dateSelector" => ("input#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 105
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "date", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105))]]], 100, $context, $this->getSourceContext());
            // line 107
            echo "></div>
        ";
        }
        // line 109
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 112
    public function block_oro_dashboard_query_filter_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_dashboard_query_filter_row", $this->getTemplateName(), 112));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_dashboard_query_filter_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_dashboard_query_filter_row"));

        // line 113
        echo "    ";
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
            // line 114
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "entity", [], "any", false, false, false, 114), 'row');
            echo "
        ";
            // line 115
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "definition", [], "any", false, false, false, 115), 'row');
            echo "
    ";
        } else {
            // line 117
            echo "        <div class=\"control-group\">
            <label class=\"control-label\">";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 118, $this->source); })())), "html", null, true);
            echo "</label>
            <div class=\"controls query-filter-row\">
            ";
            // line 120
            if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 120, $this->source); })())) {
                // line 121
                echo "                ";
                $context["togglerId"] = uniqid("toggler-");
                // line 122
                echo "                ";
                $context["collapseId"] = uniqid("collapse-");
                // line 123
                echo "                <a id=\"";
                echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 123, $this->source); })()), "html", null, true);
                echo "\" role=\"button\" class=\"collapse-toggler";
                if ((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 123, $this->source); })())) {
                    echo " collapsed";
                }
                echo "\"
                   data-toggle=\"collapse\" href=\"#";
                // line 124
                echo twig_escape_filter($this->env, (isset($context["collapseId"]) || array_key_exists("collapseId", $context) ? $context["collapseId"] : (function () { throw new RuntimeError('Variable "collapseId" does not exist.', 124, $this->source); })()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("oro.dashboard.query_filter." . (((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 124, $this->source); })())) ? ("expand") : ("collapse")))), "html", null, true);
                echo "\"
                   data-expanded-title=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.query_filter.collapse"), "html", null, true);
                echo "\" data-collapsed-title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.query_filter.expand"), "html", null, true);
                echo "\"
                   aria-expanded=\"";
                // line 126
                echo (((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 126, $this->source); })())) ? ("false") : ("true"));
                echo "\" aria-controls=\"";
                echo twig_escape_filter($this->env, (isset($context["collapseId"]) || array_key_exists("collapseId", $context) ? $context["collapseId"] : (function () { throw new RuntimeError('Variable "collapseId" does not exist.', 126, $this->source); })()), "html", null, true);
                echo "\">
                    <span class=\"expanded-text\">";
                // line 127
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.query_filter.collapse"), "html", null, true);
                echo "</span>
                    <span class=\"collapsed-text\">";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.query_filter.expand"), "html", null, true);
                echo "</span>
                </a>
            ";
            }
            // line 131
            echo "                <div";
            if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 131, $this->source); })())) {
                echo " id=\"";
                echo twig_escape_filter($this->env, (isset($context["collapseId"]) || array_key_exists("collapseId", $context) ? $context["collapseId"] : (function () { throw new RuntimeError('Variable "collapseId" does not exist.', 131, $this->source); })()), "html", null, true);
                echo "\" class=\"collapse";
                if ( !(isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 131, $this->source); })())) {
                    echo " show";
                }
                echo "\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 131, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">
                    ";
            // line 132
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "entity", [], "any", false, false, false, 132), 'row');
            echo "
                    ";
            // line 133
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "definition", [], "any", false, false, false, 133), 'row');
            echo "
                    ";
            // line 134
            $context["metadata"] = $this->extensions['Oro\Bundle\DashboardBundle\Twig\DashboardExtension']->getQueryFilterMetadata();
            // line 135
            echo "                    ";
            $context["column_chain_template_id"] = "column-chain-template";
            // line 136
            echo "                    ";
            $macros["QD"] = $this->loadTemplate("@OroQueryDesigner/macros.html.twig", "@OroDashboard/Form/fields.html.twig", 136)->unwrap();
            // line 137
            echo "                    ";
            echo twig_call_macro($macros["QD"], "macro_query_designer_column_chain_template", [(isset($context["column_chain_template_id"]) || array_key_exists("column_chain_template_id", $context) ? $context["column_chain_template_id"] : (function () { throw new RuntimeError('Variable "column_chain_template_id" does not exist.', 137, $this->source); })())], 137, $context, $this->getSourceContext());
            echo "
                    ";
            // line 138
            $macros["segmentQD"] = $this->loadTemplate("@OroSegment/macros.html.twig", "@OroDashboard/Form/fields.html.twig", 138)->unwrap();
            // line 139
            echo "                    ";
            echo twig_call_macro($macros["segmentQD"], "macro_query_designer_condition_builder", [["id" => (            // line 140
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 140, $this->source); })()) . "-condition-builder"), "disable_audit" => true, "metadata" =>             // line 142
(isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 142, $this->source); })()), "column_chain_template_selector" => ("#" .             // line 143
(isset($context["column_chain_template_id"]) || array_key_exists("column_chain_template_id", $context) ? $context["column_chain_template_id"] : (function () { throw new RuntimeError('Variable "column_chain_template_id" does not exist.', 143, $this->source); })()))]], 139, $context, $this->getSourceContext());
            // line 144
            echo "

                    ";
            // line 146
            $context["widgetOptions"] = ["valueSource" => (((("[data-ftid=" .             // line 147
(isset($context["widgetType"]) || array_key_exists("widgetType", $context) ? $context["widgetType"] : (function () { throw new RuntimeError('Variable "widgetType" does not exist.', 147, $this->source); })())) . "_") . (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 147, $this->source); })())) . "_definition]"), "entityChoice" => (((("[data-ftid=" .             // line 148
(isset($context["widgetType"]) || array_key_exists("widgetType", $context) ? $context["widgetType"] : (function () { throw new RuntimeError('Variable "widgetType" does not exist.', 148, $this->source); })())) . "_") . (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 148, $this->source); })())) . "_entity]"), "entityChangeConfirmMessage" => (twig_replace_filter(            // line 149
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 149, $this->source); })()), ["_" => "."]) . ".change_entity_confirmation"), "metadata" =>             // line 150
(isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 150, $this->source); })()), "disable_audit" => true, "initEntityChangeEvents" => false, "select2FieldChoiceTemplate" => ("#" .             // line 153
(isset($context["column_chain_template_id"]) || array_key_exists("column_chain_template_id", $context) ? $context["column_chain_template_id"] : (function () { throw new RuntimeError('Variable "column_chain_template_id" does not exist.', 153, $this->source); })()))];
            // line 155
            echo "                    ";
            $context["widgetOptions"] = $this->extensions['Oro\Bundle\SegmentBundle\Twig\SegmentExtension']->updateSegmentWidgetOptions((isset($context["widgetOptions"]) || array_key_exists("widgetOptions", $context) ? $context["widgetOptions"] : (function () { throw new RuntimeError('Variable "widgetOptions" does not exist.', 155, $this->source); })()), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 155, $this->source); })()));
            // line 156
            echo "                    <div
                        data-page-component-module=\"orosegment/js/app/components/segment-component\"
                        data-page-component-options=\"";
            // line 158
            echo twig_escape_filter($this->env, json_encode((isset($context["widgetOptions"]) || array_key_exists("widgetOptions", $context) ? $context["widgetOptions"] : (function () { throw new RuntimeError('Variable "widgetOptions" does not exist.', 158, $this->source); })())), "html", null, true);
            echo "\">
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroDashboard/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  559 => 158,  555 => 156,  552 => 155,  550 => 153,  549 => 150,  548 => 149,  547 => 148,  546 => 147,  545 => 146,  541 => 144,  539 => 143,  538 => 142,  537 => 140,  535 => 139,  533 => 138,  528 => 137,  525 => 136,  522 => 135,  520 => 134,  516 => 133,  512 => 132,  497 => 131,  491 => 128,  487 => 127,  481 => 126,  475 => 125,  469 => 124,  460 => 123,  457 => 122,  454 => 121,  452 => 120,  447 => 118,  444 => 117,  439 => 115,  434 => 114,  431 => 113,  418 => 112,  404 => 109,  400 => 107,  398 => 105,  397 => 104,  396 => 100,  393 => 99,  391 => 98,  385 => 95,  382 => 94,  380 => 93,  375 => 91,  371 => 89,  358 => 88,  344 => 85,  342 => 84,  341 => 82,  338 => 81,  336 => 80,  333 => 79,  330 => 78,  328 => 76,  326 => 75,  323 => 74,  321 => 72,  320 => 71,  319 => 70,  317 => 69,  304 => 68,  289 => 65,  279 => 58,  275 => 57,  269 => 54,  265 => 52,  263 => 49,  260 => 48,  258 => 45,  252 => 42,  248 => 41,  245 => 40,  242 => 39,  239 => 38,  226 => 37,  208 => 31,  203 => 29,  199 => 27,  197 => 24,  196 => 21,  193 => 20,  190 => 19,  177 => 18,  162 => 15,  159 => 14,  157 => 13,  154 => 12,  151 => 11,  148 => 10,  135 => 9,  120 => 6,  117 => 5,  115 => 4,  112 => 3,  109 => 2,  96 => 1,  83 => 112,  80 => 111,  78 => 88,  75 => 87,  73 => 68,  70 => 67,  68 => 37,  65 => 36,  63 => 18,  60 => 17,  58 => 9,  55 => 8,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_type_widget_datetime_range_widget %}
    {% set valueType = (form.vars.value.type != '') ? form.vars.value.type : 1 %}

    {% import '@OroDashboard/macros.html.twig' as UI %}

    {{ UI.renderDateWidgeView(form, valueType, 'datetime', 'orodashboard/js/app/views/widget-datetime-range-view') }}
{% endblock %}

{% block oro_type_widget_date_range_widget %}
    {% set monthType = constant('Oro\\\\Bundle\\\\FilterBundle\\\\Form\\\\Type\\\\Filter\\\\AbstractDateFilterType::TYPE_THIS_MONTH') %}
    {% set valueType = (form.vars.value.type != '') ? form.vars.value.type : (form.vars.datetime_range_metadata.valueTypes ? monthType : 1) %}

    {% import '@OroDashboard/macros.html.twig' as UI %}

    {{ UI.renderDateWidgeView(form, valueType, 'date', 'orodashboard/js/app/views/widget-date-range-view') }}
{% endblock oro_type_widget_date_range_widget %}

{% block oro_type_widget_title_widget %}
    {% import '@OroUI/macros.html.twig' as UI %}

    <div class=\"widget-title-container\" {{ UI.renderPageComponentAttributes({
        view: 'oroform/js/app/views/default-field-value-view',
        options: {
            fieldSelector: 'input#' ~ form.title.vars.id,
            prepareTinymce: false
        }
    }) }}>
        <div class=\"widget-title-widget\">
            {{ form_widget(form.title, {'attr': {'class': 'widget-title-input'}}) }}
        </div>
        {{ form_row(form.useDefault, { 'attr': {'data-role': 'changeUseDefault'} }) }}
    </div>


{% endblock oro_type_widget_title_widget %}

{% block oro_type_widget_items_row %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% set rowId = form.vars.id ~ 'Row' %}

    <div id=\"{{ rowId }}\" class=\"control-group dashboard-widget-items\">
        <label class=\"control-label\">{{ label|trans }}</label>
        <div class=\"controls items-table-container\">
            <div class=\"actions-wrap\">
                {{ UI.clientButton({
                    'aCss': 'no-hash add-button',
                    'label': 'oro.dashboard.datagrid.actions.add.label'|trans
                }) }}
                {{ UI.clientButton({
                    'aCss': 'no-hash btn-primary add-all-button',
                    'label': 'oro.dashboard.datagrid.actions.add_all.label'|trans
                }) }}
            </div>
            <table id=\"{{ form.vars.id }}\" class=\"grid table table-bordered table-condensed\">
                <thead>
                <tr>
                    <th><span>{{ form.vars.item_label|trans }}</span></th>
                    <th class=\"action-column\"><span>{{ 'oro.dashboard.datagrid.columns.actions'|trans }}</span></th>
                </tr>
                </thead>
                <tbody class=\"item-container\"></tbody>
            </table>
        </div>
    </div>
    {{ form_javascript(form) }}
{% endblock %}

{% block oro_type_widget_items_javascript %}
    {% set options = {
        _sourceElement: '#' ~ form.vars.id ~ 'Row',
        itemsData: form.children.items.vars.value,
        baseName: form.children.items.vars.full_name,
    } %}
    {% if form.vars.attr is not empty and form.vars.attr.placeholder is defined %}
        {% set options = options|merge({
            placeholder: form.vars.attr.placeholder|trans
        }) %}
    {% endif %}

    {% import '@OroUI/macros.html.twig' as UI %}

    <div {{ UI.renderPageComponentAttributes({
        view: 'orodashboard/js/items/view',
        options: options
    }) }}></div>
{% endblock %}

{% block oro_type_widget_date_widget %}
    <div class=\"widget-date-compare\">
        <div class=\"widget-date-widget\">
            {{ form_widget(form.useDate, { 'attr': {'data-role': 'updateDatapicker'} }) }}
        </div>
        {% if form.date is defined %}
            <div class=\"widget-date-input-widget\">
                {{ form_widget(form.date) }}
            </div>

            {% import '@OroUI/macros.html.twig' as UI %}

            <div {{ UI.renderPageComponentAttributes({
                view: 'orodashboard/js/app/views/widget-date-compare-view',
                options: {
                    _sourceElement: '.widget-date-compare',
                    useDateSelector: 'input#' ~ form.useDate.vars.id,
                    dateSelector: 'input#' ~ form.date.vars.id,
                }
            }) }}></div>
        {% endif %}
    </div>
{% endblock oro_type_widget_date_widget %}

{% block oro_dashboard_query_filter_row %}
    {% if isMobileVersion() %}
        {{ form_row(form.entity) }}
        {{ form_row(form.definition) }}
    {% else %}
        <div class=\"control-group\">
            <label class=\"control-label\">{{ label|trans }}</label>
            <div class=\"controls query-filter-row\">
            {% if collapsible %}
                {% set togglerId = 'toggler-'|uniqid %}
                {% set collapseId = 'collapse-'|uniqid %}
                <a id=\"{{ togglerId }}\" role=\"button\" class=\"collapse-toggler{% if collapsed %} collapsed{% endif %}\"
                   data-toggle=\"collapse\" href=\"#{{ collapseId }}\" title=\"{{ ('oro.dashboard.query_filter.'~(collapsed ? 'expand' : 'collapse'))|trans }}\"
                   data-expanded-title=\"{{ 'oro.dashboard.query_filter.collapse'|trans }}\" data-collapsed-title=\"{{ 'oro.dashboard.query_filter.expand'|trans }}\"
                   aria-expanded=\"{{ collapsed ? 'false' : 'true' }}\" aria-controls=\"{{ collapseId }}\">
                    <span class=\"expanded-text\">{{ 'oro.dashboard.query_filter.collapse'|trans }}</span>
                    <span class=\"collapsed-text\">{{ 'oro.dashboard.query_filter.expand'|trans }}</span>
                </a>
            {% endif %}
                <div{% if collapsible %} id=\"{{ collapseId }}\" class=\"collapse{% if not collapsed %} show{% endif %}\" aria-labelledby=\"{{ togglerId }}\"{% endif %}>
                    {{ form_row(form.entity) }}
                    {{ form_row(form.definition) }}
                    {% set metadata = oro_query_filter_metadata() %}
                    {% set column_chain_template_id = 'column-chain-template' %}
                    {% import '@OroQueryDesigner/macros.html.twig' as QD %}
                    {{ QD.query_designer_column_chain_template(column_chain_template_id) }}
                    {% import '@OroSegment/macros.html.twig' as segmentQD %}
                    {{ segmentQD.query_designer_condition_builder({
                        'id': name ~ '-condition-builder',
                        'disable_audit': true,
                        'metadata': metadata,
                        'column_chain_template_selector': '#' ~ column_chain_template_id,
                    }) }}

                    {% set widgetOptions = {
                        valueSource:                '[data-ftid=' ~ widgetType ~ '_' ~ name ~ '_definition]',
                        entityChoice:               '[data-ftid=' ~ widgetType ~ '_' ~ name ~ '_entity]',
                        entityChangeConfirmMessage: name|replace({'_':'.'}) ~ '.change_entity_confirmation',
                        metadata:                   metadata,
                        disable_audit:              true,
                        initEntityChangeEvents:     false,
                        select2FieldChoiceTemplate: '#' ~ column_chain_template_id,
                    } %}
                    {% set widgetOptions = update_segment_widget_options(widgetOptions, name) %}
                    <div
                        data-page-component-module=\"orosegment/js/app/components/segment-component\"
                        data-page-component-options=\"{{ widgetOptions|json_encode }}\">
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock oro_dashboard_query_filter_row %}
", "@OroDashboard/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Form/fields.html.twig");
    }
}
