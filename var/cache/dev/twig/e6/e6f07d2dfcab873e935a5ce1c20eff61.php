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

/* @OroEntityExtend/ConfigFieldGrid/create.html.twig */
class __TwigTemplate_9864b05e7270e3d14d1fb2175cdb622c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityExtend/ConfigFieldGrid/create.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityExtend/ConfigFieldGrid/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityExtend/ConfigFieldGrid/create.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "@OroForm/Form/fields.html.twig", true);

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,         // line 4
($context["entity_config"] ?? null), "get", [0 => "label"], "method", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "get", [0 => "label"], "method", false, false, false, 4), "N/A")) : ("N/A")))]]);
        // line 6
        if ( !array_key_exists("formAction", $context)) {
            // line 7
            $context["formAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_entityextend_field_create", ["id" => (isset($context["entity_id"]) || array_key_exists("entity_id", $context) ? $context["entity_id"] : (function () { throw new RuntimeError('Variable "entity_id" does not exist.', 7, $this->source); })())]);
        }
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroEntityExtend/ConfigFieldGrid/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 10));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 11
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityExtend/ConfigFieldGrid/create.html.twig", 11)->unwrap();
        // line 12
        echo "
    ";
        // line 13
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_entityconfig_view", ["id" => (isset($context["entity_id"]) || array_key_exists("entity_id", $context) ? $context["entity_id"] : (function () { throw new RuntimeError('Variable "entity_id" does not exist.', 13, $this->source); })())])], 13, $context, $this->getSourceContext());
        echo "
    ";
        // line 14
        echo twig_call_macro($macros["UI"], "macro_saveActionButton", [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Continue"), "route" => "oro_entityextend_field_update", "params" => ["id" => "\$id"]]], 14, $context, $this->getSourceContext());
        // line 18
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 21
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 21));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 22
        echo "    ";
        if ( !array_key_exists("breadcrumbs", $context)) {
            // line 23
            echo "        ";
            $context["breadcrumbs"] = ["entity" => "entity", "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_entityconfig_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_extend.config_grid.entities"), "entityTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_extend.config_grid.new_field"), "additional" => [0 => ["indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_entityconfig_view", ["id" =>             // line 30
(isset($context["entity_id"]) || array_key_exists("entity_id", $context) ? $context["entity_id"] : (function () { throw new RuntimeError('Variable "entity_id" does not exist.', 30, $this->source); })())]), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,             // line 31
($context["entity_config"] ?? null), "get", [0 => "label"], "method", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity_config"] ?? null), "get", [0 => "label"], "method", false, false, false, 31), "N/A")) : ("N/A")))]]];
            // line 35
            echo "    ";
        }
        // line 36
        echo "
    ";
        // line 37
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 40
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 40));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 41
        echo "    ";
        $context["id"] = "configfield-create";
        // line 42
        echo "    ";
        $context["data"] = ["formErrors" => ((        // line 43
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'errors')) : (null)), "dataBlocks" => $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormDataBlocks($this->env, $context,         // line 44
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })())), "hiddenData" =>         // line 45
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'rest')];
        // line 47
        echo "
    ";
        // line 48
        $context["options"] = ["typeId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 49
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "type", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), "fieldId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "fieldName", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)];
        // line 52
        echo "
    <div data-page-component-module=\"oroentityextend/js/extend-field-form-component\"
         data-page-component-options=\"";
        // line 54
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 54, $this->source); })())), "html", null, true);
        echo "\">
        ";
        // line 55
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEntityExtend/ConfigFieldGrid/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 55,  191 => 54,  187 => 52,  185 => 50,  184 => 49,  183 => 48,  180 => 47,  178 => 45,  177 => 44,  176 => 43,  174 => 42,  171 => 41,  158 => 40,  143 => 37,  140 => 36,  137 => 35,  135 => 31,  134 => 30,  132 => 23,  129 => 22,  116 => 21,  102 => 18,  100 => 14,  96 => 13,  93 => 12,  90 => 11,  77 => 10,  63 => 1,  60 => 7,  58 => 6,  56 => 4,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% form_theme form with '@OroForm/Form/fields.html.twig' %}

{% oro_title_set({params : {\"%entityName%\": entity_config.get('label')|default('N/A')|trans }}) %}

{% if not formAction is defined %}
    {% set formAction = path('oro_entityextend_field_create', {id: entity_id}) %}
{% endif %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ UI.cancelButton(path('oro_entityconfig_view', {'id':entity_id})) }}
    {{ UI.saveActionButton({
        'label': 'Continue'|trans,
        'route': 'oro_entityextend_field_update',
        'params': {'id': '\$id'}
    }) }}
{% endblock navButtons %}

{% block pageHeader %}
    {% if not breadcrumbs is defined %}
        {% set breadcrumbs = {
            'entity':      'entity',
            'indexPath':   path('oro_entityconfig_index'),
            'indexLabel': 'oro.entity_extend.config_grid.entities'|trans,
            'entityTitle': 'oro.entity_extend.config_grid.new_field'|trans,
            'additional': [
                {
                    'indexPath'  : path('oro_entityconfig_view', {id: entity_id}),
                    'indexLabel' : entity_config.get('label')|default('N/A')|trans
                },
            ]
        } %}
    {% endif %}

    {{ parent() }}
{% endblock pageHeader %}

{% block content_data %}
    {% set id = 'configfield-create' %}
    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': form_data_blocks(form),
        'hiddenData': form_rest(form)
    } %}

    {% set options = {
        'typeId' : form.type.vars.id,
        'fieldId' : form.fieldName.vars.id
    } %}

    <div data-page-component-module=\"oroentityextend/js/extend-field-form-component\"
         data-page-component-options=\"{{ options|json_encode }}\">
        {{ parent() }}
    </div>
{% endblock content_data %}
", "@OroEntityExtend/ConfigFieldGrid/create.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityExtendBundle/Resources/views/ConfigFieldGrid/create.html.twig");
    }
}
