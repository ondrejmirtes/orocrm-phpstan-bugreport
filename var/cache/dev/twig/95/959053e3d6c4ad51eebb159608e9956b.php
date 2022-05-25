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

/* @OroUser/Datagrid/Column/userAgentColumn.html.twig */
class __TwigTemplate_f3211a6e0ef8c7643079e6a4c6a1254c extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/Datagrid/Column/userAgentColumn.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Datagrid/Column/userAgentColumn.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Datagrid/Column/userAgentColumn.html.twig"));

        // line 1
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            $context["collapseView"] = ["storageKey" => (("collapseBlock[" . twig_get_attribute($this->env, $this->source,             // line 3
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 3, $this->source); })()), "getValue", [0 => "id"], "method", false, false, false, 3)) . "]"), "uid" => twig_get_attribute($this->env, $this->source,             // line 4
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 4, $this->source); })()), "getValue", [0 => "id"], "method", false, false, false, 4), "animationSpeed" => 0, "closeClass" => "overflows", "forcedState" => false, "checkOverflow" => false, "rowsCount" => 5, "visibleRows" => 1, "open" => false, "keepState" => false];
            // line 14
            echo "    <div class=\"collapse-block\" data-page-component-collapse=\"";
            echo twig_escape_filter($this->env, json_encode((isset($context["collapseView"]) || array_key_exists("collapseView", $context) ? $context["collapseView"] : (function () { throw new RuntimeError('Variable "collapseView" does not exist.', 14, $this->source); })())), "html", null, true);
            echo "\" style=\"width:250px\">
        <div class=\"control-label\" data-collapse-container>
            ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "
        </div>
        <a href=\"#\" class=\"control-label toggle-more\" data-collapse-trigger>";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show more"), "html", null, true);
            echo "</a>
        <a href=\"#\" class=\"control-label toggle-less\" data-collapse-trigger>";
            // line 19
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
        return "@OroUser/Datagrid/Column/userAgentColumn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  64 => 18,  59 => 16,  53 => 14,  51 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if value %}
    {% set collapseView = {
        storageKey: 'collapseBlock[' ~ record.getValue('id') ~ ']',
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
    <div class=\"collapse-block\" data-page-component-collapse=\"{{ collapseView|json_encode }}\" style=\"width:250px\">
        <div class=\"control-label\" data-collapse-container>
            {{ value }}
        </div>
        <a href=\"#\" class=\"control-label toggle-more\" data-collapse-trigger>{{ 'Show more'|trans }}</a>
        <a href=\"#\" class=\"control-label toggle-less\" data-collapse-trigger>{{ 'Show less'|trans }}</a>
    </div>
{% endif %}
", "@OroUser/Datagrid/Column/userAgentColumn.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Datagrid/Column/userAgentColumn.html.twig");
    }
}
