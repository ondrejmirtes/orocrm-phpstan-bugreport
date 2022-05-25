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

/* @OroCase/Case/view.html.twig */
class __TwigTemplate_9f03ad61b536a9bb8dda8a53a756212c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCase/Case/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCase/Case/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCase/Case/view.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCase/Case/view.html.twig", 2)->unwrap();
        // line 3
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroCase/Case/view.html.twig", 3)->unwrap();
        // line 4
        $macros["U"] = $this->macros["U"] = $this->loadTemplate("@OroUser/macros.html.twig", "@OroCase/Case/view.html.twig", 4)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entity.subject%" => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["entity"] ?? null), "subject", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "subject", [], "any", false, false, false, 6), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")))]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroCase/Case/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 8));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 9
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCase/Case/view.html.twig", 9)->unwrap();
        // line 10
        echo "
    ";
        // line 11
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_case_comment_create") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_case_comment_view"))) {
            // line 12
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_clientButton", [["id" => "add-case-comment-button", "aCss" => "no-hash", "iCss" => "fa-comment-o hide-text", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.casecomment.action.add"), "dataAttributes" => ["purpose" => "open-dialog-widget"]]], 12, $context, $this->getSourceContext());
            // line 18
            echo "
        <script>
            loadModules(['jquery', 'oroui/js/mediator'],
            function(\$, mediator){
                \$('#add-case-comment-button').on('click', function(e) {
                    e.preventDefault();
                    mediator.trigger('comment:add', this);
                });
            });
        </script>
    ";
        }
        // line 29
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_editButton", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_case_update", ["id" => twig_get_attribute($this->env, $this->source,             // line 31
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.entity_label")]], 30, $context, $this->getSourceContext());
            // line 33
            echo "
    ";
        }
        // line 35
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 35, $this->source); })()))) {
            // line 36
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_case_api_delete_case", ["id" => twig_get_attribute($this->env, $this->source,             // line 37
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_case_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => twig_get_attribute($this->env, $this->source,             // line 41
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.entity_label")]], 36, $context, $this->getSourceContext());
            // line 43
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 47
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 47));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 48
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 49
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_case_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,         // line 52
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 52, $this->source); })()), "subject", [], "any", false, false, false, 52)];
        // line 54
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 57
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 57));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 58
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCase/Case/view.html.twig", 58)->unwrap();
        // line 60
        ob_start();
        // line 61
        echo "<div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
        // line 63
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.subject.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })()), "subject", [], "any", false, false, false, 63)], 63, $context, $this->getSourceContext());
        echo "
                ";
        // line 64
        echo twig_call_macro($macros["UI"], "macro_renderSwitchableHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.description.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64)], 64, $context, $this->getSourceContext());
        echo "
                ";
        // line 65
        echo twig_call_macro($macros["UI"], "macro_renderSwitchableHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.resolution.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 65, $this->source); })()), "resolution", [], "any", false, false, false, 65)], 65, $context, $this->getSourceContext());
        echo "
                ";
        // line 66
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.source.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 66, $this->source); })()), "source", [], "any", false, false, false, 66)], 66, $context, $this->getSourceContext());
        echo "
                ";
        // line 67
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.status.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 67, $this->source); })()), "status", [], "any", false, false, false, 67)], 67, $context, $this->getSourceContext());
        echo "
                ";
        // line 68
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.priority.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 68, $this->source); })()), "priority", [], "any", false, false, false, 68)], 68, $context, $this->getSourceContext());
        echo "
                ";
        // line 69
        echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.reported_at.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 69, $this->source); })()), "reportedAt", [], "any", false, false, false, 69))], 69, $context, $this->getSourceContext());
        echo "
                ";
        // line 70
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 70, $this->source); })()), "closedAt", [], "any", false, false, false, 70))) {
            // line 71
            echo "                    ";
            echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.closed_at.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 71, $this->source); })()), "closedAt", [], "any", false, false, false, 71))], 71, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 74
        ob_start();
        // line 75
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 75, $this->source); })()), "owner", [], "any", false, false, false, 75)) {
            // line 76
            echo twig_call_macro($macros["U"], "macro_render_user_name", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 76, $this->source); })()), "owner", [], "any", false, false, false, 76)], 76, $context, $this->getSourceContext());
            echo "
                        ";
            // line 77
            echo twig_call_macro($macros["U"], "macro_user_business_unit_name", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 77, $this->source); })()), "owner", [], "any", false, false, false, 77)], 77, $context, $this->getSourceContext());
        }
        $context["owner"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 80
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.owner.label"), (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 80, $this->source); })())], 80, $context, $this->getSourceContext());
        // line 82
        ob_start();
        // line 83
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 83, $this->source); })()), "assignedTo", [], "any", false, false, false, 83)) {
            // line 84
            echo twig_call_macro($macros["U"], "macro_render_user_name", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 84, $this->source); })()), "assignedTo", [], "any", false, false, false, 84)], 84, $context, $this->getSourceContext());
            echo "
                        ";
            // line 85
            echo twig_call_macro($macros["U"], "macro_user_business_unit_name", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 85, $this->source); })()), "assignedTo", [], "any", false, false, false, 85)], 85, $context, $this->getSourceContext());
        }
        $context["assignedTo"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 88
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.assigned_to.label"), (isset($context["assignedTo"]) || array_key_exists("assignedTo", $context) ? $context["assignedTo"] : (function () { throw new RuntimeError('Variable "assignedTo" does not exist.', 88, $this->source); })())], 88, $context, $this->getSourceContext());
        echo "

                ";
        // line 90
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.related_contact.label"), twig_call_macro($macros["UI"], "macro_entityViewLink", [twig_get_attribute($this->env, $this->source,         // line 92
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 92, $this->source); })()), "relatedContact", [], "any", false, false, false, 92), $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 92, $this->source); })()), "relatedContact", [], "any", false, false, false, 92)), "oro_contact_view"], 92, $context, $this->getSourceContext())], 90, $context, $this->getSourceContext());
        // line 95
        ob_start();
        // line 96
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 96, $this->source); })()), "relatedAccount", [], "any", false, false, false, 96)) {
            // line 97
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_account_view")) {
                // line 98
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_account_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 98, $this->source); })()), "relatedAccount", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98)]), "html", null, true);
                echo "\">
                                ";
                // line 99
                echo twig_call_macro($macros["UI"], "macro_renderEntityViewLabel", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 99, $this->source); })()), "relatedAccount", [], "any", false, false, false, 99), "name", "oro.account.entity_label"], 99, $context, $this->getSourceContext());
                echo "
                            </a>
                        ";
            } else {
                // line 102
                echo "                            ";
                echo twig_call_macro($macros["UI"], "macro_renderEntityViewLabel", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 102, $this->source); })()), "relatedAccount", [], "any", false, false, false, 102), "name"], 102, $context, $this->getSourceContext());
                echo "
                        ";
            }
        }
        $context["relatedAccount"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 106
        echo twig_call_macro($macros["UI"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.caseentity.related_account.label"), (isset($context["relatedAccount"]) || array_key_exists("relatedAccount", $context) ? $context["relatedAccount"] : (function () { throw new RuntimeError('Variable "relatedAccount" does not exist.', 106, $this->source); })())], 106, $context, $this->getSourceContext());
        echo "
            </div>
            <div class=\"responsive-block\">
                ";
        // line 109
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 109, $this->source); })())], 109, $context, $this->getSourceContext());
        echo "
            </div>
        </div>";
        $context["caseInformation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.block.general"), "subblocks" => [0 => ["data" => [0 =>         // line 118
(isset($context["caseInformation"]) || array_key_exists("caseInformation", $context) ? $context["caseInformation"] : (function () { throw new RuntimeError('Variable "caseInformation" does not exist.', 118, $this->source); })())]]]]];
        // line 122
        echo "
    ";
        // line 123
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_case_comment_view")) {
            // line 124
            echo "        ";
            ob_start();
            // line 125
            echo "            ";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_case_widget_comments", ["id" => twig_get_attribute($this->env, $this->source,             // line 127
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127)]), "cssClass" => "list-widget comments-widget", "title" => ""]);
            // line 130
            echo "
        ";
            $context["caseComments"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            echo "
        ";
            // line 133
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 133, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.case.block.comments"), "subblocks" => [0 => ["data" => [0 =>             // line 137
(isset($context["caseComments"]) || array_key_exists("caseComments", $context) ? $context["caseComments"] : (function () { throw new RuntimeError('Variable "caseComments" does not exist.', 137, $this->source); })())]]]]]);
            // line 141
            echo "    ";
        }
        // line 142
        echo "
    ";
        // line 143
        $context["id"] = "caseView";
        // line 144
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 144, $this->source); })())];
        // line 145
        echo "
    ";
        // line 146
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroCase/Case/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 146,  346 => 145,  343 => 144,  341 => 143,  338 => 142,  335 => 141,  333 => 137,  332 => 133,  329 => 132,  325 => 130,  323 => 127,  321 => 125,  318 => 124,  316 => 123,  313 => 122,  311 => 118,  310 => 114,  304 => 109,  298 => 106,  290 => 102,  284 => 99,  279 => 98,  277 => 97,  275 => 96,  273 => 95,  271 => 92,  270 => 90,  265 => 88,  261 => 85,  257 => 84,  255 => 83,  253 => 82,  251 => 80,  247 => 77,  243 => 76,  241 => 75,  239 => 74,  233 => 71,  231 => 70,  227 => 69,  223 => 68,  219 => 67,  215 => 66,  211 => 65,  207 => 64,  203 => 63,  199 => 61,  197 => 60,  194 => 58,  181 => 57,  165 => 54,  163 => 52,  162 => 49,  160 => 48,  147 => 47,  132 => 43,  130 => 41,  129 => 37,  127 => 36,  124 => 35,  120 => 33,  118 => 31,  116 => 30,  113 => 29,  100 => 18,  97 => 12,  95 => 11,  92 => 10,  89 => 9,  76 => 8,  62 => 1,  60 => 6,  57 => 4,  55 => 3,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}
{% import '@OroUser/macros.html.twig' as U %}

{% oro_title_set({params : {\"%entity.subject%\": entity.subject|default('N/A'|trans) }}) %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if is_granted('oro_case_comment_create') and is_granted('oro_case_comment_view') %}
        {{ UI.clientButton({
            'id': 'add-case-comment-button',
            'aCss': 'no-hash',
            'iCss': 'fa-comment-o hide-text',
            'label' : 'oro.case.casecomment.action.add'|trans,
            'dataAttributes': { 'purpose': 'open-dialog-widget'}
        }) }}
        <script>
            loadModules(['jquery', 'oroui/js/mediator'],
            function(\$, mediator){
                \$('#add-case-comment-button').on('click', function(e) {
                    e.preventDefault();
                    mediator.trigger('comment:add', this);
                });
            });
        </script>
    {% endif %}
    {% if is_granted('EDIT', entity) %}
        {{ UI.editButton({
            'path' : path('oro_case_update', { id: entity.id }),
            'entity_label': 'oro.case.caseentity.entity_label'|trans
        }) }}
    {% endif %}
    {% if is_granted('DELETE', entity) %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_case_api_delete_case', {'id': entity.id}),
            'dataRedirect': path('oro_case_index'),
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-user',
            'dataId': entity.id,
            'entity_label': 'oro.case.caseentity.entity_label'|trans
        }) }}
    {% endif %}
{% endblock navButtons %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity': entity,
        'indexPath': path('oro_case_index'),
        'indexLabel': 'oro.case.caseentity.entity_plural_label'|trans,
        'entityTitle': entity.subject
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {%- set caseInformation -%}
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                {{ UI.renderProperty('oro.case.caseentity.subject.label'|trans, entity.subject) }}
                {{ UI.renderSwitchableHtmlProperty('oro.case.caseentity.description.label'|trans, entity.description) }}
                {{ UI.renderSwitchableHtmlProperty('oro.case.caseentity.resolution.label'|trans, entity.resolution) }}
                {{ UI.renderProperty('oro.case.caseentity.source.label'|trans, entity.source) }}
                {{ UI.renderProperty('oro.case.caseentity.status.label'|trans, entity.status) }}
                {{ UI.renderProperty('oro.case.caseentity.priority.label'|trans, entity.priority) }}
                {{ UI.renderProperty('oro.case.caseentity.reported_at.label'|trans, entity.reportedAt|oro_format_datetime) }}
                {% if entity.closedAt is not empty %}
                    {{ UI.renderProperty('oro.case.caseentity.closed_at.label'|trans, entity.closedAt|oro_format_datetime) }}
                {% endif %}

                {%- set owner -%}
                    {%- if entity.owner -%}
                        {{ U.render_user_name(entity.owner) }}
                        {{ U.user_business_unit_name(entity.owner) }}
                    {%- endif -%}
                {%- endset -%}
                {{ UI.renderHtmlProperty('oro.case.caseentity.owner.label'|trans, owner) }}

                {%- set assignedTo -%}
                    {%- if entity.assignedTo -%}
                        {{ U.render_user_name(entity.assignedTo) }}
                        {{ U.user_business_unit_name(entity.assignedTo) }}
                    {%- endif -%}
                {%- endset -%}
                {{ UI.renderHtmlProperty('oro.case.caseentity.assigned_to.label'|trans, assignedTo) }}

                {{ UI.renderHtmlProperty(
                    'oro.case.caseentity.related_contact.label'|trans,
                    UI.entityViewLink(entity.relatedContact, entity.relatedContact|oro_format_name, 'oro_contact_view')
                ) }}

                {%- set relatedAccount -%}
                    {%- if entity.relatedAccount -%}
                        {% if is_granted('oro_account_view') %}
                            <a href=\"{{ path('oro_account_view', {'id': entity.relatedAccount.id}) }}\">
                                {{ UI.renderEntityViewLabel(entity.relatedAccount, 'name', 'oro.account.entity_label') }}
                            </a>
                        {% else %}
                            {{ UI.renderEntityViewLabel(entity.relatedAccount, 'name') }}
                        {% endif %}
                    {%- endif -%}
                {%- endset -%}
                {{ UI.renderHtmlProperty('oro.case.caseentity.related_account.label'|trans, relatedAccount) }}
            </div>
            <div class=\"responsive-block\">
                {{ entityConfig.renderDynamicFields(entity) }}
            </div>
        </div>
    {%- endset -%}

    {% set dataBlocks = [
        {
            'title': 'oro.case.block.general'|trans,
            'subblocks': [
                {'data' : [caseInformation]}
            ]
        }
    ] %}

    {% if is_granted('oro_case_comment_view') %}
        {% set caseComments %}
            {{ oro_widget_render({
                'widgetType': 'block',
                'url': path('oro_case_widget_comments', { id: entity.id }),
                'cssClass': 'list-widget comments-widget',
                'title': '',
            }) }}
        {% endset %}

        {% set dataBlocks = dataBlocks|merge([
            {
                'title': 'oro.case.block.comments'|trans,
                'subblocks': [
                    {'data' : [caseComments]}
                ]
            }
        ]) %}
    {% endif %}

    {% set id = 'caseView' %}
    {% set data = { 'dataBlocks': dataBlocks } %}

    {{ parent() }}
{% endblock content_data %}
", "@OroCase/Case/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/CaseBundle/Resources/views/Case/view.html.twig");
    }
}
