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

/* @OroSegment/Segment/field_condition.html.twig */
class __TwigTemplate_aa16653731a970371d7b469356c9e318 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSegment/Segment/field_condition.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSegment/Segment/field_condition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSegment/Segment/field_condition.html.twig"));

        // line 1
        $context["fieldConditionOptions"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(["filters" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2
($context["params"] ?? null), "metadata", [], "any", false, true, false, 2), "filters", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "metadata", [], "any", false, true, false, 2), "filters", [], "any", false, false, false, 2), [])) : ([])), "hierarchy" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
($context["params"] ?? null), "metadata", [], "any", false, true, false, 3), "hierarchy", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "metadata", [], "any", false, true, false, 3), "hierarchy", [], "any", false, false, false, 3), [])) : ([])), "fieldChoice" => ["filterPreset" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 5, $this->source); })()), "field_choice_filter_preset", [], "any", false, false, false, 5), "select2" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.condition_builder.choose_entity_field"), "formatSelectionTemplateSelector" => ((twig_get_attribute($this->env, $this->source,         // line 8
($context["params"] ?? null), "column_chain_template_selector", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "column_chain_template_selector", [], "any", false, false, false, 8), null)) : (null))]]], ((twig_get_attribute($this->env, $this->source,         // line 11
($context["params"] ?? null), "fieldConditionOptions", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "fieldConditionOptions", [], "any", false, false, false, 11), [])) : ([])));
        // line 12
        echo "
<li class=\"option\" data-criteria=\"condition-item\"
    data-module=\"oroquerydesigner/js/app/views/field-condition-view\"
    data-options=\"";
        // line 15
        echo twig_escape_filter($this->env, json_encode((isset($context["fieldConditionOptions"]) || array_key_exists("fieldConditionOptions", $context) ? $context["fieldConditionOptions"] : (function () { throw new RuntimeError('Variable "fieldConditionOptions" does not exist.', 15, $this->source); })())), "html", null, true);
        echo "\">
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.condition_builder.criteria.field_condition"), "html", null, true);
        echo "
</li>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroSegment/Segment/field_condition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  58 => 15,  53 => 12,  51 => 11,  50 => 8,  49 => 5,  48 => 3,  47 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set fieldConditionOptions = {
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

<li class=\"option\" data-criteria=\"condition-item\"
    data-module=\"oroquerydesigner/js/app/views/field-condition-view\"
    data-options=\"{{ fieldConditionOptions|json_encode }}\">
    {{ 'oro.query_designer.condition_builder.criteria.field_condition'|trans }}
</li>
", "@OroSegment/Segment/field_condition.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/SegmentBundle/Resources/views/Segment/field_condition.html.twig");
    }
}
