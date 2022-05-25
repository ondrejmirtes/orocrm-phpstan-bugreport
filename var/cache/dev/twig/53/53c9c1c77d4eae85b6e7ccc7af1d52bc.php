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

/* @OroWorkflow/Widget/widget/transitionComplete.html.twig */
class __TwigTemplate_c6cfcc9be37014922ba9326f20c40d45 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWorkflow/Widget/widget/transitionComplete.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Widget/widget/transitionComplete.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWorkflow/Widget/widget/transitionComplete.html.twig"));

        // line 1
        if ((isset($context["transitionSuccess"]) || array_key_exists("transitionSuccess", $context) ? $context["transitionSuccess"] : (function () { throw new RuntimeError('Variable "transitionSuccess" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            $context["widgetResponse"] = ["widget" => ["trigger" => [0 => ["eventBroker" => "widget", "name" => "transitionSuccess", "args" => [0 =>             // line 7
(isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 7, $this->source); })())]]]]];
        } else {
            // line 12
            echo "    ";
            $context["widgetResponse"] = ["widget" => ["trigger" => [0 => ["eventBroker" => "widget", "name" => "transitionFailure", "args" => [0 => ["status" =>             // line 18
(isset($context["responseCode"]) || array_key_exists("responseCode", $context) ? $context["responseCode"] : (function () { throw new RuntimeError('Variable "responseCode" does not exist.', 18, $this->source); })()), "message" =>             // line 19
(isset($context["responseMessage"]) || array_key_exists("responseMessage", $context) ? $context["responseMessage"] : (function () { throw new RuntimeError('Variable "responseMessage" does not exist.', 19, $this->source); })())]]]]]];
        }
        // line 25
        echo "
";
        // line 26
        echo json_encode((isset($context["widgetResponse"]) || array_key_exists("widgetResponse", $context) ? $context["widgetResponse"] : (function () { throw new RuntimeError('Variable "widgetResponse" does not exist.', 26, $this->source); })()));
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroWorkflow/Widget/widget/transitionComplete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 26,  59 => 25,  56 => 19,  55 => 18,  53 => 12,  50 => 7,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if transitionSuccess  %}
    {% set widgetResponse = {
        widget: {
            trigger: [{
                eventBroker: 'widget',
                name: 'transitionSuccess',
                args: [response]
            }],
        }
    } %}
{% else %}
    {% set widgetResponse = {
        widget: {
            trigger: [{
                eventBroker: 'widget',
                name: 'transitionFailure',
                args: [{
                    status: responseCode,
                    message: responseMessage
                }]
            }],
        }
    } %}
{% endif %}

{{ widgetResponse|json_encode|raw }}
", "@OroWorkflow/Widget/widget/transitionComplete.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WorkflowBundle/Resources/views/Widget/widget/transitionComplete.html.twig");
    }
}
