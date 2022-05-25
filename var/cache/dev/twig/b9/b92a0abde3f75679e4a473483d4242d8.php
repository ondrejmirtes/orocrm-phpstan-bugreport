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

/* @OroDotmailer/Dotmailer/marketingListSyncStatus.html.twig */
class __TwigTemplate_ed2bad9d04beb6dba602ded4b9dcceb1 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDotmailer/Dotmailer/marketingListSyncStatus.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDotmailer/Dotmailer/marketingListSyncStatus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDotmailer/Dotmailer/marketingListSyncStatus.html.twig"));

        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDotmailer/Dotmailer/marketingListSyncStatus.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"widget-content\" xmlns=\"http://www.w3.org/1999/html\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["address_book"]) || array_key_exists("address_book", $context) ? $context["address_book"] : (function () { throw new RuntimeError('Variable "address_book" does not exist.', 6, $this->source); })()), "syncStatus", [], "any", false, false, false, 6)) {
            // line 7
            echo "                ";
            $context["status"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("oro.dotmailer.syncstatus." . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["address_book"]) || array_key_exists("address_book", $context) ? $context["address_book"] : (function () { throw new RuntimeError('Variable "address_book" does not exist.', 7, $this->source); })()), "syncStatus", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)));
            // line 8
            echo "            ";
        } else {
            // line 9
            echo "                ";
            $context["status"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty");
            // line 10
            echo "            ";
        }
        // line 11
        echo "
            ";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.syncstatus.list_is_connected.label", ["%address_book%" => (("<strong>" . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["address_book"]) || array_key_exists("address_book", $context) ? $context["address_book"] : (function () { throw new RuntimeError('Variable "address_book" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13))) . "</strong>"), "%synced%" => (("<strong>" . _twig_default_filter($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["address_book"]) || array_key_exists("address_book", $context) ? $context["address_book"] : (function () { throw new RuntimeError('Variable "address_book" does not exist.', 15, $this->source); })()), "lastExportedAt", [], "any", false, false, false, 15)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty"))) . "</strong>"), "%status%" => (("<strong>" .         // line 18
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 18, $this->source); })())) . "</strong>")]);
        // line 21
        echo "
        </div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroDotmailer/Dotmailer/marketingListSyncStatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  74 => 18,  73 => 15,  72 => 13,  71 => 12,  68 => 11,  65 => 10,  62 => 9,  59 => 8,  56 => 7,  54 => 6,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as ui %}

<div class=\"widget-content\" xmlns=\"http://www.w3.org/1999/html\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            {% if address_book.syncStatus %}
                {% set status = ('oro.dotmailer.syncstatus.' ~ address_book.syncStatus.id)|trans %}
            {% else %}
                {% set status = 'oro.ui.empty'|trans %}
            {% endif %}

            {{ 'oro.dotmailer.syncstatus.list_is_connected.label'|trans({
                '%address_book%': '<strong>' ~ address_book.name|e ~ '</strong>',
                '%synced%': '<strong>'
                    ~ address_book.lastExportedAt|oro_format_datetime|default('oro.ui.empty'|trans)
                    ~ '</strong>',
                '%status%': '<strong>'
                    ~ status
                    ~ '</strong>'
                })|raw
            }}
        </div>
    </div>
</div>
", "@OroDotmailer/Dotmailer/marketingListSyncStatus.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-dotmailer/Resources/views/Dotmailer/marketingListSyncStatus.html.twig");
    }
}
