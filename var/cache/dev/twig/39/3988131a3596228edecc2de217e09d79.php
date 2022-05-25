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

/* @OroDataAudit/Datagrid/Property/old.html.twig */
class __TwigTemplate_22b09c7b511f624dff7d7ccc93868830 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDataAudit/Datagrid/Property/old.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataAudit/Datagrid/Property/old.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataAudit/Datagrid/Property/old.html.twig"));

        // line 1
        $macros["dataAudit"] = $this->macros["dataAudit"] = $this->loadTemplate("@OroDataAudit/macros.html.twig", "@OroDataAudit/Datagrid/Property/old.html.twig", 1)->unwrap();
        // line 3
        echo "<ul>";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["fieldKey"] => $context["fieldValue"]) {
            // line 5
            if (($context["fieldKey"] == "auditData")) {
                // line 6
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fieldValue"], "old", [], "any", false, false, false, 6))) {
                    // line 7
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["fieldValue"], "old", [], "any", false, false, false, 7));
                    foreach ($context['_seq'] as $context["collKey"] => $context["collValue"]) {
                        // line 8
                        echo "<li>
                        <b>";
                        // line 9
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(_twig_default_filter($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getFieldConfigValue(twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 9, $this->source); })()), "getValue", [0 => "objectClass"], "method", false, false, false, 9), $context["collKey"], "label"), $context["collKey"])), "html", null, true);
                        echo "</b>
                        <s>";
                        // line 10
                        echo twig_escape_filter($this->env, $context["collValue"], "html", null, true);
                        echo "</s>
                    </li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['collKey'], $context['collValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 14
$context["fieldValue"], "collectionDiffs", [], "any", true, true, false, 14) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["fieldValue"], "collectionDiffs", [], "any", false, false, false, 14)))) {
                // line 15
                echo "<li>
                <b>";
                // line 16
                echo twig_call_macro($macros["dataAudit"], "macro_renderFieldName", [twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 16, $this->source); })()), "getValue", [0 => "objectClass"], "method", false, false, false, 16), $context["fieldKey"], $context["fieldValue"]], 16, $context, $this->getSourceContext());
                echo "</b>";
                // line 17
                echo twig_call_macro($macros["dataAudit"], "macro_renderCollection", [twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 17, $this->source); })()), "getValue", [0 => "objectClass"], "method", false, false, false, 17), $context["fieldKey"], $context["fieldValue"], [0 => "changed", 1 => "removed"]], 17, $context, $this->getSourceContext());
                // line 18
                echo "</li>";
            } else {
                // line 20
                echo "<li>
                <b>";
                // line 21
                echo twig_call_macro($macros["dataAudit"], "macro_renderFieldName", [twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 21, $this->source); })()), "getValue", [0 => "objectClass"], "method", false, false, false, 21), $context["fieldKey"], $context["fieldValue"]], 21, $context, $this->getSourceContext());
                echo "</b>
                <s>";
                // line 22
                echo twig_call_macro($macros["dataAudit"], "macro_renderFieldValue", [twig_get_attribute($this->env, $this->source, $context["fieldValue"], "old", [], "any", false, false, false, 22), $context["fieldValue"]], 22, $context, $this->getSourceContext());
                echo "</s>
            </li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fieldKey'], $context['fieldValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroDataAudit/Datagrid/Property/old.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 26,  98 => 22,  94 => 21,  91 => 20,  88 => 18,  86 => 17,  83 => 16,  80 => 15,  78 => 14,  69 => 10,  65 => 9,  62 => 8,  58 => 7,  56 => 6,  54 => 5,  50 => 4,  48 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- import '@OroDataAudit/macros.html.twig' as dataAudit -%}

<ul>
    {%- for fieldKey, fieldValue in value -%}
        {%- if fieldKey == 'auditData' -%}
            {%- if fieldValue.old|length -%}
                {%- for collKey, collValue in fieldValue.old -%}
                    <li>
                        <b>{{- oro_field_config_value(record.getValue('objectClass'), collKey, 'label')|default(collKey)|trans -}}</b>
                        <s>{{- collValue -}}</s>
                    </li>
                {%- endfor -%}
            {%- endif -%}
        {%- elseif fieldValue.collectionDiffs is defined and fieldValue.collectionDiffs is not empty -%}
            <li>
                <b>{{- dataAudit.renderFieldName(record.getValue('objectClass'), fieldKey, fieldValue) -}}</b>
                {{- dataAudit.renderCollection(record.getValue('objectClass'), fieldKey, fieldValue, ['changed', 'removed']) -}}
            </li>
        {%- else -%}
            <li>
                <b>{{- dataAudit.renderFieldName(record.getValue('objectClass'), fieldKey, fieldValue) -}}</b>
                <s>{{- dataAudit.renderFieldValue(fieldValue.old, fieldValue) -}}</s>
            </li>
        {%- endif -%}
    {%- endfor -%}
</ul>
", "@OroDataAudit/Datagrid/Property/old.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataAuditBundle/Resources/views/Datagrid/Property/old.html.twig");
    }
}
