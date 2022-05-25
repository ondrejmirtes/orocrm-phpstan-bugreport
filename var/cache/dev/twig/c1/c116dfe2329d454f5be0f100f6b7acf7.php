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

/* @OroAddress/Js/address.js.twig */
class __TwigTemplate_4e37529f3831ea961f7dcb3248b4b300 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAddress/Js/address.js.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAddress/Js/address.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAddress/Js/address.js.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"template-addressbook-item\">
    <div class=\"address-book-item\">
        ";
        // line 3
        if (( !array_key_exists("address_edit_acl_resource", $context) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["address_edit_acl_resource"]) || array_key_exists("address_edit_acl_resource", $context) ? $context["address_edit_acl_resource"] : (function () { throw new RuntimeError('Variable "address_edit_acl_resource" does not exist.', 3, $this->source); })())))) {
            // line 4
            echo "        <div class=\"address-book-item__actions\">
            <% if (!_.isMobile()) { %>
                <button class=\"btn btn-icon btn-light item-edit-button address-book-item__action\" title=\"<%- _.__('Edit') %>\">
                    <span class=\"fa-pencil-square-o hide-text\" aria-hidden='true'><%- _.__('Edit') %></span>
                </button>
                <% if (!primary) { %>
                    <button class=\"btn btn-icon btn-light item-remove-button address-book-item__action\" title=\"<%- _.__('Remove') %>\"><span class=\"fa-trash-o hide-text\"><%- _.__('Remove') %></span></button>
                <% } %>
            <% } else { %>
                <div class=\"dropdown\">
                    <% var togglerId = _.uniqueId('dropdown-') %>
                    <button id=\"<%- togglerId %>\"
                        class=\"dropdown-toggle dropdown-toggle--no-caret btn btn-icon btn-light address-book-item__action\"
                        data-toggle=\"dropdown\"
                        aria-haspopup=\"true\"
                        aria-expanded=\"false\"
                        aria-label=\"<%- _.__('Address actions')%>\"
                        title=\"<%- _.__('Address actions') %>\"
                        data-placement=\"bottom-end\"
                        data-modifiers=\"<%- JSON.stringify({preventOverflow: {enabled: false}, hide: {enabled: false}}) %>\"
                    >
                        <span class=\"fa-ellipsis-h hide-text\" aria-hidden=\"true\"><%- _.__('More') %></span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"<%- togglerId %>\">
                        <li>
                            <button class=\"dropdown-item item-edit-button address-book-item__action\">
                                <span class=\"fa-pencil-square-o\" aria-hidden='true'></span>
                                <%- _.__('Edit') %>
                            </button>
                        </li>
                        <li>
                            <% if (!primary) { %>
                                <button class=\"dropdown-item item-remove-button\">
                                    <span class=\"fa-trash-o\" aria-hidden='true'></span>
                                    <%- _.__('Remove') %>
                                </button>
                            <% } %>
                        </li>
                    </ul>
                </div>
            <% } %>
            </div>
         ";
        }
        // line 47
        echo "        <div class=\"address-book-item__title\"><%- label %></div>
        <ul class=\"address-book-item__labels\">
            <% if (primary) { %> <li class=\"address-book-item__label-container\"><span class=\"address-book-item__label label-info\"><%- _.__('Primary') %></span></li> <% } %>
            <% _.each(types, function(type) { %>
                <li class=\"address-book-item__label-container\"><span class=\"address-book-item__label\"><%- type.label %></span></li>
            <% }) %>
        </ul>
        <address class=\"address-book-item__address\">
            <% if (isAddressHtmlFormatted) { %>
                <%= formatted_address.replace(/\\n/g, \"<br/>\") %>
            <% } else { %>
                <%= _.escape(formatted_address).replace(/\\n/g, \"<br/>\") %>
            <% } %>
        </address>
    </div>
</script>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroAddress/Js/address.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 47,  52 => 4,  50 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/html\" id=\"template-addressbook-item\">
    <div class=\"address-book-item\">
        {% if address_edit_acl_resource is not defined or is_granted(address_edit_acl_resource) %}
        <div class=\"address-book-item__actions\">
            <% if (!_.isMobile()) { %>
                <button class=\"btn btn-icon btn-light item-edit-button address-book-item__action\" title=\"<%- _.__('Edit') %>\">
                    <span class=\"fa-pencil-square-o hide-text\" aria-hidden='true'><%- _.__('Edit') %></span>
                </button>
                <% if (!primary) { %>
                    <button class=\"btn btn-icon btn-light item-remove-button address-book-item__action\" title=\"<%- _.__('Remove') %>\"><span class=\"fa-trash-o hide-text\"><%- _.__('Remove') %></span></button>
                <% } %>
            <% } else { %>
                <div class=\"dropdown\">
                    <% var togglerId = _.uniqueId('dropdown-') %>
                    <button id=\"<%- togglerId %>\"
                        class=\"dropdown-toggle dropdown-toggle--no-caret btn btn-icon btn-light address-book-item__action\"
                        data-toggle=\"dropdown\"
                        aria-haspopup=\"true\"
                        aria-expanded=\"false\"
                        aria-label=\"<%- _.__('Address actions')%>\"
                        title=\"<%- _.__('Address actions') %>\"
                        data-placement=\"bottom-end\"
                        data-modifiers=\"<%- JSON.stringify({preventOverflow: {enabled: false}, hide: {enabled: false}}) %>\"
                    >
                        <span class=\"fa-ellipsis-h hide-text\" aria-hidden=\"true\"><%- _.__('More') %></span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"<%- togglerId %>\">
                        <li>
                            <button class=\"dropdown-item item-edit-button address-book-item__action\">
                                <span class=\"fa-pencil-square-o\" aria-hidden='true'></span>
                                <%- _.__('Edit') %>
                            </button>
                        </li>
                        <li>
                            <% if (!primary) { %>
                                <button class=\"dropdown-item item-remove-button\">
                                    <span class=\"fa-trash-o\" aria-hidden='true'></span>
                                    <%- _.__('Remove') %>
                                </button>
                            <% } %>
                        </li>
                    </ul>
                </div>
            <% } %>
            </div>
         {% endif %}
        <div class=\"address-book-item__title\"><%- label %></div>
        <ul class=\"address-book-item__labels\">
            <% if (primary) { %> <li class=\"address-book-item__label-container\"><span class=\"address-book-item__label label-info\"><%- _.__('Primary') %></span></li> <% } %>
            <% _.each(types, function(type) { %>
                <li class=\"address-book-item__label-container\"><span class=\"address-book-item__label\"><%- type.label %></span></li>
            <% }) %>
        </ul>
        <address class=\"address-book-item__address\">
            <% if (isAddressHtmlFormatted) { %>
                <%= formatted_address.replace(/\\n/g, \"<br/>\") %>
            <% } else { %>
                <%= _.escape(formatted_address).replace(/\\n/g, \"<br/>\") %>
            <% } %>
        </address>
    </div>
</script>
", "@OroAddress/Js/address.js.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/AddressBundle/Resources/views/Js/address.js.twig");
    }
}
