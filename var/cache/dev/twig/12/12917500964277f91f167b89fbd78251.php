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

/* @OroWorkflow/Widget/widget/entityWorkflows.html.twig */
class __TwigTemplate_a07a23365bce38a3d6eca36966e428aa extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/Widget/widget/entityWorkflows.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Widget/widget/entityWorkflows.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Widget/widget/entityWorkflows.html.twig"));

        // line 1
        $macros["workflowMacros"] = $this->macros["workflowMacros"] = $this->loadTemplate("@OroWorkflow/macros.html.twig", "@OroWorkflow/Widget/widget/entityWorkflows.html.twig", 1)->unwrap();
        // line 2
        if ((twig_length_filter($this->env, (isset($context["workflows"]) || array_key_exists("workflows", $context) ? $context["workflows"] : (function () { throw new RuntimeError('Variable "workflows" does not exist.', 2, $this->source); })())) > 0)) {
            // line 3
            echo "    ";
            $context["collapseContainerId"] = ("entityWorkflow" . (isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 3, $this->source); })()));
            // line 4
            echo "<div class=\"widget-content workflow-widget-content\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["workflows"]) || array_key_exists("workflows", $context) ? $context["workflows"] : (function () { throw new RuntimeError('Variable "workflows" does not exist.', 5, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["workflow"]) {
                // line 6
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 6) == 2)) {
                    // line 7
                    echo "        <div class=\"collapse show\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["collapseContainerId"]) || array_key_exists("collapseContainerId", $context) ? $context["collapseContainerId"] : (function () { throw new RuntimeError('Variable "collapseContainerId" does not exist.', 7, $this->source); })()), "html", null, true);
                    echo "\">
        ";
                }
                // line 9
                echo "        ";
                if (((twig_length_filter($this->env, (isset($context["workflows"]) || array_key_exists("workflows", $context) ? $context["workflows"] : (function () { throw new RuntimeError('Variable "workflows" does not exist.', 9, $this->source); })())) > 1) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 9))) {
                    // line 10
                    echo "            <div class=\"workflow-collapse\">
                <button class=\"btn-light\" data-toggle=\"collapse\"
                        data-target=\"#";
                    // line 12
                    echo twig_escape_filter($this->env, (isset($context["collapseContainerId"]) || array_key_exists("collapseContainerId", $context) ? $context["collapseContainerId"] : (function () { throw new RuntimeError('Variable "collapseContainerId" does not exist.', 12, $this->source); })()), "html", null, true);
                    echo "\" data-collapse-state-id=\"";
                    echo twig_escape_filter($this->env, (isset($context["collapseContainerId"]) || array_key_exists("collapseContainerId", $context) ? $context["collapseContainerId"] : (function () { throw new RuntimeError('Variable "collapseContainerId" does not exist.', 12, $this->source); })()), "html", null, true);
                    echo "\"
                        data-collapsed-title=\"Expand\" data-expanded-title=\"Collapse\" aria-label=\"Expand / Collapse\"
                        aria-expanded=\"true\" title=\"Expand\">
                    <span class=\"fa-icon oro-collapse-icon\" aria-hidden=\"true\"></span>
                </button>
            </div>
        ";
                }
                // line 19
                echo "            <div class=\"workflow-entity ";
                if ((twig_length_filter($this->env, (isset($context["workflows"]) || array_key_exists("workflows", $context) ? $context["workflows"] : (function () { throw new RuntimeError('Variable "workflows" does not exist.', 19, $this->source); })())) == 1)) {
                    echo " only-workflow";
                }
                echo "\">
                <div class=\"workflow-label\">
                    <div class=\"workflow-label-text\" title=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["workflow"], "label", [], "any", false, false, false, 21), [], "workflows"), "html", null, true);
                echo "\">
                        ";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["workflow"], "label", [], "any", false, false, false, 22), [], "workflows"), "html", null, true);
                echo ":
                    </div>
                </div>
                <div class=\"workflow-content-container\">
                    <table class=\"workflow-content\">
                        <tr>
                            <td class=\"workflow-steps\">
                                ";
                // line 29
                $context["isOrdered"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["workflow"], "stepsData", [], "any", false, false, false, 29), "isOrdered", [], "any", false, false, false, 29);
                // line 30
                echo "                                ";
                $context["steps"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["workflow"], "stepsData", [], "any", false, false, false, 30), "steps", [], "any", false, false, false, 30);
                // line 31
                echo "
                                ";
                // line 32
                if (( !twig_get_attribute($this->env, $this->source, $context["workflow"], "isStarted", [], "any", false, false, false, 32) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workflow"], "transitionsData", [], "any", false, false, false, 32)) > 1))) {
                    // line 33
                    echo "                                    ";
                    $context["steps"] = [0 => ["active" => false, "label" => "...", "possibleStepsCount" => 0, "final" => false]];
                    // line 34
                    echo "                                ";
                }
                // line 35
                echo "
                                <div class=\"workflow-scroller\">
                                    <ul class=\"workflow-steps-list ";
                // line 37
                if ( !twig_get_attribute($this->env, $this->source, $context["workflow"], "isStarted", [], "any", false, false, false, 37)) {
                    echo "workflow-not-started";
                }
                echo "\">
                                        ";
                // line 38
                $context["activeRendered"] =  !twig_get_attribute($this->env, $this->source, $context["workflow"], "isStarted", [], "any", false, false, false, 38);
                // line 39
                echo "                                        ";
                $context["manyVariantsFound"] = false;
                // line 40
                echo "                                        ";
                $context["manyVariantsRendered"] = false;
                // line 41
                echo "
                                        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 42, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
                    // line 43
                    echo "                                            ";
                    if ( !(isset($context["manyVariantsRendered"]) || array_key_exists("manyVariantsRendered", $context) ? $context["manyVariantsRendered"] : (function () { throw new RuntimeError('Variable "manyVariantsRendered" does not exist.', 43, $this->source); })())) {
                        // line 44
                        echo "                                                ";
                        $context["final"] = twig_get_attribute($this->env, $this->source, $context["step"], "final", [], "any", false, false, false, 44);
                        // line 45
                        echo "                                                ";
                        if ((isset($context["isOrdered"]) || array_key_exists("isOrdered", $context) ? $context["isOrdered"] : (function () { throw new RuntimeError('Variable "isOrdered" does not exist.', 45, $this->source); })())) {
                            // line 46
                            echo "                                                    ";
                            $context["active"] = twig_get_attribute($this->env, $this->source, $context["step"], "active", [], "any", false, false, false, 46);
                            // line 47
                            echo "
                                                    ";
                            // line 48
                            if (((isset($context["activeRendered"]) || array_key_exists("activeRendered", $context) ? $context["activeRendered"] : (function () { throw new RuntimeError('Variable "activeRendered" does not exist.', 48, $this->source); })()) && (isset($context["manyVariantsFound"]) || array_key_exists("manyVariantsFound", $context) ? $context["manyVariantsFound"] : (function () { throw new RuntimeError('Variable "manyVariantsFound" does not exist.', 48, $this->source); })()))) {
                                // line 49
                                echo "                                                        ";
                                $context["manyVariantsRendered"] = true;
                                // line 50
                                echo "                                                        ";
                                $context["step"] = twig_array_merge($context["step"], ["label" => "..."]);
                                // line 51
                                echo "                                                    ";
                            }
                            // line 52
                            echo "
                                                    ";
                            // line 53
                            if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 53, $this->source); })()) &&  !(isset($context["activeRendered"]) || array_key_exists("activeRendered", $context) ? $context["activeRendered"] : (function () { throw new RuntimeError('Variable "activeRendered" does not exist.', 53, $this->source); })()))) {
                                // line 54
                                echo "                                                        ";
                                $context["activeRendered"] = true;
                                // line 55
                                echo "                                                    ";
                            }
                            // line 56
                            echo "
                                                    ";
                            // line 57
                            if (((twig_get_attribute($this->env, $this->source, $context["step"], "possibleStepsCount", [], "any", false, false, false, 57) > 1) && (isset($context["activeRendered"]) || array_key_exists("activeRendered", $context) ? $context["activeRendered"] : (function () { throw new RuntimeError('Variable "activeRendered" does not exist.', 57, $this->source); })()))) {
                                // line 58
                                echo "                                                        ";
                                $context["manyVariantsFound"] = true;
                                // line 59
                                echo "                                                    ";
                            }
                            // line 60
                            echo "
                                                    <li class=\"workflow-steps-item workflow-ordered-steps";
                            // line 61
                            if ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 61, $this->source); })())) {
                                echo " active";
                            }
                            if ((isset($context["final"]) || array_key_exists("final", $context) ? $context["final"] : (function () { throw new RuntimeError('Variable "final" does not exist.', 61, $this->source); })())) {
                                echo " workflow-step-final";
                            }
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["step"], "label", [], "any", false, false, false, 61), [], "workflows"), "html", null, true);
                            echo "\">
                                                        <span class=\"workflow-step-name\">";
                            // line 62
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["step"], "label", [], "any", false, false, false, 62), [], "workflows"), "html", null, true);
                            echo "</span>
                                                    </li>
                                                ";
                        } else {
                            // line 65
                            echo "                                                    <li class=\"workflow-steps-item workflow-unordered-steps\">
                                                        <span class=\"workflow-unordered-step-name";
                            // line 66
                            if ((isset($context["final"]) || array_key_exists("final", $context) ? $context["final"] : (function () { throw new RuntimeError('Variable "final" does not exist.', 66, $this->source); })())) {
                                echo " workflow-step-final-name";
                            }
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["step"], "label", [], "any", false, false, false, 66), [], "workflows"), "html", null, true);
                            echo "</span>
                                                    </li>
                                                ";
                        }
                        // line 69
                        echo "                                            ";
                    }
                    // line 70
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                                    </ul>
                                </div>
                            </td>
                            ";
                // line 74
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["workflow"], "transitionsData", [], "any", false, false, false, 74)) != 0)) {
                    // line 75
                    echo "                                <td class=\"workflow-controls\">
                                    <div class=\"workflow-buttons-scroller\">
                                        ";
                    // line 77
                    $this->loadTemplate("@OroWorkflow/Widget/widget/button.html.twig", "@OroWorkflow/Widget/widget/entityWorkflows.html.twig", 77)->display(twig_array_merge($context, ["workflow" => $context["workflow"], "entity_id" => (isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 77, $this->source); })()), "originalUrl" => (isset($context["originalUrl"]) || array_key_exists("originalUrl", $context) ? $context["originalUrl"] : (function () { throw new RuntimeError('Variable "originalUrl" does not exist.', 77, $this->source); })())]));
                    // line 78
                    echo "                                    </div>
                                </td>
                            ";
                }
                // line 81
                echo "                        </tr>
                    </table>
                </div>
            </div>
        ";
                // line 85
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 85) > 1) && twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 85))) {
                    // line 86
                    echo "        </div>
        ";
                }
                // line 88
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workflow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "</div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroWorkflow/Widget/widget/entityWorkflows.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 89,  284 => 88,  280 => 86,  278 => 85,  272 => 81,  267 => 78,  265 => 77,  261 => 75,  259 => 74,  254 => 71,  248 => 70,  245 => 69,  235 => 66,  232 => 65,  226 => 62,  215 => 61,  212 => 60,  209 => 59,  206 => 58,  204 => 57,  201 => 56,  198 => 55,  195 => 54,  193 => 53,  190 => 52,  187 => 51,  184 => 50,  181 => 49,  179 => 48,  176 => 47,  173 => 46,  170 => 45,  167 => 44,  164 => 43,  160 => 42,  157 => 41,  154 => 40,  151 => 39,  149 => 38,  143 => 37,  139 => 35,  136 => 34,  133 => 33,  131 => 32,  128 => 31,  125 => 30,  123 => 29,  113 => 22,  109 => 21,  101 => 19,  89 => 12,  85 => 10,  82 => 9,  76 => 7,  73 => 6,  56 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroWorkflow/macros.html.twig' as workflowMacros %}
{% if workflows|length > 0 %}
    {% set collapseContainerId = 'entityWorkflow' ~ entityId %}
<div class=\"widget-content workflow-widget-content\">
    {% for workflow in workflows %}
        {% if loop.index == 2 %}
        <div class=\"collapse show\" id=\"{{ collapseContainerId }}\">
        {% endif %}
        {% if workflows|length > 1 and loop.first %}
            <div class=\"workflow-collapse\">
                <button class=\"btn-light\" data-toggle=\"collapse\"
                        data-target=\"#{{ collapseContainerId }}\" data-collapse-state-id=\"{{ collapseContainerId }}\"
                        data-collapsed-title=\"Expand\" data-expanded-title=\"Collapse\" aria-label=\"Expand / Collapse\"
                        aria-expanded=\"true\" title=\"Expand\">
                    <span class=\"fa-icon oro-collapse-icon\" aria-hidden=\"true\"></span>
                </button>
            </div>
        {% endif %}
            <div class=\"workflow-entity {% if workflows|length == 1 %} only-workflow{% endif %}\">
                <div class=\"workflow-label\">
                    <div class=\"workflow-label-text\" title=\"{{ workflow.label|trans({},'workflows') }}\">
                        {{ workflow.label|trans({},'workflows') }}:
                    </div>
                </div>
                <div class=\"workflow-content-container\">
                    <table class=\"workflow-content\">
                        <tr>
                            <td class=\"workflow-steps\">
                                {% set isOrdered = workflow.stepsData.isOrdered %}
                                {% set steps = workflow.stepsData.steps %}

                                {% if not workflow.isStarted and workflow.transitionsData|length > 1 %}
                                    {% set steps = [{active: false, label: '...', possibleStepsCount: 0, final: false}] %}
                                {% endif %}

                                <div class=\"workflow-scroller\">
                                    <ul class=\"workflow-steps-list {% if not workflow.isStarted %}workflow-not-started{% endif %}\">
                                        {% set activeRendered = not workflow.isStarted %}
                                        {% set manyVariantsFound = false %}
                                        {% set manyVariantsRendered = false %}

                                        {% for step in steps %}
                                            {% if not manyVariantsRendered %}
                                                {% set final = step.final %}
                                                {% if isOrdered %}
                                                    {% set active = step.active %}

                                                    {% if activeRendered and manyVariantsFound %}
                                                        {% set manyVariantsRendered = true %}
                                                        {% set step = step|merge({label: '...'}) %}
                                                    {% endif %}

                                                    {% if active and not activeRendered %}
                                                        {% set activeRendered = true %}
                                                    {% endif %}

                                                    {% if step.possibleStepsCount > 1 and activeRendered %}
                                                        {% set manyVariantsFound = true %}
                                                    {% endif %}

                                                    <li class=\"workflow-steps-item workflow-ordered-steps{% if active %} active{% endif %}{% if final %} workflow-step-final{% endif %}\" title=\"{{ step.label|trans({},'workflows') }}\">
                                                        <span class=\"workflow-step-name\">{{ step.label|trans({},'workflows') }}</span>
                                                    </li>
                                                {% else %}
                                                    <li class=\"workflow-steps-item workflow-unordered-steps\">
                                                        <span class=\"workflow-unordered-step-name{% if final %} workflow-step-final-name{% endif %}\">{{ step.label|trans({},'workflows') }}</span>
                                                    </li>
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                    </ul>
                                </div>
                            </td>
                            {% if workflow.transitionsData|length != 0 %}
                                <td class=\"workflow-controls\">
                                    <div class=\"workflow-buttons-scroller\">
                                        {% include '@OroWorkflow/Widget/widget/button.html.twig' with {'workflow': workflow, 'entity_id': entityId, 'originalUrl': originalUrl} %}
                                    </div>
                                </td>
                            {% endif %}
                        </tr>
                    </table>
                </div>
            </div>
        {% if loop.index > 1 and loop.last %}
        </div>
        {% endif %}
    {% endfor %}
</div>
{% endif %}
", "@OroWorkflow/Widget/widget/entityWorkflows.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/Widget/widget/entityWorkflows.html.twig");
    }
}
