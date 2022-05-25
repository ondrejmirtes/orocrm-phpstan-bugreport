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

/* @OroChannel/Channel/update.html.twig */
class __TwigTemplate_061ea9bd2aed57aa98ca60679dbd9521 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageHeader' => [$this, 'block_pageHeader'],
            'navButtons' => [$this, 'block_navButtons'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroChannel/Channel/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroChannel/Channel/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroChannel/Channel/update.html.twig"));

        // line 2
        $macros["channelMacro"] = $this->macros["channelMacro"] = $this->loadTemplate("@OroChannel/macros.html.twig", "@OroChannel/Channel/update.html.twig", 2)->unwrap();
        // line 4
        $context["entity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4);
        // line 5
        $context["formAction"] = ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_channel_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_channel_create")));
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)) {

            $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%channel.name%" => twig_get_attribute($this->env, $this->source,             // line 8
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8)]]);
        }
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroChannel/Channel/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 11));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 12
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)) {
            // line 13
            echo "        ";
            $context["breadcrumbs"] = ["entity" =>             // line 14
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_channel_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.channel.entity_plural_label"), "entityTitle" => ((twig_get_attribute($this->env, $this->source,             // line 17
($context["entity"] ?? null), "name", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 17), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A")))];
            // line 19
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 21
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.channel.entity_label")]);
            // line 22
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroChannel/Channel/update.html.twig", 22)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 22, $this->source); })())]));
            // line 23
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 26
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 26));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 27
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroChannel/Channel/update.html.twig", 27)->unwrap();
        // line 28
        echo "
    ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })())))) {
            // line 30
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_channel", ["id" => twig_get_attribute($this->env, $this->source,             // line 31
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_channel_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-channel", "dataId" => twig_get_attribute($this->env, $this->source,             // line 35
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.channel.entity_label")]], 30, $context, $this->getSourceContext());
            // line 37
            echo "
        ";
            // line 38
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 38, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 40
        echo "
    ";
        // line 41
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_channel_index")], 41, $context, $this->getSourceContext());
        echo "

    ";
        // line 43
        $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_channel_view", "params" => ["id" => "\$id", "_enableContentProviders" => "mainMenu"]]], 43, $context, $this->getSourceContext());
        // line 47
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_channel_create")) {
            // line 48
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 48, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_channel_create"]], 48, $context, $this->getSourceContext()));
            // line 51
            echo "    ";
        }
        // line 52
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "vars", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_channel_update"))) {
            // line 53
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 53, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_channel_update", "params" => ["id" => "\$id", "_enableContentProviders" => "mainMenu"]]], 53, $context, $this->getSourceContext()));
            // line 57
            echo "    ";
        }
        // line 58
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 58, $this->source); })())]], 58, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 61
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbs", $this->getTemplateName(), 61));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 62
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 65
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 65));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 66
        echo "    ";
        $context["id"] = "channel-update";
        // line 67
        echo "    ";
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "subblocks" => [0 => ["title" => "", "data" => [0 =>         // line 73
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73), 'row'), 1 =>         // line 74
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "channelType", [], "any", false, false, false, 74), 'row'), 2 => ((twig_get_attribute($this->env, $this->source,         // line 75
($context["form"] ?? null), "dataSource", [], "any", true, true, false, 75)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "dataSource", [], "any", false, false, false, 75), 'row')) : (""))]]]]];
        // line 80
        echo "
    ";
        // line 81
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "vars", [], "any", false, false, false, 81), "value", [], "any", false, false, false, 81), "entities", [], "any", false, false, false, 81)) > 0)) {
            // line 82
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 82, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Entities"), "subblocks" => [0 => ["title" => "", "data" => [0 =>             // line 86
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "entities", [], "any", false, false, false, 86), 'row')]]]]]);
            // line 89
            echo "    ";
        }
        // line 90
        echo "
    ";
        // line 91
        ob_start();
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("oro_channel_additional_block", $context)) ? (_twig_default_filter((isset($context["oro_channel_additional_block"]) || array_key_exists("oro_channel_additional_block", $context) ? $context["oro_channel_additional_block"] : (function () { throw new RuntimeError('Variable "oro_channel_additional_block" does not exist.', 91, $this->source); })()), "oro_channel_additional_block")) : ("oro_channel_additional_block")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 91, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })())]);
        $context["additional"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        echo "    ";
        if (twig_trim_filter((isset($context["additional"]) || array_key_exists("additional", $context) ? $context["additional"] : (function () { throw new RuntimeError('Variable "additional" does not exist.', 92, $this->source); })()))) {
            // line 93
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 93, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional"), "subblocks" => [0 => ["title" => "", "data" => [0 =>             // line 97
(isset($context["additional"]) || array_key_exists("additional", $context) ? $context["additional"] : (function () { throw new RuntimeError('Variable "additional" does not exist.', 97, $this->source); })())]]]]]);
            // line 100
            echo "    ";
        }
        // line 101
        echo "
    ";
        // line 102
        $context["data"] = ["formErrors" => ((        // line 103
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 104
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 104, $this->source); })())];
        // line 106
        echo "
    ";
        // line 107
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "

    ";
        // line 109
        echo twig_call_macro($macros["channelMacro"], "macro_initializeChannelForm", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), $this->extensions['Oro\Bundle\ChannelBundle\Twig\ChannelExtension']->getEntitiesMetadata(), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 109, $this->source); })()), "customerIdentity", [], "any", false, false, false, 109)], 109, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroChannel/Channel/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 109,  295 => 107,  292 => 106,  290 => 104,  289 => 103,  288 => 102,  285 => 101,  282 => 100,  280 => 97,  278 => 93,  275 => 92,  271 => 91,  268 => 90,  265 => 89,  263 => 86,  261 => 82,  259 => 81,  256 => 80,  254 => 75,  253 => 74,  252 => 73,  250 => 67,  247 => 66,  234 => 65,  218 => 62,  205 => 61,  189 => 58,  186 => 57,  183 => 53,  180 => 52,  177 => 51,  174 => 48,  171 => 47,  169 => 43,  164 => 41,  161 => 40,  156 => 38,  153 => 37,  151 => 35,  150 => 31,  148 => 30,  146 => 29,  143 => 28,  140 => 27,  127 => 26,  113 => 23,  110 => 22,  107 => 21,  101 => 19,  99 => 17,  98 => 14,  96 => 13,  93 => 12,  80 => 11,  66 => 1,  63 => 8,  60 => 7,  58 => 5,  56 => 4,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% import '@OroChannel/macros.html.twig' as channelMacro %}

{% set entity = form.vars.value %}
{% set formAction = entity.id ? path('oro_channel_update', { id: entity.id }) : path('oro_channel_create') %}

{% if entity.id %}
    {% oro_title_set({params : {\"%channel.name%\": entity.name } }) %}
{% endif %}

{% block pageHeader %}
    {% if entity.id %}
        {% set breadcrumbs = {
            'entity':      entity,
            'indexPath':   path('oro_channel_index'),
            'indexLabel':  'oro.channel.entity_plural_label'|trans,
            'entityTitle': entity.name|default('N/A'|trans)
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.channel.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title }%}
    {% endif %}
{% endblock pageHeader %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if entity.id and is_granted('DELETE', entity) %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_api_delete_channel', {'id': entity.id}),
            'dataRedirect': path('oro_channel_index'),
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-channel',
            'dataId': entity.id,
            'entity_label': 'oro.channel.entity_label'|trans,
        }) }}
        {{ UI.buttonSeparator() }}
    {% endif %}

    {{ UI.cancelButton(path('oro_channel_index')) }}

    {% set html = UI.saveAndCloseButton({
        'route': 'oro_channel_view',
        'params': {'id': '\$id', '_enableContentProviders': 'mainMenu'}
    }) %}
    {% if is_granted('oro_channel_create') %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_channel_create'
        }) %}
    {% endif %}
    {% if form.vars.value.id or is_granted('oro_channel_update') %}
        {% set html = html ~ UI.saveAndStayButton({
            'route': 'oro_channel_update',
            'params': {'id': '\$id', '_enableContentProviders': 'mainMenu'}
        }) %}
    {% endif %}
    {{ UI.dropdownSaveButton({'html': html}) }}
{% endblock %}

{% block breadcrumbs %}
    {{ parent() }}
{% endblock breadcrumbs %}

{% block content_data %}
    {% set id = 'channel-update' %}
    {% set dataBlocks = [
        {
            'title': 'General'|trans,
            'subblocks': [{
                'title': '',
                'data':  [
                    form_row(form.name),
                    form_row(form.channelType),
                    form.dataSource is defined ? form_row(form.dataSource) : '',
                ]
            }]
        }
    ] %}

    {% if form.vars.value.entities|length > 0 %}
        {% set dataBlocks = dataBlocks|merge([{
            'title': 'Entities'|trans,
            'subblocks': [{
                'title': '',
                'data':  [ form_row(form.entities) ]
            }]
        }]) %}
    {% endif %}

    {% set additional %}{% placeholder oro_channel_additional_block with {entity: entity, form: form} %}{% endset %}
    {% if additional|trim %}
        {% set dataBlocks = dataBlocks|merge([{
            'title': 'Additional'|trans,
            'subblocks': [{
                'title': '',
                'data':  [ additional ]
            }]
        }]) %}
    {% endif %}

    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': dataBlocks,
    } %}

    {{ parent() }}

    {{ channelMacro.initializeChannelForm(form, oro_channel_entities_metadata(), entity.customerIdentity) }}
{% endblock %}
", "@OroChannel/Channel/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/ChannelBundle/Resources/views/Channel/update.html.twig");
    }
}
