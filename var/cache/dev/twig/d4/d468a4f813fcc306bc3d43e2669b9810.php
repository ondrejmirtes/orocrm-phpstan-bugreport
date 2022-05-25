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

/* @OroSegment/Segment/update.html.twig */
class __TwigTemplate_ae8a1364198eb14f5f5b303a6b9ccb66 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSegment/Segment/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSegment/Segment/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSegment/Segment/update.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig"], true);
        // line 3
        $macros["QD"] = $this->macros["QD"] = $this->loadTemplate("@OroQueryDesigner/macros.html.twig", "@OroSegment/Segment/update.html.twig", 3)->unwrap();
        // line 4
        $macros["segmentQD"] = $this->macros["segmentQD"] = $this->loadTemplate("@OroSegment/macros.html.twig", "@OroSegment/Segment/update.html.twig", 4)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%segment.name%" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6)]]);
        // line 7
        $context["formAction"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_segment_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_segment_create")));
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroSegment/Segment/update.html.twig", 1);
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
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSegment/Segment/update.html.twig", 18)->unwrap();
        // line 19
        echo "
    ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("CREATE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20)))) {
            // line 21
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_segment_clone", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)]), "iCss" => "fa-files-o", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.action.clone.button.title"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.action.clone.button.label")]], 21, $context, $this->getSourceContext());
            // line 26
            echo "
    ";
        }
        // line 28
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28)))) {
            // line 29
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_delete_segment", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 30
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_segment_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-segment", "dataId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 34
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34), "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.entity_label")]], 29, $context, $this->getSourceContext());
            // line 36
            echo "

        ";
            // line 38
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 38, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 40
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_segment_index")], 40, $context, $this->getSourceContext());
        echo "
    ";
        // line 41
        $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => "oro_segment_view", "params" => ["id" => "\$id"]]], 41, $context, $this->getSourceContext());
        // line 45
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_segment_create")) {
            // line 46
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 46, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndNewButton", [["route" => "oro_segment_create"]], 46, $context, $this->getSourceContext()));
            // line 49
            echo "    ";
        }
        // line 50
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 50, $this->source); })()))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 50, $this->source); })()), "type", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50) == twig_constant("Oro\\Bundle\\SegmentBundle\\Entity\\SegmentType::TYPE_STATIC")))) {
            // line 51
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 51, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveActionButton", [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and refresh"), "route" => "oro_segment_refresh", "params" => ["id" => twig_get_attribute($this->env, $this->source,             // line 54
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]]], 51, $context, $this->getSourceContext()));
            // line 56
            echo "    ";
        }
        // line 57
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "vars", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_segment_update"))) {
            // line 58
            echo "        ";
            $context["html"] = ((isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 58, $this->source); })()) . twig_call_macro($macros["UI"], "macro_saveAndStayButton", [["route" => "oro_segment_update", "params" => ["id" => "\$id"]]], 58, $context, $this->getSourceContext()));
            // line 62
            echo "    ";
        }
        // line 63
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 63, $this->source); })())]], 63, $context, $this->getSourceContext());
        echo "
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "vars", [], "any", false, false, false, 67), "value", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67)) {
            // line 68
            echo "        ";
            $context["breadcrumbs"] = ["entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 69
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "vars", [], "any", false, false, false, 69), "value", [], "any", false, false, false, 69), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_segment_index"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,             // line 72
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72)];
            // line 74
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 76
            echo "        ";
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.entity_label")]);
            // line 77
            echo "        ";
            $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroSegment/Segment/update.html.twig", 77)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 77, $this->source); })())]));
            // line 78
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 81
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 81));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 82
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSegment/Segment/update.html.twig", 82)->unwrap();
        // line 83
        echo "
    ";
        // line 84
        $context["id"] = "segment-profile";
        // line 85
        echo "    ";
        $context["ownerDataBlock"] = ["dataBlocks" => [0 => ["subblocks" => [0 => ["data" => []]]]]];
        // line 92
        echo "
    ";
        // line 93
        $context["ownerDataBlock"] = $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->processForm($this->env, (isset($context["ownerDataBlock"]) || array_key_exists("ownerDataBlock", $context) ? $context["ownerDataBlock"] : (function () { throw new RuntimeError('Variable "ownerDataBlock" does not exist.', 93, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()));
        // line 94
        echo "    ";
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "class" => "active", "subblocks" => [0 => ["title" => "", "data" => [0 =>         // line 101
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "name", [], "any", false, false, false, 101), 'row', ["label" => "oro.segment.name.label"]), 1 =>         // line 102
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "description", [], "any", false, false, false, 102), 'row', ["label" => "oro.segment.description.label", "attr" => ["class" => "segment-descr"]])]], 1 => ["title" => "", "data" => twig_array_merge([0 =>         // line 113
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "entity", [], "any", false, false, false, 113), 'row', ["label" => "oro.segment.entity.label"]), 1 =>         // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "type", [], "any", false, false, false, 114), 'row', ["label" => "oro.segment.type.label"]), 2 =>         // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "recordsLimit", [], "any", false, false, false, 115), 'row', ["label" => "oro.segment.records_limit.label"])], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 116
(isset($context["ownerDataBlock"]) || array_key_exists("ownerDataBlock", $context) ? $context["ownerDataBlock"] : (function () { throw new RuntimeError('Variable "ownerDataBlock" does not exist.', 116, $this->source); })()), "dataBlocks", [], "any", false, false, false, 116), 0, [], "array", false, false, false, 116), "subblocks", [], "any", false, false, false, 116), 0, [], "array", false, false, false, 116), "data", [], "any", false, false, false, 116))]]]];
        // line 121
        echo "
    ";
        // line 122
        $context["type"] = "oro_segment";
        // line 123
        echo "    ";
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 123, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.form.designer"), "content_attr" => ["id" => (        // line 125
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 125, $this->source); })()) . "-designer")], "subblocks" => [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.form.columns"), "spanClass" => (        // line 129
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 129, $this->source); })()) . "-columns responsive-cell"), "data" => [0 => twig_call_macro($macros["QD"], "macro_query_designer_column_form", [twig_get_attribute($this->env, $this->source,         // line 132
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "column", [], "any", false, false, false, 132), ["id" => (        // line 133
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 133, $this->source); })()) . "-column-form")], [], [0 => "column", 1 => "label", 2 => "sorting", 3 => "action"]], 131, $context, $this->getSourceContext()), 1 => twig_call_macro($macros["QD"], "macro_query_designer_column_list", [["id" => (        // line 138
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 138, $this->source); })()) . "-column-list"), "rowId" => ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 138, $this->source); })()) . "-column-row")], [0 => "column", 1 => "label", 2 => "sorting", 3 => "action"]], 137, $context, $this->getSourceContext())]], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.segment.form.filters"), "spanClass" => (        // line 145
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 145, $this->source); })()) . "-filters responsive-cell"), "data" => [0 => twig_call_macro($macros["segmentQD"], "macro_query_designer_condition_builder", [["id" => (        // line 148
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 148, $this->source); })()) . "-condition-builder"), "currentSegmentId" => ((twig_get_attribute($this->env, $this->source,         // line 149
($context["entity"] ?? null), "id", [], "any", true, true, false, 149)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", [], "any", false, false, false, 149), null)) : (null)), "page_limit" => twig_constant("\\Oro\\Bundle\\SegmentBundle\\Entity\\Manager\\SegmentManager::PER_PAGE"), "metadata" =>         // line 151
(isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 151, $this->source); })()), "fieldConditionOptions" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 152
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "vars", [], "any", false, false, false, 152), "field_condition_options", [], "any", false, false, false, 152)]], 147, $context, $this->getSourceContext())]]]]]);
        // line 158
        echo "
    ";
        // line 159
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 159, $this->source); })()), $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderAdditionalData($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional")));
        // line 160
        echo "
    ";
        // line 161
        $context["data"] = ["formErrors" => ((        // line 162
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 163
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 163, $this->source); })()), "hiddenData" =>         // line 164
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "definition", [], "any", false, false, false, 164), 'widget')];
        // line 166
        echo "
    ";
        // line 167
        echo twig_call_macro($macros["UI"], "macro_scrollData", [(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 167, $this->source); })()), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 167, $this->source); })()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 167, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })())], 167, $context, $this->getSourceContext());
        echo "

    ";
        // line 169
        echo twig_call_macro($macros["QD"], "macro_query_designer_column_chain_template", ["column-chain-template"], 169, $context, $this->getSourceContext());
        echo "
    ";
        // line 170
        echo twig_call_macro($macros["segmentQD"], "macro_initJsWidgets", [(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 170, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), (isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 170, $this->source); })()), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 170, $this->source); })())], 170, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroSegment/Segment/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 170,  361 => 169,  356 => 167,  353 => 166,  351 => 164,  350 => 163,  349 => 162,  348 => 161,  345 => 160,  343 => 159,  340 => 158,  338 => 152,  337 => 151,  336 => 149,  335 => 148,  334 => 145,  333 => 138,  332 => 133,  331 => 132,  330 => 129,  329 => 125,  327 => 123,  325 => 122,  322 => 121,  320 => 116,  319 => 115,  318 => 114,  317 => 113,  316 => 102,  315 => 101,  313 => 94,  311 => 93,  308 => 92,  305 => 85,  303 => 84,  300 => 83,  297 => 82,  284 => 81,  270 => 78,  267 => 77,  264 => 76,  258 => 74,  256 => 72,  255 => 69,  253 => 68,  250 => 67,  237 => 66,  221 => 63,  218 => 62,  215 => 58,  212 => 57,  209 => 56,  207 => 54,  205 => 51,  202 => 50,  199 => 49,  196 => 46,  193 => 45,  191 => 41,  186 => 40,  181 => 38,  177 => 36,  175 => 34,  174 => 30,  172 => 29,  169 => 28,  165 => 26,  163 => 22,  161 => 21,  159 => 20,  156 => 19,  153 => 18,  140 => 17,  124 => 13,  99 => 12,  93 => 10,  80 => 9,  66 => 1,  64 => 7,  62 => 6,  59 => 4,  57 => 3,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% form_theme form with ['@OroForm/Form/fields.html.twig'] %}
{% import '@OroQueryDesigner/macros.html.twig' as QD %}
{% import '@OroSegment/macros.html.twig' as segmentQD %}

{% oro_title_set({params : {\"%segment.name%\": entity.name} }) %}
{% set formAction = form.vars.value.id ? path('oro_segment_update', { 'id': form.vars.value.id }) : path('oro_segment_create')  %}

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
            'path' : path('oro_segment_clone', {'id': form.vars.value.id}),
            'iCss': 'fa-files-o',
            'title': 'oro.segment.action.clone.button.title'|trans,
            'label': 'oro.segment.action.clone.button.label'|trans,
        }) }}
    {% endif %}
    {% if form.vars.value.id and is_granted('DELETE', form.vars.value) %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_api_delete_segment', {'id': form.vars.value.id}),
            'dataRedirect': path('oro_segment_index'),
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-segment',
            'dataId': form.vars.value.id,
            'entity_label': 'oro.segment.entity_label'|trans
        }) }}

        {{ UI.buttonSeparator() }}
    {% endif %}
    {{ UI.cancelButton(path('oro_segment_index')) }}
    {% set html = UI.saveAndCloseButton({
        'route': 'oro_segment_view',
        'params': {id: '\$id'}
    }) %}
    {% if is_granted('oro_segment_create') %}
        {% set html = html ~ UI.saveAndNewButton({
            'route': 'oro_segment_create'
        }) %}
    {% endif %}
    {% if entity.id and is_granted('EDIT', entity) and entity.type.name == constant('Oro\\\\Bundle\\\\SegmentBundle\\\\Entity\\\\SegmentType::TYPE_STATIC') %}
        {% set html = html ~ UI.saveActionButton({
            'label': 'Save and refresh'|trans,
            'route': 'oro_segment_refresh',
            'params': {id: entity.id}
        }) %}
    {% endif %}
    {% if form.vars.value.id or is_granted('oro_segment_update') %}
        {% set html = html ~ UI.saveAndStayButton({
            'route': 'oro_segment_update',
            'params': {id: '\$id'}
        }) %}
    {% endif %}
    {{ UI.dropdownSaveButton({'html': html}) }}
{% endblock %}

{% block pageHeader %}
    {% if form.vars.value.id %}
        {% set breadcrumbs = {
            'entity':      form.vars.value,
            'indexPath':   path('oro_segment_index'),
            'indexLabel': 'oro.segment.entity_plural_label'|trans,
            'entityTitle': entity.name
        } %}
        {{ parent() }}
    {% else %}
        {% set title = 'oro.ui.create_entity'|trans({'%entityName%': 'oro.segment.entity_label'|trans}) %}
        {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
    {% endif %}
{% endblock pageHeader %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set id = 'segment-profile' %}
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
                        form_row(form.name, {'label': 'oro.segment.name.label'}),
                        form_row(form.description, {
                            'label': 'oro.segment.description.label',
                            'attr': {
                                'class': 'segment-descr'
                            }
                        })
                    ]
                },
                {
                    'title': '',
                    'data': [
                        form_row(form.entity, {'label': 'oro.segment.entity.label'}),
                        form_row(form.type, {'label': 'oro.segment.type.label'}),
                        form_row(form.recordsLimit, {'label': 'oro.segment.records_limit.label'})
                    ] | merge(ownerDataBlock.dataBlocks[0].subblocks[0].data)
                }
            ]
        }]
    %}

    {% set type = 'oro_segment' %}
    {% set dataBlocks = dataBlocks|merge( [{
        'title' : 'oro.segment.form.designer'|trans,
        'content_attr': {'id': type ~ '-designer'},
        'subblocks': [
            {
                'title': 'oro.segment.form.columns'|trans,
                'spanClass': type ~ '-columns responsive-cell',
                'data': [
                    QD.query_designer_column_form(
                        form.column,
                        {'id': type ~ '-column-form'},
                        {},
                        ['column', 'label', 'sorting', 'action']
                    ),
                    QD.query_designer_column_list(
                        {'id': type ~ '-column-list', 'rowId': type ~ '-column-row'},
                        ['column', 'label', 'sorting', 'action']
                    ),
                ]
            },
            {
                'title': 'oro.segment.form.filters'|trans,
                'spanClass': type ~ '-filters responsive-cell',
                'data': [
                    segmentQD.query_designer_condition_builder({
                        'id': type ~ '-condition-builder',
                        'currentSegmentId': entity.id|default(null),
                        'page_limit': constant('\\\\Oro\\\\Bundle\\\\SegmentBundle\\\\Entity\\\\Manager\\\\SegmentManager::PER_PAGE'),
                        'metadata': metadata,
                        'fieldConditionOptions': form.vars.field_condition_options
                    })
                ]
            },
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
", "@OroSegment/Segment/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/SegmentBundle/Resources/views/Segment/update.html.twig");
    }
}
