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

/* @OroWorkflow/Widget/widget/button.html.twig */
class __TwigTemplate_7285bc6201eda954d26348c1ac85b6e2 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/Widget/widget/button.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Widget/widget/button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Widget/widget/button.html.twig"));

        // line 1
        $macros["workflowMacros"] = $this->macros["workflowMacros"] = $this->loadTemplate("@OroWorkflow/macros.html.twig", "@OroWorkflow/Widget/widget/button.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["workflow"]) || array_key_exists("workflow", $context) ? $context["workflow"] : (function () { throw new RuntimeError('Variable "workflow" does not exist.', 3, $this->source); })()), "transitionsData", [], "any", false, false, false, 3)) || ((twig_get_attribute($this->env, $this->source, ($context["workflow"] ?? null), "resetAllowed", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["workflow"] ?? null), "resetAllowed", [], "any", false, false, false, 3), false)) : (false)))) {
            // line 4
            echo "    ";
            $context["blockId"] = ("entity-transitions-container-" . twig_random($this->env));
            // line 5
            echo "    <div class=\"transitions-btn-group\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["blockId"]) || array_key_exists("blockId", $context) ? $context["blockId"] : (function () { throw new RuntimeError('Variable "blockId" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["workflow"]) || array_key_exists("workflow", $context) ? $context["workflow"] : (function () { throw new RuntimeError('Variable "workflow" does not exist.', 6, $this->source); })()), "transitionsData", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 7
                echo "            ";
                // line 8
                echo "            ";
                $context["transitionLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "transition", [], "any", false, false, false, 8), "label", [], "any", false, false, false, 8), [], "workflows");
                // line 9
                echo "
            ";
                // line 10
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "transition", [], "any", false, true, false, 10), "frontendOptions", [], "any", false, true, false, 10), "message", [], "any", true, true, false, 10) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "transition", [], "any", false, true, false, 10), "frontendOptions", [], "any", false, true, false, 10), "message", [], "any", false, true, false, 10), "content", [], "any", true, true, false, 10))) {
                    // line 11
                    echo "                ";
                    $context["frontendMessage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "transition", [], "any", false, false, false, 11), "frontendOptions", [], "any", false, false, false, 11), "message", [], "any", false, false, false, 11);
                    // line 12
                    echo "
                ";
                    // line 13
                    $context["transitionMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["frontendMessage"]) || array_key_exists("frontendMessage", $context) ? $context["frontendMessage"] : (function () { throw new RuntimeError('Variable "frontendMessage" does not exist.', 13, $this->source); })()), "content", [], "any", false, false, false, 13), ((twig_get_attribute($this->env, $this->source, ($context["frontendMessage"] ?? null), "message_parameters", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["frontendMessage"] ?? null), "message_parameters", [], "any", false, false, false, 13), [])) : ([])), "workflows");
                    // line 14
                    echo "                ";
                    if (((isset($context["transitionMessage"]) || array_key_exists("transitionMessage", $context) ? $context["transitionMessage"] : (function () { throw new RuntimeError('Variable "transitionMessage" does not exist.', 14, $this->source); })()) && ((isset($context["transitionMessage"]) || array_key_exists("transitionMessage", $context) ? $context["transitionMessage"] : (function () { throw new RuntimeError('Variable "transitionMessage" does not exist.', 14, $this->source); })()) != twig_get_attribute($this->env, $this->source, (isset($context["frontendMessage"]) || array_key_exists("frontendMessage", $context) ? $context["frontendMessage"] : (function () { throw new RuntimeError('Variable "frontendMessage" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14)))) {
                        // line 15
                        echo "                    ";
                        // line 16
                        echo "                    ";
                        $context["message"] = ["content" => twig_nl2br(twig_escape_filter($this->env,                         // line 17
(isset($context["transitionMessage"]) || array_key_exists("transitionMessage", $context) ? $context["transitionMessage"] : (function () { throw new RuntimeError('Variable "transitionMessage" does not exist.', 17, $this->source); })()), "html", null, true)), "title" => ((twig_get_attribute($this->env, $this->source,                         // line 18
($context["frontendMessage"] ?? null), "title", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["frontendMessage"] ?? null), "title", [], "any", false, false, false, 18), (isset($context["transitionLabel"]) || array_key_exists("transitionLabel", $context) ? $context["transitionLabel"] : (function () { throw new RuntimeError('Variable "transitionLabel" does not exist.', 18, $this->source); })()))) : ((isset($context["transitionLabel"]) || array_key_exists("transitionLabel", $context) ? $context["transitionLabel"] : (function () { throw new RuntimeError('Variable "transitionLabel" does not exist.', 18, $this->source); })())))];
                        // line 20
                        echo "                ";
                    }
                    // line 21
                    echo "            ";
                }
                // line 22
                echo "
            ";
                // line 23
                $context["transitionData"] = ["enabled" => twig_get_attribute($this->env, $this->source,                 // line 24
$context["data"], "isAllowed", [], "any", false, false, false, 24), "transition-label" =>                 // line 25
(isset($context["transitionLabel"]) || array_key_exists("transitionLabel", $context) ? $context["transitionLabel"] : (function () { throw new RuntimeError('Variable "transitionLabel" does not exist.', 25, $this->source); })()), "message" => json_encode(((                // line 26
array_key_exists("message", $context)) ? (_twig_default_filter((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 26, $this->source); })()), [])) : ([]))), "confirmation" => json_encode(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 27
$context["data"], "transition", [], "any", false, true, false, 27), "frontendOptions", [], "any", false, true, false, 27), "confirmation", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "transition", [], "any", false, true, false, 27), "frontendOptions", [], "any", false, true, false, 27), "confirmation", [], "any", false, false, false, 27), [])) : ([]))), "transition-condition-messages" => twig_get_attribute($this->env, $this->source,                 // line 28
$context["data"], "errors", [], "any", false, false, false, 28)];
                // line 30
                echo "
            ";
                // line 31
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "transition", [], "any", false, false, false, 31), "displayType", [], "any", false, false, false, 31) == "dialog")) {
                    // line 32
                    echo "                ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["data"], "workflowItem", [], "any", true, true, false, 32)) {
                        // line 33
                        echo "                    ";
                        $context["data"] = twig_array_merge($context["data"], ["workflowItem" => null]);
                        // line 34
                        echo "                    ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "transition", [], "any", false, false, false, 34), "hasForm", [], "method", false, false, false, 34)) {
                            // line 35
                            echo "                        ";
                            $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 35, $this->source); })()), ["dialog-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_workflow_widget_start_transition_form", ["workflowName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 39
$context["data"], "workflow", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "transitionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 40
$context["data"], "transition", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "entityId" =>                             // line 41
(isset($context["entity_id"]) || array_key_exists("entity_id", $context) ? $context["entity_id"] : (function () { throw new RuntimeError('Variable "entity_id" does not exist.', 41, $this->source); })())]), "jsDialogWidget" => twig_constant("Oro\\Bundle\\WorkflowBundle\\Button\\AbstractTransitionButton::TRANSITION_JS_DIALOG_WIDGET")]);
                            // line 46
                            echo "                    ";
                        }
                        // line 47
                        echo "
                    ";
                        // line 49
                        echo "                    ";
                        $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 49, $this->source); })()), ["transition-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_workflow_start", ["workflowName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 52
$context["data"], "workflow", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "transitionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 53
$context["data"], "transition", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "entityId" =>                         // line 54
(isset($context["entity_id"]) || array_key_exists("entity_id", $context) ? $context["entity_id"] : (function () { throw new RuntimeError('Variable "entity_id" does not exist.', 54, $this->source); })())])]);
                        // line 57
                        echo "                ";
                    }
                    // line 58
                    echo "            ";
                } else {
                    // line 59
                    echo "                ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["data"], "workflowItem", [], "any", true, true, false, 59)) {
                        // line 60
                        echo "                    ";
                        $context["data"] = twig_array_merge($context["data"], ["workflowItem" => null]);
                        // line 61
                        echo "                    ";
                        $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 61, $this->source); })()), ["transition-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_workflow_start_transition_form", ["workflowName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 64
$context["data"], "workflow", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "transitionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 65
$context["data"], "transition", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "entityId" =>                         // line 66
(isset($context["entity_id"]) || array_key_exists("entity_id", $context) ? $context["entity_id"] : (function () { throw new RuntimeError('Variable "entity_id" does not exist.', 66, $this->source); })()), "originalUrl" =>                         // line 67
(isset($context["originalUrl"]) || array_key_exists("originalUrl", $context) ? $context["originalUrl"] : (function () { throw new RuntimeError('Variable "originalUrl" does not exist.', 67, $this->source); })())])]);
                        // line 70
                        echo "                ";
                    } else {
                        // line 71
                        echo "                    ";
                        $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 71, $this->source); })()), ["transition-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_workflow_transition_form", ["transitionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 74
$context["data"], "transition", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74), "workflowItemId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 75
$context["data"], "workflowItem", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75), "originalUrl" =>                         // line 76
(isset($context["originalUrl"]) || array_key_exists("originalUrl", $context) ? $context["originalUrl"] : (function () { throw new RuntimeError('Variable "originalUrl" does not exist.', 76, $this->source); })())])]);
                        // line 79
                        echo "                ";
                    }
                    // line 80
                    echo "            ";
                }
                // line 81
                echo "
            ";
                // line 82
                echo twig_call_macro($macros["workflowMacros"], "macro_renderTransitionButton", [twig_get_attribute($this->env, $this->source,                 // line 83
$context["data"], "workflow", [], "any", false, false, false, 83), twig_get_attribute($this->env, $this->source,                 // line 84
$context["data"], "transition", [], "any", false, false, false, 84), twig_get_attribute($this->env, $this->source,                 // line 85
$context["data"], "workflowItem", [], "any", false, false, false, 85),                 // line 86
(isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 86, $this->source); })())], 82, $context, $this->getSourceContext());
                // line 87
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroWorkflow/Widget/widget/button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 89,  184 => 87,  182 => 86,  181 => 85,  180 => 84,  179 => 83,  178 => 82,  175 => 81,  172 => 80,  169 => 79,  167 => 76,  166 => 75,  165 => 74,  163 => 71,  160 => 70,  158 => 67,  157 => 66,  156 => 65,  155 => 64,  153 => 61,  150 => 60,  147 => 59,  144 => 58,  141 => 57,  139 => 54,  138 => 53,  137 => 52,  135 => 49,  132 => 47,  129 => 46,  127 => 41,  126 => 40,  125 => 39,  123 => 35,  120 => 34,  117 => 33,  114 => 32,  112 => 31,  109 => 30,  107 => 28,  106 => 27,  105 => 26,  104 => 25,  103 => 24,  102 => 23,  99 => 22,  96 => 21,  93 => 20,  91 => 18,  90 => 17,  88 => 16,  86 => 15,  83 => 14,  81 => 13,  78 => 12,  75 => 11,  73 => 10,  70 => 9,  67 => 8,  65 => 7,  61 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroWorkflow/macros.html.twig' as workflowMacros %}

{% if workflow.transitionsData|length or workflow.resetAllowed|default(false) %}
    {% set blockId = 'entity-transitions-container-' ~ random() %}
    <div class=\"transitions-btn-group\" id=\"{{ blockId }}\">
        {% for data in workflow.transitionsData %}
            {# Show button for start or transit workflow #}
            {% set transitionLabel = data.transition.label|trans({},'workflows') %}

            {% if data.transition.frontendOptions.message is defined and data.transition.frontendOptions.message.content is defined %}
                {% set frontendMessage = data.transition.frontendOptions.message %}

                {% set transitionMessage = frontendMessage.content|trans(frontendMessage.message_parameters|default({}), 'workflows') %}
                {% if transitionMessage and transitionMessage != frontendMessage.content %}
                    {# if no translation for message then do not show message #}
                    {% set message = {
                        content: transitionMessage|nl2br,
                        title: frontendMessage.title|default(transitionLabel),
                    } %}
                {% endif %}
            {% endif %}

            {% set transitionData = {
                'enabled': data.isAllowed,
                'transition-label': transitionLabel,
                'message': (message|default({}))|json_encode,
                'confirmation': data.transition.frontendOptions.confirmation|default({})|json_encode,
                'transition-condition-messages': data.errors
            } %}

            {% if data.transition.displayType == 'dialog' %}
                {% if data.workflowItem is not defined %}
                    {% set data = data|merge({'workflowItem': null}) %}
                    {% if data.transition.hasForm() %}
                        {% set transitionData = transitionData|merge({
                            'dialog-url': path(
                                'oro_workflow_widget_start_transition_form',
                                {
                                    workflowName: data.workflow.name,
                                    transitionName: data.transition.name,
                                    entityId: entity_id
                                }
                            ),
                            'jsDialogWidget': constant('Oro\\\\Bundle\\\\WorkflowBundle\\\\Button\\\\AbstractTransitionButton::TRANSITION_JS_DIALOG_WIDGET')
                        }) %}
                    {% endif %}

                    {# New workflow #}
                    {% set transitionData = transitionData|merge({'transition-url': path(
                        'oro_api_workflow_start',
                        {
                            workflowName: data.workflow.name,
                            transitionName: data.transition.name,
                            entityId: entity_id
                        })
                    }) %}
                {% endif %}
            {% else %}
                {% if data.workflowItem is not defined %}
                    {% set data = data|merge({'workflowItem': null}) %}
                    {% set transitionData = transitionData|merge({'transition-url': path(
                        'oro_workflow_start_transition_form',
                        {
                            workflowName: data.workflow.name,
                            transitionName: data.transition.name,
                            entityId: entity_id,
                            originalUrl: originalUrl
                        })
                    }) %}
                {% else %}
                    {% set transitionData = transitionData|merge({'transition-url': path(
                        'oro_workflow_transition_form',
                        {
                            transitionName: data.transition.name,
                            workflowItemId: data.workflowItem.id,
                            originalUrl: originalUrl
                        })
                    }) %}
                {% endif %}
            {% endif %}

            {{ workflowMacros.renderTransitionButton(
                data.workflow,
                data.transition,
                data.workflowItem,
                transitionData
            ) }}
        {% endfor %}
    </div>
{% endif %}
", "@OroWorkflow/Widget/widget/button.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/Widget/widget/button.html.twig");
    }
}
