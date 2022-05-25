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

/* @OroCalendar/invitations.html.twig */
class __TwigTemplate_c4bd5f89e9d4b17987fe2e3aeb7fbd8c extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/invitations.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/invitations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/invitations.html.twig"));

        // line 14
        echo "
";
        // line 47
        echo "
";
        // line 57
        echo "
";
        // line 86
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function macro_calendar_event_invitation($__parentEvent__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parentEvent" => $__parentEvent__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "calendar_event_invitation"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "calendar_event_invitation"));

            // line 3
            echo "    ";
            $macros["invitations"] = $this;
            // line 4
            echo "    <div class=\"row-fluid\">
        <div class=\"responsive-block\">
            <ul class=\"user-status-list list-group\">
                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["parentEvent"]) || array_key_exists("parentEvent", $context) ? $context["parentEvent"] : (function () { throw new RuntimeError('Variable "parentEvent" does not exist.', 7, $this->source); })()), "attendees", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["attendee"]) {
                // line 8
                echo "                    ";
                echo twig_call_macro($macros["invitations"], "macro_build_invitation_link", [$context["attendee"]], 8, $context, $this->getSourceContext());
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attendee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            </ul>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 16
    public function macro_build_invitation_link($__attendee__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attendee" => $__attendee__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "build_invitation_link"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "build_invitation_link"));

            // line 17
            echo "    ";
            $macros["invitations"] = $this;
            // line 18
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/invitations.html.twig", 18)->unwrap();
            // line 19
            echo "        ";
            $context["invitationStatus"] = twig_get_attribute($this->env, $this->source, (isset($context["attendee"]) || array_key_exists("attendee", $context) ? $context["attendee"] : (function () { throw new RuntimeError('Variable "attendee" does not exist.', 19, $this->source); })()), "statusCode", [], "any", false, false, false, 19);
            // line 20
            echo "        ";
            $context["invitationClass"] = twig_call_macro($macros["invitations"], "macro_get_invitatition_status_class", [(isset($context["invitationStatus"]) || array_key_exists("invitationStatus", $context) ? $context["invitationStatus"] : (function () { throw new RuntimeError('Variable "invitationStatus" does not exist.', 20, $this->source); })())], 20, $context, $this->getSourceContext());
            // line 21
            echo "        <li class=\"list-group-item\">
            <i ";
            // line 22
            if ((isset($context["invitationClass"]) || array_key_exists("invitationClass", $context) ? $context["invitationClass"] : (function () { throw new RuntimeError('Variable "invitationClass" does not exist.', 22, $this->source); })())) {
                echo "class=\"";
                echo twig_escape_filter($this->env, (isset($context["invitationClass"]) || array_key_exists("invitationClass", $context) ? $context["invitationClass"] : (function () { throw new RuntimeError('Variable "invitationClass" does not exist.', 22, $this->source); })()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attendee"]) || array_key_exists("attendee", $context) ? $context["attendee"] : (function () { throw new RuntimeError('Variable "attendee" does not exist.', 22, $this->source); })()), "status", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
                echo "\"";
            }
            echo "></i>
            <span class=\"list-group-item-text\">
                ";
            // line 24
            $context["avatar"] = ((twig_get_attribute($this->env, $this->source, (isset($context["attendee"]) || array_key_exists("attendee", $context) ? $context["attendee"] : (function () { throw new RuntimeError('Variable "attendee" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attendee"]) || array_key_exists("attendee", $context) ? $context["attendee"] : (function () { throw new RuntimeError('Variable "attendee" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "avatar", [], "any", false, false, false, 24)) : (""));
            // line 25
            echo "                ";
            $this->loadTemplate("@OroAttachment/Twig/picture.html.twig", "@OroCalendar/invitations.html.twig", 25)->display(twig_array_merge($context, ["sources" => (($this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFilteredPictureSources(            // line 26
(isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 26, $this->source); })()), "avatar_xsmall")) ? ($this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFilteredPictureSources((isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 26, $this->source); })()), "avatar_xsmall")) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/oroui/img/avatar-xsmall.png")))]));
            // line 28
            echo "                ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_user_user_view") && twig_get_attribute($this->env, $this->source, (isset($context["attendee"]) || array_key_exists("attendee", $context) ? $context["attendee"] : (function () { throw new RuntimeError('Variable "attendee" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28))) {
                // line 29
                echo "                    ";
                echo twig_call_macro($macros["UI"], "macro_link", [["label" => _twig_default_filter($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source,                 // line 30
(isset($context["attendee"]) || array_key_exists("attendee", $context) ? $context["attendee"] : (function () { throw new RuntimeError('Variable "attendee" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")), "path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 31
(isset($context["attendee"]) || array_key_exists("attendee", $context) ? $context["attendee"] : (function () { throw new RuntimeError('Variable "attendee" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)])]], 29, $context, $this->getSourceContext());
                // line 32
                echo "
                ";
            } else {
                // line 34
                echo "                    ";
                $context["attendeeName"] = twig_get_attribute($this->env, $this->source, (isset($context["attendee"]) || array_key_exists("attendee", $context) ? $context["attendee"] : (function () { throw new RuntimeError('Variable "attendee" does not exist.', 34, $this->source); })()), "displayName", [], "any", false, false, false, 34);
                // line 35
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["attendee"]) || array_key_exists("attendee", $context) ? $context["attendee"] : (function () { throw new RuntimeError('Variable "attendee" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "                        ";
                    $context["attendeeName"] = (((isset($context["attendeeName"]) || array_key_exists("attendeeName", $context) ? $context["attendeeName"] : (function () { throw new RuntimeError('Variable "attendeeName" does not exist.', 36, $this->source); })())) ? (((((isset($context["attendeeName"]) || array_key_exists("attendeeName", $context) ? $context["attendeeName"] : (function () { throw new RuntimeError('Variable "attendeeName" does not exist.', 36, $this->source); })()) . " (") . twig_get_attribute($this->env, $this->source, (isset($context["attendee"]) || array_key_exists("attendee", $context) ? $context["attendee"] : (function () { throw new RuntimeError('Variable "attendee" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36)) . ")")) : (twig_get_attribute($this->env, $this->source, (isset($context["attendee"]) || array_key_exists("attendee", $context) ? $context["attendee"] : (function () { throw new RuntimeError('Variable "attendee" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36)));
                    // line 37
                    echo "                    ";
                }
                // line 38
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["attendeeName"]) || array_key_exists("attendeeName", $context) ? $context["attendeeName"] : (function () { throw new RuntimeError('Variable "attendeeName" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "
                ";
            }
            // line 40
            echo "                ";
            $context["typeId"] = ((twig_get_attribute($this->env, $this->source, (isset($context["attendee"]) || array_key_exists("attendee", $context) ? $context["attendee"] : (function () { throw new RuntimeError('Variable "attendee" does not exist.', 40, $this->source); })()), "type", [], "any", false, false, false, 40)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attendee"]) || array_key_exists("attendee", $context) ? $context["attendee"] : (function () { throw new RuntimeError('Variable "attendee" does not exist.', 40, $this->source); })()), "type", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)) : (null));
            // line 41
            if ((isset($context["typeId"]) || array_key_exists("typeId", $context) ? $context["typeId"] : (function () { throw new RuntimeError('Variable "typeId" does not exist.', 41, $this->source); })())) {
                // line 42
                echo "                - ";
                echo twig_call_macro($macros["invitations"], "macro_get_attendee_type", [(isset($context["typeId"]) || array_key_exists("typeId", $context) ? $context["typeId"] : (function () { throw new RuntimeError('Variable "typeId" does not exist.', 42, $this->source); })())], 42, $context, $this->getSourceContext());
                echo "
                ";
            }
            // line 44
            echo "</span>
        </li>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 48
    public function macro_get_invitatition_badge_class($__invitationStatus__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "invitationStatus" => $__invitationStatus__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "get_invitatition_badge_class"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "get_invitatition_badge_class"));

            // line 49
            if (((isset($context["invitationStatus"]) || array_key_exists("invitationStatus", $context) ? $context["invitationStatus"] : (function () { throw new RuntimeError('Variable "invitationStatus" does not exist.', 49, $this->source); })()) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_TENTATIVE"))) {
                // line 50
                echo "tentatively";
            } elseif ((            // line 51
(isset($context["invitationStatus"]) || array_key_exists("invitationStatus", $context) ? $context["invitationStatus"] : (function () { throw new RuntimeError('Variable "invitationStatus" does not exist.', 51, $this->source); })()) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_ACCEPTED"))) {
                // line 52
                echo "enabled";
            } elseif ((            // line 53
(isset($context["invitationStatus"]) || array_key_exists("invitationStatus", $context) ? $context["invitationStatus"] : (function () { throw new RuntimeError('Variable "invitationStatus" does not exist.', 53, $this->source); })()) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED"))) {
                // line 54
                echo "disabled";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 58
    public function macro_get_invitatition_status_class($__invitationStatus__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "invitationStatus" => $__invitationStatus__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "get_invitatition_status_class"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "get_invitatition_status_class"));

            // line 59
            if (((isset($context["invitationStatus"]) || array_key_exists("invitationStatus", $context) ? $context["invitationStatus"] : (function () { throw new RuntimeError('Variable "invitationStatus" does not exist.', 59, $this->source); })()) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_NONE"))) {
                // line 60
                echo "fa-reply";
            } elseif ((            // line 61
(isset($context["invitationStatus"]) || array_key_exists("invitationStatus", $context) ? $context["invitationStatus"] : (function () { throw new RuntimeError('Variable "invitationStatus" does not exist.', 61, $this->source); })()) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_TENTATIVE"))) {
                // line 62
                echo "fa-question";
            } elseif ((            // line 63
(isset($context["invitationStatus"]) || array_key_exists("invitationStatus", $context) ? $context["invitationStatus"] : (function () { throw new RuntimeError('Variable "invitationStatus" does not exist.', 63, $this->source); })()) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_ACCEPTED"))) {
                // line 64
                echo "fa-check";
            } elseif ((            // line 65
(isset($context["invitationStatus"]) || array_key_exists("invitationStatus", $context) ? $context["invitationStatus"] : (function () { throw new RuntimeError('Variable "invitationStatus" does not exist.', 65, $this->source); })()) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::STATUS_DECLINED"))) {
                // line 66
                echo "fa-close";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 70
    public function macro_calendar_event_invitation_status($__statusCode__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "statusCode" => $__statusCode__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "calendar_event_invitation_status"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "calendar_event_invitation_status"));

            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("oro.calendar.calendarevent.statuses." . (isset($context["statusCode"]) || array_key_exists("statusCode", $context) ? $context["statusCode"] : (function () { throw new RuntimeError('Variable "statusCode" does not exist.', 71, $this->source); })())) . ".label")), "html", null, true);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 74
    public function macro_calendar_event_invitation_going_status($__statusCode__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "statusCode" => $__statusCode__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "calendar_event_invitation_going_status"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "calendar_event_invitation_going_status"));

            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("oro.calendar.calendarevent.action.going_status." . (isset($context["statusCode"]) || array_key_exists("statusCode", $context) ? $context["statusCode"] : (function () { throw new RuntimeError('Variable "statusCode" does not exist.', 75, $this->source); })())) . ".label")), "html", null, true);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 78
    public function macro_notify_attendees_component(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "notify_attendees_component"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "notify_attendees_component"));

            // line 79
            echo "    ";
            if ($this->extensions['Oro\Bundle\CalendarBundle\Twig\AttendeesExtension']->isAttendeesInvitationEnabled()) {
                // line 80
                echo "    <div style=\"display: none\"
         data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
                // line 82
                echo twig_escape_filter($this->env, json_encode(["view" => "orocalendar/js/app/views/attendee-notifier-view"]), "html", null, true);
                echo "\">
    </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 87
    public function macro_get_attendee_type($__typeId__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "typeId" => $__typeId__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "get_attendee_type"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "get_attendee_type"));

            // line 88
            if (((isset($context["typeId"]) || array_key_exists("typeId", $context) ? $context["typeId"] : (function () { throw new RuntimeError('Variable "typeId" does not exist.', 88, $this->source); })()) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::TYPE_ORGANIZER"))) {
                // line 89
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.attendee.type.organizer.label"), "html", null, true);
            } elseif ((            // line 90
(isset($context["typeId"]) || array_key_exists("typeId", $context) ? $context["typeId"] : (function () { throw new RuntimeError('Variable "typeId" does not exist.', 90, $this->source); })()) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::TYPE_OPTIONAL"))) {
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.attendee.type.optional.label"), "html", null, true);
            } elseif ((            // line 92
(isset($context["typeId"]) || array_key_exists("typeId", $context) ? $context["typeId"] : (function () { throw new RuntimeError('Variable "typeId" does not exist.', 92, $this->source); })()) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\Attendee::TYPE_REQUIRED"))) {
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.attendee.type.required.label"), "html", null, true);
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroCalendar/invitations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 93,  469 => 92,  467 => 91,  465 => 90,  463 => 89,  461 => 88,  442 => 87,  423 => 82,  419 => 80,  416 => 79,  398 => 78,  383 => 75,  364 => 74,  349 => 71,  330 => 70,  314 => 66,  312 => 65,  310 => 64,  308 => 63,  306 => 62,  304 => 61,  302 => 60,  300 => 59,  281 => 58,  265 => 54,  263 => 53,  261 => 52,  259 => 51,  257 => 50,  255 => 49,  236 => 48,  219 => 44,  213 => 42,  211 => 41,  208 => 40,  202 => 38,  199 => 37,  196 => 36,  193 => 35,  190 => 34,  186 => 32,  184 => 31,  183 => 30,  181 => 29,  178 => 28,  176 => 26,  174 => 25,  172 => 24,  161 => 22,  158 => 21,  155 => 20,  152 => 19,  149 => 18,  146 => 17,  127 => 16,  109 => 10,  100 => 8,  96 => 7,  91 => 4,  88 => 3,  69 => 2,  55 => 86,  52 => 57,  49 => 47,  46 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{# Build attendees list #}
{% macro calendar_event_invitation(parentEvent) %}
    {% import _self as invitations %}
    <div class=\"row-fluid\">
        <div class=\"responsive-block\">
            <ul class=\"user-status-list list-group\">
                {% for attendee in parentEvent.attendees %}
                    {{ invitations.build_invitation_link(attendee) }}
                {% endfor %}
            </ul>
        </div>
    </div>
{% endmacro %}

{# build attendee #}
{% macro build_invitation_link(attendee) %}
    {% import _self as invitations %}
    {% import '@OroUI/macros.html.twig' as UI %}
        {% set invitationStatus = attendee.statusCode %}
        {% set invitationClass = invitations.get_invitatition_status_class(invitationStatus) %}
        <li class=\"list-group-item\">
            <i {% if invitationClass %}class=\"{{ invitationClass }}\" title=\"{{ attendee.status.name }}\"{% endif %}></i>
            <span class=\"list-group-item-text\">
                {% set avatar = attendee.user ? attendee.user.avatar %}
                {% include '@OroAttachment/Twig/picture.html.twig' with {
                    sources: oro_filtered_picture_sources(avatar, 'avatar_xsmall') ?: asset('bundles/oroui/img/avatar-xsmall.png'),
                } %}
                {% if (is_granted('oro_user_user_view') and attendee.user) %}
                    {{ UI.link({
                        'label' : attendee.user|oro_format_name|default('N/A'|trans),
                        'path'  : path('oro_user_view', {'id': attendee.user.id })
                    }) }}
                {% else %}
                    {% set attendeeName = attendee.displayName %}
                    {% if attendee.email %}
                        {% set attendeeName = attendeeName ? attendeeName ~ ' (' ~ attendee.email ~ ')' : attendee.email %}
                    {% endif %}
                    {{ attendeeName }}
                {% endif %}
                {% set typeId = attendee.type ? attendee.type.id : null %}
                {%- if typeId %}
                - {{ invitations.get_attendee_type(typeId) }}
                {% endif -%}
            </span>
        </li>
{% endmacro %}

{% macro get_invitatition_badge_class(invitationStatus) %}
    {%- if invitationStatus == constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_TENTATIVE') -%}
        tentatively
    {%- elseif invitationStatus == constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_ACCEPTED') -%}
        enabled
    {%- elseif invitationStatus == constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_DECLINED') -%}
        disabled
    {%- endif -%}
{% endmacro %}

{% macro get_invitatition_status_class(invitationStatus) %}
    {%- if invitationStatus == constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_NONE') -%}
        fa-reply
    {%- elseif invitationStatus == constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_TENTATIVE') -%}
        fa-question
    {%- elseif invitationStatus == constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_ACCEPTED') -%}
        fa-check
    {%- elseif invitationStatus == constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::STATUS_DECLINED') -%}
        fa-close
    {%- endif -%}
{% endmacro %}

{%- macro calendar_event_invitation_status(statusCode) -%}
    {{ ('oro.calendar.calendarevent.statuses.' ~ statusCode ~ '.label')|trans }}
{%- endmacro -%}

{%- macro calendar_event_invitation_going_status(statusCode) -%}
    {{ ('oro.calendar.calendarevent.action.going_status.' ~ statusCode ~ '.label')|trans }}
{%- endmacro -%}

{% macro notify_attendees_component() %}
    {% if is_attendees_invitation_enabled() %}
    <div style=\"display: none\"
         data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"{{ {'view': 'orocalendar/js/app/views/attendee-notifier-view'}|json_encode }}\">
    </div>
    {% endif %}
{% endmacro %}

{% macro get_attendee_type(typeId) %}
    {%- if typeId == constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::TYPE_ORGANIZER') -%}
        {{ 'oro.calendar.attendee.type.organizer.label'|trans }}
    {%- elseif typeId == constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::TYPE_OPTIONAL') -%}
        {{ 'oro.calendar.attendee.type.optional.label'|trans }}
    {%- elseif typeId == constant('Oro\\\\Bundle\\\\CalendarBundle\\\\Entity\\\\Attendee::TYPE_REQUIRED') -%}
        {{ 'oro.calendar.attendee.type.required.label'|trans }}
    {%- endif -%}
{% endmacro %}
", "@OroCalendar/invitations.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/invitations.html.twig");
    }
}
