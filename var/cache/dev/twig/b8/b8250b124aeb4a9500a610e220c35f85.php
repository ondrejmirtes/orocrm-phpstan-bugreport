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

/* @OroEmail/actions.html.twig */
class __TwigTemplate_18c5571138ea853926c76cc9f2264e2e extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/actions.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/actions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/actions.html.twig"));

        // line 179
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function macro_sendEmailLink($__email__ = null, $__entity__ = null, $__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "email" => $__email__,
            "entity" => $__entity__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sendEmailLink"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sendEmailLink"));

            // line 12
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_email_create")) {
                // line 13
                echo "        ";
                $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/actions.html.twig", 13)->unwrap();
                // line 14
                echo twig_call_macro($macros["UI"], "macro_clientLink", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_email_create", ["to" =>                 // line 17
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 17, $this->source); })()), "entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(                // line 18
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source,                 // line 19
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "class" => ((twig_get_attribute($this->env, $this->source,                 // line 21
($context["parameters"] ?? null), "cssClass", [], "any", true, true, false, 21)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 21, $this->source); })()), "cssClass", [], "any", false, false, false, 21)) : ("")), "dir" => "ltr", "iCss" => ((twig_get_attribute($this->env, $this->source,                 // line 23
($context["parameters"] ?? null), "iCss", [], "any", true, true, false, 23)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 23, $this->source); })()), "iCss", [], "any", false, false, false, 23)) : ("")), "aCss" => ((twig_get_attribute($this->env, $this->source,                 // line 24
($context["parameters"] ?? null), "aCss", [], "any", true, true, false, 24)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 24, $this->source); })()), "aCss", [], "any", false, false, false, 24) . " no-hash")) : ("no-hash")), "label" =>                 // line 25
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 25, $this->source); })()), "widget" => ["type" => "dialog", "multiple" => true, "reload-grid-name" => "activity-email-grid", "options" => ["alias" => "email-dialog", "method" => "POST", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]]], 14, $context, $this->getSourceContext());
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 47
    public function macro_replyAllButton($__emailEntity__ = null, $__parameters__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "emailEntity" => $__emailEntity__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "replyAllButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "replyAllButton"));

            // line 48
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_email_create")) {
                // line 49
                echo "        ";
                $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/actions.html.twig", 49)->unwrap();
                // line 50
                $context["routeParameters"] = ["id" => twig_get_attribute($this->env, $this->source,                 // line 51
(isset($context["emailEntity"]) || array_key_exists("emailEntity", $context) ? $context["emailEntity"] : (function () { throw new RuntimeError('Variable "emailEntity" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)];
                // line 53
                if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "routeParameters", [], "any", true, true, false, 53)) {
                    // line 54
                    $context["routeParameters"] = twig_array_merge((isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 54, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 54, $this->source); })()), "routeParameters", [], "any", false, false, false, 54));
                }
                // line 56
                echo twig_call_macro($macros["UI"], "macro_clientButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_email_reply_all",                 // line 57
(isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 57, $this->source); })())), "aCss" => ((twig_get_attribute($this->env, $this->source,                 // line 58
($context["parameters"] ?? null), "aCss", [], "any", true, true, false, 58)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 58, $this->source); })()), "aCss", [], "any", false, false, false, 58) . " no-hash")) : ("no-hash")), "iCss" => ((twig_get_attribute($this->env, $this->source,                 // line 59
($context["parameters"] ?? null), "iCss", [], "any", true, true, false, 59)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 59, $this->source); })()), "iCss", [], "any", false, false, false, 59) . " fa-reply-all")) : ("fa-reply-all")), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply_all"), "widget" => ["type" => "dialog", "multiple" => false, "refresh-widget-alias" => "activity-list-widget", "reload-widget-alias" => "thread-view", "options" => ["alias" => "reply-all-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply_all"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]]], 56, $context, $this->getSourceContext());
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 82
    public function macro_replyButton($__emailEntity__ = null, $__parameters__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "emailEntity" => $__emailEntity__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "replyButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "replyButton"));

            // line 83
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_email_create")) {
                // line 84
                echo "        ";
                $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/actions.html.twig", 84)->unwrap();
                // line 85
                $context["routeParameters"] = ["id" => twig_get_attribute($this->env, $this->source,                 // line 86
(isset($context["emailEntity"]) || array_key_exists("emailEntity", $context) ? $context["emailEntity"] : (function () { throw new RuntimeError('Variable "emailEntity" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86)];
                // line 88
                if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "routeParameters", [], "any", true, true, false, 88)) {
                    // line 89
                    $context["routeParameters"] = twig_array_merge((isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 89, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 89, $this->source); })()), "routeParameters", [], "any", false, false, false, 89));
                }
                // line 91
                echo twig_call_macro($macros["UI"], "macro_clientButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_email_reply",                 // line 92
(isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 92, $this->source); })())), "aCss" => ((twig_get_attribute($this->env, $this->source,                 // line 93
($context["parameters"] ?? null), "aCss", [], "any", true, true, false, 93)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 93, $this->source); })()), "aCss", [], "any", false, false, false, 93) . " no-hash")) : ("no-hash")), "iCss" => ((twig_get_attribute($this->env, $this->source,                 // line 94
($context["parameters"] ?? null), "iCss", [], "any", true, true, false, 94)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 94, $this->source); })()), "iCss", [], "any", false, false, false, 94) . " fa-reply")) : ("fa-reply")), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply"), "widget" => ["type" => "dialog", "multiple" => false, "refresh-widget-alias" => "activity-list-widget", "reload-widget-alias" => "thread-view", "options" => ["alias" => "reply-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.reply"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]]], 91, $context, $this->getSourceContext());
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 117
    public function macro_forwardButton($__emailEntity__ = null, $__parameters__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "emailEntity" => $__emailEntity__,
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "forwardButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "forwardButton"));

            // line 118
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_email_create")) {
                // line 119
                echo "        ";
                $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/actions.html.twig", 119)->unwrap();
                // line 120
                $context["routeParameters"] = ["id" => twig_get_attribute($this->env, $this->source,                 // line 121
(isset($context["emailEntity"]) || array_key_exists("emailEntity", $context) ? $context["emailEntity"] : (function () { throw new RuntimeError('Variable "emailEntity" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121)];
                // line 123
                if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "routeParameters", [], "any", true, true, false, 123)) {
                    // line 124
                    $context["routeParameters"] = twig_array_merge((isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 124, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 124, $this->source); })()), "routeParameters", [], "any", false, false, false, 124));
                }
                // line 126
                echo twig_call_macro($macros["UI"], "macro_clientButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_email_forward",                 // line 127
(isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 127, $this->source); })())), "aCss" => ((twig_get_attribute($this->env, $this->source,                 // line 128
($context["parameters"] ?? null), "aCss", [], "any", true, true, false, 128)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 128, $this->source); })()), "aCss", [], "any", false, false, false, 128) . " no-hash")) : ("no-hash")), "iCss" => ((twig_get_attribute($this->env, $this->source,                 // line 129
($context["parameters"] ?? null), "iCss", [], "any", true, true, false, 129)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 129, $this->source); })()), "iCss", [], "any", false, false, false, 129) . " fa-mail-forward")) : ("fa-mail-forward")), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.forward"), "widget" => ["type" => "dialog", "multiple" => false, "refresh-widget-alias" => "activity-list-widget", "reload-widget-alias" => "thread-view", "options" => ["alias" => "foward-dialog", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.forward"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]]], 126, $context, $this->getSourceContext());
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 152
    public function macro_createEmailButton($__parameters__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "createEmailButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "createEmailButton"));

            // line 153
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_email_create")) {
                // line 154
                echo "        ";
                $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/actions.html.twig", 154)->unwrap();
                // line 155
                echo "        ";
                echo twig_call_macro($macros["UI"], "macro_clientButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_email_create",                 // line 156
(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 156, $this->source); })())), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.menu.compose"), "iCss" => "fa-envelope", "widget" => ["type" => "dialog", "multiple" => true, "reload-grid-name" => "user-email-grid", "options" => ["alias" => "email-dialog", "method" => "POST", "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.send_email"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000]]]]], 155, $context, $this->getSourceContext());
                // line 176
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 180
    public function macro_addMarkUnreadButton($__emailEntity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "emailEntity" => $__emailEntity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "addMarkUnreadButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "addMarkUnreadButton"));

            // line 181
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_email_email_user_edit", (isset($context["emailEntity"]) || array_key_exists("emailEntity", $context) ? $context["emailEntity"] : (function () { throw new RuntimeError('Variable "emailEntity" does not exist.', 181, $this->source); })()))) {
                // line 182
                echo "        ";
                $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/actions.html.twig", 182)->unwrap();
                // line 183
                echo "        ";
                echo twig_call_macro($macros["UI"], "macro_clientButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_mark_seen", ["id" => twig_get_attribute($this->env, $this->source,                 // line 186
(isset($context["emailEntity"]) || array_key_exists("emailEntity", $context) ? $context["emailEntity"] : (function () { throw new RuntimeError('Variable "emailEntity" does not exist.', 186, $this->source); })()), "id", [], "any", false, false, false, 186), "status" => 0]), "dataAttributes" => ["page-component-module" => "oroemail/js/app/components/mark-unread-button", "page-component-options" => json_encode(["redirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_user_emails")])], "aCss" => "no-hash", "iCss" => "fa-minus hide-text", "dataId" => twig_get_attribute($this->env, $this->source,                 // line 197
(isset($context["emailEntity"]) || array_key_exists("emailEntity", $context) ? $context["emailEntity"] : (function () { throw new RuntimeError('Variable "emailEntity" does not exist.', 197, $this->source); })()), "id", [], "any", false, false, false, 197), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.menu.mark_unread.label")]], 183, $context, $this->getSourceContext());
                // line 199
                echo "
    ";
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
        return "@OroEmail/actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 199,  337 => 197,  336 => 186,  334 => 183,  331 => 182,  329 => 181,  310 => 180,  293 => 176,  291 => 156,  289 => 155,  286 => 154,  284 => 153,  265 => 152,  249 => 129,  248 => 128,  247 => 127,  246 => 126,  243 => 124,  241 => 123,  239 => 121,  238 => 120,  235 => 119,  233 => 118,  213 => 117,  197 => 94,  196 => 93,  195 => 92,  194 => 91,  191 => 89,  189 => 88,  187 => 86,  186 => 85,  183 => 84,  181 => 83,  161 => 82,  145 => 59,  144 => 58,  143 => 57,  142 => 56,  139 => 54,  137 => 53,  135 => 51,  134 => 50,  131 => 49,  129 => 48,  109 => 47,  93 => 25,  92 => 24,  91 => 23,  90 => 21,  89 => 19,  88 => 18,  87 => 17,  86 => 14,  83 => 13,  81 => 12,  60 => 11,  46 => 179,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Renders a link which can be used to open send email dialog
    Parameters:
        email      - TO email address
        entity     - a target entity an email should be associated with
        parameters - additional parameters, array:
            [
                'aCss' - additional css class for 'a' tag
            ]
#}
{% macro sendEmailLink(email, entity, parameters) -%}
    {% if is_granted('oro_email_email_create') %}
        {% import '@OroUI/macros.html.twig' as UI %}
        {{- UI.clientLink({
            'dataUrl': path(
                'oro_email_email_create', {
                    to: email,
                    entityClass: oro_class_name(entity, true),
                    entityId: entity.id
            }),
            'class': parameters.cssClass is defined ? parameters.cssClass : '',
            'dir': 'ltr',
            'iCss': parameters.iCss is defined ? parameters.iCss : '',
            'aCss': parameters.aCss is defined ? parameters.aCss ~ ' no-hash' : 'no-hash',
            'label': email,
            'widget': {
                'type': 'dialog',
                'multiple': true,
                'reload-grid-name': 'activity-email-grid',
                'options': {
                    'alias': 'email-dialog',
                    'method': 'POST',
                    'dialogOptions' : {
                        'title' : 'oro.email.send_email'|trans,
                        'allowMaximize': true,
                        'allowMinimize': true,
                        'dblclick': 'maximize',
                        'maximizedHeightDecreaseBy': 'minimize-bar',
                        'width': 1000
                    }
                }
            }
        }) -}}
    {% endif %}
{% endmacro -%}

{% macro replyAllButton(emailEntity, parameters = {}) -%}
    {% if is_granted('oro_email_email_create') %}
        {% import '@OroUI/macros.html.twig' as UI %}
        {%- set routeParameters = {
        id: emailEntity.id
        } -%}
        {%- if parameters.routeParameters is defined %}
            {%- set routeParameters = routeParameters|merge(parameters.routeParameters) -%}
        {% endif -%}
        {{- UI.clientButton({
            'dataUrl': path('oro_email_email_reply_all', routeParameters),
            'aCss': parameters.aCss is defined ? parameters.aCss ~ ' no-hash' : 'no-hash',
            'iCss': parameters.iCss is defined ? parameters.iCss ~ ' fa-reply-all' : 'fa-reply-all',
            'label': 'oro.email.reply_all'|trans,
            'widget': {
                'type': 'dialog',
                'multiple': false,
                'refresh-widget-alias': 'activity-list-widget',
                'reload-widget-alias': 'thread-view',
                'options': {
                    'alias': 'reply-all-dialog',
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
    {% endif %}
{% endmacro -%}

{% macro replyButton(emailEntity, parameters = {}) -%}
    {% if is_granted('oro_email_email_create') %}
        {% import '@OroUI/macros.html.twig' as UI %}
        {%- set routeParameters = {
            id: emailEntity.id
        } -%}
        {%- if parameters.routeParameters is defined %}
            {%- set routeParameters = routeParameters|merge(parameters.routeParameters) -%}
        {% endif -%}
        {{- UI.clientButton({
            'dataUrl': path('oro_email_email_reply', routeParameters),
            'aCss': parameters.aCss is defined ? parameters.aCss ~ ' no-hash' : 'no-hash',
            'iCss': parameters.iCss is defined ? parameters.iCss ~ ' fa-reply' : 'fa-reply',
            'label': 'oro.email.reply'|trans,
            'widget': {
                'type': 'dialog',
                'multiple': false,
                'refresh-widget-alias': 'activity-list-widget',
                'reload-widget-alias': 'thread-view',
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
    {% endif %}
{% endmacro -%}

{% macro forwardButton(emailEntity, parameters = {}) -%}
    {% if is_granted('oro_email_email_create') %}
        {% import '@OroUI/macros.html.twig' as UI %}
        {%- set routeParameters = {
            id: emailEntity.id
        } -%}
        {%- if parameters.routeParameters is defined %}
            {%- set routeParameters = routeParameters|merge(parameters.routeParameters) -%}
        {% endif -%}
        {{- UI.clientButton({
            'dataUrl': path('oro_email_email_forward', routeParameters),
            'aCss': parameters.aCss is defined ? parameters.aCss ~ ' no-hash' : 'no-hash',
            'iCss': parameters.iCss is defined ? parameters.iCss ~ ' fa-mail-forward' : 'fa-mail-forward',
            'label': 'oro.email.forward'|trans,
            'widget': {
                'type': 'dialog',
                'multiple': false,
                'refresh-widget-alias': 'activity-list-widget',
                'reload-widget-alias': 'thread-view',
                'options': {
                    'alias': 'foward-dialog',
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
    {% endif %}
{% endmacro -%}

{% macro createEmailButton(parameters = {}) -%}
    {% if is_granted('oro_email_email_create') %}
        {% import '@OroUI/macros.html.twig' as UI %}
        {{ UI.clientButton({
            'dataUrl': path('oro_email_email_create', parameters),
            'label': 'oro.email.menu.compose'|trans,
            'iCss': 'fa-envelope',
            'widget': {
                'type': 'dialog',
                'multiple': true,
                'reload-grid-name': 'user-email-grid',
                'options': {
                    'alias': 'email-dialog',
                    'method': 'POST',
                    'dialogOptions' : {
                        'title' : 'oro.email.send_email'|trans,
                        'allowMaximize': true,
                        'allowMinimize': true,
                        'dblclick': 'maximize',
                        'maximizedHeightDecreaseBy': 'minimize-bar',
                        'width': 1000
                    }
                }
            }
        }) }}
    {% endif %}
{% endmacro %}

{% macro addMarkUnreadButton(emailEntity) -%}
    {% if is_granted('oro_email_email_user_edit', emailEntity) %}
        {% import '@OroUI/macros.html.twig' as UI %}
        {{ UI.clientButton({
            'dataUrl': path(
                'oro_email_mark_seen', {
                    id: emailEntity.id,
                    status: 0
                }),
            'dataAttributes': {
                'page-component-module': 'oroemail/js/app/components/mark-unread-button',
                'page-component-options': {
                    'redirect': path('oro_email_user_emails'),
                }|json_encode,
            },
            'aCss': 'no-hash',
            'iCss': 'fa-minus hide-text',
            'dataId': emailEntity.id,
            'label' : 'oro.email.menu.mark_unread.label'|trans
        }) }}
    {% endif %}
{% endmacro %}
", "@OroEmail/actions.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/actions.html.twig");
    }
}
