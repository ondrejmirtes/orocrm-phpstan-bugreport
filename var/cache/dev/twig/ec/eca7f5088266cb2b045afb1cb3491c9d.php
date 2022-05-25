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

/* @OroTask/Task/widget/Calendar/info.html.twig */
class __TwigTemplate_f7f096a62a8827eacf50a3d9e51722a5 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTask/Task/widget/Calendar/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTask/Task/widget/Calendar/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTask/Task/widget/Calendar/info.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTask/Task/widget/Calendar/info.html.twig", 1)->unwrap();
        // line 2
        $macros["U"] = $this->macros["U"] = $this->loadTemplate("@OroUser/macros.html.twig", "@OroTask/Task/widget/Calendar/info.html.twig", 2)->unwrap();
        // line 3
        echo "
<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 7
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.subject.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "subject", [], "any", false, false, false, 7)], 7, $context, $this->getSourceContext());
        echo "
            ";
        // line 8
        echo twig_call_macro($macros["UI"], "macro_renderSwitchableHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.description.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8)], 8, $context, $this->getSourceContext());
        echo "
            ";
        // line 9
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.due_date.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "dueDate", [], "any", false, false, false, 9))], 9, $context, $this->getSourceContext());
        echo "
            ";
        // line 10
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.task_priority.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), "taskPriority", [], "any", false, false, false, 10)], 10, $context, $this->getSourceContext());
        echo "
            ";
        // line 11
        ob_start();
        // line 12
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "owner", [], "any", false, false, false, 12)) {
            // line 13
            echo "                    ";
            echo twig_call_macro($macros["U"], "macro_render_user_name", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "owner", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
            echo "
                    ";
            // line 14
            echo twig_call_macro($macros["U"], "macro_user_business_unit_name", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "owner", [], "any", false, false, false, 14)], 14, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 16
        echo "            ";
        $context["ownerData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        echo "            ";
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.owner.label"), (isset($context["ownerData"]) || array_key_exists("ownerData", $context) ? $context["ownerData"] : (function () { throw new RuntimeError('Variable "ownerData" does not exist.', 17, $this->source); })())], 17, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"widget-actions form-actions\" style=\"display: none;\">
            ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()))) {
            // line 21
            echo "                ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["aCss" => "no-hash", "id" => "btn-remove-calendarevent", "dataUrl" => "oro_api_delete_task", "data" => ["action-name" => "delete"], "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.entity_label")]], 21, $context, $this->getSourceContext());
            // line 27
            echo "
            ";
        }
        // line 29
        echo "            <a class=\"action btn\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_task_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
        echo "\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.view_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })())), "label"))]), "html", null, true);
        // line 31
        echo "</a>
            <a class=\"action btn\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_task_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.edit_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 33, $this->source); })())), "label"))]), "html", null, true);
        // line 34
        echo "</a>
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
        return "@OroTask/Task/widget/Calendar/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  118 => 33,  115 => 32,  112 => 31,  110 => 30,  106 => 29,  102 => 27,  99 => 21,  97 => 20,  90 => 17,  87 => 16,  82 => 14,  77 => 13,  74 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroUser/macros.html.twig' as U %}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            {{ UI.renderProperty('oro.task.subject.label'|trans, entity.subject) }}
            {{ UI.renderSwitchableHtmlProperty('oro.task.description.label'|trans, entity.description) }}
            {{ UI.renderProperty('oro.task.due_date.label'|trans, entity.dueDate|oro_format_datetime) }}
            {{ UI.renderProperty('oro.task.task_priority.label'|trans, entity.taskPriority) }}
            {% set ownerData %}
                {% if entity.owner %}
                    {{ U.render_user_name(entity.owner) }}
                    {{ U.user_business_unit_name(entity.owner) }}
                {% endif %}
            {% endset %}
            {{ UI.renderHtmlProperty('oro.task.owner.label'|trans, ownerData) }}
        </div>
        <div class=\"widget-actions form-actions\" style=\"display: none;\">
            {% if is_granted('DELETE', entity) %}
                {{ UI.deleteButton({
                    'aCss': 'no-hash',
                    'id': 'btn-remove-calendarevent',
                    'dataUrl': 'oro_api_delete_task',
                    'data': {'action-name': 'delete'},
                    'entity_label': 'oro.task.entity_label'|trans
                }) }}
            {% endif %}
            <a class=\"action btn\" href=\"{{ path('oro_task_view', {id: entity.id}) }}\">
                {{- 'oro.ui.view_entity'|trans({'%entityName%': oro_entity_config_value(oro_class_name(entity), 'label')|trans}) -}}
            </a>
            <a class=\"action btn\" href=\"{{ path('oro_task_update', {id: entity.id}) }}\">
                {{- 'oro.ui.edit_entity'|trans({'%entityName%': oro_entity_config_value(oro_class_name(entity), 'label')|trans}) -}}
            </a>
        </div>
    </div>
</div>
", "@OroTask/Task/widget/Calendar/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-task-bundle/Resources/views/Task/widget/Calendar/info.html.twig");
    }
}
