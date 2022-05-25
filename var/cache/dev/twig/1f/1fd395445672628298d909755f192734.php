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

/* @OroEmail/Dashboard/recentEmails.html.twig */
class __TwigTemplate_ea149c51554dedaf7a33c344733b2565 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'actions' => [$this, 'block_actions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroDashboard/Dashboard/tabbedWidget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Dashboard/recentEmails.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Dashboard/recentEmails.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Dashboard/recentEmails.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Dashboard/recentEmails.html.twig", 2)->unwrap();
        // line 4
        ob_start();
        // line 5
        echo "    <div class=\"email-mail-count-circle\" ";
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/view-component", "options" => ["view" => "oroemail/js/app/views/unread-emails-counter-view", "count" =>         // line 9
(isset($context["unreadMailCount"]) || array_key_exists("unreadMailCount", $context) ? $context["unreadMailCount"] : (function () { throw new RuntimeError('Variable "unreadMailCount" does not exist.', 9, $this->source); })()), "autoRender" => true]]], 5, $context, $this->getSourceContext());
        // line 12
        echo "></div>
";
        $context["unreadMailCount"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("@OroDashboard/Dashboard/tabbedWidget.html.twig", "@OroEmail/Dashboard/recentEmails.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 15));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    ";
        $context["tabs"] = [0 => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_dashboard_recent_emails", ["widget" =>         // line 19
(isset($context["widgetName"]) || array_key_exists("widgetName", $context) ? $context["widgetName"] : (function () { throw new RuntimeError('Variable "widgetName" does not exist.', 19, $this->source); })()), "activeTab" => "inbox", "contentType" => "tab"]), "name" => "inbox", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.recent_emails.inbox")], 1 => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_dashboard_recent_emails", ["widget" =>         // line 27
(isset($context["widgetName"]) || array_key_exists("widgetName", $context) ? $context["widgetName"] : (function () { throw new RuntimeError('Variable "widgetName" does not exist.', 27, $this->source); })()), "activeTab" => "sent", "contentType" => "tab"]), "name" => "sent", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.recent_emails.sent")], 2 => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_dashboard_recent_emails", ["widget" =>         // line 35
(isset($context["widgetName"]) || array_key_exists("widgetName", $context) ? $context["widgetName"] : (function () { throw new RuntimeError('Variable "widgetName" does not exist.', 35, $this->source); })()), "activeTab" => "new", "contentType" => "tab"]), "name" => "unread", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.recent_emails.unread"), "afterHtml" =>         // line 39
(isset($context["unreadMailCount"]) || array_key_exists("unreadMailCount", $context) ? $context["unreadMailCount"] : (function () { throw new RuntimeError('Variable "unreadMailCount" does not exist.', 39, $this->source); })())]];
        // line 41
        echo "
    ";
        // line 42
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 45
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("actions", $this->getTemplateName(), 45));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actions"));

        // line 46
        echo "    ";
        $context["actions"] = [0 => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_user_emails", ["id" =>         // line 47
(isset($context["loggedUserId"]) || array_key_exists("loggedUserId", $context) ? $context["loggedUserId"] : (function () { throw new RuntimeError('Variable "loggedUserId" does not exist.', 47, $this->source); })())]), "type" => "link", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.recent_emails.view_all")]];
        // line 51
        echo "
    ";
        // line 52
        $this->displayParentBlock("actions", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Dashboard/recentEmails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 52,  133 => 51,  131 => 47,  129 => 46,  116 => 45,  101 => 42,  98 => 41,  96 => 39,  95 => 35,  94 => 27,  93 => 19,  91 => 16,  78 => 15,  64 => 1,  60 => 12,  58 => 9,  56 => 5,  54 => 4,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroDashboard/Dashboard/tabbedWidget.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}

{% set unreadMailCount %}
    <div class=\"email-mail-count-circle\" {{ UI.renderPageComponentAttributes({
        module: 'oroui/js/app/components/view-component',
        options: {
            view: 'oroemail/js/app/views/unread-emails-counter-view',
            count: unreadMailCount,
            autoRender: true
        }
    }) }}></div>
{% endset %}

{% block content %}
    {% set tabs = [{
        'url': path(
            'oro_email_dashboard_recent_emails',
            {'widget': widgetName, 'activeTab': 'inbox', 'contentType': 'tab'}
        ),
        'name': 'inbox',
        'label': 'oro.dashboard.recent_emails.inbox'|trans
    },
    {
        'url': path(
            'oro_email_dashboard_recent_emails',
            {'widget': widgetName, 'activeTab': 'sent', 'contentType': 'tab'}
        ),
        'name': 'sent',
        'label': 'oro.dashboard.recent_emails.sent'|trans
    },
    {
        'url': path(
            'oro_email_dashboard_recent_emails',
            {'widget': widgetName, 'activeTab': 'new', 'contentType': 'tab'}
        ),
        'name': 'unread',
        'label': 'oro.dashboard.recent_emails.unread'|trans,
        'afterHtml': unreadMailCount
    }] %}

    {{ parent() }}
{% endblock %}

{% block actions %}
    {% set actions = [{
        'url': path('oro_email_user_emails', {'id': loggedUserId}),
        'type': 'link',
        'label': 'oro.dashboard.recent_emails.view_all'|trans
    }] %}

    {{ parent() }}
{% endblock %}
", "@OroEmail/Dashboard/recentEmails.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Dashboard/recentEmails.html.twig");
    }
}
