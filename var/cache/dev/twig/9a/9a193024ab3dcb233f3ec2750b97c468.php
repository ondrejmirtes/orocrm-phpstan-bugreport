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

/* @OroDotmailer/AddressBook/widget/addressBookConnectionUpdate.html.twig */
class __TwigTemplate_54a9a04b4f06464cb7d899eb42ebbb08 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDotmailer/AddressBook/widget/addressBookConnectionUpdate.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDotmailer/AddressBook/widget/addressBookConnectionUpdate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDotmailer/AddressBook/widget/addressBookConnectionUpdate.html.twig"));

        // line 1
        if ((array_key_exists("savedId", $context) && (isset($context["savedId"]) || array_key_exists("savedId", $context) ? $context["savedId"] : (function () { throw new RuntimeError('Variable "savedId" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    ";
            $context["widgetResponse"] = ["widget" => ["trigger" => [0 => ["eventBroker" => "widget", "name" => "formSave", "args" => [0 =>             // line 7
(isset($context["savedId"]) || array_key_exists("savedId", $context) ? $context["savedId"] : (function () { throw new RuntimeError('Variable "savedId" does not exist.', 7, $this->source); })())]]]]];
            // line 11
            echo "
    ";
            // line 12
            echo json_encode((isset($context["widgetResponse"]) || array_key_exists("widgetResponse", $context) ? $context["widgetResponse"] : (function () { throw new RuntimeError('Variable "widgetResponse" does not exist.', 12, $this->source); })()));
            echo "
";
        } else {
            // line 14
            echo "    <div class=\"widget-content\">
        ";
            // line 15
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15)) > 0)) {
                // line 16
                echo "            <div class=\"alert alert-error\" role=\"alert\">
                ";
                // line 17
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'errors');
                echo "
            </div>
        ";
            }
            // line 20
            echo "        <form method=\"post\"
              data-nohash=\"true\"
              data-disable-autofocus=\"true\"
              id=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "vars", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\"
              action=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "uri", [], "any", false, false, false, 24), "html", null, true);
            echo "\"
              class=\"form-dialog\"
        >
            <fieldset class=\"form-horizontal connection-form\">
                ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "channel", [], "any", false, false, false, 28), 'row');
            echo "
                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "addressBook", [], "any", false, false, false, 29), 'row');
            echo "
                ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "createEntities", [], "any", false, false, false, 30), 'row');
            echo "
            </fieldset>
            ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "_token", [], "any", false, false, false, 32), 'row');
            echo "

            <div class=\"widget-actions\">
                <button type=\"reset\" class=\"btn\">";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.dialog.button.cancel"), "html", null, true);
            echo "</button>
                <button type=\"submit\" class=\"btn btn-success\">
                    ";
            // line 37
            if (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37))) {
                // line 38
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.dialog.button.update"), "html", null, true);
                echo "
                    ";
            } else {
                // line 40
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.dialog.button.connect"), "html", null, true);
                echo "
                    ";
            }
            // line 42
            echo "                </button>
            </div>
        </form>
        ";
            // line 45
            echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()));
            echo "
    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroDotmailer/AddressBook/widget/addressBookConnectionUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 45,  128 => 42,  122 => 40,  116 => 38,  114 => 37,  109 => 35,  103 => 32,  98 => 30,  94 => 29,  90 => 28,  83 => 24,  79 => 23,  74 => 20,  68 => 17,  65 => 16,  63 => 15,  60 => 14,  55 => 12,  52 => 11,  50 => 7,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if savedId is defined and savedId %}
    {% set widgetResponse = {
        widget: {
            trigger: [{
                eventBroker: 'widget',
                name: 'formSave',
                args: [savedId]
            }],
        }
    } %}

    {{ widgetResponse|json_encode|raw }}
{% else %}
    <div class=\"widget-content\">
        {% if form.vars.errors|length > 0 %}
            <div class=\"alert alert-error\" role=\"alert\">
                {{ form_errors(form) }}
            </div>
        {% endif %}
        <form method=\"post\"
              data-nohash=\"true\"
              data-disable-autofocus=\"true\"
              id=\"{{ form.vars.id }}\"
              action=\"{{ app.request.uri }}\"
              class=\"form-dialog\"
        >
            <fieldset class=\"form-horizontal connection-form\">
                {{ form_row(form.channel) }}
                {{ form_row(form.addressBook) }}
                {{ form_row(form.createEntities) }}
            </fieldset>
            {{ form_row(form._token) }}

            <div class=\"widget-actions\">
                <button type=\"reset\" class=\"btn\">{{ 'oro.dotmailer.connection.dialog.button.cancel'|trans }}</button>
                <button type=\"submit\" class=\"btn btn-success\">
                    {% if entity and entity.id %}
                        {{ 'oro.dotmailer.connection.dialog.button.update'|trans }}
                    {% else %}
                        {{ 'oro.dotmailer.connection.dialog.button.connect'|trans }}
                    {% endif %}
                </button>
            </div>
        </form>
        {{ oro_form_js_validation(form) }}
    </div>
{% endif %}
", "@OroDotmailer/AddressBook/widget/addressBookConnectionUpdate.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-dotmailer/Resources/views/AddressBook/widget/addressBookConnectionUpdate.html.twig");
    }
}
