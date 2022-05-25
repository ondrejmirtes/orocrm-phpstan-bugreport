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

/* @OroEntityConfig/Attribute/index.html.twig */
class __TwigTemplate_af7dfac839073f80f97850377147e170 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityConfig/Attribute/index.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Attribute/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/Attribute/index.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/Attribute/index.html.twig", 2)->unwrap();
        // line 3
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroEntityConfig/Attribute/index.html.twig", 3)->unwrap();
        // line 5
        $context["gridName"] = "attributes-grid";
        // line 6
        $context["pageTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["attributesLabel"]) || array_key_exists("attributesLabel", $context) ? $context["attributesLabel"] : (function () { throw new RuntimeError('Variable "attributesLabel" does not exist.', 6, $this->source); })()));
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/index.html.twig", "@OroEntityConfig/Attribute/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 8));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 9
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/Attribute/index.html.twig", 9)->unwrap();
        // line 10
        echo "
    ";
        // line 11
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_attribute_create") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_attribute_update"))) {
            // line 12
            echo "        ";
            $this->loadTemplate("@OroImportExport/ImportExport/buttons_from_configuration.html.twig", "@OroEntityConfig/Attribute/index.html.twig", 12)->display(twig_array_merge($context, ["alias" => "oro_field_config_model_attribute", "options" => ["entity_id" => twig_get_attribute($this->env, $this->source,             // line 14
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]]));
            // line 16
            echo "    ";
        }
        // line 17
        echo "
    ";
        // line 18
        echo twig_call_macro($macros["entityConfig"], "macro_displayLayoutActions", [(isset($context["layoutActions"]) || array_key_exists("layoutActions", $context) ? $context["layoutActions"] : (function () { throw new RuntimeError('Variable "layoutActions" does not exist.', 18, $this->source); })())], 18, $context, $this->getSourceContext());
        echo "
    ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_attribute_create")) {
            // line 20
            echo "        <div class=\"btn-group pull-right\">
            ";
            // line 21
            echo twig_call_macro($macros["UI"], "macro_addButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_attribute_create", ["alias" =>             // line 22
(isset($context["entityAlias"]) || array_key_exists("entityAlias", $context) ? $context["entityAlias"] : (function () { throw new RuntimeError('Variable "entityAlias" does not exist.', 22, $this->source); })())]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.attribute.entity_label")]], 21, $context, $this->getSourceContext());
            // line 24
            echo "
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 29));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    ";
        // line 31
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("attributes_content_after", $context)) ? (_twig_default_filter((isset($context["attributes_content_after"]) || array_key_exists("attributes_content_after", $context) ? $context["attributes_content_after"] : (function () { throw new RuntimeError('Variable "attributes_content_after" does not exist.', 31, $this->source); })()), "attributes_content_after")) : ("attributes_content_after")), ["entityAlias" => (isset($context["entityAlias"]) || array_key_exists("entityAlias", $context) ? $context["entityAlias"] : (function () { throw new RuntimeError('Variable "entityAlias" does not exist.', 31, $this->source); })())]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEntityConfig/Attribute/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 31,  146 => 30,  133 => 29,  117 => 24,  115 => 22,  114 => 21,  111 => 20,  109 => 19,  105 => 18,  102 => 17,  99 => 16,  97 => 14,  95 => 12,  93 => 11,  90 => 10,  87 => 9,  74 => 8,  60 => 1,  58 => 6,  56 => 5,  54 => 3,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/index.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}

{% set gridName = 'attributes-grid' %}
{% set pageTitle = attributesLabel|trans %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if is_granted('oro_attribute_create') and is_granted('oro_attribute_update') %}
        {% include '@OroImportExport/ImportExport/buttons_from_configuration.html.twig' with {
            'alias': 'oro_field_config_model_attribute',
            'options': {'entity_id': entity.id}
        } %}
    {% endif %}

    {{ entityConfig.displayLayoutActions(layoutActions) }}
    {% if is_granted('oro_attribute_create') %}
        <div class=\"btn-group pull-right\">
            {{ UI.addButton({
                'path': path('oro_attribute_create', {alias: entityAlias}),
                'entity_label': 'oro.entity_config.attribute.entity_label'|trans
            }) }}
        </div>
    {% endif %}
{% endblock %}

{% block content %}
    {{ parent() }}
    {% placeholder attributes_content_after with {entityAlias: entityAlias} %}
{% endblock %}
", "@OroEntityConfig/Attribute/index.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/Attribute/index.html.twig");
    }
}
