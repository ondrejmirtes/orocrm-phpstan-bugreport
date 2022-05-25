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

/* @OroActivity/macros.html.twig */
class __TwigTemplate_c9f7c4c9842635ebafb60e7799b23748 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroActivity/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivity/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivity/macros.html.twig"));

        // line 64
        echo "
";
        // line 92
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function macro_activity_contexts($__entity__ = null, $__target__ = null, $__checkTarget__ = null, $__component__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "target" => $__target__,
            "checkTarget" => $__checkTarget__,
            "component" => $__component__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "activity_contexts"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "activity_contexts"));

            // line 7
            echo "    <script type=\"text/template\" id=\"activity-context-activity-list\">
        <div class=\"context-item\" data-cid=\"<%- entity.cid %>\">
                <span data-id=\"<%- entity.get('targetId') %>\">
                    <span class=\"context-icon <%- entity.get('icon') %>\" aria-hidden=\"true\"></span>
                    <% if (entity.get('link')) { %>
                        <a href=\"<%- entity.get('link') %>\">
                            <span class=\"context-label\" title=\"<%- entity.get('title') %>\"><%- entity.get('title') %></span>
                        </a>
                    <% } else { %>
                        <span class=\"context-label\" title=\"<%- entity.get('title') %>\"><%- entity.get('title') %></span>
                    <% }  %>
                    ";
            // line 18
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()))) {
                // line 19
                echo "                        <span class=\"fa-close\" aria-hidden=\"true\" data-role=\"delete-item\"></span>
                    ";
            }
            // line 21
            echo "                </span>
        </div>
    </script>

    ";
            // line 25
            if (twig_test_empty((isset($context["checkTarget"]) || array_key_exists("checkTarget", $context) ? $context["checkTarget"] : (function () { throw new RuntimeError('Variable "checkTarget" does not exist.', 25, $this->source); })()))) {
                // line 26
                echo "        ";
                $context["checkTarget"] = false;
                // line 27
                echo "    ";
            }
            // line 28
            echo "
    ";
            // line 29
            $context["targetClassNameEncoded"] = $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 29, $this->source); })()), true);
            // line 30
            echo "    ";
            $context["activityClassAlias"] = $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassAlias((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), true);
            // line 31
            echo "
    ";
            // line 32
            $context["options"] = ["entityId" => twig_get_attribute($this->env, $this->source,             // line 33
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "target" => false, "checkTarget" =>             // line 35
(isset($context["checkTarget"]) || array_key_exists("checkTarget", $context) ? $context["checkTarget"] : (function () { throw new RuntimeError('Variable "checkTarget" does not exist.', 35, $this->source); })()), "activityClassAlias" =>             // line 36
(isset($context["activityClassAlias"]) || array_key_exists("activityClassAlias", $context) ? $context["activityClassAlias"] : (function () { throw new RuntimeError('Variable "activityClassAlias" does not exist.', 36, $this->source); })())];
            // line 38
            echo "
    ";
            // line 39
            if ((isset($context["checkTarget"]) || array_key_exists("checkTarget", $context) ? $context["checkTarget"] : (function () { throw new RuntimeError('Variable "checkTarget" does not exist.', 39, $this->source); })())) {
                // line 40
                echo "        ";
                $context["targetEntity"] = ["target" => ["id" => twig_get_attribute($this->env, $this->source,                 // line 42
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42), "className" =>                 // line 43
(isset($context["targetClassNameEncoded"]) || array_key_exists("targetClassNameEncoded", $context) ? $context["targetClassNameEncoded"] : (function () { throw new RuntimeError('Variable "targetClassNameEncoded" does not exist.', 43, $this->source); })())]];
                // line 46
                echo "        ";
                $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 46, $this->source); })()), (isset($context["targetEntity"]) || array_key_exists("targetEntity", $context) ? $context["targetEntity"] : (function () { throw new RuntimeError('Variable "targetEntity" does not exist.', 46, $this->source); })()));
                // line 47
                echo "    ";
            }
            // line 48
            echo "
    ";
            // line 49
            $context["component"] = (((array_key_exists("component", $context) && (isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 49, $this->source); })()))) ? (            // line 50
(isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 50, $this->source); })())) : ("oroactivity/js/app/components/activity-context-activity-component"));
            // line 52
            echo "
    <div class=\"activity-context-activity\"
         data-page-component-module=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 54, $this->source); })()), "html", null, true);
            echo "\"
         data-page-component-options=\"";
            // line 55
            echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 55, $this->source); })())), "html", null, true);
            echo "\"
         data-layout=\"separate\">
        <div class=\"activity-context-activity-label\">
            ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.contexts.label"), "html", null, true);
            echo "
        </div>
        <div class=\"activity-context-activity-items\">
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 65
    public function macro_activity_context_link($__hideText__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "hideText" => $__hideText__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "activity_context_link"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "activity_context_link"));

            // line 66
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroActivity/macros.html.twig", 66)->unwrap();
            // line 67
            echo "    <a href=\"#\" role=\"button\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.contexts.placeholder"), "html_attr");
            echo "\"
       class=\"dropdown-item\"
       data-url=\"<%- routing.generate('oro_activity_context', {'id': relatedActivityId, 'activity': relatedActivityClass }) %>\"
        ";
            // line 70
            echo twig_call_macro($macros["UI"], "macro_renderWidgetDataAttributes", [["type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => ["alias" => "activity-context-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.contexts.add_context_entity.label"), "allowMaximize" => true, "allowMinimize" => true, "modal" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000, "height" => 600]]]], 70, $context, $this->getSourceContext());
            // line 87
            echo ">
        <span class=\"fa-link hide-text\" aria-hidden=\"true\">";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.contexts.placeholder"), "html", null, true);
            echo "</span>
        ";
            // line 89
            (((isset($context["hideText"]) || array_key_exists("hideText", $context) ? $context["hideText"] : (function () { throw new RuntimeError('Variable "hideText" does not exist.', 89, $this->source); })())) ? (print ("")) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.contexts.placeholder"), "html", null, true))));
            echo "
    </a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 94
    public function macro_addContextButton($__entity__ = null, $__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "addContextButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "addContextButton"));

            // line 95
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 95, $this->source); })()))) {
                // line 96
                echo "        ";
                $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroActivity/macros.html.twig", 96)->unwrap();
                // line 97
                echo "        ";
                echo twig_call_macro($macros["UI"], "macro_clientButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_activity_context", ["id" => twig_get_attribute($this->env, $this->source,                 // line 100
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100), "activity" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(                // line 101
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 101, $this->source); })()), true)]), "aCss" => "no-hash", "iCss" => "fa-link hide-text", "dataId" => twig_get_attribute($this->env, $this->source,                 // line 105
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.contexts.add_context.label"), "widget" => ["type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => ["alias" => "activity-context-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.contexts.add_context_entity.label"), "allowMaximize" => true, "allowMinimize" => true, "modal" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000, "height" => 600]]]]], 97, $context, $this->getSourceContext());
                // line 125
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroActivity/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 125,  276 => 105,  275 => 101,  274 => 100,  272 => 97,  269 => 96,  267 => 95,  247 => 94,  229 => 89,  225 => 88,  222 => 87,  220 => 70,  213 => 67,  210 => 66,  191 => 65,  170 => 58,  164 => 55,  160 => 54,  156 => 52,  154 => 50,  153 => 49,  150 => 48,  147 => 47,  144 => 46,  142 => 43,  141 => 42,  139 => 40,  137 => 39,  134 => 38,  132 => 36,  131 => 35,  130 => 33,  129 => 32,  126 => 31,  123 => 30,  121 => 29,  118 => 28,  115 => 27,  112 => 26,  110 => 25,  104 => 21,  100 => 19,  98 => 18,  85 => 7,  63 => 6,  49 => 92,  46 => 64,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Render activity contexts
    Parameters:
        entity - activity entity Oro\\Bundle\\ActivityBundle\\Model\\ActivityInterface
#}
{% macro activity_contexts(entity, target, checkTarget, component) %}
    <script type=\"text/template\" id=\"activity-context-activity-list\">
        <div class=\"context-item\" data-cid=\"<%- entity.cid %>\">
                <span data-id=\"<%- entity.get('targetId') %>\">
                    <span class=\"context-icon <%- entity.get('icon') %>\" aria-hidden=\"true\"></span>
                    <% if (entity.get('link')) { %>
                        <a href=\"<%- entity.get('link') %>\">
                            <span class=\"context-label\" title=\"<%- entity.get('title') %>\"><%- entity.get('title') %></span>
                        </a>
                    <% } else { %>
                        <span class=\"context-label\" title=\"<%- entity.get('title') %>\"><%- entity.get('title') %></span>
                    <% }  %>
                    {% if  is_granted('EDIT', entity) %}
                        <span class=\"fa-close\" aria-hidden=\"true\" data-role=\"delete-item\"></span>
                    {% endif %}
                </span>
        </div>
    </script>

    {% if checkTarget is empty %}
        {% set checkTarget = false %}
    {% endif %}

    {% set targetClassNameEncoded = oro_class_name(target, true) %}
    {% set activityClassAlias = oro_class_alias(entity, true) %}

    {% set options = {
        entityId: entity.id,
        target: false,
        checkTarget: checkTarget,
        activityClassAlias: activityClassAlias
    } %}

    {% if checkTarget %}
        {% set targetEntity = {
            'target': {
                'id' : target.id,
                'className': targetClassNameEncoded
            }
        } %}
        {% set options = options|merge(targetEntity) %}
    {% endif %}

    {% set component = component is defined and component
        ? component
        : 'oroactivity/js/app/components/activity-context-activity-component' %}

    <div class=\"activity-context-activity\"
         data-page-component-module=\"{{ component }}\"
         data-page-component-options=\"{{ options|json_encode }}\"
         data-layout=\"separate\">
        <div class=\"activity-context-activity-label\">
            {{ 'oro.activity.contexts.label'|trans }}
        </div>
        <div class=\"activity-context-activity-items\">
        </div>
    </div>
{% endmacro %}

{% macro activity_context_link(hideText) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    <a href=\"#\" role=\"button\" title=\"{{ 'oro.activity.contexts.placeholder'|trans|e('html_attr') }}\"
       class=\"dropdown-item\"
       data-url=\"<%- routing.generate('oro_activity_context', {'id': relatedActivityId, 'activity': relatedActivityClass }) %>\"
        {{ UI.renderWidgetDataAttributes({
            'type' : 'dialog',
            'multiple' : true,
            'refresh-widget-alias': 'activity-list-widget',
            'options' : {
                'alias': 'activity-context-dialog',
                'dialogOptions' : {
                    'title' : 'oro.activity.contexts.add_context_entity.label'|trans,
                    'allowMaximize': true,
                    'allowMinimize': true,
                    'modal': true,
                    'dblclick': 'maximize',
                    'maximizedHeightDecreaseBy': 'minimize-bar',
                    'width': 1000,
                    'height': 600
                }
            }
        }) }}>
        <span class=\"fa-link hide-text\" aria-hidden=\"true\">{{ 'oro.activity.contexts.placeholder'|trans }}</span>
        {{ hideText ? '' : 'oro.activity.contexts.placeholder'|trans }}
    </a>
{% endmacro %}

{# Button for add context on the activity list item view page #}
{% macro addContextButton(entity, parameters) -%}
    {% if is_granted('EDIT', entity) %}
        {% import '@OroUI/macros.html.twig' as UI %}
        {{ UI.clientButton({
            'dataUrl': path(
            'oro_activity_context', {
                id:    entity.id,
                activity: oro_class_name(entity, true)
            }),
            'aCss': 'no-hash',
            'iCss': 'fa-link hide-text',
            'dataId': entity.id,
            'label' : 'oro.activity.contexts.add_context.label'|trans,
            'widget' : {
                'type' : 'dialog',
                'multiple' : true,
                'refresh-widget-alias': 'activity-list-widget',
                'options' : {
                    'alias': 'activity-context-dialog',
                    'dialogOptions' : {
                        'title' : 'oro.activity.contexts.add_context_entity.label'|trans,
                        'allowMaximize': true,
                        'allowMinimize': true,
                        'modal': true,
                        'dblclick': 'maximize',
                        'maximizedHeightDecreaseBy': 'minimize-bar',
                        'width': 1000,
                        'height': 600
                    }
                }
            }
        }) }}
    {% endif %}
{% endmacro %}
", "@OroActivity/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ActivityBundle/Resources/views/macros.html.twig");
    }
}
