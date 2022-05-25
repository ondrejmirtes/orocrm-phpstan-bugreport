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

/* @OroActivityList/ActivityList/js/activityItemTemplate.html.twig */
class __TwigTemplate_03186386a875b863cc19b9e7b4794714 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'activityIcon' => [$this, 'block_activityIcon'],
            'activityActions' => [$this, 'block_activityActions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroActivityList/ActivityList/js/view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroActivityList/ActivityList/js/activityItemTemplate.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivityList/ActivityList/js/activityItemTemplate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivityList/ActivityList/js/activityItemTemplate.html.twig"));

        $this->parent = $this->loadTemplate("@OroActivityList/ActivityList/js/view.html.twig", "@OroActivityList/ActivityList/js/activityItemTemplate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_activityIcon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityIcon", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityIcon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityIcon"));

        // line 4
        echo "    <span class=\"";
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue(((array_key_exists("entityClass", $context)) ? (_twig_default_filter((isset($context["entityClass"]) || array_key_exists("entityClass", $context) ? $context["entityClass"] : (function () { throw new RuntimeError('Variable "entityClass" does not exist.', 4, $this->source); })()))) : ("")), "icon"), "html_attr");
        echo "\" aria-hidden=\"true\"></span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 7
    public function block_activityActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityActions", $this->getTemplateName(), 7));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        // line 8
        echo "    <% var togglerId = _.uniqueId('dropdown-') %>
    <div class=\"vertical-actions activity-actions\">
        <button id=\"<%- togglerId %>\" data-placement=\"left-start\" data-toggle=\"dropdown\" class=\"btn btn-icon btn-light-custom dropdown-toggle dropdown-toggle--no-caret activity-item\"
           aria-haspopup=\"true\" aria-expanded=\"false\" aria-label=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activitylist.actions.label"), "html", null, true);
        echo "\">
           <span class=\"fa-ellipsis-h\"></span>
        </button>
        <ul class=\"dropdown-menu dropdown-toggle--no-caret activity-item\" role=\"menu\" aria-labelledby=\"<%- togglerId %>\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("actions", $context)) ? (_twig_default_filter((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 15, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 16
            echo "                <li class=\"activity-action\">";
            echo $context["action"];
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            ";
        $this->loadTemplate("@OroActivityList/ActivityList/js/workflowTemplate.html.twig", "@OroActivityList/ActivityList/js/activityItemTemplate.html.twig", 18)->display($context);
        // line 19
        echo "        </ul>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroActivityList/ActivityList/js/activityItemTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 19,  132 => 18,  123 => 16,  119 => 15,  112 => 11,  107 => 8,  94 => 7,  78 => 4,  65 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroActivityList/ActivityList/js/view.html.twig' %}

{% block activityIcon %}
    <span class=\"{{ oro_entity_config_value(entityClass|default(), 'icon')|e('html_attr') }}\" aria-hidden=\"true\"></span>
{% endblock %}

{% block activityActions %}
    <% var togglerId = _.uniqueId('dropdown-') %>
    <div class=\"vertical-actions activity-actions\">
        <button id=\"<%- togglerId %>\" data-placement=\"left-start\" data-toggle=\"dropdown\" class=\"btn btn-icon btn-light-custom dropdown-toggle dropdown-toggle--no-caret activity-item\"
           aria-haspopup=\"true\" aria-expanded=\"false\" aria-label=\"{{ 'oro.activitylist.actions.label'|trans }}\">
           <span class=\"fa-ellipsis-h\"></span>
        </button>
        <ul class=\"dropdown-menu dropdown-toggle--no-caret activity-item\" role=\"menu\" aria-labelledby=\"<%- togglerId %>\">
            {% for action in actions|default([]) %}
                <li class=\"activity-action\">{{ action|raw }}</li>
            {% endfor %}
            {% include '@OroActivityList/ActivityList/js/workflowTemplate.html.twig' %}
        </ul>
    </div>
{% endblock %}
", "@OroActivityList/ActivityList/js/activityItemTemplate.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ActivityListBundle/Resources/views/ActivityList/js/activityItemTemplate.html.twig");
    }
}
