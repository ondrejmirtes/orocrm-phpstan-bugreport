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

/* @OroEmail/Email/js/activityItemTemplate.html.twig */
class __TwigTemplate_70eacacbd4d59af6c2ff86640c24ea55 extends Template
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
            'activityContent' => [$this, 'block_activityContent'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/js/activityItemTemplate.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/js/activityItemTemplate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/js/activityItemTemplate.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Email/js/activityItemTemplate.html.twig", 2)->unwrap();
        // line 3
        $macros["AC"] = $this->macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroEmail/Email/js/activityItemTemplate.html.twig", 3)->unwrap();
        // line 5
        $context["entityClass"] = "Oro\\Bundle\\EmailBundle\\Entity\\Email";
        // line 6
        $context["entityName"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue((isset($context["entityClass"]) || array_key_exists("entityClass", $context) ? $context["entityClass"] : (function () { throw new RuntimeError('Variable "entityClass" does not exist.', 6, $this->source); })()), "label"));
        // line 1
        $this->parent = $this->loadTemplate("@OroActivityList/ActivityList/js/activityItemTemplate.html.twig", "@OroEmail/Email/js/activityItemTemplate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_activityDetails($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityDetails", $this->getTemplateName(), 8));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityDetails"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityDetails"));

        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "
    <%
        var hasLink   = !!data.ownerLink;
        var ownerLink = hasLink
            ? '<a class=\"user\" href=\"' + data.ownerLink + '\">' +  _.escape(data.ownerName) + '</a>'
            : '<span class=\"user\">' + _.escape(data.ownerName) + '</span>';
    %>
    <%= _.template(";
        // line 16
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.sent_by.label"));
        echo ", { interpolate: /\\{\\{(.+?)\\}\\}/g })({
        user: ownerLink,
        date: '<i class=\"date\">' + updatedAt + '</i>'
    }) %>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 22
    public function block_activityActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityActions", $this->getTemplateName(), 22));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        // line 23
        echo "    ";
        $macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroEmail/Email/js/activityItemTemplate.html.twig", 23)->unwrap();
        // line 24
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Email/js/activityItemTemplate.html.twig", 24)->unwrap();
        // line 25
        echo "
    ";
        // line 26
        ob_start();
        // line 27
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_email_user_edit")) {
            // line 28
            echo "            ";
            echo twig_call_macro($macros["AC"], "macro_activity_context_link", [], 28, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 30
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo "    ";
        $context["actions"] = [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 31, $this->source); })())];
        // line 32
        echo "
    ";
        // line 33
        ob_start();
        // line 34
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_email_create")) {
            // line 35
            echo "            <a href=\"#\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply"), "html", null, true);
            echo "\"
               class=\"dropdown-item\"
               data-url=\"<%- routing.generate('oro_email_email_reply', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
               ";
            // line 38
            echo twig_call_macro($macros["UI"], "macro_renderWidgetDataAttributes", [["type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => ["alias" => "reply-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]], 38, $context, $this->getSourceContext());
            // line 53
            echo "><span class=\"fa-reply hide-text\" aria-hidden=\"true\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply"), "html", null, true);
            echo "</span>
                ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply"), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 57
        echo "    ";
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
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_email_create")) {
            // line 62
            echo "            <a href=\"#\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.forward"), "html", null, true);
            echo "\"
               class=\"dropdown-item\"
               data-url=\"<%- routing.generate('oro_email_email_forward', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
               ";
            // line 65
            echo twig_call_macro($macros["UI"], "macro_renderWidgetDataAttributes", [["type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => ["alias" => "forward-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]], 65, $context, $this->getSourceContext());
            // line 80
            echo "><span class=\"fa-mail-forward hide-text\" aria-hidden=\"true\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.forward"), "html", null, true);
            echo "</span>
                ";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.forward"), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 84
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 85, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 85, $this->source); })())]);
        // line 86
        echo "
    ";
        // line 87
        $this->displayParentBlock("activityActions", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 90
    public function block_activityContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityContent", $this->getTemplateName(), 90));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityContent"));

        // line 91
        echo "    ";
        // line 92
        echo "    <div class=\"info\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/js/activityItemTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 92,  255 => 91,  242 => 90,  227 => 87,  224 => 86,  221 => 85,  218 => 84,  212 => 81,  207 => 80,  205 => 65,  198 => 62,  195 => 61,  193 => 60,  190 => 59,  187 => 58,  184 => 57,  178 => 54,  173 => 53,  171 => 38,  164 => 35,  161 => 34,  159 => 33,  156 => 32,  153 => 31,  150 => 30,  144 => 28,  141 => 27,  139 => 26,  136 => 25,  133 => 24,  130 => 23,  117 => 22,  99 => 16,  88 => 9,  75 => 8,  61 => 1,  59 => 6,  57 => 5,  55 => 3,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroActivityList/ActivityList/js/activityItemTemplate.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI%}
{% import '@OroActivity/macros.html.twig' as AC %}

{% set entityClass = 'Oro\\\\Bundle\\\\EmailBundle\\\\Entity\\\\Email' %}
{% set entityName = oro_entity_config_value(entityClass, 'label')|trans %}

{% block activityDetails %}
    {{ entityName }}
    <%
        var hasLink   = !!data.ownerLink;
        var ownerLink = hasLink
            ? '<a class=\"user\" href=\"' + data.ownerLink + '\">' +  _.escape(data.ownerName) + '</a>'
            : '<span class=\"user\">' + _.escape(data.ownerName) + '</span>';
    %>
    <%= _.template({{ 'oro.email.sent_by.label'|trans|json_encode|raw }}, { interpolate: /\\{\\{(.+?)\\}\\}/g })({
        user: ownerLink,
        date: '<i class=\"date\">' + updatedAt + '</i>'
    }) %>
{% endblock %}

{% block activityActions %}
    {% import '@OroActivity/macros.html.twig' as AC %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set action %}
        {% if is_granted('oro_email_email_user_edit') %}
            {{ AC.activity_context_link() }}
        {% endif %}
    {% endset %}
    {% set actions = [action] %}

    {% set action %}
        {% if is_granted('oro_email_email_create') %}
            <a href=\"#\" title=\"{{ 'oro.email.reply'|trans }}\"
               class=\"dropdown-item\"
               data-url=\"<%- routing.generate('oro_email_email_reply', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
               {{ UI.renderWidgetDataAttributes({
                'type': 'dialog',
                'multiple': true,
                'refresh-widget-alias': 'activity-list-widget',
                'options': {
                    'alias': 'reply-dialog',
                    'dialogOptions': {
                        'title': 'oro.email.send_email'|trans,
                        'allowMaximize': true,
                        'allowMinimize': true,
                        'dblclick': 'maximize',
                        'maximizedHeightDecreaseBy': 'minimize-bar',
                        'width': 1000
                    }
                }
            }) }}><span class=\"fa-reply hide-text\" aria-hidden=\"true\">{{ 'oro.email.reply'|trans }}</span>
                {{ 'oro.email.reply'|trans }}
            </a>
        {% endif %}
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {% set action %}
        {% if is_granted('oro_email_email_create') %}
            <a href=\"#\" title=\"{{ 'oro.email.forward'|trans }}\"
               class=\"dropdown-item\"
               data-url=\"<%- routing.generate('oro_email_email_forward', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
               {{ UI.renderWidgetDataAttributes({
                'type': 'dialog',
                'multiple': true,
                'refresh-widget-alias': 'activity-list-widget',
                'options': {
                    'alias': 'forward-dialog',
                    'dialogOptions': {
                        'title': 'oro.email.send_email'|trans,
                        'allowMaximize': true,
                        'allowMinimize': true,
                        'dblclick': 'maximize',
                        'maximizedHeightDecreaseBy': 'minimize-bar',
                        'width': 1000
                    }
                }
            }) }}><span class=\"fa-mail-forward hide-text\" aria-hidden=\"true\">{{ 'oro.email.forward'|trans }}</span>
                {{ 'oro.email.forward'|trans }}
            </a>
        {% endif %}
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {{ parent() }}
{% endblock %}

{% block activityContent %}
    {# Do NOT remove. Placeholder for activity view #}
    <div class=\"info\"></div>
{% endblock %}
", "@OroEmail/Email/js/activityItemTemplate.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/js/activityItemTemplate.html.twig");
    }
}
