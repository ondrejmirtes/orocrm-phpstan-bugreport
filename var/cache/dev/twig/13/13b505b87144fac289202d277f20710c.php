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

/* @OroMarketingList/MarketingList/update.html.twig */
class __TwigTemplate_91748b5392403f2ed0d6eeffdbb60575 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroMarketingList/MarketingList/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMarketingList/MarketingList/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMarketingList/MarketingList/update.html.twig"));

        // line 2
        $macros["QD"] = $this->macros["QD"] = $this->loadTemplate("@OroQueryDesigner/macros.html.twig", "@OroMarketingList/MarketingList/update.html.twig", 2)->unwrap();
        // line 3
        $macros["segmentQD"] = $this->macros["segmentQD"] = $this->loadTemplate("@OroSegment/macros.html.twig", "@OroMarketingList/MarketingList/update.html.twig", 3)->unwrap();
        // line 4
        $macros["dataGrid"] = $this->macros["dataGrid"] = $this->loadTemplate("@OroDataGrid/macros.html.twig", "@OroMarketingList/MarketingList/update.html.twig", 4)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entityName%" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6)]]);
        // line 7
        $context["formAction"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_marketing_list_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_marketing_list_create")));
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroMarketingList/MarketingList/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_head_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("head_script", $this->getTemplateName(), 9));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_script"));

        // line 10
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stylesheets", $this->getTemplateName(), 12));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'stylesheet');
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 17
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 17));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 18
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroMarketingList/MarketingList/update.html.twig", 18)->unwrap();
        // line 19
        echo "
    ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20)))) {
            // line 21
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_marketinglist", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_marketing_list_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-marketing-list", "dataId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 26
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "vars", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.entity_label")]], 21, $context, $this->getSourceContext());
            // line 28
            echo "

        ";
            // line 30
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 30, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 32
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_marketing_list_index")], 32, $context, $this->getSourceContext());
        echo "
    ";
        // line 33
        $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_marketing_list_view", "params" => ["id" => "\$id"]]], 33, $context, $this->getSourceContext());
        // line 37
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_contactus_request_create")) {
            // line 38
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 38, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_marketing_list_create"]], 38, $context, $this->getSourceContext()));
            // line 41
            echo "    ";
        }
        // line 42
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_marketing_list_update"))) {
            // line 43
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 43, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_marketing_list_update", "params" => ["id" => "\$id"]]], 43, $context, $this->getSourceContext()));
            // line 47
            echo "    ";
        }
        // line 48
        echo "    ";
        // line 49
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 49, $this->source); })())]], 49, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 52
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 52));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 53
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "vars", [], "any", false, false, false, 53), "value", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)) {
            // line 54
            echo "        ";
            $context["breadcrumbs"] = ["entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 55
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "vars", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_marketing_list_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,             // line 58
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58)];
            // line 60
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 62
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.entity_label")]);
            // line 63
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroMarketingList/MarketingList/update.html.twig", 63)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 63, $this->source); })())]));
            // line 64
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 67
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 67));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 68
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroMarketingList/MarketingList/update.html.twig", 68)->unwrap();
        // line 69
        echo "
    ";
        // line 70
        $context["id"] = "marketing-list-profile";
        // line 71
        echo "    ";
        $context["ownerDataBlock"] = ["dataBlocks" => [0 => ["subblocks" => [0 => ["data" => []]]]]];
        // line 78
        echo "
    ";
        // line 79
        $context["ownerDataBlock"] = $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->processForm($this->env, (isset($context["ownerDataBlock"]) || array_key_exists("ownerDataBlock", $context) ? $context["ownerDataBlock"] : (function () { throw new RuntimeError('Variable "ownerDataBlock" does not exist.', 79, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()));
        // line 80
        echo "    ";
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "class" => "active", "subblocks" => [0 => ["title" => "", "data" => [0 =>         // line 87
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87), 'row', ["label" => "oro.marketinglist.name.label"]), 1 =>         // line 88
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "union", [], "any", false, false, false, 88), 'row', ["label" => "oro.marketinglist.union.label", "tooltip" => "oro.marketinglist.union.tooltip"]), 2 =>         // line 92
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "description", [], "any", false, false, false, 92), 'row', ["label" => "oro.marketinglist.description.label", "attr" => ["class" => "segment-descr"]])]], 1 => ["title" => "", "data" => twig_array_merge([0 =>         // line 103
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "entity", [], "any", false, false, false, 103), 'row', ["label" => "oro.marketinglist.entity.label"]), 1 =>         // line 104
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "type", [], "any", false, false, false, 104), 'row', ["label" => "oro.marketinglist.type.label"])], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 105
(isset($context["ownerDataBlock"]) || array_key_exists("ownerDataBlock", $context) ? $context["ownerDataBlock"] : (function () { throw new RuntimeError('Variable "ownerDataBlock" does not exist.', 105, $this->source); })()), "dataBlocks", [], "any", false, false, false, 105), 0, [], "array", false, false, false, 105), "subblocks", [], "any", false, false, false, 105), 0, [], "array", false, false, false, 105), "data", [], "any", false, false, false, 105))]]]];
        // line 110
        echo "
    ";
        // line 112
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "vars", [], "any", false, false, false, 112), "value", [], "any", false, false, false, 112), "manual", [], "any", false, false, false, 112)) {
            // line 113
            echo "    ";
            $context["hasEntity"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "vars", [], "any", false, false, false, 113), "value", [], "any", false, false, false, 113)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 113), "value", [], "any", false, true, false, 113), "entity", [], "any", true, true, false, 113)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "vars", [], "any", false, false, false, 113), "value", [], "any", false, false, false, 113), "entity", [], "any", false, false, false, 113)));
            // line 114
            echo "    ";
            $context["columnsComponentOptions"] = ["formSelector" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 115
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "vars", [], "any", false, false, false, 115), "id", [], "any", false, false, false, 115)), "entityChoiceSelector" => "[data-ftid=oro_marketing_list_form_entity]", "fieldsChoiceSelector" => "#contact-information-fields-list", "contactInformationFields" => ((            // line 118
(isset($context["hasEntity"]) || array_key_exists("hasEntity", $context) ? $context["hasEntity"] : (function () { throw new RuntimeError('Variable "hasEntity" does not exist.', 118, $this->source); })())) ? ($this->extensions['Oro\Bundle\MarketingListBundle\Twig\ContactInformationFieldsExtension']->getContactInformationFieldsInfo(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "vars", [], "any", false, false, false, 118), "value", [], "any", false, false, false, 118), "entity", [], "any", false, false, false, 118))) : ([]))];
            // line 120
            echo "
    ";
            // line 121
            $context["type"] = "oro_marketing_list";
            // line 122
            echo "    ";
            ob_start();
            // line 123
            echo "    <div data-page-component-module=\"oromarketinglist/js/app/components/columns-component\"
         data-page-component-options=\"";
            // line 124
            echo twig_escape_filter($this->env, json_encode((isset($context["columnsComponentOptions"]) || array_key_exists("columnsComponentOptions", $context) ? $context["columnsComponentOptions"] : (function () { throw new RuntimeError('Variable "columnsComponentOptions" does not exist.', 124, $this->source); })())), "html", null, true);
            echo "\"
         class=\"marketing-list-qd-columns\"
    >
        <div id=\"column-information-notice\" class=\"alert alert-info\" role=\"alert\">
            <strong>";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.form.importance"), "html", null, true);
            echo "</strong>:
            ";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.form.columns_notice"), "html", null, true);
            echo "
            <div class=\"column-information-fields-notice\">";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketinglist.form.available_fields_notice"), "html", null, true);
            echo ":</div>
            <div id=\"contact-information-fields-list\"></div>
        </div>

        ";
            // line 134
            echo twig_call_macro($macros["QD"], "macro_query_designer_column_form", [twig_get_attribute($this->env, $this->source,             // line 135
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "column", [], "any", false, false, false, 135), ["id" => (            // line 136
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 136, $this->source); })()) . "-column-form")], [], [0 => "column", 1 => "label", 2 => "sorting", 3 => "action"]], 134, $context, $this->getSourceContext());
            // line 139
            echo "

        ";
            // line 141
            echo twig_call_macro($macros["QD"], "macro_query_designer_column_list", [["id" => (            // line 142
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 142, $this->source); })()) . "-column-list"), "rowId" => ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 142, $this->source); })()) . "-column-row")], [0 => "column", 1 => "label", 2 => "sorting", 3 => "action"]], 141, $context, $this->getSourceContext());
            // line 144
            echo "
    </div>
    ";
            $context["columnsDesigner"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 147
            echo "
    ";
            // line 148
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 148, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.form.designer"), "content_attr" => ["id" => (            // line 150
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 150, $this->source); })()) . "-designer")], "subblocks" => [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.form.columns"), "spanClass" => (            // line 154
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 154, $this->source); })()) . "-columns responsive-cell"), "data" => [0 =>             // line 156
(isset($context["columnsDesigner"]) || array_key_exists("columnsDesigner", $context) ? $context["columnsDesigner"] : (function () { throw new RuntimeError('Variable "columnsDesigner" does not exist.', 156, $this->source); })())]], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.form.filters"), "spanClass" => (            // line 161
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 161, $this->source); })()) . "-filters responsive-cell"), "data" => [0 => twig_call_macro($macros["segmentQD"], "macro_query_designer_condition_builder", [["id" => (            // line 164
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 164, $this->source); })()) . "-condition-builder"), "currentSegmentId" => ((twig_get_attribute($this->env, $this->source,             // line 165
($context["entity"] ?? null), "id", [], "any", true, true, false, 165)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", [], "any", false, false, false, 165), null)) : (null)), "page_limit" => twig_constant("\\Oro\\Bundle\\SegmentBundle\\Entity\\Manager\\SegmentManager::PER_PAGE"), "metadata" =>             // line 167
(isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 167, $this->source); })())]], 163, $context, $this->getSourceContext())]]]]]);
            // line 173
            echo "    ";
        }
        // line 174
        echo "
    ";
        // line 175
        $context["data"] = ["formErrors" => ((        // line 176
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 177
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 177, $this->source); })()), "hiddenData" =>         // line 178
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "definition", [], "any", false, false, false, 178), 'widget')];
        // line 180
        echo "
    ";
        // line 181
        echo twig_call_macro($macros["UI"], "macro_scrollData", [(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 181, $this->source); })()), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 181, $this->source); })()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 181, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })())], 181, $context, $this->getSourceContext());
        echo "

    ";
        // line 184
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "vars", [], "any", false, false, false, 184), "value", [], "any", false, false, false, 184), "manual", [], "any", false, false, false, 184)) {
            // line 185
            echo "        ";
            echo twig_call_macro($macros["QD"], "macro_query_designer_column_chain_template", ["column-chain-template"], 185, $context, $this->getSourceContext());
            echo "
        ";
            // line 186
            echo twig_call_macro($macros["segmentQD"], "macro_initJsWidgets", [(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 186, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 186, $this->source); })()), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 186, $this->source); })())], 186, $context, $this->getSourceContext());
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroMarketingList/MarketingList/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 186,  400 => 185,  397 => 184,  392 => 181,  389 => 180,  387 => 178,  386 => 177,  385 => 176,  384 => 175,  381 => 174,  378 => 173,  376 => 167,  375 => 165,  374 => 164,  373 => 161,  372 => 156,  371 => 154,  370 => 150,  369 => 148,  366 => 147,  361 => 144,  359 => 142,  358 => 141,  354 => 139,  352 => 136,  351 => 135,  350 => 134,  343 => 130,  339 => 129,  335 => 128,  328 => 124,  325 => 123,  322 => 122,  320 => 121,  317 => 120,  315 => 118,  314 => 115,  312 => 114,  309 => 113,  306 => 112,  303 => 110,  301 => 105,  300 => 104,  299 => 103,  298 => 92,  297 => 88,  296 => 87,  294 => 80,  292 => 79,  289 => 78,  286 => 71,  284 => 70,  281 => 69,  278 => 68,  265 => 67,  251 => 64,  248 => 63,  245 => 62,  239 => 60,  237 => 58,  236 => 55,  234 => 54,  231 => 53,  218 => 52,  202 => 49,  200 => 48,  197 => 47,  194 => 43,  191 => 42,  188 => 41,  185 => 38,  182 => 37,  180 => 33,  175 => 32,  170 => 30,  166 => 28,  164 => 26,  163 => 22,  161 => 21,  159 => 20,  156 => 19,  153 => 18,  140 => 17,  124 => 13,  99 => 12,  93 => 10,  80 => 9,  66 => 1,  64 => 7,  62 => 6,  59 => 4,  57 => 3,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% import '@OroQueryDesigner/macros.html.twig' as QD %}
{% import '@OroSegment/macros.html.twig' as segmentQD %}
{% import '@OroDataGrid/macros.html.twig' as dataGrid %}

{% oro_title_set({params : {\"%entityName%\": entity.name} }) %}
{% set formAction = form.vars.value.id ? path('oro_marketing_list_update', { 'id': form.vars.value.id }) : path('oro_marketing_list_create')  %}

{% block head_script %}
    {{ parent() }}

    {% block stylesheets %}
        {{ form_stylesheet(form) }}
    {% endblock %}
{% endblock %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if form.vars.value.id and is_granted('DELETE', form.vars.value) %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_api_delete_marketinglist', {'id': form.vars.value.id}),
            'dataRedirect': path('oro_marketing_list_index'),
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-marketing-list',
            'dataId': form.vars.value.id,
            'entity_label': 'oro.marketinglist.entity_label'|trans
        }) }}

        {{ UI.buttonSeparator() }}
    {% endif %}
    {{ UI.cancelButton(path('oro_marketing_list_index')) }}
    {% set html = UI.saveAndCloseButton({
        'route': 'oro_marketing_list_view',
        'params': {'id': '\$id'}
    }) %}
    {% if is_granted('oro_contactus_request_create') %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_marketing_list_create'
        }) %}
    {% endif %}
    {% if form.vars.value.id or is_granted('oro_marketing_list_update') %}
        {% set html = html ~ UI.saveAndStayButton({
            'route': 'oro_marketing_list_update',
            'params': {'id': '\$id'}
        }) %}
    {% endif %}
    {#{% set html = html ~ segmentQD.saveAndRefreshButton(entity) %}#}
    {{ UI.dropdownSaveButton({'html': html}) }}
{% endblock %}

{% block pageHeader %}
    {% if form.vars.value.id %}
        {% set breadcrumbs = {
            'entity':      form.vars.value,
            'indexPath':   path('oro_marketing_list_index'),
            'indexLabel': 'oro.marketinglist.entity_plural_label'|trans,
            'entityTitle': entity.name
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.marketinglist.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}
{% endblock pageHeader %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set id = 'marketing-list-profile' %}
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
                        form_row(form.name, {'label': 'oro.marketinglist.name.label'}),
                        form_row(form.union, {
                            'label': 'oro.marketinglist.union.label',
                            'tooltip': 'oro.marketinglist.union.tooltip'
                        }),
                        form_row(form.description, {
                            'label': 'oro.marketinglist.description.label',
                            'attr': {
                                'class': 'segment-descr'
                            }
                        })
                    ]
                },
                {
                    'title': '',
                    'data': [
                        form_row(form.entity, {'label': 'oro.marketinglist.entity.label'}),
                        form_row(form.type, {'label': 'oro.marketinglist.type.label'})
                    ] | merge(ownerDataBlock.dataBlocks[0].subblocks[0].data)
                }
            ]
        }]
    %}

    {# TODO: remove this check after full support of manual marketing lists CRM-1878 #}
    {% if not form.vars.value.manual %}
    {% set hasEntity = form.vars.value is not empty and form.vars.value.entity is defined and form.vars.value.entity is not empty %}
    {% set columnsComponentOptions = {
        'formSelector': '#' ~ form.vars.id,
        'entityChoiceSelector': '[data-ftid=oro_marketing_list_form_entity]',
        'fieldsChoiceSelector': '#contact-information-fields-list',
        'contactInformationFields': hasEntity ? get_contact_information_fields_info(form.vars.value.entity) : []
    } %}

    {% set type = 'oro_marketing_list' %}
    {% set columnsDesigner %}
    <div data-page-component-module=\"oromarketinglist/js/app/components/columns-component\"
         data-page-component-options=\"{{ columnsComponentOptions|json_encode }}\"
         class=\"marketing-list-qd-columns\"
    >
        <div id=\"column-information-notice\" class=\"alert alert-info\" role=\"alert\">
            <strong>{{ 'oro.marketinglist.form.importance'|trans }}</strong>:
            {{ 'oro.marketinglist.form.columns_notice'|trans }}
            <div class=\"column-information-fields-notice\">{{ 'oro.marketinglist.form.available_fields_notice'|trans }}:</div>
            <div id=\"contact-information-fields-list\"></div>
        </div>

        {{ QD.query_designer_column_form(
            form.column,
            {'id': type ~ '-column-form'},
            {},
            ['column', 'label', 'sorting', 'action']
        ) }}

        {{ QD.query_designer_column_list(
            {'id': type ~ '-column-list', 'rowId': type ~ '-column-row'},
            ['column', 'label', 'sorting', 'action']
        ) }}
    </div>
    {% endset %}

    {% set dataBlocks = dataBlocks|merge( [{
        'title' : 'oro.segment.form.designer'|trans,
        'content_attr': {'id': type ~ '-designer'},
        'subblocks': [
            {
                'title': 'oro.segment.form.columns'|trans,
                'spanClass': type ~ '-columns responsive-cell',
                'data': [
                    columnsDesigner
                ]
            },
            {
                'title': 'oro.segment.form.filters'|trans,
                'spanClass': type ~  '-filters responsive-cell',
                'data': [
                    segmentQD.query_designer_condition_builder({
                        'id': type ~ '-condition-builder',
                        'currentSegmentId': entity.id|default(null),
                        'page_limit': constant('\\\\Oro\\\\Bundle\\\\SegmentBundle\\\\Entity\\\\Manager\\\\SegmentManager::PER_PAGE'),
                        'metadata': metadata,
                    })
                ]
            },
        ]
    }] ) %}
    {% endif %}

    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': dataBlocks,
        'hiddenData': form_widget(form.definition)
    } %}

    {{ UI.scrollData(id, data, entity, form) }}

    {# TODO: remove this check after full support of manual marketing lists CRM-1878 #}
    {% if not form.vars.value.manual %}
        {{ QD.query_designer_column_chain_template('column-chain-template') }}
        {{ segmentQD.initJsWidgets(type, form, entities, metadata) }}
    {% endif %}
{% endblock content_data %}
", "@OroMarketingList/MarketingList/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/MarketingListBundle/Resources/views/MarketingList/update.html.twig");
    }
}
