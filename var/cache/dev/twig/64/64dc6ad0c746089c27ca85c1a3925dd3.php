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

/* @OroUser/Role/update.html.twig */
class __TwigTemplate_a51efd2c12f8392aab14e95dfb14d95a extends Template
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
        return "@OroUI/actions/update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/Role/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Role/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Role/update.html.twig"));

        // line 2
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroUser/Role/update.html.twig", 2)->unwrap();
        // line 4
        $context["entityId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4);

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%role%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5), "label", [], "any", false, false, false, 5), "%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.role.entity_label")]]);
        // line 6
        $context["gridName"] = "role-users-grid";
        // line 7
        $context["formAction"] = (((isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 7, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_role_update", ["id" => (isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 7, $this->source); })())])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_role_create")));
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroUser/Role/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 9));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 10
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/Role/update.html.twig", 10)->unwrap();
        // line 11
        echo "
    ";
        // line 12
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "
    ";
        // line 13
        if (((isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 13, $this->source); })()) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13)))) {
            // line 14
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_role", ["id" =>             // line 15
(isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 15, $this->source); })())]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_role_index"), "aCss" => "no-hash remove-button", "dataId" =>             // line 18
(isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 18, $this->source); })()), "id" => "btn-remove-role", "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.role.entity_label"), "disabled" =>  !            // line 21
(isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 21, $this->source); })())]], 14, $context, $this->getSourceContext());
            // line 23
            echo "
        ";
            // line 24
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 24, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 26
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_role_index")], 26, $context, $this->getSourceContext());
        echo "
    ";
        // line 27
        $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["class" => "btn-success role-submit", "route" => "oro_user_role_view", "params" => ["id" => "\$id", "_enableContentProviders" => "mainMenu"]]], 27, $context, $this->getSourceContext());
        // line 32
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_user_role_create")) {
            // line 33
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 33, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_user_role_create"]], 33, $context, $this->getSourceContext()));
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_user_role_update"))) {
            // line 38
            echo "        ";
            // line 39
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 39, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["class" => "btn-success main-group role-submit", "route" => "oro_user_role_update", "params" => ["id" => "\$id", "_enableContentProviders" => "mainMenu"]]], 39, $context, $this->getSourceContext()));
            // line 44
            echo "    ";
        }
        // line 45
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 45, $this->source); })())]], 45, $context, $this->getSourceContext());
        echo "
    ";
        // line 46
        $context["fields"] = [];
        // line 47
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["child"]) {
            // line 48
            echo "        ";
            if (!twig_in_filter($context["name"], [0 => "appendUsers", 1 => "removeUsers", 2 => "privileges"])) {
                // line 49
                echo "            ";
                $context["fields"] = twig_array_merge((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 49, $this->source); })()), [$context["name"] => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49))]);
                // line 50
                echo "        ";
            }
            // line 51
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    ";
        $context["options"] = ["elSelector" => ".btn-success.role-submit", "formName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "formSelector" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "vars", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55)), "privilegesSelector" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "privileges", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56)), "appendUsersSelector" => "#roleAppendUsers", "removeUsersSelector" => "#roleRemoveUsers", "fields" =>         // line 59
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 59, $this->source); })())];
        // line 61
        echo "    <div data-page-component-module=\"orouser/js/views/role-view\"
         data-page-component-options=\"";
        // line 62
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 62, $this->source); })())), "html", null, true);
        echo "\">
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 66
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 66));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 67
        echo "    ";
        if ((isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 67, $this->source); })())) {
            // line 68
            echo "        ";
            $context["breadcrumbs"] = ["entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 69
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "vars", [], "any", false, false, false, 69), "value", [], "any", false, false, false, 69), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_role_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.role.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 72
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "value", [], "any", false, false, false, 72), "label", [], "any", false, false, false, 72)];
            // line 75
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 77
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.role.entity_label")]);
            // line 78
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroUser/Role/update.html.twig", 78)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 78, $this->source); })())]));
            // line 79
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 82
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 82));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 83
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUser/Role/update.html.twig", 83)->unwrap();
        // line 84
        echo "
    ";
        // line 85
        $context["id"] = "role-profile";
        // line 86
        echo "
    ";
        // line 87
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "subblocks" => [0 => ["title" => "", "data" => [0 =>         // line 93
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "appendUsers", [], "any", false, false, false, 93), 'widget', ["id" => "roleAppendUsers"]), 1 =>         // line 94
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "removeUsers", [], "any", false, false, false, 94), 'widget', ["id" => "roleRemoveUsers"]), 2 =>         // line 95
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "label", [], "any", false, false, false, 95), 'row')]]]]];
        // line 100
        echo "
    ";
        // line 101
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 101, $this->source); })()), $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderAdditionalData($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional")));
        // line 102
        echo "
    ";
        // line 103
        ob_start();
        // line 104
        echo "        ";
        $context["entityTabPanelId"] = uniqid("entity-tab-panel-");
        // line 105
        echo "        ";
        $context["tabsOptions"] = twig_array_merge((isset($context["tabsOptions"]) || array_key_exists("tabsOptions", $context) ? $context["tabsOptions"] : (function () { throw new RuntimeError('Variable "tabsOptions" does not exist.', 105, $this->source); })()), ["controlTabPanel" =>         // line 106
(isset($context["entityTabPanelId"]) || array_key_exists("entityTabPanelId", $context) ? $context["entityTabPanelId"] : (function () { throw new RuntimeError('Variable "entityTabPanelId" does not exist.', 106, $this->source); })())]);
        // line 108
        echo "
        <div ";
        // line 109
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "orouser/js/components/role/entity-category-tabs-component", "options" =>         // line 111
(isset($context["tabsOptions"]) || array_key_exists("tabsOptions", $context) ? $context["tabsOptions"] : (function () { throw new RuntimeError('Variable "tabsOptions" does not exist.', 111, $this->source); })())]], 109, $context, $this->getSourceContext());
        // line 112
        echo "></div>
        <div id=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["entityTabPanelId"]) || array_key_exists("entityTabPanelId", $context) ? $context["entityTabPanelId"] : (function () { throw new RuntimeError('Variable "entityTabPanelId" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "\" class=\"tab-content\" role=\"tabpanel\">
            ";
        // line 114
        echo twig_call_macro($macros["dataGrid"], "macro_renderGrid", ["role-permission-grid", ["role" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 114, $this->source); })())], ["cssClass" => "inner-permissions-grid", "themeOptions" => ["readonly" => false]]], 114, $context, $this->getSourceContext());
        echo "
            <div ";
        // line 115
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "orouser/js/components/role/capability-set-component", "options" =>         // line 117
(isset($context["capabilitySetOptions"]) || array_key_exists("capabilitySetOptions", $context) ? $context["capabilitySetOptions"] : (function () { throw new RuntimeError('Variable "capabilitySetOptions" does not exist.', 117, $this->source); })())]], 115, $context, $this->getSourceContext());
        // line 118
        echo "></div>
        </div>
    ";
        $context["rolePermissionsGrid"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 121
        echo "
    ";
        // line 122
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 122, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 123
(isset($context["privilegesConfig"]) || array_key_exists("privilegesConfig", $context) ? $context["privilegesConfig"] : (function () { throw new RuntimeError('Variable "privilegesConfig" does not exist.', 123, $this->source); })()), "entity", [], "array", false, false, false, 123), "label", [], "any", false, false, false, 123)), "subblocks" => [0 => ["title" => "", "useSpan" => false, "data" => [0 =>         // line 129
(isset($context["rolePermissionsGrid"]) || array_key_exists("rolePermissionsGrid", $context) ? $context["rolePermissionsGrid"] : (function () { throw new RuntimeError('Variable "rolePermissionsGrid" does not exist.', 129, $this->source); })())]]]]]);
        // line 134
        echo "
    ";
        // line 135
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 135, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.entity_plural_label"), "subblocks" => [0 => ["title" => null, "useSpan" => false, "data" => [0 => twig_call_macro($macros["dataGrid"], "macro_renderGrid", [        // line 141
(isset($context["gridName"]) || array_key_exists("gridName", $context) ? $context["gridName"] : (function () { throw new RuntimeError('Variable "gridName" does not exist.', 141, $this->source); })()), ["role_id" => (isset($context["entityId"]) || array_key_exists("entityId", $context) ? $context["entityId"] : (function () { throw new RuntimeError('Variable "entityId" does not exist.', 141, $this->source); })())], ["cssClass" => "inner-grid"]], 141, $context, $this->getSourceContext())]]]]]);
        // line 145
        echo "
    ";
        // line 146
        $context["data"] = ["formErrors" => ((        // line 147
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 148
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 148, $this->source); })())];
        // line 150
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroUser/Role/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 150,  333 => 148,  332 => 147,  331 => 146,  328 => 145,  326 => 141,  325 => 135,  322 => 134,  320 => 129,  319 => 123,  318 => 122,  315 => 121,  310 => 118,  308 => 117,  307 => 115,  303 => 114,  299 => 113,  296 => 112,  294 => 111,  293 => 109,  290 => 108,  288 => 106,  286 => 105,  283 => 104,  281 => 103,  278 => 102,  276 => 101,  273 => 100,  271 => 95,  270 => 94,  269 => 93,  268 => 87,  265 => 86,  263 => 85,  260 => 84,  257 => 83,  244 => 82,  230 => 79,  227 => 78,  224 => 77,  218 => 75,  216 => 72,  215 => 69,  213 => 68,  210 => 67,  197 => 66,  181 => 62,  178 => 61,  176 => 59,  175 => 56,  174 => 55,  173 => 54,  171 => 52,  165 => 51,  162 => 50,  159 => 49,  156 => 48,  151 => 47,  149 => 46,  144 => 45,  141 => 44,  138 => 39,  136 => 38,  133 => 37,  130 => 36,  127 => 33,  124 => 32,  122 => 27,  117 => 26,  112 => 24,  109 => 23,  107 => 21,  106 => 18,  105 => 15,  103 => 14,  101 => 13,  97 => 12,  94 => 11,  91 => 10,  78 => 9,  64 => 1,  62 => 7,  60 => 6,  58 => 5,  55 => 4,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}

{% set entityId = form.vars.value.id %}
{% oro_title_set({params : { \"%role%\": form.vars.value.label, \"%entityName%\": 'oro.user.role.entity_label'|trans } }) %}
{% set gridName = 'role-users-grid' %}
{% set formAction = entityId ? path('oro_user_role_update', { 'id': entityId}) : path('oro_user_role_create') %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ parent() }}
    {% if entityId and is_granted('DELETE', form.vars.value) %}
        {{ UI.deleteButton({
                'dataUrl': path('oro_api_delete_role', {'id': entityId}),
                'dataRedirect': path('oro_user_role_index'),
                'aCss': 'no-hash remove-button',
                'dataId': entityId,
                'id': 'btn-remove-role',
                'entity_label': 'oro.user.role.entity_label'|trans,
                'disabled': not allow_delete
            })
        }}
        {{ UI.buttonSeparator() }}
    {% endif %}
    {{ UI.cancelButton(path('oro_user_role_index')) }}
    {% set html = UI.saveAndCloseButton({
        'class': 'btn-success role-submit',
        'route': 'oro_user_role_view',
        'params': {'id': '\$id', '_enableContentProviders': 'mainMenu'}
    }) %}
    {% if is_granted('oro_user_role_create') %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_user_role_create'
        }) %}
    {% endif %}
    {% if form.vars.value.id or is_granted('oro_user_role_update') %}
        {# button attribute 'action' is avoided because of there is unacceptable submit binding on .action-button in init-layout.js #}
        {% set html = html ~ UI.saveAndStayButton({
            'class': 'btn-success main-group role-submit',
            'route': 'oro_user_role_update',
            'params': {'id': '\$id', '_enableContentProviders': 'mainMenu'}
        }) %}
    {% endif %}
    {{ UI.dropdownSaveButton({'html': html}) }}
    {% set fields = [] %}
    {% for name, child in form %}
        {% if name not in ['appendUsers', 'removeUsers', 'privileges'] %}
            {% set fields = fields|merge({(name): '#' ~ child.vars.id}) %}
        {% endif %}
    {% endfor %}
    {% set options = {
        elSelector: '.btn-success.role-submit',
        formName: form.vars.name,
        formSelector: '#' ~ form.vars.id,
        privilegesSelector: '#' ~ form.privileges.vars.id,
        appendUsersSelector: '#roleAppendUsers',
        removeUsersSelector: '#roleRemoveUsers',
        fields : fields
    } %}
    <div data-page-component-module=\"orouser/js/views/role-view\"
         data-page-component-options=\"{{ options|json_encode }}\">
    </div>
{% endblock navButtons %}

{% block pageHeader %}
    {% if entityId %}
        {% set breadcrumbs = {
            'entity':      form.vars.value,
            'indexPath':   path('oro_user_role_index'),
            'indexLabel': 'oro.user.role.entity_plural_label'|trans,
            'entityTitle': form.vars.value.label
        }
        %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.user.role.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}
{% endblock pageHeader %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set id = 'role-profile' %}

    {% set dataBlocks = [{
        'title': 'General'|trans,
        'subblocks': [
            {
                'title': '',
                'data': [
                    form_widget(form.appendUsers, {'id': 'roleAppendUsers'}),
                    form_widget(form.removeUsers, {'id': 'roleRemoveUsers'}),
                    form_row(form.label)
                ]
            }
        ]
    }] %}

    {% set dataBlocks = dataBlocks|merge(oro_form_additional_data(form, 'Additional'|trans)) %}

    {% set rolePermissionsGrid %}
        {% set entityTabPanelId = 'entity-tab-panel-'|uniqid %}
        {% set tabsOptions = tabsOptions|merge({
            controlTabPanel: entityTabPanelId
        }) %}

        <div {{ UI.renderPageComponentAttributes({
            module: 'orouser/js/components/role/entity-category-tabs-component',
            options: tabsOptions
        }) }}></div>
        <div id=\"{{ entityTabPanelId }}\" class=\"tab-content\" role=\"tabpanel\">
            {{ dataGrid.renderGrid('role-permission-grid', {role: entity}, { cssClass: 'inner-permissions-grid', themeOptions: {readonly: false} }) }}
            <div {{ UI.renderPageComponentAttributes({
                module: 'orouser/js/components/role/capability-set-component',
                options: capabilitySetOptions
            }) }}></div>
        </div>
    {% endset %}

    {% set dataBlocks = dataBlocks|merge([{
        'title': privilegesConfig['entity'].label|trans,
        'subblocks': [
            {
                'title': '',
                'useSpan': false,
                'data': [
                    rolePermissionsGrid
                ]
            }
        ]
    }]) %}

    {% set dataBlocks = dataBlocks|merge([{
        'title' : 'oro.user.entity_plural_label'|trans,
        'subblocks': [
            {
                'title' : null,
                'useSpan': false,
                'data' : [dataGrid.renderGrid(gridName, {role_id: entityId}, { cssClass: 'inner-grid' })]
            }
        ]
    }]) %}

    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': dataBlocks,
    } %}
    {{ parent() }}
{% endblock content_data %}
", "@OroUser/Role/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Role/update.html.twig");
    }
}
