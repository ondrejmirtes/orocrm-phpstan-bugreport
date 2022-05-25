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

/* @OroEmail/Notification/button.html.twig */
class __TwigTemplate_ad69ddf590f2835a949214ad6b633155 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Notification/button.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Notification/button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Notification/button.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Notification/button.html.twig", 1)->unwrap();
        // line 2
        if ($this->extensions['Oro\Bundle\FeatureToggleBundle\Twig\FeatureExtension']->isFeatureEnabled("email")) {
            // line 3
            echo "<script type=\"text/template\" id=\"email-notification-item-template\">
    <div class=\"info\" data-id=\"<%- id %>\">
        <div class=\"body\">
            <% if (subject) { %>
                <div class=\"title nowrap-ellipsis\"><%- subject %></div>
            <% } else { %>
                <div class=\"empty-subject nowrap-ellipsis\">(";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.recent_emails_widget.no_subject"), "html", null, true);
            echo ")</div>
            <% } %>
            <div class=\"description nowrap-ellipsis\"><%= bodyContent %></div>
        </div>
        <% if (seen) {  %>
        <i class=\"mail-icon\" title=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.datagrid.emails.action.mark_as_unread"), "html", null, true);
            echo "\" data-role=\"toggle-read-status\"></i>
        <% } else { %>
        <i class=\"mail-icon highlight\" title=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.datagrid.emails.action.mark_as_read"), "html", null, true);
            echo "\" data-role=\"toggle-read-status\"></i>
        <% } %>
    </div>
    <div class=\"footer\">
        <span class=\"from-name\">
            <% if (linkFromName) { %>
                <a href=\"<%- linkFromName %>\" dir=\"ltr\"><%- fromName %></a>
            <% } else { %>
                <%- fromName %>
            <% } %>
        </span>
        <span class=\"forward-action-wrapper\">
            <span class=\"forward-action\">";
            // line 29
            echo twig_call_macro($macros["UI"], "macro_clientLink", [["dataUrlRaw" => "<%- forwardRoute %>", "aCss" => ((twig_get_attribute($this->env, $this->source,             // line 31
($context["parameters"] ?? null), "aCss", [], "any", true, true, false, 31)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 31, $this->source); })()), "aCss", [], "any", false, false, false, 31) . " no-hash")) : ("no-hash")), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.forward"), "widget" => ["type" => "dialog", "multiple" => false, "options" => ["alias" => "reply-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.forward"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]]], 29, $context, $this->getSourceContext());
            // line 49
            echo "</span>
            <span class=\"reply-action\">";
            // line 51
            echo twig_call_macro($macros["UI"], "macro_clientLink", [["dataUrlRaw" => "<%- replyRoute %>", "aCss" => ((twig_get_attribute($this->env, $this->source,             // line 53
($context["parameters"] ?? null), "aCss", [], "any", true, true, false, 53)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 53, $this->source); })()), "aCss", [], "any", false, false, false, 53) . " no-hash")) : ("no-hash")), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply"), "widget" => ["type" => "dialog", "multiple" => false, "options" => ["alias" => "reply-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply_all"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]]], 51, $context, $this->getSourceContext());
            // line 71
            echo "</span>
            <span class=\"reply-all-action\">";
            // line 73
            echo twig_call_macro($macros["UI"], "macro_clientLink", [["dataUrlRaw" => "<%- replyAllRoute %>", "aCss" => ((twig_get_attribute($this->env, $this->source,             // line 75
($context["parameters"] ?? null), "aCss", [], "any", true, true, false, 75)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 75, $this->source); })()), "aCss", [], "any", false, false, false, 75) . " no-hash")) : ("no-hash")), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply_all"), "widget" => ["type" => "dialog", "multiple" => false, "options" => ["alias" => "reply-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]]], 73, $context, $this->getSourceContext());
            // line 93
            echo "</span>
        </span>
    </div>
</script>

";
            // line 98
            if ($this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_email.show_recent_emails_in_user_bar")) {
                // line 99
                echo "<li class=\"email-notification-menu dropdown\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.notification.menu_item.hint"), "html", null, true);
                echo "\"
    ";
                // line 100
                echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroemail/js/app/components/user-menu-email-notification-component", "options" => ["listSelector" => ".dropdown-menu", "iconSelector" => ".email-notification-icon", "emails" =>                 // line 105
(isset($context["emails"]) || array_key_exists("emails", $context) ? $context["emails"] : (function () { throw new RuntimeError('Variable "emails" does not exist.', 105, $this->source); })()), "count" =>                 // line 106
(isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 106, $this->source); })()), "hasMarkAllButton" => true, "wsChannel" => $this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->getEmailWSChannel()]]], 100, $context, $this->getSourceContext());
                // line 110
                echo ">
    ";
                // line 111
                if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop()) {
                    // line 112
                    echo "    ";
                    $context["togglerId"] = uniqid("dropdown-");
                    // line 113
                    echo "    <a href=\"#\" role=\"button\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 113, $this->source); })()), "html", null, true);
                    echo "\" data-toggle=\"dropdown\"
       class=\"dropdown-toggle dropdown-toggle--no-caret email-notification-icon\"
       title=\"";
                    // line 115
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.menu.user_emails"), "html", null, true);
                    echo "\"
       aria-label=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.menu.user_emails"), "html", null, true);
                    echo "\" aria-haspopup=\"true\" aria-expanded=\"false\"></a>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"";
                    // line 117
                    echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 117, $this->source); })()), "html", null, true);
                    echo "\" tabindex=\"0\"></div>
    <div class=\"new-email-notification\" ";
                    // line 118
                    echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroemail/js/app/components/new-email-message-component"]], 118, $context, $this->getSourceContext());
                    // line 120
                    echo "> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.notification.new_email"), "html", null, true);
                    echo "</div>
    ";
                }
                // line 122
                echo "</li>
";
            } else {
                // line 124
                echo "    <li class=\"hide\" ";
                echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroemail/js/app/components/new-email-flash-message-component"]], 124, $context, $this->getSourceContext());
                // line 126
                echo "></li>
";
            }
            // line 128
            echo "
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Notification/button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 128,  160 => 126,  157 => 124,  153 => 122,  147 => 120,  145 => 118,  141 => 117,  137 => 116,  133 => 115,  127 => 113,  124 => 112,  122 => 111,  119 => 110,  117 => 106,  116 => 105,  115 => 100,  110 => 99,  108 => 98,  101 => 93,  99 => 75,  98 => 73,  95 => 71,  93 => 53,  92 => 51,  89 => 49,  87 => 31,  86 => 29,  71 => 16,  66 => 14,  58 => 9,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% if feature_enabled('email') %}
<script type=\"text/template\" id=\"email-notification-item-template\">
    <div class=\"info\" data-id=\"<%- id %>\">
        <div class=\"body\">
            <% if (subject) { %>
                <div class=\"title nowrap-ellipsis\"><%- subject %></div>
            <% } else { %>
                <div class=\"empty-subject nowrap-ellipsis\">({{ 'oro.email.recent_emails_widget.no_subject'|trans }})</div>
            <% } %>
            <div class=\"description nowrap-ellipsis\"><%= bodyContent %></div>
        </div>
        <% if (seen) {  %>
        <i class=\"mail-icon\" title=\"{{ 'oro.email.datagrid.emails.action.mark_as_unread'|trans }}\" data-role=\"toggle-read-status\"></i>
        <% } else { %>
        <i class=\"mail-icon highlight\" title=\"{{ 'oro.email.datagrid.emails.action.mark_as_read'|trans }}\" data-role=\"toggle-read-status\"></i>
        <% } %>
    </div>
    <div class=\"footer\">
        <span class=\"from-name\">
            <% if (linkFromName) { %>
                <a href=\"<%- linkFromName %>\" dir=\"ltr\"><%- fromName %></a>
            <% } else { %>
                <%- fromName %>
            <% } %>
        </span>
        <span class=\"forward-action-wrapper\">
            <span class=\"forward-action\">
                {{- UI.clientLink({
                    'dataUrlRaw': \"<%- forwardRoute %>\",
                    'aCss': parameters.aCss is defined ? parameters.aCss ~ ' no-hash' : 'no-hash',
                    'label': 'oro.email.forward'|trans,
                    'widget': {
                        'type': 'dialog',
                        'multiple': false,
                        'options': {
                            'alias': 'reply-dialog',
                            'dialogOptions' : {
                                'title' : 'oro.email.forward'|trans,
                                'allowMaximize': true,
                                'allowMinimize': true,
                                'dblclick': 'maximize',
                                'maximizedHeightDecreaseBy': 'minimize-bar',
                                'width': 1000
                            }
                        }
                    }
                }) -}}
            </span>
            <span class=\"reply-action\">
                {{- UI.clientLink({
                    'dataUrlRaw': \"<%- replyRoute %>\",
                    'aCss': parameters.aCss is defined ? parameters.aCss ~ ' no-hash' : 'no-hash',
                    'label': 'oro.email.reply'|trans,
                    'widget': {
                        'type': 'dialog',
                        'multiple': false,
                        'options': {
                            'alias': 'reply-dialog',
                            'dialogOptions' : {
                                'title' : 'oro.email.reply_all'|trans,
                                'allowMaximize': true,
                                'allowMinimize': true,
                                'dblclick': 'maximize',
                                'maximizedHeightDecreaseBy': 'minimize-bar',
                                'width': 1000
                            }
                        }
                    }
                }) -}}
            </span>
            <span class=\"reply-all-action\">
                {{- UI.clientLink({
                    'dataUrlRaw': \"<%- replyAllRoute %>\",
                    'aCss': parameters.aCss is defined ? parameters.aCss ~ ' no-hash' : 'no-hash',
                    'label': 'oro.email.reply_all'|trans,
                    'widget': {
                        'type': 'dialog',
                        'multiple': false,
                        'options': {
                            'alias': 'reply-dialog',
                            'dialogOptions' : {
                                'title' : 'oro.email.reply'|trans,
                                'allowMaximize': true,
                                'allowMinimize': true,
                                'dblclick': 'maximize',
                                'maximizedHeightDecreaseBy': 'minimize-bar',
                                'width': 1000
                            }
                        }
                    }
                }) -}}
            </span>
        </span>
    </div>
</script>

{% if oro_config_value('oro_email.show_recent_emails_in_user_bar') %}
<li class=\"email-notification-menu dropdown\" title=\"{{ 'oro.email.notification.menu_item.hint'|trans }}\"
    {{ UI.renderPageComponentAttributes({
        module: 'oroemail/js/app/components/user-menu-email-notification-component',
        options: {
            listSelector: '.dropdown-menu',
            iconSelector: '.email-notification-icon',
            emails: emails,
            count: count,
            hasMarkAllButton: true,
            wsChannel: oro_get_email_ws_event()
        }
    }) }}>
    {% if isDesktopVersion() %}
    {% set togglerId = 'dropdown-'|uniqid %}
    <a href=\"#\" role=\"button\" id=\"{{ togglerId }}\" data-toggle=\"dropdown\"
       class=\"dropdown-toggle dropdown-toggle--no-caret email-notification-icon\"
       title=\"{{ 'oro.email.menu.user_emails'|trans }}\"
       aria-label=\"{{ 'oro.email.menu.user_emails'|trans }}\" aria-haspopup=\"true\" aria-expanded=\"false\"></a>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"{{ togglerId }}\" tabindex=\"0\"></div>
    <div class=\"new-email-notification\" {{ UI.renderPageComponentAttributes({
        module: 'oroemail/js/app/components/new-email-message-component'
    }) }}> {{ 'oro.email.notification.new_email'|trans }}</div>
    {% endif %}
</li>
{% else %}
    <li class=\"hide\" {{ UI.renderPageComponentAttributes({
        module: 'oroemail/js/app/components/new-email-flash-message-component'
    }) }}></li>
{% endif %}

{% endif %}
", "@OroEmail/Notification/button.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Notification/button.html.twig");
    }
}
