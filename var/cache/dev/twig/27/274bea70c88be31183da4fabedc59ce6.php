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

/* @OroCall/Call/view.html.twig */
class __TwigTemplate_d7dff0d73a3b99db02b81d62afc2bd7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'stats' => [$this, 'block_stats'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCall/Call/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCall/Call/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCall/Call/view.html.twig"));

        // line 2
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroCall/Call/view.html.twig", 2)->unwrap();
        // line 3
        $macros["AC"] = $this->macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCall/Call/view.html.twig", 3)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%subject%" => ((twig_get_attribute($this->env, $this->source,         // line 5
($context["entity"] ?? null), "subject", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "subject", [], "any", false, false, false, 5), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")))]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroCall/Call/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 7));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 8
        echo "    ";
        $macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCall/Call/view.html.twig", 8)->unwrap();
        // line 9
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCall/Call/view.html.twig", 9)->unwrap();
        // line 10
        echo "
    ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "        ";
            // line 13
            echo "        ";
            echo twig_call_macro($macros["AC"], "macro_addContextButton", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })())], 13, $context, $this->getSourceContext());
            echo "
        ";
            // line 14
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_call_update", ["id" => twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.entity_label")]], 14, $context, $this->getSourceContext());
            // line 17
            echo "
    ";
        }
        // line 19
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_call", ["id" => twig_get_attribute($this->env, $this->source,             // line 21
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_call_index"), "aCss" => "no-hash remove-button", "dataId" => twig_get_attribute($this->env, $this->source,             // line 24
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.entity_label")]], 20, $context, $this->getSourceContext());
            // line 26
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 30
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 30));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 31
        echo "    ";
        $macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCall/Call/view.html.twig", 31)->unwrap();
        // line 32
        echo "
    ";
        // line 34
        echo "    <li class=\"context-data activity-context-activity-block\">
        ";
        // line 35
        echo twig_call_macro($macros["AC"], "macro_activity_contexts", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 35, $this->source); })())], 35, $context, $this->getSourceContext());
        echo "
    </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 39
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 39));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 40
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 41
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_call_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.entity_plural_label"), "entityTitle" => ((twig_get_attribute($this->env, $this->source,         // line 44
($context["entity"] ?? null), "subject", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "subject", [], "any", false, false, false, 44), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")))];
        // line 46
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 49
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 49));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 50
        echo "    ";
        ob_start();
        // line 51
        echo "        ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.widget.call_information"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_call_widget_info", ["id" => twig_get_attribute($this->env, $this->source,         // line 54
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "renderContexts" => 0])]);
        // line 55
        echo "
    ";
        $context["callInformationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 57
        echo "
    ";
        // line 58
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.sections.general"), "class" => "active", "subblocks" => [0 => ["data" => [0 =>         // line 63
(isset($context["callInformationWidget"]) || array_key_exists("callInformationWidget", $context) ? $context["callInformationWidget"] : (function () { throw new RuntimeError('Variable "callInformationWidget" does not exist.', 63, $this->source); })())]]]]];
        // line 67
        echo "
    ";
        // line 68
        $context["id"] = "callView";
        // line 69
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 69, $this->source); })())];
        // line 70
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCall/Call/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 70,  243 => 69,  241 => 68,  238 => 67,  236 => 63,  235 => 58,  232 => 57,  228 => 55,  226 => 54,  224 => 51,  221 => 50,  208 => 49,  192 => 46,  190 => 44,  189 => 41,  187 => 40,  174 => 39,  158 => 35,  155 => 34,  152 => 32,  149 => 31,  136 => 30,  121 => 26,  119 => 24,  118 => 21,  116 => 20,  113 => 19,  109 => 17,  107 => 15,  106 => 14,  101 => 13,  99 => 12,  97 => 11,  94 => 10,  91 => 9,  88 => 8,  75 => 7,  61 => 1,  59 => 5,  56 => 3,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}
{% import '@OroActivity/macros.html.twig' as AC %}

{% oro_title_set({params : {\"%subject%\": entity.subject|default('N/A'|trans) }}) %}

{% block navButtons %}
    {% import '@OroActivity/macros.html.twig' as AC %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if is_granted('EDIT', entity) %}
        {# Button for add context on the activity list item view page #}
        {{ AC.addContextButton(entity) }}
        {{ UI.editButton({
            'path' : path('oro_call_update', { id: entity.id }),
            'entity_label': 'oro.call.entity_label'|trans
        })  }}
    {% endif %}
    {% if is_granted('DELETE', entity) %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_api_delete_call', {'id': entity.id}),
            'dataRedirect': path('oro_call_index'),
            'aCss': 'no-hash remove-button',
            'dataId': entity.id,
            'entity_label': 'oro.call.entity_label'|trans
        }) }}
    {% endif %}
{% endblock navButtons %}

{% block stats %}
    {% import '@OroActivity/macros.html.twig' as AC %}

    {# Display contexts targets in the activity view page #}
    <li class=\"context-data activity-context-activity-block\">
        {{ AC.activity_contexts(entity) }}
    </li>
{% endblock %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity':      entity,
        'indexPath':   path('oro_call_index'),
        'indexLabel':  'oro.call.entity_plural_label'|trans,
        'entityTitle': entity.subject|default('N/A'|trans),
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block content_data %}
    {% set callInformationWidget %}
        {{ oro_widget_render({
            'widgetType': 'block',
            'title': 'oro.call.widget.call_information'|trans,
            'url': path('oro_call_widget_info', {id: entity.id, renderContexts: 0})
        }) }}
    {% endset %}

    {% set dataBlocks = [
        {
            'title': 'oro.call.sections.general'|trans,
            'class': 'active',
            'subblocks': [
                {'data' : [callInformationWidget]}
            ]
        }
    ] %}

    {% set id = 'callView' %}
    {% set data = { 'dataBlocks': dataBlocks } %}
    {{ parent() }}
{% endblock content_data %}
", "@OroCall/Call/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-call-bundle/Resources/views/Call/view.html.twig");
    }
}
