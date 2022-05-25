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

/* @OroReport/Report/update.html.twig */
class __TwigTemplate_0d2abe75f9a80b3664a34afca3bb31cd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head_script' => [$this, 'block_head_script'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroReport/Report/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroReport/Report/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroReport/Report/update.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig", 1 => "@OroReport/Form/fields.html.twig"], true);
        // line 6
        $macros["QD"] = $this->macros["QD"] = $this->loadTemplate("@OroQueryDesigner/macros.html.twig", "@OroReport/Report/update.html.twig", 6)->unwrap();
        // line 7
        $macros["segmentQD"] = $this->macros["segmentQD"] = $this->loadTemplate("@OroSegment/macros.html.twig", "@OroReport/Report/update.html.twig", 7)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%report.name%" => twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9)]]);
        // line 10
        $context["formAction"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_report_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_report_create")));
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroReport/Report/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_head_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("head_script", $this->getTemplateName(), 12));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_script"));

        // line 13
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stylesheets", $this->getTemplateName(), 15));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'stylesheet');
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 20
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 20));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 21
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroReport/Report/update.html.twig", 21)->unwrap();
        // line 22
        echo "
    ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "vars", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("CREATE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "vars", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23)))) {
            // line 24
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_report_clone", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 25
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "iCss" => "fa-files-o", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.report.action.clone.button.title"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.report.action.clone.button.label")]], 24, $context, $this->getSourceContext());
            // line 29
            echo "
    ";
        }
        // line 31
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31)))) {
            // line 32
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_report", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_report_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-report", "dataId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 37
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.report.entity_label")]], 32, $context, $this->getSourceContext());
            // line 39
            echo "

        ";
            // line 41
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 41, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 43
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_report_index")], 43, $context, $this->getSourceContext());
        echo "
    ";
        // line 44
        $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_report_view", "params" => ["id" => "\$id", "_enableContentProviders" => "mainMenu"]]], 44, $context, $this->getSourceContext());
        // line 48
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_report_create")) {
            // line 49
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 49, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_report_create"]], 49, $context, $this->getSourceContext()));
            // line 52
            echo "    ";
        }
        // line 53
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "vars", [], "any", false, false, false, 53), "value", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_report_update"))) {
            // line 54
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 54, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_report_update", "params" => ["id" => "\$id", "_enableContentProviders" => "mainMenu"]]], 54, $context, $this->getSourceContext()));
            // line 58
            echo "    ";
        }
        // line 59
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 59, $this->source); })())]], 59, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 62
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 62));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 63
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "vars", [], "any", false, false, false, 63), "value", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63)) {
            // line 64
            echo "        ";
            $context["breadcrumbs"] = ["entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 65
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "vars", [], "any", false, false, false, 65), "value", [], "any", false, false, false, 65), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_report_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.report.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,             // line 68
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 68, $this->source); })()), "name", [], "any", false, false, false, 68)];
            // line 70
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 72
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.report.entity_label")]);
            // line 73
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroReport/Report/update.html.twig", 73)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 73, $this->source); })())]));
            // line 74
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 77
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 77));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 78
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroReport/Report/update.html.twig", 78)->unwrap();
        // line 79
        echo "
    ";
        // line 80
        $context["id"] = "report-profile";
        // line 81
        echo "    ";
        $context["ownerDataBlock"] = ["dataBlocks" => [0 => ["subblocks" => [0 => ["data" => []]]]]];
        // line 88
        echo "
    ";
        // line 89
        $context["ownerDataBlock"] = $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->processForm($this->env, (isset($context["ownerDataBlock"]) || array_key_exists("ownerDataBlock", $context) ? $context["ownerDataBlock"] : (function () { throw new RuntimeError('Variable "ownerDataBlock" does not exist.', 89, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()));
        // line 90
        echo "    ";
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "class" => "active", "subblocks" => [0 => ["title" => "", "data" => [0 =>         // line 97
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97), 'row', ["label" => "oro.report.name.label"]), 1 =>         // line 98
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "description", [], "any", false, false, false, 98), 'row', ["label" => "oro.report.description.label", "attr" => ["class" => "report-descr"]])]], 1 => ["title" => "", "data" => twig_array_merge([0 =>         // line 109
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "entity", [], "any", false, false, false, 109), 'row', ["label" => "oro.report.entity.label"]), 1 =>         // line 110
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "type", [], "any", false, false, false, 110), 'row', ["label" => "oro.report.type.label"])], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 111
(isset($context["ownerDataBlock"]) || array_key_exists("ownerDataBlock", $context) ? $context["ownerDataBlock"] : (function () { throw new RuntimeError('Variable "ownerDataBlock" does not exist.', 111, $this->source); })()), "dataBlocks", [], "any", false, false, false, 111), 0, [], "array", false, false, false, 111), "subblocks", [], "any", false, false, false, 111), 0, [], "array", false, false, false, 111), "data", [], "any", false, false, false, 111))]]]];
        // line 116
        echo "
    ";
        // line 117
        $context["type"] = "oro_report";
        // line 118
        echo "    ";
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 118, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.report.form.designer"), "content_attr" => ["id" => (        // line 120
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 120, $this->source); })()) . "-designer")], "subblocks" => [0 => ["data" => [0 => twig_call_macro($macros["UI"], "macro_scrollSubblock", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.report.form.columns"), [0 => twig_call_macro($macros["QD"], "macro_query_designer_column_form", [twig_get_attribute($this->env, $this->source,         // line 128
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "column", [], "any", false, false, false, 128), ["id" => (        // line 129
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 129, $this->source); })()) . "-column-form")]], 127, $context, $this->getSourceContext()), 1 => twig_call_macro($macros["QD"], "macro_query_designer_column_list", [["id" => (        // line 133
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 133, $this->source); })()) . "-column-list"), "rowId" => (        // line 134
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 134, $this->source); })()) . "-column-row")]], 131, $context, $this->getSourceContext())], "", "", (        // line 140
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 140, $this->source); })()) . "-columns")], 124, $context, $this->getSourceContext()), 1 => twig_call_macro($macros["UI"], "macro_scrollSubblock", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.report.form.grouping"), [0 => twig_call_macro($macros["QD"], "macro_query_designer_grouping_form", [twig_get_attribute($this->env, $this->source,         // line 146
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "grouping", [], "any", false, false, false, 146), ["id" => (        // line 147
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 147, $this->source); })()) . "-grouping-form")]], 145, $context, $this->getSourceContext()), 1 => twig_call_macro($macros["QD"], "macro_query_designer_grouping_list", [["id" => (        // line 149
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 149, $this->source); })()) . "-grouping-list")]], 149, $context, $this->getSourceContext()), 2 => twig_call_macro($macros["QD"], "macro_query_designer_grouping_item_template", [(        // line 150
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 150, $this->source); })()) . "-grouping-item-row")], 150, $context, $this->getSourceContext())], "", "", (        // line 154
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 154, $this->source); })()) . "-columns")], 142, $context, $this->getSourceContext()), 2 => twig_call_macro($macros["UI"], "macro_scrollSubblock", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.report.form.date_group_section.label"), [0 => twig_call_macro($macros["QD"], "macro_query_designer_date_grouping_form", [twig_get_attribute($this->env, $this->source,         // line 160
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "dateGrouping", [], "any", false, false, false, 160)], 159, $context, $this->getSourceContext())], "", "", (        // line 165
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 165, $this->source); })()) . "-columns")], 156, $context, $this->getSourceContext())]], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.report.form.filters"), "spanClass" => (        // line 171
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 171, $this->source); })()) . "-filters responsive-cell"), "data" => [0 => twig_call_macro($macros["segmentQD"], "macro_query_designer_condition_builder", [["id" => (        // line 174
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 174, $this->source); })()) . "-condition-builder"), "page_limit" => twig_constant("\\Oro\\Bundle\\SegmentBundle\\Entity\\Manager\\SegmentManager::PER_PAGE"), "metadata" =>         // line 176
(isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 176, $this->source); })()), "fieldConditionOptions" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 177
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "vars", [], "any", false, false, false, 177), "field_condition_options", [], "any", false, false, false, 177)]], 173, $context, $this->getSourceContext())]]]]]);
        // line 183
        echo "
    ";
        // line 184
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 184, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.report.form.chart_designer"), "subblocks" => [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.report.reporttype.chart.label"), "data" => [0 =>         // line 190
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "chartOptions", [], "any", false, false, false, 190), 'widget', ["label" => "oro.report.reporttype.chart.label"])]]]]]);
        // line 197
        echo "
    ";
        // line 198
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 198, $this->source); })()), $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderAdditionalData($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional")));
        // line 199
        echo "
    ";
        // line 200
        $context["data"] = ["formErrors" => ((        // line 201
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 202
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 202, $this->source); })()), "hiddenData" =>         // line 203
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "definition", [], "any", false, false, false, 203), 'widget')];
        // line 205
        echo "
    ";
        // line 206
        echo twig_call_macro($macros["UI"], "macro_scrollData", [(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 206, $this->source); })()), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 206, $this->source); })()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 206, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })())], 206, $context, $this->getSourceContext());
        echo "

    ";
        // line 208
        echo twig_call_macro($macros["QD"], "macro_query_designer_column_chain_template", ["column-chain-template"], 208, $context, $this->getSourceContext());
        echo "
    ";
        // line 209
        echo twig_call_macro($macros["segmentQD"], "macro_initJsWidgets", [(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 209, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 209, $this->source); })()), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 209, $this->source); })())], 209, $context, $this->getSourceContext());
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroReport/Report/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 209,  363 => 208,  358 => 206,  355 => 205,  353 => 203,  352 => 202,  351 => 201,  350 => 200,  347 => 199,  345 => 198,  342 => 197,  340 => 190,  339 => 184,  336 => 183,  334 => 177,  333 => 176,  332 => 174,  331 => 171,  330 => 165,  329 => 160,  328 => 154,  327 => 150,  326 => 149,  325 => 147,  324 => 146,  323 => 140,  322 => 134,  321 => 133,  320 => 129,  319 => 128,  318 => 120,  316 => 118,  314 => 117,  311 => 116,  309 => 111,  308 => 110,  307 => 109,  306 => 98,  305 => 97,  303 => 90,  301 => 89,  298 => 88,  295 => 81,  293 => 80,  290 => 79,  287 => 78,  274 => 77,  260 => 74,  257 => 73,  254 => 72,  248 => 70,  246 => 68,  245 => 65,  243 => 64,  240 => 63,  227 => 62,  211 => 59,  208 => 58,  205 => 54,  202 => 53,  199 => 52,  196 => 49,  193 => 48,  191 => 44,  186 => 43,  181 => 41,  177 => 39,  175 => 37,  174 => 33,  172 => 32,  169 => 31,  165 => 29,  163 => 25,  161 => 24,  159 => 23,  156 => 22,  153 => 21,  140 => 20,  124 => 16,  99 => 15,  93 => 13,  80 => 12,  66 => 1,  64 => 10,  62 => 9,  59 => 7,  57 => 6,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% form_theme form with [
    '@OroForm/Form/fields.html.twig',
    '@OroReport/Form/fields.html.twig'
] %}
{% import '@OroQueryDesigner/macros.html.twig' as QD %}
{% import '@OroSegment/macros.html.twig' as segmentQD %}

{% oro_title_set({params : {\"%report.name%\": entity.name} }) %}
{% set formAction = form.vars.value.id ? path('oro_report_update', {'id': form.vars.value.id}) : path('oro_report_create') %}

{% block head_script %}
    {{ parent() }}

    {% block stylesheets %}
        {{ form_stylesheet(form) }}
    {% endblock %}
{% endblock %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if form.vars.value.id and is_granted('CREATE', form.vars.value) %}
        {{ UI.button({
            'path' : path('oro_report_clone', {'id': form.vars.value.id}),
            'iCss': 'fa-files-o',
            'title': 'oro.report.action.clone.button.title'|trans,
            'label': 'oro.report.action.clone.button.label'|trans,
        }) }}
    {% endif %}
    {% if form.vars.value.id and is_granted('DELETE', form.vars.value) %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_api_delete_report', {'id': form.vars.value.id}),
            'dataRedirect': path('oro_report_index'),
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-report',
            'dataId': form.vars.value.id,
            'entity_label': 'oro.report.entity_label'|trans
        }) }}

        {{ UI.buttonSeparator() }}
    {% endif %}
    {{ UI.cancelButton(path('oro_report_index')) }}
    {% set html = UI.saveAndCloseButton({
        'route': 'oro_report_view',
        'params': {'id': '\$id', '_enableContentProviders': 'mainMenu'}
    }) %}
    {% if is_granted('oro_report_create') %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_report_create'
        }) %}
    {% endif %}
    {% if form.vars.value.id or is_granted('oro_report_update') %}
        {% set html = html ~ UI.saveAndStayButton({
            'route': 'oro_report_update',
            'params': {'id': '\$id', '_enableContentProviders': 'mainMenu'}
        }) %}
    {% endif %}
    {{ UI.dropdownSaveButton({'html': html}) }}
{% endblock %}

{% block pageHeader %}
    {% if form.vars.value.id %}
        {% set breadcrumbs = {
            'entity':      form.vars.value,
            'indexPath':   path('oro_report_index'),
            'indexLabel': 'oro.report.entity_plural_label'|trans,
            'entityTitle': entity.name
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.report.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}
{% endblock pageHeader %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set id = 'report-profile' %}
    {% set ownerDataBlock = {
        'dataBlocks': [{
            'subblocks': [{
                'data': []
            }]
        }]
    } %}

    {% set ownerDataBlock = oro_form_process(ownerDataBlock, form) %}
    {% set dataBlocks = [{
            'title': 'General'|trans,
            'class': 'active',
            'subblocks': [
                {
                    'title': '',
                    'data': [
                        form_row(form.name, {'label': 'oro.report.name.label'}),
                        form_row(form.description, {
                            'label': 'oro.report.description.label',
                            'attr': {
                                'class': 'report-descr'
                            }
                        })
                    ]
                },
                {
                    'title': '',
                    'data': [
                        form_row(form.entity, {'label': 'oro.report.entity.label'}),
                        form_row(form.type, {'label': 'oro.report.type.label'})
                    ] | merge(ownerDataBlock.dataBlocks[0].subblocks[0].data)
                }
            ]
        }]
    %}

    {% set type = 'oro_report' %}
    {% set dataBlocks = dataBlocks|merge( [{
        'title' : 'oro.report.form.designer'|trans,
        'content_attr': {'id': type ~ '-designer'},
        'subblocks': [
            {
                'data': [
                    UI.scrollSubblock(
                        'oro.report.form.columns'|trans,
                        [
                            QD.query_designer_column_form(
                                form.column,
                                {'id': type ~ '-column-form'}
                            ),
                            QD.query_designer_column_list(
                                {
                                    'id': type ~ '-column-list',
                                    'rowId': type ~ '-column-row'
                                }
                            ),
                        ],
                        '',
                        '',
                        type ~ '-columns'
                    ),
                    UI.scrollSubblock(
                        'oro.report.form.grouping'|trans,
                        [
                            QD.query_designer_grouping_form(
                                form.grouping,
                                {'id': type ~ '-grouping-form'}
                            ),
                            QD.query_designer_grouping_list({'id': type ~ '-grouping-list'}),
                            QD.query_designer_grouping_item_template(type ~ '-grouping-item-row'),
                        ],
                        '',
                        '',
                        type ~ '-columns'
                    ),
                    UI.scrollSubblock(
                        'oro.report.form.date_group_section.label'|trans,
                        [
                            QD.query_designer_date_grouping_form(
                                form.dateGrouping
                            )
                        ],
                        '',
                        '',
                        type ~ '-columns'
                    )
                ]
            },
            {
                'title': 'oro.report.form.filters'|trans,
                'spanClass': type ~ '-filters responsive-cell',
                'data': [
                    segmentQD.query_designer_condition_builder({
                        'id': type ~ '-condition-builder',
                        'page_limit': constant('\\\\Oro\\\\Bundle\\\\SegmentBundle\\\\Entity\\\\Manager\\\\SegmentManager::PER_PAGE'),
                        'metadata': metadata,
                        'fieldConditionOptions': form.vars.field_condition_options
                    })
                ]
            },
        ]
    }] ) %}

    {% set dataBlocks = dataBlocks|merge( [{
        'title': 'oro.report.form.chart_designer'|trans,
        'subblocks': [
            {
                'title': 'oro.report.reporttype.chart.label'|trans,
                'data': [
                    form_widget(form.chartOptions, {
                        'label': 'oro.report.reporttype.chart.label',
                    })
                ]
            }
        ]
    }] ) %}

    {% set dataBlocks = dataBlocks|merge(oro_form_additional_data(form, 'Additional'|trans)) %}

    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': dataBlocks,
        'hiddenData': form_widget(form.definition)
    } %}

    {{ UI.scrollData(id, data, entity, form) }}

    {{ QD.query_designer_column_chain_template('column-chain-template') }}
    {{ segmentQD.initJsWidgets(type, form, entities, metadata) }}

{% endblock content_data %}
", "@OroReport/Report/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ReportBundle/Resources/views/Report/update.html.twig");
    }
}
