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

/* @OroOAuth2Server/Client/index.html.twig */
class __TwigTemplate_235ff118026280161483a9910db63c25 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'content_datagrid' => [$this, 'block_content_datagrid'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroOAuth2Server/Client/index.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOAuth2Server/Client/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOAuth2Server/Client/index.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroOAuth2Server/Client/index.html.twig", 2)->unwrap();
        // line 3
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroOAuth2Server/Client/index.html.twig", 3)->unwrap();
        // line 5
        if ((isset($context["isFrontend"]) || array_key_exists("isFrontend", $context) ? $context["isFrontend"] : (function () { throw new RuntimeError('Variable "isFrontend" does not exist.', 5, $this->source); })())) {
            // line 6
            $context["pageTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.menu.frontend_oauth_application.label");
        } else {
            // line 8
            $context["pageTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.menu.backoffice_oauth_application.label");
        }
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/index.html.twig", "@OroOAuth2Server/Client/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 11));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 12
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_oauth2_create")) {
            // line 13
            echo "    <div class=\"btn-group\">
        ";
            // line 14
            echo twig_call_macro($macros["UI"], "macro_addButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((            // line 15
(isset($context["isFrontend"]) || array_key_exists("isFrontend", $context) ? $context["isFrontend"] : (function () { throw new RuntimeError('Variable "isFrontend" does not exist.', 15, $this->source); })())) ? ("oro_oauth2_frontend_create") : ("oro_oauth2_create"))), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.client.entity_label")]], 14, $context, $this->getSourceContext());
            // line 17
            echo "
    </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 22
    public function block_content_datagrid($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_datagrid", $this->getTemplateName(), 22));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_datagrid"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_datagrid"));

        // line 23
        echo "    <div data-bound-component=\"orodatagrid/js/app/components/datagrid-component\">
        ";
        // line 24
        if ( !(isset($context["encryptionKeysExist"]) || array_key_exists("encryptionKeysExist", $context) ? $context["encryptionKeysExist"] : (function () { throw new RuntimeError('Variable "encryptionKeysExist" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "            <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.no_encryption_keys"), "html", null, true);
            echo "</div>
        ";
        }
        // line 27
        echo "        ";
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [((        // line 28
(isset($context["isFrontend"]) || array_key_exists("isFrontend", $context) ? $context["isFrontend"] : (function () { throw new RuntimeError('Variable "isFrontend" does not exist.', 28, $this->source); })())) ? ("oauth-client-frontend-grid") : ("oauth-client-backend-grid")), ["frontend" =>         // line 29
(isset($context["isFrontend"]) || array_key_exists("isFrontend", $context) ? $context["isFrontend"] : (function () { throw new RuntimeError('Variable "isFrontend" does not exist.', 29, $this->source); })()), "_grid_view" => ["_disabled" => true]], ["cssClass" => "inner-grid"]], 27, $context, $this->getSourceContext());
        // line 31
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroOAuth2Server/Client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 31,  143 => 29,  142 => 28,  140 => 27,  134 => 25,  132 => 24,  129 => 23,  116 => 22,  100 => 17,  98 => 15,  97 => 14,  94 => 13,  91 => 12,  78 => 11,  64 => 1,  61 => 8,  58 => 6,  56 => 5,  54 => 3,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/index.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}

{% if isFrontend %}
    {% set pageTitle = 'oro.oauth2server.menu.frontend_oauth_application.label'|trans %}
{%  else %}
    {% set pageTitle = 'oro.oauth2server.menu.backoffice_oauth_application.label'|trans %}
{% endif %}

{% block navButtons %}
    {% if is_granted('oro_oauth2_create') %}
    <div class=\"btn-group\">
        {{ UI.addButton({
            'path': path(isFrontend ? 'oro_oauth2_frontend_create' : 'oro_oauth2_create'),
            'entity_label': 'oro.oauth2server.client.entity_label'|trans
        }) }}
    </div>
    {% endif %}
{% endblock %}

{% block content_datagrid %}
    <div data-bound-component=\"orodatagrid/js/app/components/datagrid-component\">
        {% if not encryptionKeysExist %}
            <div class=\"alert alert-warning\">{{ 'oro.oauth2server.no_encryption_keys'|trans }}</div>
        {% endif %}
        {{ dataGrid.renderGrid(
            isFrontend ? 'oauth-client-frontend-grid' : 'oauth-client-backend-grid',
            { frontend: isFrontend, '_grid_view': {'_disabled': true} },
            { cssClass: 'inner-grid' }
        ) }}
    </div>
{% endblock %}
", "@OroOAuth2Server/Client/index.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/oauth2-server/src/Oro/Bundle/OAuth2ServerBundle/Resources/views/Client/index.html.twig");
    }
}
