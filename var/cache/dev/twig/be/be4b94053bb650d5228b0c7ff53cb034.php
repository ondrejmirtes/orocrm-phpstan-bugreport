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

/* @OroOAuth2Server/Client/clients.html.twig */
class __TwigTemplate_7969ddce8d7437a895e2cbb923d3f91f extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroOAuth2Server/Client/clients.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOAuth2Server/Client/clients.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOAuth2Server/Client/clients.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroOAuth2Server/Client/clients.html.twig", 1)->unwrap();
        // line 2
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroOAuth2Server/Client/clients.html.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 4
        if ( !(isset($context["encryptionKeysExist"]) || array_key_exists("encryptionKeysExist", $context) ? $context["encryptionKeysExist"] : (function () { throw new RuntimeError('Variable "encryptionKeysExist" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "    <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.no_encryption_keys"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "<div class=\"oauth-clients-container\">
    ";
        // line 8
        if ((isset($context["creationGranted"]) || array_key_exists("creationGranted", $context) ? $context["creationGranted"] : (function () { throw new RuntimeError('Variable "creationGranted" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "    <div class=\"user-fieldset-block-actions clearfix\">
        <div class=\"pull-right\">
            ";
            // line 11
            echo twig_call_macro($macros["UI"], "macro_clientButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_oauth2_server_client_create", ["entityClass" =>             // line 12
(isset($context["entityClass"]) || array_key_exists("entityClass", $context) ? $context["entityClass"] : (function () { throw new RuntimeError('Variable "entityClass" does not exist.', 12, $this->source); })()), "entityId" => (isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 12, $this->source); })())]), "aCss" => "no-hash btn-medium", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.client.action.add"), "widget" => ["type" => "dialog", "multiple" => false, "reload-grid-name" => "oauth-client-with-owner-grid", "options" => ["alias" => "oauth-client-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.client.dialog.create_title"), "modal" => true, "width" => 500]]]]], 11, $context, $this->getSourceContext());
            // line 28
            echo "
        </div>
    </div>
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", ["oauth-client-with-owner-grid", ["ownerEntityClass" =>         // line 35
(isset($context["entityClass"]) || array_key_exists("entityClass", $context) ? $context["entityClass"] : (function () { throw new RuntimeError('Variable "entityClass" does not exist.', 35, $this->source); })()), "ownerEntityId" => (isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 35, $this->source); })()), "_grid_view" => ["_disabled" => true]], ["cssClass" => "inner-grid"]], 33, $context, $this->getSourceContext());
        // line 37
        echo "
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroOAuth2Server/Client/clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 37,  83 => 35,  82 => 33,  79 => 32,  73 => 28,  71 => 12,  70 => 11,  66 => 9,  64 => 8,  61 => 7,  55 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}

{% if not encryptionKeysExist %}
    <div class=\"alert alert-warning\">{{ 'oro.oauth2server.no_encryption_keys'|trans }}</div>
{% endif %}
<div class=\"oauth-clients-container\">
    {% if creationGranted %}
    <div class=\"user-fieldset-block-actions clearfix\">
        <div class=\"pull-right\">
            {{ UI.clientButton({
                'dataUrl': path('oro_oauth2_server_client_create', {entityClass: entityClass, entityId: entityId}),
                'aCss': 'no-hash btn-medium',
                'label': 'oro.oauth2server.client.action.add'|trans,
                'widget': {
                    'type': 'dialog',
                    'multiple': false,
                    'reload-grid-name': 'oauth-client-with-owner-grid',
                    'options': {
                        'alias': 'oauth-client-dialog',
                        'dialogOptions': {
                            'title': 'oro.oauth2server.client.dialog.create_title'|trans,
                            'modal': true,
                            'width': 500
                        }
                    }
                }
            }) }}
        </div>
    </div>
    {% endif %}

    {{ dataGrid.renderGrid(
        'oauth-client-with-owner-grid',
        { ownerEntityClass: entityClass, ownerEntityId: entityId, '_grid_view': {'_disabled': true} },
        { cssClass: 'inner-grid' }
    ) }}
</div>
", "@OroOAuth2Server/Client/clients.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/oauth2-server/src/Oro/Bundle/OAuth2ServerBundle/Resources/views/Client/clients.html.twig");
    }
}
