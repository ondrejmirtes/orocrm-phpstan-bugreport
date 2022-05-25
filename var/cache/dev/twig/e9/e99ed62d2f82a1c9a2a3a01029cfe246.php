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

/* @OroAction/Operation/page.html.twig */
class __TwigTemplate_86a1032777a4d42302615fbddc832d53 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageHeader' => [$this, 'block_pageHeader'],
            'navButtons' => [$this, 'block_navButtons'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAction/Operation/page.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAction/Operation/page.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAction/Operation/page.html.twig"));

        // line 3
        $context["formAction"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "uri", [], "any", false, false, false, 3);
        // line 4
        $context["entity"] = twig_get_attribute($this->env, $this->source, (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 4, $this->source); })()), "data", [], "any", false, false, false, 4);
        // line 6
        if ((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })())) {
            // line 7
            $context["className"] = $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(twig_get_attribute($this->env, $this->source, (isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 7, $this->source); })()), "data", [], "any", false, false, false, 7));
            // line 8
            $context["entityLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue((isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 8, $this->source); })()), "label"));
            // line 9
            $context["indexUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassRoute((isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 9, $this->source); })()), "name"));

            $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["titleTemplate" => "%entity% - %operationName% - %label% - %pluralLabel%", "params" => ["%entity%" => twig_get_attribute($this->env, $this->source,             // line 14
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "__toString", [], "any", false, false, false, 14), "%operationName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 15, $this->source); })()), "definition", [], "any", false, false, false, 15), "label", [], "any", false, false, false, 15)), "%label%" =>             // line 16
(isset($context["entityLabel"]) || array_key_exists("entityLabel", $context) ? $context["entityLabel"] : (function () { throw new RuntimeError('Variable "entityLabel" does not exist.', 16, $this->source); })()), "%pluralLabel%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue(            // line 17
(isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 17, $this->source); })()), "plural_label"))]]);
        } else {
            // line 21
            $context["indexUrl"] = "";

            $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["titleTemplate" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
(isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 22, $this->source); })()), "definition", [], "any", false, false, false, 22), "label", [], "any", false, false, false, 22))]);
        }
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroAction/Operation/page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 25
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 25));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 26
        echo "    ";
        if ((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "        ";
            $context["breadcrumbs"] = ["entity" =>             // line 28
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "indexPath" =>             // line 29
(isset($context["indexUrl"]) || array_key_exists("indexUrl", $context) ? $context["indexUrl"] : (function () { throw new RuntimeError('Variable "indexUrl" does not exist.', 29, $this->source); })()), "indexLabel" =>             // line 30
(isset($context["entityLabel"]) || array_key_exists("entityLabel", $context) ? $context["entityLabel"] : (function () { throw new RuntimeError('Variable "entityLabel" does not exist.', 30, $this->source); })()), "entityTitle" => ((            // line 31
array_key_exists("entity", $context)) ? (_twig_default_filter((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 31, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")))];
            // line 33
            echo "
        ";
            // line 34
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroAction/Operation/page.html.twig", 36)->display(twig_array_merge($context, ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 36, $this->source); })()), "definition", [], "any", false, false, false, 36), "label", [], "any", false, false, false, 36))]));
            // line 37
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 40
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 40));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 41
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroAction/Operation/page.html.twig", 41)->unwrap();
        // line 42
        echo "
    ";
        // line 43
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [((array_key_exists("fromUrl", $context)) ? (_twig_default_filter((isset($context["fromUrl"]) || array_key_exists("fromUrl", $context) ? $context["fromUrl"] : (function () { throw new RuntimeError('Variable "fromUrl" does not exist.', 43, $this->source); })()), (isset($context["indexUrl"]) || array_key_exists("indexUrl", $context) ? $context["indexUrl"] : (function () { throw new RuntimeError('Variable "indexUrl" does not exist.', 43, $this->source); })()))) : ((isset($context["indexUrl"]) || array_key_exists("indexUrl", $context) ? $context["indexUrl"] : (function () { throw new RuntimeError('Variable "indexUrl" does not exist.', 43, $this->source); })())))], 43, $context, $this->getSourceContext());
        echo "

    ";
        // line 45
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => twig_call_macro($macros["UI"], "macro_saveAndStayButton", ["Submit"], 45, $context, $this->getSourceContext())]], 45, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 48
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 48));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 49
        echo "    ";
        if ( !array_key_exists("id", $context)) {
            // line 50
            echo "        ";
            $context["id"] = ("action-page-" . twig_get_attribute($this->env, $this->source, (isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50));
            // line 51
            echo "    ";
        }
        // line 52
        echo "
    ";
        // line 53
        if ( !array_key_exists("data", $context)) {
            // line 54
            echo "        ";
            $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 55
(isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 55, $this->source); })()), "definition", [], "any", false, false, false, 55), "label", [], "any", false, false, false, 55)), "class" => "active", "subblocks" => [0 => ["data" => [0 =>             // line 59
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'widget')]]]]];
            // line 63
            echo "
        ";
            // line 64
            $context["data"] = ["formErrors" => ((            // line 65
array_key_exists("formErrors", $context)) ? (_twig_default_filter((isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 65, $this->source); })()), "")) : ("")), "dataBlocks" =>             // line 66
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 66, $this->source); })())];
            // line 68
            echo "    ";
        }
        // line 69
        echo "
    ";
        // line 70
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroAction/Operation/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 70,  221 => 69,  218 => 68,  216 => 66,  215 => 65,  214 => 64,  211 => 63,  209 => 59,  208 => 55,  206 => 54,  204 => 53,  201 => 52,  198 => 51,  195 => 50,  192 => 49,  179 => 48,  164 => 45,  159 => 43,  156 => 42,  153 => 41,  140 => 40,  126 => 37,  123 => 36,  118 => 34,  115 => 33,  113 => 31,  112 => 30,  111 => 29,  110 => 28,  108 => 27,  105 => 26,  92 => 25,  78 => 1,  75 => 22,  72 => 21,  69 => 17,  68 => 16,  67 => 15,  66 => 14,  63 => 9,  61 => 8,  59 => 7,  57 => 6,  55 => 4,  53 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}

{% set formAction = app.request.uri  %}
{% set entity = context.data %}

{% if entity %}
    {% set className = oro_class_name(context.data) %}
    {% set entityLabel = oro_entity_config_value(className, 'label')|trans %}
    {% set indexUrl = path(oro_entity_route(className, 'name')) %}

    {% oro_title_set({
        titleTemplate : \"%entity% - %operationName% - %label% - %pluralLabel%\",
        params : {
            \"%entity%\": entity.__toString,
            \"%operationName%\": operation.definition.label|trans,
            \"%label%\": entityLabel,
            \"%pluralLabel%\": oro_entity_config_value(className, 'plural_label')|trans
        }
    }) %}
{% else %}
    {% set indexUrl = '' %}
    {% oro_title_set({titleTemplate : operation.definition.label|trans}) %}
{% endif %}

{% block pageHeader %}
    {% if entity %}
        {% set breadcrumbs = {
            'entity':      entity,
            'indexPath':   indexUrl,
            'indexLabel':  entityLabel,
            'entityTitle': entity|default('N/A'|trans)
        } %}

        {{ parent() }}
    {% else %}
        {% include '@OroUI/page_title_block.html.twig' with { title: operation.definition.label|trans } %}
    {% endif %}
{% endblock pageHeader %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ UI.cancelButton(fromUrl|default(indexUrl)) }}

    {{ UI.dropdownSaveButton({'html': UI.saveAndStayButton('Submit')}) }}
{% endblock navButtons %}

{% block content_data %}
    {% if id is not defined %}
        {% set id = 'action-page-' ~ operation.name %}
    {% endif %}

    {% if data is not defined %}
        {% set dataBlocks = [{
            'title': operation.definition.label|trans,
            'class': 'active',
            'subblocks': [{
                'data': [
                    form_widget(form)
                ]
            }]
        }] %}

        {% set data = {
            'formErrors': formErrors|default(''),
            'dataBlocks': dataBlocks
        }%}
    {% endif %}

    {{ parent() }}
{% endblock content_data %}
", "@OroAction/Operation/page.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ActionBundle/Resources/views/Operation/page.html.twig");
    }
}
