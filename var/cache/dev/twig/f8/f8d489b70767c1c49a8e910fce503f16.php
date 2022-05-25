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

/* @OroHangoutsCall/CalendarEvent/widget/additionalProperties.html.twig */
class __TwigTemplate_6d4dda4d7e9d51e3731ea195dc4b3cea extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroHangoutsCall/CalendarEvent/widget/additionalProperties.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/CalendarEvent/widget/additionalProperties.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/CalendarEvent/widget/additionalProperties.html.twig"));

        // line 1
        echo "<% if (attendees && attendees.length && connection && connection.userId === ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1), "html", null, true);
        echo " && obj.use_hangout) { %>
    ";
        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroHangoutsCall/CalendarEvent/widget/additionalProperties.html.twig", 2)->unwrap();
        // line 3
        echo "    <% var hangoutCallOptions = {
        calendarEvent: obj,
        ownerUserId: ";
        // line 5
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5));
        echo ",
        declinedStatus: ";
        // line 6
        echo json_encode(twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED"));
        echo ",
        hangoutOptions: {
            widget_size: 70
        }
    }; %>
    ";
        // line 11
        $context["hangoutButton"] = ('' === $tmp = "        <div data-action-name=\"hangout-call\"
             data-page-component-module=\"orohangoutscall/js/app/components/calendar-event-start-hangout-component\"
             data-page-component-options=\"<%- JSON.stringify(hangoutCallOptions) %>\" class=\"action\"></div>
        </div>
    ") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_renderControlGroup", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.hangoutscall.label"), (isset($context["hangoutButton"]) || array_key_exists("hangoutButton", $context) ? $context["hangoutButton"] : (function () { throw new RuntimeError('Variable "hangoutButton" does not exist.', 17, $this->source); })())], 17, $context, $this->getSourceContext());
        echo "
<% } %>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroHangoutsCall/CalendarEvent/widget/additionalProperties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  69 => 11,  61 => 6,  57 => 5,  53 => 3,  51 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<% if (attendees && attendees.length && connection && connection.userId === {{ app.user.id }} && obj.use_hangout) { %>
    {% import '@OroUI/macros.html.twig' as UI %}
    <% var hangoutCallOptions = {
        calendarEvent: obj,
        ownerUserId: {{ app.user.id|json_encode|raw }},
        declinedStatus: {{ constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_DECLINED')|json_encode|raw }},
        hangoutOptions: {
            widget_size: 70
        }
    }; %>
    {% set hangoutButton %}
        <div data-action-name=\"hangout-call\"
             data-page-component-module=\"orohangoutscall/js/app/components/calendar-event-start-hangout-component\"
             data-page-component-options=\"<%- JSON.stringify(hangoutCallOptions) %>\" class=\"action\"></div>
        </div>
    {% endset %}
    {{ UI.renderControlGroup('oro.hangoutscall.label'|trans, hangoutButton) }}
<% } %>
", "@OroHangoutsCall/CalendarEvent/widget/additionalProperties.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-hangouts-call-bundle/Resources/views/CalendarEvent/widget/additionalProperties.html.twig");
    }
}
