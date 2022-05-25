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

/* @OroWorkflow/WorkflowDefinition/widget/info.html.twig */
class __TwigTemplate_83b33d1c724e27d2841c13ce0cd4bf1e extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/WorkflowDefinition/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/WorkflowDefinition/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/WorkflowDefinition/widget/info.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/WorkflowDefinition/widget/info.html.twig", 1)->unwrap();
        // line 2
        $macros["workflowMacros"] = $this->macros["workflowMacros"] = $this->loadTemplate("@OroWorkflow/macros.html.twig", "@OroWorkflow/WorkflowDefinition/widget/info.html.twig", 2)->unwrap();
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.label.label"), (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "label", [], "any", false, false, false, 7), [], "workflows")) . twig_call_macro($macros["workflowMacros"], "macro_renderGoToTranslationsIconByLink", [twig_get_attribute($this->env, $this->source, (isset($context["translateLinks"]) || array_key_exists("translateLinks", $context) ? $context["translateLinks"] : (function () { throw new RuntimeError('Variable "translateLinks" does not exist.', 7, $this->source); })()), "label", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext()))], 7, $context, $this->getSourceContext());
        echo "

            ";
        // line 9
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.related_entity.label"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue(twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "relatedEntity", [], "any", false, false, false, 11), "label"))], 9, $context, $this->getSourceContext());
        // line 12
        echo "
            ";
        // line 13
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.block.view.workflow.default_step"), ((twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "startStep", [], "any", false, false, false, 15)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "startStep", [], "any", false, false, false, 15), "label", [], "any", false, false, false, 15), [], "workflows")) : (""))], 13, $context, $this->getSourceContext());
        // line 16
        echo "
            ";
        // line 17
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.steps_display_ordered.label"), ((twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "stepsDisplayOrdered", [], "any", false, false, false, 19)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No")))], 17, $context, $this->getSourceContext());
        // line 20
        echo "
            ";
        // line 21
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.priority.label"), twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })()), "priority", [], "any", false, false, false, 23)], 21, $context, $this->getSourceContext());
        // line 24
        echo "

            ";
        // line 26
        ob_start();
        // line 27
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "exclusiveActiveGroups", [], "any", false, false, false, 27))) {
            // line 28
            echo "                    ";
            echo twig_call_macro($macros["UI"], "macro_renderList", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "exclusiveActiveGroups", [], "any", false, false, false, 28)], 28, $context, $this->getSourceContext());
            echo "
                ";
        } else {
            // line 30
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
            echo "
                ";
        }
        // line 32
        echo "            ";
        $context["activeGroups"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
            ";
        // line 34
        ob_start();
        // line 35
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 35, $this->source); })()), "exclusiveRecordGroups", [], "any", false, false, false, 35))) {
            // line 36
            echo "                    ";
            echo twig_call_macro($macros["UI"], "macro_renderList", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })()), "exclusiveRecordGroups", [], "any", false, false, false, 36)], 36, $context, $this->getSourceContext());
            echo "
                ";
        } else {
            // line 38
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
            echo "
                ";
        }
        // line 40
        echo "            ";
        $context["recordGroups"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
            ";
        // line 42
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.exclusive_active_groups.label"), (isset($context["activeGroups"]) || array_key_exists("activeGroups", $context) ? $context["activeGroups"] : (function () { throw new RuntimeError('Variable "activeGroups" does not exist.', 42, $this->source); })())], 42, $context, $this->getSourceContext());
        echo "
            ";
        // line 43
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.exclusive_record_groups.label"), (isset($context["recordGroups"]) || array_key_exists("recordGroups", $context) ? $context["recordGroups"] : (function () { throw new RuntimeError('Variable "recordGroups" does not exist.', 43, $this->source); })())], 43, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroWorkflow/WorkflowDefinition/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 43,  132 => 42,  129 => 41,  126 => 40,  120 => 38,  114 => 36,  111 => 35,  109 => 34,  106 => 33,  103 => 32,  97 => 30,  91 => 28,  88 => 27,  86 => 26,  82 => 24,  80 => 23,  79 => 21,  76 => 20,  74 => 19,  73 => 17,  70 => 16,  68 => 15,  67 => 13,  64 => 12,  62 => 11,  61 => 9,  56 => 7,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroWorkflow/macros.html.twig' as workflowMacros %}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            {{ UI.renderHtmlProperty('oro.workflow.workflowdefinition.label.label'|trans, entity.label|trans({},'workflows')|e ~ workflowMacros.renderGoToTranslationsIconByLink(translateLinks.label) ) }}

            {{ UI.renderProperty(
                'oro.workflow.workflowdefinition.related_entity.label'|trans,
                oro_entity_config_value(entity.relatedEntity, 'label')|trans
            ) }}
            {{ UI.renderProperty(
                'oro.workflow.block.view.workflow.default_step'|trans,
                entity.startStep ? entity.startStep.label|trans({},'workflows') : ''
            ) }}
            {{ UI.renderProperty(
                'oro.workflow.workflowdefinition.steps_display_ordered.label'|trans,
                entity.stepsDisplayOrdered ? 'Yes'|trans : 'No'|trans
            ) }}
            {{ UI.renderProperty(
                'oro.workflow.workflowdefinition.priority.label'|trans,
                entity.priority
            ) }}

            {% set activeGroups %}
                {% if entity.exclusiveActiveGroups is not empty %}
                    {{ UI.renderList(entity.exclusiveActiveGroups) }}
                {% else %}
                    {{ 'N/A'|trans }}
                {% endif %}
            {% endset %}

            {% set recordGroups %}
                {% if entity.exclusiveRecordGroups is not empty %}
                    {{ UI.renderList(entity.exclusiveRecordGroups) }}
                {% else %}
                    {{ 'N/A'|trans }}
                {% endif %}
            {% endset %}

            {{ UI.renderHtmlProperty('oro.workflow.workflowdefinition.exclusive_active_groups.label'|trans, activeGroups) }}
            {{ UI.renderHtmlProperty('oro.workflow.workflowdefinition.exclusive_record_groups.label'|trans, recordGroups) }}
        </div>
    </div>
</div>
", "@OroWorkflow/WorkflowDefinition/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/WorkflowDefinition/widget/info.html.twig");
    }
}
