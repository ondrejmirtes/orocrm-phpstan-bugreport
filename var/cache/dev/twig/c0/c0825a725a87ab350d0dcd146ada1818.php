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

/* @OroOAuth2Server/Client/dialog/create.html.twig */
class __TwigTemplate_bdfe268584820ca6ae47cf92f934a183 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_data' => [$this, 'block_content_data'],
            'widget_context' => [$this, 'block_widget_context'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroOAuth2Server/Client/dialog/create.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOAuth2Server/Client/dialog/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOAuth2Server/Client/dialog/create.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroOAuth2Server/Client/dialog/create.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroOAuth2Server/Client/dialog/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 4));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 5
        echo "    ";
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "valid", [], "any", false, false, false, 5) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)))) {
            // line 6
            echo "        <div class=\"alert alert-error\" role=\"alert\">
            <div class=\"message\">
                ";
            // line 8
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'errors');
            echo "
            </div>
        </div>
    ";
        }
        // line 12
        echo "    <fieldset class=\"form form-horizontal\">
        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "organization", [], "any", true, true, false, 13)) {
            // line 14
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "organization", [], "any", false, false, false, 14), 'row');
            echo "
        ";
        }
        // line 16
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "active", [], "any", false, false, false, 17), 'row');
        echo "
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "grants", [], "any", true, true, false, 18)) {
            // line 19
            echo "            ";
            if (twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "grants", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "block_prefixes", [], "any", false, false, false, 19))) {
                // line 20
                echo "                <div data-validation-ignore=\"true\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "grants", [], "any", false, false, false, 20), 'row');
                echo "</div>
            ";
            } else {
                // line 22
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "grants", [], "any", false, false, false, 22), 'row', ["group_attr" => ["class" => "client-grants"]]);
                echo "
            ";
            }
            // line 24
            echo "        ";
        }
        // line 25
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'rest');
        echo "
        <div class=\"widget-actions form-actions\">
            <button class=\"btn\" type=\"reset\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
            <button class=\"btn btn-primary\" type=\"submit\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "</button>
        </div>
    </fieldset>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 33
    public function block_widget_context($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widget_context", $this->getTemplateName(), 33));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_context"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_context"));

        // line 34
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroOAuth2Server/Client/dialog/create.html.twig", 34)->unwrap();
        // line 35
        echo "
    <div class=\"widget-content\">
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.client.created_message"), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block alert-info\">
                ";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.client.created_warning_message");
        echo "
            </div>
        </div>
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                <div>
                    <strong>";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.client.identifier.label"), "html", null, true);
        echo ":</strong>
                    ";
        // line 51
        $context["client_id"] = uniqid("client-id-");
        // line 52
        echo "                    <span class=\"text-nowrap\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["client_id"]) || array_key_exists("client_id", $context) ? $context["client_id"] : (function () { throw new RuntimeError('Variable "client_id" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 52, $this->source); })()), "identifier", [], "any", false, false, false, 52), "html", null, true);
        echo "</span>";
        // line 53
        echo twig_call_macro($macros["UI"], "macro_clientLink", [["aCss" => "btn btn-icon", "iCss" => "fa-copy", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.button.copy_to_clipboard.label"), "labelInIcon" => false, "pageComponent" => ["view" => ["view" => "oroui/js/app/views/element-value-copy-to-clipboard-view", "elementSelector" => ("#" .         // line 61
(isset($context["client_id"]) || array_key_exists("client_id", $context) ? $context["client_id"] : (function () { throw new RuntimeError('Variable "client_id" does not exist.', 61, $this->source); })()))]]]], 53, $context, $this->getSourceContext());
        // line 65
        echo "</div>
                <div>
                    <strong>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.client.secret.label"), "html", null, true);
        echo ":</strong>
                    ";
        // line 68
        $context["client_secret_id"] = uniqid("client-secret-");
        // line 69
        echo "                    <span class=\"text-nowrap\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["client_secret_id"]) || array_key_exists("client_secret_id", $context) ? $context["client_secret_id"] : (function () { throw new RuntimeError('Variable "client_secret_id" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 69, $this->source); })()), "plainSecret", [], "any", false, false, false, 69), "html", null, true);
        echo "</span>";
        // line 70
        echo twig_call_macro($macros["UI"], "macro_clientLink", [["aCss" => "btn btn-icon", "iCss" => "fa-copy", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.button.copy_to_clipboard.label"), "labelInIcon" => false, "pageComponent" => ["view" => ["view" => "oroui/js/app/views/element-value-copy-to-clipboard-view", "elementSelector" => ("#" .         // line 78
(isset($context["client_secret_id"]) || array_key_exists("client_secret_id", $context) ? $context["client_secret_id"] : (function () { throw new RuntimeError('Variable "client_secret_id" does not exist.', 78, $this->source); })()))]]]], 70, $context, $this->getSourceContext());
        // line 82
        echo "</div>
            </div>
        </div>
    </div>
    <div class=\"widget-actions\">
        <button class=\"btn\" type=\"reset\">";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        echo "</button>
    </div>

    <div ";
        // line 90
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/widget-form-component", "options" => ["_wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 93
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "request", [], "any", false, false, false, 93), "get", [0 => "_wid"], "method", false, false, false, 93), "data" => ((        // line 94
array_key_exists("savedId", $context)) ? (_twig_default_filter((isset($context["savedId"]) || array_key_exists("savedId", $context) ? $context["savedId"] : (function () { throw new RuntimeError('Variable "savedId" does not exist.', 94, $this->source); })()), null)) : (null)), "preventRemove" => true]]], 90, $context, $this->getSourceContext());
        // line 97
        echo "></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroOAuth2Server/Client/dialog/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 97,  250 => 94,  249 => 93,  248 => 90,  242 => 87,  235 => 82,  233 => 78,  232 => 70,  226 => 69,  224 => 68,  220 => 67,  216 => 65,  214 => 61,  213 => 53,  207 => 52,  205 => 51,  201 => 50,  192 => 44,  184 => 39,  178 => 35,  175 => 34,  162 => 33,  145 => 28,  141 => 27,  135 => 25,  132 => 24,  126 => 22,  120 => 20,  117 => 19,  115 => 18,  111 => 17,  106 => 16,  100 => 14,  98 => 13,  95 => 12,  88 => 8,  84 => 6,  81 => 5,  68 => 4,  54 => 1,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}

{% block content_data %}
    {% if not form.vars.valid and form.vars.errors|length %}
        <div class=\"alert alert-error\" role=\"alert\">
            <div class=\"message\">
                {{ form_errors(form) }}
            </div>
        </div>
    {% endif %}
    <fieldset class=\"form form-horizontal\">
        {% if form.organization is defined %}
            {{ form_row(form.organization) }}
        {% endif %}
        {{ form_row(form.name) }}
        {{ form_row(form.active) }}
        {% if form.grants is defined %}
            {% if 'hidden' in form.grants.vars.block_prefixes %}
                <div data-validation-ignore=\"true\">{{ form_row(form.grants) }}</div>
            {% else %}
                {{ form_row(form.grants, {'group_attr': {'class': 'client-grants'}}) }}
            {% endif %}
        {% endif %}
        {{ form_rest(form) }}
        <div class=\"widget-actions form-actions\">
            <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
            <button class=\"btn btn-primary\" type=\"submit\">{{ 'Save'|trans }}</button>
        </div>
    </fieldset>
{% endblock content_data %}

{% block widget_context %}
    {% import '@OroUI/macros.html.twig' as UI %}

    <div class=\"widget-content\">
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                {{ 'oro.oauth2server.client.created_message'|trans }}
            </div>
        </div>
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block alert-info\">
                {{ 'oro.oauth2server.client.created_warning_message'|trans|raw }}
            </div>
        </div>
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                <div>
                    <strong>{{ 'oro.oauth2server.client.identifier.label'|trans }}:</strong>
                    {% set client_id = 'client-id-'|uniqid %}
                    <span class=\"text-nowrap\" id=\"{{ client_id }}\">{{ entity.identifier }}</span>
                    {{- UI.clientLink({
                        aCss: 'btn btn-icon',
                        iCss: 'fa-copy',
                        title: 'oro.ui.button.copy_to_clipboard.label'|trans,
                        labelInIcon: false,
                        pageComponent: {
                            view: {
                                view: 'oroui/js/app/views/element-value-copy-to-clipboard-view',
                                elementSelector: '#' ~ client_id
                            }
                        }
                    }) -}}
                </div>
                <div>
                    <strong>{{ 'oro.oauth2server.client.secret.label'|trans }}:</strong>
                    {% set client_secret_id = 'client-secret-'|uniqid %}
                    <span class=\"text-nowrap\" id=\"{{ client_secret_id }}\">{{ entity.plainSecret }}</span>
                    {{- UI.clientLink({
                        aCss: 'btn btn-icon',
                        iCss: 'fa-copy',
                        title: 'oro.ui.button.copy_to_clipboard.label'|trans,
                        labelInIcon: false,
                        pageComponent: {
                            view: {
                                view: 'oroui/js/app/views/element-value-copy-to-clipboard-view',
                                elementSelector: '#' ~ client_secret_id
                            }
                        }
                    }) -}}
                </div>
            </div>
        </div>
    </div>
    <div class=\"widget-actions\">
        <button class=\"btn\" type=\"reset\">{{ 'Close'|trans }}</button>
    </div>

    <div {{ UI.renderPageComponentAttributes({
        module: 'oroui/js/app/components/widget-form-component',
        options: {
            _wid: app.request.get('_wid'),
            data: savedId|default(null),
            preventRemove: true
        }
    }) }}></div>
{% endblock widget_context %}
", "@OroOAuth2Server/Client/dialog/create.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/oauth2-server/src/Oro/Bundle/OAuth2ServerBundle/Resources/views/Client/dialog/create.html.twig");
    }
}
