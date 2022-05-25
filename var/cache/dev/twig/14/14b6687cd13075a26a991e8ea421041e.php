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

/* @OroDataAudit/Segment/data_audit_condition.html.twig */
class __TwigTemplate_8b941a707e856bfd9365b5870be2a7bb extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDataAudit/Segment/data_audit_condition.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataAudit/Segment/data_audit_condition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataAudit/Segment/data_audit_condition.html.twig"));

        // line 1
        $context["dataAuditConditionOptions"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(["filters" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2
($context["params"] ?? null), "metadata", [], "any", false, true, false, 2), "filters", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "metadata", [], "any", false, true, false, 2), "filters", [], "any", false, false, false, 2), [])) : ([])), "hierarchy" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
($context["params"] ?? null), "metadata", [], "any", false, true, false, 3), "hierarchy", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "metadata", [], "any", false, true, false, 3), "hierarchy", [], "any", false, false, false, 3), [])) : ([])), "fieldChoice" => ["filterPreset" => "dataaudit", "select2" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.query_designer.condition_builder.choose_entity_field"), "formatSelectionTemplateSelector" => ((twig_get_attribute($this->env, $this->source,         // line 8
($context["params"] ?? null), "column_chain_template_selector", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "column_chain_template_selector", [], "any", false, false, false, 8), null)) : (null))]]], ((twig_get_attribute($this->env, $this->source,         // line 11
($context["params"] ?? null), "dataAuditConditionOptions", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "dataAuditConditionOptions", [], "any", false, false, false, 11), [])) : ([]))), ((twig_get_attribute($this->env, $this->source,         // line 12
($context["params"] ?? null), "fieldConditionOptions", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "fieldConditionOptions", [], "any", false, false, false, 12), [])) : ([])));
        // line 13
        echo "
<li class=\"option condition-data-audit\" data-criteria=\"condition-data-audit\"
    data-module=\"orodataaudit/js/app/views/data-audit-condition-view\"
    data-options=\"";
        // line 16
        echo twig_escape_filter($this->env, json_encode((isset($context["dataAuditConditionOptions"]) || array_key_exists("dataAuditConditionOptions", $context) ? $context["dataAuditConditionOptions"] : (function () { throw new RuntimeError('Variable "dataAuditConditionOptions" does not exist.', 16, $this->source); })())), "html", null, true);
        echo "\">
    ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dataaudit.condition_builder.criteria.data_audit"), "html", null, true);
        echo "
</li>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroDataAudit/Segment/data_audit_condition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  58 => 16,  53 => 13,  51 => 12,  50 => 11,  49 => 8,  48 => 3,  47 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set dataAuditConditionOptions = {
    filters: params.metadata.filters|default([]),
    hierarchy: params.metadata.hierarchy|default({}),
    fieldChoice: {
        filterPreset: 'dataaudit',
        select2: {
            placeholder: 'oro.query_designer.condition_builder.choose_entity_field'|trans,
            formatSelectionTemplateSelector: params.column_chain_template_selector|default(null),
        },
    },
}|merge_recursive(params.dataAuditConditionOptions|default({}))
|merge_recursive(params.fieldConditionOptions|default({})) %}

<li class=\"option condition-data-audit\" data-criteria=\"condition-data-audit\"
    data-module=\"orodataaudit/js/app/views/data-audit-condition-view\"
    data-options=\"{{ dataAuditConditionOptions|json_encode }}\">
    {{ 'oro.dataaudit.condition_builder.criteria.data_audit'|trans }}
</li>
", "@OroDataAudit/Segment/data_audit_condition.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataAuditBundle/Resources/views/Segment/data_audit_condition.html.twig");
    }
}
