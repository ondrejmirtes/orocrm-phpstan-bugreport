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

/* @OroDataAudit/change_history_link.html.twig */
class __TwigTemplate_847915850451c81a40fc0dec2c34b3d4 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDataAudit/change_history_link.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataAudit/change_history_link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataAudit/change_history_link.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDataAudit/change_history_link.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if (twig_test_empty((isset($context["entity_class"]) || array_key_exists("entity_class", $context) ? $context["entity_class"] : (function () { throw new RuntimeError('Variable "entity_class" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "    ";
            $context["entity_class"] = $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), true);
        }
        // line 6
        echo "<li>
    <a href=\"#\" data-url=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["audit_path"]) || array_key_exists("audit_path", $context) ? $context["audit_path"] : (function () { throw new RuntimeError('Variable "audit_path" does not exist.', 7, $this->source); })()), ["entity" => (isset($context["entity_class"]) || array_key_exists("entity_class", $context) ? $context["entity_class"] : (function () { throw new RuntimeError('Variable "entity_class" does not exist.', 7, $this->source); })()), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })())]), "html", null, true);
        echo "\"
        title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dataaudit.change_history.title", ["%item%" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })())]), "html", null, true);
        echo "\"
        ";
        // line 9
        echo twig_call_macro($macros["UI"], "macro_renderWidgetDataAttributes", [["type" => "dialog", "options" => ["dialogOptions" => ["allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000, "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dataaudit.change_history.title", ["%item%" =>         // line 18
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 18, $this->source); })())])]]]], 9, $context, $this->getSourceContext());
        // line 21
        echo ">
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dataaudit.change_history"), "html", null, true);
        echo "
    </a>
</li>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroDataAudit/change_history_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  71 => 21,  69 => 18,  68 => 9,  64 => 8,  60 => 7,  57 => 6,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI%}

{% if entity_class is empty %}
    {% set entity_class = oro_class_name(entity, true) %}
{% endif %}
<li>
    <a href=\"#\" data-url=\"{{ path(audit_path, {entity:entity_class, id:id}) }}\"
        title=\"{{ 'oro.dataaudit.change_history.title'|trans({'%item%': title}) }}\"
        {{ UI.renderWidgetDataAttributes({
            'type': 'dialog',
            'options': {
                'dialogOptions': {
                    'allowMaximize': true,
                    'allowMinimize': true,
                    'dblclick': 'maximize',
                    'maximizedHeightDecreaseBy': 'minimize-bar',
                    'width': 1000,
                    'title': 'oro.dataaudit.change_history.title'|trans({'%item%': title})
                }
            }
        }) }}>
        {{ 'oro.dataaudit.change_history'|trans }}
    </a>
</li>
", "@OroDataAudit/change_history_link.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataAuditBundle/Resources/views/change_history_link.html.twig");
    }
}
