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

/* @OroUser/Reset/dialog/forcePasswordResetConfirmation.html.twig */
class __TwigTemplate_8ab570a3434bd0fb9ac18e62df734321 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/Reset/dialog/forcePasswordResetConfirmation.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Reset/dialog/forcePasswordResetConfirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Reset/dialog/forcePasswordResetConfirmation.html.twig"));

        // line 1
        if (array_key_exists("formAction", $context)) {
            // line 2
            echo "    <div class=\"widget-content\">
        <div class=\"form-container\">
            <form action=\"";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\" method=\"post\">
                <div class=\"modal-body ui-dialog-body\">
                    <p>";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.password.force_reset.popup.message", ["{{ user }}" => (("<b>" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 7
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "username", [], "any", false, false, false, 7))) . "</b>")]);
            // line 8
            echo "</p>
                </div>

                <div class=\"widget-actions form-actions\">
                    <button class=\"btn\" type=\"reset\">";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
            echo "</button>
                    <button class=\"btn btn-primary\" type=\"submit\">";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.password.force_reset.popup.button"), "html", null, true);
            // line 15
            echo "</button>
                </div>
            </form>
        </div>
    </div>
";
        } else {
            // line 21
            echo "    ";
            $context["widgetResponse"] = ["widget" => ["trigger" => [0 => ["eventFunction" => "execute", "name" => "refreshPage"]], "remove" => true]];
            // line 30
            echo "
    ";
            // line 31
            echo json_encode((isset($context["widgetResponse"]) || array_key_exists("widgetResponse", $context) ? $context["widgetResponse"] : (function () { throw new RuntimeError('Variable "widgetResponse" does not exist.', 31, $this->source); })()));
            echo "
";
        }
        // line 33
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUser/Reset/dialog/forcePasswordResetConfirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  86 => 31,  83 => 30,  80 => 21,  72 => 15,  70 => 14,  66 => 12,  60 => 8,  58 => 7,  57 => 6,  52 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if formAction is defined %}
    <div class=\"widget-content\">
        <div class=\"form-container\">
            <form action=\"{{ formAction }}\" method=\"post\">
                <div class=\"modal-body ui-dialog-body\">
                    <p>{{ 'oro.user.password.force_reset.popup.message'|trans({
                            '{{ user }}': '<b>' ~ entity.username|escape ~ '</b>'
                        })|raw }}</p>
                </div>

                <div class=\"widget-actions form-actions\">
                    <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
                    <button class=\"btn btn-primary\" type=\"submit\">
                        {{- 'oro.user.password.force_reset.popup.button'|trans -}}
                    </button>
                </div>
            </form>
        </div>
    </div>
{% else %}
    {% set widgetResponse = {
        widget: {
            trigger: [{
                eventFunction: 'execute',
                name: 'refreshPage',
            }],
            remove: true
        }
    } %}

    {{ widgetResponse|json_encode|raw }}
{% endif %}

", "@OroUser/Reset/dialog/forcePasswordResetConfirmation.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Reset/dialog/forcePasswordResetConfirmation.html.twig");
    }
}
