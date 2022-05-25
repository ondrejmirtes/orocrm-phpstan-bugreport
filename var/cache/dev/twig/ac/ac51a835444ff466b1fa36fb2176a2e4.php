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

/* @OroNotification/NotificationAlert/Property/externalId.html.twig */
class __TwigTemplate_ae8bb32b65e0e8769536ec87603ab3d7 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNotification/NotificationAlert/Property/externalId.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNotification/NotificationAlert/Property/externalId.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNotification/NotificationAlert/Property/externalId.html.twig"));

        // line 1
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNotification/NotificationAlert/Property/externalId.html.twig", 2)->unwrap();
            // line 3
            echo "    ";
            $context["collapseView"] = ["storageKey" => (("collapseBlock[" . twig_get_attribute($this->env, $this->source,             // line 4
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 4, $this->source); })()), "getValue", [0 => "sourceType"], "method", false, false, false, 4)) . "]"), "uid" => twig_get_attribute($this->env, $this->source,             // line 5
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 5, $this->source); })()), "getValue", [0 => "id"], "method", false, false, false, 5), "animationSpeed" => 0, "closeClass" => "overflows", "forcedState" => false, "checkOverflow" => false, "rowsCount" => 5, "visibleRows" => 1, "open" => false, "keepState" => false];
            // line 15
            echo "    <div class=\"collapse-block\" data-page-component-collapse=\"";
            echo twig_escape_filter($this->env, json_encode((isset($context["collapseView"]) || array_key_exists("collapseView", $context) ? $context["collapseView"] : (function () { throw new RuntimeError('Variable "collapseView" does not exist.', 15, $this->source); })())), "html", null, true);
            echo "\" style=\"width:260px\">
        <div class=\"control-label\" data-collapse-container>
            ";
            // line 17
            echo twig_escape_filter($this->env, twig_join_filter(twig_split_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 17, $this->source); })()), "", 31), " "), "html", null, true);
            echo "
        </div>
        <a href=\"#\" class=\"control-label toggle-more\" data-collapse-trigger>";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show more"), "html", null, true);
            echo "</a>
        <a href=\"#\" class=\"control-label toggle-less\" data-collapse-trigger>";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show less"), "html", null, true);
            echo "</a>
    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroNotification/NotificationAlert/Property/externalId.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  67 => 19,  62 => 17,  56 => 15,  54 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if value %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% set collapseView = {
        storageKey: 'collapseBlock[' ~ record.getValue('sourceType') ~ ']',
        uid: record.getValue('id'),
        animationSpeed: 0,
        closeClass: 'overflows',
        forcedState: false,
        checkOverflow: false,
        rowsCount: 5,
        visibleRows: 1,
        open: false,
        keepState: false
    } %}
    <div class=\"collapse-block\" data-page-component-collapse=\"{{ collapseView|json_encode }}\" style=\"width:260px\">
        <div class=\"control-label\" data-collapse-container>
            {{ value|split('', 31)|join(' ') }}
        </div>
        <a href=\"#\" class=\"control-label toggle-more\" data-collapse-trigger>{{ 'Show more'|trans }}</a>
        <a href=\"#\" class=\"control-label toggle-less\" data-collapse-trigger>{{ 'Show less'|trans }}</a>
    </div>
{% endif %}
", "@OroNotification/NotificationAlert/Property/externalId.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NotificationBundle/Resources/views/NotificationAlert/Property/externalId.html.twig");
    }
}
