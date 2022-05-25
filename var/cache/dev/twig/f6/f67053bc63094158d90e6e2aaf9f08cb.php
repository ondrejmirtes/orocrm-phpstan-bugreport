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

/* @OroWorkflow/macros.html.twig */
class __TwigTemplate_5ba6344bd07738d56a9418027f3b2576 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/macros.html.twig"));

        // line 108
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_renderTransitionButton($__workflow__ = null, $__transition__ = null, $__workflowItem__ = null, $__transitionData__ = null, $__onlyLink__ = null, $__noIcon__ = null, $__noIconText__ = null, $__aClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "workflow" => $__workflow__,
            "transition" => $__transition__,
            "workflowItem" => $__workflowItem__,
            "transitionData" => $__transitionData__,
            "onlyLink" => $__onlyLink__,
            "noIcon" => $__noIcon__,
            "noIconText" => $__noIconText__,
            "aClass" => $__aClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTransitionButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTransitionButton"));

            // line 2
            echo "    ";
            $macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroWorkflow/macros.html.twig", 2)->unwrap();
            // line 3
            echo "
    ";
            // line 4
            if (((twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 4, $this->source); })()), "displayType", [], "any", false, false, false, 4) == "dialog") && twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 4, $this->source); })()), "hasForm", [], "method", false, false, false, 4))) {
                // line 5
                echo "        ";
                if (( !twig_get_attribute($this->env, $this->source, ($context["transitionData"] ?? null), "dialog-url", [], "array", true, true, false, 5) ||  !twig_get_attribute($this->env, $this->source, (isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 5, $this->source); })()), "dialog-url", [], "array", false, false, false, 5))) {
                    // line 6
                    echo "            ";
                    $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 6, $this->source); })()), ["dialog-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_workflow_widget_transition_form", ["workflowItemId" => twig_get_attribute($this->env, $this->source,                     // line 10
(isset($context["workflowItem"]) || array_key_exists("workflowItem", $context) ? $context["workflowItem"] : (function () { throw new RuntimeError('Variable "workflowItem" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "transitionName" => twig_get_attribute($this->env, $this->source,                     // line 11
(isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11)])]);
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "        ";
                if (( !twig_get_attribute($this->env, $this->source, ($context["transitionData"] ?? null), "jsDialogWidget", [], "array", true, true, false, 16) ||  !twig_get_attribute($this->env, $this->source, (isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 16, $this->source); })()), "jsDialogWidget", [], "array", false, false, false, 16))) {
                    // line 17
                    echo "            ";
                    $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 17, $this->source); })()), ["jsDialogWidget" => twig_constant("Oro\\Bundle\\WorkflowBundle\\Button\\AbstractTransitionButton::TRANSITION_JS_DIALOG_WIDGET")]);
                    // line 20
                    echo "        ";
                }
                // line 21
                echo "    ";
            }
            // line 22
            echo "
    ";
            // line 23
            if (( !twig_get_attribute($this->env, $this->source, ($context["transitionData"] ?? null), "transition-url", [], "array", true, true, false, 23) ||  !twig_get_attribute($this->env, $this->source, (isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 23, $this->source); })()), "transition-url", [], "array", false, false, false, 23))) {
                // line 24
                echo "        ";
                $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 24, $this->source); })()), ["transition-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_workflow_transit", ["workflowItemId" => twig_get_attribute($this->env, $this->source,                 // line 28
(isset($context["workflowItem"]) || array_key_exists("workflowItem", $context) ? $context["workflowItem"] : (function () { throw new RuntimeError('Variable "workflowItem" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "transitionName" => twig_get_attribute($this->env, $this->source,                 // line 29
(isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29)])]);
                // line 33
                echo "    ";
            }
            // line 34
            echo "
    ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, ($context["transitionData"] ?? null), "transition-condition-messages", [], "array", true, true, false, 35)) {
                // line 36
                echo "        ";
                $context["conditionMessages"] = [];
                // line 37
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 37, $this->source); })()), "transition-condition-messages", [], "array", false, false, false, 37));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 38
                    echo "            ";
                    $context["conditionMessages"] = twig_array_merge((isset($context["conditionMessages"]) || array_key_exists("conditionMessages", $context) ? $context["conditionMessages"] : (function () { throw new RuntimeError('Variable "conditionMessages" does not exist.', 38, $this->source); })()), [0 => (("<li>" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, $context["error"], "parameters", [], "any", false, false, false, 38))) . "</li>")]);
                    // line 39
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "        ";
                if (twig_length_filter($this->env, (isset($context["conditionMessages"]) || array_key_exists("conditionMessages", $context) ? $context["conditionMessages"] : (function () { throw new RuntimeError('Variable "conditionMessages" does not exist.', 40, $this->source); })()))) {
                    // line 41
                    echo "            ";
                    $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 41, $this->source); })()), ["transition-condition-messages" => (("<ol>" . twig_join_filter(                    // line 42
(isset($context["conditionMessages"]) || array_key_exists("conditionMessages", $context) ? $context["conditionMessages"] : (function () { throw new RuntimeError('Variable "conditionMessages" does not exist.', 42, $this->source); })()))) . "</ol>")]);
                    // line 44
                    echo "        ";
                } else {
                    // line 45
                    echo "            ";
                    $context["transitionData"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 45, $this->source); })()), ["transition-condition-messages" => ""]);
                    // line 48
                    echo "        ";
                }
                // line 49
                echo "    ";
            }
            // line 50
            echo "
    ";
            // line 51
            $context["data"] = twig_array_merge((isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 51, $this->source); })()), ["page-component-module" => ((twig_get_attribute($this->env, $this->source,             // line 52
($context["transitionData"] ?? null), "page-component-module", [], "array", true, true, false, 52)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["transitionData"] ?? null), "page-component-module", [], "array", false, false, false, 52), "oroworkflow/js/app/components/button-component")) : ("oroworkflow/js/app/components/button-component")), "page-component-options" => json_encode(twig_array_merge(((twig_get_attribute($this->env, $this->source,             // line 53
($context["transitionData"] ?? null), "page-component-options", [], "array", true, true, false, 53)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["transitionData"] ?? null), "page-component-options", [], "array", false, false, false, 53), [])) : ([])), ["displayType" => twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 53, $this->source); })()), "displayType", [], "any", false, false, false, 53)]))]);
            // line 55
            echo "
    ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, ($context["transition"] ?? null), "frontendOptions", [], "any", true, true, false, 56) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["transition"] ?? null), "frontendOptions", [], "any", false, true, false, 56), "dialog", [], "any", true, true, false, 56))) {
                // line 57
                echo "        ";
                $context["data"] = twig_array_merge((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()), ["dialog-options" => json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 58
(isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 58, $this->source); })()), "frontendOptions", [], "any", false, false, false, 58), "dialog", [], "any", false, false, false, 58))]);
                // line 60
                echo "    ";
            }
            // line 61
            echo "
    ";
            // line 62
            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 62, $this->source); })()), "buttonLabel", [], "any", false, false, false, 62), [], "workflows");
            // line 63
            echo "    ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 63, $this->source); })()), "buttonTitle", [], "any", false, false, false, 63), [], "workflows");
            // line 64
            echo "
    ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["transition"] ?? null), "frontendOptions", [], "any", false, true, false, 65), "message", [], "any", true, true, false, 65) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["transition"] ?? null), "frontendOptions", [], "any", false, true, false, 65), "message", [], "any", false, true, false, 65), "content", [], "any", true, true, false, 65))) {
                // line 66
                echo "        ";
                $context["frontendMessage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 66, $this->source); })()), "frontendOptions", [], "any", false, false, false, 66), "message", [], "any", false, false, false, 66);
                // line 67
                echo "
        ";
                // line 68
                $context["transitionMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["frontendMessage"]) || array_key_exists("frontendMessage", $context) ? $context["frontendMessage"] : (function () { throw new RuntimeError('Variable "frontendMessage" does not exist.', 68, $this->source); })()), "content", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, (isset($context["frontendMessage"]) || array_key_exists("frontendMessage", $context) ? $context["frontendMessage"] : (function () { throw new RuntimeError('Variable "frontendMessage" does not exist.', 68, $this->source); })()), "message_parameters", [], "any", false, false, false, 68), "workflows");
                // line 69
                echo "        ";
                if (((isset($context["transitionMessage"]) || array_key_exists("transitionMessage", $context) ? $context["transitionMessage"] : (function () { throw new RuntimeError('Variable "transitionMessage" does not exist.', 69, $this->source); })()) && ((isset($context["transitionMessage"]) || array_key_exists("transitionMessage", $context) ? $context["transitionMessage"] : (function () { throw new RuntimeError('Variable "transitionMessage" does not exist.', 69, $this->source); })()) != twig_get_attribute($this->env, $this->source, (isset($context["frontendMessage"]) || array_key_exists("frontendMessage", $context) ? $context["frontendMessage"] : (function () { throw new RuntimeError('Variable "frontendMessage" does not exist.', 69, $this->source); })()), "content", [], "any", false, false, false, 69)))) {
                    // line 70
                    echo "            ";
                    // line 71
                    echo "            ";
                    $context["message"] = twig_array_merge((isset($context["frontendMessage"]) || array_key_exists("frontendMessage", $context) ? $context["frontendMessage"] : (function () { throw new RuntimeError('Variable "frontendMessage" does not exist.', 71, $this->source); })()), ["content" => twig_nl2br(twig_escape_filter($this->env,                     // line 72
(isset($context["transitionMessage"]) || array_key_exists("transitionMessage", $context) ? $context["transitionMessage"] : (function () { throw new RuntimeError('Variable "transitionMessage" does not exist.', 72, $this->source); })()), "html", null, true)), "title" => ((twig_get_attribute($this->env, $this->source,                     // line 73
($context["frontendMessage"] ?? null), "title", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["frontendMessage"] ?? null), "title", [], "any", false, false, false, 73), (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 73, $this->source); })()))) : ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 73, $this->source); })())))]);
                    // line 75
                    echo "        ";
                }
                // line 76
                echo "    ";
            }
            // line 77
            echo "    
    ";
            // line 78
            $context["data"] = twig_array_merge((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 78, $this->source); })()), ["message" => json_encode(((            // line 79
array_key_exists("message", $context)) ? (_twig_default_filter((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 79, $this->source); })()), [])) : ([]))), "transition-label" =>             // line 80
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 80, $this->source); })())]);
            // line 82
            echo "    
    ";
            // line 83
            ob_start();
            // line 84
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["aClass"]) || array_key_exists("aClass", $context) ? $context["aClass"] : (function () { throw new RuntimeError('Variable "aClass" does not exist.', 84, $this->source); })()), "html", null, true);
            echo "
        icons-holder-text
        ";
            // line 86
            if ( !((array_key_exists("onlyLink", $context)) ? (_twig_default_filter((isset($context["onlyLink"]) || array_key_exists("onlyLink", $context) ? $context["onlyLink"] : (function () { throw new RuntimeError('Variable "onlyLink" does not exist.', 86, $this->source); })()), false)) : (false))) {
                echo "btn btn-sm workflow-transition-buttons";
            }
            // line 87
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 87, $this->source); })()), "displayType", [], "any", false, false, false, 87) == "dialog")) {
                echo "no-hash";
            }
            // line 88
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["transitionData"]) || array_key_exists("transitionData", $context) ? $context["transitionData"] : (function () { throw new RuntimeError('Variable "transitionData" does not exist.', 88, $this->source); })()), "enabled", [], "any", false, false, false, 88)) {
                echo "disabled";
            }
            // line 89
            echo "        ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["transition"] ?? null), "frontendOptions", [], "any", false, true, false, 89), "class", [], "any", true, true, false, 89)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["transition"] ?? null), "frontendOptions", [], "any", false, true, false, 89), "class", [], "any", false, false, false, 89), "")) : ("")), "html", null, true);
            echo "
    ";
            $context["class"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 91
            echo "
    ";
            // line 92
            $context["iCss"] = ((((array_key_exists("noIcon", $context)) ? (_twig_default_filter((isset($context["noIcon"]) || array_key_exists("noIcon", $context) ? $context["noIcon"] : (function () { throw new RuntimeError('Variable "noIcon" does not exist.', 92, $this->source); })()), false)) : (false))) ? (false) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["transition"] ?? null), "frontendOptions", [], "any", false, true, false, 92), "icon", [], "any", true, true, false, 92)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["transition"] ?? null), "frontendOptions", [], "any", false, true, false, 92), "icon", [], "any", false, false, false, 92), "")) : (""))));
            // line 93
            echo "
    ";
            // line 95
            echo "    ";
            echo twig_call_macro($macros["ui"], "macro_link", [["path" => "#", "id" => twig_sprintf("transition-%s-%s-%s", twig_get_attribute($this->env, $this->source,             // line 97
(isset($context["workflow"]) || array_key_exists("workflow", $context) ? $context["workflow"] : (function () { throw new RuntimeError('Variable "workflow" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, (isset($context["transition"]) || array_key_exists("transition", $context) ? $context["transition"] : (function () { throw new RuntimeError('Variable "transition" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), twig_random($this->env)), "iCss" =>             // line 98
(isset($context["iCss"]) || array_key_exists("iCss", $context) ? $context["iCss"] : (function () { throw new RuntimeError('Variable "iCss" does not exist.', 98, $this->source); })()), "title" =>             // line 99
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 99, $this->source); })()), "role" => "button", "class" =>             // line 101
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 101, $this->source); })()), "data" =>             // line 102
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 102, $this->source); })()), "label" =>             // line 103
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 103, $this->source); })()), "role" => "button", "noIconText" => ((            // line 105
array_key_exists("noIconText", $context)) ? (_twig_default_filter((isset($context["noIconText"]) || array_key_exists("noIconText", $context) ? $context["noIconText"] : (function () { throw new RuntimeError('Variable "noIconText" does not exist.', 105, $this->source); })()), true)) : (true))]], 95, $context, $this->getSourceContext());
            // line 106
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 109
    public function macro_renderGoToTranslationsIconByLink($__link__ = null, $__large__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "link" => $__link__,
            "large" => $__large__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderGoToTranslationsIconByLink"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderGoToTranslationsIconByLink"));

            // line 110
            echo "    <span class=\"workflow-translatable-field\">
        <a target=\"_blank\" href=\"";
            // line 111
            echo (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 111, $this->source); })());
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.workflow.action.workflow.go_to_translations"), "html", null, true);
            echo "\">
            <span class=\"fa fa-language";
            // line 112
            if ((isset($context["large"]) || array_key_exists("large", $context) ? $context["large"] : (function () { throw new RuntimeError('Variable "large" does not exist.', 112, $this->source); })())) {
                echo " large-icon";
            }
            echo "\" aria-hidden=\"true\"></span>
        </a>
    </span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroWorkflow/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 112,  322 => 111,  319 => 110,  299 => 109,  283 => 106,  281 => 105,  280 => 103,  279 => 102,  278 => 101,  277 => 99,  276 => 98,  275 => 97,  273 => 95,  270 => 93,  268 => 92,  265 => 91,  259 => 89,  254 => 88,  249 => 87,  245 => 86,  239 => 84,  237 => 83,  234 => 82,  232 => 80,  231 => 79,  230 => 78,  227 => 77,  224 => 76,  221 => 75,  219 => 73,  218 => 72,  216 => 71,  214 => 70,  211 => 69,  209 => 68,  206 => 67,  203 => 66,  201 => 65,  198 => 64,  195 => 63,  193 => 62,  190 => 61,  187 => 60,  185 => 58,  183 => 57,  181 => 56,  178 => 55,  176 => 53,  175 => 52,  174 => 51,  171 => 50,  168 => 49,  165 => 48,  162 => 45,  159 => 44,  157 => 42,  155 => 41,  152 => 40,  146 => 39,  143 => 38,  138 => 37,  135 => 36,  133 => 35,  130 => 34,  127 => 33,  125 => 29,  124 => 28,  122 => 24,  120 => 23,  117 => 22,  114 => 21,  111 => 20,  108 => 17,  105 => 16,  102 => 15,  100 => 11,  99 => 10,  97 => 6,  94 => 5,  92 => 4,  89 => 3,  86 => 2,  60 => 1,  46 => 108,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro renderTransitionButton(workflow, transition, workflowItem, transitionData, onlyLink, noIcon, noIconText, aClass) %}
    {% import '@OroUI/macros.html.twig' as ui %}

    {% if transition.displayType == 'dialog' and transition.hasForm() %}
        {% if transitionData['dialog-url'] is not defined or not transitionData['dialog-url'] %}
            {% set transitionData = transitionData|merge({
                'dialog-url': path(
                    'oro_workflow_widget_transition_form',
                    {
                        workflowItemId: workflowItem.id,
                        transitionName: transition.name
                    }
                )
            }) %}
        {% endif %}
        {% if transitionData['jsDialogWidget'] is not defined or not transitionData['jsDialogWidget'] %}
            {% set transitionData = transitionData|merge({
                'jsDialogWidget': constant('Oro\\\\Bundle\\\\WorkflowBundle\\\\Button\\\\AbstractTransitionButton::TRANSITION_JS_DIALOG_WIDGET')
            }) %}
        {% endif %}
    {% endif %}

    {% if transitionData['transition-url'] is not defined or not transitionData['transition-url'] %}
        {% set transitionData = transitionData|merge({'transition-url':
            path(
                'oro_api_workflow_transit',
                {
                    workflowItemId: workflowItem.id,
                    transitionName: transition.name
                }
            )
        }) %}
    {% endif %}

    {% if transitionData['transition-condition-messages'] is defined %}
        {% set conditionMessages = [] %}
        {% for error in transitionData['transition-condition-messages'] %}
            {% set conditionMessages = conditionMessages|merge(['<li>' ~ error.message|trans(error.parameters) ~ '</li>']) %}
        {% endfor %}
        {% if conditionMessages|length %}
            {% set transitionData = transitionData|merge({
                'transition-condition-messages': '<ol>' ~ conditionMessages|join ~ '</ol>'
            }) %}
        {% else %}
            {% set transitionData = transitionData|merge({
                'transition-condition-messages': ''
            }) %}
        {% endif %}
    {% endif %}

    {% set data = transitionData|merge({
        'page-component-module': transitionData['page-component-module']|default('oroworkflow/js/app/components/button-component'),
        'page-component-options': transitionData['page-component-options']|default({})|merge({'displayType': transition.displayType})|json_encode,
    }) %}

    {% if transition.frontendOptions is defined and transition.frontendOptions.dialog is defined %}
        {% set data = data|merge({
            'dialog-options': transition.frontendOptions.dialog|json_encode|raw
        }) %}
    {% endif %}

    {% set label = transition.buttonLabel|trans({},'workflows') %}
    {% set title = transition.buttonTitle|trans({},'workflows') %}

    {% if transition.frontendOptions.message is defined and transition.frontendOptions.message.content is defined %}
        {% set frontendMessage = transition.frontendOptions.message %}

        {% set transitionMessage = frontendMessage.content|trans(frontendMessage.message_parameters, 'workflows') %}
        {% if transitionMessage and transitionMessage != frontendMessage.content %}
            {# if no translation for message then do not show message #}
            {% set message = frontendMessage|merge({
                content: transitionMessage|nl2br,
                title: frontendMessage.title|default(title),
            }) %}
        {% endif %}
    {% endif %}
    
    {% set data = data|merge({
        message: (message|default({}))|json_encode,
        'transition-label': label
    }) %}
    
    {% set class %}
        {{ aClass }}
        icons-holder-text
        {% if not onlyLink|default(false) %}btn btn-sm workflow-transition-buttons{% endif %}
        {% if transition.displayType == 'dialog' %}no-hash{% endif %}
        {% if not transitionData.enabled %}disabled{% endif %}
        {{ transition.frontendOptions.class|default('') }}
    {% endset %}

    {% set iCss = noIcon|default(false) ? false : transition.frontendOptions.icon|default('') %}

    {# Transaltions temporary disabled due to BAP-5355 #}
    {{ ui.link({
        'path': '#',
        'id': 'transition-%s-%s-%s'|format(workflow.name, transition.name, random()),
        'iCss': iCss,
        'title': title,
        'role': 'button',
        'class': class,
        'data': data,
        'label': label,
        'role': 'button',
        'noIconText': noIconText|default(true),
    }) }}
{% endmacro %}

{% macro renderGoToTranslationsIconByLink(link, large) %}
    <span class=\"workflow-translatable-field\">
        <a target=\"_blank\" href=\"{{ link|raw }}\" title=\"{{ 'oro.workflow.action.workflow.go_to_translations'|trans}}\">
            <span class=\"fa fa-language{% if large %} large-icon{% endif %}\" aria-hidden=\"true\"></span>
        </a>
    </span>
{% endmacro %}
", "@OroWorkflow/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/macros.html.twig");
    }
}
