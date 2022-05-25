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

/* @OroWorkflow/Widget/widget/buttons.html.twig */
class __TwigTemplate_ecff5e114a6aff8d7962c4d344650129 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/Widget/widget/buttons.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Widget/widget/buttons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Widget/widget/buttons.html.twig"));

        // line 1
        $macros["workflowMacros"] = $this->macros["workflowMacros"] = $this->loadTemplate("@OroWorkflow/macros.html.twig", "@OroWorkflow/Widget/widget/buttons.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workflowsData"]) || array_key_exists("workflowsData", $context) ? $context["workflowsData"] : (function () { throw new RuntimeError('Variable "workflowsData" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["workflowName"] => $context["workflow"]) {
            // line 5
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workflow"], "transitionsData", [], "any", false, false, false, 5)) || twig_get_attribute($this->env, $this->source, $context["workflow"], "resetAllowed", [], "any", false, false, false, 5))) {
                // line 6
                echo "            ";
                $context["blockId"] = ("entity-transitions-container-" . twig_random($this->env));
                // line 7
                echo "            <div class=\"btn-group\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["blockId"]) || array_key_exists("blockId", $context) ? $context["blockId"] : (function () { throw new RuntimeError('Variable "blockId" does not exist.', 7, $this->source); })()), "html", null, true);
                echo "\">
                ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["workflow"], "transitionsData", [], "any", false, false, false, 8));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 9
                    echo "                    ";
                    // line 10
                    echo "                    ";
                    // line 11
                    echo "                    ";
                    $context["transitionData"] = ["enabled" => twig_get_attribute($this->env, $this->source,                     // line 12
$context["data"], "isAllowed", [], "any", false, false, false, 12), "message" => twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 13
$context["data"], "transition", [], "any", false, false, false, 13), "message", [], "any", false, false, false, 13), [], "workflows"), "html", null, true)), "transition-condition-messages" => twig_get_attribute($this->env, $this->source,                     // line 14
$context["data"], "errors", [], "any", false, false, false, 14)];
                    // line 16
                    echo "
                    ";
                    // line 17
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "transition", [], "any", false, false, false, 17), "displayType", [], "any", false, false, false, 17) == "dialog")) {
                        // line 18
                        echo "                        ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["data"], "workflowItem", [], "any", true, true, false, 18)) {
                            // line 19
                            echo "                            ";
                            $context["data"] = twig_array_merge($context["data"], ["workflowItem" => null]);
                            // line 20
                            echo "                            ";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "transition", [], "any", false, false, false, 20), "hasForm", [], "method", false, false, false, 20)) {
                                // line 21
                                echo "                                ";
                                $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 21, $this->source); })()), ["dialog-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_workflow_widget_start_transition_form", ["workflowName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                 // line 24
$context["data"], "workflow", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "transitionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                                 // line 25
$context["data"], "transition", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "entityId" =>                                 // line 26
(isset($context["entity_id"]) || array_key_exists("entity_id", $context) ? $context["entity_id"] : (function () { throw new RuntimeError('Variable "entity_id" does not exist.', 26, $this->source); })())])]);
                                // line 29
                                echo "                            ";
                            }
                            // line 30
                            echo "
                            ";
                            // line 32
                            echo "                            ";
                            $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 32, $this->source); })()), ["transition-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_workflow_start", ["workflowName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 35
$context["data"], "workflow", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "transitionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 36
$context["data"], "transition", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "entityId" =>                             // line 37
(isset($context["entity_id"]) || array_key_exists("entity_id", $context) ? $context["entity_id"] : (function () { throw new RuntimeError('Variable "entity_id" does not exist.', 37, $this->source); })())])]);
                            // line 40
                            echo "                        ";
                        }
                        // line 41
                        echo "                    ";
                    } else {
                        // line 42
                        echo "                        ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["data"], "workflowItem", [], "any", true, true, false, 42)) {
                            // line 43
                            echo "                            ";
                            $context["data"] = twig_array_merge($context["data"], ["workflowItem" => null]);
                            // line 44
                            echo "                            ";
                            $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 44, $this->source); })()), ["transition-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_workflow_start_transition_form", ["workflowName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 47
$context["data"], "workflow", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "transitionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 48
$context["data"], "transition", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "entityId" =>                             // line 49
(isset($context["entity_id"]) || array_key_exists("entity_id", $context) ? $context["entity_id"] : (function () { throw new RuntimeError('Variable "entity_id" does not exist.', 49, $this->source); })())])]);
                            // line 52
                            echo "                        ";
                        } else {
                            // line 53
                            echo "                            ";
                            $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 53, $this->source); })()), ["transition-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_workflow_transition_form", ["transitionName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 56
$context["data"], "transition", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "workflowItemId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                             // line 57
$context["data"], "workflowItem", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)])]);
                            // line 60
                            echo "                        ";
                        }
                        // line 61
                        echo "                    ";
                    }
                    // line 62
                    echo "
                    ";
                    // line 63
                    echo twig_call_macro($macros["workflowMacros"], "macro_renderTransitionButton", [twig_get_attribute($this->env, $this->source,                     // line 64
$context["data"], "workflow", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source,                     // line 65
$context["data"], "transition", [], "any", false, false, false, 65), twig_get_attribute($this->env, $this->source,                     // line 66
$context["data"], "workflowItem", [], "any", false, false, false, 66),                     // line 67
(isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 67, $this->source); })())], 63, $context, $this->getSourceContext());
                    // line 68
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "            </div>
        ";
            }
            // line 72
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['workflowName'], $context['workflow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroWorkflow/Widget/widget/buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 73,  165 => 72,  161 => 70,  154 => 68,  152 => 67,  151 => 66,  150 => 65,  149 => 64,  148 => 63,  145 => 62,  142 => 61,  139 => 60,  137 => 57,  136 => 56,  134 => 53,  131 => 52,  129 => 49,  128 => 48,  127 => 47,  125 => 44,  122 => 43,  119 => 42,  116 => 41,  113 => 40,  111 => 37,  110 => 36,  109 => 35,  107 => 32,  104 => 30,  101 => 29,  99 => 26,  98 => 25,  97 => 24,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  84 => 17,  81 => 16,  79 => 14,  78 => 13,  77 => 12,  75 => 11,  73 => 10,  71 => 9,  67 => 8,  62 => 7,  59 => 6,  56 => 5,  52 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroWorkflow/macros.html.twig' as workflowMacros %}

<div class=\"widget-content\">
    {% for workflowName, workflow in workflowsData %}
        {% if workflow.transitionsData|length or workflow.resetAllowed %}
            {% set blockId = 'entity-transitions-container-' ~ random() %}
            <div class=\"btn-group\" id=\"{{ blockId }}\">
                {% for data in workflow.transitionsData %}
                    {# Show button for start or transit workflow #}
                    {# Transaltions temporary disabled due to BAP-5355 #}
                    {% set transitionData = {
                        'enabled': data.isAllowed,
                        'message': data.transition.message|trans({},'workflows')|nl2br,
                        'transition-condition-messages': data.errors
                    } %}

                    {% if data.transition.displayType == 'dialog' %}
                        {% if data.workflowItem is not defined %}
                            {% set data = data|merge({'workflowItem': null}) %}
                            {% if data.transition.hasForm() %}
                                {% set transitionData = transitionData|merge({'dialog-url': path(
                                    'oro_workflow_widget_start_transition_form',
                                    {
                                        workflowName: data.workflow.name,
                                        transitionName: data.transition.name,
                                        entityId: entity_id
                                    })
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
                                    entityId: entity_id
                                })
                            }) %}
                        {% else %}
                            {% set transitionData = transitionData|merge({'transition-url': path(
                                'oro_workflow_transition_form',
                                {
                                    transitionName: data.transition.name,
                                    workflowItemId: data.workflowItem.id
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
    {% endfor %}
</div>
", "@OroWorkflow/Widget/widget/buttons.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/Widget/widget/buttons.html.twig");
    }
}
