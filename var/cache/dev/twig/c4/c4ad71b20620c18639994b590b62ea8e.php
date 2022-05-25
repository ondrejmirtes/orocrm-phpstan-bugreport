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

/* @OroNote/Note/widget/notes.html.twig */
class __TwigTemplate_fb4ea2e70ddd52e5db37d0a7b57bf28c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
            'widget_actions' => [$this, 'block_widget_actions'],
            'items_container' => [$this, 'block_items_container'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNote/Note/widget/notes.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNote/Note/widget/notes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNote/Note/widget/notes.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNote/Note/widget/notes.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["containerExtraClass"] = ((array_key_exists("containerExtraClass", $context)) ? ((isset($context["containerExtraClass"]) || array_key_exists("containerExtraClass", $context) ? $context["containerExtraClass"] : (function () { throw new RuntimeError('Variable "containerExtraClass" does not exist.', 3, $this->source); })())) : (""));
        // line 4
        echo "
<div class=\"widget-content notes ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["containerExtraClass"]) || array_key_exists("containerExtraClass", $context) ? $context["containerExtraClass"] : (function () { throw new RuntimeError('Variable "containerExtraClass" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 6
        $this->displayBlock('widget_content', $context, $blocks);
        // line 70
        echo "</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widget_content", $this->getTemplateName(), 6));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_content"));

        // line 7
        echo "        ";
        $this->displayBlock('widget_actions', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('items_container', $context, $blocks);
        // line 69
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 7
    public function block_widget_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widget_actions", $this->getTemplateName(), 7));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_actions"));

        // line 8
        echo "            <div class=\"widget-actions\">
                ";
        // line 9
        echo twig_call_macro($macros["UI"], "macro_clientLink", [["aCss" => "expand-all-button btn-link", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand All"), "dataAttributes" => ["action-name" => "expand_all"]]], 9, $context, $this->getSourceContext());
        // line 13
        echo "
                ";
        // line 14
        echo twig_call_macro($macros["UI"], "macro_clientLink", [["aCss" => "collapse-all-button btn-link", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse All"), "dataAttributes" => ["action-name" => "collapse_all"]]], 14, $context, $this->getSourceContext());
        // line 18
        echo "
                ";
        // line 19
        echo twig_call_macro($macros["UI"], "macro_clientLink", [["aCss" => "btn btn-icon refresh-button icons-holder-text", "iCss" => "fa-refresh", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Refresh"), "dataAttributes" => ["action-name" => "refresh"]]], 19, $context, $this->getSourceContext());
        // line 24
        echo "
                ";
        // line 25
        echo twig_call_macro($macros["UI"], "macro_clientLink", [["aCss" => "btn btn-icon sort-button icons-holder-text", "iCss" => "fa-arrow-up", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Descending Order"), "dataAttributes" => ["action-name" => "toggle_sorting", "title-alt" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ascending Order"), "icon-alt" => "fa-arrow-down"]]], 25, $context, $this->getSourceContext());
        // line 34
        echo "
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 38
    public function block_items_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("items_container", $this->getTemplateName(), 38));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "items_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "items_container"));

        // line 39
        echo "            ";
        $context["options"] = ["widgetId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "get", [0 => "_wid"], "method", false, false, false, 40), "notesOptions" => ["template" => "#template-note-list", "itemTemplate" => "#template-note-item", "urls" => ["list" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_note_notes", ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(        // line 46
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 46, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "createItem" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_note_create", ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(        // line 49
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)])], "routes" => ["update" => "oro_note_update", "delete" => "oro_api_delete_note"]], "notesData" => $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_note_notes", ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(        // line 58
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 58, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]))];
        // line 61
        echo "
            <div class=\"container-fluid accordion\"
                data-page-component-module=\"oronote/js/app/components/notes-component\"
                data-page-component-options=\"";
        // line 64
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 64, $this->source); })())), "html", null, true);
        echo "\"></div>

            ";
        // line 66
        $this->loadTemplate("@OroNote/Note/js/list.html.twig", "@OroNote/Note/widget/notes.html.twig", 66)->display(twig_array_merge($context, ["id" => "template-note-list"]));
        // line 67
        echo "            ";
        $this->loadTemplate("@OroNote/Note/js/view.html.twig", "@OroNote/Note/widget/notes.html.twig", 67)->display(twig_array_merge($context, ["id" => "template-note-item"]));
        // line 68
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNote/Note/widget/notes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 68,  193 => 67,  191 => 66,  186 => 64,  181 => 61,  179 => 58,  178 => 49,  177 => 46,  176 => 40,  174 => 39,  161 => 38,  146 => 34,  144 => 25,  141 => 24,  139 => 19,  136 => 18,  134 => 14,  131 => 13,  129 => 9,  126 => 8,  113 => 7,  100 => 69,  98 => 38,  95 => 37,  92 => 7,  79 => 6,  65 => 70,  63 => 6,  59 => 5,  56 => 4,  54 => 3,  51 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

{% set containerExtraClass = containerExtraClass is defined ? containerExtraClass : '' %}

<div class=\"widget-content notes {{ containerExtraClass }}\">
    {% block widget_content %}
        {% block widget_actions %}
            <div class=\"widget-actions\">
                {{ UI.clientLink({
                    'aCss': 'expand-all-button btn-link',
                    'label' : 'Expand All'|trans,
                    'dataAttributes': {'action-name': 'expand_all'}
                }) }}
                {{ UI.clientLink({
                    'aCss': 'collapse-all-button btn-link',
                    'label' : 'Collapse All'|trans,
                    'dataAttributes': {'action-name': 'collapse_all'}
                }) }}
                {{ UI.clientLink({
                    'aCss': 'btn btn-icon refresh-button icons-holder-text',
                    'iCss': 'fa-refresh',
                    'title' : 'Refresh'|trans,
                    'dataAttributes': {'action-name': 'refresh'}
                }) }}
                {{ UI.clientLink({
                    'aCss': 'btn btn-icon sort-button icons-holder-text',
                    'iCss': 'fa-arrow-up',
                    'title' : 'Descending Order'|trans,
                    'dataAttributes': {
                        'action-name': 'toggle_sorting',
                        'title-alt': 'Ascending Order'|trans,
                        'icon-alt': 'fa-arrow-down'
                    }
                }) }}
            </div>
        {% endblock %}

        {% block items_container %}
            {% set options = {
                widgetId: app.request.get('_wid'),
                notesOptions: {
                    template: '#template-note-list',
                    itemTemplate: '#template-note-item',
                    urls: {
                        list: path('oro_note_notes', {
                            'entityClass': oro_class_name(entity, true), 'entityId': entity.id
                        }),
                        createItem: path('oro_note_create', {
                            'entityClass': oro_class_name(entity, true), 'entityId': entity.id
                        }),
                    },
                    routes: {
                        update: 'oro_note_update',
                        delete: 'oro_api_delete_note'
                    }
                },
                notesData: render(path('oro_note_notes', {
                    entityClass: oro_class_name(entity, true), entityId: entity.id
                }))
            } %}

            <div class=\"container-fluid accordion\"
                data-page-component-module=\"oronote/js/app/components/notes-component\"
                data-page-component-options=\"{{ options|json_encode }}\"></div>

            {% include '@OroNote/Note/js/list.html.twig' with {'id': 'template-note-list'} %}
            {% include '@OroNote/Note/js/view.html.twig' with {'id': 'template-note-item'} %}
        {% endblock %}
    {% endblock %}
</div>
", "@OroNote/Note/widget/notes.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NoteBundle/Resources/views/Note/widget/notes.html.twig");
    }
}
