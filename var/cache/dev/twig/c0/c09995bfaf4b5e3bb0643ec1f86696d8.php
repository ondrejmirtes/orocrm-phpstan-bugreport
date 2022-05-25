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

/* @OroIntegration/Integration/update.html.twig */
class __TwigTemplate_5f5b46975dfcac0ad75f5275001b1d01 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'navButtons' => [$this, 'block_navButtons'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'stats' => [$this, 'block_stats'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroIntegration/Integration/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroIntegration/Integration/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroIntegration/Integration/update.html.twig"));

        // line 2
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroIntegration/Integration/update.html.twig", 2)->unwrap();
        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), $this->extensions['Oro\Bundle\IntegrationBundle\Twig\IntegrationExtension']->getThemes((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })())), true);
        // line 6
        $context["entity"] = ((array_key_exists("entity", $context)) ? ((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6)));
        // line 7
        $context["formAction"] = ((array_key_exists("formAction", $context)) ? (        // line 8
(isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 8, $this->source); })())) : (((twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_integration_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_integration_create")))));
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)) {

            $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%integration.name%" => twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13)]]);
        }
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroIntegration/Integration/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbs", $this->getTemplateName(), 16));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 17
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroIntegration/Integration/update.html.twig", 17)->unwrap();
        // line 18
        echo "
    ";
        // line 19
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <span class=\"page-title__status\">
        ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "enabled", [], "any", false, false, false, 21)) {
            // line 22
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.integration.integration.enabled.active.label"), "enabled"], 22, $context, $this->getSourceContext());
            echo "
        ";
        } else {
            // line 24
            echo "            ";
            echo twig_call_macro($macros["UI"], "macro_badge", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.integration.integration.enabled.inactive.label"), "disabled"], 24, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 26
        echo "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 29
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 29));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 30
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroIntegration/Integration/update.html.twig", 30)->unwrap();
        // line 31
        echo "
    ";
        // line 32
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_integration_index")], 32, $context, $this->getSourceContext());
        echo "

    ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)) {
            // line 35
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 35, $this->source); })()), "enabled", [], "any", false, false, false, 35)) {
                // line 36
                echo "        <div class=\"btn-group\" ";
                echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "orointegration/js/app/views/integration-sync-view", "options" => ["integrationName" => twig_get_attribute($this->env, $this->source,                 // line 39
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39)]]], 36, $context, $this->getSourceContext());
                // line 41
                echo ">
            ";
                // line 42
                ob_start();
                // line 43
                echo "                ";
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("oro_integration_sync_button", $context)) ? (_twig_default_filter((isset($context["oro_integration_sync_button"]) || array_key_exists("oro_integration_sync_button", $context) ? $context["oro_integration_sync_button"] : (function () { throw new RuntimeError('Variable "oro_integration_sync_button" does not exist.', 43, $this->source); })()), "oro_integration_sync_button")) : ("oro_integration_sync_button")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 43, $this->source); })())]);
                // line 44
                echo "                ";
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("oro_integration_force_sync_button", $context)) ? (_twig_default_filter((isset($context["oro_integration_force_sync_button"]) || array_key_exists("oro_integration_force_sync_button", $context) ? $context["oro_integration_force_sync_button"] : (function () { throw new RuntimeError('Variable "oro_integration_force_sync_button" does not exist.', 44, $this->source); })()), "oro_integration_force_sync_button")) : ("oro_integration_force_sync_button")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 44, $this->source); })())]);
                // line 45
                echo "            ";
                $context["buttonsHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 46
                echo "            ";
                echo twig_call_macro($macros["UI"], "macro_pinnedDropdownButton", [["html" => (isset($context["buttonsHtml"]) || array_key_exists("buttonsHtml", $context) ? $context["buttonsHtml"] : (function () { throw new RuntimeError('Variable "buttonsHtml" does not exist.', 46, $this->source); })())]], 46, $context, $this->getSourceContext());
                echo "
        </div>
        ";
            }
            // line 49
            echo "    ";
        }
        // line 50
        echo "
    ";
        // line 51
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "choices", [], "any", false, false, false, 51))) {
            // line 52
            echo "        ";
            $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_integration_index", "params" => ["_enableContentProviders" => "mainMenu"]]], 52, $context, $this->getSourceContext());
            // line 56
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_integration_create")) {
                // line 57
                echo "            ";
                $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 57, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_integration_create"]], 57, $context, $this->getSourceContext()));
                // line 60
                echo "        ";
            }
            // line 61
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "vars", [], "any", false, false, false, 61), "value", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_integration_update"))) {
                // line 62
                echo "            ";
                $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 62, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_integration_update", "params" => ["id" => "\$id", "_enableContentProviders" => "mainMenu"]]], 62, $context, $this->getSourceContext()));
                // line 66
                echo "        ";
            }
            // line 67
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 67, $this->source); })())]], 67, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 69
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 72
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 72));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 73
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)) {
            // line 74
            echo "        ";
            $context["breadcrumbs"] = ["entity" =>             // line 75
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 75, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_integration_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.integration.integration.entity_plural_label"), "entityTitle" => ((twig_get_attribute($this->env, $this->source,             // line 78
($context["entity"] ?? null), "name", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 78), "N/A")) : ("N/A"))];
            // line 80
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 82
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.integration.integration.entity_label")]);
            // line 83
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroIntegration/Integration/update.html.twig", 83)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 83, $this->source); })())]));
            // line 84
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 87
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 87));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 89
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 89));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 90
        echo "    ";
        $context["id"] = "channel-update";
        // line 91
        echo "    ";
        $context["dataBlocks"] = [];
        // line 92
        echo "
    ";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "synchronizationSettings", [], "any", true, true, false, 93) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "synchronizationSettings", [], "any", false, false, false, 93), "count", [], "any", false, false, false, 93))) {
            // line 94
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 94, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Synchronization Settings"), "subblocks" => [0 => ["title" => "", "data" => [0 =>             // line 98
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "synchronizationSettings", [], "any", false, false, false, 98), 'widget')]]]]]);
            // line 101
            echo "    ";
        }
        // line 102
        echo "
    ";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mappingSettings", [], "any", true, true, false, 103) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "mappingSettings", [], "any", false, false, false, 103), "count", [], "any", false, false, false, 103))) {
            // line 104
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 104, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mapping Settings"), "subblocks" => [0 => ["title" => "", "data" => [0 =>             // line 108
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "mappingSettings", [], "any", false, false, false, 108), 'widget')]]]]]);
            // line 111
            echo "    ";
        }
        // line 112
        echo "
    ";
        // line 113
        if ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113) && (((array_key_exists("isWidgetContext", $context)) ? (_twig_default_filter((isset($context["isWidgetContext"]) || array_key_exists("isWidgetContext", $context) ? $context["isWidgetContext"] : (function () { throw new RuntimeError('Variable "isWidgetContext" does not exist.', 113, $this->source); })()), false)) : (false)) === false))) {
            // line 114
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 114, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Statuses"), "subblocks" => [0 => ["title" => "", "data" => [0 => twig_call_macro($macros["dataGrid"], "macro_renderGrid", ["oro-integration-status-grid", ["integrationId" => twig_get_attribute($this->env, $this->source,             // line 120
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120), "integrationType" => twig_get_attribute($this->env, $this->source,             // line 121
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 121, $this->source); })()), "type", [], "any", false, false, false, 121)]], 119, $context, $this->getSourceContext())]]]]]);
            // line 126
            echo "    ";
        }
        // line 127
        echo "
    ";
        // line 128
        $context["dataBlocks"] = twig_array_merge([0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "class" => "active", "subblocks" => [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Basic Information"), "data" => [0 =>         // line 133
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), 'widget')]]]]],         // line 135
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 135, $this->source); })()));
        // line 136
        echo "
    ";
        // line 137
        $context["data"] = ["formErrors" => ((        // line 138
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 139
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 139, $this->source); })())];
        // line 141
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
        return "@OroIntegration/Integration/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 141,  379 => 139,  378 => 138,  377 => 137,  374 => 136,  372 => 135,  371 => 133,  370 => 128,  367 => 127,  364 => 126,  362 => 121,  361 => 120,  359 => 114,  357 => 113,  354 => 112,  351 => 111,  349 => 108,  347 => 104,  345 => 103,  342 => 102,  339 => 101,  337 => 98,  335 => 94,  333 => 93,  330 => 92,  327 => 91,  324 => 90,  311 => 89,  287 => 87,  273 => 84,  270 => 83,  267 => 82,  261 => 80,  259 => 78,  258 => 75,  256 => 74,  253 => 73,  240 => 72,  226 => 69,  220 => 67,  217 => 66,  214 => 62,  211 => 61,  208 => 60,  205 => 57,  202 => 56,  199 => 52,  197 => 51,  194 => 50,  191 => 49,  184 => 46,  181 => 45,  178 => 44,  175 => 43,  173 => 42,  170 => 41,  168 => 39,  166 => 36,  163 => 35,  161 => 34,  156 => 32,  153 => 31,  150 => 30,  137 => 29,  123 => 26,  117 => 24,  111 => 22,  109 => 21,  104 => 19,  101 => 18,  98 => 17,  85 => 16,  71 => 1,  68 => 13,  65 => 12,  63 => 9,  62 => 8,  61 => 7,  59 => 6,  57 => 4,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}

{% form_theme form with oro_integration_themes(form) %}

{% set entity = entity is defined ? entity : form.vars.value %}
{% set formAction = formAction is defined
    ? formAction
    : (entity.id ? path('oro_integration_update', { id: entity.id }) : path('oro_integration_create'))
%}

{% if entity.id %}
    {% oro_title_set({params : {\"%integration.name%\": entity.name } }) %}
{% endif %}

{% block breadcrumbs %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ parent() }}
    <span class=\"page-title__status\">
        {% if entity.enabled %}
            {{ UI.badge('oro.integration.integration.enabled.active.label'|trans, 'enabled') }}
        {% else %}
            {{ UI.badge('oro.integration.integration.enabled.inactive.label'|trans, 'disabled') }}
        {% endif %}
    </span>
{% endblock breadcrumbs %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {{ UI.cancelButton(path('oro_integration_index')) }}

    {% if entity.id %}
        {% if entity.enabled %}
        <div class=\"btn-group\" {{ UI.renderPageComponentAttributes({
            view: 'orointegration/js/app/views/integration-sync-view',
            options: {
                integrationName: entity.name
            }
        }) }}>
            {% set buttonsHtml %}
                {% placeholder oro_integration_sync_button with {'entity': entity} %}
                {% placeholder oro_integration_force_sync_button with {'entity': entity} %}
            {% endset %}
            {{ UI.pinnedDropdownButton({'html': buttonsHtml}) }}
        </div>
        {% endif %}
    {% endif %}

    {% if form.type.vars.choices is not empty %}
        {% set html = UI.saveAndCloseButton({
            'route': 'oro_integration_index',
            'params': {'_enableContentProviders': 'mainMenu'}
        }) %}
        {% if is_granted('oro_integration_create') %}
            {% set html = html ~ UI.saveAndNewButton({
                'route': 'oro_integration_create'
            }) %}
        {% endif %}
        {% if form.vars.value.id or is_granted('oro_integration_update') %}
            {% set html = html ~ UI.saveAndStayButton({
                'route': 'oro_integration_update',
                'params': {'id': '\$id', '_enableContentProviders': 'mainMenu'}
            }) %}
        {% endif %}
        {{ UI.dropdownSaveButton({'html': html}) }}
    {% endif %}

{% endblock navButtons %}

{% block pageHeader %}
    {% if entity.id %}
        {% set breadcrumbs = {
            'entity':      entity,
            'indexPath':   path('oro_integration_index'),
            'indexLabel':  'oro.integration.integration.entity_plural_label'|trans,
            'entityTitle': entity.name|default('N/A')
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.integration.integration.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title }%}
    {% endif %}
{% endblock pageHeader %}

{% block stats %}{% endblock %}

{% block content_data %}
    {% set id = 'channel-update' %}
    {% set dataBlocks = [] %}

    {% if (form.synchronizationSettings is defined and form.synchronizationSettings.count) %}
        {% set dataBlocks = dataBlocks|merge([{
            'title': 'Synchronization Settings'|trans,
            'subblocks': [{
                'title': '',
                'data':  [form_widget(form.synchronizationSettings)]
            }]
        }]) %}
    {% endif %}

    {% if (form.mappingSettings is defined and form.mappingSettings.count) %}
        {% set dataBlocks = dataBlocks|merge([{
            'title': 'Mapping Settings'|trans,
            'subblocks': [{
                'title': '',
                'data':  [form_widget(form.mappingSettings)]
            }]
        }]) %}
    {% endif %}

    {% if entity.id and isWidgetContext|default(false) is same as(false) %}
        {% set dataBlocks = dataBlocks|merge([{
            'title': 'Statuses'|trans,
                'subblocks': [{
                    'title': '',
                    'data':  [
                        dataGrid.renderGrid('oro-integration-status-grid', {
                            integrationId:   entity.id,
                            integrationType: entity.type
                        })
                    ]
                }]
        }]) %}
    {% endif %}

    {% set dataBlocks = [{
        'title': 'General'|trans,
        'class': 'active',
        'subblocks': [{
            'title': 'Basic Information'|trans,
            'data':  [form_widget(form)]
        }]
    }]|merge(dataBlocks) %}

    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': dataBlocks,
    } %}
    {{ parent() }}
{% endblock content_data %}
", "@OroIntegration/Integration/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/IntegrationBundle/Resources/views/Integration/update.html.twig");
    }
}
