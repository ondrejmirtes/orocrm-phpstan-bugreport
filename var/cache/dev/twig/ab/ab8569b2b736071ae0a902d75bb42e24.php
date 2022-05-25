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

/* @OroEmail/Email/js/groupedActivityItemTemplate.html.twig */
class __TwigTemplate_fce7a37c5dc4ed17f98bd11c5f84ba30 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'activityIcon' => [$this, 'block_activityIcon'],
            'activityDetails' => [$this, 'block_activityDetails'],
            'activityActions' => [$this, 'block_activityActions'],
            'activityContent' => [$this, 'block_activityContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroActivityList/ActivityList/js/activityItemTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/js/groupedActivityItemTemplate.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/js/groupedActivityItemTemplate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/js/groupedActivityItemTemplate.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Email/js/groupedActivityItemTemplate.html.twig", 2)->unwrap();
        // line 3
        $macros["EA"] = $this->macros["EA"] = $this->loadTemplate("@OroEmail/actions.html.twig", "@OroEmail/Email/js/groupedActivityItemTemplate.html.twig", 3)->unwrap();
        // line 5
        $context["entityClass"] = "Oro\\Bundle\\EmailBundle\\Entity\\Email";
        // line 6
        $context["entityName"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue((isset($context["entityClass"]) || array_key_exists("entityClass", $context) ? $context["entityClass"] : (function () { throw new RuntimeError('Variable "entityClass" does not exist.', 6, $this->source); })()), "label"));
        // line 1
        $this->parent = $this->loadTemplate("@OroActivityList/ActivityList/js/activityItemTemplate.html.twig", "@OroEmail/Email/js/groupedActivityItemTemplate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_activityIcon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityIcon", $this->getTemplateName(), 8));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityIcon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityIcon"));

        // line 9
        echo "    <% if(is_head && !ignoreHead) { %>
        <span class=\"icon-email-thread\" aria-hidden=\"true\"></span>
    <% } else { %>
        <span class=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue((isset($context["entityClass"]) || array_key_exists("entityClass", $context) ? $context["entityClass"] : (function () { throw new RuntimeError('Variable "entityClass" does not exist.', 12, $this->source); })()), "icon"), "html_attr");
        echo "\" aria-hidden=\"true\"></span>
    <% } %>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 16
    public function block_activityDetails($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityDetails", $this->getTemplateName(), 16));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityDetails"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityDetails"));

        // line 17
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "
    <%
        var hasLink   = !!data.ownerLink;
        var ownerLink = hasLink
                ? '<a class=\"user\" href=\"' + data.ownerLink + '\">' +  _.escape(data.ownerName) + '</a>'
                : '<span class=\"user\">' + _.escape(data.ownerName) + '</span>';
        var updatedAt = updatedAt;
        var subject = subject;
        if(is_head && !ignoreHead) {
            ownerLink = hasLink
                ? '<a class=\"user\" href=\"' + data.ownerLink + '\">' +  _.escape(data.headOwnerName) + '</a>'
                : '<span class=\"user\">' + _.escape(data.headOwnerName) + '</span>';
            updatedAt = dateFormatter.formatSmartDateTime(data.headSentAt);
            subject = data.headSubject;
        }
    %>
    <%= _.template(
        ";
        // line 34
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.sent_by.label"));
        echo ",
        { interpolate: /\\{\\{(.+?)\\}\\}/g }
    )({
        user: ownerLink,
        date: '<span class=\"date\">' + updatedAt + '</span>'
    }) %>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 42
    public function block_activityActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityActions", $this->getTemplateName(), 42));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        // line 43
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Email/js/groupedActivityItemTemplate.html.twig", 43)->unwrap();
        // line 44
        echo "
    ";
        // line 45
        ob_start();
        // line 46
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_email_user_edit")) {
            // line 47
            echo "            <a href=\"#\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.contexts.placeholder"), "html_attr");
            echo "\"
               class=\"dropdown-item\"
               data-url=\"<%- routing.generate('oro_activity_context', {'id': relatedActivityId, 'activity': '";
            // line 49
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["entityClass"]) || array_key_exists("entityClass", $context) ? $context["entityClass"] : (function () { throw new RuntimeError('Variable "entityClass" does not exist.', 49, $this->source); })()), ["\\" => "_"]), "html", null, true);
            echo "' }) %>\"
                    ";
            // line 50
            echo twig_call_macro($macros["UI"], "macro_renderWidgetDataAttributes", [["type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => ["alias" => "activity-context-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.contexts.add_context_entity.label"), "allowMaximize" => true, "allowMinimize" => true, "modal" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000, "height" => 600]]]], 50, $context, $this->getSourceContext());
            // line 67
            echo "><span class=\"fa-link hide-text\" aria-hidden=\"true\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.contexts.placeholder"), "html", null, true);
            echo "</span>
                ";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.contexts.placeholder"), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 71
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo "    ";
        $context["actions"] = [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 72, $this->source); })())];
        // line 73
        echo "
    ";
        // line 74
        ob_start();
        // line 75
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_email_create")) {
            // line 76
            echo "            <a href=\"#\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply"), "html", null, true);
            echo "\"
               class=\"dropdown-item\"
               data-url=\"<%- routing.generate('oro_email_email_reply', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
               ";
            // line 79
            echo twig_call_macro($macros["UI"], "macro_renderWidgetDataAttributes", [["type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => ["alias" => "email-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]], 79, $context, $this->getSourceContext());
            // line 94
            echo "><span class=\"fa-reply hide-text\" aria-hidden=\"true\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply"), "html", null, true);
            echo "</span>
                ";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply"), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 98
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 99
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 99, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 99, $this->source); })())]);
        // line 100
        echo "
    ";
        // line 101
        ob_start();
        // line 102
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_email_create")) {
            // line 103
            echo "        <a href=\"#\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply_all"), "html_attr");
            echo "\"
           class=\"dropdown-item\"
           data-url=\"<%- routing.generate('oro_email_email_reply_all', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
                ";
            // line 106
            echo twig_call_macro($macros["UI"], "macro_renderWidgetDataAttributes", [["type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => ["alias" => "email-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]], 106, $context, $this->getSourceContext());
            // line 121
            echo "><span class=\"fa-reply-all hide-text\" aria-hidden=\"true\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply_all"), "html", null, true);
            echo "</span>
            ";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply_all"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 125
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 126
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 126, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 126, $this->source); })())]);
        // line 127
        echo "
    ";
        // line 128
        ob_start();
        // line 129
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_email_create")) {
            // line 130
            echo "            <a href=\"#\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.forward"), "html", null, true);
            echo "\"
               class=\"dropdown-item\"
               data-url=\"<%- routing.generate('oro_email_email_forward', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
               ";
            // line 133
            echo twig_call_macro($macros["UI"], "macro_renderWidgetDataAttributes", [["type" => "dialog", "multiple" => true, "refresh-widget-alias" => "activity-list-widget", "options" => ["alias" => "forward-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]], 133, $context, $this->getSourceContext());
            // line 148
            echo "><span class=\"fa-mail-forward hide-text\" aria-hidden=\"true\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.forward"), "html", null, true);
            echo "</span>
                ";
            // line 149
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.forward"), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 152
        echo "    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 153
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 153, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 153, $this->source); })())]);
        // line 154
        echo "
    ";
        // line 155
        ob_start();
        // line 156
        echo "        <a href=\"<%- routing.generate('oro_email_thread_view', {'id': relatedActivityId}) %>\"
           class=\"dropdown-item\"
           title=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.view"), "html_attr");
        echo "\"><span
                class=\"fa-eye hide-text\" aria-hidden=\"true\">";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.view"), "html", null, true);
        echo "</span>
            ";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.view"), "html", null, true);
        echo "
        </a>
    ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 163
        echo "    ";
        $context["actions"] = twig_array_merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 163, $this->source); })()), [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 163, $this->source); })())]);
        // line 164
        echo "
    ";
        // line 165
        $this->displayParentBlock("activityActions", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 168
    public function block_activityContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityContent", $this->getTemplateName(), 168));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityContent"));

        // line 169
        echo "    <div class=\"activity-item-email-content\">
        ";
        // line 171
        echo "        <div class=\"info <% if (is_head && !ignoreHead) { %>thread<% } %>\" id=\"grouped-entity-<%- data.entityId %>\"></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/js/groupedActivityItemTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 171,  376 => 169,  363 => 168,  348 => 165,  345 => 164,  342 => 163,  336 => 160,  332 => 159,  328 => 158,  324 => 156,  322 => 155,  319 => 154,  316 => 153,  313 => 152,  307 => 149,  302 => 148,  300 => 133,  293 => 130,  290 => 129,  288 => 128,  285 => 127,  282 => 126,  279 => 125,  273 => 122,  268 => 121,  266 => 106,  259 => 103,  256 => 102,  254 => 101,  251 => 100,  248 => 99,  245 => 98,  239 => 95,  234 => 94,  232 => 79,  225 => 76,  222 => 75,  220 => 74,  217 => 73,  214 => 72,  211 => 71,  205 => 68,  200 => 67,  198 => 50,  194 => 49,  188 => 47,  185 => 46,  183 => 45,  180 => 44,  177 => 43,  164 => 42,  144 => 34,  123 => 17,  110 => 16,  94 => 12,  89 => 9,  76 => 8,  62 => 1,  60 => 6,  58 => 5,  56 => 3,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroActivityList/ActivityList/js/activityItemTemplate.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI%}
{% import '@OroEmail/actions.html.twig' as EA %}

{% set entityClass = 'Oro\\\\Bundle\\\\EmailBundle\\\\Entity\\\\Email' %}
{% set entityName = oro_entity_config_value(entityClass, 'label')|trans %}

{% block activityIcon %}
    <% if(is_head && !ignoreHead) { %>
        <span class=\"icon-email-thread\" aria-hidden=\"true\"></span>
    <% } else { %>
        <span class=\"{{ oro_entity_config_value(entityClass, 'icon')|e('html_attr') }}\" aria-hidden=\"true\"></span>
    <% } %>
{% endblock %}

{% block activityDetails %}
    {{ entityName }}
    <%
        var hasLink   = !!data.ownerLink;
        var ownerLink = hasLink
                ? '<a class=\"user\" href=\"' + data.ownerLink + '\">' +  _.escape(data.ownerName) + '</a>'
                : '<span class=\"user\">' + _.escape(data.ownerName) + '</span>';
        var updatedAt = updatedAt;
        var subject = subject;
        if(is_head && !ignoreHead) {
            ownerLink = hasLink
                ? '<a class=\"user\" href=\"' + data.ownerLink + '\">' +  _.escape(data.headOwnerName) + '</a>'
                : '<span class=\"user\">' + _.escape(data.headOwnerName) + '</span>';
            updatedAt = dateFormatter.formatSmartDateTime(data.headSentAt);
            subject = data.headSubject;
        }
    %>
    <%= _.template(
        {{ 'oro.email.sent_by.label'|trans|json_encode|raw }},
        { interpolate: /\\{\\{(.+?)\\}\\}/g }
    )({
        user: ownerLink,
        date: '<span class=\"date\">' + updatedAt + '</span>'
    }) %>
{% endblock %}

{% block activityActions %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set action %}
        {% if is_granted('oro_email_email_user_edit') %}
            <a href=\"#\" title=\"{{ 'oro.activity.contexts.placeholder'|trans|e('html_attr') }}\"
               class=\"dropdown-item\"
               data-url=\"<%- routing.generate('oro_activity_context', {'id': relatedActivityId, 'activity': '{{ entityClass|replace({'\\\\': '_'}) }}' }) %>\"
                    {{ UI.renderWidgetDataAttributes({
                    'type' : 'dialog',
                    'multiple' : true,
                    'refresh-widget-alias': 'activity-list-widget',
                    'options' : {
                        'alias': 'activity-context-dialog',
                        'dialogOptions' : {
                            'title' : 'oro.activity.contexts.add_context_entity.label'|trans,
                            'allowMaximize': true,
                            'allowMinimize': true,
                            'modal': true,
                            'dblclick': 'maximize',
                            'maximizedHeightDecreaseBy': 'minimize-bar',
                            'width': 1000,
                            'height': 600
                        }
                    }
                    }) }}><span class=\"fa-link hide-text\" aria-hidden=\"true\">{{ 'oro.activity.contexts.placeholder'|trans }}</span>
                {{ 'oro.activity.contexts.placeholder'|trans }}
            </a>
        {% endif %}
    {% endset %}
    {% set actions = [action] %}

    {% set action %}
        {% if is_granted('oro_email_email_create') %}
            <a href=\"#\" title=\"{{ 'oro.email.reply'|trans }}\"
               class=\"dropdown-item\"
               data-url=\"<%- routing.generate('oro_email_email_reply', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
               {{ UI.renderWidgetDataAttributes({
                'type': 'dialog',
                'multiple': true,
                'refresh-widget-alias': 'activity-list-widget',
                'options': {
                    'alias': 'email-dialog',
                    'dialogOptions': {
                        'title': 'oro.email.send_email'|trans,
                        'allowMaximize': true,
                        'allowMinimize': true,
                        'dblclick': 'maximize',
                        'maximizedHeightDecreaseBy': 'minimize-bar',
                        'width': 1000
                    }
                }
            }) }}><span class=\"fa-reply hide-text\" aria-hidden=\"true\">{{ 'oro.email.reply'|trans }}</span>
                {{ 'oro.email.reply'|trans }}
            </a>
        {% endif %}
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {% set action %}
    {% if is_granted('oro_email_email_create') %}
        <a href=\"#\" title=\"{{ 'oro.email.reply_all'|trans|e('html_attr') }}\"
           class=\"dropdown-item\"
           data-url=\"<%- routing.generate('oro_email_email_reply_all', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
                {{ UI.renderWidgetDataAttributes({
                    'type': 'dialog',
                    'multiple': true,
                    'refresh-widget-alias': 'activity-list-widget',
                    'options': {
                        'alias': 'email-dialog',
                        'dialogOptions': {
                            'title': 'oro.email.send_email'|trans,
                            'allowMaximize': true,
                            'allowMinimize': true,
                            'dblclick': 'maximize',
                            'maximizedHeightDecreaseBy': 'minimize-bar',
                            'width': 1000
                        }
                    }
                }) }}><span class=\"fa-reply-all hide-text\" aria-hidden=\"true\">{{ 'oro.email.reply_all'|trans }}</span>
            {{ 'oro.email.reply_all'|trans }}
        </a>
    {% endif %}
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {% set action %}
        {% if is_granted('oro_email_email_create') %}
            <a href=\"#\" title=\"{{ 'oro.email.forward'|trans }}\"
               class=\"dropdown-item\"
               data-url=\"<%- routing.generate('oro_email_email_forward', {'id': relatedActivityId, 'entityClass': targetEntityData.class, 'entityId': targetEntityData.id}) %>\"
               {{ UI.renderWidgetDataAttributes({
                'type': 'dialog',
                'multiple': true,
                'refresh-widget-alias': 'activity-list-widget',
                'options': {
                    'alias': 'forward-dialog',
                    'dialogOptions': {
                        'title': 'oro.email.send_email'|trans,
                        'allowMaximize': true,
                        'allowMinimize': true,
                        'dblclick': 'maximize',
                        'maximizedHeightDecreaseBy': 'minimize-bar',
                        'width': 1000
                    }
                }
            }) }}><span class=\"fa-mail-forward hide-text\" aria-hidden=\"true\">{{ 'oro.email.forward'|trans }}</span>
                {{ 'oro.email.forward'|trans }}
            </a>
        {% endif %}
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {% set action %}
        <a href=\"<%- routing.generate('oro_email_thread_view', {'id': relatedActivityId}) %>\"
           class=\"dropdown-item\"
           title=\"{{ 'oro.email.view'|trans|e('html_attr') }}\"><span
                class=\"fa-eye hide-text\" aria-hidden=\"true\">{{ 'oro.email.view'|trans }}</span>
            {{ 'oro.email.view'|trans }}
        </a>
    {% endset %}
    {% set actions = actions|merge([action]) %}

    {{ parent() }}
{% endblock %}

{% block activityContent %}
    <div class=\"activity-item-email-content\">
        {# Do NOT remove. Placeholder for activity view #}
        <div class=\"info <% if (is_head && !ignoreHead) { %>thread<% } %>\" id=\"grouped-entity-<%- data.entityId %>\"></div>
    </div>
{% endblock %}
", "@OroEmail/Email/js/groupedActivityItemTemplate.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/js/groupedActivityItemTemplate.html.twig");
    }
}
