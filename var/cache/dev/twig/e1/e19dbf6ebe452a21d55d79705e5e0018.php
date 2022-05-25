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

/* @OroEntity/Entities/relation.html.twig */
class __TwigTemplate_970c217149530dd6a01f471566907e98 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntity/Entities/relation.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntity/Entities/relation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntity/Entities/relation.html.twig"));

        // line 1
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroEntity/Entities/relation.html.twig", 1)->unwrap();
        // line 2
        echo "<div class=\"widget-content\">
    ";
        // line 3
        $context["gridName"] = $this->extensions['Oro\Bundle\DataGridBundle\Twig\DataGridExtension']->buildGridFullName("entity-relation-grid", (((isset($context["entity_name"]) || array_key_exists("entity_name", $context) ? $context["entity_name"] : (function () { throw new RuntimeError('Variable "entity_name" does not exist.', 3, $this->source); })()) . "-") . (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new RuntimeError('Variable "field_name" does not exist.', 3, $this->source); })())));
        // line 4
        echo "
    ";
        // line 5
        $context["gridParams"] = ["_parameters" => ["data_in" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "get", [0 => "added"], "method", false, false, false, 7)) ? (twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "get", [0 => "added"], "method", false, false, false, 7), ",")) : ([])), "data_not_in" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "removed"], "method", false, false, false, 8)) ? (twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "removed"], "method", false, false, false, 8), ",")) : ([]))], "class_name" =>         // line 10
(isset($context["entity_class"]) || array_key_exists("entity_class", $context) ? $context["entity_class"] : (function () { throw new RuntimeError('Variable "entity_class" does not exist.', 10, $this->source); })()), "field_name" =>         // line 11
(isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new RuntimeError('Variable "field_name" does not exist.', 11, $this->source); })()), "id" =>         // line 12
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 12, $this->source); })())];
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntity/Entities/relation.html.twig", 21)->unwrap();
        // line 22
        echo "
    ";
        // line 23
        $context["extraData"] = [];
        // line 24
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["relation"]) || array_key_exists("relation", $context) ? $context["relation"] : (function () { throw new RuntimeError('Variable "relation" does not exist.', 24, $this->source); })()), "get", [0 => "target_grid"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["fieldName"]) {
            // line 25
            echo "        ";
            $context["extraData"] = twig_array_merge((isset($context["extraData"]) || array_key_exists("extraData", $context) ? $context["extraData"] : (function () { throw new RuntimeError('Variable "extraData" does not exist.', 25, $this->source); })()), [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 26
(isset($context["entity_provider"]) || array_key_exists("entity_provider", $context) ? $context["entity_provider"] : (function () { throw new RuntimeError('Variable "entity_provider" does not exist.', 26, $this->source); })()), "getConfig", [0 => twig_get_attribute($this->env, $this->source, (isset($context["relation"]) || array_key_exists("relation", $context) ? $context["relation"] : (function () { throw new RuntimeError('Variable "relation" does not exist.', 26, $this->source); })()), "get", [0 => "target_entity"], "method", false, false, false, 26), 1 => $context["fieldName"]], "method", false, false, false, 26), "get", [0 => "label"], "method", false, false, false, 26)), "value" =>             // line 27
$context["fieldName"]]]);
            // line 29
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    <div ";
        // line 31
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroform/js/multiple-entity/component", "options" => ["wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "get", [0 => "_wid"], "method", false, false, false, 34), "gridName" =>         // line 35
(isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 35, $this->source); })()), "addedVal" => "#appendRelation", "removedVal" => "#removeRelation", "columnName" => "assigned", "fieldTitles" => twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["relation"]) || array_key_exists("relation", $context) ? $context["relation"] : (function () { throw new RuntimeError('Variable "relation" does not exist.', 39, $this->source); })()), "get", [0 => "target_title"], "method", false, false, false, 39), "entityName" => twig_replace_filter(        // line 40
(isset($context["entity_class"]) || array_key_exists("entity_class", $context) ? $context["entity_class"] : (function () { throw new RuntimeError('Variable "entity_class" does not exist.', 40, $this->source); })()), ["\\" => "_"]), "fieldName" =>         // line 41
(isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new RuntimeError('Variable "field_name" does not exist.', 41, $this->source); })()), "extraData" =>         // line 42
(isset($context["extraData"]) || array_key_exists("extraData", $context) ? $context["extraData"] : (function () { throw new RuntimeError('Variable "extraData" does not exist.', 42, $this->source); })()), "link" => "oro_entity_detailed"]]], 31, $context, $this->getSourceContext());
        // line 45
        echo "></div>

    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-primary\" data-action-name=\"select\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select"), "html", null, true);
        echo "</button>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 15));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "        ";
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [(isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 16, $this->source); })()), (isset($context["gridParams"]) || array_key_exists("gridParams", $context) ? $context["gridParams"] : (function () { throw new RuntimeError('Variable "gridParams" does not exist.', 16, $this->source); })())], 16, $context, $this->getSourceContext());
        echo "
        <input type=\"hidden\" name=\"appendRelation\" id=\"appendRelation\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "get", [0 => "added"], "method", false, false, false, 17), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"removeRelation\" id=\"removeRelation\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", [0 => "removed"], "method", false, false, false, 18), "html", null, true);
        echo "\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEntity/Entities/relation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 18,  150 => 17,  145 => 16,  132 => 15,  115 => 49,  111 => 48,  106 => 45,  104 => 42,  103 => 41,  102 => 40,  101 => 39,  100 => 35,  99 => 34,  98 => 31,  95 => 30,  89 => 29,  87 => 27,  86 => 26,  84 => 25,  79 => 24,  77 => 23,  74 => 22,  72 => 21,  69 => 20,  67 => 15,  64 => 14,  62 => 12,  61 => 11,  60 => 10,  59 => 8,  58 => 7,  57 => 5,  54 => 4,  52 => 3,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroDataGrid/macros.html.twig' as dataGrid %}
<div class=\"widget-content\">
    {% set gridName = oro_datagrid_build_fullname('entity-relation-grid', entity_name ~ '-' ~  field_name) %}

    {% set gridParams = {
        '_parameters' : {
            'data_in': app.request.get('added') ? app.request.get('added')|split(',') : [],
            'data_not_in': app.request.get('removed') ? app.request.get('removed')|split(',') : []
        },
        'class_name': entity_class,
        'field_name': field_name,
        'id': id
    } %}

    {% block content %}
        {{ dataGrid.renderGrid(gridName, gridParams) }}
        <input type=\"hidden\" name=\"appendRelation\" id=\"appendRelation\" value=\"{{ app.request.get('added') }}\" />
        <input type=\"hidden\" name=\"removeRelation\" id=\"removeRelation\" value=\"{{ app.request.get('removed') }}\" />
    {% endblock %}

    {% import '@OroUI/macros.html.twig' as UI %}

    {% set extraData = [] %}
    {% for fieldName in relation.get('target_grid') %}
        {% set extraData = extraData|merge([{
            'label': entity_provider.getConfig(relation.get('target_entity'), fieldName).get('label')|trans,
            'value': fieldName
        }]) %}
    {% endfor %}

    <div {{ UI.renderPageComponentAttributes({
        module: 'oroform/js/multiple-entity/component',
        options: {
            wid: app.request.get('_wid'),
            gridName: gridName,
            addedVal: '#appendRelation',
            removedVal: '#removeRelation',
            columnName: 'assigned',
            fieldTitles: relation.get('target_title'),
            entityName: entity_class|replace({'\\\\':'_'}),
            fieldName: field_name,
            extraData: extraData,
            link: 'oro_entity_detailed'
        }
    }) }}></div>

    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">{{ 'Cancel'|trans }}</button>
        <button type=\"button\" class=\"btn btn-primary\" data-action-name=\"select\">{{ 'Select'|trans }}</button>
    </div>
</div>
", "@OroEntity/Entities/relation.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityBundle/Resources/views/Entities/relation.html.twig");
    }
}
