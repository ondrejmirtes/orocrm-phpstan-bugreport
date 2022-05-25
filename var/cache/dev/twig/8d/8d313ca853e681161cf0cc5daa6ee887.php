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

/* @OroNote/Note/js/activityItemTemplate.html.twig */
class __TwigTemplate_82b92d4a913649af8e3524cc4836aae9 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNote/Note/js/activityItemTemplate.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNote/Note/js/activityItemTemplate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNote/Note/js/activityItemTemplate.html.twig"));

        // line 2
        $macros["AC"] = $this->macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroNote/Note/js/activityItemTemplate.html.twig", 2)->unwrap();
        // line 3
        $context["entityClass"] = "Oro\\Bundle\\NoteBundle\\Entity\\Note";
        // line 4
        $context["entityName"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue((isset($context["entityClass"]) || array_key_exists("entityClass", $context) ? $context["entityClass"] : (function () { throw new RuntimeError('Variable "entityClass" does not exist.', 4, $this->source); })()), "label"));
        // line 1
        $this->parent = $this->loadTemplate("@OroActivityList/ActivityList/js/activityItemTemplate.html.twig", "@OroNote/Note/js/activityItemTemplate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_activityDetails($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityDetails", $this->getTemplateName(), 6));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityDetails"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityDetails"));

        // line 7
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "
    <% var template = (verb == 'create')
        ? ";
        // line 9
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.note_added_by"));
        echo "
        : ";
        // line 10
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.note_updated_by"));
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

    // line 20
    public function block_activityActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityActions", $this->getTemplateName(), 20));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        // line 21
        echo "    ";
        $macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroNote/Note/js/activityItemTemplate.html.twig", 21)->unwrap();
        // line 22
        echo "
    ";
        // line 23
        ob_start();
        // line 24
        echo "        ";
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
        echo "        <% if (editable) { %>
        <a href=\"#\" class=\"dropdown-item action item-edit-button\"
           title=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.note_update", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 34, $this->source); })())]), "html", null, true);
        echo "\"
           data-action-extra-options=\"";
        // line 35
        echo twig_escape_filter($this->env, json_encode(["dialogOptions" => ["width" => 1000]]), "html", null, true);
        echo "\">
            <span class=\"fa-pencil-square-o hide-text\" aria-hidden=\"true\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.note_update", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 36, $this->source); })())]), "html", null, true);
        echo "</span>
            ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.note_update", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 37, $this->source); })())]), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 41, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 41, $this->source); })())]);
        // line 42
        echo "
    ";
        // line 43
        ob_start();
        // line 44
        echo "        <% if (removable) { %>
        <a href=\"#\" class=\"dropdown-item action item-remove-button\"
           title=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.note_delete", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 46, $this->source); })())]), "html", null, true);
        echo "\">
            <span class=\"fa-trash-o hide-text\" aria-hidden=\"true\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.note_delete", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 47, $this->source); })())]), "html", null, true);
        echo "</span>
            ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.note_delete", ["{{ entity }}" => (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 48, $this->source); })())]), "html", null, true);
        echo "
        </a>
        <% } %>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 52, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 52, $this->source); })())]);
        // line 53
        echo "
    ";
        // line 54
        $this->displayParentBlock("activityActions", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNote/Note/js/activityItemTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 54,  210 => 53,  207 => 52,  200 => 48,  196 => 47,  192 => 46,  188 => 44,  186 => 43,  183 => 42,  180 => 41,  173 => 37,  169 => 36,  165 => 35,  161 => 34,  157 => 32,  155 => 31,  152 => 30,  149 => 29,  143 => 26,  140 => 25,  138 => 24,  136 => 23,  133 => 22,  130 => 21,  117 => 20,  95 => 10,  91 => 9,  85 => 7,  72 => 6,  58 => 1,  56 => 4,  54 => 3,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroActivityList/ActivityList/js/activityItemTemplate.html.twig' %}
{% import '@OroActivity/macros.html.twig' as AC %}
{% set entityClass = 'Oro\\\\Bundle\\\\NoteBundle\\\\Entity\\\\Note' %}
{% set entityName = oro_entity_config_value(entityClass, 'label')|trans %}

{% block activityDetails %}
    {{ entityName }}
    <% var template = (verb == 'create')
        ? {{ 'oro.note.note_added_by'|trans|json_encode|raw }}
        : {{ 'oro.note.note_updated_by'|trans|json_encode|raw }};
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
        {# Add button for add context in the activity list item #}
        <% if (editable) { %>
            {{ AC.activity_context_link() }}
        <% } %>
    {% endset %}
    {% set actions = [action] %}

    {% set action %}
        <% if (editable) { %>
        <a href=\"#\" class=\"dropdown-item action item-edit-button\"
           title=\"{{ 'oro.note.note_update'|trans({'{{ entity }}': entityName}) }}\"
           data-action-extra-options=\"{{ {dialogOptions: {width: 1000}}|json_encode }}\">
            <span class=\"fa-pencil-square-o hide-text\" aria-hidden=\"true\">{{ 'oro.note.note_update'|trans({'{{ entity }}': entityName}) }}</span>
            {{ 'oro.note.note_update'|trans({'{{ entity }}': entityName}) }}
        </a>
        <% } %>
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {% set action %}
        <% if (removable) { %>
        <a href=\"#\" class=\"dropdown-item action item-remove-button\"
           title=\"{{ 'oro.note.note_delete'|trans({'{{ entity }}': entityName}) }}\">
            <span class=\"fa-trash-o hide-text\" aria-hidden=\"true\">{{ 'oro.note.note_delete'|trans({'{{ entity }}': entityName}) }}</span>
            {{ 'oro.note.note_delete'|trans({'{{ entity }}': entityName}) }}
        </a>
        <% } %>
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {{ parent() }}
{% endblock %}
", "@OroNote/Note/js/activityItemTemplate.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NoteBundle/Resources/views/Note/js/activityItemTemplate.html.twig");
    }
}
