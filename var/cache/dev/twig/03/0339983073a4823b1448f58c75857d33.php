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

/* @OroTask/Task/assignTaskButton.html.twig */
class __TwigTemplate_def9a5462507ca8100fad1a3f399abd8 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTask/Task/assignTaskButton.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTask/Task/assignTaskButton.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTask/Task/assignTaskButton.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTask/Task/assignTaskButton.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        echo twig_call_macro($macros["UI"], "macro_clientButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_task_create", $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getActionParams(        // line 4
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), twig_constant("Oro\\Bundle\\TaskBundle\\EventListener\\FormSetOwnerEventListener::ACTION_ASSIGN"))), "aCss" => "no-hash", "iCss" => "fa-tasks", "dataId" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.assign_entity"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.assign_entity.title"), "widget" => ["type" => "dialog", "multiple" => true, "reload-grid-name" => "user-tasks-grid", "refresh-widget-alias" => "activity-list-widget", "options" => ["alias" => "assign-task-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.task.assign_entity.widget_title", ["%username%" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(        // line 18
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()))]), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]]], 3, $context, $this->getSourceContext());
        // line 27
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroTask/Task/assignTaskButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 27,  54 => 18,  53 => 7,  52 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

{{ UI.clientButton({
    'dataUrl': path('oro_task_create', oro_action_params(entity, constant('Oro\\\\Bundle\\\\TaskBundle\\\\EventListener\\\\FormSetOwnerEventListener::ACTION_ASSIGN'))),
    'aCss': 'no-hash',
    'iCss': 'fa-tasks',
    'dataId': entity.id,
    'label': 'oro.task.assign_entity'|trans,
    'title': 'oro.task.assign_entity.title'|trans,
    'widget' : {
        'type' : 'dialog',
        'multiple' : true,
        'reload-grid-name': 'user-tasks-grid',
        'refresh-widget-alias': 'activity-list-widget',
        'options' : {
            'alias': 'assign-task-dialog',
            'dialogOptions' : {
                'title' : 'oro.task.assign_entity.widget_title'|trans({'%username%': entity|oro_format_name}),
                'allowMaximize': true,
                'allowMinimize': true,
                'dblclick': 'maximize',
                'maximizedHeightDecreaseBy': 'minimize-bar',
                'width': 1000
            }
        }
    }
}) }}
", "@OroTask/Task/assignTaskButton.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-task-bundle/Resources/views/Task/assignTaskButton.html.twig");
    }
}
