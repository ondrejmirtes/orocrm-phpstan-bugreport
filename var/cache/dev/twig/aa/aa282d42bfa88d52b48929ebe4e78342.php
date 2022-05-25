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

/* @OroEntityConfig/AttributeFamily/update.html.twig */
class __TwigTemplate_00d157503489f125696b848996e3c487 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntityConfig/AttributeFamily/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/AttributeFamily/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntityConfig/AttributeFamily/update.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "@OroForm/Form/fields.html.twig", true);
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)) {

            $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%familyName%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 5
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "defaultLabel", [], "any", false, false, false, 5), "string", [], "any", false, false, false, 5)]]);
            // line 6
            $context["formAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_attribute_family_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]);
        } else {
            // line 8
            $context["formAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_attribute_family_create", ["alias" => (isset($context["entityAlias"]) || array_key_exists("entityAlias", $context) ? $context["entityAlias"] : (function () { throw new RuntimeError('Variable "entityAlias" does not exist.', 8, $this->source); })())]);

            $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.attribute_family.entity_label")]]);
        }
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroEntityConfig/AttributeFamily/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 12));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 13
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEntityConfig/AttributeFamily/update.html.twig", 13)->unwrap();
        // line 14
        echo "
    ";
        // line 15
        if (((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_attribute_family_delete", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()))) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("delete", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })())))) {
            // line 16
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_attribute_family_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 17
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_attribute_family_index", ["alias" =>             // line 18
(isset($context["entityAlias"]) || array_key_exists("entityAlias", $context) ? $context["entityAlias"] : (function () { throw new RuntimeError('Variable "entityAlias" does not exist.', 18, $this->source); })())]), "aCss" => "no-hash remove-button", "dataId" => twig_get_attribute($this->env, $this->source,             // line 20
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.attribute_family.entity_label")]], 16, $context, $this->getSourceContext());
            // line 22
            echo "
        ";
            // line 23
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 23, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 25
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_attribute_family_index", ["alias" => (isset($context["entityAlias"]) || array_key_exists("entityAlias", $context) ? $context["entityAlias"] : (function () { throw new RuntimeError('Variable "entityAlias" does not exist.', 25, $this->source); })())])], 25, $context, $this->getSourceContext());
        echo "

    ";
        // line 27
        $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_attribute_family_index", "params" => ["alias" =>         // line 29
(isset($context["entityAlias"]) || array_key_exists("entityAlias", $context) ? $context["entityAlias"] : (function () { throw new RuntimeError('Variable "entityAlias" does not exist.', 29, $this->source); })())]]], 27, $context, $this->getSourceContext());
        // line 31
        echo "
    ";
        // line 32
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_attribute_family_create")) {
            // line 33
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 33, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_attribute_family_create", "params" => ["alias" =>             // line 35
(isset($context["entityAlias"]) || array_key_exists("entityAlias", $context) ? $context["entityAlias"] : (function () { throw new RuntimeError('Variable "entityAlias" does not exist.', 35, $this->source); })())]]], 33, $context, $this->getSourceContext()));
            // line 37
            echo "    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)) {
            // line 40
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 40, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_attribute_family_update", "params" => ["id" => "\$id", "alias" =>             // line 42
(isset($context["entityAlias"]) || array_key_exists("entityAlias", $context) ? $context["entityAlias"] : (function () { throw new RuntimeError('Variable "entityAlias" does not exist.', 42, $this->source); })())]]], 40, $context, $this->getSourceContext()));
            // line 44
            echo "    ";
        }
        // line 45
        echo "
    ";
        // line 46
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 46, $this->source); })())]], 46, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 49
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 49));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 50
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)) {
            // line 51
            echo "        ";
            $context["breadcrumbs"] = ["entity" =>             // line 52
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 52, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_attribute_family_index", ["alias" =>             // line 53
(isset($context["entityAlias"]) || array_key_exists("entityAlias", $context) ? $context["entityAlias"] : (function () { throw new RuntimeError('Variable "entityAlias" does not exist.', 53, $this->source); })())]), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.attribute_family.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,             // line 55
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "defaultLabel", [], "method", false, false, false, 55)];
            // line 57
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 59
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_config.attribute_family.entity_label")]);
            // line 60
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroEntityConfig/AttributeFamily/update.html.twig", 60)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 60, $this->source); })())]));
            // line 61
            echo "    ";
        }
        // line 62
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 65
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 65));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 66
        echo "    ";
        $context["id"] = "attribute-family-create";
        // line 67
        echo "    ";
        $context["data"] = ["formErrors" =>         // line 68
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'errors'), "dataBlocks" => $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormDataBlocks($this->env, $context,         // line 69
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })())), "hiddenData" =>         // line 70
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'rest')];
        // line 72
        echo "
    ";
        // line 73
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEntityConfig/AttributeFamily/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 73,  241 => 72,  239 => 70,  238 => 69,  237 => 68,  235 => 67,  232 => 66,  219 => 65,  205 => 62,  202 => 61,  199 => 60,  196 => 59,  190 => 57,  188 => 55,  187 => 53,  186 => 52,  184 => 51,  181 => 50,  168 => 49,  153 => 46,  150 => 45,  147 => 44,  145 => 42,  143 => 40,  141 => 39,  138 => 38,  135 => 37,  133 => 35,  131 => 33,  129 => 32,  126 => 31,  124 => 29,  123 => 27,  117 => 25,  112 => 23,  109 => 22,  107 => 20,  106 => 18,  105 => 17,  103 => 16,  101 => 15,  98 => 14,  95 => 13,  82 => 12,  68 => 1,  63 => 8,  60 => 6,  58 => 5,  55 => 4,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% form_theme form with '@OroForm/Form/fields.html.twig' %}

{% if entity.id %}
    {% oro_title_set({params : {'%familyName%': entity.defaultLabel.string }}) %}
    {% set formAction = path('oro_attribute_family_update', {id: entity.id })  %}
{% else %}
    {% set formAction = path('oro_attribute_family_create', {alias: entityAlias})  %}
    {% oro_title_set({params : {'%entityName%': 'oro.entity_config.attribute_family.entity_label'|trans}}) %}
{% endif %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if entity.id and is_granted('oro_attribute_family_delete', entity) and is_granted('delete', entity) %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_attribute_family_delete', {'id': entity.id}),
            'dataRedirect': path('oro_attribute_family_index', {alias: entityAlias}),
            'aCss': 'no-hash remove-button',
            'dataId': entity.id,
            'entity_label': 'oro.entity_config.attribute_family.entity_label'|trans
        }) }}
        {{ UI.buttonSeparator() }}
    {% endif %}
    {{ UI.cancelButton(path('oro_attribute_family_index', {alias: entityAlias})) }}

    {% set html = UI.saveAndCloseButton({
        'route': 'oro_attribute_family_index',
        'params': {alias: entityAlias}
    }) %}

    {% if is_granted('oro_attribute_family_create') %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_attribute_family_create',
            'params': {alias: entityAlias}
        }) %}
    {% endif %}

    {% if form.vars.value.id %}
        {% set html = html ~ UI.saveAndStayButton({
        'route': 'oro_attribute_family_update',
        'params': {'id': '\$id', 'alias': entityAlias}
        }) %}
    {% endif %}

    {{ UI.dropdownSaveButton({'html': html}) }}
{% endblock navButtons %}

{% block pageHeader %}
    {% if entity.id %}
        {% set breadcrumbs = {
            'entity':      entity,
            'indexPath':   path('oro_attribute_family_index', {alias: entityAlias}),
            'indexLabel':  'oro.entity_config.attribute_family.entity_plural_label'|trans,
            'entityTitle': entity.defaultLabel()
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.entity_config.attribute_family.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}

{% endblock pageHeader %}

{% block content_data %}
    {% set id = 'attribute-family-create' %}
    {% set data = {
        'formErrors': form_errors(form),
        'dataBlocks': form_data_blocks(form),
        'hiddenData': form_rest(form)
    }%}

    {{ parent() }}
{% endblock content_data %}
", "@OroEntityConfig/AttributeFamily/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityConfigBundle/Resources/views/AttributeFamily/update.html.twig");
    }
}
