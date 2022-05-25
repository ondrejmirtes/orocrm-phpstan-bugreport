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

/* @OroEmail/Email/Thread/emailItem.html.twig */
class __TwigTemplate_63a0c5fb8ec9bc2f9e3f60adde189727 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/Thread/emailItem.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Thread/emailItem.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Thread/emailItem.html.twig"));

        // line 1
        $macros["Actions"] = $this->macros["Actions"] = $this->loadTemplate("@OroEmail/actions.html.twig", "@OroEmail/Email/Thread/emailItem.html.twig", 1)->unwrap();
        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Email/Thread/emailItem.html.twig", 2)->unwrap();
        // line 3
        $macros["EA"] = $this->macros["EA"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroEmail/Email/Thread/emailItem.html.twig", 3)->unwrap();
        // line 4
        $macros["AC"] = $this->macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroEmail/Email/Thread/emailItem.html.twig", 4)->unwrap();
        // line 5
        echo "
";
        // line 11
        echo "
";
        // line 12
        $context["emailCollapsed"] = ((array_key_exists("emailCollapsed", $context)) ? ((isset($context["emailCollapsed"]) || array_key_exists("emailCollapsed", $context) ? $context["emailCollapsed"] : (function () { throw new RuntimeError('Variable "emailCollapsed" does not exist.', 12, $this->source); })())) : (false));
        // line 13
        echo "<div class=\"email-info";
        echo (((isset($context["emailCollapsed"]) || array_key_exists("emailCollapsed", $context) ? $context["emailCollapsed"] : (function () { throw new RuntimeError('Variable "emailCollapsed" does not exist.', 13, $this->source); })())) ? ("") : (" in"));
        echo "\" data-layout=\"separate\">
    <div class=\"email-short\">
        <div class=\"email-view-toggle\">
            <div class=\"email-sent-date\">
                <div class=\"comment-date\">
                     <span class=\"comment-count\" style=\"display:none\" title=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.comment.quantity_label"), "html", null, true);
        echo "\">
                        <span class=\"count\" aria-hidden=\"true\"></span>
                    </span>
                    ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 21, $this->source); })()), "emailBody", [], "any", false, false, false, 21) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 21, $this->source); })()), "emailBody", [], "any", false, false, false, 21), "hasAttachments", [], "any", false, false, false, 21))) {
            // line 22
            echo "                        <span class=\"email-has-attachment\" aria-hidden=\"true\"></span>
                    ";
        }
        // line 24
        echo "                    ";
        echo twig_call_macro($macros["EA"], "macro_date_smart_format", [twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 24, $this->source); })()), "sentAt", [], "any", false, false, false, 24)], 24, $context, $this->getSourceContext());
        echo "
                </div>


                <div class=\"email-participants\">
                    <span class=\"email-author\">";
        // line 29
        echo twig_call_macro($macros["EA"], "macro_email_participant_name_or_me", [twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 29, $this->source); })()), "fromEmailAddress", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 29, $this->source); })()), "fromName", [], "any", false, false, false, 29), true], 29, $context, $this->getSourceContext());
        echo "</span>
                    <span class=\"email-recipients\">";
        // line 30
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To")), "html", null, true);
        echo " ";
        echo twig_call_macro($macros["EA"], "macro_email_participants_name", [twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 30, $this->source); })()), "recipients", [], "any", false, false, false, 30), true, false], 30, $context, $this->getSourceContext());
        echo "</span>
                </div>
            </div>
            <div class=\"email-body\">
                ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 34, $this->source); })()), "emailBody", [], "any", false, false, false, 34)) {
            // line 35
            echo "                    ";
            echo twig_call_macro($macros["EA"], "macro_email_short_body", [twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 35, $this->source); })()), "emailBody", [], "any", false, false, false, 35), 200], 35, $context, $this->getSourceContext());
            echo "
                ";
        } else {
            // line 37
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.body_is_unavailable"), "html", null, true);
            echo "
                ";
        }
        // line 39
        echo "            </div>
        </div>
    </div>
    <div class=\"email-full\">
        <header class=\"email-header\">
            ";
        // line 45
        echo "            ";
        if (((array_key_exists("renderContexts", $context) && (isset($context["renderContexts"]) || array_key_exists("renderContexts", $context) ? $context["renderContexts"] : (function () { throw new RuntimeError('Variable "renderContexts" does not exist.', 45, $this->source); })())) && (twig_length_filter($this->env, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 45, $this->source); })())) > 0))) {
            // line 46
            echo "                <div class=\"email-contexts-targets\">
                    <div class=\"activity-context-activity-list\">
                        ";
            // line 48
            $context["checkTarget"] = (((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 48, $this->source); })())) ? (true) : (false));
            // line 49
            echo "                        ";
            echo twig_call_macro($macros["AC"], "macro_activity_contexts", [twig_first($this->env, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 49, $this->source); })())), (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 49, $this->source); })()), (isset($context["checkTarget"]) || array_key_exists("checkTarget", $context) ? $context["checkTarget"] : (function () { throw new RuntimeError('Variable "checkTarget" does not exist.', 49, $this->source); })())], 49, $context, $this->getSourceContext());
            echo "
                    </div>
                </div>
            ";
        }
        // line 53
        echo "
            <div class=\"email-actions\">
                <div class=\"email-sent-date\">
                    <span class=\"comment-count\" style=\"display:none\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.comment.quantity_label"), "html", null, true);
        echo "\">
                        <span class=\"count\" aria-hidden=\"true\"></span>
                    </span>
                    ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 59, $this->source); })()), "emailBody", [], "any", false, false, false, 59) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 59, $this->source); })()), "emailBody", [], "any", false, false, false, 59), "hasAttachments", [], "any", false, false, false, 59))) {
            // line 60
            echo "                        <span class=\"email-has-attachment\" aria-hidden=\"true\"></span>
                    ";
        }
        // line 62
        echo "                    ";
        echo twig_call_macro($macros["EA"], "macro_date_smart_format", [twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 62, $this->source); })()), "sentAt", [], "any", false, false, false, 62)], 62, $context, $this->getSourceContext());
        echo "
                </div>

                ";
        // line 65
        $context["actionParameters"] = ["routeParameters" => ((        // line 66
array_key_exists("routeParameters", $context)) ? ((isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 66, $this->source); })())) : ([])), "aCss" => " btn-sm"];
        // line 69
        echo "
                ";
        // line 70
        ob_start();
        // line 71
        echo "                    ";
        if (( !array_key_exists("defaultReplyButton", $context) || ((isset($context["defaultReplyButton"]) || array_key_exists("defaultReplyButton", $context) ? $context["defaultReplyButton"] : (function () { throw new RuntimeError('Variable "defaultReplyButton" does not exist.', 71, $this->source); })()) == 1))) {
            // line 72
            echo "                        ";
            echo twig_call_macro($macros["Actions"], "macro_replyButton", [(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 72, $this->source); })()), (isset($context["actionParameters"]) || array_key_exists("actionParameters", $context) ? $context["actionParameters"] : (function () { throw new RuntimeError('Variable "actionParameters" does not exist.', 72, $this->source); })())], 72, $context, $this->getSourceContext());
            echo "
                        ";
            // line 73
            echo twig_call_macro($macros["Actions"], "macro_replyAllButton", [(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 73, $this->source); })()), (isset($context["actionParameters"]) || array_key_exists("actionParameters", $context) ? $context["actionParameters"] : (function () { throw new RuntimeError('Variable "actionParameters" does not exist.', 73, $this->source); })())], 73, $context, $this->getSourceContext());
            echo "
                    ";
        } else {
            // line 75
            echo "                        ";
            echo twig_call_macro($macros["Actions"], "macro_replyAllButton", [(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 75, $this->source); })()), (isset($context["actionParameters"]) || array_key_exists("actionParameters", $context) ? $context["actionParameters"] : (function () { throw new RuntimeError('Variable "actionParameters" does not exist.', 75, $this->source); })())], 75, $context, $this->getSourceContext());
            echo "
                        ";
            // line 76
            echo twig_call_macro($macros["Actions"], "macro_replyButton", [(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 76, $this->source); })()), (isset($context["actionParameters"]) || array_key_exists("actionParameters", $context) ? $context["actionParameters"] : (function () { throw new RuntimeError('Variable "actionParameters" does not exist.', 76, $this->source); })())], 76, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 78
        echo "                    ";
        echo twig_call_macro($macros["Actions"], "macro_forwardButton", [(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 78, $this->source); })()), (isset($context["actionParameters"]) || array_key_exists("actionParameters", $context) ? $context["actionParameters"] : (function () { throw new RuntimeError('Variable "actionParameters" does not exist.', 78, $this->source); })())], 78, $context, $this->getSourceContext());
        echo "
                ";
        $context["buttonsHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo "
                ";
        // line 81
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop()) {
            // line 82
            echo "                    ";
            echo twig_call_macro($macros["UI"], "macro_pinnedDropdownButton", [["html" =>             // line 83
(isset($context["buttonsHtml"]) || array_key_exists("buttonsHtml", $context) ? $context["buttonsHtml"] : (function () { throw new RuntimeError('Variable "buttonsHtml" does not exist.', 83, $this->source); })()), "options" => ["moreButtonAttrs" => ["class" => " btn-sm"]]]], 82, $context, $this->getSourceContext());
            // line 89
            echo "
                ";
        }
        // line 91
        echo "
                ";
        // line 92
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
            // line 93
            echo "                    <div class=\"email-actions-items\">
                        ";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["buttonsHtml"]) || array_key_exists("buttonsHtml", $context) ? $context["buttonsHtml"] : (function () { throw new RuntimeError('Variable "buttonsHtml" does not exist.', 94, $this->source); })()), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 97
        echo "            </div>
        </header>
        <div class=\"email-content\">
            <div class=\"email-body responsive-cell\">
                <div class=\"email-view-toggle\">
                    <div class=\"email-participants\">
                        <div class=\"email-author\">";
        // line 103
        echo twig_call_macro($macros["EA"], "macro_email_participant_name_or_me", [twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 103, $this->source); })()), "fromEmailAddress", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 103, $this->source); })()), "fromName", [], "any", false, false, false, 103), true], 103, $context, $this->getSourceContext());
        echo "</div>
                        <span class=\"email-recipients\">";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To"), "html", null, true);
        echo ": ";
        echo twig_call_macro($macros["EA"], "macro_email_participants_name", [twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 104, $this->source); })()), "recipients", [], "any", false, false, false, 104), true], 104, $context, $this->getSourceContext());
        echo "</span>
                        <div class=\"email-detailed-info-table dropdown\">
                            ";
        // line 106
        $context["togglerId"] = uniqid("dropdown-");
        // line 107
        echo "                            <span id=\"";
        echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "\" role=\"button\" class=\"btn btn-light dropdown-toggle dropdown-toggle--no-caret\" data-toggle=\"dropdown\"
                                  aria-haspopup=\"true\" aria-expanded=\"false\"
                                  aria-label=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.show_details.label"), "html", null, true);
        echo "\"
                                  title=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.show_details.tooltip"), "html", null, true);
        echo "\">
                                <span class=\"email-detailed-info-table__icon\" aria-hidden=\"true\"></span>
                            </span>
                            <div class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "\">
                                ";
        // line 114
        echo twig_call_macro($macros["EA"], "macro_email_detailed_info_table", [(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 114, $this->source); })())], 114, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 120, $this->source); })()), "emailBody", [], "any", false, false, false, 120)) {
            // line 121
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 121, $this->source); })()), "emailBody", [], "any", false, false, false, 121), "bodyIsText", [], "any", false, false, false, 121)) {
                // line 122
                echo "                        ";
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 122, $this->source); })()), "emailBody", [], "any", false, false, false, 122), "bodyContent", [], "any", false, false, false, 122), "html", null, true));
                echo "
                    ";
            } else {
                // line 124
                echo "                        ";
                $context["emailBodyViewOptions"] = ["name" => "email-body", "view" => "oroemail/js/app/views/email-body-view", "bodyContent" => $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 127
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 127, $this->source); })()), "emailBody", [], "any", false, false, false, 127), "bodyContent", [], "any", false, false, false, 127)), "styles" => [0 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/admin/tinymce/wysiwyg-editor.css"), 1 => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/oroemail/css/email-body.css")]];
                // line 133
                echo "                        <iframe data-page-component-module=\"oroui/js/app/components/view-component\"
                                data-page-component-options=\"";
                // line 134
                echo twig_escape_filter($this->env, json_encode((isset($context["emailBodyViewOptions"]) || array_key_exists("emailBodyViewOptions", $context) ? $context["emailBodyViewOptions"] : (function () { throw new RuntimeError('Variable "emailBodyViewOptions" does not exist.', 134, $this->source); })())), "html", null, true);
                echo "\"></iframe>
                    ";
            }
            // line 136
            echo "                ";
        } else {
            // line 137
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.body_is_unavailable"), "html", null, true);
            echo "
                ";
        }
        // line 139
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 139, $this->source); })()), "emailBody", [], "any", false, false, false, 139)) {
            // line 140
            echo "                    ";
            $context["aCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 140, $this->source); })()), "emailBody", [], "any", false, false, false, 140), "attachments", [], "any", false, false, false, 140));
            // line 141
            echo "                    ";
            $context["previewLimit"] = $this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_email.attachment_preview_limit");
            // line 142
            echo "                    ";
            if ((isset($context["aCount"]) || array_key_exists("aCount", $context) ? $context["aCount"] : (function () { throw new RuntimeError('Variable "aCount" does not exist.', 142, $this->source); })())) {
                // line 143
                echo "                        <div class=\"email-attachments-list-cont\">
                            <h6>";
                // line 144
                echo twig_escape_filter($this->env, (isset($context["aCount"]) || array_key_exists("aCount", $context) ? $context["aCount"] : (function () { throw new RuntimeError('Variable "aCount" does not exist.', 144, $this->source); })()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ((((isset($context["aCount"]) || array_key_exists("aCount", $context) ? $context["aCount"] : (function () { throw new RuntimeError('Variable "aCount" does not exist.', 144, $this->source); })()) > 1)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.attachment.entity_plural_label")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.attachment.entity_label"))), "html", null, true);
                echo "</h6>
                            <a class=\"no-hash\" href=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_body_attachments", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 145, $this->source); })()), "emailBody", [], "any", false, false, false, 145), "id", [], "any", false, false, false, 145)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.attachment.download_all"), "html", null, true);
                echo "</a>
                            <ul class=\"email-attachments-list thumbnails ";
                // line 146
                echo ((((isset($context["aCount"]) || array_key_exists("aCount", $context) ? $context["aCount"] : (function () { throw new RuntimeError('Variable "aCount" does not exist.', 146, $this->source); })()) > (isset($context["previewLimit"]) || array_key_exists("previewLimit", $context) ? $context["previewLimit"] : (function () { throw new RuntimeError('Variable "previewLimit" does not exist.', 146, $this->source); })()))) ? ("name-only") : (""));
                echo "\">
                                ";
                // line 147
                echo twig_call_macro($macros["EA"], "macro_attachments", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 147, $this->source); })()), "emailBody", [], "any", false, false, false, 147), "attachments", [], "any", false, false, false, 147), (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 147, $this->source); })()), (isset($context["hasGrantReattach"]) || array_key_exists("hasGrantReattach", $context) ? $context["hasGrantReattach"] : (function () { throw new RuntimeError('Variable "hasGrantReattach" does not exist.', 147, $this->source); })())], 147, $context, $this->getSourceContext());
                echo "
                            </ul>
                        </div>
                    ";
            }
            // line 151
            echo "                ";
        }
        // line 152
        echo "            </div>";
        // line 153
        ob_start();
        // line 154
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_content_data_comments", $context)) ? (_twig_default_filter((isset($context["view_content_data_comments"]) || array_key_exists("view_content_data_comments", $context) ? $context["view_content_data_comments"] : (function () { throw new RuntimeError('Variable "view_content_data_comments" does not exist.', 154, $this->source); })()), "view_content_data_comments")) : ("view_content_data_comments")), ["entity" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 154, $this->source); })())]);
        $context["commentsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        if ( !twig_test_empty((isset($context["commentsData"]) || array_key_exists("commentsData", $context) ? $context["commentsData"] : (function () { throw new RuntimeError('Variable "commentsData" does not exist.', 156, $this->source); })()))) {
            // line 157
            echo "                <div class=\"responsive-cell\">
                    ";
            // line 158
            echo twig_escape_filter($this->env, (isset($context["commentsData"]) || array_key_exists("commentsData", $context) ? $context["commentsData"] : (function () { throw new RuntimeError('Variable "commentsData" does not exist.', 158, $this->source); })()), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 161
        echo "        </div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/Thread/emailItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 161,  366 => 158,  363 => 157,  361 => 156,  358 => 154,  356 => 153,  354 => 152,  351 => 151,  344 => 147,  340 => 146,  334 => 145,  328 => 144,  325 => 143,  322 => 142,  319 => 141,  316 => 140,  313 => 139,  307 => 137,  304 => 136,  299 => 134,  296 => 133,  294 => 127,  292 => 124,  286 => 122,  283 => 121,  281 => 120,  272 => 114,  268 => 113,  262 => 110,  258 => 109,  252 => 107,  250 => 106,  243 => 104,  239 => 103,  231 => 97,  225 => 94,  222 => 93,  220 => 92,  217 => 91,  213 => 89,  211 => 83,  209 => 82,  207 => 81,  204 => 80,  198 => 78,  193 => 76,  188 => 75,  183 => 73,  178 => 72,  175 => 71,  173 => 70,  170 => 69,  168 => 66,  167 => 65,  160 => 62,  156 => 60,  154 => 59,  148 => 56,  143 => 53,  135 => 49,  133 => 48,  129 => 46,  126 => 45,  119 => 39,  113 => 37,  107 => 35,  105 => 34,  96 => 30,  92 => 29,  83 => 24,  79 => 22,  77 => 21,  71 => 18,  62 => 13,  60 => 12,  57 => 11,  54 => 5,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@OroEmail/actions.html.twig\" as Actions %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroEmail/macros.html.twig' as EA %}
{% import \"@OroActivity/macros.html.twig\" as AC %}

{#
  variables:
    email - an Oro\\Bundle\\EmailBundle\\Entity\\Email
    emailCollapsed - bool, flag to show full email or collapsed, by default it is false (full email)
#}

{% set emailCollapsed = emailCollapsed is defined ? emailCollapsed : false %}
<div class=\"email-info{{ emailCollapsed ? '': ' in'}}\" data-layout=\"separate\">
    <div class=\"email-short\">
        <div class=\"email-view-toggle\">
            <div class=\"email-sent-date\">
                <div class=\"comment-date\">
                     <span class=\"comment-count\" style=\"display:none\" title=\"{{ 'oro.comment.quantity_label'|trans }}\">
                        <span class=\"count\" aria-hidden=\"true\"></span>
                    </span>
                    {% if email.emailBody and email.emailBody.hasAttachments %}
                        <span class=\"email-has-attachment\" aria-hidden=\"true\"></span>
                    {% endif %}
                    {{ EA.date_smart_format(email.sentAt) }}
                </div>


                <div class=\"email-participants\">
                    <span class=\"email-author\">{{ EA.email_participant_name_or_me(email.fromEmailAddress, email.fromName, true) }}</span>
                    <span class=\"email-recipients\">{{ 'To'|trans|lower }} {{ EA.email_participants_name(email.recipients, true, false) }}</span>
                </div>
            </div>
            <div class=\"email-body\">
                {% if email.emailBody %}
                    {{ EA.email_short_body(email.emailBody, 200) }}
                {% else %}
                    {{ 'oro.email.body_is_unavailable'|trans }}
                {% endif %}
            </div>
        </div>
    </div>
    <div class=\"email-full\">
        <header class=\"email-header\">
            {# Display contexts targets in the activity list item view #}
            {% if renderContexts is defined and renderContexts and thread|length > 0 %}
                <div class=\"email-contexts-targets\">
                    <div class=\"activity-context-activity-list\">
                        {% set checkTarget = target ? true : false %}
                        {{ AC.activity_contexts(thread|first, target, checkTarget) }}
                    </div>
                </div>
            {% endif %}

            <div class=\"email-actions\">
                <div class=\"email-sent-date\">
                    <span class=\"comment-count\" style=\"display:none\" title=\"{{ 'oro.comment.quantity_label'|trans }}\">
                        <span class=\"count\" aria-hidden=\"true\"></span>
                    </span>
                    {% if email.emailBody and email.emailBody.hasAttachments %}
                        <span class=\"email-has-attachment\" aria-hidden=\"true\"></span>
                    {% endif %}
                    {{ EA.date_smart_format(email.sentAt) }}
                </div>

                {% set actionParameters = {
                    'routeParameters': routeParameters is defined ? routeParameters : {},
                    'aCss': ' btn-sm'
                } %}

                {% set buttonsHtml %}
                    {% if defaultReplyButton is not defined or defaultReplyButton == 1 %}
                        {{ Actions.replyButton(email, actionParameters) }}
                        {{ Actions.replyAllButton(email, actionParameters) }}
                    {% else %}
                        {{ Actions.replyAllButton(email, actionParameters) }}
                        {{ Actions.replyButton(email, actionParameters) }}
                    {% endif %}
                    {{ Actions.forwardButton(email, actionParameters ) }}
                {% endset %}

                {% if isDesktopVersion() %}
                    {{ UI.pinnedDropdownButton({
                        'html': buttonsHtml,
                        'options': {
                            'moreButtonAttrs': {
                                'class': ' btn-sm'
                            }
                        }
                    }) }}
                {% endif %}

                {% if isMobileVersion() %}
                    <div class=\"email-actions-items\">
                        {{ buttonsHtml }}
                    </div>
                {% endif %}
            </div>
        </header>
        <div class=\"email-content\">
            <div class=\"email-body responsive-cell\">
                <div class=\"email-view-toggle\">
                    <div class=\"email-participants\">
                        <div class=\"email-author\">{{ EA.email_participant_name_or_me(email.fromEmailAddress, email.fromName, true) }}</div>
                        <span class=\"email-recipients\">{{ 'To'|trans }}: {{ EA.email_participants_name(email.recipients, true) }}</span>
                        <div class=\"email-detailed-info-table dropdown\">
                            {% set togglerId = 'dropdown-'|uniqid %}
                            <span id=\"{{ togglerId }}\" role=\"button\" class=\"btn btn-light dropdown-toggle dropdown-toggle--no-caret\" data-toggle=\"dropdown\"
                                  aria-haspopup=\"true\" aria-expanded=\"false\"
                                  aria-label=\"{{ 'oro.email.show_details.label'|trans }}\"
                                  title=\"{{ 'oro.email.show_details.tooltip'|trans }}\">
                                <span class=\"email-detailed-info-table__icon\" aria-hidden=\"true\"></span>
                            </span>
                            <div class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"{{ togglerId }}\">
                                {{ EA.email_detailed_info_table(email) }}
                            </div>
                        </div>
                    </div>
                </div>

                {% if email.emailBody %}
                    {% if email.emailBody.bodyIsText %}
                        {{ email.emailBody.bodyContent|nl2br }}
                    {% else %}
                        {% set emailBodyViewOptions = {
                            name: 'email-body',
                            view: 'oroemail/js/app/views/email-body-view',
                            bodyContent: email.emailBody.bodyContent|oro_html_sanitize,
                            styles: [
                                asset('build/admin/tinymce/wysiwyg-editor.css'),
                                asset('bundles/oroemail/css/email-body.css')
                            ]
                        } %}
                        <iframe data-page-component-module=\"oroui/js/app/components/view-component\"
                                data-page-component-options=\"{{ emailBodyViewOptions|json_encode }}\"></iframe>
                    {% endif %}
                {% else %}
                    {{ 'oro.email.body_is_unavailable'|trans }}
                {% endif %}
                {% if email.emailBody %}
                    {% set aCount = email.emailBody.attachments|length %}
                    {% set previewLimit = oro_config_value('oro_email.attachment_preview_limit') %}
                    {% if aCount %}
                        <div class=\"email-attachments-list-cont\">
                            <h6>{{ aCount }} {{ aCount > 1 ? 'oro.attachment.entity_plural_label'|trans : 'oro.attachment.entity_label'|trans }}</h6>
                            <a class=\"no-hash\" href=\"{{ path('oro_email_body_attachments', {id: email.emailBody.id}) }}\">{{ 'oro.email.attachment.download_all'|trans }}</a>
                            <ul class=\"email-attachments-list thumbnails {{ aCount > previewLimit ? 'name-only' : ''  }}\">
                                {{ EA.attachments(email.emailBody.attachments, target, hasGrantReattach) }}
                            </ul>
                        </div>
                    {% endif %}
                {% endif %}
            </div>
            {%- set commentsData -%}
            {% placeholder view_content_data_comments with {entity: email} %}
            {%- endset -%}
            {% if commentsData is not empty %}
                <div class=\"responsive-cell\">
                    {{ commentsData }}
                </div>
            {% endif  %}
        </div>
    </div>
</div>
", "@OroEmail/Email/Thread/emailItem.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/Thread/emailItem.html.twig");
    }
}
