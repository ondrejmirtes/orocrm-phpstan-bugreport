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

/* @OroWorkflow/Form/fields.html.twig */
class __TwigTemplate_fa40417d145ec29c7e81484b965f4f71 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_workflow_transition_row' => [$this, 'block_oro_workflow_transition_row'],
            '_oro_workflow_definition_form_label_widget' => [$this, 'block__oro_workflow_definition_form_label_widget'],
            'oro_workflow_replacement_row' => [$this, 'block_oro_workflow_replacement_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_workflow_transition_row', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('_oro_workflow_definition_form_label_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('oro_workflow_replacement_row', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_workflow_transition_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_workflow_transition_row", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_workflow_transition_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_workflow_transition_row"));

        // line 2
        echo "    <fieldset class=\"form-horizontal\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'rest');
        echo "
    </fieldset>

    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
        <button type=\"submit\" class=\"btn btn-success\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        echo "</button>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 12
    public function block__oro_workflow_definition_form_label_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_oro_workflow_definition_form_label_widget", $this->getTemplateName(), 12));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_workflow_definition_form_label_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_workflow_definition_form_label_widget"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'widget');
        echo "
    <span id=\"workflow_translate_link_label\"></span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 17
    public function block_oro_workflow_replacement_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_workflow_replacement_row", $this->getTemplateName(), 17));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_workflow_replacement_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_workflow_replacement_row"));

        // line 18
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "errors", [], "any", false, false, false, 18)) > 0)) {
            // line 19
            echo "        <div class=\"alert alert-error\" role=\"alert\">
            ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'errors');
            echo "
        </div>
    ";
        }
        // line 23
        echo "
    <div class=\"alert alert-warning workflow-deactivation-message\" role=\"alert\">
        <div class=\"message\">
            ";
        // line 26
        if ((isset($context["workflowsToDeactivation"]) || array_key_exists("workflowsToDeactivation", $context) ? $context["workflowsToDeactivation"] : (function () { throw new RuntimeError('Variable "workflowsToDeactivation" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "                <p>
                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.form.workflow_to_deactivation_message"), "html", null, true);
            echo "
                    <ul>
                        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["workflowsToDeactivation"]) || array_key_exists("workflowsToDeactivation", $context) ? $context["workflowsToDeactivation"] : (function () { throw new RuntimeError('Variable "workflowsToDeactivation" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["workflowToDeactivation"]) {
                // line 31
                echo "                            <li>
                                <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_workflow_definition_view", ["name" => twig_get_attribute($this->env, $this->source, $context["workflowToDeactivation"], "name", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["workflowToDeactivation"], "label", [], "any", false, false, false, 32), [], "workflows"), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workflowToDeactivation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                    </ul>
                </p>
            ";
        }
        // line 38
        echo "            <p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.form.replace_message"), "html", null, true);
        echo "</p>
        </div>
    </div>

    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start', ["action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "uri", [], "any", false, false, false, 43), "attr" => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 45
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "class" => "form-dialog", "data-collect" => "true"]]);
        // line 49
        echo "
        <fieldset class=\"form-horizontal\">
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'widget');
        echo "
        </fieldset>

        <div class=\"hidden\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'rest');
        echo "
        </div>

        <div class=\"widget-actions\">
            <button type=\"reset\" class=\"btn\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
            <button type=\"button\" data-action-name=\"activate\" class=\"btn btn-success\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.workflowdefinition.datagrid.activate"), "html", null, true);
        echo "</button>
        </div>
    ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
    ";
        // line 63
        echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroWorkflow/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  251 => 63,  247 => 62,  242 => 60,  238 => 59,  231 => 55,  224 => 51,  220 => 49,  218 => 45,  217 => 43,  216 => 42,  208 => 38,  203 => 35,  192 => 32,  189 => 31,  185 => 30,  180 => 28,  177 => 27,  175 => 26,  170 => 23,  164 => 20,  161 => 19,  158 => 18,  145 => 17,  128 => 13,  115 => 12,  99 => 8,  95 => 7,  88 => 3,  85 => 2,  72 => 1,  59 => 17,  56 => 16,  54 => 12,  51 => 11,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_workflow_transition_row %}
    <fieldset class=\"form-horizontal\">
        {{ form_rest(form) }}
    </fieldset>

    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">{{ 'Cancel'|trans }}</button>
        <button type=\"submit\" class=\"btn btn-success\">{{ 'Submit'|trans }}</button>
    </div>
{% endblock %}

{% block _oro_workflow_definition_form_label_widget %}
    {{ form_widget(form) }}
    <span id=\"workflow_translate_link_label\"></span>
{% endblock %}

{% block oro_workflow_replacement_row %}
    {% if form.vars.errors|length > 0 %}
        <div class=\"alert alert-error\" role=\"alert\">
            {{ form_errors(form) }}
        </div>
    {% endif %}

    <div class=\"alert alert-warning workflow-deactivation-message\" role=\"alert\">
        <div class=\"message\">
            {% if workflowsToDeactivation %}
                <p>
                    {{ 'oro.workflow.workflowdefinition.form.workflow_to_deactivation_message'|trans }}
                    <ul>
                        {% for workflowToDeactivation in workflowsToDeactivation %}
                            <li>
                                <a href=\"{{ path('oro_workflow_definition_view', {name: workflowToDeactivation.name}) }}\">{{ workflowToDeactivation.label|trans({},'workflows') }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </p>
            {% endif %}
            <p>{{ 'oro.workflow.workflowdefinition.form.replace_message'|trans }}</p>
        </div>
    </div>

    {{ form_start(form, {
        'action': app.request.uri,
        'attr': {
            'id': form.vars.id,
            'class': 'form-dialog',
            'data-collect': 'true'
        }
    }) }}
        <fieldset class=\"form-horizontal\">
            {{ form_widget(form) }}
        </fieldset>

        <div class=\"hidden\">
            {{ form_rest(form) }}
        </div>

        <div class=\"widget-actions\">
            <button type=\"reset\" class=\"btn\">{{ 'Cancel'|trans }}</button>
            <button type=\"button\" data-action-name=\"activate\" class=\"btn btn-success\">{{ 'oro.workflow.workflowdefinition.datagrid.activate'|trans }}</button>
        </div>
    {{ form_end(form) }}
    {{ oro_form_js_validation(form) }}
{% endblock %}
", "@OroWorkflow/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/Form/fields.html.twig");
    }
}
