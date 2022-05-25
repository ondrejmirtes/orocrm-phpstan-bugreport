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

/* @OroSales/B2bCustomer/accountCustomersInfo.html.twig */
class __TwigTemplate_c962efcbfae96f47c81888848c677346 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSales/B2bCustomer/accountCustomersInfo.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/B2bCustomer/accountCustomersInfo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/B2bCustomer/accountCustomersInfo.html.twig"));

        // line 1
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_sales_b2bcustomer_view") && (twig_length_filter($this->env, (isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new RuntimeError('Variable "customers" does not exist.', 1, $this->source); })())) > 0))) {
            // line 2
            echo "    ";
            $context["tabs"] = [];
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new RuntimeError('Variable "customers" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 4
                echo "        ";
                $context["tabs"] = twig_array_merge((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 4, $this->source); })()), [0 => ["alias" => ((("oro_sales_b2bcustomer_info_customer_" . twig_get_attribute($this->env, $this->source,                 // line 6
$context["customer"], "id", [], "any", false, false, false, 6)) . "_channel_") . twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)), "widgetType" => "customer-info", "label" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(                // line 8
$context["customer"]), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_sales_widget_b2bcustomer_info", ["id" => twig_get_attribute($this->env, $this->source,                 // line 10
$context["customer"], "id", [], "any", false, false, false, 10), "channelId" => twig_get_attribute($this->env, $this->source, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)])]]);
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 15, $this->source); })())) > 1)) {
                // line 16
                echo "        ";
                if ( !$this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
                    // line 17
                    echo "            ";
                    $context["tabsOptions"] = ["verticalTabs" => true, "useDropdown" => false, "subtitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.customer.entity_plural_label")];
                    // line 22
                    echo "        ";
                }
                // line 23
                echo "        ";
                $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSales/B2bCustomer/accountCustomersInfo.html.twig", 23)->unwrap();
                // line 24
                echo "        <div class=\"widget-content account-customer-info multicustomer\" ";
                echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/view-component", "options" => ["view" => "orosales/js/app/views/account-multicustomer-view"]]], 24, $context, $this->getSourceContext());
                // line 29
                echo ">
            ";
                // line 30
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\TabExtension']->tabPanel($this->env, (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 30, $this->source); })()), ((array_key_exists("tabsOptions", $context)) ? (_twig_default_filter((isset($context["tabsOptions"]) || array_key_exists("tabsOptions", $context) ? $context["tabsOptions"] : (function () { throw new RuntimeError('Variable "tabsOptions" does not exist.', 30, $this->source); })()), [])) : ([])));
                echo "
        </div>
    ";
            } else {
                // line 33
                echo "        <div class=\"widget-content account-customer-info\">
            ";
                // line 34
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 34, $this->source); })()), 0, [], "array", false, false, false, 34));
                echo "
        </div>
    ";
            }
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroSales/B2bCustomer/accountCustomersInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  95 => 33,  89 => 30,  86 => 29,  83 => 24,  80 => 23,  77 => 22,  74 => 17,  71 => 16,  68 => 15,  62 => 14,  60 => 10,  59 => 8,  58 => 6,  56 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted('oro_sales_b2bcustomer_view') and customers|length > 0 %}
    {% set tabs = [] %}
    {% for customer in customers %}
        {% set tabs = tabs|merge([
            {
                'alias': 'oro_sales_b2bcustomer_info_customer_' ~ customer.id ~ '_channel_' ~ channel.id,
                'widgetType': 'customer-info',
                'label': customer|oro_format_name,
                'url': path('oro_sales_widget_b2bcustomer_info', {
                    'id': customer.id, 'channelId': channel.id
                })
            }
        ]) %}
    {% endfor %}
    {% if (tabs|length > 1) %}
        {% if not isMobileVersion() %}
            {% set tabsOptions = {
                verticalTabs: true,
                useDropdown: false,
                subtitle: 'oro.sales.customer.entity_plural_label'|trans
            }%}
        {% endif %}
        {% import '@OroUI/macros.html.twig' as UI %}
        <div class=\"widget-content account-customer-info multicustomer\" {{ UI.renderPageComponentAttributes({
            module: 'oroui/js/app/components/view-component',
            options: {
                view: 'orosales/js/app/views/account-multicustomer-view'
            }
        }) }}>
            {{ tabPanel(tabs, tabsOptions|default({})) }}
        </div>
    {% else %}
        <div class=\"widget-content account-customer-info\">
            {{ oro_widget_render(tabs[0]) }}
        </div>
    {% endif %}
{% endif %}
", "@OroSales/B2bCustomer/accountCustomersInfo.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/SalesBundle/Resources/views/B2bCustomer/accountCustomersInfo.html.twig");
    }
}
