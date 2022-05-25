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

/* @OroTask/Task/js/activityItemTemplate.html.twig */
class __TwigTemplate_ac1860573e863bef147254ba40e17af4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'activityDetails' => [$this, 'block_activityDetails'],
            'activityShortMessage' => [$this, 'block_activityShortMessage'],
            'activityActions' => [$this, 'block_activityActions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroActivityList/ActivityList/js/activityItemTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTask/Task/js/activityItemTemplate.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTask/Task/js/activityItemTemplate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTask/Task/js/activityItemTemplate.html.twig"));

        // line 2
        $macros["AC"] = $this->macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroTask/Task/js/activityItemTemplate.html.twig", 2)->unwrap();
        // line 4
        $context["entityClass"] = "Oro\\Bundle\\TaskBundle\\Entity\\Task";
        // line 5
        $context["entityName"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue((isset($context["entityClass"]) || array_key_exists("entityClass", $context) ? $context["entityClass"] : (function () { throw new RuntimeError('Variable "entityClass" does not exist.', 5, $this->source); })()), "label"));
        // line 1
        $this->parent = $this->loadTemplate("@OroActivityList/ActivityList/js/activityItemTemplate.html.twig", "@OroTask/Task/js/activityItemTemplate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_activityDetails($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityDetails", $this->getTemplateName(), 7));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityDetails"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityDetails"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "
    <% var template = (verb == 'create')
        ? ";
        // line 10
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.activity_item.created_by"));
        echo "
        : ";
        // line 11
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.activity_item.changed_by"));
        echo ";
    %>
    <%= _.template(template, { interpolate: /\\{\\{(.+?)\\}\\}/g })({
        user: owner_url ? '<a class=\"user\" href=\"' + owner_url + '\">' +  _.escape(owner) + '</a>' :  '<span class=\"user\">' + _.escape(owner) + '</span>',
        date: '<i class=\"date\">' + createdAt + '</i>',
        editor: editor_url ? '<a class=\"user\" href=\"' + editor_url + '\">' +  _.escape(editor) + '</a>' : _.escape(editor),
        editor_date: '<i class=\"date\">' + updatedAt + '</i>'
    }) %>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 21
    public function block_activityShortMessage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityShortMessage", $this->getTemplateName(), 21));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityShortMessage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityShortMessage"));

        // line 22
        echo "    <% if (!_.isUndefined(data.statusId) && data.statusId) { %>
        <div class=\"activity-short-message\">
            <% if (data.statusId === 'closed') { %>
                <div class=\"badge badge-pill badge-disabled status-disabled\"><span class=\"icon-status-disabled fa-circle\" aria-hidden=\"true\"></span>
                    <%- data.statusName %></div>
            <% } else if (data.statusId === 'in_progress') { %>
                <div class=\"badge badge-pill badge-tentatively status-tentatively\"><span class=\"icon-status-tentatively fa-circle\" aria-hidden=\"true\"></span>
                    <%- data.statusName %></div>
            <% } else { %>
                <div class=\"badge badge-pill badge-enabled status-enabled\"><span class=\"icon-status-enabled fa-circle\" aria-hidden=\"true\"></span>
                    <%- data.statusName %></div>
            <% } %>
        </div>
    <% } %>
    ";
        // line 36
        $this->displayParentBlock("activityShortMessage", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 39
    public function block_activityActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityActions", $this->getTemplateName(), 39));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        // line 40
        echo "    ";
        $macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroTask/Task/js/activityItemTemplate.html.twig", 40)->unwrap();
        // line 41
        echo "
    ";
        // line 42
        ob_start();
        // line 43
        echo "        ";
        // line 44
        echo "        <% if (editable) { %>
            ";
        // line 45
        echo twig_call_macro($macros["AC"], "macro_activity_context_link", [], 45, $context, $this->getSourceContext());
        echo "
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "    ";
        $context["actions"] = [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 48, $this->source); })())];
        // line 49
        echo "
    ";
        // line 50
        ob_start();
        // line 51
        echo "        <a href=\"<%- routing.generate('oro_task_view', {'id': relatedActivityId}) %>\"
           class=\"dropdown-item\"
           title=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.view_task", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 53, $this->source); })())]), "html", null, true);
        echo "\"><span
                class=\"fa-eye hide-text\" aria-hidden=\"true\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.view_task", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 54, $this->source); })())]), "html", null, true);
        echo "</span>
            ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.view_task", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 55, $this->source); })())]), "html", null, true);
        echo "
        </a>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 58, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 58, $this->source); })())]);
        // line 59
        echo "
    ";
        // line 60
        ob_start();
        // line 61
        echo "        <% if (editable) { %>
        <a href=\"#\" class=\"dropdown-item action item-edit-button\"
           title=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.update_task", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 63, $this->source); })())]), "html", null, true);
        echo "\"
           data-action-extra-options=\"";
        // line 64
        echo twig_escape_filter($this->env, json_encode(["dialogOptions" => ["width" => 1000]]), "html", null, true);
        echo "\">
            <span class=\"fa-pencil-square-o hide-text\" aria-hidden=\"true\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.update_task", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 65, $this->source); })())]), "html", null, true);
        echo "</span>
            ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.update_task", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 66, $this->source); })())]), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 70, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 70, $this->source); })())]);
        // line 71
        echo "
    ";
        // line 72
        ob_start();
        // line 73
        echo "        <% if (removable) { %>
        <a href=\"#\" class=\"dropdown-item action item-remove-button\"
           title=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.delete_task", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 75, $this->source); })())]), "html", null, true);
        echo "\">
            <span class=\"fa-trash-o hide-text\" aria-hidden=\"true\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.delete_task", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 76, $this->source); })())]), "html", null, true);
        echo "</span>
            ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.delete_task", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 77, $this->source); })())]), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 81, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 81, $this->source); })())]);
        // line 82
        echo "
    ";
        // line 83
        $this->displayParentBlock("activityActions", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroTask/Task/js/activityItemTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 83,  281 => 82,  278 => 81,  271 => 77,  267 => 76,  263 => 75,  259 => 73,  257 => 72,  254 => 71,  251 => 70,  244 => 66,  240 => 65,  236 => 64,  232 => 63,  228 => 61,  226 => 60,  223 => 59,  220 => 58,  214 => 55,  210 => 54,  206 => 53,  202 => 51,  200 => 50,  197 => 49,  194 => 48,  188 => 45,  185 => 44,  183 => 43,  181 => 42,  178 => 41,  175 => 40,  162 => 39,  147 => 36,  131 => 22,  118 => 21,  96 => 11,  92 => 10,  86 => 8,  73 => 7,  59 => 1,  57 => 5,  55 => 4,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroActivityList/ActivityList/js/activityItemTemplate.html.twig' %}
{% import '@OroActivity/macros.html.twig' as AC %}

{% set entityClass = 'Oro\\\\Bundle\\\\TaskBundle\\\\Entity\\\\Task' %}
{% set entityName = oro_entity_config_value(entityClass, 'label')|trans %}

{% block activityDetails %}
    {{ entityName }}
    <% var template = (verb == 'create')
        ? {{ 'oro.task.activity_item.created_by'|trans|json_encode|raw }}
        : {{ 'oro.task.activity_item.changed_by'|trans|json_encode|raw }};
    %>
    <%= _.template(template, { interpolate: /\\{\\{(.+?)\\}\\}/g })({
        user: owner_url ? '<a class=\"user\" href=\"' + owner_url + '\">' +  _.escape(owner) + '</a>' :  '<span class=\"user\">' + _.escape(owner) + '</span>',
        date: '<i class=\"date\">' + createdAt + '</i>',
        editor: editor_url ? '<a class=\"user\" href=\"' + editor_url + '\">' +  _.escape(editor) + '</a>' : _.escape(editor),
        editor_date: '<i class=\"date\">' + updatedAt + '</i>'
    }) %>
{% endblock %}

{% block activityShortMessage %}
    <% if (!_.isUndefined(data.statusId) && data.statusId) { %>
        <div class=\"activity-short-message\">
            <% if (data.statusId === 'closed') { %>
                <div class=\"badge badge-pill badge-disabled status-disabled\"><span class=\"icon-status-disabled fa-circle\" aria-hidden=\"true\"></span>
                    <%- data.statusName %></div>
            <% } else if (data.statusId === 'in_progress') { %>
                <div class=\"badge badge-pill badge-tentatively status-tentatively\"><span class=\"icon-status-tentatively fa-circle\" aria-hidden=\"true\"></span>
                    <%- data.statusName %></div>
            <% } else { %>
                <div class=\"badge badge-pill badge-enabled status-enabled\"><span class=\"icon-status-enabled fa-circle\" aria-hidden=\"true\"></span>
                    <%- data.statusName %></div>
            <% } %>
        </div>
    <% } %>
    {{ parent() }}
{% endblock %}

{% block activityActions %}
    {% import '@OroActivity/macros.html.twig' as AC %}

    {% set action %}
        {# Add button for add context in the activity list item #}
        <% if (editable) { %>
            {{ AC.activity_context_link() }}
        <% } %>
    {% endset %}
    {% set actions = [action] %}

    {% set action %}
        <a href=\"<%- routing.generate('oro_task_view', {'id': relatedActivityId}) %>\"
           class=\"dropdown-item\"
           title=\"{{ 'oro.task.view_task'|trans({'{{ entity }}': entityName}) }}\"><span
                class=\"fa-eye hide-text\" aria-hidden=\"true\">{{ 'oro.task.view_task'|trans({'{{ entity }}': entityName}) }}</span>
            {{ 'oro.task.view_task'|trans({'{{ entity }}': entityName}) }}
        </a>
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {% set action %}
        <% if (editable) { %>
        <a href=\"#\" class=\"dropdown-item action item-edit-button\"
           title=\"{{ 'oro.task.update_task'|trans({'{{ entity }}': entityName}) }}\"
           data-action-extra-options=\"{{ {dialogOptions: {width: 1000}}|json_encode }}\">
            <span class=\"fa-pencil-square-o hide-text\" aria-hidden=\"true\">{{ 'oro.task.update_task'|trans({'{{ entity }}': entityName}) }}</span>
            {{ 'oro.task.update_task'|trans({'{{ entity }}': entityName}) }}
        </a>
        <% } %>
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {% set action %}
        <% if (removable) { %>
        <a href=\"#\" class=\"dropdown-item action item-remove-button\"
           title=\"{{ 'oro.task.delete_task'|trans({'{{ entity }}': entityName}) }}\">
            <span class=\"fa-trash-o hide-text\" aria-hidden=\"true\">{{ 'oro.task.delete_task'|trans({'{{ entity }}': entityName}) }}</span>
            {{ 'oro.task.delete_task'|trans({'{{ entity }}': entityName}) }}
        </a>
        <% } %>
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {{ parent() }}
{% endblock %}
", "@OroTask/Task/js/activityItemTemplate.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-task-bundle/Resources/views/Task/js/activityItemTemplate.html.twig");
    }
}
