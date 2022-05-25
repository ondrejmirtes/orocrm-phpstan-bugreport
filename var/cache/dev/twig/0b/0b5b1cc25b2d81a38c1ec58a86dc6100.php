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

/* @OroHangoutsCall/CalendarEvent/viewActions.html.twig */
class __TwigTemplate_483b19834ece38b1f9508ac2c74b3c70 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroHangoutsCall/CalendarEvent/viewActions.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/CalendarEvent/viewActions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroHangoutsCall/CalendarEvent/viewActions.html.twig"));

        // line 1
        $context["invites"] = [];
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "childAttendees", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["attendee"]) {
            // line 9
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, $context["attendee"], "statusCode", [], "any", false, false, false, 9) != twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED")) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["attendee"], "email", [], "any", false, false, false, 9)))) {
                // line 10
                echo "        ";
                $context["invites"] = twig_array_merge((isset($context["invites"]) || array_key_exists("invites", $context) ? $context["invites"] : (function () { throw new RuntimeError('Variable "invites" does not exist.', 10, $this->source); })()), [0 => ["id" => twig_get_attribute($this->env, $this->source,                 // line 11
$context["attendee"], "email", [], "any", false, false, false, 11), "invite_type" => "EMAIL"]]);
                // line 14
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attendee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "<div class=\"pull-left btn-group\">
    ";
        // line 17
        $this->loadTemplate("@OroHangoutsCall/startHangoutButton.html.twig", "@OroHangoutsCall/CalendarEvent/viewActions.html.twig", 17)->display($context);
        // line 18
        echo "</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroHangoutsCall/CalendarEvent/viewActions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  69 => 17,  66 => 16,  59 => 14,  57 => 11,  55 => 10,  52 => 9,  48 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set invites = [] %}
{#
    Get attendees of the event applicable for hangouts invitation:
    - email is not empty
    - status is not declined
    - user is not owner user
#}
{% for attendee in entity.childAttendees %}
    {% if attendee.statusCode != constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_DECLINED') and attendee.email is not empty %}
        {% set invites = invites|merge([{
            id: attendee.email,
            invite_type: 'EMAIL'
        }]) %}
    {% endif %}
{% endfor %}
<div class=\"pull-left btn-group\">
    {% include \"@OroHangoutsCall/startHangoutButton.html.twig\" %}
</div>
", "@OroHangoutsCall/CalendarEvent/viewActions.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-hangouts-call-bundle/Resources/views/CalendarEvent/viewActions.html.twig");
    }
}
