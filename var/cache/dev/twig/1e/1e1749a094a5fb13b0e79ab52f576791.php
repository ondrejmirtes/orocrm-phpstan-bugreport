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

/* @OroZendesk/Case/caseTicketInfo.html.twig */
class __TwigTemplate_15aee66c5b621e80bde6ed707d253c2c extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroZendesk/Case/caseTicketInfo.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroZendesk/Case/caseTicketInfo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroZendesk/Case/caseTicketInfo.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_case_view")) {
            // line 2
            echo "    ";
            $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroZendesk/Case/caseTicketInfo.html.twig", 2)->unwrap();
            // line 3
            echo "    ";
            $macros["email"] = $this->macros["email"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroZendesk/Case/caseTicketInfo.html.twig", 3)->unwrap();
            // line 4
            echo "    ";
            $macros["caseTicketInfo"] = $this->macros["caseTicketInfo"] = $this;
            // line 5
            echo "
    ";
            // line 31
            echo "
    ";
            // line 32
            $context["ticket"] = $this->extensions['Oro\Bundle\ZendeskBundle\Twig\ZendeskExtension']->getTicketByCase((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 32, $this->source); })()));
            // line 33
            echo "    ";
            if ((isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 33, $this->source); })())) {
                // line 34
                echo "        <div class=\"responsive-cell\">
            <div class=\"box-type1\">
                <div class=\"title\">
                    <span class=\"widget-title\">";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.zendesk.ticket_info_title"), "html", null, true);
                echo "</span>
                </div>
                <div class=\"row-fluid form-horizontal\">
                    <div class=\"responsive-block\">

                        ";
                // line 42
                ob_start();
                // line 43
                echo "                            ";
                $context["url"] = $this->extensions['Oro\Bundle\ZendeskBundle\Twig\ZendeskExtension']->getTicketUrl((isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 43, $this->source); })()));
                // line 44
                echo "                            ";
                if ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 44, $this->source); })())) {
                    // line 45
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 45, $this->source); })()), "html", null, true);
                    echo "\" target=\"_blank\" class=\"no-hash\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 45, $this->source); })()), "originId", [], "any", false, false, false, 45), "html", null, true);
                    echo "</a>
                            ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 46
(isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 46, $this->source); })()), "originId", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 47, $this->source); })()), "originId", [], "any", false, false, false, 47), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 49
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty"), "html", null, true);
                    echo "
                            ";
                }
                // line 51
                echo "                        ";
                $context["link"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 52
                echo "                        ";
                echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.zendesk.ticket.origin_id.label"), (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 52, $this->source); })())], 52, $context, $this->getSourceContext());
                echo "

                        ";
                // line 54
                ob_start();
                // line 55
                echo "                            ";
                echo twig_call_macro($macros["email"], "macro_email_address_simple", [twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 55, $this->source); })()), "recipient", [], "any", false, false, false, 55)], 55, $context, $this->getSourceContext());
                echo "
                        ";
                $context["recipient"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 57
                echo "                        ";
                echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.zendesk.ticket.recipient.label"), twig_trim_filter((isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 57, $this->source); })()))], 57, $context, $this->getSourceContext());
                echo "
                        ";
                // line 58
                echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.zendesk.ticket.status.label"), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, true, false, 58), "label", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, true, false, 58), "label", [], "any", false, false, false, 58), false)) : (false))], 58, $context, $this->getSourceContext());
                echo "
                        ";
                // line 59
                echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.zendesk.ticket.type.label"), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "type", [], "any", false, true, false, 59), "label", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "type", [], "any", false, true, false, 59), "label", [], "any", false, false, false, 59), false)) : (false))], 59, $context, $this->getSourceContext());
                echo "
                        ";
                // line 60
                echo twig_call_macro($macros["caseTicketInfo"], "macro_render_zendesk_user", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.zendesk.ticket.submitter.label"), twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 60, $this->source); })()), "submitter", [], "any", false, false, false, 60)], 60, $context, $this->getSourceContext());
                echo "
                        ";
                // line 61
                echo twig_call_macro($macros["caseTicketInfo"], "macro_render_zendesk_user", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.zendesk.ticket.assignee.label"), twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 61, $this->source); })()), "assignee", [], "any", false, false, false, 61)], 61, $context, $this->getSourceContext());
                echo "
                        ";
                // line 62
                echo twig_call_macro($macros["caseTicketInfo"], "macro_render_zendesk_user", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.zendesk.ticket.requester.label"), twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 62, $this->source); })()), "requester", [], "any", false, false, false, 62)], 62, $context, $this->getSourceContext());
                echo "
                        ";
                // line 63
                echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.zendesk.ticket.priority.label"), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", false, true, false, 63), "label", [], "any", true, true, false, 63)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", false, true, false, 63), "label", [], "any", false, false, false, 63), false)) : (false))], 63, $context, $this->getSourceContext());
                echo "
                        ";
                // line 64
                ob_start();
                // line 65
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 65, $this->source); })()), "problem", [], "any", false, false, false, 65) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 65, $this->source); })()), "problem", [], "any", false, false, false, 65), "relatedCase", [], "any", false, false, false, 65))) {
                    // line 66
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_case_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 66, $this->source); })()), "problem", [], "any", false, false, false, 66), "relatedCase", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)]), "html", null, true);
                    echo "\">
                                    ";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 67, $this->source); })()), "problem", [], "any", false, false, false, 67), "subject", [], "any", false, false, false, 67), "html", null, true);
                    echo "
                                </a>
                            ";
                }
                // line 70
                echo "                        ";
                $context["problem"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 71
                echo "                        ";
                echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.zendesk.ticket.problem.label"), twig_trim_filter($this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize((isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 71, $this->source); })())))], 71, $context, $this->getSourceContext());
                echo "

                        ";
                // line 73
                ob_start();
                // line 74
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 74, $this->source); })()), "collaborators", [], "any", false, false, false, 74)) {
                    // line 75
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 75, $this->source); })()), "collaborators", [], "any", false, false, false, 75));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["collaborator"]) {
                        // line 76
                        echo "                                    ";
                        echo twig_call_macro($macros["caseTicketInfo"], "macro_render_zendesk_user", [false, $context["collaborator"]], 76, $context, $this->getSourceContext());
                        echo "
                                    ";
                        // line 77
                        if (((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 77) > 1) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 77))) {
                            // line 78
                            echo "                                        ,&nbsp;
                                    ";
                        }
                        // line 80
                        echo "                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collaborator'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 81
                    echo "                            ";
                }
                // line 82
                echo "                        ";
                $context["collaborators"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 83
                echo "                        ";
                echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.zendesk.ticket.collaborators.label"), twig_trim_filter((isset($context["collaborators"]) || array_key_exists("collaborators", $context) ? $context["collaborators"] : (function () { throw new RuntimeError('Variable "collaborators" does not exist.', 83, $this->source); })()))], 83, $context, $this->getSourceContext());
                echo "
                    </div>
                </div>
            </div>
        </div>
    ";
            }
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function macro_render_zendesk_user($__label__ = null, $__user__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "user" => $__user__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_zendesk_user"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_zendesk_user"));

            // line 7
            echo "        ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroZendesk/Case/caseTicketInfo.html.twig", 7)->unwrap();
            // line 8
            echo "        ";
            $macros["caseTicketInfo"] = $this;
            // line 9
            ob_start();
            // line 10
            if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })())) {
                // line 11
                if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "relatedUser", [], "any", false, false, false, 11) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "relatedUser", [], "any", false, false, false, 11)))) {
                    // line 12
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "relatedUser", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)]), "html", null, true);
                    echo "\">
                        ";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13));
                    echo "
                    </a>
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 15
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "relatedContact", [], "any", false, false, false, 15) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "relatedContact", [], "any", false, false, false, 15)))) {
                    // line 16
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_contact_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "relatedContact", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
                    echo "\">
                        ";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17));
                    echo "
                    </a>
                ";
                } else {
                    // line 20
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20));
                    echo "
                ";
                }
            }
            $context["userHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 25
            if ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 25, $this->source); })())) {
                // line 26
                echo "            ";
                echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 26, $this->source); })()), (isset($context["userHtml"]) || array_key_exists("userHtml", $context) ? $context["userHtml"] : (function () { throw new RuntimeError('Variable "userHtml" does not exist.', 26, $this->source); })())], 26, $context, $this->getSourceContext());
                echo "
        ";
            } else {
                // line 28
                echo "            ";
                echo twig_escape_filter($this->env, (isset($context["userHtml"]) || array_key_exists("userHtml", $context) ? $context["userHtml"] : (function () { throw new RuntimeError('Variable "userHtml" does not exist.', 28, $this->source); })()), "html", null, true);
                echo "
        ";
            }
            // line 30
            echo "    ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroZendesk/Case/caseTicketInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 30,  328 => 28,  322 => 26,  320 => 25,  312 => 20,  306 => 17,  301 => 16,  299 => 15,  294 => 13,  289 => 12,  287 => 11,  285 => 10,  283 => 9,  280 => 8,  277 => 7,  257 => 6,  235 => 83,  232 => 82,  229 => 81,  215 => 80,  211 => 78,  209 => 77,  204 => 76,  186 => 75,  183 => 74,  181 => 73,  175 => 71,  172 => 70,  166 => 67,  161 => 66,  158 => 65,  156 => 64,  152 => 63,  148 => 62,  144 => 61,  140 => 60,  136 => 59,  132 => 58,  127 => 57,  121 => 55,  119 => 54,  113 => 52,  110 => 51,  104 => 49,  98 => 47,  96 => 46,  89 => 45,  86 => 44,  83 => 43,  81 => 42,  73 => 37,  68 => 34,  65 => 33,  63 => 32,  60 => 31,  57 => 5,  54 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted('oro_case_view') %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% import '@OroEmail/macros.html.twig' as email %}
    {% import _self as caseTicketInfo %}

    {% macro render_zendesk_user(label, user) %}
        {% import '@OroUI/macros.html.twig' as UI %}
        {% import _self as caseTicketInfo %}
        {%- set userHtml -%}
            {%- if user -%}
                {% if user.relatedUser and is_granted('VIEW', user.relatedUser) %}
                    <a href=\"{{ path('oro_user_view', {'id': user.relatedUser.id}) }}\">
                        {{ user.name|escape }}
                    </a>
                {% elseif user.relatedContact and is_granted('VIEW', user.relatedContact) %}
                    <a href=\"{{ path('oro_contact_view', {'id': user.relatedContact.id}) }}\">
                        {{ user.name|escape }}
                    </a>
                {% else %}
                    {{ user.name|escape }}
                {% endif %}
            {%- endif -%}
        {%- endset -%}

        {% if label %}
            {{ UI.renderHtmlProperty(label, userHtml) }}
        {% else %}
            {{ userHtml }}
        {% endif %}
    {% endmacro %}

    {% set ticket = oro_zendesk_ticket_by_related_case(entity) %}
    {% if ticket %}
        <div class=\"responsive-cell\">
            <div class=\"box-type1\">
                <div class=\"title\">
                    <span class=\"widget-title\">{{ \"oro.zendesk.ticket_info_title\"|trans }}</span>
                </div>
                <div class=\"row-fluid form-horizontal\">
                    <div class=\"responsive-block\">

                        {% set link %}
                            {% set url = oro_zendesk_ticket_url(ticket) %}
                            {% if url %}
                                <a href=\"{{ url }}\" target=\"_blank\" class=\"no-hash\">{{ ticket.originId }}</a>
                            {% elseif ticket.originId %}
                                {{ ticket.originId }}
                            {% else %}
                                {{ 'oro.ui.empty'|trans }}
                            {% endif %}
                        {% endset %}
                        {{ UI.renderHtmlProperty('oro.zendesk.ticket.origin_id.label'|trans, link) }}

                        {% set recipient %}
                            {{ email.email_address_simple(ticket.recipient) }}
                        {% endset %}
                        {{ UI.renderHtmlProperty('oro.zendesk.ticket.recipient.label'|trans, recipient|trim) }}
                        {{ UI.renderProperty('oro.zendesk.ticket.status.label'|trans, ticket.status.label|default(false)) }}
                        {{ UI.renderProperty('oro.zendesk.ticket.type.label'|trans, ticket.type.label|default(false)) }}
                        {{ caseTicketInfo.render_zendesk_user('oro.zendesk.ticket.submitter.label'|trans, ticket.submitter) }}
                        {{ caseTicketInfo.render_zendesk_user('oro.zendesk.ticket.assignee.label'|trans, ticket.assignee) }}
                        {{ caseTicketInfo.render_zendesk_user('oro.zendesk.ticket.requester.label'|trans, ticket.requester) }}
                        {{ UI.renderProperty('oro.zendesk.ticket.priority.label'|trans, ticket.priority.label|default(false)) }}
                        {% set problem %}
                            {% if ticket.problem and ticket.problem.relatedCase %}
                                <a href=\"{{ path('oro_case_view', {'id': ticket.problem.relatedCase.id}) }}\">
                                    {{ ticket.problem.subject }}
                                </a>
                            {% endif %}
                        {% endset %}
                        {{ UI.renderHtmlProperty('oro.zendesk.ticket.problem.label'|trans, problem|oro_html_sanitize|trim) }}

                        {% set collaborators %}
                            {% if ticket.collaborators %}
                                {% for collaborator in ticket.collaborators %}
                                    {{ caseTicketInfo.render_zendesk_user(false, collaborator) }}
                                    {% if loop.length > 1 and not loop.last %}
                                        ,&nbsp;
                                    {% endif %}
                                {% endfor %}
                            {% endif %}
                        {% endset %}
                        {{ UI.renderHtmlProperty('oro.zendesk.ticket.collaborators.label'|trans, collaborators|trim) }}
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endif %}
", "@OroZendesk/Case/caseTicketInfo.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-zendesk/Resources/views/Case/caseTicketInfo.html.twig");
    }
}
