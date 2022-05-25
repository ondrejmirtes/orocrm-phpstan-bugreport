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

/* @OroAddress/widget/addressBook.html.twig */
class __TwigTemplate_93d7c13f41b77140492189340934035f extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAddress/widget/addressBook.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAddress/widget/addressBook.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAddress/widget/addressBook.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroAddress/widget/addressBook.html.twig", 2)->unwrap();
        // line 3
        echo "
";
        // line 4
        $context["addressBookOptions"] = ["module" => "oroaddress/js/app/components/address-book-widget-component", "options" => ["wid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "get", [0 => "_wid"], "method", false, false, false, 7), "addresses" => $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(        // line 8
(isset($context["addressListUrl"]) || array_key_exists("addressListUrl", $context) ? $context["addressListUrl"] : (function () { throw new RuntimeError('Variable "addressListUrl" does not exist.', 8, $this->source); })())), "addressListUrl" =>         // line 9
(isset($context["addressListUrl"]) || array_key_exists("addressListUrl", $context) ? $context["addressListUrl"] : (function () { throw new RuntimeError('Variable "addressListUrl" does not exist.', 9, $this->source); })()), "addressCreateUrl" =>         // line 10
(isset($context["addressCreateUrl"]) || array_key_exists("addressCreateUrl", $context) ? $context["addressCreateUrl"] : (function () { throw new RuntimeError('Variable "addressCreateUrl" does not exist.', 10, $this->source); })()), "addressUpdateRoute" => ["route" =>         // line 12
(isset($context["addressUpdateRoute"]) || array_key_exists("addressUpdateRoute", $context) ? $context["addressUpdateRoute"] : (function () { throw new RuntimeError('Variable "addressUpdateRoute" does not exist.', 12, $this->source); })()), "params" => [        // line 14
(isset($context["ownerParam"]) || array_key_exists("ownerParam", $context) ? $context["ownerParam"] : (function () { throw new RuntimeError('Variable "ownerParam" does not exist.', 14, $this->source); })()) => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]], "addressDeleteRoute" => ["route" =>         // line 18
(isset($context["addressDeleteRoute"]) || array_key_exists("addressDeleteRoute", $context) ? $context["addressDeleteRoute"] : (function () { throw new RuntimeError('Variable "addressDeleteRoute" does not exist.', 18, $this->source); })()), "params" => [        // line 20
(isset($context["ownerParam"]) || array_key_exists("ownerParam", $context) ? $context["ownerParam"] : (function () { throw new RuntimeError('Variable "ownerParam" does not exist.', 20, $this->source); })()) => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]], "isAddressHtmlFormatted" => true]];
        // line 26
        echo "
<div class=\"widget-content\" ";
        // line 27
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [(isset($context["addressBookOptions"]) || array_key_exists("addressBookOptions", $context) ? $context["addressBookOptions"] : (function () { throw new RuntimeError('Variable "addressBookOptions" does not exist.', 27, $this->source); })())], 27, $context, $this->getSourceContext());
        echo ">
    ";
        // line 29
        echo "    ";
        $this->loadTemplate("@OroAddress/Js/address.js.twig", "@OroAddress/widget/addressBook.html.twig", 29)->display($context);
        // line 30
        echo "
    ";
        // line 32
        echo "    <div class=\"widget-actions\">
        ";
        // line 33
        if (( !array_key_exists("address_edit_acl_resource", $context) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["address_edit_acl_resource"]) || array_key_exists("address_edit_acl_resource", $context) ? $context["address_edit_acl_resource"] : (function () { throw new RuntimeError('Variable "address_edit_acl_resource" does not exist.', 33, $this->source); })())))) {
            // line 34
            echo "        <button class=\"btn btn-primary\" data-action-name=\"add_address\"> + ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Address"), "html", null, true);
            echo "</button>
        ";
        }
        // line 36
        echo "    </div>
    <div class=\"map-box\" id=\"address-book\"></div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroAddress/widget/addressBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 36,  79 => 34,  77 => 33,  74 => 32,  71 => 30,  68 => 29,  64 => 27,  61 => 26,  59 => 20,  58 => 18,  57 => 14,  56 => 12,  55 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 4,  48 => 3,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Address book widget to use on view entity pages #}
{% import '@OroUI/macros.html.twig' as UI %}

{% set addressBookOptions = {
    module: 'oroaddress/js/app/components/address-book-widget-component',
    options: {
        wid: app.request.get('_wid'),
        addresses: render(addressListUrl),
        addressListUrl: addressListUrl,
        addressCreateUrl: addressCreateUrl,
        addressUpdateRoute: {
            route: addressUpdateRoute,
            params: {
                (ownerParam):  entity.id,
            }
        },
        addressDeleteRoute: {
            route: addressDeleteRoute,
            params: {
                (ownerParam):  entity.id,
            }
        },
        isAddressHtmlFormatted: true
    }
} %}

<div class=\"widget-content\" {{ UI.renderPageComponentAttributes(addressBookOptions) }}>
    {# JS template for address view #}
    {% include \"@OroAddress/Js/address.js.twig\" %}

    {# widget container and actions #}
    <div class=\"widget-actions\">
        {% if address_edit_acl_resource is not defined or is_granted(address_edit_acl_resource) %}
        <button class=\"btn btn-primary\" data-action-name=\"add_address\"> + {{ 'Add Address'|trans }}</button>
        {% endif %}
    </div>
    <div class=\"map-box\" id=\"address-book\"></div>
</div>
", "@OroAddress/widget/addressBook.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/AddressBundle/Resources/views/widget/addressBook.html.twig");
    }
}
