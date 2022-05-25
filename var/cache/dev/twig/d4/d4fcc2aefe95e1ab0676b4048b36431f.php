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

/* @OroSegment/Form/fields.html.twig */
class __TwigTemplate_111e51d89cabce9aae76865782e12f54 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_segment_filter_builder_row' => [$this, 'block_oro_segment_filter_builder_row'],
            'oro_segment_filter_builder_widget' => [$this, 'block_oro_segment_filter_builder_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSegment/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSegment/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSegment/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_segment_filter_builder_row', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('oro_segment_filter_builder_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_segment_filter_builder_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_segment_filter_builder_row", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_segment_filter_builder_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_segment_filter_builder_row"));

        // line 2
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", true, true, false, 2) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "rendered", [], "any", false, false, false, 2))) {
            // line 3
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), 'row', ["attr" => ["class" => "control-group-oro_segment_filter_builder_segment_name"]]);
            // line 5
            echo "
    ";
        }
        // line 7
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'row');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 12
    public function block_oro_segment_filter_builder_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_segment_filter_builder_widget", $this->getTemplateName(), 12));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_segment_filter_builder_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_segment_filter_builder_widget"));

        // line 13
        echo "    ";
        $macros["segmentQD"] = $this->loadTemplate("@OroSegment/macros.html.twig", "@OroSegment/Form/fields.html.twig", 13)->unwrap();
        // line 14
        echo "    ";
        $macros["QD"] = $this->loadTemplate("@OroQueryDesigner/macros.html.twig", "@OroSegment/Form/fields.html.twig", 14)->unwrap();
        // line 15
        echo "
    ";
        // line 16
        $context["segment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16);
        // line 17
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17);
        // line 18
        echo "    ";
        $context["coditionBuilderId"] = ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 18, $this->source); })()) . "-condition-builder");
        // line 19
        echo "    ";
        $context["entityChoiceId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "entity", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "attr", [], "any", false, false, false, 19), "data-ftid", [], "array", false, false, false, 19);
        // line 20
        echo "    ";
        $context["definitionId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "definition", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "attr", [], "any", false, false, false, 20), "data-ftid", [], "array", false, false, false, 20);
        // line 21
        echo "    ";
        $context["metadata"] = $this->extensions['Oro\Bundle\DashboardBundle\Twig\DashboardExtension']->getQueryFilterMetadata();
        // line 22
        echo "    ";
        $context["column_chain_template_id"] = ("column-chain-template-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 22, $this->source); })()));
        // line 23
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "entity", [], "any", false, false, false, 24), 'widget');
        echo "
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "definition", [], "any", false, false, false, 25), 'widget');
        echo "
    ";
        // line 26
        echo twig_call_macro($macros["QD"], "macro_query_designer_column_chain_template", [(isset($context["column_chain_template_id"]) || array_key_exists("column_chain_template_id", $context) ? $context["column_chain_template_id"] : (function () { throw new RuntimeError('Variable "column_chain_template_id" does not exist.', 26, $this->source); })())], 26, $context, $this->getSourceContext());
        echo "
    ";
        // line 27
        if ( !$this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
            // line 28
            echo "    ";
            echo twig_call_macro($macros["segmentQD"], "macro_query_designer_condition_builder", [["id" =>             // line 29
(isset($context["coditionBuilderId"]) || array_key_exists("coditionBuilderId", $context) ? $context["coditionBuilderId"] : (function () { throw new RuntimeError('Variable "coditionBuilderId" does not exist.', 29, $this->source); })()), "currentSegmentId" => ((twig_get_attribute($this->env, $this->source,             // line 30
($context["segment"] ?? null), "id", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["segment"] ?? null), "id", [], "any", false, false, false, 30), null)) : (null)), "page_limit" => twig_constant("\\Oro\\Bundle\\SegmentBundle\\Entity\\Manager\\SegmentManager::PER_PAGE"), "conditionBuilderOptions" =>             // line 32
(isset($context["condition_builder_options"]) || array_key_exists("condition_builder_options", $context) ? $context["condition_builder_options"] : (function () { throw new RuntimeError('Variable "condition_builder_options" does not exist.', 32, $this->source); })()), "metadata" =>             // line 33
(isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 33, $this->source); })()), "column_chain_template_selector" => ("#" .             // line 34
(isset($context["column_chain_template_id"]) || array_key_exists("column_chain_template_id", $context) ? $context["column_chain_template_id"] : (function () { throw new RuntimeError('Variable "column_chain_template_id" does not exist.', 34, $this->source); })())), "fieldConditionOptions" => ((            // line 35
array_key_exists("field_condition_options", $context)) ? (_twig_default_filter((isset($context["field_condition_options"]) || array_key_exists("field_condition_options", $context) ? $context["field_condition_options"] : (function () { throw new RuntimeError('Variable "field_condition_options" does not exist.', 35, $this->source); })()), [])) : ([]))]], 28, $context, $this->getSourceContext());
            // line 36
            echo "
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        $context["widgetOptions"] = ["valueSource" => (("[data-ftid=" .         // line 40
(isset($context["definitionId"]) || array_key_exists("definitionId", $context) ? $context["definitionId"] : (function () { throw new RuntimeError('Variable "definitionId" does not exist.', 40, $this->source); })())) . "]"), "entityChoice" => (("[data-ftid=" .         // line 41
(isset($context["entityChoiceId"]) || array_key_exists("entityChoiceId", $context) ? $context["entityChoiceId"] : (function () { throw new RuntimeError('Variable "entityChoiceId" does not exist.', 41, $this->source); })())) . "]"), "entityChangeConfirmMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.condition_builder.confirm_message"), "metadata" =>         // line 43
(isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 43, $this->source); })()), "initEntityChangeEvents" => false, "select2FieldChoiceTemplate" => ("#" .         // line 45
(isset($context["column_chain_template_id"]) || array_key_exists("column_chain_template_id", $context) ? $context["column_chain_template_id"] : (function () { throw new RuntimeError('Variable "column_chain_template_id" does not exist.', 45, $this->source); })()))];
        // line 47
        echo "
    ";
        // line 48
        $context["widgetOptions"] = $this->extensions['Oro\Bundle\SegmentBundle\Twig\SegmentExtension']->updateSegmentWidgetOptions((isset($context["widgetOptions"]) || array_key_exists("widgetOptions", $context) ? $context["widgetOptions"] : (function () { throw new RuntimeError('Variable "widgetOptions" does not exist.', 48, $this->source); })()), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 48, $this->source); })()));
        // line 49
        echo "    <div data-page-component-module=\"orosegment/js/app/components/segment-component\"
         data-page-component-options=\"";
        // line 50
        echo twig_escape_filter($this->env, json_encode((isset($context["widgetOptions"]) || array_key_exists("widgetOptions", $context) ? $context["widgetOptions"] : (function () { throw new RuntimeError('Variable "widgetOptions" does not exist.', 50, $this->source); })())), "html", null, true);
        echo "\">
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroSegment/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 50,  196 => 49,  194 => 48,  191 => 47,  189 => 45,  188 => 43,  187 => 41,  186 => 40,  185 => 39,  182 => 38,  178 => 36,  176 => 35,  175 => 34,  174 => 33,  173 => 32,  172 => 30,  171 => 29,  169 => 28,  167 => 27,  163 => 26,  159 => 25,  155 => 24,  152 => 23,  149 => 22,  146 => 21,  143 => 20,  140 => 19,  137 => 18,  134 => 17,  132 => 16,  129 => 15,  126 => 14,  123 => 13,  110 => 12,  94 => 8,  89 => 7,  85 => 5,  82 => 3,  79 => 2,  66 => 1,  53 => 12,  50 => 11,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_segment_filter_builder_row %}
    {% if form.name is defined and not form.name.rendered %}
        {{ form_row(form.name, {
            'attr': {'class': 'control-group-oro_segment_filter_builder_segment_name'}
        }) }}
    {% endif %}
    <div {{ block('widget_container_attributes') }}>
        {{ form_row(form) }}
    </div>
{% endblock %}

{% block oro_segment_filter_builder_widget %}
    {% import '@OroSegment/macros.html.twig' as segmentQD %}
    {% import '@OroQueryDesigner/macros.html.twig' as QD %}

    {% set segment = form.vars.value %}
    {% set id = form.vars.id %}
    {% set coditionBuilderId = id ~ '-condition-builder' %}
    {% set entityChoiceId = form.entity.vars.attr['data-ftid'] %}
    {% set definitionId = form.definition.vars.attr['data-ftid'] %}
    {% set metadata = oro_query_filter_metadata() %}
    {% set column_chain_template_id = 'column-chain-template-' ~ id %}

    {{ form_widget(form.entity) }}
    {{ form_widget(form.definition) }}
    {{ QD.query_designer_column_chain_template(column_chain_template_id) }}
    {% if not isMobileVersion() %}
    {{ segmentQD.query_designer_condition_builder({
        'id': coditionBuilderId,
        'currentSegmentId': segment.id|default(null),
        'page_limit': constant('\\\\Oro\\\\Bundle\\\\SegmentBundle\\\\Entity\\\\Manager\\\\SegmentManager::PER_PAGE'),
        'conditionBuilderOptions': condition_builder_options,
        'metadata': metadata,
        'column_chain_template_selector': '#' ~ column_chain_template_id,
        'fieldConditionOptions': field_condition_options|default([]),
    }) }}
    {% endif %}

    {% set widgetOptions = {
        valueSource:                '[data-ftid=' ~ definitionId ~ ']',
        entityChoice:               '[data-ftid=' ~ entityChoiceId ~ ']',
        entityChangeConfirmMessage: 'oro.segment.condition_builder.confirm_message'|trans,
        metadata:                   metadata,
        initEntityChangeEvents:     false,
        select2FieldChoiceTemplate: '#' ~ column_chain_template_id,
    } %}

    {% set widgetOptions = update_segment_widget_options(widgetOptions, id) %}
    <div data-page-component-module=\"orosegment/js/app/components/segment-component\"
         data-page-component-options=\"{{ widgetOptions|json_encode }}\">
    </div>
{% endblock %}
", "@OroSegment/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/SegmentBundle/Resources/views/Form/fields.html.twig");
    }
}
