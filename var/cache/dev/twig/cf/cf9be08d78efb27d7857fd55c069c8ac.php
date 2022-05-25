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

/* @OroActivityList/Segment/activityCondition.html.twig */
class __TwigTemplate_4c9e9981c6622ca9cf559ecf801b319c extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroActivityList/Segment/activityCondition.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivityList/Segment/activityCondition.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivityList/Segment/activityCondition.html.twig"));

        // line 1
        $context["activityConditionOptions"] = Oro\Component\PhpUtils\ArrayUtil::arrayMergeRecursiveDistinct(["filters" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2
($context["params"] ?? null), "metadata", [], "any", false, true, false, 2), "filters", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "metadata", [], "any", false, true, false, 2), "filters", [], "any", false, false, false, 2), [])) : ([])), "fieldChoice" => ["select2" => ["formatSelectionTemplateSelector" => ((twig_get_attribute($this->env, $this->source,         // line 5
($context["params"] ?? null), "column_chain_template_selector", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "column_chain_template_selector", [], "any", false, false, false, 5), null)) : (null))]]], ((        // line 8
array_key_exists("activityConditionOptions", $context)) ? (_twig_default_filter((isset($context["activityConditionOptions"]) || array_key_exists("activityConditionOptions", $context) ? $context["activityConditionOptions"] : (function () { throw new RuntimeError('Variable "activityConditionOptions" does not exist.', 8, $this->source); })()), [])) : ([])));
        // line 9
        echo "
<li class=\"option\" data-criteria=\"condition-activity\"
    data-module=\"oroactivitylist/js/app/views/activity-condition-view\"
    data-options=\"";
        // line 12
        echo twig_escape_filter($this->env, json_encode((isset($context["activityConditionOptions"]) || array_key_exists("activityConditionOptions", $context) ? $context["activityConditionOptions"] : (function () { throw new RuntimeError('Variable "activityConditionOptions" does not exist.', 12, $this->source); })())), "html", null, true);
        echo "\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activitylist.condition_builder.criteria.activity"), "html", null, true);
        echo "
</li>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroActivityList/Segment/activityCondition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  56 => 12,  51 => 9,  49 => 8,  48 => 5,  47 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set activityConditionOptions = {
    filters: params.metadata.filters|default([]),
    fieldChoice: {
        select2: {
            formatSelectionTemplateSelector: params.column_chain_template_selector|default(null),
        },
    },
}|merge_recursive(activityConditionOptions|default({})) %}

<li class=\"option\" data-criteria=\"condition-activity\"
    data-module=\"oroactivitylist/js/app/views/activity-condition-view\"
    data-options=\"{{ activityConditionOptions|json_encode }}\">
    {{ 'oro.activitylist.condition_builder.criteria.activity'|trans }}
</li>
", "@OroActivityList/Segment/activityCondition.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ActivityListBundle/Resources/views/Segment/activityCondition.html.twig");
    }
}
