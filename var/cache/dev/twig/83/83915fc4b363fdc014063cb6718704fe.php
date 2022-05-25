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

/* @OroEmail/Email/userEmails.html.twig */
class __TwigTemplate_8cbafe9beadd9b9abef654c84febb3cd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_datagrid' => [$this, 'block_content_datagrid'],
            'navButtons' => [$this, 'block_navButtons'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/userEmails.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/userEmails.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/userEmails.html.twig"));

        // line 2
        $macros["EmailActions"] = $this->macros["EmailActions"] = $this->loadTemplate("@OroEmail/actions.html.twig", "@OroEmail/Email/userEmails.html.twig", 2)->unwrap();
        // line 4
        $context["name"] = _twig_default_filter($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)), "N/A");

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%username%" =>         // line 5
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 5, $this->source); })())]]);
        // line 8
        $context["params"] = ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8)];
        // line 9
        $context["gridName"] = "user-email-grid";
        // line 11
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
            // line 12
            $context["renderParams"] = ["themeOptions" => ["tagName" => "div", "headerHide" => true, "showMassActionOnToolbar" => true, "bodyClassName" => "user-emails-grid", "rowTemplateSelector" => "#template-user-email-grid-row"], "toolbarOptions" => ["placement" => ["bottom" => true]]];
        }
        // line 56
        $context["pageTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.entity_plural_label");
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/index.html.twig", "@OroEmail/Email/userEmails.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_content_datagrid($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_datagrid", $this->getTemplateName(), 29));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_datagrid"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_datagrid"));

        // line 30
        echo "    ";
        $this->displayParentBlock("content_datagrid", $context, $blocks);
        echo "
    ";
        // line 31
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
            // line 32
            echo "        <script id=\"template-user-email-grid-row\" type=\"text/template\">
            <div class=\"user-emails-row\">
                <div class=\"user-emails-row__top clearfix\">
                    <div class=\"user-emails-row__select-row\">
                        <input type=\"checkbox\" data-role=\"select-row\">
                    </div>
                    <div class=\"user-emails-row__contacts\">
                        <%= model.contacts %>
                    </div>
                    <div class=\"user-emails-row__date\">
                        <%= model.sentAt %>
                    </div>
                    <div class=\"user-emails-row__attachments\">
                        <%= model.attachments %>
                    </div>
                </div>
                <div class=\"user-emails-row__subject\">
                    <%= model.subject %>
                </div>
            </div>
        </script>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 58
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 58));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 59
        echo "    ";
        $macros["EmailActions"] = $this->loadTemplate("@OroEmail/actions.html.twig", "@OroEmail/Email/userEmails.html.twig", 59)->unwrap();
        // line 60
        echo "
    ";
        // line 61
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_email_create")) {
            // line 62
            echo "        <div class=\"btn-group\">
            ";
            // line 63
            echo twig_call_macro($macros["EmailActions"], "macro_createEmailButton", [["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(twig_get_attribute($this->env, $this->source,             // line 64
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), true), "entityId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 65
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65)]], 63, $context, $this->getSourceContext());
            // line 66
            echo "
        </div>
    ";
        }
        // line 70
        $context["actionSync"] = ((("<i class=\"fa-refresh hide-text\">" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.action.sync")) . "</i>") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.action.sync"));
        // line 76
        $context["actionProcessing"] = (((("<i class=\"fa-refresh hide-text\">" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.action.processing")) . "</i>") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.action.processing")) . "&nbsp;<span class=\"loading-dots\"></span>");
        // line 83
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Email/userEmails.html.twig", 83)->unwrap();
        // line 84
        echo "
    <div class=\"btn-group\" ";
        // line 85
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroemail/js/app/views/email-sync-view", "options" => ["syncPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_user_sync_emails"), "processingMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.action.message.processing"), "errorHandlerMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.action.message.error"), "actionProcessing" =>         // line 91
(isset($context["actionProcessing"]) || array_key_exists("actionProcessing", $context) ? $context["actionProcessing"] : (function () { throw new RuntimeError('Variable "actionProcessing" does not exist.', 91, $this->source); })()), "actionSync" =>         // line 92
(isset($context["actionSync"]) || array_key_exists("actionSync", $context) ? $context["actionSync"] : (function () { throw new RuntimeError('Variable "actionSync" does not exist.', 92, $this->source); })())]]], 85, $context, $this->getSourceContext());
        // line 94
        echo ">
        <a href=\"#\" role=\"button\" class=\"btn sync-btn icons-holder-text no-hash\" data-role=\"sync\">
            ";
        // line 96
        echo (isset($context["actionSync"]) || array_key_exists("actionSync", $context) ? $context["actionSync"] : (function () { throw new RuntimeError('Variable "actionSync" does not exist.', 96, $this->source); })());
        echo "
        </a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 101
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumb", $this->getTemplateName(), 101));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 102
        echo "    ";
        $context["breadcrumbs"] = [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.menu.user_emails")]];
        // line 105
        echo "    ";
        $this->loadTemplate("@OroNavigation/Menu/breadcrumbs.html.twig", "@OroEmail/Email/userEmails.html.twig", 105)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/userEmails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 105,  221 => 102,  208 => 101,  191 => 96,  187 => 94,  185 => 92,  184 => 91,  183 => 85,  180 => 84,  177 => 83,  175 => 76,  173 => 70,  168 => 66,  166 => 65,  165 => 64,  164 => 63,  161 => 62,  159 => 61,  156 => 60,  153 => 59,  140 => 58,  105 => 32,  103 => 31,  98 => 30,  85 => 29,  71 => 1,  69 => 56,  66 => 12,  64 => 11,  62 => 9,  60 => 8,  58 => 5,  55 => 4,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/index.html.twig' %}
{% import '@OroEmail/actions.html.twig' as EmailActions %}

{% set name = app.user|oro_format_name|default('N/A') %}
{% oro_title_set({params : {\"%username%\": name }}) %}

{# grid params #}
{% set params = {'userId': app.user.id} %}
{% set gridName = 'user-email-grid' %}

{% if isMobileVersion() %}
    {% set renderParams = {
        'themeOptions': {
            'tagName': 'div',
            'headerHide': true,
            'showMassActionOnToolbar': true,
            'bodyClassName': 'user-emails-grid',
            'rowTemplateSelector': '#template-user-email-grid-row'
        },
        'toolbarOptions': {
            'placement': {
                'bottom': true
            }
        }
    }
    %}
{% endif %}

{% block content_datagrid %}
    {{ parent() }}
    {% if isMobileVersion() %}
        <script id=\"template-user-email-grid-row\" type=\"text/template\">
            <div class=\"user-emails-row\">
                <div class=\"user-emails-row__top clearfix\">
                    <div class=\"user-emails-row__select-row\">
                        <input type=\"checkbox\" data-role=\"select-row\">
                    </div>
                    <div class=\"user-emails-row__contacts\">
                        <%= model.contacts %>
                    </div>
                    <div class=\"user-emails-row__date\">
                        <%= model.sentAt %>
                    </div>
                    <div class=\"user-emails-row__attachments\">
                        <%= model.attachments %>
                    </div>
                </div>
                <div class=\"user-emails-row__subject\">
                    <%= model.subject %>
                </div>
            </div>
        </script>
    {% endif %}
{% endblock content_datagrid %}

{% set pageTitle = 'oro.email.entity_plural_label'|trans %}

{% block navButtons %}
    {% import '@OroEmail/actions.html.twig' as EmailActions %}

    {% if is_granted('oro_email_email_create') %}
        <div class=\"btn-group\">
            {{ EmailActions.createEmailButton({
                entityClass: oro_class_name(app.user, true),
                entityId: app.user.id})
            }}
        </div>
    {% endif %}

    {%- set actionSync =
        '<i class=\"fa-refresh hide-text\">' ~
            'oro.email.action.sync'|trans ~
        '</i>' ~
        'oro.email.action.sync'|trans
    %}
    {%- set actionProcessing =
        '<i class=\"fa-refresh hide-text\">' ~
            'oro.email.action.processing'|trans ~
        '</i>' ~
        'oro.email.action.processing'|trans ~
        '&nbsp;<span class=\"loading-dots\"></span>'
    %}
    {% import '@OroUI/macros.html.twig' as UI %}

    <div class=\"btn-group\" {{ UI.renderPageComponentAttributes({
        view: 'oroemail/js/app/views/email-sync-view',
        options: {
            syncPath: path('oro_email_user_sync_emails'),
            processingMessage: 'oro.email.action.message.processing'|trans,
            errorHandlerMessage: 'oro.email.action.message.error'|trans,
            actionProcessing: actionProcessing,
            actionSync: actionSync
        }
    }) }}>
        <a href=\"#\" role=\"button\" class=\"btn sync-btn icons-holder-text no-hash\" data-role=\"sync\">
            {{ actionSync|raw }}
        </a>
    </div>
{% endblock %}

{% block breadcrumb %}
    {% set breadcrumbs = [{
        'label': 'oro.email.menu.user_emails'|trans
    }] %}
    {% include '@OroNavigation/Menu/breadcrumbs.html.twig' %}
{% endblock breadcrumb %}
", "@OroEmail/Email/userEmails.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/userEmails.html.twig");
    }
}
