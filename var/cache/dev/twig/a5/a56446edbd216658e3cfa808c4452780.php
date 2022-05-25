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

/* @OroOrganization/viewOwnerInfo.html.twig */
class __TwigTemplate_99d83ff542d573afb4789014630a64b5 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroOrganization/viewOwnerInfo.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOrganization/viewOwnerInfo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOrganization/viewOwnerInfo.html.twig"));

        // line 1
        $macros["U"] = $this->macros["U"] = $this->loadTemplate("@OroUser/macros.html.twig", "@OroOrganization/viewOwnerInfo.html.twig", 1)->unwrap();
        // line 2
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 2, $this->source); })()), $this->extensions['Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension']->getOwnerFieldName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 2, $this->source); })())))) {
            // line 3
            echo "    ";
            if ( !array_key_exists("bracket_parts", $context)) {
                // line 4
                echo "        ";
                $context["bracket_parts"] = [];
                // line 5
                echo "    ";
            }
            // line 6
            echo "    ";
            $context["ownerType"] = $this->extensions['Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension']->getOwnerType((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()));
            // line 7
            echo "    ";
            if (((isset($context["ownerType"]) || array_key_exists("ownerType", $context) ? $context["ownerType"] : (function () { throw new RuntimeError('Variable "ownerType" does not exist.', 7, $this->source); })()) == "USER")) {
                // line 8
                echo "        ";
                $context["userOwner"] = $this->extensions['Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension']->getEntityOwner((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()));
                // line 9
                echo "        ";
                if ((isset($context["userOwner"]) || array_key_exists("userOwner", $context) ? $context["userOwner"] : (function () { throw new RuntimeError('Variable "userOwner" does not exist.', 9, $this->source); })())) {
                    // line 10
                    echo "            ";
                    $context["businessUnitName"] = twig_call_macro($macros["U"], "macro_user_business_unit_name", [(isset($context["userOwner"]) || array_key_exists("userOwner", $context) ? $context["userOwner"] : (function () { throw new RuntimeError('Variable "userOwner" does not exist.', 10, $this->source); })()), false], 10, $context, $this->getSourceContext());
                    // line 11
                    echo "            ";
                    if ( !twig_test_empty((isset($context["businessUnitName"]) || array_key_exists("businessUnitName", $context) ? $context["businessUnitName"] : (function () { throw new RuntimeError('Variable "businessUnitName" does not exist.', 11, $this->source); })()))) {
                        // line 12
                        echo "                ";
                        $context["bracket_parts"] = twig_array_merge([0 => (isset($context["businessUnitName"]) || array_key_exists("businessUnitName", $context) ? $context["businessUnitName"] : (function () { throw new RuntimeError('Variable "businessUnitName" does not exist.', 12, $this->source); })())], (isset($context["bracket_parts"]) || array_key_exists("bracket_parts", $context) ? $context["bracket_parts"] : (function () { throw new RuntimeError('Variable "bracket_parts" does not exist.', 12, $this->source); })()));
                        // line 13
                        echo "            ";
                    }
                    // line 14
                    echo "        ";
                }
                // line 15
                echo "    ";
            } elseif (((isset($context["ownerType"]) || array_key_exists("ownerType", $context) ? $context["ownerType"] : (function () { throw new RuntimeError('Variable "ownerType" does not exist.', 15, $this->source); })()) == "ORGANIZATION")) {
                // line 16
                echo "        ";
                if ( !array_key_exists("organizationInfo", $context)) {
                    // line 17
                    echo "            ";
                    $context["organizationOwner"] = $this->extensions['Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension']->getEntityOwner((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()));
                    // line 18
                    echo "            ";
                    if ( !(null === (isset($context["organizationOwner"]) || array_key_exists("organizationOwner", $context) ? $context["organizationOwner"] : (function () { throw new RuntimeError('Variable "organizationOwner" does not exist.', 18, $this->source); })()))) {
                        // line 19
                        echo "                ";
                        $context["organizationInfo"] = (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.owner") . ": ") . twig_get_attribute($this->env, $this->source, (isset($context["organizationOwner"]) || array_key_exists("organizationOwner", $context) ? $context["organizationOwner"] : (function () { throw new RuntimeError('Variable "organizationOwner" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19));
                        // line 20
                        echo "            ";
                    } else {
                        // line 21
                        echo "                ";
                        $context["organizationInfo"] = "";
                        // line 22
                        echo "            ";
                    }
                    // line 23
                    echo "        ";
                }
                // line 24
                echo "        ";
                echo (isset($context["organizationInfo"]) || array_key_exists("organizationInfo", $context) ? $context["organizationInfo"] : (function () { throw new RuntimeError('Variable "organizationInfo" does not exist.', 24, $this->source); })());
                echo "
    ";
            }
            // line 26
            echo "    ";
            if ( !twig_test_empty((isset($context["bracket_parts"]) || array_key_exists("bracket_parts", $context) ? $context["bracket_parts"] : (function () { throw new RuntimeError('Variable "bracket_parts" does not exist.', 26, $this->source); })()))) {
                // line 27
                echo "        (";
                echo twig_join_filter((isset($context["bracket_parts"]) || array_key_exists("bracket_parts", $context) ? $context["bracket_parts"] : (function () { throw new RuntimeError('Variable "bracket_parts" does not exist.', 27, $this->source); })()), ", ");
                echo ")
    ";
            }
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroOrganization/viewOwnerInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 27,  119 => 26,  113 => 24,  110 => 23,  107 => 22,  104 => 21,  101 => 20,  98 => 19,  95 => 18,  92 => 17,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUser/macros.html.twig' as U %}
{% if is_granted('VIEW', entity, oro_get_owner_field_name(entity)) %}
    {% if bracket_parts is not defined %}
        {% set bracket_parts = [] %}
    {% endif %}
    {% set ownerType = oro_get_owner_type(entity) %}
    {% if ownerType == 'USER' %}
        {% set userOwner = oro_get_entity_owner(entity) %}
        {% if userOwner %}
            {% set businessUnitName = U.user_business_unit_name(userOwner, false) %}
            {% if businessUnitName is not empty %}
                {% set bracket_parts = [businessUnitName]|merge(bracket_parts) %}
            {% endif %}
        {% endif %}
    {% elseif ownerType == 'ORGANIZATION' %}
        {% if organizationInfo is not defined %}
            {% set organizationOwner = oro_get_entity_owner(entity) %}
            {% if organizationOwner is not null %}
                {% set organizationInfo =  'oro.ui.owner'|trans ~ ': ' ~ organizationOwner.name %}
            {% else %}
                {% set organizationInfo = '' %}
            {% endif %}
        {% endif %}
        {{ organizationInfo|raw }}
    {% endif %}
    {% if bracket_parts is not empty %}
        ({{ bracket_parts|join(', ')|raw }})
    {% endif %}
{% endif %}
", "@OroOrganization/viewOwnerInfo.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/OrganizationBundle/Resources/views/viewOwnerInfo.html.twig");
    }
}
