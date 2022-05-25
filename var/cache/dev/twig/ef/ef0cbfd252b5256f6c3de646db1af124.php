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

/* @OroAccount/Account/widget/contactsInfo.html.twig */
class __TwigTemplate_63e3357698343e0cbf19dde780a911c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAccount/Account/widget/contactsInfo.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAccount/Account/widget/contactsInfo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAccount/Account/widget/contactsInfo.html.twig"));

        // line 1
        echo "<div class=\"widget-content\">
    ";
        // line 2
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroAccount/Account/widget/contactsInfo.html.twig", 2)->unwrap();
        // line 3
        echo "    ";
        $context["gridName"] = "account-contacts-update-grid";
        // line 4
        echo "
    ";
        // line 5
        $context["params"] = ["account" => ((        // line 6
(isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new RuntimeError('Variable "account" does not exist.', 6, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new RuntimeError('Variable "account" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)) : (null)), "_parameters" => ["data_in" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "added"], "method", false, false, false, 8)) ? (twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "added"], "method", false, false, false, 8), ",")) : ([])), "data_not_in" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "removed"], "method", false, false, false, 9)) ? (twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "removed"], "method", false, false, false, 9), ",")) : ([]))]];
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroAccount/Account/widget/contactsInfo.html.twig", 19)->unwrap();
        // line 20
        echo "
    <div ";
        // line 21
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroaccount/js/app/components/account-contact-component", "options" => ["wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "get", [0 => "_wid"], "method", false, false, false, 24), "gridName" =>         // line 25
(isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 25, $this->source); })()), "addedVal" => "#appendContacts", "removedVal" => "#removeContacts", "columnName" => "hasContact", "link" => "oro_contact_info"]]], 21, $context, $this->getSourceContext());
        // line 31
        echo "></div>

    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-primary\" data-action-name=\"select\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select"), "html", null, true);
        echo "</button>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 13));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "        ";
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", [(isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 14, $this->source); })()), (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 14, $this->source); })())], 14, $context, $this->getSourceContext());
        echo "
        <input type=\"hidden\" name=\"appendContacts\" id=\"appendContacts\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "get", [0 => "added"], "method", false, false, false, 15), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"removeContacts\" id=\"removeContacts\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "get", [0 => "removed"], "method", false, false, false, 16), "html", null, true);
        echo "\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroAccount/Account/widget/contactsInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 16,  124 => 15,  119 => 14,  106 => 13,  89 => 35,  85 => 34,  80 => 31,  78 => 25,  77 => 24,  76 => 21,  73 => 20,  71 => 19,  68 => 18,  66 => 13,  63 => 12,  61 => 9,  60 => 8,  59 => 6,  58 => 5,  55 => 4,  52 => 3,  50 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget-content\">
    {% import '@OroDataGrid/macros.html.twig' as dataGrid %}
    {% set gridName = 'account-contacts-update-grid' %}

    {% set params = {
        'account': account ? account.id : null,
        '_parameters' : {
            'data_in':     app.request.get('added') ? app.request.get('added')|split(',') : [],
            'data_not_in': app.request.get('removed') ? app.request.get('removed')|split(','): []
        }
    } %}

    {% block content %}
        {{ dataGrid.renderGrid(gridName, params) }}
        <input type=\"hidden\" name=\"appendContacts\" id=\"appendContacts\" value=\"{{ app.request.get('added') }}\" />
        <input type=\"hidden\" name=\"removeContacts\" id=\"removeContacts\" value=\"{{ app.request.get('removed') }}\" />
    {% endblock %}

    {% import '@OroUI/macros.html.twig' as UI %}

    <div {{ UI.renderPageComponentAttributes({
        module: 'oroaccount/js/app/components/account-contact-component',
        options: {
            wid: app.request.get('_wid'),
            gridName: gridName,
            addedVal: '#appendContacts',
            removedVal: '#removeContacts',
            columnName: 'hasContact',
            link: 'oro_contact_info'
        }
    }) }}></div>

    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">{{ 'Cancel'|trans }}</button>
        <button type=\"button\" class=\"btn btn-primary\" data-action-name=\"select\">{{ 'Select'|trans }}</button>
    </div>
</div>
", "@OroAccount/Account/widget/contactsInfo.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/AccountBundle/Resources/views/Account/widget/contactsInfo.html.twig");
    }
}
