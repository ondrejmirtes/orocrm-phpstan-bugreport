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

/* @OroSales/B2bCustomer/update.html.twig */
class __TwigTemplate_cc1126aea23992c7b752a870eb3898c5 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSales/B2bCustomer/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/B2bCustomer/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/B2bCustomer/update.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig"], true);

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%b2bcustomer.name%" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4)]]);
        // line 6
        $context["formAction"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_sales_b2bcustomer_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_sales_b2bcustomer_create")));
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroSales/B2bCustomer/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_head_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("head_script", $this->getTemplateName(), 8));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_script"));

        // line 9
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stylesheets", $this->getTemplateName(), 11));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'stylesheet');
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 16
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 16));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 17
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSales/B2bCustomer/update.html.twig", 17)->unwrap();
        // line 18
        echo "
    ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19)))) {
            // line 20
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 20, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 22
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_sales_b2bcustomer_index")], 22, $context, $this->getSourceContext());
        echo "
    ";
        // line 23
        $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_sales_b2bcustomer_view", "params" => ["id" => "\$id"]]], 23, $context, $this->getSourceContext());
        // line 27
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_sales_b2bcustomer_create")) {
            // line 28
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 28, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_sales_b2bcustomer_create"]], 28, $context, $this->getSourceContext()));
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_sales_b2bcustomer_update"))) {
            // line 33
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 33, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_sales_b2bcustomer_update", "params" => ["id" => "\$id"]]], 33, $context, $this->getSourceContext()));
            // line 37
            echo "    ";
        }
        // line 38
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 38, $this->source); })())]], 38, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 41
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 41));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 42
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42)) {
            // line 43
            echo "        ";
            $context["breadcrumbs"] = ["entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 44
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_sales_b2bcustomer_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,             // line 47
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47)];
            // line 49
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.entity_label")]);
            // line 52
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroSales/B2bCustomer/update.html.twig", 52)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 52, $this->source); })())]));
            // line 53
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 56
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 56));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 57
        echo "    ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 60
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 60));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 61
        echo "    ";
        $context["id"] = "b2bcustomer-profile";
        // line 62
        echo "
    ";
        // line 63
        $context["formFields"] = [];
        // line 64
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "owner", [], "any", true, true, false, 64)) {
            // line 65
            echo "        ";
            $context["formFields"] = twig_array_merge((isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 65, $this->source); })()), [0 => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "owner", [], "any", false, false, false, 65), 'row')]);
            // line 66
            echo "    ";
        }
        // line 67
        echo "
    ";
        // line 68
        $context["formFields"] = twig_array_merge((isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 68, $this->source); })()), [0 =>         // line 69
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "name", [], "any", false, false, false, 69), 'row'), 1 =>         // line 70
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "dataChannel", [], "any", false, false, false, 70), 'row'), 2 =>         // line 71
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "contact", [], "any", false, false, false, 71), 'row'), 3 =>         // line 72
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "phones", [], "any", false, false, false, 72), 'row'), 4 =>         // line 73
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "emails", [], "any", false, false, false, 73), 'row')]);
        // line 75
        echo "
    ";
        // line 76
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "subblocks" => [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.widgets.b2bcustomer_information"), "data" =>         // line 80
(isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 80, $this->source); })())]]]];
        // line 83
        echo "
    ";
        // line 84
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 84, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Addresses"), "subblocks" => [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.billing_address.label"), "data" => [0 =>         // line 89
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "billingAddress", [], "any", false, false, false, 89), 'widget')]], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.b2bcustomer.shipping_address.label"), "data" => [0 =>         // line 93
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "shippingAddress", [], "any", false, false, false, 93), 'widget')]]]]]);
        // line 97
        echo "
    ";
        // line 98
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 98, $this->source); })()), $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderAdditionalData($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional")));
        // line 99
        echo "
    ";
        // line 100
        $context["data"] = ["formErrors" => ((        // line 101
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 102
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 102, $this->source); })())];
        // line 104
        echo "    <div class=\"responsive-form-inner\">
        ";
        // line 105
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroSales/B2bCustomer/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 105,  346 => 104,  344 => 102,  343 => 101,  342 => 100,  339 => 99,  337 => 98,  334 => 97,  332 => 93,  331 => 89,  330 => 84,  327 => 83,  325 => 80,  324 => 76,  321 => 75,  319 => 73,  318 => 72,  317 => 71,  316 => 70,  315 => 69,  314 => 68,  311 => 67,  308 => 66,  305 => 65,  302 => 64,  300 => 63,  297 => 62,  294 => 61,  281 => 60,  265 => 57,  252 => 56,  238 => 53,  235 => 52,  232 => 51,  226 => 49,  224 => 47,  223 => 44,  221 => 43,  218 => 42,  205 => 41,  189 => 38,  186 => 37,  183 => 33,  180 => 32,  177 => 31,  174 => 28,  171 => 27,  169 => 23,  164 => 22,  158 => 20,  156 => 19,  153 => 18,  150 => 17,  137 => 16,  121 => 12,  96 => 11,  90 => 9,  77 => 8,  63 => 1,  61 => 6,  59 => 4,  56 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% form_theme form with ['@OroForm/Form/fields.html.twig'] %}

{% oro_title_set({params : {\"%b2bcustomer.name%\": entity.name} }) %}

{% set formAction = form.vars.value.id ? path('oro_sales_b2bcustomer_update', { 'id': form.vars.value.id }) : path('oro_sales_b2bcustomer_create')  %}

{% block head_script %}
    {{ parent() }}

    {% block stylesheets %}
        {{ form_stylesheet(form) }}
    {% endblock %}
{% endblock %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if form.vars.value.id and is_granted('DELETE', form.vars.value) %}
        {{ UI.buttonSeparator() }}
    {% endif %}
    {{ UI.cancelButton(path('oro_sales_b2bcustomer_index')) }}
    {% set html = UI.saveAndCloseButton({
        'route': 'oro_sales_b2bcustomer_view',
        'params': {'id': '\$id'}
    }) %}
    {% if is_granted('oro_sales_b2bcustomer_create') %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_sales_b2bcustomer_create'
        }) %}
    {% endif %}
    {% if form.vars.value.id or is_granted('oro_sales_b2bcustomer_update') %}
        {% set html = html ~ UI.saveAndStayButton({
            'route': 'oro_sales_b2bcustomer_update',
            'params': {'id': '\$id'}
        }) %}
    {% endif %}
    {{ UI.dropdownSaveButton({'html': html}) }}
{% endblock %}

{% block pageHeader %}
    {% if form.vars.value.id %}
        {% set breadcrumbs = {
            'entity':      form.vars.value,
            'indexPath':   path('oro_sales_b2bcustomer_index'),
            'indexLabel': 'oro.sales.b2bcustomer.entity_plural_label'|trans,
            'entityTitle': entity.name
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.sales.b2bcustomer.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}
{% endblock pageHeader %}

{% block stats %}
    {{ parent() }}
{% endblock stats %}

{% block content_data %}
    {% set id = 'b2bcustomer-profile' %}

    {% set formFields = [] %}
    {% if form.owner is defined %}
        {% set formFields = formFields|merge([form_row(form.owner)]) %}
    {% endif %}

    {% set formFields = formFields|merge([
        form_row(form.name),
        form_row(form.dataChannel),
        form_row(form.contact),
        form_row(form.phones),
        form_row(form.emails)
    ]) %}

    {% set dataBlocks = [{
        'title': 'General'|trans,
        'subblocks': [{
            'title': 'oro.sales.widgets.b2bcustomer_information'|trans,
            'data': formFields
        }]
    }] %}

    {% set dataBlocks = dataBlocks|merge( [{
        'title' : 'Addresses'|trans,
        'subblocks': [
        {
            'title': 'oro.sales.b2bcustomer.billing_address.label'|trans,
            'data': [form_widget(form.billingAddress)]
        },
        {
            'title': 'oro.sales.b2bcustomer.shipping_address.label'|trans,
            'data': [form_widget(form.shippingAddress)]
        },
        ]
    }] ) %}

    {% set dataBlocks = dataBlocks|merge(oro_form_additional_data(form, 'Additional'|trans)) %}

    {% set data = {
        'formErrors': form_errors(form)? form_errors(form) : null,
        'dataBlocks': dataBlocks,
    } %}
    <div class=\"responsive-form-inner\">
        {{ parent() }}
    </div>
{% endblock content_data %}
", "@OroSales/B2bCustomer/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/SalesBundle/Resources/views/B2bCustomer/update.html.twig");
    }
}
