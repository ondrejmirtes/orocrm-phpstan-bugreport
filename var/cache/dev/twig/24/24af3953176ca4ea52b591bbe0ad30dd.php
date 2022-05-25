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

/* @OroTag/macros.html.twig */
class __TwigTemplate_4551c8b05639e66cb62378ae7040ffb4 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTag/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTag/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTag/macros.html.twig"));

        // line 38
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_renderView($__entity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderView"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderView"));

            // line 2
            echo "    ";
            $context["tagCloudElId"] = ("tags-" . twig_random($this->env));
            // line 3
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroTag/macros.html.twig", 3)->unwrap();
            // line 4
            echo "    <div ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroform/js/app/components/inline-editable-view-component", "options" => ["frontend_type" => "tags", "value" => $this->extensions['Oro\Bundle\TagBundle\Twig\TagExtension']->getList(            // line 8
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })())), "fieldName" => "tags", "metadata" => ["inline_editing" => ["enable" => $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_tag_assign_unassign"), "save_api_accessor" => ["route" => "oro_api_post_taggable", "http_method" => "POST", "default_route_parameters" => ["entity" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(            // line 17
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 17, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source,             // line 18
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]], "autocomplete_api_accessor" => ["class" => "oroui/js/tools/search-api-accessor", "search_handler_name" => "tags", "label_field_name" => "name"], "editor" => ["view_options" => ["permissions" => ["oro_tag_create" => $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_tag_create")]]]]]]]], 4, $context, $this->getSourceContext());
            // line 36
            echo "></div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 42
    public function macro_tagSortActions(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tagSortActions"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tagSortActions"));

            // line 43
            echo "    <ul class=\"tag-sort-actions inline\">
        <li>
            <a href=\"#\" class=\"no-hash active\">";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tag.menu.all_tags"), "html", null, true);
            echo "</a>
        </li>
        <li>
            <a href=\"#\" data-type=\"owner\" class=\"no-hash\">";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tag.menu.my_tags"), "html", null, true);
            echo "</a>
        </li>
    </ul>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroTag/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 48,  129 => 45,  125 => 43,  107 => 42,  91 => 36,  89 => 18,  88 => 17,  87 => 8,  85 => 4,  82 => 3,  79 => 2,  60 => 1,  46 => 38,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro renderView(entity) %}
    {% set tagCloudElId = 'tags-' ~ random() %}
    {% import '@OroUI/macros.html.twig' as UI %}
    <div {{ UI.renderPageComponentAttributes({
        module: 'oroform/js/app/components/inline-editable-view-component',
        options: {
            frontend_type: 'tags',
            value: oro_tag_get_list(entity),
            fieldName: 'tags',
            metadata: {
                inline_editing: {
                    enable: is_granted('oro_tag_assign_unassign'),
                    save_api_accessor: {
                        route: 'oro_api_post_taggable',
                        http_method: 'POST',
                        default_route_parameters: {
                            entity: oro_class_name(entity, true),
                            entityId: entity.id
                        }
                    },
                    autocomplete_api_accessor: {
                        class: 'oroui/js/tools/search-api-accessor',
                        search_handler_name: 'tags',
                        label_field_name: 'name'
                    },
                    editor: {
                        view_options: {
                            permissions: {
                                oro_tag_create: is_granted('oro_tag_create')
                            }
                        }
                    }
                }
            }
        }
    }) }}></div>
{% endmacro %}

{#
    Render sort actions list
#}
{% macro tagSortActions() %}
    <ul class=\"tag-sort-actions inline\">
        <li>
            <a href=\"#\" class=\"no-hash active\">{{ 'oro.tag.menu.all_tags'|trans }}</a>
        </li>
        <li>
            <a href=\"#\" data-type=\"owner\" class=\"no-hash\">{{ 'oro.tag.menu.my_tags'|trans }}</a>
        </li>
    </ul>
{% endmacro %}
", "@OroTag/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/TagBundle/Resources/views/macros.html.twig");
    }
}
