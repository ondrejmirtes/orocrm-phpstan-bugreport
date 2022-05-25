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

/* @OroCall/Call/js/activityItemTemplate.html.twig */
class __TwigTemplate_fab83ea6a481fddeba6ff2b74c8ef411 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'activityDetails' => [$this, 'block_activityDetails'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCall/Call/js/activityItemTemplate.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCall/Call/js/activityItemTemplate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCall/Call/js/activityItemTemplate.html.twig"));

        // line 2
        $macros["AC"] = $this->macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCall/Call/js/activityItemTemplate.html.twig", 2)->unwrap();
        // line 4
        $context["entityClass"] = "Oro\\Bundle\\CallBundle\\Entity\\Call";
        // line 5
        $context["entityName"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue((isset($context["entityClass"]) || array_key_exists("entityClass", $context) ? $context["entityClass"] : (function () { throw new RuntimeError('Variable "entityClass" does not exist.', 5, $this->source); })()), "label"));
        // line 1
        $this->parent = $this->loadTemplate("@OroActivityList/ActivityList/js/activityItemTemplate.html.twig", "@OroCall/Call/js/activityItemTemplate.html.twig", 1);
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
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.created_by"));
        echo "
        : ";
        // line 11
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.changed_by"));
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
    public function block_activityActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityActions", $this->getTemplateName(), 21));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        // line 22
        echo "    ";
        $macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroCall/Call/js/activityItemTemplate.html.twig", 22)->unwrap();
        // line 23
        echo "
    ";
        // line 24
        ob_start();
        // line 25
        echo "        <% if (editable) { %>
            ";
        // line 26
        echo twig_call_macro($macros["AC"], "macro_activity_context_link", [], 26, $context, $this->getSourceContext());
        echo "
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 29
        echo "    ";
        $context["actions"] = [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 29, $this->source); })())];
        // line 30
        echo "
    ";
        // line 31
        ob_start();
        // line 32
        echo "        <a href=\"<%- routing.generate('oro_call_view', {'id': relatedActivityId}) %>\"
           class=\"dropdown-item\"
           title=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.view_call", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 34, $this->source); })())]), "html", null, true);
        echo "\"><span
                class=\"fa-eye hide-text\" aria-hidden=\"true\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.view_call", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 35, $this->source); })())]), "html", null, true);
        echo "</span>
            ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.view_call", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 36, $this->source); })())]), "html", null, true);
        echo "
        </a>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 39, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 39, $this->source); })())]);
        // line 40
        echo "
    ";
        // line 41
        ob_start();
        // line 42
        echo "        <% if (editable) { %>
        <a href=\"#\" class=\"dropdown-item action item-edit-button\"
           title=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.update_call", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 44, $this->source); })())]), "html", null, true);
        echo "\"
           data-action-extra-options=\"";
        // line 45
        echo twig_escape_filter($this->env, json_encode(["dialogOptions" => ["width" => 1000]]), "html", null, true);
        echo "\">
            <span class=\"fa-pencil-square-o hide-text\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.update_call", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 46, $this->source); })())]), "html", null, true);
        echo "</span>
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.update_call", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 47, $this->source); })())]), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 51
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 51, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 51, $this->source); })())]);
        // line 52
        echo "
    ";
        // line 53
        ob_start();
        // line 54
        echo "        <% if (removable) { %>
        <a href=\"#\" class=\"dropdown-item action item-remove-button\"
           title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.delete_call", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 56, $this->source); })())]), "html", null, true);
        echo "\">
            <span class=\"fa-trash-o hide-text\" aria-hidden=\"true\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.delete_call", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 57, $this->source); })())]), "html", null, true);
        echo "</span>
            ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.call.delete_call", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 58, $this->source); })())]), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 62, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 62, $this->source); })())]);
        // line 63
        echo "
    ";
        // line 64
        $this->displayParentBlock("activityActions", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCall/Call/js/activityItemTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 64,  234 => 63,  231 => 62,  224 => 58,  220 => 57,  216 => 56,  212 => 54,  210 => 53,  207 => 52,  204 => 51,  197 => 47,  193 => 46,  189 => 45,  185 => 44,  181 => 42,  179 => 41,  176 => 40,  173 => 39,  167 => 36,  163 => 35,  159 => 34,  155 => 32,  153 => 31,  150 => 30,  147 => 29,  141 => 26,  138 => 25,  136 => 24,  133 => 23,  130 => 22,  117 => 21,  95 => 11,  91 => 10,  85 => 8,  72 => 7,  58 => 1,  56 => 5,  54 => 4,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroActivityList/ActivityList/js/activityItemTemplate.html.twig' %}
{% import '@OroActivity/macros.html.twig' as AC %}

{% set entityClass = 'Oro\\\\Bundle\\\\CallBundle\\\\Entity\\\\Call' %}
{% set entityName = oro_entity_config_value(entityClass, 'label')|trans %}

{% block activityDetails %}
    {{ entityName }}
    <% var template = (verb == 'create')
        ? {{ 'oro.call.created_by'|trans|json_encode|raw }}
        : {{ 'oro.call.changed_by'|trans|json_encode|raw }};
    %>
    <%= _.template(template, { interpolate: /\\{\\{(.+?)\\}\\}/g })({
        user: owner_url ? '<a class=\"user\" href=\"' + owner_url + '\">' +  _.escape(owner) + '</a>' :  '<span class=\"user\">' + _.escape(owner) + '</span>',
        date: '<i class=\"date\">' + createdAt + '</i>',
        editor: editor_url ? '<a class=\"user\" href=\"' + editor_url + '\">' +  _.escape(editor) + '</a>' : _.escape(editor),
        editor_date: '<i class=\"date\">' + updatedAt + '</i>'
    }) %>
{% endblock %}

{% block activityActions %}
    {% import '@OroActivity/macros.html.twig' as AC %}

    {% set action %}
        <% if (editable) { %>
            {{ AC.activity_context_link() }}
        <% } %>
    {% endset %}
    {% set actions = [action] %}

    {% set action %}
        <a href=\"<%- routing.generate('oro_call_view', {'id': relatedActivityId}) %>\"
           class=\"dropdown-item\"
           title=\"{{ 'oro.call.view_call'|trans({'{{ entity }}': entityName}) }}\"><span
                class=\"fa-eye hide-text\" aria-hidden=\"true\">{{ 'oro.call.view_call'|trans({'{{ entity }}': entityName}) }}</span>
            {{ 'oro.call.view_call'|trans({'{{ entity }}': entityName}) }}
        </a>
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {% set action %}
        <% if (editable) { %>
        <a href=\"#\" class=\"dropdown-item action item-edit-button\"
           title=\"{{ 'oro.call.update_call'|trans({'{{ entity }}': entityName}) }}\"
           data-action-extra-options=\"{{ {dialogOptions: {width: 1000}}|json_encode }}\">
            <span class=\"fa-pencil-square-o hide-text\">{{ 'oro.call.update_call'|trans({'{{ entity }}': entityName}) }}</span>
            {{ 'oro.call.update_call'|trans({'{{ entity }}': entityName}) }}
        </a>
        <% } %>
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {% set action %}
        <% if (removable) { %>
        <a href=\"#\" class=\"dropdown-item action item-remove-button\"
           title=\"{{ 'oro.call.delete_call'|trans({'{{ entity }}': entityName}) }}\">
            <span class=\"fa-trash-o hide-text\" aria-hidden=\"true\">{{ 'oro.call.delete_call'|trans({'{{ entity }}': entityName}) }}</span>
            {{ 'oro.call.delete_call'|trans({'{{ entity }}': entityName}) }}
        </a>
        <% } %>
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {{ parent() }}
{% endblock %}
", "@OroCall/Call/js/activityItemTemplate.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-call-bundle/Resources/views/Call/js/activityItemTemplate.html.twig");
    }
}
