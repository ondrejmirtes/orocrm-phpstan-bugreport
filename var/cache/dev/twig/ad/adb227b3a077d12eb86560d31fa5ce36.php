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

/* @OroCase/Comment/widget/comments.html.twig */
class __TwigTemplate_7845d3257c14a0c60d221841bb3a80c0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'items_container' => [$this, 'block_items_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroNote/Note/widget/notes.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCase/Comment/widget/comments.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCase/Comment/widget/comments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCase/Comment/widget/comments.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCase/Comment/widget/comments.html.twig", 2)->unwrap();
        // line 4
        $context["containerExtraClass"] = "comments";
        // line 1
        $this->parent = $this->loadTemplate("@OroNote/Note/widget/notes.html.twig", "@OroCase/Comment/widget/comments.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_items_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("items_container", $this->getTemplateName(), 6));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "items_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "items_container"));

        // line 7
        echo "    ";
        $context["options"] = ["widgetId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "_wid"], "method", false, false, false, 8), "notesOptions" => ["template" => "#template-comment-list", "itemTemplate" => "#template-comment-item", "itemAddEvent" => "comment:add", "itemViewIdPrefix" => "comment-", "itemView" => "orocase/js/app/views/comment-view", "itemModel" => "orocase/js/app/models/comment-model", "messages" => ["addDialogTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.casecomment.dialog.add"), "editDialogTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.casecomment.dialog.edit"), "itemSaved" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.casecomment.message.saved"), "itemRemoved" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.casecomment.message.removed"), "deleteConfirmation" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.casecomment.message.delete_confirmation"), "loadItemsError" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.casecomment.error.load"), "deleteItemError" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.casecomment.error.delete")], "urls" => ["list" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_case_comment_list", ["id" => twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "createItem" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_case_comment_create", ["caseId" => twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)])], "routes" => ["update" => "oro_case_comment_update", "delete" => "oro_case_api_delete_comment"]], "notesData" => $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_case_comment_list", ["id" => twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["case"]) || array_key_exists("case", $context) ? $context["case"] : (function () { throw new RuntimeError('Variable "case" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]))];
        // line 36
        echo "    <div class=\"accordion\" id=\"comment-list\"
         data-page-component-module=\"oronote/js/app/components/notes-component\"
         data-page-component-options=\"";
        // line 38
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 38, $this->source); })())), "html", null, true);
        echo "\"></div>

    ";
        // line 40
        $this->loadTemplate("@OroCase/Comment/js/list.html.twig", "@OroCase/Comment/widget/comments.html.twig", 40)->display(twig_array_merge($context, ["id" => "template-comment-list"]));
        // line 41
        echo "    ";
        $this->loadTemplate("@OroCase/Comment/js/view.html.twig", "@OroCase/Comment/widget/comments.html.twig", 41)->display(twig_array_merge($context, ["id" => "template-comment-item"]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCase/Comment/widget/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 41,  98 => 40,  93 => 38,  89 => 36,  87 => 34,  86 => 27,  85 => 26,  84 => 8,  82 => 7,  69 => 6,  55 => 1,  53 => 4,  51 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroNote/Note/widget/notes.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}

{% set containerExtraClass = 'comments' %}

{% block items_container %}
    {% set options = {
        widgetId: app.request.get('_wid'),
        notesOptions: {
            template: '#template-comment-list',
            itemTemplate: '#template-comment-item',
            itemAddEvent: 'comment:add',
            itemViewIdPrefix: 'comment-',
            itemView: 'orocase/js/app/views/comment-view',
            itemModel: 'orocase/js/app/models/comment-model',
            messages: {
                addDialogTitle: \"oro.case.casecomment.dialog.add\"|trans,
                editDialogTitle: \"oro.case.casecomment.dialog.edit\"|trans,
                itemSaved: \"oro.case.casecomment.message.saved\"|trans,
                itemRemoved: \"oro.case.casecomment.message.removed\"|trans,
                deleteConfirmation: \"oro.case.casecomment.message.delete_confirmation\"|trans,
                loadItemsError: \"oro.case.casecomment.error.load\"|trans,
                deleteItemError: \"oro.case.casecomment.error.delete\"|trans
            },
            urls: {
                list: path('oro_case_comment_list', {'id': case.id}),
                createItem: path('oro_case_comment_create', {'caseId': case.id}),
            },
            routes: {
                update: 'oro_case_comment_update',
                delete: 'oro_case_api_delete_comment'
            }
        },
        notesData: render(path('oro_case_comment_list', {'id': case.id}))
    } %}
    <div class=\"accordion\" id=\"comment-list\"
         data-page-component-module=\"oronote/js/app/components/notes-component\"
         data-page-component-options=\"{{ options|json_encode }}\"></div>

    {% include '@OroCase/Comment/js/list.html.twig' with {'id': 'template-comment-list'} %}
    {% include '@OroCase/Comment/js/view.html.twig' with {'id': 'template-comment-item'} %}
{% endblock %}
", "@OroCase/Comment/widget/comments.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/CaseBundle/Resources/views/Comment/widget/comments.html.twig");
    }
}
