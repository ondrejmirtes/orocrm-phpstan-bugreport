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

/* @OroTask/Task/widget/info.html.twig */
class __TwigTemplate_7be95852b17bb3e4078c6aa8f1ee6fbe extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTask/Task/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTask/Task/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTask/Task/widget/info.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTask/Task/widget/info.html.twig", 1)->unwrap();
        // line 2
        $macros["AC"] = $this->macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroTask/Task/widget/info.html.twig", 2)->unwrap();
        // line 3
        $macros["U"] = $this->macros["U"] = $this->loadTemplate("@OroUser/macros.html.twig", "@OroTask/Task/widget/info.html.twig", 3)->unwrap();
        // line 4
        echo "
<div class=\"widget-content form-horizontal box-content row-fluid\">
    <div class=\"responsive-block\">
        ";
        // line 8
        echo "        ";
        if ((array_key_exists("renderContexts", $context) && (isset($context["renderContexts"]) || array_key_exists("renderContexts", $context) ? $context["renderContexts"] : (function () { throw new RuntimeError('Variable "renderContexts" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "            <div class=\"activity-context-activity-list\">
                ";
            // line 10
            echo twig_call_macro($macros["AC"], "macro_activity_contexts", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 10, $this->source); })()), true], 10, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 13
        echo "        ";
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.subject.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "subject", [], "any", false, false, false, 13)], 13, $context, $this->getSourceContext());
        echo "
        ";
        // line 14
        echo twig_call_macro($macros["UI"], "macro_renderSwitchableHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.description.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14)], 14, $context, $this->getSourceContext());
        echo "
        ";
        // line 15
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.due_date.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 15, $this->source); })()), "dueDate", [], "any", false, false, false, 15))], 15, $context, $this->getSourceContext());
        echo "
        ";
        // line 16
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.task_priority.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), "taskPriority", [], "any", false, false, false, 16)], 16, $context, $this->getSourceContext());
        echo "
        ";
        // line 17
        ob_start();
        // line 18
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "owner", [], "any", false, false, false, 18)) {
            // line 19
            echo "                ";
            echo twig_call_macro($macros["U"], "macro_render_user_name", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "owner", [], "any", false, false, false, 19)], 19, $context, $this->getSourceContext());
            echo "
                ";
            // line 20
            echo twig_call_macro($macros["U"], "macro_user_business_unit_name", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "owner", [], "any", false, false, false, 20)], 20, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 22
        echo "        ";
        $context["ownerData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        echo "        ";
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.owner.label"), (isset($context["ownerData"]) || array_key_exists("ownerData", $context) ? $context["ownerData"] : (function () { throw new RuntimeError('Variable "ownerData" does not exist.', 23, $this->source); })())], 23, $context, $this->getSourceContext());
        echo "
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroTask/Task/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 23,  101 => 22,  96 => 20,  91 => 19,  88 => 18,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  69 => 13,  63 => 10,  60 => 9,  57 => 8,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% import \"@OroActivity/macros.html.twig\" as AC %}
{% import '@OroUser/macros.html.twig' as U %}

<div class=\"widget-content form-horizontal box-content row-fluid\">
    <div class=\"responsive-block\">
        {# Display contexts targets in the activity list item view #}
        {% if renderContexts is defined and renderContexts %}
            <div class=\"activity-context-activity-list\">
                {{ AC.activity_contexts(entity, target, true) }}
            </div>
        {% endif %}
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
</div>
", "@OroTask/Task/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-task-bundle/Resources/views/Task/widget/info.html.twig");
    }
}
